<?php 
include 'charconnection.php';
dbConn();

$maxid = readMaxIdlocation();
$data = locationinfo();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>locations</title>
</head>
<body>

<h1>Alle <?php echo $maxid[0];?> locaties uit de database</h1>

<p>NAAM</p>

<?php foreach($data as $location){
    echo $location["name"];
    echo "<br>";
}?>

<br>

<a href="index.php">Home</a>
</br>
</br>
<a href="locatieToevoegen.php">Locatie toevoegen</a>

<p>
&copy; Luuk Schouten 2021
</p>
    
</body>
</html>