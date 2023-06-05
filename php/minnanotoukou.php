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

.content2 {
  max-width: 800px;
  margin: 100px auto;
}
/*
【タイトル】
画面幅を縮めた際に、要素が左にはみ出すのを防ぐために
「display: inline-block;」を指定。
タイトルを基準に疑似要素で横線位置を調整するため、
「position: relative;」を設定しておく。
*/
.title {
  display: inline-block;
  font-size: 1rem;
  font-weight: normal;
  margin-bottom: 30px;
  position: relative;
}
/*
【タイトル（横線）】
「width」「height」で長さと太さを設定。
「content」を指定することで線が表示される。
「position」「top」「left」で、タイトルを基準に
横線の位置を設定します。
*/
.title::before {
  content: "";
  width: 90px;
  height: 1px;
  background-color: #676767;
  position: absolute;
  top: 50%;
  left: -120px;
}
.text {
  max-width: 460px;
  font-size: 1rem;
  line-height: 1.8;
  margin-bottom: 50px;
}

/*-------------------------------------------
SP
-------------------------------------------*/
@media screen and (max-width: 1100px) {
  .content {
    padding: 0 20px;
  }
  .title {
    left: 120px;
  }
}

.link a {
    color: #666666;
    text-decoration: none;
  }

.follow {
    text-align: center;
    font-size: 24px;
    margin: 8px;
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
    	<div class="text-center" style="font-size: 50px;">
            community
        </div>
	</section>
    <section>
        <div class="content2 col-12">
		    <p class="title">2023 5.23</p>
		    <p class="text">
		        username
		    </p>
		<div class="text-center">
			<img src="img/BLOG/akiedablog.jpg" alt="" width="400" height="500">
		</div>
		<div class="text-left link">
			<a href="syousai.php"><p>read more</p></a>
		</div>
	  </div>
    </section>
    <section>
        <div class="text-center link">
		    <h3>　　<a href="minnanotoukou.php">1</a>　　<a href="minnanotoukou.php">2</a>　　<a href="minnanotoukou.php">3</a>　　</h3>
	    </div>
    </section>
    <section>
        <div class="link" style="margin-left: 200px; margin-bottom: 100px;">
            <a href="communityhome.php"><h4>⇦back</h4></a>
        </div>
    </section>
</form>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</body>
</html>