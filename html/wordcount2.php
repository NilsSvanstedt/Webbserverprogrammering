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
<form action="wordcount2.php" method="post">
 <label for="words">Enter letters or and numbers:</label><br>
 <input type="text" id="words" name="words"><br>
 <input type="submit" value="What does my input contain?" name="submit">
</form>  
</body>
<?php
  if (isset($_POST["submit"])) {
    $numbersOrLetters = $_POST["words"];
    if (!empty($numbersOrLetters)) {
      if( preg_match('([a-zA-Z].*[0-9]|[0-9].*[a-zA-Z])', $numbersOrLetters) ) {
        echo "<h1>Your input $numbersOrLetters contains both numbers and letters</h1>";
      }
      elseif (is_numeric($numbersOrLetters)) {
        echo "<h1>Your input $numbersOrLetters contains only numbers</h1>";
      }
      else {
        echo "<h1>Your input $numbersOrLetters contains only letters</h1>";
      }
    }
    else {
      echo "<h1>Your input is empty.</h1>";
    }
  }
?>
</html>