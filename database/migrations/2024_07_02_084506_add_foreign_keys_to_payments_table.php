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
        Schema::table('payments', function (Blueprint $table) {
            $table->foreign(['fundID'], 'fundKey')->references(['ID'])->on('funds')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['loanID'], 'lKey')->references(['ID'])->on('loans')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['userID'], 'userKey')->references(['ID'])->on('users')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('payments', function (Blueprint $table) {
            $table->dropForeign('fundKey');
            $table->dropForeign('lKey');
            $table->dropForeign('userKey');
        });
    }
};
