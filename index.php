<?php
echo"yes you did it";
$username = filter_input(INPUT_POST,'username');
$password = filter_input(INPUT_POST,'password');
echo "<br>";

echo"no errors yay!";


if (!empty($username)){
    if (!empty($password)){
    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "test2";
    // Create connection
    $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
    if (mysqli_connect_error()){
    die('Connect Error ('. mysqli_connect_errno() .') '
    . mysqli_connect_error());
    }
    else{
    $sql = "INSERT INTO test3 (username, password)
    values ('$username','$password')";
    if ($conn->query($sql)){
    echo "New record is inserted sucessfully";
    }
    else{
    echo "Error: ". $sql ."
    ". $conn->error;
    }
    $conn->close();
    }
    }
    else{
    echo "Password should not be empty";
    die();
    }
    }
    else{
    echo "Username should not be empty";
    die();
    }


?>

