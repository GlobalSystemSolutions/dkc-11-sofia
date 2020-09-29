<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCampaignsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campaigns', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('published')->default(false);
            $table->string('published_on');
			$table->string('published_on_string');

            $table->string('title', 150);
            $table->string('slug', 180)->unique();
            $table->text('body_short')->nullable();
            $table->text('body');

            $table->string('author')->nullable();
            $table->string('photographer')->nullable();

            $table->string('resource1')->nullable();
            $table->string('resource2')->nullable();
            $table->string('resource3')->nullable();
            $table->string('resource4')->nullable();
            $table->string('resource5')->nullable();

            $table->string('image_cover')->nullable();
            $table->string('image1')->nullable();
            $table->string('image2')->nullable();
            $table->string('image3')->nullable();
            $table->string('image4')->nullable();
            $table->string('image5')->nullable();
            $table->string('image6')->nullable();
            $table->string('image7')->nullable();
            $table->string('image8')->nullable();
            $table->string('image9')->nullable();
            $table->string('image10')->nullable();

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
        Schema::dropIfExists('campaigns');
    }
}
