<?php

$sURL = "http://beamtic.com/Examples/ip.php"; // The Request URL

$aHTTP['http']['proxy']           = 'wf-us-015.whiskergalaxy.com:443'; // The proxy ip and port number
$aHTTP['http']['request_fulluri'] = true; // use the full URI in the Request. I.e. http://beamtic.com/Examples/ip.php
$aHTTP['http']['method']          = 'GET';
$aHTTP['http']['header']          = "User-Agent: My PHP Script\r\n";
$aHTTP['http']['header']         .= "Referer: http://beamtic.com/\r\n";

$context = stream_context_create($aHTTP);
$contents = file_get_contents($sURL, false, $context);

echo 'Proxy IP:'. $contents;
