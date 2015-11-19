Quoted from [AdminLTE documentation](almsaeedstudio.com/themes/AdminLTE/documentation/index.html#component-control-sidebar):

> Control sidebar is the right side bar. It can be used for many purposes and is extremely easy to create. The sidebar ships with two different show/hide styles. The first allows the sidebar to slide over the content. The second pushes the content to make space for the sidebar

To toggle the control sidebar on/off, add the attribute `data-toggle="control-sidebar"` and it will automatically act as the toggle button.


Sidebar Toggle Markup

    <button class="btn btn-default" data-toggle="control-sidebar">Toggle Right Sidebar</button>
    
<button class="btn btn-default" data-toggle="control-sidebar">Toggle Right Sidebar</button>

In the default templates that shipped with Laravel Dashboard, the content of the control sidebar is empty. You can put any thing into it by override the `laravel_dashboard::partials.control_sidebar` template. For example, this is the demo content that used in this site:

<script src="https://gist.github.com/letrunghieu/5cf7f01b7570f6e45adf.js?file=control_sidebar.blade.php"></script>