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
        Schema::create('post_types', function (Blueprint $table) {
            $table->id();
            $table->string("type_slug")->unique();
            $table->string("type_en_name")->unique();
            $table->string("type_ar_name")->unique();
            $table->timestamps();
        });
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string("category_en_name")->unique();
            $table->string("category_ar_name")->unique();
            $table->string("post_type");
            $table->bigInteger("cat_parent")->default(0);
            $table->string("cat_image")->nullable();
            $table->timestamps();
            $table->foreign('post_type')->references('type_slug')->on('post_types')->constrained()->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
        Schema::dropIfExists('post_types');
    }
};
