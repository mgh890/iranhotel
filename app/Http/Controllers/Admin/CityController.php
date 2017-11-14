<?php

namespace App\Http\Controllers\admin;

use App\ApiCity;
use App\city;
use App\Lang;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (session()->has('model')){

            if (session()->has('model')) {
                $model = session()->get('model');
            }
            $langName = Lang::where('name', session()->get('isoCode'))->get()->pluck('fa_country');

            $idArr = [];
            $name = $model['city'];
            $category = $model['category'];

            $cityLang = new City();
            $langRow = $cityLang->setTable(session()->get('isoCode') . '_cities')->get()->toArray();

            $query = ApiCity::where('name','Like','%'.$name.'%')->orderBy('id', 'desc');
            if ($category) {
                if ($category == 0) {
                    for ($i = 0; $i <= count($langRow); $i++) {
                        if (isset($langRow[$i])) {
                            $idArr[$i] = $langRow[$i]['id'];
                        }
                    }
                    $query->whereNotIn('id',$idArr);
                }
                if ($category == 1) {
                    for ($i = 0; $i <= count($langRow); $i++) {
                        if (isset($langRow[$i])) {
                            $idArr[$i] = $langRow[$i]['id'];
                        }
                    }
                    $query->whereIn('id',$idArr);
                }
            }
            $city = $query->paginate(15);
            foreach ($city as $key => $value) {
                $array[$key] = $value->id;
            }
            if (!empty($array)){
                $langArr = $cityLang->setTable(session()->get('isoCode') . '_cities')->orderby('id', 'DESC')->whereIn('id',$array)->get()->toArray();
            }
            else{
                $langArr = '';
            }
            $model=[
                'city'=>$name,
                'category'=>$category
            ];
            session(['model'=>$model]);

            return view('admin.city.index', compact('city', 'langArr', 'langName', 'model'));
        }
        else{
            $idArr = [];
            $langName = Lang::where('name', session()->get('isoCode'))->get()->pluck('fa_country');

            $cityLang = new City();
            $setTable = $cityLang->setTable(session()->get('isoCode') . '_cities');
            $langRow = $setTable->get()->toArray();


            for ($i = 0; $i <= count($langRow); $i++) {
                if (isset($langRow[$i])) {
                    $idArr[$i] = $langRow[$i]['id'];
                }
            }
            $city = ApiCity::orderby('id', 'DESC')->whereNotIn('id',$idArr)->paginate(15);

            $langName = Lang::where('name', session()->get('isoCode'))->get()->pluck('fa_country');

            foreach ($city as $key => $value) {
                $array[$key] = $value->id;
            }
            if (!empty($array)){
                $langArr = $setTable->whereIn('id',$array)->get()->toArray();
            }
            else{
                $langArr = '';
            }

            return view('admin.city.index', compact('city', 'langArr', 'langName'));
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($lang, $id)
    {

        $idArr=[];

        $langName = Lang::where('name', $lang)->get()->pluck('fa_country');

        $cityLang = new City();
        $setTable = $cityLang->setTable(session()->get('isoCode') . '_cities');
        $langRow = $setTable->get()->toArray();
        for ($i = 0; $i < count($langRow); $i++) {
            if (isset($langRow[$i])) {
                $idArr[$i] = $langRow[$i]['id'];
            }
        }
        $city = ApiCity::orderby('id', 'DESC')->whereNotIn('id',$idArr)->paginate(15);

        $findApiCity = ApiCity::find($id)->toArray();

        if ($res = $setTable->find($id)) {
            $findLangCity = $res->toArray();
        } else {
            $findLangCity = null;
        }
        $model = collect([0 => $findApiCity])->merge([1 => $findLangCity]);

        foreach ($city as $key => $value) {
            $array[$key] = $value->id;
        }
        if (!empty($array)){
            $langArr = $setTable->whereIn('id',$array)->get()->toArray();
        }
        else{
            $langArr = '';
        }
        return view('admin.city.edit', compact('model', 'city', 'langName', 'langArr'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $lang, $id)
    {
        $this->validate($request, [
            'langName' => 'required',
        ], [
            'langName.required' => "نام شهر را وارد کنید"
        ]);

        if ($request->input('status') == null) {
            $status = 0;
        } else {
            $status = 1;
        }
        $city = new City();
        $langCity = $city->setTable($lang . '_cities');

        if ($res = $langCity->find($id)) {
            $langCity->where('id', $id)->update(['name' => $request->get('langName')]);
            ApiCity::find($id)->update(['status' => $status]);
        } else {
            $langCity->id = $id;
            $langCity->name = $request->get('langName');
            $langCity->save();
            ApiCity::find($id)->update(['status' => $status]);
        }
        return redirect(url('admin/' . $lang . '/city'))->with('status', 'ویرایش با موفقیت انجام شد');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
//        city::where('id', $id)->delete();
//        return redirect()->back()->with('status', 'حذف با موفقیت انجام شد');
    }

    public function filter(Request $request, $lang)
    {
        $langName = Lang::where('name', session()->get('isoCode'))->get()->pluck('fa_country');

        $idArr = [];
        $name = $request->input('city');
        $category = $request->input('category');

        $cityLang = new City();
        $langRow = $cityLang->setTable($lang . '_cities')->get()->toArray();

        $query = ApiCity::where('name','Like','%'.$name.'%')->orderBy('id', 'desc');
        if ($request->has('category')) {
            if ($category == 0) {
                for ($i = 0; $i <= count($langRow); $i++) {
                    if (isset($langRow[$i])) {
                        $idArr[$i] = $langRow[$i]['id'];
                    }
                }
                $query->whereNotIn('id',$idArr);
            }
            if ($category == 1) {
                for ($i = 0; $i <= count($langRow); $i++) {
                    if (isset($langRow[$i])) {
                        $idArr[$i] = $langRow[$i]['id'];
                    }
                }
                $query->whereIn('id',$idArr);
            }
        }
        $city = $query->paginate(15);
        foreach ($city as $key => $value) {
            $array[$key] = $value->id;
        }

        if (!empty($array)){
            $langArr = $cityLang->setTable($lang . '_cities')->orderby('id', 'DESC')->whereIn('id',$array)->get()->toArray();
        }
        else{
            $langArr = '';
        }
        $model=[
          'city'=>$name,
            'category'=>$category
        ];
        session(['model'=>$model]);

        return view('admin.city.index', compact('city', 'langArr', 'langName', 'model'));
    }
}
