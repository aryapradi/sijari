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
        Schema::create('caleg', function (Blueprint $table) {
            $table->id();
            $table->string('nama_caleg');
            $table->unsignedBigInteger('partai_id');
            $table->timestamps();

            $table->foreign('partai_id')->references('id')->on('partai');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('caleg');
    }
};
