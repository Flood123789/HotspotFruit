<?php
// Will check Database avalability

require_once('database.php');
require_once('Functions.php');
//session_start();
// if(!$_SESSION['loggedIn'])header("Location:Login.php");

session_start();

if(!$_SESSION['cart']) {$_SESSION['cart'] = array();}
$action = filter_input(INPUT_POST, 'action');
if($action === NULL){
    $action = filter_input(INPUT_GET, 'action');
    if($action === NULL){

    }
}


$get_sql_fruits = sql_fruits($db);
include('Taskbar.php') ?>
<br>

<!DOCTYPE html>
<html lang="en">
<head class='menu'>

    <link rel="stylesheet" href="styles/styles.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action='.' method="post">
<div id='allOurFruit'>
    <div class="row">
        <div class="column">
            <div class="card">
                <img src="images/banana.jpg" class="column_img">
                <div class="container">
                <input type="hidden" name="action" value="add">
                    <h2 class="title" id="banana">American Banana</h2>
                    <p class="description">An American Favorite. If you hate it, you're not normal</p>
                    <p class="price">$2.99/lb</p>
                    <p><input type="submit" class="button" value="Add to Cart" formaction="cart.php"></p>
                    <select name="itemqty">
                        <?php
                            for($x=1; $x < 10;$x++){
                                ?>
                        <option value="quantity"><?php echo $x;?></option>
                        <?php } ?>
                    </select>

                </div>
            </div>
        </div>
        

        <div class="column">
            <div class="card">
                <img src="images/honeycrisp.jpg" class="column_img">
                <div class="container">
                    <h2 class="title">Honey Crisp Apple</h2>
                    <p class="description">Literally the best apple ever bro.</p>
                    <p class="price">$2.99/lb</p>
                    <p><button class="button">Add to Cart</button> </p>
                </div>
            </div>

        </div>
    </div>

    <div class="row">
        <div class="column">
            <div class="card">
                <img src="images/dragonfruit.jpg" class="column_img">
                <div class="container">
                    <h2 class="title">Dragon Fruit</h2>
                    <p class="description">Honestly, idek why people like these</p>
                    <p class="price">$5.99/lb</p>
                    <p><button class="button">Add to Cart</button></p>
                </div>
            </div>
        </div>
        <div class="column">
            <div class="card">
                <img src="images/guava.jpg" class="column_img">
                <div class="container">
                    <h2 class="title">Guava</h2>
                    <p class="description">Unusually sweet, probably you're new favorite</p>
                    <p class="price">$1.99/lb</p>
                    <p><button class="button">Add to Cart</button></p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="column">
            <div class="card">
                <img src="images/passionfruit.jpg" class="column_img">
                <div class="container">
                    <h2 class="title">Passion Fruit</h2>
                    <p class="description">Kind of looks gross, but tastes like a kiwi and a pineapple had a baby.</p>
                    <p class="price">$24.99/lb</p>
                    <p><button class="button">Add to Cart</button> </p>
                </div>

            </div>
        </div>

        <div class="column">
            <div class="card">
                <img src="images/durian.jpg" class="column_img">
                <div class="container">
                    <h2 class="title">Durian</h2>
                    <p class="description">Tastes like diced garlic and caramel poured into whipped cream..</p>
                    <p class="price">$13.99/lb</p>
                    <p><button class="button">Add to Cart</button> </p>
                </div>
            </div>

        </div>
    </div>

    <div class="row">
        <div class="column">
            <div class="card">
                <img src="images/breadfruit.jpg" class="column_img">
                <div class="container">
                    <h2 class="title">Bread Fruit</h2>
                    <p class="description">The jackfruit's humble cousin</p>
                    <p class="price">$5.99/lb</p>
                    <p><button class="button">Add to Cart</button></p>
                </div>
            </div>
        </div>
        <div class="column">
            <div class="card">
                <img src="images/hornedmelon.jpg" class="column_img">
                <div class="container">
                    <h2 class="title">Horned Melon</h2>
                    <p class="description">Don't want to play dodge ball with these.</p>
                    <p class="price">$4.99/lb</p>
                    <p><button class="button">Add to Cart</button></p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="column">
            <div class="card">
                <img src="images/mangosteen.jpg" class="column_img">
                <div class="container">
                    <h2 class="title">Mangosteen</h2>
                    <p class="description">Kind of like a peach, strawberry, and pineapple all in one.</p>
                    <p class="price">$8.99/lb</p>
                    <p><button class="button">Add to Cart</button> </p>
                </div>

            </div>
        </div>

        <div class="column">
            <div class="card">
                <img src="images/star-fruit-facts.jpg" class="column_img">
                <div class="container">
                    <h2 class="title">Star Fruit</h2>
                    <p class="description">Literally the best apple ever bro.</p>
                    <p class="price">$6.99/lb</p>
                    <p><button class="button">Add to Cart</button> </p>
                </div>
            </div>

        </div>
    </div>

    <div class="row">
        <div class="column">
            <div class="card">
                <img src="images/acai.jpg" class="column_img">
                <div class="container">
                    <h2 class="title">Acai</h2>
                    <p class="description">The staple in every white girls favorite bowl</p>
                    <p class="price">$39.99/lb</p>
                    <p><button class="button">Add to Cart</button></p>
                </div>
            </div>
        </div>
        <div class="column">
            <div class="card">
                <img src="images/jackfruit.jpg" class="column_img">
                <div class="container">
                    <h2 class="title">Jackfruit</h2>
                    <p class="description">Like a mango and pineapple had a baby.</p>
                    <p class="price">$5.99/lb</p>
                    <p><button class="button">Add to Cart</button></p>
                </div>
            </div>
        </div>
    </div>
    </form>
                        
</div>

<span>
</body>
</html>
