<?php
/**
 * Visa datum, klockslag och liknande
 *
 * Detta är övningen som motsvarar avsnitt 2.1 i läroboken Webbserverprogrammering 1
 */

date_default_timezone_set("Europe/Stockholm");
setlocale(LC_ALL, "sv_SE", "Swedish");

header("Content-type: text/html; charset=utf-8"); ?>
<!DOCTYPE html>
<html lang="sv">
<head>
  <meta charset="utf-8" />
  <title>Learning By Doing</title>
  <style>
    body {
        font-family: sans-serif;
        /* + tillägg du vill göra för att göra sidan lite snyggare */
    }
  </style>
</head>
<body>
  <h1>Learning By Doing</h1>
<?php
echo "<p>" . strftime("%c") . "</p>\n";
echo "<p>" . strftime("%y-%m-%d") . "</p>\n";
echo "<p>" . strftime("%a") . "</p>\n";
echo "<p>" . strftime("%A, %d %B %Y") . "</p>\n";
echo "<p>" . strftime("%T") . "</p>\n";
echo "<p>" . strftime("%A den %d %B, %Y") . "</p>\n";
echo "<p>" . strftime("Klockan %H:%M:%S") . "</p>\n";
// Kortform av förra exemplet, strular EJ på Windows
echo "<p>" . strftime("Klockan %T") . "</p>\n";
echo "<p>" . strftime("Klockan %R") . "</p>\n";
// Nedanstående strular också EJ på Windows
echo "<p>" . strftime("Veckonummer: %V") . "</p>\n";

?>
</body>
</html>
