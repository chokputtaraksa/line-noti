<?php
  require_once './vendor/autoload.php';
  $token = 'EASUotBsecFW6aYjDpKhsLAyV4jamXgXd5bx0kQR0nY';

  function writeMsg($message) {
    $text = $message;
    echo $text;
    $ln = new KS\Line\LineNotify($token);
    $ln->send($text);
  }

  writeMsg("hello world~~!!");


?>
