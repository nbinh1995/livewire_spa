<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttrValueProductAttrTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attr_value_product_attr_tables', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_attr_id');
            $table->unsignedBigInteger('attr_value_id');
            $table->foreign('attr_value_id')->references('id')->on('attribute_values')->onDelete('cascade');
            $table->foreign('product_attr_id')->references('id')->on('product_attributes')->onDelete('cascade');
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
        Schema::dropIfExists('attr_value_product_attr_tables');
    }
}
