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
        Schema::create('faqanswers', function (Blueprint $table) {
            $table->id();

            $table->foreignId('faquestion_id')
            ->constrained(table:'faquestions', indexName:'fk_faqust_ans_id')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->string('answer', 400)->nullable()->default('font promotion tourisme');

            $table->foreignId('user_id')
            ->nullable()
            ->constrained(table:'users', indexName:'fk_user_ans_id')
            ->onDelete('set null')
            ->onUpdate('cascade');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('faqanswers');
    }
};
