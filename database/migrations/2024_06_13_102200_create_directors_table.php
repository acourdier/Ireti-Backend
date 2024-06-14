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
            $table->string('dirName');
            $table->string('dirCountry');
            $table->string('dirAddress');
            $table->string('dirCity');
            $table->string('dirPostcode');
            $table->string('dirDOB');
            $table->string('dirPassport');
            $table->string('dirExp');
            $table->string('dirNationality');
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
