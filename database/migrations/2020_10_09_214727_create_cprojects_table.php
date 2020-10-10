<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCprojectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cprojects', function (Blueprint $table) {
            $table->increments('cproject_id');
            $table->string('cproject_name');
            $table->string('cproject_category');
            $table->string('cproject_image');
            $table->string('cproject_image1');
            $table->string('cproject_image2');
            $table->string('cproject_image3');
            $table->string('ccategory');
            $table->string('cclient');
            $table->string('cproject_date');
            $table->string('cproject_url');
            $table->integer('status')->nullable();
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
        Schema::dropIfExists('cprojects');
    }
}
