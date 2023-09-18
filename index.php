<?php
//:::::::::::::::::::Task 1: Looping with Increment using a Function:::::::::::::::::::::::::::::
echo "<h2>Task One</h2>";
function even($input){
    for($i=1; $i<=$input; $i++){
        if($i%2 == 0){
            echo $i."\n";
        }
    };
}
even(20);
echo "\n";
echo "<br/>";
//while loop
$i=1;
while($i<=20){
    if($i%2==0){
        echo $i."\n";
        
    }
    $i++; 
}
echo "\n";
echo "<br/>";

//do while loop
$m=1;
do{
    if($m%2==0){
        echo $m."\n";
    }
    $m++;
}while($m<=20);





echo "<br/> <br/>";
//::::::::::::::::::::::::::::Task 2:  Skip Multiples of 5:::::::::::::::::::::::::::::
echo "<h2>Task Two</h2>";
for($num=1; $num<=50; $num++){
    if($num%5===0){
        continue;
    }
    echo $num."<br/> \n";
}
echo "<br/>";




//Task: 3 Task 3: Break on Condition (Fibonacchi)
echo "<h2>Task Three</h2>";
/**
 * 0 1
 * 0(first)+1(second) =1(next), 1+1 =2  2+1=3
 * 0 1 1 2 3 5 8 
 * 
 */
$firstNumber = 0;
$secondNumber = 1;

for($i=1; $i<=10; $i++){
    $next = $firstNumber + $secondNumber;
    
    if($next > 100){
        break;
    }
    echo $next."<br/>";
    $firstNumber = $secondNumber;
    $secondNumber = $next;
}
echo "<br/>";





//Task 4 
echo "<h2>Task Four</h2>";
function FibonacciSeries($numCount) {
    if ($numCount <= 0) {
        return;
    }

    $first = 0;
    $second = 1;

    for ($i = 1; $i <= $numCount; $i++) {
        echo $first . " ";
        $next = $first + $second;
        // Update 
        $first = $second;
        $second = $next;
    }
}
FibonacciSeries(15);
?>


