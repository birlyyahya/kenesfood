<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    function index() {
        $categories = Category::all();
        return view('homepage', compact('categories'));
    }
}
