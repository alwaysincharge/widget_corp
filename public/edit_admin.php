

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
            
        } else {

            $username = test_input($_POST["username"]);
            $hashed_password = password_encrypt(test_input($_POST["hashed_password"]));

            
            
    $query = "UPDATE admins SET username = '{$username}', hashed_password = '{$hashed_password}' WHERE id = {$_GET['adminli']}";
    
    $edittedadmin = mysqli_query($connection, $query);
    
            
            
            if ($edittedadmin) {
        $_SESSION['message'] = "Subject created!!";
                     redirect_to("manage_admins.php"); 
    }
  

            


        }

    }

?>




<body>



<form action="edit_admin.php?adminli=<?php echo $_GET['adminli'];?>" method="post">
    
    
    
    <input type="text" name="username" placeholder="username"  value="<?php 
            $query = "SELECT * FROM admins WHERE id = {$_GET['adminli']} LIMIT 1";
            
            $adminlist = mysqli_query($connection, $query);
            
                while ($adminli = mysqli_fetch_assoc($adminlist)) {
                    echo $adminli['username'];
                }
            
            
            ?>"/>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    <input type="password" name="hashed_password" placeholder="password"  value=""/>
    
    <input type="submit" name="submit"  value="Submit"/>
    
    
    
    </form>







</body>




















<?php  include("../includes/footer.php"); ?>
