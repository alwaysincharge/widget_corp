

<?php  include("../includes/database.php"); ?>



<?php  include("../includes/header.php"); ?>


<?php
    // Define the default values of all form variables.
    
    $menu_name = $visible = "";
    
  // This function formats the input data. 
    function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
   }


/*
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        if (empty($_POST["menu_name"])  ) {
            $_SESSION['menuerror'] = "Menu Name cannot be empty!";
            
        } else {
            $_SESSION['menuerror'] = "";
            $menu_name = test_input($_POST["menu_name"]);
    
        }
        
        
         if (empty($_POST["visible"])  ) {
            $_SESSION['viserror'] = "visible cannot be empty!";
        } else {
            $_SESSION['viserror'] = "";
            $visible = test_input($_POST["visible"]);
    
        }
        
        
        
    }  
    */
    
    








    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        if (empty($_POST["menu_name"])  ||  empty($_POST["visible"])  )   {
            $_SESSION['menuerror'] = "Menu Name cannot be empty! ";
            $_SESSION['viserror'] = "visible cannot be empty!";
            redirect_to("new_subject.php");
        } else {
            $_SESSION['menuerror'] = "";
            $_SESSION['viserror'] = "";
            $menu_name = test_input($_POST["menu_name"]);
              $visible = test_input($_POST["visible"]);
            
            
    $query = "INSERT INTO subjects ( menu_name, visible) VALUES ( '{$menu_name}', {$visible})";
    
    $submittedsubject = mysqli_query($connection, $query);
    
    if ($submittedsubject) {
        $_SESSION['message'] = "Subject created!!";
          redirect_to("manage_content.php");
    }   
    
        }
    
        
        
        
    }   









    
    
    
 /*  
    
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $menu_name = test_input($_POST["menu_name"]);
    $visible = test_input($_POST["visible"]);
    
    
    $query = "INSERT INTO subjects ( menu_name, visible) VALUES ( '{$menu_name}', {$visible})";
    
    $submittedsubject = mysqli_query($connection, $query);
    
    if ($submittedsubject) {
        $_SESSION['message'] = "Subject created!!";
          redirect_to("manage_content.php");
    } else {
        redirect_to("new_subject.php");
    }
    
} */
    
    
    
    
    echo "menu_name: " . $menu_name . "<br>";
    echo "visible: " . $visible . "<br>";
    

    
    
    ?>
    


<div id="page">
    
    
 
    
    
    
    
    
    <div id="main">  
    <h2>Admin Menu</h2>
    <p>Welcome to the admin area.</p>
    
    <ul>
    
    <li><a href="manage_content.php">Manage Website</a></li>
    
    <li><a href="">Manage Admin</a></li>
    
    <li><a href="">Logout</a></li>
    </ul></div>
  
    
</div>


<?php  include("../includes/footer.php"); ?>
