

<?php  include("../includes/database.php"); ?>



<?php  include("../includes/header.php"); ?>


<div id="page">
    
    
    <div id="navigation">
    
    <p>Navigation goes here.</p>
        <ul>
         <?php 
    while ($row = mysqli_fetch_assoc($result)) {
    
    ?>
    
    <li><?php echo $row["menu_name"]; ?>
            
            
            <ul>
        
        <?php  
$querys = "SELECT * FROM pages WHERE subject_id = {$row['id']} ";

$results = mysqli_query($connection, $querys);  ?>
        
        
        <?php while ($rows = mysqli_fetch_assoc($results)) { ?> <li><?php  echo $rows['menu_name']; ?> </li>  <?php } ?>
        
        
        
        </ul>
            
            
            
            
            
            
            </li>
    
    
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
    <h2>Admin Menu</h2>
    <p>Welcome to the admin area.</p>
    
    <ul>
    
    <li><a href="manage_content.php">Manage Website</a></li>
    
    <li><a href="">Manage Admin</a></li>
    
    <li><a href="">Logout</a></li>
    </ul></div>
  
    
</div>


<?php  include("../includes/footer.php"); ?>
