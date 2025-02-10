<?php 
session_start();
require 'config.php';
$conn = connection();

// Store the posted username in session variables
$_SESSION["username"] = $_POST['username'];
$password = $_POST['password']; // Store the posted password in a local variable

// Prepare and execute the query to check if the user exists in the database
$sql = "SELECT * FROM users WHERE username = :username";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':username', $_SESSION['username']);
$stmt->execute();

// If no matching user is found, show an alert and redirect to index.html
if ($stmt->rowCount() == 0) {
	echo "<script>alert('Incorrect username or password');
	document.location='index.html'
	</script>";
}
// If a matching user is found
elseif ($stmt->rowCount() > 0) {
	$user = $stmt->fetch(PDO::FETCH_ASSOC);
	// Verify the password
	if (password_verify($password, $user['password'])) {
		// If the user is admin, redirect to login.html
		if ($_SESSION["username"] == 'admin') {
			header('location:login.html');
		}
		// If the user is not admin, display user details and redirect to index.php
		else {
			echo $user['user_id']."<br>";
			echo $user['username']."<br>";
			header("location: index.php");
		}
	} else {
		echo "<script>alert('Incorrect username or password');
		document.location='index.html'
		</script>";
	}
}
?>