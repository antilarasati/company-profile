<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->id('id_about')->primary()->autoIncrement();
            $table->string('foto1', 50)->nullable();
            $table->string('foto2', 50)->nullable();
            $table->string('foto3', 50)->nullable();
            $table->string('foto4', 50)->nullable();
            $table->string('tahun_berdiri');
            $table->text('latar_belakang');
            $table->text('visi');
            $table->text('misi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abouts');
    }
};
