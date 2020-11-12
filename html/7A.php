<?php

// Sätt standardvärde (default) för alla mb-funktioner
mb_internal_encoding("UTF-8");

// Hämta data från formuläret
$submitted_word1 = filter_input(INPUT_GET, 'word1', FILTER_UNSAFE_RAW, FILTER_FLAG_STRIP_LOW);
$submitted_word2 = filter_input(INPUT_GET, 'word2', FILTER_UNSAFE_RAW, FILTER_FLAG_STRIP_LOW);
$submitted_word3 = filter_input(INPUT_GET, 'word3', FILTER_UNSAFE_RAW, FILTER_FLAG_STRIP_LOW);

// En variabel som håller reda på om vi fått något användbart
// Vi börjar med att förutsätta att så inte är fallet

$worddata1 = false;
if (!empty($submitted_word1) ) {
   // Ta bort onödig whitespace i början och slutet
   $submitted_word1 = trim($submitted_word1);
   // Säkra namnet för en HTML_output
   $output_word1 = htmlspecialchars($submitted_word1, ENT_QUOTES);
   // Antal tecken i namnet
   $charcount1 = mb_strlen($submitted_word1);
   $worddata1 = true;
}

$worddata2 = false;
if (!empty($submitted_word2) ) {
   // Ta bort onödig whitespace i början och slutet
   $submitted_word2 = trim($submitted_word2);
   // Säkra namnet för en HTML_output
   $output_word2 = htmlspecialchars($submitted_word2, ENT_QUOTES);
   // Antal tecken i namnet
   $charcount2 = mb_strlen($submitted_word2);
   $worddata2 = true;
}

$worddata3 = false;
if (!empty($submitted_word3) ) {
   $submitted_word3 = trim($submitted_word3);
   // Säkra namnet för en HTML_output
   $output_word3 = htmlspecialchars($submitted_word3, ENT_QUOTES);
   // Antal tecken i namnet
   $charcount3 = mb_strlen($submitted_word3);
   $worddata3 = true;
}

header("Content-type: text/html; charset=utf-8");
?>
<!DOCTYPE html>
<html lang="sv">
<head>
  <meta charset="utf-8" />
  <title>Uppgift 7A: Tre ord</title>
  <style>
    body {
        font-family: sans-serif;
        max-width: 500px;
        margin: auto;
    }
    dt {
        margin-top: 1em;
    }
  </style>
</head>
<body>
  <h1>Uppgift 7A: Tre ord</h1>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
    <p>
      <label for="name">Ord Ett</label>
      <input type="text" name="word1" id="word1" placeholder="ex. Banan" />
    </p>
    <p>
      <label for="name">Ord Två</label>
      <input type="text" name="word2" id="word2" placeholder="ex. Lastbil" />
    </p>
    <p>
      <label for="name">Ord Tre</label>
      <input type="text" name="word3" id="word3" placeholder="ex. Webbkaka" />
    </p>
    <p>
      <input type="submit" value="Testa namnet" />
    </p>
  </form>
<?php
if ( $worddata1 ) {
    echo <<<DATA
    <dl>
      <dt>Ord ett</dt>
      <dd>{$output_word1}</dd>
      <dt>Antal tecken (inklusive ev. mellanslag i mitten)</dt>
      <dd>{$charcount1}</dd>
    </dl>
DATA;
}

if ( $worddata2 ) {
    echo <<<DATA
    <dl>
      <dt>Ord Två</dt>
      <dd>{$output_word2}</dd>
      <dt>Antal tecken (inklusive ev. mellanslag i mitten)</dt>
      <dd>{$charcount2}</dd>
    </dl>
DATA;
}

if ( $worddata3 ) {
    echo <<<DATA
    <dl>
      <dt>Ord Tre</dt>
      <dd>{$output_word3}</dd>
      <dt>Antal tecken (inklusive ev. mellanslag i mitten)</dt>
      <dd>{$charcount3}</dd>
    </dl>
DATA;
}
?>
</body>
</html>

