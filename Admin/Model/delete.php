<?php
class delete{
        // Phương thức xóa nơi ở
        function deleteNoio($idno)
        {
            $db=new connect();
            $query="DELETE FROM noio WHERE idno=$idno";
            $result=$db->exec($query);
            return $result;
        }
        //Phương thức xóa chỗ ở
        function deleteChoo($idphong)
        {
            $db=new connect();
            $query="DELETE FROM ctphong WHERE idno=$idphong";
            $result=$db->exec($query);
            return $result;           
        }
}
?>