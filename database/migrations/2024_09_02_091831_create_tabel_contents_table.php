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
        Schema::create('tabel_contents', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('surat_masuk_id');
            $table->foreign('surat_masuk_id')->references('id')->on('surat_masuks')->onDelete('cascade')->onUpdate('cascade');
            $table->string('kolom1');
            $table->string('kolom2');
            $table->string('kolom3');
            $table->string('kolom4');
            $table->string('kolom5');
            $table->string('baris1');
            $table->string('baris2');
            $table->string('baris3');
            $table->string('baris4');
            $table->string('baris5');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tabel_contents');
    }
};
