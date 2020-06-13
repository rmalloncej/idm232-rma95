<?php 
  //open a connection to database 
    require 'include/db.php'; 

 // preform a database search query 
    $table = 'recipes'; 
    $query = "SELECT * FROM {$table}"; 
    $result = mysqli_query($connection, $query);  

    // check for errors 

    if (!$result) {

        die (!'Databse query failed');

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
        <a class="active" href="index.html">Blue Book</a>

        <a href="help.html">Help</a> 

        <input type="text" placeholder="Search..">
    </div>

</header>

<body>  

    <?php 

    while ($row = mysqli_fetch_assoc($result)) {

        //var_dump($row); 
        

    } 

    // release the returned data 

    mysqli_free_result($result);

    // close the database connection


    mysqli_close($connection);

    ?>



    <div class="hero_image">

        <img src="images/banner.jpg" alt="">

    </div>

    <div class="filter">
        <div class="dropdown">
            <button class="dropbtn">Filters</button>
            <div class="dropdown-content">
                <a href="filter.html">Cook Time</a>
                <a href="#">Beef</a> 
                <a href="#">Chicken</a>
                <a href="#">Fish</a>
                <a href="#">Pork</a>
                <a href="#">Steak</a>
                <a href="#">Polutry</a>
                <a href="#">Vegetarian</a>

            </div>
        </div>
    </div>


    <div class="container">
        <div class="card-column">
            <article class="card">
                <a href="item.html" class="card-image" style=" background-image: url(images/fin.jpg);"></a>
                <section class="card-content">
                    <header class="card-header">
                        <p class="card-subtitle">
                            Cooking Time: 45
                        </p>
                        <h2 class="card-title">
                            <a href="item.html">Cheesy Enchiladas Rojas</a>
                        </h2>
                    </header>
                    <section class="card-body">
                        <p>Weʼre amping up chicken breasts with a glaze of smoky ancho chile paste and fresh orange juice in this recipe. On the side, roasted carrots and lightly creamy, golden raisin-studded rice perfectly accent the sweetness of the glaze.
                        </p>
                        <div class="post-footer">
                            <p class="read-more"><a href="item.html">See recipe...</a></p>
                        </div>
                    </section>
                </section>
            </article>

            <article class="card">
                <a href="item.html" class="card-image" style=" background-image: url(images/fin_a.jpg);"></a>
                <section class="card-content">
                    <header class="card-header">
                        <p class="card-subtitle">
                            Cooking Time: 45
                        </p>
                        <h2 class="card-title">
                            <a href="item.html">Beef Medallions & Mushroom Sauce</a>
                        </h2>
                    </header>
                    <section class="card-body">
                        <p>In this easy recipe, inspired by steak Diane (an American restaurant classic), weʼre searing beef medallions, then using the fond in the pan to make a rich, bright mushroom sauce for spooning on top.
                        </p>
                        <div class="post-footer">
                            <p class="read-more"><a href="item.html">See recipe...</a></p>
                        </div>
                    </section>
                </section>
            </article>

            <article class="card">
                <a href="item.html" class="card-image" style=" background-image: url(images/fin_b.jpg);"></a>
                <section class="card-content">
                    <header class="card-header">
                        <p class="card-subtitle">
                            Cooking Time: 45
                        </p>
                        <h2 class="card-title">
                            <a href="item.html">Broccoli & Basil Pesto Sandwiches</a>
                        </h2>
                    </header>
                    <section class="card-body">
                        <p>These Italian focaccia sandwiches are layered with broccoli, three cheeses, and a savory basil, cashew, and pine nut pesto, then baked in the oven to meld all the bright, aromatic flavors. 
                        <div class="post-footer">
                            <p class="read-more"><a href="item.html">See recipe...</a></p>
                        </div>
                    </section>
                </section>
            </article>

            <article class="card">
                <a href="item.html" class="card-image" style=" background-image: url(images/fin_c.jpg);"></a>
                <section class="card-content">
                    <header class="card-header">
                        <p class="card-subtitle">
                            Cooking Time: 45
                        </p>
                        <h2 class="card-title">
                            <a href="item.html">Broccoli & Mozzarella Calzones</a>
                        </h2>
                    </header>
                    <section class="card-body">
                        <p>These calzones are loaded with melty fresh mozzarella, creamy ricotta, and tender broccoli—balanced by a tangy tomato dipping sauce. For a refreshing side, weʼre tossing crunchy romaine and briny black olives in our take on Caesar dressing.

                        </p>
                        <div class="post-footer">
                            <p class="read-more"><a href="item.html">See recipe...</a></p>
                        </div>
                    </section>
                </section>
            </article>


        </div>
    </div>

</body>

</html>
