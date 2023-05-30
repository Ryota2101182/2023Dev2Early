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
</style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
</head>

<body>
<?php require 'header.php'?>
<h1><div class = "text-center" >COMMUNITY</div></h1>
<div class="text-center">
<img src="img/test/akiedajacket.jpg" alt="" width="300" height="400"></img>
<p style="font-size: 20px;">着用アイテム</p>
<div class="row">
    <div class="col-4 col-sm-4">
        <img src="img/test/ikedacap.jpg" width="250" height="350">
        <h6>6-PANEL CAP</h6>
        <p>￥7,480</p>
    </div>
    <div class="col-4 col-sm-4">
        <img src="img/test/akiedajacket.jpg" width="250" height="350">
        <h6>BOX SHIRT LS [RECYCLED NYLON]</h6>
        <p>￥44,000</p>
    </div>
    <div class="col-4 col-sm-4">
        <img src="img/test/nakamurapants.jpg" width="250" height="350">
        <h6>Denim straight pants</h6>
        <p>￥19,800</p>
    </div>
</div>
<p style="font-size: 20px;">
    投稿内容テスト<br>
    cap:○○<br>
    tops:○○<br>
    bottoms:○○<br>
    春に向けてのコーデを組みました！<br>
</p>
<a href="fashion_post.php" class="btn btn-link btn-lg">←修正する</a>
<form action="fashion_post3.php" method="post">
<input type="submit" class="btn btn-link btn-lg" value="投稿する→" name="post">
</form>
</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">