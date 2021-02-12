<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DigitalMarketingController extends Controller
{
    //
    public function index(){
        $lang = session()->get('locale');
        if($lang == 'en'){
            return view('front.en.digital-marketing');
        }elseif($lang == 'ar'){
            return view('front.ar.digital-marketing');
        }
        return view('front.ar.digital-marketing');
    }
}
