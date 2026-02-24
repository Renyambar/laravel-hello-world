<?php

use Illuminate\Support\Facades\Route;

Route::get('/hello', function () {
    return 'Hello World';
});

Route::get('/world', function () {
return 'World';
});

Route::get('/', function () {
    return "Selamat Datang";
});

Route::get('/about', function () {
    return "NIM : 244107020066, Nama : Reny Ambarwati, Kelas : TI-2F";
});

Route::get('/user/{Reny}', function ($name) {
return 'Nama saya '.$name;
});

Route::get('/posts/{post}/comments/{comment}', function
($postId, $commentId) {
return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});

Route::get('/articles/{id}', function
($postId) {
return 'Halaman  Artikel dengan ID'.$postId;
});

Route::get('/user/{name?}', function ($name='John') {
    return 'Nama saya '.$name;
});

