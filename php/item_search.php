<?php
session_start();
$itemid = $_POST['itemid'];
if(!empty($_SESSION['flag'])==true){
    if(!isset($_SESSION['item'])==true){
        $_SESSION['item'][0] = $itemid;
    }else{
        array_push($_SESSION['item'], $itemid);
    }    
    unset($_SESSION['flag']);
    header('Location: toukou.php');
}else{
    $_SESSION['itemid'] = $_POST['itemid'];
    header('Location: item.php');
}
?>