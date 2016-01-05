<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
Yii::setPathOfAlias('bootstrap', dirname(__FILE__).'/../extensions/bootstrap');

return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'',
	// 'themes'=>'classic',
	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.controllers.*',
		'application.components.*',
		'application.widgets.bootstrap.*',
		'ext.yii-mail.YiiMailMessage',
		'ext.pusher.*',
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool
		// 'client'=>array(
			
		// ),
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'123',
		 	// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),
		
	),

	// application components
	'components'=>array(
		// 'mail' => array(
		// 	'class' => 'ext.yii-mail.YiiMail',
		// 	'transportType'=>'smtp',
		// 	'transportOptions'=>array(
		// 		'host'=>'smtp.gmail.com',
		// 		'username'=>'try35u@gmail.com',//contohna nama_email@yahoo.co.id
		// 		'password'=>'08986044235',
		// 		'port'=>'587',
		// 		'encryption'=>'ssl',
		// 	),
		// 	'viewPath' => 'application.views.mail',
		// 	'logging' => true,
		// 	'dryRun' => false
		// ),
		'mail' => array(
			'class' => 'ext.yii-mail.YiiMail',
			'transportType'=>'smtp',
			'transportOptions'=>array(
				'host'=>'smtp.googlemail.com',
				'username'=>"support@vvfy.me",//contohna nama_email@yahoo.co.id
				'password'=>"tryvvfyme2015",
				'port'=>'465',
				'encryption'=>'ssl',
			),
			'viewPath' => 'application.views.mail',
			'logging' => true,
			'dryRun' => false
		),
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
			'class'=>'EWebUser',
			'loginUrl'=>array('land/login'),

			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),
		'bootstrap'=>array(
            'class'=>'bootstrap.components.Bootstrap',
        ),
		// uncomment the following to enable URLs in path-format
		
		
		// 'urlManager'=>array(
		//   'urlFormat'=>'path',
		//   'showScriptName'=>false,
		//   'rules'=>array(
		// 	  '<controller:\w+>/<id:\d+>'=>'<controller>/view',
		// 	  '<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
		// 	  '<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
		//  ),
		// ),
		'urlManager'=>array(
			'urlFormat'=>'path',
			'showScriptName'=>false,
			'caseSensitive'=>false,        
		),


		/*
		'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		),
		// uncomment the following to use a MySQL database
		*/
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=vvfy',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '',
			'charset' => 'utf8',
		),
		'errorHandler'=>array(
			// use 'site/error' action to display errors
            'errorAction'=>'site/error',
        ),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'try.setyoutomo@yahoo.com',
		// 'adminEmail'=>'try35u@gmail.com',
	),
);