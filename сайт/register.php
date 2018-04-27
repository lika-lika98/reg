<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
	if (empty($_POST['username']) || empty($_POST['password'])) {
		$error = "Username or Password is invalid";
	} else {
		// Define $username and $password
		$username=$_POST['username'];
		$password=$_POST['password'];
		// Establishing Connection with Server by passing server_name, user_id and password as a parameter
		$connection = mysqli_connect("localhost", "root", "");
		// To protect MySQL injection for Security purpose
		$username = stripslashes($username);
		$password = stripslashes($password);
		$username = mysqli_real_escape_string($connection, $username);
		$password = mysqli_real_escape_string($connection, $password);
		// Selecting Database
		$db = mysqli_select_db($connection, "test");
		// SQL query to fetch information of registerd users and finds user match.
		$query = mysqli_query($connection, "call up_create ('$password','$username')");
		if ($query === true) {
			header("location: index.php"); // Redirecting To Other Page
		} else {
			$error = "query if not true";
		}
		mysqli_close($connection); // Closing Connection
	}
}
echo $error;
?>