<?php
//array_intersect-- common value
$a1=["a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow"];
$a2=["a"=>"red","f"=>"green","d"=>"purple"];
$newarray=array_intersect($a1,$a2);
echo "<pre>";
print_r($newarray);
echo "</pre>";
//array_intersect_key
$a1=["a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow"];
$a2=["a"=>"red","f"=>"green","d"=>"purple"];
$newarray=array_intersect_key($a1,$a2);
echo "<pre>";
print_r($newarray);
echo "</pre>";
//array_intersect_assoc
$a1=["a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow"];
$a2=["a"=>"red","f"=>"green","d"=>"purple"];
$newarray=array_intersect_assoc($a1,$a2);
echo "<pre>";
print_r($newarray);
echo "</pre>";

//array_intersect_uassoc
function compare($a,$b){
    if($a===$b){
        return 0;
    }return($a>$b)? 1:-1;//1=a>b, -1=a<b
}
$a1=["a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow"];
$a2=["a"=>"red","f"=>"green","d"=>"purple"];
$newarray=array_intersect_uassoc($a1,$a2,"compare");
echo "<pre>";
print_r($newarray);
echo "</pre>";
//array_intersect_ukey--common keys
function compare2($a,$b){
    if($a===$b){
        return 0;
    }return($a>$b)? 1:-1;//1=a>b, -1=a<b
}
$a1=["a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow"];
$a2=["a"=>"red","f"=>"green","d"=>"purple"];
$newarray=array_intersect_ukey($a1,$a2,"compare2");
echo "<pre>";
print_r($newarray);
echo "</pre>";
//array_uintersect-- array with common values
function compare3($a,$b){
    if($a===$b){
        return 0;
    }return($a>$b)? 1:-1;//1=a>b, -1=a<b
}
$a1=["a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow"];
$a2=["a"=>"red","f"=>"green","d"=>"purple"];
$newarray=array_uintersect($a1,$a2,"compare3");
echo "<pre>";
print_r($newarray);
echo "</pre>";
//array_uintersect_assoc
function compare4($a,$b){
    if($a===$b){
        return 0;
    }return($a>$b)? 1:-1;//1=a>b, -1=a<b
}
$a1=["a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow"];
$a2=["a"=>"red","f"=>"green","d"=>"purple"];
$newarray=array_uintersect_assoc($a1,$a2,"compare3");
echo "<pre>";
print_r($newarray);
echo "</pre>";

//array_uintersect_uassoc
function comparekeys($a,$b){
    if($a===$b){
        return 0;
    }return($a>$b)? 1:-1;//1=a>b, -1=a<b
}
function comparevalues($a,$b){
    if($a===$b){
        return 0;
    }return($a>$b)? 1:-1;//1=a>b, -1=a<b
}
$a1=["a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow"];
$a2=["a"=>"red","f"=>"green","d"=>"purple"];
$newarray=array_uintersect_uassoc($a1,$a2,"comparekeys","comparevalues");
echo "<pre>";
print_r($newarray);
echo "</pre>";



?>