<?php defined('_JEXEC') or die;
/**
* @package		Unified Template Framework for Joomla!
* @author		Joomla Engineering http://joomlaengineering.com
* @copyright	Copyright (C) 2010, 2011 Matt Thomas | Joomla Engineering. All rights reserved.
* @license		GNU/GPL v2 or later http://www.gnu.org/licenses/gpl-2.0.html
*/
?>

<div class="newsflash<?php echo $params->get('moduleclass_sfx') ?>">

	<?php
	srand((double) microtime() * 1000000);
	$flashnum = rand(0, $items - 1);
	$item = $list[$flashnum];
	modNewsFlashHelper::renderItem($item, $params, $access);
	?>
	
</div>
