<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
    // Artisan::command('inspire', function () {...});Mendaftarkan perintah artisan baru bernama inspire.
    //$this->comment(Inspiring::quote());Inspiring::quote() adalah metode bawaan Laravel yang                                                           mengembalikan kutipan inspiratif secara acak.
})->purpose('Display an inspiring quote');
