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
		//$username = stripslashes($username);
		//$password = stripslashes($password);
		//$username = mysqli_real_escape_string($connection, $username);
		//$password = mysqli_real_escape_string($connection, $password);
		// Selecting Database
		$db = mysqli_select_db($connection, "test");
		// SQL query to fetch information of registerd users and finds user match.
		//"call up_login ('qwe', 'asd') UNION SELECT * FROM login -- test','$username')"
		//$query = mysqli_query($connection, "call up_login ('$password','$username')") or die(mysqli_error($connection));
		var_dump("SELECT * FROM login WHERE username='$username' AND password='$password'");
		$query = mysqli_query($connection, "SELECT * FROM login WHERE username='$username' AND password='$password'");
		$rows = mysqli_num_rows($query);
		if ($rows == 1) {
			$_SESSION['login_user']=$username; // Initializing Session
			header("location: profile.php"); // Redirecting To Other Page
		} else {
			$error = "Username or Password is invalid";
		}
		mysqli_close($connection); // Closing Connection
	}
}
?>
<div class="error">
	<?php echo $error;?>
</div>