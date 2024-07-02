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
        Schema::table('user_fund', function (Blueprint $table) {
            $table->foreign(['userID'], 'user_fund_ibfk_1')->references(['ID'])->on('users')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['fundID'], 'user_fund_ibfk_2')->references(['ID'])->on('funds')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('user_fund', function (Blueprint $table) {
            $table->dropForeign('user_fund_ibfk_1');
            $table->dropForeign('user_fund_ibfk_2');
        });
    }
};
