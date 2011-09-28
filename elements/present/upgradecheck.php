<?php defined('_JEXEC') or die;
/**
* @package		Unified Template Framework for Joomla! 1.5, 1.6+
* @author		Joomla Engineering http://joomlaengineering.com
* @copyright	Copyright (C) 2010, 2011 Matt Thomas | Joomla Engineering. All rights reserved.
* @license		GNU/GPL v2 or later http://www.gnu.org/licenses/gpl-2.0.html
*/

class JElementUpgradecheck extends JElement {
	
	var   $_name = 'Upgradecheck';
	
	  function fetchElement($name, $value, &$node, $control_name)
	  {
		//check for cURL support before we do anyting esle.
		if(!function_exists("curl_init")) return 'cURL is not supported by your server. Please contact your hosting provider to enable this capability.';
		//If cURL is supported, check the current version available.
		else 
				$version = 2;
				$target = 'http://joomlaengineering.com/upgradecheck/construct5-pro';
				$curl = curl_init();
				curl_setopt($curl, CURLOPT_URL, $target);
				curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
				curl_setopt($curl, CURLOPT_HEADER, false);
				$str = curl_exec($curl);
				curl_close($curl);
				
				$message = '<label style="max-width:100%">You are using Construct5 Pro version 2.5.'.$version.' Beta. ';
				
				//If the current version is out of date, notify the user and provide a download link.
				if ($version < $str)
					$message = $message . '<a href="http://joomlaengineering.com" target="_blank">Version 2.5.'.$str.' is now available.</a><br /><a href="http://joomlaengineering.com/construct-unified-changelog" target="_blank">See what&rsquo;s new</a>.</label>';
				//If the current version is up to date, notify the user. 	
				elseif (($version == $str) || ($version > $str))
					$message = $message . 'There are no updates available at this time.<br /><a href="http://joomlaengineering.com/construct5-pro-changelog" target="_blank">View the change log</a>.</label>';
				return $message;							
	  }
}
