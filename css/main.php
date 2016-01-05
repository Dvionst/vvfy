<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.

require_once(dirname(__FILE__) . '/global.php');

return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Bursa Tenaga Kerja LPKIA',
	'timeZone'=>'Asia/Jakarta',
	'preload'=>array('log', 'bootstrap'),
	'language' => 'id',
	'import'=>array(
		'application.models.*',
		'ext.galleryManager.models.*',
		'application.components.base.*',
		'application.components.events.*',
		'application.components.interfaces.*',
		'application.components.users.*',
		'application.components.helpers.*',
		'application.components.utils.*',
		'application.components.exceptions.*',
		'application.modules.bau.modules.rights.*',
		'application.modules.bau.modules.rights.components.*',
		'ext.YiiMailer.YiiMailer'
	),
	'controllerMap' => array(
		'assets' => array(
			'class' => 'ext.minScript.controllers.ExtMinScriptController'
		)
	),
	'modules'=>array(
		 'gii'=>array(
            'class'=>'system.gii.GiiModule',
            'password'=>'123',
			  'generatorPaths' => array(
				'ext.giiplus', 
			 ),
		),
	
		'bau' => array(
			'controllerMap' => array(
				'gallery' => array(
					'class' => 'ext.galleryManager.GalleryController',
					'pageTitle' => 'Gallery administration'
				)
			),
			'modules'=>array(
				'rights'=>array(
					'authenticatedName' => 'Member',
					'userClass' => 'User',
					'install' => true,
				),
				'import' => array('defaultController' => 'csv')
			),
		),
		'company' => array(
			'defaultController' => 'profile'
		),
		'member' => array(
			'defaultController' => 'profile'
		)
	),
	
	// application components
	'components'=> CMap::mergeArray(
		require_once(dirname(__FILE__) . '/database.php'),
		require_once(dirname(__FILE__) . '/extensions.php'),
		array(
			'widgetFactory' => array(
				'widgets' => array(
					'CListView' => array(
						'cssFile' => '/css/list_view.css'
					)
				)
			),
			'cache' => array(
				'class' => 'system.caching.CFileCache' //extension_loaded('apc') ? 'system.caching.CApcCache' : 'system.caching.CFileCache'
			),
			'clientScript' => array(
				'class' => 'ext.minScript.components.ExtMinScript',
				'scriptMap' => array(
					// 'jquery.js' => '//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.js',
					// 'jquery.min.js' => '//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js',
					'jquery-ui.min.js' => '/scripts/jquery-ui-1.9.2.custom.min.js', // Fix tooltip conflict
				)
			),
			'user'=>array(
				'class' => 'WebUser',
				'loginUrl' => array('/account/login'),
				'allowAutoLogin'=>true,
			),
			'authManager'=>array(
				'class'=>'RDbAuthManager',
				'connectionID'=>'db',
				'defaultRoles' => array('Guest'),
				'itemTable'=>'auth_item',
				'itemChildTable'=>'auth_itemchild',
				'assignmentTable'=>'auth_assignment',
				'rightsTable'=>'auth_rights',
			),
			'urlManager'=>array(
				'urlFormat'=>'path',
				'showScriptName' => false,
				'rules'=>require_once(dirname(__FILE__) . '/url_rules.php')
			),
			'errorHandler'=>array(
				'errorAction'=>'site/error',
			),
			'log'=>array(
				'class'=>'CLogRouter',
				'routes'=>array(
					array(
						'class'=>'CFileLogRoute',
						'levels'=>'error, warning',
					),
				),
			),
		)
	),
	'params'=>array(
		'homepage' => 'http://www.lpkia.ac.id',
		'facebook' => 'https://www.facebook.com/LPKIA',
		'twitter' => 'https://twitter.com/#!/JY_LPKIA',
		'youtube' => 'http://www.youtube.com/user/pknstmiklpkia',
		'defaultPassword' => 'lpkia123',
		'cacheDuration' => 3600,
		'captchaLimit' => 1,
		'failedLoginAttempts' => 3
	),
);
?>