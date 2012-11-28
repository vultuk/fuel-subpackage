<?php

namespace Subpackage;

class Subconfig extends \Config
{
	
	public static function subload($file, $group = null, $reload = false, $overwrite = false)
	{
		if (count(explode("\\", $file)) > 2)
		{
			list($package, $subpackage, $configFile) = explode("\\", $file);
		
			$fullFile = PKGPATH.$package."/subpackage/".$subpackage."/config/".$configFile.".php";

		}
		else
		{
			$fullFile = $file;
		}
				
		return static::load($fullFile, $file, $reload, $overwrite);
		
	}
		
}