<?php
require 'db.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $email = $_POST['email'];
    $password_id = $_POST['password_id'];
    $confirm_password = $_POST['confirm_password'];

    $check_email_sql = "SELECT email FROM users WHERE email = ?";
    $check_stmt = $conn->prepare($check_email_sql);
    $check_stmt->bind_param("s", $email);
    $check_stmt->execute();
    $check_stmt->store_result();

    if($check_stmt->num_rows > 0){
        echo "Email da ton tai.";
    }
    else{
        if($password_id !== $confirm_password){
        echo "Khong khop! Vui long nhap lai mat khau!";
        }
        else{
            $mahoa_mk = password_hash($password_id, PASSWORD_DEFAULT);
            $sql = "INSERT INTO users (email, password_id) VALUES (?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt -> bind_param("ss", $email, $mahoa_mk);

            if($stmt -> execute()){
                header('location: login.php');
                exit;
            }
            else{
                die("Dang ky that bai!") . $stmt->error;
            }
        }    
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" type="images/x-iocn" href="../images/favicon.ico">
</head>
<body>
    <i style='font-size:40px' class='fas'><a href="index.php">&#xf015;</a></i>
    <div class="wrapper">
        <form action='register.php' method='POST'>
            <h2>
                Register
            </h2>
            <div class="input-field">
                <input type="email" name="email" placeholder="Email" required>
                <label for='email'></label>
            </div>
            <div class="input-field">
                <input type="password" name="password_id" placeholder="Password" required>
                <label for='password_id'></label>
            </div>
            <div class="input-field">
                <input type="password" name="confirm_password" placeholder="Re-Enter Password" required>
                <label for='confirm_password'></label>
            </div></br>
            <div>
                <input type="checkbox">Tôi đồng ý với <a href="quydinh.php">điều khoản</a> và Các <a href="quydinh.php">quy định</a> của Web </br>
            </div></br>
            <button type="submit"><a href="login.php">Register</a></button></br>
       
        </form>
    </div>


</body>
</html>