

<?php  include("../includes/database.php"); ?>



<?php  include("../includes/header.php"); ?>



<?php

if (!isset($_SESSION['admin_id'])) {
    $_SESSION['realredirect'] = $_SERVER['REQUEST_URI'];
    

 redirect_to("login.php"); 
}



?>






<form method="get" action="results.php">


<?php echo $_SERVER['REQUEST_URI'];  ?>

<input type="text" name="keywords" value="" />




<input type="submit" name="submit" value="submit" />



</form>























<?php  include("../includes/footer.php"); ?>
