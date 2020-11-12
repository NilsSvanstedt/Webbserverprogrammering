<!DOCTYPE html>
<html lang="sv">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Slumplista</title>
</head>
<body>
<?php
$numbers = array('0' => rand(1,100), '1' => rand(1,100), '2' => rand(1,100), '3' => rand(1,100), '4' => rand(1,100), '5' => rand(1,100), '6' => rand(1,100));

echo "<h1>Slumplista från 1-100</h1>";

for ($i =0; $i < 7; $i++) {
  echo "<h3> {$numbers[$i]} </h3>";
  echo ' ';
}
sort($numbers);
echo "<h1>Lägsta talet: {$numbers[0]}</h1>";
echo "<h1>Högsta talet: {$numbers[6]}</h1>";
?>  
</body>
</html>
