<?php

use App\Mail\TestMail;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\SQLController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\PostController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


Route::prefix('posts/crud')->name('posts.')->group(function() {
    Route::get('/', [PostController::class, 'index'])->name('index');
    Route::get('/create', [PostController::class, 'create'])->name('create');
    Route::post('/store', [PostController::class, 'store'])->name('store');
});


Route::get('sql', [SQLController::class, 'index']);


Route::get('/form', [FormController::class, 'index']);
Route::post('/save', [FormController::class, 'submitData'])->name('submitData');

// For uploading file
Route::get('upload', [FormController::class, 'upload']);
Route::post('upload', [FormController::class, 'uploadSubmit'])->name('uploadSubmit');

// for validation
Route::get('valid', [FormController::class, 'valid']);
Route::post('valid', [FormController::class, 'validSubmit'])->name('validSubmit');


Route::get('helper', function() {
    return sayHi();
});

Route::get('/sendmail', function() {
    Mail::to('moh@gmail.com')->send(new WelcomeMail());
});

Route::group(['prefix' => LaravelLocalization::setLocale()], function()
{
    Route::prefix('portfolio')->name('portfolio.')->group(function() {


        Route::get('/about', [PortfolioController::class, 'about'])->name('about');

        Route::get('/contact', [PortfolioController::class, 'contact'])->name('contact');
        Route::post('/contact', [PortfolioController::class, 'contactSubmit'])->name('contactSubmit');

        // Route::get('{lang?}/', [PortfolioController::class, 'index'])->name('index');
        Route::get('/', [PortfolioController::class, 'index'])->name('index');

    });


});
// Portifolio routes


Route::get('/show', [PagesController::class, 'show']);

Route::get('/home', [PagesController::class, 'home'])->name('home');
Route::get('/about-us', [PagesController::class, 'about'])->name('about');
Route::get('/contact-us', [PagesController::class, 'contact'])->name('contact');
Route::get('/services', [PagesController::class, 'services'])->name('services');
Route::get('/our-team', [PagesController::class, 'team'])->name('team');


Route::get('/check/{name}', [PagesController::class, 'checkName'])->middleware('checkName');


Route::get('/', function () {
    // return route('singleUser', ['id' => 20]);
    // return redirect()->route('about');
    // return route('about');
    return 'Homepage';
});

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
Route::get('/countries/{city?}', function($city = '') {
    return $city . ' <br>All Countries';
});
