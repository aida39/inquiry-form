<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class InquiryController extends Controller
{
    public function create()
    {
        $categories = Category::all();
        return view('create', compact('categories'));
    }
}
