<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //Action index()
    public function index(){
        
        $title = "Quản lý kết quả học tập";
        $content = "Trang HWS";

        return view('home', compact('title', 'content')); //load view home.php
    }

    //Action getNews()
    public function getNews(){
        return 'Danh sách tin tức';
    }

    public function getCategories($id){
        return 'Chuyên mục: '.$id;
    }
}
