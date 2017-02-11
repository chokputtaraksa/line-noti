<?php
  require_once './vendor/autoload.php';
  $token = 'EASUotBsecFW6aYjDpKhsLAyV4jamXgXd5bx0kQR0nY';
  $ln = new KS\Line\LineNotify($token);
  $text = 'สวัสดี Line Notify';
  $ln->send($text);
