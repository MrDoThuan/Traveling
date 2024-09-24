<main>
<div id="carouselId" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselId" data-slide-to="0" class="active"></li>
            <li data-target="#carouselId" data-slide-to="1"></li>
            <li data-target="#carouselId" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img src="../Content/Images/VN/poster1.png" alt="First slide" width="100%" height="500px">
            </div>
            <div class="carousel-item">
                <img src="../Content/Images/VN/poster2.png" alt="Second slide"  width="100%" height="500px">
            </div>
            <div class="carousel-item">
                <img src="../Content/Images/VN/poster3.png" alt="Third slide"  width="100%" height="500px">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
      </div>
    <div class="container mt-2">
        <div class="mt-3 mb-3">
            <div class="text-center text-dark">
                <h1 class="title">Dạo quanh Việt Nam</h1>
            </div>
        </div>
<div class="row">
        <?php
        $dl= new dulich();
        $result= $dl->LayDiaDiem();
        while($get=$result->fetch()):
        ?>
    <div class="col-md-3 mt-2">
        <a href="index.php?action=diadiem&DL=diadiemolai&id=<?php echo $get['iddl']?>">
        <div class="card">
        <img class="card-img-top" src="../Content/Images/NoiDuLich/<?php echo $get['hinhdl']?>" width="252px" height="159px" alt="">
        <div class="card-body">
        <h4 class="card-title title-3 text-center text-dark"><?php echo $get['tendl']?></h4>
    </div>
        </a>
</div>
    </div>
        <?php
        endwhile;
        ?>
    </div>
</main>