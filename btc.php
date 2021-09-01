<?php

$token = "7TQF9mlleyYda37O5aJa6jOZYCfPj3gX9MPAfIvE";
$bank = "bca";
$matauang = "usd";
$api = "https://api.kurs.web.id/api/v1/?token=$token&bank=$bank&matauang=$matauang";
$kurs = file_get_contents("$api");
$data = json_decode($kurs);

$content = json_decode(file_get_contents('https://api.coindesk.com/v1/bpi/currentprice.json'), true);

echo "1 BTC = " . $content['bpi']['USD']['rate'] . " USD\n";
echo "1 BTC = " . $content['bpi']['GBP']['rate'] . " GBP\n";
echo "1 BTC = " . $content['bpi']['EUR']['rate'] . " EURO\n";


// ambil kurs jual
echo "1 BTC = " . $data->jual * $content['bpi']['USD']['rate_float'] . " IDR\n";
