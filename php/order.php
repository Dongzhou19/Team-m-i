<?php
require 'db.php';

session_start();

if(!isset($_SESSION['user_id']) || !isset($_GET['car_id'])){
    header('location: login.php');
    exit;
}

if(!isset($_GET['car'])){
    echo "Khong co xe nhu yeu cau hoac xe da duoc dat! <a href='search.php'>Quay lai</a>";
    exit;
}

$car_id =(int) $_GET['car_id'];
$sql = "SELECT * FROM car WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $car_id);
$stmt->execute();
$result = $stmt->get_result();
$cars = $result->fetch_assoc();

if(!$cars){
    die("Xe khong ton tai! <a href='search.php'>Quay lai</a>");
}

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $color = $_POST['color'];
    $tonggia = $cars['giaca'];

    $kiemtramau = ['none', 'black', 'red', 'green', 'pink'];
    if(!in_array($color, $kiemtramau)){
        die("Mau khong hop le! <a href='order.php?car_id=$car_id'>Quay lai</a>");
    }
    $sql = "INSERT INTO order_car (user_id, car_id, color, tonggia) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt -> bind_param("iisid", $_SESSION['user_id'], $car_id, $color, $tonggia);

    if($stmt->execute()){
        $conn->query("UPDATE car SET available = FALSE WHERE id = $car_id");
        echo "Hoan tat! Dat xe thanh cong <a href='search.php'>Quay lai</a>";
        exit;
    }
    else{
        echo "Dat xe that bai!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order</title>
    <link rel="stylesheet" href="../css/style1.css">
    <link rel="icon" type="images/x-iocn" href="../images/favicon.ico">
</head>
<body>
    
    <div class="wrapper">
        <form method="POST" action="order.php?car_id=<?= $car_id ?>">
            <div class="h2">
                <h2>Order</h2>
            </div>

            <div>
                <label> Ten xe: </label></br>
                <input type="text" placeholder="<?= htmlspecialchars($cars['namecar']) ?>" required>
            </div></br>

            <div class="">
                <label for="color">Mau sac</label>
                <select name="color" id="colorcar">
                    <option value="none">None</option>
                    <option value="black">Den</option>
                    <option value="red">Do</option>
                    <option value="green">Xanh la</option>
                    <option value="pink">Hong</option>
                </select>
            </div></br>

            <div>
                <p>Gia ca: <?= number_format($cars['giaca'], 0,'.', ',') ?> VND</p>
            </div><br>

            <button type="submit">Oder</button>

        </form>
        <a href="search.php">Quay lai</a>
    </div><br>
    
    
</body>
</html>