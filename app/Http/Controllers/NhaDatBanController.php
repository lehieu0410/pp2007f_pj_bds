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
        //viet lai 14 TH logic
        //ko ton tai 4 GET
        if (!isset($_GET['province']) && !isset($_GET['district']) && !isset($_GET['price']) && !isset($_GET['area'])) {
            $provinces = DB::select(DB::raw('SELECT * FROM `provinces` ORDER BY `count_posts`  DESC'));
            $result = DB::select(DB::raw('SELECT products.*, provinces.name, provinces.slug, provinces.name_with_type as p_name, provinces.code, provinces.count_posts, districts.name_with_type as d_name,wards.name_with_type, images.link 
                            FROM products
                            INNER JOIN provinces ON provinces.code = products.province_code
                            INNER JOIN districts ON districts.code = products.district_code
                            INNER JOIN wards ON wards.code = products.ward_code
                            INNER JOIN images ON images.products_id = products.id
                            WHERE menu_category_id IN (1,2,3) AND status = 1 AND deleted_at is null AND CURRENT_DATE() BETWEEN started_at AND expired_at  
                            GROUP BY products.id  
                            ORDER BY post_type_id DESC, products.created_at DESC'));
            $count_posts = count($result);
            return view("pages.nhadatban.index", compact('result', 'provinces', 'count_posts'));
        }
        // ton tai GET[province]
        elseif (isset($_GET['province']) && !isset($_GET['price']) && !isset($_GET['district']) && !isset($_GET['area'])) {
            $province_name = Province::where('code', $_GET['province'])->get('name');
            $provinces = DB::select(DB::raw('SELECT * FROM `provinces` ORDER BY `count_posts`  DESC'));
            $result = DB::select(DB::raw('SELECT products.*, provinces.name, provinces.slug, provinces.name_with_type as p_name, provinces.code , provinces.count_posts, districts.name_with_type as d_name,wards.name_with_type, images.link
                            FROM products
                            INNER JOIN provinces ON provinces.code = products.province_code
                            INNER JOIN districts ON districts.code = products.district_code
                            INNER JOIN wards ON wards.code = products.ward_code
                            INNER JOIN images ON images.products_id = products.id
                            WHERE menu_category_id IN (1,2,3) AND status = 1 AND deleted_at is null AND CURRENT_DATE() BETWEEN started_at AND expired_at AND products.province_code =' . ' ' . $_GET['province'] . ' '
                . ' GROUP BY products.id ORDER BY post_type_id DESC, products.created_at DESC'));
            $count_posts = count($result);
            dd ($result);
            $districts = District::where('parent_code', $_GET['province'])->get();
            return view("pages.nhadatban.index", compact('result', 'provinces', 'province_name', 'count_posts', 'districts'));
        }
        // ton tai GET[price]
        elseif (isset($_GET['price']) && !isset($_GET['province']) && !isset($_GET['district']) && !isset($_GET['area'])) {
            $price_min = substr($_GET['price'], 0, 1);
            $price_max = substr($_GET['price'], 1);
            $provinces = DB::select(DB::raw('SELECT * FROM `provinces` ORDER BY `count_posts`  DESC'));
            $result = DB::select(DB::raw('SELECT products.*, provinces.name, provinces.slug, provinces.name_with_type as p_name, provinces.code, provinces.count_posts, districts.name_with_type as d_name,wards.name_with_type, images.link 
                            FROM products
                            INNER JOIN provinces ON provinces.code = products.province_code
                            INNER JOIN districts ON districts.code = products.district_code
                            INNER JOIN wards ON wards.code = products.ward_code
                            INNER JOIN images ON images.products_id = products.id
                            WHERE menu_category_id IN (1,2,3) AND status = 1 AND deleted_at is null AND CURRENT_DATE() BETWEEN started_at AND expired_at AND price BETWEEN' . ' ' . $price_min . ' ' . 'AND' . ' ' . $price_max . ' '
                . ' GROUP BY products.id  ORDER BY post_type_id DESC, products.created_at DESC'));
            $count_posts = count($result);
            return view("pages.nhadatban.index", compact('result', 'provinces', 'count_posts'));
        }
        // ton tai GET[area]
        elseif (isset($_GET['area']) && !isset($_GET['province']) && !isset($_GET['district']) && !isset($_GET['price']) && !isset($_GET['price'])) {
            // area < 100 m2
            if ($_GET['area'] < 99999) {
                $area_min = substr($_GET['area'], 0, 2);
                $area_max = substr($_GET['area'], 2);
                $provinces = DB::select(DB::raw('SELECT * FROM `provinces` ORDER BY `count_posts`  DESC'));
                $result = DB::select(DB::raw('SELECT products.*, provinces.name, provinces.slug, provinces.name_with_type as p_name, provinces.code, provinces.count_posts, districts.name_with_type as d_name,wards.name_with_type, images.link 
                            FROM products
                            INNER JOIN provinces ON provinces.code = products.province_code
                            INNER JOIN districts ON districts.code = products.district_code
                            INNER JOIN wards ON wards.code = products.ward_code
                            INNER JOIN images ON images.products_id = products.id
                            WHERE menu_category_id IN (1,2,3) AND status = 1 AND deleted_at is null AND CURRENT_DATE() BETWEEN started_at AND expired_at AND area BETWEEN' . ' ' . $area_min . ' ' . 'AND' . ' ' . $area_max . ' '
                    . ' GROUP BY products.id  ORDER BY post_type_id DESC, products.created_at DESC'));
                $count_posts = count($result);
                return view("pages.nhadatban.index", compact('result', 'provinces', 'count_posts'));
            }
            // area >= 100 m2
            else {
                $area_min = substr($_GET['area'], 0, 3);
                $area_max = substr($_GET['area'], 3);
                $provinces = DB::select(DB::raw('SELECT * FROM `provinces` ORDER BY `count_posts`  DESC'));
                $result = DB::select(DB::raw('SELECT products.*, provinces.name, provinces.slug, provinces.name_with_type as p_name, provinces.code, provinces.count_posts, districts.name_with_type as d_name,wards.name_with_type, images.link 
                            FROM products
                            INNER JOIN provinces ON provinces.code = products.province_code
                            INNER JOIN districts ON districts.code = products.district_code
                            INNER JOIN wards ON wards.code = products.ward_code
                            INNER JOIN images ON images.products_id = products.id
                            WHERE menu_category_id IN (1,2,3) AND status = 1 AND deleted_at is null AND CURRENT_DATE() BETWEEN started_at AND expired_at AND area BETWEEN' . ' ' . $area_min . ' ' . 'AND' . ' ' . $area_max . ' '
                    . ' GROUP BY products.id  ORDER BY post_type_id DESC, products.created_at DESC'));
                $count_posts = count($result);
                return view("pages.nhadatban.index", compact('result', 'provinces', 'count_posts'));
            }
        }
        // ton tai 4 GET
        elseif (isset($_GET['province']) && isset($_GET['district']) && isset($_GET['price']) && isset($_GET['area'])) {
            // 4 GET == 0
            if ($_GET['province'] == 0 && $_GET['district'] == 0 && $_GET['price'] == 0 && $_GET['area'] == 0) {
                $province_name = Province::where('code', $_GET['province'])->get('name');
                $provinces = DB::select(DB::raw('SELECT * FROM `provinces` ORDER BY `count_posts`  DESC'));
                $result = DB::select(DB::raw('SELECT products.*, provinces.name, provinces.slug, provinces.name_with_type as p_name, provinces.code, provinces.count_posts, districts.name_with_type as d_name,wards.name_with_type, images.link 
                            FROM products
                            INNER JOIN provinces ON provinces.code = products.province_code
                            INNER JOIN districts ON districts.code = products.district_code
                            INNER JOIN wards ON wards.code = products.ward_code
                            INNER JOIN images ON images.products_id = products.id
                            WHERE menu_category_id IN (1,2,3) AND status = 1 AND deleted_at is null AND CURRENT_DATE() BETWEEN started_at AND expired_at  GROUP BY products.id  ORDER BY post_type_id DESC, products.created_at DESC'));
                $count_posts = count($result);
                return view("pages.nhadatban.index", compact('result', 'provinces', 'province_name', 'count_posts'));
            }
            // GET[province] != 0
            elseif ($_GET['province'] != 0 && $_GET['district'] == 0 && $_GET['price'] == 0 && $_GET['area'] == 0) {
                $province_name = Province::where('code', $_GET['province'])->get('name');
                $provinces = DB::select(DB::raw('SELECT * FROM `provinces` ORDER BY `count_posts`  DESC'));
                $result = DB::select(DB::raw('SELECT products.*, provinces.name, provinces.slug, provinces.name_with_type as p_name, provinces.code, provinces.count_posts, districts.name_with_type as d_name,wards.name_with_type, images.link 
                            FROM products
                            INNER JOIN provinces ON provinces.code = products.province_code
                            INNER JOIN districts ON districts.code = products.district_code
                            INNER JOIN wards ON wards.code = products.ward_code
                            INNER JOIN images ON images.products_id = products.id
                            WHERE menu_category_id IN (1,2,3) AND status = 1 AND deleted_at is null AND CURRENT_DATE() BETWEEN started_at AND expired_at AND products.province_code =' . ' ' . $_GET['province'] . ' '
                    . ' GROUP BY products.id  ORDER BY post_type_id DESC, products.created_at DESC'));
                $count_posts = count($result);
                $districts = District::where('parent_code', $_GET['province'])->get();
                return view("pages.nhadatban.index", compact('result', 'provinces', 'province_name', 'count_posts', 'districts'));
            }
            // GET[province] != 0 && GET[district] != 0
            elseif ($_GET['province'] != 0 && $_GET['district'] != 0 && $_GET['price'] == 0 && $_GET['area'] == 0) {
                $province_name = Province::where('code', $_GET['province'])->get('name');
                $provinces = DB::select(DB::raw('SELECT * FROM `provinces` ORDER BY `count_posts`  DESC'));
                $result = DB::select(DB::raw('SELECT products.*, provinces.name, provinces.slug, provinces.name_with_type as p_name, provinces.code, provinces.count_posts, districts.name_with_type as d_name,wards.name_with_type, images.link 
                            FROM products
                            INNER JOIN provinces ON provinces.code = products.province_code
                            INNER JOIN districts ON districts.code = products.district_code
                            INNER JOIN wards ON wards.code = products.ward_code
                            INNER JOIN images ON images.products_id = products.id
                            WHERE menu_category_id IN (1,2,3) AND status = 1 AND deleted_at is null AND CURRENT_DATE() BETWEEN started_at AND expired_at AND products.province_code =' . ' ' . $_GET['province'] . ' AND products.district_code =' . ' ' . $_GET['district'] . ' '
                    . ' GROUP BY products.id  ORDER BY post_type_id DESC, products.created_at DESC'));
                $count_posts = count($result);
                $districts = District::where('parent_code', $_GET['province'])->get();
                return view("pages.nhadatban.index", compact('result', 'provinces', 'province_name', 'count_posts', 'districts'));
            }
            // GET[province] != 0 && GET[district] != 0 && GET[price] != 0
            elseif ($_GET['province'] != 0 && $_GET['district'] != 0 && $_GET['price'] != 0 && $_GET['area'] == 0) {
                $province_name = Province::where('code', $_GET['province'])->get('name');
                $price_min = substr($_GET['price'], 0, 1);
                $price_max = substr($_GET['price'], 1);
                $provinces = DB::select(DB::raw('SELECT * FROM `provinces` ORDER BY `count_posts`  DESC'));
                $result = DB::select(DB::raw('SELECT products.*, provinces.name, provinces.slug, provinces.name_with_type as p_name, provinces.code, provinces.count_posts, districts.name_with_type as d_name,wards.name_with_type, images.link 
                            FROM products
                            INNER JOIN provinces ON provinces.code = products.province_code
                            INNER JOIN districts ON districts.code = products.district_code
                            INNER JOIN wards ON wards.code = products.ward_code
                            INNER JOIN images ON images.products_id = products.id
                            WHERE menu_category_id IN (1,2,3) AND status = 1 AND deleted_at is null AND CURRENT_DATE() BETWEEN started_at AND expired_at AND products.province_code =' . ' ' . $_GET['province'] . ' AND products.district_code =' . ' ' . $_GET['district']  . ' AND price BETWEEN' . ' ' . $price_min . ' ' . 'AND' . ' ' . $price_max . ' '
                    . ' GROUP BY products.id  ORDER BY post_type_id DESC, products.created_at DESC'));
                $count_posts = count($result);
                $districts = District::where('parent_code', $_GET['province'])->get();
                return view("pages.nhadatban.index", compact('result', 'provinces' , 'province_name', 'count_posts', 'districts'));
            }
            // GET[province] != 0 && GET[price] != 0
            elseif ($_GET['province'] != 0 && $_GET['district'] == 0 && $_GET['price'] != 0 && $_GET['area'] == 0) {
                $province_name = Province::where('code', $_GET['province'])->get('name');
                $price_min = substr($_GET['price'], 0, 1);
                $price_max = substr($_GET['price'], 1);
                $provinces = DB::select(DB::raw('SELECT * FROM `provinces` ORDER BY `count_posts`  DESC'));
                $result = DB::select(DB::raw('SELECT products.*, provinces.name, provinces.slug, provinces.name_with_type as p_name, provinces.code, provinces.count_posts, districts.name_with_type as d_name,wards.name_with_type, images.link 
                            FROM products
                            INNER JOIN provinces ON provinces.code = products.province_code
                            INNER JOIN districts ON districts.code = products.district_code
                            INNER JOIN wards ON wards.code = products.ward_code
                            INNER JOIN images ON images.products_id = products.id
                            WHERE menu_category_id IN (1,2,3) AND status = 1 AND deleted_at is null AND CURRENT_DATE() BETWEEN started_at AND expired_at AND products.province_code =' . ' ' . $_GET['province'] . ' AND price BETWEEN' . ' ' . $price_min . ' ' . 'AND' . ' ' . $price_max . ' '
                    . ' GROUP BY products.id  ORDER BY post_type_id DESC, products.created_at DESC'));
                $count_posts = count($result);
                $districts = District::where('parent_code', $_GET['province'])->get();
                return view("pages.nhadatban.index", compact('result', 'provinces', 'province_name', 'count_posts', 'districts'));
            }
            //GET[province] != 0 && GET[price] != 0 && GET[area] != 0
            elseif ($_GET['province'] != 0 && $_GET['district'] == 0 && $_GET['price'] != 0 && $_GET['area'] != 0) {
                // GET[area] < 100 m2
                if ($_GET['area'] < 99999) {
                    $province_name = Province::where('code', $_GET['province'])->get('name');
                    $area_min = substr($_GET['area'], 0, 2);
                    $area_max = substr($_GET['area'], 2);
                    $price_min = substr($_GET['price'], 0, 1);
                    $price_max = substr($_GET['price'], 1);
                    $provinces = DB::select(DB::raw('SELECT * FROM `provinces` ORDER BY `count_posts`  DESC'));
                    $result = DB::select(DB::raw('SELECT products.*, provinces.name, provinces.slug, provinces.name_with_type as p_name, provinces.code, provinces.count_posts, districts.name_with_type as d_name,wards.name_with_type, images.link 
                                FROM products
                                INNER JOIN provinces ON provinces.code = products.province_code
                                INNER JOIN districts ON districts.code = products.district_code
                                INNER JOIN wards ON wards.code = products.ward_code
                            INNER JOIN images ON images.products_id = products.id
                                WHERE menu_category_id IN (1,2,3) AND status = 1 AND deleted_at is null AND CURRENT_DATE() BETWEEN started_at AND expired_at AND products.province_code =' . ' ' . $_GET['province'] . ' AND area BETWEEN' . ' ' . $area_min . ' ' . 'AND' . ' ' . $area_max . ' '
                            . ' AND price BETWEEN' . ' ' . $price_min . ' ' . 'AND' . ' ' . $price_max . ' '
                            . ' GROUP BY products.id  ORDER BY post_type_id DESC, products.created_at DESC'));
                    $count_posts = count($result);
                    $districts = District::where('parent_code', $_GET['province'])->get();
                    return view("pages.nhadatban.index", compact('result', 'provinces', 'province_name', 'count_posts', 'districts'));
                }
                // GET[area] >= 100 m2
                else {
                    $province_name = Province::where('code', $_GET['province'])->get('name');
                    $area_min = substr($_GET['area'], 0, 3);
                    $area_max = substr($_GET['area'], 3);
                    $price_min = substr($_GET['price'], 0, 1);
                    $price_max = substr($_GET['price'], 1);
                    $provinces = DB::select(DB::raw('SELECT * FROM `provinces` ORDER BY `count_posts`  DESC'));
                    $result = DB::select(DB::raw('SELECT products.*, provinces.name, provinces.slug, provinces.name_with_type as p_name, provinces.code, provinces.count_posts, districts.name_with_type as d_name,wards.name_with_type, images.link 
                                FROM products
                                INNER JOIN provinces ON provinces.code = products.province_code
                                INNER JOIN districts ON districts.code = products.district_code
                                INNER JOIN wards ON wards.code = products.ward_code
                            INNER JOIN images ON images.products_id = products.id
                                WHERE menu_category_id IN (1,2,3) AND status = 1 AND deleted_at is null AND CURRENT_DATE() BETWEEN started_at AND expired_at AND products.province_code =' . ' ' . $_GET['province'] . ' AND area BETWEEN' . ' ' . $area_min . ' ' . 'AND' . ' ' . $area_max . ' '
                            . ' AND price BETWEEN' . ' ' . $price_min . ' ' . 'AND' . ' ' . $price_max . ' '
                            . ' GROUP BY products.id  ORDER BY post_type_id DESC, products.created_at DESC'));
                    $count_posts = count($result);
                    $districts = District::where('parent_code', $_GET['province'])->get();
                    return view("pages.nhadatban.index", compact('result', 'provinces', 'province_name', 'count_posts', 'districts'));
                }
            }
            // GET[province] != 0 && GET[area] != 0
            elseif ($_GET['province'] != 0 && $_GET['district'] == 0 && $_GET['price'] == 0 && $_GET['area'] != 0) {
                // GET[area] < 100 m2
                if ($_GET['area'] < 99999) {
                    $province_name = Province::where('code', $_GET['province'])->get('name');
                    $area_min = substr($_GET['area'], 0, 2);
                    $area_max = substr($_GET['area'], 2);
                    $provinces = DB::select(DB::raw('SELECT * FROM `provinces` ORDER BY `count_posts`  DESC'));
                    $result = DB::select(DB::raw('SELECT products.*, provinces.name, provinces.slug, provinces.name_with_type as p_name, provinces.code, provinces.count_posts, districts.name_with_type as d_name,wards.name_with_type, images.link 
                                FROM products
                                INNER JOIN provinces ON provinces.code = products.province_code
                                INNER JOIN districts ON districts.code = products.district_code
                                INNER JOIN wards ON wards.code = products.ward_code
                            INNER JOIN images ON images.products_id = products.id
                                WHERE menu_category_id IN (1,2,3) AND status = 1 AND deleted_at is null AND CURRENT_DATE() BETWEEN started_at AND expired_at AND products.province_code =' . ' ' . $_GET['province'] . ' AND area BETWEEN' . ' ' . $area_min . ' ' . 'AND' . ' ' . $area_max . ' '
                        . ' GROUP BY products.id  ORDER BY post_type_id DESC, products.created_at DESC'));
                    $count_posts = count($result);
                    $districts = District::where('parent_code', $_GET['province'])->get();
                    return view("pages.nhadatban.index", compact('result', 'provinces', 'province_name', 'count_posts', 'districts'));
                }
                // GET[area] >= 100 m2
                else {
                    $province_name = Province::where('code', $_GET['province'])->get('name');
                    $area_min = substr($_GET['area'], 0, 3);
                    $area_max = substr($_GET['area'], 3);
                    $provinces = DB::select(DB::raw('SELECT * FROM `provinces` ORDER BY `count_posts`  DESC'));
                    $result = DB::select(DB::raw('SELECT products.*, provinces.name, provinces.slug, provinces.name_with_type as p_name, provinces.code, provinces.count_posts, districts.name_with_type as d_name,wards.name_with_type, images.link 
                                FROM products
                                INNER JOIN provinces ON provinces.code = products.province_code
                                INNER JOIN districts ON districts.code = products.district_code
                                INNER JOIN wards ON wards.code = products.ward_code
                            INNER JOIN images ON images.products_id = products.id
                                WHERE menu_category_id IN (1,2,3) AND status = 1 AND deleted_at is null AND CURRENT_DATE() BETWEEN started_at AND expired_at AND products.province_code =' . ' ' . $_GET['province'] . ' AND area BETWEEN' . ' ' . $area_min . ' ' . 'AND' . ' ' . $area_max . ' '
                        . ' GROUP BY products.id  ORDER BY post_type_id DESC, products.created_at DESC'));
                    $count_posts = count($result);
                    $districts = District::where('parent_code', $_GET['province'])->get();
                    return view("pages.nhadatban.index", compact('result', 'provinces', 'province_name', 'count_posts', 'districts'));
                }
            }
            // GET[price] != 0
            elseif ($_GET['province'] == 0 && $_GET['district'] == 0 && $_GET['price'] != 0 && $_GET['area'] == 0) {
                $price_min = substr($_GET['price'], 0, 1);
                $price_max = substr($_GET['price'], 1);
                $provinces = DB::select(DB::raw('SELECT * FROM `provinces` ORDER BY `count_posts`  DESC'));
                $result = DB::select(DB::raw('SELECT products.*, provinces.name, provinces.slug, provinces.name_with_type as p_name, provinces.code, provinces.count_posts, districts.name_with_type as d_name,wards.name_with_type, images.link 
                            FROM products
                            INNER JOIN provinces ON provinces.code = products.province_code
                            INNER JOIN districts ON districts.code = products.district_code
                            INNER JOIN wards ON wards.code = products.ward_code
                            INNER JOIN images ON images.products_id = products.id
                            WHERE menu_category_id IN (1,2,3) AND status = 1 AND deleted_at is null AND CURRENT_DATE() BETWEEN started_at AND expired_at AND price BETWEEN' . ' ' . $price_min . ' ' . 'AND' . ' ' . $price_max . ' '
                    . ' GROUP BY products.id  ORDER BY post_type_id DESC, products.created_at DESC'));
                $count_posts = count($result);
                return view("pages.nhadatban.index", compact('result', 'provinces', 'count_posts'));
            }
            // GET[price] != 0 && GET[area] != 0
            elseif ($_GET['province'] == 0 && $_GET['district'] == 0 && $_GET['price'] != 0 && $_GET['area'] != 0) {
                // GET[area] < 100 m2
                if ($_GET['area'] < 99999) {
                    $area_min = substr($_GET['area'], 0, 2);
                    $area_max = substr($_GET['area'], 2);
                    $price_min = substr($_GET['price'], 0, 1);
                    $price_max = substr($_GET['price'], 1);
                    $provinces = DB::select(DB::raw('SELECT * FROM `provinces` ORDER BY `count_posts`  DESC'));
                    $result = DB::select(DB::raw('SELECT products.*, provinces.name, provinces.slug, provinces.name_with_type as p_name, provinces.code, provinces.count_posts, districts.name_with_type as d_name,wards.name_with_type, images.link 
                                FROM products
                                INNER JOIN provinces ON provinces.code = products.province_code
                                INNER JOIN districts ON districts.code = products.district_code
                                INNER JOIN wards ON wards.code = products.ward_code
                            INNER JOIN images ON images.products_id = products.id
                                WHERE menu_category_id IN (1,2,3) AND status = 1 AND deleted_at is null AND CURRENT_DATE() BETWEEN started_at AND expired_at AND price BETWEEN' . ' ' . $price_min . ' ' . 'AND' . ' ' . $price_max . ' AND area BETWEEN' . ' ' . $area_min . ' ' . 'AND' . ' ' . $area_max . ' '
                        . ' GROUP BY products.id  ORDER BY post_type_id DESC, products.created_at DESC'));
                    $count_posts = count($result);
                    return view("pages.nhadatban.index", compact('result', 'provinces', 'count_posts'));
                }
                // GET[area] >= 100 m2
                else {
                    $area_min = substr($_GET['area'], 0, 3);
                    $area_max = substr($_GET['area'], 3);
                    $price_min = substr($_GET['price'], 0, 1);
                    $price_max = substr($_GET['price'], 1);
                    $provinces = DB::select(DB::raw('SELECT * FROM `provinces` ORDER BY `count_posts`  DESC'));
                    $result = DB::select(DB::raw('SELECT products.*, provinces.name, provinces.slug, provinces.name_with_type as p_name, provinces.code, provinces.count_posts, districts.name_with_type as d_name,wards.name_with_type, images.link 
                                FROM products
                                INNER JOIN provinces ON provinces.code = products.province_code
                                INNER JOIN districts ON districts.code = products.district_code
                                INNER JOIN wards ON wards.code = products.ward_code
                            INNER JOIN images ON images.products_id = products.id
                                WHERE menu_category_id IN (1,2,3) AND status = 1 AND deleted_at is null AND CURRENT_DATE() BETWEEN started_at AND expired_at AND price BETWEEN' . ' ' . $price_min . ' ' . 'AND' . ' ' . $price_max . ' AND area BETWEEN' . ' ' . $area_min . ' ' . 'AND' . ' ' . $area_max . ' '
                        . ' GROUP BY products.id  ORDER BY post_type_id DESC, products.created_at DESC'));
                    $count_posts = count($result);
                    return view("pages.nhadatban.index", compact('result', 'provinces', 'count_posts'));
                }
            }
            // GET[area] != 0
            elseif ($_GET['province'] == 0 && $_GET['district'] == 0 && $_GET['price'] == 0 && $_GET['area'] != 0) {
                // area < 100 m2
                if ($_GET['area'] < 99999) {
                    $area_min = substr($_GET['area'], 0, 2);
                    $area_max = substr($_GET['area'], 2);
                    $provinces = DB::select(DB::raw('SELECT * FROM `provinces` ORDER BY `count_posts`  DESC'));
                    $result = DB::select(DB::raw('SELECT products.*, provinces.name, provinces.slug, provinces.name_with_type as p_name, provinces.code, provinces.count_posts, districts.name_with_type as d_name,wards.name_with_type, images.link 
                            FROM products
                            INNER JOIN provinces ON provinces.code = products.province_code
                            INNER JOIN districts ON districts.code = products.district_code
                            INNER JOIN wards ON wards.code = products.ward_code
                            INNER JOIN images ON images.products_id = products.id
                            WHERE menu_category_id IN (1,2,3) AND status = 1 AND deleted_at is null AND CURRENT_DATE() BETWEEN started_at AND expired_at AND area BETWEEN' . ' ' . $area_min . ' ' . 'AND' . ' ' . $area_max . ' '
                        . ' GROUP BY products.id  ORDER BY post_type_id DESC, products.created_at DESC'));
                    $count_posts = count($result);
                    return view("pages.nhadatban.index", compact('result', 'provinces', 'count_posts'));
                }
                // area >= 100 m2
                else {
                    $area_min = substr($_GET['area'], 0, 3);
                    $area_max = substr($_GET['area'], 3);
                    $provinces = DB::select(DB::raw('SELECT * FROM `provinces` ORDER BY `count_posts`  DESC'));
                    $result = DB::select(DB::raw('SELECT products.*, provinces.name, provinces.slug, provinces.name_with_type as p_name, provinces.code, provinces.count_posts, districts.name_with_type as d_name,wards.name_with_type, images.link 
                            FROM products
                            INNER JOIN provinces ON provinces.code = products.province_code
                            INNER JOIN districts ON districts.code = products.district_code
                            INNER JOIN wards ON wards.code = products.ward_code
                            INNER JOIN images ON images.products_id = products.id
                            WHERE menu_category_id IN (1,2,3) AND status = 1 AND deleted_at is null AND CURRENT_DATE() BETWEEN started_at AND expired_at AND area BETWEEN' . ' ' . $area_min . ' ' . 'AND' . ' ' . $area_max . ' '
                        . ' GROUP BY products.id  ORDER BY post_type_id DESC, products.created_at DESC'));
                    $count_posts = count($result);
                    return view("pages.nhadatban.index", compact('result', 'provinces', 'count_posts'));
                }
            }
            // 4 GET != 0
            else{
                // area < 100m2
                if($_GET['area'] < 99999){
                    $province_name = Province::where('code', $_GET['province'])->get('name');
                    $price_min = substr($_GET['price'], 0, 1);
                    $price_max = substr($_GET['price'], 1);
                    $area_min = substr($_GET['area'], 0, 2);
                    $area_max = substr($_GET['area'], 2);
                    $provinces = DB::select(DB::raw('SELECT * FROM `provinces` ORDER BY `count_posts`  DESC'));
                    $result = DB::select(DB::raw('SELECT products.*, provinces.name, provinces.slug, provinces.name_with_type as p_name, provinces.code, provinces.count_posts, districts.name_with_type as d_name,wards.name_with_type, images.link 
                            FROM products
                            INNER JOIN provinces ON provinces.code = products.province_code
                            INNER JOIN districts ON districts.code = products.district_code
                            INNER JOIN wards ON wards.code = products.ward_code
                            INNER JOIN images ON images.products_id = products.id
                            WHERE menu_category_id IN (1,2,3) AND status = 1 AND deleted_at is null AND CURRENT_DATE() BETWEEN started_at AND expired_at AND area BETWEEN' . ' ' . $area_min . ' ' . 'AND' . ' ' . $area_max . ' '
                            . ' AND price BETWEEN' . ' ' . $price_min . ' ' . 'AND' . ' ' . $price_max . ' '
                            . ' AND status = 1 AND deleted_at is null AND CURRENT_DATE() BETWEEN started_at AND expired_at AND products.province_code =' . ' ' . $_GET['province'] . ' AND products.district_code =' . ' ' . $_GET['district'] . ' '
                            . ' GROUP BY products.id  ORDER BY post_type_id DESC, products.created_at DESC'));
                    $count_posts = count($result);
                    $districts = District::where('parent_code', $_GET['province'])->get();
                    return view("pages.nhadatban.index", compact('result', 'provinces', 'count_posts', 'province_name', 'districts'));
                }
                // area >= 100m2
                else{
                    $province_name = Province::where('code', $_GET['province'])->get('name');
                    $price_min = substr($_GET['price'], 0, 1);
                    $price_max = substr($_GET['price'], 1);
                    $area_min = substr($_GET['area'], 0, 3);
                    $area_max = substr($_GET['area'], 3);
                    $provinces = DB::select(DB::raw('SELECT * FROM `provinces` ORDER BY `count_posts`  DESC'));
                    $result = DB::select(DB::raw('SELECT products.*, provinces.name, provinces.slug, provinces.name_with_type as p_name, provinces.code, provinces.count_posts, districts.name_with_type as d_name,wards.name_with_type, images.link 
                            FROM products
                            INNER JOIN provinces ON provinces.code = products.province_code
                            INNER JOIN districts ON districts.code = products.district_code
                            INNER JOIN wards ON wards.code = products.ward_code
                            INNER JOIN images ON images.products_id = products.id
                            WHERE menu_category_id IN (1,2,3) AND status = 1 AND deleted_at is null AND CURRENT_DATE() BETWEEN started_at AND expired_at AND area BETWEEN' . ' ' . $area_min . ' ' . 'AND' . ' ' . $area_max . ' '
                            . ' AND price BETWEEN' . ' ' . $price_min . ' ' . 'AND' . ' ' . $price_max . ' '
                            . ' AND status = 1 AND deleted_at is null AND CURRENT_DATE() BETWEEN started_at AND expired_at AND products.province_code =' . ' ' . $_GET['province'] . ' AND products.district_code =' . ' ' . $_GET['district'] . ' '
                            . ' GROUP BY products.id  ORDER BY post_type_id DESC, products.created_at DESC'));
                    $count_posts = count($result);
                    $districts = District::where('parent_code', $_GET['province'])->get();
                    return view("pages.nhadatban.index", compact('result', 'provinces', 'count_posts', 'province_name', 'districts'));
                }
            }
        }
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
