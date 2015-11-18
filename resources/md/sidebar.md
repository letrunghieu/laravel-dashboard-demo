I use [Laravel Menu](//github.com/letrunghieu/laravel-menu) to construct the sidebar menu items. You should read the [package documentation](//github.com/letrunghieu/laravel-menu/blob/master/README.md) before coming to the next sections in this page.

## Getting the sidebar menu instance

Be reading to this point, I assume that you have read and understood how to build the menu. To get the menu instance of the sidebar for starting adding your menu items, use this method

    $menu = app('laravel_dashboard')->getSidebarMenu();
    
I suggest putting your menu building code inside a middleware, so that your menu is ready for every view of your application. This is the code of the middleware that is used by this demo site:

<script src="https://gist.github.com/letrunghieu/5cf7f01b7570f6e45adf.js?file=Dashboard.php"></script>

## Customize the output HTML

You can even apply more changes to the menu output by overriding the package views. I use these view by default to display the menu:

* `laravel_dashboard::layout`: the main layout of the dashboard, which includes other sub view.
* `laravel_dashboard::main_sidebar.master_menu`: the view that is used to render the sidebar menu. It include other sub view to enable nested menu levels.