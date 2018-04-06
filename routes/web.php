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
//to show history page
Route::get('history','PageController@showHistoryPage')->name('showHistoryPage');
//to show gallery generate page
Route::get('gallery','PageController@showGalleryPage')->name('showGalleryGeneratePage');

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


//news
//1 : to show news add form
Route::get('/news/add','NewsController@showAddForm')->name('news.add');
//2 : to save news
Route::post('/news/save','NewsController@saveNews')->name('news.save');
//3 : to view all available news
Route::get('/news/view','NewsController@viewAllNews')->name('news.view');
//4 : to edit selected news
Route::get('/news/edit/{id}','NewsController@editForm');
//5 : to save edited news
Route::post('/news/update','NewsController@updateNews')->name('news.update');
//6 : to delete selected news
Route::get('/news/remove/{id}','NewsController@delete');

//vazhipadu
//1 : to show add vazhipadu add form
Route::get('/vazhipadu/add','VazhipaduController@showAddForm')->name('vazhipadu.add');
//2 : to save vazhipadu
Route::post('/vazhipadu/save','VazhipaduController@save')->name('vazhipadu.save');
//3 to view all available vazhipadus
Route::get('/vazhipadu/showAll','VazhipaduController@viewAll')->name('vazhipadu.viewAll');
//4 : to show edit form for selected vazhipadu
Route::get('vazhipadu/edit/{id}','VazhipaduController@showEditForm');
//5 : to save edited vazhipadu
Route::post('/vazhipadu/update','VazhipaduController@update')->name('vazhipadu.update');
//6 : to delete selected vazhipadu
Route::get('/vazhipadu/remove/{id}','VazhipaduController@remove');

//poojas
//1 : to show add pooja add form
Route::get('/pooja/add','PoojaController@index')->name('pooja.add');
//2 : to save pooja
Route::post('/pooja/save','PoojaController@store')->name('pooja.save');
//3 to view all available poojas
Route::get('/pooja/showAll','PoojaController@show')->name('pooja.viewAll');
//4 : to show edit form for selected pooja
Route::get('pooja/edit/{id}','PoojaController@edit');
//5 : to save edited pooja
Route::post('/pooja/update','PoojaController@update')->name('pooja.update');
//6 : to delete selected pooja
Route::get('/pooja/remove/{id}','PoojaController@destroy');

//festival
//1 : to show add pooja add form
Route::get('/festival/add','FestivalController@index')->name('festival.add');
//2 : to save festival
Route::post('/festival/save','FestivalController@store')->name('festival.save');
//3 to view all available festivals
Route::get('/festival/showAll','FestivalController@show')->name('festival.viewAll');
//4 : to show edit form for selected festival
Route::get('festival/edit/{id}','FestivalController@edit');
//5 : to save edited festival
Route::post('/festival/update','FestivalController@update')->name('festival.update');
//6 : to delete selected festival
Route::get('/festival/remove/{id}','FestivalController@destroy');
