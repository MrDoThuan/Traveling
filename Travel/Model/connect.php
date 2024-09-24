<?php
class connect{
    //Thuộc tính
    var $db= null;
    //hàm tạo được gọi khi new 1 đối tượng 
    function __construct()
    {
        $dsn='mysql:host=localhost;dbname=traveling';
        $user='root';
        $pass='';
    //kết nối dữ liệu vào class PDO
    try{
    $this-> db=new PDO($dsn,$user,$pass, array(PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES utf8'));
    //  echo 'Kết nối thành công';
    } catch (\Throwable $th){
        //Trow $th
        echo 'Thất bại';
        echo $th;
    }
    }
            //Phuong thức truy vấn trả ra NHIỀU row
            function List($select)
            {
                $result=$this->db->query($select); //this->db->query(select * form hanghoa);
                return $result; //trả về 1 table
            }
            // Phương thức trả về 1 row
            function Instant($select) {
                $results=$this->db->query($select); //$this->db->query(select * from hanghoa)
                $result=$results->fetch(); // $result là array chỉ chứa 1 dòng, [mahh: 1,tênhh: giày....]
                return $result;
            }
            //Câu lệnh insert, update, delete ai làm? EXEC làm
            function exec($query)
            {
            $result=$this->db->exec($query);
            return $result;
            }
}
?>