<style>
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
      th, td{
      width: 33,33%;
      text-align: center;
    }
</style>
<div class="info-table">
      <h3 class="main-title">
        Danh sách Địa điểm Du lịch
      </h3>
      <div class="table-container">
        <table>
          <thead>
            <tr>
              <th>STT</th>
              <th>Hình Ảnh</th>
              <th>Tên</th>
            </tr>
          </thead>
          <tbody>
          <?php
          $dl= new place();
          $dd=$dl->getDL();
          $t=0;
          while ($get=$dd->fetch()):
            $t++;
          ?>
            <tr>
              <td scope="row"><?php echo $t ?></td>
              <td><img src="../Content/Images/NoiDuLich/<?php echo $get['hinhdl']?>"></td>
              <td><b><?php echo $get['tendl']?></b></td>
            </tr>
          <?php
          endwhile;
          ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>