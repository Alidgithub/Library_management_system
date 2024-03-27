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
        Schema::table('bysales', function (Blueprint $table) {
            $table->unsignedBigInteger('st_id')->after('id');

            $table->foreign('st_id')->references('id')->on('students');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('bysales', function (Blueprint $table) {
            $table->dropForeign(['st_id']);
            $table->dropColumn('st_id');
        });
    }
};
