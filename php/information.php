<?php 
require 'db.php';

session_start();
if(!isset($_SESSION['user_id'])){
    header('Location: login.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="vi">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Information</title>
    <link rel="stylesheet" href="../css/reset.css" />
    <link rel="stylesheet" href="../css/style7.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link rel="icon" type="image/x-iocn" href="../images/favicon.ico">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
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
              <a href="order1.php">
                <img src="../images/icon/gio_hang.png" alt="Cart" />
              </a> 
            </button>
          </div>
          <div class="search-cart">
            <button class="lo">
                <a  href='logout.php'>
                    <img src="../images/icon/logout.png" alt="longout">
                </a>
            </button>
          
          </div>
        </div>
      </nav>
  </header>
    <!-- Carousel -->
    <div id="demo" class="carousel slide" data-bs-ride="carousel">
      <!-- Indicators/dots -->
      <div class="carousel-indicators">
        <button
          type="button"
          data-bs-target="#demo"
          data-bs-slide-to="0"
          class="active"
        ></button>
        <button
          type="button"
          data-bs-target="#demo"
          data-bs-slide-to="1"
        ></button>
        <button
          type="button"
          data-bs-target="#demo"
          data-bs-slide-to="2"
        ></button>
      </div>

      <!-- The slideshow/carousel -->
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img
            src="../images/anh_trang_chu/anh1.jpg"
            alt="Los Angeles"
            class="d-block"
            style="width: 100%"
          />
        </div>
        <div class="carousel-item">
          <img
            src="../images/anh_trang_chu/anh2.jpg"
            alt="Chicago"
            class="d-block"
            style="width: 100%"
          />
        </div>
        <div class="carousel-item">
          <img
            src="../images/anh_trang_chu/anh3.jpg"
            alt="New York"
            class="d-block"
            style="width: 100%"
          />
        </div>
      </div>

      <!-- Left and right controls/icons -->
      <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#demo"
        data-bs-slide="prev"
      >
        <span class="carousel-control-prev-icon"></span>
      </button>
      <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#demo"
        data-bs-slide="next"
      >
        <span class="carousel-control-next-icon"></span>
      </button>
    </div>

    <div class="moi">
      <div class="container mt-5">
        <div class="row">
          <div class="col-sm-4">
            <h2>Biểu tượng</h2>
            <h5>Biểu tượng Rolls-Royce:</h5>
            <div class="fakeimg">
              <img
                class="alogo"
                src="../images/infor/bieu-tuong-Rolls-Royce-min.jpg"
                alt=""
              />
            </div>
            <p>
              Mỗi chi tiết trong thiết kế logo Rolls-Royce đều mang một ý nghĩa
              riêng. Tay phải của người phụ nữ giơ cao, tượng trưng cho sự chiến
              thắng và thành công. Chiếc khăn voan tung bay trong gió, tượng
              trưng cho sự tự do và phóng khoáng. Bức tượng được đặt trên một
              tảng đá, tượng trưng cho sự vững vàng và kiên định.
            </p>
          </div>
          <div class="col-sm-8">
            <h2>Ra đời từ sự kết hợp hoàn hảo</h2>
            <h5>
              Ngày 15.03.1906, công ty Rolls-Royce Limited chính thức được thành
              lập
            </h5>
            <div class="fakeimg">
              <img
                class="a1"
                src="../images/infor/rolls-royce-cua-nuoc-nao-oto-com-vn-5-8bdc.jpg"
                alt=""
              />
            </div>
            <p>
              Chiếc Silver Ghost đầu tiên ra đời, đánh dấu một kỷ nguyên mới cho
              ngành công nghiệp ô tô.
            </p>
            <p>
              Chiến tranh thế giới: Rolls-Royce chuyển hướng sản xuất sang các
              động cơ máy bay, đóng góp lớn cho chiến thắng của đồng minh.
            </p>
            <p>
              Sau chiến tranh: Công ty tiếp tục phát triển, sản xuất cả xe ô tô
              và động cơ máy bay.
            </p>
            <p>
              Thủ tướng nước này đã quốc hữu hóa Rolls-Royce Limited để cứu lấy
              công ty bằng cách tách bộ phận sản xuất động cơ máy bay bán cho
              hãng Vickers PLC năm 1980.
            </p>

            <h2 class="mt-5">
              Từ năm 1980, những chiếc xe thương hiệu Rolls-Royce liên tục được
              ra đời
            </h2>
            <h5>
              1998: BMW mua lại quyền sử dụng thương hiệu Rolls-Royce cho xe
              hơi, mở ra một chương mới cho hãng xe này. Rolls-Royce thời hiện
              đại
            </h5>
            <div class="fakeimg">
              <img
                src="../images/infor/bmw-mua-lai-rolls-royce-4.jpg"
                alt=""
              />
            </div>
            <p>
              Tên hãng được đổi thành Rolls-Royce Motor Cars Limited và nhanh
              chóng bị Volkswagen mua lại với số tiền 430 triệu Bảng. Biểu tượng
              Spirit of Ecstasy cùng với bản quyền lưới tản nhiệt của
              Rolls-Royce sau đấy lại bị VW nhượng lại cho BMW.
            </p>
            <p>
              Dưới sự dẫn dắt của BMW: Rolls-Royce tập trung vào sản xuất các
              mẫu xe siêu sang, kết hợp giữa truyền thống và công nghệ hiện đại.
            </p>
            <p>
              Các mẫu xe nổi bật: Phantom, Ghost, Wraith, Cullinan. Công nghệ:
              Rolls-Royce không ngừng đổi mới, trang bị cho xe những công nghệ
              tiên tiến nhất, mang đến trải nghiệm lái xe đẳng cấp. Rolls-Royce
              - biểu tượng của sự hoàn hảo
            </p>
            <p>
              Rolls-Royce không chỉ là một thương hiệu xe hơi, mà còn là biểu
              tượng của sự sang trọng, đẳng cấp và thành công. Với lịch sử lâu
              đời và những nỗ lực không ngừng, Rolls-Royce đã khẳng định vị thế
              của mình trong làng xe hơi thế giới
            </p>
          </div>
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
          <li>
            NGÔN NGỮ
            <img
              src="../images/icon/ENGLAND.png"
              alt="English Flag"
              class="flag-icon"
            />
          </li>
        </ul>
        <ul>
          <li>KHIẾU NẠI</li>
          <li>SỰ RIÊNG TƯ</li>
        </ul>
      </div>
      <div class="footer-social">
        <a href="https://www.youtube.com/user/RollsRoyceMotorCars"
          ><img src="../images/icon/yt.png" alt="YouTube"
        /></a>
        <a href="https://www.facebook.com/rollsroycemotorcars"
          ><img src="../images/icon/fb.png" alt="Facebook"
        /></a>
        <a href="https://www.instagram.com/rollsroycecars/?hl=en"
          ><img src="../images/icon/ins.jpg" alt="Instagram"
        /></a>
        <a href="https://www.linkedin.com/company/rolls-royce-motor-cars"
          ><img src="../images/icon/linkedin.png" alt="LinkedIn"
        /></a>
        <a href="https://x.com/rollsroycecars?mx=2"
          ><img src="../images/icon/tw.png" alt="Twitter"
        /></a>
      </div>
    </footer>
  </body>
</html>
