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
        Schema::create('emplyees', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('address');
            $table->string('mobileNo');
            $table->string('dob');
            $table->string('nic');
            $table->string('role');
            $table->timestamps();
        });
    }
    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('emplyees');
    }
};
