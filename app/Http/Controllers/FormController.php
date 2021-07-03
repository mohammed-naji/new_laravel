<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function form() {
        return view('forms.form');
    }

    public function submitForm() {
        return 'Form Submitted';
    }
}
