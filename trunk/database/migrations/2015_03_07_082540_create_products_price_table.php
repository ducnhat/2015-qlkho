<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsPriceTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('products_price', function(Blueprint $table)
		{
			$table->increments('id');
            $table->bigInteger('product')->unsigned();
            $table->integer('customer')->unsigned();
            $table->double('price')->default(0);
			$table->timestamps();
            $table->softDeletes();
            $table->foreign('product')->references('id')->on('products');
            $table->foreign('customer')->references('id')->on('customer');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('products_price');
	}

}
