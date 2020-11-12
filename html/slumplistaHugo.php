<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Slumplista</title>
</head>
<body>
<h2>En slumplista som skriver ut högsta och minsta talet i listan</h2>
<input type="submit" value="Generera ny lista" onClick="window.location.reload();" >
    <?php
echo "<br>";
    $len = 5; //antal olika tal
    $min = 5; // minsta
    $max = 50; // högsta
    $range = []; //array

    echo "<br>";

    echo "Hela listan innehåller följande tal: ";
    for ($i=0; $i < $len; $i++) { 
        $range[$i] = rand($min, $max);
        echo "$range[$i] ";
    }
    echo "<br>";
    $minRange = min($range);
    $maxRange = max($range);
    

    echo "<br>";
    echo "Minsta talet är: {$minRange}" . "<br>";
    echo "<br>";
    echo "Största talet är: {$maxRange}";
   ?>
</body>
</html>