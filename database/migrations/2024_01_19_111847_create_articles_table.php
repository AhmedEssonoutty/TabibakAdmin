<?php

use App\Models\User;
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
            $table->foreignIdFor(User::class, 'author_id')->constrained('users')->cascadeOnDelete();
            $table->json('title');
            $table->json('content');
            $table->date('publish_date')->nullable();
            $table->foreignIdFor(User::class, 'publisher_id')->constrained('users')->cascadeOnDelete();
            $table->integer('views')->default(0);
            $table->integer('likes')->default(0);
            $table->integer('dislikes')->default(0);
            $table->integer('reports')->default(0);
            $table->boolean('is_active')->default(true);
            $table->softDeletes();
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
