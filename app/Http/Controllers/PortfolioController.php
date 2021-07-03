<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
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
}
