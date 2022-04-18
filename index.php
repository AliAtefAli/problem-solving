<?php

//use Problem\TwoSum\TwoSum;
//
//$nums = [2,7,11,15];
//$target = 9;
//
//$twoSum = new TwoSum();
//
//die( $twoSum->twoSum($nums, $target));

//use app\User;

use Problem\TwoSum\TwoSum;

require_once 'src/User.php';
require_once 'src/Problems/#001two-sum/TwoSum.php';

//echo "Hello Algorithms";
//$user = new \app\User(18, 'John');
//echo $user->name;

$nums   = [2, 7, 11, 15];
$target = 9;
$class  = new TwoSum();

echo  $class->sumTwoNumbers($nums, $target);