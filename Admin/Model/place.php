<?php
class place{
    //Phương thức lấy địa điểm du lịch
    function getDL()
    {
        $db=new connect();
        $select="select DISTINCT * from noidulich ";
        $result=$db->List($select);
        return $result;       
    }
    //Phương thức lấy danh sách khách sạn
    function getKS()
    {
        $db=new connect();
        $select="SELECT DISTINCT * FROM noio";
        $result=$db->List($select);
        return $result;
    }
    //Phương thức lấy danh sách chỗ ở
    function getCO()
    {
        $db=new connect();
        $select="SELECT DISTINCT a.idphong,a.tenphong,a.hinhphong,a.giuong, a.giaphong, a.songuoi,b.tenct FROM ctphong a, ttinphong b WHERE a.idct=b.idct";
        $result=$db->List($select);
        return $result;        
    }
    //Phương thức insert Nơi ở
    function insertNO($iddl,$tenno,$hinhno,$mota)
    {
        $db=new connect();
        $query="INSERT INTO noio(idno,iddl,tenno,hinhno,mota)
        VALUES (NULL,$iddl,'$tenno','$hinhno','$mota')";
        $result= $db->exec($query); 
        return $result;
    }
    //Phương thức lấy thông tin của nơi ở
    function getNoio($idno)
    {
        $db=new connect();
        $select="SELECT a.idno, a.iddl,a.tenno, a.hinhno, a.mota, b.tendl FROM noio a, noidulich b WHERE idno=$idno and a.iddl=b.iddl;";
        $result=$db->Instant($select);
        return $result;
    }
    //Phương thức insert Chỗ ở
    function insertCO($tenphong,$hinhphong,$giaphong,$songuoi,$giuong,$idno,$idct)
    {
        $db=new connect();
        $query="INSERT INTO ctphong(idphong,hinhphong,tenphong,giaphong,songuoi,giuong,idno,idct)
        VALUES (NULL,'$hinhphong','$tenphong','$giaphong','$songuoi','$giuong','$idno','$idct')";
        $result=$db->exec($query);
        return $result;
    }
    //Phương thức lấy thông tin chỗ ở
    function getChoo($idphong)
    {
        $db=new connect();
        $select="SELECT a.idphong,a.hinhphong,a.tenphong,a.giaphong,a.songuoi,a.giuong,a.idno,a.idct,b.tenct, c.tenno FROM ctphong a, ttinphong b, noio c 
        WHERE a.idct=b.idct and a.idno=c.idno and a.idphong=$idphong";
        $result=$db->Instant($select);
        return $result;
    }
    //Phương thức lấy tiện ích phòng
    function getInfo()
    {
        $db=new connect();
        $select="SELECT DISTINCT * FROM ttinphong";
        $result=$db->List($select);
        return $result; 
    }
    //Phương thức lấy tên nơi ở
    function getPlace()
    {
        $db=new connect();
        $select="SELECT DISTINCT idno,tenno FROM noio";
        $result=$db->List($select);
        return $result;        
    }
    //Phương thức lấy danh sách đặt phòng
    function getClient()
    {
        $db=new connect();
        $select="SELECT DISTINCT a.id,a.idkh,a.idphong,a.tiencoc,a.tienttoan,a.ngayTao,a.tenkhach,b.tenkh,c.tenphong FROM phieuthongtin a, khachhang b, ctphong c WHERE a.idkh=b.idkh and a.idphong=c.idphong";
        $result=$db->List($select);
        return $result;
    }
}
?>