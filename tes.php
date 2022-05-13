<?php

$url= 'https://ipwhois.app/json/';

$arrContextOptions=array(
      "ssl" => array(
            "verify_peer"=>false,
            "verify_peer_name"=>false,
        ),
    );  

$response = file_get_contents($url, false, stream_context_create($arrContextOptions));

echo $response;
