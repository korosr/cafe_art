<?php

namespace App\Http\Controllers\general;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Models\Menu;
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

        //カテゴリごとに取得
        $cafes = Menu::where('category_id', '=', 2)->get();
        $foods = Menu::where('category_id', '=', 1)->get();
        $winter_specials = Menu::where('category_id', '=', 3)->get();

        return view('menu', compact('cafes', 'foods', 'winter_specials'));
    }

    //galleryPage画面取得
    public function showGalleryPage(){

        $galleries = Gallery::all();

        return view('gallery', compact('galleries'));
    }
}
