<?php

function dbConn(){
    $servername = "localhost";
    $username = "root";
    $password = "mysql";
    $dbname = "planningstool";
    
    try {
      $conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
      // set the PDO error mode to exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      return $conn;
    } catch(PDOException $e) {
      echo "Connection failed: " . $e->getMessage();
    }
}

function getGames(){
    $connect = dbConn();
    $stmt = $connect->prepare("SELECT * FROM games");
    $stmt->execute();
    $result = $stmt->fetchAll();
    $connect=null;
    return $result;
}

function readId($id){
  $connect = dbConn();
  $stmt = $connect->prepare("SELECT * FROM games WHERE id=:id");
  $stmt->bindParam(":id",$id);
  $stmt->execute();
  $result = $stmt->fetch();
  $connect = null;
  return $result;
}

function readId2($id){
  $connect = dbConn();
  $stmt = $connect->prepare("SELECT * FROM planning WHERE id=:id");
  $stmt->bindParam(":id",$id);
  $stmt->execute();
  $result = $stmt->fetch();
  $connect = null;
  return $result;
}

function addPlanning($game, $starttijd, $uitlegger, $spelers){
  $connect = dbConn();
  $stmt = $connect->prepare("INSERT INTO planning(game, starttijd, uitlegger, spelers) VALUES('$game', '$starttijd', '$uitlegger', '$spelers')");
  $stmt->execute();
  $dbConn=null;
}

function updatePlanning($game, $starttijd, $uitlegger, $spelers, $id){
  $connect = dbConn();
  $stmt = $connect->prepare("UPDATE planning SET game = '$game', starttijd = '$starttijd', uitlegger = '$uitlegger', spelers = '$spelers' WHERE id=:id");
  $stmt->bindParam(":id",$id);
  $stmt->execute();
  $connect = null;
}

function planningen(){
  $connect = dbConn();
  $stmt = $connect->prepare("SELECT * FROM planning");
  $stmt->execute();
  $result = $stmt->fetchAll();
  $dbConn=null;
  return $result;
}


?>