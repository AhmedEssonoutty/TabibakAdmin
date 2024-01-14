<?php

use App\Http\Controllers\TonerController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\SiteOptionsController;
use App\Http\Controllers\Auth\AdminsController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\SlidersController;
use App\Http\Controllers\SlidesController;
use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('index/{locale}', [App\Http\Controllers\HomeController::class, 'lang']);

Auth::routes();

Route::middleware(['auth'])->group(function () {
	Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
	Route::get('logout', [TonerController::class, 'logout']);

	Route::get('{any}', [TonerController::class, 'index']);
	Route::get('components/{any}', [TonerController::class, 'components']);

	/**
	 * -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-
	 *                      Permissions Routes
	 * -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-
	 */

	Route::group(["prefix"=>"user_roles", "middleware"=>'can:DeveloperRole'],function(){
		Route::get("UserRoles", [RolesController::class, "index"])->name("UserRoles");
		Route::post("create", [RolesController::class, "SaveRole"])->name("CreateRole");
		Route::get("edit/{id}", [RolesController::class, "edit"])->name("EditRole");
		Route::post("update/{id}", [RolesController::class, "update"])->name("UpdateRole");
		Route::get("delete/{id}", [RolesController::class, "DeleteRole"])->name("DeleteRole");
	});
	Route::group(["prefix"=>"Admins", "middleware"=>'can:DashboardUsers'],function(){                   //
		Route::get("AdminUsers", [AdminsController::class, "index"])->name("AdminUsers");
		Route::post("AddAdminUser", [AdminsController::class, "create"])->name("CreateAdminUser");
		Route::get("edit/{id}", [AdminsController::class, "edit"])->name("EditAdminUser");
		Route::post("update/{id}", [AdminsController::class, "update"])->name("UpdateAdminUser");
		Route::get("delete/{id}", [AdminsController::class, "destroy"])->name("DeleteAdminUser");
		Route::post("UploadImage/", [AdminsController::class, "UploadImage"])->name("ImageUpload");
	});
	Route::group(["prefix"=>"SiteOptions", "middleware"=>"can:GeneralSettings"], function(){
		Route::get("{slug}", [SiteOptionsController::class, "SiteIdentity"])->name("SiteOptions");
		Route::post("update", [SiteOptionsController::class, "UpdateOptions"])->name("UpdateOptions");
	});




	Route::group(["prefix"=>"Posts", "middleware"=> "can:DeveloperRole"], function(){
		Route::get("PostTypes", [CategoriesController::class, "CreatePostType"])->name("CreatePostType");
		Route::post("AddPostType", [CategoriesController::class, "StorePostType"])->name("StorePostType");
		Route::get("EditPostType/{id}", [CategoriesController::class, "EditPostType"])->name("EditPostType");
		Route::post("UpdatePostType", [CategoriesController::class, "UpdatePostType"])->name("UpdatePostType");
		Route::get("DeletePostType/{id}", [CategoriesController::class, "DeletePostType"])->name("DeletePostType");
	});




	Route::group(["prefix"=>"Posts", "middleware"=> "can:SectorsManagement"], function(){
		Route::get("Categories", [CategoriesController::class, "CreateCategory"])->name("CreateCategory");
		Route::post("AddCategory", [CategoriesController::class, "StoreCategory"])->name("StoreCategory");
		Route::get("EditCategory/{id}", [CategoriesController::class, "EditCategory"])->name("EditCategory");
		Route::post("UpdateCategory", [CategoriesController::class, "UpdateCategory"])->name("UpdateCategory");
		Route::get("DeleteCategory/{id}", [CategoriesController::class, "DeleteCategory"])->name("DeleteCategory");
	});



	Route::group(["prefix"=>"Sliders", "middleware"=>"can:GeneralContent"], function(){
		Route::get("Sliders", [SlidersController::class, "CreateSlider"])->name("CreateSlider");
		Route::post("AddSlider", [SlidersController::class, "StoreSlider"])->name("StoreSlider");
		Route::get("EditSlider/{id}", [SlidersController::class, "EditSlider"])->name("EditSlider");
		Route::post("UpdateSlider", [SlidersController::class, "UpdateSlider"])->name("UpdateSlider");
		Route::get("DeleteSlider/{id}", [SlidersController::class, "DeleteSlider"])->name("DeleteSlider");



		//Route::get("Slides", [SlidersController::class, "CreateSlide"])->name("CreateSlide");
		Route::post("AddSlide", [SlidersController::class, "StoreSlide"])->name("StoreSlide");
		Route::get("GetSlideData/{id}", [SlidersController::class, "GetSlideData"])->name("GetSlideData");
		Route::get("EditSlide/{id}", [SlidersController::class, "EditSlide"])->name("EditSlide");
		Route::post("UpdateSlide", [SlidersController::class, "UpdateSlide"])->name("UpdateSlide");
		Route::get("DeleteSlide/{id}", [SlidersController::class, "DeleteSlide"])->name("DeleteSlide");
	});



	Route::group(["prefix"=>"Posts", "middleware"=>"can:Posts"], function(){
		Route::get("CreatePost", [PostsController::class, "CreatePost"])->name("CreatePost");
		Route::post("StorePost", [PostsController::class, "StorePost"])->name("StorePost");
		Route::get("EditPost/{id}", [PostsController::class, "EditPost"])->name("EditPost");
		Route::post("UpdatePost", [PostsController::class, "UpdatePost"])->name("UpdatePost");
		Route::get("DeletePost/{id}", [PostsController::class, "DeletePost"])->name("DeletePost");
	});



	Route::group(["prefix"=>"Pages", "middleware"=>"can:Pages"], function(){
		Route::get("CreatePage", [PostsController::class, "CreatePage"])->name("CreatePage");
		Route::post("StorePage", [PostsController::class, "StorePost"])->name("StorePage");
		Route::get("EditPage/{id}", [PostsController::class, "EditPage"])->name("EditPage");
		Route::post("UpdatePage", [PostsController::class, "UpdatePost"])->name("UpdatePage");
		Route::get("DeletePage/{id}", [PostsController::class, "DeletePost"])->name("DeletePage");
	});
});

