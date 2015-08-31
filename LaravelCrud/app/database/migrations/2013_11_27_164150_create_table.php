<?php

use Illuminate\Database\Migrations\Migration;

class CreateTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create("Epicerie", function($table)
		{
			$table->increments("id");
			$table->string("item");
			$table->smallInteger("qte")->unsigned();
			$table->boolean("Achete");	
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//Schema::drop("Epicerie");
	}

}