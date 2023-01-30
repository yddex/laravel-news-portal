<?php
declare(strict_types=1);

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
        Schema::create('attachments', static function (Blueprint $table) {
            $table->id();
            $table->string('path');
            $table->string('size')->default(0);
            $table->string('disk')->default('public');
            $table->string('mime_type')->nullable();
            $table->timestamps();
            $table->foreignId('news_id')
                ->constrained('news')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('attachments');
    }
};
