<style>
    .product-card {
      max-width: 1200px;
      margin: 50px auto;
      background-color: #fff;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
      border-radius: 10px;
      overflow: hidden;
      padding: 20px;
      display: flex; /* Sử dụng Flexbox */
      align-items: center; /* Canh giữa các phần tử theo chiều dọc */
    }

    .product-image {
        width: 302px;
        height: 201px;
        border-radius: 10px;
    }

    .product-details {
      padding: 30px;
      flex: 1; /* Phần chiếm hết phần còn lại của không gian */
    }

    .product-title {
      font-size: 28px;
      font-weight: bold;
      color: #333;
      margin-bottom: 10px;
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
      margin-left: auto; /* Canh sang phải */
      display: block; /* Hiển thị như block element để chiếm hết chiều rộng */
    }
    .choose-btn:hover {
      background-color: #d0461e;
    }
    </style>
    <h1 class="text-center title">Chọn Khách sạn / Homestay của bạn! </h1>
        <?php
        //Điều phối và truyền id qua
        if(isset($_GET['id']))
        {
            $id=$_GET['id'];
            $dl= new dulich();
        }
        ?>
        <?php
            $noio=$dl->getNoio($id);
            while($get=$noio->fetch()):
        ?>
    <div class="product-card">
      <img class="product-image img-fluid" src="../Content/Images/Noio/<?php echo $get['hinhno']?>" alt="Product 1">
      <div class="product-details">
        <!-- Tên sản phẩm -->
        <div class="product-title"><?php echo $get['tenno']?></div>
    </div>
    <a href="index.php?action=diadiem&DL=chitietphong&id=<?php echo $get['idno']?>">
        <button type="submit" class="choose-btn" data-toggle='modal' data-target='#myModal'>Xem chi tiết</button>
    </a>
    </div>
    <?php
    endwhile;
    ?>