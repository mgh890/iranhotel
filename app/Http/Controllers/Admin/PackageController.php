<?php
namespace App\Http\Controllers\admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Services;
use Illuminate\Support\Facades\Session;
use App\Images;
use App\TmpImages;
use App\TmpSession;
use Illuminate\Support\Facades\Storage;
use App\Packages;
use App\LevelPackage;
class PackageController extends Controller
{
    public function index()
    {
        $packages = new Packages();
        $minpric=$packages->setTable('en_packages')->min('price');
        $maxpric=$packages->setTable('en_packages')->max('price');
        $packages=$packages->setTable('en_packages')->orderBy('id','DESC')->paginate(15);
        return View('admin.package.index',[
            'packages'=>$packages,
            'minpric'=>$minpric,
            'maxpric'=>$maxpric,
        ]);
    }

    public function create()
    {
        $tmpsession=new TmpSession();
        $timestamp=$tmpsession->setTable('en_tmp_sessions')->where('email_user',\Auth()->user()->email)->first()->session_tmp;
        $tmpimages = new TmpImages();
        $tmpimages=$tmpimages->setTable('en_tmp_images')->where(['packages_id'=>$timestamp])->get();
if($tmpimages){
    foreach ($tmpimages as $key=>$value ){
        Storage::delete('packages/'.$timestamp.'/'.$value->name);
    }
    $tmpimages = new TmpImages();
    $tmpimages->setTable('en_tmp_images')->where(['packages_id'=>$timestamp])->delete();
}
       $tmpsession=new TmpSession();
       $time=time();
       $row=DB::table('en_tmp_sessions')->where('email_user',\Auth()->user()->email)->first();
        if ($row) {
            $tmpsession=$tmpsession->setTable('en_tmp_sessions')->find($row->id);
            $tmpsession->session_tmp=$time;
            $tmpsession->setTable('en_tmp_sessions')->update();
        } else {
            $tmpsession->session_tmp=$time;
            $tmpsession->email_user=\Auth()->user()->email;
            $tmpsession->setTable('en_tmp_sessions')->save();
        }
        $key=\Auth()->user()->email.'tmptime';
        \Session()->put($key,$time);



        $services=DB::table('en_services')->pluck('title','id');
        return View('admin.package.create',['services'=>$services]);
    }

    /**
     * @param Request $request
     * @param $lang
     * @param $tmptime
     * @return null|string
     */
    public function uploadimg(Request  $request , $lang , $tmptime )
    {
        $File_Name =$request->file('file')->getClientOriginalName();
        if ($request->file('file')->move('storage' . '/' . 'upload' . '/' . 'packages' . '/' .$tmptime , $File_Name)) {
            $tmpimages = new TmpImages();
          $tmpimages->name=$File_Name;
            $tmpimages->src='storage' . '/' . 'upload' . '/' . 'packages' . '/' . $tmptime . '/' . $File_Name;
            $tmpimages->packages_id=$tmptime;
            $tmpimages->setTable('en_tmp_images')->save();
        }
        return $File_Name;
    }
    public function  deletimg(Request  $request){
        $nameimg=$request->get('nameimg');
        $packages_id=$request->get('packages_id');
        Storage::delete('packages/'.\Session()->get(\Auth()->user()->email.'tmptime').'/'.$nameimg);
        $tmpimages = new TmpImages();
        $tmpimages->setTable('en_tmp_images')->where(['name'=>$nameimg,'packages_id'=>$packages_id])->delete();
        return 'ok';
    }
    public function store(Request $request)
    {
        $packages=new Packages();
        $packages->title=$request->input('title');
        $packages->duration=$request->input('duration');
        $packages->price=$request->input('price');
        if ($request->input('status') == null) {
            $packages->status = '0';
        } else {
            $packages->status = $request->input('status');
        }
        $packages->text=$request->input('text');
        $packages->commitment=$request->input('commitment');
        $packages->provision=$request->input('provision');
        $packages->date=time();
        $packages->author=\Auth()->user()->id;
        if ($request->input('packageservices'))
        {
            $service=null;
            foreach($request->input('packageservices') as $value)
            {
                $service.=$value.',';
            }
        }
        if (isset($service)){$packages->service=$service;}
         $packages->setTable('en_packages')->save();


        if($request->has('title_level')){
            $i=1;
            foreach ($request->get('title_level') as $key=>$value){
                $levelpackage=new LevelPackage();
                $row=$levelpackage->setTable('en_level_packages')->where('id',$key)->first();
                if($row){
                    if(!empty($value)){
                        $levelpackage=new LevelPackage();
                        $levelpackage->setTable('en_level_packages')->find($row->id);
                        $levelpackage->title=$value;
                        $levelpackage->description=$request->get('title_level')[$key];
                        $levelpackage->number=$i;
                        $levelpackage->setTable('en_level_packages')->update();
                        $i++;
                    }else{
                        $levelpackage->setTable('en_level_packages')->where('id',$row->id)->delete();
                    }
                }else{
                    if(!empty($value)){

                        $levelpackage=new LevelPackage();
                        $levelpackage->title=$value;
                        $levelpackage->description=$request->get('description_level')[$key];
                        $levelpackage->number=$i;
                        $levelpackage->packages_id=$packages->id;
                       if($levelpackage->setTable('en_level_packages')->save()){
                       }
                        $i++;
                    }
                }
            }
        }

        $tmpimages = new TmpImages();
        $row=$tmpimages->setTable('en_tmp_images')->where('packages_id',\Session()->get(\Auth()->user()->email.'tmptime') )->get();
        if ($row) {
            foreach ($row as $key => $value) {
                $images = new Images();
                $images->name = $value->name;
                $images->src = $value->src;
                $images->packages_id = $packages->id;
                $images->setTable('en_images')->save();
            }
        }
        $tmpimages = new TmpImages();
        $tmpimages->setTable('en_tmp_images')->where(['packages_id'=>\Session()->get(\Auth()->user()->email.'tmptime')])->delete();
        return redirect(url('admin/en/package').'/'.$packages->id.'/edit')->with('status','ذخیره با موفقیت انجام شد');
    }
    public  function  mainuploadimg(Request  $request , $lang , $id){
        $File_Name =$request->file('file')->getClientOriginalName();
        if ($request->file('file')->move('storage' . '/' . 'upload' . '/' . 'packages' . '/' .$id , $File_Name)) {
            $images = new Images();
            $images->name=$File_Name;
            $images->src='storage' . '/' . 'upload' . '/' . 'packages' . '/' . $id . '/' . $File_Name;
            $images->packages_id=$id;
            $images->setTable('en_images')->save();

        }
        return $File_Name;

    }
    public  function  maindeletimg(Request  $request ){
        if($request->has('src') and $request->has('id')){
            $id=$request->get('id');
            $src=$request->get('src');
            $src=str_replace('storage/upload/','',$src);
            Storage::delete($src);
            $images = new Images();
            $images->setTable('en_images')->where('id',$id)->delete();
            return 'ok';
        }elseif($request->has('nameimg') and $request->has('packages_id')){
            $nameimg=$request->get('nameimg');
            $packages_id=$request->get('packages_id');
            Storage::delete('packages/'.$packages_id.'/'.$nameimg);
            $images = new Images();
            $images->setTable('en_images')->where(['name'=>$nameimg,'packages_id'=>$packages_id])->delete();
            return 'ok';
        }
    }

    public function edit($lang, $id)
    {
        $model = new Packages();
      //  $model=$model->setTable('en_packages')->find($id);
        $model=DB::table('en_packages')->where('id',$id)->first();

        $services=DB::table('en_services')->pluck('title','id');
        $images=new Images();
        $images=$images->setTable('en_images')->where('packages_id',$id)->get();
        $levelpackages=new LevelPackage();
        $levelpackages=$levelpackages->setTable('en_level_packages')->where('packages_id',$id)->get();

        return view('admin.package.edit', [
             'model' => $model,
             'services'=>$services,
             'images'=>$images,
            'levelpackages'=>$levelpackages
        ]);
    }
    public function update(Request $request,$lang, $id)
    {
        $packages=new Packages();
        $packages=$packages->setTable('en_packages')->find($id);
        $packages->title=$request->input('title');
        $packages->duration=$request->input('duration');
        $packages->price=$request->input('price');
        if ($request->input('status') == null) {
            $packages->status = '0';
        } else {
            $packages->status = $request->input('status');
        }
        $packages->text=$request->input('text');
        $packages->commitment=$request->input('commitment');
        $packages->provision=$request->input('provision');
        $packages->date=time();
        $packages->author=\Auth()->user()->id;
        if ($request->input('packageservices'))
        {
            $service=null;
            foreach($request->input('packageservices') as $value)
            {
                $service.=$value.',';
            }
        }
        if (isset($service)){$packages->service=$service;}
        $packages->setTable('en_packages')->update();
        if($request->has('title_level')){
            $i=1;
            foreach ($request->get('title_level') as $key=>$value){
                $levelpackage=new LevelPackage();
                $row=$levelpackage->setTable('en_level_packages')->where('id',$key)->first();
                if($row){
                    if(!empty($value)){
                        $levelpackage=new LevelPackage();
                        $levelpackage=$levelpackage->setTable('en_level_packages')->find($row->id);
                        $levelpackage->title=$value;
                        $levelpackage->description=$request->get('title_level')[$key];
                        $levelpackage->number=$i;
                        $levelpackage->setTable('en_level_packages')->update();
                        $i++;
                    }else{
                        $levelpackage->setTable('en_level_packages')->where('id',$row->id)->delete();
                    }
                }else{
                    if(!empty($value)){
                        $levelpackage=new LevelPackage();
                        $levelpackage->title=$value;
                        $levelpackage->description=$request->get('description_level')[$key];
                        $levelpackage->number=$i;
                        $levelpackage->packages_id=$id;
                        if($levelpackage->setTable('en_level_packages')->save()){
                        }
                        $i++;
                    }
                }
            }
        }
        return redirect()->back()->with('status', 'ویرایش با موفقیت انجام شد');
    }



    public function filter(Request $request){
        if ($request->input('status') == null) {
            $status = '0';
        } else {
            $status = $request->input('status');
        }
        $model=array();
        $model=[
            'minpric'=>$request->input('minprice'),
            'maxpric'=>$request->input('maxprice'),
            'title'=>$request->input('title'),
            'duration'=>$request->input('duration'),
            'status'=>$status,
        ];
        $packages = new Packages();
        $minpric=$packages->setTable('en_packages')->min('price');
        $maxpric=$packages->setTable('en_packages')->max('price');

        $packages=$packages->setTable('en_packages')->orderBy('id','DESC');
        $packages->where('status',$status);
        if (!empty($request['title'])) $packages->where('title','like','%'.$request->input('title').'%');
        if (!empty($request['duration'])) $packages->where('duration',$request->input('duration'));
        if (!empty($request['minprice']) and !empty($request['maxprice']) ) $packages->whereBetween('price', [$request->input('minprice'), $request->input('maxprice')]);
        $packages=$packages->paginate(15);


        return View('admin.package.index',[
            'packages'=>$packages,
            'minpric'=>$minpric,
            'maxpric'=>$maxpric,
            'model'=>$model
        ]);

    }
}









