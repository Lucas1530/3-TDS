
<?php 

$carro1 = array("modelo" => "Skyline r34",
 "marca" => "NISSAN",
 "link" => "https://s2-autoesporte.glbimg.com/xhtn0DKzIpkQFD4BLq70eoP5-MM=/0x0:620x413/1000x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_cf9d035bf26b4646b105bd958f32089d/internal_photos/bs/2020/1/B/iLdZL4SE6EgWYXdhS46g/2020-09-15-skylinefrente.jpg");
$carro2 = array("modelo" => "BMW M4",
"marca" => "BMW",
"link" => "https://s2-autoesporte.glbimg.com/FhgW0CuCW8zThdX1or-E3NT3PQs=/0x0:620x413/1000x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_cf9d035bf26b4646b105bd958f32089d/internal_photos/bs/2020/J/y/ZHFACQTYmnSxICAHNPWA/2017-06-19-p90251026-highres-the-new-bmw-m4-cs-04.jpg");

$carro3 = array("modelo" => "Mustang GT V8 2008",
"marca" => "Ford",
"link" => "https://www.pastorecc.com.br/site/photos/cars/2203/bg_2oPjyr9liXbYdNcY6gJ3.jpeg");

$carro4 = array("modelo" => "SRT",
"marca" => "Dogde",
"link" => "https://www.comprecar.com.br/storage/news/featured/PG_x_86Y64pOgo2.jpg");

$carros = array($carro1,$carro2,$carro3,$carro4);

foreach ($carros as $c) {

    
    echo "<div style='border: solid 1px; width: 300px; margin-top: 20px;'>";
    echo $c["modelo"] . "<br>";
    echo $c["marca"] . "<br>";
    echo "<img style='width: 100%; height: auto;' src='" .  $c["link"] . "'  /><br>";
    echo "</div>";
}
?>

