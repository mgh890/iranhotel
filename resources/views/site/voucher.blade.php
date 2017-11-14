@extends('layouts.site.site')
@section('header')
    <link rel="stylesheet" type="text/css" href="{{ url("resources/css/site/voucher.css") }}">
@endsection
@section('content')
@include("layouts.site.breadcrumb")
<main class="container-fluid" id="voucher">
<div class="row">
    <div class="col-lg-12 col-md-12 ">
        <div class="title">
            <div class="tit"><span class="icon"><i class="fa fa-file-text-o" aria-hidden="true"></i></span>VOUCHER</div>
            <div class="date">PURCHASE DATE :<span class="num">3/3/2017</span> </div>
        </div>
    </div>
</div>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="tablevoucher">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th class="tit" colspan="5"><span><i class="flaticon-building-1"></i></span> HOTEL PROFILE</th>
                    </tr>
                    <tr>
                        <th>HOTEL NAME</th>
                        <th>HOTEL LEVEL</th>
                        <th>SERVISEC</th>
                        <th>ADRESS</th>
                        <th>PHONE NUMBER</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>ZANDIYEH</td>
                        <td>5 STAR</td>
                        <td>FULL</td>
                        <td>FARS,SHIRAZ,ZANDIYE ST</td>
                        <td>513548642</td>
                    </tr>
                    </tbody>
                </table>

                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th class="tit" colspan="5"><span><i class="flaticon-building-1"></i></span> RESERVATION PROFILE</th>
                    </tr>
                    <tr>
                        <th>IN DATE</th>
                        <th>OUT DATE</th>
                        <th>STAYING TIME</th>
                        <th>YOUR SERVIC</th>
                        <th>____</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>2017/3/19 </td>
                        <td>2017/3/22 </td>
                        <td>3 NIGHT</td>
                        <td>WIFI AND BERAKFAST</td>
                        <td>____</td>
                    </tr>
                    </tbody>
                </table>

                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th class="tit" colspan="8"><span><i class="flaticon-building-1"></i></span> PASSENGER INFORMATION AND ROOM</th>
                    </tr>
                    <tr>
                        <th>ROOM NAME </th>
                        <th>ROOM CAPACITY</th>
                        <th>ROOM SERVIC</th>
                        <th>KEEPERS NAME</th>
                        <th>ADDITIONAL SERVICE</th>
                        <th>NATIONALITY</th>
                        <th>PHONE NUMBER</th>
                        <th>NATIONAL CODE PASSPORT NUMBER</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>2 BED</td>
                        <td>2</td>
                        <td>BERAKFAST</td>
                        <td>MOHAMMAD BAGHI</td>
                        <td>NONE</td>
                        <td>IRAN</td>
                        <td>9339004791</td>
                        <td>_0658987465131___</td>
                    </tr>
                    </tbody>
                </table>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th class="tit" colspan="8"><span><i class="flaticon-building-1"></i></span> RULES</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><P class="contrule">DSFWGN DSFDSFWGN JWRNGVJNRBGV HBRGBERFGB EJBGJEBJEJGETNHJNTE JNTJNHTJENJHNTHIE JFGJGNVDSJVBHB VHFDBVHFWGNJWRNG VJNRBGVHBR GBERFGB EJBGJEBJE JGETNHJ NTEHJN TJN HTJE NJHNTH IEJFGJGNV DSJVBHB VHFDBVHFJ RNGVJNRB GV HBRGBERFG EJBGJEBJ EJGET NH JNTEH JNTJN HTJENJH NT HIEJFGJG NVDSJV BHBVH FDBVHF</P></td>
                    </tr>
                    </tbody>
                </table>



            </div>
        </div>
    </div>
</main>
@endsection
@section('footer')
    <script src="{{ url("resources/js/site/voucher.js") }}"></script>
@endsection


