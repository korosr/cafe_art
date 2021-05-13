<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gallery;

class AdminPageController extends Controller
{
    //topPage画面取得
    public function showTopPage(){
        return view('admintop');
    }

    //menu登録画面取得
    public function showMenuInsertPage(){
        return view('adminmenu_insert');
    }

    //Galleryトップ画面取得
    public function showGalleryTopPage(){
        $galleries = Gallery::all();

        return view('admingallery', compact('galleries'));
    }

    //Gallery登録画面取得
    public function insertGalleryTopPage(){

        return view('admingallery_insert');
    }
}