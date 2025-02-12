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
    Schema::create('phones', function (Blueprint $table) {
        //Kode ini digunakan dalam migration Laravel untuk membuat tabel phones dalam database
        $table->id();
        $table->unsignedBigInteger('user_id');
        $table->string('phone');
        $table->timestamps();
        // adalah shortcut di Laravel untuk membuat kolom primary key otomatis.
        $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
    });
} 

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('phones');
    }
};
