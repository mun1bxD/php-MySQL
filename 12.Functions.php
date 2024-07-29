<?php
//calculating add;
    function add($num1,$num2){
        return $num1+$num2;
    }

    echo "Result is: ".add(2,3)."<br>";

//making Calculator
function sub($num1,$num2){
    return $num1+$num2;
}
function mul($num1,$num2){
    return $num1+$num2;
}
function div($num1,$num2){
    return $num1+$num2;
}
$option="+";

echo "Selected option".$option."<br>";

switch($option){
    case "+":
        echo "Addition:".add(3,4);
        break;
    case "-":
        echo "Substraction".sub(3,4);
        break;
    case "/":
        echo "Division".div(3,4);
        break;
    case "*":
        echo "Product".mul(3,4);
        break;
    default:
        echo "Enter correct option";
}

//recursive function
function Calculate_Factorial($num3){
    if($num3<=1){
        return 1;
    }
    else{
        return $num3*Calculate_Factorial($num3-1);
    }
}
$number=5;
echo "Factorial of {$number} is ".Calculate_Factorial($number);

?>
