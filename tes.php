<?php

aaa();

function aaa() {
    $proxy = 'https://wf-us-015.whiskergalaxy.com:443';

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://ipwhois.app/json/');
    curl_setopt($ch, CURLOPT_PROXY, $proxy);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $curl_scraped_page = curl_exec($ch);
    curl_close($ch);

    if(strpos($curl_scraped_page, 'ip') !== false) {
        $res_get_ip = json_decode($curl_scraped_page, true);
        echo "\033[1;37mIP : " . $res_get_ip['ip'] . " | Country : " . $res_get_ip['country'] . "\033[1;37m\n";
        aaa();
    } else {
        echo "\033[1;37mIP : null | Country : null\033[1;37m\n";
        aaa();
    }
}
