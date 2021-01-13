<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Article;
use App\Models\Products;
use App\Models\District;
use App\Models\Province;
use App\Models\Slide;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index() {
        
        
            
            $articles = Article::limit(6)->orderBy('id','DESC')->SELECT(DB::raw('*, DATEDIFF(CURDATE(), created_at)*24 AS hours'))->get();

            $i = 0;
            $j = 0;
            $k = 0;
            $l = 0;

            $districs = District::all();
            $provinces = Province::all();
            $date = date("d/m/Y");
    
            $banners = Slide::where('type','banner')->get();
            $sidebars = Slide::where('type','sidebar')->get();
    
            $products = Products::with('image')->limit(8)->orderBy('id','DESC')->get();
            $provinceCounts = Province::orderBy('count_posts', 'desc')->limit(5)->get();
            // dd($provinceCounts);

            return view('pages.index',compact('articles','i','j','k','l','products','districs','provinces','banners', 'sidebars', 'provinceCounts','date'));
                    
    }

    public function welcome()
    {   
        return view('home');
    }

    public function search()
    {
        
        return view('pages.index',compact('articles','i','j','k','l','products','districs','provinces','banners', 'sidebars', 'province1', 'province2', 'province3'));
    }

    public function changeLanguage($language)
    {   
        // dd($language);
        Session::put('website_language', $language);
        return redirect()->back();
    }

}
