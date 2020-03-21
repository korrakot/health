<?php

namespace ระบบฐานข้อมูลติดตามสุขภาพผู้สูงอายุในชุมชน\Http\Controllers;

use Illuminate\Http\Request;
use ระบบฐานข้อมูลติดตามสุขภาพผู้สูงอายุในชุมชน\Category;

class CategoryController extends Controller
{
    public function create()
    {
        $categories = Category::pluck('name', 'id');
        return view('system_info.elder.create', compact('id', 'name'));

        // $categories = Category::all()->pluck('name', 'id')->toArray();
        // return view('posts.edit')->withCategories($categories);
    }
}
