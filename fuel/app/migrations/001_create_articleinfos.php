<?php

namespace Fuel\Migrations;

class Create_articleinfos
{
	public function up()
	{
		\DBUtil::create_table('articleinfos', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true),
			'article_id' => array('constraint' => 50, 'type' => 'varchar', 'unique' => true),
			'site_title' => array('constraint' => 100, 'type' => 'varchar'),
			'site_url' => array('constraint' => 100, 'type' => 'varchar'),
			'title' => array('constraint' => 100, 'type' => 'varchar'),
			'url' => array('constraint' => 500, 'type' => 'varchar'),
			'description' => array('constraint' => 500, 'type' => 'varchar'),
			'date' => array('type' => 'timestamp'),
			'guid' => array('constraint' => 100, 'type' => 'varchar'),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('articleinfos');
	}
}