<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BlogCategory;

class AdminBlogCategoryController extends Controller
{
    //
    public function index() {
        return view('admin.blog_categories');
    }

    
}
