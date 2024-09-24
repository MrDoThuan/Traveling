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
    height: auto; 
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
        Danh sách Nơi ở / <a href="index.php?action=updatenoio&act=insert_noio">Thêm Khách Sạn, Homestay</a>
      </h3>
      <div class="table-container">
        <table>
          <thead>
            <tr>
              <th>STT</th>
              <th class="text-center">Hình Ảnh</th>
              <th class="text-center" style="width: 250px!important;">Tên</th>
              <th class="text-center">Mô Tả</th>
              <th class="text-center" style="width: 200px!important;">Thao Tác</th>
            </tr>
          </thead>
          <tbody>
          <?php
          $dl= new place();
          $dd=$dl->getKS();
          $t=0;
          while ($get=$dd->fetch()):
            $t++;
          ?>
            <tr>
              <td scope="row"><?php echo $t ?></td>
              <td><img src="../Content/Images/NoiO/<?php echo $get['hinhno']?>"></td>
              <td><b><?php echo $get['tenno']?></b></td>
              <td><?php echo $get['mota']?></td>
              <td class="align-middle item-actions">
                        <button type="submit" class="edit">
                        <a href="index.php?action=updatenoio&act=update_noio&id=<?php echo $get['idno']?>" class="text-light"><span class="fa fa-edit"></span> Chi tiết</a>
                      </button>
                      <button type="submit" class="delete">
                        <a href="index.php?action=updatenoio&act=delete_noio&id=<?php echo $get['idno']?>" class="text-light"><span class="fa fa-trash"></span> Xóa</a>
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