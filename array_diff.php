<?php
//diff functions:
//array_diff-- when vlues are different
$a1=["a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow"];
$a2=["a"=>"red","f"=>"green","d"=>"purple"];
$newarray= array_diff($a1,$a2);
echo "<pre>";
print_r($newarray);
echo "</pre>";

//array_diff_key-- when key different
$a1=["a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow"];
$a2=["a"=>"red","f"=>"green","d"=>"purple"];
$newarray= array_diff_key($a1,$a2);
echo "<pre>";
print_r($newarray);
echo "</pre>";

//array_diff_assoc-- when key and values both arre different
$a1=["a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow"];
$a2=["a"=>"red","f"=>"green","d"=>"purple"];
$newarray= array_diff_assoc($a1,$a2);
echo "<pre>";
print_r($newarray);
echo "</pre>";

//array_diff_uassoc-- compre value and key as per user defined unction
function compare($a,$b){
    if($a===$b){
        return 0;
    }return($a>$b)? 1: -1;
}
$a1=["a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow"];
$a2=["a"=>"red","f"=>"green","d"=>"purple"];
$newarray= array_diff_uassoc($a1,$a2,"compare");
echo "<pre>";
print_r($newarray);
echo "</pre>";

//array_diff_ukey-- compare keys as per user defined function
function compare1($a,$b){
    if($a===$b){
        return 0;
    }return($a>$b)? 1: -1;
}
$a1=["a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow"];
$a2=["a"=>"red","f"=>"green","d"=>"purple"];
$newarray= array_diff_ukey($a1,$a2,"compare1");
echo "<pre>";
print_r($newarray);
echo "</pre>";

//array_udiff_assoc OR array_udiff--compare values as per user defined function
function compare2($a,$b){
    if($a===$b){
        return 0;
    }return($a>$b)? 1: -1;
}
$a1=["a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow"];
$a2=["a"=>"red","f"=>"green","d"=>"purple"];
$newarray= array_udiff($a1,$a2,"compare2");
echo "<pre>";
print_r($newarray);
echo "</pre>";

//array_udiff_uassoc-- compare both value and keys as per user defined function
function comparevalue($a,$b){
    if($a===$b){
        return 0;
    }return($a>$b)? 1: -1;
}
function comparekey($a,$b){
    if($a===$b){
        return 0;
    }return($a>$b)? 1: -1;
}
$a1=["a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow"];
$a2=["a"=>"red","f"=>"green","d"=>"purple"];
$newarray= array_udiff_uassoc($a1,$a2,"comparevalue","comparekey");
echo "<pre>";
print_r($newarray);
echo "</pre>";



?>