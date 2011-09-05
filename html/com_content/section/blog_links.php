<?php defined('_JEXEC') or die;
/**
* @package		Unified Template Framework for Joomla!
* @author		Joomla Engineering http://joomlaengineering.com
* @copyright	Copyright (C) 2010, 2011 Matt Thomas | Joomla Engineering. All rights reserved.
* @license		GNU/GPL v2 or later http://www.gnu.org/licenses/gpl-2.0.html
*/
?>

<div class="items-more">
	<h3>
		<?php echo JText::_('More Articles...'); ?>
	</h3>	
	<ol>
		<?php foreach ($this->links as $link) : ?>
		<li>
			<a href="<?php echo JRoute::_(ContentHelperRoute::getArticleRoute($link->slug, $link->catslug, $link->sectionid)); ?>">
				<?php echo $this->escape($link->title); ?></a>
		</li>
		<?php endforeach; ?>
	</ol>
</div>
