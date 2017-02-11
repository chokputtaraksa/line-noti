<?php
  require_once './vendor/autoload.php';
  function writeMsg($message) {
    $token = 'EASUotBsecFW6aYjDpKhsLAyV4jamXgXd5bx0kQR0nY';
    echo $message;
    $ln = new KS\Line\LineNotify($token);
    $ln->send($message);
  }

  writeMsg("hello world~~!!");


?>
