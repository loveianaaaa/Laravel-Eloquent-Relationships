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
        Schema::create('personal_access_tokens', function (Blueprint $table) {
            $table->id();
            $table->morphs('tokenable');
            $table->string('name');
            $table->string('token', 64)->unique();
            $table->text('abilities')->nullable();
            $table->timestamp('last_used_at')->nullable();
            $table->timestamp('expires_at')->nullable();
            $table->timestamps();
            // Membuat tabel personal_access_tokens untuk menyimpan token akses pengguna.
            // adalah shortcut di Laravel untuk membuat kolom primary key otomatis.
            //Menyimpan ID dari model yang memiliki token.
            // Menambahkan kolom bernama name dengan tipe VARCHAR(255) (default).
            //Membuat kolom token dengan panjang maksimum 64 karakter (VARCHAR(64)).                                                                     ->unique() → Menambahkan constraint unik, memastikan bahwa tidak ada dua token yang sama dalam tabel.
            //Menambahkan kolom abilities bertipe TEXT (dapat menyimpan teks panjang, lebih dari 255 karakter).                                        ->nullable() → Membuat kolom ini opsional (bisa bernilai NULL jika tidak diisi).
            // Menambahkan kolom last_used_at dengan tipe timestamp, yang menyimpan informasi waktu dalam format YYYY-MM-DD HH:MM:SS.
            // Menambahkan kolom expires_at dengan tipe timestamp, yang menyimpan waktu dalam format YYYY-MM-DD HH:MM:SS.
            //timestamps() adalah shortcut untuk menambahkan dua kolom 
        });
    }

    /**
     * Reverse the migrations.
     * 
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personal_access_tokens');
    }
};
