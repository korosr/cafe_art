<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gallery;
use App\Models\Menu;

class AdminPageController extends Controller
{
    //topPage画面取得
    public function showTopPage(){

        //カテゴリごとに取得
        $cafes = Menu::where('category_id', '=', 2)->get();
        $foods = Menu::where('category_id', '=', 1)->get();
        $winter_specials = Menu::where('category_id', '=', 3)->get();

        return view('admintop', compact('cafes', 'foods', 'winter_specials'));
    }

    //menu登録画面取得
    public function showMenuInsertPage(){
        return view('adminmenu_insert');
    }

    //menu編集画面取得
    public function editMenuPage($id){
        $menu = Menu::find($id);
        return view('adminmenu_edit', compact('menu'));
    }

    //menu削除画面取得
    public function deleteMenuPage($id){
        $menu = Menu::find($id);
        return view('adminmenu_delete', compact('menu'));
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