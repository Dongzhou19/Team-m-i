<?php
$host = 'localhost';
$username = 'root';
$password = '';
$db = 'rolls_royce';

$conn = new mysqli($host, $username, $password, $db);
if(!$conn){
    die('Ket noi that bai!');
}
?>