<?php
//function without parameters
function abc(){
    echo "hello";
}
abc();
echo "<br>";

//function with parameters
function add($a,$b){
    echo $a+$b;
}
add(10,25);
echo "<br>";
add(2,3);
echo "<br>";
//function with return value
function sum($a,$b,$c){
    $sum=$a+$b+$c;
    return $sum;
}
function percentage($x){
    $p=$x/3;
    echo $p."%";
}
$total=sum(5,10,30);
percentage($total);
echo "<br>";

// passing argument by value
function first($num){
    $num+=5;
};
//passing argument by reference
function second (&$num){
    $num+=5;
};
$number=5;
first($number);
echo $number;
echo "<br>";
second($number);
echo $number;
echo "<br>";

//variable function
function wow($name){
    echo "hello $name";
}
$func="wow";
$func("sneha");
echo "<br>";
//recursive function
function display($num){
    if($num<=5){
        echo "$num <br>";
        display($num+1);
    }
}
display(1);
echo "<br>";

// factorial of a number
function factorial($n){
    if($n==0){
        return 1;
    }
    else{
        return ($n*factorial($n-1));
    }
}
echo "factorial of number ";
echo factorial(5);


?>