<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Octar l Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet"  href="{{asset("assets/")}}/css/bootstrap.css"  type="text/css"/>
    <link rel="stylesheet"  href="{{asset("assets/")}}/css/style.css"  type="text/css"/>
    <link href="{{asset("assets/")}}/css/font-awesome.css" rel="stylesheet">
</head>

<body>
<section class="login">

    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-md-8 col-sm-8 col-xs-12">
                <div class="log-img m-t-40">
                    <img src="{{asset("assets/")}}/img/log-user.png" class="img-responsive" >
                </div>

            </div>

            <div class="col-md-4 col-sm-4 col-xs-12 m-t-30 lft">
                <div class="log-form p-t-50">
                    <h1>OCTAR</h1>

                    <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                        @csrf
                        <h4>LOGIN</h4>
                        <div class="form-group">
                            <input class="form-control" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" type="email" value="{{ old('email') }}" required autofocus placeholder="Email">
                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <input class="form-control" name="password" type="password" required class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Password">
                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <button class="form-control" type="submit" >SIGN IN</button>
                        </div>

                    </form>

                    <h5>Copyright © OCTAR 2019  </h5>
                    <h5>Des. & Dev. <a href="http://maxeseg.com" target="_blank">Maxes Business Development</a></h5>
                </div>
            </div>

        </div>

    </div>

</section>

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="{{asset("assets/")}}/js/bootstrap.js" type="text/jscript" ></script>
</body>
</html>
