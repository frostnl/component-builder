<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExtensionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('extensions', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('type');
            $table->date('creation_date');
            $table->string('author');
            $table->string('author_email');
            $table->string('author_url');
            $table->string('copyright');
            $table->string('license');
            $table->string('version');
            $table->text('description');
            $table->rememberToken();
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
        Schema::drop('extensions');
	}
}
