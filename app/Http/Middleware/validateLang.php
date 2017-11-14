<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use App\Lang;
use Closure;
use Illuminate\Support\Facades\URL;

class validateLang
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $backLink = URL::current();
        $domain = url('');
        $route = str_replace($domain, '', $backLink);
        $array1 = explode('/', $route);
        $res = Lang::where('status', '1')->get()->pluck('name')->toArray();
        $array = [];
        if (isset($array1)) {
            foreach ($array1 as $item => $value) {
                if (empty($value)) {
                    unset($array1[$item]);
                }
            }
            $array = array_values($array1);
            if (isset($array[0])) {
                $lang = [];
                // route admin ML system
                if ($array[0] === "admin") {
                    if (Auth::check()) {
                        if (isset($array[1])) {
                            $lang[0] = $array[1];
                            $result = array_intersect($lang, $res);
                            if (empty($result)) {
                                abort(404);
                            } else {
                                session(['isoCode' => $result[0]]);
                                $id_lang = Lang::where('name', $result[0])->first()->id;
                                Auth::user()->update(['lang_id' => $id_lang]);
                            }
                        } else {
                            return redirect('admin/' . Auth::user()->lang()->first()->name);
                        }
                    }

                } // route site ML system
                else {
                    $lang[0] = $array[0];
                    $result = array_intersect($lang, $res);
                    if (empty($result)) {
                        abort(404);
                    } else {
                        /*--------get User's isoCode----------*/
                        if (session()->has('isoCode')) {
                            /*user before login changed language*/
                            if (Auth::check()) {
                                $name_lang = Auth::user()->lang->name;
                                if (session()->get('isoCode') !== $name_lang) {
                                    $id_lang = Lang::where('name', session()->get('isoCode'))->first()->id;
                                    Auth::user()->update(['lang_id' => $id_lang]);
                                } elseif (session()->get('isoCode') !== $result[0]) {
                                    session(['isoCode' => $result[0]]);
                                    $id_lang = Lang::where('name', $result[0])->first()->id;
                                    Auth::user()->update(['lang_id' => $id_lang]);
                                }
                            } else {
                                if (session()->get('isoCode') !== $result[0]) {
                                    session(['isoCode' => $result[0]]);
                                    return $next($request)->withCookie(cookie()->forever('isoCode', $result[0]));
                                }
                            }
                            /*end*/
                        }
                        if (!session()->has('isoCode')) {
                            /*if user before registered in website*/
                            if (Auth::check()) {
                                $userIsoCode = Auth::user()->lang()->first()->name;
                                session(['isoCode' => $userIsoCode]);
                                return $next($request);
                            } /*if user before came in website but not registered*/
                            else {
                                session(['isoCode' => $result[0]]);
                                return $next($request)->withCookie(cookie()->forever('isoCode', $result[0]));
                            }
                        }
                        /****end***/
                    }
                }
            } //                redirect user when doesn't have language in route
            else {
                if (Cookie::has('isoCode')) {
                    session(['isoCode' => Cookie::get('isoCode')]);
                }
                else {
                    $ipIsoCode = strtolower(geoip()->getLocation(\Request::ip())->iso_code);
                    foreach ($res as $item => $value) {
                        if ($ipIsoCode === $value) {
                            $hasLang = $ipIsoCode;
                        }
                    }
                    if (isset($hasLang)) {
                        $nowLang = $hasLang;
                        session(['isoCode' => $nowLang]);
                        return $next($request)->withCookie(cookie()->forever('isoCode', $nowLang));
                    } else {
                        $nowLang = 'en';
                        session(['isoCode' => $nowLang]);
                        return $next($request)->withCookie(cookie()->forever('isoCode', $nowLang));
                    }
                }
                return redirect(session()->has('isoCode') ? session()->get('isoCode') : 'en');
            }
        }
        return $next($request);
    }
}
