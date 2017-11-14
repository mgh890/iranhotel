<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>بخش مدیریت</title>

    <!-- Global stylesheets -->
    <link href="<?= url('resources/assets/css/icons/icomoon/styles.css') ?>" rel="stylesheet" type="text/css">
    <link href="<?= url('resources/assets/css/bootstrap.css') ?>" rel="stylesheet" type="text/css">
    <link href="<?= url('resources/assets/css/core.css') ?>" rel="stylesheet" type="text/css">
    <link href="<?= url('resources/assets/css/components.css') ?>" rel="stylesheet" type="text/css">
    <link href="<?= url('resources/assets/css/colors.css') ?>" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->



</head>

<body>
<!-- Main navbar -->
<div class="navbar navbar-inverse">

</div>
<!-- /main navbar -->


<!-- Page container -->
<div class="page-container login-container">

    <!-- Page content -->
    <div class="page-content">

        <!-- Main content -->
        <div class="content-wrapper">

            <!-- Content area -->
            <div class="content">
<span class="help-block">

                                    </span>
                <!-- Simple login form -->
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                    {{ csrf_field() }}
                    <div class="panel panel-body login-form">
                        <div class="text-center">
                            <div class="icon-object border-slate-300 text-slate-300"><i class="icon-reading"></i></div>
                            <h5 class="content-group">فرم ورود بخش مدیریت <small class="display-block">لطفا وارد شوید</small></h5>
                        </div>


                            <div class=" form-group {{ $errors->has('username') ? ' has-error' : '' }} has-feedback has-feedback-left">

                                <input class="form-control placeholder-no-fix" id="username" type="username" autocomplete="off" placeholder="نام کاربری" name="username" value="{{ old('username') }}">
                                <div class="form-control-feedback">
                                    <i class="icon-user text-muted"></i>
                                </div>
                            </div>
                            @if ($errors->has('username'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                            @endif




                        <div class="form-group has-feedback has-feedback-left">
                            <input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="رمز عبور" name="password" />
                        @if ($errors->has('password'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                            <div class="form-control-feedback">
                                <i class="icon-lock2 text-muted"></i>
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" name="submit" value="admin" class="btn btn-primary btn-block">    ورود   <i class="icon-circle-left2 position-right"></i></button>
                        </div>

                        <div class="text-center">
                            <a href="#">بازیابی رمز عبور</a>
                        </div>
                    </div>
                </form>
                <!-- /simple login form -->


                <!-- Footer -->
                <div class="footer text-muted">
                    <a href="#">بخش مدیریت سایت</a> |<a href="http://ebtekarsobat.com" target="_blank"> طراحی و برنامه نویسی :‌ شرکت ابتکار ثبات</a>
                </div>
                <!-- /footer -->

            </div>
            <!-- /content area -->

        </div>
        <!-- /main content -->

    </div>
    <!-- /page content -->

</div>
<!-- /page container -->

</body>
</html>
