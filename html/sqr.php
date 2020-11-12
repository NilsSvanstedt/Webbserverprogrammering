<!DOCTYPE html>
<html lang="sv">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kvadratrötter</title>
  <style>
   p, h2, form {
     text-align: center;
  }
  </style>
</head>
<body>
<form method="post">
<p>Ange ett nummer</p>
<input type="number" name="number"/>
<input type="submit" name="submit" value="Ta roten ur!"/>
</form>
<?php
if(isset($_POST['submit'])){
  $nummer = $_POST['number'];
  $kvadratRot = sqrt($nummer);
   
  echo"<h2>Kvadratroten ur $nummer är $kvadratRot</h2>";
  }
?>
</body>
</html>