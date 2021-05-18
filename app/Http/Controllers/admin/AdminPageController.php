<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gallery;
use App\Models\Menu;
use App\Models\Galery;
use App\Http\Requests\GalleryRequest;

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

    //menu登録処理
    public function addMenuPage(Request $request, Menu $menu){
        if($request->has('insert')){
            if(isset($request->menu_img)){
                $file_path = $request->file('menu_img')->store('public/images');
                $menu->imgpath = basename($file_path);
            }
            $menu->name = $request->menu_name;
            $menu->fee = $request->menu_fee;
            $menu->category_id = $request->category;
            $menu->save();
        }else{
            //戻るボタン押下
        }
        return redirect()->route('admin.top');
    }

    //menu編集画面取得
    public function editMenuPage($id){
        $menu = Menu::find($id);
        return view('adminmenu_edit', compact('menu'));
    }

    //menu編集処理
    public function updateMenuPage(Request $request){
        $menu = Menu::findOrFail($request->menu_id);
        if($request->has('update')){
            if(isset($request->menu_img)){
                $file_path = $request->file('menu_img')->store('public/images');
                $menu->imgpath = basename($file_path);
            }
            $menu->name = $request->menu_name;
            $menu->fee = $request->menu_fee;
            $menu->category_id = $request->category;
            $menu->save();
        }elseif($request->has('delete')){
            $menu->delete();
        }else{
            //戻るボタン押下
        }

        return redirect()->route('admin.top');
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

    //gallery登録処理
    public function addGalleryPage(Request $request, Gallery $gallery){

        if($request->has('insert')){
            if(isset($request->gallery_img)){
                $file_path = $request->file('gallery_img')->store('public/images');
                $gallery->imgpath = basename($file_path);
                $gallery->save();
            }
        }else{
            //戻るボタン押下
        }
        return redirect()->route('admin.gallery');
    }

    //gallery編集画面取得
    public function editGalleryPage($id){
        $gallery = Gallery::find($id);
        return view('admingallery_edit', compact('gallery'));
    }

    //gallery編集処理
    public function updateGalleryPage(Request $request){
        $gallery = Gallery::findOrFail($request->gallery_id);
        if($request->has('update')){
            if(isset($request->gallery_img)){
                $file_path = $request->file('gallery_img')->store('public/images');
                $gallery->imgpath = basename($file_path);
                $gallery->save();
            }
        }elseif($request->has('delete')){
            $gallery->delete();
        }else{
            //戻るボタン押下
        }

        return redirect()->route('admin.gallery');
    }

}