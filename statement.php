<?php
//continue and break
for($i=1;$i<=10;$i++){
    if($i==3){
        continue;
    }
    echo $i,"<br>";
}
for($j=1;$j<=10;$j++){
    if($j==3){
        break;
    }
    echo $i,"<br>";
}
//go to statement
for($k=1;$k<=10;$k++){
    if($k==4){
        goto abc;
    }
    echo $k,"<br>";
}
abc:
echo "this is new code";