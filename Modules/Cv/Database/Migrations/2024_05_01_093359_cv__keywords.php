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
        Schema::create('cv_keywords', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cvs_id');
            $table->unsignedBigInteger('keyword_id');
            $table->timestamps();

            // Define foreign key constraints
            $table->foreign('cvs_id')->references('id')->on('cvs')->onDelete('cascade');
            $table->foreign('keyword_id')->references('id')->on('keywords')->onDelete('cascade');
        });
    }
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cvs_keywords');
    }
};