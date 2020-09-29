<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('active')->default(true);
            $table->string('uin')->nullable();

            $table->string('title_academic')->nullable();
            $table->string('title_professional')->nullable();
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name');
            $table->string('full_name');
            $table->string('slug', 150)->unique();

            $table->text('general_information')->nullable();
            $table->text('education')->nullable();
            $table->text('qualifications')->nullable();
            $table->text('biography')->nullable();

            $table->string('email')->nullable();
            $table->string('web_address')->nullable();
            $table->string('web_myhealth_address')->nullable();
            $table->string('social_fb')->nullable();
            $table->string('social_gplus')->nullable();
            $table->string('social_twitter')->nullable();
            $table->string('social_youtube')->nullable();

            $table->string('phone_1')->nullable();
            $table->string('phone_2')->nullable();
            $table->string('phone_3')->nullable();

            $table->string('profile_image')->nullable();
            $table->string('image_1')->nullable();
            $table->string('image_2')->nullable();
            $table->string('image_3')->nullable();
            $table->string('image_4')->nullable();
            $table->string('image_5')->nullable();
            $table->string('image_6')->nullable();
            $table->string('image_7')->nullable();
            $table->string('image_8')->nullable();
            $table->string('image_9')->nullable();
            $table->string('image_10')->nullable();

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
        Schema::dropIfExists('doctors');
    }
}
