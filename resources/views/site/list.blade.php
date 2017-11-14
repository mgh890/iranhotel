@extends('layouts.site.site')
@section('header')
    <link rel="stylesheet" type="text/css" href="{{ url("resources/css/site/list.css") }}">
@endsection
@section('content')
    @include("layouts/site/breadcrumb")<!--address-social-->


    <main class="container">
        <div id="hotelList">
            <section id="slider" class="row box-hotel">
                <div class="col-lg-12">
                    <header>
                        <span><img src="{{ url("resources/img/5-star-icons-golden-CC.png") }}" width="70"></span>
                        <h5>THE BEST OF THE WEEK</h5>
                    </header>
                </div><!--slider-->
                <div class="col-lg-9 col-md-8 col-sm-12">
                    <div id="slider-2" class="owl-carousel owl-theme" data-slider-id="1">
                        <figure class="item">
                            <img src="{{ url('resources/img/1485252_1600x1200.jpg') }}" alt="">
                            <figcaption>
                                <h6><span><i class="fa fa-map-marker"></i> </span> Iran / kish Island</h6>
                                <h5>Toranj Marine Hotel
                                    <span>5 Star</span>
                                    <a href="">
                                        <span>
                                            <i class="fa fa-eye"></i>
                                        </span>View Hotel</a>
                                </h5>
                            </figcaption>
                        </figure>
                        <figure class="item">
                            <img src="{{ url('resources/img/1485252_1600x1200.jpg') }}" alt="">
                            <figcaption>
                                <h6><span><i class="fa fa-map-marker"></i> </span> Iran / kish Island</h6>
                                <h5>Toranj Marine Hotel
                                    <span>5 Star</span>
                                    <a href="">
                                        <span>
                                            <i class="fa fa-eye"></i>
                                        </span>View Hotel</a>
                                </h5>
                            </figcaption>
                        </figure>
                        <figure class="item">
                            <img src="{{ url('resources/img/1485252_1600x1200.jpg') }}" alt="">
                            <figcaption>
                                <h6><span><i class="fa fa-map-marker"></i> </span> Iran / kish Island</h6>
                                <h5>Toranj Marine Hotel
                                    <span>5 Star</span>
                                    <a href="">
                                        <span>
                                            <i class="fa fa-eye"></i>
                                        </span>View Hotel</a>
                                </h5>
                            </figcaption>
                        </figure>
                        <figure class="item">
                            <img src="{{ url('resources/img/1485252_1600x1200.jpg') }}" alt="">
                            <figcaption>
                                <h6><span><i class="fa fa-map-marker"></i> </span> Iran / kish Island</h6>
                                <h5>Toranj Marine Hotel
                                    <span>5 Star</span>
                                    <a href="">
                                        <span>
                                            <i class="fa fa-eye"></i>
                                        </span>View Hotel</a>
                                </h5>
                            </figcaption>
                        </figure>
                        <figure class="item">
                            <img src="{{ url('resources/img/1485252_1600x1200.jpg') }}" alt="">
                            <figcaption>
                                <h6><span><i class="fa fa-map-marker"></i> </span> Iran / kish Island</h6>
                                <h5>Toranj Marine Hotel
                                    <span>5 Star</span>
                                    <a href="">
                                        <span>
                                            <i class="fa fa-eye"></i>
                                        </span>View Hotel</a>
                                </h5>
                            </figcaption>
                        </figure>
                        <figure class="item">
                            <img src="{{ url('resources/img/1485252_1600x1200.jpg') }}" alt="">
                            <figcaption>
                                <h6><span><i class="fa fa-map-marker"></i> </span> Iran / kish Island</h6>
                                <h5>Toranj Marine Hotel
                                    <span>5 Star</span>
                                    <a href="">
                                        <span>
                                            <i class="fa fa-eye"></i>
                                        </span>View Hotel</a>
                                </h5>
                            </figcaption>
                        </figure>
                    </div><!--slider-1-->
                </div><!--slider-->
                <div class="col-lg-3 col-md-4 hidden-sm hidden-xs"></div><!--thumbnails-->
            </section>
            <section id="filterBox" class="row box-hotel">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ivi3-cover">
                            <div class="col-lg-2">
                                <div class="ivi3-title">
                                    <span><img src="{{ url("site") }}" width="35"></span>
                                    <h3>Filter Hotel</h3>
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <form class="" method="post" action="#">
                                    <div class="form-group">
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                              <span class="input-group-addon">
                                                  <i class="fa fa-location-arrow animated rotateIn"
                                                     aria-hidden="true"></i>
                                              </span>
                                                <div id="ivi3-parentSelect" style="background-color: #ffffff;border-radius: 3px;overflow: hidden;">
                                                    <select class="form-control animated flipInX" name="Room" id="name" placeholder="Enter your Name">
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
                                    <i class="fa fa-bed animated rotateIn" aria-hidden="true"></i>
                                </span>
                                                <input type="number" class="form-control animated flipInX"
                                                       name="confirm" id="confirm" placeholder="Number Room"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-calendar animated rotateIn"
                                                                   aria-hidden="true"></i></span>
                                                <input type="text" onfocus="(this.type='date')"
                                                       class="form-control animated flipInX"
                                                       name="email" id="email" placeholder="Choose Check In Date"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-calendar animated rotateIn"
                                                                   aria-hidden="true"></i></span>
                                                <input type="text" onfocus="(this.type='date')"
                                                       class="form-control animated flipInX"
                                                       name="username" id="username"
                                                       placeholder="Choose Check Out Date"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-sort-numeric-asc animated rotateIn"
                                                   aria-hidden="true"></i>
                                            </span>
                                                <input type="number" class="form-control animated flipInX"
                                                       name="password"
                                                       id="password" step="1000" placeholder="price OF"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-sort-numeric-asc animated rotateIn"
                                                   aria-hidden="true"></i>
                                            </span>
                                                <input type="number" class="form-control animated flipInX"
                                                       name="password"
                                                       id="password" step="1000" placeholder="Price TO"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group hidden-xs">
                                        <div class="cols-sm-10">

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="cols-sm-10">
                                            <div class="input-group input-groupBtn">
                                                <a href="" target="_blank" type="button" id="button"
                                                   class="btn btn-lg btn-block login-button hvr-wobble-top">Search And
                                                    Reserve</a>
                                            </div>
                                        </div>
                                    </div>
                                </form><!--form-->

                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <div id="wantVisa" class="box-hotel wh-center">
                <a href="" style="color: #555;">
                    <h4>I WANT <span><i class="fa fa-cc-visa"></i></span></h4>
                </a>
                {{--<p>REQUEST FOR PASSPORT AND VISA</p>--}}
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 ">
                <div class="row">
                    <div class="pakegs box-hotel">
                    <div class="row">
                        <div class="col-lg-3 col-md-3">
                            <div id="custom_carousel" class="carousel slide" data-ride="carousel" data-interval="2500">

                                <div class="title-pakegs">
                                    <p>
                                        IRAN / <span class="shar">SHIRAZ</span> TOUR
                                        <span class="stars">
                                        <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                        <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                        <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                        <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                        <span><i class="fa fa-star-o" aria-hidden="true"></i></span>
</span>
                                    </p>

                                </div>

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <img src="http://placehold.it/350x250" class="img-responsive">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <img src="http://placehold.it/350x250" class="img-responsive">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <img src="http://placehold.it/350x250" class="img-responsive">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <img src="http://placehold.it/350x250" class="img-responsive">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Item -->
                                </div>
                                <!-- End Carousel Inner -->
                                <div class="controls">
                                    <ul class="nav">
                                        <li data-target="#custom_carousel" data-slide-to="0" class="active"><a href="#"><img
                                                        src="http://placehold.it/50x50"></a></li>
                                        <li data-target="#custom_carousel" data-slide-to="1"><a href="#"><img
                                                        src="http://placehold.it/50x50"></a></li>
                                        <li data-target="#custom_carousel" data-slide-to="2"><a href="#"><img
                                                        src="http://placehold.it/50x50"></a></li>
                                        <li data-target="#custom_carousel" data-slide-to="3"><a href="#"><img
                                                        src="http://placehold.it/50x50"></a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End Carousel -->
                        </div> {{----------slider---------}}
                        <div class="col-lg-9 col-md-9">
                            <div class="row">
                                <div style="margin-right: 19px;margin-left: 15px;border-bottom: 2px solid #eee;">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="specs">
                                            <div class="number-daye"><p>7DAYS</p></div>
                                            <div class="box  service">
                                                <div class="title">
                                                    <p>TOUR SERVICE :</p>
                                                </div>
                                                <div class="content">
                                                    <p> Phraseology refers more to the manner of combining the words
                                                        into
                                                        related groups, and especially to the peculiar or distinctive
                                                        manner
                                                        in which certain technical, scientific.</p>
                                                </div>
                                            </div>
                                            <div class=" box startin"><p><span class="title">START IN <span
                                                                class="spacea">:</span></span>LONDAN (OR PARIS)</p>
                                            </div>
                                            <div class=" box endin"><p><span class="title">END IN <span
                                                                class="spaceb">:</span></span>LONDAN</p></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="about">
                                            <p class="title">ABOUT CITY</p>
                                            <p class="content"> Phraseology refers more to the manner of combining the
                                                words
                                                into related groups, and especially to the peculiar or distinctive
                                                manner in
                                                which certain technical, scientific, and professional ideas are
                                                expressed:
                                                legal phraseology.</p>
                                        </div>
                                    </div>
                                    <div style="clear: both"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6">

                                    <ul class="datepakegs">
                                        <li><a href="#1"> 22OCT 2017</a></li>
                                        <li><a href="#1"> 03DCC 2017</a></li>
                                        <li><a href="#1"> 29OCC 2017</a></li>
                                        <li><a href="#1"> 11MAR 2017</a></li>
                                        <li><a href="#1"> 25MAR 2017</a></li>
                                        <li><a href="#1"> VIEW MORE DATES</a></li>

                                    </ul>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <ul class="attractions">
                                        <li><a href="#1">ATIRACTINNS</a></li>
                                        <li><a href="#1">SOUVENIR</a></li>
                                        <li><a  class="selecttour" href="#1">SELECT TOUR</a></li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div><!--content-->
        </div>
    </main>

@endsection
@section('footer')
    <script src="{{ url("resources/js/site/list.js") }}"></script>
@endsection













