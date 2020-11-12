<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>9.3 exempel</title>
</head>
<body>
<?php 

function fibonacci_generator()
{
  static $previous, $pre_previous;

  if ( !isset($previous) ) {
    //Första anropet
    $previous = 1;
    $pre_previous = 0;
    return 1;
  }
  // Andra anropet och framåt
  $sum = $previous + $pre_previous;
  $pre_previous = $previous;
  $previous = $sum;
  return $sum;
}

for ($i = 0; $i < 20; $i++) {
  echo fibonacci_generator() . "\n";
}


?>
</body>
</html>