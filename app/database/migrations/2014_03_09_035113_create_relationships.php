<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRelationships extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('relationships',function($table){
			$table->integer('post_id')->unsigned();
			$table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');
			$table->integer('category_id')->unsigned();
			$table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
			$table->primary(array('post_id','category_id'));
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('relationships');
	}

}
