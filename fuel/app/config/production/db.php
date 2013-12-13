<?php
/**
 * The production database settings. These get merged with the global settings.
 */

return array(
	'default' => array(
    'type' => 'pdo',
		'connection'  => array(
			'dsn'        => 'mysql:host=localhost;dbname=fuel_prod;unix_socket=/var/lib/mysql/mysql.sock',
			'username'   => 'root',
			'password'   => '',
		),
    'charset' =>  'utf8',
	),
);
