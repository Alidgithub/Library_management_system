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
            $table->date('submit_date')->nullable()->after('book_id');
        });

        Schema::table('bysales', function (Blueprint $table) {
            $table->string('qty')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('bysales', function (Blueprint $table) {
            $table->dropColumn('submit_date');
            $table->dropColumn('qty');
        });
        


    }
};
