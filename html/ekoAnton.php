<!DOCTYPE html>
<html>
<body>

<?php



$d=strtotime("Today");

echo date("Y-m-d h:i:sa", $d) . "<br>";

$d=strtotime("Tomorrow");

echo date("Y-m-d h:i:sa", $d) . "<br>";

$d=strtotime("+3 Months");


echo date("Y-m-d h:i:sa", $d) . "<br>";

echo ("Hej hej, hoppas allt är bra! :D");


?>

</body>
</html>


