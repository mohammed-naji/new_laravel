<?php

namespace App\Http\Controllers;

use App\Mail\ContactUsMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Mail;

class PortfolioController extends Controller
{
    // public function index($lang = 'en') {

    //     App::setLocale($lang);

    public function index() {

        $portfolios = [
            [
                'title' => 'LOG CABIN',
                'image' => 'portfolio/cabin.png',
                'text'  => 'Lorem ipsum dolor sit amet, consectetur'
            ],
            [
                'title' => 'TASTY CAKE',
                'image' => 'portfolio/cake.png',
                'text'  => 'Lorem ipsum dolor sit amet, consectetur'
            ],
            [
                'title' => 'CIRCUS TENT',
                'image' => 'portfolio/circus.png',
                'text'  => 'Lorem ipsum dolor sit amet, consectetur'
            ]
        ];

        return view('protfolio.index', compact('portfolios'));
    }

    public function about() {
        return view('protfolio.about');
    }

    public function contact() {
        return view('protfolio.contact');
    }

    public function contactSubmit(Request $request) {
        $request->validate([
            'fullname' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'message' => 'required',
        ]);

        $data = $request->except('_token');

        Mail::to('admin@example.com')->send(new ContactUsMail($data));

    }
}
