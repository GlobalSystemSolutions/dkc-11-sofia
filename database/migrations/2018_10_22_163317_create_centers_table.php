<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCentersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('centers', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('active')->default(true);

            $table->string('name');
            $table->string('name_short')->nullable();
            $table->integer('medical_base')->default(0);

            $table->string('post_code');
            $table->string('city');
            $table->string('district')->nullable();
            $table->string('section')->nullable();
            $table->string('street');
            $table->string('street_number');
            $table->string('additional_address_info')->nullable();
            $table->string('lat');
            $table->string('lng');

            $table->string('web_address');
            $table->string('web_myhealth_address')->nullable();
            $table->string('email');
            $table->string('social_fb')->nullable();
            $table->string('social_gplus')->nullable();
            $table->string('social_twitter')->nullable();
            $table->string('social_youtube')->nullable();

            $table->string('manager');
            $table->string('accountant')->nullable();
            $table->string('senior_nurse_1')->nullable();
            $table->string('senior_nurse_2')->nullable();
            $table->string('senior_nurse_3')->nullable();

            $table->string('phone_manager')->nullable();
            $table->string('phone_accountant')->nullable();
            $table->string('phone_senior_nurse_1')->nullable();
            $table->string('phone_senior_nurse_2')->nullable();
            $table->string('phone_senior_nurse_3')->nullable();
            $table->string('phone_registry_1')->nullable();
            $table->string('phone_registry_2')->nullable();
            $table->string('phone_registry_3')->nullable();
            $table->string('fax')->nullable();

            $table->string('business_hours_start')->nullable();
            $table->string('business_hours_end')->nullable();
            $table->string('visiting_hours_start')->nullable();
            $table->string('visiting_hours_end')->nullable();
            $table->string('non_working_days')->nullable();

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
        Schema::dropIfExists('centers');
    }
}
