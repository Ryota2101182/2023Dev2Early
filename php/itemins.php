<?php
session_start();
if(!empty($_FILES['upload_image']['name'])==true){
    if(isset($_SESSION['img'])){
        unlink($_SESSION['img']);
    }
    $filename = $_FILES['upload_image']['name'];
    $uploaded_path = 'img/'.$filename;
    $result = move_uploaded_file($_FILES['upload_image']['tmp_name'],$uploaded_path);
    $_SESSION['img'] = $uploaded_path;
}
$_SESSION['flag'] = '1';
header('Location: brand.php');
?>