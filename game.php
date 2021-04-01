<?php
include 'datalayer.php';
dbConn();
$id = $_GET["id"];
$data = readId($id);

$game = $data["name"];
$starttijd = $_POST["starttijd"];
$uitlegger = $_POST["uitlegger"];
$spelers = $_POST["spelers"];


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['submit'])){
        addPlanning($game, $starttijd, $uitlegger, $spelers);
        echo "<script type='text/javascript'>alert('Planning toegevoegd!');</script>";
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
    <title>Game</title>
</head>
<body>

<a href="index.php">Home</a>
<a href="gamesoverzicht.php">Games</a>

<h1><?php echo $data["name"];?></h1>

<img src="images/<?php echo $data["image"];?>">

<?php echo $data["description"];?>

</br>

<p>Expansions: <?php if($data["expansions"] != null){echo $data["expansions"];}else{echo "Geen";}?></p>
<p>Skills: <?php echo $data["skills"];?></p>
<p>Min-spelers: <?php echo $data["min_players"];?></p>
<p>Max-spelers: <?php echo $data["max_players"];?></p>
<p>Speeltijd: <?php echo $data["play_minutes"];?></p>
<p>Uitleg: <?php echo $data["explain_minutes"];?></p>

</br>
</br>

<a href="<?php echo $data["url"];?>">Website</a>

</br>
</br>

<?php echo $data["youtube"]?>

<h1>Spel inplannen</h1>

<form method="POST">
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