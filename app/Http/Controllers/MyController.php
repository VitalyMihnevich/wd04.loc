<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function myPage(){
        $myFullName='Vitaliy Mikhnevich';
        return view('mypage', [
            'myName'=> $myFullName
        ]);

    }
}
