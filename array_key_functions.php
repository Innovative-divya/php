<?php
//array_keys()--return keys of associative array
$array=["first","second","third"];
$new= array_keys($array);
echo "<pre>";
print_r($new);
echo "</pre>";

$array=["car"=>"first","color"=>"second","length"=>"third"];
$new= array_keys($array);
echo "<pre>";
print_r($new);
echo "</pre>";

//array_key_first()
$array=["first","second","third"];
$new= array_key_first($array);
echo "<pre>";
print_r($new);
echo "</pre>";

$array=["car"=>"first","color"=>"second","length"=>"third"];
$new= array_key_first($array);
echo "<pre>";
print_r($new);
echo "</pre>";


//array_key_last()
$array=["first","second","third"];
$new= array_key_last($array);
echo "<pre>";
print_r($new);
echo "</pre>";

$array=["car"=>"first","color"=>"second","length"=>"third"];
$new= array_key_last($array);
echo "<pre>";
print_r($new);
echo "</pre>";

//array_key_exist()-search for key return frue or false
/*$array=["first","second","third"];
$new= array_key_exist(1,$array);
echo "<pre>";
print_r($new);
echo "</pre>";*/

$array=["car"=>"first","color"=>"second","length"=>"third"];
$new=array_key_exists("pen",$array);
if ($new){
    echo "key exist";
}else {
    echo "not exist";
}
echo "<pre>";
print_r($new);
echo "</pre>";

//key_exist()
$array=["car"=>"first","color"=>"second","length"=>"third"];
$new=key_exists("pen",$array);
if ($new){
    echo "key exist";
}else {
    echo "not exist";
}
echo "<pre>";
print_r($new);
echo "</pre>";



?>