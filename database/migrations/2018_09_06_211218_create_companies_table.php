<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->string('image')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('name_company')->nullable();
            $table->string('company_age')->nullable();
            $table->string('profession')->nullable();
            $table->string('category')->nullable();
            // $table->unsignedInteger('category_id');
            // $table->foreign('category_id')->references('id')->on('categories');
            $table->text('description')->nullable();
            $table->integer('employees')->nullable();

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
        Schema::dropIfExists('companies');
    }
}
