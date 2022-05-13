<?php

aaa();

function aaa() {
    $opts = array('http' =>
        array(
            'proxy'  => 'https://us-central-062.whiskergalaxy.com:443',
        )
    );

    $context  = stream_context_create($opts);
    $result = file_get_contents('http://ipwhois.app/json/', false, $context);

    if(strpos($result, 'ip') !== false) {
        $res_get_ip = json_decode($ret, true);
        echo "\033[1;37mIP : " . $res_get_ip['ip'] . " | Country : " . $res_get_ip['country'] . "\033[1;37m\n";
        aaa();
    } else {
        echo "\033[1;37mIP : null | Country : null\033[1;37m\n";
        aaa();
    }
}
