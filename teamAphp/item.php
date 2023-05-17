<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>webstore</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>
.img{
  width: 300px;
  height: 300px;
}
</style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
<link rel="stylesheet" href="css/itemstyle.css">
</head>

<body>
<?php require_once 'header.php'?>
<?php
    $pdo = new PDO('mysql:host=localhost;dbname=teamadb;charset=utf8','webuser','abccsd2');
   
    $sql = "SELECT * FROM items WHERE item_id=?";
    $ps = $pdo->prepare($sql);
    $ps->bindValue(1,$_POST['itemid'],PDO::PARAM_INT);
    $ps->execute();
    foreach($ps->fetchAll() as $row){
      $itemid = $row['item_id'];
    }
?>
<div id="item" class="wrapper">
    <div class="item-image">
    <?php echo "<img src=$row[item_image]>"?>
    </div>

    <div class="item-info">
      <h1 class="item-title"><?php echo $row['item_name'];?></h1>
      <p>
        <?php echo $row['item_overview'];?>
      </p>

      <p>
        <?php echo "￥".number_format($row['item_money']);?>
      </p>
      <?php
        $inventorycheck1 = "SELECT * FROM inventories WHERE item_id=? AND inventory_itemsize=?";
        $ps = $pdo->prepare($inventorycheck1);
        $ps->bindValue(1,$itemid,PDO::PARAM_INT);
        $ps->bindValue(2,'S',PDO::PARAM_STR);
        $ps->execute();
        $S_inbentory = $ps->fetch();
        $inventorycheck2 = "SELECT * FROM inventories WHERE item_id=? AND inventory_itemsize=?";
        $ps = $pdo->prepare($inventorycheck2);
        $ps->bindValue(1,$itemid,PDO::PARAM_INT);
        $ps->bindValue(2,'M',PDO::PARAM_STR);
        $ps->execute();
        $M_inbentory = $ps->fetch();
      ?>
      <table class="order-table">
        <thead>
          <tr>
            <th class="color">size</th>
            <th class="size">quantity</th>
            <th class="quantity">cart</th>
          </tr>
        </thead>
        <tbody>
          <tr>
          <form action="cartins.php" method="post">
          <td>
            <input type="hidden" name="itemsize" value="S">S
          </td>
          <td>
          <?php
          switch($S_inbentory['inventory_sum']){
            case 3:?>
            <select name="quantity">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
            </select>
          <?php break;?>
          <?php
            case 2:?>
            <select name="quantity">
              <option value="1">1</option>
              <option value="2">2</option>
            </select>
          <?php break;?>
          <?php
            case 1:?>
            <select name="quantity">
              <option value="1">1</option>
            </select>
          <?php break;?>
          <?php
            default:?>
            <select name="quantity">
              <option value="-">-</option>
            </select>
          <?php } ?>
          </td>
          <td>
          <?php
          if($S_inbentory['inventory_sum'] == 0){
            echo "SOLD OUT";
          }else{
          ?>
          <input type="hidden" name="itemid" value=<?php echo $itemid?>>
          <input class="btn btn-secondary" type="submit" value="ADD TO CART">
          </form>
          <?php } ?>
          </td>
          </tr>
          <tr>
          <form action="cartins.php" method="post">
          <td>
            <input type="hidden" name="itemsize" value="M">M
          </td>
          <td>
          <?php
          switch($M_inbentory['inventory_sum']){
            case 3:?>
            <select name="quantity">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
            </select>
          <?php break;?>
          <?php
            case 2:?>
            <select name="quantity">
              <option value="1">1</option>
              <option value="2">2</option>
            </select>
          <?php break;?>
          <?php
            case 1:?>
            <select name="quantity">
              <option value="1">1</option>
            </select>
          <?php break;?>
          <?php
            default:?>
            <select name="quantity">
              <option value="-">-</option>
            </select>
          <?php } ?>
          </td>
          <td>
          <?php
          if($M_inbentory['inventory_sum'] == 0){
            echo "SOLD OUT";
          }else{
          ?>
          <input type="hidden" name="itemid" value=<?php echo $itemid?>>
          <input class="btn btn-secondary" type="submit" value="ADD TO CART">
          </form>
          <?php } ?>
          </td>
          </tr>
        </tbody>
      </table>
      </form>
      <table class="size-table">
        <thead>
          <tr>
            <th class="size">Size</th>
            <th class="chest">Chest</th>
            <th class="weist">Weist</th>
            <th class="height">Height</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th>S</th>
            <td>136</td>
            <td>78</td>
            <td>57</td>
          </tr>
          <tr>
            <th>M</th>
            <td>144</td>
            <td>82</td>
            <td>59</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</body>
</html>