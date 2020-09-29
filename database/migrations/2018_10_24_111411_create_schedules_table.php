<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('activity_id')->unsigned();
            $table->integer('doctor_id')->unsigned();
            $table->integer('practice_id')->unsigned();

            $table->boolean('active')->default(true);
            $table->string('comment')->nullable();

            $table->string('even_dates_start')->nullable();
            $table->string('even_dates_end')->nullable();

            $table->string('odd_dates_start')->nullable();
            $table->string('odd_dates_end')->nullable();

            $table->string('everyday_start')->nullable();
            $table->string('everyday_end')->nullable();

            $table->string('monday_start')->nullable();
            $table->string('monday_end')->nullable();
            $table->string('tuesday_start')->nullable();
            $table->string('tuesday_end')->nullable();
            $table->string('wednesday_start')->nullable();
            $table->string('wednesday_end')->nullable();
            $table->string('thursday_start')->nullable();
            $table->string('thursday_end')->nullable();
            $table->string('friday_start')->nullable();
            $table->string('friday_end')->nullable();
            $table->string('saturday_start')->nullable();
            $table->string('saturday_end')->nullable();
            $table->string('sunday_start')->nullable();
            $table->string('sunday_end')->nullable();

            $table->timestamps();
            $table->softDeletes();

            $table->foreign('doctor_id')->references('id')->on('doctors')->onDelete('cascade');
            $table->foreign('activity_id')->references('id')->on('activities');
            $table->foreign('practice_id')->references('id')->on('practices');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('schedules');
    }
}
