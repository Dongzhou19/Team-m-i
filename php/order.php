<?php
require 'db.php';

session_start();


$user_id = $_SESSION['user_id'];

// Lấy thông tin đơn hàng của người dùng
$sql = " SELECT oc.id AS order_id, c.namecar, oc.tonggia, oc.thoigiandat FROM order_car oc JOIN car c ON oc.car_id = c.id WHERE oc.user_id = ? ORDER BY oc.thoigiandat DESC";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ Hàng</title>
    <link rel="stylesheet" href="../css/style16.css">
    <link rel="icon" type="image/x-icon" href="../images/favicon.ico">
</head>
<body>
    <header class="header">
        <div class="logo">
            <a href="bdk.php">
                <img src="../images/icon/logo.png" alt="Logo" />
            </a>
        </div>
        <h1>Giỏ Hàng Của Bạn</h1>
    </header>
    <main class="container">
        <h2>Danh Sách Đơn Hàng</h2>

        <?php if ($result->num_rows > 0): ?>
            <table class="cart-table">
                <thead>
                    <tr>
                        <th>Mã Đơn Hàng</th>
                        <th>Tên Xe</th>
                        <th>Tổng Giá</th>
                        <th>Ngày Đặt</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $result->fetch_assoc()): ?>
                        <tr>
                            <td><?= htmlspecialchars($row['order_id']) ?></td>
                            <td><?= htmlspecialchars($row['namecar']) ?></td>
                            <td><?= number_format($row['tonggia'], 0, ',', '.') ?> VND</td>
                            <td><?= htmlspecialchars($row['thoigiandat']) ?></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p>Hiện tại bạn chưa có đơn hàng nào.</p>
        <?php endif; ?>
    </main>
</body>
</html>

