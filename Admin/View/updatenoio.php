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
<h2 class="text-center mb-4 text-success">Xem / Thêm Khách Sạn, Homestay</h2>
<?php
if(isset($_GET['id']))
{
    $id=$_GET['id'];
    $no=new place();
    $tt=$no->getNoio($id);
    $idno=$tt['idno'];
    $iddl=$tt['iddl'];
    $tendl=$tt['tendl'];
    $tenno=$tt['tenno'];
    $hinhno=$tt['hinhno'];
    $mota=$tt['mota'];
}
?>
    <form action="index.php?action=updatenoio&act=insert_action" method="post" enctype="multipart/form-data">
        <div class="form-group">
          <label for="">Mã Nơi ở:</label>
          <input type="number" readonly="true"  placeholder="Mã sẽ được cập nhật tự động" class="form-control" value="<?php if(isset($idno)) echo $idno?>" name="idno" required>
        </div>
          <div class="form-group">
            <label for="">Địa điểm du lịch: </label>
            <?php
            if(isset($iddl))
            {

            ?>
            <input type="text" class="form-control" readonly="true"  value="<?php echo $tendl?>" name="iddl"  required>
            <?php
            };
            if(!isset($iddl))
            {
            ?>
            <select class="form-control" name="iddl">
                <option>--</option>
                <?php
                $dl=new place();
                $result=$dl->getDL();
                while($get=$result->fetch()):
                ?>
                <option value="<?php echo $get['iddl']?>"><?php echo $get['tendl']?></option>
                <?php
                endwhile;
            }
                ?>
            </select>
          </div>
        <div class="form-group">
            <label for="">Tên Nơi ở: </label>
            <?php
            if(isset($tenno))
            {
            ?>
              <input type="text" class="form-control" readonly="true" value="<?php if(isset($tenno)) echo $tenno?>" name="tenno" required>  
            <?php
            };
            if(!isset($tenno))
            {
            ?>
              <input type="text" class="form-control" placeholder="Nhập tên nơi ở" name="tenno" required> 
            <?php
            };
            ?>
          </div>
      <div class="form-group">
        <label for="">Hình Nơi ở:</label>
        <?php
        if(isset($hinhno))
        {
        ?>
        <input type="text" class="form-control" readonly="true" value="<?php echo $hinhno?>" name="hinhno" required>
        <?php
        };
        if(!isset($hinhno))
        {

        ?>
        <input type="file" class="form-control" name="hinhno" id="fileupload">
        <?php
        }
        ?>

      </div>
      <div class="form-group">
        <label for="">Mô tả:</label>
        <?php 
        if(isset($mota))
        {
        ?>
        <textarea class="form-control" name="mota" readonly="true" required>
           <?php echo $mota?>
        </textarea>           
        <?php
        };
        if(!isset($mota))
        {
        ?>
        <textarea class="form-control" name="mota" required></textarea>  
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