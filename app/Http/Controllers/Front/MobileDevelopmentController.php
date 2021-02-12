<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MobileDevelopmentController extends Controller
{
    //
    public function index(){
        $lang = session()->get('locale');
        if($lang == 'en'){
            return view('front.en.mobile-development');
        }elseif($lang == 'ar'){
            return view('front.ar.mobile-development');
        }
        return view('front.ar.mobile-development');
    }
  
}
