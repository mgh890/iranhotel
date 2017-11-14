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
                    <h6 class="panel-title">تعریف شهر</h6>
                    <div class="heading-elements">
                        <ul class="icons-list">
                            <li><a data-action="collapse"></a></li>

                        </ul>
                    </div>
                </div>

                <div class="panel-body">
                    {!! Form::model($model,['method'=>'PUT','url'=> ['admin/'.session()->get('isoCode').'/city',$model[0]['id']],'files'=>true,'class'=>'form-horizontal']) !!}
                        <div class="form-group">
                            <div class="col-md-3">
                                <label>نام شهر</label>
                                <button type="button" class="btn bg-teal-400 btn-labeled btn-rounded"><b><i class="icon-city"></i></b> {{ $model[0]['name'] }}</button>
                            </div>
                            <div class="col-md-4">
                                <label class="col-md-5" style="line-height: 2.5;"> نام شهر به {{ $langName[0] }} </label>
                                {!! form::text('langName',$model[1]['name'],['class'=>'form-control col-md-7']) !!}
                                <span class="font-red">
                                    @if($errors->has('langName'))
                                        {!! $errors->first('langName') !!}
                                    @endif
                                </span>
                            </div>
                            <div class="col-md-3">
                                <div class="col-lg-10">
                                    <label>وضعیت</label>
                                    <div class="checkbox checkbox-switchery switchery-double" style="display: inline-block;">
                                        <label>
                                            {!! form::checkbox('status',true,$model[0]['status'],['class'=>'switchery']) !!}
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <button type="submit" class="btn btn-primary">  ذخیره <i class="icon-arrow-left13 position-right"></i></button>
                            </div>
                        </div>
                    {!! Form::close() !!}
                        <div class="table-responsive">
                            <table class="table table-bordered table-lg">

                                <tr class="active">
                                    <th colspan="6">لیست شهرها</th>
                                </tr>
                                <tr>
                                    <td class="col-md-1">ردیف</td>
                                    <td class="col-md-2">کد یوتا</td>
                                    <td class="col-sm-3">نام شهر</td>
                                    <td class="col-sm-3"> نام شهر به {{ $langName[0] }} </td>
                                    <td class="col-sm-1">وضعیت</td>
                                    <td class="col-sm-2">عملیات</td>
                                </tr>
                                <tr>
                                    <tbody>
                                    @foreach($city as $key=>$value)
                                    <td><?= $key+1 ?></td>
                                    <td><?= $value->utah ?></td>
                                    <td><?= $value->name ?></td>
                                    <td>{{ (isset($langArr[$key])) ? $langArr[$key]['name'] : '' }}</td>
                                    <td>
                                        @if($value->status==1)
                                            <span class="label label-success">فعال</span>
                                            @else
                                            <span class="label label-danger">غیر فعال</span>
                                            @endif
                                    </td>
                                    <td>
                                        <ul class="icons-list">
                                            <li class="text-primary-600"><a href="<?= url('admin/'.session()->get('isoCode').'/city').'/'.$value->id.'/edit' ?>"><i class="icon-pencil7"></i> تعریف
                                                </a>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                        @endforeach
                                </tbody>
                            </table>
                        </div>

                </div>
            </div>
            {{$city->render()}}
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

    <script type="text/javascript" src="<?= url('resources/assets/js/core/app.js') ?>"></script>

    <script type="text/javascript" src='<?= url('resources/assets/js/pages/form_select2.js') ?>'></script>

    <script type="text/javascript" src="<?= url('resources/assets/js/plugins/forms/styling/uniform.min.js') ?>"></script>
    <script type="text/javascript" src="<?= url('resources/assets/js/plugins/forms/styling/switchery.min.js') ?>"></script>
    <script type="text/javascript" src="<?= url('resources/assets/js/plugins/forms/styling/switch.min.js') ?>"></script>


    <script type="text/javascript" src="<?= url('resources/assets/js/pages/form_checkboxes_radios.js') ?>"></script>


@endsection