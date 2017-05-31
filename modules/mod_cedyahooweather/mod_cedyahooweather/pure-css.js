(function (h) {
    h.fn.cedyahooweathercss = function (f) {
        f = h.extend({
            unit: "c",
            woeid: !1,
            id: ""
        }, f);

        var now = new Date();
        var query = 'select * from weather.forecast where woeid in (' + h.woeid + ' and u=' + h.unit + ')';

        jQuery.ajax({
            type: 'GET',
            url: 'http://query.yahooapis.com/v1/public/yql?q=' + encodeURIComponent(query) + '&rnd=' + now.getFullYear() + now.getMonth() + now.getDay() + now.getHours() + '&format=json&callback=?',
            dataType: 'json',
            success: function (data) {
                var dataObject = data.query.results.channel;
                var conditionCode = '<i class=\"wi wi-yahoo\"' + dataObject.item.condition.code + '\"></i>\"';
                alert(conditionCode);
                jQuery('#' + h.id).append(conditionCode);
            },
            error: function (data) {
                console.log(data);
            }
        });

    }
})
(jQuery);