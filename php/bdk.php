<?php
require 'db.php';

session_start();
?>

<!DOCTYPE html>
<html lang="vi">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Trang chủ</title>
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/style14.css">
    <link rel="icon" type="image/x-iocn" href="../images/favicon.ico">
  </head>
  <body>
  <header>
        <div class="notification-bar">
          <span>
            Đăng kí để có cơ hội trở thành thành viên vip nhận lại hàng ngàn ưu
            đãi!
            <a href="login.php">Đăng nhập ngay</a>
          </span>
          <button class="close-btn">&times;</button>
        </div>
      <nav class="navbar">
          <div class="tong">
            <div class="logo">
              <img src="../images/icon/logo.png" alt="Logo" />
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
              <a href="orderlogin.php">
                <img src="../images/icon/gio_hang.png" alt="Cart" />
              </a> 
            </button>
          </div>
          <div class="search-cart">
            <button class="cart">
              <a href="login.php">
                <img src="../images/icon/login.png" alt="Login">
              </a>
            </button>
          </div>
        </div>
      </nav>
  </header>


    <div class="mid">
      <div class="hero-section">
        <div class="content">
          <h3>ROLLS ROYCE XIN GIỚI THIỆU</h3>
          <h1>PHẤN ĐẤU ĐẾN SỰ HOÀN HẢO</h1>
          <p>1 LOẠT BÀI VIẾT VĨ ĐẠI TRUYỀN CẢM HỨNG</p>
          <a href="#" class="cta-button">XEM NGAY</a>
        </div>
      </div>
      <div class="bk2">
        <div class="content2">
          <h1>HOÀN HẢO TRONG TỪNG TRẢI NGHIỆM CỦA KHÁCH HÀNG</h1>
          <p>
            Tận tụy mang đến cho khách hàng những trải nghiệm vô song và được
            thiết kế riêng, Rolls-Royce Motor Cars Abu Dhabi rất vui mừng thông
            báo về việc khai trương phòng trưng bày sang trọng mới tại Abu
            Dhabi, Các Tiểu vương quốc Ả Rập Thống nhất. Bằng cách biến giấc mơ
            của họ thành hiện thực, Rolls-Royce Motor Cars mang đến cho khách
            hàng trải nghiệm thương hiệu hoàn toàn đắm chìm trong khi vẫn đề cao
            nghệ thuật thủ công Bespoke.
          </p>
          <a href="#" class="cta-button1">XEM NGAY</a>
        </div>
      </div>
      <div class="banhang">
        <div class="content3">
          
        </div>
      </div>
    </div>


    <div class="explore-section">
      <h2>KHÁM PHÁ THÊM</h2>
      <p>TIẾP TỤC HÀNH TRÌNH CỦA BẠN</p>
      <div class="explore-cards">
        <div class="card">
          <a href="ghost.php" target="_blank">
            <img src="../images/anh_trang_chu/ghost_extended.png" alt="Ghost Extended Series II" />
            <h3>KHÁM PHÁ GHOST EXTENDED SERIES II</h3>
            <p>Không gian rộng lớn để bạn tận hưởng từng khoảnh khắc thú vị.</p>
          </a>
        </div>
        <div class="card">
          <a href="ghostblack.php " target="_blank">
            <img src="../images/anh_trang_chu/bbg.png" alt="Black Badge Ghost Series II" />
            <h3>BLACK BADGE GHOST SERIES II</h3>
            <p>Táo bạo. Không ngại ngừng. Mạnh mẽ. Một biểu hiện táo bạo của sự sang trọng và quyền lực.</p>
          </a>
        </div>
        <div class="card">
          <a href="larose.php" target="_blank">
            <img src="../images/anh_trang_chu/larose.png" alt="Rolls-Royce La Rose Noire Droptail" />
            <h3>ROLLS-ROYCE LA ROSE NOIRE DROPTAIL</h3>
            <p>Chiếc xe mui trần tối màu và ấn tượng của Coachbuild lấy cảm hứng từ loài hoa mà gia đình chủ xe yêu thích nhất.</p>
          </a>
        </div>
      </div>
    </div>
    <footer class="footer">
      <div class="footer-links">
        <ul>
          <li>ĐÃ QUA SỬ DỤNG</li>
          <li>TÌM ĐẠI LÝ</li>
          <li>NGHỀ NGHIỆP</li>
        </ul>
        <ul>
          <li>BÁNH QUY</li>
          <li>NHẮN LỐP XE EU</li>
          <li>SƠ ĐỒ TRANG WEB</li>
        </ul>
        <ul>
          <li>CÂU LẠC BỘ BÁO CHÍ</li>
          <li>QUY ĐỊNH VỀ PIN</li>
          <li>LỜI THÌ THẦM</li>
        </ul>
        <ul>
          <li>HỢP PHÁP</li>
          <li>LIÊN HỆ</li>
          <li>NGÔN NGỮ <img src="../images/icon/ENGLAND.png" alt="English Flag" class="flag-icon" /></li>
        </ul>
        <ul>
          <li>KHIẾU NẠI</li>
          <li>SỰ RIÊNG TƯ</li>
        </ul>
      </div>
      <div class="footer-social">
        <a href="https://www.youtube.com/user/RollsRoyceMotorCars"><img src="../images/icon/yt.png" alt="YouTube" /></a>
        <a href="https://www.facebook.com/rollsroycemotorcars"><img src="../images/icon/fb.png" alt="Facebook" /></a>
        <a href="https://www.instagram.com/rollsroycecars/?hl=en"><img src="../images/icon/ins.jpg" alt="Instagram" /></a>
        <a href="https://www.linkedin.com/company/rolls-royce-motor-cars"><img src="../images/icon/linkedin.png" alt="LinkedIn" /></a>
        <a href="https://x.com/rollsroycecars?mx=2"><img src="../images/icon/tw.png" alt="Twitter" /></a>
      </div>
    </footer>
  </body>
</html>
