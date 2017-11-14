<?php

namespace App\Http\Controllers\Admin;

use App\ApiCity;
use App\ApiHotelName;
use App\hotel_name;
use App\hotel_room;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use URL;

class Hotelcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hotel=ApiHotelName::orderby('id','DESC')->paginate(15);
        $city=ApiCity::orderby('id','DESC')->pluck('id','name')->toarray();
        $cities=ApiCity::orderby('id','DESC')->pluck('name','id');
        return view ('admin.hotel.index',['hotel'=>$hotel,'city'=>$city,'cities'=>$cities]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
//        $city=DB::table('city')->orderby('id','DESC')->pluck('name','id');
//        return view('admin.hotel.create',['city'=>$city]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request['submit']=='filter'){
            $query=hotel_name::orderby('priority','DESC');
            if (!empty($request['city'])) $query->where('city_id',$request->input('city'));
            if (!empty($request['name'])) $query->where('name','like','%'.$request->input('name').'%');
            $hotel=$query->paginate(30);
            $city=DB::table('city')->orderby('id','DESC')->pluck('id','name')->toarray();
            $cities=DB::table('city')->orderby('id','DESC')->pluck('name','id');
            return view ('admin.hotel.index',['hotel'=>$hotel,'city'=>$city,'cities'=>$cities]);
        }
        $city_name=DB::table('city')->where('id',$request->input('city'))->first();
        $post = new hotel_name();
        $post->name= $request->input('name');
        $post->status= $request->input('status');
        $post->utah= $request->input('utah');
        $post->city_id= $request->input('city');
        $post->city_name= $city_name->name;
        $post->priority= $this->fa_digits($request->input('priority'));
        $post->save();
        return redirect(url('admin/hotel/'.$post->id.'/edit'))->with('status', 'ذخیره با موفقیت انجام شد');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $city=ApiCity::orderby('id','DESC')->pluck('name','id');
        $model=ApiHotelName::find($id);
        $room=hotel_room::where('hotel_id',$id)->orderby('id','DESC')->get();
        $service=DB::table('hotel_service')->where('type','service')->pluck('name','id');
        return view('admin.hotel.edit',['model'=>$model,'room'=>$room,'city'=>$city,'service'=>$service]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        if($request->input('submit')== 'name')
        {
            $city_name=DB::table('city')->where('id',$request->input('city'))->first();
            $post=hotel_name::find($id);
            $post->name= $request->input('name');
            $post->status= $request->input('status');
            $post->utah= $request->input('utah');
            $post->city_id= $request->input('city');
            $post->city_name= $city_name->name;
            $post->priority= $this->fa_digits($request->input('priority'));
            $post->save();
            if($request->hasFile('photo'))
            {
                $File_Name1 = 'photo' . $post->id . time() . '.' . $request->file('photo')->getClientOriginalExtension();
                if ($request->file('photo')->move('storage' . '/' . 'upload' . '/' . 'hotel_room' . '/' . $post->id, $File_Name1)) {
                    $post1 = hotel_room::find($post->id);
                    $post1->photo = 'storage' . '/' . 'upload' . '/' . 'hotel_room' . '/' . $post->id . '/' . $File_Name1;
                    $post1->save();


                }
            }
            return redirect(url('admin/hotel/'.$post->id.'/edit'))->with('status', 'ویرایش نام هتل  با موفقیت انجام شد');
        }
        elseif ($request->input('submit')== 'room')
        {

            if ($request->input('service'))
            {
                $service_id=null;
                foreach($request->input('service') as $value)
                {
                    $service_id.=$value.',';
                }

            }
            if ($request->input('room_id'))
            {
                $post1=hotel_room::find($request->input('room_id'));
            }
            else
            {
                $post1= new hotel_room();
            }

            $post1->hotel_id=$id;
            $post1->bed_type=$request->input('bed_type');
            $post1->capacity=$request->input('capacity');
            $post1->service_id=$service_id;
            $post1->save();
            if($request->hasFile('photo'))
            {
                if ($post1->photo) {
                    File::delete($post1->photo);
                }
                $File_Name1 = 'photo' . $post1->id . time() . '.' . $request->file('photo')->getClientOriginalExtension();
                if ($request->file('photo')->move('storage' . '/' . 'upload' . '/' . 'hotel_room' . '/' . $post1->id, $File_Name1)) {
                    $post1 = hotel_room::find($post1->id);
                    $post1->photo = 'storage' . '/' . 'upload' . '/' . 'hotel_room' . '/' . $post1->id . '/' . $File_Name1;
                    $post1->save();


                }
            }
            return redirect(url('admin/hotel/'.$id.'/edit'))->with('status', 'اتاق  با موفقیت اضافه شد');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $backurl = explode("/", url()->previous());
        $backurl =$backurl[count($backurl)-1];
        if($backurl=='edit')
        {

            Session::put('room_edit',$id);
            return redirect()->back();
        }
        elseif($backurl=='hotel')
        {
            hotel_room::where('hotel_id',$id)->delete();
            hotel_name::where('id',$id)->delete();
            return redirect()->back()->with('status', 'حذف با موفقیت انجام شد');
        }



    }

    public function fa_digits($text)
    {
        $persian_digits = array('۰','۱','۲','۳','۴','۵','۶','۷','۸','۹');
        $english_digits = array('0','1','2','3','4','5','6','7','8','9');
        $text = str_replace( $persian_digits,$english_digits, $text);
        return $text;
    }
}
