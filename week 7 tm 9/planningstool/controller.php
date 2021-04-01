<?php 

include("datalayer.php");

createDatabase();

$gameData = readGames();

if(isset($_GET["submit"])) {
    $gameId = $_GET["spel"];

    
    $gameInfo = readGameInfo($gameId);

    $imagePath = "pictures/" . $gameInfo["image"];
}

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $starttijd;
    if(!isset($_POST["Starttijd"])) {
        $starttijd = "U heeft geen starttijd aangegeven";
    } else {
        $starttijd = " over " . $_POST["Starttijd"]. " minuten";
    }

}