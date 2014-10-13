<?php

namespace Fuel\Migrations;

class Add_field_encoded_to_articleinfos
{
	public function up()
	{
		\DBUtil::add_fields('articleinfos', array(
			'encoded' => array('constraint' => 500, 'type' => 'varchar'),

		));
	}

	public function down()
	{
		\DBUtil::drop_fields('articleinfos', array(
			'encoded'

		));
	}
}