Laravel Dashboard allow developers to customize the HTML output via the Laravel view templates. It is shipped with default templates, which are under the `laravel_dashboard` namespace, that can be overridden easily.

## Default template files

Default templates are located in the `views` folder of the source code of the package. Here are their name and description:
 
* `layout`: the main layout template, all of your view need to extend it
* `partials.logo`: the HTML of the logo area, which is in the top left corner of the template
* `partials.top_nav`: the HTML of the top bar area, next to the sidebar toggle button
* `partials.sidebar`: the HTML of the main sidebar area, which is in the left edge of the layout
* `partials.control_sidebar`: the HTML of the control sidebar, which is in the right and is hidden when loaded. 
* `partials.footer`: the HTML of the footer, which is in the bottom of the layout
* `partials.head_assets`: links to the css stylesheets and javascript files in the header of the layout
* `partials.foot_assets`: links to javascript files in the footer of the layout

## Template cascading

If you don't know how to override a template of a package in Laravel, or you just forget it, this is how you can custom your own templates that override the default ones of Laravel Dashboard.

* create a folder named `laravel_dashboard` under the `/resources/views/vendor` folder.
* create a template with the same name with the one you want to override. Remember that the new files can use any extensions that your application recognised, usually `*.php` or `*.blade.php`.
