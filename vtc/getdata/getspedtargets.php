<?php
$theurl ='https://api.sped-v.de/rest/api?function=getspedtargets&apikey=YOUR-API-KEY';
// die API auslesen
$response = file_get_contents($theurl);
// und den Inhalt ausgeben
echo $response;
// ginge auch mit einem Einzeiler,
// aber so ist es IMO übersichtlicher
	?>