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
                    <h6 class="panel-title">ویرایش خدمات</h6>
                    <div class="heading-elements">
                        <ul class="icons-list">
                            <li><a data-action="collapse"></a></li>

                        </ul>
                    </div>
                </div>

                <div class="panel-body">
                    {!! Form::model($model,['method'=>'PUT','url'=> ['admin/en/packageservices',$model['id']],'files'=>true,'class'=>'form-horizontal']) !!}
                    <div class="form-group">
                        <div class="col-md-4">
                            <label>نام خدمات</label>
                            {!! form::text('title',null,['class'=>'form-control','required']) !!}
                            <span class="font-red">
                                        @if($errors->has('title'))
                                    {!! $errors->first('title') !!}
                                @endif
                                    </span>
                        </div>
                        <div class="col-md-3">
                            <label>آیکون</label>
                            <div class="uploader bg-warning">
                                {!! form::file('icon',['class'=>'file-styled-primary']) !!}
                                <span class="action" style="user-select: none;"><i class="icon-plus2"></i></span>
                            </div>

                            <span class="font-red">
                                        @if($errors->has('icon'))
                                    {!! $errors->first('icon') !!}
                                @endif
                                    </span>
                            <p class="help-block">فرمت png , سایز 45*45</p>
                        </div>
                        <div class="col-md-2">
                            <div class="col-lg-10">
                                <label>وضعیت</label>
                                <div class="checkbox checkbox-switchery switchery-double">
                                    <label>
                                        {!! form::checkbox('status',1,$model->status,['class'=>'switchery']) !!}
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <label>ذخیره </label>
                            <button type="submit" class="btn btn-primary">ذخیره <i
                                        class="icon-arrow-left13 position-right"></i></button>
                        </div>
                    </div>
                    {!! Form::close() !!}

                </div>
            </div>

        </div>
    </div>
    <!-- section 2 -->
    <div class="row">


    </div>
@endsection
@section('footer')
    <script type="text/javascript" src='<?=url('resources/assets/js/core/libraries/jquery_ui/full.min.js')  ?>'></script>
    <script type="text/javascript" src='<?= url('resources/assets/js/plugins/forms/selects/select2.min.js') ?>'></script>
    <script type="text/javascript" src='<?= url('resources/assets/js/pages/form_select2.js') ?>'></script>


    <script type="text/javascript" src="<?= url('resources/assets/js/plugins/forms/styling/uniform.min.js') ?>"></script>

    <script type="text/javascript" src="<?= url('resources/assets/js/pages/form_inputs.js') ?>"></script>

    <script type="text/javascript" src="<?= url('resources/assets/js/plugins/forms/styling/switchery.min.js') ?>"></script>
    <script type="text/javascript" src="<?= url('resources/assets/js/plugins/forms/styling/switch.min.js') ?>"></script>
    <script type="text/javascript" src="<?= url('resources/assets/js/core/app.js') ?>"></script>
    <script type="text/javascript" src="<?= url('resources/assets/js/pages/form_checkboxes_radios.js') ?>"></script>


@endsection
