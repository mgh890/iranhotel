@extends("layouts.site.site")
@section("header")
    <link rel="stylesheet" type="text/css" href="{{ url("resources/css/site/reserve.css") }}">
@endsection

@section("content")
    @include("layouts.site.breadcrumb")
    <div class="row" id="hotelBigImg">
        <img src="{{ url('resources/img/hotel1320x742.jpg') }}">
    </div><!--site-big-image-->
    <main class="container" id="reserve">
        <section class="box-hotel row" id="thisPackage">
            <header class="col-lg-12 col-md-12 col-sm-12 col-xs-12 border-bottom">
                <span><i class="fa fa-info"></i> </span>
                <h2>Details Of Your Package</h2>
            </header>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 border-bottom text-center-xs">
                <h3>Hotel Zandiyeh Shiraz</h3>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <h4>1 Room in 2 Night</h4>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <h4>2 Single Bed <span><i class="fa fa-user-o"></i><span><i class="fa fa-user-o"></i> </span></h4>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <h4>price : <span class="price">285$</span></h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h4 class="msg">Tow Nights in shiraz , a tourist city + see the places of hafez perespolis and
                            assdi and ... </h4>
                    </div>
                </div>
            </div>
        </section>
        <section class="box-hotel row" id="formPay">
            <header class="col-lg-12 col-md-12 col-sm-12 col-xs-12 border-bottom">
                <span><i class="fa fa-pencil-square-o"></i> </span>
                <h2>additional specifications <span class="hidden-xs">(fill in personal details carefully)</span></h2>
            </header>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                    <form method="post" action="#" style="margin: 10px 0;">
                        <div class="col-lg-6 col-md-6 col-sm-5 col-xs-12 form-inline">
                            <label><span class="ivi3-icon"><i class="fa fa-user"> * </i> </span>Name : </label>
                            <input type="text" name="name" class="form-control ivi3-form"
                                   placeholder="Enter Your Full Name">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-7 col-xs-12 form-inline">
                            <label><span class="ivi3-icon"><i class="fa fa-mobile"> * </i> </span>Your Mobile Number :
                            </label>
                            <input type="text" name="cellphone" class="form-control ivi3-form"
                                   placeholder="Enter Your CellPhone Number">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 form-inline">
                            <label><span class="ivi3-icon"><i class="fa fa-envelope-o"> * </i> </span>Email : </label>
                            <input type="email" name="email" class="form-control ivi3-form"
                                   placeholder="Enter Your Email Address">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 form-inline">
                            <label><span class="ivi3-icon"><i class="fa fa-phone"> * </i> </span>LandLine Phone :
                            </label>
                            <input type="text" name="phone" class="form-control ivi3-form"
                                   placeholder="Enter Your LandLine Phone">
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 form-inline">
                            <label><span class="ivi3-icon"><i class="fa fa-users"> * </i> </span>How Many : </label>
                            <input type="number" name="age" class="form-control ivi3-form"
                                   placeholder="How Many Adult? (+18)">
                            <input type="number" name="age" class="form-control ivi3-form"
                                   placeholder="How Many Children? (0-9)">
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 form-inline finalPrice">
                            <label><span><i class="fa fa-money"></i> </span> 850$ </label>
                            <input type="submit" value="Continue To Reserve" class="form-control btn btn-warning ">
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>
@endsection

@section("footer")

@endsection
