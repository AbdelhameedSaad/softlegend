<?php

namespace App\Http\Controllers\Front;

use App\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactpageController extends Controller
{
    //
    public function index(){
        $lang = session()->get('locale');
        if($lang == 'en'){
            return view('front.en.contact');
        }elseif($lang == 'ar'){
            return view('front.ar.contact');
        }
        return view('front.ar.contact');
    }

    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|string|email|unique:contacts|max:191',
            'phone' => 'required|string|max:16',
            'desc' => 'required|string',
        ]);
            Contact::create($data);
            return back();

    }

    

    public function storeAr(Request $request){
        $data = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|string|email|unique:contacts|max:191',
            'phone' => 'required|string|max:16',
            'desc' => 'required|string',
        ]);
            Contact::create($data);
            return back();

    }

}
