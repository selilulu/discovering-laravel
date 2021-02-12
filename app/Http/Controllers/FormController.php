<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    
    public function form(){

        return view("form");
    }


    public function show(){

        $data=request()->validate([
            'name'=>'required|min:3',
            'email'=>'required',
            'password'=>'required|min:4'

        ]);

        $request=request()->all();

        $name=request('name');
        $email=request('email');
        $password=request('password');

        return view("form");
       
}
    public function store($name){

        $formsdb=\DB::table("forms")->where("name",$name)->first();
        dd($formsdb->name); // gives the selected table in black screen

        return view('form');
        // return view('form', [
        //     'formsdb' => DB::table('forms')->where('name', $name)->firstOrFail()
        // ]);
    
    }

}
    