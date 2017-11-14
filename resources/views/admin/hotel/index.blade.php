@extends('layouts.admin.admin')
@section('header')

    @endsection
@section('content')
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-flat">
                <div class="panel-heading">
                    <h6 class="panel-title">فیلتر</h6>
                    <div class="heading-elements">
                        <ul class="icons-list">
                            <li><a data-action="collapse"></a></li>

                        </ul>
                    </div>
                </div>

                <div class="panel-body">

                    {!! Form::open(['method'=>'post','url'=>['site'],'class'=>'form-horizontal']) !!}
                    <div class="row">
                        <div class="col-md-4">
                            <label>انتخاب شهر</label>
                            <td>{!! Form::select('city', $cities, null, ['class'=>'select-clear','placeholder'=>'انتخاب شهر','name'=>'city','id'=>'city']) !!}</td>
                            <span class="font-red">
                                        @if($errors->has('city'))
                                    {!! $errors->first('city') !!}
                                @endif
                                    </span>
                        </div>
                        <div class="col-md-2">
                            <label>نام هتل</label>
                            <td>  {!! form::text('name',null,['class'=>'form-control']) !!}</td>
                            <span class="font-red">
                                        @if($errors->has('name'))
                                    {!! $errors->first('name') !!}
                                @endif
                                    </span>
                        </div>

                        <div class="col-md-2">
                            <label>اعمال فیلتر</label><br>
                            <button type="submit" name="submit" value="filter" class="btn btn-primary">فیلتر کن <i
                                        class="icon-arrow-left13 position-right"></i></button>
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    <!-- Basic datatable -->
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title">لیست هتل ها</h5>
            <div class="heading-elements">
                <ul class="icons-list">
                    <li><a data-action="collapse"></a></li>

                </ul>
            </div>
        </div>

        <div class="panel-body">
           </div>

        <table class="table datatable-basic">
            <thead>
            <tr>
                <th>ردیف</th>
                <th>اولویت</th>
                <th>نام هتل</th>
                <th>کد یوتا</th>
                <th>شهر</th>
                <th>نوع اتاق</th>
                <th>وضعیت</th>
                <th class="text-center">عملیات</th>
            </tr>
            </thead>
            <tbody>
            @foreach($hotel as $key=>$value)
            <tr>
                <td><?=$key+1?></td>
                <td><?=$value->priority?></td>
                <td><?=$value->name?></td>
                <td><?=$value->utah?></td>
                <td><?=array_search($value->city_id,$city)?></td>
                <td>
                    <?php
                    $room=\App\ApiHotelRoom::where('hotel_id',$value->id)->orderby('id','DESC')->get();
                    ?>
                    @foreach($room as $key=>$value1)
                    <span class="label label-default"> <?=$value1->bed_type?></span>
                    @endforeach
                </td>
                <td>
                    @if($value->status==1)
                    <span class="label label-success">فعال</span>
                    @else
                    <span class="label label-danger">غیر فعال</span>
                        @endif
                </td>
                <td class="text-center">
                    <ul class="icons-list">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="icon-menu9"></i>
                            </a>

                            <ul class="dropdown-menu dropdown-menu-right">
                                <li><a href="<?= url('admin/'.session()->get('isoCode').'/hotel/'.$value->id.'/edit') ?>"><i class="icon-edit"></i> ویرایش </a></li>
                              
                            </ul>
                        </li>
                    </ul>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    {{$hotel->render()}}
    <!-- /basic datatable -->
    @endsection
@section('footer')

    <script type="text/javascript" src="<?=url('resources/assets/js/plugins/forms/styling/uniform.min.js')  ?>"></script>
    <script type="text/javascript" src="<?= url('resources/assets/js/core/app.js') ?>"></script>
    <script type="text/javascript" src="<?= url('resources/assets/js/pages/form_inputs.js') ?>"></script>
    <script type="text/javascript" src="<?= url('resources/assets/js/plugins/forms/selects/select2.min.js') ?>"></script>
    <script type="text/javascript" src="<?= url('resources/assets/js/pages/form_select2.js') ?>"></script>

@endsection