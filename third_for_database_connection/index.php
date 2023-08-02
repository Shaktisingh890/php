<?php
$conn = new mysqli("localhost", "root", "root");

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
<hr>
<?php

$conn = mysqli_connect("localhost", "root", "root");

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>
<hr>
<?php

$conn = mysqli_connect("localhost", "root", "root");

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>

<?php
$sql = "CREATE DATABASE myDB17";
if ($conn->query($sql) === TRUE) 
{
  echo "<br><br>Database created successfully<br>";
} 
else 
{
  echo "Error creating database: " . $conn->error;
}

$conn->close();

$conn = mysqli_connect("localhost", "root", "root","myDB17");
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully<br>";
$sql = "CREATE TABLE MyGuests (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50)
)";

if ($conn->query($sql) === TRUE) 
{
  echo "Table MyGuests created successfully<br>";
} 
else 
{
  echo "Error creating table: " . $conn->error;
}



$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com');";
$sql .= "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Mary', 'Moe', 'mary@example.com');";
$sql .= "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Julie', 'Dooley', 'julie@example.com')";

if ($conn->multi_query($sql) === TRUE) 
{
  echo "New records created successfully<br>";
} 
else 
{
  echo "Error: " . $sql . "<br>" . $conn->error;
}



echo "<br><h1>For select query,Remember when we are inserting multiple data, we have to close the connection and then reopen the connection.Otherwise it will result into an error</h1>";
echo "<br><br>";

$conn->close();
$conn = mysqli_connect("localhost", "root", "root","myDB17");

$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = $conn->query($sql);
if ($result->num_rows > 0) 
{
  while($row = $result->fetch_assoc()) 
  {
    echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
  }
} 
else 
{
  echo "0 results";
}


echo "<hr><hr>";
echo "<h1>Prepared Statement</h1>";
$conn = new mysqli("localhost","root","root", "myDB17");

// prepare and bind
$stmt = $conn->prepare("INSERT INTO MyGuests (firstname, lastname, email) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $firstname, $lastname, $email);

// set parameters and execute
$firstname = "pp";
$lastname = "vv";
$email = "abc@example.com";
$stmt->execute();

$firstname = "aa";
$lastname = "bb";
$email = "pqr@example.com";
$stmt->execute();

$firstname = "cc";
$lastname = "dd";
$email = "xyz@example.com";
$stmt->execute();

echo "New records created successfully";

$stmt->close();
$conn->close();

$conn = mysqli_connect("localhost", "root", "root","myDB17");

$sql = "SELECT id, firstname, lastname,email FROM MyGuests";
$result = $conn->query($sql);
if ($result->num_rows > 0) 
{
  while($row = $result->fetch_assoc()) 
  {
    echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>". $row["email"]. "<br>";
  }
} 
else 
{
  echo "0 results";
}

?>