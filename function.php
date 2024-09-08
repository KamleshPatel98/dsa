<?php
    //user defined function
    // function test(){
    //     echo "hello world!";
    // }
    // test();

    //parameter 
    // function factorial($num){
    //     $fact = 1;
    //     for($i=1; $i<=$num; $i++){
    //         $fact *= $i;
    //     } 
    //     return $fact;
    // }
    // factorial(4);

    //Defauolt Value
    // function test1($num=34){
    //     return $num;
    // }
    // echo test1(24);
    // echo test1();

    //return value 
    // function sumOfNumber($num1,$num2){
    //     $num = $num1 + $num2;
    //     return $num;
    // }
    // echo sumOfNumber(3,4);

    //Pass by value
    // function valueChange($x){
    //     return $x=34;
    // }
    // $x=245;
    // echo $x;
    // echo valueChange($x);

    //problem 1 find the sum of n number 
    // function sumOfNNumber($num){
    //     $sum = 0;
    //     for($i=1; $i<=$num; $i++){
    //         $sum += $i;
    //     }
    //     return $sum;
    // }
    // echo sumOfNNumber(5);
    // echo sumOfNNumber(10);

    // function sumOfNNumber($num){
    //     $sum = 0;
    //     for($i=1; $i<=$num; $i++){
    //         $sum += $i;
    //     }
    //     return $sum;
    // }
    // echo sumOfNNumber(5);

    // function nCr($n,$r){
    //     $num = factorial($n) / (factorial($r) * factorial($n-$r));
    //     return $num;
    // }
    // echo nCr(6,3);

    //Number Is Prime Or Not
    // function primeOrNot($num){
    //     $i=2;
    //     while($i<($num-1)){
    //         if($num%$i==0){
    //             return "Non Prime Number";
    //         }else{
    //             $i += $i;
    //         }
    //     }
    //     return "Prime Number";
    // }
    // echo primeOrNot(85);

    //Fibonacci Series
    
    $num=5;

    $n1=0;
    $n2=1;
    $lastValid=$n1;
    while($n2 < $num){
        $newNum = $n1+$n2;
        $n1 = $n2;
        $n2 = $newNum;
        $lastValid=$n1;
    }
    echo $lastValid;
?>