@extends('layouts.admin.admin')
@section('head')

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

                    @if(isset($model))
                        {!! Form::open($model,['method'=>'post','url'=>['admin/'.session()->get('isoCode').'/article/filter'],'class'=>'form-horizontal']) !!}
                    @else
                        {!! Form::open(['method'=>'post','url'=>['admin/'.session()->get('isoCode').'/article/filter'],'class'=>'form-horizontal']) !!}
                    @endif

                    <div class="row">
                        <div class="col-md-2">
                            <label>عنوان مطلب </label>
                            <td>  {!! form::text('title',null,['class'=>'form-control']) !!}</td>
                            <span class="font-red">
                                        @if($errors->has('title'))
                                    {!! $errors->first('title') !!}
                                @endif
                                    </span>
                        </div>


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
                            <div class="inbox-form-group mail-to">
                                <label class="control-label"> دسته بندی  </label>
                                {!! Form::select('type', [''=>'همه','attractions' => 'جاذبه های گردشگری','souvenir' => 'سوغات'], null, [ 'class'=>'bs-select form-control','data-style'=>'btn-primary']) !!}
                                <span class="font-red">
                            @if($errors->has('type'))
                                        {!! $errors->first('type') !!}
                                    @endif
                        </span>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="inbox-form-group mail-to">
                                <label class="control-label"> وضعیت  </label>
                                {!! Form::select('status', [''=>'همه','1'=>'فعال','0'=>'غیرفعال' ],null, ['class'=>'form-control' ]) !!}
                                <span class="font-red">
                            @if($errors->has('status'))
                                        {!! $errors->first('status') !!}
                                    @endif
                        </span>
                            </div>
                        </div>



                        {{--<div class="col-md-2">--}}
                            {{--<div class="inbox-form-group mail-to">--}}
                                {{--<label class="control-label"> دسته بندی  </label>--}}
                                {{--{!! Form::select('type', [--}}
                                       {{--'attractions' => 'جاذبه های گردشگری',--}}
                                        {{--'souvenir' => 'سوغات'--}}
                                     {{--], null, [ 'class'=>'bs-select form-control','data-style'=>'btn-primary']) !!}--}}
                                {{--<span class="font-red">--}}
                            {{--@if($errors->has('type'))--}}
                                        {{--{!! $errors->first('type') !!}--}}
                                    {{--@endif--}}
                        {{--</span>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="col-md-1">--}}
                            {{--<label>وضعیت</label>--}}
                            {{--<div class="checkbox checkbox-switchery switchery-double">--}}
                                {{--<label>--}}
                                    {{--@if(isset($model))--}}
                                        {{--{!! form::checkbox('status',1,$model['status'],['class'=>'switchery']) !!}--}}
                                    {{--@else--}}
                                        {{--{!! form::checkbox('status',1,1,['class'=>'switchery']) !!}--}}
                                    {{--@endif--}}
                                {{--</label>--}}
                            {{--</div>--}}
                        {{--</div>--}}





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
            <h5 class="panel-title">لیست مطالب</h5>
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
                <th>عنوان</th>
                <th>شهر</th>
                <th>دسته بندی</th>
                <th>وضعیت</th>
                <th class="text-center">عملیات</th>
            </tr>
            </thead>
            <tbody>
            @foreach($articles as $key=>$value)
                <tr>
                    <td><?=$key+1?></td>
                    <td><?=$value->title?></td>
                    <td><?=$cities[$value->city]?></td>
                    <td><?php
                        if($value->type == 'souvenir') echo 'سوغات';
                        if($value->type == 'attractions') echo 'جاذبه های گردشگری';
                        ?></td>
                    <td>
                        @if($value->status==1)
                            <span class="label label-success">فعال</span>
                        @else
                            <span class="label label-danger">غیر فعال</span>
                        @endif
                    </td>
                    <td style="text-align: center;">
                        <ul class="icons-list">
                            <li class="text-primary-600"><a href="<?= url('admin/en/package').'/'.$value->id.'/edit' ?>"><i class="icon-pencil7"></i> ویرایش
                                </a></li>
                        </ul>
                    </td>

                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    {{$articles->render()}}




@endsection
@section('footer')
    <script type="text/javascript" src='<?=url('resources/assets/js/core/libraries/jquery_ui/full.min.js')  ?>'></script>
    <script type="text/javascript" src='<?= url('resources/assets/js/plugins/forms/selects/select2.min.js') ?>'></script>

    <script type="text/javascript" src="<?= url('resources/assets/js/core/app.js') ?>"></script>

    <script type="text/javascript" src='<?= url('resources/assets/js/pages/form_select2.js') ?>'></script>

    <script type="text/javascript" src="<?= url('resources/assets/js/plugins/forms/styling/uniform.min.js') ?>"></script>
    <script type="text/javascript" src="<?= url('resources/assets/js/plugins/forms/styling/switchery.min.js') ?>"></script>
    <script type="text/javascript" src="<?= url('resources/assets/js/plugins/forms/styling/switch.min.js') ?>"></script>


    <script type="text/javascript" src="<?= url('resources/assets/js/pages/form_checkboxes_radios.js') ?>"></script>


@endsection


