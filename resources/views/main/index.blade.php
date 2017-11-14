@extends('layouts.site.site')
@section('header')
    <link rel="stylesheet" type="text/css" href="{{ url("resources/css/site/index.css") }}">
@endsection
@section('content')
    <section class="row" style="position:relative;">
        <div id="slider-1" class="owl-carousel owl-theme">
            <div class="item">
                <img src="{{ url('resources/img/hotel1320x742.jpg') }}" alt="">
            </div>
            <div class="item">
                <img src="{{ url('resources/img/Meriton-Grand-Conference-Spa-Hotel-Tallinn-04.jpg') }}" alt="">
            </div>
            <div class="item">
                <img src="{{ url('resources/img/outdoor-pool-summer-desktop-2.jpg') }}" alt="">
            </div>
        </div><!--slider-1-->
        <div id="ivi3-FormSlider" class="animated slideInLeft">
            <div class="main-login main-center">
                <h5>Enter the <b>Hotel</b> Department</h5><!--header-->
                <form class="" method="post" action="#">
                    <div class="form-group">
                        <div class="cols-sm-10">
                            <div class="input-group">
                              <span class="input-group-addon">
                                  <i class="fa fa-location-arrow animated rotateIn" aria-hidden="true"></i>
                              </span>
                                <div id="ivi3-parentSelect" style="background-color: #ffffff;border-radius: 3px;overflow: hidden;">
                                    <select class="form-control animated flipInX" name="Room" id="name"
                                            placeholder="Enter your Name">
                                        <option value="0">City</option>
                                        <option>mashhad</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="cols-sm-10">
                            <div class="input-group">
                              <span class="input-group-addon">
                                  <i class="fa fa-h-square animated rotateIn" aria-hidden="true"></i>
                              </span>
                                <div id="ivi3-parentSelect" style="background-color: #ffffff;border-radius: 3px;overflow: hidden;">
                                    <select class="form-control animated flipInX" name="Room" id="name"
                                            placeholder="Enter your Name">
                                        <option value="0">Select Hotel</option>
                                        <option>ati</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="fa fa-bed animated rotateIn" aria-hidden="true"></i>
                                </span>
                                <input type="number" class="form-control animated flipInX" name="confirm" id="confirm" placeholder="Number Room"/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-calendar animated rotateIn"
                                                                   aria-hidden="true"></i></span>
                                <input type="text" onfocus="(this.type='date')" class="form-control animated flipInX"
                                       name="email" id="email" placeholder="Choose Check In Date"/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-calendar animated rotateIn"
                                                                   aria-hidden="true"></i></span>
                                <input type="text" onfocus="(this.type='date')" class="form-control animated flipInX"
                                       name="username" id="username" placeholder="Choose Check Out Date"/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-sort-numeric-asc animated rotateIn"
                                                                   aria-hidden="true"></i></span>
                                <input type="number" class="form-control animated flipInX" name="password" id="password"
                                       placeholder="How many Children? (0-17)"/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group ">
                        <a href="" target="_blank" type="button" id="button"
                           class="btn btn-lg btn-block login-button hvr-float-shadow animated flipInX">Visit Page</a>
                    </div>
                </form><!--form-->
            </div>
        </div><!--form-on-slider-->
    </section>
    <!--full-top-slider-->



    <div class="row">
        <div class="col-lg-6  col-md-6">
            <div class="sliderb">
                <div class="row">
                    <p class="title"><span class="ka">FEATURED</span> HOTEL</p>
                </div>
                <div class='row'>
                    <div class='col-lg-12  col-md-12'>
                        <div class="carousel slide media-carousel" id="media">

                            <ol class="carousel-indicators">
                                <li data-target="#media" data-slide-to="0" class="active"></li>
                                <li data-target="#media" data-slide-to="1"></li>
                                <li data-target="#media" data-slide-to="2"></li>
                            </ol>

                            <div class="new">
                                <div class="carousel-inner">
                                    <div class="item  active">
                                        <div class="row">
                                            <div class="col-md-6  col-sm-6 col-xs-6 res">
                                                <a class="thumbnail" href="#">
                                                    <img alt="" src="{{ url('resources/img/index.jpg') }}">
                                                    <div class="box">
                                                        <div class="labela"><p>HOTEL <span>DARVISHI</span></p></div>
                                                        <div class="labelb">
                                                            <p>
                                                                <span><i class="fa fa-map-marker"
                                                                         aria-hidden="true"></i></span>
                                                                IRAN,MASHHAD</p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-6 res">
                                                <a class="thumbnail" href="#">
                                                    <img alt="" src="{{ url('resources/img/index2.jpg') }}">
                                                    <div class="box">
                                                        <div class="labela"><p>HOTEL <span>DARVISHI</span></p></div>
                                                        <div class="labelb">
                                                            <p>
                                                                <span><i class="fa fa-map-marker"
                                                                         aria-hidden="true"></i></span>
                                                                IRAN,MASHHAD</p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-6 res">
                                                <a class="thumbnail" href="#">
                                                    <img alt="" src="{{ url('resources/img/index3.jpg') }}">
                                                    <div class="box">
                                                        <div class="labela"><p>HOTEL <span>DARVISHI</span></p></div>
                                                        <div class="labelb">
                                                            <p>
                                                                <span><i class="fa fa-map-marker"
                                                                         aria-hidden="true"></i></span>
                                                                IRAN,MASHHAD</p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-6 res">
                                                <a class="thumbnail" href="#">
                                                    <img alt="" src="{{ url('resources/img/index4.jpg') }}">
                                                    <div class="box">
                                                        <div class="labela"><p>HOTEL <span>DARVISHI</span></p></div>
                                                        <div class="labelb">
                                                            <p>
                                                                <span><i class="fa fa-map-marker"
                                                                         aria-hidden="true"></i></span>
                                                                IRAN,MASHHAD</p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>


                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6  col-xs-6 res">
                                                <a class="thumbnail" href="#">
                                                    <img alt="" src="{{ url('resources/img/index.jpg') }}">
                                                    <div class="box">
                                                        <div class="labela"><p>HOTEL <span>DARVISHI</span></p></div>
                                                        <div class="labelb">
                                                            <p>
                                                                <span><i class="fa fa-map-marker"
                                                                         aria-hidden="true"></i></span>
                                                                IRAN,MASHHAD</p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-6 res">
                                                <a class="thumbnail" href="#">
                                                    <img alt="" src="{{ url('resources/img/index2.jpg') }}">
                                                    <div class="box">
                                                        <div class="labela"><p>HOTEL <span>DARVISHI</span></p></div>
                                                        <div class="labelb">
                                                            <p>
                                                                <span><i class="fa fa-map-marker"
                                                                         aria-hidden="true"></i></span>
                                                                IRAN,MASHHAD</p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-6 res">
                                                <a class="thumbnail" href="#">
                                                    <img alt="" src="{{ url('resources/img/index3.jpg') }}">
                                                    <div class="box">
                                                        <div class="labela"><p>HOTEL <span>DARVISHI</span></p></div>
                                                        <div class="labelb">
                                                            <p>
                                                                <span><i class="fa fa-map-marker"
                                                                         aria-hidden="true"></i></span>
                                                                IRAN,MASHHAD</p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-6 res">
                                                <a class="thumbnail" href="#">
                                                    <img alt="" src="{{ url('resources/img/index4.jpg') }}">
                                                    <div class="box">
                                                        <div class="labela"><p>HOTEL <span>DARVISHI</span></p></div>
                                                        <div class="labelb">
                                                            <p>
                                                                <span><i class="fa fa-map-marker"
                                                                         aria-hidden="true"></i></span>
                                                                IRAN,MASHHAD</p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>


                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6 col-xs-6 res">
                                                <a class="thumbnail" href="#">
                                                    <img alt="" src="{{ url('resources/img/index.jpg') }}">
                                                    <div class="box">
                                                        <div class="labela"><p>HOTEL <span>DARVISHI</span></p></div>
                                                        <div class="labelb">
                                                            <p>
                                                                <span><i class="fa fa-map-marker"
                                                                         aria-hidden="true"></i></span>
                                                                IRAN,MASHHAD</p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-6 res">
                                                <a class="thumbnail" href="#">
                                                    <img alt="" src="{{ url('resources/img/index2.jpg') }}">
                                                    <div class="box">
                                                        <div class="labela"><p>HOTEL <span>DARVISHI</span></p></div>
                                                        <div class="labelb">
                                                            <p>
                                                                <span><i class="fa fa-map-marker"
                                                                         aria-hidden="true"></i></span>
                                                                IRAN,MASHHAD</p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-6 res">
                                                <a class="thumbnail" href="#">
                                                    <img alt="" src="{{ url('resources/img/index3.jpg') }}">
                                                    <div class="box">
                                                        <div class="labela"><p>HOTEL <span>DARVISHI</span></p></div>
                                                        <div class="labelb">
                                                            <p>
                                                                <span><i class="fa fa-map-marker"
                                                                         aria-hidden="true"></i></span>
                                                                IRAN,MASHHAD</p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-6 res">
                                                <a class="thumbnail" href="#">
                                                    <img alt="" src="{{ url('resources/img/index4.jpg') }}">
                                                    <div class="box">
                                                        <div class="labela"><p>HOTEL <span>DARVISHI</span></p></div>
                                                        <div class="labelb">
                                                            <p>
                                                                <span><i class="fa fa-map-marker"
                                                                         aria-hidden="true"></i></span>
                                                                IRAN,MASHHAD</p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="left carousel-control" href="#media" data-slide="prev">
                                <span class="fa fa-chevron-left  icon-left" aria-hidden="true"></span>
                            </a>
                            <a class="right carousel-control   " href="#media" data-slide="next">
                                <span class="fa fa-chevron-right  icon-right " aria-hidden="true"></span>
                            </a>
                            {{--<a data-slide="prev" href="#media" class="left carousel-control">‹</a>--}}
                            {{--<a data-slide="next" href="#media" class="right carousel-control">›</a>--}}
                            {{----}}

                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-lg-6  col-md-6 hidden-sm hidden-xs">

            <section class="jk-slider  slidera">
                <div id="carousel-example" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="item active">
                            <a href="#"><img src="{{ url('resources/img/BUSINESS.jpg') }}"/></a>
                            <div class="hero">
                                <hgroup>
                                    <p class="pa animated slideInLeft" style="animation-delay: 0.3s">BUSINESS ROOM1</p>
                                    <p class="pb animated slideInRight" style="animation-delay: 0.3s">WORKROOM FOR BUSINESS PEOPLE </p>
                                    <p class="pc animated flipInX" style="animation-delay: 0.5s">STARTING AT $250</p>
                                </hgroup>
                            </div>
                        </div>
                        <div class="item">
                            <a href="#"><img src="{{ url('resources/img/BUSINESS.jpg') }}"/></a>
                            <div class="hero">
                                <hgroup class="hgroupb">
                                    <p class="pa animated slideInLeft" style="animation-delay: 0.3s">BUSINESS ROOM1</p>
                                    <p class="pb animated slideInRight" style="animation-delay: 0.3s">WORKROOM FOR BUSINESS PEOPLE </p>
                                    <p class="pc animated flipInX" style="animation-delay: 0.5s">STARTING AT $250</p>
                                </hgroup>
                            </div>
                        </div>
                        <div class="item">
                            <a href="#"><img src="{{ url('resources/img/BUSINESS.jpg') }}"/></a>
                            <div class="hero">
                                <hgroup class="hgroupc">
                                    <p class="pa animated slideInLeft" style="animation-delay: 0.3s">BUSINESS ROOM1</p>
                                    <p class="pb animated slideInRight" style="animation-delay: 0.3s">WORKROOM FOR BUSINESS PEOPLE </p>
                                    <p class="pc animated flipInX" style="animation-delay: 0.5s">STARTING AT $250</p>
                                </hgroup>

                            </div>
                        </div>
                    </div>

                    <a class="left carousel-control" href="#carousel-example" data-slide="prev">
                        <span class="fa fa-chevron-left  icon-left" aria-hidden="true"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example" data-slide="next">
                        <span class="fa fa-chevron-right  icon-right " aria-hidden="true"></span>
                    </a>
                </div>

            </section>
        </div>
    </div>
    {{--------------------jazebe-------------------}}
    <div class="row">
        <div class="col-lg-12">
            <div class="jazebe">
                <div class="content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="jazebetitle">
                                <p class="pa"><span class="icon"><img src="{{url('resources/img/tourism.png')}}"></span><span>IRAN</span> TOURIST ATTRACTIONS</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-3  col-sm-6 col-xs-6 boxcol">
                            <div   class="box boxa ">
                                <div class="image">
                                    <img src="{{ url('resources/img/tehran.jpg') }}">
                                    <div class="title">
                                        <span>Tehran</span>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 boxcol">
                            <div   class="box  boxb ">
                                <div class="image">
                                    <img src="{{ url('resources/img/esfehan.jpg') }}">
                                    <div class="title">
                                        <span>Tehran</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 boxcol">
                            <div  class="box  boxc ">
                                <div class="image">
                                    <img src="{{ url('resources/img/shiraz.jpg') }}">
                                    <div class="title">
                                        <span>Tehran</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3  col-md-3  col-sm-6  col-xs-6  boxcol ">
                            <div  class="box boxe  ">
                                <div class="image">
                                    <img src="{{ url('resources/img/mashhad.jpg') }}">
                                    <div class="title">
                                        <span>Tehran</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row click">
                        <div class="sumbit"><span><a href="#1">MORE</a></span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--------------- Paraloxa ----------------}}
    <div class="row">
        <div class="Paraloxa">
            <div class="content">
                <div class="box">
                    <p class="pa">LOBBY FOR RELAXATION</p>
                    <p class="pb">Find the perfect Luxury Hotel stock photos and editorial news pictures from Getty
                        Images. Download </p>
                    <p class="pc">Hotel Nordurland. Common Area and Exterior. 24 pcs. 09.05.2016. Images of the</p>
                </div>
            </div>
        </div>
    </div>
    {{--------------- PACKAGE ----------------}}
    <div class="row">
        <div class="col-lg-12">
            <div class="package">
                <div class="content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="packagetitle">
                                <p class="pa"><span>TOURISM</span> PACKAGE </p>
                                <p class="pb"><span>IRAN /</span> POPULAR DESTINATIONS </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-3  col-sm-6 col-xs-6 boxcol">
                            <div class="box boxa">
                                <div class="image">
                                    <img src="{{ url('resources/img/tehran.jpg') }}">
                                    <div class="title">
                                        <span>Tehran</span>
                                    </div>
                                </div>
                                <div class="description"><p>IRAVIVAN CAPITSA KNOWN FOR THE ORNATEH GOLECJK PA;ACE
                                        MUSEUMS PANORAMIC VIEWS FROM <span>...MORE</span></p></div>
                                <div class="icons">
                                    <div class="icoa icon">
                                        <span class="ic"><i class="fa fa-compass" aria-hidden="true"></i></span>
                                        <span class="tit">TRAVEL GUIDE</span>
                                    </div>
                                    <div class="icob icon">
                                        <span class="ic"><i class="fa fa-plane" aria-hidden="true"></i></span>
                                        <span class="tit">FLIGHT</span>
                                    </div>
                                    <div class="icoc icon">
                                        <span class="ic"><i class="fa fa-bed" aria-hidden="true"></i></span>
                                        <span class="tit">HOTEL</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 boxcol">
                            <div class="box  boxb">
                                <div class="image">
                                    <img src="{{ url('resources/img/esfehan.jpg') }}">
                                    <div class="title">
                                        <span>Tehran</span>
                                    </div>
                                </div>
                                <div class="description"><p>IRAVIVAN CAPITSA KNOWN FOR THE ORNATEH GOLECJK PA;ACE
                                        MUSEUMS PANORAMIC VIEWS FROM <span>...MORE</span></p></div>
                                <div class="icons">
                                    <div class="icoa icon">
                                        <span class="ic"><i class="fa fa-compass" aria-hidden="true"></i></span>
                                        <span class="tit">TRAVEL GUIDE</span>
                                    </div>
                                    <div class="icob icon">
                                        <span class="ic"><i class="fa fa-plane" aria-hidden="true"></i></span>
                                        <span class="tit">FLIGHT</span>
                                    </div>
                                    <div class="icoc icon">
                                        <span class="ic"><i class="fa fa-bed" aria-hidden="true"></i></span>
                                        <span class="tit">HOTEL</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 boxcol">
                            <div class="box  boxc">
                                <div class="image">
                                    <img src="{{ url('resources/img/shiraz.jpg') }}">
                                    <div class="title">
                                        <span>Tehran</span>
                                    </div>
                                </div>
                                <div class="description"><p>IRAVIVAN CAPITSA KNOWN FOR THE ORNATEH GOLECJK PA;ACE
                                        MUSEUMS PANORAMIC VIEWS FROM <span>...MORE</span></p></div>
                                <div class="icons">
                                    <div class="icoa icon">
                                        <span class="ic"><i class="fa fa-compass" aria-hidden="true"></i></span>
                                        <span class="tit">TRAVEL GUIDE</span>
                                    </div>
                                    <div class="icob icon">
                                        <span class="ic"><i class="fa fa-plane" aria-hidden="true"></i></span>
                                        <span class="tit">FLIGHT</span>
                                    </div>
                                    <div class="icoc icon">
                                        <span class="ic"><i class="fa fa-bed" aria-hidden="true"></i></span>
                                        <span class="tit">HOTEL</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3  col-md-3  col-sm-6  col-xs-6  boxcol ">
                            <div class="box boxe">
                                <div class="image">
                                    <img src="{{ url('resources/img/mashhad.jpg') }}">
                                    <div class="title">
                                        <span>Tehran</span>
                                    </div>
                                </div>
                                <div class="description"><p>IRAVIVAN CAPITSA KNOWN FOR THE ORNATEH GOLECJK PA;ACE
                                        MUSEUMS PANORAMIC VIEWS FROM <span>...MORE</span></p></div>
                                <div class="icons">
                                    <div class="icoa icon">
                                        <span class="ic"><i class="fa fa-compass" aria-hidden="true"></i></span>
                                        <span class="tit">TRAVEL GUIDE</span>
                                    </div>
                                    <div class="icob icon">
                                        <span class="ic"><i class="fa fa-plane" aria-hidden="true"></i></span>
                                        <span class="tit">FLIGHT</span>
                                    </div>
                                    <div class="icoc icon">
                                        <span class="ic"><i class="fa fa-bed" aria-hidden="true"></i></span>
                                        <span class="tit">HOTEL</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    {{------------------souvenir-----------------}}
    <div class="row">
        <div class="col-lg-12">
            <div class="souvenir">
                <div class="content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="souvenirtitle">
                                <p class="pa"><span class="icon"><img src="{{url('resources/img/souvenirs.png')}}"></span>  <span>IRANIAN</span> SOUVENIRS AND DISHES</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2 col-md-4  col-sm-4 col-xs-6 boxcol">
                            <div   class="box boxa ">
                                <div class="image">
                                    <img src="{{ url('resources/img/tehran.jpg') }}">
                                    <div class="title">
                                        <span>Tehran</span>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6 boxcol">
                            <div   class="box  boxb ">
                                <div class="image">
                                    <img src="{{ url('resources/img/esfehan.jpg') }}">
                                    <div class="title">
                                        <span>Tehran</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6 boxcol">
                            <div  class="box  boxc ">
                                <div class="image">
                                    <img src="{{ url('resources/img/shiraz.jpg') }}">
                                    <div class="title">
                                        <span>Tehran</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2  col-md-4  col-sm-4  col-xs-6  boxcol ">
                            <div  class="box boxe  ">
                                <div class="image">
                                    <img src="{{ url('resources/img/mashhad.jpg') }}">
                                    <div class="title">
                                        <span>Tehran</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6 boxcol">
                            <div  class="box  boxc ">
                                <div class="image">
                                    <img src="{{ url('resources/img/shiraz.jpg') }}">
                                    <div class="title">
                                        <span>Tehran</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2  col-md-4  col-sm-4  col-xs-6  boxcol ">
                            <div  class="box boxe  ">
                                <div class="image">
                                    <img src="{{ url('resources/img/mashhad.jpg') }}">
                                    <div class="title">
                                        <span>Tehran</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row click">
                        <div class="sumbit"><span><a href="#1">MORE</a></span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--------------- Paraloxb ----------------}}
    <div class="row">
        <div class="Paraloxb">
            <div class="content">
                <div class="box">
                    <p class="pa">LOBBY FOR RELAXATION</p>
                    <p class="pb">Find the perfect Luxury Hotel stock photos and editorial news pictures from Getty
                        Images. Download </p>
                    <p class="pc">Hotel Nordurland. Common Area and Exterior. 24 pcs. 09.05.2016. Images of the</p>
                </div>
            </div>
        </div>
    </div>

{{-------------visa-----------------}}
    <div class="row">
        <div class="col-lg-12">
            <div class="visa">
                <div class="title">
                    <p>VISA <span>STEPS</span></p>
                </div>
                <div class="content">
                    <p>LOBBY FOR RELAXATION Find the perfect Luxury Hotel stock photos and editorial news pictures from
                        Getty Images. Download Hotel Nordurland. Common Area and Exterior. 24 pcs. 09.05.2016. Images of
                        the LOBBY FOR RELAXATION Find the perfect Luxury Hotel stock photos and editorial news pictures
                        from Getty Images. Download Hotel Nordurland. Common Area and Exterior. 24 pcs. 09.05.2016.
                        Images of the LOBBY FOR RELAXATION Find the perfect Luxury Hotel stock photos and editorial news
                        pictures from Getty Images. Download Hotel Nordurland. Common Area and Exterior. 24 pcs.
                        09.05.2016. Images of the<span>...MORE</span></p>
                </div>
                <div class="row click">
                    <div class="sumbit"><span><a href="#1">VISA REGISTRATION</a></span></div>
                </div>
            </div>
        </div>
    </div>


@endsection