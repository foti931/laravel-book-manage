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
        Schema::create('authors', function (Blueprint $table) {
            $table->id();
            $table->string('last_name')->comment('苗字')->nullable();
            $table->string('first_name')->comment('名前')->nullable();
            $table->string('middle_name')->comment('ミドルネーム')->nullable();
            $table->string('last_name_kana')->comment('苗字カナ')->nullable();
            $table->string('first_name_kana')->comment('名前カナ')->nullable();
            $table->string('middle_name_kana')->comment('ミドルネームカナ')->nullable();
            $table->date('birth_day')->comment('誕生日')->nullable();
            $table->string('memo')->nullable();
            $table->timestamps();
            $table->comment('著者');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('authors');
    }
};
