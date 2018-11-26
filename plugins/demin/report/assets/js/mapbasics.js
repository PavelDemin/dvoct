ymaps.ready()
    .done(function (ym) {
        var myMap = new ym.Map('map', {
            center: [135.057732, 48.472584],
            zoom: 7,
            controls: ['smallMapDefaultSet']
        }, {
            searchControlProvider: 'yandex#search'
        });

        jQuery.getJSON("/maps/data", function (json) {
            var geoObjects = ym.geoQuery(json)
                .addToMap(myMap)
                .applyBoundsToMap(myMap, {
                    checkZoomRange: true

                });
        });
    });
