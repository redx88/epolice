<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');
Yii::setPathOfAlias('bootstrap', dirname(__FILE__).'/../extensions/bootstrap');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.

$params = array_merge(
    require(__DIR__ . '/database.php'),
    require(__DIR__ . '/components.php')
);

return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'E-Clearance MIS',

	'theme'=>'abound',

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
		/* import for User module */
		    'application.modules.user.models.*',
        'application.modules.user.components.*',
		/* import for Rights module */
        'application.modules.rights.*',
        'application.modules.rights.components.*',
    /* import for Clearance module */
        'application.modules.clearance.models.*',

	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool
		'clearance',
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'epolice',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),
		'phaddress',
		
		'user'=>array(
                'tableUsers' => 'users',
                'tableProfiles' => 'profiles',
                'tableProfileFields' => 'profiles_fields',
                     # encrypting method (php hash function)
                'hash' => 'md5',
 
                # send activation email
                'sendActivationMail' => true,
 
                # allow access for non-activated users
                'loginNotActiv' => false,
 
                # activate user on registration (only sendActivationMail = false)
                'activeAfterRegister' => false,
 
                # automatically login from registration
                'autoLogin' => true,
 
                # registration path
                'registrationUrl' => array('/user/registration'),
 
                # recovery password path
                'recoveryUrl' => array('/user/recovery'),
 
                # login form path
                'loginUrl' => array('/user/login'),
 
                # page after login
                'returnUrl' => array('/user/profile'),
 
                # page after logout
                'returnLogoutUrl' => array('/user/login'),
        ),
 
        //Modules Rights
   'rights'=>array(
 
               'superuserName'=>'Admin', // Name of the role with super user privileges. 
               'authenticatedName'=>'Authenticated',  // Name of the authenticated user role. 
               'userIdColumn'=>'id', // Name of the user id column in the database. 
               'userNameColumn'=>'username',  // Name of the user name column in the database. 
               'enableBizRule'=>true,  // Whether to enable authorization item business rules. 
               'enableBizRuleData'=>true,   // Whether to enable data for business rules. 
               'displayDescription'=>true,  // Whether to use item description instead of name. 
               'flashSuccessKey'=>'RightsSuccess', // Key to use for setting success flash messages. 
               'flashErrorKey'=>'RightsError', // Key to use for setting error flash messages. 
 
               'baseUrl'=>'/rights', // Base URL for Rights. Change if module is nested. 
               'layout'=>'rights.views.layouts.main',  // Layout to use for displaying Rights. 
               'appLayout'=>'webroot.themes.abound.views.layouts.main', // Application layout. 
               'cssFile'=>'/css/rights.css', // Style sheet file to use for Rights. 
               'install'=>false,  // Whether to enable installer. 
               'debug'=>false,
        ),

	),

	// application components
	'components'=>$params,
	'params'=>require(dirname(__FILE__).'/params.php'),//get params values from params.php
);
