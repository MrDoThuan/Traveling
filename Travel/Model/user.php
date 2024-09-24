<?php
class user{
    //Phương thức kiểm tra trùng username và email
    function checkUser($user,$email)
    {
        $db=new connect();
        $select="SELECT a.username, a.email FROM khachhang a WHERE a.username='$user' or a.email='$email'";
        $result=$db->List($select);
        return $result;
    }
    //Phương thức insert vào database
    function addUser($hoten,$diachi,$email,$user,$pass,$phone)
    {
        $db=new connect();
        $query="INSERT INTO khachhang(idkh,tenkh,diachi,email,username,pass,phone) 
        VALUES(NULL,'$hoten','$diachi','$email','$user','$pass','$phone');";
        $result=$db->exec($query);
        return $result;
    }
    //Phương thức đăng nhập
    function logUser($user,$pass)
    {
        $db=new connect();
        $select="SELECT a.idkh, a.username, a.tenkh FROM khachhang a WHERE a.username='$user' and a.pass='$pass';";
        $result=$db->Instant($select);
        return $result;
    }
    //Phương thức lấy thông tin khách hàng dựa trên idkh
    function getKH($idkh)
    {
        $db=new connect();
        $select="SELECT a.tenkh,a.username, a.email, a.phone FROM khachhang a WHERE a.idkh=$idkh;";
        $result=$db->Instant($select);
        return $result;
    }        

}
?>