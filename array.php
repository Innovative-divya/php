<?php
//index array
    $color=array("red","blue","green");
    echo $color[0], br>";
    echo $color[1], "<br>";
    echo $color[2], "<br>"<";
    echo "<pre>";
    print_r($color);
    echo "</pre>";
    $color=["red","blue","green","yellow"];
    echo $color[0], "<br>";
    echo $color[1], "<br>";
    echo $color[2], "<br>";
    echo "<pre>";
    print_r($color);
    echo "</pre>";

    //array using loop
    $color=array("red",2,"blue",1.5);
    for($i=0;$i<4;$i++){
        echo $color[$i], "<br>";
    };
    //associative array
    $a= ["color1"=>"red",
        "color2"=>"blue",
        "color3"=>"green"];
        echo "<pre>";
        print_r($a);
        echo "</pre>";
    
// for each loop
foreach($color as $value){
    echo $value."<br>";
}
foreach($a as $key=>$value){
    echo $value."<br>";
}
// multidimensional array of given record
// emp no, name, designation, salary
// 1, krishna, manager, 500000
// 2,salman, salesman, 20000
// 3, mohan, computer operator, 120000
// 4, arir, driver,5000

$emp=[
    [1,"krishna","manager",500000],
    [2,"salman","salesman",20000],
    [3,"mohan","computer operator",12000],
    [4,"arir","driver",5000]
];
echo "<table border='2px' cellpadding='5px' cellspacing= '0'>";
echo "<tr>
    <th>emplyee number</th>
    <th>emplyee name</th>
    <th>designation</th>
    <th>salary</th>
</tr>";

foreach($emp as $value1){
    echo "<tr>";
    foreach($value1 as $value2){
        echo "<td> $value2 </td>";
    }
}echo "</tr>";
echo "</table>";
//mixed array key
$myarr= [];
$myarr[0]="apple";
$myarr[1]="banana";
$myarr["fruit"]="grapes";
var_dump($myarr);
// array with function
function myfunction(){
    echo "hello";
}
$myarr=["world",myfunction()];
$myarr[1];*/
function myfunction(){
    echo "hello";
}
$myarr=["car"=>"volvo","age"=>15,"message"=> myfunction()];
$myarr["message"];

$cars= [
    ["volvo",22,18],
    ["BMW",15,13],
    ["Saab",5,2],
    ["land rover", 17,15]
];

echo "<table border='2px' cell-padding='5px' cell-spacing='0' >";
for($row=0;$row<4;$row++){
    echo "<tr>";
    //echo "row number $row";
    for($col=0;$col<3;$col++){
        echo "<td>".$cars[$row][$col]."</td>";
    }
    echo "</tr>";
}
echo "</table>";

echo "<table border='2px' cell-padding='5px' cell-spacing='0' >";
foreach($cars as list($name,$stock,$sale)){
    echo "<tr><td>$name</td> <td> $stock</td> <td>$sale</td></tr>";
}
echo "</table>";







?>