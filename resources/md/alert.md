I use [Laravel Menu](//github.com/letrunghieu/laravel-alert/tree/laravel-5) support displaying alert messages. You should read the [package documentation](//github.com/letrunghieu/laravel-alert/blob/laravel-5/README.md) before coming to the next sections in this page.

## Try to create alert messages

Be reading to this point, I assume that you have read and understood how to add messages with the Laravel Alert package. Now try to create some alert with this demo:

<form method="post" action="alerts">
    <div class="form-group">
        <input type="text" name="message" class="form-control" placeholder="The alert message ..." value="An alert message"/>
    </div>
    <div class="form-group">
        <input type="submit" name="success" class="btn btn-success" value="Add success alert"/>
        <input type="submit" name="error" class="btn btn-danger" value="Add error alert"/>
        <input type="submit" name="warning" class="btn btn-warning" value="Add warning alert"/>
        <input type="submit" name="info" class="btn btn-info" value="Add info alert"/>
    </div>
</form>

## The place to display alerts

To change the place to display the messages, you could change the `laravel_dashboard::layout` view. The current position is defined on this section of code

    ...
    <section class="content">
        <div class='container'>
            {!! app('alert')->dump($errors->all()) !!}
        </div>
        @yield('content')
    </section>
    ...
    
