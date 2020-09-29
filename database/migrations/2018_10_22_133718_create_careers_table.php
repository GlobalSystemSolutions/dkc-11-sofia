<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCareersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('careers', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('published')->default(false);
            $table->string('published_on');
			$table->string('published_on_string');

            $table->string('title', 150);
            $table->string('slug', 180)->unique();
            $table->integer('rating')->unsigned()->default(0);				

            $table->string('position');
			$table->text('body');
            $table->text('description')->nullable();
            $table->text('required_skills')->nullable();
            $table->text('advantages')->nullable();
            $table->text('position_offers')->nullable();
            $table->string('deadline')->nullable();
			$table->string('deadline_string')->nullable();
            $table->string('city')->nullable();
            $table->string('author')->nullable();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('careers');
    }
}
