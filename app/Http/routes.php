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

Route::get('/', function () {

    $menu = app('laravel_dashboard')->getSidebarMenu();

    $menu->setLabel('Main navigation')
        ->addLink('Dashboard', ['to' => '/'], ['before' => '<i class="fa fa-dashboard"></i>'])
        ->addSubMenu(app('menu.manager')->createMenu()->setLabel('Layout Options')->addLink('Link 1')->addLink('Link 2')->addSubMenu(app('menu.manager')->createMenu()->setLabel('Layout Options')->addLink('Link 1')->addLink('Link 2')));

    return view('welcome');
});
