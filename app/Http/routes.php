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

Request::setTrustedProxies([
    // cloudflare IPs
    '103.21.244.0/22',
    '103.22.200.0/22',
    '103.31.4.0/22',
    '104.16.0.0/12',
    '108.162.192.0/18',
    '141.101.64.0/18',
    '162.158.0.0/15',
    '172.64.0.0/13',
    '173.245.48.0/20',
    '188.114.96.0/20',
    '190.93.240.0/20',
    '197.234.240.0/22',
    '198.41.128.0/17',
    '199.27.128.0/21',
]);

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
        ['as' => 'customise.control_sidebar', 'uses' => 'PageController@showPage']);
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
