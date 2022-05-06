<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Http\Requests\ClientRequest;

class ContactController extends Controller
{
    //一覧表示
    public function index()
    {
        return view('index');
    }
    //確認画面表示
    public function confirm(ClientRequest $request)
    {
        $input = $request->input();
        $request->session()->put('input', $input);
        return view('confirm',['input' => $input]);
    }
    //データーベースえの登録・最終ページの表示
    public function create(Request $request)
    {
        $input = $request->session()->get('input');
        Contact::create($input);
        return view('create');
    }
}
