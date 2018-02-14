<?php
	$conn = mysqli_connect("localhost", "root", "", "exam");
	$sql = "SELECT id, name FROM users WHERE id";
	$result = $conn->query($sql);
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>User List</title>

</head>
<body>
	<h1>Users:</h1>
	<?php 
	while($row = $result->fetch_assoc()){
		echo $row["name"];
		echo "     <a href=\"deleteUsers.php?id=".$row['id']."\">Delete</a><br>";
	}
	?>
</body>
</html>