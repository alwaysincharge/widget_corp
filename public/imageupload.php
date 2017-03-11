
<?php  include("../includes/database.php"); ?>



<?php  include("../includes/header.php"); ?>





<?php 


$menu_name = $image = "";



    function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
   }





    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        if (empty($_POST["menu_name"]) )   {
            redirect_to("imageupload.php");
        } else {
            
            $target = "image/" .basename($_FILES['image']['name']);
            $image = $_FILES['image']['name'];
            $menu_name = test_input($_POST["menu_name"]);
            

            
            
    $query = "INSERT INTO images (menu_name, image) VALUES ( '{$menu_name}',  '{$image}' )";
    
    $submittedadmins = mysqli_query($connection, $query);
            
            
            if( move_uploaded_file($_FILES['name']['tmp_name'], $target))  {
                echo "knkjkkljlkj";
            }
    
  
           redirect_to("imageupload.php"); 
            


        }

    }

?>









<body>




<form method="post" action="imageupload.php">

<input type="file" name="image" value="" />


<input type="text" name="menu_name" value="" />




<input type="submit" name="submit" value="submit" />



</form>





</body>









<?php  include("../includes/footer.php"); ?>

