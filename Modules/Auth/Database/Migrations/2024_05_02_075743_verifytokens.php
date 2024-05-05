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
        if (!Schema::hasTable('verifytokens')) {
            Schema::create('verifytokens', function (Blueprint $table) {
                $table->id();
                $table->string('email')->nullable();
                $table->string('token')->unique();
                $table->tinyInteger('is_activated')->default(0);
                $table->timestamps();
            });
        }
    }
    
    public function down()
    {
        Schema::dropIfExists('verifytokens');
    }
    
};
