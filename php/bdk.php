<?php 
require 'db.php';

session_start();
if(!isset($_SESSION['user_id'])){
    header('Location: login.php');
    exit;
}
echo "Chao mung quy khach! <a href='logout.php'>Logout</a>";
?>