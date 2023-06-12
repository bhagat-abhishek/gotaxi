<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class UiController extends Controller
{

    /**
     * Home Page
     * 
     */
    public function index()
    {
        return view('welcome', [
            'reviews' => Review::where('isActive', 1)->limit(3)->get(),
        ]);
    }

    /**
     * About Page
     * 
     */
    public function about()
    {
        return view('about');
    }

    /**
     * Service Page
     * 
     */
    public function services()
    {
        return view('services');
    }

    /**
     * Contact Page
     * 
     */
    public function contact()
    {
        return view('contact');
    }
}
