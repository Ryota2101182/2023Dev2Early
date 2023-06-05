<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>webstore</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>
</style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
</head>

<body>
<?php require 'header.php'?>
<?php
$pdo = new PDO('mysql:host=localhost;dbname=teamadb;charset=utf8','webuser','abccsd2');
$sql = "SELECT * FROM blog WHERE item_id=?";
$ps = $pdo->prepare($sql);
$ps->bindValue(1,$_POST['itemid'],PDO::PARAM_INT);
$ps->execute();
foreach($ps->fetchAll() as $row){
?>
<div class="col-12 text-center">
    <br>
	<h2><?php echo $row['blog_title']?></h2>
	</div>
    <div class="col-12 text-center">
		<br>
		<p><?php echo $row['blog_date']?></p>
	</div>
    <div class="col-12 text-center">
        <img src=<?php echo $row['blog_image']?> alt="" width="500" height="600"></img>
    </div>
    <div class="row">
        <div class="col-lg-3 col-sm-6">
        </div>
        <div class="col-lg-6 col-sm-6 text-center">
            <p><?php echo $row['blog_contents']?></p>

        </div>
        <div class="col-lg-3 col-sm-6">
        </div>
    </div>
    <div class="row">
        <div class="col-12 text-center">
        <form action="item.php" method="post">
        <input type="hidden" name="itemid" value=<?php echo $row['item_id']?>>
        <button type="submit" class="btn btn-link">商品ページへ</button>
        </form>
        </div>
    </div>
<?php } ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</body>
</html>
