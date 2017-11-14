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
                    {!! Form::open($model,['method'=>'post','url'=>['admin/en/package/filter'],'class'=>'form-horizontal']) !!}
                @else
                    {!! Form::open(['method'=>'post','url'=>['admin/en/package/filter'],'class'=>'form-horizontal']) !!}
                @endif

                <div class="row">
                    <div class="col-md-2">
                        <label>عنوان پکیج </label>
                        <td>  {!! form::text('title',null,['class'=>'form-control']) !!}</td>
                        <span class="font-red">
                                        @if($errors->has('title'))
                                {!! $errors->first('title') !!}
                            @endif
                                    </span>
                    </div>
                    <div class="col-md-1">
                        <label>مدت زمان</label>
                        <td>  {!! form::number('duration',null,['class'=>'form-control']) !!}</td>
                        <span class="font-red">
                                        @if($errors->has('duration'))
                                {!! $errors->first('duration') !!}
                            @endif
                                    </span>
                    </div>
                    <div class="col-md-2">

                        <label>قیمت</label>
                        <td> <div id="slider"></div>
                            {!! form::hidden('minprice',null,['class'=>'form-control','id'=>'minprice']) !!}
                            {!! form::hidden('maxprice',null,['class'=>'form-control','id'=>'maxprice']) !!}
                        </td>
                        <span class="font-red">
                                        @if($errors->has('price'))
                                {!! $errors->first('price') !!}
                            @endif
                                    </span>
                    </div>


                    <div class="col-md-1">
                        <label>وضعیت</label>
                        <div class="checkbox checkbox-switchery switchery-double">
                            <label>
                                @if(isset($model))
                                {!! form::checkbox('status',1,$model['status'],['class'=>'switchery']) !!}
                                @else
                                {!! form::checkbox('status',1,1,['class'=>'switchery']) !!}
                                @endif
                            </label>
                        </div>
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
        <h5 class="panel-title">لیست پکیج</h5>
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
            <th>مدت زمان</th>
            <th>قیمت</th>
            <th>وضعیت</th>
            <th class="text-center">عملیات</th>
        </tr>
        </thead>
        <tbody>
        @foreach($packages as $key=>$value)
            <tr>
                <td><?=$key+1?></td>
                <td><?=$value->title?></td>
                <td><?=$value->duration?></td>
                <td><?=$value->price?></td>
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
{{$packages->render()}}
<!-- /basic datatable -->
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

<script>
    function collision($div1, $div2) {
        var x1 = $div1.offset().left;
        var w1 = 40;
        var r1 = x1 + w1;
        var x2 = $div2.offset().left;
        var w2 = 40;
        var r2 = x2 + w2;

        if (r1 < x2 || x1 > r2) return false;
        return true;

    }

    // // slider call

    $('#slider').slider({
        range: true,
        min: {{$minpric}},
        max: {{$maxpric}},
        values: [ <?php if(isset($model['minpric'])){ echo $model['minpric'];}else{ echo $minpric;} ?>, <?php if(isset($model['maxpric'])){ echo $model['maxpric'];}else{ echo $maxpric;} ?> ],
        slide: function(event, ui) {

            $('.ui-slider-handle:eq(0) .price-range-min').html('$' + ui.values[ 0 ]);
            $('#minprice').val(ui.values[0]);
            $('.ui-slider-handle:eq(1) .price-range-max').html('$' + ui.values[ 1 ]);
            $('#maxprice').val(ui.values[1]);

            $('.price-range-both').html('<i>$' + ui.values[ 0 ] + ' - </i>$' + ui.values[ 1 ] );

            //

            if ( ui.values[0] == ui.values[1] ) {
                $('.price-range-both i').css('display', 'none');
            } else {
                $('.price-range-both i').css('display', 'inline');
            }

            //

            if (collision($('.price-range-min'), $('.price-range-max')) == true) {
                $('.price-range-min, .price-range-max').css('opacity', '0');
                $('.price-range-both').css('display', 'block');
            } else {
                $('.price-range-min, .price-range-max').css('opacity', '1');
                $('.price-range-both').css('display', 'none');
            }

        }
    });

    $('.ui-slider-range').append('<span class="price-range-both value"><i>$' + $('#slider').slider('values', 0 ) + ' - </i>' + $('#slider').slider('values', 1 ) + '</span>');

    $('.ui-slider-handle:eq(0)').append('<span class="price-range-min value">$' + $('#slider').slider('values', 0 ) + '</span>');

    $('.ui-slider-handle:eq(1)').append('<span class="price-range-max value">$' + $('#slider').slider('values', 1 ) + '</span>');

    $('#minprice').val(<?php if(isset($model['minpric'])){ echo $model['minpric'];}else{ echo $minpric;} ?>);
    $('#maxprice').val(<?php if(isset($model['maxpric'])){ echo $model['maxpric'];}else{ echo $maxpric;} ?>);
</script>

@endsection