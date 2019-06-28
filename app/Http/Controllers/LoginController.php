<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{

    public function create(){
        return view('login');        
    }


    public function store(Request $request){
        // dd($request);
        var_dump($request);
        $this->validate($request,[
            'email' => 'required',
            'password' =>'required',
            ]);
            
            return redirect()->route('home');
            // dd('aaaa');
            
            
    }
}
