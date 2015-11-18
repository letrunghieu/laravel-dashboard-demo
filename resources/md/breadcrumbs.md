Laravel Dashboard comes with no breadcrumbs solution. However, it strongly support the Route-Bound Breadcrumbs of [this package](//goo.gl/z8Y9JL) with the default layout.

## Adding breadcrumbs to your application

I suggest using `davejamesmiller/laravel-breadcrumbs` package in this case. However, you can using any other library that you want. Remember to override the view templates to display your breadcrumbs correctly.

With the package I suggested above, you can set the breadcrumb name and its parameter to decide the output of breadcrumbs via these methods:

* `app('laravel_dashboard')->setBreadcrumbName($name)`: set the name of the breadcrumb, if you pass a `null` value, the default layout will use the current route name instead.
* `app('laravel_dashboard')->setBreadcrumbParams($params = [])`: set the array of parameters to render the breadcrumb.

## The default breadcrumbs display code

This is the default breadcrumbs display code that used in the `laravel_dashboard::layout` template. 

    {!! app('breadcrumbs')->renderIfExistsArray($dashboard->getBreadcrumbName(), $dashboard->getBreadcrumbParams()) !!}
    
## Example

This is the `breadcrumbs.php` that is actually used in this demo site:

<script src="https://gist.github.com/letrunghieu/5cf7f01b7570f6e45adf.js?file=breadcrumbs.php"></script>

