<?php
function emptyInput($name, $email, $phone, $pwd1, $pwd2){
	$result;
	if (empty($name) || empty($email) || empty($phone) || empty($pwd1) || empty($pwd2)) {
		$result = true;
	} else{
		$result = false;
	}
	return $result;
}


function invalidUid($name){
	$result;
	if (!preg_match("/^[a-zA-Z0-9]*$/", $name)) {
		$result = true;
	} else{
		$result = false;
	}
	return $result;
}


function invalidEmail($email){
	$result;
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$result = true;
	} else{
		$result = false;
	}
	return $result;
}

function pwdMatch($pwd1, $pwd2){
	$result;
	if ($pwd1 !== $pwd2) {
		$result = true;
	} else{
		$result = false;
	}
	return $result;
}


function UidExists($conn, $name, $email){
	$sql = "SELECT * FROM users WHERE usersName = ? OR usersEmail = ?;";
	$stmt = mysqli_stmt_init($conn); //creating prepared statement to prevent sql injection
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		header("location: ../sinUp.php?error=stmtFailed");
		exit();
	}

	mysqli_stmt_bind_param($stmt, "ss", $name, $email); //ss= string for name and email
	mysqli_stmt_execute($stmt);

	$resultData = mysqli_stmt_get_result($stmt);
	if ($row = mysqli_fetch_assoc($resultData)) {
		return $row;
	}else{
		$result = false;
		return $result;
	}

	mysqli_stmt_close($stmt);
}



function createUser($conn, $name, $email, $phone, $pwd1){
	$sql = " INSERT INTO users (usersName, usersEmail, usersPhone, usersPwd1) VALUES (?, ?, ?, ?);";
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		header("location: ../sinUp.php?error=stmtFailed");
		exit();
	}

	$hashedPwd = password_hash($usersPwd1, PASSWORD_DEFAULT);

	mysqli_stmt_bind_param ($stmt, "ssss", $name, $email, $phone, $hashedPwd); 
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);

	header("location: ../sinUp.php?error=none");
		exit();
}




//this function is for login.inc.php
function emptyInputLogin($name, $pwd1){
	$result;
	if (empty($name) || empty($pwd1)) {
		$result = true;
	} else{
		$result = false;
	}
	return $result;
}

function loginUser($conn, $name, $pwd1){
	$UidExists = UidExists($conn, $name, $name);

	if ($UidExists === false) {
		header("location: ../login.php?error=invalidTry");
		exit();
	}

	$pwdHashed = $UidExists["usersPwd1"];
	$checkPwd = password_verify($usersPwd1, $pwdHashed); 
	if ($checkPwd === false) {
		header("location: ../login.php?error=wrongLog");
		exit();
	}else if ($checkPwd === true){
		session_start();
		$_SESSION["usersId"] = $UidExists["usersId"];
		$_SESSION["usersId"] = $UidExists["usersName"];
		header("location: ../index.php"); 
		exit();
	}

}