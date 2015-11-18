<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['middleware' => 'dashboard'], function () {
    Route::get('/', ['as' => 'home', 'uses' => 'PageController@showPage']);
    Route::get('/configurations', ['as' => 'config', 'uses' => 'PageController@showPage']);
    Route::get('/sidebar-menu', ['as' => 'sidebar', 'uses' => 'PageController@showPage']);
    Route::get('/alert', ['as' => 'alert', 'uses' => 'PageController@showPage']);
    Route::get('/breadcrumbs', ['as' => 'breadcrumbs', 'uses' => 'PageController@showPage']);
    Route::get('/view-customise', ['as' => 'customise.index', 'uses' => 'PageController@showPage']);
    Route::get('/view-customise/logo', ['as' => 'customise.logo', 'uses' => 'PageController@showPage']);
    Route::get('/view-customise/topbar', ['as' => 'customise.topbar', 'uses' => 'PageController@showPage']);
    Route::get('/view-customise/sidebar', ['as' => 'customise.sidebar', 'uses' => 'PageController@showPage']);
    Route::get('/view-customise/control-sidebar',
        ['as' => 'customise.control-sidebar', 'uses' => 'PageController@showPage']);
    Route::get('/view-customise/footer', ['as' => 'customise.footer', 'uses' => 'PageController@showPage']);
    Route::get('/view-customise/assets/head', ['as' => 'customise.assets.head', 'uses' => 'PageController@showPage']);
    Route::get('/view-customise/assets/foot', ['as' => 'customise.assets.foot', 'uses' => 'PageController@showPage']);
});

Route::post('/alerts', function () {

    if (Input::has('success')) {
        app('alert')->success(Input::get('message'));
    }
    if (Input::has('error')) {
        app('alert')->error(Input::get('message'));
    }
    if (Input::has('warning')) {
        app('alert')->warning(Input::get('message'));
    }
    if (Input::has('info')) {
        app('alert')->info(Input::get('message'));
    }

    app('alert')->flash();

    return redirect(route('alert'));
});
