<?php defined('_JEXEC') or die;
/**
* @package		Unified Template Framework for Joomla!
* @author		Joomla Engineering http://joomlaengineering.com
* @copyright	Copyright (C) 2010, 2011 Matt Thomas | Joomla Engineering. All rights reserved.
* @license		GNU/GPL v2 or later http://www.gnu.org/licenses/gpl-2.0.html
*/
?>

<?php if (count($list)) : ?>
	<ul class="latest-news<?php echo $params->get('pageclass_sfx'); ?>">
		<?php foreach ($list as $item) : ?>
		<li>
			<a href="<?php echo $item->link; ?>">
				<?php echo $item->text; ?>
			</a>
		</li>
		<?php endforeach; ?>
	</ul>
<?php endif;