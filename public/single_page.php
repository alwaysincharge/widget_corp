

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
    
    <div id="main" style="margin-right: 30px; font-size: 17px; font-family: georgia;">  
    <h2> <?php 
    while ($rows = mysqli_fetch_assoc($resultt)) {
        echo $rows['menu_name']; }?> Page</h2>
        
        
        <p style="width: 200px;">Content: <?php  
            
            $query = "SELECT * FROM pages WHERE id = {$_GET['rows']}";
            $resulting = mysqli_query($connection, $query);
            
                while ($rows = mysqli_fetch_assoc($resulting)) {
        echo nl2br(htmlentities($rows['content'])); }
            
            ?>  </p>
        
        <a href="edit_page.php?rows=<?php echo $_GET['rows']; ?>">+ Edit this page</a>
        
        
        
        <a href="delete_page.php?rows=<?php echo $_GET['rows']; ?>" onclick="return confirm('m jjk jjjn njasdjds');">+ delete this page</a>
        
        
        
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