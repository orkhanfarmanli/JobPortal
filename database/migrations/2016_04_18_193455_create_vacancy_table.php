<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVacancyTable extends Migration
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
            $table->integer('vac_experience_id')->unsigned()->index();
            $table->integer('vac_education_id')->unsigned()->index();
            $table->integer('vac_category_id')->unsigned()->index();
            $table->integer('vac_city_id')->unsigned()->index();
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
        Schema::drop('vacancy');
    }
}
