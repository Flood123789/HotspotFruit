<?php
    // Will check Database avalability

    require_once('database.php');
    require_once('Functions.php');
    session_start();
    if(!$_SESSION['loggedIn'])header("Location:Login.php");
    $sql_fruits = sql_fruits($db);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotspot Fruit</title>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
    <script type="text/javascript" src="scripts.js"></script>
    <link rel="stylesheet" href="styles.css">
</head>

<a class="header" href="index.php"><h1>HotspotFruit</h1></a>

<body>
<div class="toggle">
    <a><i class="fa fa-bars"></i></a>
</div>
    <div class="menu">
        <ul>
            <li><a href="popular.php">Popular Picks</a></li>
            <li><a href="#tbt">Most Expensive</a></li>
            <li><a href="#tbt">Exotics</a></li>
            <li><a href="cart.php">Cart</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="Login.php">Log In</a></li>
        </ul>
    </div>

    <main>
        <?php UserLookup($sql_fruits);?>
    </main>
</body>
</html>