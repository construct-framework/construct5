<?php defined('_JEXEC') or die;
/**
* @package		Unified Template Framework for Joomla!
* @author		Joomla Engineering http://joomlaengineering.com
* @copyright	Copyright (C) 2010, 2011 Matt Thomas | Joomla Engineering. All rights reserved.
* @license		GNU/GPL v2 or later http://www.gnu.org/licenses/gpl-2.0.html
*/

// Joomla 1.5 only

?>

<section class="remind<?php echo $this->escape($this->params->get('pageclass_sfx')) ?>">
	<h2>
		<?php echo $this->escape($this->message->title); ?>
	</h2>
	<p class="message">
		<?php echo $this->escape($this->message->text); ?>
	</p>
</section>