
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
            $_SESSION['menuerror'] = "Menu Name cannot be empty!";
            $_SESSION['viserror'] = "visible cannot be empty!";
        } else {
            $_SESSION['menuerror'] = "";
            $_SESSION['viserror'] = "";
            $menu_name = test_input($_POST["menu_name"]);
              $visible = test_input($_POST["visible"]);
            
            
    $query = "UPDATE subjects SET menu_name = '{$menu_name}', visible = {$visible} WHERE id = {$_GET['row']}";
    
    $updatedsubject = mysqli_query($connection, $query);
    
    if ($updatedsubject) {
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
    
    

    
    
    ?>






<div id="page">
    
    
    <form action="edit_subject.php?row=<?php echo $_GET['row'];?>"  method="post">
    
        <p>Menu name</p>         <?php  
        
        
        if (isset($_SESSION['menuerror']))
  if ($_SESSION['menuerror'] != NULL){
      echo $_SESSION['menuerror'];                   
  }   
        
        ?>
        
        
    <input type="text" name="menu_name" value="<?php 
        
        $querieh = "SELECT * FROM subjects WHERE id = {$_GET['row']} ";

$resulth = mysqli_query($connection, $querieh);
        
        
    while ($row = mysqli_fetch_assoc($resulth)) {
      echo $row['menu_name'];
    }  
        
    ?>"  /><br><br>
    
        
        
        
        
        
        

        
        
        
        
        
        
        
        
        
        
        
        
     <!--   
        <p>Position</p>
    <select name="position">
        
        <option value="1">1</option>
        
        </select><br><br> -->
        
        
        <p>Visible. The current visibility is set at: <?php 
        
        $querieh = "SELECT * FROM subjects WHERE id = {$_GET['row']} ";

$resulth = mysqli_query($connection, $querieh);
        
        
    while ($row = mysqli_fetch_assoc($resulth)) {
      echo $row['visible'];
    }  
        
    ?>  </p>         <?php  
        
        
        
        
        if (isset($_SESSION['viserror']))
  if ($_SESSION['viserror'] != NULL){
      echo $_SESSION['viserror'];                   
  }   
        
        ?>
      <label> 0 <input type="radio" name="visible" value="0"         <?php 
        
        $querieh = "SELECT * FROM subjects WHERE id = {$_GET['row']} ";

$resulth = mysqli_query($connection, $querieh);
        
        
    while ($row = mysqli_fetch_assoc($resulth)) {
       if ($row['visible'] == 0) {
           echo "checked";
       }
    }  
        
    ?>></label>
      <label> 1 <input type="radio" name="visible" value="1"         <?php 
        
        $querieh = "SELECT * FROM subjects WHERE id = {$_GET['row']} ";

$resulth = mysqli_query($connection, $querieh);
        
        
    while ($row = mysqli_fetch_assoc($resulth)) {
       if ($row['visible'] == 1) {
           echo "checked";
       }
    }  
        
    ?>></label>
        <label> 2 <input type="radio" name="visible" value="2"         <?php 
        
        $querieh = "SELECT * FROM subjects WHERE id = {$_GET['row']} ";

$resulth = mysqli_query($connection, $querieh);
        
        
    while ($row = mysqli_fetch_assoc($resulth)) {
       if ($row['visible'] == 2) {
           echo "checked";
       }
    }  
        
    ?>></label><br><br>
        
        <p>Submit</p>
        <input type="submit" name="submit" value="Edit Subject" />
    
    </form>
    
    
    
    
    
    
    
    <div id="main">  
    <h2>Edit Subject</h2>
    <p>Welcome to the admin area.</p>
    
    <ul>
    
    <li><a href="manage_content.php">Manage Website</a></li>
    
    <li><a href="">Manage Admin</a></li>
    
    <li><a href="">Logout</a></li>
    </ul></div>
  
    
</div>


<?php  include("../includes/footer.php"); ?>
