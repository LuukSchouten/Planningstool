<?php
    include("datalayer.php");

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $locatieNaam = $_POST["locatieNaam"];
        addLocations($locatieNaam);
        header("Location: lab 3.php?locationAdded");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>
<body>
    <header>
        <a class="backbutton" href="lab 3.php"><i class="fas fa-long-arrow-alt-left"></i> Terug</a>
        <form action="" method="POST">
            <label for="name">Locatie naam</label>
            <input type="text" name="locatieNaam">
            <button type="submit">Toevoegen</button>
        </form>
    </header>
</body>
</html>