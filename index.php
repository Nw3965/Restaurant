<?php
  session_start();
  $page = @$_GET['p'];
  if (!$page) $page = 'top';
  if (!preg_match('/^[a-z]{1,8}$/', $page)) exit();
  if (!isset($_SESSION['name'])) {
    $page = 'login';
    if (isset($_POST['id'])) {
      if ($_POST['id'] == 'yamada' && $_POST['pw'] == 'yamada') {
        $_SESSION['name'] = 'Hello Yamada san';
        $page = 'top';
      }
    }
  }
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Restaurant Reservation System</title>
<style>
h1 {
  margin: 0;
}
#header, #footer {
  background-color: #fed;
  height: 60px;
  padding: 10px;
}
#main {
  background-color: #eee;
  padding: 10px;
}
</style>
</head>
<body>

<div id="header">
<center>
<img src="342342.png" />
</center>
</div>
<div id="main">
<?php
  require "$page.php";
?>
</div>
<div id="footer">
  <a href="?p=top">Top page</a> |
  <a href="?p=first">Menu</a> |
  <a href="?p=logout">Logout</a>
</div>
</body>
</html>