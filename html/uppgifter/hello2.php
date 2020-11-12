<?php
if (empty($_GET['name'])) {
   $name = 'du okände';
} else {
   $name = filter_input(INPUT_GET, 'name');
}
// Här börjar output
header("Content-type: text/html; charset=utf-8");
?>
<!DOCTYPE html>
<html lang="sv">
<head>
  <meta charset="utf-8" />
  <title>Hejsan 2</title>
  <style>
    body {
       font-family: sans-serif;

    }
  </style>
</head>
<body>
  <h1>Hejsan 2</h1>
<?php
echo "<p>Hej $name</p>\n";
?>
</body>
</html>