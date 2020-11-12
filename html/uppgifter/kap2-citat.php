<?php
/**
 * I den här filen gör jag uppgiften om Rasmus Lerdorf i kapitel 2.2
 *
 * Jag ska slumpvist generera ett citat från Rasmus Lerdorf som uppfan PHP
 */

// Citat av Rasmus Lerdorf, som uppfan PHP från början
// http://en.wikiquote.org/wiki/Rasmus_lerdorf
$alla_citat = array(
   "I did not develop the PHP we know today. Dozens, if no thundreds of people, developed PHP. I was simply the first developer.",
   "I actually hate programming, but I love solving problems.",
   "I've never thought of PHP as more than a simple tool to solve problems.",
   "For all the folks getting excited about my quotes. Here is another - Yes, I am a terrible coder, but I am a probably still better than you :)", "<img src='https://i.kym-cdn.com/entries/icons/facebook/000/026/438/obamammaa.jpg' width=100%>"
);

$random_key = array_rand($alla_citat);
$citat = $alla_citat[$random_key];

header("Content-type: text/html; charset=utf-8");
?>
<!DOCTYPE HTML>
<html lang="sv">
<head>
  <meta charset="utf-8" />
  <title>Slumpmässigt valda citat</title> 
  <style>
    body {
       font-family: sans-serif;
       /* + tilläg du vill göra för att göra sidan lite snyggare */
    }
  </style>
</head>
<body>
  <h1>Ditt slumpmässigt valda citat:</h1>
<?php
echo "<p lang=\"en\">{$citat}</p>\n";
?>
</body>
</html>

