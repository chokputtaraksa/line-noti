<?php
  require_once './vendor/autoload.php';
  $token = 'EASUotBsecFW6aYjDpKhsLAyV4jamXgXd5bx0kQR0nY';

  $ln = new KS\Line\LineNotify($token);

  function writeMsg($message) {
    $text = $message;
    echo $text;
    $ln->send($text);
  }

  writeMsg("hello world~~!!");


?>
