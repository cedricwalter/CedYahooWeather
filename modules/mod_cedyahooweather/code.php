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

class CedYahooWeatherCode
{

    protected static $instance = null;

    var $german = array();
    var $french = array();
    var $english = array();
    var $brazilian = array();
    var $portuguese = array();
    var $hungarian = array();

    public static function getInstance()
    {
        if (!isset(static::$instance)) {
            static::$instance = new static;
        }
        return static::$instance;
    }
    /**
     * code constructor.
     * @param array $this ->french
     */
    protected function __construct()
    {
        $this->german[0] = "Wirbelsturm"; //"tornado"
        $this->german[1] = "Tropensturm"; //"tropical storm"
        $this->german[2] = "Orkan"; //"hurricane"
        $this->german[3] = "schwere Gewitter"; //"severe thunderstorms"
        $this->german[4] = "Gewitter"; //"thunderstorms"
        $this->german[5] = "Regen und Schnee"; //"mixed rain and snow"
        $this->german[6] = "Regen und Graupelschauer"; //"mixed rain and sleet"
        $this->german[7] = "Schnee und Graupelschauer"; //"mixed snow and sleet"
        $this->german[8] = "Nieselregen gefrierend"; //"freezing drizzle"
        $this->german[9] = "Nieselregen"; //"drizzle"
        $this->german[10] = "Eisregen"; //"freezing rain"
        $this->german[11] = "Regenschauer"; //"showers"
        $this->german[12] = "Regen"; //"showers"
        $this->german[13] = "Schneegestöber"; //"snow flurries"
        $this->german[14] = "leichte Schneeschauer"; //"light snow showers"
        $this->german[15] = "Schneetreiben"; // "blowing snow"
        $this->german[16] = "Schnee"; //"snow"
        $this->german[17] = "Hagel"; //"hail"
        $this->german[18] = "Schneeregen"; //"sleet"
        $this->german[19] = "Staub"; //"dust"
        $this->german[20] = "neblig"; //"foggy"
        $this->german[21] = "Dunst"; //"haze"
        $this->german[22] = "rauchig"; //"smoky"
        $this->german[23] = "stürmisch"; //"blustery"
        $this->german[24] = "windig"; //"windy"
        $this->german[25] = "kalt"; //"cold"
        $this->german[26] = "bewölkt"; //"cloudy"
        $this->german[27] = "Nachts überwiegend bewölkt"; //"mostly cloudy (night)"
        $this->german[28] = "Tags überwiegend bewölkt"; //"mostly cloudy (day)"
        $this->german[29] = "Nachts wechselnd bewölkt"; //"partly cloudy (night)"
        $this->german[30] = "Tags wechselnd bewölkt"; //"partly cloudy (day)"
        $this->german[31] = "Nachts klar"; //"clear (night)"
        $this->german[32] = "sonnig"; //"sunny"
        $this->german[33] = "Nachts schön"; //"fair (night)"
        $this->german[34] = "Tags schön"; //"fair (day)"
        $this->german[35] = "Regen und Hagel"; //"mixed rain and hail"
        $this->german[36] = "heiss"; //"hot"
        $this->german[37] = "vereinzelt Gewitter"; //"isolated thunderstorms"
        $this->german[38] = "vereinzelte Gewitter"; //"scattered thunderstorms"
        $this->german[39] = "vereinzelte Gewitter"; //"scattered thunderstorms"
        $this->german[40] = "vereinzelte Schauer"; //"scattered showers"
        $this->german[41] = "schwerer Schneefall"; //"heavy snow"
        $this->german[42] = "vereinzelte Schneeschauer"; //"scattered snow showers"
        $this->german[43] = "schwerer Schneefall"; //"heavy snow"
        $this->german[44] = "wechselnd bewölkt"; //"partly cloudy"
        $this->german[45] = "Gewitterschauer"; //"thundershowers"
        $this->german[46] = "Schneeschauer"; //"snow showers"
        $this->german[47] = "vereinzelt Gewitterschauer"; //"isolated thundershowers"
        $this->german[3200] = "nicht verfügbar"; //"not available"
        $this->german["forecast"] = "Zur Vorhersage &raquo;";
        $this->german["city-not-found"] = "Stadt nicht gefunden";
        $this->german["low"] = "Tiefste Temperatur:";
        $this->german["high"] = "Höchste Temperatur:";
        $this->german["wind"] = "Wind:";
        $this->german["humidity"] = "Luftfeuchtigkeit:";
        $this->german["visibility"] = "Sichtbarkeit:";
        $this->german["sunrise"] = "Sonnenaufgang:";
        $this->german["sunset"] = "Sonnenuntergang:";
        $this->german["Mon"] = "Montag:";
        $this->german["Tue"] = "Dienstag:";
        $this->german["Wed"] = "Mittwoch:";
        $this->german["Thu"] = "Donnerstag:";
        $this->german["Fri"] = "Freitag:";
        $this->german["Sat"] = "Samstag:";
        $this->german["Sun"] = "Sonntag:";


        $this->french [0] = "tornade";
        $this->french [1] = "tempête tropicale";
        $this->french [2] = "ouragan";
        $this->french [3] = "orages violents";
        $this->french [4] = "orages";
        $this->french [5] = "pluie et neige mélangée";
        $this->french [6] = "pluie mixte et neige fondue";
        $this->french [7] = "neige et neige mélangée";
        $this->french [8] = "freezing drizzle";
        $this->french [9] = "bruine";
        $this->french [10] = "pluie verglaçante";
        $this->french [11] = "pluies";
        $this->french [12] = "pluies";
        $this->french [13] = "rafales de neige";
        $this->french [14] = "neige fraîche";
        $this->french [15] = "souffler de la neige";
        $this->french [16] = "neige";
        $this->french [17] = "grêle";
        $this->french [18] = "grésil";
        $this->french [19] = "poussière";
        $this->french [20] = "brumeux";
        $this->french [21] = "brume";
        $this->french [22] = "enfumé";
        $this->french [23] = "tempëte";
        $this->french [24] = "vent";
        $this->french [25] = "froid";
        $this->french [26] = "nuageux";
        $this->french [27] = "principalement nuageux (nuit)";
        $this->french [28] = "principalement nuageux (jour)";
        $this->french [29] = "nuageux (nuit)";
        $this->french [30] = "partiellement nuageux (jour)";
        $this->french [31] = "clair (nuit)";
        $this->french [32] = "ensoleillé";
        $this->french [33] = "belle (nuit)";
        $this->french [34] = "belle (journée)";
        $this->french [35] = "pluie mixte et grêle";
        $this->french [36] = "chaud";
        $this->french [37] = "orages isolés";
        $this->french [38] = "orages dispersés";
        $this->french [39] = "orages dispersés";
        $this->french [40] = "averses éparses";
        $this->french [41] = "neige lourde";
        $this->french [42] = "averses de neige dispersées";
        $this->french [43] = "neige lourde";
        $this->french [44] = "en partie nuageux";
        $this->french [45] = "tempête de neige";
        $this->french [46] = "neige";
        $this->french [47] = "orages isolés";
        $this->french [3200] = "non disponible";
        $this->french["forecast"] = "prévisions &raquo;";
        $this->french["city-no-found"] = "Ville introuvable";
        $this->french["low"] = "Basse:";
        $this->french["high"] = "Haute:";
        $this->french["wind"] = "Vent";
        $this->french["humidity"] = "Humidité";
        $this->french["visibility"] = "Visibilité";
        $this->french["sunrise"] = "Sunrise";
        $this->french["sunset"] = "Coucher de soleil";
        $this->french["Mon"] = "Lundi:";
        $this->french["Tue"] = "Mardi:";
        $this->french["Wed"] = "Mercredi:";
        $this->french["Thu"] = "Jeudi:";
        $this->french["Fri"] = "Vendredi:";
        $this->french["Sat"] = "Samedi:";
        $this->french["Sun"] = "Dimanche:";

        $this->english[0] = "tornado";
        $this->english[1] = "tropical storm";
        $this->english[2] = "hurricane";
        $this->english[3] = "severe thunderstorms";
        $this->english[4] = "thunderstorms";
        $this->english[5] = "mixed rain and snow";
        $this->english[6] = "mixed rain and sleet";
        $this->english[7] = "mixed snow and sleet";
        $this->english[8] = "fr:eezing drizzle";
        $this->english[9] = "drizzle";
        $this->english[10] = "freezing rain";
        $this->english[11] = "showers";
        $this->english[12] = "showers";
        $this->english[13] = "snow flurries";
        $this->english[14] = "light snow showers";
        $this->english[15] = "blowing snow";
        $this->english[16] = "snow";
        $this->english[17] = "hail";
        $this->english[18] = "sleet";
        $this->english[19] = "dust";
        $this->english[20] = "foggy";
        $this->english[21] = "haze";
        $this->english[22] = "smoky";
        $this->english[23] = "blustery";
        $this->english[24] = "windy";
        $this->english[25] = "cold";
        $this->english[26] = "cloudy";
        $this->english[27] = "mostly cloudy (night)";
        $this->english[28] = "mostly cloudy (day)";
        $this->english[29] = "partly cloudy (night)";
        $this->english[30] = "partly cloudy (day)";
        $this->english[31] = "clear (night)";
        $this->english[32] = "sunny";
        $this->english[33] = "fair (night)";
        $this->english[34] = "fair (day)";
        $this->english[35] = "mixed rain and hail";
        $this->english[36] = "hot";
        $this->english[37] = "isolated thunderstorms";
        $this->english[38] = "scattered thunderstorms";
        $this->english[39] = "scattered thunderstorms";
        $this->english[40] = "scattered showers";
        $this->english[41] = "heavy snow";
        $this->english[42] = "scattered snow showers";
        $this->english[43] = "heavy snow";
        $this->english[44] = "partly cloudy";
        $this->english[45] = "thundershowers";
        $this->english[46] = "snow showers";
        $this->english[47] = "isolated thundershowers";
        $this->english[3200] = "not available";
        $this->english["forecast"] = "to forecast &raquo;";
        $this->english["city-not-found"] = "City not found";
        $this->english["low"] = "Low:";
        $this->english["high"] = "High:";
        $this->english["wind"] = "Wind";
        $this->english["humidity"] = "Humidity";
        $this->english["visibility"] = "Visibility";
        $this->english["sunrise"] = "Sunrise";
        $this->english["sunset"] = "Sunset";
        $this->english["Mon"] = "Monday:";
        $this->english["Tue"] = "Tuesday:";
        $this->english["Wed"] = "Wednesday:";
        $this->english["Thu"] = "Thursday:";
        $this->english["Fri"] = "Friday:";
        $this->english["Sat"] = "Satursday:";
        $this->english["Sun"] = "Sonnday:";

        $this->brazilian[0] = "tornado";
        $this->brazilian[1] = "tempestade tropical";
        $this->brazilian[2] = "furacão";
        $this->brazilian[3] = "tempestade severa";
        $this->brazilian[4] = "trovoadas";
        $this->brazilian[5] = "chuva e neve";
        $this->brazilian[6] = "chuva e granizo fino";
        $this->brazilian[7] = "neve e granizo fino";
        $this->brazilian[8] = "garoa gélida";
        $this->brazilian[9] = "garoa";
        $this->brazilian[10] = "chuva gélida";
        $this->brazilian[11] = "chuvisco";
        $this->brazilian[12] = "chuva";
        $this->brazilian[13] = "neve em flocos finos";
        $this->brazilian[14] = "leve precipitação de neve";
        $this->brazilian[15] = "ventos com neve";
        $this->brazilian[16] = "neve";
        $this->brazilian[17] = "chuva de granizo";
        $this->brazilian[18] = "pouco granizo";
        $this->brazilian[19] = "pó em suspensão";
        $this->brazilian[20] = "neblina";
        $this->brazilian[21] = "névoa seca";
        $this->brazilian[22] = "enfumaçado";
        $this->brazilian[23] = "vendaval";
        $this->brazilian[24] = "ventando";
        $this->brazilian[25] = "frio";
        $this->brazilian[26] = "nublado";
        $this->brazilian[27] = "muitas nuvens (noite)";
        $this->brazilian[28] = "muitas nuvens (dia)";
        $this->brazilian[29] = "parcialmente nublado (noite)";
        $this->brazilian[30] = "parcialmente nublado (dia)";
        $this->brazilian[31] = "céu limpo (noite)";
        $this->brazilian[32] = "ensolarado";
        $this->brazilian[33] = "tempo bom (noite)";
        $this->brazilian[34] = "tempo bom (dia)";
        $this->brazilian[35] = "chuva e granizo";
        $this->brazilian[36] = "quente";
        $this->brazilian[37] = "tempestades isoladas";
        $this->brazilian[38] = "tempestades esparsas";
        $this->brazilian[39] = "tempestades esparsas";
        $this->brazilian[40] = "chuvas esparsas";
        $this->brazilian[41] = "nevasca";
        $this->brazilian[42] = "tempestades de neve esparsas";
        $this->brazilian[43] = "nevasca";
        $this->brazilian[44] = "parcialmente nublado";
        $this->brazilian[45] = "chuva com trovoadas";
        $this->brazilian[46] = "tempestade de neve";
        $this->brazilian[47] = "relâmpagos e chuvas isoladas";
        $this->brazilian[3200] = "não disponível";
        $this->brazilian["forecast"] = "previsão &raquo;";
        $this->brazilian["city-not-found"] = "City not found";
        $this->brazilian["low"] = "Low:";
        $this->brazilian["high"] = "High:";
        $this->brazilian["wind"] = "Wind";
        $this->brazilian["humidity"] = "Humidity";
        $this->brazilian["visibility"] = "Visibility";
        $this->brazilian["sunrise"] = "Sunrise";
        $this->brazilian["sunset"] = "Sunset";
        $this->brazilian["Mon"] = "Monday:";
        $this->brazilian["Tue"] = "Tuesday:";
        $this->brazilian["Wed"] = "Wednesday:";
        $this->brazilian["Thu"] = "Thursday:";
        $this->brazilian["Fri"] = "Friday:";
        $this->brazilian["Sat"] = "Satursday:";
        $this->brazilian["Sun"] = "Sonnday:";

        $this->hungarian[0] = "Tornádó"; //"tornado"
        $this->hungarian[1] = "Trópusi vihar"; //"tropical storm"
        $this->hungarian[2] = "Hurrikán"; //"hurricane"
        $this->hungarian[3] = "Súlyos zivatarok"; //"severe thunderstorms"
        $this->hungarian[4] = "Zivatarok"; //"thunderstorms"
        $this->hungarian[5] = "Vegyes eső és hó"; //"mixed rain and snow"
        $this->hungarian[6] = "Vegyes eső és ónos hó"; //"mixed rain and sleet"
        $this->hungarian[7] = "Vegyes hó és ónos eső"; //"mixed snow and sleet"
        $this->hungarian[8] = "Ónos szitálás"; //"freezing drizzle"
        $this->hungarian[9] = "Szitálás"; //"drizzle"
        $this->hungarian[10] = "Ónos eső"; //"freezing rain"
        $this->hungarian[11] = "Záporok"; //"showers"
        $this->hungarian[12] = "Záporok"; //"showers"
        $this->hungarian[13] = "Hózáporok"; //"snow flurries"
        $this->hungarian[14] = "Könnyű hózáporok"; //"light snow showers"
        $this->hungarian[15] = "Hófúvás"; // "blowing snow"
        $this->hungarian[16] = "Hó"; //"snow"
        $this->hungarian[17] = "Jégeső"; //"hail"
        $this->hungarian[18] = "Ónos eső"; //"sleet"
        $this->hungarian[19] = "Por"; //"dust"
        $this->hungarian[20] = "Ködös"; //"foggy"
        $this->hungarian[21] = "Homály"; //"haze"
        $this->hungarian[22] = "Füstös"; //"smoky"
        $this->hungarian[23] = "Lármás"; //"blustery"
        $this->hungarian[24] = "Szeles"; //"windy"
        $this->hungarian[25] = "Hideg"; //"cold"
        $this->hungarian[26] = "Felhős"; //"cloudy"
        $this->hungarian[27] = "Többnyire felhős (éjszaka)"; //"mostly cloudy (night)"
        $this->hungarian[28] = "Többnyire felhős (nappal)"; //"mostly cloudy (day)"
        $this->hungarian[29] = "Részben felhős (éjszaka)"; //"partly cloudy (night)"
        $this->hungarian[30] = "Részben felhős (nappal)"; //"partly cloudy (day)"
        $this->hungarian[31] = "Tiszta égbolt (éjszaka)"; //"clear (night)"
        $this->hungarian[32] = "Napos"; //"sunny"
        $this->hungarian[33] = "Szép idő (éjszaka)"; //"fair (night)"
        $this->hungarian[34] = "Szép idő (nappal)"; //"fair (day)"
        $this->hungarian[35] = "Eső és jégeső"; //"mixed rain and hail"
        $this->hungarian[36] = "Forróság"; //"hot"
        $this->hungarian[37] = "Elszigetelt zivatarok"; //"isolated thunderstorms"
        $this->hungarian[38] = "Elszórtan zivatarok"; //"scattered thunderstorms"
        $this->hungarian[39] = "Elszórtan zivatarok"; //"scattered thunderstorms"
        $this->hungarian[40] = "Elszórtan záporok"; //"scattered showers"
        $this->hungarian[41] = "Erős havazás"; //"heavy snow"
        $this->hungarian[42] = "Elszórtan hózápor"; //"scattered snow showers"
        $this->hungarian[43] = "Erős havazás"; //"heavy snow"
        $this->hungarian[44] = "Részben felhős"; //"partly cloudy"
        $this->hungarian[45] = "Viharok"; //"thundershowers"
        $this->hungarian[46] = "Hózáporok"; //"snow showers"
        $this->hungarian[47] = "Elszigetelt viharok"; //"isolated thundershowers"
        $this->hungarian[3200] = "Nem elérhető"; //"not available"
        $this->hungarian["forecast"] = "Zur Vorhersage &raquo;";
        $this->hungarian["city-not-found"] = "City not found";
        $this->hungarian["low"] = "Low:";
        $this->hungarian["high"] = "High:";
        $this->hungarian["wind"] = "Wind";
        $this->hungarian["humidity"] = "Humidity";
        $this->hungarian["visibility"] = "Visibility";
        $this->hungarian["sunrise"] = "Sunrise";
        $this->hungarian["sunset"] = "Sunset";
        $this->hungarian["Mon"] = "Monday:";
        $this->hungarian["Tue"] = "Tuesday:";
        $this->hungarian["Wed"] = "Wednesday:";
        $this->hungarian["Thu"] = "Thursday:";
        $this->hungarian["Fri"] = "Friday:";
        $this->hungarian["Sat"] = "Satursday:";
        $this->hungarian["Sun"] = "Sonnday:";
    }


    public function translateCode($code, $language)
    {
        if ($language == "english")
            return $this->english[$code];
        if ($language == "german")
            return $this->german[$code];
        if ($language == "french")
            return $this->french[$code];
        if ($language == "hungarian")
            return $this->hungarian[$code];
        if ($language == "portugal")
            return $this->brazilian[$code];
    }

}