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
        Schema::create('user_fund', function (Blueprint $table) {
            $table->unsignedInteger('userID');
            $table->unsignedInteger('fundID')->index('fundid');
            $table->timestamp('join_date');
            $table->integer('Balance');

            $table->primary(['userID', 'fundID']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_fund');
    }
};
