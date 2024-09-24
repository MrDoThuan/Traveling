<style>
    .img-VN{
        border-radius: 50%;
        border: 2px solid black;;
        width: 23   px;
        height: 23px;
    }
    .item-actions button {
      padding: 5px 10px;
      font-size: 18px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 0.3s ease-in-out;
    }
    .item-actions button.login{
        background-color: blue ;
        color: #fff;
        border: 1px solid black;
    }
    .item-actions button.register{
        background-color: #fff;
        color: black;
        border: 1px solid black;
    }
  </style>
  <header>
      <nav class="navbar navbar-expand-sm navbar-light mb-2" style="background-color: #CDE3F7;">
          <a class="navbar-brand" href="index.php"><img src="../Content/Images/VN/logo1.png" width="235px" height="70px"></a>
          <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
              aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="collapsibleNavId">
              <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                  <li class="nav-item active mt-2">
                      <a class="nav-link" href="#"><img class="img-VN" src="../Content/Images/VN/VN.png">VI|VND</a>
                  </li>
                  <li class="nav-item mt-2">
                      <a class="nav-link" href="index.php"><b>Trang Chủ</b></a>
                  </li>
                  <?php
                  if(!isset($_SESSION['idkh']))
                  {
                  ?>
                  <div class="item-actions">
                      <li class="nav-item">
                          <a class="nav-link" href="index.php?action=dangnhap">
                             <button class="login"><span class="fa fa-user"></span> Đăng Nhập</button>
                          </a>
                      </li>
                  </div>
                  <div class="item-actions">
                      <li class="nav-item">
                          <a class="nav-link" href="index.php?action=dangki">
                             <button class="register"><span></span> Đăng Kí</button>
                          </a>
                      </li>
                  </div>
                  <?php
                  }
                  ?>
  
                  <?php
                  if(isset($_SESSION['idkh']))
                  {
                      $idkh=$_SESSION['idkh'];
                     $kh=new user();
                     $name=$kh->getKH($idkh);
                     $user=$name['username'];
                  ?>
                  <li class="nav-item dropdown mt-2">
                      <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Xin Chào, <?php echo $user?></a>
                      <div class="dropdown-menu" aria-labelledby="dropdownId">
                          <a class="dropdown-item" href="index.php?action=dangnhap&dn=dangxuat">Đăng Xuất</a>
                      </div>
                  </li>                 
                  <?php
                  }                
                  ?>     
  
              </ul>
          </div>
      </nav>
  </header>