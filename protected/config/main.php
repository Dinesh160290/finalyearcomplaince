<?php

return array(
    'basePath'          => dirname(__FILE__) . DIRECTORY_SEPARATOR . '..',
    'name'              => 'College Final Project',
   //   'defaultController' => 'post/index',
   // 'homeUrl'           => 'site/login',
    
    'defaultController' => 'site/login',
    'homeUrl'           => array('post/index'),
    
    
    'preload'           => array('log'),
    'import'            => array(
        'application.models.*',
        'application.components.*',
    ),
    'components'        => array(
        'user'         => array(
            'allowAutoLogin' => true,
        ),
        'db'           => array(
            'connectionString' => 'mysql:host=localhost;dbname=blog',
            'emulatePrepare'   => true,
            'username'         => 'root',
            'password'         => '',
            'charset'          => 'utf8',
            'tablePrefix'      => 'tbl_',
        ),
        'errorHandler' => array(
            'errorAction' => 'site/error',
        ),
        'urlManager'   => array(
            'showScriptName' => true,
            'urlFormat'      => 'path',
            'caseSensitive'  => false,
            'rules'          => array(
                array(
                    'class' => 'application.components.CustomUrlRule',
                ),
                'post/<id:\d+>/<title:.*?>'     => 'post/view',
                'posts/<tag:.*?>'               => 'post/index',
                '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
            ),
       ),
        'log'          => array(
            'class'  => 'CLogRouter',
            'routes' => array(
                array(
                    'class'  => 'CFileLogRoute',
                    'levels' => 'error, warning',
                ),
            ),
        ),
    ),
    'params'            => require(dirname(__FILE__) . '/params.php'),
);
