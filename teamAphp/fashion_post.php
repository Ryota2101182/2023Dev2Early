<!DOCTYPE html>
<html>
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>webstore</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>
.box{
    margin-top: 50px;
    margin-bottom: 50px;
    margin-left: auto;
    margin-right: auto;
    width: 30em;
    height: 400px;
    border: solid 1px;
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
    <div class="box">
        <p>画像アップロード+</p>
    </div>
<p style="font-size: 20px;">当ショッピングサイトでの着用アイテムがある場合は選択してください</p>
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
<div class="text-center">
    <button>選択</button>
    <p style="font-size: 20px;">着用アイテムの詳細やこだわりを共有しよう！<br>
        例) tops:○○<br>
            bottoms:○○<br>
            春に向けてのコーデを組みました！
    </p>
    <form action="fashion_post2.php" method="post">
        <textarea cols="100" rows="10"></textarea><br><br>
        <input type="submit" class="btn btn-link btn-lg" value="投稿内容を確認する→" name="post">
    </form>
</div>
</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">