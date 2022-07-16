<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function form(Request $request){
        $data = $request->all();
        // print_r($request);

        // $arr['name'] = 'sss';
        // $arr['pass'] = 'sss';

        // return view('output', $arr);

    }

    public function test(Request $request){
        // echo $args."<br>";
        // echo $args2."<br>";

        echo $request->route('id')."<br>";
        echo $request->route('id2')."<br>";

    }
}
