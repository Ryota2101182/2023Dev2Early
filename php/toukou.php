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
label {
    margin-top: 5px;
    padding: 5px 40px;
    border: 1px solid #000;
    cursor: pointer;
}
input[type="file"] {
    display: none;
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
.btn-link{
    color: #666666;
}

</style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
<link rel="stylesheet" href="css/">
</head>

<body>
<?php require_once 'header.php'?>
<?php session_start(); ?>
    <h1><div class = "text-center" >COMMUNITY</div></h1>
        <div class="text-center">
            <div id='boxImage'>
                <div class="box">
                    <p>画像アップロード+</p>
                </div>
            </div>
            <section class="form-container">
                <form action="?" method="post" enctype="multipart/form-data">
                    <label>
                        <input type="file" name="upload_image" id="selectImage">ファイルの選択
                    </label>
            </section>
            </main>
            <script>
            <?php if(isset($_SESSION['img'])){ ?>
                document.getElementById('boxImage').innerHTML = '<img src="<?php echo $_SESSION['img'] ?> " alt="" style="min-width:600px;min-height:450px;max-width:600px;max-height:450px;border:1px solid #666;">';
            <?php } ?>
                var elm = document.getElementById("selectImage");
                elm.onchange = function(evt){
                    var selectFiles = evt.target.files;
                    if(selectFiles.length != 0) {
                        var fr = new FileReader();
                        fr.readAsDataURL(selectFiles[0]);
                        fr.onload = function(evt) {
                            document.getElementById('boxImage').innerHTML = '<img src="' + fr.result + '" alt="" style="min-width:600px;min-height:450px;max-width:600px;max-height:450px;border:1px solid #666;">';
                        }
                    }
                }
            </script>
        </div>
        <div class="text-center">
            <p style="font-size: 20px;"><br>当ショッピングサイトでの着用アイテムがある場合は選択してください</p>
            <div style="margin-bottom:0px;">
            <input type="submit" class="btn btn-link" value="選択" name="post" formaction="itemins.php">
        </div>
        <div class="row" style="margin-bottom: 36px;">
        <?php
        $pdo = new PDO('mysql:host=localhost;dbname=teamadb;charset=utf8','webuser','abccsd2');
        $count = 0;
        if(!empty($_SESSION['item'])==true){
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
                <p><?php echo "￥".number_format($row['item_money']);?></p>
                <a href="itemdelete.php?data%5B%5D=<?php echo $count ?>">削除</a>
            </div>
        <?php }
                $count = $count + 1;
            }
        }else{ ?>
            <p style="font-size: 19px; text-align: center;"><br>商品を選択してください</p>
        <?php } ?>
        </div>
        <div class="text-center">
            <p style="font-size: 20px;">着用アイテムの詳細やこだわりを共有しよう！<br>
                例) tops:○○<br>
                    bottoms:○○<br>
                    春に向けてのコーデを組みました！
            </p>
            <?php
            if(empty($_SESSION['txt'])){ ?>
                <textarea cols="100" rows="10" name="txt"></textarea><br><br>
            <?php }else{ ?>
                <textarea cols="100" rows="10" name="txt"><?php echo $_SESSION['txt'];?></textarea><br><br>
            <?php } ?>
                <input type="submit" class="btn-submit" value="投稿内容を確認する→" name="post" formaction="txtins.php">
            </form>
        </div>
        <section>
            <div class="link" style="margin-left: -1000px; margin-bottom: 100px;">
                <a href="communityhome.php"><h4>⇦back</h4></a>
            </div>
        </section>
</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
