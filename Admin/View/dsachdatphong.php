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
        Danh sách Đặt Phòng
      </h3>
      <div class="table-container">
        <table>
          <thead>
            <tr>
              <th>STT</th>
              <th>Tên Khách Hàng</th>
              <th>Tên Phòng</th>
              <th>Tiền Đã Cọc</th>
              <th>Tiền Thanh Toán</th>
              <th>Ngày Đặt</th>
              <th>Tên Khách lưu trứ</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $kh=new place();
            $ct=$kh->getClient();
            $t=0;
            while($get=$ct->fetch()):
                $t++;
            ?>
            <tr>
              <td scope="row"><?php echo $t?></td>
              <td><?php echo $get['tenkh']?></td>
              <td><?php echo $get['tenphong']?></td>
              <td><?php echo $get['tiencoc']?></td>
              <td><?php echo $get['tienttoan']?></td>
              <td><?php echo $get['ngayTao']?></td>
              <td><?php echo $get['tenkhach']?></td>
            </tr>
            <?php
            endwhile;
            ?>
          </tbody>
        </table>
      </div>
    </div>