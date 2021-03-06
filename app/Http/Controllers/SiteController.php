<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(){

        $categories = Category::where('parent_id', 0)->get();
        return view('site.index', compact('categories'));
    }
}
