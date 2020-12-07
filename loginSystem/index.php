<?php
	include_once 'header.php';
?>



<section>
	<?php
	 if (isset($_SESSION["usersId"])) {
    echo "<h4 style='color:lime; text-align: center;'> Hello " . $_SESSION["usersId"] . "</h4>"; 
  }
  ?>
</section>

<h1>Thi is index welcome</h1>