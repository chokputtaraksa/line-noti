<?php
  require_once './vendor/autoload.php';
  $token = 'EASUotBsecFW6aYjDpKhsLAyV4jamXgXd5bx0kQR0nY';

  $ln = new KS\Line\LineNotify($token);
  function writeMsg($message) {
    $ln->send($message);
  }

  writeMsg("hello world~~!!");


?>
