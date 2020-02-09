<?php 
$firstname = $_POST['first_name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

//Database connection

$conn = new mysqli('localhost', 'root', '', 'hdda0318_konsek');

if($conn ->connect_error) {
	die('Connection failed : ' .$conn->connect_error);
}
else {
	$sql = "INSERT INTO poruke(ime, email, tema_poruke, poruka) VALUES('$firstname', '$email', '$subject', '$message')";
	mysqli_query($conn,$sql);
	
	header("refresh:3; url=index.php");
}
?>