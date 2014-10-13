<?php
/**
 * The development database settings. These get merged with the global settings.
 */

return array(
    /*
	'default' => array(
		'connection'  => array(
			'dsn'        => 'mysql:host=localhost;dbname=fuel_dev',
			'username'   => 'root',
			'password'   => 'root',
		),
	),
    */
    'default' => array(
        'connection' => array(
            'hostname' => 'localhost',
            'port'     => '3306',
            'database' => 'matome',
            'username' => 'matome',
            'password' => 'matome',
        ),
    ),
);
