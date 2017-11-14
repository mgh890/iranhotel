<?php

namespace App\Http\Controllers;

use App\NewsLetter;
use App\User;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SiteController extends Controller
{
    public function index(){
        return View('main.index');
    }
    public function liste(){
        return View('site.list');
    }
    public function package(){
        return View('site.package');
    }
    public function hotelList(){
        return View('site.hotelList');
    }
    public function hotelDetiles(){
        return View('site.hotelDetiles');
    }
    public function reserve(){
        return View('site.reserve');
    }
    public function pay(){
        return View('site.pay');
    }
    public function profile(){
        return View('site.profile');
    }
    public function voucher(){
        return View('site.voucher');
    }
    public function attractions(){
        return View('site.attractions');
    }
    public function contact(){
        return View('site.contact');
    }



}

