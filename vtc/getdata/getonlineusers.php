<?php
$theurl ='https://api.sped-v.de/rest/api?apikey=YOUR-API-KEY&function=getonlineusers';
// die API auslesen
$response = file_get_contents($theurl);
// und den Inhalt ausgeben
echo $response;
// ginge auch mit einem Einzeiler,
// aber so ist es IMO übersichtlicher
	?>