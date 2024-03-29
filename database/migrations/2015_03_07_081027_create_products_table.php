<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('products', function(Blueprint $table){
            $table->bigIncrements('id');
            $table->string('product_name');
            $table->string('name');
            $table->integer('brand')->unsigned();
            $table->integer('type')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('brand')->references('id')->on('taxonomy');
            $table->foreign('type')->references('id')->on('taxonomy');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('products');
	}

}
