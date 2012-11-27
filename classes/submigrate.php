<?php

namespace Subpackage;

class Submigrate extends \Migrate
{
	
	protected static function _find_subpackage($name = null)
	{
		if ($name)
		{
			$subpackage = explode("_", $name);
			// find a package
			$files = glob(PKGPATH.$subpackage[0].'/subpackage/'.$subpackage[1].'/'.\Config::get('migrations.folder').'*_*.php');
		}
		else
		{
			// find all packages
			$files = glob(PKGPATH.'*/subpackage/*/'.\Config::get('migrations.folder').'*_*.php');
		}
		
		return $files;
	}
	
}