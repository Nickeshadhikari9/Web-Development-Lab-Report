<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day Finder</title>
</head>
<body>
    <h2>Day Finder</h2>
    <form method="post" action="">
        <label for="day">Enter  a number from 1 to 7:</label>
        <input type="number" name="day" id="day" required>
        <button type="submit">Find Day of week</button>
    </form>
    <?php
     if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $givenday = isset($_POST["day"]) ? (int)$_POST["day"] :0;
        switch($givenday){
            case 1:echo("Sunday");
            break;
            case 2:echo("Monday");
            break;
            case 3:echo("Tuesday");
            break;
            case 4:echo("Wednesday");
            break;
            case 5:echo("Thursday");
            break;
            case 6:echo("Friday");
            break;
            case 7:echo("Saturday");
            break;
            default:echo("Enter a valid number to display day of week(from 1 to 7).");
        }
     }
    ?>
    
</body>
</html>