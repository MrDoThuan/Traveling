<?php
$act='dangnhap';
if(isset($_GET['act']))
{
    $act=$_GET['act'];
}
switch($act)
{
    case 'dangnhap':
        include_once './View/dangnhap.php';
    break;

    case 'dangnhap_action':
        //Nhận về, kiểm tra
        if($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $user=$_POST['user'];
            $pass=$_POST['pass'];
            //Đem thông tin này về kiểm tra có hay không
            $nv=new nhanvien();
            $check=$nv->checkAdmin($user,$pass);
            if($check!==false)
            {
                $_SESSION['idnv']=$check['idnv'];
                $_SESSION['admin']=$check['username'];
                echo '<script> alert("Đăng nhập thành công");</script>';
                echo '<meta http-equiv=refresh content="0;url=./index.php?action=header"/>';
            }
            else
            {
                echo '<script> alert("Đăng nhập không thành công");</script>';
                include_once "./View/dangnhap.php";
            }
        }
    break;
    case 'dangxuat':
        unset($_SESSION['admin']);
        unset($_SESSION['idnv']);
        echo '<script> alert("Đăng xuất thành công");</script>';
        echo '<meta http-equiv="refresh" content="0;url=./index.php?action=dangnhap"/>';
        break;
        
}
?>