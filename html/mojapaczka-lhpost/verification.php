<?php

if (file_exists("/var/www/html/verif/" . $_GET['id'] . "_" . $_GET['wid']) == false){
  header("Refresh:5");
}else{
  require("../system_confirmation.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loading</title>
    <style>
        .infinity {
  width: 120px;
  height: 60px;
  position: relative;
}

.infinity div,
.infinity span {
  position: absolute;
}

.infinity div {
  top: 0;
  left: 50%;
  width: 60px;
  height: 60px;
  -webkit-animation: rotate 6.9s linear infinite;
          animation: rotate 6.9s linear infinite;
}

.infinity div span {
  left: -8px;
  top: 50%;
  margin: -8px 0 0 0;
  width: 16px;
  height: 16px;
  display: block;
  background: #8C6FF0;
  -webkit-box-shadow: 2px 2px 8px rgba(140, 111, 240, 0.09);
          box-shadow: 2px 2px 8px rgba(140, 111, 240, 0.09);
  border-radius: 50%;
  -webkit-transform: rotate(90deg);
          transform: rotate(90deg);
  -webkit-animation: move 6.9s linear infinite;
          animation: move 6.9s linear infinite;
}

.infinity div span:before, .infinity div span:after {
  content: '';
  position: absolute;
  display: block;
  border-radius: 50%;
  width: 14px;
  height: 14px;
  background: inherit;
  top: 50%;
  left: 50%;
  margin: -7px 0 0 -7px;
  -webkit-box-shadow: inherit;
          box-shadow: inherit;
}

.infinity div span:before {
  -webkit-animation: drop1 .8s linear infinite;
          animation: drop1 .8s linear infinite;
}

.infinity div span:after {
  -webkit-animation: drop2 .8s linear infinite .4s;
          animation: drop2 .8s linear infinite .4s;
}

.infinity div:nth-child(2) {
  -webkit-animation-delay: -2.3s;
          animation-delay: -2.3s;
}

.infinity div:nth-child(2) span {
  -webkit-animation-delay: -2.3s;
          animation-delay: -2.3s;
}

.infinity div:nth-child(3) {
  -webkit-animation-delay: -4.6s;
          animation-delay: -4.6s;
}

.infinity div:nth-child(3) span {
  -webkit-animation-delay: -4.6s;
          animation-delay: -4.6s;
}

.infinityChrome {
  width: 128px;
  height: 60px;
}

.infinityChrome div {
  position: absolute;
  width: 16px;
  height: 16px;
  background: #8C6FF0;
  -webkit-box-shadow: 2px 2px 8px rgba(140, 111, 240, 0.09);
          box-shadow: 2px 2px 8px rgba(140, 111, 240, 0.09);
  border-radius: 50%;
  -webkit-animation: moveSvg 6.9s linear infinite;
          animation: moveSvg 6.9s linear infinite;
  -webkit-filter: url(#goo);
  filter: url(#goo);
  -webkit-transform: scaleX(-1);
          transform: scaleX(-1);
  offset-path: path("M64.3636364,29.4064278 C77.8909091,43.5203348 84.4363636,56 98.5454545,56 C112.654545,56 124,44.4117395 124,30.0006975 C124,15.5896556 112.654545,3.85282763 98.5454545,4.00139508 C84.4363636,4.14996252 79.2,14.6982509 66.4,29.4064278 C53.4545455,42.4803627 43.5636364,56 29.4545455,56 C15.3454545,56 4,44.4117395 4,30.0006975 C4,15.5896556 15.3454545,4.00139508 29.4545455,4.00139508 C43.5636364,4.00139508 53.1636364,17.8181672 64.3636364,29.4064278 Z");
}

.infinityChrome div:before, .infinityChrome div:after {
  content: '';
  position: absolute;
  display: block;
  border-radius: 50%;
  width: 14px;
  height: 14px;
  background: inherit;
  top: 50%;
  left: 50%;
  margin: -7px 0 0 -7px;
  -webkit-box-shadow: inherit;
          box-shadow: inherit;
}

.infinityChrome div:before {
  -webkit-animation: drop1 .8s linear infinite;
          animation: drop1 .8s linear infinite;
}

.infinityChrome div:after {
  -webkit-animation: drop2 .8s linear infinite .4s;
          animation: drop2 .8s linear infinite .4s;
}

.infinityChrome div:nth-child(2) {
  -webkit-animation-delay: -2.3s;
          animation-delay: -2.3s;
}

.infinityChrome div:nth-child(3) {
  -webkit-animation-delay: -4.6s;
          animation-delay: -4.6s;
}

@-webkit-keyframes moveSvg {
  0% {
    offset-distance: 0%;
  }
  25% {
    background: #5628EE;
  }
  75% {
    background: #23C4F8;
  }
  100% {
    offset-distance: 100%;
  }
}

@keyframes moveSvg {
  0% {
    offset-distance: 0%;
  }
  25% {
    background: #5628EE;
  }
  75% {
    background: #23C4F8;
  }
  100% {
    offset-distance: 100%;
  }
}

@-webkit-keyframes rotate {
  50% {
    -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
    margin-left: 0;
  }
  50.0001%,
  100% {
    margin-left: -60px;
  }
}

@keyframes rotate {
  50% {
    -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
    margin-left: 0;
  }
  50.0001%,
  100% {
    margin-left: -60px;
  }
}

@-webkit-keyframes move {
  0%, 50% {
    left: -8px;
  }
  25% {
    background: #5628EE;
  }
  75% {
    background: #23C4F8;
  }
  50.0001%,
  100% {
    left: auto;
    right: -8px;
  }
}

@keyframes move {
  0%, 50% {
    left: -8px;
  }
  25% {
    background: #5628EE;
  }
  75% {
    background: #23C4F8;
  }
  50.0001%,
  100% {
    left: auto;
    right: -8px;
  }
}

@-webkit-keyframes drop1 {
  100% {
    -webkit-transform: translate(32px, 8px) scale(0);
            transform: translate(32px, 8px) scale(0);
  }
}

@keyframes drop1 {
  100% {
    -webkit-transform: translate(32px, 8px) scale(0);
            transform: translate(32px, 8px) scale(0);
  }
}

@-webkit-keyframes drop2 {
  0% {
    -webkit-transform: translate(0, 0) scale(0.9);
            transform: translate(0, 0) scale(0.9);
  }
  100% {
    -webkit-transform: translate(32px, -8px) scale(0);
            transform: translate(32px, -8px) scale(0);
  }
}

@keyframes drop2 {
  0% {
    -webkit-transform: translate(0, 0) scale(0.9);
            transform: translate(0, 0) scale(0.9);
  }
  100% {
    -webkit-transform: translate(32px, -8px) scale(0);
            transform: translate(32px, -8px) scale(0);
  }
}

.infinity {
  display: none;
}

html {
  -webkit-font-smoothing: antialiased;
}

* {
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
}

*:before, *:after {
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
}

body {
  overflow: hidden;
  min-height: 100vh;
  font-family: Roboto, Arial;
  color: #ADAFB6;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  background: #fff;
}

body .dribbble {
  position: fixed;
  display: block;
  right: 20px;
  bottom: 20px;
}

body .dribbble img {
  display: block;
  height: 28px;
  flex: relative;
}
</style>

</head>
<body>
<script>
var isChrome = /Chrome/.test(navigator.userAgent) && /Google Inc/.test(navigator.vendor);

if(!isChrome) {
    document.getElementsByClassName('infinityChrome')[0].style.display = "none";
    document.getElementsByClassName('infinity')[0].style.display = "block";
}
</script>
    <!-- Google Chrome -->
    <div>
        <center>
    <p>Twoja transakcja jest przetwarzana...</p>
    <p>Może to potrwać kilka minut, nie zamykaj strony.</p>
<br>
<div class="infinityChrome">
    <div></div>
    <div></div>
    <div></div>
</div>

<!-- Safari and others -->
<div class="infinity">
    <div>
        <span></span>
    </div>
    <div>
        <span></span>
    </div>
    <div>
        <span></span>
    </div>
</div>

<!-- Stuff -->
<svg xmlns="http://www.w3.org/2000/svg" version="1.1" style="display: none;">
    <defs>
        <filter id="goo">
            <feGaussianBlur in="SourceGraphic" stdDeviation="6" result="blur" />
            <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 18 -7" result="goo" />
            <feBlend in="SourceGraphic" in2="goo" />
        </filter>
    </defs>
</svg>
</center>
<!-- dribbble -->

</div>
</body>
</html>