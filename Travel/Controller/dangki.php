<?php
$dk="dangki";
if(isset($_GET["dk"]))
{
    $dk=$_GET["dk"];
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
    if(isset($_POST['submit']))
    {
        $hoten=$_POST['hoten'];
        $diachi=$_POST['diachi'];
        $email=$_POST['email'];
        $user=$_POST['user'];
        $pass=$_POST['pass'];
        $phone=$_POST['phone'];

        //mã hóa pass
        $saltF="DT117#!";
        $saltL="HT22&&@";
        $passnew=md5($saltF.$pass.$saltL);
        //check username và email
        $kh=new user();
        $check=$kh->checkUser($user,$pass)-> rowCount();
        if($check>=1)
        {
            echo '<script>alert("Tên đăng nhập hoặc Email đã tồn tại");</script>';
            include_once "./View/dangki.php";
        }
        else
        {
            //insert vào database
            $iskh=$kh->addUser($hoten,$diachi,$email,$user,$pass,$phone);
            if($iskh!==false)
            {
                echo '<script> alert("Tài khoản đã được Đăng kí");</script>';
                include_once "./View/main.php";
            }
            else
            {
                echo '<script> alert("Oops! Đã có lỗi xảy ra :<");</script>';
                include_once "./View/dangki.php";
            }
        }
    }

}
?>