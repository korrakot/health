<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('prefix_people');
            $table->string('name_people');
            $table->string('surname_people');
            $table->string('gender_people');
            $table->date('birthday_people');
            $table->string('status_people');
            $table->longText('address_people');
            $table->bigInteger('weight_people');
            $table->bigInteger('height_people');
            $table->bigInteger('age_people');
            $table->bigInteger('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('categories');
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
        Schema::dropIfExists('people');
    }
}
