
<?php  include("../includes/database.php"); ?>



<?php  include("../includes/header.php"); ?>



<?php

if (!isset($_SESSION['admin_id'])) {
    $_SESSION['realredirect'] = $_SERVER['REQUEST_URI'];
    

 redirect_to("login.php"); 
}



?>



<?php 



if (isset($_POST['btn_upload']) )  {
 
    $filetmp = $_FILES['file_img']['tmp_name'];
    
    
    $filename = $_FILES['file_img']['name'];
    
    $filetype = $_FILES['file_img']['type'];
    
    
    $filepath = "photo/" .(time() + 679) .$filename; 
    
        $filetmps = $_FILES['file_imgs']['tmp_name'];
    
    
    $filenames = $_FILES['file_imgs']['name'];
    
    $filetypes = $_FILES['file_imgs']['type'];
        
                $filepaths = "photo/" .time() .$filenames; 
      
    
 
    
    
    
    
    if (!($_FILES["file_img"]["size"] < 3000000) || !($_FILES["file_imgs"]["size"] < 3000000)) {
    echo "Sorry, your file is too large.";
    
} else  {
        
    
    if(($filetype != "image/jpg" && $filetype != "image/png" && $filetype != "image/jpeg"
&& $filetype != "image/gif") || ( $filetypes != "image/jpg" && $filetypes != "image/png" && $filetypes != "image/jpeg"
&& $filetypes != "image/gif" ) ) {
    
    echo "jjjkkjnjk"; }  else {
        
        
        
    move_uploaded_file($filetmp, $filepath);
    move_uploaded_file($filetmps, $filepaths);
    
    
   
         
         
         
    $sql = "INSERT INTO upload_img (img_name, img_path, img_type, imgs_name, imgs_path, imgs_type) VALUES ('$filename', '$filepath', '$filetype', '$filenames', '$filepaths', '$filetypes')";
    
    $resultupload = mysqli_query($connection, $sql);
    
    redirect_to("manage_content.php");
     
    }
    
    
    
    
    
    
    
    
    
    
    
}
}



?>












<body>






<form action="upload.php" method="post" enctype="multipart/form-data">
    
            <?php  
        
        
        if (isset($_SESSION['messages'])) {
          echo  $_SESSION['messages'];
            
            $_SESSION['messages'] = null;
        }
   
        
        ?>
    
   <input type="file" name="file_img"  required/> 
       <input type="file" name="file_imgs"  required/> 
   <input type="submit" name="btn_upload" value="Upload"  />  
    
    
    
    
    
</form>



    
    
    
    
    
    
    <?php 
    
    
    
    
    $query = "SELECT * FROM upload_img";
    $resultreturn = mysqli_query($connection, $query);  ?>
    
    
    <?php
    while ($rowg = mysqli_fetch_assoc($resultreturn)) {
        
        echo "<img style='width: 400px;  border-radius: 5px;' src='{$rowg['img_path']}'>" . "<br><br><br>" ;
        echo "<img style='width: 400px;  border-radius: 5px;' src='{$rowg['imgs_path']}'>" . "<br><br><br>" ;
        echo "There is a break here.";
    }
    
    
    
    ?>
</body>























<?php  include("../includes/footer.php"); ?>

