<?php
//count function- count number of values
$myarr=[
    ["veggies"=>"tomato","potato"],
    ["fruits"=>"apple","grapes"]
];
echo count($myarr,1);//return 6
//count function with loop
$food=['orange','banana','apple','grapes'];
$len= sizeof($food);
for ($i=0;$i<$len;$i++){
    echo $food[$i]."<br>";

}
//array_count_value-> no of time one value occurs
$food=['orange','banana','orange','grapes'];
echo "<pre>";
print_r (array_count_values($food));
echo "</pre>";

// in_array- return true or false
$food=['Orange','banana','Orange','grapes'];
echo in_array("orange",$food);
if(in_array("orange",$food,true)){
    echo "Found successfully";
} 
else{
    echo "Cannot found";
}
$food=[
    ["orange","grapes"],
    ["red","blue"]
];
if(in_array(["red","blue"],$food)){
    echo "Found successfully";
} 
else{
    echo "Cannot found";
}

//array_search()- return key or index
$food=["one"=>'orange',"two"=>'banana',"three"=>'Orange',"four"=>'grapes'];
echo array_search("orange",$food);

//array_replace() 
$food=['Orange','banana','Orange','grapes'];
$color=["red","blue","green"];
$newarray= array_replace($food,$color);
echo "<pre>";
print_r($newarray);
echo "</pre>";

//puch() and pop()
$food=['Orange','banana','Orange','grapes'];
array_pop($food);
array_pop($food);
echo "<pre>";
print_r($food);
echo "</pre>";


//array_shift() ans array_unshift()
$food=['Orange','banana','Orange','grapes'];
array_shift($food);
echo "<pre>";
print_r($food);
echo "</pre>";

array_unshift($food,"apple");
echo "<pre>";
print_r($food);
echo "</pre>";





?>