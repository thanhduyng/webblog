<?php

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


$namespace = 'App\Http\Controllers';

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Home
Route::group(
    ['namespace' => $namespace, 'prefix' => '/'],
    function () {
        Route::get('thanhnguyenduyy/dang-nhap', 'LoginController@getLoginAdmin');
        Route::post('thanhnguyenduyy/dang-nhap', 'LoginController@postLoginAdmin');
        Route::get('thanhnguyenduyy/dang-xuat', 'LoginController@getLogout')->name('getLogout');
        Route::get('/', 'PageHomeController@home')->name('home');
        Route::get('/all-new-post', 'PageHomeController@allPostNew')->name('allPostNew');
        Route::get('/all-category', 'PageHomeController@allCategory')->name('allCategory');
        Route::get('all-new-category/{id}', 'PageHomeController@allNewCategory')->name('allNewCategory');
        Route::get('all-detail-new/{id}', 'PageHomeController@allDetailNew')->name('allDetailNew');
    }
);

// Admin
Route::group(
    ['namespace' => $namespace, 'prefix' => 'thanhnguyenduyy'],
    function () {

        Route::get('/', 'HomeController@index')->name('index');

        //Slide
        Route::get('list-of-slide', 'SlideManagementController@ListOfSlide')->name('ListOfSlide');
        Route::get('slide-detail/create-slide', 'SlideManagementController@CreateSlide')->name('CreateSlide');
        Route::post('slide-detail/create-slide/insert-slide', 'SlideManagementController@InsertSlide')->name('InsertSlide');
        Route::get('slide-detail/delete-slide/{id}', 'SlideManagementController@DeleteSlide')->name('DeleteSlide');

        //Aboutme
        Route::get('list-of-about', 'AboutManagementController@ListOfAbout')->name('ListOfAbout');
        Route::get('about-detail/create-about', 'AboutManagementController@CreateAbout')->name('CreateAbout');
        Route::post('about-detail/create-about/insert-about', 'AboutManagementController@InsertAbout')->name('InsertAbout');
        Route::get('about-detail/delete-about/{id}', 'AboutManagementController@DeleteAbout')->name('DeleteAbout');

        //New_Category
        Route::get('list-of-newcategory', 'NewCategoryManagementController@ListOfNewCategory')->name('ListOfNewCategory');
        Route::get('newcategory-detail/create-newcategory', 'NewCategoryManagementController@CreateNewCategory')->name('CreateNewCategory');
        Route::post('newcategory-detail/create-newcategory/insert-newcategory', 'NewCategoryManagementController@InsertNewCategory')->name('InsertNewCategory');
        Route::get('newcategory-detail/delete-newcategory/{id}', 'NewCategoryManagementController@DeleteNewCategory')->name('DeleteNewCategory');

        //News
        Route::get('list-of-new', 'NewManagementController@ListOfNew')->name('ListOfNew');
        Route::get('new-detail/create-new', 'NewManagementController@CreateNew')->name('CreateNew');
        Route::post('new-detail/create-new/insert-new', 'NewManagementController@InsertNew')->name('InsertNew');
        Route::get('new-detail/edit-new/{id}', 'NewManagementController@EditNew')->name('EditNew');
        Route::post('new-detail/edit-new/{id}', 'NewManagementController@UpdateNew')->name('UpdateNew');
        Route::get('new-detail/delete-new/{id}', 'NewManagementController@DeleteNew')->name('DeleteNew');

        //User
        Route::get('list-of-user', 'UserManagementController@ListOfUser')->name('ListOfUser');
        Route::get('user-detail/create-user', 'UserManagementController@CreateUser')->name('CreateUser');
        Route::post('user-detail/create-user/insert-user', 'UserManagementController@InsertUser')->name('InsertUser');
        Route::get('user-detail/delete-user/{id}', 'UserManagementController@DeleteUser')->name('DeleteUser');
    }
);
