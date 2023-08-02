<?php
echo $_POST["name"];               echo "<br>";
echo $_POST["email"];
echo "<br>Use POST in PHP if we used method=post in HTML page,otherwise it gives Error";
echo "<br>Similary for GET<br><br><br>";


echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("l");         echo "<br><br><br>";
?>

<?php include "footer.php" ?>
<?php require "footer.php" ?>

<div class="menu">
<?php include 'menus.php';?>
</div>

<?php include 'variables.php';
echo "I have a $color $car.";
?>
<hr>
Difference between include and require
<hr>


<?php include 'noFileExists.php';
echo "I have a $color $car.";
echo "It will be definitely printed";
?>
<hr><hr>

<?php require 'noFileExists.php';
echo "I have a $color $car.";
echo "Checked it will not be printed";
?>

<?php 
echo "LAST";
?>
 


