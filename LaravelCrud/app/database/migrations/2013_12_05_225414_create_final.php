<?php

use Illuminate\Database\Migrations\Migration;

class CreateFinal extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//Schema::drop("Epicerie");

		Schema::create("Equipes", function($table)
		{
			$table->increments("id");
			$table->string("Nom");
			$table->float("PctGain");
		});		

		Schema::create("PartieHistoriques", function($table)
		{
			$table->increments("id");
			$table->smallInteger("Win");
			$table->smallInteger("Lose");
			$table->date("TheDate");
		});		

		Schema::create("PartieFutures", function($table)
		{
			$table->increments("id");
			$table->smallInteger("Home");
			$table->smallInteger("Away");
			$table->date("TheDate");
			$table->Boolean("Completee");
		});
		
		Schema::create("Users", function($table)
		{
			$table->increments("id");
			$table->string("Email");
			$table->string("Password");
			$table->integer("Jetons");
		});
		
		Schema::create("Encheres", function($table)
		{
			$table->increments("id");
			$table->integer("idUsers");
			$table->integer("idPartie");
			$table->integer("idEquipe");
			$table->integer("Mises");
			$table->integer("MisesVictoire");
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
		//Schema::drop("Encheres");
		//Schema::drop("Users");
		//Schema::drop("PartiesFuture");
		//Schema::drop("PartiesHistorique");
		//Schema::drop("Equipes");
	}
}