<style>
    .item-actions button {
      padding: 5px 10px;
      margin-right: 5px;
      font-size: 18px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 0.3s ease-in-out;
    }

    .item-actions button.update {
      background-color: #17a2b8;
      color: #fff;
    }

    .item-actions button.back {
      background-color: #dc3545;
      color: #fff;
    }
</style>
<h2 class="text-center mb-4 text-success">Xem / Thêm Chỗ ở</h2>
<?php
if(isset($_GET['id']))
{
    $id=$_GET['id'];
    $co=new place();
    $tt=$co->getChoo($id);
    $idphong=$tt['idphong'];
    $hinhphong=$tt['hinhphong'];
    $tenphong=$tt['tenphong'];
    $giaphong=$tt['giaphong'];
    $songuoi=$tt['songuoi'];
    $giuong=$tt['giuong'];
    $idno=$tt['idno'];
    $tenno=$tt['tenno'];
    $idct=$tt['idct'];
    $tenct=$tt['tenct'];
}
?>
    <form action="index.php?action=updatechoo&act=insert_action" method="post" enctype="multipart/form-data">
        <div class="form-row">
            <div class="form-group col-md-6">
              <label for="">Mã Chổ ở:</label>
              <input type="text" name="idphong" readonly="true" placeholder="Mã sẽ được cập nhật tự động" value="<?php if(isset($idphong)) echo $idphong?>" id="" class="form-control">
            </div>
            <div class="form-group col-md-6">
              <label for="">Tên nơi ở:</label>
              <?php
              if(isset($tenphong))
              {
              ?>
              <input type="text" name="tenphong" value="<?php echo $tenphong?>" readonly="true" id="" class="form-control">
              <?php
              };
              if(!isset($tenphong))
              {
              ?>
              <input type="text" name="tenphong" class="form-control" placeholder="Nhập tên phòng">
              <?php
              };
              ?>
            </div>
            <div class="form-group col-md-6 ">
                  <label for="">Hình Chỗ ở:</label>
                  <?php
            if(isset($hinhphong))
            {
            ?>
            <input type="text" class="form-control" readonly="true" value="<?php echo $hinhphong?>" name="hinhno" required>
            <?php
            };
            if(!isset($hinhphong))
            {
    
            ?>
            <input type="file" class="form-control" name="hinhphong" id="fileupload">
            <?php
            }
            ?>
            </div>
            <div class="form-group col-md-6">
              <label for="">Khách sạn/ Homestay: </label>
              <?php
              if(isset($idno))
              {
              ?>
            <input type="text" name="idno" id="" class="form-control" value="<?php echo $tenno?>" placeholder="" readonly="true" aria-describedby="helpId">
              <?php
              };
              if(!isset($idno))
              {
              ?>
            <select class="form-control" name="idno">
                <option>--</option>
            <?php
            $no= new place();
            $let=$no->getPlace();
            while($get=$let->fetch()):
            ?>
            <option value="<?php echo $get['idno']?>"><?php echo $get['tenno']?></option>
            <?php
            endwhile;
            ?>
            </select>
              <?php
              };
              ?>

            </div>
        </div>
        <div class="form-group">
            <label for="">Giá phòng:</label>
            <?php
            if(isset($giaphong))
              {
              ?>
            <input type="text" name="giaphong" value="<?php echo $giaphong?>" readonly="true" id="" class="form-control">
              <?php
              };
              if(!isset($giaphong))
              {
              ?>
            <input type="text" name="giaphong" class="form-control" placeholder="Nhập giá phòng">
              <?php
              };
              ?>

        </div>
        <div class="form-group">
            <label for="">Số người:</label>
            <?php
            if(isset($songuoi))
              {
              ?>
              <input type="text" name="songuoi" value="<?php echo $songuoi?>" readonly="true" id="" class="form-control">
              <?php
              };
              if(!isset($songuoi))
              {
              ?>
              <input type="text" name="songuoi" class="form-control" placeholder="Nhập số người">
              <?php
              };
              ?>

        </div>
        <div class="form-group">
            <label for="">Giường:</label>
            <?php
            if(isset($giuong))
              {
              ?>
            <input type="text" name="giuong" value="<?php echo $giuong?>" readonly="true" id="" class="form-control">
              <?php
              };
              if(!isset($giuong))
              {
              ?>
              <input type="text" name="giuong" class="form-control" placeholder="Nhập số giường">
              <?php
              };
              ?>

        </div>
        <div class="form-group">
            <label for="">Thông tin phòng:</label>
            <?php
            if(isset($idct))
            {
            ?>
            <input type="text"  class="form-control" name="tenct" readonly="true" value="<?php echo $tenct?>">
            <?php
            };
            if(!isset($idct))
            {
            ?>
            <select class="form-control" name="tenct">
                <option>--</option>
            <?php
            $ct=new place();
            $result=$ct->getInfo();
            while($get=$result->fetch()):
            ?>
            <option value="<?php echo $get['idct']?>"><?php echo $get['tenct']?></option>
            <?php
            endwhile;
            ?>
            </select>
            <?php
            };
            ?>
        </div>
        <div class="row item-actions">
        <div class="col-md-6 text-right">
        <button type="submit" class="update">Sửa/Thêm</button>
        </div>
      </div>
    </form>