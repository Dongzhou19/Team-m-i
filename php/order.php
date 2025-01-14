<?php
require 'db.php';

session_start();


if(!isset($_SESSION['user_id']) || !isset($_GET['car_id'])){
    header('location: login.php');
    exit;
}


