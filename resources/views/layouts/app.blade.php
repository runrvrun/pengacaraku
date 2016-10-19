<!DOCTYPE html>
<html lang="en">
    <head>       
        @include('includes.head')
    </head>
    <body>
    @include('includes.header')
    
    <div class="content">
    @yield('content')
    </div>

    <footer class="footer">
        @include('includes.footer')            
        </footer>
    </body>
    @yield('footer')
</html>
