<?php
/**
 * @package     CedYahooWeather
 * @subpackage  mod_cedyahooweather
 *
 * @copyright   Copyright (C) 2013-2016 galaxiis.com All rights reserved.
 *
 *
 * @license     The author and holder of the copyright of the software is Cédric Walter. The licensor and as such issuer of the license and bearer of the
 *              worldwide exclusive usage rights including the rights to reproduce, distribute and make the software available to the public
 *              in any form is Galaxiis.com
 *              see LICENSE.txt
 * @id ${licenseId}
 */

// Don't allow direct access to the module.
defined('_JEXEC') or die('Restricted access');

jimport('joomla.application.component.view');

class CedYahooWeatherViewFrontpage extends JViewLegacy
{
    /**
   	 * Display the view
   	 *
   	 * @return	mixed	False on error, null otherwise.
   	 */
   	function display($tpl = null)
    {
        $this->defaultTpl($tpl);
    }

    function defaultTpl($tpl = null)
    {
        JToolBarHelper::title(JText::_('CedYahooWeather'), 'tag.png');

        $user = JFactory::getUser();
        if ($user->authorise('core.admin', 'com_cedyahooweather'))
        {
            JToolbarHelper::preferences('com_cedyahooweather');
        }

        parent::display($tpl);
    }
}
