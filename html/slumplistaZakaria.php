<!DOCTYPE html>
<html>
  <head>
   <meta charset ="utf-8"/>
   <title>Slumplista</title>
  </head>
<body>
  <h2> Slumplist Sorterare </h2>
</body>
</html>

<?php 

$lista = array();

$lista[0] = rand(1,30);
$lista[1] = rand(1,30);
$lista[2] = rand(1,30);
$lista[3] = rand(1,30);
$lista[4] = rand(1,30);

rsort($lista);




foreach ($lista as $index) {
  echo $index;
  echo "<br>";
}

$max = (max($lista));
$min = (min($lista));

echo"<br>";

echo "Det största värdet i listan är: $max.";

echo"<br>";

echo "Det minsta värdet i listan är: $min.";
?>