<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    //
    public function index(){
        $lang = session()->get('locale');
        if($lang == 'en'){
            return view('front.en.index');
        }elseif($lang == 'ar'){
            return view('front.ar.index');
        }
        return view('front.ar.index');
    }
   
}
