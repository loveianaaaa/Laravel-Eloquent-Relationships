<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('failed_jobs', function (Blueprint $table) {
            $table->id();
            $table->string('uuid')->unique();
            $table->text('connection');
            $table->text('queue');
            $table->longText('payload');
            $table->longText('exception');
            $table->timestamp('failed_at')->useCurrent();
            //Kode ini adalah bagian dari migration di Laravel yang digunakan untuk membuat tabel failed_jobs dalam database.
            // adalah shortcut di Laravel untuk membuat kolom primary key otomatis.
            //string('uuid') Menambahkan kolom uuid dengan tipe VARCHAR(255) secara default.                                                               ->unique(); → Menjadikan nilai di kolom uuid harus unik, artinya tidak boleh ada duplikasi di database.
            //Menambahkan kolom connection bertipe TEXT di dalam tabel.
            // Menambahkan kolom queue bertipe TEXT di dalam tabel.
            //Menambahkan kolom payload bertipe LONGTEXT di dalam tabel.
            //  LONGTEXT adalah tipe data yang digunakan untuk menyimpan teks dalam jumlah sangat besar hingga 4 GB.
            // Menambahkan kolom exception dengan tipe LONGTEXT.
            //$table->timestamp('failed_at') → Menambahkan kolom failed_at bertipe TIMESTAMP dalam tabel.                                                                                                                                          ->useCurrent() → Secara otomatis mengisi kolom dengan waktu saat ini (CURRENT_TIMESTAMP) ketika record dibuat.

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('failed_jobs');
    }
};
