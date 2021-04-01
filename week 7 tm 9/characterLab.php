<?php
    include("datalayer.php");
    createDatabase();
    $list = readCharacters();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>All Characters</title>
    <link href="css/style.css" rel="stylesheet"/>
</head>
<body>
<header>
    <h1>Alle [10] characters uit de database </h1>
    <a href="lab 3.php">Locaties</a>
</header>
    <div id = "container">
        <? foreach ($list as $data)
            require("characterList.php")
        ?>
    </div>
</div>
<footer>&copy; [Willem Xu] 2020</footer>
</body>
</html>