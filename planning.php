<?php
    include 'datalayer.php';
    dbConn();

    $data = planningen();
    $gameinfo = getGames();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planning</title>
</head>
<body>

<a href="index.php">Home</a>
</br>
</br>

<?php 
foreach($data as $data){
?>
    
    <div class="planningdiv">

    Game: <?php 
    echo $data["game"];
    ?>
    </br>
    </br>
    Starttijd: <?php
    echo $data["starttijd"];
    ?>
    </br>
    </br>
    Uitlegger: <?php
    echo $data["uitlegger"];
    ?>
    </br>
    </br>
    Spelers: <?php
    echo $data["spelers"];
    ?>
    </br>
    </br>
    <a href="<?= "veranderPlanning.php?id=" . $data["id"]; ?>">Verander planning</a>

    </div>
    </br>
    </br>
    </br>

<?php
}
?>
</body>
</html>