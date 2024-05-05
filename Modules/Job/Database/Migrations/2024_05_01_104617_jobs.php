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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('locations');
            $table->string('company');
            $table->double('quantity');
            $table->string('work');
            $table->string('address'); // Changed from 'addresss'
            $table->string('contract');
            $table->string('skill');
            $table->string('experience');
            $table->string('career');
            $table->double('wage');
            $table->boolean('salary')->default(false); // Changed from 'salary'
            $table->string('jobdescription');
            $table->string('link');
            $table->string('status')->default('Đang tuyển');
            $table->rememberToken();
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('jobs');
        Schema::enableForeignKeyConstraints();
    }
    
};
