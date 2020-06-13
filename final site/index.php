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

<body>  

    
    <div class="hero_image">

        <img src="images/banner.jpg" alt="">

    </div>

    <div class="filter">
        <div class="dropdown">
            <button class="dropbtn">Filters</button>
            <div class="dropdown-content">
                <a href="index.php?filter=Beef">Beef</a> 
                <a href="index.php?filter=Chicken">Chicken</a>
                <a href="ndex.php?filter=Fish">Fish</a>
                <a href="ndex.php?filter=Pork">Pork</a>
                <a href="ndex.php?filter=Steak">Steak</a>
                <a href="ndex.php?filter=Polutry">Polutry</a>
                <a href="ndex.php?filter=Vegetarian">Vegetarian</a>

            </div>
        </div>
    </div>  

    <?php 

    if (isset($_POST['submit'])) {  

        if ($result->num_rows == 0) {

            echo "<h2>No Found Recipies</h2> ";

       }else{     
   
        echo "<h2>Found Recipies</h2> ";
    }
    }else if (isset($filter)) {
       echo "<h2>Filtered Recipies</h2>";  
    
    } else {  
        echo "<h2>All Recipies</h2>";
    } 


    ?> 

    


 <div class="container">
        <div class="card-column">


    <?php 

    while ($row = mysqli_fetch_assoc($result)) {  
    ?> 


    <article class="card"> 
        
                <a href="#" class="card-image" style=" background-image: url(images/<?php echo $row{'main_img'} ?>);"></a>
                <section class="card-content">
                    <header class="card-header">
                        <p class="card-subtitle">
                            Cooking Time: <?php echo $row{'cook_time'}; ?>
                        </p>
                        <h2 class="card-title">

                           <?php $id = $row['id']; echo "<a href=\"recipe.php?id={$id}\">"?>
                                <?php echo $row{'title'}; ?>
                            </a>
                        </h2>
                    </header>
                    <section class="card-body">
                        <p>
                            <?php echo $row{'description'}; ?>
                        </p>
                        <div class="post-footer">
                            <p class="read-more"><?php $id = $row['id']; echo "<a href=\"recipe.php?id={$id}\">See recipe...</a>"?></p>
                        </div>
                    </section>
                </section>
            </article>
     

        <?php 

    } // end of php while loop

    // release the returned data 

    mysqli_free_result($result);

    // close the database connection


    mysqli_close($connection);

    ?>






   
            </div> 
    </div>
                   


</body>

</html>
