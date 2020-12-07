<?php 
if (isset($_POST["submit"])) {
	$name =  $_POST["uid"];
	$pwd1 =  $_POST["pwd1"];


	require_once 'dba.inc.php';
	require_once 'functions.inc.php';


//error handler
	if (emptyInputLogin($name, $pwd1) !== false) {
		header("location: ../login.php?error=emptyInput");
		exit();
	}

loginUser($conn, $name, $pwd1);

}else{
	header("location: ../login.php");
	exit();
}