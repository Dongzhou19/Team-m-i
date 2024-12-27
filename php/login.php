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
    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" type="image/x-iocn" href="../images/favicon.ico">
</head>
<body>
    <i style='font-size:40px' class='fas'><a href="index.php">&#xf015;</a></i>
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