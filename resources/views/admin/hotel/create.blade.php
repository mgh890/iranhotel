@extends('layouts.admin.admin')
@section('header')
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
@section('content')

    <!-- section ۱ -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-flat">
                <div class="panel-heading">
                    <h6 class="panel-title">تعریف هتل</h6>
                    <div class="heading-elements">
                        <ul class="icons-list">
                            <li><a data-action="collapse"></a></li>

                        </ul>
                    </div>
                </div>

                <div class="panel-body">
                    {!! Form::open(['url'=>'site','files'=>true,'class'=>'form-horizontal']) !!}
                        <div class="row">
                            <div class="col-md-2">
                                <label> کد یاتا هتل</label>
                                {!! form::text('utah',null,['class'=>'form-control','required']) !!}
                                <span class="font-red">
                                        @if($errors->has('utah'))
                                        {!! $errors->first('utah') !!}
                                    @endif
                                    </span>
                            </div>

                            <div class="col-md-6">
                                <label>نام هتل</label>
                                {!! form::text('name',null,['class'=>'form-control','required']) !!}
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
                                <button type="submit" name="submit" value="create" class="btn btn-primary">ذخیره <i
                                            class="icon-arrow-left13 position-right"></i></button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <div class="content-group-lg">

                                        <label>انتخاب شهر</label>
                                        <td>{!! Form::select('city', $city, null, ['class'=>'select-clear']) !!}</td>
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
                </div>
            </div>
        </div>




    </div>

@endsection
@section('footer')



    <script type="text/javascript"
            src="<?= url('resources/assets/admin/assets/js/plugins/forms/selects/select2.min.js') ?>"></script>
    <script type="text/javascript" src="<?= url('resources/assets/admin/assets/js/pages/form_select2.js') ?>"></script>


@endsection