<style>
.product-card {
      position: relative; /* Thêm thuộc tính này để định vị pseudo-elements */
      background-color: #fff;
      height: auto;
      border-radius: 10px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
      margin-top: 20px; /* Thêm khoảng cách phía trên để nhìn rõ hơn */
      overflow: hidden; /* Đảm bảo các phần tử không tràn ra ngoài */
      margin-bottom: 20px;
    }

    .product-img {
      width: 374px;
      height: 148px;
      border-radius: 10px;
    }
    .choose-btn {
      padding: 9px 20px;
      font-size: 22px;
      font-weight: bold;
      color: #fff;
      background-color: #e44d26;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      margin-left: auto ;
      margin-right: auto;
      width: 765px;
      display: block; /* Hiển thị như block element để chiếm hết chiều rộng */
    }
    .choose-btn:hover {
      background-color: #d0461e;
    }
    .table {
      border-radius: 10px;
      margin-top: 20px;
      z-index: 2; /* Đặt trên các phần tử màu xanh */
    }

    thead {
      background-color: #d3d3d3; /* Màu xám nhạt hơn */
    }

    thead th {
      padding: 15px;
    }

    tbody tr {
      background-color: #f9f9f9; /* Màu nền nhẹ cho các hàng */
      border-bottom: 1px solid #ddd; /* Đường viền dưới cho các hàng */
    }

    tbody td {
      padding: 15px;
      vertical-align: middle;
    }

    tbody tr:last-child {
      border-bottom: none; /* Bỏ đường viền dưới của hàng cuối cùng */
    }

    .table button {
      background-color: #007bff;
      color: #fff;
      border: none;
      padding: 10px 20px;
      border-radius: 5px;
    }

    .table button:hover {
      background-color: #0056b3;
    }
  </style>
  <div class="container">
  <h1 class="title">Đặt phòng của bạn</h1>
  <p>Hãy đảm bảo tất cả các thông tin trên trang này là chính xác trước khi thanh toán</p>
  <div class="row">
    <div class="col-md-7">
      <div class="product-card" style="max-width: 683px;">
          <?php
          if(!isset($_SESSION['idkh']))
          {

          ?>
        <div class="row">
          <div class="col-md-7">
            Nhận ưu đãi độc quyền và tận hưởng nhiều lợi ích hơn khi bạn đăng nhập
          </div>
          <div class="col-md-5 text-center mt-2">
            <a href="index.php?action=dangnhap">
              <button class="btn btn-primary"><b>Đăng nhập</b></button></a>
            <a href="index.php?action=dangki">
              <button class="btn btn-primary"><b>Đăng kí</b></button></a>
            </div>
          </div>
          <?php
          }
          ?>
        </div>
      <div class="product-card" style="max-width: 683px;">
      <?php
      if(isset($_SESSION['idkh']))
      {
        $idkh=$_SESSION['idkh'];
        $tt=new user();
        $kh=$tt->getKH($idkh);
        $hoten=$kh['tenkh'];
        $email=$kh['email'];
        $phone=$kh['phone'];
      ?>
        <div class="container">
          <h4>Thông tin liên hệ</h4>
            <div class="form-group">
              <label for="">Họ và Tên</label>
              <input type="text" name="hoten" id="" class="form-control" value="<?php echo $hoten?>" readonly="true">
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="">Email</label>
                  <input type="email" name="email" id="" class="form-control" value="<?php echo $email?>" readonly="true">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="">Số điện thoại</label>
                  <input type="text" name="phone" id="" class="form-control"value="<?php echo $phone ?>" readonly="true">
                </div>
              </div>
            </div>
            <div onchange="Khach()">
              <input name="booking" type="radio" value="1"> &nbsp; Tôi là người lưu trú &nbsp;
              <input name="booking" type="radio" value="2" id="term"> &nbsp; Tôi đặt cho người khác
            </div>
            <div class="form-group mt-2" id="TenKhach" style="display: none;">
              <label for="">Tên đầy đủ của khách</label>
              <input type="text" name="tenkhach" id="tenkhach" class="form-control" placeholder="" aria-describedby="helpId">
              <small id="helpId" class="text-muted">Nhập tên khách sẽ lưu trú</small>
            </div>
          </div>
          <?php
          }
          ?>
      </div>
    </div>
    <div class="col-md-5">
        <div class="product-card" style="max-width: 410px;">
          <div class="container mt-2">
            <?php
            if(isset($_GET['id']))
            {
                $id=$_GET['id'];
                $dl= new dulich();
                $ctp=$dl->getPhongCT($id);
                $ten=$ctp['tenphong'];
                $hinh=$ctp['hinhphong'];
                $gia=$ctp['giaphong'];
                $khach=$ctp['songuoi'];
                $giuong=$ctp['giuong'];
                $chitiet=$ctp['tenct'];
                $tenno=$ctp['tenno'];
            ?>
            <b><?php echo $tenno ?></b>
            <p><?php echo $tenno ?></p>
            <img class="product-img" src="../Content/Images/Phong/<?php echo $hinh?>">
            <p></p>
            <b>(1x) <?php echo $ten?> </b>
          <div class="detail mt-2">
            <p><span class="fa fa-users"></span> <?php echo $khach?> Khách</p>
            <p><span class="fa fa-bed"></span> <?php echo $giuong?> Giường</p>
            <p><span class="fa fa-pen-square"></span> &nbsp;<?php echo $chitiet?></p>
            </div>
            <hr>
            <div class="row mt-3">
            <div class="col-md-6">
            <b>Tổng giá phòng</b>
            </div>
            <div class="col-md-6 text-right text-danger mb-2">
            <b><?php echo number_format($gia)?> VND</b>
            </div>
            </div>
          </div>
          <?php
            }
          ?>
        </div>
    </div>
  </div>

 <?php
 if(isset($_SESSION['idkh']))
 {
 ?>
  <div class="product-card" style="max-width: 1057px;">
    <h4>Chi tiết giá</h4>
    <div class="container">
      <small style="color: #007bff;"><span class="fa fa-exclamation"></span> &nbsp;
         <b>Thuế và phí là các khoản được MeiDor chuyển trả cho khách sạn.
         Mọi thắc mắc về thuế và hóa đơn,
         vui lòng tham khảo Điều khoản và Điều kiện của MeiDor để được giải đáp</b>
      </small>
      <div class="row mt-4">
        <div class="col-md-6">
          <p>Giá Phòng</p>
          <br>
          <p>Thuế và Phí</p>
        </div>
        <div class="col-md-6 text-right">
          <p id="basePrice"><?php echo number_format($gia)?> VND</p>
          <br>
          <p id="VandS"></p>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-md-6">
          <p><h5>Tổng giá</h5></p>
          <br>
          <p><h5>Cọc Trước</h5></p>
        </div>
        <div class="col-md-6 text-right">
          <p><h5 style="color: #ed512a;" id="totalPrice"></h5></p>
          <br>
          <p><h5>30%</h5></p>
            <small>(Tiền giữ phòng)</small>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-md-6">
          <p><h5>Đặt Cọc Trước: </h5></p>
        </div>
        <div class="col-md-6 text-right">
          <p><h4 style="color: #ed512a;" id="PercentPrice"></h4></p>
        </div>
      </div>
      <p class="text-center mt-4" style="color: #007bff;"><b><span class="fa fa-clock"></span> Hãy giữ phòng này ngay trước khi giá tăng cao hơn!</p></b>
    </div>
    <form action="index.php?action=phieuttin&act=luuthongtin&id=<?php echo $id; ?>" method="post">
      <input name="PercentPrice" id="PercentPrice1" value="" hidden>
      <input name="Price" id="Price" value="" hidden>
      <input  type="text" name="tenkhach" id="saveName" hidden>
      <button type="submit" class="choose-btn" name="submit">Tiếp tục thanh toán</button>
    </form>
    <p class="text-center">
      Bằng việc tiếp tục thanh toán, bạn đã đồng ý với Điều khoản & Điều kiện cũng như Chính sách quyền riêng tư của MeiDor.
    </p>
  </div>
  <?php
 };
  ?>
</div>


<script>
  //Hiển thị Khách khi radio checked
  function Khach()
  {
    const TenKhach=document.getElementById("TenKhach");
    const termRadio=document.getElementById("term");

    TenKhach.style.display = termRadio.checked ? 'block' : 'none';
  }
  //Lấy thông tin khách
  const tenkhachInput=document.getElementById("tenkhach");
  const saveName=document.getElementById("saveName");

  tenkhachInput.addEventListener('input', function(event)
  {
    const tenkhachValue= event.target.value;
    saveName.value=tenkhachValue;
    console.log(tenkhachValue);
  });
  //Tính tổng tiền
  //Khởi tạo biến
  var basePriceElement= document.getElementById('basePrice');
  // Lấy giá trị từ phần tử và loại bỏ phần ' VND'
  var basePrice = parseFloat(basePriceElement.innerText.replace(/[^0-9.-]+/g,""));
  var VAT= 0.08;
  var Service= 50000;
  //Tính tổng thuế và phí
  var total= (basePrice * VAT) + Service;
  //Tính tổng giá trị
  var TotalPrice= basePrice + total;
  //Tính tiền đặt phòng
  var PercentPrice= TotalPrice * 0.3;
  //Tính tiền còn lại
  var Price= TotalPrice - PercentPrice
    // Định dạng số thành dạng tiền tệ
    function formatNumber(num) {
    return num.toLocaleString('vi-VN', { style: 'currency', currency: 'VND' }).replace("₫", "VND");
  }
  //Hiển thị tổng thuế và phí
  document.getElementById('VandS').innerHTML=formatNumber(total);
  //Hiển thị tổng giá trị
  document.getElementById('totalPrice').innerHTML=formatNumber(TotalPrice);
  //Hiển thị tiền đặt phòng
  document.getElementById('PercentPrice').innerHTML=formatNumber(PercentPrice);
    //Lưu giá đặt phòng
    document.getElementById('PercentPrice1').value=formatNumber(PercentPrice);
    //Lưu giá còn lại
    document.getElementById('Price').value=formatNumber(Price);
</script>