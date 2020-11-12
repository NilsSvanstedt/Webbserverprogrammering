<?php
/**
 * Skriv ut ett medelande till en GET-parameter
 */

header("Content-type: text/html; charset=utf-8");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sqr</title>
    <style>
        body {
            font-family: sans-serif;
        }
    </style>
</head>
<body>
    <h2>Input</h2>
    <form action="sqrHugo.php" method="POST">
        <label for="number">Number:</label>
        <input type="number" name="number">
        <button type="submit">Send</button>
    </form>

    
    <?php
        // FIltrera input
        $submitted_number = filter_input(INPUT_POST, 'number', FILTER_UNSAFE_RAW, 
                                    FILTER_FLAG_STRIP_LOW);
        // Om det finns ett nummer; Skriv ut ett medelande
        if (!empty($submitted_number)) {
            echo "<h2>Output</h2>";
            echo "Kvadratroten av {$submitted_number} är ";
            echo(sqrt($submitted_number) );
        }

    ?>

</body>
</html>