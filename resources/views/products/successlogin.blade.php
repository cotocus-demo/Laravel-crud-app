@if (isset(Auth::user()->email))
<!DOCTYPE html>
<html>
    <head>
        <title>login success</title>

            <!-- Styles -->
            <link href="{{ asset('css/app.css') }}" rel="stylesheet">
            <!-- Scripts -->
            <script src="{{ asset('js/app.js')}}"></script>

        <style type="text/css">
            .box{
                width:600px;
                margin:0 auto;
                border:1px solid #ccc;
            }       
        </style>
    </head>
    <body>
            <br />
            <div class = "container box">
                <h3 align = "center">Simple login system in Laravel</h3><br />
                    
                        <div class="alert alert-danger success-block">
                            <strong>Welcome {{ Auth::user()->email }}</strong>
                            <br />
                            <a href="{{ url('/logout') }}">Logout</a>
                        </div>
                    
                <br />
            </div>
    </body>
</html>
@else
    <script>window.location = "/";</script>
@endif