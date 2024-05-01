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
        Schema::create('job_keywords', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('jobs_id');
            $table->unsignedBigInteger('keyword_id'); 
            $table->timestamps();

            $table->foreign('jobs_id')->references('id')->on('jobs')->onDelete('cascade');
            $table->foreign('keyword_id')->references('id')->on('keywords')->onDelete('cascade'); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs_keywords');
    }
};
