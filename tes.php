<?php

aaa();

function aaa() {
    curl_setopt($c, CURLOPT_URL, 'https://ipwhois.app/json/');
    curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($c, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($c, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($c, CURLOPT_HTTPPROXYTUNNEL, true);
    curl_setopt($c, CURLOPT_PROXY, 'us-central-062.whiskergalaxy.com:443');

    $ret = curl_exec($c);
    if(strpos($ret, 'ip') !== false) {
        $res_get_ip = json_decode($ret, true);
        echo "\033[1;37mIP : " . $res_get_ip['ip'] . " | Country : " . $res_get_ip['country'] . "\033[1;37m\n";
        aaa();
    } else {
        echo "\033[1;37mIP : null | Country : null\033[1;37m\n";
        aaa();
    }
}
