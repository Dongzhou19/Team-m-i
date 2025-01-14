<?php
require 'db.php';

session_start();
if($_SERVER["REQUEST_METHOD"] === "POST"){
    $email = $_POST["email"];
    $password_id = $_POST["password_id"];
    //kiem tra dang nhap
    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = $conn -> prepare($sql);
    $stmt -> bind_param("s", $email);
    $stmt -> execute();
    $result = $stmt -> get_result();
    $user = $result -> fetch_assoc();

    if($user && password_verify($password_id, $user['password_id'])){
        $_SESSION['user_id'] = $user['id'];
        echo "Dang nhap thanh cong!";
        header("Location: bdk.php");
    }
    else{
        echo "Sai Email hoac mat khau!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/style5.css">
    <link rel="icon" type="image/x-iocn" href="../images/favicon.ico">
</head>
<body>
<header>
      <nav class="navbar">
        <div class="tong">
        <div class="logo">
            <a href="indexson.php">
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

          <button class="search-button">
            <img src="../images/icon/timkiem.png" alt="Search" />
          </button>
          <button class="cart">
            <img src="../images/icon/gio_hang.png" alt="Cart" />
          </button>
        </div>
      </nav>
</header>
    <div class="wrapper">
        <form action="login.php" method="POST">
            <h2>
                Login
            </h2>
            <div class="input-field">
                <input type="Email" name="email" placeholder="Email" required>
                <label for="email"></label>
            </div>
            <div class="input-field">
                <input type="password" name="password_id" placeholder="Password" required>
                <label for="password_id"></label>
            </div>
            <div class="forget">
                <label for="remember">
                    <input type="checkbox" id="remember">
                    <p>Remember me</p>
                </label>
                <a href="#">Forgot password</a>
            </div>
            <button type="submit">LOGIN</button>
            <div class="register">
                <p>Don't have an account ? <a href="register.php">Register</a></p>
            </div>
        </form>
    </div>
    
    

</body>
</html>