<?php

function powerOutages()
{
    $feed_url = ConfigHelper::getConfig('enea.feed_url', 'https://www.wylaczenia-eneaoperator.pl/rss/rss_unpl_7.xml');
    $feed = implode(file($feed_url));
    $xml = simplexml_load_string($feed);
    $json = json_encode($xml);
    $array = json_decode($json, true);

    return $array;
}

$SMARTY->assign('power_outages', powerOutages());
$SMARTY->display('poweroutages.html');
