<!DOCTYPE html>
<html lang="sv">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial scale=1.0">
    <title> New Script</title>
    </head>
    <body>
<form action="wordcount.php" method="post">
<label for="sentence"></label>
<input type="text" name="characters" placeholder="Skriv något random">
<input type="submit" name="submit" value="Avgör om inmatningen är består av text eller siffror">
</form>

<?php

if (isset($_POST['submit'])) {
$input = $_POST['characters'];
if (is_numeric($input)) {
    echo $input . " består av siffor";
}
else{
    echo $input . "består av text";
}
}


?>
</body>
 </html>
