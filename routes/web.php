<?php

use Illuminate\Support\Facades\Route;

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
