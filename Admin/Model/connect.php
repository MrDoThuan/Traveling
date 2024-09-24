<?php
class connect{
    var $db=null;
    public function __construct()
    {
        $dsn='mysql:host=localhost;dbname=traveling';
        $user='root';
        $pass='';
        $this->db=new PDO($dsn,$user,$pass,array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
    }
                //Phuong thức truy vấn trả ra NHIỀU row
                public function List($select)
                {
                    $result=$this->db->query($select); //this->db->query(select * form hanghoa);
                    return $result; //trả về 1 table
                }
                // Phương thức trả về 1 row
                public function Instant($select) {
                    $results=$this->db->query($select); //$this->db->query(select * from hanghoa)
                    $result=$results->fetch(); // $result là array chỉ chứa 1 dòng, [mahh: 1,tênhh: giày....]
                    return $result;
                }
                //Câu lệnh insert, update, delete ai làm? EXEC làm
                public function exec($query)
                {
                $result=$this->db->exec($query);
                return $result;
                }
}
?>