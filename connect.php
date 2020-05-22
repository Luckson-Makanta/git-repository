<?php 
$hostName = '127.0.0.1';
$userName = 'root';
$password = '';
$dataBase = 'experiment';

$connect = mysqli_connect($hostName, $userName, $password, $dataBase);

if(!$connect){
echo 'connection failed: '.mysqli_error();
}

 ?>