<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWprojectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wprojects', function (Blueprint $table) {
            $table->increments('wproject_id');
            $table->string('wproject_name');
            $table->string('wproject_category');
            $table->string('wproject_image');
            $table->string('wproject_image1');
            $table->string('wproject_image2');
            $table->string('wproject_image3');
            $table->string('wcategory');
            $table->string('wclient');
            $table->string('wproject_date');
            $table->string('wproject_url');
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
        Schema::dropIfExists('wprojects');
    }
}
