<?php
    // $var = 0;
    // $var = ($var + 5)++;
    // echo $var;
?>
<!-- Parse error: syntax error, unexpected token "++" in C:\xampp\htdocs\dsa\interview.php on line 3 -->

<?php
    // $x = 5;
    // $y = 10;
    // $z = 3;
    // if($x / $y /$z){
    //     print("hi");
    // }else{
    //     echo "hello";
    // }
?>
<!-- hi -->

<?php
    // $a = "1";
    // switch($a){
    //     case 1:
    //         break;
    //         print "hi";
    //     case 2:
    //         print "hello";
    //         break;
    //     default:
    //         print "hi1";
    // }
?>
<!-- No output -->

<?php
    // $x = 5;
    // $y = 10;
    // function test(){
    //     $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
    // }
    // test();
    // echo $y;
?>
<!-- 15 -->

<?php
    // $a = array('x','y');
    // $b = array('r','s');
    // array_push($a,$b);
    // echo count($a);
?>
<!-- array_push 3 -->
<!-- array_merge 2 -->

<?php
    // function staticTest(){
    //     static $data;
    //     $data++;
    //     print "unset before : $data ";
    //     unset($data);
    //     $data = 23;
    //     print "after unset: $data\n";
    // }
    // staticTest();
    // staticTest();
?>
<!-- unset before : 1 after unset: 23 unset before : 2 after unset: 23 -->

<?php
    // $gVar = "rankwatch";
    // update();
    // var_dump($gVar);
    // function update(){
    //     global $gVar;
    //     $gVar .= " pvt ltd";
    //     unset($gVar);
    //     return;
    // }
?>
<!-- string(17) "rankwatch pvt ltd" -->

<?php
    // $inst = &get_my_instance();
    // $inst2 = &get_my_instance();
    // var_dump($inst, $inst2);
    // function get_my_instance(){
    //     static $once;
    //     if(is_null($once)){
    //         return $once;
    //     }
    //     $once = new stdClass();
    //     $once->created = time();
    // }
?>
<!-- 
    Notice: Only variables should be assigned by reference in C:\xampp\htdocs\dsa\interview.php on line 83
    Notice: Only variables should be assigned by reference in C:\xampp\htdocs\dsa\interview.php on line 84
    NULL NULL
-->

<?php
    // $color = "maroon";
    // $var = $color[2];
    // echo "$var";
?>
<!-- r -->

<?php
    // $x = true and false;
    // var_dump($x);
?>
<!-- bool(true) -->

<?php
    // $score = 1234;
    // $scoreboard = (array)$score;
    // echo $scoreboard[0];
?>
<!-- 1234 -->