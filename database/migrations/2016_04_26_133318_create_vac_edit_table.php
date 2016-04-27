<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVacEditTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('vacancy', function (Blueprint $table) {
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
                  ->on('categories')
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
        Schema::table('vacancy', function (Blueprint $table) {
            //
        });
    }
}
