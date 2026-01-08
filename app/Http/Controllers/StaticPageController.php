<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPageController extends Controller
{
    /**
     * Display the home page.
     */
    public function home()
    {
        return view('pages.home');
    }

    /**
     * Display the about page.
     */
    public function about()
    {
        return view('pages.about');
    }

    /**
     * Display the features page.
     */
    public function features()
    {
        return view('pages.features');
    }

    /**
     * Display the how it works page.
     */
    public function howItWorks()
    {
        return view('pages.how-it-works');
    }

    /**
     * Display the contact page.
     */
    public function contact()
    {
        return view('pages.contact');
    }

    /**
     * Handle contact form submission.
     */
    public function submitContact(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:5000',
        ]);

        // In a real application, you would send an email or save to database here
        // For now, we'll just redirect with a success message

        return redirect()->route('contact')->with('success', 'Thank you for your message! We will get back to you soon.');
    }

    /**
     * Display the FAQ page.
     */
    public function faq()
    {
        return view('pages.faq');
    }

    /**
     * Display the privacy policy page.
     */
    public function privacy()
    {
        return view('pages.privacy');
    }

    /**
     * Display the terms of service page.
     */
    public function terms()
    {
        return view('pages.terms');
    }
}
