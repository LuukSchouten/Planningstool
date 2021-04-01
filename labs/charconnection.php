<?php
function dbConn(){
  $servername = "localhost";
  $username = "root";
  $password = "mysql";
  $dbname = "characters";
  
  try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $conn;
  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }
  }

  function readCharacter(){
    $connect = dbConn();
    $stmt = $connect->prepare('SELECT * FROM characters ORDER BY name ASC');
    $stmt->execute();
    $result = $stmt->fetchAll();
    $connect=null; 
    return $result;
  }

  function readId($id){
    $dbConn = dbConn();
	  $stmt = $dbConn->prepare("SELECT * FROM characters WHERE id=:id");
	  $stmt->bindParam(":id",$id);
	  $stmt->execute();
	  $result=$stmt->fetch();
	  $dbConn=null;
	  return $result;
  }
  
  function readMaxIdchar(){
    $connect = dbConn();
    $stmt = $connect->prepare("SELECT MAX(ID) FROM characters");
    $stmt->execute();
    $result=$stmt->fetch();
    $connect=null;
    return $result;
  }

  function readMaxIdlocation(){
    $connect = dbConn();
    $stmt = $connect->prepare("SELECT MAX(ID) FROM locations");
    $stmt->execute();
    $result=$stmt->fetch();
    $connect=null;
    return $result;
  }

  function locationinfo(){
    $connect = dbConn();
    $stmt = $connect->prepare("SELECT * FROM locations");
    $stmt->execute();
    $result = $stmt->fetchAll();
    $connect = null;
    return $result;
  }

  function updateLocation($Value, $id) {
    $dbConn = dbConn();
    $stmt = $dbConn->prepare("UPDATE characters set location = $Value WHERE id=$id");
    $stmt->execute();
    $dbConn=null;
    return $result;
  }
  
  function addLocation($naam){
    $dbConn = dbConn();
    $stmt = $dbConn->prepare("INSERT INTO locations(name) VALUES('$naam')");
    $stmt->execute();
    $dbConn=null;
  }


?>