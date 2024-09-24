<?php
class nhanvien{
    function checkAdmin($user,$pass)
    {
        $db=new connect();
        $select="SELECT idnv,username,pass FROM nhanvien WHERE username='$user' and pass='$pass'";
        $result=$db->Instant($select);
        return $result;
    }
    //Phương thức check Admin
    function Admin($user,$email)
    {
        $db=new connect();
        $select="SELECT idnv,username, email FROM nhanvien WHERE username='$user' or pass='$email'";
        $result=$db->List($select);
        return $result;
    }
    //Phương thức lấy thông tin nhân viên dựa vào idnv
    function getAdmin($idnv)
    {
        $db=new connect();
        $select="SELECT * FROM nhanvien WHERE idnv='$idnv'";
        $result=$db->Instant($select);
        return $result;
        
    }
    //Phương thức insert admin
    function insertAdmin($hoten,$diachi,$email,$user,$pass,$phone,$hinhnv,$ngaysinh)
    {
        $db=new connect();
        $query="INSERT INTO nhanvien(idnv,tennv,diachi,email,username,pass,phone,hinhnv,ngaysinh)
        VALUES (NULL,'$hoten','$diachi','$email','$user','$pass','$phone','$hinhnv','$ngaysinh')";
        $result=$db->exec($query);
        return $result;        
    }
}
?>