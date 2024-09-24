<?php
class phieuttin{
    //Thêm thông tin 1 chỗ ở vào phiếu thông tin
    function addPhieuttin($idkh, $idphong, $tiencoc, $tienttoan, $ngayTao,$tenkhach)
    {
        $db=new connect();
        $query="INSERT INTO `phieuthongtin` (`id`, `idkh`, `idphong`, `tiencoc`, `tienttoan`, `ngayTao`,`tenkhach`) VALUES (NULL, '$idkh', '$idphong', '$tiencoc', '$tienttoan', '$ngayTao','$tenkhach');";
        $result=$db->exec($query);
        return $result;
    }
}
?>