<?php

$opts = array('http' => array(
    'proxy' => '',
    'request_fulluri'=>true,
    'header' => array(
        "content-type: application/x-www-form-urlencoded"
     )
));

$context = stream_context_create($opts);
$s = file_get_contents("https://ipwhois.app/json/", false, $context);

echo $s;
