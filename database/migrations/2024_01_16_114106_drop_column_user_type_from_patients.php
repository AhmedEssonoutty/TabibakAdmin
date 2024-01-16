<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('patients', function (Blueprint $table) {
            $table->dropForeign(['user_type']);
            $table->dropColumn('user_type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('patients', function (Blueprint $table) {
            $table->unsignedBigInteger('user_type');
            $table->foreign('user_type')->references('id')->on('user_types')->constrained()->onUpdate('cascade')->onDelete('cascade');
        });
    }
};

