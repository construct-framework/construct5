<?php defined('_JEXEC') or die;
/**
 * @version		$Id: default_core.php 21020 2011-03-27 06:52:01Z infograf768 $
 * @package		Joomla.Site
 * @subpackage	com_users
 * @copyright	Copyright (C) 2005 - 2011 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 * @since		1.6
 */

// Joomla 1.6+ only

jimport('joomla.user.helper');
?>

<fieldset id="users-profile-core">
	<legend>
		<?php echo JText::_('COM_USERS_PROFILE_CORE_LEGEND'); ?>
	</legend>
	<dl>
		<dt>
			<?php echo JText::_('COM_USERS_PROFILE_NAME_LABEL'); ?>
		</dt>
		<dd>
			<?php echo $this->data->name; ?>
		</dd>
		<dt>
			<?php echo JText::_('COM_USERS_PROFILE_USERNAME_LABEL'); ?>
		</dt>
		<dd>
			<?php echo $this->data->username; ?>
		</dd>
		<dt>
			<?php echo JText::_('COM_USERS_PROFILE_REGISTERED_DATE_LABEL'); ?>
		</dt>
		<dd>
			<?php echo JHtml::_('date',$this->data->registerDate); ?>
		</dd>
		<dt>
			<?php echo JText::_('COM_USERS_PROFILE_LAST_VISITED_DATE_LABEL'); ?>
		</dt>

		<?php if ($this->data->lastvisitDate != '0000-00-00 00:00:00'){?>
			<dd>
				<?php echo JHtml::_('date',$this->data->lastvisitDate); ?>
			</dd>
		<?php }
		else {?>
			<dd>
				<?php echo JText::_('COM_USERS_PROFILE_NEVER_VISITED'); ?>
			</dd>
		<?php } ?>

	</dl>
</fieldset>
