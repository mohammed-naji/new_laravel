<?php

use Illuminate\Support\Facades\Route;

Route::get('users/{id}', function ($id) {
    return $id;
})->name('singleUser');

Route::get('/user/profile/{name?}', function($name = '') {
    return 'This is profile page ' . $name;
});
