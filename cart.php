<?php
    // Will check Database avalability.
    require_once('database.php');
    require_once('Functions.php');
    session_start();

    if(!$_SESSION['loggedIn'])header("Location:Login.php");
    $prod = $db->prepare("SELECT * FROM fruitdata order by ID");
    $prod->execute();

    $foundProd =$prod->fetchAll((PDO::FETCH_ASSOC));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</head>
<body>
    <div class='products'> 
        <?php foreach ($foundProd as $Product):?>
            <span class="name"><?=$product['Name']?></span>
            <span class="price">
                &dollar;<?=$product['Price/Lb']?>
            </span>
    </div>
    <main>
        <?php UserLookup($sql_fruits);?>
    </main>
</body>
</html>