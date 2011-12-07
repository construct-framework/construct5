<?php 
/*------------------------------------------------------------------------
# author    your name or company
# copyright Copyright � 2011 example.com. All rights reserved.
# @license  http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
# Website   http://www.example.com
-------------------------------------------------------------------------*/

/* initialize ob_gzhandler to send and compress data */
ob_start ("ob_gzhandler");
/* initialize compress function for whitespace removal */
ob_start("compress");
/* required header info and character set */
header("Content-type: text/css;charset: UTF-8");
/* cache control to process */
header("Cache-Control: must-revalidate");
/* duration of cached content (1 hour) */
$offset = 60 * 60 * 24 * 365;
/* expiration header format */
$ExpStr = "Expires: " . gmdate("D, d M Y H:i:s",time() + $offset) . " GMT";
/* send cache expiration header to browser */
header($ExpStr);
/* Begin function compress */
function compress($buffer) {
	/* remove comments */
	$buffer = preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $buffer);
	/* remove tabs, spaces, new lines, etc. */        
	$buffer = str_replace(array("\r\n","\r","\n","\t",'  ','    ','    '),'',$buffer);
	/* remove unnecessary spaces */        
	$buffer = str_replace('{ ', '{', $buffer);
	$buffer = str_replace(' }', '}', $buffer);
	$buffer = str_replace('; ', ';', $buffer);
	$buffer = str_replace(', ', ',', $buffer);
	$buffer = str_replace(' {', '{', $buffer);
	$buffer = str_replace('} ', '}', $buffer);
	$buffer = str_replace(': ', ':', $buffer);
	$buffer = str_replace(' ,', ',', $buffer);
	$buffer = str_replace(' ;', ';', $buffer);
	$buffer = str_replace(';}', '}', $buffer);
	
	return $buffer;
}

require('screen.css');

require('../elements/logic.php');

require($customStyleSheet);




define( '_JEXEC', 1 );
define('JPATH_BASE', dirname(__FILE__));
define( 'DS', DIRECTORY_SEPARATOR );

if (file_exists('../../../includes/defines.php')) {
	include_once ('../../../includes/defines.php');
	echo "defines.php";
}

if (file_exists('../../../libraries/import.php')) {
	include_once ('../../../libraries/import.php');
	echo "import.php";
}

if (file_exists('../../../libraries/joomla/factory.php')) {
	include_once ('../../../libraries/joomla/factory.php');
	echo "factory.php";
}

$params 			= JFactory::getApplication()->getTemplate(true)->params;


?>