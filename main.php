
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

<div id="main">
<?php

$st = htmlspecialchars($_POST['st']);
$main = htmlspecialchars($_POST['main']);
  echo "Your Starter will be{$st}<br>";
 echo "Your Main Courses will be{$main}<br>";

?>
</div>
<div id="footer">
  <a href="index.php">Go back</a>
</div>
</body>
</html>