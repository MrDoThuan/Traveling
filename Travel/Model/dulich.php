<?php
class dulich{
    function LayDiaDiem()
    {
        $db=new connect();
        $select="SELECT * FROM `noidulich` WHERE 1;";
        $result=$db->List($select);
        return $result; //Lấy được dữ liệu về
    }
    //Phương thức lấy thông tin của địa điểm du lịch
    function getNoio($id)
    {
        $db=new connect();
        $select="SELECT a.idno, a.tenno, a.hinhno FROM noio a, noidulich b WHERE a.iddl=b.iddl and b.iddl=$id;";
        $result=$db->List($select);
        return $result; //Lấy được dữ liệu về
    }
        //Phương thức lấy chi tiết nơi ở
        function getChitiet($id)
        {
            $db=new connect();
            $select="SELECT * FROM noio WHERE idno=$id;";
            $result=$db->Instant($select);
            return $result; //Lấy được dữ liệu về
        }
        //Phương thức lấy thêm hình của nơi ở
        function getMorePic($id)
        {
            $db=new connect();
            $select="SELECT * FROM hinhnoio WHERE idno=$id;";
            $result=$db->List($select);
            return $result; //Lấy được dữ liệu về           
        }
        //Phương thức lấy chi tiết phòng của nơi ở
        function getCTPhong($id)
        {
            $db=new connect();
            $select="SELECT a.idphong,a.hinhphong,a.tenphong,a.giaphong, a.idno, a.idct,a.giuong,a.songuoi, c.tenct FROM ctphong a, noio b, ttinphong c 
            WHERE a.idno=b.idno and a.idct=c.idct and a.idno=$id;";
            $result=$db->List($select);
            return $result; //Lấy được dữ liệu về
        }
        //Phương thức lấy phòng từ chi tiết phòng
        function getPhongCT($id)
        {
            $db=new connect();
            $select="SELECT a.idphong,a.hinhphong,a.tenphong,a.giaphong,a.giuong,a.songuoi,b.tenno, c.tenct FROM ctphong a, noio b, ttinphong c 
            WHERE a.idno=b.idno and a.idct=c.idct and a.idphong=$id;";
            $result=$db->Instant($select);
            return $result; //Lấy được dữ liệu về
        }
}
?>