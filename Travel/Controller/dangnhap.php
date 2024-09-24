<?php
$dn='dangnhap';
if(isset($_GET['dn']))
{
    $dn=$_GET['dn'];
}
switch($dn)
{
    case 'dangnhap':
        include_once "./View/dangnhap.php";
    break;

    case 'dangnhap_action':
        $user='';
        $pass='';
    if(isset($_POST['user']) && isset($_POST['pass']))
    {
        $user=$_POST['user'];
        $pass=$_POST['pass'];
        $saltF="DT117#!";
        $saltL="HT22&&@";
        $passnew=md5($saltF.$pass.$saltL);
        //Ktra tài khoản
        $kh=new user();
        $login=$kh->logUser($user,$pass);
        if($login)
        {
            //Đăng nhập thành công, tạo SESION lưu thông tin
            $_SESSION['idkh']=$login['idkh'];
            $_SESSION['user']=$login['user'];
            echo '<script> alert("Đăng nhập thành công!");</script>';
            echo '<meta http-equiv="refresh" content="0;url=./index.php?action=main"/>';
        }
        else
        {
            echo '<script> alert("Oops! Hình như sai gì rồi!! ");</script>';
            echo '<meta http-equiv="refresh" content="0;url=./index.php?action=dangnhap"/>';
        }
    }
    break;
    case 'dangxuat':
        unset($_SESSION['idkh']);
        unset($_SESSION['user']);
        echo '<script> alert("Đăng xuất thành công!");</script>';
        echo '<meta http-equiv="refresh" content="0;url=./index.php"/>';
}
?>