<?php 
    include 'charconnection.php';
    dbConn();

    $locatieNaam = $_POST["naam"];
    $nameErr = '';
    $name = '';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["naam"])) {
          $nameErr = "Name is required";
        } else {
          $name = test_input($_POST["naam"]);
          // check if name only contains letters and whitespace
          if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
            $nameErr = "Only letters and white space allowed";
          }else{    
            if(isset($_POST['submit'])){
                addLocation($locatieNaam);
                echo "<script type='text/javascript'>alert('Locatie toegevoegd!');</script>";
            }}
        }
    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Locatie toevoegen</title>
</head>
<body>

<h1> Locatie Toevoegen </h1>

<form method='POST'>
  <label for="naam">Naam:</label>
  <input type="text" name="naam">
  <span class="error">* <?php echo $nameErr;?></span><br><br>
  <input type="submit" value="Submit" name="submit">
</form>

<br>

<a href="index.php">Home</a>
<br><br>
<a href="locations.php">Locatie overzicht</a>

<p>
&copy; Luuk Schouten 2021
</p>
    
</body>
</html>
