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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->text("en_title");
            $table->text("ar_title");
            $table->text("en_excerpt")->nullable();
            $table->text("ar_excerpt")->nullable();
            $table->longText("en_content")->nullable();
            $table->longText("ar_content")->nullable();
            $table->string("image")->nullable();
            $table->bigInteger("category")->unsigned();
            $table->string("post_type");
            $table->bigInteger("post_parent")->unsigned()->default(0);
            $table->json("post_tags")->nullable();
            $table->json("post_settings")->nullable();
            $table->bigInteger("author")->unsigned();
            $table->integer("status");
            $table->integer("views")->default(0);
            $table->timestamps();


            $table->foreign('author')->references('id')->on('users')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('category')->references('id')->on('categories')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('post_type')->references('type_slug')->on('post_types')->constrained()->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
