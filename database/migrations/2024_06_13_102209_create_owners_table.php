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
        Schema::create('owners', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('userid');
            $table->string('ownerName')->nullable();
            $table->string('ownerCountry')->nullable();
            $table->string('ownerAddress')->nullable();
            $table->string('ownerCity')->nullable();
            $table->string('ownerPostcode')->nullable();
            $table->string('ownerDOB')->nullable();
            $table->string('ownerPassport')->nullable();
            $table->string('ownerExp')->nullable();
            $table->string('ownerNationality')->nullable();
            $table->string('ownerShare')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('owners');
    }
};
