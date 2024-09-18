<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Category;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin(){
        $contacts = Contact::all();
        $categories = Category::all();

    return view('admin', compact('contacts', 'categories'));
    }

public function search(Request $request)
{
//   $contact = Contact::with('category')->CategorySearch($request->category_id)->KeywordSearch($request->keyword)->get();
   $contacts = Contact::with('category')->KeywordSearch($request->keyword)->get();
  $categories = Category::all();

  return view('admin', compact('contacts', 'categories'));
}
}
