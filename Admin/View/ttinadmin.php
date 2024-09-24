<div class="container">
    <?php
    if(isset($_SESSION['idnv']))
    {
        $idnv=$_SESSION['idnv'];
        $tt= new nhanvien();
        $ad=$tt->getAdmin(($idnv));
        $ten=$ad['tennv'];
        $diachi=$ad['diachi'];
        $email=$ad['email'];
        $phone=$ad['phone'];
        $hinh=$ad['hinhnv'];
        $date=$ad['ngaysinh'];
        
    }
    ?>
    <h2 class="text-center mb-4 text-success">Thông Tin Nhân Sự</h2>
    <img src="../Content/Images/Admin/<?php echo $hinh?>" alt="Profile Picture" readonly="true" class="profile-img">
    <form>
        <div class="form-group">
          <label for="hoTen">Họ và Tên:</label>
          <input type="text" class="form-control" id="hoTen" readonly="true"  value="<?php echo $ten?>" required>
        </div>
          <div class="form-group">
            <label for="ngaySinh">Ngày Tháng Năm Sinh:</label>
            <input type="date" class="form-control" readonly="true"  value="<?php echo $date?>" id="ngaySinh" required>
          </div>
        <div class="form-group">
            <label for="tuoi">Số điện thoại:</label>
            <input type="text" class="form-control" readonly="true"  id="sdt"value="<?php echo $phone?>" required>
          </div>
      <div class="form-group">
        <label for="diaChi">Địa Chỉ:</label>
        <input type="text" class="form-control" readonly="true"  id="diaChi" value="<?php echo $diachi?>" required>
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" readonly="true"  id="email" value="<?php echo $email?>" required>
      </div>
    </form>
</div>