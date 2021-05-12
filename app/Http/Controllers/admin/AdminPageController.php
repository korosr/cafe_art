<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminPageController extends Controller
{
    //topPage画面取得
    public function showTopPage(){
        return view('admintop');
    }
}