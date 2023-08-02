<?php 

$a=5;
echo "MCA";  
$a;
echo "<br>$a";
echo "<body bgcolor='cyan'>piyush</body>";
echo "<br><br>hi".$a."bye<br><br>";




var_dump($a);

echo "<br><br>Length is ";
echo strlen("Hello world!");

echo "<br><br>word count is ";
echo str_word_count("Hello world!");

echo "<br><br>Reverse string is ";
echo strrev("Hello world!");

echo "<br><br>String position is ";
echo strpos("Hello world!", "world");

echo "<br><br>Replacing String  ";
echo str_replace("world", "Dolly", "Hello world!");

echo "<br><br>";
$x = 1234;
var_dump(is_int($x));    //true
echo "<br>";

$x = 12.12;
var_dump(is_int($x));       //false
echo "<br>";

$x = 10.365;
var_dump(is_float($x));        //true
echo "<br>";





$x = 5985;
var_dump(is_numeric($x));
echo "<br>";

$x = "5985";
var_dump(is_numeric($x));
echo "<br>";

$x = "59.85" + 100;
var_dump(is_numeric($x));
echo "<br>";

$x = "Hello";
var_dump(is_numeric($x));
echo "<br>";

$x = 23465.768;
$b = (int)$x;
echo $b;
echo "<br>";

$x = "23465a";
$b = (int)$x;
echo $b;
echo "<br>";

echo pi();		echo "<br>";
echo min(0, 150, 30, 20, -8, -200);		echo "<br>"; 
echo max(0, 150, 30, 20, -8, -200);		echo "<br>";
echo abs(-6.7);							echo "<br>";
echo sqrt(64);							echo "<br>";
echo round(0.60);  						echo "<br>";
echo round(0.49); 						echo "<br>";
echo rand();							echo "<br>";
echo rand(10, 100);						echo "<br>";

define("PV", "Piyush Vashistha");
echo PV;
$x=500;								echo "<br>-----------------<br>";

define("course", ["MCA","BTech","BCA"]);
echo course[0];							echo "<br>-----------------<br>";
//Constants are automatically global and can be used across the entire script.
function fun1() 
{
$z=500;
define("x", "Hello");
}
fun1();
echo x;
echo "z=".$z."<br><br><br>";

$c=5**3;
echo $c;       echo "<br><br>";
$d=125;
$e="125";
echo var_dump($d==$e);      echo "<br>";   //check only value
echo var_dump($d===$e); 	echo "<br>";   //check both value and type

echo var_dump($d!=$e);		echo "<br>";   //check only value
echo var_dump($d!==$e);		echo "<br>";   //check either value or type

$t=100;
if ($t < 20) 
{
  echo "Have a good day!<br>";
}
else
{
	echo "Executed else block";
}

$x = 1;
while($x <= 5) 
  {echo "The number is: $x <br>";
  $x++;
}
echo "<hr><hr>";
$arr=array("red", "green", "blue", "yellow");

$arr[4]="cyan";
echo $arr[4];

echo "<hr><hr>";
foreach($arr as $i) 
{
  echo "$i <br>";
}
echo "ARRAY LENGTH IS ".count($arr);    echo "<br><br>";

//for (int i : arr)  
//            System.out.print(i + " ");


// for i in arr:
//      print(i)

function addNumbers(int $a, int $b) {
  return $a + $b;
}
echo addNumbers(5, 10);

function setHeight(int $minheight = 50) {
  echo "The height is : $minheight <br>";
}

setHeight(350);
setHeight(); // will use the default value of 50
setHeight(135);
setHeight(80);

function addNum(float $a, float $b) : int {
  return (int)($a + $b);
}
echo addNum(1.2, 5.2);


function add_five(&$value) {
  $value += 5;
}

$num = 2;
add_five($num);
echo $num;


$arr = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($arr as $x => $x_value) 
{
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}

$cars = array (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
);

echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";
?>


















