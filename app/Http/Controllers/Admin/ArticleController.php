<?php

namespace App\Http\Controllers\admin;;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use App\Images;
use App\TmpImages;
use App\TmpSession;
use Illuminate\Support\Facades\Storage;
use DB;
use App\Article;
use App\ApiCity;
use App\City;

class ArticleController extends Controller
{
    public function index($lang)
    {
        $cities=ApiCity::pluck('name','id');
        $articles = new Article();
        $articles=$articles->setTable($lang.'_articles')->orderBy('id','DESC')->paginate(15);
        return View('admin.article.index',compact('articles','cities'));

    }
    public function create($lang)
    {
        $tmpsession=new TmpSession();
        $timestamp=$tmpsession->setTable($lang.'_tmp_sessions')->where('email_user',\Auth()->user()->email)->first()->session_tmp;
        $tmpimages = new TmpImages();
        $tmpimages=$tmpimages->setTable($lang.'_tmp_images')->where(['article_id'=>$timestamp])->get();
        if($tmpimages){
            foreach ($tmpimages as $key=>$value ){
                Storage::delete('article/'.$timestamp.'/'.$value->name);
            }
            $tmpimages = new TmpImages();
            $tmpimages->setTable($lang.'_tmp_images')->where(['article_id'=>$timestamp])->delete();
        }
        $tmpsession=new TmpSession();
        $time=time();
        $row=DB::table($lang.'_tmp_sessions')->where('email_user',\Auth()->user()->email)->first();
        if ($row) {
            $tmpsession=$tmpsession->setTable($lang.'_tmp_sessions')->find($row->id);
            $tmpsession->session_tmp=$time;
            $tmpsession->setTable($lang.'_tmp_sessions')->update();
        } else {
            $tmpsession->session_tmp=$time;
            $tmpsession->email_user=\Auth()->user()->email;
            $tmpsession->setTable($lang.'_tmp_sessions')->save();
        }
        $key=\Auth()->user()->email.'tmptime';
        \Session()->put($key,$time);



       $cities=ApiCity::pluck('name','id');
       return View('admin.article.create',compact('cities'));
    }

    public function uploadimg(Request  $request , $lang , $tmptime )
    {
        $File_Name =$request->file('file')->getClientOriginalName();
        if ($request->file('file')->move('storage' . '/' . 'upload' . '/' . 'article' . '/' .$tmptime , $File_Name)) {
            $tmpimages = new TmpImages();
            $tmpimages->name=$File_Name;
            $tmpimages->src='storage' . '/' . 'upload' . '/' . 'article' . '/' . $tmptime . '/' . $File_Name;
            $tmpimages->article_id=$tmptime;
            $tmpimages->setTable($lang.'_tmp_images')->save();
        }
        return $File_Name;
    }
    public function  deletimg(Request  $request,$lang){
        $nameimg=$request->get('nameimg');
        $article_id=$request->get('article_id');
        Storage::delete('article/'.\Session()->get(\Auth()->user()->email.'tmptime').'/'.$nameimg);
        $tmpimages = new TmpImages();
        $tmpimages->setTable($lang.'_tmp_images')->where(['name'=>$nameimg,'article_id'=>$article_id])->delete();
        return 'ok';
    }

    public function store(Request $request,$lang)
    {
        $article=new Article();
        $article->title=$request->input('title');
        $article->city=$request->input('city');
        $article->type=$request->input('type');
        if ($request->input('status') == null) {
            $article->status = '0';
        } else {
            $article->status = $request->input('status');
        }
        $article->mapx=$request->input('mapx');
        $article->mapy=$request->input('mapy');
        $article->text=$request->input('text');
        $article->date=time();
        $article->author=\Auth()->user()->id;
        $article->setTable($lang.'_articles')->save();


        $tmpimages = new TmpImages();
        $row=$tmpimages->setTable($lang.'_tmp_images')->where('article_id',\Session()->get(\Auth()->user()->email.'tmptime') )->get();
        if ($row) {
            foreach ($row as $key => $value) {
                $images = new Images();
                $images->name = $value->name;
                $images->src = $value->src;
                $images->article_id = $article->id;
                $images->setTable($lang.'_images')->save();
            }
        }
        $tmpimages = new TmpImages();
        $tmpimages->setTable($lang.'_tmp_images')->where(['article_id'=>\Session()->get(\Auth()->user()->email.'tmptime')])->delete();
        return redirect(url('admin').'/'.$lang.'/article/'.$article->id.'/edit')->with('status','ذخیره با موفقیت انجام شد');

    }
    public  function  mainuploadimg(Request  $request , $lang , $id){
        $File_Name =$request->file('file')->getClientOriginalName();
        if ($request->file('file')->move('storage' . '/' . 'upload' . '/' . 'article' . '/' .$id , $File_Name)) {
            $images = new Images();
            $images->name=$File_Name;
            $images->src='storage' . '/' . 'upload' . '/' . 'article' . '/' . $id . '/' . $File_Name;
            $images->article_id=$id;
            $images->setTable($lang.'_images')->save();

        }
        return $File_Name;

    }
    public  function  maindeletimg(Request  $request,$lang ){
        if($request->has('src') and $request->has('id')){
            $id=$request->get('id');
            $src=$request->get('src');
            $src=str_replace('storage/upload/','',$src);
            Storage::delete($src);
            $images = new Images();
            $images->setTable($lang.'_images')->where('id',$id)->delete();
            return 'ok';
        }elseif($request->has('nameimg') and $request->has('article_id')){
            $nameimg=$request->get('nameimg');
            $article_id=$request->get('article_id');
            Storage::delete('article/'.$article_id.'/'.$nameimg);
            $images = new Images();
            $images->setTable($lang.'_images')->where(['name'=>$nameimg,'article_id'=>$article_id])->delete();
            return 'ok';
        }
    }




    public function edit($lang, $id)
    {
        $model = new Article();
        //  $model=$model->setTable('en_packages')->find($id);
        $model=DB::table($lang.'_articles')->where('id',$id)->first();
        $cities=ApiCity::pluck('name','id');
        $images=new Images();
        $images=$images->setTable($lang.'_images')->where('article_id',$id)->get();
        return view('admin.article.edit',compact('model','cities','images'));
    }

public  function update(Request $request,$lang, $id){

    $article=new Article();

    $article=$article->setTable($lang.'_articles')->find($id);
    $article->title=$request->input('title');
    $article->city=$request->input('city');
    $article->type=$request->input('type');
    if ($request->input('status') == null) {
        $article->status = '0';
    } else {
        $article->status = $request->input('status');
    }
    $article->mapx=$request->input('mapx');
    $article->mapy=$request->input('mapy');
    $article->text=$request->input('text');
    $article->date=time();
    $article->author=\Auth()->user()->id;
    $article->setTable($lang.'_articles')->update();

    return redirect()->back()->with('status', 'ویرایش با موفقیت انجام شد');


}
public  function filter(Request $request,$lang){

    $model=array();
    $model=[
        'title'=>$request->input('title'),
        'city'=>$request->input('city'),
        'type'=>$request->input('type'),
        'status'=>$request->input('status'),
    ];
    $articles = new Article();
    $articles=$articles->setTable($lang.'_articles')->orderBy('id','DESC');
    if (!empty($request['title'])) $articles->where('title','like','%'.$request->input('title').'%');
    if (!empty($request['city'])) $articles->where('city',$request->input('city'));
    if (!empty($request['type'])) $articles->where('type',$request->input('type'));
    if (!empty($request['status'])) $articles->where('status',$request->input('status'));
    $articles=$articles->paginate(15);

    $cities=ApiCity::pluck('name','id');
    return View('admin.article.index',compact('model','articles','cities'));


}




}






























