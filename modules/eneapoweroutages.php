<?php

function eneaPowerOutages()
{
    $feed_url = ConfigHelper::getConfig('enea.feed_url', 'https://www.wylaczenia-eneaoperator.pl/rss/rss_unpl_7.xml');
    $feed = implode(file($feed_url));
    $xml = simplexml_load_string($feed);
    $json = json_encode($xml);
    return json_decode($json, true);
}

$SMARTY->assign('enea_power_outages', eneaPowerOutages());
$SMARTY->display('eneapoweroutages.html');
