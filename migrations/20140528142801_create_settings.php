<?php defined('SYSPATH') or die('No direct script access.');

class create_settings extends Migration
{
	public function up()
	{
		DB::query(Database::UPDATE,
			"CREATE TABLE `settings` (
			  `name` varchar(255) NOT NULL,
			  `value` text,
			  `type` varchar(32) DEFAULT NULL,
			  `title` varchar(255) DEFAULT NULL,
			  `group` varchar(255) NOT NULL,
			  PRIMARY KEY (`name`)
			) ENGINE=MyISAM DEFAULT CHARSET=utf8;
				")
			->execute();
	}

	public function down()
	{
		$this->drop_table('settings');
	}
}