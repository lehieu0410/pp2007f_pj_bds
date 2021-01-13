<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Province;
use App\Models\District;
use App\Models\Menu_category;
use App\Models\Post_type;
use App\Models\Ward;
use App\Models\Products;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;
use App\Repositories\User\UserRepositoryInterface;
use App\Repositories\HistoryAccount\HistoryAccountRepositoryInterface;

class UserController extends Controller
{   
    protected $userRepo;
    protected $historyAccount;

    public function __construct(UserRepositoryInterface $userRepo, HistoryAccountRepositoryInterface $historyAccount) {
        $this->userRepo = $userRepo;
        $this->historyAccount = $historyAccount;
    }

    public function index() {
        // $users = User::with('roles')->paginate(100);
        
        $userAlls = $this->userRepo->getUser();
        $users = $this->userRepo->getUser();
        $userAdmins = $this->userRepo->getUserAdmin();
        $userMembers = $this->userRepo->getUserMember();

        $user = Auth::user();
        return view ('admin.user.index', compact('users','user','userAdmins','userMembers','userAlls'));
    }

    public function indexAdmin() {
        // $users = User::with('roles')->paginate(100);
        $userAlls = $this->userRepo->getUser();
        $userAdmins = $this->userRepo->getUserAdmin();
        $userMembers = $this->userRepo->getUserMember();
        $users= $this->userRepo->getUserAdmin();
        $user = Auth::user();
        return view ('admin.user.index', compact('user','users','userAdmins','userMembers','userAlls'));
    }

    public function indexMember1() {
        // $users = User::with('roles')->paginate(100);
        $userAlls = $this->userRepo->getUser();
        $userAdmins = $this->userRepo->getUserAdmin();
        $userMembers = $this->userRepo->getUserMember();
        $users = $this->userRepo->getUserMember();
        $user = Auth::user();
        return view ('admin.user.index', compact('user','users','userAdmins','userMembers','userAlls'));
    }

    public function create() {

        $provinces = Province::all();
        return view ('admin.user.create',compact('provinces'));
    }

    public function ajaxDistrict(Request $request) {

        $districts = District::where('parent_code',$request->get('parent_code'))->get();

        echo view ('admin.user.districtajax',compact('districts'));
        exit;
    }

    public function ajaxWard(Request $request) {
        $wards = Ward::where('parent_code',$request->get('parent_code'))->get();

        echo view ('admin.user.wardajax',compact('wards'));
        exit;
    }

    
    public function store(Request $request) {
        $user = new User();
        // $disk = Storage::disk('local');
        // dd($path);
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = bcrypt($request->inputPassword);
        // dd(bcrypt($request->inputPassword));
        $user->fullname = $request->fullname;
        $user->dateofbirth = date('Y-m-d',strtotime($request->dateofbirth));
        $user->address = $request->address;
        $user->phonenumber = $request->phonenumber;
        $user->sex = $request->sex;

        if ($request->hasFile('avatar')) {
            $file = $request->file('avatar');
            $name = $file->getClientOriginalName();
            
            $nameAva = time()."_".$name;
            
            $file->move(config('app.link_users'), $nameAva);
            $user->avatar = $nameAva;
        }
        else {
            $user->avatar = "";
        }
        
        $user->save();
        return redirect()->route('userIndex');
    }

    public function edit($id) {
        $provinces = Province::all();
        $districts = District::all();

        $user = $this->userRepo->find($id);
        // dd($user);
        return view ('admin.user.edit',compact('user','provinces','districts'));
    }

    public function update(Request $request,$id) {
        $user = $this->userRepo->update($id, $request);
        return redirect()->route('userIndex')->with('mess','You are updated success');
    }

    public function delete(Request $request) {

        $user = $this->userRepo->delete($request->did);
    }

    public function post() {

        $post = Products::all();
        $provinces = Province::all();
        $districts = District::all();
        $wards = Ward::all();
        $categories = Menu_category::all();
        $post_types = Post_type::all();
        return view ('admin.user.post',compact('provinces','districts', 'wards', 'post','categories', 'post_types'));
    }

    public function createUser() {

        return view ('auth.regis2');
    }

    public function storeUser(Request $request) {
        $user = $this->userRepo->create($request);

        return redirect('/login');
    }
    public function indexMember() {
        $user = Auth::user();
        return view ('member.index',compact('user'));
    }

    public function dashIndex() {
        $user = Auth::user();
        $products = DB::table('products')->orderBy('id','DESC')->limit(5)->get();
        $year = Date('Y');
        $month = Date('m');
        $item[0] = ['month','Sales', 'Revenues'];
        $all_item = [];
        for ($i=1; $i<= $month; $i++) {

            $sales = (int)(DB::table('products')->whereYear('created_at', $year)->whereMonth('created_at', $i)->get()->count());
            $reve = (int)DB::table('products')->whereYear('created_at', $year)->whereMonth('created_at', $i)->sum('post_price')/100000;
            $item[$i] = [$i.'/'.$year, $sales, $reve];

        }
        $item = json_encode($item);
        // dd($item);

        $users = User::onlyTrashed()->get();
        
        return view ('admin.dashboard.index',compact('user','products','users','sales','reve','item','year'));
    }

    public function dashIndexAjax(Request $request) {
        $user = Auth::user();
        $year1 = $request->year;
        $year = Date('Y');
        if($year == $year1) {
            return redirect()->route('dash');
        }
        elseif(DB::table('products')->whereYear(('created_at'), $year1)->get()->count()==0)
        {
            return redirect()->route('dash')->with('mess','No data Number');
        } else {

        
        $item[0] = ['month','Sales', 'Revenues'];
        $products = DB::table('products')->orderBy('created_at','DESC')->whereYear(('created_at'), $year1)->get()->toArray();
        $productNews=[];
        foreach ($products as $product)
            {   
                $monthp = strtotime($product->created_at);
                $product->created_at = date('m', $monthp);
                $productNews[$product->created_at][] = $product;
            };
            sort($productNews);
            for ($i=1; $i<= 12; $i++) {

                $sales = (int)count($productNews[$i-1]);
                $reve =0;
                foreach ($productNews[$i-1] as $productNew)
                {
                    $reve += ($reve + $productNew->post_price)/100000;
                };
                
                $item[$i] = [$i.'/'.$year1, $sales, $reve];
    
            }
     


        $item = json_encode($item);

        

        $users = User::onlyTrashed()->get();
        
        return view ('admin.dashboard.index',compact('user','users','sales','reve','item','year'));
        }
    }

    public function memberEditUser($id) {
        $provinces = Province::all();
        $districts = District::all();
        $user = User::findOrFail($id);
        if($user->id != Auth::id()) {
            return redirect()->back()->with('mess','You cant edit user');
        }
        // dd($user);
        return view ('member.edit',compact('user','provinces','districts'));
    }

    public function memberUpdateUser(Request $request,$id) {
        $user = User::findOrFail($id);

        if ($request->hasFile('avatar1')) {
            $file = $request->file('avatar1');
            $name = $file->getClientOriginalName();
            $nameAva = time()."_".$name;
            $file->move(config('app.link_users'), $nameAva);
            $user->avatar = $nameAva;
        }
        else {
            $user->avatar = "";
        }
        $user->username = $request->username;
        $user->email = $request->email;
        $user->fullname = $request->fullname;
        $user->dateofbirth = date('Y-m-d',strtotime($request->dateofbirth));
        if($request->ward != 0) {
            $user->address = Ward::where('code',$request->ward)->first()->path_with_type;
        }
        $user->phonenumber = $request->phonenumber;
        $user->sex = $request->sex;
        $user->save();
        $users = User::all();
        return redirect()->route('memberIndex')->with('mess','You are updated success');
    }

    public function viewTrashed() {
        $users = User::onlyTrashed()->get();

        $user = Auth::user();
        return view ('admin.user.trashed', compact('users','user'));
    }

    public function restoreTrashed($id) {
        User::withTrashed()->where('id', $id)->restore();
        return redirect()->back()->with('mess', 'User is restored');
    }

    public function transactionHistory() {
        $transactionHistory = $this->historyAccount->getAll();

        return view ( 'admin.user.history',compact('transactionHistory'));

    }
    

}
