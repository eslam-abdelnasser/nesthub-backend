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


use App\Notifications\NewBuilding;

Auth::routes();
Route::get('/','Frontend\HomeController@index')->name('home');
Route::get('/test','Frontend\BuildingDescriptionController@index');
Route::get('search-workspaces','Frontend\SearchController@index')->name('search-workspace');
//Route::get('/build/{name}','Frontend');
Route::middleware(['auth'])->group(function () {
//    Route::get('/','Frontend\BuildingController@index')->name('hola');
    ///photo/{photo}/edit
//    Route::resource('user-profile','UserController');

    Route::get('profile','UserController@userProfile')->name('user_profile');
    Route::post('user_profile/image','UserController@image')->name('post.user_image');
    Route::put('user_profile/{id}','UserController@update')->name('update.user_profile');
    //Route::post('/change_password','UserController@change_password');
    //Route::get('user-profile/{id}','UserController@edit')->name('user-profile');
    //to show the building list
    Route::get('/my_property','Frontend\BuildingController@index')->name('my-property');

//    Route::get('/','Frontend\BuildingController@index')->name('hola');


    //route the controller

    Route::get('/building','Frontend\BuildingController@createBuildig')->name('add-building');

    Route::post('/add-building','Frontend\BuildingController@postBuilding')->name('post.building');

    Route::get('/building/{id}/add-offices','Frontend\BuildingController@office')->name('create.offices');
    Route::post('/building/{id}/post-post','Frontend\BuildingController@postOffice')->name('post.offices');

    Route::get('/building/{id}/images','Frontend\BuildingController@images')->name('create.images');
    Route::post('building/{id}/images','Frontend\BuildingController@postImages')->name('post.images');
//Route::get('');
    Route::get('/building/{id}/additional','Frontend\BuildingController@additional')->name('create.additional');
    Route::post('building/{id}/additional','Frontend\BuildingController@postAdditional')->name('post.additional');
});



//Route::get('');


//Route::get('/home', 'HomeController@index')->name('home');
