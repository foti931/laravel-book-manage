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
        Schema::create('book_recommendations', function (Blueprint $table) {
            $table->id();
            $table->integer('book_id');
            $table->integer('user_id');
            $table->string('comment')->comment('コメント')->nullable();
            $table->tinyInteger('rate')->nullable();
            $table->timestamps();
            $table->comment('本のおすすめ');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('book_recommendations');
    }
};
