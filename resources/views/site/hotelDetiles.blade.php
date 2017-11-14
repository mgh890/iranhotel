@extends("layouts.site.site")
@section("header")
    <link rel="stylesheet" type="text/css" href="{{ url("resources/css/site/hotelDetiles.css") }}">
@endsection

@section("content")
    @include("layouts.site.breadcrumb")
    <div class="row" id="hotelBigImg">
        <img src="{{ url('resources/img/hotel1320x742.jpg') }}">
    </div><!--hotel-big-image-->
    <main class="container" id="hotelDetiles">
        <section class="box-hotel row" id="aboutHotel">
            <header class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="col-lg-5 col-md-6 col-sm-8 col-xs-12">
                            <div class="nameHotel">
                                <span>
                                    <img src="{{ url('resources/img/e672d52f24153fc27c8a6b7237a8a5f2.svg') }}" width="35">
                                </span>
                                <h1>Toranj Marine Hotel</h1>
                                <span class="star-hotel" style="color: #777;font-size: 17px;">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <b style="font-size: smaller;">5 Star</b>
                                </span>
                                <h6><span><i class="fa fa-map-marker"></i> </span> Iran / kish Island</h6>
                            </div>
                        </div>
                <div class="col-lg-4 col-md-3 col-sm-3 col-xs-9">
                            <div class="box-btn">
                                <a href="">
                                    <span><i class="fa fa-shopping-cart"></i><i> Reserve Hotel</i></span>
                                </a>
                            </div>
                            <div class="box-btn">
                                <a class="a2" href="">
                                    <span>
                                        <i style="color: #e54848" class="fa fa-heart"></i><i class="hidden-xs"> Favorite</i></span>
                                </a>
                            </div>
                        </div>
                <div class="col-lg-3 col-md-3 col-sm-1 col-xs-3">
                    <div id="offerLabel">
                        <label>30%
                            <span>OFFER</span>
                        </label>
                    </div>
                </div>
            </header><!--header-->
            <div class="col-lg-12" style="z-index: 2;">
                <div class="col-lg-6 col-md-6 col-sm-8 col-xs-12 no-padding-xs">
                    <div id="slider-2" class="owl-carousel owl-theme" data-slider-id="1">
                        <figure class="item">
                            <img src="{{ url('resources/img/1485252_1600x1200.jpg') }}" alt="">
                        </figure>
                        <figure class="item">
                            <img src="{{ url('resources/img/1485252_1600x1200.jpg') }}" alt="">
                        </figure>
                        <figure class="item">
                            <img src="{{ url('resources/img/1485252_1600x1200.jpg') }}" alt="">
                        </figure>
                    </div><!--slider-1-->
                </div><!--slider-->
                <div class="col-lg-1 col-md-2 hidden-sm hidden-xs"></div><!--thumbnails-->
                <div class="col-lg-5 col-md-4 col-sm-4 col-xs-12">
                     <div class="description">
                         <div class="col-lg-4 col-md-4 hidden-sm hidden-xs">
                             <div class="option">
                                 <span><i class="fa fa-exchange fa-rotate-90"></i></span>
                                 <span>Floor Number</span>
                                 <span class="number">6</span>
                             </div>
                             <div class="option">
                                 <span><i class="fa fa-exchange fa-rotate-90"></i></span>
                                 <span>Room Number</span>
                                 <span class="number">75</span>
                             </div>
                             <div class="option">
                                 <span><i class="fa fa-exchange fa-rotate-90"></i></span>
                                 <span>Room Delivery</span>
                                 <span class="number">14 : 00</span>
                             </div>
                             <div class="option">
                                 <span><i class="fa fa-exchange fa-rotate-90"></i></span>
                                 <span>Evacuate Room</span>
                                 <span class="number">12 : 00</span>
                             </div>
                         </div>
                         <div class="col-lg-8 col-md-8 col-sm-12 hidden-xs">
                             <p>A text file (sometimes spelled "textfile"; an old alternative name is "flatfile") is a kind of computer file that is structured as a sequence of lines of electronic text. A text file exists stored as data within a computer file system. The end of a text file is often denoted by placing one or more special characters, known as an end-of-file marker, after the last line in a text file. Such markers were required under the CP/M and MS-DOS operating systems. On modern operating systems such as Windows and Unix-like systems, text files do not contain any special EOF character.</p>
                         </div>
                     </div>
                </div><!---->
            </div>
            <div class="background"></div>
        </section>



        <div class="row" id="reservroom">
            <div class="col-lg-12 col-md-12 ">
               <div class="row" id="title_reservroom">
                   <div class="col-lg-12 col-md-12  col-sm-12 col-xs-12 ">
                       <div class="tilte">
                           <div class="box">
                               <p><span><i class="flaticon-room-key"></i></span><span class="tit"> PHOTO OF TOUR</span></p>
                           </div>
                       </div>
                   </div>
               </div>
               <div class="row" id="content_reservroom">
                    <div class="col-lg-3  col-sm-3   col-xs-6 colpadding minbox  minboxa ">
                        <div class="tilte">
                             <h6>ROOM CAPACITY</h6>
                        </div>
                        <div class="content">
                            <div class="img-room">
                                 <img src="{{  url('resources/img/1485252_1600x1200.jpg') }}" alt="">
                                <span class="icon"><i class="fa fa-user-o" aria-hidden="true"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-3 col-xs-6 colpadding minbox   minboxb    ">
                        <div class="tilte">
                                <h6>ROOM TYPE</h6>
                        </div>
                        <div class="content roomtype" >
                            <div class="boxa"><h6>ROOM ONE BED</h6></div>
                            <div class="boxb"><h6>FLAT TYPE: 1 SINGLE BED</h6></div>
                            <div class="boxb"><h6>(NO CAPACITY ADDED)</h6></div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-2 col-xs-6 colpadding  minbox  minboxc">
                        <div class="tilte">
                                <h6>CATERING</h6>
                        </div>
                        <div class="content catering">
<ul>
    <li><span class="tit">BREAKFAST</span><span><i class="fa fa-check-square-o" aria-hidden="true"></i></span></li>
    <li><span class="tit">LUNCH</span><span><i class="fa fa-square-o" aria-hidden="true"></i></span></li>
    <li><span class="tit">DINNER</span><span><i class="fa fa-square-o" aria-hidden="true"></i></span></li>
</ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-4 col-xs-6 colpadding minboxd ">
                        <div class="tilte">
                                <h6>TODAY'S PRICE (EVERY NIGHT)</h6>
                        </div>
                        <div class="content  price">
                            <div class="prices">
                                <div class="box">UNION PRICE : <span class="num">285$</span>  </div>
                                <div class="box">DISCOUNTED PRICE : <span class="num">250$</span> </div>
                            </div>
                            <div class="click_box">
                                <div class="box">
                                    <div class="boxb"></div>
                                    <a href="#1">RESERV ROOM </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" id="content_reservroom">
                    <div class="col-lg-3 col-sm-3 col-xs-6 colpadding minbox  minboxa ">
                        <div class="tilte">
                            <h6>ROOM CAPACITY</h6>
                        </div>
                        <div class="content">
                            <div class="img-room">
                                <img src="{{  url('resources/img/1485252_1600x1200.jpg') }}" alt="">
                                <span class="icon"><i class="fa fa-user-o" aria-hidden="true"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-3 col-xs-6 colpadding minbox  minboxb ">
                        <div class="tilte">
                            <h6>ROOM TYPE</h6>
                        </div>
                        <div class="content roomtype" >
                            <div class="boxa"><h6>ROOM ONE BED</h6></div>
                            <div class="boxb"><h6>FLAT TYPE: 1 SINGLE BED</h6></div>
                            <div class="boxb"><h6>(NO CAPACITY ADDED)</h6></div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-2 col-xs-6 colpadding  minbox  minboxc">
                        <div class="tilte">
                            <h6>CATERING</h6>
                        </div>
                        <div class="content catering">
                            <ul>
                                <li><span class="tit">BREAKFAST</span><span><i class="fa fa-check-square-o" aria-hidden="true"></i></span></li>
                                <li><span class="tit">LUNCH</span><span><i class="fa fa-square-o" aria-hidden="true"></i></span></li>
                                <li><span class="tit">DINNER</span><span><i class="fa fa-square-o" aria-hidden="true"></i></span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-4 col-xs-6 colpadding minboxd ">
                        <div class="tilte">
                            <h6>TODAY'S PRICE (EVERY NIGHT)</h6>
                        </div>
                        <div class="content  price">
                            <div class="prices">
                                <div class="box">UNION PRICE : <span class="num">285$</span>  </div>
                                <div class="box">DISCOUNTED PRICE : <span class="num">250$</span> </div>
                            </div>
                            <div class="click_box">
                                <div class="box">
                                    <div class="boxb"></div>
                                    <a href="#1">RESERV ROOM </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" id="content_reservroom">
                    <div class="col-lg-3 col-sm-3 col-xs-6 colpadding minbox  minboxa">
                        <div class="tilte">
                            <h6>ROOM CAPACITY</h6>
                        </div>
                        <div class="content">
                            <div class="img-room">
                                <img src="{{  url('resources/img/1485252_1600x1200.jpg') }}" alt="">
                                <span class="icon"><i class="fa fa-user-o" aria-hidden="true"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-3 col-xs-6 colpadding minbox  minboxb ">
                        <div class="tilte">
                            <h6>ROOM TYPE</h6>
                        </div>
                        <div class="content roomtype" >
                            <div class="boxa"><h6>ROOM ONE BED</h6></div>
                            <div class="boxb"><h6>FLAT TYPE: 1 SINGLE BED</h6></div>
                            <div class="boxb"><h6>(NO CAPACITY ADDED)</h6></div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-2 col-xs-6 colpadding  minbox  minboxc  ">
                        <div class="tilte">
                            <h6>CATERING</h6>
                        </div>
                        <div class="content catering">
                            <ul>
                                <li><span class="tit">BREAKFAST</span><span><i class="fa fa-check-square-o" aria-hidden="true"></i></span></li>
                                <li><span class="tit">LUNCH</span><span><i class="fa fa-square-o" aria-hidden="true"></i></span></li>
                                <li><span class="tit">DINNER</span><span><i class="fa fa-square-o" aria-hidden="true"></i></span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-4 col-xs-6 colpadding  minboxd ">
                        <div class="tilte">
                            <h6>TODAY'S PRICE (EVERY NIGHT)</h6>
                        </div>
                        <div class="content  price">
                            <div class="prices">
                                <div class="box">UNION PRICE : <span class="num">285$</span>  </div>
                                <div class="box">DISCOUNTED PRICE : <span class="num">250$</span> </div>
                            </div>
                            <div class="click_box">
                                <div class="box">
                                    <div class="boxb"></div>
                                    <a href="#1">RESERV ROOM </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--content-->

        <div class="row">
            <div class="col-lg-12 col-sm-12 colpadding">
                <div class="details box-hotel">
                    <div class="tilte">
                        <div class="box">
                            <p><span><i class="fa fa-bed" aria-hidden="true"></i></span><span class="tit">DETAIL HOTEL</span></p>
                        </div>
                        <div class="namehotel">
                            <h5>ZANDEY HOTEL</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-sm-6">
                            <ul class="ul-left">
                                <li><span class="icon"><i class="fa fa-wifi" aria-hidden="true"></i></span><span class="matn">BREAKFAST</span></li>
                                <li><span class="icon"><i class="fa fa-wifi" aria-hidden="true"></i></span><span class="matn">COFESHOP</span></li>
                                <li><span class="icon"><i class="fa fa-wifi" aria-hidden="true"></i></span><span class="matn">RESTAURANT</span></li>
                                <li><span class="icon"><i class="fa fa-wifi" aria-hidden="true"></i></span><span class="matn">ROOM SERIC</span></li>
                            </ul>
                            <ul class="ul-right">
                                <li><span class="icon"><i class="fa fa-wifi" aria-hidden="true"></i></span><span class="matn">FREE WIFI</span></li>
                                <li><span class="icon"><i class="fa fa-wifi" aria-hidden="true"></i></span><span class="matn">FREE POOL</span></li>
                                <li><span class="icon"><i class="fa fa-wifi" aria-hidden="true"></i></span><span class="matn">TV IN ROOM</span></li>
                                <li><span class="icon"><i class="fa fa-wifi" aria-hidden="true"></i></span><span class="matn">FARS PROVINCE SHIRAZ HEJ</span></li>
                            </ul>
                        </div>
                        <div class="col-lg-6 col-sm-6   ">
                            <header id="myCarousel" class="carousel slide">
                                <!-- Wrapper for Slides -->
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <!-- Set the first background image using inline CSS below. -->
                                        <div class="fill"><img src="http://placehold.it/1900x1080&text=Slide One"> </div>
                                    </div>
                                    <div class="item">
                                        <!-- Set the second background image using inline CSS below. -->
                                        <div class="fill"><img src="http://placehold.it/1900x1080&text=Slide Two"> </div>
                                    </div>
                                    <div class="item">
                                        <!-- Set the third background image using inline CSS below. -->
                                        <div class="fill"><img src="http://placehold.it/1900x1080&text=Slide Three"> </div>
                                    </div>
                                </div>
                                <!-- Controls -->
                                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                    <span class="icon-prev"></span>
                                </a>
                                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                    <span class="icon-next"></span>
                                </a>
                            </header>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row" id="box-bottom">
            <div class="col-lg-6 col-md-6 col-sm-6  col-xs-12" id="general">
                <div class="row boxtitle">
                    <div class="col-lg-12 col-md-12">
                        <div class="tilte">
                            <div class="box">
                                <p><span><i class="fa fa-info" aria-hidden="true"></i></span><span class="tit">GENERAL FEATURES OF ZANDIEH HOTEL</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row boxcont">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                      <div class="tit">PRODUCTION DATE</div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 ">
                        <div class="cont">2014 / 1394</div>
                    </div>
                </div>
                <div class="row boxcont">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <div class="tit">HOTEL VIEW</div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <div class="cont">MOUNTAIN | HOTEL ROOM</div>
                    </div>
                </div>
                <div class="row boxcont">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <div class="tit">NUMBER OF ROOMS</div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <div class="cont">ROOM 75</div>
                    </div>
                </div>
                <div class="row boxcont">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <div class="tit">NUMBER OF RFLOORS</div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <div class="cont">RFLOORS 6</div>
                    </div>
                </div>
                <div class="row boxcont">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <div class="tit">NUMBER OF BEDS</div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <div class="cont">BEDS 150</div>
                    </div>
                </div>
                <div class="row boxcont">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <div class="tit">LOLBBY CAPACITY</div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <div class="cont">PEOPLE 50</div>
                    </div>
                </div>
                <div class="row boxcont">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <div class="tit">TRAFFIC SITUATION</div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <div class="cont">OUT OF RANGE OF TRAFFIC PLANC</div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6  col-sm-6 col-xs-12  " id="features"  >
                <div class="row boxtitle">
                    <div class="col-lg-12 col-md-12">
                        <div class="tilte">
                            <div class="box">
                                <p><span><i class="fa fa-list-alt" aria-hidden="true"></i></span><span class="tit">HOTEL FEATURES</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row boxcont">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <div class="tit">PRODUCTION DATE</div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <div class="cont">2014 / 1394</div>
                    </div>
                </div>
                <div class="row boxcont">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <div class="tit">HOTEL VIEW</div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <div class="cont">MOUNTAIN | HOTEL ROOM</div>
                    </div>
                </div>
                <div class="row boxcont">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <div class="tit">NUMBER OF ROOMS</div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <div class="cont">ROOM 75</div>
                    </div>
                </div>
                <div class="row boxcont">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <div class="tit">NUMBER OF RFLOORS</div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <div class="cont">RFLOORS 6</div>
                    </div>
                </div>



            </div>
        </div>


    </main>
@endsection

@section("footer")
<script>
    $(document).ready(function() {
        $('.carousel').carousel({
            interval: false //changes the speed
        })
    });

</script>
@endsection
