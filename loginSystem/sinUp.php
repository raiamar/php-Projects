
<?php
    include_once 'header.php';
?>

<div class="container">

<div class="card bg-light">
<article class="card-body mx-auto" style="max-width: 400px;">
	<h4 class="card-title mt-3 text-center">Create Account</h4>
	<p>
		<a href="" class="btn btn-block btn-twitter"> <i class="fab fa-twitter"></i>   Login via Twitter</a>
		<a href="" class="btn btn-block btn-facebook"> <i class="fab fa-facebook-f"></i>   Login via facebook</a>
	</p>
<!--	<p class="divider-text">
        <span class="bg-light">OR</span>
    </p>-->
	<form action="includes/signUp.inc.php" method="post">
	<div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input name="name" class="form-control" placeholder="Full name" type="text">
    </div> <!-- form-group// -->
    
    <div class="form-group input-group">
    		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
		 </div>
        <input name="email" class="form-control" placeholder="Email address" type="email">
    </div> <!-- form-group// -->

    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
		</div>
		<select class="custom-select" style="max-width: 120px;">
		    <option selected="">+977</option>
		    <option value="1">+01</option>
		</select>
    	<input name="phone" class="form-control" placeholder="Phone number" type="text">
    </div> <!-- form-group// -->

	<div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>
        <input class="form-control" name="pwd1" placeholder="Create password" type="password">
    </div> <!-- form-group// -->

    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>
        <input class="form-control" name="pwd2" placeholder="Repeat password" type="password">
    </div> <!-- form-group// -->   

    <div class="form-group">
        <button type="submit" name="submit" class="btn btn-primary btn-block"> Create Account  </button>
    </div> <!-- form-group// -->      
    <p class="text-center">Have an account? <a href="login.php">Log In</a> </p>                                                                 
</form>

<?php
	if (isset($_GET["error"])){
		if ($_GET["error"] == "emptyInput") {
			echo  "<p style='color:red; text-align: center;'> Empty Field </p>";
		} else if ($_GET["error"] == "invalidUid") {
			echo "<p style='color:red; text-align: center;'>Choose a Valid userName</p>";
		}else if ($_GET["error"] == "invalidEmail") {
			echo "<p style='color:red; text-align: center;'>Choose a Valid Email</p>";
		}else if ($_GET["error"] == "passwordDoesntMatch") {
			echo "<p style='color:red; text-align: center;'>Password doesn't match</p>";
		} else if ($_GET["error"] == "stmtfailed") {
			echo "<p style='color:red; text-align: center;'>something went wrong!</p>";
		} else if ($_GET["error"] == "namealreadyExist") {
			echo "<p style='color:red; text-align: center;'>User already exist</p>";
		} else if ($_GET["error"] == "none"){
			echo "<p style='color:lime; text-align: center;'>Account created</p>";
		}
	}
?>
</article>
</div> <!-- card.// -->

</div> 
<!--container end.//-->




<?php 
	include_once 'footer.php';
	?>