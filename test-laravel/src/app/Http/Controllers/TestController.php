<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Category;

class TestController extends Controller
{
    public function index(){
        return view('index');
    }

    public function contactCreate(Request $request){
        $form = $request->all();
        Contact::create($form);
        return redirect('/');
    }
}
