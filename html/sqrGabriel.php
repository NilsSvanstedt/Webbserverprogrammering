<!DOCTYPE html>
<html lang="sv" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sqr of...</title>
  </head>
  <h2>Square root</h2>
  <body>
    <form action="sqrGabriel.php" method="post">
      <label for="nr">Input value:</label><br>
      <input type="text" id="nr" name="nr" value=""><br>
      <input type="submit" value="Submit" name="submit">

    </form>
  </body>
  <?php
  if (isset($_POST["submit"])) {
    $number = $_POST["nr"];
    $sqrNumber = sqrt($number);
    $sqrNumber = (round($sqrNumber,2,PHP_ROUND_HALF_UP));
    echo "<h1> Square root of {$number} is: {$sqrNumber}</h1>";
  }
   ?>
</html>
