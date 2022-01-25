    <!-- footer -->

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
        <form action="./login.php" method="post">
          <input name="uri" type="hidden" value="<?php echo $_SERVER["PHP_SELF"]?>">
          <div class="modal-header">
            <h4 class="modal-title" id="staticBackdropLabel">Đăng nhập</h4>
            <button class="btn btn-dangnhap col-6" data-bs-target="#dangky" data-bs-toggle="modal">Đăng ký</button>
        </div>
        <div class="modal-body">
          <div class="mb-3 row">
            <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
              <input name="email" required type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
              <input name="password" required type="password" class="form-control" id="inputPassword">
            </div>
          </div>
          <div class="mb-4 row">
            <div class="auth-form-policy-help">
              <a href="" class="auth-form-policy-link-dang-nhap">Quên mật khẩu</a>
              <span class="auth-form-policy-help-separate"></span>
              <a href="" class="auth-form-policy-link-dang-nhap auth-form-policy-link-dang-nhap-help">Cần trợ giúp ?</a>
              <?php if (isset($_GET['error'])) { ?>
              <script  
              type='text/javascript'>alert('Sai tài khoản hoặc mật khẩu');
              </script>
              <?php } ?>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Trở lại</button>
          <button type="submit" class="btn btn-primary">Đăng nhập</button>
        </div>
      </form>
      </div>
    </div>
  </div>
  <!-- Modal dang nhap -->


  <!-- Modal dang ky -->
  <div class="modal fade" id="dangky" tabindex="-1" aria-labelledby="dangky" aria-hidden="true">
    <div class="modal-dialog ">
      <div class="modal-content">
        <form action="./signup.php" method="post">

          <div class="modal-header">
            <h4 class="modal-title col-6" id="exampleModalLabel">Đăng ký</h4>
            <button class="btn btn-dangnhap col-6" data-bs-target="#dangnhap" data-bs-toggle="modal">Đăng nhập</button>
          </div>
          <div class="modal-body">
            <div class="mb-7 row">
              <label for="exampleFormControlInput1" class="col-sm-4 col-form-label">Email</label>
              <div class="col-sm-10">
                <input name="email" type="email" required class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
              </div>
            </div>
            <div class="mb-7 row">
              <label for="user_name" class="col-sm-4 col-form-label">Tên đăng nhập</label>
              <div class="col-sm-10">
                <input name="user_name" type="text" required class="form-control" id="user_name">
              </div>
            </div>
            <div class="mb-7 row">
              <label for="password" class="col-sm-4 col-form-label">Password</label>
              <div class="col-sm-10">
                <input name="password" type="password" required class="form-control" id="password">
              </div>
            </div>
            <div class="mb-7 row">
              <label for="re_password" class="col-sm-4 col-form-label">Nhập lại password</label>
              <div class="col-sm-10">
                <input name="repassword" type="password" required class="form-control" id="re_password" onkeyup="checkRePass()">
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
            <button type="submit" class="btn btn-primary" id="btn-signup" disabled>Đăng ký</button>
          </div>
        </form>
      </div>
    </div>
  </div>



  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
    integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
    crossorigin="anonymous"></script>
  <script>
    function checkRePass() {
      var pass = document.getElementById("password").value;
      var rePass = document.getElementById("re_password").value;
      if (pass != rePass) {
        document.getElementById("re_password").style.color = "red";
        document.getElementById("btn-signup").disabled = true;
      }
      else {
        document.getElementById("re_password").style.color = "green";
        document.getElementById("btn-signup").disabled = false;
      }
    }
  </script>
  <script>
    function myFunction() {
      alert("Vui lòng đăng nhập để sử dụng");
          }
</script>
</body>

</html>