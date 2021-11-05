<?php
  require_once '../vendor/autoload.php';

  use Petrik14s\Batobalint\Halloween\Models\Lako;
  use Petrik14s\Batobalint\Halloween\Models\Esemeny;

  $l1 = new Lako('Laci');
  $l2 = new Lako('Feri');

  $ido = new DateTime();

  $e1 = new Esemeny('szellemezes', $l1, $ido);
  $e1->addPeople($l2);

  echo $l1;

 ?><!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

  </body>
</html>
