<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Services;

class PackageservicesController extends Controller
{
    public function index()
    {
        $service = DB::table('en_services')->orderby('id', 'DESC')->paginate(15);
        return view('admin.package_service.package_service', ['service' => $service]);
    }

    public function create()
    {
//
    }

    public function store(Request $request)
    {

        $post = new Services();
        $post->title = $request->input('title');
        if ($request->input('status') == null) {
            $post->status = '0';
        } else {
            $post->status = $request->input('status');
        }
        $name_table=session()->get('isoCode').'_services';
        $post->setTable($name_table)->save();
        if ($request->hasFile('icon')) {
            $File_Name1 = 'package_service' . $post->id . time() . '.' . $request->file('icon')->getClientOriginalExtension();
            if ($request->file('icon')->move('storage' . '/' . 'upload' . '/' . 'package_service' . '/' . $post->id, $File_Name1)) {
                $icon = 'storage' . '/' . 'upload' . '/' . 'package_service' . '/' . $post->id . '/' . $File_Name1;
                DB::table($name_table)->where('id', $post->id)->update(['icon' => $icon]);
            }
        }
        return redirect()->back()->with('status', 'ذخیره با موفقیت انجام شد');
    }

    public function edit($lang, $id)
    {
        $model = new Services();
        $name_table=session()->get('isoCode').'_services';

        $model = $model->setTable('en_services')->find($id);
        return view('admin.package_service.edit', ['model' => $model]);

    }

    public function update(Request $request,$lang, $id)
    {
        $post = new Services();
        $post = $post->setTable('en_services')->find($id);
        $post->title = $request->input('title');
        if ($request->input('status') == null) {
            $post->status = '0';
        } else {
            $post->status = $request->input('status');
        }
    $post->setTable('en_services')->update();
        if($request->hasFile('icon'))
        {
            if ($post->icon) {
                File::delete($post->icon);
            }
            $File_Name1 = 'package_service' . $post->id . time() . '.' . $request->file('icon')->getClientOriginalExtension();
            if ($request->file('icon')->move('storage' . '/' . 'upload' . '/' . 'package_service' . '/' . $post->id, $File_Name1)) {
                $post1 = new Services();
                $post1= $post1->setTable('en_services')->find($id);
                $post1->icon = 'storage' . '/' . 'upload' . '/' . 'package_service' . '/' . $post->id . '/' . $File_Name1;
                $post1->update();
            }
        }


      return redirect()->back()->with('status', 'ویرایش با موفقیت انجام شد');


    }


}
