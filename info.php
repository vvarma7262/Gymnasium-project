<!DOCTYPE html>
<html>
    <head>
<style>
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 10%;
}

button:hover {
  opacity: 0.8;
}
body {
  margin: 0;
  padding: 20px;
  font-family: Arial;
  background-color: rgba(104, 73, 73, 0.164);
}</style>
<head>
<body>
<?php
session_start();
$name =  $_SESSION['login_user'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test2";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM newtable WHERE name='$name'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<h1>Name: " . $row["name"]. "<br><br>Password: " . $row["password"]."<br><br>Phone Number: " . $row["phonenumber"]. "</h1><br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>



</body>
</html>