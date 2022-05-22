<?php

use App\Http\Controllers\backend\backendhomeController;
use App\Http\Controllers\backend\insertController;
use App\Http\Controllers\frontend\addtodbController;
use App\Http\Controllers\frontend\frontendController;
use App\Http\Controllers\login\loginController;
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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('index',[frontendController::class,'index'])->name('index');
Route::get('details/{id}',[frontendController::class,'details'])->name('details');
Route::get('userprofil',[frontendController::class,'userprofil'])->name('userprofil');
Route::get('credit_account',[frontendController::class,'credit_account'])->name('credit_account');
Route::get('getcategory/{id}',[frontendController::class,'getcategory'])->name('getcategory');
Route::get('newsearch',[frontendController::class,'newsearch'])->name('newsearch');


Route::post('rentnow/{id}',[addtodbController::class,'rentnow'])->name('rentnow');
Route::put('topup',[addtodbController::class,'topup'])->name('topup');
Route::get('user_retureditem/{id}',[addtodbController::class,'user_retureditem'])->name('user_retureditem');


Route::get('adminhome',[backendhomeController::class,'adminhome'])->name('adminhome');
Route::get('add_category',[backendhomeController::class,'add_category'])->name('add_category');
Route::get('view_category',[backendhomeController::class,'view_category'])->name('view_category');
Route::get('add_product',[backendhomeController::class,'add_product'])->name('add_product');
Route::get('view_product',[backendhomeController::class,'view_product'])->name('view_product');
Route::get('view_rented_product',[backendhomeController::class,'view_rented_product'])->name('view_rented_product');
Route::get('addmin_view_returned_item',[backendhomeController::class,'addmin_view_returned_item'])->name('addmin_view_returned_item');


Route::post('addcategorytodb',[insertController::class,'addcategorytodb'])->name('addcategorytodb');
Route::post('addproducttodb',[insertController::class,'addproducttodb'])->name('addproducttodb');
Route::get('admin_confirm/{id}/pro_id/{proid}/user_id/{user}/',[insertController::class,'admin_confirm'])->name('admin_confirm');

Route::get('edite_product/{id}',[insertController::class,'edite_product'])->name('edite_product');
Route::get('deletepro/{id}',[insertController::class,'deletepro'])->name('deletepro');
Route::put('editproducttodb/{id}',[insertController::class,'editproducttodb'])->name('editproducttodb');

Route::get('registration',[loginController::class,'registration'])->name('registration');
Route::post('registernow',[loginController::class,'registernow'])->name('registernow');
Route::get('/',[loginController::class,'login'])->name('login');
Route::post('loginnow',[loginController::class,'loginnow'])->name('loginnow');
Route::get('view_user',[loginController::class,'view_user'])->name('view_user');
Route::get('suspend_user/{id}',[loginController::class,'suspend_user'])->name('suspend_user');
Route::get('unband_user/{id}',[loginController::class,'unband_user'])->name('unband_user');
Route::get('promot_user/{id}',[loginController::class,'promot_user'])->name('promot_user');
Route::put('promotusertodb/{id}',[loginController::class,'promotusertodb'])->name('promotusertodb');


Route::get('logout',[loginController::class,'logout'])->name('logout');
