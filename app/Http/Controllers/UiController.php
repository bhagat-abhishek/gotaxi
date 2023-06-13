<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Contact;
use App\Models\Review;
use App\Models\Vehicle;
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
            'vehicles' => Vehicle::get(),
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


    /**
     * Booking Form
     * 
     */
    public function booking(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'car_type' => 'required',
            'pickup_location' => 'required',
            'drop_location' => 'required',
            'from' => 'required',
            'to' => 'required',
        ]);

        Booking::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'car_type' => $request->car_type,
            'pickup_location' => $request->pickup_location,
            'drop_location' => $request->drop_location,
            'from' => $request->from,
            'to' => $request->to,
        ]);

        return redirect()->route('home')->with('success', 'Booking Requested, we will get back to you');
    }

    /**
     * Contact Form
     * 
     */
    public function contactPost(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);

        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);

        return redirect()->route('home')->with('success', 'Thank you, We will get back to you');
    }
}
