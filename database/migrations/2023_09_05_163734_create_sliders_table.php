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
        Schema::create('sliders', function (Blueprint $table) {
            $table->id();
            $table->string("slider_en_title");
            $table->string("slider_ar_title");
            $table->string("bg_image")->nullable();
            $table->bigInteger("category")->unsigned();
            $table->timestamps();

            $table->foreign('category')->references('id')->on('categories')->constrained()->onUpdate('cascade')->onDelete('cascade');
        });

        
        Schema::create('slides', function (Blueprint $table) {
            $table->id();
            $table->string("slide_en_title");
            $table->string("slide_ar_title");
            $table->longText("slide_en_excerpt")->nullable();
            $table->longText("slide_ar_excerpt")->nullable();
            $table->string("image");
            $table->longText("cta_target")->nullable();
            $table->integer("cta_clicks")->nullable()->default(0);
            $table->bigInteger("slider_id")->unsigned();
            $table->timestamps();

            $table->foreign('slider_id')->references('id')->on('sliders')->constrained()->onUpdate('cascade')->onDelete('cascade');
        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sliders');
        Schema::dropIfExists('slides');
    }
};
