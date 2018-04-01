<?php

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('history','PageController@showHistoryPage')->name('showHistoryPage');

//admin
//Gallery
//1. gallery create form
Route::get('/gallery/create','GalleryController@showAddForm')->name('gallery.add');
//2. to create new callery with name
Route::post('/createNewGallery','GalleryController@createGalleryName');
//3. to save uploaded pictures to gallery
Route::post('uploadGalleryImages','GalleryController@saveImages');
//4. to show available gallery
Route::get('/gallery/generate','GalleryController@viewForm')->name('gallery.generateForm');
//5: to open selected gallery
Route::get('/openGallery','GalleryController@openGallery');
//6: to delete selected images
Route::get('/imageDelete/{id}','GalleryController@deleteImages');
//7: to delete gallery
Route::get('/deleteGallery/{id}','GalleryController@deleteGallery');
