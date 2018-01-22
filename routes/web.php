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

//Route::get('/', function () {
//    return view('index');
//});

Auth::routes();

Route::get('/','Frontend\BuildingController@index');

Route::get('/building','Frontend\BuildingController@showBuildings');
Route::post('/add-building','Frontend\BuildingController@postBuilding')->name('post.building');

Route::get('/building/{id}/add-offices','Frontend\BuildingController@office')->name('create.offices');
Route::post('/building/{id}/post-post','Frontend\BuildingController@postOffice')->name('post.offices');

Route::get('/building/{id}/images','Frontend\BuildingController@images')->name('create.images');
Route::post('building/{id}/images','Frontend\BuildingController@postImages')->name('post.images');
//Route::get('');
Route::get('/building/{id}/additional','Frontend\BuildingController@additional')->name('create.additional');
Route::post('building/{id}/additional','Frontend\BuildingController@postAdditional')->name('post.additional');

//Route::get('');


Route::get('/home', 'HomeController@index')->name('home');