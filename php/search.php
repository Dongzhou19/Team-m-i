<?php
include 'db.php';

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
    <title>Search</title>
    <link rel="icon" type="image/x-iocn" href="../images/favicon.ico">
</head>
<body>
    <h2>Search Car</h2>
    <form action="search.php" method=""GET>
        <input type="text" name="key" placeholder="Nhap ten xe can tim" required>
        <button type="submit">Search</button>
    </form>

</body>
</html>