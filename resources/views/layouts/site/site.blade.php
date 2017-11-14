<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="with-device-width,initial-scale=1,user-scalable=no">
    <title>سایت</title>
    @yield('header')
    @include('layouts.site.style')

</head>
<body dir="ltr">
<div class="container-fluid">
    <header class="row ivi3-header" style="margin-bottom: 0px;">
        <div class="col-lg-12 hidden-sm hidden-xs">
            <div class="row" id="ivi3-nav">
                <div class="dropdown language-selector">
                    @if(session()->has('isoCode'))
                        @foreach($langs as $item=>$value)
                            @if($value->name===session()->get('isoCode'))
                                <a href="{{ url('changeLang/'.$value->name ) }}" class="dropdown-toggle" data-toggle="dropdown" data-close-others="true"
                                   aria-expanded="false">
                                    <img src="{{ url($value->icon) }}" width="18" height="18">
                                </a>
                            @endif
                        @endforeach
                    @endif
                    <ul class="dropdown-menu pull-right">
                        @foreach($langs as $item=>$value)
                            <li>
                                <a href="{{ url('changeLang/'.$value->name ) }}">
                                    <img src="{{ url($value->icon) }}" width="16" height="16">
                                    <span>{{ $value->country }}</span>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <div class="loginRegister">
                    @if(Auth::check())
                        <span style="margin-right: 3px;position: relative;top: -3px;"><a href="" title="My Profile"> {{ Auth::user()->name }} </a></span>
                        <a class="a-btn" href="{{ url("/logout") }}" title="logout">
                            <span style="font-size: 18px"><i class="fa fa-sign-out" aria-hidden="true"></i></span>
                        </a>
                    @else

                        <a class="a-btn" href="#" data-toggle="modal" data-target=".login-register-form">
                            <span style="font-size: 18px"><i class="fa fa-user-circle-o" aria-hidden="true"></i></span>
                        </a>
                        <div class="modal fade login-register-form" role="dialog">
                            <div class="modal-dialog modal-sm">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">
                                        <span><i class="fa fa-remove"></i></span>
                                    </button>
                                    <ul class="nav nav-tabs">
                                        <li class="active">
                                            <a data-toggle="tab" href="#login-form"> Login <span>
                                                    <i class="fa fa-sign-in"></i>
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a data-toggle="tab" href="#registration-form"> Register <span>
                                                    <i class="fa fa-user-plus"></i>
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="modal-body">
                                    <div class="tab-content">
                                        <div id="login-form" class="tab-pane fade in active">
                                            <form action="{{ url("login") }}" method="post">
                                                {{ csrf_field() }}
                                                <div class="form-group">
                                                    <label for="email">Email:</label>
                                                    <input type="email" class="form-control" id="email"
                                                           placeholder="Enter email" name="email">
                                                </div>
                                                <div class="form-group">
                                                    <label for="pwd">Password:</label>
                                                    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
                                                </div>
                                                <div class="checkbox">
                                                    <label><input type="checkbox" name="remember"> Remember me</label>
                                                </div>
                                                <button type="submit" class="btn btn-info">Login</button>
                                            </form>
                                        </div>
                                        <div id="registration-form" class="tab-pane fade">
                                            <form method="post" action="{{ url('/register') }}">
                                                {{ csrf_field() }}
                                                <div class="form-group">
                                                    <label for="name">Your Name:</label>
                                                    <input type="text" class="form-control" id="name" placeholder="Enter your name" name="name" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="newemail">User Name:</label>
                                                    <input type="text" class="form-control" id="username" placeholder="Enter new email" name="username" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="newemail">Email:</label>
                                                    <input type="email" class="form-control" id="newemail" placeholder="Enter new email" name="email" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="newpwd">Password:</label>
                                                    <input type="password" class="form-control" id="newpwd" placeholder="New password" name="password" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="pwd_conf">Confirm Password:</label>
                                                    <input type="password" class="form-control" id="pwd_conf" placeholder="New password" name="password_confirmation" required>
                                                </div>

                                                <button type="submit" class="btn btn-info">Register</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    @endif
                </div>

                <div class="col-lg-2 col-md-2" id="SafarHotelLogo">
                    <img src="{{ url('resources/img/1copy.png') }}">
                </div>
                <nav class="col-lg-7 col-md-7">
                    <ul class="ivi3-nav">
                        <li><a href="">Home</a></li>
                        <li><a href="#">Rooms</a>
                            <ul>
                                <li><a href="#">Sub Menu 1</a></li>
                                <li><a href="#">Sub Menu 2</a></li>
                                <li><a href="#">Sub Menu 3</a></li>
                                <li>
                                    <a href="#">Sub Menu 4</a>
                                    <ul>
                                        <li><a href="#">Level 1</a></li>
                                        <li><a href="#">Level 1</a></li>
                                        <li><a href="#">Level 1</a></li>
                                        <li>
                                            <a href="#">Level 1</a>
                                            <ul>
                                                <li><a href="#">Level 2</a></li>
                                                <li><a href="#">Level 2</a></li>
                                                <li>
                                                    <a href="#">Level 2</a>
                                                    <ul>
                                                        <li><a href="#">Level 3</a></li>
                                                        <li><a href="#">Level 3</a></li>
                                                        <li><a href="#">Level 3</a></li>
                                                        <li><a href="#">Level 3</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Level 2</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Level 1</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Sub Menu 5</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ url(session()->get('isoCode').'/package') }}">Package</a></li>
                        <li><a href="">Latest News</a></li>
                        <li><a href="">Contact Us</a></li>
                    </ul>
                </nav><!--nav-->
                <div class="col-lg-3 col-md-3" id="ivi3-searchHeader">
                    <input type="text" placeholder="Search ... ">
                </div><!--searchBox-->
            </div>
            @if(\Illuminate\Support\Facades\Route::currentRouteName()=="home")
                @include("layouts/site/contactUs")<!--address-social-->
            @endif
        </div>
        <div id="ivi3-wrapperMenu" class="visible-sm visible-xs">
            <form id="ivi3-searchXs" onsubmit="submitFn(this, event);">
                <div class="search-wrapper">
                    <div class="input-holder">
                        <input type="text" class="search-input" placeholder="Type to search"/>
                        <button class="search-icon" onclick="searchToggle(this, event);"><span></span></button>
                    </div>
                    <span class="close" onclick="searchToggle(this, event);"></span>
                    <div class="result-container">

                    </div>
                </div>
            </form>
            <div class="dropdown language-selector">
                @if(session()->has('isoCode'))
                    @foreach($langs as $item=>$value)
                        @if($value->name===session()->get('isoCode'))
                            <a href="{{ url('changeLang/'.$value->name ) }}" class="dropdown-toggle" data-toggle="dropdown" data-close-others="true"
                               aria-expanded="false">
                                <img src="{{ url($value->icon) }}" width="18" height="18">
                            </a>
                        @endif
                    @endforeach
                @endif
                <ul class="dropdown-menu pull-right">
                    @foreach($langs as $item=>$value)
                        <li>
                            <a href="{{ url('changeLang/'.$value->name ) }}">
                                <img src="{{ url($value->icon) }}" width="16" height="16">
                                <span>{{ $value->country }}</span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="dropdown loginRegister">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-close-others="true"
                   aria-expanded="false">
                    <span style="font-size: 18px"><i class="fa fa-user-circle-o" aria-hidden="true"></i></span>
                </a>
                <ul class="dropdown-menu pull-right">
                    <li>
                        <a href="#">
                            <span><i class="fa fa-sign-in" aria-hidden="true"></i></span>
                            <span>login</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span><i class="fa fa-user-plus" aria-hidden="true"></i></span>
                            <span>register</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="overlay"></div>
            <!-- Sidebar -->
            <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
                <ul class="nav sidebar-nav">
                    <li class="sidebar-brand">
                        <a href="#">
                            Iran Hotel Logo
                        </a>
                    </li>
                    <li>
                        <a href="#">Home</a>
                    </li>
                    <li>
                        <a href="#">Rooms</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Package <span
                                    class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li class="dropdown-header">heading</li>
                            <li><a href="#">submenu-1</a></li>
                            <li><a href="#">submenu-1</a></li>
                            <li><a href="#">submenu-1</a></li>
                            <li><a href="#">submenu-1</a></li>
                            <li><a href="#">One more separated link</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Latest News</a>
                    </li>
                    <li>
                        <a href="#">Contact Us</a>
                    </li>
                    <li>
                        <a href="">Follow me</a>
                    </li>
                </ul>
            </nav>
            <!-- /#sidebar-wrapper -->

            <!-- Page Content -->
            <div id="page-content-wrapper">
                <button type="button" class="hamburger is-closed" data-toggle="offcanvas">
                    <span class="hamb-top"></span>
                    <span class="hamb-middle"></span>
                    <span class="hamb-bottom"></span>
                </button>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                        </div>
                    </div>
                </div>
            </div>
            <!-- /#page-content-wrapper -->
        </div>
    </header><!--header-->

    @yield('content')

</div>
<!---footer-->
<footer class="nb-footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="about">
                    <div class="social-media">
                        <ul class="list-inline">
                            <li><a href="" title=""><i class="fa fa-facebook"></i></a></li>
                            <li><a href="" title=""><i class="fa fa-twitter"></i></a></li>
                            <li><a href="" title=""><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="" title=""><i class="fa fa-telegram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div><!---social-->
            <div class="col-md-4 col-sm-6">
                <div class="footer-info-single">
                    <h2 class="title"><i class="fa  fa-newspaper-o"></i> club partners</h2>
                    <h5 style="color: #aaa;">
                        <input class="form-control club-partners" type="text" placeholder="Enter Name :">
                        <input class="form-control club-partners" type="text" placeholder="Enter Mobile :">
                        <input class="form-control club-partners" type="text" placeholder="Enter Email :">
                        <input class="form-control btn-success" type="submit" value="Submit">
                    </h5>
                </div>
            </div><!---news-->
            <div class="col-md-4 col-sm-6">
                <div class="footer-info-single">
                    <h2 class="title"><i class="fa fa-users"></i> About Company</h2>
                    <h5 style="color: #aaa;"><i class="fa fa-angle-double-right"></i> h are also called political,
                        and sometimes municipal corporations, are those which have for their object the government
                        of a portion of
                    </h5>
                </div>
            </div><!---about-company-->
            <div class="col-md-4 col-sm-6">
                <div class="footer-info-single">
                    <h2 class="title"><i class="fa fa-comments-o" aria-hidden="true"></i> Contact Us</h2>
                    <ul class="list-unstyled">
                        <li><a href="tel:+989151114455" title=""><i class="fa fa-angle-double-right"></i>
                                +989151114455</a></li>
                        <li><a href="tel:+9821357778" title=""><i class="fa fa-angle-double-right"></i> +9821357778</a>
                        </li>
                        <li><a href="tel:+9821357778" title=""><i class="fa fa-angle-double-right"></i> +9821357778</a>
                        </li>
                    </ul>
                </div>
            </div><!---Contact-Us-->
        </div>
    </div>

    <section class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <p>Copyright © 2017. Ebtekar Sobat.</p>
                </div>
            </div>
        </div>
    </section><!---Copyright-->
</footer>

<!---btnGoToUp-->
<button class="btn animated slideInDown" id="goToUp">
    <i class="fa fa-caret-up"> Go Top </i>
</button>
<!----btnUndo--->
<button class="btn animated slideInUp" id="goToDown">
    <i class="fa fa-undo"> Return Back </i>
</button>

@include('layouts.site.script')
@yield('footer')

</body>

</html>