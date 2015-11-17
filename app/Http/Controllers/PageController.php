<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function showPage(Request $request)
    {
        $route = $request->route();

        if (!$route || !view()->exists($route->getName())) {
            app('laravel_dashboard')->setPageTitle('Laravel Dashboard Demo');

            return view('welcome');
        } else {
            app('laravel_dashboard')->setPageTitle(trans('titles.' . $route->getName()));

            return view($route->getName());
        }
    }
}