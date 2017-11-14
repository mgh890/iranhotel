<?php

namespace App\Http\Controllers\admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Lang;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;
use Validator;
use DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;




class LangController extends Controller
{


    public function index()
    {
        $language = DB::table('langs')->orderby('id', 'DESC')->paginate(15);
        return View('admin.lang.index', ['language' => $language]);
    }

    public function create()
    {
        $iconcountryu = storage::allFiles('language');
        return View('admin.lang.create', ['iconcountryu' => $iconcountryu]);
    }

//    public function store(Request $request)
//    {
//
//        if ($request->has('lang')) {
//            $lang = $request->get("lang");
//            $x = new \CreateNewsLettersTable();
//            $x->up($lang . "_tabel");
//        }
//    }


    public function store(Request $request)
    {
        $message = [
            'country.unique' => 'نام کشور وارد شده قبلا ثبت شده است',
            'name.unique' => 'نام وارد شده قبلا ثبت شده است',
        ];
        $validator = Validator::make($request->all(), [
            'name' => 'unique:langs,name',
            'country' => 'unique:langs,country',
        ], $message);
        if (!$validator->fails()) {
            $lang = new Lang();
            $lang->country = $request->input('country');
            $lang->name = $request->input('name');
            if ($request->input('status') == null) {
                $lang->status = '0';
            } else {
                $lang->status = $request->input('status');
            }
            $lang->icon = 'storage' . '/' . 'upload' . '/' . $request->input('icon');
            $lang->save();
            $migrations =
                [
                    'best_sellers' => '\CreateBestSellersTable',
                    'footers' => '\CreateFootersTable',
                    'headers' => '\CreateHeadersTable',
                    'hotel_infos' => '\CreateHotelInfosTable',
                    'hotel_comments' => '\CreateHotelCommentsTable',
                    'hotel_distance_infos' => '\CreateHotelDistanceInfosTable',
                    'hotel_price_periods' => '\CreateHotelPricePeriodsTable',
                    'hotel_rooms' => '\CreateHotelRoomsTable',
                    'hotel_rules' => '\CreateHotelRulesTable',
                    'hotel_sections' => '\CreateHotelSectionsTable',
                    'hotel_services' => '\CreateHotelServicesTable',
                    'hotel_service_extras' => '\CreateHotelServiceExtrasTable',
                    'article' => '\CreateArticlesTable',
                    'images' => '\CreateImagesTable',
                    'vizas' => '\CreateVizasTable',
                    'souvenirs' => '\CreateSouvenirsTable',
                    'packages' => '\CreatePackagesTable',
                    '' => '\CreatePackagesServicesTable',
                    'level_packages' => '\CreateLevelPackagesTable',
                    'orders_packages' => '\CreateOrdersPackagesTable',
                    'services' => '\CreateServicesTable',
                    'cities' => '\CreateCitiesTable',
                    'hotel_names' => '\CreateHotelNamesTable',
                    'tmp_sessions' => '\CreateTmpSessionsTable',
                    'tmp_images' => '\CreateTmpImagesTable',
                ];
            foreach ($migrations as $key => $value) {
                $language = $request->input('name');
                $x = new $value();
                $x->up($language . '_' . $key);
            }
            return redirect()->back()->with('status', 'ذخیره با موفقیت انجام شد');
        } else {

            return redirect()->back()->withInput()->withErrors($validator);
        }


//        if($lang){
//            $x = new \CreateNewsLettersTable();
//            $x->down($lang);
//        }
//        $w = new NewsLetter();
//        $w->setTable('fa_news_letters');
//        var_dump($w->get()->toArray());

    }

    public function edit($lang, $id)
    {
        $iconcountryu = storage::allFiles('language');
        $model = Lang::find($id);
        return view('admin.lang.edit', ['model' => $model, 'iconcountryu' => $iconcountryu]);
    }

    public function update(Request $request, $lang, $id)
    {
        $message = [
            'country.unique' => 'نام کشور وارد شده قبلا ثبت شده است',
            'name.unique' => 'نام وارد شده قبلا ثبت شده است',
        ];
        $validator = Validator::make($request->all(), [
            'name' => 'unique:langs,name,' . $id . '',
            'country' => 'unique:langs,country,' . $id . '',
        ], $message);
        if (!$validator->fails()) {
            $post = Lang::find($id);
            $old = $post->name;
            $new = $request->input('name');
            $post->name = $request->input('name');
            $post->country = $request->input('country');
            if ($request->input('status') == null) {
                $post->status = '0';
            } else {
                $post->status = $request->input('status');
            }
            $post->icon = 'storage' . '/' . 'upload' . '/' . $request->input('icon');
            $post->save();
            $migrations =
                [
                    '0' => 'best_sellers',
                    '1' => 'footers',
                    '2' => 'headers',
                    '3' => 'hotel_infos',
                    '4' => 'hotel_comments',
                    '5' => 'hotel_distance_infos',
                    '6' => 'hotel_price_periods',
                    '7' => 'hotel_rooms',
                    '8' => 'hotel_rules',
                    '9' => 'hotel_sections',
                    '10' => 'hotel_services',
                    '11' => 'hotel_service_extras',
                    '12' => 'article',
                    '13' => 'images',
                    '14' => 'vizas',
                    '15' => 'souvenirs',
                    '16' => 'packages',
                    '18' => 'level_packages',
                    '19' => 'orders_packages',
                    '20' => 'services',
                    '21' => 'cities',
                    '22' => 'hotel_names',
                    '23' => 'tmp_sessions',
                    '24' => 'tmp_images',
                    '25' => 'hotel_rooms',
                ];
            foreach ($migrations as $value) {
                $old_name = $old . '_' . $value;
                $new_name = $new . '_' . $value;
                if (\Schema::hasTable($old_name) and $old != $new) {
                    \Schema::rename($old_name, $new_name);
                }
            }
            $old_name = $old . '_packages_' . $old . '_services';
            $new_name = $new . '_packages_' . $new . '_services';
            if (\Schema::hasTable($old_name) and $old != $new) {
                \Schema::rename($old_name, $new_name);
            }
            return redirect()->back()->with('status', 'ویرایش با موفقیت انجام شد');
        } else {
            return redirect()->back()->withInput()->withErrors($validator);
        }
    }

    public function changeLang($lang)
    {
        if (Lang::where('name', $lang)->first()) {
            $backLink = URL::previous();
            $domain = url('');
            $route = str_replace($domain, '', $backLink);
            $array = explode('/', $route);
            if (isset($array)) {
                if($array[1] == 'admin'){
                    $array[2] = $lang;
                }
                else {
                    $array[1] = $lang;
                }
            }
            $newUrl = implode('/',$array);
            if (\Auth::check()) {
                $lang_id = Lang::where(['name' => $lang])->first()->id;
                \Auth::user()->update(['lang_id' => $lang_id]);
                session(['isoCode' => $lang]);
                return redirect($newUrl);
            }
            else {
                session(['isoCode' => $lang]);
                return redirect($newUrl)->withCookie(cookie()->forever('isoCode', $lang));
            }
        }
        else {
            abort('404');
        }
    }
}