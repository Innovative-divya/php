<?php
   
//operators
/* 1.arithmatic operators
2. assignment operators
3. comparision operators
4. logical operators*/

    $num = 45;
    $num2 = 5;
    //arithmetic operators 
     echo $num + $num2, "<br>";
    echo $num - $num2, "<br>";
    echo $num * $num2, "<br>";
    echo $num / $num2, "<br>";
    echo $num % $num2, "<br>";
    echo $num ** $num2, "<br>";
    // assignment operators
    $x = $num;
    echo $x +=6 ;//51
    echo "<br>";
    echo $x -=6 ;//45
    echo "<br>";
    echo $x *=6 ;//270
    echo "<br>";
    echo $x /=6 ;//45
    echo "<br>";
    echo $x %=6 ;
    echo "<br>";
    //comparision operators
    echo var_dump($num == $num2),"<br>";
    echo var_dump($num <= $num2),"<br>";
    echo var_dump($num >= $num2),"<br>";
    echo var_dump($num > $num2),"<br>";
    echo var_dump($num < $num2),"<br>";
    echo var_dump($num <> $num2),"<br>";
    //logical operators
    $m=true;
    $n=false;
    echo var_dump($m && $n), "<br>";
    echo var_dump($m || $n),"<br>";
    echo var_dump(!$m),"<br>";

