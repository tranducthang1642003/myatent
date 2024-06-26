<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        if (!Schema::hasTable('job_keywords')) {
            Schema::create('job_keywords', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('jobs_id');
                $table->unsignedBigInteger('keyword_id');
                $table->timestamps();
    
                // Define foreign key constraints
                $table->foreign('jobs_id')->references('id')->on('jobs')->onDelete('cascade');
                $table->foreign('keyword_id')->references('id')->on('keywords')->onDelete('cascade');
            });
        }
    }
    
    public function down()
    {
        Schema::dropIfExists('job_keywords');
    }
    
};
