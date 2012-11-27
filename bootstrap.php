<?php

Autoloader::add_core_namespace('Subpackage');

Autoloader::add_classes(array(
	
	'Subpackage\\Submigrate' => __DIR__.'/classes/submigrate.php',
	'Subpackage\\Subconfig' => __DIR__.'/classes/subconfig.php',
	
));
