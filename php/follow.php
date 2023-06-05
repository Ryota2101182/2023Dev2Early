<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>webstore</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>
.link a {
    color: #666666;
    text-decoration: none;
  }

p{
    font-size: 30px;
}
/* button */
*,
*:before,
*:after {
  -webkit-box-sizing: inherit;
  box-sizing: inherit;
}


.btn,
a.btn,
button.btn {
  font-size: 1.6rem;
  font-weight: 700;
  line-height: 1.5;
  position: relative;
  display: inline-block;
  padding: 1rem 4rem;
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
  text-align: center;
  vertical-align: middle;
  text-decoration: none;
  letter-spacing: 0.1em;
  color: #212529;
  border-radius: 0.5rem;
}

a.btn-svg {
  font-weight: 700;
  line-height: 54px;

  width: 204px;
  height: 54px;
  padding: 0;

  cursor: pointer;
  text-decoration: none;

  background-color: transparent;
}

a.btn-svg svg {
  position: absolute;
  top: 0;
  left: 0;

  width: 100%;
  height: 100%;
}

a.btn-svg svg rect {
  -webkit-transition: all 400ms ease;
  transition: all 400ms ease;

  stroke: #000;
  stroke-width: 2;
  stroke-dasharray: 200px, 16px;
  stroke-dashoffset: 70px;
}

a.btn-svg:hover svg rect {
  stroke-dashoffset: 284px;
}

a.btn-svg span {
  color: #000;
}
</style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
<link rel="stylesheet" href="css/">
</head>

<body>
<?php require_once 'header.php';
$username = "username";
?>
<p style="text-align: center; margin-bottom: 50px;"><?php echo $username; ?></p>

<p id="follow-count" style="text-align: center; margin-bottom: 40px;">フォロー：0</p>

  <p style="text-align: center; margin-bottom: 30px;">
    <span class="link" style="text-decoration: underline;"><a href="user.php"><?php echo $username; ?></a></span>
    <a href="" class="btn btn-svg">
  <svg>
    <rect x="2" y="2" rx="0" fill="none" width=200 height="50"></rect>
  </svg>
  <span>フォロー</span>
</a>
  </p>
</form>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</body>
</html>