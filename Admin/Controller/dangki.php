<?php
$dk='dangki';
if(isset($_GET['dk']))
{
    $dk=$_GET['dk'];
}
switch($dk){
    case 'dangki':
        include_once "./View/dangki.php";
    break;

    case 'dangki_action':
        //Nhận thông tin
        $hoten='';
        $diachi='';
        $email='';
        $user='';
        $pass='';
        $phone='';
        $hinhnv='';
        $ngaysinh='';
    if(isset($_POST['submit']))
    {
        $hoten=$_POST['hoten'];
        $diachi=$_POST['diachi'];
        $email=$_POST['email'];
        $user=$_POST['user'];
        $pass=$_POST['pass'];
        $phone=$_POST['phone'];
        $hinhnv=$_POST['hinhnv'];
        $ngaysinh=$_POST['ngaysinh'];

        //Mã hóa pass
        $saltF="DT117#!";
        $saltL="HT22&&@";
        $passnew=md5($saltF.$pass.$saltL);
        //check email và username
        $ad=new nhanvien();
        $check=$ad->Admin($user,$email) -> rowCount();
        if($check>=1)
        {
            echo '<script>alert("Email và Tên đăng nhập đã có");</script>';
            include_once './View/dangki.php';
        }
        else
        {
            //insert vào database
            $isnv=$ad->insertAdmin($hoten,$diachi,$email,$user,$pass,$phone,$hinhnv,$ngaysinh);
            if($iskh!==false)
            {
                echo '<script> alert("Tài khoản đã được Đăng kí");</script>';
                include_once "./View/header.php";        
            }
            else
            {
                echo '<script> alert("Kiểm tra lại thông tin");</script>';
                include_once "./View/dangki.php";
            }
        }
    }
}
?>