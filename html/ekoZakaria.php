<!DOCTYPE html>
<html lang="sv">
<head>
  <meta charset="utf-8" />
  <title>Flight Test</title>
  <style>
    body {
        font-family: sans-serif;
    }
  </style>
</head>
<body>
<h1>Toyota</h1>
<?php
echo "Lycka till med granskningen";

setlocale(LC_ALL, "sv_SE", "Swedish");
echo "<p>" . strftime("Dagens datum är %A den %d %B, %Y") . "</p>\n";
?>
</body>
</html>