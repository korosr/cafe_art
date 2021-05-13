<?php

namespace App\Http\Controllers\general;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;

class GeneralPageController extends Controller
{
    //aboutPage画面取得
    public function showAboutPage(){
        return view('about');
    }

    //contactPage画面取得
    public function showContactPage(){
        return view('contact');
    }

    //menuPage画面取得
    public function showMenuPage(){

        //cafeメニュー取得
        $cafes = 

        return view('menu');
    }

    //galleryPage画面取得
    public function showGalleryPage(){

        $galleries = Gallery::all();

        return view('gallery', compact('galleries'));
    }
}
