<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $items = Contact::where('fullname', 'LIKE',"%{$request->input}%")->first();
        return view('search', ['items' => $items]);
    }
    //public function display(Request $request)
    //{
        //$items = Contact::where('fullname', 'LIKE',"%{$request->input}%")->first();
        //return view('search',['items' => $items]);
    //}
    
}
