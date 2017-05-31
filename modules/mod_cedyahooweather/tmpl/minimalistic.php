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
$unit = $params->get('unit', 'c');
$uuid = uniqid();
$host = JUri::base();

$document = JFactory::getDocument();
$document->addScriptDeclaration("
var woeid = '$location';
var now = new Date();        
// create Yahoo Weather feed API address
var query = \"select * from weather.forecast where woeid in (\"+woeid+\") and u='$unit'\";
            var api = 'http://query.yahooapis.com/v1/public/yql?q='+ encodeURIComponent(query) +'&rnd='+ now.getFullYear() + now.getMonth() + now.getDay() + now.getHours() +'&format=json&callback=?';

jQuery.ajax({
  type: \"GET\",
  url: api,
  dataType: \"json\",
  success: function(data){
//    console.log(data);
    //parse data if success
    var dataObject = data.query.results.channel;
    var conditionCode = dataObject.item.condition.code;
    var conditionText = dataObject.item.condition.text;
    
    var daynight = (now.getHours() > 12)?'n':'d';
    
    var weatherImageUrl = \"$host/media/mod_cedyahooweather/img//\"+conditionCode+daynight+\".png\";
    // debugger
    jQuery(\"#cedyahooweather-$uuid\").append(\"<img title='\"+conditionText+\"' src='\"+weatherImageUrl+\"'>\");
  },
  error: function(data){
    console.log(data);
  }
});
        ");

?>
<div class="module<?php echo $moduleclass_sfx ?>">
    <!-- Copyright (C) 2013-2016 galaxiis.com All rights reserved. -->
    <div id="cedyahooweather-<?php echo $uuid ?>"></div>
</div>