<?php defined('_JEXEC') or die;
/**
 * @version        $Id: default_links.php 21321 2011-05-11 01:05:59Z dextercowley $
 * @package        Joomla.Site
 * @subpackage    com_contact
 * @copyright    Copyright (C) 2005 - 2011 Open Source Matters, Inc. All rights reserved.
 * @license        GNU General Public License version 2 or later; see LICENSE.txt
 */

if ('plain' == $this->params->get('presentation_style')) :
	echo '<h3>' . JText::_('COM_CONTACT_LINKS') . '</h3>';
else :
	echo JHtml::_($this->params->get('presentation_style') . '.panel', JText::_('COM_CONTACT_LINKS'), 'display-links');
endif; ?>

<section class="contact-links">
	<ul>
		<?php
		foreach (range('a', 'e') as $char) : // letters 'a' to 'e'
			$link = $this->contact->params->get('link' . $char);
			$label = $this->contact->params->get('link' . $char . '_name');

			if (!$link) :
				continue;
			endif;

			// Add 'http://' if not present
			$link = (0 === strpos($link, 'http')) ? $link : 'http://' . $link;

			// If no label is present, take the link
			$label = ($label) ? $label : $link;
			?>
			<li>
				<a href="<?php echo $link; ?>">
					<?php echo $label;  ?>
				</a>
			</li>
			<?php endforeach; ?>
	</ul>
</section>

