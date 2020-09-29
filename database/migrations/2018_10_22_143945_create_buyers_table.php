<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBuyersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buyers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('buyer_type_id')->unsigned();
            $table->boolean('published')->default(false);
            $table->boolean('active')->default(true);
            $table->string('published_on');
			$table->string('published_on_string');

            $table->string('title', 150);
            $table->string('slug', 180)->unique();
			$table->text('body');
            $table->string('deadline')->nullable();
			$table->string('deadline_string')->nullable();
            $table->string('author')->nullable();

            $table->string('resource1')->nullable();
            $table->string('resource2')->nullable();
            $table->string('resource3')->nullable();
            $table->string('resource4')->nullable();
            $table->string('resource5')->nullable();
            $table->string('resource6')->nullable();
            $table->string('resource7')->nullable();
            $table->string('resource8')->nullable();
            $table->string('resource9')->nullable();
            $table->string('resource10')->nullable();

            $table->timestamps();
            $table->softDeletes();

            $table->foreign('buyer_type_id')->references('id')->on('buyer_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('buyers');
    }
}
