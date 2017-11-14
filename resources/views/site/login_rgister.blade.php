@extends('layouts.site.site')
@section('header')
    <link rel="stylesheet" type="text/css" href="{{ url("resources/css/site/login_rgister.css") }}">
@endsection
@section('content')

    <!--forms-->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <div class="space-medium">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="account-holder">
                        <!--login-form-->
                        <h3>Login</h3>
                        <br>
                        <div class="row">
                            <form action="{{ url("login") }}" method="post">
                                {{ csrf_field() }}
                                <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label class="control-label required" for="email">Email<sup style="color:red">*</sup></label>
                                        <input id="email" name="email" type="text" class="form-control" placeholder="Enter Email Address">
                                        <span class="font-red">
                                            @if($errors->has('email'))
                                                {!! $errors->first('email') !!}
                                            @endif
                                       </span>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label class="control-label required" for="email">Password<sup style="color:red">*</sup></label>
                                        <input id="password" name="password" type="password" class="form-control" placeholder="password">
                                        <span class="font-red">
                                            @if($errors->has('password'))
                                                {!! $errors->first('password') !!}
                                            @endif
                                       </span>
                                    </div>
                                    <a href="#" class="forgot-password">Forgot Password?</a>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
                                    <button class="btn btn-primary btn-block">Login</button>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value=""  name="remember">
                                            <p>Remember Me?</p>
                                        </label>

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!--/.login-form-->
                <!--sing-up-form-->
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="account-holder">
                        <h3>Signup</h3>
                        <br>
                        <div class="row">
                            <form method="post" action="{{ url('/register') }}" >
                                {{ csrf_field() }}
                                <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label class="control-label required" for="name"> Name<sup style="color:red">*</sup></label>
                                        <input id="name" name="name" type="text" class="form-control" placeholder="Enter Your NAme">
                                        <span class="font-red">
                                            @if($errors->has('name'))
                                                {!! $errors->first('name') !!}
                                            @endif
                                       </span>
                                    </div>

                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label class="control-label required" for="phone">User Name<sup style="color:red">*</sup></label>
                                        <input id="phone" name="username" type="text" class="form-control" placeholder="Enter User Name">
                                        <span class="font-red">
                                            @if($errors->has('username'))
                                                {!! $errors->first('username') !!}
                                            @endif
                                       </span>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label class="control-label required" for="email">Email<sup style="color:red">*</sup></label>
                                        <input id="email" name="email" type="text" class="form-control" placeholder="Enter Email Address">
                                        <span class="font-red">
                                            @if($errors->has('email'))
                                                {!! $errors->first('email') !!}
                                            @endif
                                       </span>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label class="control-label required" for="password">Password<sup style="color:red">*</sup></label>
                                        <input id="password" name="password" type="password" class="form-control" placeholder="password">
                                        <span class="font-red">
                                            @if($errors->has('password'))
                                                {!! $errors->first('password') !!}
                                            @endif
                                       </span>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label class="control-label required" for="password">Confirm Password<sup style="color:red">*</sup></label>
                                        <input id="password" name="password_confirmation" type="password" class="form-control" placeholder="Confirm Password">
                                        <span class="font-red">
                                            @if($errors->has('password_confirmation'))
                                                {!! $errors->first('password_confirmation') !!}
                                            @endif
                                       </span>
                                    </div>

                                        <div class="form-group">
                                            {!! \Captcha::display() !!}
                                        </div>


                                    <div class="mb30">
                                        <p>Already have an account?   <a href="#">Login</a></p>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
                                    <button class="btn btn-primary btn-block">Register</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>
    <!--/.forms-->






@endsection
@section('footer')

@endsection