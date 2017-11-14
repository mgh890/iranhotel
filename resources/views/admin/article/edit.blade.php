@extends('layouts.admin.admin')
@section('head')

    <link href="{{ url('resources/css/admin/dropzone.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{url('resources/assets/map-picker/jquery-gmaps-latlon-picker.css')}} "/>

    <script src="{{url('resources/assets/map-picker/jquery-2.1.1.min.js')}}"></script>
    <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBATf9eLRVC1xIUeAnhcu8Fgvy677MDlPY"></script>
    <script src="{{url('resources/assets/map-picker/jquery-gmaps-latlon-picker.js')}} "></script>


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
        <div class="panel-body">
            {!! Form::model($model,['method'=>'PUT','url'=> ['admin/'.session()->get('isoCode').'/article',$model->id],'files'=>true,'class'=>'form-horizontal']) !!}
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
                        {!! Form::select('type', [
                               'attractions' => 'جاذبه های گردشگری',
                                'souvenir' => 'سوغات'
                             ], null, [ 'class'=>'bs-select form-control','data-style'=>'btn-primary']) !!}
                        <span class="font-red">
                            @if($errors->has('type'))
                                {!! $errors->first('type') !!}
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


                <div class="col-md-2">
                    <button style="margin-top: 24px;"  type="submit" class="btn btn-primary">ویرایش <i
                                class="icon-arrow-left13 position-right"></i></button>
                </div>


            </div>

            <div class="row" id="formtab">
                <div class="col-md-12">
                    <div class="tabbable">
                        <ul class="nav nav-tabs bg-slate nav-tabs-component">
                            <li class="active"><a href="#colored-rounded-tab1" data-toggle="tab" aria-expanded="true">انتخاب محل  رو نقشه</a></li>
                            <li class=""><a href="#colored-rounded-tab2" data-toggle="tab" aria-expanded="false">توضیحات</a></li>
                            <li class=""><a href="#colored-rounded-tab3" data-toggle="tab" aria-expanded="false">تصاویر</a></li>
                        </ul>

                        <div class="tab-content">

                            <div class="tab-pane active " id="colored-rounded-tab1">
                                <div class="row">
                                    <div class="col-md-12">
                                        <fieldset class="gllpLatlonPicker">

                                            <div class="gllpMap">Google Maps</div>
                                            <br/>
                                            lat/lon:
                                            {!! form::text('mapx',null,['class'=>'gllpLatitude']) !!}

                                            /
                                            {!! form::text('mapy',null,['class'=>'gllpLongitude']) !!}

                                            <input type="hidden" class="gllpZoom" value="10"/>

                                            <br/>
                                        </fieldset>

                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane " id="colored-rounded-tab2">
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
        $("div#demoupload").dropzone({
            url: "<?=url('admin').'/'.session()->get('isoCode').'/mainbuploadimgarticle/'.$model->id?>",
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
                        url: '<?= url('admin').'/'.session()->get('isoCode').'/maindeletimgarticle'  ?>',
                        type: "POST",
                        data:'nameimg='+file.name+ '&article_id='+ <?= $model->id  ?>,
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
                url: '<?= url('admin').'/'.session()->get('isoCode').'/maindeletimgarticle'  ?>',
                type: "POST",
                data: 'id=' + id + '&src=' +  src
            });
        };
    </script>
@endsection