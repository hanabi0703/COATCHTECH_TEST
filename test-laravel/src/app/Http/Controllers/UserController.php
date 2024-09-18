<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{

    public function top(){
        return view('top');
    }
    // public function register(){
    //     return view('/auth/register');
    // }
//   public function createUser(Request $request)
//   {
//     $form = $request->all();
//     User::create($form);
//     return redirect('/top');
//   }

//   public function index()
//     {
//         $authors = User::all();
//         return view('/top', ['authors' => $authors]);
//     }

}
