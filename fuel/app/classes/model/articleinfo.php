<?php
use Orm\Model;

class Model_Articleinfo extends Model
{
	protected static $_properties = array(
		'id',
		'article_id',
		'site_title',
		'site_url',
		'title',
		'url',
		'description',
        'encoded',
		'date',
		'guid',
		'created_at',
		'updated_at',
	);

	protected static $_observers = array(
		'Orm\Observer_CreatedAt' => array(
			'events' => array('before_insert'),
			'mysql_timestamp' => false,
		),
		'Orm\Observer_UpdatedAt' => array(
			'events' => array('before_save'),
			'mysql_timestamp' => false,
		),
	);
}
