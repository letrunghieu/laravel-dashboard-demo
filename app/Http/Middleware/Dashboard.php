<?php

namespace App\Http\Middleware;

use Closure;

class Dashboard
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure                 $next
     *
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $this->registerSidebarMenu();
        $this->registerBreadcrumbs();

        return $next($request);
    }

    protected function registerSidebarMenu()
    {
        $menu = app('laravel_dashboard')->getSidebarMenu();

        $assetSubMenu = app('menu.manager')->createMenu('Custom assets')
            ->addLink('Assets in the header', ['route' => 'customise.assets.head'], ['before' => '<i class="fa fa-circle-o"></i>'])
            ->addLink('Assets in the footer', ['route' => 'customise.assets.foot'], ['before' => '<i class="fa fa-circle-o"></i>']);

        $cusSubMenu = app('menu.manager')->createMenu('View Customization')
            ->addLink('General', ['route' => 'customise.index'], ['before' => '<i class="fa fa-circle-o"></i>'])
            ->addLink('Logo', ['route' => 'customise.logo'], ['before' => '<i class="fa fa-circle-o"></i>'])
            ->addLink('Top bar', ['route' => 'customise.topbar'], ['before' => '<i class="fa fa-circle-o"></i>'])
            ->addLink('Sidebar', ['route' => 'customise.sidebar'], ['before' => '<i class="fa fa-circle-o"></i>'])
            ->addLink('Control Sidebar', ['route' => 'customise.control-sidebar'],
                ['before' => '<i class="fa fa-circle-o"></i>'])
            ->addLink('Footer', ['route' => 'customise.footer'], ['before' => '<i class="fa fa-circle-o"></i>'])
            ->addSubMenu($assetSubMenu, ['before' => '<i class="fa fa-asterisk"></i>', 'url_def' => ['route_pattern' => 'customise.assets.*']]);

        $menu->setLabel('Main Sidebar')
            ->addLink('Introduction', ['route' => 'home'], ['before' => '<i class="fa fa-home"></i>'])
            ->addLink('Configuration', ['route' => 'config'], ['before' => '<i class="fa fa-cog"></i>'])
            ->addLink('Sidebar Menu', ['route' => 'sidebar'], ['before' => '<i class="fa fa-book"></i>'])
            ->addLink('Alert Messages', ['route' => 'alert'], ['before' => '<i class="fa fa-bell"></i>'])
            ->addLink('Breadcrumbs', ['route' => 'breadcrumbs'], ['before' => '<i class="fa fa-bookmark"></i>'])
            ->addSubMenu($cusSubMenu, ['before' => '<i class="fa fa-street-view"></i>', 'url_def' => ['route_pattern' => 'customise.*']])
            ->addLink('GitHub', ['to' => 'https://github.com/letrunghieu/laravel-dashboard'],
                ['before' => '<i class="fa fa-github"></i>']);
    }

    protected function registerBreadcrumbs()
    {

    }
}
