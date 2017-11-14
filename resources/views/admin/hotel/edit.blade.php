@extends('layouts.admin.admin')
@section('head')

@endsection
@section('content')
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <!-- section ۱ -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-flat">
                <div class="panel-heading">
                    <h6 class="panel-title">ویرایش هتل</h6>
                    <div class="heading-elements">
                        <ul class="icons-list">
                            <li><a data-action="collapse"></a></li>

                        </ul>
                    </div>
                </div>

                <div class="panel-body">
                        {!! Form::model($model,['method'=>'PUT','url'=> ['admin/hotel',$model['id']],'files'=>true,'class'=>'form-horizontal']) !!}
                    <div class="row">
                        <div class="col-md-2">
                            <label> کد یاتا هتل</label>
                            {!! form::text('utah',null,['class'=>'form-control']) !!}
                            <span class="font-red">
                                        @if($errors->has('utah'))
                                    {!! $errors->first('utah') !!}
                                @endif
                                    </span>
                        </div>

                        <div class="col-md-6">
                            <label>نام هتل</label>
                            {!! form::text('name',null,['class'=>'form-control']) !!}
                            <span class="font-red">
                                        @if($errors->has('name'))
                                    {!! $errors->first('name') !!}
                                @endif
                                    </span>
                        </div>
                        <div class="col-md-2">
                            <label>اولویت (مقدار عددی)</label>
                            {!! form::text('priority',null,['class'=>'form-control','required']) !!}
                            <span class="font-red">
                                        @if($errors->has('priority'))
                                    {!! $errors->first('priority') !!}
                                @endif
                                    </span>
                        </div>
                        <div class="col-md-2">
                            <label>ذخیره</label><br>
                            <button type="submit" name="submit" value="name" class="btn btn-primary">ویرایش نام هتل <i
                                        class="icon-arrow-left13 position-right"></i></button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <div class="content-group-lg">

                                    <label>انتخاب شهر</label>
                                    <td>{!! Form::select('city', $city, $model['city_id'], ['class'=>'select-clear']) !!}</td>
                                    <span class="font-red">
                                        @if($errors->has('city'))
                                            {!! $errors->first('city') !!}
                                        @endif
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="col-lg-10">
                                <label>وضعیت</label>
                                <div class="checkbox checkbox-switchery switchery-double">
                                    <label>

                                        {!! form::checkbox('status',true,true,['class'=>'switchery']) !!}

                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    {!! Form::close() !!}
                    <?php
//                    if (\Illuminate\Support\Facades\Session::get('room_edit'))
//                        {
//                            $room_edit=\Illuminate\Support\Facades\DB::table('hotel_room')->where('id',\Illuminate\Support\Facades\Session::get('room_edit'))->first();
//                            if ($room_edit->service_id)
//                                {
//                                    $room_edit->service=array();
//                                    foreach(explode(',',$room_edit->service_id) as $value)
//                                        {
//                                            array_push($room_edit->service,$value);
//                                        }
//
//                                }
//                        }
//                        else {
                            $room_edit=null;
//                        }
                    ?>
                    @if($room_edit)
                    {!! Form::model($room_edit,['method'=>'PUT','url'=> ['site',$model['id']],'files'=>true,'class'=>'form-horizontal']) !!}
                    <input type="hidden" name="room_id" value="<?=$room_edit->id ?>">
                        <?php \Illuminate\Support\Facades\Session::forget('room_edit') ?>
                    @else
                        {!! Form::open(['method'=>'PUT','url'=> ['admin/hotel',$model['id']],'files'=>true,'class'=>'form-horizontal']) !!}
                    @endif
                    <label class="text-semibold">تعریف اتاق ها</label>

                        <div class="row">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>نوع اتاق</th>
                                        <th>ظرفیت</th>
                                        <th>انتخاب خدمات</th>
                                        <th>تصویر اتاق</th>
                                        <th>عملیات</th>

                                    </tr>
                                    </thead>
                                    <tbody>

                                    <tr>

                                        <td>{!! form::text('bed_type',null,['class'=>'form-control','required']) !!}
                                            <span class="font-red">
                                        @if($errors->has('bed_type'))
                                                    {!! $errors->first('bed_type') !!}
                                                @endif
                                    </span></td>
                                        <td>{!! form::selectrange('capacity',0,30,['class'=>'form-control','required']) !!}
                                            <span class="font-red">
                                        @if($errors->has('capacity'))
                                                    {!! $errors->first('capacity[]') !!}
                                                @endif
                                    </span></td>
                                        <td>{!! Form::select('service[]', $service,null  ,['multiple'=>'multiple','class'=>'select','required']) !!}
                                           </td>
                                        <td>
                                            {!! form::file('photo') !!}
                                            <span class="font-red">
                                        @if($errors->has('photo'))
                                                    {!! $errors->first('photo') !!}
                                                @endif
                                    </span>
                                        </td>

                                        <td>
                                            <div class="col-md-1">
                                                <button type="submit" name="submit" value="room" class="btn btn-primary">ذخیره اتاق <i
                                                            class="icon-arrow-left13 position-right"></i></button>
                                            </div>
                                        </td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                            {!! Form::close() !!}
                        </div>
                    @if($room!=null)
                        <br>
                        <label class="text-semibold">لیست اتاق ها</label>
                        <div class="row">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>

                                        <th>ردیف</th>
                                        <th>تصویر اتاق</th>
                                        <th>نوع اتاق</th>
                                        <th>ظرفیت</th>
                                        <th>نوع سرویس</th>
                                        <th>عملیات</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($room as $key=>$value)
                                    <tr>

                                        <td><?=$key+1?></td>
                                        <td><img src="<?php

                                            if($value->photo!=null){
                                                echo url($value->photo);
                                            }
                                            else{
                                                echo url('storage/upload/room.png');
                                            }

                                            ?>" style="width:40px;height:40px;"></td>
                                        <td><?=$value->bed_type?></td>
                                        <td><?=$value->capacity?></td>
                                        <td>
                                        @foreach(explode(',',$value->service_id) as $key =>$value1)
                                        <?php  $service_name= \Illuminate\Support\Facades\DB::table('hotel_service')->where('id',$value1)->first() ; ?>
                                        <label class="label-info">@if($service_name)<?= $service_name->name ?>@endif</label>
                                        @endforeach

                                        </td>
                                        <td>
                                            <ul class="icons-list">

                                                <li class="text-danger-600"><a
                                                            onclick="del_room('<?=  $value->id ?>')"><i
                                                                class="icon-pencil7"></i> ویرایش </a>
                                                </li>

                                            </ul>
                                        </td>
                                        </td>
                                    </tr>
                                @endforeach
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    @endif



                </div>
            </div>
        </div>


    </div>

@endsection
@section('footer')
    <script type="text/javascript">

        function del_room(id)
        {
                    <?php
                    $token=Session::token();
                    ?>
            var route='<?= url("admin/hotel")site?>';
            if (!confirm("آیا از ویرایش  این رکورد اطمینان دارید !"))
                return false;
            var form = document.createElement("form");
            form.setAttribute("method", "POST");
            form.setAttribute("t", "2");
            form.setAttribute("action",route+id);
            var hiddenField1 = document.createElement("input");
            hiddenField1.setAttribute("name", "_method");
            hiddenField1.setAttribute("value",'DELETE');
            form.appendChild(hiddenField1);
            var hiddenField2 = document.createElement("input");
            hiddenField2.setAttribute("name", "_token");
            hiddenField2.setAttribute("value",'<?= $token ?>');
            form.appendChild(hiddenField2);
            document.body.appendChild(form);
            form.submit();
            document.body.removeChild(form);
        }

        document.getElementById('li_menu_product').style.backgroundColor='#f78e3f';

        document.getElementById('sub_product').style.display='block';

    </script>
    <script type="text/javascript"
            src="<?= url('resources/assets/admin/assets/js/core/libraries/jquery_ui/full.min.js') ?>"></script>
    <script type="text/javascript"
            src="<?= url('resources/assets/admin/assets/js/plugins/forms/selects/select2.min.js') ?>"></script>
    <script type="text/javascript" src="<?= url('resources/assets/admin/assets/js/pages/form_select2.js') ?>"></script>
    <script type="text/javascript"
            src="<?= url('resources/assets/admin/assets/js/plugins/forms/styling/switchery.min.js') ?>"></script>
    <script type="text/javascript"
            src="<?= url('resources/assets/admin/assets/js/pages/form_checkboxes_radios.js') ?>"></script>
@endsection