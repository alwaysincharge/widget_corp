
<?php  include("../includes/database.php"); ?>



<?php  include("../includes/header.php"); ?>





<?php 


$query = "DELETE FROM admins WHERE id = {$_GET['adminli']} LIMIT 1";


$deleteresult = mysqli_query($connection, $query);

if ($deleteresult) {
    $_SESSION['message'] = "Subject created!!";
          redirect_to("manage_admins.php");
}







?>














<?php  include("../includes/footer.php"); ?>