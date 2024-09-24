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
    .card-hotel-header{
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
      margin-top: 20px;
      margin-bottom: 20px;
      border-top-right-radius: 10px;
      border-top-left-radius: 10px;
    }
  </style>
<div class="container mt-4">
    <div class="product-card">
      <form action="index.php?action=luuthongtin&phieuttin=added_action" method="post">
      <h2 class="text-center">Phiếu thông tin</h2>
      <div class="row"> 
        <div class="col-md-7">
          <div class="container">
            <div class="product-card">
              <div class="container">
              <?php
      if(isset($_SESSION['idkh']))
      {
        $idkh=$_SESSION['idkh'];
        $tt=new user();
        $kh=$tt->getKH($idkh);
        $hoten=$kh['tenkh'];
        $email=$kh['email'];
        $phone=$kh['phone'];
        $date = new DateTime('now');
        $ngay = $date->format('d/m/Y');
      ?>  
                <h4>Thông tin khách hàng</h4>
                <p class="mt-2">Ngày đặt phòng: <?php echo $ngay;?></p>
                <div class="row mt-3">
                  <div class="col-md-5">
                    <p>Họ và tên: <?php echo $hoten?></p>
                    <p>Số điện thoại: <?php echo $phone?></p>
                  </div>
                  <div class="col-md-7">
                    <p>Email: <?php echo $email?></p>
                    <?php
                    $tenkhach='';
                    if(isset($_POST['tenkhach']))
                    $tenkhach=$_POST['tenkhach'];
                    ?>
                    <p>Tên khách lưu trú (nếu có): <?php echo $tenkhach?></p>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-md-6">  
                    <b>Tiền đã cọc: </b>
                    <br>
                    <br>
                    <b>Tiền còn lại:</b>
                  </div>
                  <div class="col-md-6 text-right">
                    <?php
                    if(isset($_POST['PercentPrice']) && $_POST['Price']) {
                      $total = $_POST['PercentPrice'];
                      $price=$_POST['Price'];
                    ?>
                      <b class="text-danger"><?php echo $total; ?></b>
                      <br>
                      <br>
                      <h5><b class="text-danger"><?php echo $price; ?></b></h5>
                    <?php
                    }
                    ?>

                  </div>
                </div>
                <br>
                <i class="text-info">Phòng của bạn đã được giữ. 
                   Đưa phiếu thông tin cho nhân viên lễ tân tại khách sạn để tiến hành thanh toán, check-in và bắt đầu trải nghiệm kì nghĩ của bạn!.</i>
                   <?php
                    };
                   ?>
              </div>
            </div>
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
      <center>
        <i class=" text-center text-success"><b>Cảm ơn vì đã lựa chọn MeiDor <span class="fa fa-heart"></span></b></i>
      </center>
      </form>
    </div>
  </div>