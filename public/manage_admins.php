

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
    
            
            
            
            
            
            
            

    
    <div id="main" style="margin-right: 30px; font-size: 17px; font-family: georgia;"> 
        
        <a href="create_admin.php">+ New Admin</a><br>

    <h2 style="font-family: georgia;">Manage Content</h2>
    <p></p>
    
    <ul>
   
        
        
        
        

        
        
        
        
    <li><a href="manage_content.php">Manage Website</a></li>
    
    <li><a href="">n</a></li>
    
    <li><a href="">Logout</a></li>
    </ul></div>
  
    
        
        
        
        
        
        
        
        
        
        <ul>
            
            <a href="/">
            <?php 
            $query = "SELECT * FROM admins";
            
            $adminlist = mysqli_query($connection, $query);
            
                while ($adminli = mysqli_fetch_assoc($adminlist)) {
                    echo "<li>" . $adminli['username'] . "<a href='edit_admin.php?adminli={$adminli['id']}'>Edit</a><a href='delete_admin.php?adminli={$adminli['id']}'>delete</a></li> ";
                }
            
            
            ?>
           </a>
        
        
        
        
        
        
        
        
        </ul>
</div>


<?php  include("../includes/footer.php"); ?>
