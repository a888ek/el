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
    public function up()
    {
       Schema::create('chalets', function (Blueprint $table) {
    $table->id();
    $table->string('name');
    $table->string('location');
    $table->string('price');
    $table->mediumText('image')->nullable();
    $table->string('capacity');
    $table->string('outdoor_sessions');
    $table->string('games');
    $table->string('chalet_area');
    $table->string('pool_area');
    $table->string('description');
    $table->string('email');
    $table->unsignedBigInteger('city_id'); // العمود الأجنبي هنا
    $table->foreign('city_id')->references('id')->on('cities')->onDelete('cascade');

    $table->timestamps();
});



    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chalets');
    }
};
