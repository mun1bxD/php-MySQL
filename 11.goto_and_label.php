<?php
$count=0;
label:
    echo "This is label1 <br>";
    $count++;

if($count<3){
goto label;
}
//if we not use count it is print infinitely

//using loop with  goto

$arr=["apple","banana","orange","pineapple","graps"];

for($i=0;$i<5;$i++){
    if($arr[$i]=="orange"){
        $orange=$arr[$i];
        goto fruit;
        break;
    }
}

fruit:
  echo "fruit is {$orange}";
?>
