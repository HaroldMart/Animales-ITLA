<?php

require('master.php');

plantilla::aplicar()

?>

<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.1/dist/leaflet.css" integrity="sha256-sA+zWATbFveLLNqWO2gtiw3HL/lh1giY/Inf1BJ0z14=" crossorigin=""/>
<script src="https://unpkg.com/leaflet@1.9.1/dist/leaflet.js" integrity="sha256-NDI0K41gVbWqfkkaHj15IzU7PtMoelkzyKp8TOaFQ3s=" crossorigin=""></script>

    <style>
            html, body {
                height: 100%;
                margin: 0;
            }
            .leaflet-container {
                height: 700px;
                width: 100%;
                max-width: 100%;
                max-height: 100%;
            }
    </style>

<div id="map" style="width: 100%; height: 700px;"></div>

<script>

	var map = L.map('map').setView([19.186171279228695, -71.4711649003803], 8);

	var tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
		maxZoom: 19,
		attribution: '&copy; Haroldy'
	}).addTo(map);

</script>

<script>
        
    <?php 

        if(is_dir('data')) {
            $dir = scandir('data');

            foreach($dir as $file) {
                $posible = "data/{$file}";

                if(is_file($posible)) {
                    $tmp = file_get_contents($posible);

                    $tmp = json_decode($tmp);

                    echo "
                    var marker = L.marker([{$tmp -> latitud}, {$tmp -> longitud}]).addTo(map)
                    .bindPopup(\"<b>{$tmp -> nombre}</b><br /><a href='detalles.php?idx = {$file}'>Detalles</a>\");
                    ";
                }
            }
        }
    ?>

</script>
