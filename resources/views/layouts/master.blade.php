<!DOCTYPE html>
<html>
    <head>
        <title>
            @yield('title')
        </title>

        {!! Html::style('css/bootstrap/css/bootstrap.min.css') !!}
        {!! Html::script('js/bootstrap/js/bootstrap.min.js') !!}
        {!! Html::script('js/jquery/jquery-1.11.3.min.js') !!}

        <style>
            
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                @yield('content')
            </div>

            <div class="footer">
                
            </div>
        </div>

        <script type="text/javascript">
            function check() {
                return confirm('Are you sure ?');
            }
        </script>
    </body>
</html>
