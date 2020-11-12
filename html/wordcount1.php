<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Wordcount</title>
  <style>
  h1, form {
    text-align: center;
  }
  </style>
</head>
<body>
<form action="wordcount.php" method="post">
 <label for="words">Enter some words:</label><br>
 <input type="text" id="words" name="words"><br>
 <input type="submit" value="Count the words" name="submit">
</form>  
</body>
<?php
  if (isset($_POST["submit"])) {
    $words = $_POST["words"];
    $numberOfWords = str_word_count( $words);
    echo "<h1>$numberOfWords</h1>";
  }
?>
</html>