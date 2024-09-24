<?php
$act="update";
if(isset($_GET['act']))
{
    $act=$_GET['act'];
}
switch($act)
{
    case "insert_choo":
        include_once './View/updatechoo.php';
    break;

    case "insert_action":
        //Nhận thông tin
        if(isset($_SERVER["REQUEST_METHOD"])=="POST")
        {
            $tenphong=$_POST['tenphong'];
            $hinhphong=$_FILES["image"]["name"];
            $giaphong=$_POST['giaphong'];
            $songuoi=$_POST['songuoi'];
            $giuong=$_POST['giuong'];
            $idno=$_POST['idno'];
            $idct=$_POST['idct'];
        //Đem dữ liệu lưu vào database
        $co=new place();
        uploadImageChoo();
        $check=$co->insertCO($tenphong,$hinhphong,$giaphong,$songuoi,$giuong,$idno,$idct);
        if($check!==false)
        {
            echo '<script>alert("Đã thêm Chổ ở mới");</script>';
            echo '<meta http-equiv=refresh content="0;url=./index.php?action=dsachchoo" />';
        }
        else
        {
            echo '<script>alert("Lỗi! Hãy kiểm tra lại");</script>';
            include_once './View/updatechoo.php';
        }
        }
        break;

        case 'delete_choo':
            $idphong=$_GET["id"];
            $dl= new delete();
            $delete=$dl->deleteChoo($idphong);
            if($delete !== false)
            {
                echo '<script>alert("Đã xóa Nơi ở!");</script>';
                echo '<meta http-equiv=refresh content="0;url=./index.php?action=dsachchoo" />';
            }
            else
            {
                echo '<script>alert("Lỗi! Hãy kiểm tra lại");</script>';
                include_once './View/updatechoo.php';
            }            
        break;
        case 'update_choo':
            include_once './View/updatechoo.php';
        break;
}
?>