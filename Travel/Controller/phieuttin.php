<?php
    $act='phieuttin';
    if(isset($_GET['act']))
    {
        $act=$_GET['act'];
    }
    switch($act)
    {
        case 'phieuttin':
            include_once "./View/phieuttin.php";
            break;
        case 'luuthongtin':
            if(isset($_POST['PercentPrice']) && $_POST['Price']){
                $total = $_POST['PercentPrice'];
                $price=$_POST['Price'];
                $tenkhach='';
                if(isset($_POST['tenkhach']))
                {
                    $tenkhach=$_POST['tenkhach'];
                }
                $get = new phieuttin();
                if(isset($_SESSION['idkh']))
                {   
                    if(isset($_GET['id']))
                    {
                        $idphong=$_GET['id'];
                        $idkh=$_SESSION['idkh'];
                        $date = new DateTime('now');
                        $ngay = $date->format('d/m/Y');
                        $flag = $get->addPhieuttin($idkh,$idphong,$total,$price,$ngay,$tenkhach);
                    } else {
                        echo '<script> alert("Không tìm thấy phòng!");</script>';
                    }
                    
                } else {
                    echo '<script> alert("Vui lòng đăng nhập trước!");</script>';
                }
            } else {
                echo '<script> alert("Lỗi mẹ rồi!");</script>';
            }
            include_once "./View/phieuttin.php";
            break;
    }
?>