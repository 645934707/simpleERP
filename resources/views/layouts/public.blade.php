<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>

    <!-- start: Meta -->
    <meta charset="utf-8">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', '后台管理') }}</title>
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
    <script src="{{ asset('js/jquery-1.9.1.min.js') }}"></script>



</head>

<body>
<!-- start: Header -->
<div class="navbar">
    <div class="navbar-inner">
        <div class="container-fluid">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a class="brand" href="{{ url('/') }}"><span>{{ config('app.name', '后台管理') }}</span></a>

            <!-- start: Header Menu -->
            <div class="nav-no-collapse header-nav">
                <ul class="nav pull-right">
                    <li class="dropdown hidden-phone">
                        <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="icon-bell"></i>
                            <span class="badge red">
								3 </span>
                        </a>
                        <ul class="dropdown-menu notifications">
                            <li class="dropdown-menu-title">
                                <span>You have 11 notifications</span>
                                <a href="#refresh"><i class="icon-repeat"></i></a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="icon blue"><i class="icon-user"></i></span>
                                    <span class="message">New user registration</span>
                                    <span class="time">1 min</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="icon green"><i class="icon-comment-alt"></i></span>
                                    <span class="message">New comment</span>
                                    <span class="time">7 min</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="icon green"><i class="icon-comment-alt"></i></span>
                                    <span class="message">New comment</span>
                                    <span class="time">8 min</span>
                                </a>
                            </li>

                        </ul>
                    </li>


                    <!-- start: User Dropdown -->
                    <li class="dropdown">
                        <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="halflings-icon white user"></i> {{ Auth::user()->name }}
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <i class="halflings-icon off"></i> Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>

                        </ul>
                    </li>
                    <!-- end: User Dropdown -->
                </ul>
            </div>
            <!-- end: Header Menu -->

        </div>
    </div>
</div>
<!-- start: Header --><div class="copyrights">Collect from <a href="" >网站</a></div>

<div class="container-fluid-full">
    <div class="row-fluid">

        <!-- start: Main Menu -->
        <div id="sidebar-left" class="span2">
            <div class="nav-collapse sidebar-nav">
                <ul class="nav nav-tabs nav-stacked main-menu">
                    <li><a href="{{ route('home') }}"><i class="icon-bar-chart"></i><span class="hidden-tablet"> 首页</span></a></li>
                    <li><a href="{{ route('brandList') }}"><i class="icon-align-justify"></i><span class="hidden-tablet"> 分类管理</span></a></li>
                    <li><a href="tasks.html"><i class="icon-tasks"></i><span class="hidden-tablet"> 商品管理</span></a></li>
                    <li><a href="{{ route('userList') }}"><i class="icon-eye-open"></i><span class="hidden-tablet"> 管理员管理</span></a></li>
                    <li>
                        <a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> Dropdown</span><span class="label label-important"> 3 </span></a>
                        <ul>
                            <li><a class="submenu" href="submenu.html"><i class="icon-file-alt"></i><span class="hidden-tablet"> Sub Menu 1</span></a></li>
                            <li><a class="submenu" href="submenu2.html"><i class="icon-file-alt"></i><span class="hidden-tablet"> Sub Menu 2</span></a></li>
                            <li><a class="submenu" href="submenu3.html"><i class="icon-file-alt"></i><span class="hidden-tablet"> Sub Menu 3</span></a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!-- end: Main Menu -->
        <!-- start: Content -->
        <div id="content" class="span10">

            @yield('content')
            <!--/row-->



        </div><!--/.fluid-container-->

        <!-- end: Content -->
    </div><!--/#content.span10-->
</div><!--/fluid-row-->

<div class="modal hide fade" id="myModal">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">×</button>
        <h3>Settings</h3>
    </div>
    <div class="modal-body">
        <p>Here settings can be configured...</p>
    </div>
    <div class="modal-footer">
        <a href="#" class="btn" data-dismiss="modal">Close</a>
        <a href="#" class="btn btn-primary">Save changes</a>
    </div>
</div>

<div class="common-modal modal fade" id="common-Modal1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <ul class="list-inline item-details">
            <li><a href="#">Admin templates</a></li>
            <li><a href="http://themescloud.org">Bootstrap themes</a></li>
        </ul>
    </div>
</div>

<div class="clearfix"></div>

<footer>

    <p>
        <span style="text-align:left;float:left">&copy; 2013 <a href="downloads/janux-free-responsive-admin-dashboard-template/" alt="Bootstrap_Metro_Dashboard">JANUX Responsive Dashboard</a></span>

    </p>

</footer>

<!-- start: JavaScript-->


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
