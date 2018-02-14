<title>Admin Page</title><?php

if(isset($_POST["submit"])) {
	$conn = mysqli_connect("localhost", "root", "", "exam");
	$username = $_POST["username"];
	$password = $_POST["password"];
	$sql = "SELECT id, password FROM adminusers WHERE username = '$username'";
	$result = $conn->query($sql);
	$row = $result->fetch_assoc();
	$hashPw = $row["password"];
	
	if(password_verify($password, $hashPw)) {
		header("Location: userlist.php");
		exit;
	}
	else {
		echo "<p style='color:red'>Wrong Username/Password</p>";
	}
}
?>

<form action="admin.php" method="POST">
	username:<input type="text" name="username">
	password:<input type="password" name="password">
	<input type="hidden" name="strongkey" value="Lzk34yR71?hrIP">
	<input type="submit" name="submit" value="login">
</form>