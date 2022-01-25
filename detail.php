<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sản phẩm</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/base.css">
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="./assets/css/login.css">
    <link rel="stylesheet" href="./assets/css/sidebars.css">
    <link rel="stylesheet" href="./assets/css/footers.css">
    <link rel="stylesheet" href="./assets/css/seemore.css">
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
                                            <div class="span header_notifi-name">Giá các loại đồ uống, giải khát cuối
                                                năm tăng mạnh</div>
                                            <div class="span header_notifi-description">Đặc biệt bia và các loại nước
                                                ngọt tăng 5%</div>
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
                <div class="col-3 text-center ">
                    <a href="./index.html" class="icon_home">
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
                    <a href="./giohang.html" target="_  blank" class="col-3 text-center icon_shop">
                        <i class="fas fa-shopping-cart position-relative icon-badge">
                            <span class="notification-icon">0<span class="visually-hidden">unread messages</span></span>
                        </i>
                    </a>
                </div>
            </div>
        </div>
        <div class="fake-postion"></div>
        <div class="container container-seemore">
            <div class="row row-seemore-header">
                <div class="col-8 main-header-seemore">
                    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="./index.html">TRANG CHỦ</a></li>
                            <li class="breadcrumb-item active fw-bold" aria-current="page">ĐỒ UỐNG CÁC LOẠI</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-4 ">
                    <div style="--bs-breadcrumb-divider: '';" aria-label="breadcrumb">
                        <ol class="breadcrumb align-items-end">
                            <li class="breadcrumb-item ">Hiển thị 1–12 trong 28 kết quả</li>
                            <li class="breadcrumb-item">
                                <select id="selectbox1">
                                    <option value="text">Thứ tự mặc định</option>
                                    <option value="text">Thấp đến cao</option>
                                    <option value="text">Cao đến thấp</option>
                                    <option value="text">Mới nhất</option>
                                </select>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="row row-container row-container-seemore">
                <div class="col-md-3 container_danhmuc">
                    <div class="container_danhmuc_items">
                        <div class="flex-shrink-0 p-3 bg-white" style="width: 280px;">
                            <a href="/"
                                class="d-flex align-items-center pb-3 mb-3 link-dark text-decoration-none border-bottom">
                                <svg class="bi me-2" width="30" height="24">
                                    <use xlink:href="#bootstrap" />
                                </svg>
                                <span class="fs-6 fw-semibold">DANH MỤC SẢN PHẨM</span>
                            </a>
                            <ul class="list-unstyled ps-0">
                                <li class="mb-1">
                                    <button class="btn btn-toggle align-items-center rounded collapsed header-items"
                                        data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="true">
                                        Đồ uống các loại
                                    </button>
                                    <div class="collapse show" id="home-collapse">
                                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                            <li><a href="#" class="link-dark rounded">Đồ uống các loại</a></li>
                                            <li><a href="#" class="link-dark rounded">Updates</a></li>
                                            <li><a href="#" class="link-dark rounded">Reports</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="mb-1">
                                    <button class="btn btn-toggle align-items-center rounded collapsed"
                                        data-bs-toggle="collapse" data-bs-target="#dashboard-collapse"
                                        aria-expanded="false">
                                        Sữa các loại, Tã bỉm
                                    </button>
                                    <div class="collapse" id="dashboard-collapse">
                                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                            <li><a href="#" class="link-dark rounded">Overview</a></li>
                                            <li><a href="#" class="link-dark rounded">Weekly</a></li>
                                            <li><a href="#" class="link-dark rounded">Monthly</a></li>
                                            <li><a href="#" class="link-dark rounded">Annually</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="mb-1">
                                    <button class="btn btn-toggle align-items-center rounded collapsed"
                                        data-bs-toggle="collapse" data-bs-target="#orders-collapse"
                                        aria-expanded="false">
                                        Mì, Cháo, Phở ăn liền …
                                    </button>
                                    <div class="collapse" id="orders-collapse">
                                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                            <li><a href="#" class="link-dark rounded">New</a></li>
                                            <li><a href="#" class="link-dark rounded">Processed</a></li>
                                            <li><a href="#" class="link-dark rounded">Shipped</a></li>
                                            <li><a href="#" class="link-dark rounded">Returned</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="border-top my-3"></li>
                                <li class="mb-1">
                                    <button class="btn btn-toggle align-items-center rounded collapsed"
                                        data-bs-toggle="collapse" data-bs-target="#account-collapse"
                                        aria-expanded="false">
                                        Account
                                    </button>
                                    <div class="collapse" id="account-collapse">
                                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                            <li><a href="#" class="link-dark rounded">New...</a></li>
                                            <li><a href="#" class="link-dark rounded">Profile</a></li>
                                            <li><a href="#" class="link-dark rounded">Settings</a></li>
                                            <li><a href="#" class="link-dark rounded">Sign out</a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-9 container_main container-detail">
                    <div class="row">
                        <div class="col-6">hihi</div>
                        <div class="col-6">hehe</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>