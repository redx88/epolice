<?php

// This is the database connection configuration.
return array(
	//'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
	// uncomment the following lines to use a MySQL database
	
	'db'=>array(
		'connectionString' => 'mysql:host=localhost;dbname=epoliceclearance',
		'emulatePrepare' => true,
		'username' => 'root',
		'password' => '',
		'charset' => 'utf8',
		//'tablePrefix' => '',
	),
	
	'phAddressDb'=>array(
		'connectionString'=>'mysql:host=localhost;dbname=epolicephaddress',
		'username' => 'root	',
		'password' => '',
		'class'=>'CDbConnection',
		'charset' => 'utf8',
		//'tablePrefix' => '',
	),
	
);
