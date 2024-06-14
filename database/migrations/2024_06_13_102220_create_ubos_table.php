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
            $table->string('uboName');
            $table->string('uboCountry');
            $table->string('uboAddress');
            $table->string('uboCity');
            $table->string('uboPostcode');
            $table->string('uboDOB');
            $table->string('uboPassport');
            $table->string('uboExp');
            $table->string('uboNationality');
            $table->string('uboShare');
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
