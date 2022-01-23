<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Giỏ hàng</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="./assets/css/base.css">
  <link rel="stylesheet" href="./assets/css/main.css">
  <link rel="stylesheet" href="./assets/css/login.css">
  <link rel="stylesheet" href="./assets/css/sidebars.css">
  <link rel="stylesheet" href="./assets/css/footers.css">
  <link rel="stylesheet" href="./assets/css/detail.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/font/fontawesome-free-5.15.4-web/fontawesome-free-5.15.4-web/css/all.min.css">
</head>

<body>
  <div class="app login-page">
    <!-- Header -->
    <div class="bd-header header header-login-page">
      <nav class="navbar">
        <ul class="navbar__list">
          <li class="navbar__list__item navbar__list__item--qr-code">
            <a href="http://127.0.0.1:1880/" target="_blank" style="text-decoration: none; color: white;">
              Vào cửa hàng quản lý ứng dụng
            </a>
            <div class="header_qr">
              <img src="./assets/img/qr_code.png" alt="QR-code" class="header_qr-img">
            </div>
          </li>
          <li class="navbar__list__item">
            <span class="navbar__list__item--nopointer">Kết nối</span>
            <a href="#" class="navbar__list__item--icon">
              <i class="header_navbar-icon fab fa-facebook"></i>
            </a>
            <a href="#" class="navbar__list__item--icon">
              <i class="header_navbar-icon fab fa-instagram"></i>
            </a>
          </li>
        </ul>
        <ul class="navbar__list">
          <li class="navbar__list__item navbar__list__item--notify">
            <a href="#" class="navbar__list__item_link">
              <i class="header_navbar-icon far fa-bell"></i>
              Thông báo
            </a>
            <div class="header_notifi">
              <header class="header_notifi-header">
                <h4>Thông báo mới nhận</h4>
              </header>
              <ul class="header_notifi-list">
                <li class="header_notifi-items">
                  <a href="" class="header_notifi-link">
                    <img src=".//assets/img/bia.png" alt="" class="header_notifi-img">
                    <div class="header_notifi-info">
                      <div class="span header_notifi-name">Mỹ phẩm Ohui chính hãng</div>
                      <div class="span header_notifi-description">Mô tả sản phẩm chính hãng</div>
                    </div>
                  </a>
                </li>
                <li class="header_notifi-items">
                  <a href="" class="header_notifi-link">
                    <img src=".//assets/img/bia.png" alt="" class="header_notifi-img">
                    <div class="header_notifi-info">
                      <div class="span header_notifi-name">Mỹ phẩm Ohui chính hãng</div>
                      <div class="span header_notifi-description">Mô tả sản phẩm chính hãng</div>
                    </div>
                  </a>
                </li>
                <li class="header_notifi-items">
                  <a href="" class="header_notifi-link">
                    <img src=".//assets/img/bia.png" alt="" class="header_notifi-img">
                    <div class="header_notifi-info">
                      <div class="span header_notifi-name">Giá các loại đồ uống, giải khát cuối năm tăng mạnh</div>
                      <div class="span header_notifi-description">Đặc biệt bia và các loại nước ngọt tăng 5%</div>
                    </div>
                  </a>
                </li>
              </ul>
              <footer class="header-notifi-footer">
                <a href="" class="header-notifi-footer-btn">Xem tất cả</a>
              </footer>
            </div>
          </li>
          <li class="navbar__list__item">
            <a href="#" class="navbar__list__item_link">
              <i class="header_navbar-icon far fa-question-circle"></i>
              Trợ giúp
            </a>
          </li>
          <!-- <li class="navbar__list__item navbar__list__item--strong" data-bs-toggle="modal" data-bs-target="#dangky">
                      Đăng ký</li>
                    <li class="navbar__list__item navbar__list__item--strong" data-bs-toggle="modal" data-bs-target="#dangnhap">
                      Đăng nhập</li> -->
                      <?php
            if ($_SESSION == NULL) {
              echo '<li class="navbar__list__item navbar__list__item--strong" data-bs-toggle="modal" data-bs-target="#dangky">Đăng ký</li>';
              echo '<li class="navbar__list__item navbar__list__item--strong" data-bs-toggle="modal" data-bs-target="#dangnhap">Đăng nhập</li>';
            }
            else {
              echo ''.
              '<li class="navbar__list__item navbar__list__item--strong header-navbar-user">'.
                '<img src="./assets/img/avatar.jpg" alt="" class="header-navbar-user-img">'.
                '<span class="header-navbar-user-name">'. $_SESSION["user_name"] .'</span>'.
                '<ul class="header-navbar-user-menu">'.
                  '<li class="menu-user-item">'.
                    '<a href="">Tài khoản của tôi</a>'.
                  '</li>'.
                  '<li class="menu-user-item">'.
                    '<a href="">Địa chỉ của tôi</a>'.
                  '</li>'.
                  '<li class="menu-user-item">'.
                    '<a href="">Đơn mua</a>'.
                  '</li>'.
                  '<li class="menu-user-item">'.
                    '<a href="./logout.php">Đăng xuất</a>'.
                  '</li>'.
                '</ul>'.
              '</li>';
            }
          ?>
        </ul>
      </nav>
      <div class="row">
        <div class="col-3 text-center ">
          <a href="./index.php" class="icon_home">
            <img src="./assets/img/tdt white.png" alt="TDT" class="icon__home-img">
          </a>
        </div>
        <div class="col-6">
          <div class="top-search">
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Tìm kiếm sản phẩm, shop,..."
                aria-label="Search">
              <button class="btn btn-outline-warning"" type=" submit"><i class="fa fa-search"
                  aria-hidden="true"></i></button>
            </form>
          </div>
        </div>
        <div class="col-3 text-center icon-giohang">
          <a href="./giohang.php" class="col-3 text-center icon_shop">
            <i class="fas fa-shopping-cart position-relative icon-badge">
              <span class="notification-icon">0<span class="visually-hidden">unread messages</span></span>
            </i>
          </a>
          <!-- <button type="button" class="btn btn-primary position-relative">
                    Mails <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-secondary">+99 <span class="visually-hidden">unread messages</span></span>
                </button> -->
        </div>
      </div>
    </div>
    <div class="fake-postion"></div>
    <div class="container container-login-page ">
      <div class="row">
        <div class="col-7">
          <div class="row row-header">
            <div class="col-6 login-page-text">SẢN PHẨM</div>
            <div class="col-2 login-page-text">GIÁ</div>
            <div class="col-2 login-page-text">SỐ LƯỢNG</div>
            <div class="col-2 login-page-text">TỔNG</div>
          </div>
          <div class="row row-list">
            <div class="col-6">
              <div class="item-tinhtien row">
                <div class="item-tinhtien-close-icon col-1"> <a href=""><i class="fa fa-times opacity-50"
                      aria-hidden="true"></i></a></div>
                <div class="item-tinhtien-img col-5"><a href=""><img src="./assets/img/nuoc_khoang.jpg"
                      class="img-thumbnail" alt=""></a></div>
                <div class="item-tinhtien-title col-6"><a href="">Nước khoáng TH 6 chai</a></div>
              </div>
            </div>
            <div class="col-2 d-flex align-items-center  card-footer-price">6,000 đ</div>
            <div class="col-2 d-flex align-items-center justify-content-center">
              <input type="number" id="tentacles" name="tentacles" min="1" max="100">
            </div>
            <div class="col-2 d-flex align-items-center  card-footer-price">6,000 đ</div>
          </div>
          <div class="row row-list ">
            <div class="col-6">
              <div class="item-tinhtien row">
                <div class="item-tinhtien-close-icon col-1"> <a href=""><i class="fa fa-times opacity-50"
                      aria-hidden="true"></i></a></div>
                <div class="item-tinhtien-img col-5"><a href=""><img src="./assets/img/cafe.jpg" class="img-thumbnail"
                      alt=""></a></div>
                <div class="item-tinhtien-title col-6"><a href="">Cà phê Highland 6 lon</a></div>
              </div>
            </div>
            <div class="col-2 d-flex align-items-center card-footer-price">10,000 đ</div>
            <div class="col-2 d-flex align-items-center justify-content-center">
              <input type="number" id="tentacles" name="tentacles" min="1" max="100">
            </div>
            <div class="col-2 d-flex align-items-center card-footer-price">10,000 đ</div>
          </div>
          <a href="./index.php" class="text-decoration-none">
            <button type="button" class="btn btn-return">
              <i class="fas fa-arrow-circle-left"></i>
              Tiếp tục xem sản phẩm
            </button>
          </a>
          <button type="button" class="btn btn-update">Cập nhật giỏ hàng</button>
        </div>
        <div class="col-5 login-page-text border border-warning">
          TỔNG SỐ LƯỢNG
          <div class="row row-tong-tien-item">
            <div class="row row-tong-tien">
              <div class="col-6">Tổng phụ</div>
              <div class="col-6 row-tong-tien-price">245,000 đ</div>
            </div>
            <div class="row row-tong-tien">
              <div class="col-3">Giao hàng</div>
              <div class="col-9">
                <ul class="giaohang-item">
                  <li class="list-giaohang">Giao hàng miễn phí</li>
                  <li class="list-giaohang">Đây chỉ là ước tính. Giá sẽ cập nhật trong quá trình thanh toán.</li>
                  <li class="list-giaohang">Tính phí giao hàng</li>
                </ul>
              </div>
            </div>
            <div class="row row-tong-tien">
              <div class="col-6">Tổng</div>
              <div class="col-6 row-tong-tien-price">245,000 đ</div>
            </div>
          </div>
          <button type="button" class="btn btn-thanhtoan">Cập nhật giỏ hàng</button>
        </div>
      </div>
      <div class="row row-discount">
        <div class="col-7"></div>
        <div class="col-5 login-page-text">

          <div class="login-page-text-disount"> <i class="fas fa-tags"></i> PHIẾU ƯU ĐÃI </div>

          <input type="text" class="form-control" id="floatingInput" style="text-transform:uppercase"
            placeholder="Mã ưu đãi">
          <button type="button" class="btn btn-outline-success btn-uu-dai">ÁP DỤNG</button>
        </div>

      </div>
    </div>
    <div class="footer-container bg-light">
      <footer class="py-5 footer-container">
        <div class="row footer-container-canhle">
          <div class="col-2">
            <h5>Section</h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
            </ul>
          </div>

          <div class="col-2">
            <h5>Section</h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
            </ul>
          </div>

          <div class="col-2">
            <h5>Section</h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
            </ul>
          </div>

          <div class="col-4 offset-1">
            <form>
              <h5>Subscribe to our newsletter</h5>
              <p>Monthly digest of whats new and exciting from us.</p>
              <div class="d-flex w-100 gap-2">
                <label for="newsletter1" class="visually-hidden">Email address</label>
                <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
                <button class="btn btn-primary" type="button">Subscribe</button>
              </div>
            </form>
          </div>
        </div>

        <div class="d-flex justify-content-center py-4 my-4 border-top footer-years">
          <p>&copy; {{< year>}} Company, Inc. All rights reserved.</p>
          <ul class="list-unstyled d-flex">
            <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24">
                  <use xlink:href="#twitter" />
                </svg></a></li>
            <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24">
                  <use xlink:href="#instagram" />
                </svg></a></li>
            <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24">
                  <use xlink:href="#facebook" />
                </svg></a></li>
          </ul>
        </div>
      </footer>
    </div>
  </div>
</body>

</html>