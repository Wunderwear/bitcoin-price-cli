<?php

$content = json_decode(file_get_contents('https://api.coindesk.com/v1/bpi/currentprice.json'), true);
echo "1 BTC = " . $content['bpi']['USD']['rate'] . " USD\n";
echo "1 BTC = " . $content['bpi']['GBP']['rate'] . " GBP\n";
echo "1 BTC = " . $content['bpi']['EUR']['rate'] . " EURO\n";

?>	