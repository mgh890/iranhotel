@extends('layouts.admin.admin')
@section('head')

    <link href="{{ url('resources/css/admin/dropzone.css') }}" rel="stylesheet" type="text/css">
@endsection
@section('content')
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif


    <div class="panel panel-flat">
        <div class="panel-heading">
            <h6 class="panel-title">  ویرایش _{{$model->title}}</h6>
            <div class="heading-elements">
                <ul class="icons-list">
                    <li><a data-action="collapse"></a></li>
                </ul>
            </div>
        </div>
<?php

                                if (isset($model->service))
                                {
                                   $model->packageservices=array();
                                   foreach( explode(',',$model->service) as $value)
                                    {
                                          array_push($model->packageservices,$value);
                                    }
                                }
?>



        <div class="panel-body">
            {!! Form::model($model,['method'=>'PUT','url'=> ['admin/en/package',$model->id],'files'=>true,'class'=>'form-horizontal']) !!}
            <div class="row">
                <div class="col-md-3">
                    <div class="inbox-form-group">
                        <label class="control-label">عنوان</label>
                        {!! form::text('title',null,['class'=>'form-control','required']) !!}
                        <span class="font-red">
                            @if($errors->has('title'))
                                {!! $errors->first('title') !!}
                            @endif
                        </span>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="inbox-form-group">
                        <label class="control-label">مدت زمان</label>
                        {!! form::number('duration',null,['class'=>'form-control','min'=>'0','required']) !!}
                        <span class="font-red">
                            @if($errors->has('duration'))
                                {!! $errors->first('duration') !!}
                            @endif
                        </span>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="inbox-form-group">
                        <label class="control-label">قیمت</label>
                        {!! form::number('price',null,['class'=>'form-control','min'=>'0','required']) !!}
                        <span class="font-red">
                            @if($errors->has('price'))
                                {!! $errors->first('price') !!}
                            @endif
                        </span>
                    </div>
                </div>
                <div class="col-md-1">
                    <label>وضعیت</label>
                    <div class="checkbox checkbox-switchery switchery-double">
                        <label>
                            {!! form::checkbox('status',1,$model->status,['class'=>'switchery']) !!}
                        </label>
                    </div>
                </div>



                <div class="col-md-1">
                    <br>
                    <button type="submit" class="btn green mt-ladda-btn ladda-button btn-circle btn-outline" data-style="slide-left" data-spinner-color="#333" >
                        <span class="ladda-label">ذخیره</span>
                    </button>
                </div>
            </div>
            <div class="row" id="formtab">
                <div class="col-md-12">
                    <div class="tabbable">
                        <ul class="nav nav-tabs bg-slate nav-tabs-component">
                            <li class="active"><a href="#colored-rounded-tab1" data-toggle="tab" aria-expanded="true">توضیحات</a></li>
                            <li class=""><a href="#colored-rounded-tab2" data-toggle="tab" aria-expanded="false">مراحل</a></li>
                            <li class=""><a href="#colored-rounded-tab3" data-toggle="tab" aria-expanded="false">تصاویر</a></li>
                            <li class=""><a href="#colored-rounded-tab4" data-toggle="tab" aria-expanded="false">خدمات</a></li>
                            <li class=""><a href="#colored-rounded-tab5" data-toggle="tab" aria-expanded="false">تعهدات</a></li>
                            <li class=""><a href="#colored-rounded-tab6" data-toggle="tab" aria-expanded="false">قوانین</a></li>
                        </ul>

                        <div class="tab-content">
                            <div class="tab-pane active" id="colored-rounded-tab1">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        {!! form::textarea('text',null,['class'=>'form-control','required','placeholder'=>'توضیحات..']) !!}
                                        <span class="font-red">
                                                @if($errors->has('text'))
                                                {!! $errors->first('text') !!}
                                            @endif
                                             </span>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane" id="colored-rounded-tab2">

                                <div id="level_list" style="width:100%;direction:rtl;float:right;">

                                 @foreach($levelpackages as $key=>$value)
                                        <div id="level_{{$key+1}}" class="level  row" style="direction:rtl; margin-right:30px;margin-top:13px;">
                                            <div style="margin-bottom: 6px;color: #5a5c5d;">
                                                <span>مرحله</span><span>{{$key+1}}</span>
                                            </div>
                                            <input type="hidden" name="number_level[{{$value->id}}]" value="{{$value->number}}">
                                            <div>
                                                <span style="color: #888585;font-size: 11px;"> عنوان :</span>
                                                <input name="title_level[{{$value->id}}]" class="form-control"  value="{{$value->title}}"  style="width:300px;margin-bottom: 11px;display: inline-block;margin-right: 42px;" type="text">
                                            </div>
                                            <div style="display: flex;">
                                                <span style="color: #888585;font-size: 11px;"> توضیحات :</span>
                                                <textarea name="description_level[{{$value->id}}]" class="form-control"   style="width:500px;display: inline-block;margin-right: 20px;">{{$value->description}}</textarea>
                                            </div>
                                        </div>
                                  @endforeach
                                </div>

                                <table class="table1" style="margin-right:30px;">
                                    <tr>
                                        <td colspan="2"><span class="addlevel"  onclick="add_level()" >افزودن مرحله ی  جدید</span></td>
                                    </tr>
                                </table>
                            </div>

                            <div class="tab-pane" id="colored-rounded-tab3">
                                <div  class="dropzone needsclick dz-clickable  dz-started" id="demoupload" >
                                    @if(!empty($images))
                                        @foreach($images as $key=>$value)
                                    <div id="id_{{ $value->id }}"
                                                 class="dz-preview dz-processing dz-image-preview dz-success dz-complete">
                                                <div class="dz-image">
                                                         <img style="width: 120px; height: 120px;"
                                                         data-dz-thumbnail=""
                                                         src="{{ url('').'/'.$value->src  }}">
                                                </div>
                                        <div class="dz-details">
                                            <div class="dz-filename">
                                                <span data-dz-name=""> {{ $value->name}}</span>
                                            </div>
                                        </div>

                                                <a class="dz-remove" data-dz-remove="" onclick="removeimg('{{ $value->id }}','{{ $value->src }}')">حذف</a>
                                    </div>


                                        @endforeach
                                    @endif
                                    <div class="delay"></div>
                                </div>
                            </div>

                            <div class="tab-pane" id="colored-rounded-tab4">

                                <div class="row">
                                    <div class="col-lg-12 col-md-12 ">
                                        {!! Form::select('packageservices[]', $services,null  ,['multiple'=>'multiple','class'=>'select   selectpackageservices','data-placeholder'=>'انتخاب کنید..']) !!}

                                    </div>
                                </div>

                            </div>

                            <div class="tab-pane" id="colored-rounded-tab5">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        {!! form::textarea('commitment',null,['class'=>'form-control','required','placeholder'=>'تعهدات..']) !!}
                                        <span class="font-red">
                                                @if($errors->has('commitment'))
                                                {!! $errors->first('commitment') !!}
                                            @endif
                                             </span>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="colored-rounded-tab6">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        {!! form::textarea('provision',null,['class'=>'form-control','required','placeholder'=>'قوانین..']) !!}
                                        <span class="font-red">
                                                @if($errors->has('provision'))
                                                {!! $errors->first('provision') !!}
                                            @endif
                                             </span>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>

            </div>

            <br>
            {!! Form::close() !!}

        </div>
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

    <script type="text/javascript" src="<?= url('resources/js/admin/dropzone.js') ?>"></script>
    <script>
        add_level=function()
        {
            var count=document.getElementsByClassName('level').length+1;
            var html='<div id="level_'+count+'"   class="level  row"  style="direction:rtl; margin-right:30px;margin-top:13px;">' +
                '<div style="margin-bottom: 6px;color: #5a5c5d;"> <span>مرحله</span><span>'+count+'</span> </div>'+
                '<input type="hidden" name="number_level['+ -count+']" value="'+ count+'"> '+
                '<div> <span style="color: #888585;font-size: 11px;"> عنوان :</span><input name="title_level['+ -count+']"   type="text" class="form-control" style="width:300px;margin-bottom: 11px;display: inline-block;margin-right: 42px;"> </div> ' +
                '<div style="display: flex;"> <span style="color: #888585;font-size: 11px;"> توضیحات :</span> <textarea name="description_level['+ -count +']"  class="form-control" style="width:500px;display: inline-block;margin-right: 20px;"></textarea> </div>' +
                '</div>';
            $("#level_list").append(html);
        };
    </script>

    <script>
        $("div#demoupload").dropzone({
            url: "<?=url('admin/en/mainbuploadimgpackage').'/'.$model->id?>",
            maxFilesize: 5,
            maxFile: 1,
            addRemoveLinks: true,
            dictRemoveFile: "حذف",
            uploadMultiple: false,
            dictDefaultMessage: "<h3 class='sbold'>انتخاب تصویر<h3>",
            sending: function(file, xhr, formData) {
                formData.append("_token",$('meta[name="csrf-token"]').attr('content'));
            },
            init: function() {
                this.on("success", function(file, serverFileName){
                });

                this.on("removedfile", function(file){

                    $('#demoupload .delay').css('display','block');

                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }});
                    $.ajax({
                        url: '<?= url('admin/en/maindeletimgpackage')  ?>',
                        type: "POST",
                        data:'nameimg='+file.name+'&packages_id='+ <?= $model->id  ?>,
                        success: function(result){
                            if(result=='ok'){
                                $('#demoupload .delay').css('display','none');


                            }
                        }
                    });
                });
            }
        });
        removeimg = function (id, src){
            $('#id_' + id).hide();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: '<?= url('admin/en/maindeletimgpackage')  ?>',
                type: "POST",
                data: 'id=' + id + '&src=' +  src
            });
        };
    </script>
@endsection
