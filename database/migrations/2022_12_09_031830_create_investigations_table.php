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
        Schema::create('investigations', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('title');
            $table->unsignedBigInteger('area_id');
            $table->unsignedBigInteger('category_id');
            $table->foreign('area_id')->references('id')->on('areas')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');

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
        Schema::dropIfExists('investigations');
    }
};