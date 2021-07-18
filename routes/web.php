<?php

use App\Models\User;
use App\Mail\TestMail;
use App\Mail\WelcomeMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SQLController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\RelationController;
use App\Http\Controllers\Auth\HomeController;
use App\Http\Controllers\PortfolioController;
use Prophecy\Doubler\Generator\Node\ReturnTypeNode;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

/*
composer require laravel/ui
php artisan ui bootstrap --auth
npm install "twice"
npm run dev "twice"
*/

Route::get('/', function(){
    return view('welcome');
});

Route::get('test', function(){
    return 'test';
})->middleware('auth');

// Route::get('login', function() {
//     return view('auth.login');
// })->name('login');

// Route::post('login', function(Request $request ) {

//     // $user = User::where('email', $request->email)->get();

//     // return $user;

//     Auth::attempt(['email' => $request->email, 'password' => $request->password]);

// });

Route::get('relation', [RelationController::class, 'index']);



Route::resource('authors', AuthorController::class);


// Route::prefix('posts/crud')->name('posts.')->group(function() {
//     // Read
//     Route::get('/', [PostController::class, 'index'])->name('index');

//     // Create
//     Route::get('/create', [PostController::class, 'create'])->name('create');
//     Route::post('/store', [PostController::class, 'store'])->name('store');

//     // Delete
//     // Route::delete('/destroy/{id}', [PostController::class, 'destroy'])->name('destroy');
//     Route::get('/destroy/{id}', [PostController::class, 'destroy'])->name('destroy');

//     // Update
//     Route::get('/update/{id}', [PostController::class, 'update'])->name('update');
//     Route::put('/update/{id}', [PostController::class, 'save'])->name('save');

// });




// Route::get('sql', [SQLController::class, 'index']);


// Route::get('/form', [FormController::class, 'index']);
// Route::post('/save', [FormController::class, 'submitData'])->name('submitData');

// // For uploading file
// Route::get('upload', [FormController::class, 'upload']);
// Route::post('upload', [FormController::class, 'uploadSubmit'])->name('uploadSubmit');

// // for validation
// Route::get('valid', [FormController::class, 'valid']);
// Route::post('valid', [FormController::class, 'validSubmit'])->name('validSubmit');


// Route::get('helper', function() {
//     return sayHi();
// });

// Route::get('/sendmail', function() {
//     Mail::to('moh@gmail.com')->send(new WelcomeMail());
// });

// Route::group(['prefix' => LaravelLocalization::setLocale()], function()
// {
//     Route::prefix('portfolio')->name('portfolio.')->group(function() {


//         Route::get('/about', [PortfolioController::class, 'about'])->name('about');

//         Route::get('/contact', [PortfolioController::class, 'contact'])->name('contact');
//         Route::post('/contact', [PortfolioController::class, 'contactSubmit'])->name('contactSubmit');

//         // Route::get('{lang?}/', [PortfolioController::class, 'index'])->name('index');
//         Route::get('/', [PortfolioController::class, 'index'])->name('index');

//     });


// });
// // Portifolio routes


// Route::get('/show', [PagesController::class, 'show']);

// Route::get('/home', [PagesController::class, 'home'])->name('home');
// Route::get('/about-us', [PagesController::class, 'about'])->name('about');
// Route::get('/contact-us', [PagesController::class, 'contact'])->name('contact');
// Route::get('/services', [PagesController::class, 'services'])->name('services');
// Route::get('/our-team', [PagesController::class, 'team'])->name('team');


// Route::get('/check/{name}', [PagesController::class, 'checkName'])->middleware('checkName');


// Route::get('/', function () {
//     // return route('singleUser', ['id' => 20]);
//     // return redirect()->route('about');
//     // return route('about');
//     return 'Homepage';
// });

// Route::any('/mousa', function() {
//     return 'This is custom route';
// });

// Route::match(['get', 'put'], '/amal', function() {
//     return 'This is match url';
// });

// Route::get('/about-me', function() {
//     return 'About Page';
// })->name('about');

// Route::get('/contact-us', function() {
//     return 'Contact Us Page';
// });

// Route::get('blog', function() {
//     return 'Blog Page';
// });

// Route::get('/blog/{id}', function($id) {
//     return 'Blog ID = ' . $id;
// });

// Route::get('/user/profile', function() {
//     return 'This is profile page';
// });

// Route::get('/blog/{id}/{author?}', function($id, $author = '') {

//     return 'This is author ' . $author . ' for blog id ' . $id;
// });
// Route::get('/countries/{city?}', function($city = '') {
//     return $city . ' <br>All Countries';
// });

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::get('/admin', function() {
    return 'صفحة الادمن علشان الجماعة ما تزعل منا';
});
