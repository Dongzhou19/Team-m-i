<?php
// Dữ liệu tổng hợp về các loại xe của Rolls-Royce
$vehicles = [
    [
        'loai_xe' => 'Rolls-Royce Phantom',
        'hang_san_xuat' => 'Rolls-Royce',
        'mo_ta' => 'Mẫu xe sang trọng, biểu tượng của sự đẳng cấp và quyền lực.',
        'dong_co' => 'Động cơ xăng',
        'phan_khoi' => '6.75L V12',
        'so_ghe' => '4 - 5',
        'tien_nghi' => 'Nội thất da cao cấp, hệ thống âm thanh Bespoke, ghế massage, cửa tự động.'
    ],
    [
        'loai_xe' => 'Rolls-Royce Ghost',
        'hang_san_xuat' => 'Rolls-Royce',
        'mo_ta' => 'Xe sedan siêu sang, dành cho những ai yêu thích sự thanh lịch và quyền lực.',
        'dong_co' => 'Động cơ xăng',
        'phan_khoi' => '6.6L V12',
        'so_ghe' => '4 - 5',
        'tien_nghi' => 'Nội thất đẳng cấp, màn hình điều khiển cảm ứng, hệ thống điều hòa tự động 4 vùng.'
    ],
    [
        'loai_xe' => 'Rolls-Royce Wraith',
        'hang_san_xuat' => 'Rolls-Royce',
        'mo_ta' => 'Xe coupe thể thao, mạnh mẽ và sang trọng, thích hợp cho những chuyến đi dài.',
        'dong_co' => 'Động cơ xăng',
        'phan_khoi' => '6.6L V12',
        'so_ghe' => '4',
        'tien_nghi' => 'Ghế bọc da cao cấp, hệ thống âm thanh chất lượng cao, cửa tự động.'
    ],
    [
        'loai_xe' => 'Rolls-Royce Cullinan',
        'hang_san_xuat' => 'Rolls-Royce',
        'mo_ta' => 'SUV siêu sang trọng, mang lại sự thoải mái tuyệt vời cho hành khách.',
        'dong_co' => 'Động cơ xăng',
        'phan_khoi' => '6.75L V12',
        'so_ghe' => '4 - 5',
        'tien_nghi' => 'Hệ thống giải trí tiên tiến, nội thất bọc da, ghế ngả tự động, hệ thống điều khiển bằng giọng nói.'
    ],
    [
        'loai_xe' => 'Rolls-Royce Dawn',
        'hang_san_xuat' => 'Rolls-Royce',
        'mo_ta' => 'Xe convertible sang trọng, thiết kế đẹp mắt, dành cho những chuyến đi đường dài.',
        'dong_co' => 'Động cơ xăng',
        'phan_khoi' => '6.6L V12',
        'so_ghe' => '4',
        'tien_nghi' => 'Nội thất bọc da cao cấp, ghế massage, hệ thống âm thanh Rolls-Royce Bespoke.'
    ]
];

?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh Sách Các Loại Xe Rolls-Royce</title>
    <link rel="icon" type="image/x-icon" href="../images/favicon.ico">
    <link rel="stylesheet" href="../css/style9.css">
</head>
<body>
    <h1>Danh Sách Các Loại Xe Rolls-Royce</h1>
    <div class="logo">
            <a href="bdk.php">
                <img src="../images/icon/logo.png" alt="Logo" />
            </a>
          </div>
    <table>
        <tr>
            <th>Loại Xe</th>
            <th>Hãng Sản Xuất</th>
            <th>Mô Tả</th>
            <th>Động Cơ</th>
            <th>Phân Khối</th>
            <th>Số Ghế</th>
            <th>Tiện Nghi</th>
        </tr>
        <?php foreach ($vehicles as $vehicle): ?>
            <tr>
                <td><?= $vehicle['loai_xe'] ?></td>
                <td><?= $vehicle['hang_san_xuat'] ?></td>
                <td><?= $vehicle['mo_ta'] ?></td>
                <td><?= $vehicle['dong_co'] ?></td>
                <td><?= $vehicle['phan_khoi'] ?></td>
                <td><?= $vehicle['so_ghe'] ?></td>
                <td><?= $vehicle['tien_nghi'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
