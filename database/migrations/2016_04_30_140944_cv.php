<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Cv extends Migration
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
            $table->string('cv_phone1', 100);
            $table->string('cv_phone2', 100);
            $table->tinyInteger('cv_premium');
            $table->integer('cv_min_salary');
            $table->integer('cv_experience_id')->unsigned();  
            $table->integer('cv_education_id')->unsigned();
            $table->integer('cv_category_id')->unsigned();
            $table->integer('cv_city_id')->unsigned();
            $table->timestamps();

            $table->foreign('cv_experience_id')
                ->references('id')
                ->on('experience')
                ->onDelete('cascade');  
            $table->foreign('cv_education_id')
                ->references('id')
                ->on('education')
                ->onDelete('cascade');
                $table->foreign('cv_category_id')
                ->references('id')
                ->on('subcategories')
                ->onDelete('cascade');
            $table->foreign('cv_city_id')
                ->references('id')
                ->on('city')
                ->onDelete('cascade');
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
