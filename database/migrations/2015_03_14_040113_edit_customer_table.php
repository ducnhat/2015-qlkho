<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EditCustomerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('customer', function(Blueprint $table){
            $table->string('address')->nullable();
            $table->string('phonenumber', 11)->nullable();
            $table->string('email')->nullable();
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::table('customer', function(Blueprint $table){
            $table->dropColumn('address');
        });
	}

}
