<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Vacancy extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vacancy', function (Blueprint $table) {
            $table->increments('id');
            $table->string('vac_email', 255);
            $table->string('vac_phone', 100);
            $table->string('vac_position', 100);
            $table->integer('vac_min_salary');
            $table->integer('vac_max_salary');
            $table->integer('vac_min_age');
            $table->integer('vac_max_age');
            $table->text('vac_requirements');
            $table->text('vac_job_description');
            $table->text('cv_skills_detail');
            $table->text('cv_personal_info');
            $table->string('vac_company_name', 255);
            $table->string('vac_contact', 255);
            $table->integer('vac_experience_id')->unsigned();
            $table->integer('vac_education_id')->unsigned();
            $table->integer('vac_category_id')->unsigned();
            $table->integer('vac_city_id')->unsigned();
            $table->timestamps();

            $table->foreign('vac_experience_id')
                  ->references('id')
                  ->on('experience')
                  ->onDelete('cascade');
            $table->foreign('vac_education_id')
                  ->references('id')
                  ->on('education')
                  ->onDelete('cascade');
            $table->foreign('vac_category_id')
                  ->references('id')
                  ->on('subcategories')
                  ->onDelete('cascade');
            $table->foreign('vac_city_id')
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
        Schema::drop('vacancy');
    }
}
