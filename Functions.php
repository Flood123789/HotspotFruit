<?php

function sql_fruits($db){
    $callTable = "SELECT * FROM fruitdata 
    ORDER BY ID";
    $Fulltable = $db->query($callTable);

    return $Fulltable;
}

function Login($db, $uname, $pass){
 
}


//prints user view of fruit table
function UserLookup($Fulltable){
    echo "<table class='center'>";
            echo "<tr>";
                echo "<th>Fruit</th>";
                echo "<th>Origin</th>";
                echo "<th>Organic</th>";
                echo "<th>Price per pound</th>";                    
            echo "</tr>";
        while($row = $Fulltable->fetch()){
            echo "<tr>";
                echo "<td>" . $row['Name'] . "</td>";
                echo "<td>" . $row['Origin'] . "</td>";
                echo "<td>" . $row['Organic'] . "</td>";
                echo "<td>" . $row['Price/Lb'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
}


//prints admin view of fruit table
function Adminlookup($Fulltable){
    echo "<table class='center'>";
            echo "<tr>";
                echo "<th>Fruit</th>";
                echo "<th>Origin</th>";
                echo "<th>Organic</th>";
                echo "<th>Price per pound</th>";
                echo "<th>ID</th>";                   
            echo "</tr>";
        while($row = $Fulltable->fetch()){
            echo "<tr>";
                echo "<td>" . $row['Name'] . "</td>";
                echo "<td>" . $row['Origin'] . "</td>";
                echo "<td>" . $row['Organic'] . "</td>";
                echo "<td>" . $row['Price/Lb'] . "</td>";
                echo "<td>" . $row['ID'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    }


function AddToDb($id,$name,$price,$Orgin,$organ,$db){
    
    try{
        $ID = intval($id);
        $Name = strval($name);
        $Price = intval($price);
        $origin = strval($Orgin);
        $Organ = strval($organ);
        $insert = "INSERT INTO `fruitdata` (`ID`, `Name`, `Price/Lb`, `Origin`, `Organic`) 
            VALUES('$ID', '$Name', '$Price', '$origin', '$Organ')";

            $db->exec($insert);
    }catch(Exception $e){
        print($e);
        print('<br>');
        print("$insert");

    }
    
}

?>