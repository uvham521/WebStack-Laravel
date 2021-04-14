<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::with(['children' => function ($query) {
            $query->orderBy('order');
        }, 'sites'])
            ->withCount('children')
            ->orderBy('order')
            ->get();

        return view('index')->with('categories', $categories);
    }

    public function about()
    {
        return view('about');
    }
}
