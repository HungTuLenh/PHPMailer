<div class="bg-dark">
  <div class="container">
    <div class="row">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php">Nhóm 6</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="index.php">Home</a>
              </li>
              <?php 
                if(isset($_SESSION['authenticated']))
                echo "
                  <li class='nav-item'>
                    <a class='nav-link' href='userdashboard.php'>Quản lý tài khoản</a>
                  </li>
                  <li class='nav-item'>
                    <a class='nav-link' href='logout.php'>Đăng xuất</a>
                  </li>";
                else {
                  echo "
                  <li class='nav-item'>
                    <a class='nav-link' href='register.php'>Đăng ký</a>
                  </li>
                  <li class='nav-item'>
                    <a class='nav-link' href='login.php'>Đăng nhập</a>
                  </li>";
                }
              ?>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </div>
</div>