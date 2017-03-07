
<?php  include("../includes/database.php"); ?>



<?php  include("../includes/header.php"); ?>
<?php
    // Define the default values of all form variables.
    
    $menu_name = $visible = $content = $subject_id = "";
    
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
        
        if (empty($_POST["menu_name"])  ||  empty($_POST["visible"]) || empty($_POST["content"])  || empty($_POST["subject_id"])  )   {
            $_SESSION['menuerror'] = "Menu Name cannot be empty!";
            $_SESSION['viserror'] = "visible cannot be empty!";
        } else {
            $_SESSION['menuerror'] = "";
            $_SESSION['viserror'] = "";
 $menu_name = test_input($_POST["menu_name"]);
            $content = test_input($_POST["content"]);
            $subject_id = test_input($_POST["subject_id"]);
              $visible = test_input($_POST["visible"]);
            
            
    $query = "UPDATE pages SET menu_name = '{$menu_name}', content = '{$content}', subject_id = {$subject_id}, visible = {$visible} WHERE id = {$_GET['rows']}";
    
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
    
    
    <form action="edit_page.php?rows=<?php echo $_GET['rows'];?>"  method="post" style="margin-right: 30px; font-size: 17px; font-family: georgia;">
    
        <p>Menu name</p>         <?php  
        
        
        if (isset($_SESSION['menuerror']))
  if ($_SESSION['menuerror'] != NULL){
      echo $_SESSION['menuerror'];                   
  }   
        
        ?>
        
        
    <input type="text" name="menu_name" value="<?php 
        
        $querieh = "SELECT * FROM pages WHERE id = {$_GET['rows']} ";

$resulth = mysqli_query($connection, $querieh);
        
        
    while ($rows = mysqli_fetch_assoc($resulth)) {
      echo $rows['menu_name'];
    }  
        
    ?>"  /><br><br>
    
        
        
        
        
         <p>Content</p>         <?php  
        
        
        if (isset($_SESSION['menuerror']))
  if ($_SESSION['menuerror'] != NULL){
      echo $_SESSION['menuerror'];                   
  }   
        
        ?>
        
        
    <textarea type="text" name="content" value="" style="width: 250px; height: 170px;"><?php $querieh = "SELECT * FROM pages WHERE id = {$_GET['rows']} LIMIT 1";

$resulth = mysqli_query($connection, $querieh);
        
        
    while ($rows = mysqli_fetch_assoc($resulth)) {
      echo $rows['content'];
    }  
        
           ?></textarea><br><br>
        
        
        
        
        
        
        
        
        
        
        

       <p>Subject ID</p>         <?php  
        
        
        if (isset($_SESSION['menuerror']))
  if ($_SESSION['menuerror'] != NULL){
      echo $_SESSION['menuerror'];                   
  }   
        
        ?>
        
        
    <input type="number" name="subject_id" value="<?php $querieh = "SELECT * FROM pages WHERE id = {$_GET['rows']} ";

$resulth = mysqli_query($connection, $querieh);
        
        
    while ($rows = mysqli_fetch_assoc($resulth)) {
      echo $rows['subject_id'];
    }  
        
    ?>"  /><br><br>
         
        
        
        
        
        
        
        
        
        
        
        
     <!--   
        <p>Position</p>
    <select name="position">
        
        <option value="1">1</option>
        
        </select><br><br> -->
        
        
        <p>Visible. The current visibility is set at: <?php 
        
        $querieh = "SELECT * FROM pages WHERE id = {$_GET['rows']} ";

$resulth = mysqli_query($connection, $querieh);
        
        
    while ($rows = mysqli_fetch_assoc($resulth)) {
      echo $rows['visible'];
    }  
        
    ?>  </p>         <?php  
        
        
        
        
        if (isset($_SESSION['viserror']))
  if ($_SESSION['viserror'] != NULL){
      echo $_SESSION['viserror'];                   
  }   
        
        ?>
      <label> 0 <input type="radio" name="visible" value="0"         <?php 
        
        $querieh = "SELECT * FROM pages WHERE id = {$_GET['rows']} ";

$resulth = mysqli_query($connection, $querieh);
        
        
    while ($rows = mysqli_fetch_assoc($resulth)) {
       if ($rows['visible'] == 0) {
           echo "checked";
       }
    }  
        
    ?>></label>
      <label> 1 <input type="radio" name="visible" value="1"         <?php 
        
        $querieh = "SELECT * FROM pages WHERE id = {$_GET['rows']} ";

$resulth = mysqli_query($connection, $querieh);
        
        
    while ($rows = mysqli_fetch_assoc($resulth)) {
       if ($rows['visible'] == 1) {
           echo "checked";
       }
    }  
        
    ?>></label>
        <label> 2 <input type="radio" name="visible" value="2"         <?php 
        
        $querieh = "SELECT * FROM pages WHERE id = {$_GET['rows']} ";

$resulth = mysqli_query($connection, $querieh);
        
        
    while ($rows = mysqli_fetch_assoc($resulth)) {
       if ($rows['visible'] == 2) {
           echo "checked";
       }
    }  
        
    ?>></label><br><br>
        
        <p>Submit</p>
        <input type="submit" name="submit" value="Edit Page" />
    
    </form>
    
    
    
    
    
    
    
    <div id="main" style="margin-right: 30px; font-size: 17px; font-family: georgia;">  
    <h2>Edit Page</h2>
    <p>Edit subject details.</p>
    
    <ul>
    
    <li><a href="manage_content.php">Manage Website</a></li>
    
    <li><a href="">Manage Admin</a></li>
    
    <li><a href="">Logout</a></li>
    </ul></div>
  
    
</div>


<?php  include("../includes/footer.php"); ?>
