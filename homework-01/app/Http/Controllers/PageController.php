<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function getHomePage()
    {
        return view('home')
            ->with('title', 'Home')
            ->with('theme', 'dark')
            ->with('show_footer', true)
            ->with('footer_text', 'home footer');
    }

    public function getContactPage()
    {
        return view('contact')
            ->with('title', 'Contact')
            ->with('theme', 'dark')
            ->with('show_footer', true)
            ->with('footer_text', 'contact footer');
    }

    public function getAboutPage()
    {
        return view('about')
            ->with('title', 'About')
            ->with('theme', 'dark')
            ->with('show_footer', true)
            ->with('footer_text', 'about footer');
    }

    public function getJokesPage()
    {
        return view('jokes')
            ->with('title', 'Jokes')
            ->with('theme', 'dark')
            ->with('show_footer', false)
            ->with('footer_text', 'jokes footer');
    }
}
