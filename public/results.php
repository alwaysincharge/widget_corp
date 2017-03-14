
<?php  include("../includes/database.php"); ?>



<?php  include("../includes/header.php"); ?>





<?php  



$keywords = "";


  // This function formats the input data. 
    function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
   }


if (isset($_GET['keywords'])) {
    
    $keywords = mysqli_real_escape_string($connection, test_input($_GET['keywords']));
    
    $query = "SELECT * FROM pages WHERE menu_name LIKE '%{$keywords}%' ";
    
    $result = mysqli_query($connection, $query);
    
    
    echo mysqli_num_rows($result);
    
     
    while ($row = mysqli_fetch_assoc($result)) {
    echo $row['menu_name'] . "<br><br>";
    }
    
    
} 















?>











<body>




<form method="get" action="results.php">




<input type="text" name="keywords" value="" />




<input type="submit" name="submit" value="submit" />



</form>









</body>









<?php  include("../includes/footer.php"); ?>
