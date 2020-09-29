<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePracticesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('practices', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('doctor_id')->unsigned();
            $table->integer('specialty_id')->unsigned();

            $table->boolean('active')->default(true);
            $table->boolean('nzok')->default(false);
            $table->boolean('cash')->default(false);
            $table->boolean('children')->default(false);

            $table->string('floor')->nullable();
            $table->string('cabinet_number')->nullable();
            $table->string('phone_1')->nullable();
            $table->string('phone_1_internal')->nullable();
            $table->string('phone_2')->nullable();
            $table->string('phone_2_internal')->nullable();
            $table->string('phone_3')->nullable();
            $table->string('phone_3_internal')->nullable();
            $table->string('web_myhealth_address')->nullable();

            $table->text('description')->nullable();
            $table->text('additional_info')->nullable();
            $table->string('business_hours_start')->nullable();
            $table->string('business_hours_end')->nullable();

            $table->string('image_1')->nullable();
            $table->string('image_2')->nullable();
            $table->string('image_3')->nullable();
            $table->string('image_4')->nullable();
            $table->string('image_5')->nullable();

            $table->timestamps();
            $table->softDeletes();

            $table->foreign('doctor_id')->references('id')->on('doctors')->onDelete('cascade');
            $table->foreign('specialty_id')->references('id')->on('specialties');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('practices');
    }
}
