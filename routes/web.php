<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// HomeController index
Route::get('/index', 'HomeController@index');

//ProjectController
route::get('/du-an', 'ProjectController@index')->name('indexProjects');

// DanhbaController index. 

Route::get('/nha-moi-gioi', 'DanhbaController@index')->name('nhamoigioi');



Route::get('/tin-tuc', 'TintucController@index');

//NhadatbanController -----TAI ANH
Route::get('/nha-dat-ban', 'NhadatbanController@index');
Route::get('/ban-can-ho-chung-cu', 'NhadatbanController@ban_can_ho_chung_cu');
Route::get('/ban-nha-rieng', 'NhadatbanController@ban_nha_rieng');
Route::get('/ban-biet-thu-lien-ke', 'NhadatbanController@ban_biet_thu');
Route::get('/ban-nha-mat-pho', 'NhadatbanController@ban_nha_mat_pho');
Route::get('/ban-dat-nen-du-an', 'NhadatbanController@ban_dat_nen');
Route::get('/ban-dat', 'NhadatbanController@ban_dat');
Route::get('/ban-trang-trai-khu-nghi-duong', 'NhadatbanController@ban_trang_trai');
Route::get('/ban-kho-nha-xuong', 'NhadatbanController@ban_kho_nha_xuong');



//singlepost (chưa sửa được redirect)
Route::get('/nha-moi-gioi cong-ty-tnhh-dich-vu-bds-giga-real', 'DanhbaController@singlepost1');

//Doanh nghiep
Route::get('/doanh-nghiep', 'DanhbaController@index1')->name('doanhnghiep');

//Noi-ngoaithat
Route::get('/noi-ngoai-that', 'NoingoaithatController@index');

//Canmuacanthue route
Route::get('/can-mua-can-thue', 'BuyerSellerController@index')->name('buyerseller');
Route::get('/nha-dat-can-thue', 'BuyerSellerController@seller')->name('seller');

//Phong Thuy
Route::get('/phong-thuy', 'PhongThuyController@index')->name('phongthuy');
Route::get('/phong-thuy-toan-canh', 'PhongThuyController@index1')->name('phongthuytoancanh');
Route::get('/tu-van-phong-thuy', 'PhongThuyController@index2')->name('tuvanphongthuy');
Route::get('/phong-thuy-nha-o', 'PhongThuyController@index3')->name('phongthuynhao');
Route::get('/phong-thuy-van-phong', 'PhongThuyController@index4')->name('phongthuyvanphong');
Route::get('/phong-thuy-theo-tuoi', 'PhongThuyController@index5')->name('phongthuytheotuoi');

// Ckeditor
Route::resource('/editor', 'CKEditorController');
Route::post('ckeditor/image_upload', 'CKEditorController@upload')->name('upload');