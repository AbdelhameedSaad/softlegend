<?php

namespace App\Http\Controllers\Admin;

use App\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        $data['contacts']= Contact::select('id', 'name', 'email', 'phone', 'desc','created_at')->orderBy('id', 'DESC')->get();
        return view('admin.index')->with($data);
    }
}
