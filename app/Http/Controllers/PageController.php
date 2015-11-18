<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function showPage(Request $request)
    {
        $route = $request->route();
        $name = '';
        $content = '';

        if (!$route || !\File::exists($file = base_path('/resources/md/' . str_replace('.', '/', $route->getName()) . ".md"))) {
            app('laravel_dashboard')->setPageTitle('Laravel Dashboard Demo');
        } else {
            app('laravel_dashboard')->setPageTitle(trans('titles.' . $route->getName()));

            $name = trans('titles.' . $route->getName());
            $content = app('markdown')->convertToHtml(\File::get($file));
        }

        return view('welcome', ['name' => $name, 'content' => $content]);
    }
}