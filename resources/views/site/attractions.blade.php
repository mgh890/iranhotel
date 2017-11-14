@extends('layouts.site.site')
@section('header')
    <link rel="stylesheet" type="text/css" href="{{ url("resources/css/site/attractions.css") }}">
@endsection
@section('content')
 @include("layouts.site.breadcrumb")
 <main id="attractions">
<div class="container">
    <div class="row box-hotel ">
<div class="col-lg-12 col-md-12  col-sm-12 col-xs-12">
   <div class="row">
       <div class="col-lg-12 col-md-12">
           <div class="attractions-title">
               <div class="box">
                   <span class="boxa"><i class="fa fa-file-text-o" aria-hidden="true"></i></span>
                   <span class="boxb">
<span class="tita">KARIMKHANI ARG OF SHIRAZ</span>
<span class="titb">IRAN,FARS,SHIRAZ</span>
</span>
               </div>
           </div>
       </div>

   </div>
    <div class="row">
        <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 no-padding-xs">
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
        </div>
    </div><!--slider-->

    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="content">
                <p> DSFWGN DSFDSFWGN JWRNGVJNRBGV HBRGBERFGB EJBGJEBJEJGETNHJNTE JNTJNHTJENJHNTHIE JFGJGNVDSJVBHB VHFDBVHFWGNJWRNG VJNRBGVHBR GBERFGB EJBGJEBJE JGETNHJ NTEHJN TJN HTJE NJHNTH IEJFGJGNV DSJVBHB VHFDBVHFJ RNGVJNRB GV HBRGBERFG EJBGJEBJ EJGET NH JNTEH JNTJN HTJENJH NT HIEJFGJG NVDSJV BHBVH FDBVHF
                 DSFWGN DSFDSFWGN JWRNGVJNRBGV HBRGBERFGB EJBGJEBJEJGETNHJNTE JNTJNHTJENJHNTHIE JFGJGNVDSJVBHB VHFDBVHFWGNJWRNG VJNRBGVHBR GBERFGB EJBGJEBJE JGETNHJ NTEHJN TJN HTJE NJHNTH IEJFGJGNV DSJVBHB VHFDBVHFJ RNGVJNRB GV HBRGBERFG EJBGJEBJ EJGET NH JNTEH JNTJN HTJENJH NT HIEJFGJG NVDSJV BHBVH FDBVHF
                </p>
            </div>
            <div class="google_map">
<a href="#1" ><span><i class="fa fa-map-marker" aria-hidden="true"></i></span>VEIW IN GOOGLE MAP</a>
            </div>
        </div>
    </div>


</div>

    </div>
</div>
 </main>
@endsection
@section('footer')
    <script src="{{ url("resources/js/site/attractions.js") }}"></script>
@endsection