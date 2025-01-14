
<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hệ Thống Đánh Giá</title>/
    <link rel="stylesheet" href="../css/style11.css">
    <link rel="icon" type="image/x-icon" href="../images/favicon.ico">
</head>
<body>
<header class="header">
        <div class="logo">
            <a href="bdk.php">
                <img src="../images/icon/logo.png" alt="Logo" />
            </a>
        </div>
            <h2>Đánh Giá Sản Phẩm</h2>
    </header>
    <div id="review-section">
        
        <div id="review-form">
            <input type="text" id="reviewer-name" placeholder="Nhập tên của bạn..." />
            <div class="rating">
                <span onclick="rate(1)" onmouseover="hoverStars(1)" onmouseout="clearHover()">&#9733;</span>
                <span onclick="rate(2)" onmouseover="hoverStars(2)" onmouseout="clearHover()">&#9733;</span>
                <span onclick="rate(3)" onmouseover="hoverStars(3)" onmouseout="clearHover()">&#9733;</span>
                <span onclick="rate(4)" onmouseover="hoverStars(4)" onmouseout="clearHover()">&#9733;</span>
                <span onclick="rate(5)" onmouseover="hoverStars(5)" onmouseout="clearHover()">&#9733;</span>
            </div>
            <textarea id="review-input" placeholder="Nhập đánh giá của bạn..."></textarea>
            <button onclick="submitReview()">Gửi Đánh Giá</button>
        </div>
        <div id="reviews-container">
            <!-- Các đánh giá sẽ hiển thị ở đây -->
        </div>
    </div>
    <script>
        <?php echo file_get_contents('../js/danhgia.js'); ?>
    </script>
</body>

</html>
