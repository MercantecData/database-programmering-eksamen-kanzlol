<?php 

	$conn = mysqli_connect("localhost", "root", "", "exam");

	$id = $_GET['id'];
	mysqli_query($conn,"DELETE FROM images WHERE id = '".$id."'");
	header("Location: index.php");
	mysqli_close($conn);

?>