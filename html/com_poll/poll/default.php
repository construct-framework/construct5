<?php defined('_JEXEC') or die;
/**
* @package		Unified Template Framework for Joomla!
* @author		Joomla Engineering http://joomlaengineering.com
* @copyright	Copyright (C) 2010, 2011 Matt Thomas | Joomla Engineering. All rights reserved.
* @license		GNU/GPL v2 or later http://www.gnu.org/licenses/gpl-2.0.html
*/

// Joomla 1.5 only

?>

<section class="poll<?php echo $this->escape($this->params->get('pageclass_sfx')); ?>">

	<?php JHTML::_('stylesheet', 'poll_bars.css', 'components/com_poll/assets/'); ?>
	
	<?php if ($this->params->get('show_page_title',1)) : ?>
	<header>
		<h2>
			<?php echo $this->escape($this->params->get('page_title')); ?>
		</h2>
	</header>
	<?php endif; ?>

	<form action="index.php" method="post" name="poll" id="poll">
		<fieldset>
			<label for="poll">
				<?php echo JText::_( 'Select Poll' ); ?> <?php echo $this->lists['polls']; ?>
			</label>
		</fieldset>
	</form>
	<?php if (count($this->votes)) : ?>
		<?php echo $this->loadTemplate( 'graph' ); ?>
	<?php endif; ?>
</section>
