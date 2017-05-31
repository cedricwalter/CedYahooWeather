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
 * @id          ${licenseId}
 */

// Don't allow direct access to the module.
defined('_JEXEC') or die('Restricted access');

// allow multiple instances on same page
$divId     = "cedyahooweather-".uniqid();

$woeid = $params->get('single-location', '44418');
$size  = "".$params->get('css-size', 40)."px";
$unit  = $params->get('unit', 'c');

$document = JFactory::getDocument();
$document->addStyleSheet(JUri::root() . "/media/mod_cedyahooweather/weather-icons.min.css?v=3.1.2");

$document->addScriptDeclaration("jQuery(document).ready(function () {
            var now = new Date();
        var query = 'select * from weather.forecast where woeid = \'".$woeid."\' and u=\'".$unit."\'';
        var url = 'http://query.yahooapis.com/v1/public/yql?q=' + encodeURIComponent(query) + '&rnd=' + now.getFullYear() + now.getMonth() + now.getDay() + now.getHours() + '&format=json&callback=?';
        
        jQuery.ajax({
            type: 'GET',
            url: url,
            dataType: 'json',
            success: function (data) {
            console.log(data);
            console.log(data);
                var dataObject = data.query.results.channel;
                var conditionCode = dataObject.item.condition.code;
                var conditionText = dataObject.item.condition.text;
                var conditionCode = '<i class=\"wi wi-yahoo-'+conditionCode+'\" style=\"font-size: ".$size.";\"   title=\"'+conditionText+'\"></i>';
                jQuery('#".$divId."').append(conditionCode);
            },
            error: function (data) {
            console.log(data);
            }
        });
        });");

?>
<div class="module<?php echo $moduleclass_sfx ?>">
    <!-- Copyright (C) 2013-2016 galaxiis.com All rights reserved. -->
    <div id="<?php echo $divId ?>"></div>
</div>