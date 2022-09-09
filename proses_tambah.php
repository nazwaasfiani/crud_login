<?php
$username =$_POST['username'];
$password =$_POST['password'];
$id =$POST['id'];

$database = new PDO("mysql:host=localhost;dbname=rumahsakit,'root','' ");
$query = $database->query("insert into siswa values ('','$username','$password')");

if($query){
    header("location:index.php");
}