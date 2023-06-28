<?php
session_start();
$pdo = new PDO('mysql:host=localhost;dbname=teamadb;charset=utf8','webuser','abccsd2');
$sql = "INSERT INTO post(user_id, post_contents, post_image) VALUES(?,?,?)";
$ps = $pdo->prepare($sql);
$ps->bindValue(1,$_SESSION['userid'],PDO::PARAM_INT);
$ps->bindValue(2,nl2br($_SESSION['txt']),PDO::PARAM_STR);
$ps->bindValue(3,$_SESSION['img'],PDO::PARAM_STR);
$ps->execute();

$searchpost = "SELECT * FROM post ORDER BY post_id DESC LIMIT 0,1";
$ps = $pdo->prepare($searchpost);
$ps->execute();
foreach($ps->fetchAll() as $row){
    $postid = $row['post_id'];
}
for($i = 0; $i < count($_SESSION['item']); $i++){
    $itemins = "INSERT INTO postitem(post_id, item_id) VALUES(?,?)";
    $ps = $pdo->prepare($itemins);
    $ps->bindValue(1,$postid,PDO::PARAM_INT);
    $ps->bindValue(2,$_SESSION['item'][$i],PDO::PARAM_INT);
    $ps->execute();
}
unset($_SESSION['item']);
unset($_SESSION['txt']);
unset($_SESSION['img']);
header('Location: toukou3.php');

?>