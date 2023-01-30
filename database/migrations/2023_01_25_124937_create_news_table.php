<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('news', static function (Blueprint $table) {
            $table->id('id');
            $table->string('title');
            $table->string('description');
            $table->text('content');
            $table->softDeletes();
            $table->timestamps();
            $table->foreignId('user_id')->constrained('users')
                  ->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('news');
    }
};
