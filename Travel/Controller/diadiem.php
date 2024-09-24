<?php
$DL='diadiem';
if(isset($_GET['DL']))
{
    $DL=$_GET['DL'];
}
switch($DL)
{
    case 'diadiemolai':
        include_once "./View/diadiem.php";
    break;
    case 'chitietphong':
        include_once "./View/chitietphong.php";
    break;
}
?>