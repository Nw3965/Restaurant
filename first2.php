<!DOCTYPE html>
<html>
<head>
<body>
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
<form>
<?php
$st = htmlspecialchars($_GET['st']);
$main = htmlspecialchars($_GET['main']);
  echo "Your Starter will be{$st}<br>";
 echo "Your Main Courses will be{$main}<br>";

?>
</form>
</body>
</html>
