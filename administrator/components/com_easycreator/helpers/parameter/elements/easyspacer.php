<?php
/**
 * @package    EasyCreator
 * @subpackage Paramelements
 * @author     Nikolai Plath
 * @author     Created on 08-Dec-2008
 *
 * @TODO Remove when J 1.5 support is dropped
 */

//-- No direct access
defined('_JEXEC') || die('=;)');

/**
 * Renders a spacer element.
 *
 * Extended to provide g11n translations.
 *
 * @package 	EasyCreator
 * @subpackage	Parameter
 *
 * @deprecated when support for J 1.5 is dropped
 */
class JElementEasySpacer extends JElement
{
    /**
     * Element name
     *
     * @access	protected
     * @var		string
     */
    protected	$_name = 'EasySpacer';

    /**
     * Fetch the tooltip.
     *
     * @param string $label A
     * @param string $description A
     * @param object &$node A
     * @param string $control_name A
     * @param string $name A
     *
     * @return string
     * @see JElement::fetchTooltip()
     */
    public function fetchTooltip($label, $description, &$xmlElement, $control_name = '', $name = '')
    {
        return '&nbsp;';
    }//function

    /**
     * Fetch the HTML code for the parameter element.
     *
     * @param string $name The field name.
     * @param mixed $value The value of the field.
     * @param object &$node The current XML node.
     * @param string $control_name The name of the HTML control.
     *
     * @return string
     * @see JElement::fetchElement()
     */
    public function fetchElement($name, $value, &$node, $control_name)
    {
        if($value)
        {
            return '<div align="center" style="background-color: #E5FF99; font-size: 1.2em; border-radius: 10px; margin-top: 0.4em;">'.jgettext($value).'</div>';
        }
        else
        {
            return '<hr />';
        }
    }//function
}//class
