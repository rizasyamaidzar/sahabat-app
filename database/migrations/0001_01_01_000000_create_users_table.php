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
            $table->string('username');
            $table->string('password');
            $table->enum('role', ['coach', 'player']);
            $table->boolean('status');
            $table->rememberToken();
            $table->timestamps();
        });
        Schema::create('programs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->longText('description');
            $table->longText('purpose');
            $table->string('cover');
            $table->json('img');
            $table->timestamps();
        });
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->string('day');
            $table->time('start_time');
            $table->time('end_time');
            $table->string('location');
            $table->foreignId('program_id')->constrained('programs')->onDelete('cascade');
            $table->timestamps();
        });
        Schema::create('players', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('school')->nullable();
            $table->string('number_phone')->nullable();
            $table->string('instagram')->nullable();
            $table->string('gender')->nullable();
            $table->string('place_of_birth')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('foto')->nullable();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('program_id')->constrained('programs')->onDelete('cascade');
            $table->timestamps();
        });
        Schema::create('coaches', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('number_phone')->nullable();
            $table->string('foto')->nullable();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('program_id')->constrained('programs')->onDelete('cascade');
            $table->timestamps();
        });
        Schema::create('badges', function (Blueprint $table) {
            $table->id();
            $table->integer('level')->nullable();
            $table->integer('point')->nullable();
            $table->string('foto')->nullable();
            $table->timestamps();
        });
        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
