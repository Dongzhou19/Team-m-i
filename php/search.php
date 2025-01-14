<?php
// Kết nối cơ sở dữ liệu
require "db.php";

session_start();

if ($conn->connect_error) {
    die("Kết nối cơ sở dữ liệu thất bại: " . $conn->connect_error);
}
if(!isset($_SESSION['user_id'])){
    header('Location: login.php');
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rolls-Royce Car Information</title>
    <link rel="stylesheet" href="../css/style88.css">
    <link rel="icon" type="image/x-icon" href="../images/favicon.ico">
</head>
<body>
    <header class="header">
        <div class="logo">
            <a href="bdk.php">
                <img src="../images/icon/logo.png" alt="Logo" />
            </a>
        </div>
        <h1>Rolls-Royce - Elegance in Motion</h1>
    </header>
    <main class="container">
        <h2>Danh Sách Xe</h2>

        <form action="search.php" method="GET" class="search-form">
            <input type="text" name="search" id="search" placeholder="Tìm kiếm theo tên xe...">
            <button type="submit">Tìm kiếm</button>
        </form>

        <div class="car-grid">
            <?php 
            $search = $_GET['search'] ?? "";
            $stmt = $conn->prepare("SELECT * FROM car WHERE namecar LIKE ?");
            $searchParam = "%$search%";
            $stmt->bind_param("s", $searchParam);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) { ?>
                    <div class="car-card">
                        <h3><?= htmlspecialchars($row["namecar"]) ?></h3>
                        <p><strong>Giá cả:</strong> <?= number_format($row["giaca"], 0, ',', '.') ?> VND</p>
                        <p><strong>Mô tả:</strong> <?= htmlspecialchars($row["mota"]) ?></p>
                        <a href="order1.php?car_id=<?= $row['id'] ?>" class="buy-button">Mua ngay</a>

                    </div>
                <?php }
            } else { ?>
                <p>Không tìm thấy xe nào phù hợp.</p>
            <?php } ?>
        </div>
    </main>
</body>
</html>
