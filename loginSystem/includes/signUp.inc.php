<?php


/*	$name = $_POST["name"];
	$email =  $_POST["email"];
	$phone =  $_POST["phone"];
	$pwd1 =  $_POST["pwd1"];
	$pwd2 =  $_POST["pwd2"];

	//databasde connection
	$mysqli = mysqli_connect ('localhost', 'root', '', 'loginsystem');
	if ($mysqli->connect_error) {
		die('connection Failed: ' .$mysqli->connect_error);
	}else{
		$stmt=$mysqli->prepare("INSERT INTO users (name, email, phone, pwd1) values(?,?,?,?)");
		$stmt->bind_param("ssss", $name, $email, $phone, $pwd1 );
		$stmt->execute();
		echo "success";
		
		$stmt->close();
		$mysqli->close();
	}*/

if (isset($_POST["submit"])) {
	$name = $_POST["name"];
	$email =  $_POST["email"];
	$phone =  $_POST["phone"];
	$pwd1 =  $_POST["pwd1"];
	$pwd2 =  $_POST["pwd2"];


	require 'dba.inc.php';
	require 'functions.inc.php';


	if (emptyInput($name, $email, $phone, $pwd1, $pwd2) !== false) {
		header("location: ../sinUp.php?error=emptyInput");
		exit();
	}

	if (invalidUid($name) !== false) {
		header("location: ../sinUp.php?error=invalidUid");
		exit();
	}
	if (invalidEmail($email) !== false) {
		header("location: ../sinUp.php?error=invalidEmail");
		exit();
	}
	/*if (invalidPhone($phone) !== false) {
		header("location: ../sinUp.php?error=invalidNumber");
		exit();
	}*/
	if (pwdMatch($pwd1, $pwd2) !== false) {
		header("location: ../sinUp.php?error=passwordDoesntMatch");
		exit();
	}
	if (UidExists($conn, $name, $email) !== false) {
		header("location: ../sinUp.php?error=namealreadyExist");
		exit();
	}

	createUser($conn, $name, $email, $phone, $pwd1);

}else{
	header("location: ../sinUp.php");
	exit();}
