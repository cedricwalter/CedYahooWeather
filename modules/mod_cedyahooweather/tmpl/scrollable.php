<?php
/**
 * @package     CedYahooWeather
 * @subpackage  mod_cedyahooweather
 *
 * http://www.gnu.org/licenses/gpl-3.0.html GNU/GPL 3.0</license>
 *
 * @copyright   Copyright (C) 2013-2016 galaxiis.com All rights reserved.
 * @license     The author and holder of the copyright of the software is Cédric Walter. The licensor and as such issuer of the license and bearer of the
 *              worldwide exclusive usage rights including the rights to reproduce, distribute and make the software available to the public
 *              in any form is Galaxiis.com
 *              see LICENSE.txt
 * @id ${licenseId}
 */

// Don't allow direct access to the module.
defined('_JEXEC') or die('Restricted access');

$location = $params->get('location', '44418');


//$language = $params->get('language', 'auto');
//if ($language != 'auto') {
//	$language = CedYahooWeatherHelper::getLanguageCode();
//}

$array = array();
$array[] = "unit : '".$params->get('unit', 'c')."'";
$array[] =   "language: en";
$array[] = CedYahooWeatherHelper::toBoolean($params, 'image');
$array[] = CedYahooWeatherHelper::toBoolean($params, 'country');
$array[] = CedYahooWeatherHelper::toBoolean($params, 'highlow');
$array[] = CedYahooWeatherHelper::toBoolean($params, 'wind');
$array[] = CedYahooWeatherHelper::toBoolean($params, 'humidity');
$array[] = CedYahooWeatherHelper::toBoolean($params, 'visibility');
$array[] = CedYahooWeatherHelper::toBoolean($params, 'sunrise');
$array[] = CedYahooWeatherHelper::toBoolean($params, 'sunset');
$array[] = CedYahooWeatherHelper::toBoolean($params, 'forecast');
$array[] = CedYahooWeatherHelper::toBoolean($params, 'link');
$array[] = CedYahooWeatherHelper::toBoolean($params, 'showerror');
$array[] = CedYahooWeatherHelper::toBoolean($params, 'linktarget');
$array[] = "woeid : true";
$array[] = "host : '".JUri::base()."'";

$refresh = 0;
$array[] = "refresh : $refresh";

$parameters = implode(", ", $array);

$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));
$uuid = uniqid();

?>
<div class="module<?php echo $moduleclass_sfx ?>">
    <!-- Copyright (C) 2013-2016 galaxiis.com All rights reserved. -->
    <?php echo JText::_('MOD_CEDYAHOOWEATHER_ONLY_PREMIUM'); ?>
</div>
