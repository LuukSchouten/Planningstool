<?php 

include("datalayer.php");


createDatabase();
$display = "none";
echo "hoi";
$gameData = readGames();

$style = "none";

if(isset($_GET["submit"])) {
    $gameId = $_GET["spel"];


    $gameInfo = readGameInfo($gameId);

    $imagePath = "pictures/" . $gameInfo["image"];
}

?>