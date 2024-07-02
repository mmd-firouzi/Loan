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
        Schema::create('loans', function (Blueprint $table) {
            $table->increments('ID');
            $table->unsignedInteger('userID')->index('ukey');
            $table->unsignedInteger('fundID')->index('fkey');
            $table->integer('loan_amount');
            $table->integer('payment_amount');
            $table->integer('interest');
            $table->integer('installment');
            $table->integer('installment_count');
            $table->timestamp('start_date');
            $table->string('info')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loans');
    }
};
