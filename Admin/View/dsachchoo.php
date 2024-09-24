<style>
    .item-actions button {
      padding: 5px 10px;
      margin-right: 5px;
      font-size: 14px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 0.3s ease-in-out;
    }

    .item-actions button.edit {
      background-color: #17a2b8;
      color: #fff;
    }

    .item-actions button.delete {
      background-color: #dc3545;
      color: #fff;
    }
table td img {
    max-width: 200px; 
    height: 200px; 
  }
  table td {
    vertical-align: middle;
  }
  table th, table td {
    word-wrap: break-word;
  }
</style>
<div class="info-table">
      <h3 class="main-title">
        Danh sách Phòng / <a href="index.php?action=updatechoo&act=insert_choo">Thêm Chổ ở</a>
      </h3>
      <div class="table-container">
        <table>
          <thead>
            <tr>
              <th>STT</th>
              <th>Hình Ảnh</th>
              <th style="width: 250px!important;">Tên</th>
              <th>Giá</th>
              <th>Số Người</th>
              <th>Giường</th>
              <th>Thông Tin Phòng</th>
              <th>Thao Tác</th>
            </tr>
          </thead>
          <tbody>
          <?php
          $dl= new place();
          $dd=$dl->getCO();
          $t=0;
          while ($get=$dd->fetch()):
            $t++;
          ?>
            <tr>
              <td scope="row"><?php echo $t ?></td>
              <td><img src="../Content/Images/Phong/<?php echo $get['hinhphong']?>"></td>
              <td style="width: 250px!important;"><b><?php echo $get['tenphong']?></b></td>
              <td><?php echo number_format($get['giaphong'])?>VND</td>
              <td><?php echo $get['giuong']?></td>
              <td><?php echo $get['songuoi']?></td>
              <td><?php echo $get['tenct']?></td>
              <td class="align-middle item-actions">
                        <button type="submit" class="edit">
                        <a href="index.php?action=updatechoo&act=update_choo&id=<?php echo $get['idphong']?>" class="text-light"><span class="fa fa-edit"></span> Chi tiết</a>
                      </button>
                      <button type="submit" class="delete">
                        <a href="" class="text-light"><span class="fa fa-trash"></span> Xóa</a>
                      </button>
            </td>
            </tr>
          <?php
          endwhile;
          ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>