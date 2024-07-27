<?php
    //arithematic operation
    $num1=20;
    $num2=30;

    $sum=$num1+$num2;
    $sub=$num1-$num2;
    $mul=$num1*$num2;
    $div=$num1/$num2;
    $mod=$num1%$num2;
    $pow=$num1**$num2;

    echo "Sum is".$sum."<br>";
    echo "Subtraction result is is".$sub."<br>";
    echo "Product is".$mul."<br>";
    echo "division result is is".$div."<br>";
    echo "mode is".$mod."<br>";
    echo "power result is".$pow."<br>";


    //comparision operator
    $val=20;
    $val2=20;
    $val3=30;
    echo ($val==$val2);
    echo ($val>$val2."<br>");
    
    // different between == and ===
    $a=10;
    $b="10";

    $answer1=($a==$b); //result true because value are same irrespective of data type
    $answer2=($a===$b);//result false see data type

    echo "Answer1 :".$answer1."<br>";
    echo "Answer2 :".$answer2."<br>";

    //logical operator
    $result=($val == $val2) && ($val2==$val3);
    echo "The result is ".$result."<br>";//here zero mean false

    $result2=($val == $val2) || ($val2==$val3);
    echo "The result is ".$result2."<br>";//here 1 mean true

    //increment decrement

    $val+=5;
    $val2++;
    $val3--;

    echo "val: ".$val. " val2: ".$val2 . " val3". $val3;

    //ternary operator
    $contition1=true;
    $condition2=false;
    //$variable = (condition) ? value_if_true : value_if_false;

    $C_result= ($condition2==$contition1) ? "True":"False";

    echo "<br>"."Result is: ".$C_result;

?>