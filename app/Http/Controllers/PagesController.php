<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function checkName($name) {
        return 'Welcome ' . $name;
    }

    public function home() {
        // $message = "This is onboard message";
        // $message .= "<br>Welcome to our website";
        // $message .= "<br>We wish you nice day";

        // return $message;
        return view('home');
    }

    public function about() {
        return view('about');
    }

    public function contact() {
        return view('contact');
    }

    public function services() {
        return view('services');
    }

    public function team() {
        return view('team');
    }

}
