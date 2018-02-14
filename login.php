<?php
session_start();
$username = $_POST["username"];
$password = $_POST["password"];
$conn = mysqli_connect("localhost", "root", "", "exam");

$sql = "SELECT id, name, password FROM users WHERE username = '$username'";
//echo $sql . "<br>";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

$hashPw = $row["password"];
echo $hashPw;

if(password_verify($password, $hashPw)) {

	//var_dump($row);
	$id = $row["id"];
	$name = $row["name"];
	$_SESSION['userID'] = $id;
	$_SESSION["username"] = $name;
	header("Location: index.php");//redirects back
}

else {
	echo "<p style='color:red'>Wrong Username/Password</p>";
}