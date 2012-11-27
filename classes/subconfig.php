<?php

namespace Subpackage;

class Subconfig extends \Config
{
	
	public static function subload($file, $group = null, $reload = false, $overwrite = false)
	{
		list($package, $subpackage, $configFile) = explode("\\", $file);
		
		$fullFile = PKGPATH.$package."/subpackage/".$subpackage."/config/".$configFile.".php";
		
		return static::load($fullFile, $file, $reload, $overwrite);
		
	}
		
}