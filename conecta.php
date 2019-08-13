<?php
//$conexao=mysqli_connect("localhost","root", "", "database_dani");
$servername ="localhost";
$username="root";
$password="";

$conexao= new PDO ("mysql:host=$servername; dbname=database_dani", $username, $password);

?> 

