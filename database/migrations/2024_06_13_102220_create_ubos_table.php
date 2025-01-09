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
        Schema::create('ubos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('userid');
            $table->string('uboName')->nullable();
            $table->string('uboCountry')->nullable();
            $table->string('uboAddress')->nullable();
            $table->string('uboCity')->nullable();
            $table->string('uboPostcode')->nullable();
            $table->string('uboDOB')->nullable();
            $table->string('uboPassport')->nullable();
            $table->string('uboExp')->nullable();
            $table->string('uboNationality')->nullable();
            $table->string('uboShare')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ubos');
    }
};
