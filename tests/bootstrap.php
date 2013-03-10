<?php


error_reporting(E_ALL | E_STRICT);
chdir(__DIR__);


//VENDOR AUTOLOAD
//	load vendor files. This includes Zend
//	and PHPUnit.
include "../vendor/autoload.php";

//MODULE AUTOLOAD
//	load the actual module. I don't know if I'm doing
//	this correctly. I'm extracting what I think I need
//	from https://github.com/weierophinney/PhlyRequireJs/blob/master/test/Bootstrap.php
//	This seems to work... so.... :)
\Zend\Loader\AutoloaderFactory::factory(array(
    'Zend\Loader\StandardAutoloader' => array(
        'namespaces' => array(
            'Application' => __DIR__ . '/../module/Application'
        ),
    ),
));