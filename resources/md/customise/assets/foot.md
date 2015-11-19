In the default layout, these assets are included in the end of the `body` element:

    <!-- jQuery JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    
    <!-- Bootstrap 3 JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>
    
    <!-- SlimScroll JS which is required by the fixed layout -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-slimScroll/1.3.6/jquery.slimscroll.min.js"></script>
    
    <!-- Admin LTE JS -->
    <script src="{{ asset('vendor/' . \HieuLe\LaravelDashboard\Dashboard::PLUGIN_NAME . '/dist/js/app.min.js') }}"></script>


You can override the `laravel_dashboard::partials.foot_assets` template to include your own assets.