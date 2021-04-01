<?php
    include 'datalayer.php';
    dbConn();
    $id = $_GET["id"];
    $data = readId2($id);
    $games = getGames();

    $game = $_POST["game"];
    $starttijd = $_POST["starttijd"];
    $uitlegger = $_POST["uitlegger"];
    $spelers = $_POST["spelers"];


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if(isset($_POST['submit'])){
            updatePlanning($game, $starttijd, $uitlegger, $spelers, $id);
            echo "<script type='text/javascript'>alert('Planning verandert!');</script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="main.css">
    <title>Planning veranderen</title>
</head>
<body>
<a href="index.php">home</a>
<a href="planning.php">planningen</a>
</br>
</br>
    <form method="POST">
        <label><b>Game: </b></label>
        <select name="game">
            <?php foreach($games as $allgames) { ?>
                <option>
                    <? echo $allgames["name"]; ?>
                </option>
            <? } ?>
        </select>
        <label><b>Starttijd: </b></label>
        <input name="starttijd" value="YYYY-MM-DD hh:mm:ss">
        <label><b>Uitlegger: </b></label>
        <input type="text" name="uitlegger">
        <label><b>Spelers: </b></label>
        <input type="text" name="spelers" value="0">
        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>