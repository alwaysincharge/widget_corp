

<?php  include("../includes/database.php"); ?>



<?php  include("../includes/header.php"); ?>


<div id="page">
    
    
    <form action="submit_page.php"  method="post" style="margin-right: 30px; font-size: 17px; font-family: georgia;">
    
        <p>Menu name</p>         <?php  
        
        
        if (isset($_SESSION['menuerror']))
  if ($_SESSION['menuerror'] != NULL){
      echo $_SESSION['menuerror'];                   
  }   
        
        ?>
    <input type="text" name="menu_name" value=""  /><br><br>
    
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        <p>Content</p>         <?php  
        
        
        if (isset($_SESSION['menuerror']))
  if ($_SESSION['menuerror'] != NULL){
      echo $_SESSION['menuerror'];                   
  }   
        
        ?>
        <textarea type="text" name="content" value="" style="height: 110px; width: 250px;"></textarea><br><br>
    
        
        
        
        
        
        
        <p>Subject Id</p>         <?php  
        
        
        if (isset($_SESSION['menuerror']))
  if ($_SESSION['menuerror'] != NULL){
      echo $_SESSION['menuerror'];                   
  }   
        
        ?>
    <input type="number" name="subject_id" value=""  /><br><br>
    
        
        
        
        
        
        
        
        
     <!--   
        <p>Position</p>
    <select name="position">
        
        <option value="1">1</option>
        
        </select><br><br> -->
        
        
        <p>Visible</p>         <?php  
        
        
        if (isset($_SESSION['viserror']))
  if ($_SESSION['viserror'] != NULL){
      echo $_SESSION['viserror'];                   
  }   
        
        ?>
      <label> 0 <input type="radio" name="visible" value="0"  /></label>
      <label> 1 <input type="radio" name="visible" value="1"  /></label><label> 2 <input type="radio" name="visible" value="2" ></label><br><br>
        
        <p>Submit</p>
        <input type="submit" name="submit" value="Create Subject" />
    
    </form>
    
    
    
    
    
    
    
    <div id="main" style="margin-right: 30px; font-size: 17px; font-family: georgia;">  
    <h2>New Subject</h2>
    <p>Fill the form to create new subject.</p>
    
    <ul>
    
    <li><a href="manage_content.php">Manage Website</a></li>
    
    <li><a href="">Manage Admin</a></li>
    
    <li><a href="">Logout</a></li>
    </ul></div>
  
    
</div>


<?php  include("../includes/footer.php"); ?>
