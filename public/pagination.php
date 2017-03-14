
<?php  include("../includes/database.php"); ?>



<?php  include("../includes/header.php"); ?>

<?php $results_per_page = 2;  ?>







<body>




<?php 
    
    
    $query = "SELECT * FROM subjects";
    $subrow = mysqli_query($connection, $query);
    echo $number_of_results = mysqli_num_rows($subrow);
    echo "<br><br>";
    echo $number_of_pages = ceil($number_of_results/$results_per_page) . "<br><br>";
    
    
    
    if (!isset($_GET['page'])) {
        $page = 1;
    } else {
        $page = $_GET['page'];
    }
    
   $first_result = ($page - 1) * $results_per_page;
    $query = "SELECT * FROM subjects LIMIT {$first_result}, {$results_per_page}";
    $subrows = mysqli_query($connection, $query); 
    
      while ($row = mysqli_fetch_assoc($subrows)) {
    echo "<br><br>" . $row['menu_name'] . "<br><br>";
    }
    
    
    
    
    
    
    
   
    
    
    for ($page = 1; $page <= $number_of_pages; $page++) {
        echo "<a href='pagination.php?page={$page}'>" . $page . "</a><br><br>";
    }
    ?>










</body>



















<?php  include("../includes/footer.php"); ?>
