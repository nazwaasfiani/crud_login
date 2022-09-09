<?php 
$id = $_POST['id'];
$username = $_POST['username'];
$password = $_POST['password'];
$role = $_POST['role'];
$password = $_POST['password'];
$database = new PDO("mysql:host=localhost;dbname=rumahsakit",'root','');
$query = $databse->query('UPDATE `tabel_user` SET id='$id' username='$username',role='$role' WHERE id='$id'');

if($query){
    header("location:index.php");
}