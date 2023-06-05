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
<link rel="stylesheet" href="css/blogstyle.css">
</head>

<body>
<?php require_once 'header.php'?>
<div class="border col-12 text-center">
		<br>
		<h2>BLOG</h2>
</div>
<?php
$pdo = new PDO('mysql:host=localhost;dbname=teamadb;charset=utf8','webuser','abccsd2');
$sql = "SELECT * FROM blog ORDER BY blog_date DESC LIMIT 0,2";
$ps = $pdo->prepare($sql);
$ps->execute();
foreach($ps->fetchAll() as $row){
?>
	<div class="content col-12">
		<h2 class="title"><?php echo $row['blog_title']?></h2>
		<p class="text">
		  <?php echo $row['blog_headline']?>
		</p>
		<div class="text-center">
			<img src=<?php echo $row['blog_image']?> alt="" width="400" height="500">
		</div>
		<div class="text-left">
		<form action="blog.php" method="post">
		<input type="hidden" name="itemid" value=<?php echo $row['item_id']?>>
		<button type="submit" class="btn btn-link">read more</button>
		</form>
		</div>
	  </div>
<?php } ?>

	  <!---------ページネーション----------->
	  
	  <div class="text-center">
		  <p>　　1</a>　　<a href="bloghome2.php">2</a>　　<a href="bloghome3.php">3</a>　　</p>
	  </div>

	  
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</body>
</html>