<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Broker;
use App\Models\District;
use App\Models\Image;
use App\Models\Products;
use App\Models\Province;
use App\Models\Ward;
use App\Repositories\ImageRepository;
use App\Repositories\ImageRepositoryInterface;
use App\Repositories\NhaDatBanRepositoryInterface;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Repositories\ProductRepositoryInterface;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Cache;

class NhaDatBanController extends Controller
{
    //
    protected $productRepository;

    protected $imageRepository;

    public function __construct(ProductRepositoryInterface $productRepository, ImageRepositoryInterface $imageRepository, NhaDatBanRepositoryInterface $productRepository123)
    {
        $this->productRepository = $productRepository;

        $this->imageRepository = $imageRepository;
    }
    public function testRepo()
    {
        $products = $this->productRepository->getProducts();
        return view('RepositoryTest.nhadatban', compact('products'));
    }

    public function index(Request $request)
    {
        $province = isset($_GET['province']) ? $_GET['province'] : '';
        $condition_province ='';
        if($province != '') {
        $condition_province = 'AND products.province_code =' . ' ' . $province . ' ' . '';
        }

        $district = isset($_GET['district']) ? $_GET['district'] : '';
        $condition_district ='';
        if($district != '') {
        $condition_district = 'AND products.district_code =' . ' ' . $district . ' ' . '';
        }

        $price = isset($_GET['price']) ? $_GET['price'] : '';
        $condition_price = '';
        if($price != '') {
            $price_min = substr($_GET['price'], 0, 1);
            $price_max = substr($_GET['price'], 1);
            $condition_price = 'AND price BETWEEN' . ' ' . $price_min . ' ' . 'AND' . ' ' . $price_max . '' ;
        }

        $area = isset($_GET['area']) ? $_GET['area'] : '';
        $condition_area = '';
        if($area != '') {
            $area_min = substr($_GET['area'], 0, 2);
            $area_max = substr($_GET['area'], 2);
            $condition_area = 'AND area BETWEEN' . ' ' . $area_min . ' ' . 'AND' . ' ' . $area_max ;
        } 
        $provinces = DB::select(DB::raw('SELECT * FROM `provinces` ORDER BY `count_posts`  DESC'));
            $result = DB::select(DB::raw('SELECT products.*, provinces.name, provinces.slug, provinces.name_with_type as p_name, 
            provinces.code, provinces.count_posts, districts.name_with_type as d_name,wards.name_with_type, images.link 
                FROM products
                INNER JOIN provinces ON provinces.code = products.province_code
                INNER JOIN districts ON districts.code = products.district_code
                INNER JOIN wards ON wards.code = products.ward_code
                INNER JOIN images ON images.products_id = products.id
                WHERE menu_category_id IN (1,2,3) AND status = 1 AND deleted_at is null 
                AND CURRENT_DATE() BETWEEN started_at AND expired_at 
                ' . $condition_province . '
                ' . $condition_district . '
                ' . $condition_price . '
                ' . $condition_area . '
                GROUP BY products.id  
                ORDER BY post_type_id DESC, products.created_at DESC'));
            $districts = District::where('parent_code', $province)->get();
            $province_name = Province::where('code', $province)->get('name');
            $count_posts = count($result);
            return view("pages.nhadatban.index", compact('districts','result', 'provinces', 'count_posts', 'province_name'));
        }

    public function nhaDatBanSinglePost($id)
    {
        $key = 'singlePost';
        $key .= $id;
        if (Cache::has($id)) {
            return (Cache::get($id));
        } else {
            $provinces = DB::select(DB::raw('SELECT * FROM `provinces` ORDER BY `count_posts`  DESC'));
            $products = $this->productRepository->singlePost($id);
            $products_area = $this->productRepository->relatedPost($id);
            $images = $this->imageRepository->relatedImage($id);
            $images_area = $this->imageRepository->getAll();
            $brokers = Broker::paginate(10);
            $news = Article::paginate(10);
            $cache_view = view("pages.nhadatban.single_post", compact('news', 'brokers','products', 'images_area', 'images', 'products_area', 'provinces'))->render();
            Cache::put($key, $cache_view, 10000);
            return $cache_view;
        }
    }

    public function banCanHoChungCu()
    {
        $products = DB::table('products')
            ->join('images', 'images.products_id', '=', 'products.id')
            ->join('menu_categories', 'menu_categories.id', '=', 'products.menu_category_id')
            ->join('wards', 'wards.id', '=', 'products.wards_id')
            ->select('products.*', 'images.link', 'menu_categories.name', 'wards.path_with_type')
            ->where('menu_categories.name', '=', "Bán căn hộ chung cư")
            ->get();
        return view("pages.nhadatban.index", compact('products'));
    }

    public function banNhaRieng()
    {
        $products = DB::table('products')
            ->join('images', 'images.products_id', '=', 'products.id')
            ->join('menu_categories', 'menu_categories.id', '=', 'products.menu_category_id')
            ->join('wards', 'wards.id', '=', 'products.wards_id')
            ->select('products.*', 'images.link', 'menu_categories.name', 'wards.path_with_type')
            ->Where('menu_categories.name', '=', "Bán nhà riêng")
            ->get();
        return view("pages.nhadatban.index", compact('products'));
    }

    public function banNhaMatPho()
    {
        $products = DB::table('products')
            ->join('images', 'images.products_id', '=', 'products.id')
            ->join('menu_categories', 'menu_categories.id', '=', 'products.menu_category_id')
            ->join('wards', 'wards.id', '=', 'products.wards_id')
            ->select('products.*', 'images.link', 'menu_categories.name', 'wards.path_with_type')
            ->Where('menu_categories.name', '=', "Bán nhà mặt phố")
            ->get();
        return view("pages.nhadatban.index", compact('products'));
    }

    public function district($slug)
    {
        return view("pages.nhadatban.index");
    }

    public function getDistrict(Request $request)
    {

        $districts = District::where('parent_code', $request->get('parent_code'))->get();

        echo view('pages.nhadatban.ajaxDistrict', compact('districts'));
        exit;
    }
}
