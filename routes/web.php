<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Admin\AdminController;
use GuzzleHttp\Middleware;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SubCategoryController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');





// Super Admin pannel
Route::get('/SuperAdmin',[App\Http\Controllers\SuperAdmin\SuperAdminController::class, 'superadminFrom'])->name('superadmin.loginfrom');
Route::post('/SuperAdmin-login',[App\Http\Controllers\SuperAdmin\SuperAdminController::class, 'superadminLogin'])->name('superadminlogin');



Route::group(['prefix'=> '/SuperAdmin', 'middleware'=> 'superadmin'],function(){


    // Route::get('/',[App\Http\Controllers\SuperAdmin\SuperAdminController::class, 'index']);


    Route::get('/dashboard',[App\Http\Controllers\SuperAdmin\SuperAdminController::class, 'dashboard'])->name('superadmin.dashboard');
    Route::get('/logout',[App\Http\Controllers\SuperAdmin\SuperAdminController::class, 'SuperAdminlogout'])->name('superadmin.logout');




// CREATE POST

Route::get('/create/post',[PostController::class, 'CreatePost'])->name('post.CreatePost');
Route::post('/create/post',[PostController::class, 'PostStore'])->name('post.PostStore');
Route::get('/view-post',[PostController::class, 'AllPostSuperAdmin'])->name('post.AllPost');




// CREATE Category aea

Route::get('/create/category',[CategoryController::class, 'CreateCategory'])->name('category.CreatePost');
Route::post('/create/category',[CategoryController::class, 'categoryStore'])->name('category.PostStore');
Route::get('/all/post',[CategoryController::class, 'AllPost'])->name('category.AllPost');



// CREATE Sub-CATEGORY area

Route::get('/create/subcategory',[SubCategoryController::class, 'CreateSubcategory'])->name('subcategory.CreatePost');
Route::post('/create/subcategory',[SubCategoryController::class, 'SubcategoryStore'])->name('subcategory.PostStore');
Route::get('/all/subcategory',[SubCategoryController::class, 'AllSubcategory'])->name('subcategory.AllPost');






// CREATE ADMIN
    Route::get('/create/admin',[App\Http\Controllers\SuperAdmin\SuperAdminController::class, 'CreateAdmin'])->name('superadmin.CreateAdmin');
    Route::post('/create-admin',[App\Http\Controllers\SuperAdmin\SuperAdminController::class, 'CreateAdminStore'])->name('superadmin.CreateAdminStore');
    Route::get('/list/admin',[App\Http\Controllers\SuperAdmin\SuperAdminController::class, 'ListAdmin'])->name('superadmin.ListAdmin');

});








// Admin pannel



Route::get('/admin-pannel', [App\Http\Controllers\Admin\AdminController::class, 'AdminloginFrom']);

Route::post('/admin-login', [App\Http\Controllers\Admin\AdminController::class, 'Adminlogin']);


Route::group(['middleware'=>'admin'], function(){

    Route::get('/admin-dashboard', [App\Http\Controllers\Admin\AdminController::class, 'AdminDashboard']);


Route::get('/admin-logout', [App\Http\Controllers\Admin\AdminController::class, 'AdminLogout']);





// admin post part
Route::get('/admin-post', [AdminController::class, 'AdminCreatePostww']);

Route::post('/admin-store', [AdminController::class, 'AdminCreatePoststore']);











});

