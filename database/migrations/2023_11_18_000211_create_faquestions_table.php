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
        Schema::create('faquestions', function (Blueprint $table) {
            $table->id();
            $table->string('user_name', 100)->nullable()->default('user');
            $table->string('email', 100)->nullable()->default('fakeMail@mail.com');
            $table->string('question', 400)->nullable()->default('what is fpt');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('faquestions');
    }
};
