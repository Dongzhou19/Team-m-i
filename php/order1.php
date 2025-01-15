<?php
require 'db.php';
session_start();

// Kiểm tra car_id
if (!isset($_GET['car_id']) || !is_numeric($_GET['car_id'])) {
    die("Không có xe nào được chọn hoặc ID không hợp lệ! <a href='search.php'>Quay lại</a>");
}

$car_id = (int)$_GET['car_id'];  // Chuyển car_id thành số nguyên


$sql = "SELECT namecar, giaca FROM car WHERE id = ?";
$stmt = $conn->prepare($sql);
if (!$stmt) {
    die("Truy vấn lỗi: " . $conn->error);
}
$stmt->bind_param("i", $car_id);
$stmt->execute();
$result = $stmt->get_result();
$car = $result->fetch_assoc();

if (!$car) {
    die("Xe không tồn tại! <a href='search.php'>Quay lại</a>");
}

$namecar = $car['namecar'];
$giaca = $car['giaca'];
$cars = [$car];

// Xử lý khi người dùng đặt xe
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $tonggia = $car['giaca'];
    $user_id = $_SESSION['user_id'];
    
    if (!isset($_SESSION['user_id'])) {
        die("Vui lòng đăng nhập để đặt xe! <a href='login.php'>Đăng nhập</a>");
    }

    $sql = "INSERT INTO order_car (user_id, car_id, tonggia) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        die("Truy vấn lỗi: " . $conn->error);
    }
    
    // Bind tham số với đúng kiểu dữ liệu
    $stmt->bind_param("iid", $user_id, $car_id, $tonggia);
    
    if ($stmt->execute()) {
        // Cập nhật trạng thái xe sau khi đặt
        $sql_update = "UPDATE car SET available = FALSE WHERE id = ?";
        $stmt_update = $conn->prepare($sql_update);
        if (!$stmt_update) {
            die("Truy vấn lỗi khi cập nhật trạng thái xe: " . $conn->error);
        }
        $stmt_update->bind_param("i", $car_id);
        if ($stmt_update->execute()) {

            // Lưu thông báo thành công vào session
            $_SESSION['order_success'] = "Đặt hàng thành công! Xe đã được đặt.";
            header("Location: order.php"); // Chuyển hướng về trang đặt hàng
            exit;
        } else {
            echo "Đặt xe thành công nhưng không thể cập nhật trạng thái xe: " . $stmt_update->error;
        }
    } else {
        echo "Đặt xe thất bại! Lỗi: " . $stmt->error;
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order</title>
    <link rel="stylesheet" href="../css/style15.css">
    <link rel="icon" type="images/x-iocn" href="../images/favicon.ico">
    <script>
        const carData = <?= json_encode($cars) ?>;

        function updatePrice() {
            const nameInput = document.getElementById('namecar').value.toLowerCase();
            const priceField = document.getElementById('giaca');

            // Tìm xe theo tên
            const car = carData.find(car => car.namecar.toLowerCase() === nameInput);

            // Cập nhật giá tiền nếu tìm thấy, nếu không thì đặt giá trị mặc định
            if (car) {
                priceField.value = new Intl.NumberFormat('vi-VN').format(car.giaca) + ' VND';
            } else {
                priceField.value = 'Xe không tồn tại hoặc giá chưa được cập nhật';
            }
        }
    </script>
</head>
<body>
    <header>
      <nav class="navbar">
        <div class="tong">
        <div class="logo">
            <a href="bdk.php">
                <img src="../images/icon/logo.png" alt="Logo" />
            </a>
          </div>
          <ul class="nav-links">
          <li><a href="information.php">Thông tin</a></li>
              <li><a href="https://luxuo.vn/motoring/nhung-dac-quyen-duy-nhat-chi-co-tai-trung-tam-dich-vu-rolls-royce-vietnam.html">Quyền lợi</a></li>
              <li><a href="danhgia.php">Đánh giá</a></li>
              <li><a href="thongtinxe.php">Danh sách</a></li>
          </ul>
        </div>
        <div class="search-cart">
            <form action="search.php">
            <div class="search-cart">

              <button class="search-button">
                <img src="../images/icon/timkiem.png" alt="Search" />
              </button>
            </div>
          </form>
         <div class="search-cart">
            <button class="cart">
              <a href="order.php">
                <img src="../images/icon/gio_hang.png" alt="Cart" />
              </a> 
            </button>
          </div>
          <div class="search-cart">
            <button class="lo">
                <a  href='logout.php'>
                    <img src="../images/icon/logout.png" alt="logout">
                </a>
            </button>
          
          </div>
        </div>
      </nav>
    </header>
    
    <div class="wrapper">
        <form method="POST" action="order.php?car_id=<?= $car_id ?>">
            <div class="h2">
                <h2>Order</h2>
            </div>

            <div>
                <label>Tên xe:</label><br>
                <input type="text" name="nxe" id="namecar" value="<?= htmlspecialchars($namecar) ?>" readonly>
            </div><br>

            <div>
                <label for="giaca">Giá tiền:</label><br>
                <input type="text" id="giaca" name="giaca" value="<?= number_format($giaca, 0, ',', '.') ?> VND" readonly>
            </div><br>
            <br>
            <br>
            <br>
            <button type="submit">Đặt hàng</button>

        </form>
    </div><br>   
</body>
</html>
