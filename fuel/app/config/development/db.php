<?php
/**
 * The development database settings. These get merged with the global settings.
 */

return array(
	'default' => array(
    'type' => 'pdo',
		'connection'  => array(
			'dsn'        => 'mysql:host=localhost;dbname=fuel_dev;unix_socket=/tmp/mysql.sock',
			'username'   => 'root',
			'password'   => '',
		),
    'charset' =>  'utf8',
	),
);
