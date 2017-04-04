<?php

use Illuminate\Database\Capsule\Manager as DB;

class m170404_081044_create_clients_table extends CDbMigration
{
	public function up()
	{
		
		DB::schema()->create('clients', function($table)
		{
		    $table->increments('id');
		    $table->string('name');
		    $table->timestamps();
		});
		
	}

	public function down()
	{
		return false;
	}

}