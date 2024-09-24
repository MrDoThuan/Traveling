<style>
    .resigner{
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
      <h2 class="text-center mb-4 text-success">Đăng Kí Quản Trị Viên</h2>
      <div class="resigner">
        <form action="index.php?action=dangki&dk=dangki_action" method="post">
            <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="hoTen">Họ và Tên:</label>
                  <input type="text" class="form-control" name="hoten"  placeholder="Nhập họ và tên" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="">Ngày sinh:</label>
                  <input type="date" class="form-control" name="ngaysinh"  required>
                </div>
            </div>
              <div class="form-group">
                <label for="dichi">Địa Chỉ:</label>
                <input type="text" class="form-control" name="diachi" placeholder="Nhập địa chỉ" required>
              </div>
              <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" name="email" placeholder="Nhập email"  required>
              </div>
              <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="user">Tên người dùng:</label>
                    <input type="text" class="form-control" name="user" placeholder="Nhập tên người dùng" required>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="">Hình Nhân Viên</label>
                    <input type="text" class="form-control" name="hinhnv" placeholder="Nhập hình nhân viên" required>
                  </div>
              </div>
              <div class="form-row">
                  <div class="form-group col-md-6">
                      <label for="pass">Mật khẩu:</label>
                      <input type="text" class="form-control" name="pass" placeholder="Nhập mật khẩu" required>
                    </div>
                  <div class="form-group col-md-6">
                  <label for="phone">Số điện thoại:</label>
                <input type="text" class="form-control" name="phone" placeholder="Nhập số điện thoại" required>
                  </div>
              </div>
              <button type="submit" name="submit" class="choose-btn btn-block">Đăng Kí</button>
        </form>
      </div>