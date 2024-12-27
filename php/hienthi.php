<?php
// CSDL
require "db.php"; //ket noi CSDL

$sql = "SELECT * FROM users";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quan ly khach hang</title>
    <link rel="stylesheet" href="../css/style4.css">
    <link rel="icon" type="images/x-iocn" href="../images/favicon.ico">
</head>
<body>
    <h1>DANH SACH KHACH HANG</h1></br>
    
    <form action="hienthi.php" method="GET">
        <label for="search"></label>
        <input type="text" name="search" id="search" placeholder="Tim khach hang theo email">
        <button type="submit">Search</button>
    </form></br>
    <td>
        <a class="a" href="index.php"> Quay lai trang chu </a></br>
    </td></br>

    <table>
        <tr>
            <th>TT</th>
            <th>Email</th>
            <th>Password</th>
        </tr>
        <tbody>
            
        <?php 

        //Tim kiem thong tin sinh vien theo ten hoac que
        $search = $_GET['search'] ?? "";
        $query = "SELECT * FROM users WHERE email LIKE '%$search%'";
        $result = $conn->query($query);



        //LAp qua cac hang du lieu duoc tra ve
        while ($row = $result->fetch_assoc()) { ?>
            <tr>
                <td class="btn function"><?php echo $row["id"]; ?></td>
                <td><?php echo $row["email"]; ?></td>
                <td class="btn function"><?php echo $row["password_id"]; ?></td>
            </tr>
        <?php } ?>

        
        </tbody>
    </table>
          
    
</body>
</html>