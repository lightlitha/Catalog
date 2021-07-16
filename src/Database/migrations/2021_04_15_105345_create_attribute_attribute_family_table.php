<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttributeAttributeFamilyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attribute_attribute_family', function (Blueprint $table) {
            $table->bigInteger('attribute_id')->unsigned()->nullable();
            $table->foreign('attribute_id')->references('id')->on('attributes');
            $table->bigInteger('attribute_family_id')->unsigned()->nullable();
            $table->foreign('attribute_family_id')->references('id')->on('attribute_families');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attribute_attribute_family');
    }
}
