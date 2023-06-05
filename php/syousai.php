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
.center-text {
      text-align: center;
      display: flex;
      flex-direction: column;
      align-items: center;
    }
    .caption {
      display: flex;
      justify-content: space-between;
      width: 48%;
      font-weight: bold;
    }
    .image {
      width: 700px;
      height: auto;
    }
    .shape {
      width: 700px; 
      height: 300px; 
      border: 2px solid black; 
      margin-top: 20px; 
      padding: 40px;
    }
    .shape2 {
      width: 1000px; 
      height: 100px; 
      border: 1px solid black; 
      margin-top: 20px; 
    }
    
</style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
<link rel="stylesheet" href="css/">
</head>

<body>
<?php require_once 'header.php'?>
    <section>
        <div class="center-text">
            <p style="font-size:50px;">username</p>
                <div class="caption" style="margin-top:20px;">
                    <span><p style="font-size:20px; opacity:0.5">5-30</p></span>
                </div>
                    <img class="image" src="img/COMMUNITY/sample2.jpg" alt="画像の説明">
                <div class="shape">
                  <p>
                    春に向けてのシャツコーデ<br><br>
                    tops:akieda<br>
                    bottoms:ikeda<br>
                    shoes:nomura<br><br>
                    今回は春に向けてのシャツコーデを組んでみました！！
                  </p>
                </div> 
                <div class="row" style="margin-bottom: 24px; margin-top: 24px;">
                <h3>着用アイテム</h3>
                <div class="col-4 col-sm-4">
                    <img src="img/AKIEDA/akiedabags.jpg" width="250" height="350">
                    <h6>AKIEDA BAG</h6>
                    <p>￥7,480</p>
                    <button>商品を見る</button>
                </div>
            <div class="col-4 col-sm-4">
                <img src="img/AKIEDA/akiedajacket.jpg" width="250" height="350">
                <h6>AKIEDA jacket</h6>
                <p>￥44,000</p>
                <button>商品を見る</button>
            </div>
            <div class="col-4 col-sm-4">
                <img src="img/AKIEDA/akiedashoes.jpg" width="250" height="350">
                <h6>AKIEDA ahoes</h6>
                <p>￥19,800</p>
                <button>商品を見る</button>
            </div>
        </div>
    </section>
    <section>
        <div class="center-text" style="margin-top:24px;">
            <p style="font-size:36px;">COMMENT</p>
        </div>
        <div class="center-text" style="margin-top:24px;"> 
            <div class=""><h6>秋枝</h6></div>
          <div class="shape2" style="padding:30px;">
            <h6>topsかっこいい！！</h6>
            <div style="margin-left:-930px; padding:10px;"><p style="opacity:0.5">２日前</p></div>
          </div>
        </div>
        <div class="center-text" style="margin-top:24px;"> 
            <div class=""><h6>タマ</h6></div>
          <div class="shape2" style="padding:30px;">
            <h6>色鮮やかで素敵ですね</h6>
            <div style="margin-left:-930px; padding:10px;"><p style="opacity:0.5">３日前</p></div>
          </div>
        </div>
        <div class="center-text" style="margin-top:24px;"> 
            <div class=""><h6>上野</h6></div>
          <div class="shape2" style="padding:30px;">
            <h6>アクセサリーはどこのですか？</h6>
            <div style="margin-left:-930px; padding:10px;"><p style="opacity:0.5">４日前</p></div>
          </div>
        </div>
        <div class="center-text" style="margin-top:36px;">
          <form action="" method="post">
            <textarea cols="95" rows="1"></textarea>
            <input type="submit" class="btn-submit" value="送信" name="post">
          </form>
        </div>
    </section>
    <section>
        <div class="link" style="margin-left: 200px; margin-bottom: 100px; margin-top:50px;">
            <a href="communityhome.php"><h4>⇦back</h4></a>
        </div>
    </section>
</form>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</body>
</html>