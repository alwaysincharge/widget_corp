

<?php  include("../includes/database.php"); ?>



<?php  include("../includes/header.php"); ?>


<div id="page">
    
    
    <div class="navigation" style="    float: left;
    font-family: georgia ! important;
    font-size: 17px;
    padding; 15px 9px 9px 15px;
    border: 2px solid #ddd;
    padding-left: 20px;
                                   padding-right: 20px;
    border-radius: 5px;">
    
    <p>Subjects and pages.</p>
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
    
    <div id="main" style="margin-right: 30px; font-size: 17px; font-family: georgia;"> 
        
        <a href="new_subject.php">+ Add new subject</a><br>
        <a href="new_page.php">+ Add new Page</a><br>
    <h2 style="font-family: georgia;">Manage Content</h2>
    <p></p>
    
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
