<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ads', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('category');
            $table->string('subcategory')->nullable();
            $table->string('title');
            $table->text('description');
            $table->float('price',8,2)->nullable();
            $table->text('imagen_1')->nullable();
            $table->text('imagen_2')->nullable();
            $table->text('imagen_3')->nullable();
            $table->text('video')->nullable();
            $table->string('state')->nullable();
            $table->string('city')->nullable();
            $table->boolean('status')->default(true);
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
        Schema::dropIfExists('ads');
    }
}
