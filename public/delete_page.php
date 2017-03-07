

<?php  include("../includes/database.php"); ?>



<?php  include("../includes/header.php"); ?>





<?php 


$query = "DELETE FROM pages WHERE id = {$_GET['rows']} LIMIT 1";


$deleteresult = mysqli_query($connection, $query);

if ($deleteresult) {
    $_SESSION['message'] = "Subject created!!";
          redirect_to("manage_content.php");
}







?>














<?php  include("../includes/footer.php"); ?>