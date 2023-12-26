


<?php
/*sort() - sort arrays in ascending order
rsort() - sort arrays in descending order
asort() - sort associative arrays in ascending order, according to the value
ksort() - sort associative arrays in ascending order, according to the key
arsort() - sort associative arrays in descending order, according to the value
krsort() - sort associative arrays in descending order, according to the key*/

$cars= ["volvo","BMW","Toyota"];
sort($cars);
echo "<pre>";
var_dump ($cars);
echo "</pre>";
echo "<br>";

$cars= ["volvo","BMW","Toyota"];
rsort($cars);
echo "<pre>";
var_dump ($cars);
echo "</pre>";
echo "<br>";

$age= ["peter"=> "50", "ben"=> "47", "joe"=>"43"];
asort($age);
echo "<pre>";
var_dump ($age);
echo "</pre>";
echo "<br>";

$age= ["divya"=> "50", "ben"=> "47", "joe"=>"43"];
ksort($age);
echo "<pre>";
var_dump ($age);
echo "</pre>";
echo "<br>";

$age= ["divya"=> "50", "ben"=> "47", "joe"=>"43"];
arsort($age);
echo "<pre>";
var_dump ($age);
echo "</pre>";
echo "<br>";

$age= ["divya"=> "50", "ben"=> "47", "joe"=>"43"];
krsort($age);
echo "<pre>";
var_dump ($age);
echo "</pre>";
echo "<br>";
?>