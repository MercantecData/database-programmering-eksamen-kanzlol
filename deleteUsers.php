<?php 

	$conn = mysqli_connect("localhost", "root", "", "exam");

	$id = $_GET['id'];
	mysqli_query($conn,"DELETE FROM users WHERE id = '".$id."'");
	header("Location: userlist.php");
	mysqli_close($conn);

?>