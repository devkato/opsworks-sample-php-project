<?php
/**
 * The production database settings. These get merged with the global settings.
 */

return array(
	'default' => array(
    'type' => 'pdo',
		'connection'  => array(
			'dsn'        => 'mysql:host=mydbinstance.cl2ngqe4p8v9.ap-northeast-1.rds.amazonaws.com;dbname=fuel_prod',
			'username'   => 'netprice',
			'password'   => 'naruhaya',
		),
    'charset' =>  'utf8',
	),
);
