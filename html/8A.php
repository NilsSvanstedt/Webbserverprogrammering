<!DOCTYPE html>
<html lang="sv">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php
$a = array("foo", "bar", "baz");
var_dump($a);
print_r($a);

echo "<br>";

$b = array(
  "Röd", 2=> "Gul"
);
$b[] = "Grön"; // Lägger till ett element. PHP väljer index.
$b[1] = "Blå"; // Lägger till ett element. Index angivet i koden.
$b[2] = "Rosa"; // Ändrar ett element. Index angivet i koden.
print_r($b);

echo "<br><br>";

$player = array(
  "name" => "itpastorn",
  "rank" => 1,
  "email" => "spam-me-not@example.com", // Notera kommatecknet
);

echo "Spelarens namn är {$player["name"]}, hans rank är {$player["rank"]} och hans email är {$player["email"]} <br><br>";

$card_asked_for = 5;
$player_1_cards = array(2, 6, 7, 8, 9, 1, 11, 2, 9, 4, 5);
$player_2_cards = array(1, 3, 7, 8, 9, 9, 4, 2, 1);

if ( !in_array($card_asked_for, $player_1_cards, true ) ) {
    // Man får inte fråga efter kort man inte har själv
    // Lägg märke till utropstecknet - "Om inte...."
    // exit("Fusk!"); // Avbryter programmet abrupt
    exit("Spelare ett har blivit avstängd för fusk!");
}
if ( in_array($card_asked_for, $player_2_cards, true ) ) {
    // Spelare två ger sina efterfrågade kort till spelare ett
    echo "Spelare två ger spelare ett kort $card_asked_for";
} else {
    // Spelare ett drar ett kort ur sjön
    echo "Spelare ett drar ett kort ur sjön, det blev kort " . rand(1, 9) . "<br><br>";
}

$country = array(
  "Sverige" => "Stockholm",
  "Norge" => "Oslo",
  "Danmark" => "Köpenhamn",
  "Finland" => "Helsingfors",
  "Australien" => "Canberra",
  "Nya Zeeland" => "Wellington",
  "Island" => "Reykjavik",
  "England" => "London",
  "Österrike" => "Wien",
  "Tyskland" => "Munchen",
);

$keys = array_keys($country);

for ($i = 0; $i < 10; $i++) {
  $key = $keys[$i];
  echo "Huvudstaden i {$key} är {$country[$key]} <br>";
}

?>


</body>
</html>