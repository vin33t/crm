
<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="description" content="Responsive Admin Template" />
    <meta name="author" content="SmartUniversity" />
    <title>Forb Club:- @yield('title')</title>

    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css" />
	<!-- icons -->
    <link href="{{asset('theme/assets/plugins/simple-line-icons/simple-line-icons.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('theme/assets/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css"/>
	<!--bootstrap -->
	<link href="{{asset('theme/assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('theme/assets/plugins/summernote/summernote.css')}}" rel="stylesheet">
	<!-- morris chart -->
    <link href="{{asset('theme/assets/plugins/morris/morris.cs')}}s" rel="stylesheet" type="text/css" />
    <!-- Material Design Lite CSS -->
	<link rel="stylesheet" href="{{asset('theme/assets/plugins/material/material.min.css')}}">
	<link rel="stylesheet" href="{{asset('theme/assets/css/material_style.cs')}}s">
	<!-- animation -->
	<link href="{{asset('theme/assets/css/pages/animate_page.css')}}" rel="stylesheet">
    <!-- steps -->
    <link rel="stylesheet" href="{{asset('theme/assets/css/pages/steps.css')}}"> 
	<!-- Template Styles -->
    <link href="{{asset('theme/assets/css/plugins.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('theme/assets/css/style.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('theme/assets/css/responsive.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('theme/assets/css/theme-color.css')}}" rel="stylesheet" type="text/css" />
	<!-- favicon -->
    <link rel="shortcut icon" href="{{asset('theme/assets/img/favicon.ico')}}" /> 
    
    <link href="{{ asset('/css/toastr.min.css') }}" rel="stylesheet">
    @yield('styles')
 </head>
 <!-- END HEAD -->
<body class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white dark-sidebar-color logo-dark" >
    <div class="page-wrapper">
        <!-- start header -->
        <div class="page-header navbar navbar-fixed-top">
            <div class="page-header-inner ">
                <!-- logo start -->
                <div class="page-logo">
                    <a href="index.html">
                    {{-- <img alt="" src="{{asset('theme/assets/img/logo.jpeg')}}" style="width: 100px"> --}}
                    <span class="logo-default" >Forb Club</span> </a>
                </div>
                <!-- logo end -->
				<ul class="nav navbar-nav navbar-left in">
					<li>
                        <a href="#" class="menu-toggler sidebar-toggler"><i class="icon-menu"></i></a>
                    </li>
				</ul>
                <form class="search-form-opened" action="#" method="GET">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search..." name="query">
                        <span class="input-group-btn search-btn">
                          <a href="javascript:;" class="btn submit">
                             <i class="icon-magnifier"></i>
                           </a>
                        </span>
                    </div>
                </form>
                
                <!-- start mobile menu -->
                <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                    <span></span>
                </a>
               <!-- end mobile menu -->
                <!-- start header menu -->
                <div class="top-menu">
                    <ul class="nav navbar-nav pull-right">
                        <!-- start notification dropdown -->
                        <li class="dropdown dropdown-extended dropdown-notification" id="header_notification_bar">
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <i class="fa fa-bell-o"></i>
                                <span class="badge headerBadgeColor1"> 6 </span>
                            </a>
                            <ul class="dropdown-menu animated swing">
                                <li class="external">
                                    <h3><span class="bold">Notifications</span></h3>
                                    <span class="notification-label purple-bgcolor">New 6</span>
                                </li>
                                <li>
                                    <ul class="dropdown-menu-list small-slimscroll-style" data-handle-color="#637283">
                                        <li>
                                            <a href="javascript:;">
                                                <span class="time">just now</span>
                                                <span class="details">
                                                <span class="notification-icon circle deepPink-bgcolor"><i class="fa fa-check"></i></span> Congratulations!. </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <span class="time">3 mins</span>
                                                <span class="details">
                                                <span class="notification-icon circle purple-bgcolor"><i class="fa fa-user o"></i></span>
                                                <b>John Micle </b>is now following you. </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <span class="time">7 mins</span>
                                                <span class="details">
                                                <span class="notification-icon circle blue-bgcolor"><i class="fa fa-comments-o"></i></span>
                                                <b>Sneha Jogi </b>sent you a message. </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <span class="time">12 mins</span>
                                                <span class="details">
                                                <span class="notification-icon circle pink"><i class="fa fa-heart"></i></span>
                                                <b>Ravi Patel </b>like your photo. </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <span class="time">15 mins</span>
                                                <span class="details">
                                                <span class="notification-icon circle yellow"><i class="fa fa-warning"></i></span> Warning! </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <span class="time">10 hrs</span>
                                                <span class="details">
                                                <span class="notification-icon circle red"><i class="fa fa-times"></i></span> Application error. </span>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="dropdown-menu-footer">
                                        <a href="javascript:void(0)"> All notifications </a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <!-- end notification dropdown -->
                        <!-- start message dropdown -->
 						<li class="dropdown dropdown-extended dropdown-inbox" id="header_inbox_bar">
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <i class="fa fa-envelope-o"></i>
                                <span class="badge headerBadgeColor2"> 2 </span>
                            </a>
                            <ul class="dropdown-menu animated slideInDown">
                                <li class="external">
                                    <h3><span class="bold">Messages</span></h3>
                                    <span class="notification-label cyan-bgcolor">New 2</span>
                                </li>
                                <li>
                                    <ul class="dropdown-menu-list small-slimscroll-style" data-handle-color="#637283">
                                        <li>
                                            <a href="#">
                                                <span class="photo">
                                                	<img src="{{asset('theme/assets/img/user/user2.jpg')}}" class="img-circle" alt=""> </span>
                                                <span class="subject">
                                                	<span class="from"> Sarah Smith </span>
                                                	<span class="time">Just Now </span>
                                                </span>
                                                <span class="message"> Jatin I found you on LinkedIn... </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="photo">
                                                	<img src="{{asset('theme/assets/img/user/user3.jpg')}}" class="img-circle" alt=""> </span>
                                                <span class="subject">
                                                	<span class="from"> John Deo </span>
                                                	<span class="time">16 mins </span>
                                                </span>
                                                <span class="message"> Fwd: Important Notice Regarding Your Domain Name... </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="photo">
                                                	<img src="{{asset('theme/assets/img/user/user1.jp')}}g" class="img-circle" alt=""> </span>
                                                <span class="subject">
                                                	<span class="from"> Rajesh </span>
                                                	<span class="time">2 hrs </span>
                                                </span>
                                                <span class="message"> pls take a print of attachments. </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="photo">
                                                	<img src="{{asset('theme/assets/img/user/user8.jpg')}}" class="img-circle" alt=""> </span>
                                                <span class="subject">
                                                	<span class="from"> Lina Smith </span>
                                                	<span class="time">40 mins </span>
                                                </span>
                                                <span class="message"> Apply for Ortho Surgeon </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="photo">
                                                	<img src="{{asset('theme/assets/img/user/user5.jpg')}}" class="img-circle" alt=""> </span>
                                                <span class="subject">
                                                	<span class="from"> Jacob Ryan </span>
                                                	<span class="time">46 mins </span>
                                                </span>
                                                <span class="message"> Request for leave application. </span>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="dropdown-menu-footer">
                                        <a href="#"> All Messages </a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <!-- end message dropdown -->
 						<!-- start manage user dropdown -->
 						<li class="dropdown dropdown-user">
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <img alt="" class="img-circle " @if(Auth::user()->avatar)
                                                      src="{{asset(Auth::user()->avatar)}}"
                                                    @else
                                                      src="{{asset('theme/assets/img/user-placeholder.jpg')}}"
                                                    @endif />
                                <span class="username username-hide-on-mobile"> {{Auth::user()->name}} </span>
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-default animated jello">
                                <li>
                                    <a href="user_profile.html">
                                        <i class="icon-user"></i> Profile </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icon-settings"></i> Settings
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icon-directions"></i> Help
                                    </a>
                                </li>
                                <li class="divider"> </li>
                                <li>
                                    <a href="lock_screen.html">
                                        <i class="icon-lock"></i> Lock
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="icon-logout"></i>{{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </div>
        <!-- end header -->
        <!-- start page container -->
        <div class="page-container">
 			<!-- start sidebar menu -->
 			<div class="sidebar-container">
 				<div class="sidemenu-container navbar-collapse collapse fixed-menu">
	                <div id="remove-scroll">
	                    <ul class="sidemenu page-header-fixed p-t-20" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
	                        <li class="sidebar-toggler-wrapper hide">
	                            <div class="sidebar-toggler">
	                                <span></span>
	                            </div>
	                        </li>
	                        <li class="sidebar-user-panel">
	                            <div class="user-panel">
	                                <div class="row">
                                            <div class="sidebar-userpic">
                                                <img @if(Auth::user()->avatar)
                                                      src="{{asset(Auth::user()->avatar)}}"
                                                    @else
                                                      src="{{asset('theme/assets/img/user-placeholder.jpg')}}"
                                                    @endif class="img-responsive" alt=""> </div>
                                        </div>
                                        <div class="profile-usertitle">
                                            <div class="sidebar-userpic-name"> {{Auth::user()->name}} </div>
                                        </div>
                                        <div class="sidebar-userpic-btn">
									        
                                            <a class="tooltips" href="{{ route('logout') }}" data-placement="top"  data-original-title="Logout" onclick="event.preventDefault();
                                               document.getElementById('logout-form').submit();">
                                                <i class="icon-logout"></i>
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
									        
									    </div>
	                            </div>
	                        </li>
	                        <li class="nav-item">
	                            <a href="{{route('home')}}" class="nav-link nav-toggle">
	                                <i class="material-icons">dashboard</i>
	                                <span class="title">Dashboard</span>
	                            </a>
	                        </li>
                            <li class="nav-item">
                                <a href="{{route('employees')}}" class="nav-link nav-toggle">
                                    <i class="material-icons">dashboard</i>
                                    <span class="title">Employees</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('clients')}}" class="nav-link nav-toggle">
                                    <i class="material-icons">dashboard</i>
                                    <span class="title">Clients</span>
                                </a>
                            </li>
	                    </ul>
	                </div>
                </div>
            </div>
            <!-- end sidebar menu --> 
			<!-- start page content -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    @yield('header')
                   <!-- start widget -->
					<div class="state-overview" style="color: black">
						@yield('content')
                    </div>
                </div>
            </div>
            <!-- end page content -->   
        </div>
        <!-- end page container -->
        <!-- start footer -->
        <div class="page-footer">
            <div class="page-footer-inner"> Designed and Developed by <a href="https://www.himsoftsolution.com">Him Soft Solution Chandigarh
            </div>
            <div class="scroll-to-top">
                <i class="icon-arrow-up"></i>
            </div>
        </div>
        <!-- end footer -->
    </div>

    <!-- start js include path -->
    <script src="{{asset('theme/assets/plugins/jquery/jquery.min.js')}}" ></script>
    <script src="{{asset('theme/assets/plugins/popper/popper.min.js')}}" ></script>
    <script src="{{asset('theme/assets/plugins/jquery-blockui/jquery.blockui.min.j')}}s" ></script>
	<script src="{{asset('theme/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
    <!-- bootstrap -->
    <script src="{{asset('theme/assets/plugins/bootstrap/js/bootstrap.min.js')}}" ></script>
    <script src="{{asset('theme/assets/plugins/sparkline/jquery.sparkline.min.js')}}" ></script>
	<script src="{{asset('theme/assets/js/pages/sparkline/sparkline-data.js')}}" ></script>

    <!-- steps -->
    <script src="{{asset('theme/assets/plugins/steps/jquery.steps.js')}}" ></script>
    <script src="{{asset('theme/assets/js/pages/steps/steps-data.js')}}" ></script>
    <!-- Common js-->
	<script src="{{asset('theme/assets/js/app.js')}}" ></script>
    <script src="{{asset('theme/assets/js/layout.js')}}" ></script>
    <script src="{{asset('theme/assets/js/theme-color.js')}}" ></script>
    <!-- material -->
    <script src="{{asset('theme/assets/plugins/material/material.min.js')}}"></script>
    <!-- animation -->
    <script src="{{asset('theme/assets/js/pages/ui/animations.js')}}" ></script>
    <!-- morris chart -->
    <script src="{{asset('theme/assets/plugins/morris/morris.min.js')}}" ></script>
    <script src="{{asset('theme/assets/plugins/morris/raphael-min.js')}}" ></script>
    <script src="{{asset('theme/assets/js/pages/chart/morris/morris_home_data.js')}}" ></script>

    <script src="{{asset('theme/assets/plugins/jquery-validation/js/jquery.validate.min.js')}}"></script>
    
    
    
    
    <script src="{{ asset('/js/toastr.min.js') }}"></script>
    <script>
        @if(Session::has('success'))
            toastr.success("{{Session::get('success')}}")
        @endif
        @if(Session::has('info'))
            toastr.info("{{Session::get('info')}}")
        @endif
        @if(Session::has('warning'))
            toastr.warning("{{Session::get('warning')}}")
        @endif
        @if(Session::has('danger'))
            toastr.danger("{{Session::get('danger')}}")
        @endif
    </script>
    @yield('scripts')
  </body>
</html>