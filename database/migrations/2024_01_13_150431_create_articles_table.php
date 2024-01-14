<?php

use App\Models\Doctor;
use App\Models\Specialist;
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
            $table->foreignIdFor(Specialist::class);
            $table->foreignIdFor(Doctor::class);
            $table->text('image');
            $table->text('article_en_title');
            $table->text('article_ar_title');
            $table->text('article_en_subtitle');
            $table->text('article_ar_subtitle');
            $table->longText('article_en_content');
            $table->longText('article_ar_content');
            $table->boolean('status')->default(1);
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
