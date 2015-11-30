Welcome to the documentation of [Laravel Dashboard](//github.com/letrunghieu/laravel-dashboard) package. I create it to help developer make back office screens easier when working with Laravel 5 projects. It is not a stand alone start up template but just a *view layout* that can be extended by view files. This website also uses Laravel Dashboard as its layout.

## Installation

Register the package as your project dependency

    $> composer require hieu-le/laravel-dashboard
    
Add the package service provider to your `providers` array inside the `config/app.php` file.

    HieuLe\LaravelDashboard\LaravelDashboardServiceProvider::class,
    
By installing and registering this package, my other packages are installed and initiated:

* [Laravel Active](//github.com/letrunghieu/active): detect the current active URL, help us to assign `active` class to menu items
* [Laravel Menu](//github.com/letrunghieu/laravel-menu): build the sidebar menu (and other menu as well) in a dynamic way easily
* [Laravel Alert](//github.com/letrunghieu/laravel-alert): collect and display alert messages inside your application easier
* [Body Classes](//github.com/letrunghieu/body-classes): append and display the classes of the `body` element

You can head to each library above to read its documentation for advanced usage. Remember that you *do not* need to register their service provider once using Laravel Dashboard.

## Usage

Publish the public assets of the package

    $> php artisan vendor:publish --provider=HieuLe\LaravelDashboard\LaravelDashboardServiceProvider --tag=public

In your view, extend the `laravel_dashboard::layout` view

    @extends('laravel_dashboard::layout')
    
To set the page title (the `H1` element), override the `title` section with your heading content inside

    @section('title')
        The page heading
    @stop
    
The main content of your page must be put in the `content` section

    @section('content')
        Your view content here...
    @stop
    
To set the `title` element of your page, call this method **before** the view rendered

    app('laravel_dashboard')->setPageTitle($pageTitle)
    

## AdminLTE

I use the famous [AdminLTE](//almsaeedstudio.com/themes/AdminLTE/documentation/index.html) theme with this package. I suggest to read its documentation and examples to understand the HTML structure of Laravel Dashboard more.
    
