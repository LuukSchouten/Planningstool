<?
include("datalayer.php");

$data = readLocations();

if(isset($_GET["delete"])) {
    $id = $_GET["delete"];
    deleteLocations($id);
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
    <h1>Alle 7 locaties uit de database</h1>
    </header>
    <header>
    <a class="backbutton" href="characterLab.php"><i class="fas fa-long-arrow-alt-left"></i> Terug</a>
    <h2>NAME</h2>
        <?
            foreach($data as $data) {
                echo $data["name"];
                ?>
                <a href="lab 3.php?delete=<?= $data["id"]?>" class="verwijder"  onclick="return confirm('Weet je zeker dat je het wilt verwijderen?')">Verwijder</a>
                <?
                echo "<br>";
            }
        ?>
        <br>
        <div color="blue">
            <a href="lab 4.php" class="toevoegen">Locatie toevoegen</a>
            <br>
        </div>
    </header>
    <footer>&copy; [Willem Xu] 2020</footer>
</body>
</html>