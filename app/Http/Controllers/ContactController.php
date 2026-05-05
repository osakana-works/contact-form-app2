<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function index()
    {   
        return view('index');
    }

    public function confirm(ContactRequest $request)
    {   
        $request->validated();
        $contact = $request->all();
        return view('confirm', compact('contact'));
    }

    public function store(ContactRequest $request)
    {   
        // バリデーション
        $request->validated();
        // データの保存
        Contact::create($request->all());
        return view('/thanks');
    }
}
