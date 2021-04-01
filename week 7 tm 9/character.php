<?php
    include("datalayer.php");
    createDatabase();

    $id = $_GET["id"];
    $data = readSubject($id);
    $locationData = readLocations();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Character - <? echo $data["name"];?></title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet"/>
</head>
<body>
<header><h1><? echo $data["name"]; ?> </h1>
    <a class="backbutton" href="characterLab.php"><i class="fas fa-long-arrow-alt-left"></i> Terug</a></header>
<div id="container">
    <div class="detail">
        <div class="left">
            <img class="avatar" src="<? echo "images/" . $data["avatar"];?>">
            <div class="stats" style="background-color: <? echo $data["color"]; ?>">
                <ul class="fa-ul">
                    <li><span class="fa-li"><i class="fas fa-heart"></i></span> <? echo $data["health"]; ?></li>
                    <li><span class="fa-li"><i class="fas fa-fist-raised"></i></span> <? echo $data["attack"] ?></li>
                    <li><span class="fa-li"><i class="fas fa-shield-alt"></i></span> <?echo $data["defense"]; ?></li>
                </ul>
                <ul class="gear">
                    <li><b>Weapon</b>: <? echo $data["weapon"]; ?></li>
                    <li><b>Armor</b>: <? echo $data["armor"]; ?></li>
                </ul>
            </div>
        </div>
        <div class="right">
            <p>
                <? echo $data["bio"]; ?>
            </p>
        </div>
        <div style="clear: both">
        <form method="POST">
            <label><b>Huidige Locatie:</b></label>
            <select name="locationOption">
                <?php 
                    foreach($locationData as $locationData) {
                ?>
                <option value="<? echo $locationData["id"] ?>" ><?php echo $locationData["name"]; ?>  </option>
                    <?php } ?>
            </select>
            <input type="submit" name="update" value="update">
        </form>
        <?
            if(isset($_POST["update"])) {
                $Value = $_POST["locationOption"];
                updateLocation($Value, $id);

                $name = $locationData["name"];
            }
        ?>
        </div>
    </div>
</div>
<footer>&copy; [Willem Xu] 2020</footer>
</body>
</html>