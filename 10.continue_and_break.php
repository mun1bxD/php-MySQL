<?php
//using continue to to print odd number
echo "ODD NUMBERS: ";
$num=30;
for($i=0;$i<=$num;$i++){
    if($i%2==0){
        continue;
    }
    echo $i." ";
}

//program break if numbber divide by 10  come
    $num2=10;
    $index=0;
    for($j=1;$j<50;$j++){
        if($j%$num2==0){
            $index=$j;
            break;
        }
        
    }
echo "The index add which program break is ".$index."<br>";
?>
