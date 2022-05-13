<?php

aaa();

function aaa() {
    $opts = array('http' =>
        array(
            'proxy'  => '5.9.2.236:1080',
            'request_fulluri' => false
        )
    );

    $context  = stream_context_create($opts);
    $result = file_get_contents('https://ipwhois.app/json/', false, $context);

    if(strpos($result, 'ip') !== false) {
        $res_get_ip = json_decode($result, true);
        echo "\033[1;37mIP : " . $res_get_ip['ip'] . " | Country : " . $res_get_ip['country'] . "\033[1;37m\n";
        aaa();
    } else {
        echo "\033[1;37mIP : null | Country : null\033[1;37m\n";
        aaa();
    }
}
