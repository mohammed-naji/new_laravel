<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index() {
        $fb = '######';
        return view('protfolio.index')->with('fb', $fb);
    }

    public function about() {
        return view('protfolio.about');
    }

    public function contact() {
        return view('protfolio.contact');
    }
}
