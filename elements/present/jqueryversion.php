<?php defined('_JEXEC') or die;
/**
* @package		Unified Template Framework for Joomla! 1.5,1.6+
* @author		Joomla Engineering http://joomlaengineering.com
* @copyright	Copyright (C) 2010 Matt Thomas | Joomla Engineering. All rights reserved.
* @license		GNU/GPL v2 or later http://www.gnu.org/licenses/gpl-2.0.html
*/

class JElementJqueryversion extends JElement
{

	var	$_name = 'Jqueryversion';

	function fetchElement($name, $value, &$node, $control_name)
	{
        $options	= array();

		$options[]	= JHtml::_('select.option', '', '- Not Loaded -');
		$options[]	= JHtml::_('select.option', 'http://code.jquery.com/jquery-latest.min.js', 'Latest');
		$options[]	= JHtml::_('select.option', 'https://ajax.googleapis.com/ajax/libs/jquery/1.6.0/jquery.min.js', '1.6.0');        
		$options[]	= JHtml::_('select.option', 'https://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js', '1.5.2');
		$options[]	= JHtml::_('select.option', 'https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js', '1.5.1');
		$options[]	= JHtml::_('select.option', 'https://ajax.googleapis.com/ajax/libs/jquery/1.5.0/jquery.min.js', '1.5.0');
		$options[]	= JHtml::_('select.option', 'https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js', '1.4.4');
		$options[]	= JHtml::_('select.option', 'https://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js', '1.4.3');
		$options[]	= JHtml::_('select.option', 'https://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js', '1.4.2');
		$options[]	= JHtml::_('select.option', 'https://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js', '1.4.1');
		$options[]	= JHtml::_('select.option', 'https://ajax.googleapis.com/ajax/libs/jquery/1.4.0/jquery.min.js', '1.4.0');
		$options[]	= JHtml::_('select.option', 'https://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js', '1.3.2');
		$options[]	= JHtml::_('select.option', 'https://ajax.googleapis.com/ajax/libs/jquery/1.3.1/jquery.min.js', '1.3.1');
		$options[]	= JHtml::_('select.option', 'https://ajax.googleapis.com/ajax/libs/jquery/1.3.0/jquery.min.js', '1.3.0');
		$options[]	= JHtml::_('select.option', 'https://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.min.js', '1.2.6');
		$options[]	= JHtml::_('select.option', 'https://ajax.googleapis.com/ajax/libs/jquery/1.2.0/jquery.min.js', '1.2.0');
        
        return JHTML::_('select.genericlist',  $options, ''.$control_name.'['.$name.']', '', 'value', 'text', $value, $control_name.$name);

    }
}