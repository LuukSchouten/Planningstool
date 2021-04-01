<?php
    include 'datalayer.php';
    dbConn();
    $games = getGames();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="main.css">
    <title>Games</title>
</head>
<body>
    <a href="index.php">Home</a>
    <div class="wrapper">
        <?php foreach($games as $games){?>
                <div class="box">
                    <a href="<?= "game.php?id=" . $games["id"]; ?>">
                        <p ><?php echo $games["name"];?></p>
                    </a>
                <img class="avatar" src='images/<?php echo $games["image"];?>'></div>
            
        <?php } ?>
    </div>
</body>
</html>