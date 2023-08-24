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
        Schema::create('saksi', function (Blueprint $table) {
            $table->id();
            $table->string('nama_saksi');
            $table->string('username');
            $table->string('password');
            $table->unsignedBigInteger('koordinator_id');           
            $table->timestamps();

            $table->foreign('koordinator_id')->references('id')->on('koordinator');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('saksi');
    }
};
