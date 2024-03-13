<?php 
$dataBaseServername = "localhost";
$dataBaseUsername = "root";
$dataBasePassword = "";
$dataBaseName = "rhythmrepublic";

//Create connection
$connection = mysqli_connect($dataBaseServername, $dataBaseUsername, $dataBasePassword, $dataBaseName);

//check connection
if (!$connection) {
    die("Connection Failed: ". mysqli_connect_error());
}
?>