@extends("layouts.site.site")
@section("header")
    <link rel="stylesheet" type="text/css" href="{{ url("resources/css/site/pay.css") }}">
@endsection

@section("content")
@include("layouts.site.breadcrumb")
    <div class="row" id="hotelBigImg">
        <img src="{{ url('resources/img/hotel1320x742.jpg') }}">
    </div><!--site-big-image-->
    <main class="container" id="pay">
        <section class="box-hotel row" id="paymentPage">
            <header class="col-lg-12 col-md-12 col-sm-12 col-xs-12 border-bottom">
                <span class="brown"><i class="fa fa-info"></i> </span>
                <h2>Your Information <span class="hidden-xs">(Please Make Sure Your Information Is Correct)</span></h2>
            </header>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <ul class="row">
                    <li class="col-lg-3 col-md-3 col-sm-3 hidden-xs"></li>
                    <li class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-left">
                        <h4><i class="fa fa-user"> Name : </i> Milad Parirokh</h4>
                    </li>
                    <li class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
                        <h4><i class="fa fa-mobile"> Mobile Number : </i> +989150123416</h4>
                    </li>
                    <li class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
                        <h4><i class="fa fa-envelope-o"> Email : </i> ivi3i@hotmail.com </h4>
                    </li>
                    <li class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
                        <h4><i class="fa fa-phone"> Phone Number : </i> +5131234567</h4>
                    </li>
                    <li class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
                        <h4><i class="fa fa-users"> How Many : </i> 2 Adult And 0 Children</h4>
                    </li>
                    <li class="col-lg-3 col-md-3 col-sm-3 hidden-xs"></li>
                </ul>
            </div>
        </section>
        <section class="box-hotel row" id="lastStepPayment">
            <header class="col-lg-12 col-md-12 col-sm-12 col-xs-12 border-bottom">
                <span class="brown"><i class="fa fa-pencil-square-o"></i> </span>
                <h2>information your packages</h2>
                <h3> <span><i class="fa fa-money"></i> </span>The Expired Rate For You : <span>850$</span> </h3>
            </header>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                        <h4>Package Of Shiraz Tour in 3 days (hotel zandiyeh)</h4>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-5 padding-xs-5 btnBox text-right">
                        <a href="#" class="hvr-bounce-in"><span><i class="fa fa-credit-card"></i> Payment</span></a>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-7 padding-xs-5 btnBox">
                        <a href="#" class="hvr-bounce-in" title="send step reservation to my mail"><span><i class="fa fa-inbox"></i> Send Information</span></a>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@section("footer")

@endsection
