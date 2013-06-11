<?php defined('_JEXEC') or die;
/**
 * @package        Template Framework for Joomla!+
 * @author         Cristina Solana http://nightshiftcreative.com
 * @author         Matt Thomas http://construct-framework.com | http://betweenbrain.com
 * @copyright      Copyright (C) 2009 - 2013 Matt Thomas. All rights reserved.
 * @license        GNU/GPL v2 or later http://www.gnu.org/licenses/gpl-2.0.html
 */

/**
 * JFormFieldGooglewebfont
 *
 * Provides list of Google Web Fonts
 *
 * @static
 * @package        Molajo
 * @subpackage     HTML
 * @since          1.6
 */
class JFormFieldJqueryversion extends JFormFieldList {
	/**
	 * Field Type
	 *
	 * @var        string
	 * @since    1.6
	 */
	public $type = 'Jqueryversion';

	/**
	 * getOptions
	 *
	 * Generates list options
	 *
	 * @return    array    The field option objects.
	 * @since    1.6
	 */
	protected function getOptions() {
		$options = array();

		$options[] = JHtml::_('select.option', '', '- Not Loaded -');
		$options[] = JHtml::_('select.option', '//code.jquery.com/jquery-latest.min.js', 'Latest');
		$options[] = JHtml::_('select.option', '//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js', '2.0.0');
		$options[] = JHtml::_('select.option', '//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js', '1.9.1');
		$options[] = JHtml::_('select.option', '//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js', '1.9.0');
		$options[] = JHtml::_('select.option', '//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js', '1.8.3');
		$options[] = JHtml::_('select.option', '//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js', '1.8.2');
		$options[] = JHtml::_('select.option', '//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js', '1.8.1');
		$options[] = JHtml::_('select.option', '//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js', '1.8.0');
		$options[] = JHtml::_('select.option', '//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js', '1.7.2');
		$options[] = JHtml::_('select.option', '//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js', '1.7.1');
		$options[] = JHtml::_('select.option', '//ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js', '1.7.0');
		$options[] = JHtml::_('select.option', '//ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js', '1.6.4');
		$options[] = JHtml::_('select.option', '//ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js', '1.6.3');
		$options[] = JHtml::_('select.option', '//ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js', '1.6.2');
		$options[] = JHtml::_('select.option', '//ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js', '1.6.1');
		$options[] = JHtml::_('select.option', '//ajax.googleapis.com/ajax/libs/jquery/1.6.0/jquery.min.js', '1.6.0');
		$options[] = JHtml::_('select.option', '//ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js', '1.5.2');
		$options[] = JHtml::_('select.option', '//ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js', '1.5.1');
		$options[] = JHtml::_('select.option', '//ajax.googleapis.com/ajax/libs/jquery/1.5.0/jquery.min.js', '1.5.0');
		$options[] = JHtml::_('select.option', '//ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js', '1.4.4');
		$options[] = JHtml::_('select.option', '//ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js', '1.4.3');
		$options[] = JHtml::_('select.option', '//ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js', '1.4.2');
		$options[] = JHtml::_('select.option', '//ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js', '1.4.1');
		$options[] = JHtml::_('select.option', '//ajax.googleapis.com/ajax/libs/jquery/1.4.0/jquery.min.js', '1.4.0');
		$options[] = JHtml::_('select.option', '//ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js', '1.3.2');
		$options[] = JHtml::_('select.option', '//ajax.googleapis.com/ajax/libs/jquery/1.3.1/jquery.min.js', '1.3.1');
		$options[] = JHtml::_('select.option', '//ajax.googleapis.com/ajax/libs/jquery/1.3.0/jquery.min.js', '1.3.0');
		$options[] = JHtml::_('select.option', '//ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.min.js', '1.2.6');
		$options[] = JHtml::_('select.option', '//ajax.googleapis.com/ajax/libs/jquery/1.2.0/jquery.min.js', '1.2.0');

		return $options;
	}
}