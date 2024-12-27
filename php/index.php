<?php
require 'db.php';

session_start();
$car = [];
if($_SERVER['REQUEST_METHOD'] === "GET" && isset($_GET['key'])){
    $key = "%" . $_GET["key"] . "%";
    $sql = "SELECT * FROM car WHERE namecar LIKE ?";
    $stmt = $conn -> prepare($sql);
    $stmt -> bind_param("s", $key);
    $stmt -> execute();
    $result = $stmt -> get_result();
    $car = $result -> fetch_all(MYSQLI_ASSOC);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chu</title>
    <link rel="stylesheet" href="../css/style3.css">
    <link rel="icon" type="image/x-iocn" href="../images/favicon.ico">
</head>
<body>
    <table>

        <form action="index.php" method="GET">
            <input type="text" name="key" id="search" placeholder="Nhap ten xe can tim" required>
            <button type="submit">Search</button>
        </form>

        <div class = "lr">
            <button type='submit'><a name='a' href="login.php">Login</a></button>

            <button type='submit'><a name='a' href="register.php">Register</a></button>
        </div></br>
        <div>
            <button type='submit'><a name='a' href="order.php">Order</a></button>
        </div>
    </table>
    <button type="submit"><a name='hienthi' href="hienthi.php">Hien thi</a></button>
    

</body>
</html>