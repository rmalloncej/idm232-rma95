<?php 
  //open a connection to database 
    require 'include/db.php'; 



$filter = $_GET['filter']; 

     
 

  if (isset($_POST['submit'])) { 

     $table = 'recipes'; 

    $search = $_POST['search'];  
 
    $query = "SELECT * FROM {$table} WHERE title LIKE '%{$search}%' OR subtitle LIKE '%{$search}%'";  

    $result = mysqli_query($connection, $query);  



    if (!$result) {

        die ('search query failed');

    }  

} else if (isset($filter)) {  

    $table = 'recipes';  

    $query = "SELECT * FROM {$table} WHERE protein LIKE '%{$filter}%'"; 
     $result = mysqli_query($connection, $query); 
     if (!$result) {

        die ('filter query failed');

    }  

    }else {
  

 



    
 // preform a database search query 
    $table = 'recipes'; 
    $query = "SELECT * FROM {$table}"; 
    $result = mysqli_query($connection, $query);  

    // check for errors 

    if (!$result) {

        die ('Databse query failed');

    } 
}

    ?>




<!DOCTYPE html>
<html>

<head>
    <title>Untitled Document</title>
    <meta charset="UTF-8">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header>
        <div class="topnav">
            <a class="active" href="index.php">Blue Book</a>
            <a href="help.php">Help</a> 

            <form action="index.php" method="POST"> 

        
        <input type="text" placeholder="Search.." name="search" value="search">  
        <input id="subm_B" type="submit" name="submit" value="Submit"> 
    </form>
        </div>

    </header>

    <h2>Help</h2>

    <div class="h_buttons">

        <h3 class="help">Conatct</h3>

        <h3 class="help">About Us</h3>

        <h3 class="help">Billing</h3>

        <h3 class="help">Recipe Selection</h3>

        <h3 class="help">Quality Complaint</h3>

    </div>



</body>

</html>
