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
        Schema::create('students', function (Blueprint $table) {
            $table->id('id');
            $table->string('email');
            $table->string('phone');
            $table->string('reg_no');
            $table->text('address');
            $table->string('aadhaar');
            $table->string('profile_pic')->nullable();

            // Add foreign key for class_id
            $table->unsignedBigInteger('class_id');
            $table->foreign('class_id')->references('cid')->on('add_classes');
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
