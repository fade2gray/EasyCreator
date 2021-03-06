<?php defined('_JEXEC') || die('=;)');
/**
 * @package    EasyCreator
 * @subpackage Frontend
 * @author     Nikolai Plath (elkuku)
 * @author     Created on 24-Sep-2008
 */

jimport('joomla.filesystem.file');

//--Global functions
require_once JPATH_COMPONENT_ADMINISTRATOR.'/includes/functions.php';

//-- Global constants
require_once JPATH_COMPONENT_ADMINISTRATOR.'/includes/defines.php';

$debug = false;

if( ! class_exists('g11n'))
{
    jimport('g11n.language');

    if( ! class_exists('g11n'))
    {
        ecrLoadHelper('g11n_dummy');
    }
}

try
{
    if(class_exists('g11n'))
    {
        //TEMP@@debug
        //    g11n::cleanStorage();//@@DEBUG

        g11n::setDebug($debug);

        //-- Get our special language file
        g11n::loadLanguage();
    }
}
catch(Exception $e)
{
    JFactory::getApplication()->enqueueMessage($e->getMessage(), 'error');
}//try

$document = JFactory::getDocument();

//-- Add css
$document->addStyleSheet('components/com_easycreator/assets/css/default.css');

//-- Add javascript
$document->addScript(JURI::root().'components/com_easycreator/assets/js/easycreator.js');

//-- Include standard html
JLoader::import('helpers.html', JPATH_COMPONENT);

//-- Require the base controller
require_once JPATH_COMPONENT.DS.'controller.php';

$controller = new EasyCreatorController;

easyHTML::start();

//-- Perform the Request task
$controller->execute(JRequest::getVar('task'));

easyHTML::end();

($debug && class_exists('g11n')) ? g11n::debugPrintTranslateds() : null;

//-- Redirect if set by the controller
$controller->redirect();
