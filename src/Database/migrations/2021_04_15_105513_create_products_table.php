<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('barcode')->unique();
            $table->string('name');
            $table->string('type');
            $table->timestamps();
            $table->softDeletes('deleted_at', 0);
            $table->bigInteger('parent_id')->unsigned()->nullable();
            $table->foreign('parent_id')->references('id')->on('products')->onDelete('cascade');
            $table->bigInteger('attribute_family_id')->unsigned()->nullable();
            $table->foreign('attribute_family_id')->references('id')->on('attribute_families')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
