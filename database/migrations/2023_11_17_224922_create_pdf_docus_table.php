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
        Schema::create('pdf_docus', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100)->nullable()->default('ducument pdf');
            $table->string('auther', 200)->nullable()->default('ont');
            $table->string('adress', 200)->nullable()->default('no link');
            $table->bigInteger('nbr_download')->nullable()->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pdf_docus');
    }
};
