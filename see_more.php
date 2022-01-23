<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Đồ uống các loại</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="./assets/css/base.css">
  <link rel="stylesheet" href="./assets/css/main.css">
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
  <div class="app bd-layout app-seemore">
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
          <li class="navbar__list__item navbar__list__item--strong" data-bs-toggle="modal" data-bs-target="#dangky">
            Đăng ký</li>
          <li class="navbar__list__item navbar__list__item--strong" data-bs-toggle="modal" data-bs-target="#dangnhap">
            Đăng nhập</li>
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
              <button class="btn btn-outline-warning"" type=" submit"><i class="fa fa-search"
                  aria-hidden="true"></i></button>
            </form>
          </div>
        </div>
        <div class="col-3 text-center">
          <a href="./giohang.php" class="col-3 text-center icon_shop">
            <i class="fas fa-shopping-cart"></i>
            Giỏ hàng
          </a>
        </div>
      </div>
    </div>
    <!-- Main part see-more -->
    <div class="fake-postion"></div>
    <div class="container container-seemore">
      <div class="row row-seemore-header">
        <div class="col-8 main-header-seemore">
          <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./index.php">TRANG CHỦ</a></li>
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
              <a href="/" class="d-flex align-items-center pb-3 mb-3 link-dark text-decoration-none border-bottom">
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
                  <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse"
                    data-bs-target="#dashboard-collapse" aria-expanded="false">
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
                  <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse"
                    data-bs-target="#orders-collapse" aria-expanded="false">
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
                  <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse"
                    data-bs-target="#account-collapse" aria-expanded="false">
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

        <div class="col-md-9 container_main">
          <div class="gap-element-fix"></div>
          <div class="card card-danhmuc">
            <!-- <div class="card-header header-items">
                    ĐỒ UỐNG CÁC LOẠI
                  </div> -->
            <div class="card-body">
              <div class="card-group">
                <div class="card card-sanpham-danhmuc">
                  <a href="./detail.php" class="card-title-link">
                    <img src="./assets/img/nuoc_khoang.jpg" class="card-img-top" alt="cafe">
                    <div class="card-body card-body-danhmuc">
                      <h5 class="card-title">Nước khoáng TH</h5>
                      <p class="card-text">This card has supporting text below as a natural lead-in to additional
                        content.</p>
                      <div class="text-muted card-footer-price">6,000đ</div>
                    </div>
                  </a>
                  <div class="card-footer">
                    <button type="button" class="btn btn-success card-footer-btn">Thêm vào giỏ</button>
                  </div>
                </div>
                <div class="card card-sanpham-danhmuc">
                  <img src="./assets/img/cafe.jpg" class="card-img-top" alt="cafe">
                  <div class="card-body card-body-danhmuc">
                    <h5 class="card-title">Cà phê sữa Highland</h5>
                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.
                    </p>
                    <div class="text-muted card-footer-price">10,000đ</div>
                  </div>
                  <div class="card-footer">
                    <button type="button" class="btn btn-success card-footer-btn">Thêm vào giỏ</button>
                  </div>
                </div>
                <div class="card card-sanpham-danhmuc">
                  <img src="./assets/img/coca.jpg" class="card-img-top" alt="cafe">
                  <div class="card-body card-body-danhmuc">
                    <h5 class="card-title">Nước ngọt coca</h5>
                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.
                    </p>
                    <div class="text-muted card-footer-price">9,000đ</div>
                  </div>
                  <div class="card-footer">
                    <button type="button" class="btn btn-success card-footer-btn">Thêm vào giỏ</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="card-group">
                <div class="card card-sanpham-danhmuc">
                  <img src="./assets/img/nuoc_khoang.jpg" class="card-img-top" alt="cafe">
                  <div class="card-body card-body-danhmuc">
                    <h5 class="card-title">Nước khoáng TH</h5>
                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.
                    </p>
                    <div class="text-muted card-footer-price">6,000đ</div>
                  </div>
                  <div class="card-footer">
                    <button type="button" class="btn btn-success card-footer-btn">Thêm vào giỏ</button>
                  </div>
                </div>
                <div class="card card-sanpham-danhmuc">
                  <img src="./assets/img/cafe.jpg" class="card-img-top" alt="cafe">
                  <div class="card-body card-body-danhmuc">
                    <h5 class="card-title">Cà phê sữa Highland</h5>
                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.
                    </p>
                    <div class="text-muted card-footer-price">10,000đ</div>
                  </div>
                  <div class="card-footer">
                    <button type="button" class="btn btn-success card-footer-btn">Thêm vào giỏ</button>
                  </div>
                </div>
                <div class="card card-sanpham-danhmuc">
                  <img src="./assets/img/coca.jpg" class="card-img-top" alt="cafe">
                  <div class="card-body card-body-danhmuc">
                    <h5 class="card-title">Nước ngọt coca</h5>
                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.
                    </p>
                    <div class="text-muted card-footer-price">9,000đ</div>
                  </div>
                  <div class="card-footer">
                    <button type="button" class="btn btn-success card-footer-btn">Thêm vào giỏ</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="card-group">
                <div class="card card-sanpham-danhmuc">
                  <img src="./assets/img/nuoc_khoang.jpg" class="card-img-top" alt="cafe">
                  <div class="card-body card-body-danhmuc">
                    <h5 class="card-title">Nước khoáng TH</h5>
                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.
                    </p>
                    <div class="text-muted card-footer-price">6,000đ</div>
                  </div>
                  <div class="card-footer">
                    <button type="button" class="btn btn-success card-footer-btn">Thêm vào giỏ</button>
                  </div>
                </div>
                <div class="card card-sanpham-danhmuc">
                  <img src="./assets/img/cafe.jpg" class="card-img-top" alt="cafe">
                  <div class="card-body card-body-danhmuc">
                    <h5 class="card-title">Cà phê sữa Highland</h5>
                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.
                    </p>
                    <div class="text-muted card-footer-price">10,000đ</div>
                  </div>
                  <div class="card-footer">
                    <button type="button" class="btn btn-success card-footer-btn">Thêm vào giỏ</button>
                  </div>
                </div>
                <div class="card card-sanpham-danhmuc">
                  <img src="./assets/img/coca.jpg" class="card-img-top" alt="cafe">
                  <div class="card-body card-body-danhmuc">
                    <h5 class="card-title">Nước ngọt coca</h5>
                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.
                    </p>
                    <div class="text-muted card-footer-price">9,000đ</div>
                  </div>
                  <div class="card-footer">
                    <button type="button" class="btn btn-success card-footer-btn">Thêm vào giỏ</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-footer card-footer-seemore">
              <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                  <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
              </nav>
            </div>
          </div>

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

        <div class="d-flex justify-content-center py-4 my-4 border-top">
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


  <!-- Modal dang nhap -->
  <div class="modal fade" id="dangnhap" data-bs-keyboard="false" tabindex="-1" aria-labelledby="dangnhap"
    aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="staticBackdropLabel">Đăng nhập</h4>
          <button class="btn btn-dangnhap col-6" data-bs-target="#dangky" data-bs-toggle="modal">Đăng ký</button>
        </div>
        <div class="modal-body">
          <div class="mb-3 row">
            <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" id="inputPassword">
            </div>
          </div>
          <div class="mb-4 row">
            <div class="auth-form-policy-help">
              <a href="" class="auth-form-policy-link-dang-nhap">Quên mật khẩu</a>
              <span class="auth-form-policy-help-separate"></span>
              <a href="" class="auth-form-policy-link-dang-nhap auth-form-policy-link-dang-nhap-help">Cần trợ giúp ?</a>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Trở lại</button>
          <button type="button" class="btn btn-primary">Đăng nhập</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal dang nhap -->

  <!-- Modal dang ky -->
  <div class="modal fade" id="dangky" tabindex="-1" aria-labelledby="dangky" aria-hidden="true">
    <div class="modal-dialog ">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title col-6" id="exampleModalLabel">Đăng ký</h4>
          <button class="btn btn-dangnhap col-6" data-bs-target="#dangnhap" data-bs-toggle="modal">Đăng nhập</button>
        </div>
        <div class="modal-body">
          <div class="mb-7 row">
            <label for="exampleFormControlInput1" class="col-sm-4 col-form-label">Email</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
          </div>
          <div class="mb-7 row">
            <label for="inputPassword" class="col-sm-4 col-form-label">Password</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" id="inputPassword">
            </div>
          </div>
          <div class="mb-7 row">
            <label for="inputPassword" class="col-sm-4 col-form-label">Nhập lại password</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" id="inputPassword">
            </div>
          </div>
          <div class="mb-7 row">
            <p class="auth-form-policy-text">Bằng việc đăng kí, bạn đã đồng ý với Shop về
              <a href="" class="auth-form-policy-link">Điều khoản dịch vụ</a> &
              <a href="" class="auth-form-policy-link">Chính sách bảo mật</a>
            </p>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Trở lại</button>
          <button type="button" class="btn btn-primary">Đăng ký</button>
        </div>
      </div>
    </div>


  </div>



  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
    integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
    crossorigin="anonymous"></script>
</body>

</html>