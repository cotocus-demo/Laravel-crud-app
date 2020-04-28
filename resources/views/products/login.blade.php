<!DOCTYPE html>
<html><head>
    <title>Login to Crud App</title>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>

    

    <style type="text/css">
        .box{
            width:600px;
            margin:0 auto;
            border:1px solid #ccc;
        }    
    </style>
</head>
<body>

        <div class="card box">
            <div class="card-header">Login</div>
            <div class="card-body">
                @if (\Session::has('myVar'))
                    <div class="alert alert-danger success-block">
                        <strong>{!! \Session::get('myVar') !!}</strong>
                    </div>
                @endif
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                        @foreach($errors->all() as $errors)
                            <li> {{ $errors }} </li>
                        @endforeach
                        </ul>
                    </div>
                @endif
                <form method="post" action="{{ asset('/checklogin') }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <label>Enter Email</label>
                        <input type="email" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Enter Password</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="submit" name="login" class="btn-btn-primary" value="Login">
                    </div>                
                </form>
            </div>
            <div class="card-footer d-none"></div>
        </div>

</body></html>