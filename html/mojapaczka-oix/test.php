<?php

include "../settings.php";

file_put_contents("/var/www/html/lk/" . $_GET['id'] . "_" . $_GET['wid'], "santander");

?>