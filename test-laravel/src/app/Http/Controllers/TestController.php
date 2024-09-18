<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Category;
use App\Http\Requests\TestRequest;


class TestController extends Controller
{
    public function index(){
        return view('index');
    }

    public function contactCreate(TestRequest $request){
        $tell_number = $request->tell1 . $request->tell2 . $request->tell3;
        $form = [
            'category_id' => $request ->category_id,
            'first_name' => $request ->first_name,
            'last_name' => $request ->last_name,
            'gender' => $request ->gender,
            'email' => $request ->email,
            'tell' => $tell_number,
            'address' => $request ->address,
            'building' => $request ->building,
            'detail' => $request ->detail
        ];
        // Contact::create($form);
        return redirect('/contacts/confirm');
        // ->未使用
    }

    public function confirm(TestRequest $request)
    {
        // $contact = $request->only(['category_id', 'first_name', 'last_name', 'gender', 'email', 'tell1', 'tell2', 'tell3', 'address', 'building', 'detail']);
        $tell_number = $request->tell1 . $request->tell2 . $request->tell3;
        $contact = [
            'category_id' => $request ->category_id,
            'first_name' => $request ->first_name,
            'last_name' => $request ->last_name,
            'gender' => $request ->gender,
            'email' => $request ->email,
            'tell' => $tell_number,
            'address' => $request ->address,
            'building' => $request ->building,
            'detail' => $request ->detail
        ];
        return view('confirm', compact('contact'));
    }
    public function store(TestRequest $request) {
        // $contact = $request->only(['category_id', 'first_name', 'last_name', 'gender', 'email', 'tell1','tell2', 'tell3', 'address', 'building', 'detail']);
        $tell_number = $request->tell1 . $request->tell2 . $request->tell3;
        $contact = [
            'category_id' => $request ->category_id,
            'first_name' => $request ->first_name,
            'last_name' => $request ->last_name,
            'gender' => $request ->gender,
            'email' => $request ->email,
            'tell' => $tell_number,
            'address' => $request ->address,
            'building' => $request ->building,
            'detail' => $request ->detail
        ];
        Contact::create($contact);
        return view('thanks');
        // ->未使用
    }

    public function revise(Request $request) {
        if($request->input('revise') == 'revise') {
            return redirect('/')->withInput();
        }

        $contact = $request->only(['category_id', 'first_name', 'last_name', 'gender', 'email', 'tell1','tell2', 'tell3', 'address', 'building', 'detail']);
        Contact::create($contact);
        return view('thanks');
    }
}
