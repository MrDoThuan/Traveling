<style>
.container {
        max-width: 500px;
        margin: auto;
        padding: 30px;
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
}
.form-group {
        margin-bottom: 25px;
}
.form-group label {
        font-weight: bold;
}
.form-control {
        border-radius: 20px;
}
.choose-btn {
      padding: 12px 20px;
      font-size: 18px;
      font-weight: bold;
      color: #fff;
      background-color: #e44d26;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      display: block; /* Hiển thị như block element để chiếm hết chiều rộng */
    }
.choose-btn:hover {
      background-color: #d0461e;
    }
</style>
<div class="container">
    <form action="index.php?action=dangnhap&act=dangnhap_action" method="post">
        <h2 class="text-center mb-4 text-danger title-3">MeiDor Admin</h2>
        <img src="../Content/Images/VN/logo1.png" width="450px" height="200px">
              <div class="form-group">
                <label for="hoTen">Tên Đăng Nhập:</label>
                <input type="text" class="form-control" name="user"  placeholder="Nhập họ và tên" required>
              </div>
              <div class="form-group">
                <label for="tuoi">Mật Khẩu:</label>
                <input type="text" class="form-control" name="pass" placeholder="Nhập Mật khẩu" required>
              </div>
            <button type="submit" name="submit" class="choose-btn btn-block">Đăng Nhập</button>
        </form>
</div>