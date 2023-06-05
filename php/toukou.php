<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>webstore</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>
.border {
    padding: 1rem 2rem;
    border: 1px solid #000;
	color: rgb(184, 184, 184);
    text-decoration: none;
}

img {
  max-width: 100%;
}
.link a {
    color: #666666;
    text-decoration: none;
}
.box{
    margin-top: 50px;
    margin-bottom: 50px;
    margin-left: auto;
    margin-right: auto;
    width: 30em;
    height: 400px;
    border: solid 1px;
}
.box p{
    margin-top:180px;
}
.btn-submit{
    color: #666666;
    text-decoration: none;
}
</style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
<link rel="stylesheet" href="css/">
</head>

<body>
<?php require_once 'header.php'?>
    <h1><div class = "text-center" >COMMUNITY</div></h1>
        <div class="text-center">
            <div class="box">
                <p>画像アップロード+</p>
            </div>
                <p style="font-size: 20px;">当ショッピングサイトでの着用アイテムがある場合は選択してください</p>
                <div style="margin-bottom:0px;">
                <button>選択</button>
                </div>
            <div class="row" style="margin-bottom: 36px;">
                <div class="col-4 col-sm-4">
                    <img src="img/AKIEDA/akiedabags.jpg" width="250" height="350">
                    <h6>AKIEDA BAG</h6>
                    <p>￥7,480</p>
                    <button>削除</button>
                </div>
                <div class="col-4 col-sm-4">
                    <img src="img/AKIEDA/akiedajacket.jpg" width="250" height="350">
                    <h6>AKIEDA jacket</h6>
                    <p>￥44,000</p>
                    <button>削除</button>
                </div>
                <div class="col-4 col-sm-4">
                    <img src="img/AKIEDA/akiedashoes.jpg" width="250" height="350">
                    <h6>AKIEDA ahoes</h6>
                    <p>￥19,800</p>
                    <button>削除</button>
                </div>
            </div>
            <div class="text-center">
                
                <p style="font-size: 20px;">着用アイテムの詳細やこだわりを共有しよう！<br>
                    例) tops:○○<br>
                        bottoms:○○<br>
                        春に向けてのコーデを組みました！
                </p>
                <form action="toukou2.php" method="post">
                    <textarea cols="100" rows="10"></textarea><br><br>
                    <input type="submit" class="btn-submit" value="投稿内容を確認する→" name="post">
                </form>
            </div>
            <section>
                <div class="link" style="margin-left: -1000px; margin-bottom: 100px;">
                    <a href="communityhome.php"><h4>⇦back</h4></a>
                </div>
            </section>
</form>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</body>
</html>