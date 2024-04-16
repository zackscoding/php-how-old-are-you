<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $dateOfBirth = $_POST['dateOfBirth'];
        $endDate = $_POST['endDate'];

    $start_date = strtotime($dateOfBirth); 

    
    $seconds = time() - $start_date; 
    
    $years = floor($seconds / (60 * 60 * 24 * 365));
    $seconds -= $years * (60 * 60 * 24 * 365);
    $months = floor($seconds / (60 * 60 * 24 * 30));
    $seconds -= $months * (60 * 60 * 24 * 30);
    $days = floor($seconds / (60 * 60 * 24));

    }
?>
    <form action="process.php" method="post">
        <label for="dateOfBirth">Input your birthday to see how old you are.</label>
        <input type="date" name="dateOfBirth" id="dateOfBirth">
        
        <input type="submit" >
        <div class="phpCode">
            <?php 
            echo "Your age: $years years, $months months, $days days.";
            ?>
        </div>
    </form>
</div>
</body>
</html>