<?php
function CreateDB($dbname){
  $host="localhost";
  $root="root";
  $root_password="";
  try {
       $dbh = new PDO("mysql:host=$host", $root, $root_password);
       $dbh->exec("CREATE DATABASE IF NOT EXISTS $dbname CHARACTER SET utf8 COLLATE utf8_general_ci;")
           or die(print_r($dbh->errorInfo(), true));
    } catch (PDOException $e) {
        die("DB ERROR: ". $e->getMessage());
    }
	
   }
CreateDB("station");
include_once('database.php');
$r = $db->Execute(file_get_contents('data1.sql'));
if($r !== false)
  echo  "Data are added successfully!<br/>";
  else
 echo  "Error.<br/>";
 ?>

