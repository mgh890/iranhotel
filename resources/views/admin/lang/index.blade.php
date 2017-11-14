@extends('layouts.admin.admin')
@section('content')
    <div class="panel panel-flat">
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-bordered table-lg">
                    <tr class="active">
                        <th colspan="12">لیست زبان</th>
                    </tr>
                    <tr>
                        <td class="col-md-1">ردیف</td>
                        <td class="col-md-1">آیکون</td>
                        <td class="col-sm-3">نام</td>
                        <td class="col-sm-3">نام کشور</td>
                        <td class="col-sm-1">وضعیت</td>
                        <td class="col-sm-1">عملیات</td>
                    </tr>
                    <tr>
                        @foreach($language as $key=>$value)
                            <tbody>
                            <td><?=$key+1?></td>
                            <td><img src="<?php
                                if($value->icon){
                                    echo url($value->icon);
                                }
                                else{
                                    echo url('storage/upload/user.jpg');
                                }
                                ?>" style="width:40px;height:40px;"></td>
                            <td><?=$value->name?></td>
                            <td><?=$value->country?></td>
                            <td>
                                @if($value->status==1)
                                    فعال
                                @else
                                    غیر فعال
                            @endif
                            <td>
                                <ul class="icons-list">
                                    <li class="text-primary-600"><a href="<?= url('admin/'.session()->get('isoCode').'/language/'.$value->id.'/edit') ?>"><i class="icon-pencil7"></i> ویرایش
                                        </a></li>
                                </ul>
                            </td>
                            </tr>
                            @endforeach
                            </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
@section('footer')


@endsection