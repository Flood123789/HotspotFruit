<?php
    // Will check Database avalability.
    require_once('database.php');
    require_once('Functions.php');
    session_start();
    if(!$_SESSION['loggedIn'])header("Location:Login.php");

    if(isset($_POST["submit"])){
      if(empty($_POST["fruitID"]) || empty($_POST["fruitName"]) || empty($_POST["fruitOrigin"]) || empty($_POST["fruitOrganic"]) || empty($_POST["fruitPrice"]))
      {
          $errorMsg = '<p style="color: red; font-size: 24pt;"> ERROR: All fields cannot be blank </p>';
      }
      else{
        $id = $_POST['fruitID'];
        $name = $_POST['fruitName'];
        $Orgin = $_POST['fruitOrigin'];
        $organ = $_POST['fruitOrganic'];
        $price = $_POST['fruitPrice'];
        AddToDb($id,$name,$price,$Orgin,$organ,$db);
      }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Admin Editor</title>
    
</head>
<body>
    <main>
      <?php
        //prints table 
        $Fulltable = sql_fruits($db);
        Adminlookup($Fulltable);
      ?>
    </main>
    <p>
      <form action="" method="post">
          <br>
          <br>
          <h2> Add Item to List</h2>
          <br>
          <br>
          <label>Fruit ID: </label><input type="number" name="fruitID">
          <br>
          <label>Fruit Name: </label><input type="text" name="fruitName">
          <br> 
          <label>Fruit Origin: </label><input type="text" name="fruitOrigin">
          <br>
          <label>Fruit Organic: </label><input type="text" name="fruitOrganic">
          <br>
          <label>Fruit Price: </label><input type="text" name="fruitPrice">
          <br>        
          <br>
          <input type='submit' name='submit' value="ADD">
      </form>
    </p>

      
</body>
</html>