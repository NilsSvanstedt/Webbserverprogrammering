<!DOCTYPE html>
<html lang="sv">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Eko Födelsedag</title>
  <style>
  h1 {
    text-align: center;
  }
  </style>
</head>
<body>
<?php
$idag = time();

$födelsedag = mktime(0,0,0,12,23,2020);

$nedräkning = round(($födelsedag-$idag));

echo "<h1>$nedräkning sekunder till Nils födelsedag :P</h1>";
?>
</body>
</html>