
<?php  include("../includes/database.php"); ?>



<?php  include("../includes/header.php"); ?>






<?php   


$_SESSION['admin_id'] = null;
$_SESSION['username'] = null;
$_SESSION['realredirect'] = null;


 redirect_to("login.php"); 
?>








<?php  include("../includes/footer.php"); ?>
