<?php defined('_JEXEC') or die;
/**
 * @package        Template Framework for Joomla!+
 * @author        Cristina Solana http://nightshiftcreative.com
 * @author        Matt Thomas http://construct-framework.com | http://betweenbrain.com
 * @copyright    Copyright (C) 2009 - 2012 Matt Thomas. All rights reserved.
 * @license        GNU/GPL v2 or later http://www.gnu.org/licenses/gpl-2.0.html
 */

$lang = JFactory::getLanguage();
$upper_limit = $lang->getUpperLimitSearchWord(); ?>

<form id="searchForm" action="<?php echo JRoute::_('index.php?option=com_search');?>" method="post">

    <fieldset class="word">
        <label for="search-searchword">
            <?php echo JText::_('COM_SEARCH_SEARCH_KEYWORD'); ?>
        </label>
        <input type="text" name="searchword" id="search-searchword" size="30" maxlength="<?php echo $upper_limit; ?>" value="<?php echo htmlspecialchars($this->origkeyword); ?>" class="inputbox" />
        <button name="Search" onclick="this.form.submit()" class="button btn"><?php echo JText::_('COM_SEARCH_SEARCH');?></button>
        <input type="hidden" name="task" value="search" />
    </fieldset>

    <?php if (!empty($this->searchword)): ?>
    <p class="searchintro<?php echo $this->params->get('pageclass_sfx'); ?>"><?php echo JText::plural('COM_SEARCH_SEARCH_KEYWORD_N_RESULTS', $this->total);?></p>
    <?php endif;?>

    <fieldset class="phrases">
        <legend>
            <?php echo JText::_('COM_SEARCH_FOR');?>
        </legend>
        <div class="phrases-box">
            <?php echo $this->lists['searchphrase']; ?>
        </div>
        <div class="ordering-box">
            <label for="ordering" class="ordering">
                <?php echo JText::_('COM_SEARCH_ORDERING');?>
            </label>
            <?php echo $this->lists['ordering'];?>
        </div>
    </fieldset>

    <?php if ($this->params->get('search_areas', 1)) : ?>
    <fieldset class="only">
        <legend>
            <?php echo JText::_('COM_SEARCH_SEARCH_ONLY');?>
        </legend>
        <?php foreach ($this->searchareas['search'] as $val => $txt) :
        $checked = is_array($this->searchareas['active']) && in_array($val, $this->searchareas['active']) ? 'checked="checked"' : '';
        ?>
        <input type="checkbox" name="areas[]" value="<?php echo $val;?>" id="area-<?php echo $val;?>" <?php echo $checked;?> />
        <label for="area-<?php echo $val;?>">
            <?php echo JText::_($txt); ?>
        </label>
        <?php endforeach; ?>
    </fieldset>
    <?php endif; ?>

    <?php if ($this->total > 0) : ?>

    <div class="form-limit">
        <label for="limit">
            <?php echo JText::_('JGLOBAL_DISPLAY_NUM'); ?>
        </label>
        <?php echo $this->pagination->getLimitBox(); ?>
    </div>
    <p class="counter">
        <?php echo $this->pagination->getPagesCounter(); ?>
    </p>

    <?php endif; ?>

</form>

