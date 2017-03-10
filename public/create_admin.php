

<?php  include("../includes/database.php"); ?>



<?php  include("../includes/header.php"); ?>





<?php 


$username = $hashed_password = "";



    function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
   }





    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        if (empty($_POST["username"])  ||  empty($_POST["hashed_password"]) )   {
            redirect_to("create_admin.php");
        } else {

            $username = test_input($_POST["username"]);
            $hashed_password = password_encrypt(test_input($_POST["hashed_password"]));

            
            
    $query = "INSERT INTO admins (username, hashed_password) VALUES ( '{$username}', '{$hashed_password}' )";
    
    $submittedadmin = mysqli_query($connection, $query);
    
  
           redirect_to("manage_admins.php"); 
            


        }

    }

?>




<body>



<form action="create_admin.php" method="post">
    
    
    
    <input type="text" name="username" placeholder="username"  value=""/>
    
    <input type="password" name="hashed_password" placeholder="password"  value=""/>
    
    <input type="submit" name="submit"  value="Submit"/>
    
    
    
    </form>







</body>




















<?php  include("../includes/footer.php"); ?>
