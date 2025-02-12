<?php

namespace App\Http\Controllers;
//Kode ini digunakan untuk mendeklarasikan namespace dalam Laravel Controller.
//Namespace dalam Laravel digunakan untuk mengelompokkan kelas dalam folder tertentu.
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
//Kode ini digunakan dalam Laravel Controller untuk memberikan otorisasi (authorization) menggunakan policies dan gates.                      AuthorizesRequests adalah trait yang tersedia di Laravel.
//Kode ini digunakan dalam Laravel Controller untuk menjalankan queued jobs atau synchronous jobs menggunakan Laravel Job Dispatching System.              DispatchesJobs adalah trait yang memungkinkan kita untuk mengirimkan (dispatch) jobs ke sistem queue Laravel.
//Kode ini digunakan dalam Laravel Controller untuk memvalidasi input pengguna secara otomatis menggunakan Laravel Validation System.                     adalah trait yang memungkinkan kita untuk menggunakan fitur validasi input di dalam controller.
//Kode ini digunakan dalam Laravel untuk menjadikan BaseController sebagai induk dari semua controller dalam aplikasi.                                      adalah controller dasar (parent class) yang disediakan oleh Laravel.

class Controller extends BaseController
//Controller ini bertindak sebagai controller dasar dalam aplikasi.
//semua controller lain di aplikasi Laravel biasanya akan mewarisi (extends) Controller ini.
//Dengan mewarisi BaseController, semua controller mendapatkan fitur bawaan Laravel.
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
