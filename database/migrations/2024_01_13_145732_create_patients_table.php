<?php

use App\Models\City;
use App\Models\UserType;
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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('mobile')->unique();
            $table->string('national_id')->unique();
            $table->date('birth_date');
            $table->enum('gender', ['male', 'female']);
            $table->string('image')->nullable();
            $table->enum('marital_status', ['single', 'engaged', 'married', 'divorced', 'widower']);
            $table->foreignIdFor(UserType::class, 'user_type')->constrained()->references('id')->onUpdate('cascade')->onDelete('cascade');
            $table->json('map_location');
            $table->longText('address');
            $table->foreignIdFor(City::class)->constrained()->references('id')->onUpdate('cascade')->onDelete('cascade');
            $table->json('facilities');
            $table->json('settings')->default('{"dark_mode":"on", "call_notifications":"off", "hide_personal_info":"on"}');
            $table->boolean('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
