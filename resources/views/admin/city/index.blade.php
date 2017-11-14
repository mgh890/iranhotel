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
                    <div>
                        @if(!isset($model))
                        {{ Form::open(['method'=>'post','url'=>['admin/'.session()->get('isoCode').'/city/filter'],'class'=>'form-horizontal'   ]) }}
                            @else
                            {{ Form::model($model,['method'=>'post','url'=>['admin/'.session()->get('isoCode').'/city/filter'],'class'=>'form-horizontal'   ]) }}
                        @endif
                        <div class="form-group">
                            <div class="col-md-4">
                                <label class="col-md-3">نام شهر</label>
                                {{ Form::text('city',null,['class'=>'form-control col-md-9']) }}
                            </div>
                            <div class="col-md-5">
                                <div class="content-group-lg">
                                    <div class="checkbox checkbox-switchery" style="display: none;">
                                        <label>
                                            <input type="checkbox" class="switchery-primary" checked="checked">
                                        </label>
                                    </div>
                                    <div class="checkbox checkbox-switchery" style="display: none;">
                                        <label>
                                            <input type="checkbox" class="switchery-danger" checked="checked">
                                        </label>
                                    </div>
                                    <div class="checkbox checkbox-switchery" style="display: none;">
                                        <label>
                                            <input type="checkbox" class="switchery-info" checked="checked">
                                        </label>
                                    </div>
                                    <div class="checkbox checkbox-switchery" style="display: none;">
                                        <label>
                                            <input type="checkbox" class="switchery-warning" checked="checked">
                                        </label>
                                    </div>
                                    <div class="radio" style="width: 30%;display: inline-block;">
                                        <label>{{ Form::radio('category','1',0,['class'=>'control-warning']) }}ثبت شده</label>
                                    </div>
                                    <div class="radio" style="width: 30%;display: inline-block;">
                                        <label>{{ Form::radio('category','0',1,['class'=>'control-primary']) }}ثبت نشده</label>
                                    </div>
                                    <div class="radio" style="width: 30%;display: inline-block;">
                                        <label>{{ Form::radio('category','2',0,['class'=>'control-success']) }}همه</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                {{ Form::submit('جستجو',['class'=>'form-control btn btn-primary']) }}
                            </div>
                        </div>
                    </div>
                    {{ Form::close() }}
                </div>

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
                                <td><?= $key + 1 ?></td>
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
                                        <li class="text-primary-600">
                                            <a href="<?= url('admin/' . session()->get('isoCode') . '/city/' . $value->id . '/edit') ?>">
                                                <i class="icon-pencil7"></i> تعریف</a>
                                        </li>


                                    </ul>
                                </td></tr>
                            @endforeach
                            </tbody>
                    </table>
                </div>
                @if($city->total() < 1)
                    <div class="alert alert-warning alert-bordered">
                        <button type="button" class="close" data-dismiss="alert"><span>&times;</span><span class="sr-only">Close</span></button>
                        <span class="text-semibold">چیزی یافت نشد!</span>
                    </div>
                @endif
            </div>
        </div>
        {{$city->render()}}
    </div>
    </div>
    </div>
    <!-- section 2 -->
    <div class="row">
        <div class="col-md-6">

        </div>
    </div>
@endsection
@section('footer')
    <script type="text/javascript" src="<?=url('resources/assets/js/plugins/forms/styling/uniform.min.js')  ?>"></script>
    <script type="text/javascript" src="<?=url('resources/assets/js/plugins/forms/styling/switchery.min.js')  ?>"></script>
    <script type="text/javascript" src="<?=url('resources/assets/js/plugins/forms/styling/switch.min.js')  ?>"></script>
    <script type="text/javascript" src="<?=url('resources/assets/js/plugins/forms/selects/bootstrap_select.min.js')  ?>"></script>
    <script type="text/javascript" src="<?=url('resources/assets/js/pages/form_checkboxes_radios.js')  ?>"></script>

    <script type="text/javascript" src="<?=url('resources/assets/js/core/libraries/jquery_ui/full.min.js')  ?>"></script>
    <script type="text/javascript" src="<?= url('resources/assets/js/plugins/forms/selects/select2.min.js') ?>"></script>
    <script type="text/javascript" src="<?= url('resources/assets/js/core/app.js') ?>"></script>
    <script type="text/javascript" src="<?= url('resources/assets/js/pages/form_select2.js') ?>"></script>
@endsection