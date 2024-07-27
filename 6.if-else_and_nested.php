<?php
$x=20;
$y=40;

if($x==$y){
    echo "Values are equal"."<br>";
}
else{
    echo "Value are not equal"."<br>";
}

//showing rage of value
$num1=20;

if($num1<10){
    echo "value is less then 10";
}
elseif ($num1 >10 && $num1 <20){
    echo "value is between 10 and 20";
}
else{
    echo "Value is out range";
}

//nested if else
$age =25;
$is_student =true;

if ($age >=18) {
    if ($is_student) 
    {
        echo "You are a student and over 18 years old.";
    } 
    else{
        echo "You are not a student, but you are over 18 years old.";
    }
} 
else {
    echo "You are under 18 years old.";
}
?>