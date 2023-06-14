<?php
session_start();
$data = $_GET['data'];
unset($_SESSION['item'][$data[0]]);
$_SESSION['item'] = array_values($_SESSION['item']);
header('Location: toukou.php');
?>