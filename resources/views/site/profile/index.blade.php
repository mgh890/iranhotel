@extends('layouts.site.site')
@section('header')
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="{{ url("resources/css/site/profile.css") }}">
@endsection
@section('content')
    @include("layouts.site.breadcrumb")
    <div class="row" id="profileBigImg">
        <img src="{{ url('resources/img/hotel1320x742.jpg') }}">
    </div><!--site-big-image-->
    <main class="container" id="profile">
        <div class="row">
            <div>

                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" <?php if(isset($active) and $active=='userinfo') echo 'class="active"'   ?> ><a href="#userinfo" aria-controls="home" role="tab" data-toggle="tab">USER INFO </a></li>
                    <li role="presentation" <?php if(isset($active) and $active=='listreserv') echo 'class="active"'   ?> ><a href="#listreserv" aria-controls="profile" role="tab" data-toggle="tab">MY RESERVATIONS</a></li>
                    <li role="presentation" <?php if(isset($active) and $active=='change_password') echo 'class="active"'   ?> ><a href="#change_password" aria-controls="messages" role="tab" data-toggle="tab">CHANGE PASSWORD</a></li>
                    <li role="presentation" <?php if(isset($active) and $active=='increase_credit') echo 'class="active"'   ?> ><a href="#increase_credit" aria-controls="settings" role="tab" data-toggle="tab">INCREASE CREDIT</a></li>
                    <li role="presentation" <?php if(isset($active) and $active=='send_message') echo 'class="active"'   ?> ><a href="#send_message" aria-controls="settings" role="tab" data-toggle="tab">SEND MESSAGE</a></li>
                    <li role="presentation" <?php if(isset($active) and $active=='manage_messages') echo 'class="active"'   ?> ><a href="#manage_messages" aria-controls="settings" role="tab" data-toggle="tab">MANAGE MESSAGES</a></li>
                    <li role="presentation" <?php if(isset($active) and $active=='my_favorite') echo 'class="active"'   ?> ><a href="#my_favorite" aria-controls="settings" role="tab" data-toggle="tab">MY FAVORITE</a></li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content box-hotel  ">


                    <div role="tabpanel" class="tab-pane <?php if(isset($active) and $active=='userinfo') echo 'active'   ?>  " id="userinfo">
                     @if(isset($forminfouser))

<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div id="form_edit">
        @if (session('status'))
            <div class="bg-success" style="text-align: center;">
                {{ session('status') }}
                <br>
            </div>
        @endif
        {!! Form::model($forminfouser,['method'=>'post','url'=>'/'.session()->get('isoCode').'/profile','files'=>true,'class'=>'form-horizontal']) !!}
        <div class="row rowedit  ">
            <div class="col-md-3">
                <div class="inbox-form-group">
                    <label class="control-label">FNAME :</label>
                    {!! form::text('name',null,['class'=>'form-control','required']) !!}
                    <span class="font-red">
                            @if($errors->has('name'))
                            {!! $errors->first('name') !!}
                        @endif
                        </span>
                </div>
            </div>
            <div class="col-md-3">
                <div class="inbox-form-group">
                    <label class="control-label">LNAME :</label>
                    {!! form::text('lname',null,['class'=>'form-control','required']) !!}
                    <span class="font-red">
                            @if($errors->has('lname'))
                            {!! $errors->first('lname') !!}
                        @endif
                        </span>
                </div>
            </div>
            <div class="col-md-3">
                <div class="inbox-form-group">
                    <label class="control-label">DATE OF BIRTH :</label>

                    {!! form::text('birth_date',null,['class'=>'form-control','id'=>'datepicker','readonly'=>'readonly','required']) !!}
                    <span class="font-red">
                            @if($errors->has('birth_date'))
                            {!! $errors->first('birth_date') !!}
                        @endif
                        </span>
                </div>
            </div>
            <div class="col-md-3">
                <div class="inbox-form-group">
                    <label class="control-label">MOBILE NUMBER :</label>
                    {!! form::text('mobile',null,['class'=>'form-control','required']) !!}
                    <span class="font-red">
                            @if($errors->has('mobile'))
                            {!! $errors->first('mobile') !!}
                        @endif
                        </span>
                </div>
            </div>
        </div>
        <div class="row  rowedit ">
            <div class="col-md-3">
                <div class="inbox-form-group">
                    <label class="control-label">EMAIL :</label>
                    {!! form::text('email',null,['class'=>'form-control','required']) !!}
                    <span class="font-red">
                            @if($errors->has('email'))
                            {!! $errors->first('email') !!}
                        @endif
                        </span>
                </div>
            </div>

            <div class="col-md-3">
                <div class="inbox-form-group">
                    <label class="control-label">LANDLINE PHONE :</label>
                    {!! form::text('phone',null,['class'=>'form-control','required']) !!}
                    <span class="font-red">
                            @if($errors->has('phone'))
                            {!! $errors->first('phone') !!}
                        @endif
                        </span>
                </div>
            </div>

            <div class="col-md-3">
                <div class="inbox-form-group">
                    <label class="control-label">AGE :</label>
                    {!! form::text('age',null,['class'=>'form-control','required']) !!}
                    <span class="font-red">
                            @if($errors->has('age'))
                            {!! $errors->first('age') !!}
                        @endif
                        </span>
                </div>
            </div>
            <div class="col-md-3">
                <label>SEX :</label>
                <td>{!! Form::select('sex',['man'=>'MAN','women'=>'WOMEN'] , null, ['class'=>'form-control','name'=>'sex','id'=>'sex']) !!}</td>
                <span class="font-red">
            @if($errors->has('sex'))
                        {!! $errors->first('sex') !!}
                    @endif
           </span>
            </div>


        </div>
        <div class="row  rowedit ">
            <div class="col-md-3">
                <div class="inbox-form-group">
                    <label class="control-label">OCCUPATION :</label>
                    {!! form::text('job',null,['class'=>'form-control','required']) !!}
                    <span class="font-red">
                            @if($errors->has('job'))
                            {!! $errors->first('job') !!}
                        @endif
                        </span>
                </div>
            </div>

            <div class="col-md-3">
                <div class="inbox-form-group">
                    <label class="control-label">CITY OF RESIDENCE :</label>
                    {!! form::text('city',null,['class'=>'form-control','required']) !!}
                    <span class="font-red">
                            @if($errors->has('city'))
                            {!! $errors->first('city') !!}
                        @endif
                        </span>
                </div>
            </div>

            <div class="col-md-6">
                <div class="inbox-form-group">
                    <label class="control-label">ASSRESS LOCATION :</label>
                    {!! form::text('location_address',null,['class'=>'form-control','required']) !!}
                    <span class="font-red">
                            @if($errors->has('location_address'))
                            {!! $errors->first('location_address') !!}
                        @endif
                        </span>
                </div>
            </div>

        </div>
        <div class="row  rowedit ">

            <div class="col-md-3">
                <label>COUNTRY :</label>
                <td>{!! Form::select('country',$countries , null, ['class'=>'form-control','name'=>'country','id'=>'city']) !!}</td>
                <span class="font-red">
            @if($errors->has('country'))
                        {!! $errors->first('country') !!}
                    @endif
           </span>
            </div>
        </div>
        <div class="row  rowedit ">

            <div class="col-md-3">
                <label>PROFILE PICTURE </label>
                <div class="form-group">
                    <input type="file" name="profile_photo" id="file" class="input-file">
                    <label for="file" class="btn btn-tertiary js-labelFile">
                        <i class="icon fa fa-check"></i>
                        <span class="js-fileName">Choose a file</span>
                    </label>
                    <span class="reset"><i class="fa fa-repeat" aria-hidden="true"></i></span>
                </div>

                <span class="font-red">
                                        @if($errors->has('file'))
                        {!! $errors->first('file') !!}
                    @endif
                                    </span>
                <p class="help-block"> Allowable Formats (jpg, .gif, .jpeg, .png)</p>
            </div>


        </div>
        <div class="row  rowedit ">
            <div class="col-md-12">
                <div class="sumbit_edit">
                    <button   type="submit" name="submit"  value="information"  class="btn btn-primary">submit information <i class="icon-arrow-left13 position-right"></i></button>
                </div>
            </div>
        </div>
        {!! Form::close() !!}

    </div>



                    </div>
                </div>
                     @else
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div class="nameuser">
                                        <div class=" box imguser">
                                            <span><i class="fa fa-user-circle-o" aria-hidden="true"></i></span>
                                        </div>
                                        <div class="box boxname">
                                            MOHAMMAD
                                            REZA
                                            BAGHISHANI

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="specs">
                                        <div class="row">
                                            <div class="col-lg-6  col-md-6">
                                                <ul class="ulspecs">
                                                    <li><span class="tit">COUNTRY</span><span class="cont">IRRAN</span></li>
                                                    <li><span class="tit">OCCUPATION</span><span class="cont">PROGRAMMER</span></li>
                                                    <li><span class="tit">MOBILE NUMBER</span><span class="cont">IRRAN</span></li>
                                                    <li><span class="tit">SEX</span><span class="cont">MALE</span></li>
                                                    <li><span class="tit">EMAIL</span><span class="cont">BAGHISHNI</span></li>
                                                    <li><span class="tit">AGE</span><span class="cont">25</span></li>

                                                </ul>
                                            </div>
                                            <div class="col-lg-6  col-md-6">
                                                <ul class="ulspecs">
                                                    <li><span class="tit">CITY OF RESIDENCE</span><span class="cont">MASHHAD</span></li>
                                                    <li><span class="tit">LANDLINE PHONE</span><span class="cont">+985136662255</span></li>
                                                    <li><span class="tit">DATE OF BIRTH</span><span class="cont">19/3/1990</span></li>
                                                    <li><span class="tit">ASSRESS LOCATION</span><span class="cont">grfg w4tyhu4 w4tu tgy ie wuthiueh ehgtu etujioetu etung lji hygturygyhdrg htur4t fhueh fggf eafrehg feh fehffheg gg</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="banktitle">BANK ACCOUNT INFORMATION</div>
                                </div>
                            </div>
                            <div class="row  contantbank" >
                                <div class="col-lg-6 col-md-6">
                                    <div class="box">
                                        <span class="tit">ACCOUNT NAME :</span><span class="cont"></span>
                                    </div>
                                    <div class="box">
                                        <span class="tit">ACCOUNT NUMBER :</span><span class="cont"></span>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="box">
                                        <span class="tit">BANK NAME :</span><span class="cont"></span>
                                    </div>
                                    <div class="box">
                                        <span class="tit">CARD NUMBER :</span><span class="cont"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="messagebank">COMPLETE THIS SECTION TO REFUND YOUR MONEY IF CANCELED</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="edit_userinfo">
                                        <a href="{{ url('').'/'.session()->get('isoCode').'/profile/edit_user_info' }}"><span><i class="fa fa-pencil-square-o" aria-hidden="true"></i></span>EDIT USER INFO</a>
                                    </div>
                                </div>
                            </div>
                      @endif



                    </div>
                    <div role="tabpanel" class="tab-pane <?php if(isset($active) and $active=='listreserv') echo 'active'   ?>" id="listreserv" >
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-md-12 col-sm-12">
                                <div class="serch">
                                    <span class="tit">SERCH WHIT HOTEL NAME </span> <span class="boxserch"> <input  placeholder="Search..."  type="text" name="serch" class="input"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="tablelistreserv">
                                    <table class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>CODE VACHER</th>
                                            <th>HOTEL NAME</th>
                                            <th>DATE RESERV</th>
                                            <th>IN DATE</th>
                                            <th>HOW NIGHT</th>
                                            <th>PROCESSES</th>
                                        </tr>

                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>26454987516</td>
                                            <td>atir</td>
                                            <td>12/03/2017</td>
                                            <td>3</td>
                                            <td>Pending</td>
                                            <td><a href="#1" class="pwatcher">Print watcher</a></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>26454987516</td>
                                            <td>atir</td>
                                            <td>12/03/2017</td>
                                            <td>3</td>
                                            <td>Pending</td>
                                            <td><a href="#1" class="pwatcher">Print watcher</a></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>26454987516</td>
                                            <td>atir</td>
                                            <td>12/03/2017</td>
                                            <td>3</td>
                                            <td>Pending</td>
                                            <td><a href="#1" class="pwatcher">Print watcher</a></td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>26454987516</td>
                                            <td>atir</td>
                                            <td>12/03/2017</td>
                                            <td>3</td>
                                            <td>Pending</td>
                                            <td><a href="#1" class="pwatcher">Print watcher</a></td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>26454987516</td>
                                            <td>atir</td>
                                            <td>12/03/2017</td>
                                            <td>3</td>
                                            <td>Pending</td>
                                            <td><a href="#1" class="pwatcher">Print watcher</a></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>


                    </div>
                    <div role="tabpanel" class="tab-pane <?php if(isset($active) and $active=='change_password') echo 'active'   ?>" id="change_password">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="form">
                                    {!! Form::open(['url'=>'/'.session()->get('isoCode').'/profile','class'=>'form-horizontal']) !!}
                                    <div class="tit box">* CURRENT PASSWORD</div>
                                    <div class="input box">
                                        {!! form::password('oldpassword',null,['class'=>'form-control','required']) !!}
                                        <span class="font-red">
                                            @if($errors->has('oldpassword'))
                                             {!! $errors->first('oldpassword') !!}
                                            @endif
                                        </span>
                                    </div>
                                    <div class="tit  box">* NEW PASSWORD</div>
                                    <div class="input box ">
                                        {!! form::password('password',null,['class'=>'form-control','required']) !!}
                                        <span class="font-red">
                                            @if($errors->has('password'))
                                                {!! $errors->first('password') !!}
                                            @endif
                                        </span>
                                    </div>
                                    <div class="tit box ">* REPED NEW PASSWORD</div>
                                    <div class="input  box">
                                        {!! form::password('password_confirmation',null,['class'=>'form-control','required']) !!}
                                        <span class="font-red">
                                            @if($errors->has('password_confirmation'))
                                                {!! $errors->first('password_confirmation') !!}
                                            @endif
                                        </span>
                                    </div>
                                    <div class="submit  box">
                                        <button   type="submit" name="submit"  value="password"  class="btn btn-primary">CHANGE PASSWORD</button>
                                    </div>

                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane <?php if(isset($active) and $active=='increase_credit') echo 'active'   ?>" id="increase_credit">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="your_credit">
                                    <span class="tit">YOUR CREDIT AMOUNT :</span><span class="cont"> 548$</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="form">
                                    <div class="tit">I WANT TO INCREASE MY CREDIT</div>
                                    <div class="input"><input type="text" ></div>
                                    <div class="tit">ENTER THE PAYABLE AMOUNT</div>
                                    <div class="input"> <input type="text" ></div>
                                    <div class="submit"><input type="submit" value="PRICE ONLINE"></div>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div role="tabpanel" class="tab-pane <?php if(isset($active) and $active=='send_message') echo 'active'   ?>" id="send_message">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="nameuser">
                                    <div class=" box imguser">
                                        <span><i class="fa fa-user-circle-o" aria-hidden="true"></i></span>
                                    </div>
                                    <div class="box boxname">
                                        MOHAMMAD
                                        REZA
                                        BAGHISHANI

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form">
                                    <div class="title"><span class="star">* </span>NEW MESSAGE</div>
                                    <div class="tit">subject :</div>
                                    <div class="input"><input type="text"></div>
                                    <div class="tit">text message</div>
                                    <div class="textarea"><textarea></textarea></div>
                                    <div class="tit">attached file</div>
                                    <div class="file">
                                        <div class="form-group">
                                            <input type="file" name="file" id="file" class="input-file">
                                            <label for="file" class="btn btn-tertiary js-labelFile">
                                                <i class="icon fa fa-check"></i>
                                                <span class="js-fileName">Choose a file</span>
                                            </label>
                                            <span class="reset"><i class="fa fa-repeat" aria-hidden="true"></i></span>
                                        </div>
                                    </div>


                                    <div class="submit"><input type="submit" value="SEND MESSAGE"></div>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div role="tabpanel" class="tab-pane <?php if(isset($active) and $active=='manage_messages') echo 'active'   ?>" id="manage_messages">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="listmessage">
                                    <table class="table table-condensed">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>SUBJECT</th>
                                            <th>STATUS</th>
                                            <th>LAST UPDATE</th>

                                        </tr>

                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td><a class="subject"  href="#1">hotel</a></td>
                                            <td>open</td>
                                            <td>12/03/2017</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td><a class="subject"  href="#1">hotel</a></td>
                                            <td>open</td>
                                            <td>12/03/2017</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td><a class="subject"  href="#1">hotel</a></td>
                                            <td>open</td>
                                            <td>12/03/2017</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td><a class="subject"  href="#1">hotel</a></td>
                                            <td>open</td>
                                            <td>12/03/2017</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td><a class="subject"  href="#1">hotel</a></td>
                                            <td>open</td>
                                            <td>12/03/2017</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>


                            </div>
                        </div>

                    </div>
                    <div role="tabpanel" class="tab-pane <?php if(isset($active) and $active=='my_favorite') echo 'active'   ?>" id="my_favorite">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="nameuser">
                                    <div class=" box imguser">
                                        <span><i class="fa fa-user-circle-o" aria-hidden="true"></i></span>
                                    </div>
                                    <div class="box boxname">
                                        MOHAMMAD
                                        REZA
                                        BAGHISHANI

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="mainbox">
                                    <div class="title"><span class="star">* </span>MY FAVORITE</div>
                                    <div class="listfavorite">
                                        <div class="default">GO TO THE HOTEL FOR YOUR INTEREST AND ADD IT TO YOUR FAVORITES</div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </main>
@endsection
@section('footer')

    <script src="{{ url("resources/js/site/profile.js") }}"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $(function(){
            $("#datepicker").datepicker();
        });
    </script>


@endsection



