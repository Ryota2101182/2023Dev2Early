<?php
session_start();
if(!isset($_SESSION['userid'])){
    header('Location: login.php');
}else{
    unset($_SESSION['item']);
    unset($_SESSION['txt']);
    unset($_SESSION['img']);
    header('Location: toukou.php');
}
?>