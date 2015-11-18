Laravel Dashboard allows you to change some options which affects the AdminLTE behavior. To apply your changes, you should copy the default configuration file to the `config/laravel_dashboard.php` file by running this command first

    $> php artisan vendor:publish --provider=HieuLe\LaravelDashboard\LaravelDashboardServiceProvider --tag=config
    
If you want to reset all your changes back to the default, you have two options:

* delete the `config/laravel_dashboard.php` file
* run the publish command above with the `--force` option
    
The options inside `laravel_dashboard.php` file are explained below.

## Layout options

### `layout`

This option decides which layout is used, there are three available values:

   * empty string `''` [(demo)](?config[layout]=): the normal layout. This is the default value.
   * `fixed` [(demo)](?config[layout]=fixed): get a fixed header and sidebar.
   * `layout-boxed` [(demo)](?config[layout]=layout-boxed): get a boxed layout that stretches only to 1250px.
   
   
### `sidebar_collapse`

This option can receive `true` [(demo)](?config[sidebar_collapse]=1) or `false` [(demo)](?config[sidebar_collapse]=0) **(default)** value. We have a collapsed sidebar upon loading if it is set to `true`.

### `mini_sidebar`

This option can receive `true` [(demo)](?config[mini_sidebar]=1) **(default)** or `false` [(demo)](?config[mini_sidebar]=0) value. If it is set to `true`, the mini sidebar is shown when collapsed. You can click to the button next to logo of this page to try to close the sidebar.

### `skin`

This option changes the template appearance. Here is the list of available value:

* `blue` [(demo)](?config[skin]=blue) **default value**
* `blue-light` [(demo)](?config[skin]=blue-light)
* `yellow` [(demo)](?config[skin]=yellow)
* `yellow-light` [(demo)](?config[skin]=yellow-light)
* `green` [(demo)](?config[skin]=green)
* `green-light` [(demo)](?config[skin]=green-light)
* `purple` [(demo)](?config[skin]=purple)
* `purple-light` [(demo)](?config[skin]=purple-light)
* `red` [(demo)](?config[skin]=red)
* `red-light` [(demo)](?config[skin]=red-light)
* `black` [(demo)](?config[skin]=black)
* `black-light` [(demo)](?config[skin]=black-light)

### `control_sidebar_theme`

<button class="btn btn-primary" data-toggle="control-sidebar">Show the control sidebar</button>

Control sidebar is the right side bar. It can be used for many purposes and is extremely easy to create. The sidebar ships with two different show/hide styles. This options decide which theme to use on the control sidebar. Two available values are:
 
* `dark` [(demo)](?config[control_sidebar_theme]=dark) **default value**
* `light` [(demo)](?config[control_sidebar_theme]=light)

 
**Read more** at: [https://almsaeedstudio.com/themes/AdminLTE/documentation/index.html#layout](https://almsaeedstudio.com/themes/AdminLTE/documentation/index.html#layout)

## Javascript options

Modifying the options of AdminLTE's app.js can be done via [javascript options](https://almsaeedstudio.com/themes/AdminLTE/documentation/index.html#adminlte-options). The `AdminLTEOptions` will be initiated by the `lte_js` option of the `laravel_dashboard.php` file.