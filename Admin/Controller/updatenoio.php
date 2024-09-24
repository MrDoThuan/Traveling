<?php
$act="update";
if(isset($_GET['act']))
{
    $act=$_GET['act'];
}
switch($act)
{
    case "insert_noio":
        include_once './View/updatenoio.php';
    break;

    case "insert_action":
        //Nhận thông tin
        if(isset($_SERVER["REQUEST_METHOD"])=="POST")
        {
            $iddl=$_POST["iddl"];
            $tenno=$_POST["tenno"];
            $hinhno=$_FILES["image"]["name"];
            $mota=$_POST["mota"];
            //Đem dữ liệu này lưu vào database
            $no=new place();
            uploadImageNoio();
            $check=$no->insertNO($iddl,$tenno,$hinhno,$mota);
            if($check!==false)
            {
                echo '<script>alert("Đã thêm Nơi ở mới");</script>';
                echo '<meta http-equiv=refresh content="0;url=./index.php?action=dsachnoio" />';
            }
            else
            {
                echo '<script>alert("Lỗi! Hãy kiểm tra lại");</script>';
                include_once './View/updatenoio.php';
            }
        }
    break;
    case 'delete_noio':
        $idno=$_GET["id"];
        $dl= new delete();
        $delete=$dl->deleteNoio($idno);
        if($delete !== false)
        {
            echo '<script>alert("Đã xóa Nơi ở!");</script>';
            echo '<meta http-equiv=refresh content="0;url=./index.php?action=dsachnoio" />';
        }
        else
        {
            echo '<script>alert("Lỗi! Hãy kiểm tra lại");</script>';
            include_once './View/updatenoio.php';            
        }
        break;
    case 'update_noio':
        include_once './View/updatenoio.php';
    break;
}
?>