<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function checkName($name) {
        return 'Welcome Baby ' . $name;
    }

    public function show() {
        // $name = 'Mohammed Naji';
        // $age = 27;
        // $edu = 'Master';

        // $cars = ['BMW', 'MERCEDEC', 'OPEL', 'AUDI'];
        // $cars = [];

        $names = [
            'Mohammed Naji' => 27,
            'Feras' => 25,
            'Mousa' => 26,
            'Alaa' => 26
        ];

        // return view('show')->with('cars', $cars);
        return view('pages.show')->with('names', $names);
        // global $name;

        // dd($GLOBALS['name']);
        // return view('show')->with('myname', $name)->with('age', $age);
        // return view('show', compact('name', 'age'));
        // return view('show', [
        //     'name'      => $name,
        //     'age'       => $age,
        //     'education' => $edu
        // ]);
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
