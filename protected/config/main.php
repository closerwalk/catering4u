<?php



// uncomment the following to define a path alias

// Yii::setPathOfAlias('local','path/to/local-folder');



// This is the main Web application configuration. Any writable

// CWebApplication properties can be configured here.

return array(

	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',

	'name'=>'Cattering Services For You',

	'theme'=>'redplanet',

	// preloading 'log' component

	'preload'=>array('log'),



	// autoloading model and component classes

	'import'=>array(

		'application.models.*',

		'application.components.*',

	),



	/* 'modules'=>array(

		// uncomment the following to enable the Gii tool

		/*

		'gii'=>array(

			'class'=>'system.gii.GiiModule',

			'password'=>'Enter Your Password Here',

			// If removed, Gii defaults to localhost only. Edit carefully to taste.

			'ipFilters'=>array('127.0.0.1','::1'),

		),

		

	),*/

	'modules'=>array(

		'sitemap' => array(

        'class' => 'ext.sitemap.SitemapModule',     //or whatever the correct path is

        //'actions' => array('index'),                    //optional

        'absoluteUrls' => true,               //optional

        'protectedControllers' => array('admin'),   //optional

        'protectedActions' =>array('site/error'),   //optional

        'priority' => '0.5',                        //optional

        'changefreq' => 'daily',                    //optional

        'lastmod' => '1985-11-05',                  //optional

        'cacheId' => 'cache',                       //optional

        'cachingDuration' => 3600,                  //optional          

   		 ),

		

		 'wdcalendar'    => array( /*'admin' => 'install',*/ 

       		'embed' =>false,'wd_options'=>array(

			'view'=>'month',

			'readonly'=>'JS:true')), 

	   

		'gii'=>array(

			'class'=>'system.gii.GiiModule',

			'password'=>'yehweh12',

			// If removed, Gii defaults to localhost only. Edit carefully to taste.

			'ipFilters'=>array('127.0.0.1','::1','10.0.0.244','76.94.77.169','209.31.54.232','209.31.54.226','172.251.29.116'),

		),

	),

	// application components

	'components'=>array(

		'user'=>array(

			// enable cookie-based authentication

			'allowAutoLogin'=>true,

		),

		// uncomment the following to enable URLs in path-format

		/*

		'urlManager'=>array(

			'urlFormat'=>'path',

			'rules'=>array(

				'<controller:\w+>/<id:\d+>'=>'<controller>/view',

				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',

				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',

			),

		),

		*/

		'urlManager'=>array(

  			'urlFormat'=>'path',

     		 'showScriptName'=>false,

      			'caseSensitive'=>false,

				'rules'=>array(

					'sitemap.xml'   => 'sitemap/default/index',

					'sitemap.html'   => 'sitemap/default/index/format/html',

					),

        ),

		'db'=>array(

			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',

		),

		// uncomment the following to use a MySQL database

		

		'db'=>array(

			'connectionString' => 'mysql:host=173.201.214.14;dbname=cs4uroot',

			'emulatePrepare' => true,

			'username' => 'cs4uroot',

			'password' => 'JesusChrist1!',

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

		'adminEmail'=>'ken.goddard@cableeng.com',

	),

);