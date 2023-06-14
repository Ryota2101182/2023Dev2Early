<!DOCTYPE html>
<html>
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>webstore</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>
.example{
    padding: 10px;
    border: 1px solid #333;
    background: #f2f2f2;
}
.btn-submit{
    color: #666666;
    text-decoration: none;
}
.link a {
    color: #666666;
    text-decoration: none;
  }

</style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
</head>
<body>
<?php require 'header.php'?>
    <div class = "text-center" style="margin-bottom:60px;"><p style="font-size:50px;">COMMUNITY</p></div>
        <div class="text-center">
            <div style="margin-bottom: 40px;">
            <?php session_start();?>
                <img src="<?php echo $_SESSION['img'] ?>" alt="" width="650" height="500"></img>
            </div>
            <p style="font-size: 34px;">着用アイテム</p>
            <div class="row">
            <?php
            $pdo = new PDO('mysql:host=localhost;dbname=teamadb;charset=utf8','webuser','abccsd2');
            $count = 0;
            for($i = 0; $i < count($_SESSION['item']); $i++){
                $sql = "SELECT * FROM items WHERE item_id=?";
                $ps = $pdo->prepare($sql);
                $ps->bindValue(1,$_SESSION['item'][$i],PDO::PARAM_STR);
                $ps->execute();
                foreach($ps->fetchAll() as $row){
            ?>
            <div class="col-4 col-sm-4">
                <img src="<?php echo $row['item_image'] ?>" width="250" height="350">
                <h6><?php echo $row['item_name'] ?></h6>
                <p><?php echo "￥".number_format($row['item_money']);?><br><br></p>
            </div>
        <?php }} ?>
                <div class="link" style="margin-bottom:100px">
                    <textarea readonly cols="100" rows="10"><?php echo $_SESSION['txt'];?></textarea><br><br>
                    <a href="toukou.php">←修正する</a>　　　　　　　　　　　　　　　　　　　　
                    <a href="toukouins.php">投稿完了する→</a>
                    </form>
                </div>
        </div>
</form>
</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">