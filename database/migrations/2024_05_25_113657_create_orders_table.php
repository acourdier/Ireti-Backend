<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use PhpParser\Node\NullableType;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('userid');
            $table->integer('status');
            $table->string('FundType');
            $table->string('currencytb')->nullable();
            $table->string('amountb')->nullable();
            $table->string('currencyts')->nullable();
            $table->string('amountts')->nullable();
            $table->string('targetp')->nullable();
            $table->string('underlying')->nullable();
            $table->string('country')->nullable();
            $table->string('grade')->nullable();
            $table->string('buysell')->nullable();
            $table->string('quantity')->nullable();
            $table->string('unit')->nullable();
            $table->string('filled')->nullable();
            $table->string('Incoterm')->nullable();
            $table->text('details')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
