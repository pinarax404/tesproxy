<?php
$aContext = array(
    'http' => array(
        'proxy'           => '5.9.2.236:1080',
        'request_fulluri' => true,
    ),
);
$cxContext = stream_context_create($aContext);

$result = file_get_contents('http://ip-api.com/json/', false, $cxContext);

echo $result;
