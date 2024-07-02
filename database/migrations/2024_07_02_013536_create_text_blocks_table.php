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
        Schema::create('text_blocks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('novel_id')->references('id')->on('novels');
            $table->decimal('chapter');
            $table->string('slug');
            $table->decimal('volume');
            $table->string('title')->nullable();
            $table->text('content');
            $table->enum('status', ['update', 'revisi', 'mtl', 'spoiler']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('text_blocks');
    }
};
