@extends('layouts.site.site')
@section('header')
<link rel="stylesheet" type="text/css" href="{{ url("resources/css/site/pakeg.css") }}">
@endsection
@section('content')
@include("layouts.site.breadcrumb")
<div class="pkage-img">
<img src="{{url('resources/img/p5.jpg')}}">
</div>


<div class="container" style="margin-top: -90px">


<div class="row">
   <div class="col-lg-12 col-sm-12">
       <div class="description box-hotel">

<div class="box-pric">
    <font class="pric">US 536$</font>
    <P>RUG GRJG RGJ RJGI LSEF RTJG VKJRVJ GNJRK LSEF RTJG VKJR HJTRJIKRJGH </P>
</div>

           <div class="tilte">
               <div class="box">
                   <p>
                   <span class="icon"><img src="{{url('resources/img/tourism.png')}}"></span>
                   IRAN / <span class="shar">SHIRAZ</span> TOUR
                   <span><i class="fa fa-star" aria-hidden="true"></i></span>
                   <span><i class="fa fa-star" aria-hidden="true"></i></span>
                   <span><i class="fa fa-star" aria-hidden="true"></i></span>
                   <span><i class="fa fa-star" aria-hidden="true"></i></span>
                   <span><i class="fa fa-star-o" aria-hidden="true"></i></span>
                   </p>
               </div>
           </div>
           <div class="content">
              <div class="box">
                  <p class="p1"><span class="number-daye">7DAYS</span> ENJOY YOUR TRIP </p>
                  <P class="p2">6NIGHTS ACCOMMODATION TRAVEL RGKJIRIKG GKRJIJG ERKJGIERJGI ERLGPLPREGL RGJ RKGJR RNGRKGJ RJG KRJGI KRGJ KRJG GRHJI RKJNGKIRJNKGN</P>
              </div>
           </div>
       </div>
   </div>
</div>


<div class="row">
    <div class="col-lg-12 col-sm-12">
        <div class="photo box-hotel">
            <div class="tilte">
                <div class="box">
                    <p><span><i class="fa fa-camera" aria-hidden="true"></i></span><span class="tit"> PHOTO OF TOUR</span></p>
                </div>
            </div>
            <div class="photos">
                <div class="">
                    <div class='row'>
                        <div class='col-md-12'>
                            <div class="carousel slide media-carousel" id="media">
                                <div class="carousel-inner">
                                    <div class="item  active">
                                        <div class="row">
                                            <div class="col-md-4 col-sm-4 ">
                                                <a class="thumbnail" href="#"><img alt="" src="http://placehold.it/150x150"></a>
                                            </div>
                                            <div class="col-md-4 col-sm-4  ">
                                                <a class="thumbnail" href="#"><img alt="" src="http://placehold.it/150x150"></a>
                                            </div>
                                            <div class="col-md-4 col-sm-4 ">
                                                <a class="thumbnail" href="#"><img alt="" src="http://placehold.it/150x150"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="row">
                                            <div class="col-md-4 col-sm-4">
                                                <a class="thumbnail" href="#"><img alt="" src="http://placehold.it/150x150"></a>
                                            </div>
                                            <div class="col-md-4 col-sm-4">
                                                <a class="thumbnail" href="#"><img alt="" src="http://placehold.it/150x150"></a>
                                            </div>
                                            <div class="col-md-4 col-sm-4">
                                                <a class="thumbnail" href="#"><img alt="" src="http://placehold.it/150x150"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="row">
                                            <div class="col-md-4 col-sm-4">
                                                <a class="thumbnail" href="#"><img alt="" src="http://placehold.it/150x150"></a>
                                            </div>
                                            <div class="col-md-4 col-sm-4">
                                                <a class="thumbnail" href="#"><img alt="" src="http://placehold.it/150x150"></a>
                                            </div>
                                            <div class="col-md-4 col-sm-4">
                                                <a class="thumbnail" href="#"><img alt="" src="http://placehold.it/150x150"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a data-slide="prev" href="#media" class="left carousel-control"><span class="fa fa-chevron-left  icon-left" aria-hidden="true"></span></a>
                                <a data-slide="next" href="#media" class="right carousel-control"><span class="fa fa-chevron-right  icon-right " aria-hidden="true"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="row">
         <div class="col-lg-12 col-sm-12">
             <div class="trip box-hotel">
                 <div class="tilte">
                     <div class="box">
                         <p><span><i class="fa fa-question-circle-o" aria-hidden="true"></i></span><span class="tit"> WHY THIS TRIP</span></p>
                     </div>
                 </div>
                 <div class="row">
                     <div class="col-lg-6 col-sm-6">
                         <ul>
                             <li><span><i class="fa fa-check" aria-hidden="true"></i></span><span class="matn">ALL TOUR DATES ARE GUARANTEED TO DEPART</span></li>
                             <li><span><i class="fa fa-check" aria-hidden="true"></i></span><span class="matn">VO MINIMUM NUMBERS REQUIRED</span></li>
                             <li><span><i class="fa fa-check" aria-hidden="true"></i></span><span class="matn">FREE WI-FI IN HOTELS</span></li>
                             <li><span><i class="fa fa-check" aria-hidden="true"></i></span><span class="matn">OLY 10% DEPOSIT OR MINIMUM $80.00 REQUIRED AND NO BOOKING FEES</span></li>
                         </ul>
                     </div>
                     <div class="col-lg-6 col-sm-6">
  <div class="image-trip">
      <img src="{{url('resources/img/pakeg-what.jpg')}}">
  </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>


<div class="row">
            <div class="col-lg-12 col-sm-12">
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


<div class="row">
    <div class="col-lg-12">
        <div class="rules box-hotel">
            <div class="tilte">
                <div class="box">
                    <p><span><img src="{{url('resources/img/rules.png')}}"></span><span class="tit"> TRAVEL RULES</span></p>
                </div>
            </div>
            <div class="content">
                <p>This Rules icon is This Rules icon is part of an icon pack of 58,80SS, PDF, and EPS formats, as a font, and in other vector formats. Unlike other icon packs, our web icons are designed by a single designer, guaranteeing the consistent style and quality.part of an icon pack of 58,800 web icons. Icons are available in PNG, SVG, CSS, PDF, and EPS formats, as a font, and in other vector formats. Unlike other icon packs, our web icons are designed by a single designer, guaranteeing the consistent style and quality.</p>
            </div>
        </div>
    </div>
</div>


<div class="row">
        <div class="col-lg-12 col-sm-12">
            <div class="visit ">
                <div class="box">
                    <h4>
                        VISIT
                        AND
                        RESERV</h4>
                </div>
            </div>
        </div>
    </div>


<div class="row">
        <div class="col-lg-12 col-sm-12">
           <div class="form-comment box-hotel">
               <div class="tilte">
                   <div class="box">
                       <p><span><i class="fa fa-comments" aria-hidden="true"></i></span><span class="tit"> WRITE YOUR OWN REVIEW</span></p>
                   </div>
               </div>
               <div class="form">
                   <div class="boxa">
                       <input class="input" type="text"  placeholder="NAME">
                       <input class="input" type="text" placeholder="EMAIL" >
                   </div>
                   <div class="boxb">
                       <textarea placeholder="YOUR COMMENT"  class="matn" ></textarea>
                   </div>
                   <div class="boxc">
                       <div class="submit">
                        <input type="submit"  class="btn" value="ENTER TOUR COMMENT">
                       </div>
                   </div>
               </div>

           </div>
        </div>
    </div>


<div class="row">
        <div class="col-lg-12 col-sm-12">
            <div class="row">
                <div class="col-lg-12 col-sm-12">
                    <div class="comment">
                        <div class="nameuser">
                            <div class="box">
                                <div class="box-img">
                                    <img src="{{url('resources/img/Default-profile-photo.png')}}">
                                </div>
                                <font class="name">dfd</font>
                            </div>
                        </div>
                        <div class="matn">
                            <p>
                                ou
                                can
                                place
                                ere
                                with
                                the
                                ou
                                can
                                place
                                Font
                                Awesome
                                icons
                                just
                                about
                                anywhere
                                with
                                the </p>
                        </div>
                        <div class="like">
                            <div class="box">
                                <span class="icona"><i
                                            class="fa fa-reply"
                                            aria-hidden="true"></i><span
                                            class="answer">ANSWER</span></span>
                                <span class="iconb"><i
                                            class="fa fa-heart"
                                            aria-hidden="true"></i><span
                                            class="like">981</span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-sm-12">
                    <div class="comment">
                        <div class="nameuser">
                            <div class="box">
                                <div class="box-img">
                                    <img src="{{url('resources/img/Default-profile-photo.png')}}">
                                </div>
                                <font class="name">dfd</font>
                            </div>
                        </div>
                        <div class="matn">
                            <p>
                                ou
                                can
                                place
                                ere
                                with
                                the
                                ou
                                can
                                place
                                Font
                                Awesome
                                icons
                                just
                                about
                                anywhere
                                with
                                the </p>
                        </div>
                        <div class="like">
                            <div class="box">
                                <span class="icona"><i
                                            class="fa fa-reply"
                                            aria-hidden="true"></i><span
                                            class="answer">ANSWER</span></span>
                                <span class="iconb"><i
                                            class="fa fa-heart"
                                            aria-hidden="true"></i><span
                                            class="like">981</span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



</div>
@endsection
@section('footer')
    <script src="{{ url("resources/js/site/package.js") }}"></script>
    <script src="{{ url("resources/js/site/pakeg.js") }}"></script>
@endsection
