<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    //
    public function __construct(){

    }

    //Hiển thị danh sách thư mục (GET)
    public function index(){
        return view('client/categories/list');
    }

    //Lấy ra một chuyên mục theo id (GET)
    public function getCategory($id){
        Return view('client/categories/edit');
    }

    //Sửa chuyên mục (POST)
    public function updateCategory($id){
        return 'Submit sửa chuyên mục: '.$id;
    }

    //Show form thêm dữ liệu (GET)
    public function addCategory(){
        return view('client/categories/add');
    }

    //Thêm dữ liệu vào chuyên mục (POST)
    public function handleCategory(){
        return redirect(route('categories.add'));
        //return 'Submit thêm chuyên mục';
    }

    //Xóa chuyên mục
    public function deleteCategory($id){
        return 'Submit xóa chuyên mục: '.$id;
    }
}   
