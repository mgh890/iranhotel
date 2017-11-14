@extends("layouts.site.site")
@section("header")
    <link rel="stylesheet" type="text/css" href="{{ url("resources/css/site/hotelList.css") }}">
@endsection

@section("content")
    @include("layouts.site.breadcrumb")
    <main class="container" id="hotelList">
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
                                            <div id="ivi3-parentSelect"
                                                 style="background-color: #ffffff;border-radius: 3px;overflow: hidden;">
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
                                    <i class="fa fa-bed animated rotateIn" aria-hidden="true"></i>
                                </span>
                                            <input type="number" class="form-control animated flipInX" name="confirm"
                                                   id="confirm" placeholder="Number Room"/>
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
                                                   name="username" id="username" placeholder="Choose Check Out Date"/>
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
                                            <input type="number" class="form-control animated flipInX" name="password"
                                                   id="password" placeholder="price OF"/>
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
                                            <input type="number" class="form-control animated flipInX" name="password"
                                                   id="password" placeholder="Price TO"/>
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
        <section id="hotels" class="row">
            <ul class="cards">
                <div class="row">
                    <li class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="card box-hotel">
                            <div class="cartImage">
                                <img class="img-responsive"
                                     src="{{ url("resources\img\DC20170228_HeadlandHotel-19-16.jpg") }}">
                                <h6><span><i style="margin-right: 2px" class="fa fa-map-marker"></i> </span>Iran / kish
                                    Island</h6>
                            </div>
                            <div class="cardContent">
                                <div class="cardTitle">
                                    <span>Zandiyeh Hotel</span>
                                    <span><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i><i class="fa fa-star"></i> </span>
                                </div>
                                <p class="cardText">This is the shorthand for flex-grow, flex-shrink and flex-basis
                                    combined. The second and third parameters (flex-shrink and flex-basis) are optional.
                                    Default is 0 1 auto. </p>
                                <button class="btn cardBtn">View And Reserve</button>
                            </div>
                        </div>
                    </li>
                    <li class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="card box-hotel">
                            <div class="cartImage">
                                <img class="img-responsive"
                                     src="{{ url("resources\img\DC20170228_HeadlandHotel-19-16.jpg") }}">
                                <h6><span><i style="margin-right: 2px" class="fa fa-map-marker"></i> </span>Iran / kish
                                    Island</h6>
                            </div>
                            <div class="cardContent">
                                <div class="cardTitle">
                                    <span>Zandiyeh Hotel</span>
                                    <span><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i><i class="fa fa-star"></i> </span>
                                </div>
                                <p class="cardText">This is the shorthand for flex-grow, flex-shrink and flex-basis
                                    combined. The second and third parameters (flex-shrink and flex-basis) are optional.
                                    Default is 0 1 auto. </p>
                                <button class="btn cardBtn">View And Reserve</button>
                            </div>
                        </div>
                    </li>
                    <li class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="card box-hotel">
                            <div class="cartImage">
                                <img class="img-responsive"
                                     src="{{ url("resources\img\DC20170228_HeadlandHotel-19-16.jpg") }}">
                                <h6><span><i style="margin-right: 2px" class="fa fa-map-marker"></i> </span>Iran / kish
                                    Island</h6>
                            </div>
                            <div class="cardContent">
                                <div class="cardTitle">
                                    <span>Zandiyeh Hotel</span>
                                    <span><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i><i class="fa fa-star"></i> </span>
                                </div>
                                <p class="cardText">This is the shorthand for flex-grow, flex-shrink and flex-basis
                                    combined. The second and third parameters (flex-shrink and flex-basis) are optional.
                                    Default is 0 1 auto. </p>
                                <button class="btn cardBtn">View And Reserve</button>
                            </div>
                        </div>
                    </li>
                    <li class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="card box-hotel">
                            <div class="cartImage">
                                <img class="img-responsive"
                                     src="{{ url("resources\img\DC20170228_HeadlandHotel-19-16.jpg") }}">
                                <h6><span><i style="margin-right: 2px" class="fa fa-map-marker"></i> </span>Iran / kish
                                    Island</h6>
                            </div>
                            <div class="cardContent">
                                <div class="cardTitle">
                                    <span>Zandiyeh Hotel</span>
                                    <span><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i><i class="fa fa-star"></i> </span>
                                </div>
                                <p class="cardText">This is the shorthand for flex-grow, flex-shrink and flex-basis
                                    combined. The second and third parameters (flex-shrink and flex-basis) are optional.
                                    Default is 0 1 auto. </p>
                                <button class="btn cardBtn">View And Reserve</button>
                            </div>
                        </div>
                    </li>
                    <li class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="card box-hotel">
                            <div class="cartImage">
                                <img class="img-responsive"
                                     src="{{ url("resources\img\DC20170228_HeadlandHotel-19-16.jpg") }}">
                                <h6><span><i style="margin-right: 2px" class="fa fa-map-marker"></i> </span>Iran / kish
                                    Island</h6>
                            </div>
                            <div class="cardContent">
                                <div class="cardTitle">
                                    <span>Zandiyeh Hotel</span>
                                    <span><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i><i class="fa fa-star"></i> </span>
                                </div>
                                <p class="cardText">This is the shorthand for flex-grow, flex-shrink and flex-basis
                                    combined. The second and third parameters (flex-shrink and flex-basis) are optional.
                                    Default is 0 1 auto. </p>
                                <button class="btn cardBtn">View And Reserve</button>
                            </div>
                        </div>
                    </li>
                    <li class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="card box-hotel">
                            <div class="cartImage">
                                <img class="img-responsive"
                                     src="{{ url("resources\img\DC20170228_HeadlandHotel-19-16.jpg") }}">
                                <h6><span><i style="margin-right: 2px" class="fa fa-map-marker"></i> </span>Iran / kish
                                    Island</h6>
                            </div>
                            <div class="cardContent">
                                <div class="cardTitle">
                                    <span>Zandiyeh Hotel</span>
                                    <span><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i><i class="fa fa-star"></i> </span>
                                </div>
                                <p class="cardText">This is the shorthand for flex-grow, flex-shrink and flex-basis
                                    combined. The second and third parameters (flex-shrink and flex-basis) are optional.
                                    Default is 0 1 auto. </p>
                                <button class="btn cardBtn">View And Reserve</button>
                            </div>
                        </div>
                    </li>
                </div>
            </ul>
        </section>
    </main>
@endsection

@section("footer")

@endsection
