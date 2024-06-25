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
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fname');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('phone')->unique();
            $table->string('username')->unique();
            $table->string('password');
            $table->string('city');
            $table->integer('role');
            $table->string('country');
            $table->string('in_fullname')->nullable();
            $table->string('in_position')->nullable();
            $table->string('in_email')->nullable();
            $table->string('in_phone')->nullable();
            $table->string('legalname')->nullable();
            $table->string('tradingname')->nullable();
            $table->string('regNmber')->nullable();
            $table->string('regDate')->nullable();
            $table->string('vat')->nullable();
            $table->string('companylink')->nullable();
            $table->string('corWeb')->nullable();
            $table->string('companyEmail')->nullable();
            $table->string('directors')->nullable();
            $table->string('emp')->nullable();
            $table->string('incorporationCountry')->nullable();
            $table->string('regAdd')->nullable();
            $table->string('regCity')->nullable();
            $table->string('regState')->nullable();
            $table->string('regPostCode')->nullable();
            $table->string('opCountry')->nullable();
            $table->string('opAdd')->nullable();
            $table->string('opCity')->nullable();
            $table->string('opState')->nullable();
            $table->string('opPostCode')->nullable();
            $table->string('industry')->nullable();
            $table->string('serviceDes')->nullable();
            $table->string('salesChannel')->nullable();
            $table->string('webURL1')->nullable();
            $table->string('webURL2')->nullable();
            $table->string('webURL3')->nullable();
            $table->string('other')->nullable();
            $table->integer('businessYears')->nullable();
            $table->string('licence')->nullable();
            $table->string('regAuthority')->nullable();
            $table->string('regAuthCountry')->nullable();
            $table->string('regAuthNmbr')->nullable();
            $table->string('refName')->nullable();
            $table->text('refDetails')->nullable();
            $table->string('idFile')->nullable();
            $table->string('billFile')->nullable();
            $table->string('incorporationFile')->nullable();
            $table->string('memorandumFile')->nullable();
            $table->string('resolutionFile')->nullable();
            $table->string('confirm1')->nullable();
            $table->string('confirm1Details')->nullable();
            $table->string('confirm2')->nullable();
            $table->string('confirm2Details')->nullable();
            $table->string('sign')->nullable();
            $table->string('position')->nullable();
            $table->string('dateAndPlace')->nullable();
            $table->integer('status')->default(0);
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
