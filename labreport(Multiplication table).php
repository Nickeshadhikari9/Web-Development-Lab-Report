<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiples Generator</title>
</head>
<body>
    <h1>Multiplication Table Generator</h1>
    <form method="post" action="">
        <label for="number">Enter Number:</label>
        <input type="number" name="number" id="number" required>
        <button type="submit">Generate Multiples</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $givenNumber = isset($_POST["number"]) ? (int)$_POST["number"] :0;
        echo "<h3>Multiples of $givenNumber:</h3>";
        for ($i = 1; $i <= 10; $i++) {
            $multiple = $givenNumber * $i;
            echo "$givenNumber x $i = $multiple<br>";
        }
    }
    ?>
</body>
</html>
