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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->nullable();
            $table->string('email',255)->unique();
            $table->string('name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('college')->nullable();
            $table->string('apply_for')->nullable();
            $table->string('course')->nullable();
            $table->string('contact')->nullable();
            $table->string('placement_cname')->nullable();
            $table->string('password');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
