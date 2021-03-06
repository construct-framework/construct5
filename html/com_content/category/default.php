<?php defined('_JEXEC') or die;
/**
 * @package        Template Framework for Joomla!+
 * @author        Cristina Solana http://nightshiftcreative.com
 * @author        Matt Thomas http://construct-framework.com | http://betweenbrain.com
 * @copyright    Copyright (C) 2009 - 2013 Matt Thomas. All rights reserved.
 * @license        GNU/GPL v2 or later http://www.gnu.org/licenses/gpl-2.0.html
 */

JHtml::addIncludePath(JPATH_COMPONENT . '/helpers');
?>

<section class="category-list<?php echo $this->pageclass_sfx;?>">
    <?php if (($this->params->get('show_page_heading', 1)) && ($this->params->get('show_category_title', 1) OR $this->params->get('page_subheading'))) : ?>
    <header>
        <hgroup>
    <?php elseif (($this->params->get('show_page_heading', 1)) || ($this->params->get('show_category_title', 1) OR $this->params->get('page_subheading')))  : ?>
    <header>
    <?php endif; ?>

    <?php if ($this->params->get('show_page_heading', 1)) : ?>
    <h1>
        <?php echo htmlspecialchars($this->params->get('page_heading')); ?>
    </h1>
    <?php endif; ?>

    <?php if ($this->params->get('show_category_title', 1) OR $this->params->get('page_subheading')) : ?>
    <h2 class="subheading-category">
        <?php echo htmlspecialchars($this->params->get('page_subheading')); ?>
        <?php if ($this->params->get('show_category_title')) : ?>
        <?php echo $this->category->title; ?>
        <?php endif; ?>
    </h2>
    <?php endif; ?>

    <?php if (($this->params->get('show_page_heading', 1)) && ($this->params->get('show_category_title', 1) OR $this->params->get('page_subheading'))) : ?>
        </hgroup>
    </header>
    <?php elseif (($this->params->get('show_page_heading', 1)) || ($this->params->get('show_category_title', 1) OR $this->params->get('page_subheading')))  : ?>
    </header>
    <?php endif; ?>

    <?php if ($this->params->get('show_description', 1) || $this->params->def('show_description_image', 1)) : ?>
    <section class="category-desc clearfix">
        <?php if ($this->params->get('show_description_image') && $this->category->getParams()->get('image')) : ?>
        <img src="<?php echo $this->category->getParams()->get('image'); ?>" />
        <?php endif; ?>
        <?php if ($this->params->get('show_description') && $this->category->description) : ?>
        <?php echo JHtml::_('content.prepare', $this->category->description, '', 'com_content.category'); ?>
        <?php endif; ?>
    </section>
    <?php endif; ?>

    <section class="cat-items">
        <?php echo $this->loadTemplate('articles'); ?>
    </section>

    <?php if (!empty($this->children[$this->category->id]) && $this->maxLevel != 0) : ?>
    <section class="cat-children">
        <h3>
            <?php echo JTEXT::_('JGLOBAL_SUBCATEGORIES'); ?>
        </h3>

        <?php echo $this->loadTemplate('children'); ?>
    </section>
    <?php endif; ?>
</section>

