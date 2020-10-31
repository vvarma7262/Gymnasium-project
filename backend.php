
<?php
session_start();
$name = filter_input(INPUT_POST,'name');
$pwd = filter_input(INPUT_POST,'password');
$phonenumber = filter_input(INPUT_POST,'weight');


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

$sql = "INSERT INTO newtable 
VALUES ('$name','$pwd','$phonenumber')";

if ($conn->query($sql) === TRUE) {
    $_SESSION['login_user']=$name;
    header('location: /site/valid1.html');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>
