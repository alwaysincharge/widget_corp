

<?php  include("../includes/database.php"); ?>



<?php  include("../includes/header.php"); ?>



<?php     

$queries = "SELECT * FROM subjects WHERE id = {$_GET['row']} LIMIT 1";

$resultz = mysqli_query($connection, $queries);

?>




<div id="page">
    
    
    <div id="navigation">
    

    </div>
    
    <div id="main" style="margin-right: 30px; font-size: 17px; font-family: georgia;">  
    <h2>    <?php 
    while ($row = mysqli_fetch_assoc($resultz)) {
        echo $row['menu_name'];
    }  
        
    ?> Subject</h2>
    <div>This is a single page.
        
     <!--   <?php $jews = ''; $jews = $_GET['row'];  echo $jews;  ?> -->
        
    <br><br>
        
        <a href="delete_subject.php?row=<?php echo $_GET['row']; ?>" onclick="return confirm('m jjk jjjn njasdjds');">+ Delete subject</a>
        <a href="edit_subject.php?row=<?php echo $_GET['row'];  ?>"> + Edit Subject</a>
        <br><br><br>
          <?php 
        
        $queriex = "SELECT * FROM pages WHERE subject_id = {$_GET['row']} ";

$resultx = mysqli_query($connection, $queriex);
        
        
    while ($rows = mysqli_fetch_assoc($resultx)) {
      echo "<a href='single_page.php?rows={$rows['id']}'>nbjj {$rows['menu_name']} njjnkj jnjnj hhjh</a>" . "<br>"; 
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