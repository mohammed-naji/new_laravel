<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormDataRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class FormController extends Controller
{
    public function index() {
        // $pass = 123;
        // return Hash::make($pass);
        return view('forms.index');
    }

    public function submitData(Request $req) {
    // public function submitData() {
        $name = $req->name;
        $age = $req->age;
        $email = $req->email;
        $password = $req->password;


        // dd($req->except(['_token']));
        // dd($req->only(['name', 'email']));

        // $name = request()->name;
        // $age = request()->age;

        // return "Welcome $name you are $age years old";
        return view('forms.welcome', compact('name', 'age'));
    }



    public function upload() {
        // dd(time());
        return view('forms.upload');
    }

    public function uploadSubmit(Request $req) {
        // dd($_FILES);
        $name = $req->file('image')->getClientOriginalName();
        $ex = $req->file('image')->getClientOriginalExtension();
        // $req->file('image')->move('public/uploads', $name);

        // $ex_path = pathinfo($name, PATHINFO_EXTENSION);
        // Change the file name

        $new_name = 'new_laravel_' . time() . '_' . rand() . '.' .$ex;

        $path = $req->file('image')->move(public_path('uploads'), $new_name);

        // dd($path->getPathname());

        return view('forms.showimage', compact('path'));
        // $req->file('image')->storeAs('uploads', $new_name , 'public');
    }

    public function valid() {
        return view('forms.valid');
    }

    public function validSubmit(FormDataRequest $req) {

        // $validated = $req->validated();
        // $req->validate([
        //     // 'name' => 'required|min:4|max:20',
        //     'name' => ['required', 'min:4', 'max:20'],
        //     'age' => ['required', 'numeric'],
        //     'email' => ['required', 'email'],
        //     'password' => ['required', 'min:8', 'max:20', 'confirmed']
        // ]);


        // $validator = Validator::make($req->all(), [
        //     // 'name' => 'required|min:4|max:20',
        //     'name' => ['required', 'min:4', 'max:20'],
        //     'age' => ['required', 'numeric'],
        //     'email' => ['required', 'email'],
        //     'password' => ['required', 'min:8', 'max:20', 'confirmed']
        // ], [
        //     'required' => 'هذا الحقل مطلوب ي باشا',
        //     'name.required' => 'هذه رسالة خطا مدلعة عالاخر للاسم فقط',
        // ])->validate();

        // if($validator->fails()) {
        //     return redirect('valid')
        //                 ->withErrors($validator)
        //                 ->withInput();
        // }

        return 'Done';
    }

}
