<?php  
    include_once('Taskbar.php');
    // Will check Database avalability.
    require_once('database.php');
    //session_start();
    require_once('Functions.php');

   // if(!$_SESSION['loggedIn'])header("Location:Login.php");
    $prod = $db->prepare("SELECT * FROM fruitdata order by ID");
    $prod->execute();

    if(empty($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }

    $foundProd =$prod->fetchAll((PDO::FETCH_ASSOC));

    $fruits = array();
$fruits['fruit-1'] = array('Banana', 'price' => '2.99');
$fruits['fruit-2'] = array('Acai', 'price' => '39.99');
$fruits['fruit-3'] = array('Star Fruit', 'price' => '6.99');
$fruits['fruit-4'] = array('Jack Fruit', 'price' => '5.99');
$fruits['fruit-5'] = array('Dragon Fruit', 'price' => '5.99');
$fruits['fruit-6'] = array('Bread Fruit', 'price' => '4.99');
$fruits['fruit-7'] = array('Guava', 'price' => '1.99');
$fruits['fruit-8'] = array('Passion Fruit', 'price' => '24.99');
$fruits['fruit-9'] = array('Durian', 'price' => '13.99');
$fruits['fruit-10'] = array('Horned Melon', 'price' => '4.99');
$fruits['fruit-11'] = array('Mangosteen', 'price' => '8.99');
$fruits['fruit-12'] = array('HoneyCrisp Apple', 'price' => '2.99');

$action = filter_input(INPUT_POST, 'action');
if($action === NULL){
    $action = filter_input(INPUT_GET, 'action');
    if($action === Null){
        $action = 'show_add_item';
    }
}

switch($action){
    case 'add':
        $productkey = filter_input(INPUT_POST, 'productkey');
        $item_qty  = filter_input(INPUT_POST, 'itemqty');
        addItem($productkey, $item_qty);
        include('cartview.php');
        break;
    case 'update':
        $new_tqy_list = filter_input(INPUT_POST, 'newqty', FILTER_DEFAULT,
                                            FILTER_REQUIRE_ARRAY);
        foreach($new_qty_list as $key => $qty) {
        if ($_SESSION['cart'][$key]['qty'] != $qty) {
         update_item($key, $qty);
                 }
        }
        include('cart.php');
        break;
}
    ?>

    <br>

<!DOCTYPE html>
<html lang="en">
<head class='menu'>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link rel="stylesheet" type="text/css" href="styles/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</head>
<body>
    <h1>Cart</h1>
    <main>

    </main>
</body>
</html>