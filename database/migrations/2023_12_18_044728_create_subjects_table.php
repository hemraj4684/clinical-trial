<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subjects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->date('dob');
            $table->char('frequency',20);
            $table->tinyInteger('daily_category')->nullable();
            $table->timestamps();
        });

        Schema::create('cohorts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('subject_id');
            $table->char('name',20);
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
        Schema::dropIfExists('subjects');
        Schema::dropIfExists('cohort');
    }
}
