<?php

aaa();

function aaa() {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://ipwhois.app/json/');
    curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_HTTP);
    curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_HTTPS);
    curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS4);
    curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5);
    curl_setopt($ch, CURLOPT_PROXY, 'us-central-071.whiskergalaxy.com:443');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // read more about HTTPS http://stackoverflow.com/questions/31162706/how-to-scrape-a-ssl-or-https-url/31164409#31164409
    curl_setopt($ch, CURLOPT_USERAGENT,'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');
    $output = curl_exec($ch);
    curl_close($ch);
    if(strpos($output, 'ip') !== false) {
        $res_get_ip = json_decode($output, true);
        echo "\033[1;37mIP : " . $res_get_ip['ip'] . " | Country : " . $res_get_ip['country'] . "\033[1;37m\n";
        aaa();
    } else {
        echo "\033[1;37mIP : null | Country : null\033[1;37m\n";
        aaa();
    }
}
