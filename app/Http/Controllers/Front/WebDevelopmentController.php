<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebDevelopmentController extends Controller
{
    //
    public function index(){
        $lang = session()->get('locale');
        if($lang == 'en'){
            return view('front.en.web-development');
        }elseif($lang == 'ar'){
            return view('front.ar.web-development');
        }
        return view('front.ar.web-development');
    }
}
