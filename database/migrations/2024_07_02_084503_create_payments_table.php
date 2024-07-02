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
        Schema::create('payments', function (Blueprint $table) {
            $table->unsignedInteger('userID');
            $table->unsignedInteger('loanID')->index('lkey');
            $table->unsignedInteger('fundID')->index('fundkey');
            $table->integer('amount');
            $table->timestamp('pay_date');
            $table->string('payment_type');
            $table->string('info')->nullable();

            $table->primary(['userID', 'fundID', 'loanID']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
