<?php

use Illuminate\Support\Facades\Broadcast;

/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.
|
*/

Broadcast::channel('App.Models.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
    //Mendaftarkan channel broadcasting dengan nama 'App.Models.User.{id}'.{id} adalah placeholder                                                         yang bisa diganti dengan ID pengguna yang ingin berlangganan ke channel tersebut.
    //function ($user, $id) {...}Fungsi ini bertindak sebagai authorization callback, yang menentukan                                                  apakah pengguna yang mencoba mendengarkan channel ini memiliki izin atau tidak.
    //return (int) $user->id === (int) $id mengecek apakah ID pengguna yang sedang                                                                     login ($user->id) sama dengan ID yang diminta dalam channel ($id).
});
