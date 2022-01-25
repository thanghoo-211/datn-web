<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Trang chủ</title>
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
  <div class="app bd-layout">
    <!-- Navigation header -->
    <div class="bd-header header">
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
        <div class="col-3 text-center">
          <a href="./index.php" class="icon_home">
            <img src="./assets/img/tdt white.png" alt="TDT" class="icon__home-img">
          </a>
        </div>
        <div class="col-6">
          <div class="top-search">
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Tìm kiếm sản phẩm, shop,..."
                aria-label="Search">
              <button class="btn btn-outline-warning" type=" submit"><i class="fa fa-search"
                  aria-hidden="true"></i></button>
            </form>
          </div>
        </div>
        <div class="col-3 text-center">
          <?php
          if ($_SESSION == NULL) {
            echo''.
              '<a href="#" onclick = "myFunction()" class="col-3 text-center icon_shop" data-bs-toggle="modal" data-bs-target="#dangnhap">'.
              // '<input href="javascript:myFunction;">'.
              '<i class="fas fa-shopping-cart"></i>'.
              'Giỏ hàng</a>';
          }
          else {
            echo''.
            '<a href="./giohang.php" class="col-3 text-center icon_shop">'.
            '<i class="fas fa-shopping-cart"></i>'.
            'Giỏ hàng</a>';
          }
          ?>
         </div>
      </div>
    </div>