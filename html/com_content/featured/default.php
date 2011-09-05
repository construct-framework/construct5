<?php defined('_JEXEC') or die;

/**
 * @version		$Id: default.php 20985 2011-03-17 18:34:35Z infograf768 $
 * @package		Joomla.Site
 * @subpackage	com_content
 * @copyright	Copyright (C) 2005 - 2011 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// Joomla 1.6+

JHtml::addIncludePath(JPATH_COMPONENT.DS.'helpers');?>

    <section class="blog-featured<?php echo $this->pageclass_sfx;?>">
        <?php if ( $this->params->get('show_page_heading')!=0) : ?>
	        <h1>
	        <?php echo $this->escape($this->params->get('page_heading')); ?>
	        </h1>
        <?php endif; ?>

        <?php $leadingcount=0 ; ?>
        <?php if (!empty($this->lead_items)) : ?>
        <section class="items-leading">
	        <?php foreach ($this->lead_items as &$item) : ?>
		        <article class="leading-<?php echo $leadingcount; ?><?php echo $item->state == 0 ? ' system-unpublished' : null; ?>">
			        <?php
				        $this->item = &$item;
				        echo $this->loadTemplate('item');
			        ?>
		        </article>
		        <?php
			        $leadingcount++;
		        ?>
	        <?php endforeach; ?>
        </section>
        <?php endif; ?>
        <?php
	        $introcount=(count($this->intro_items));
	        $counter=0;
        ?>
		<?php if (!empty($this->intro_items)) : ?>
			<section class="items-intro">
				
			<?php foreach ($this->intro_items as $key => &$item) : ?>

	        <?php
		        $key= ($key-$leadingcount)+1;
		        $rowcount=( ((int)$key-1) %	(int) $this->columns) +1;
		        $row = $counter / $this->columns ;

                if ($rowcount==1) : ?>												 
					<div class="items-row cols-<?php echo (int) $this->columns;?> <?php echo 'row-'.$row ; ?> clearfix">
		        <?php endif; ?>

		        <article class="item column-<?php echo $rowcount;?><?php echo $item->state == 0 ? ' system-unpublished"' : null; ?>">
			        <?php
					        $this->item = &$item;
					        echo $this->loadTemplate('item');
			        ?>
		        </article>
		      
		        <?php $counter++; ?>
				
				<?php if (($rowcount == $this->columns) or ($counter ==$introcount)): ?>
					</div>					
				<?php endif; ?>
	        <?php endforeach; ?>
			</section>
        <?php endif; ?>

        <?php if (!empty($this->link_items)) : ?>
	        <div class="items-more">
				<?php echo $this->loadTemplate('links'); ?>
	        </div>
        <?php endif; ?>

        <?php if ($this->params->def('show_pagination', 2) == 1  || ($this->params->get('show_pagination') == 2 && $this->pagination->get('pages.total') > 1)) : ?>
	        <nav class="pagination">

		        <?php if ($this->params->def('show_pagination_results', 1)) : ?>
			        <p class="counter">
				        <?php echo $this->pagination->getPagesCounter(); ?>
			        </p>
		        <?php  endif; ?>
				        <?php echo $this->pagination->getPagesLinks(); ?>
	        </nav>
        <?php endif; ?>

    </section>

