<style>
    .product-card {
        background-color: #fff;
        height: auto;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    }
    .main-image {
            width: 700px;
            height: 390px;
            border-radius: 10px;
        }
        .side-images img {
            width: 369px; 
            height: 185px; 
            margin-bottom: 20px; 
        }
        .side-images img:last-child {
            margin-bottom: 0;
        }
    .product-image {
    width: 293px;
    height: 215px;
    border-radius: 10px;
  }
  .table {
    border-radius: 10px;
    margin-top: 20px;
  }

  thead {
    background-color: #d3d3d3;
  }

  thead th {
    padding: 15px;
  }

  tbody tr {
    background-color: #f9f9f9;
    border-bottom: 1px solid #ddd
  }

  tbody td {
    padding: 15px;
    vertical-align: middle;
  }

  tbody tr:last-child {
    border-bottom: none;
  }
  .choose-btn {
      padding: 12px 20px;
      font-size: 18px;
      font-weight: bold;
      color: #fff;
      background-color: #e44d26;
      border: none;
      border-radius: 10px;
      cursor: pointer;
      margin-left: auto; /* Canh sang phải */
      display: block; /* Hiển thị như block element để chiếm hết chiều rộng */
    }
    .choose-btn:hover {
      background-color: #d0461e;
    }
  </style>
  <?php
  if(isset($_GET['id']))
  {
    $id=$_GET['id'];
    $dl= new dulich();
    $ct=$dl->getChitiet($id);
    $ten=$ct['tenno'];
    $diachi=$ct['diachi'];
    $hinh=$ct['hinhno'];
    $mota=$ct['mota'];
  }
  ?>
  <div class="container mt-3">
    <div class="row">
        <div class="col-md-7">
            <h2><?php echo $ten?></h2>
            <p style="font-size: 18px; color: gray;"><b><i><?php echo $ten?></i></b></p>
            <p><span class="fa fa-location-pin"></span> <?php echo $diachi?> </p>
        </div>
        <div class="col-md-5 text-right  mt-3">
            <button class="choose-btn" style="font-size: 28px !important;" id="selectButton">Xem Phòng</button>
        </div>
    </div>
    <div class="row no-gutters">
            <div class="col-md-8">
                <img class="product-img main-image" src="../Content/Images/Noio/<?php echo $hinh?>" alt="Main Image">
            </div>
            <div class="col-md-4">
                <div class="side-images">
                  <?php
                  $pic=new dulich();
                  $more=$pic->getMorePic($id);
                  while($get=$more->fetch()):
                  ?>
                  <img class="product-image" src="../Content/Images/Noio/<?php echo $get['hinh']?>" alt="Side Image 1">
                  <?php
                  endwhile;
                  ?>
                </div>
            </div>
        </div>
    <div class="product-card mt-3" style="max-width: 100%;">
        <h5>Giới thiệu cơ sở lư trú</h5>
        <p><?php echo $mota?></p>
    </div>

<!--Chi tiết phòng-->
  <?php
  $ctp=$dl->getCTPhong($id);
  while($get=$ctp->fetch()):
  ?>
    <div class="product-card mt-3" id="Content">
      <div class="container">
        <h2><b><?php echo $get['tenphong']?></b></h2>
        <div class="row">
          <div class="col-md-4">
            <img class="product-image" src="../Content/Images/Phong/<?php echo $get['hinhphong']?>">
          </div>
          <div class="col-md-8">
            <table class="table text-center">
              <thead>
                <tr>
                  <th>Chi tiết phòng</th>
                  <th>Khách</th>
                  <th>Giá/Phòng/Đêm</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td scope="row">
                    <?php echo $get['tenphong']?> <br>
                    <b><?php echo $get['tenct']?></b>
                  </td>
                  <td><span class="fa fa-user"></span> X <?php echo $get['songuoi']?></td>
                  <td>
                    <b><?php echo number_format($get['giaphong'])?></b> <br>
                    <small>Chưa bao gồm thuế VAT</small>
                </td>
                  <td>
                    <a href="index.php?action=ttinkhachhang&ttin=ttinkh&id=<?php echo $get['idphong']?>">
                    <button class="choose-btn">Chọn</button></a>
                </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <?php
    endwhile;
    ?>
  </div>
  <script>
    document.getElementById("selectButton").addEventListener("click", function(){
      //khi bấm nút chọn. Nhảy xuống phần phòng
      document.getElementById("Content").scrollIntoView({
        behavior: "smooth"
      });
    })
  </script>