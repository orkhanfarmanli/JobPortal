<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCvEditTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cv', function (Blueprint $table) {
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
                ->on('categories')
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
        Schema::table('cv', function (Blueprint $table) {
            //
        });
    }
}
