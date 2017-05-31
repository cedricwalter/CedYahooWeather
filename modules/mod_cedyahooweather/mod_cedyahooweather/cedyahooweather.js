(function (h) {
    h.fn.weatherfeed = function (q, f, w) {
        f = h.extend({
            unit: "c",
            image: !0,
            country: !1,
            highlow: !0,
            wind: !0,
            humidity: !1,
            visibility: !1,
            sunrise: !1,
            language: 'english',
            sunset: !1,
            forecast: !1,
            link: !0,
            showerror: !0,
            linktarget: "_self",
            woeid: !1,
            refresh: 0,
            host: ""
        }, f);

        // TODO use jquery globalize
        var german = [];
        german[0] = "Wirbelsturm"; //"tornado"
        german[1] = "Tropensturm"; //"tropical storm"
        german[2] = "Orkan"; //"hurricane"
        german[3] = "schwere Gewitter"; //"severe thunderstorms"
        german[4] = "Gewitter"; //"thunderstorms"
        german[5] = "Regen und Schnee"; //"mixed rain and snow"
        german[6] = "Regen und Graupelschauer"; //"mixed rain and sleet"
        german[7] = "Schnee und Graupelschauer"; //"mixed snow and sleet"
        german[8] = "Nieselregen gefrierend"; //"freezing drizzle"
        german[9] = "Nieselregen"; //"drizzle"
        german[10] = "Eisregen"; //"freezing rain"
        german[11] = "Regenschauer"; //"showers"
        german[12] = "Regen"; //"showers"
        german[13] = "Schneegestöber"; //"snow flurries"
        german[14] = "leichte Schneeschauer"; //"light snow showers"
        german[15] = "Schneetreiben"; // "blowing snow"
        german[16] = "Schnee"; //"snow"
        german[17] = "Hagel"; //"hail"
        german[18] = "Schneeregen"; //"sleet"
        german[19] = "Staub"; //"dust"
        german[20] = "neblig"; //"foggy"
        german[21] = "Dunst"; //"haze"
        german[22] = "rauchig"; //"smoky"
        german[23] = "stürmisch"; //"blustery"
        german[24] = "windig"; //"windy"
        german[25] = "kalt"; //"cold"
        german[26] = "bewölkt"; //"cloudy"
        german[27] = "Nachts überwiegend bewölkt"; //"mostly cloudy (night)"
        german[28] = "Tags überwiegend bewölkt"; //"mostly cloudy (day)"
        german[29] = "Nachts wechselnd bewölkt"; //"partly cloudy (night)"
        german[30] = "Tags wechselnd bewölkt"; //"partly cloudy (day)"
        german[31] = "Nachts klar"; //"clear (night)"
        german[32] = "sonnig"; //"sunny"
        german[33] = "Nachts schön"; //"fair (night)"
        german[34] = "Tags schön"; //"fair (day)"
        german[35] = "Regen und Hagel"; //"mixed rain and hail"
        german[36] = "heiss"; //"hot"
        german[37] = "vereinzelt Gewitter"; //"isolated thunderstorms"
        german[38] = "vereinzelte Gewitter"; //"scattered thunderstorms"
        german[39] = "vereinzelte Gewitter"; //"scattered thunderstorms"
        german[40] = "vereinzelte Schauer"; //"scattered showers"
        german[41] = "schwerer Schneefall"; //"heavy snow"
        german[42] = "vereinzelte Schneeschauer"; //"scattered snow showers"
        german[43] = "schwerer Schneefall"; //"heavy snow"
        german[44] = "wechselnd bewölkt"; //"partly cloudy"
        german[45] = "Gewitterschauer"; //"thundershowers"
        german[46] = "Schneeschauer"; //"snow showers"
        german[47] = "vereinzelt Gewitterschauer"; //"isolated thundershowers"
        german[3200] = "nicht verfügbar"; //"not available"
        german["forecast"] = "Zur Vorhersage &raquo;";
        german["city-not-found"] = "Stadt nicht gefunden";
        german["low"] = "Tiefste Temperatur:";
        german["high"] = "Höchste Temperatur:";
        german["wind"] = "Wind:";
        german["humidity"] = "Luftfeuchtigkeit:";
        german["visibility"] = "Sichtbarkeit:";
        german["sunrise"] = "Sonnenaufgang:";
        german["sunset"] = "Sonnenuntergang:";
        german["Mon"] = "Montag:";
        german["Tue"] = "Dienstag:";
        german["Wed"] = "Mittwoch:";
        german["Thu"] = "Donnerstag:";
        german["Fri"] = "Freitag:";
        german["Sat"] = "Samstag:";
        german["Sun"] = "Sonntag:";

        var french = [];
        french [0] = "tornade";
        french [1] = "tempête tropicale";
        french [2] = "ouragan";
        french [3] = "orages violents";
        french [4] = "orages";
        french [5] = "pluie et neige mélangée";
        french [6] = "pluie mixte et neige fondue";
        french [7] = "neige et neige mélangée";
        french [8] = "freezing drizzle";
        french [9] = "bruine";
        french [10] = "pluie verglaçante";
        french [11] = "pluies";
        french [12] = "pluies";
        french [13] = "rafales de neige";
        french [14] = "neige fraîche";
        french [15] = "souffler de la neige";
        french [16] = "neige";
        french [17] = "grêle";
        french [18] = "grésil";
        french [19] = "poussière";
        french [20] = "brumeux";
        french [21] = "brume";
        french [22] = "enfumé";
        french [23] = "tempëte";
        french [24] = "vent";
        french [25] = "froid";
        french [26] = "nuageux";
        french [27] = "principalement nuageux (nuit)";
        french [28] = "principalement nuageux (jour)";
        french [29] = "nuageux (nuit)";
        french [30] = "partiellement nuageux (jour)";
        french [31] = "clair (nuit)";
        french [32] = "ensoleillé";
        french [33] = "belle (nuit)";
        french [34] = "belle (journée)";
        french [35] = "pluie mixte et grêle";
        french [36] = "chaud";
        french [37] = "orages isolés";
        french [38] = "orages dispersés";
        french [39] = "orages dispersés";
        french [40] = "averses éparses";
        french [41] = "neige lourde";
        french [42] = "averses de neige dispersées";
        french [43] = "neige lourde";
        french [44] = "en partie nuageux";
        french [45] = "tempête de neige";
        french [46] = "neige";
        french [47] = "orages isolés";
        french [3200] = "non disponible";
        french["forecast"] = "prévisions &raquo;";
        french["city-no-found"] = "Ville introuvable";
        french["low"] = "Basse:";
        french["high"] = "Haute:";
        french["wind"] = "Vent";
        french["humidity"] = "Humidité";
        french["visibility"] = "Visibilité";
        french["sunrise"] = "Sunrise";
        french["sunset"] = "Coucher de soleil";
        french["Mon"] = "Lundi:";
        french["Tue"] = "Mardi:";
        french["Wed"] = "Mercredi:";
        french["Thu"] = "Jeudi:";
        french["Fri"] = "Vendredi:";
        french["Sat"] = "Samedi:";
        french["Sun"] = "Dimanche:";

        var english = [];
        english[0] = "tornado";
        english[1] = "tropical storm";
        english[2] = "hurricane";
        english[3] = "severe thunderstorms";
        english[4] = "thunderstorms";
        english[5] = "mixed rain and snow";
        english[6] = "mixed rain and sleet";
        english[7] = "mixed snow and sleet";
        english[8] = "fr:eezing drizzle";
        english[9] = "drizzle";
        english[10] = "freezing rain";
        english[11] = "showers";
        english[12] = "showers";
        english[13] = "snow flurries";
        english[14] = "light snow showers";
        english[15] = "blowing snow";
        english[16] = "snow";
        english[17] = "hail";
        english[18] = "sleet";
        english[19] = "dust";
        english[20] = "foggy";
        english[21] = "haze";
        english[22] = "smoky";
        english[23] = "blustery";
        english[24] = "windy";
        english[25] = "cold";
        english[26] = "cloudy";
        english[27] = "mostly cloudy (night)";
        english[28] = "mostly cloudy (day)";
        english[29] = "partly cloudy (night)";
        english[30] = "partly cloudy (day)";
        english[31] = "clear (night)";
        english[32] = "sunny";
        english[33] = "fair (night)";
        english[34] = "fair (day)";
        english[35] = "mixed rain and hail";
        english[36] = "hot";
        english[37] = "isolated thunderstorms";
        english[38] = "scattered thunderstorms";
        english[39] = "scattered thunderstorms";
        english[40] = "scattered showers";
        english[41] = "heavy snow";
        english[42] = "scattered snow showers";
        english[43] = "heavy snow";
        english[44] = "partly cloudy";
        english[45] = "thundershowers";
        english[46] = "snow showers";
        english[47] = "isolated thundershowers";
        english[3200] = "not available";
        english["forecast"] = "to forecast &raquo;";
        english["city-not-found"] = "City not found";
        english["low"] = "Low:";
        english["high"] = "High:";
        english["wind"] = "Wind";
        english["humidity"] = "Humidity";
        english["visibility"] = "Visibility";
        english["sunrise"] = "Sunrise";
        english["sunset"] = "Sunset";
        english["Mon"] = "Monday:";
        english["Tue"] = "Tuesday:";
        english["Wed"] = "Wednesday:";
        english["Thu"] = "Thursday:";
        english["Fri"] = "Friday:";
        english["Sat"] = "Satursday:";
        english["Sun"] = "Sonnday:";

        var brazilian = [];
        brazilian[0] = "tornado";
        brazilian[1] = "tempestade tropical";
        brazilian[2] = "furacão";
        brazilian[3] = "tempestade severa";
        brazilian[4] = "trovoadas";
        brazilian[5] = "chuva e neve";
        brazilian[6] = "chuva e granizo fino";
        brazilian[7] = "neve e granizo fino";
        brazilian[8] = "garoa gélida";
        brazilian[9] = "garoa";
        brazilian[10] = "chuva gélida";
        brazilian[11] = "chuvisco";
        brazilian[12] = "chuva";
        brazilian[13] = "neve em flocos finos";
        brazilian[14] = "leve precipitação de neve";
        brazilian[15] = "ventos com neve";
        brazilian[16] = "neve";
        brazilian[17] = "chuva de granizo";
        brazilian[18] = "pouco granizo";
        brazilian[19] = "pó em suspensão";
        brazilian[20] = "neblina";
        brazilian[21] = "névoa seca";
        brazilian[22] = "enfumaçado";
        brazilian[23] = "vendaval";
        brazilian[24] = "ventando";
        brazilian[25] = "frio";
        brazilian[26] = "nublado";
        brazilian[27] = "muitas nuvens (noite)";
        brazilian[28] = "muitas nuvens (dia)";
        brazilian[29] = "parcialmente nublado (noite)";
        brazilian[30] = "parcialmente nublado (dia)";
        brazilian[31] = "céu limpo (noite)";
        brazilian[32] = "ensolarado";
        brazilian[33] = "tempo bom (noite)";
        brazilian[34] = "tempo bom (dia)";
        brazilian[35] = "chuva e granizo";
        brazilian[36] = "quente";
        brazilian[37] = "tempestades isoladas";
        brazilian[38] = "tempestades esparsas";
        brazilian[39] = "tempestades esparsas";
        brazilian[40] = "chuvas esparsas";
        brazilian[41] = "nevasca";
        brazilian[42] = "tempestades de neve esparsas";
        brazilian[43] = "nevasca";
        brazilian[44] = "parcialmente nublado";
        brazilian[45] = "chuva com trovoadas";
        brazilian[46] = "tempestade de neve";
        brazilian[47] = "relâmpagos e chuvas isoladas";
        brazilian[3200] = "não disponível";
        brazilian["forecast"] = "previsão &raquo;";
        brazilian["city-not-found"] = "City not found";
        brazilian["low"] = "Low:";
        brazilian["high"] = "High:";
        brazilian["wind"] = "Wind";
        brazilian["humidity"] = "Humidity";
        brazilian["visibility"] = "Visibility";
        brazilian["sunrise"] = "Sunrise";
        brazilian["sunset"] = "Sunset";
        brazilian["Mon"] = "Monday:";
        brazilian["Tue"] = "Tuesday:";
        brazilian["Wed"] = "Wednesday:";
        brazilian["Thu"] = "Thursday:";
        brazilian["Fri"] = "Friday:";
        brazilian["Sat"] = "Satursday:";
        brazilian["Sun"] = "Sonnday:";

        var hungarian = [];
        hungarian[0] = "Tornádó"; //"tornado"
        hungarian[1] = "Trópusi vihar"; //"tropical storm"
        hungarian[2] = "Hurrikán"; //"hurricane"
        hungarian[3] = "Súlyos zivatarok"; //"severe thunderstorms"
        hungarian[4] = "Zivatarok"; //"thunderstorms"
        hungarian[5] = "Vegyes eső és hó"; //"mixed rain and snow"
        hungarian[6] = "Vegyes eső és ónos hó"; //"mixed rain and sleet"
        hungarian[7] = "Vegyes hó és ónos eső"; //"mixed snow and sleet"
        hungarian[8] = "Ónos szitálás"; //"freezing drizzle"
        hungarian[9] = "Szitálás"; //"drizzle"
        hungarian[10] = "Ónos eső"; //"freezing rain"
        hungarian[11] = "Záporok"; //"showers"
        hungarian[12] = "Záporok"; //"showers"
        hungarian[13] = "Hózáporok"; //"snow flurries"
        hungarian[14] = "Könnyű hózáporok"; //"light snow showers"
        hungarian[15] = "Hófúvás"; // "blowing snow"
        hungarian[16] = "Hó"; //"snow"
        hungarian[17] = "Jégeső"; //"hail"
        hungarian[18] = "Ónos eső"; //"sleet"
        hungarian[19] = "Por"; //"dust"
        hungarian[20] = "Ködös"; //"foggy"
        hungarian[21] = "Homály"; //"haze"
        hungarian[22] = "Füstös"; //"smoky"
        hungarian[23] = "Lármás"; //"blustery"
        hungarian[24] = "Szeles"; //"windy"
        hungarian[25] = "Hideg"; //"cold"
        hungarian[26] = "Felhős"; //"cloudy"
        hungarian[27] = "Többnyire felhős (éjszaka)"; //"mostly cloudy (night)"
        hungarian[28] = "Többnyire felhős (nappal)"; //"mostly cloudy (day)"
        hungarian[29] = "Részben felhős (éjszaka)"; //"partly cloudy (night)"
        hungarian[30] = "Részben felhős (nappal)"; //"partly cloudy (day)"
        hungarian[31] = "Tiszta égbolt (éjszaka)"; //"clear (night)"
        hungarian[32] = "Napos"; //"sunny"
        hungarian[33] = "Szép idő (éjszaka)"; //"fair (night)"
        hungarian[34] = "Szép idő (nappal)"; //"fair (day)"
        hungarian[35] = "Eső és jégeső"; //"mixed rain and hail"
        hungarian[36] = "Forróság"; //"hot"
        hungarian[37] = "Elszigetelt zivatarok"; //"isolated thunderstorms"
        hungarian[38] = "Elszórtan zivatarok"; //"scattered thunderstorms"
        hungarian[39] = "Elszórtan zivatarok"; //"scattered thunderstorms"
        hungarian[40] = "Elszórtan záporok"; //"scattered showers"
        hungarian[41] = "Erős havazás"; //"heavy snow"
        hungarian[42] = "Elszórtan hózápor"; //"scattered snow showers"
        hungarian[43] = "Erős havazás"; //"heavy snow"
        hungarian[44] = "Részben felhős"; //"partly cloudy"
        hungarian[45] = "Viharok"; //"thundershowers"
        hungarian[46] = "Hózáporok"; //"snow showers"
        hungarian[47] = "Elszigetelt viharok"; //"isolated thundershowers"
        hungarian[3200] = "Nem elérhető"; //"not available"
        hungarian["forecast"] = "Zur Vorhersage &raquo;";
        hungarian["city-not-found"] = "City not found";
        hungarian["low"] = "Low:";
        hungarian["high"] = "High:";
        hungarian["wind"] = "Wind";
        hungarian["humidity"] = "Humidity";
        hungarian["visibility"] = "Visibility";
        hungarian["sunrise"] = "Sunrise";
        hungarian["sunset"] = "Sunset";
        hungarian["Mon"] = "Monday:";
        hungarian["Tue"] = "Tuesday:";
        hungarian["Wed"] = "Wednesday:";
        hungarian["Thu"] = "Thursday:";
        hungarian["Fri"] = "Friday:";
        hungarian["Sat"] = "Satursday:";
        hungarian["Sun"] = "Sonnday:";

        var locale = english;
        if (f.language == "german")
            locale = german;
        if (f.language == "french")
            locale = french;
        if (f.language == "hungarian")
            locale = hungarian;
        if (f.language == "portugal")
            locale = brazilian;

        var m = "odd";
        return this.each(function (p, s) {
            function x(f, c, e) {
                m = "odd";
                k.html("");
                h.ajax({
                    type: "GET", url: c, dataType: "json", success: function (a) {
                        if (a.query) {
                            if (0 < a.query.results.channel.length)for (var c = a.query.results.channel.length, b = 0; b < c; b++)y(s, a.query.results.channel[b],
                                e); else y(s, a.query.results.channel, e);
                            h.isFunction(w) && w.call(this, k)
                        } else e.showerror && k.html("<p>Weather information unavailable</p>")
                    }, error: function (a) {
                        e.showerror && k.html("<p>Weather request failed</p>")
                    }
                })
            }

            var k = h(s);
            k.hasClass("weatherFeed") || k.addClass("weatherFeed");
            if (!h.isArray(q))return !1;
            var t = q.length;
            10 < t && (t = 10);
            var l = "";
            for (p = 0; p < t; p++)"" != l && (l += ","), l += "'" + q[p] + "'";
            now = new Date;
            var u = "select * from weather.forecast where " + (f.woeid ? "woeid" : "location") + " in (" + l + ") and u='" + f.unit +
                    "'",
                z = "https://query.yahooapis.com/v1/public/yql?q=" + encodeURIComponent(u) + "&rnd=" + now.getFullYear() + now.getMonth() + now.getDay() + now.getHours() + "&format=json&callback=?";
            x(u, z, f);
            0 < f.refresh && setInterval(function () {
                x(u, z, f)
            }, 6E4 * f.refresh);
            var y = function (f, c, e) {
                    f = h(f);
                    if ("Yahoo! Weather Error" != c.description) {
                        var a = c.wind.direction;
                        348.75 <= a && 360 >= a && (a = "N");
                        0 <= a && 11.25 > a && (a = "N");
                        11.25 <= a && 33.75 > a && (a = "NNE");
                        33.75 <= a && 56.25 > a && (a = "NE");
                        56.25 <= a && 78.75 > a && (a = "ENE");
                        78.75 <= a && 101.25 > a && (a = "E");
                        101.25 <=
                        a && 123.75 > a && (a = "ESE");
                        123.75 <= a && 146.25 > a && (a = "SE");
                        146.25 <= a && 168.75 > a && (a = "SSE");
                        168.75 <= a && 191.25 > a && (a = "S");
                        191.25 <= a && 213.75 > a && (a = "SSW");
                        213.75 <= a && 236.25 > a && (a = "SW");
                        236.25 <= a && 258.75 > a && (a = "WSW");
                        258.75 <= a && 281.25 > a && (a = "W");
                        281.25 <= a && 303.75 > a && (a = "WNW");
                        303.75 <= a && 326.25 > a && (a = "NW");
                        326.25 <= a && 348.75 > a && (a = "NNW");
                        var g = c.item.forecast[0];
                        wpd = c.item.pubDate;
                        n = wpd.indexOf(":");
                        tpb = v(wpd.substr(n - 2, 8));
                        tsr = v(c.astronomy.sunrise);
                        tss = v(c.astronomy.sunset);

                        daynight = tpb > tsr && tpb < tss ? "day" : "night";

                        var b = '<div class="weatherItem ' + m + " " + daynight + '"';

                        e.image && (b += ' style="background-image: url(' + e.host + "/media/mod_cedyahooweather/img/" + c.item.condition.code + daynight.substring(0, 1) + '.png); background-repeat: no-repeat;"');

                        b = b + ">" + ('<div class="weatherCity">' + c.location.city + "</div>");

                        if (e.country) {
                            b += '<div class="weatherCountry">' + c.location.country + "</div>";
                        }

                        b += '<div class="weatherTemp">' + c.item.condition.temp + "&deg;</div>";

                        b += '<div class="weatherDesc">' + locale[c.item.condition.code] + '</div>';

                        if (e.highlow) {
                            b += '<div class="weatherRange">' + locale["high"] + ' ' + g.high + "&deg; " + locale["low"] + ' ' + g.low + "&deg;</div>";
                        }

                        if (e.wind) {
                            b += '<div class="weatherWind">' + locale["humidity"] + a + " " + c.wind.speed + c.units.speed + "</div>";
                        }
                        if (e.humidity) {
                            b += '<div class="weatherHumidity">' + locale["humidity"] + c.atmosphere.humidity + "</div>";
                        }
                        if (e.visibility) {
                            b += '<div class="weatherVisibility">' + locale["visibility"] + c.atmosphere.visibility + "</div>";
                        }
                        if (e.sunrise) {
                            b += '<div class="weatherSunrise">' + locale["sunrise"] + c.astronomy.sunrise + "</div>";
                        }

                        if (e.sunset) {
                            b += '<div class="weatherSunset">' + locale["sunset"] + c.astronomy.sunset +
                                "</div>";
                        }
                        if (e.forecast) {
                            b += '<div class="weatherForecast">';
                            a = c.item.forecast;
                            for (g = 0; g < a.length; g++) {
                                b += '<div class="weatherForecastItem" style="background-image: url(' + e.host + '/media/mod_cedyahooweather/forecast/' + a[g].code + 's.png); background-repeat: no-repeat;">';
                                b += '<div class="weatherForecastDay">' + locale[a[g].day] + "</div>";
                                b += '<div class="weatherForecastDate">' + a[g].date + "</div>";
                                b += '<div class="weatherForecastText">' + locale[a[g].code] + "</div>";
                                b += '<div class="weatherForecastRange">' + locale["high"] + a[g].high + " " + locale["low"] + " " + a[g].low + "</div>";
                                b += "</div>";
                            }
                            b += "</div>";
                        }
                        e.link && (b += '<div class="weatherLink"><a href="' + c.link + '" target="' + e.linktarget + '" title="' + locale["forecast"] + '">' + locale["forecast"] + '</a></div>')
                    }
                    else
                        b = '<div class="weatherItem ' + m + '">', b += '<div class="weatherError">' + locale["city-not-found"] + '</div>';
                    b += "</div>";
                    m = "odd" == m ? "even" : "odd";
                    f.append(b)
                },
                v = function (f) {
                    d = new Date;
                    return r = new Date(d.toDateString() + " " + f)
                }
        })
    }
})
(jQuery);