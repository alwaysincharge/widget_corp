

<?php  include("../includes/database.php"); ?>



<?php  include("../includes/header.php"); ?>





<?php 


$query = "SELECT * FROM pages WHERE Subject_id = {$_GET['row']}";
$result = mysqli_query($connection, $query);

if (mysqli_num_rows($result) > 0 )  {
    
      redirect_to("manage_content.php");
    
}  else {
    
    
$query = "DELETE FROM subjects WHERE id = {$_GET['row']} LIMIT 1";



$deleteresult = mysqli_query($connection, $query);

if ($deleteresult) {
    $_SESSION['message'] = "Subject created!!";
          redirect_to("manage_content.php");
}

    
}














?>













<?php  include("../includes/footer.php"); ?>