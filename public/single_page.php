

<?php  include("../includes/database.php"); ?>



<?php  include("../includes/header.php"); ?>


<?php     

$queriet = "SELECT * FROM pages WHERE id = {$_GET['rows']}";

$resultt = mysqli_query($connection, $queriet);

?>


<?php     


?>

<div id="page">
    
    
    <div id="navigation">
    

    </div>
    
    <div id="main">  
    <h2>Admin Menu</h2>
    <div>This is a single page.
        
        <?php $jews = ''; $jews = $_GET['rows'];  echo $jews;   ?>
     
             <?php 
    while ($rows = mysqli_fetch_assoc($resultt)) {
        echo $rows['menu_name'];
        
        
               $querief = "SELECT * FROM subjects WHERE id = {$rows['subject_id']}";

$resultf = mysqli_query($connection, $querief);

        while ($row = mysqli_fetch_assoc($resultf)) {
        echo "<a href='subject_page.php?row={$row['id']}'>{$row['menu_name']}</a>";
    } 
    } 
        
        
        
        
        
       
        
    
    ?>
      
        
        
        
        
        
        </div>
    
    <ul>
    
    <li><a href="manage_content.php">Manage Website</a></li>
    
    <li><a href="">Manage Admin</a></li>
    
    <li><a href="">Logout</a></li>
    </ul></div>
  
    
</div>


<?php  include("../includes/footer.php"); ?>