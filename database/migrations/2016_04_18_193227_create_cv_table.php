<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCvTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cv', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cv_name', 100);
            $table->string('cv_surname', 100);
            $table->string('cv_midname', 100);
            $table->string('cv_email', 255);
            $table->string('cv_phone', 100);
            $table->tinyInteger('cv_male');
            $table->tinyInteger('cv_publish');
            $table->integer('cv_age');
            $table->string('cv_avatar', 255);
            $table->text('cv_edu_detail');
            $table->text('cv_exp_detail');
            $table->text('cv_skills_detail');
            $table->text('cv_personal_info');
            $table->string('cv_position_name', 255);
            $table->integer('cv_min_salary');
            $table->integer('cv_experience_id')->unsigned()->index();  
            $table->integer('cv_education_id')->unsigned()->index();
            $table->integer('cv_category_id')->unsigned()->index();
            $table->integer('cv_city_id')->unsigned()->index();
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
        Schema::drop('cv');
    }
}
