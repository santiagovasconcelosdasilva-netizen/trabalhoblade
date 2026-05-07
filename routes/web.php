<?php

Route::get('/', function () {
    return view('bemvindo');
});

Route::get('/produtos', function () {
    return view('produtos');
});

Route::get('/produto', function () {
    return view('produto');
});