

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
            redirect_to("login.php");
        } else {

            $username = test_input($_POST["username"]);
            $hashed_password = password_hash(test_input($_POST["hashed_password"]), PASSWORD_DEFAULT);

            $query = "SELECT * FROM admins WHERE username = '$username' LIMIT 1";
            
            $loginquery = mysqli_query($connection, $query);
            
            if ( mysqli_num_rows($loginquery) == 1) {
                
                
                
            
                
                    while ($row = mysqli_fetch_assoc($loginquery)) {
                        
                        
                        
                        if (password_verify(test_input($_POST["hashed_password"]), $row['hashed_password'])) {
                           echo "jnjjkl";
                            
                            
                            
                            if (!isset($_SESSION['realredirect'])) {  } else {  redirect_to("{$_SESSION['realredirect']}"); }
                            
                            
                            
    redirect_to("{$_SESSION['realredirect']}"); 
} else {
  
}
                        
                        
                        
                    }
                
                        
            } else {
                
            }
  

            


        }

    }

?>




<body>



<form action="login.php" method="post">
    
    
    
    <input type="text" name="username" placeholder="username"  value=""/>
    
    <input type="password" name="hashed_password" placeholder="password"  value=""/>
    
    <input type="submit" name="submit"  value="Submit"/>
    
    
    
    </form>







</body>




















<?php  include("../includes/footer.php"); ?>
