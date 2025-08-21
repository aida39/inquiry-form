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

    public function saveSession(Request $request)
    {
        $request->session()->put('inquiry', $request->all());
        return redirect()->route('confirm');
    }

    public function confirm()
    {
        // $inquiry = session('inquiry');
        return view('confirm');
    }

}
