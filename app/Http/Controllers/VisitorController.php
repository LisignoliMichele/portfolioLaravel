<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Visitor;
use App\Mail\SendNewMail;
use Illuminate\Support\Facades\Mail;


class VisitorController extends Controller
{
    public function index(){
        $messages = Visitor::get()->toJson(JSON_PRETTY_PRINT);
        return response($messages, 200);
    }

    public function create()
    {
        return view('portfolio.index'); 
    }



    public function store(Visitor $visitor, Request $request)
    {
        $validation = [
            'name' => 'required|string|max:50',
            'lastname' => 'required|string|max:50',
            'email' => 'required|string|email|max:50',
            'object' => 'nullable|string'
        ];
        
        $request->validate($validation);

        // insert sql
        Visitor::create($request->all());

        // return
        return redirect()->route('thanks');
    }
}
