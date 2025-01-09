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
        Schema::create('directors', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('userid');
            $table->string('dirName')->nullable();
            $table->string('dirCountry')->nullable();
            $table->string('dirAddress')->nullable();
            $table->string('dirCity')->nullable();
            $table->string('dirPostcode')->nullable();
            $table->string('dirDOB')->nullable();
            $table->string('dirPassport')->nullable();
            $table->string('dirExp')->nullable();
            $table->string('dirNationality')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('directors');
    }
};
