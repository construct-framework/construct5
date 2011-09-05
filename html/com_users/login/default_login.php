<?php defined('_JEXEC') or die;
/**
* @package		Unified Template Framework for Joomla!
* @author		Joomla Engineering http://joomlaengineering.com
* @copyright	Copyright (C) 2010, 2011 Matt Thomas | Joomla Engineering. All rights reserved.
* @license		GNU/GPL v2 or later http://www.gnu.org/licenses/gpl-2.0.html
*/

// Joomla 1.6+ only

?>

<section class="login<?php echo $this->escape($this->params->get( 'pageclass_sfx' )); ?>">

	<?php if ( $this->params->get( 'show_login_title' ) ) : ?>
	    <h2>
		    <?php echo $this->params->get( 'header_login' ); ?>
	    </h2>
	<?php endif; ?>
	
	<?php if ( $this->params->get( 'description_login' ) || isset( $this->image ) ) : ?>
	    <p class="login-description">
		    <?php if ($this->params->get('description_login')) : ?>
			    <?php echo $this->params->get('description_login_text'); ?>
		    <?php endif; ?>		
		    <?php if (isset ($this->image)) : ?>
			    <?php echo $this->image; ?>
		    <?php endif; ?>
	    </p>
	<?php endif; ?>

	<form action="<?php echo JRoute::_( 'index.php', true, $this->params->get('usesecure')); ?>" method="post">
		<fieldset>		
			<label for="user" ><?php echo JText::_( 'Username' ); ?>
				<input name="username" type="text" class="inputbox" size="20"  id="user">
			</label>
			<label for="pass" ><?php echo JText::_( 'Password' ); ?>
				<input name="passwd" type="password" class="inputbox" size="20" id="pass">
			</label>
			<label for="rem"><?php echo JText::_( 'Remember me' ); ?>
				<input type="checkbox" name="remember" class="inputbox" value="yes" id="rem">
			</label>
			<a href="<?php echo JRoute::_( 'index.php?option=com_user&view=reset#content' ); ?>">
				<?php echo JText::_('Lost Password?'); ?>
			</a>
			<?php if ( $this->params->get( 'registration' ) ) : ?>
			<?php echo JText::_('No account yet?'); ?>
			<a href="<?php echo JRoute::_( 'index.php?option=com_user&view=register#content' ); ?>">
				<?php echo JText::_( 'Register' ); ?>
			</a>
			<?php endif; ?>
			<button type="submit" name="submit" class="button"><?php echo JText::_( 'Login' ); ?></button>
			<noscript><?php echo JText::_( 'WARNJAVASCRIPT' ); ?></noscript>
		</fieldset>
		<input type="hidden" name="option" value="com_user">
		<input type="hidden" name="task" value="login">
		<input type="hidden" name="return" value="<?php echo $this->return; ?>">
		<?php echo JHTML::_( 'form.token' ); ?>
	</form>

	<ul>
		<li>
			<a href="<?php echo JRoute::_('index.php?option=com_users&view=reset'); ?>">
			<?php echo JText::_('COM_USERS_LOGIN_RESET'); ?></a>
		</li>
		<li>
			<a href="<?php echo JRoute::_('index.php?option=com_users&view=remind'); ?>">
			<?php echo JText::_('COM_USERS_LOGIN_REMIND'); ?></a>
		</li>
		<?php
		$usersConfig = JComponentHelper::getParams('com_users');
		if ($usersConfig->get('allowUserRegistration')) : ?>
		<li>
			<a href="<?php echo JRoute::_('index.php?option=com_users&view=registration'); ?>">
				<?php echo JText::_('COM_USERS_LOGIN_REGISTER'); ?></a>
		</li>
		<?php endif; ?>
	</ul>

</section>
