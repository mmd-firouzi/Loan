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
        Schema::table('loans', function (Blueprint $table) {
            $table->foreign(['fundID'], 'fKey')->references(['ID'])->on('funds')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['userID'], 'uKey')->references(['ID'])->on('users')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('loans', function (Blueprint $table) {
            $table->dropForeign('fKey');
            $table->dropForeign('uKey');
        });
    }
};
