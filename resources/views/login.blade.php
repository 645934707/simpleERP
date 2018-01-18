<!DOCTYPE html>
<html lang="en">
<head>

    <!-- start: Meta -->
    <meta charset="utf-8">
    <title>登录</title>
    <meta name="description" content="Bootstrap Metro Dashboard">
    <meta name="keyword" content="">
    <!-- end: Meta -->

    <!-- start: Mobile Specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- end: Mobile Specific -->

    <!-- start: CSS -->
    <link id="bootstrap-style" href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-responsive.min.css') }}" rel="stylesheet">
    <link id="base-style" href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link id="base-style-responsive" href="{{ asset('css/style-responsive.css') }}" rel="stylesheet">
    <link href='{{ asset('css/font.css') }}' rel='stylesheet' type='text/css'>
    <!-- end: CSS -->


    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>

    <link id="ie-style" href="{{ asset('css/ie.css') }}" rel="stylesheet">
    <![endif]-->

    <!--[if IE 9]>
    <link id="ie9style" href="{{ asset('css/ie9.css') }}" rel="stylesheet">
    <![endif]-->

    <!-- start: Favicon -->
    <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}">
    <!-- end: Favicon -->

    <style type="text/css">
        body { background: url({{ asset('img/bg-login.jpg') }}) !important; }
    </style>



</head>

<body>
<div class="container-fluid-full">
    <div class="row-fluid">

        <div class="row-fluid">
            <div class="login-box">
                <h2>登录</h2>
                <form class="form-horizontal" action="{{ route('login') }}" method="post">
                    <fieldset>
                        {{ csrf_field() }}
                        <div class="input-prepend" title="email">
                            <span class="add-on"><i class="halflings-icon user"></i></span>
                            <input class="input-large span10" name="email" id="username" type="email" placeholder="email"/>
                        </div>
                        <div class="clearfix"></div>

                        <div class="input-prepend" title="Password">
                            <span class="add-on"><i class="halflings-icon lock"></i></span>
                            <input class="input-large span10" name="password" id="password" type="password" placeholder="password"/>
                        </div>
                        <div class="clearfix"></div>

                        <label class="remember" for="remember">
                            <input type="checkbox" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }} />记住我</label>

                        <div class="button-login">
                            <button type="submit" class="btn btn-primary">登录</button>
                        </div>
                        <div class="clearfix"></div>
                </form>
                <hr>
                <h3>忘记密码？</h3>
                <p>
                    没关系, <a href="#">点击这里</a> 重置密码.
                </p>
            </div><!--/span-->
        </div><!--/row-->


    </div><!--/.fluid-container-->

</div><!--/fluid-row-->
<!-- start: JavaScript-->

<script src="{{ asset('js/jquery-1.9.1.min.js') }}"></script>
<script src="{{ asset('js/jquery-migrate-1.0.0.min.js') }}"></script>

<script src="{{ asset('js/jquery-ui-1.10.0.custom.min.js') }}"></script>

<script src="{{ asset('js/jquery.ui.touch-punch.js') }}"></script>

<script src="{{ asset('js/modernizr.js') }}"></script>

<script src="{{ asset('js/bootstrap.min.js') }}"></script>

<script src="{{ asset('js/jquery.cookie.js') }}"></script>

<script src='{{ asset('js/fullcalendar.min.js') }}'></script>

<script src='{{ asset('js/jquery.dataTables.min.js') }}'></script>

<script src="{{ asset('js/excanvas.js') }}"></script>
<script src="{{ asset('js/jquery.flot.js') }}"></script>
<script src="{{ asset('js/jquery.flot.pie.js') }}"></script>
<script src="{{ asset('js/jquery.flot.stack.js') }}"></script>
<script src="{{ asset('js/jquery.flot.resize.min.js') }}"></script>

<script src="{{ asset('js/jquery.chosen.min.js') }}"></script>

<script src="{{ asset('js/jquery.uniform.min.js') }}"></script>

<script src="{{ asset('js/jquery.cleditor.min.js') }}"></script>

<script src="{{ asset('js/jquery.noty.js') }}"></script>

<script src="{{ asset('js/jquery.elfinder.min.js') }}"></script>

<script src="{{ asset('js/jquery.raty.min.js') }}"></script>

<script src="{{ asset('js/jquery.iphone.toggle.js') }}"></script>

<script src="{{ asset('js/jquery.uploadify-3.1.min.js') }}"></script>

<script src="{{ asset('js/jquery.gritter.min.js') }}"></script>

<script src="{{ asset('js/jquery.imagesloaded.js') }}"></script>

<script src="{{ asset('js/jquery.masonry.min.js') }}"></script>

<script src="{{ asset('js/jquery.knob.modified.js') }}"></script>

<script src="{{ asset('js/jquery.sparkline.min.js') }}"></script>

<script src="{{ asset('js/counter.js') }}"></script>

<script src="{{ asset('js/retina.js') }}"></script>

<script src="{{ asset('js/custom.js') }}"></script>
<!-- end: JavaScript-->

</body>
</html>
