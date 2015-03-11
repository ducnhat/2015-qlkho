<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsQuantityTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('products_quantity', function(Blueprint $table)
		{
			$table->increments('id');
            $table->bigInteger('product')->unsigned();
            $table->bigInteger('quantity')->default(0);
			$table->timestamps();
            $table->softDeletes();
            $table->foreign('product')->references('id')->on('products');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('products_quantity');
	}

}
