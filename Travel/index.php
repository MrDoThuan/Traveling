<?php
  session_start();
    //Gọi hàm qua index
    include_once 'Model/connect.php';
    include_once 'Model/dulich.php';
    include_once 'Model/user.php';
    include_once 'Model/phieuttin.php';

//Cách liên kết nhanh Model
//Dùng spl
set_include_path(get_include_path().PATH_SEPARATOR.'Model/');
spl_autoload_extensions('.php');
spl_autoload_register();
 ?>

<!doctype html>
<html lang="en">
  <head>
    <title>Đỏ Thuận Travel</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS, FontAwesome -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Link logo MXH -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Link CSS -->
    <link rel="stylesheet" href="../Content/Css/travel.css">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      <!--Link font chữ-->
        <!-- Font Pacifico -->
          <link rel="preconnect" href="https://fonts.googleapis.com">
          <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
          <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@700&family=Pacifico&display=swap" rel="stylesheet">
        <!-- Font Sacramento -->
          <link rel="preconnect" href="https://fonts.googleapis.com">
          <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
          <link href="https://fonts.googleapis.com/css2?family=Sacramento&display=swap" rel="stylesheet">
          <!-- Font Georgian -->
          <link rel="preconnect" href="https://fonts.googleapis.com">
          <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
          <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+Georgian:wght@100..900&display=swap" rel="stylesheet">
  </head>
  <body>
    <!-- Test -->
    <?php 
    $kn= new connect()
    ?>
    <!-- HEADER -->
    <?php 
    
    include_once 'View/header.php'
    ?>
            <!-- Main -->
            <?php
            $ctrl="main";
            // index điều phối đến các controller
            if(isset($_GET['action']))
            {
              $ctrl=$_GET['action']; //dulich
            }
                include_once "Controller/$ctrl.php";
               ?>
    <!-- FOOTER -->
    <?php 
    include_once "View/footer.php";
    ?>
  </body>
</html>