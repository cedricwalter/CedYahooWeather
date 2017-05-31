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

class CedYahooWeatherHelper
{

    public static function addScriptDeclaration($script, $uuid)
    {
        $document = JFactory::getDocument();

        $found = false;
        foreach ($document->_script as $type => $content) {
            $js = strpos("$content", "#cedyahooweather-$uuid");
            if (!is_null($type) && $type == "text/javascript" && $js === true) {
                $found = true;
            }
        }

        if (!$found) {
            $document->addScriptDeclaration($script);
        }
    }

    public static function getScrollable($id, $interval, $vertical, $circular)
    {
    }

    public static function toBoolean($params, $key)
    {
        $value = $params->get($key);

        if ($value == '1') {
            return "$key: true";
        }

        return "$key: false";
    }

    private static function startsWith($haystack, $needle)
    {
        return $needle === "" || strpos($haystack, $needle) === 0;
    }

} 