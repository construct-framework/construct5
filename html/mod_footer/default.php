<?php defined('_JEXEC') or die;
/**
* @package		Unified Template Framework for Joomla!
* @author		Joomla Engineering http://joomlaengineering.com
* @copyright	Copyright (C) 2010, 2011 Matt Thomas | Joomla Engineering. All rights reserved.
* @license		GNU/GPL v2 or later http://www.gnu.org/licenses/gpl-2.0.html
*/

$app = JFactory::getApplication();
$sitename = $app->getCfg('sitename');
?>

<p class="footer-text">All rights reserved. &copy; <?php echo $cur_year ?> <a href="<?php echo JURI::base( true ) ?>" title="<?php echo $sitename ?>"><?php echo $sitename ?></a>.</p>
<p class="footer-text">Developed using the <a href="http://joomlaengineering.com">Construct&trade; Template Development Framework</a>.</p>