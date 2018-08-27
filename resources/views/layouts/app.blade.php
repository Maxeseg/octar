<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet"  href="{{asset("assets/")}}/css/bootstrap.css"  type="text/css"/>
    <link rel="stylesheet"  href="{{asset("assets/")}}/css/style.css"  type="text/css"/>
    <link href="{{asset("assets/")}}/css/font-awesome.css" rel="stylesheet">
    @yield('css')
</head>
<body>

<section class="contents">
    <div class="page-container @yield('page_container')">
             @yield('sidebar')
        <div class="@yield('page_content')">
            @yield('content')
        </div>
    </div>
</section>



<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="{{asset('assets/')}}/js/bootstrap.js" type="text/jscript" ></script>
@yield('js')
<div class="modal fade" id="squarespaceModal-7" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="col-md-12 col-xs-12">
                    <h3 class="log-title">{{Session::get('success')}}</h3>
                        <div class="col-md-12 col-sm-12 text-center ">
                            <a href="#" type="button" data-dismiss="modal" class="btn btn-custom-3 " >Close</a>
                        </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>


@if(Session::has('success'))
    <script>
        $('#squarespaceModal-7').modal('show');
    </script>
@endif

</body>
</html>
