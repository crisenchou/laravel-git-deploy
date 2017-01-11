<?php


Route::get('git/deploy', function () {
    Artisan::call('git', [
        'action' => 'pull'
    ]);
});
