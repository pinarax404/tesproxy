<?php

$opts = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peername' => false
    ),
    'http' => array(
        'proxy' => 'us-central-062.whiskergalaxy.com:443',
        'request_fulluri'=>true,
        'header' => array(
            "Accept-language: en"
            "Content-type: application/x-www-form-urlencoded"
         )
    )
);

$context = stream_context_create($opts);
$s = file_get_contents("https://ipwhois.app/json/", false, $context);

echo $s;
