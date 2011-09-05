<?php defined('_JEXEC') or die;
/**
* @package		Unified Template Framework for Joomla!
* @author		Joomla Engineering http://joomlaengineering.com
* @copyright	Copyright (C) 2010, 2011 Matt Thomas | Joomla Engineering. All rights reserved.
* @license		GNU/GPL v2 or later http://www.gnu.org/licenses/gpl-2.0.html
*/

if (substr(JVERSION, 0, 3) >= '1.6') {
// Joomla 1.6+ ?>

    <section>
       	<h2>
		    <?php echo JText::_('COM_MAILTO_EMAIL_SENT'); ?>
	    </h2>

	    <a href="javascript: void window.close()">
		    <?php echo JText::_('COM_MAILTO_CLOSE_WINDOW'); ?>
		    <?php echo JHtml::_('image','mailto/close-x.png', NULL, NULL, true); ?>
	    </a>
    </section>

<?php
}
else {
// Joomla 1.5 ?>

    <section>
	    <h2>
		    <?php echo JText::_('EMAIL_SENT'); ?>
	    </h2>

	    <a href="javascript: void window.close()">
		    <?php echo JText::_('Close Window'); ?><img src="<?php echo JURI::base() ?>components/com_mailto/assets/close-x.png" border="0" alt="" title="" />
	    </a>
    </section>

<?php }
