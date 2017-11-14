
<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>adminpanel</title>
    @include('layouts.admin.style')
    @yield('head')

 </head>
<body>
<!-- Main navbar -->
<div class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{url('/admin')}}"> مدیریت ایران هتل</a>
        <ul class="nav navbar-nav visible-xs-block">
            <li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
            <li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
        </ul>
    </div>

    <div class="navbar-collapse collapse" id="navbar-mobile">
        <ul class="nav navbar-nav">
            <li><a class="sidebar-control sidebar-main-toggle hidden-xs"><i class="icon-paragraph-justify3"></i></a></li>

            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="icon-git-compare"></i>
                    <span class="visible-xs-inline-block position-right">Git updates</span>
                    <span class="badge bg-warning-400">9</span>
                </a>

                <div class="dropdown-menu dropdown-content">
                    <div class="dropdown-content-heading">
                        Git updates
                        <ul class="icons-list">
                            <li><a href="#"><i class="icon-sync"></i></a></li>
                        </ul>
                    </div>

                    <ul class="media-list dropdown-content-body width-350">
                        <li class="media">
                            <div class="media-left">
                                <a href="#" class="btn border-primary text-primary btn-flat btn-rounded btn-icon btn-sm"><i class="icon-git-pull-request"></i></a>
                            </div>

                            <div class="media-body">
                                Drop the IE <a href="#">specific hacks</a> for temporal inputs
                                <div class="media-annotation">4 minutes ago</div>
                            </div>
                        </li>

                        <li class="media">
                            <div class="media-left">
                                <a href="#" class="btn border-warning text-warning btn-flat btn-rounded btn-icon btn-sm"><i class="icon-git-commit"></i></a>
                            </div>

                            <div class="media-body">
                                Add full font overrides for popovers and tooltips
                                <div class="media-annotation">36 minutes ago</div>
                            </div>
                        </li>

                    </ul>

                    <div class="dropdown-content-footer">
                        <a href="#" data-popup="tooltip" title="All activity"><i class="icon-menu display-block"></i></a>
                    </div>
                </div>
            </li>
        </ul>

        <p class="navbar-text"><span class="label bg-success-400">Online</span></p>

        <ul class="nav navbar-nav navbar-right" >
            <li style="width: 68px;display: flex;align-items: center;font-size: 14px;">
                <a class="a-btn" href="{{ url("/logout") }}" title="logout">
                    <span style="font-size: 18px"><i class="fa fa-sign-out" aria-hidden="true"></i></span>
                </a>
                <span>{{ Auth::user()->name }}</span>
            </li>

            <li class="dropdown language-selector">
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
            </li>

            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="icon-bubbles4"></i>
                    <span class="visible-xs-inline-block position-right">Messages</span>
                    <span class="badge bg-warning-400">2</span>
                </a>
                <div class="dropdown-menu dropdown-content width-350">
                    <div class="dropdown-content-heading">
                        Messages
                        <ul class="icons-list">
                            <li><a href="#"><i class="icon-compose"></i></a></li>
                        </ul>
                    </div>

                    <ul class="media-list dropdown-content-body">
                        <li class="media">
                            <div class="media-left">
                                <img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt="">
                                <span class="badge bg-danger-400 media-badge">5</span>
                            </div>

                            <div class="media-body">
                                <a href="#" class="media-heading">
                                    <span class="text-semibold">James Alexander</span>
                                    <span class="media-annotation pull-right">04:58</span>
                                </a>
                                <span class="text-muted">who knows, maybe that would be the best thing for me...</span>
                            </div>
                        </li>
                    </ul>

                    <div class="dropdown-content-footer">
                        <a href="#" data-popup="tooltip" title="All messages"><i class="icon-menu display-block"></i></a>
                    </div>
                </div>
            </li>
            <li class="dropdown dropdown-user">
                @if(Auth::check())
                    <a class="dropdown-toggle" data-toggle="dropdown">
                        <img src="{{ url('public/upload/avatar/'.Auth::user()->avatar.'') }}" alt="">
                        <span>{{ Auth::user()->fname }}</span>
                        <i class="caret"></i>
                    </a>
                @endif

                <ul class="dropdown-menu dropdown-menu-right">
                    <li><a href="#"><i class="icon-user-plus"></i> My profile</a></li>
                    <li><a href="#"><i class="icon-coins"></i> My balance</a></li>
                    <li><a href="#"><span class="badge bg-teal-400 pull-right">58</span> <i class="icon-comment-discussion"></i> Messages</a></li>
                    <li class="divider"></li>
                    <li><a href="#"><i class="icon-cog5"></i> Account settings</a></li>
                    <li><a href="{{ url("/logout") }}"><i class="icon-switch2"></i> Logout</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<!-- /main navbar -->
<!-- Page container -->
<div class="page-container">
    <!-- Page content -->
    <div class="page-content">
        <!-- Main sidebar -->
        <div class="sidebar sidebar-main">
            @include('layouts.admin.admin_menu');
        </div>
        <!-- /main sidebar -->
        <!-- Main content -->
        <div class="content-wrapper col-lg-12">
            @yield('content')
        </div>
        <div>

        </div>
    </div>
</div>

@include('layouts.admin.script')
@yield('footer')
</body>
</html>