<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutpageController extends Controller
{
    //
    public function index(){

        
        $lang = session()->get('locale');
        if($lang == 'en'){
            return view('front.en.about');
        }elseif($lang == 'ar'){
            return view('front.ar.about');
        }
        return view('front.ar.about');
    }
   
}
