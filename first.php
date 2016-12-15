<?php echo $_SESSION['name'] ?>
<!DOCTYPE html>
<html>
<head>
<body>
<form action="main.php" method="post">
  choose
<h2>Starters</h2><br>
  <input type="radio" name="st" value="Croquettes"><img src="cro.jpg" width="50" height="50" />Croquettes
  <input type="radio" name="st" value="CALAMAR"><img src="cara.jpg" width="50" height="50"  /> CALAMARI 
  <input type="radio" name="st" value="MEATBALLS">  <img src="MEATBALLS.png" width="50" height="50"  />MEATBALLS
<br><br>
   <h2>Main Courses</h2><br>
  <input type="radio" name="main" value="Prima Pizza">Prima Pizza
  <input type="radio" name="main" value="Margherita">Margherita 
  <input type="radio" name="main" value="Lasagne ">Lasagne 

  <br><br><input type="submit">
</form>
</body>
</html>
