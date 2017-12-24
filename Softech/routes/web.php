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

//LOGIN INTO ADMIN
Route::get('admin/login','userController@getLogin')->name('login');

Route::post('admin/login','userController@postLogin');

Route::get('admin/logout','userController@adminLogout')->name('logout');








// Login with FACEBOOK
Route::get('/auth/facebook', 'SocialAuthController@redirectToProvider');

Route::get('/auth/facebook/callback', 'SocialAuthController@handleProviderCallback');
//Login GOOGLE
Route::get('/auth/google', 'SocialAuthController@redirectToProviderGG');

Route::get('/auth/google/callback', 'SocialAuthController@handleProviderCallbackGG');











//ADMIN PAGE
Route::group(['prefix' => 'admin','middleware'=>'adminLogin'], function () {
    Route::get('list',function (){
        return view('admin.layouts.index');
    })->name('admin');

    Route::group(['prefix' => 'category'], function () {
        Route::get('list/getCategory','categoryController@getCategory');

        Route::post('list/getCategory','categoryController@postCategory');

        Route::get ('list','categoryController@listCategory')->name('listCategory');

        Route::get('list/edit/{id}','categoryController@editCategory');

        Route::post('list/update','categoryController@updateCategory')->name('updateCategory');

        Route::get('list/delete/{id}','categoryController@deleteCategory');

    });
    Route::group(['prefix' => 'country'], function () {
        Route::get('list/getCountry','countryController@getCountry');

        Route::post('list/getCountry','countryController@postCountry');

        Route::get ('list','countryController@listCountry')->name('listCountry');

        Route::get('list/edit/{id}','countryController@editCountry');

        Route::post('list/update','countryController@updateCountry')->name('updateCountry');

        Route::get('list/delete/{id}','countryController@deleteCountry');

    });
    Route::group(['prefix' => 'actor'], function () {
        Route::get('list/getActor','actorController@getActor');

        Route::post('list/getActor','actorController@postActor');

        Route::get ('list','actorController@listActor')->name('listActor');

        Route::get('list/edit/{id}','actorController@editActor');

        Route::post('list/update','actorController@updateActor')->name('updateActor');

        Route::get('list/delete/{id}','actorController@deleteActor');

    });
    Route::group(['prefix' => 'user'], function () {
        Route::get('list/getUser', 'userController@getUser');

        Route::post('list/getUser', 'userController@postUser');

        Route::get('list','userController@listUser')->name('listUser');

        Route::get('list/edit/{id}','userController@editUser');

        Route::post('list/update','userController@updateUser')->name('updateUser');

        Route::get('list/delete/{id}','userController@deleteUser');
    });
    Route::group(['prefix' => 'movie'], function () {
        Route::get('list/getMovie', 'movieController@getMovie');

        Route::post('list/getMovie', 'movieController@postMovie');

        Route::get('list','movieController@listMovie')->name('listMovie');

        Route::get('list/edit/{id}','movieController@editMovie');

        Route::post('list/update','movieController@updateMovie')->name('updateMovie');

        Route::get('list/delete/{id}','movieController@deleteMovie');
    });

});




//USER

Route::get('home','homeController@home')->name('home');

Route::get('home/detail/{id}','homeController@detail')->name('detail');

Route::get('register','homeController@getRegister');

Route::post('register','homeController@postRegister');

Route::get('login','homeController@getlogin')->name('loginPage');

Route::post('login','homeController@postlogin');

Route::get('home/category/{idCate}','homeController@category');

Route::get('home/country/{idCountry}','homeController@country');

Route::get('home/genres/{id}','homeController@home');

Route::post('home/detail/comment/{id}','homeController@comment')->name('comments');



