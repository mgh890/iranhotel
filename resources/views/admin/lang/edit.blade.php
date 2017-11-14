@extends('layouts.admin.admin')
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
                    <h6 class="panel-title">ویرایش زبان</h6>
                    <div class="heading-elements">
                        <ul class="icons-list">
                            <li><a data-action="collapse"></a></li>

                        </ul>
                    </div>
                </div>

                <div class="panel-body">
                    {!! Form::model($model,['method'=>'PUT','url'=> ['admin/'.session()->get('isoCode').'/language',$model['id']],'files'=>true,'class'=>'form-horizontal']) !!}
                    <div class="form-group">
                        <div class="col-md-3">
                            <div class="inbox-form-group">
                                <label class="control-label">کد اختصاری کشور</label>
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
                                <label class="control-label"> نام کشور</label>
                                {!! form::text('country',null,['class'=>'form-control','required']) !!}
                                <span class="font-red">
                                    @if($errors->has('country'))
                                        {!! $errors->first('country') !!}
                                    @endif
                                </span>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <label>وضعیت</label>
                            <div class="checkbox checkbox-switchery switchery-double">
                                <label>
                                    {!! form::checkbox('status',1,$model->status,['class'=>'switchery']) !!}
                                </label>
                            </div>
                        </div>

<div class="col-md-2">
<h6 style="margin: 1px 0 5px 0;">آیکون</h6>
<select  name="icon" id="iconcountry" >
@foreach($iconcountryu as $value)
<option  value="{{$value}}"  <?php  if($model->icon=='storage/upload/'.$value) echo 'selected="selected "' ?>   style="background-image:url({{ url('storage/upload').'/'.$value }});"></option>
@endforeach
</select>
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
    <script type="text/javascript" src="<?= url('resources/assets/js/plugins/forms/styling/switchery.min.js') ?>"></script>
    <script type="text/javascript" src="<?= url('resources/assets/js/plugins/forms/styling/switch.min.js') ?>"></script>
    <script type="text/javascript" src="<?= url('resources/assets/js/core/app.js') ?>"></script>
    <script type="text/javascript" src="<?= url('resources/assets/js/pages/form_checkboxes_radios.js') ?>"></script>


    <script>


        $("#iconcountry").change(function (){
            var a=$(this).val();
            var b='url(http://localhost/safarhotel/storage/upload/'+a+')';
            $(this).css('background-image',b);
        });
        window.onload=function(){
            var a=$("#iconcountry").val();
            var b='url(http://localhost/safarhotel/storage/upload/'+a+')';
            $("#iconcountry").css('background-image',b);


        };




    </script>
@endsection