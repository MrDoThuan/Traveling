<div class="side-bar">
    <h3 class="mb-2 title-1" style="font-size: 40px;">MeiDor Travel</h3>
    <ul class="menu">
      <li class="<?php echo ($_GET['action'] == 'dsachdlich') ? 'active' : ''; ?>">
        <a href="index.php?action=dsachdlich">
        <i class="fas fa-location"></i>
          <span><b>Địa điểm Du lịch</b></span>
        </a>
      </li>
      <li class="<?php echo ($_GET['action'] == 'dsachnoio') ? 'active' : ''; ?>">
        <a href="index.php?action=dsachnoio">
          <i class="fas fa-hotel"></i>
          <span><b>Danh sách Khách sạn</b></span>
        </a>
      </li>
      <li class="<?php echo ($_GET['action'] == 'dsachchoo') ? 'active' : ''; ?>">
        <a href="index.php?action=dsachchoo">
          <i class="fas fa-people-roof"></i>
          <span><b>Danh sách Chỗ ở</b></span>
        </a>
      </li>
      <li  class="<?php echo ($_GET['action'] == 'dsachdatphong') ? 'active' : ''; ?>">
        <a href="index.php?action=dsachdatphong">
          <i class="fas fa-users"></i>
          <span><b>Danh sách Đặt phòng</b></span>
        </a>
      </li>
      <li class="<?php echo ($_GET['action'] == 'ttinadmin') ? 'active' : ''; ?>">
        <a href="index.php?action=ttinadmin">
          <i class="fas fa-address-card"></i>
          <span><b>Thông tin Tài khoản</b></span>
        </a>
      </li>
      <li class="<?php echo ($_GET['action'] == 'dangki') ? 'active' : ''; ?>">
        <a href="index.php?action=dangki">
          <i class="fas fa-plus"></i>
          <span><b>Đăng kí QTV</b></span>
        </a>
      </li>
      <li class="logout">
        <a href="index.php?action=dangnhap&act=dangxuat">
          <i class="fas fa-sign-out-alt"></i>
          <span><b>Đăng Xuất</b></span>
        </a>
      </li>
    </ul>
  </div>
  <div class="main-clause">
  <div class="header-wrapper">
    <?php
        if(isset($_SESSION['idnv']))
        {
          $idnv=$_SESSION['idnv'];
          $nv= new nhanvien();
          $tt=$nv->getAdmin($idnv);
          $ten=$tt['tennv'];
          $hinh=$tt['hinhnv'];
    ?>
      <div class="header-title">
        <span></span>
        <h2>Xin chào, <?php echo $ten?> </h2>
      </div>
      <div class="admin-info">
        <div class="search-box">
          <i class="fa fa-search"></i>
          <input type="text" placeholder="Nhập">
        </div>
        <img src="../Content/Images/Admin/<?php echo $hinh?>">
      </div>
    </div>
    <?php
        }
    ?>
      <script>
    function activateMenuItem(event) {
      // Prevent the default anchor click behavior
      event.preventDefault();

      // Get all menu items
      var menuItems = document.querySelectorAll('.menu li');

      // Remove the 'active' class from all menu items
      menuItems.forEach(function(item) {
        item.classList.remove('active');
      });

      // Add the 'active' class to the clicked menu item
      event.currentTarget.parentNode.classList.add('active');
    }
  </script>