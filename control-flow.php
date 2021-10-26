<?php

$var = 20;
// If-else block
if($var < 20){
    echo "Inside the if block";
}else{
    echo "Inside the else flow";
}
echo "</br>";
// If-elseif-else block
if($var < 20){
    echo "Inside the if block";
}elseif($var == 20){
    echo "Inside the elseif flow";
}else{
    echo "Inside the else flow";
}

echo "</br>";

// Check the given number is either divisible by 2 or 5 or both
$number = 10;
if($number%2 == 0  or $number%5 == 0 or ($number%2 == 0 and $number%5 == 0)){
    echo "Given number " . $number . " is divisible";
}else{
    echo "Given number " . $number . " is not divisible";
}
echo "</br>";
//Switch
$level = 2;
switch($level){
    case 1: echo "This is first level </br>" ;
            break;
    case 2: echo "This is second level </br>";
            break;
    default : echo "This is default level";
}
echo "<br>while loop </br>";
//  While loop
$while_loop_var = 5;
while($while_loop_var >= 0){
    echo "Variable value is: " . $while_loop_var . "</br>";
    $while_loop_var -= 1;
}

echo "<br>do-while loop </br>";
// do while loop
$do_while_loop_var = 5;
do{
    echo "Variable value is: " . $do_while_loop_var . "</br>";
    $do_while_loop_var -=1;
}while($do_while_loop_var >= 0);

# for loop
echo "<br>for loop </br>";
for($for_loop_var = 0; $for_loop_var <=3; $for_loop_var++){
    echo "Value of variable : " . $for_loop_var . "</br>";
}

?>
