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
        Schema::create('funds', function (Blueprint $table) {
            $table->increments('ID');
            $table->string('fund_name');
            $table->string('admin_name');
            $table->integer('total_amount');
            $table->timestamp('create_date');
            $table->integer('entry');
            $table->integer('monthly_pay');
            $table->bigInteger('bank_account');
            $table->integer('max_member');
            $table->string('info')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('funds');
    }
};
