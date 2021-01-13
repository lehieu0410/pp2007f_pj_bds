<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Broker;
use App\Models\Business;
use App\Models\Province;
use App\Models\Slide;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;

class DanhBaController extends Controller
{
    //
    public function index(Request $request) {
        // Cache
        
        // if(cache::has('danhba_cache')) {
        //     return Cache::get('danhba_cache');
        // }
        // else{
        // $brokers = Broker::limit(15)->get();
        // $sidebars = Slide::where('type','sidebar')->get();
        // $cache_danhba = view("pages.danhba.nhamoigioi", compact('brokers', 'sidebars'))->render();
        // Cache::put('danhba_cache', $cache_danhba, 10000);
        // return $cache_danhba;
        // }
        
        //Không Cache

        //Filter theo type
        if(!isset($_GET['type']) && !isset($_GET['code'])){
            $brokers = Broker::Paginate(10);
            $provinces = DB::table('brokers')
                ->select(DB::raw('count(*) as count,provinces_code'))
                ->groupBy('provinces_code')->get();
            $pro = Province::all();
                
            $sidebars = Slide::where('type','sidebar')->get();
            
            return view ('pages.danhba.nhamoigioi',compact('brokers','sidebars','provinces','pro'));
            
        } elseif (isset($_GET['type']) && !isset($_GET['code'])){

            $brokers = Broker::where('type', $_GET['type'])->Paginate(10);
            $provinces = DB::table('brokers')
                ->select(DB::raw('count(*) as count,provinces_code'))
                ->groupBy('provinces_code')->get();
            $pro = Province::all();
            $sidebars = Slide::where('type','sidebar')->get();
            if ($request->ajax()) {
                echo view('pages.danhba.resuitl', compact('brokers','sidebars','provinces'));
            }
            }

        elseif (!isset($_GET['type']) && isset($_GET['code'])){
            $brokers = Broker::where('provinces_code', $_GET['code'])->Paginate(10);
            $provinces = DB::table('brokers')
                ->select(DB::raw('count(*) as count,provinces_code'))
                ->groupBy('provinces_code')->get();
            $pro = Province::all();
            $sidebars = Slide::where('type','sidebar')->get();
            if ($request->ajax()) {
                echo view('pages.danhba.resuitl', compact('brokers','sidebars','provinces'));
            }
        }
         else {
            $brokers = Broker::where('type', $_GET['type'])->where('province_code', $_GET['code'])->Paginate(10);
            $provinces = DB::table('brokers')
                ->select(DB::raw('count(*) as count,provinces_code'))
                ->groupBy('provinces_code')->get();
            $pro = Province::all();
            $sidebars = Slide::where('type','sidebar')->get();
            if ($request->ajax()) {
                echo view('pages.danhba.resuitl', compact('brokers','sidebars','provinces'));
        
    }
}
        }

    
    // public function index1() {
    //     $business = Business::limit(18)->get();
    //     return view ('pages.danhba.doanhnghiep', compact('business'));
    // }

    // public function getSearch(Request $req) {
    //     $provinces = Province::get()->sortByDesc('count_companies');
    //     $brokers = Broker::where('name', 'like', '%'.$req->key.'%')
    //                         ->orwhere('address', 'like', '%'.$req->key.'%')->Paginate(10);
        
    //     $sidebars = Slide::where('name','AVPE')->get();
    //     return view ('pages.danhba.nhamoigioi', compact('brokers', 'sidebars', 'provinces'));
    // }

    public function singlepost1($id) {
        $brokers = Broker::where('id', '=', $id)->get();
        $provinces = Province::where('id', '=', $id)->get();
        $sidebars = Slide::where('type','sidebar')->get();
        return view ('pages.danhba.singlepost1', compact('brokers','provinces', 'sidebars'));
    }

    // public function singlepost2($id) {
    //     $business = Business::where('id', '=', $id)->get();
    //     return view ('pages.danhba.singlepost2', compact('business'));
    // }


    // public function getBrokerAjax (Request $request) {
    //     $broker = Broker::where('type',$request->get('type'))->paginate(10);
    //     // dd($broker);
    //     echo view ('pages.danhba.resuitl', compact('broker'));
    //     exit;

    // }

    public function searchProvince($id) {
        
        $brokers = Broker::where('provinces_code', $id)->Paginate(10);
        $provinces = DB::table('brokers')
            ->select(DB::raw('count(*) as count,provinces_code'))
            ->groupBy('provinces_code')->get();
            // dd($provinces);
        $pro = Province::all();
            
        $sidebars = Slide::where('type','sidebar')->get();
        // $count = Broker::where('provinces_code', '=', 1);
        
        return view ('pages.danhba.nhamoigioi',compact('brokers','sidebars','provinces','pro'));



    }

    public function searchProvinceAjax(Request $request) {
        if(isset($request->code)){
            $brokers = Broker::where('provinces_code', $request->code)->where('type',$request->type)->paginate(10);
            echo view ('pages.danhba.resuitl', compact('brokers'));
            } else {
            $brokers = Broker::where('type',$request->type)->paginate(10);
            echo view ('pages.danhba.resuitl', compact('brokers'));
            }
    }

    public function fullTextSearch (Request $request) {
        $provinces = DB::table('brokers')
            ->select(DB::raw('count(*) as count,provinces_code'))
            ->groupBy('provinces_code')->get();
        $pro = Province::all();
        $sidebars = Slide::where('name','AVPE')->get();
        $brokers = Broker::search($request->key)->paginate(10);
        return view ('pages.danhba.nhamoigioi', compact('brokers', 'sidebars', 'provinces', 'pro'));
        

    }
    
}
