<?php
//1
    $variable = 0;

    while ($variable <= 10){
        echo $variable . " / ";
        $variable++;
    }

    echo "<br><br>";

//2
    $variable1 = 0;
    $variable2 = 13;

    while ($variable1 <= 20){
        echo ($variable1 * $variable2) . " / ";
        $variable1++;
    }

//3
// A ne pas faire.
echo "<br><br>";

//4
   $variable3 = 1;

    while ($variable3 <= 10){
        echo $variable3 . " / ";
        $variable3= $variable3 + ($variable3/2);
    }
    echo "<br><br>";
//5
   $variable4 = 1;

    while ($variable4 <= 15){
        echo "On y arrive presque. ";
        $variable4++;
    }
    echo "<br><br>";

//6
    $variable5 = 20;

    while ($variable5 >= 0){
        echo "C'est presque bon. ";
        $variable5--;
    }
    echo "<br><br>";

//7
    $variable6 = 1;

    while ($variable6 <= 100){
        echo "On tient le bon bout. ";
        $variable6 = ($variable6 + 15);
    }
    echo "<br><br>";

//8
    $variable7 = 200;

    while ($variable7 >= 0){
        echo "Enfin!!!! ";
        $variable7 = ($variable7 - 12);
    }
    echo "<br><br>";

?>