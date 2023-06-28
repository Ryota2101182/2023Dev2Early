<?php
session_start();
if(!isset($_SESSION['item'][0])==true && !isset($_SESSION['img'])==true && empty($_POST['txt'])==true){
?>
    <script type='text/javascript'>
        alert('画像をアップロードしてください\n商品は必ず一つ以上選択してください');
        location.href = 'toukou.php'
    </script> 
<?php }else{
        $_SESSION['txt'] = $_POST['txt'];
        header('Location: toukou2.php');
        exit();
}
if(!isset($_SESSION['img'])==true){
?>
    <script type='text/javascript'>
        alert('画像をアップロードしてください');
        location.href = 'toukou.php'
        exit();
    </script> 
<?php }else{
    $_SESSION['txt'] = $_POST['txt'];
    header('Location: toukou2.php');
}
if(!isset($_SESSION['item'][0])==true){
?>
    <script type='text/javascript'>
        alert('商品は必ず一つ以上選択してください');
        location.href = 'toukou.php'
    </script> 
<?php }else{
        $_SESSION['txt'] = $_POST['txt'];
        header('Location: toukou2.php');
        exit();
    }
?>