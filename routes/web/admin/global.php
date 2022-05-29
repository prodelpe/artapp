<?php

Route::prefix('admin')
    ->middleware(['auth'])
    ->group(function () {

    Route::view('/', 'dashboard');

});
