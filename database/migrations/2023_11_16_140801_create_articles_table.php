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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();

            $table->foreignId('categor_id')
                  ->nullable()
                  ->constrained(table:'categors', indexName:'fk_categ_article')
                  ->onDelete('set null')
                  ->onUpdate('cascade');

            $table->string('name', 100)->nullable()->default('Article');
            $table->string('adress');
            $table->bigInteger('clicks')->nullable()->default(1);
            $table->string('tag_name')->nullable()->default('article');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
