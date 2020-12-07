
<?php
    include_once 'header.php';
?>

<div class="container">

<div class="card bg-light">
<article class="card-body mx-auto" style="max-width: 400px;">
	<h4 class="card-title mt-3 text-center">Login System</h4>
	
	<form action="includes/login.inc.php" method="post">
    
    <div class="form-group input-group">
    		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
		 </div>
        <input name="uid" class="form-control" placeholder="userName/Email" type="text">
    </div> <!-- form-group// -->


	<div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>
        <input class="form-control" name="pwd1" placeholder="Password" type="password">
    </div> <!-- form-group// -->

    
    <!-- social media -->
    <p>
		<a href="" class="btn btn-block btn-twitter"> <i class="fab fa-twitter"></i>   Login via Twitter</a>
		<a href="" class="btn btn-block btn-facebook"> <i class="fab fa-facebook-f"></i>   Login via facebook</a>
	</p>

    <div class="form-group">
        <button type="submit" name="submit" class="btn btn-success btn-block"> Login  </button>
    </div> <!-- form-group// -->      
    <p class="text-center">Create new account? <a href="sinUp.php">Register now</a> </p>                                                                 
</form>
<p id=""></p>
<?php
    if (isset($_GET["error"])){
        if ($_GET["error"] == "emptyInput") {
            echo  "<p style='color:red; text-align: center;'> Empty Field </p>";
        }else if ($_GET["error"] == "invalidTry") {
            echo "<p style='color:red; text-align: center;'>Not correct credential</p>";
        }else if ($_GET["error"] == "wrongLog") {
            echo "<p style='color:red; text-align: center;'>Invalid password</p>";
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