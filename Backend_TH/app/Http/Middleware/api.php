<?php

Route::group([ 'middleware' => 'auth:api' ], function () {
    Route::get('/obtenerusuarios', [DataUsers::class, 'obtenerusuarios'])->name('obtenerusuarios');
});
