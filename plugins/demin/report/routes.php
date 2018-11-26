<?php
use Demin\Report\Models\PostReport;


Route::get('/maps/data', function () {
    $coord = PostReport::select()->whereNotNull('lon')->whereNotNull('lat')->get();
    foreach ($coord as $a) {
        $p[] = array("type"=> "Feature",
            "geometry" => array(
                "type"=> "Point",
                "coordinates"=> array($a['lon'],$a['lat']),
            ),
            "properties" => array(
                "balloonContentHeader" => $a['title'],
                "balloonContent" => $a['content'],
                "balloonContentFooter" => "<a href=/report/".$a['slug'].">Перейти к отчету...</a>",
                "hintContent" => $a['title']
            ),
            "options" => array(
                "preset" => "islands#dotIcon",
                "iconColor" => "#2E64FE"
            )
        );
    }

    $response = array(
        "type" => "FeatureCollection",
        "features" => $p

    );

    return Response::json($response);
});


Route::get("/reports/data", function () {
    if (Input::has('param')) {
        $param = Input::get('param');
        $coord = PostReport::select('lon','lat')->where('slug','=',$param)->first();
        if($coord) {
            $p[] = array("type"=> "Feature",
                "geometry" => array(
                    "type"=> "Point",
                    "coordinates"=> array($coord['lon'],$coord['lat']),
                ),
                "properties" => array(
                    "balloonContentHeader" => "Координаты для навигатора",
                    "balloonContent" => $coord['lon']."&nbsp;&nbsp;".$coord['lat'],
                    //  "balloonContentFooter" => "<a href=/reports/".$a['slug'].">Перейти к отчету...</a>",
                    //"hintContent" => $a['lon']." ".$a['lat']
                ),
                "options" => array(
                    "preset" => "islands#dotIcon",
                    "iconColor" => "#2E64FE",
                    "zoom" => "15"
                )
            );
            $response = array(
                "type" => "FeatureCollection",
                "features" => $p

            );

            return Response::json($response);
        } else {
            return Redirect::to('404');
        }

    } else {
        return Redirect::to('404');
    }
});
