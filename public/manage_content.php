

<?php  include("../includes/database.php"); ?>



<?php  include("../includes/header.php"); ?>


<div id="page">
    
    
    <div id="navigation">
    
    <p>Navigation goes here.</p>
        <ul>
         <?php 
    while ($row = mysqli_fetch_assoc($result)) {
    
    ?>
    
          <a href="subject_page.php?row=<?php echo urlencode($row['id']); ?>"><li><?php echo $row["menu_name"]; ?> </li></a>  
            
            
            <ul>
        
        <?php  
$querys = "SELECT * FROM pages WHERE subject_id = {$row['id']} ";

$results = mysqli_query($connection, $querys);  ?>
        
        
        <?php while ($rows = mysqli_fetch_assoc($results)) { ?> <a href="single_page.php?rows=<?php echo urlencode($rows['id']); ?>"><li><?php  echo $rows['menu_name']; ?> </li></a>  <?php } ?>
        
        
        
        </ul>
            
            
            
            
            
            
            
    
    
            <?php  } ?>
        </ul>
        
        
        <?php  
    mysqli_free_result($result);
    ?>
         <?php  
    mysqli_free_result($results);
    ?>
    </div>
    
    <div id="main"> 
        
        <a href="new_subject.php">+ Add new subject</a>
    <h2>Admin Menu</h2>
    <p>Welcome to the admin area.</p>
    
    <ul>
   
        
        
        
        
        <?php  
        
        
        if (isset($_SESSION['message']))
  if ($_SESSION['message'] != NULL){
      echo $_SESSION['message'];                   
  }   
        
        ?>
        
        
        
        
        
        
        
        
        
    <li><a href="manage_content.php">Manage Website</a></li>
    
    <li><a href="">Manage Admin</a></li>
    
    <li><a href="">Logout</a></li>
    </ul></div>
  
    
</div>


<?php  include("../includes/footer.php"); ?>
