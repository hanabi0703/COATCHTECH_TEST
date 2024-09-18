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
  $contacts = Contact::with('category')->KeywordSearch($request->keyword)->GenderSearch($request->gender)->CategorySearch($request->category_id)->UpdateSearch($request->updated_at)->get();
  $categories = Category::all();

  return view('admin', compact('contacts', 'categories'));
}
}
