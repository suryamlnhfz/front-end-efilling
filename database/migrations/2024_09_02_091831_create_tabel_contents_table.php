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
            $table->string('kolom1')->default('tidak ada');
            $table->string('kolom2')->default('tidak ada');
            $table->string('kolom3')->default('tidak ada');
            $table->string('kolom4')->default('tidak ada');
            $table->string('kolom5')->default('tidak ada');
            $table->string('baris1')->default('tidak ada');
            $table->string('baris2')->default('tidak ada');
            $table->string('baris3')->default('tidak ada');
            $table->string('baris4')->default('tidak ada');
            $table->string('baris5')->default('tidak ada');
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
