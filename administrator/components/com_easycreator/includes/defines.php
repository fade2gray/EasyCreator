<?php
/**
 * @package    EasyCreator
 * @subpackage Base
 * @author     Nikolai Plath
 * @author     Created on 19-Mar-2010
 * @license    GNU/GPL, see JROOT/LICENSE.php
 */

//-- No direct access
defined('_JEXEC') || die('=;)');

/**
 * The OS specific directory separator - @todo remove ?
 */
defined('DS') || define('DS', DIRECTORY_SEPARATOR);

/**
 * Path for extension templates
 */
define('ECRPATH_EXTENSIONTEMPLATES', JPATH_COMPONENT_ADMINISTRATOR.DS.'templates');

/**
 * Path for AutoCodes
 */
define('ECRPATH_AUTOCODES', ECRPATH_EXTENSIONTEMPLATES.DS.'autocodes');

/**
 * Path for Parts
 */
define('ECRPATH_PARTS', ECRPATH_EXTENSIONTEMPLATES.DS.'parts');

/**
 * Path for Logs
 */
define('ECRPATH_LOGS', JPATH_COMPONENT_ADMINISTRATOR.DS.'logs');

/**
 * Path for Scripts
 */
define('ECRPATH_SCRIPTS', JPATH_COMPONENT_ADMINISTRATOR.DS.'scripts');

/**
 * Path for Scripts
 */
define('ECRPATH_HELPERS', JPATH_COMPONENT_ADMINISTRATOR.DS.'helpers');

/**
 * Path for Builds
 */
define('ECRPATH_BUILDS', JPATH_COMPONENT_ADMINISTRATOR.DS.'builds');

/**
 * Path for Exports
 */
define('ECRPATH_EXPORTS', JPATH_COMPONENT_ADMINISTRATOR.DS.'exports');

/**
 * A newline character for cleaner HTML styling
 */
defined('BR') || define('BR', '<br />');

/**
 * A newline character for cleaner <pre> styling
 */
defined('NL') || define('NL', "\n");

$parts = explode('.', JVERSION);

if(3 != count($parts))
{
    die(__FILE__.' - Unfortunately we are not able to determine your Joomla! version :( :(');
}

/**
 * Joomla! version - only the important part..
 */
define('ECR_JVERSION', $parts[0].'.'.$parts[1]);

/**
 * EasyCreator Documentation location - might change sometimes =;)
 */
define('ECR_DOCU_LINK', 'http://wiki.joomla-nafu.de/joomla-dokumentation/Benutzer:Elkuku/Proyektz/EasyCreator');

/**
 * EasyCreator HELP mode.
 */
define('ECR_HELP', JComponentHelper::getParams('com_easycreator')->get('ecr_help'));
