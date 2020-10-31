<?php
session_start();
    $user=$_POST['name'];
    $pass=$_POST['password'];       
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test2";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);



		$user=$_POST['name'];
		$pass=$_POST['password'];
 
		$ret=mysqli_query( $conn, "SELECT name,password FROM newtable WHERE name='$user' AND password='$pass' ") or die("Could not execute query: " .mysqli_error($conn));
		$row = mysqli_fetch_assoc($ret);
		if(!$row) {
			//not found
			
            header('location: /site/invalid.html');
			
		}
		else {
			//found
			$_SESSION['login_user']=$user;			
			header('location: /site/valid.html');
			
		}

?>
